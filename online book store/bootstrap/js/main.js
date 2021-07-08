

function fire(){
    var frame = document.querySelector(".sign-in");
   if(frame.style.visibility =='visible'){
     frame.style.visibility = 'hidden';

   }
 else{frame.style.visibility = 'visible' }   
}


function validate(){
  var result = true; 
  var i=document.getElementsByTagName("input");
  if (i[0].value.length==0){
    alert("PLEASE ENTER YOUR NAME");
    i[0].style.borderBottom= "2px solid Red";
    i[0].focus();
   return result=false;
  }
 // FOR USER NAME   
  if (i[1].value.length==0){
    alert("PLEASE ENTER USERNAME");
    i[1].focus();
   i[1].style.borderBottom= "2px solid Red";
   return result=false;
  }
 // EMAIL 
 if (i[2].value.length==0){
  alert("PLEASE ENTER EMAIL ADDRESS");
  i[2].focus();
  i[2].style.borderBottom= "2px solid Red";
 return result=false;
}
if (i[2].value.length > 0){
  
  let atindex = i[2].value.indexOf("@")
  let dotindex =i[2].value.lastIndexOf('.')
 
 if (atindex< 1 || dotindex > i[2].value.length-2 || (dotindex-atindex) <3 ){
   alert(` THIS ${i[2].value} IS NOT VALID EMAIL ADDRESS` );
   i[2].focus();
   i[2].style.borderBottom= "2px solid Red";
   return result=false;
  } 
 } 
//PHONE 
if (i[3].value.length==0){
  alert("PLEASE ENTER PHONE NUMBER");
  i[3].focus();
 i[3].style.borderBottom= "2px solid Red";
 return result=false;
}
if (i[3].value.length > 10 || i[3].value.length < 10 ){
  alert(`PLEASE ENTER 10 DIGIT PHONE NUMBER,YOU HAVE ENTER ${i[3].value.length} DIGIT `);
   i[3].focus();
  i[3].style.borderBottom= "2px solid Red";
 return result=false;
}

//ADDRESS
if (i[4].value.length==0){
  alert("PLEASE ENTER ADDRESS");
  i[4].focus();
 i[4].style.borderBottom= "2px solid Red";
 return result=false;
 }
//CITY
if (i[5].value.length==0){
    alert("PLEASE ENTER CITY");
    i[5].focus();
   i[5].style.borderBottom= "2px solid Red";
   return result=false;
  }
 //ZIP CODE
 if (i[6].value.length==0){
  alert("PLEASE ENTER ZIP CODE");
  i[6].focus();
 return result=false;
} 
//COUNTRY
if (i[7].value.length==0){
  alert("PLEASE ENTER COUNTRY");
  i[7].focus();
 i[7].style.borderBottom= "2px solid Red";
 return result=false;
}
// GENDER
if (i[8].checked == false && i[9].checked == false ){
  alert("PLEASE CHOOSE YOUR GENDER");
 return result=false;
}
//PASSWORD
if (i[10].value.length==0){
  alert("PLEASE ENTER PASSWORD");
  i[10].focus();
 i[10].style.borderBottom= "2px solid Red";
 return result=false;
}
//RE PASSWORD
if (i[11].value.length==0){
  alert("PLEASE ENTER REPEAT PASSWORD");
  i[11].focus();
 i[11].style.borderBottom= "2px solid Red";
 return result=false;
}

// pass checking 
if (i[10].value != i[11].value) {
  window.alert("\n BOTH PASSWORD MUST BE SAME! ");
  i[11].style.borderBottom= "2px solid Red";
  i[10].style.borderBottom= "2px solid Red";
  return result=false;
}

return result;
}

function logVal(){
  var result = true; 
  var k=document.getElementById("your_name");
  var m=document.getElementById("your_pass");
  if(k.value== 0){
    alert("PLEASE ENTER USERNAME");
    k.focus();
   k.style.borderBottom= "2px solid Red";
   return result=false;
  }
  if(m.value== 0){
    alert("PLEASE ENTER PASSWORD");
    m.focus();
    m.style.borderBottom= "2px solid Red";
   return result=false;
    
  }
  
}