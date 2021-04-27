const form = document.querySelector("#popup2 .signup form"),
continueBtn = form.querySelector(".button input"),
errorText=form.querySelector(".error-text");
form.onsubmit=(e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data=='success'){
                  location.href="users.php";
              }else{
                errorText.content=data;
                errorText.style.display="block";
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}