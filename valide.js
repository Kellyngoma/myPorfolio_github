'user strict'

// const e = require( "express" );


//  recuperation of identity

const userName = document.getElementById("name");
const E_mail = document.getElementById("email");
const passeword = document.getElementById("pwd");
const passeword2 = document.getElementById("pwd2");




const form = document.getElementById("validation").addEventListener("submit",(e)=> {
         e.preventDefault();

         developpement();
         developpementSuccess();
         
});
    const developpement = () =>{
         let myRegex = /^['a-zA-Z']/;

          const userValue = userName.value.trim();
          const emailValue = E_mail.value.trim();
          const valuePwd = passeword .value.trim();
          const valuePwd2 = passeword2.value.trim();
     
       if(userValue == ""){
             const setError = document.getElementById("error");
               setError.innerHTML = "Name is required.";
               setError.style.color ="#ff0000";
            
         }else if(myRegex.test(userValue) == false){
          const setError = document.getElementById("error");
            setError.innerHTML = "Start with a letter.";
            setError.style.color ="#ff0000";
           
      }else {
         let number = userValue.length;
         if(number < 3){
            let setError = document.getElementById("error");
            setError.innerHTML = "The name is too short!";
             setError.style.color = "#ff0000";
             
         }
         
      }
      //else{
     //    const setSuccess = document.getElementById("success");
     //     setSuccess.innerHTML = "votre nom est bien enregistré!";
     //      setSuccess.style.color = "#56c93f";
     //      e.preventDefault();
     // //       const setError = document.getElementById("error");
     // //        setError.innerHTML = "votre nom est trop court!";
     // //         setError.style.color = "#ff0000";
             
     //    }
   

     if(emailValue == "" ){
        const errorTwo = document.getElementById("error_two");
        errorTwo.innerHTML = "Email is required.";
        errorTwo.style.color = "#ff0000";
       
     
     }
   //   else if(!emailValue.match("/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/")){
   //      const errorTwo = document.getElementById("error_two");
   //         errorTwo.innerHTML = "Votre email est trop faible";
   //          errorTwo.style.color ="#ff0000";        

   //   }
     
  

     if (valuePwd == "" ){
        let errorTwo = document.getElementById("error_tree");
        errorTwo.innerHTML = "The password is required.";
         errorTwo.style.color ="#ff0000";

        }else if(myRegex.test(valuePwd) == false ){
           let errorTwo = document.getElementById("error_tree");
            errorTwo.innerHTML = "Your password is weak.";
             errorTwo.style.color ="#ff0000";

        }

     if(valuePwd2 == ""){
        const errorFor = document.getElementById("error_for");
          errorFor.innerHTML = "The confirmation is required.";
           errorFor.style.color = "#ff0000";
        
     }else if (valuePwd2 != valuePwd){
        const errorFor = document.getElementById("error_for");
         errorFor.innerHTML = "refer to your password.";
          errorFor.style.color = "#ff0000"; 
     }

    }
    const developpementSuccess = ()=>{

      const userValue = userName.value.trim();
      const emailValue = E_mail.value.trim();
      const valuePwd = passeword .value.trim();
      const valuePwd2 = passeword2.value.trim();
      
      if(valuePwd2 === valuePwd){
         const Success = document.getElementById("success");
          Success.innerHTML = "Your informations is well saved.";
          Success.style.color = "green";
          controle();
      }
    }
    const controle = ()=>{

        let name = document.getElementById("error").innerText= "";
        let  password = document.getElementById("error_two").innerText= "";
         let email = document.getElementById("error_tree").innerText= "";
         let confirm = document.getElementById("error_for").innerText= "";

    }
    

    

  



   

    
   
      
      

      

         
     
      
     
      



     


    
 
 
  

    
    // //   }
//  function control_email(email){
//     //      * r_hook.4-r@gmail.com
//     //     /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/ puis tester les valeurs avec (test)
//     let string;
//         const emailControl = `/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/`.test(email);
//         return emailControl.test(string(email)).toLoWerCase();
      
//     }





























// "user strict"
// const userName = document.getElementById('name_user');
// const email = document.getElementById('email');
// const password = document.getElementById('password');
// const userConfirm = document.getElementById('confirmation');

// const form = document.getElementById("validation").addEventListener('submit',(e) =>{
//     e.preventDefault();
//     verify_inputs();

// });
// // traitement cas par cas

// function verify_inputs(){
//     const nameValue = userName.value.trim();
//     const emailValue = email.value.trim();
//     const pwdValue = password.value.trim();
//     const confirmValue = userConfirm.value.trim();

//   if(nameValue === ""){
//          let message = "User name ne peut pas etre vide";
//         setError(userName,message);
    
//     }
//  else if (!nameValue.match(/^['a-zA-Z']/)){
//       let message = "Name user doit toujours commencer par une lettre";
//       setError(userName,message);
// }
// else{
//     let number = nameValue.length;
//      if(number < 3){
//         message = "name user doit avoir au moins 3 caractères";
//         setError(userName,message);
//     }
//     else{
//         setSuccess(userName);
//     }
    
// }
// // verification email
// if(emailValue === ""){
//      let message = "Email ne peut pas etre vide";
//  setError(email,message);
// }
// else if(!control_email(emailValue)){
//     let  message = "votre email est invalide";
//     setError(email,message);
// }
// else{
//     setSuccess(email);
// }
// if(pwdValue === ""){
//    let  message = "le mot de passe ne peut pas etre vide";
//     setError(password,message);
// }
// else if(!verifyPwd(pwdValue)){
//     let message = "veuillez completer les restes au moins (8 à 12 caractères)";
//     setError(password,message);
// }
// else
// {
//     setSuccess(password);
// }
// if(confirmValue ===""){
//     let message = "Veuillez confirmer votre mot de passe";
//     setError(userConfirm,message);

// }
// else if (confirmValue !== pwdValue){
//     let message = "la confirmation n'est correspond pas au mot passe d'avant";
//     setError(userConfirm,message);
// }
// else{
//     setSuccess(userConfirm);
// }

// }

// function setError(elem,message){
//     const formControl = elem.parentElement;
//      let small = formControl;
//       // small = document.querySelector("small");
//   // ajout de l'message
//    small.innerText = message;
  

//   if(message){
//     document.getElementById('small').innerHTML = message;
//     return false;
//   }
//     // ajout de la classe error
//     /*formControl.className = "form_control error";   
// }
// function setSuccess(elem){
//     const formControl = elem.parentElement;
//     formControl.className = ".form_control success"
// }

// function control_email(email){
//        * r_hook.4-r@gmail.com
//     /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/ puis tester les valeurs avec (test)
    
//   return "/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/".test(email);
// }
// function verifyPwd(password){
//     // l'expression qui permet de verifier le mot de passe

   
//     return "/^(?.=*[0,9])(?.=*[!@#$%^&*][a-zA-Z0-9!@#$%^&*]){8,12}$/".test(password);
   
// }
    
// /* document.forms['inscription'].addEventListener('submit' , (e)=>{
//      let erreur;
//      let inputs = this;
//     // traitement cas par cas
//             if(inputs[email] != ''){
//                 erreur ='email ne peut pas etre vide';
//             }
//     // traitement generique 
//         for(let i = 0; i < inputs.length; i++){
//             if(!inputs[i].value){
//                 erreur = 'veuillez renseigner tous les champs';
//                 break;
//              }
         
//          }
    
//     if(erreur){
//       e.preventDefault;
//       document.getElementsByClassName('erreur').innerHTML = erreur;
//       return false
//         } alert('le formulaire a été envoyé');
    
//     });














// // "use strict"
// // /* start my validation data with my form*/
// // const userName = document.getElementById('user');
// // const email = document.getElementById('email');
// // const pwd = document.getElementById('password');
// // const pwd2 = document.getElementById('password2');

// // const form = document.getElementById("form").addEventListener("submit", (e) =>{
// //     e.preventDefault();

// //     verifyInputs();
// // });
        
 
// //   const verifyInputs = () =>{
// //         const userValue = userName.value.trim();
// //         const emailValue = email.value.trim();
// //         const pwdValue = pwd.value.trim();
// //         const pwd2Value = pwd2.value.trim();

// //     if(userValue === ""){
// //         setError(userName, 'ce champ ne peut pas etre vide ');
// //     }
// //     else if(!userValue.match(/^['a-zA-Z']/)){
// //         setError(userName, 'le nom doit toujours commencer par une lettre');
// //     }
// //     else{
// //         let competerName = userValue.length;
// //         if(competerName < 3){
// //             setError(userName, 'le nom est trop faible');
// //         }
// //         else{
// //             setSuccess(userName);
// //         }   

// //     }
// //     if(emailValue === ""){ 
// //         setError(email, 'completer ce champ');
// //     }
// //     else if (!valideEmail(emailValue)){
// //         setError(email, 'email invalide ajouter ce qui reste');
// //     }
// //     else{
// //         setSuccess(email);
// //     }
// //     if(pwdValue === ""){
// //          setError(pwd, 'le mot de passe ne peut pas etre vide');  
// //     }
// //     else if(!validePwd  (pwdValue)){
// //         setError(pwd, 'le mot de passe ne correspond pas')
// //     }
// //     else if(pwdValue.length < 8){
// //         setError(pwd, 'le mot de passe doit avoir au moins 8 caractères');
// //     }
// //     else{
// //         setSuccess(pwd);
// //     }
// //     if(pwd2Value === ""){
// //         setError(pwd2, 'veuillez ensigez ce champ');
// //     }
// //     else if(pwd2Value != pwdValue){
// //         setError(pwd2, 'la confirmation ne pas valide');
// //     }
// //     else{
// //         setSuccess(pwd2);
// //     }


// //   }

// //   const setError = (element,message) =>{
// //       const inputControl = element.parentElement;
// //       const errorDisplay = inputControl.childNodes[3];

// //       errorDisplay.innerText = message;
// //       inputControl.style.color == "#ff3860";

// //   }

// //    function setSuccess(element){
// //     const inputControl = element.parentElement;
// //     const errorDisplay = inputControl.childNodes[3];
   

// //     errorDisplay.innerText = '';
// //     inputControl.style.color == "#09c372";
// // }
// // function valideEmail(email){
// //     const accessEmail = "/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/".test;
// //     // return accessEmail = email.toLowerCase();
// // }
// // const validePwd = (pwd) =>{
// //     const accessPwd = "/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/".test;
// //     return accessPwd == (pwd);
// //     // const accessPwd = "/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/";
// //     // return accessPwd.test(string(pwd).toLowerCase());
// // }
























































