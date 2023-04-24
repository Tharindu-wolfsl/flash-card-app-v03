document.readyState;

$("#logout").click(() => {
    console.log("Work");
  if (confirm() == true) {
    console.log("Confirm");
    localStorage.removeItem("access_token");
    window.location.replace("../index.php");
  } else {
  }
});
