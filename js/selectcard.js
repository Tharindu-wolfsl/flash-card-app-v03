class SelectCard {
  constructor(access_token, errorTemplate) {
    this.access_token = access_token;
    this.errorTemplate = errorTemplate;
  }
  async getSubjects() {
    console.log("Work well");
    await axios
      .get("http://fca.systemiial.com/api/view-profile", {
        params: {
          token: this.access_token,
        },
      })
      .then((response) => {
        let subjects = [];
        let template = ``;
        let card_section = document.querySelector(".cards-set");
        subjects = response.data.data.subjects;
        if (subjects.length == 0) {
          $(".cards-set").append(this.errorTemplate);
        } else {
          subjects.forEach((subject) => {
            if (subject.registered == "0") {
              template = `<div class="s-card col-lg-4 col-md-6 col-sm-12 d-flex ">
            <div class="subject-card col mx-auto"><span class="card-header  rotate">${subject.name}</span>
                <div class="card-content d-flex">
                    <a href="./quection.php?id=${subject.id}&type=subject" class="btn view play">Play Deck</a>
                    <span class="subject-vl"></span>
                    <button onClick="getModuleBySubject(${subject.id})" class="btn view">View Sub Deck</button>
                </div></div>    
            </div>`;
              $(".cards-set").append(template);
            }
          });
        }
      });
  }

  async getModuleBySubjects(sub_id){
    let modules = [];
    await axios.get(`http://fca.systemiial.com/api/get-modules-by-subject`, {
        params: {
            token: this.access_token,
            id: sub_id
        }
    }).then(response => {
        if (response.data.data) {
            let modules = [];
            let template = ``;
            let card_section = document.querySelector('.cards-set');

            modules = response.data.data;
            $('.s-card').remove();
            if (modules.length == 0) {
                $('.cards-set').append(this.errorTemplate);
            } else {
                modules.forEach(module => {
                    template = `<div class="s-card col-lg-4 col-md-6 col-sm-12 d-flex ">
        <div class="subject-card col mx-auto"><span class="card-header  rotate">${module.name}</span>
            <div class="card-content d-flex">
            <a href="./quection.php?id=${module.id}&type=module" class="btn view play">Play Deck</a>
                <span class="subject-vl"></span>
                <button class="btn view" onClick="getTopicsByModule(${module.id})">View Sub Deck</button>
            </div></div>    
        </div>`;
                    $('.cards-set').append(template);
                })
            }

        }

    })
  }
  async getTopicsByModules(module_id) {
    let modules = [];
    await axios.get(`http://fca.systemiial.com/api/get-topics-by-module`, {
        params: {
            token: this.access_token,
            id: module_id
        }
    }).then(response => {
        if (response.data.data) {
            let topics = [];
            let template = ``;
            let card_section = document.querySelector('.cards-set');

            modules = response.data.data;
            $('.s-card').remove();
            if (modules.length == 0) {
                $('.cards-set').append(this.errorTemplate);
            } else {
                modules.forEach(module => {
                    template = `<div class="s-card col-lg-4 col-md-6 col-sm-12 d-flex ">
        <div class="subject-card col mx-auto"><span class="card-header rotate">${module.name}</span>
            <div class="card-content d-flex">
            <a href="./quection.php?id=${module.id}&type=topic" class="btn view play">Play Deck</a>
            </div></div>    
        </div>`;
                    $('.cards-set').append(template);
                })
            }
        }
    })
  }
}
