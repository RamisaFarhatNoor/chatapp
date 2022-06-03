const form=document.querySelector(".signup form"),
continueBtn=form.querySelector(".button input");
errorText=form.querySelector(".err-txt");


onsubmit=(e)=>{
    e.preventDefault();

}

continueBtn.onclick =()=>{  //Creating XML object
    //AJax
    let xhr=new XMLHttpRequest();
    xhr.open("POST","./signup.php",true);
    xhr.onload=()=>{
        if(xhr.readyState===XMLHttpRequest.DONE){
            if(xhr.status==200){
            let data= xhr.response;
            if(data == "success"){
                console.log("Users");
                location.href= "users.php";
            }else{
                console.log("Error");
            }
            console.log(data);
        }
     }
    }
    // sending form data from AJAX to PHP
    let formdata=new FormData(form);
    xhr.send(formdata); //sending to php
}