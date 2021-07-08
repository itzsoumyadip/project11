<?php
	session_start();
	require_once "./functions/database_functions.php";
	$conn = db_connect();

   if(isset($_POST['signup'])||isset( $_POST['signin']) ){
     $count=0;  //up
     $counts=0;   //in
    if(isset($_POST['signup'])){
        $count=1;
        $counts=0;
       }
       else if(isset($_POST['signin']) ) {$count=0;
        $counts=1;  }
   }

?>

<?php
  
   
 if($count){
    $name =$_POST['name'];
    $usN  =strtolower( $_POST['username']);
    $em   =$_POST['email'];
    $ph   =$_POST['ph']; //NOT STRING
    $add  =$_POST['adddress'];
    $ct   =$_POST['city'];
    $zp   =$_POST['zipcode'];  //NOT STRING
    $cnt  =$_POST['country'];
    $gn   =strtolower($_POST['gn']);
    $passw =strip_tags($_POST['pass']);
    $rpassw=strip_tags($_POST['re_pass']);




      if($usN){
          $userval="SELECT user_name FROM  customers WHERE user_name = '$usN'";
           $uservalResult = $conn->query($userval);
           $check=$uservalResult->num_rows;
          if($check !=0){
              die("THIS USERNAME IS ALREADY IS TAKEN ,CHOOSE ANOTHER");
          } 
      }
               
   
   
    if($name && $usN && $em && $ph && $passw && $rpassw)
    {  
        if($passw==$rpassw){ 
            
           if(strlen($passw) > 25 || strlen($rpassw)<6 )
              die("Password must be between 6 and 25 characters");
      //encropted password
            $pass = md5($passw);
            $rpass = md5($rpassw);  
         
         }   
  
     $query="INSERT INTO customers VALUES('','$name','$usN','$em',$ph,'$add','$ct',$zp,'$cnt','$gn','$pass')";
     $conn->query($query) or die("no data enter"); 
     die("YOU have been registered!! <a href='registration.html'> LOGI IN NOW  </a>");

//(customerid,name,user_name,email,ph,address,city,zip_code,country,gender,PASS)
 }
}
 



//for in
 /// not initialize yeat 


if($counts){
 
    $usn=strtolower($_POST['user_name']);
    $passwa=strip_tags($_POST['your_pass']);
    if($usn && $passwa){
        
          $passwords=md5($passwa);
          $in="SELECT user_name,PASS FROM  customers WHERE user_name = '$usn' && PASS='$passwords'";
          $inResult = $conn->query($in);
          if($inResult->num_rows >0){
              
              while($singleRow=$inResult->fetch_assoc()){
                  $usernameDB=$singleRow['user_name'];
                  $passwordDB=$singleRow['PASS'];
                  
              } 
            } else{
               die("your username is haven't been registered! with our database TRY AGAIN! <a href=\"registration.html\">CLICK HERE </a>");
            }
            
            
            if($usn==$usernameDB && $passwords==$passwordDB){
                echo "you are in ";
                $_SESSION['USERNAME']=$usernameDB;
                 header('Location:index.php');  
              }
            

          }else{ die("TRY AGAIN <a href=\"registration.html\">CLICK HER </a> " );}
           //<a href="registration.html">CLICK HER </a> to Try again"       

   }//






?>