const verificationAge = document.querySelector('#btn');
verificationAge.addEventListener('input', (e)=>{
 
    if (e.target.value.length < 2 ){
         return verificationAge.style.bordercolor = 'bookmark-purple';
    }
    else{
         return verificationAge.style.bordercolor = 'bookmark-blue';
    }
    
});
