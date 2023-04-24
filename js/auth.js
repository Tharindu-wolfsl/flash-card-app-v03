$(document).ready(function() {
// $(window).on('load', function() {
  let user = {
    name: '',
    email: '',
    subjects: []
  };
  const token = JSON.parse(localStorage.getItem('access_token'));
  axios.get('http://fca.systemiial.com/api/view-profile', {
    params: {
      token: token
    }
  }).then(res => {
    console.log(res.data);
    let data = res.data;
    if(res.data && res.data.success){
        user.name = data.data.name;
    user.email = data.data.email;
    user.subjects = data.data.subjects;
    console.log(" user.subjects", user.subjects);
    $('.contact-details  #card-name').append(user.name);
    $('.contact-details  #card-email').append(user.email);

    user.subjects.forEach(subject=>{
      let template = `<span class="subject border-radius-2">${subject.name}</span`
      $('.contact-details  #card-subject').append(template);

    })
    }else{
        console.log("Authentication failed");
        window.location.replace('index.php');
    }
   
    // $('#name').contents =  user.name;
  })
  
  console.log("window loaded");
});
//   })
