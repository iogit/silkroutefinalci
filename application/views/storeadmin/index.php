<?php 

if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION["manager"])){
	
redirect("master");

exit();	
	}
		
		$managerID=preg_replace('#[^0-9]#i',"",$_SESSION["id"]);
	    $manager=preg_replace('#[^A-Za-z0-9]#i',"",$_SESSION["manager"]);
	    $password=preg_replace('#[^A-Za-z0-9]#i',"",$_SESSION["password"]);
	
	
	//include "../storescripts/connect_to_mysql.php";
	
	$sql=$this->db->query("SELECT * FROM io_admin WHERE admn_id='$managerID' AND admn_usrName='$manager' AND admn_psswrd='$password' LIMIT 1");
	
	
	$existCount=$sql->num_rows();
	
	if($existCount==0){
	//redirect("site/intro");
	echo "Your session couldnt be successfull !";
	exit();
	}
	
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel </title>


<link rel="stylesheet" type="text/css" media="screen" href="../style/style.css">
</head>

<body>

<div align="center" id="mainWrapper">
<?php header("Location:inventory");  ?>

</div>
</body>
</html>