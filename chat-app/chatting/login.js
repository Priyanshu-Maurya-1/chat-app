const form1 = document.querySelector("#popup1 .login form"),
continueBtn1 = form1.querySelector(".button input"),
errorText1=form1.querySelector(".error-text");
form1.onsubmit=(e)=>{
    e.preventDefault();
}

continueBtn1.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data1 = xhr.response;
              if(data1=='success'){
                  location.href="users.php";
              }else{
                errorText1.style.display="block";
                errorText1.textContent =data1;
              }
          }
      }
    }
    let formData = new FormData(form1);
    xhr.send(formData);
}
