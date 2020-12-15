// window.onload =()=>{


//     let contactUs = document.getElementById('contactUsButton');
//     const sendForm = (e)=>{
//         e.preventDefault();
//         let name = document.getElementById("name").value;
//         let email = document.getElementById("email").value;
//         let subject = document.getElementById("subject").value;
//         let message = document.getElementById("message").value;

//         let fdata = new FormData();

//         fdata.append('name','name');
//         fdata.append('email','email');
//         fdata.append('subject','subject');
//         fdata.append('message','message');
        
//         fetch("../helpers/contactUs.php",
//         {
//             headers: {
//               'Accept': 'application/json',
//               'Content-Type': 'application/json'
//             },
//             method: "POST",
//             mode: 'no-cors',
//             body: fdata
//         })
//         .then(res=>res.json())
//         .then(data=>{
//             console.log(data);
//         })
//         .catch(err=>{
//             console.log(err);
//         });
       
//     };
//     contactUs.addEventListener('click',sendForm);


// }
$(document).ready(function() {
    $("#contactUsButton").click(function(e) {
    e.preventDefault();
    let button = document.getElementById('contactUsButton');
   

    var name = $("#name").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var message = $("#message").val();
    console.log(email);
    console.log(name);
    console.log(message);
    console.log(subject);
    
    if(name==''||email==''||subject==''||message=='') {
    alert("Please fill all fields.");
    return false;
    }
    button.className ="spinner-border p-1";
    button.innerHTML ="";
    
    $.ajax({
    type: "POST",
    url: "./helpers/contactUs.php",
    data: {
    name: name,
    email: email,
    subject: subject,
    message: message
    },
    cache: false,
    success: function(dat) {
        let response= JSON.parse(dat)
        
   let alertDiv = document.getElementById('alertDiv');
   let contactForm = document.getElementById('contactForm');
   let alertMesage = document.getElementById('alertmessage');
   alertDiv.className ="btn btn-danger";
   let button = document.getElementById('contactUsButton');
    button.className ="btn btn-primary";
    button.innerHTML ="Submit";
    alertMesage.innerHTML = response.message;
   alertDiv.className ="d-block"
   contactForm.reset();
    },
    error: function(xhr, status, error) {
    console.error(xhr);
    }
    });
    
    });
    
    });