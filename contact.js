function contain_number(str){
    return /[0-9]/.test(str);
  }
  function contain_characters(str){
    return /[a-zA-Z]/.test(str);
    }
  function contains_alt(str){
    return str.includes('@');
  }
  
  function validateform() {
   
    var numro = 1;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var error = document.getElementById("error");
    var error1 = document.getElementById("error1");
    var error2 = document.getElementById("error2");
    var error3 = document.getElementById("error3");
  
    if (contain_number(name)) {
      error.style.display = "block";
      name = "";
      numro = 0;
      return false;
    } else {
      error.style.display = "none";
      numro = 1;
    }
  
    if (!email.includes("@")) {
      error1.style.display = "block";
      email = "";
      numro = 0;
    } else {
      error1.style.display = "none";
      numro = 1;
    }
  
    if (contain_characters(phone)) {
      error2.style.display = "block";
      phone = "";
      numro = 0;
      return false;
    } else {
      error2.style.display = "none";
      numro = 1;
    }
  
    if (phone.length !== 8) {
      error3.style.display = "block";
      phone = "";
      numro = 0;
      return false;
    } else {
      error3.style.display = "none";
      numro = 1;
    }
    if (numro == 0) {
      preventDefault();
      return false;
    }
  
    window.location.href = "waiting.html";
    return true;
   
  }

  