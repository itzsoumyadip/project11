function fire(){
    let frame = document.querySelector("iframe");
   if(frame.style.visibility == 'visible'){
     frame.style.visibility = 'hidden';

   }
 else{frame.style.visibility = 'visible' }   
}
