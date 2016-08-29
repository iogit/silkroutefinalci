 <?php 
 // you have to open the session to be able to modify or remove it 
 session_start(); 
 
 // to change a variable, just overwrite it 
 $_SESSION['manager']=''; 
 $_SESSION['id']=''; 
 $_SESSION['password']=''; 
 
 //you can remove a single variable in the session 
 unset($_SESSION['manager']); 
 
 // or this would remove all the variables in the session, but not the session itself 
 session_unset(); 
 
 // this would destroy the session variables 
 session_destroy();
redirect("master");
 
 ?> 