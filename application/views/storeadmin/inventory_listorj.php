<?php  //just be sure this session is for admin
session_start();
if(!isset($_SESSION["manager"])){
	
redirect("ioc/master");

exit();	
	}
		
		$managerID=preg_replace('#[^0-9]#i',"",$_SESSION["id"]);
	    $manager=preg_replace('#[^A-Za-z0-9]#i',"",$_SESSION["manager"]);
	    $password=preg_replace('#[^A-Za-z0-9]#i',"",$_SESSION["password"]);
	
	
	//include "../storescripts/connect_to_mysql.php";
	
	$sql=mysql_query("SELECT * FROM io_admin WHERE admn_id='$managerID' AND admn_usrName='$manager' AND admn_psswrd='$password' LIMIT 1");
	
	
	$existCount=mysql_num_rows($sql);
	
	if($existCount==0){
	//header("location:../index.php");
	echo "Your session couldnt be successfull !";
	exit();
	}
	
?>
<?php 
//error reporting
error_reporting(E_ALL);
ini_set('display_errors','1');

?>

<?php 
//delete item question to admin 
$url=base_url();
if(isset($_GET['deleteid'])){

$message='<SCRIPT language="JavaScript">

{
    var hi= confirm("Bu Siparisi Gercekten Silmek Istiyormusun  ?");
    if (hi== true){
       window.location.href ="'.$url.'ioc/inventory?yesdelete='.$_GET['deleteid'].'";
    }else{
        window.location.href ="'.$url.'ioc/inventory";
    }
}
 </SCRIPT>';
/*$message=''.$_GET['deleteid'].' Numarali Urunu Gercekten Silmek Istiyormusun ? <a href="'.$url.'ioc/inventory?yesdelete='.$_GET['deleteid'].'">Yes</a>|<a href="'.$url.'ioc/inventory">No</a>';*/

echo $message;

exit();

}
if(isset($_GET['yesdelete'])){
//remove item form system and delete its picture
//delete from database first
$id_to_delete=$_GET['yesdelete'];
$sql=mysql_query("DELETE FROM io_order where ioOrder_id='$id_to_delete' LIMIT 1") or die(mysql_error);
/*
//unlink the picture
$pictodelete=("images/product_images/$id_to_delete.jpg");
if(file_exists($pictodelete)){
	
	unlink($pictodelete);
	}
*/
  redirect("ioc/inventory");
exit();

}



?>


<?php 
//delete item question to admin 
$url=base_url();
if(isset($_GET['callId'])){

$message='<SCRIPT language="JavaScript">

{
    var hi= confirm("Bu Aramayi Gercekten Silmek Istiyormusun  ?");
    if (hi== true){
       window.location.href ="'.$url.'ioc/inventory?calldelete='.$_GET['callId'].'";
    }else{
        window.location.href ="'.$url.'ioc/inventory";
    }
}
 </SCRIPT>';
/*$message=''.$_GET['deleteid'].' Numarali Urunu Gercekten Silmek Istiyormusun ? <a href="'.$url.'ioc/inventory?yesdelete='.$_GET['deleteid'].'">Yes</a>|<a href="'.$url.'ioc/inventory">No</a>';*/

echo $message;

exit();

}
if(isset($_GET['calldelete'])){
//remove item form system and delete its picture
//delete from database first
$callid_to_delete=$_GET['calldelete'];
$sql=mysql_query("DELETE FROM io_call where ioCall_id='$callid_to_delete' LIMIT 1") or die(mysql_error);
/*
//unlink the picture
$pictodelete=("images/product_images/$id_to_delete.jpg");
if(file_exists($pictodelete)){
	
	unlink($pictodelete);
	}
*/
  redirect("ioc/inventory");
exit();

}



?>




<?php 
//delete item question to admin 
$url=base_url();
if(isset($_GET['commentDeleteid'])){

$message='<SCRIPT language="JavaScript">

{
    var hi= confirm("Bu Yorumu Gercekten Silmek Istiyormusun  ?");
    if (hi== true){
       window.location.href ="'.$url.'ioc/inventory?commentYesDelete='.$_GET['commentDeleteid'].'";
    }else{
        window.location.href ="'.$url.'ioc/inventory";
    }
}
 </SCRIPT>';
/*$message=''.$_GET['deleteid'].' Numarali Urunu Gercekten Silmek Istiyormusun ? <a href="'.$url.'ioc/inventory?yesdelete='.$_GET['deleteid'].'">Yes</a>|<a href="'.$url.'ioc/inventory">No</a>';*/

echo $message;

exit();

}
if(isset($_GET['commentYesDelete'])){
//remove item form system and delete its picture
//delete from database first
$id_to_delete2=$_GET['commentYesDelete'];
$sql=mysql_query("DELETE FROM io_comment where ioComment_id='$id_to_delete2' LIMIT 1") or die(mysql_error);
/*
//unlink the picture
$pictodelete=("images/product_images/$id_to_delete.jpg");
if(file_exists($pictodelete)){
	
	unlink($pictodelete);
	}
*/
  redirect("ioc/inventory");
exit();

}



?>



<?php 
//parse the from data and add inventory item to the system



if(isset($_POST['product_name'])){
	$product_name=mysql_real_escape_string($_POST['product_name']);
	$shortDesc=mysql_real_escape_string($_POST['textarea1']);
	$longDesc=mysql_real_escape_string($_POST['textarea2']);
	$unitPrice=mysql_real_escape_string($_POST['unitPrice']);
	$discount=mysql_real_escape_string($_POST['discount']);
	$discount_available=mysql_real_escape_string($_POST['campaign']);
	$shipping=mysql_real_escape_string($_POST['shipping']);
	$units_inStock=mysql_real_escape_string($_POST['unitStock']);
	
	$category=mysql_real_escape_string($_POST['category']);
	$brand=mysql_real_escape_string($_POST['brand']);
	

	$brndsql=mysql_query("SELECT brnd_id FROM brnd_tbl WHERE brnd_name='$brand' LIMIT 1");
	
		
		$brndCount=mysql_num_rows($brndsql);
		
		
		if($brndCount==1){
         $row=mysql_fetch_array($brndsql);
        
		
			$brnd_id=$row["brnd_id"];
			

		}else{
		echo 'Sorry an error occurred Error: X090x106ILP, <a href="'.$url.'inventory">   Click here </a>';
		exit();
			}
			
	$ctgrysql=mysql_query("SELECT ctgry_id FROM ctgrs_tbl WHERE ctgry_name='$category' LIMIT 1");
    $ctgryCount=mysql_num_rows($ctgrysql);
	
	if($ctgryCount==1){
	 $row=mysql_fetch_array($ctgrysql);
	  $ctgry_id=$row["ctgry_id"];
	}else{
	
	echo 'Sorry an error occurred Error: X108x118ILP, <a href="'.$url.'inventory">   Click here </a>';
		exit();
	}
	
	//see if that product name is an identical match to another product in the system
	
	
	$sql=mysql_query("SELECT prdct_id FROM prdct_tbl WHERE prdct_name='$product_name' LIMIT 1");
	
	$productMatch=mysql_num_rows($sql); //count the output amount
	$url=base_url();
	if($productMatch>0)
	{
		echo 'Sorry you tried to place a duplicate "Product Name" into the system, <a href="'.$url.'inventory"> Click here </a>';
		exit();
		}
		
		
	if($units_inStock==0){
	
	$prdct_available="no";
	}else{
	$prdct_available="yes";
	
	}
		
	
	//add this product into the database

	$sql=mysql_query("INSERT INTO prdcts_tbl (prdct_name, ctgry_id, brnd_id, prdct_shortDesc, prdct_longDesc , prdct_unitPrice, prdct_discount, prdct_available, units_inStock, dscnt_available, prdct_shipping, prdct_addDate) VALUES('$product_name','$ctgry_id','$brnd_id','$shortDesc','$longDesc','$unitPrice','$discount','$prdct_available','$units_inStock','$discount_available', '$shipping', now())") or die(mysql_error());
	
	$pid=mysql_insert_id();
	$url=base_url();
	//place image in the folder
	$newname="$pid.jpg";
	move_uploaded_file($_FILES['fileField']['tmp_name'],"images/product_images/$newname");
    redirect("site/inventory"); //to prevent to sending same data to database when the page refreshed.
	
	exit();
}

?>


<?php
//this block grabs the whole list for viewing
if($product_list==""){
$sql=mysql_query("SELECT * FROM io_order ORDER BY ioOrder_date DESC");  //or ASC
$productCount=mysql_num_rows($sql); //count output amount
$url=base_url();
if($productCount>0)
{

	while($row=mysql_fetch_array($sql))
	{
	
	$ioOrder_id=$row["ioOrder_id"];
	$ioOrder_name=$row["ioOrder_name"];
	$ioOrder_phone=$row["ioOrder_phone"];
	$ioOrder_email=$row["ioOrder_email"];
	$ioOrder_product=$row["ioOrder_product"];
	$ioOrder_address=$row["ioOrder_address"];
	$ioOrder_district=$row["ioOrder_district"];
	$ioOrder_city=$row["ioOrder_city"];
	$ioOrder_status=$row["ioOrder_status"];
	$ioOrder_date=$row["ioOrder_date"];
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	
	if($ioOrder_status==0)
	{	$color="red";
	    $ioOrder_statusx="Beklemede";
	}else
	{	$color="";
	  $ioOrder_statusx="Gönderildi";
	}

	$product_list.='<tr>';
	$product_list.="<td bgcolor='#FFFFFF'><div  style='width: 100px; color:$color; height:75px; overflow: auto; padding:4px;'>$ioOrder_name</div>  </td>"; 
	$product_list.="<td bgcolor='#d7e0ec'><div  style='width: 100px; color:$color; height:75px; overflow: auto; padding:4px;'>$ioOrder_phone</div></td>"; 
    $product_list.="<td bgcolor='#FFFFFF'><div style='width: 100px; color:$color; height:75px; overflow: auto; padding:4px;'>$ioOrder_email</div></td>";
	//$product_list.="<td bgcolor='#d7e0ec'>$ctgry_id</td>"; 
	
	//$product_list.="<td bgcolor='#FFFFFF'>$brnd_id</td>";
	$product_list.="<td bgcolor='#d7e0ec'><div style='width: 80px;  color:$color; height:75px; overflow: auto; padding:4px;'>$ioOrder_product</div></td>";
	
	$product_list.="
<td bgcolor='#FFFFFF'><div style='width: 150px; height:75px; color:$color;  overflow: auto; padding:4px;'>$ioOrder_address</div></td>";
	$product_list.="<td bgcolor='#d7e0ec'><div style='width: 80px; color:$color;  height:75px; overflow: auto; padding:4px;'>$ioOrder_district</div> </td>";
	$product_list.="<td bgcolor='#FFFFFF'><div style='width: 50px; color:$color;  height:75px; overflow: auto; padding:4px;'>$ioOrder_city</div></td> ";
	$product_list.="<td bgcolor='#d7e0ec'><div style='width: 50px; color:$color;  height:75px; overflow: auto; padding:4px;'>$ioOrder_statusx</div></td>";
	$product_list.="<td bgcolor='#FFFFFF'><div style='width: 80px; color:$color;  height:75px; overflow: auto; padding:4px;'>$ioOrder_date</div></td>";
	
	
	
	$product_list.="<td bgcolor='#FFFFFF'> <div id='admin_edit'><a href='".$url."ioc/orderOk?pid=$ioOrder_id'>Gönderildi</a> 
	<a href='".$url."ioc/orderNo?pid=$ioOrder_id'>Beklemeye Al</a>
	</a>&nbsp; <div id='admin_delete'><a href='".$url."ioc/inventory?deleteid=$ioOrder_id'>Sil</a></div><br/></td>";
$product_list.='<tr>';
	}
	
	
	
	
		
	}else
	
	{
	$product_list="Listelenecek Sipariş Bulunmamaktadır";	
		
		}

}
?>





<?php
//this block grabs the whole list for viewing
$comment_list="";
if($comment_list==""){
$sql=mysql_query("SELECT * FROM io_comment ORDER BY ioComment_date DESC");  //or ASC
$productCount=mysql_num_rows($sql); //count output amount
$url=base_url();
if($productCount>0)
{

	while($row=mysql_fetch_array($sql))
	{
	
	$ioComment_id=$row["ioComment_id"];
	$ioComment_name=$row["ioComment_name"];
	$ioComment_email=$row["ioComment_email"];
	$ioComment_title=$row["ioComment_title"];
	$ioComment_comment=$row["ioComment_comment"];
	$ioComment_answer=$row["ioComment_answer"];
	$ioComment_date=$row["ioComment_date"];
	$ioComment_post=$row["ioComment_post"];
	
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	
	if($ioComment_post==0)
	{	$color="red";
	    $ioComment_statusx="Beklemede";
	}else
	{	$color="";
	  $ioComment_statusx="Yayinda";
	}

	$comment_list.='<tr>';
	$comment_list.="<td bgcolor='#FFFFFF'><div  style='width: 100px; color:$color; height:75px; overflow: auto; padding:4px;'>$ioComment_name</div>  </td>"; 
	$comment_list.="<td bgcolor='#d7e0ec'><div  style='width: 100px; color:$color; height:75px; overflow: auto; padding:4px;'>$ioComment_email</div></td>"; 
    $comment_list.="<td bgcolor='#FFFFFF'><div style='width: 100px; color:$color; height:75px; overflow: auto; padding:4px;'>$ioComment_title</div></td>";
	//$comment_list.="<td bgcolor='#d7e0ec'>$ctgry_id</td>"; 
	
	//$comment_list.="<td bgcolor='#FFFFFF'>$brnd_id</td>";
	$comment_list.="<td bgcolor='#d7e0ec'><div style='width: 280px;  color:$color; height:75px; overflow: auto; padding:4px;'>$ioComment_comment</div></td>";
	
	$comment_list.="
<td bgcolor='#FFFFFF'><div style='width: 150px; height:75px; color:$color;  overflow: auto; padding:4px;'>$ioComment_answer</div></td>";
	$comment_list.="<td bgcolor='#d7e0ec'><div style='width: 80px; color:$color;  height:75px; overflow: auto; padding:4px;'>$ioComment_date</div> </td>";
	$comment_list.="<td bgcolor='#FFFFFF'><div style='width: 50px; color:$color;  height:75px; overflow: auto; padding:4px;'>$ioComment_statusx</div></td> ";
	

	
	
	
	$comment_list.="<td bgcolor='#FFFFFF'>
	<div style='width: 100px;' id='admin_edit'>
	<a href='".$url."ioc/commentOk?pid=$ioComment_id'>Yayınla</a> </br>
	<a href='".$url."ioc/commentNo?pid=$ioComment_id'>Yayından Kaldır</a></br>
	<a href='".$url."ioc/commentAnswer?pid=$ioComment_id'>Yorumu Cevapla</a></br>
	</a>&nbsp; <div id='admin_delete'><a href='".$url."ioc/inventory?commentDeleteid=$ioComment_id'>Sil</a></div><br/></td>";
$comment_list.='<tr>';
	}
	
	
	
	
		
	}else
	
	{
	$comment_list="Listelenecek Yorum Bulunmamaktadır";	
		
		}

}
?>

<?php
//this block grabs the whole list for viewing
$call_list="";
if($call_list==""){
$sql=mysql_query("SELECT * FROM io_call ORDER BY ioCall_date DESC");  //or ASC
$productCount=mysql_num_rows($sql); //count output amount
$url=base_url();
if($productCount>0)
{

	while($row=mysql_fetch_array($sql))
	{
	
	$ioCall_id=$row["ioCall_id"];
	$ioCall_name=$row["ioCall_name"];
	$ioCall_phone=$row["ioCall_phone"];
	$ioCall_status=$row["ioCall_status"];
	
	
	$ioCall_date=$row["ioCall_date"];

	
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	
	if($ioCall_status==0)
	{	$color="red";
	    $ioCall_statusx="Beklemede";
	}else
	{	$color="";
	  $ioCall_statusx="Arandı";
	}

	$call_list.='<tr>';
	$call_list.="<td bgcolor='#FFFFFF'><div  style='width: 440px; color:$color; height:75px; overflow: auto; padding:4px;'>$ioCall_name</div>  </td>"; 

   
	//$call_list.="<td bgcolor='#d7e0ec'>$ctgry_id</td>"; 
	
	//$call_list.="<td bgcolor='#FFFFFF'>$brnd_id</td>";
	$call_list.="<td bgcolor='#d7e0ec'><div style='width: 180px;  color:$color; height:75px; overflow: auto; padding:4px;'>$ioCall_phone</div></td>";
	
	
	$call_list.="<td bgcolor='#d7e0ec'><div style='width: 180px; color:$color;  height:75px; overflow: auto; padding:4px;'>$ioCall_date</div> </td>";
	$call_list.="<td bgcolor='#FFFFFF'><div style='width: 50px; color:$color;  height:75px; overflow: auto; padding:4px;'>$ioCall_statusx</div></td> ";
	

	
	
	
	$call_list.="<td bgcolor='#FFFFFF'>
	<div style='width: 100px;' id='admin_edit'>
	<a href='".$url."ioc/callOk?cid=$ioCall_id'>Arandı</a> </br>
	<a href='".$url."ioc/callNo?cid=$ioCall_id'>Aranmadı</a></br>
	
	</a>&nbsp; <div id='admin_delete'><a href='".$url."ioc/inventory?callId=$ioCall_id'>Sil</a></div><br/></td>";
$call_list.='<tr>';
	}
	
	
	
	
		
	}else
	
	{
	$call_list="Listelenecek Arama Bulunmamaktadır";	
		
		}

}
?>





<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->        
    
    <title>Yonetici Paneli</title>
    
    <link href="<?php echo base_url();?>style/adm/login/stylesheetsx.css" rel="stylesheet" type="text/css" />      
    <!--[if lt IE 10]>
        <link href="css/ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->        
    <link rel="icon" type="image/ico" href="favicon.ico"/>
      
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/jquery/jquery-1.8.3.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/jquery/jquery-ui-1.9.1.custom.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/other/excanvas.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/other/jquery.mousewheel.min.js'></script>
        
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/bootstrap/bootstrap.min.js'></script>            
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/cookies/jquery.cookies.2.2.0.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/highcharts/highcharts.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/highcharts/modules/exporting.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/epiechart/jquery.easy-pie-chart.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/sparklines/jquery.sparkline.min.js'></script>    
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/pnotify/jquery.pnotify.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/fullcalendar/fullcalendar.min.js'></script>        
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/datatables/jquery.dataTables.min.js'></script>    
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/wookmark/jquery.wookmark.js'></script>        
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/jbreadcrumb/jquery.jBreadCrumb.1.1.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    
    <script type='text/javascript' src="<?php echo base_url();?>scripts/adm/login/plugins/uniform/jquery.uniform.min.js"></script>
    <script type='text/javascript' src="<?php echo base_url();?>scripts/adm/login/plugins/select/select2.min.js"></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/tagsinput/jquery.tagsinput.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/multiselect/jquery.multi-select.min.js'></script>    
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/validationEngine/languages/jquery.validationEngine-en.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/validationEngine/jquery.validationEngine.js'></script>        
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/stepywizard/jquery.stepy.js'></script>
        
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/animatedprogressbar/animated_progressbar.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/hoverintent/jquery.hoverIntent.minified.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/media/mediaelement-and-player.min.js'></script>    
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/cleditor/jquery.cleditor.js'></script>

    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins/shbrush/shBrushCss.js'></script>    
        
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/plugins.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/charts.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/adm/login/actions.js'></script>
    <style>
	#admin_edit{
	
	width:70px;
	}
	#admin_editx{
	
	width:100%;
	text-align:right;
	margin-left:-50px;
	position:absolute;
	margin-top:10px;
	}
	
	#empty
	{
	height:100px;
	
	}
	.newProductTitlex
	{text-align:left;}
     
	</style>
</head>
<body>

    <div class="header">
        <a href="index.html" class="logo centralize"></a>
    </div>    
    
    <div class="login" id="login">
        <div class="wrap">
            <!--*****************************************************************************************************-->
	



			
			
			
	    <!--*****************************************************************************************************-->		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		<h1><div id="admin_editx"><a href="<?php echo base_url();?>ioc/killAdmin">KAPAT</a></div></h1>
			
			<h1>Yönetici Paneli</h1>
			<div align="center" id="mainWrapper">

  
  
  
<div id="invList">
<div class="prodList">
   <h1> Sipariş Listesi</h1>
 </div>
<!-- Admin paneli Urun Listeleme Syfasi Urun Arama -->
	
 <form id="search_formInv" method="post" action="<?= site_url('site/search_inventory');?>">
	<div class="invNav">
        <label for="phrase"></label>
      <!--  <input style="width:100px;" type="text" name="phrase" id="phrase" />-->
		<!--<input type="submit" value="Ara" id="search_button" />-->
		
	  <!--  <a href="<?php base_url();?>inventory"> &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp+ Tüm Ürünleri Göster &nbsp &nbsp&nbsp</a>-->
		<!--  <a href="#invAddForm">+ Yeni Ürün Ekle &nbsp</a>
		  <a href="<?php// base_url();?>home">+ Ana Sayfa &nbsp</a>-->
	</div>
	   
    </form>
 <!--Urun Arama Bitis-->

      <table width="1000" border="0 solid" bgcolor="#FFFFFF" cellpadding="3">
	   <tr>	
          <td width="100"><strong>Alıcı</strong></td>
          <td width="200"><strong>Telefon</strong></td>
		  <td width="100" ><strong>E-mail</strong></td>
        <!--  <td width="30" ><strong>Kategori ID</strong></td>
	      <td width="30"><strong>Marka ID</strong></td>-->         
		 <td width="300" ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sipariş&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
          
          <td width="100" ><strong>Adres</strong></td>
          <td width="50" ><strong>İlçe</strong></td>
          <td width="50" ><strong>İl</strong></td>
          
          <td width="30" ><strong>Teslimat Bilgisi</strong></td>
          <td width="30" ><strong>Tarih </strong></td>
 
        </tr>

         <?php echo $product_list; ?>
       <!-- <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr> -->
      </table>
  </div>
  
  

</div>
<a name="inventoryForm" id="inventoryForm"></a>

<?php $url=base_url();?>

<div id="invAddForm">
<form action="<?php $url; ?>inventory" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
<table width="800" border="0">

<div id="empty"></div>
		<h1><div class="newProductTitle">Forum Yorumlar</div></h1>
		
		<!--Show comments -->
		
		 <form id="search_formInv" method="post" action="<?= site_url('site/search_inventory');?>">
	<div class="invNav">
        <label for="phrase"></label>
      <!--  <input style="width:100px;" type="text" name="phrase" id="phrase" />-->
		<!--<input type="submit" value="Ara" id="search_button" />-->
		
	  <!--  <a href="<?php base_url();?>inventory"> &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp+ Tüm Ürünleri Göster &nbsp &nbsp&nbsp</a>-->
		<!--  <a href="#invAddForm">+ Yeni Ürün Ekle &nbsp</a>
		  <a href="<?php// base_url();?>home">+ Ana Sayfa &nbsp</a>-->
	</div>
	   
    </form>
 <!--Urun Arama Bitis-->

      <table width="1000" border="0 solid" bgcolor="#FFFFFF" cellpadding="3">
	   <tr>	
          <td width="100"><strong>Gönderen</strong></td>
          <td width="200"><strong>E-Mail</strong></td>
		  <td width="100" ><strong>Konu Başlığı</strong></td>
        <!--  <td width="30" ><strong>Kategori ID</strong></td>
	      <td width="30"><strong>Marka ID</strong></td>-->         
		
          
          <td width="100" ><strong>Yorum|Soru</strong></td>
          <td width="50" ><strong>Cevap</strong></td>
          <td width="50" ><strong>Tarih</strong></td>
          
          <td width="30" ><strong>Yayinda</strong></td>
        
 
        </tr>

         <?php echo $comment_list; ?>
       <!-- <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr> -->
      </table>
  </div>
<div id="invList">
<div class="prodList">

 </div>
<!-- Admin paneli Urun Listeleme Syfasi Urun Arama -->
	 
 <form id="search_formInv" method="post" action="<?= site_url('site/search_inventory');?>">
 <div id="empty"></div>
		<h1><div class="newProductTitlex">Arama Bekleyenler</div></h1>
	<div class="invNav">
        <label for="phrase"></label>
      <!--  <input style="width:100px;" type="text" name="phrase" id="phrase" />-->
		<!--<input type="submit" value="Ara" id="search_button" />-->
		
	  <!--  <a href="<?php base_url();?>inventory"> &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp+ Tüm Ürünleri Göster &nbsp &nbsp&nbsp</a>-->
		<!--  <a href="#invAddForm">+ Yeni Ürün Ekle &nbsp</a>
		  <a href="<?php// base_url();?>home">+ Ana Sayfa &nbsp</a>-->
	</div>
	   
    </form>
 <!--Urun Arama Bitis-->

      <table width="1000" border="0 solid" bgcolor="#FFFFFF" cellpadding="3">
	   <tr>	
          <td width="100"><strong>İsim</strong></td>
          <td width="200"><strong>Telefon</strong></td>
		  <td width="100" ><strong>Tarih</strong></td>
        <!--  <td width="30" ><strong>Kategori ID</strong></td>
	      <td width="30"><strong>Marka ID</strong></td>-->         
		 <td width="300" ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Müşteri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
          
          <td width="100" ><strong>Arama Durumu</strong></td>
       
 
        </tr>

         <?php echo $call_list; ?>
       <!-- <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr> -->
      </table>
  </div>
</div>
		
		
		
		<!--ending Showing comments-->
		
		
		
<!--
       <tr>
         <td width="174">Ürün Adı</td>
         <td width="1293"><label><input name="product_name" type="text" id="product_name" size="50"/> </label></td>
       </tr>
      
       <tr>
         <td>Urun katergori</td>
         <td><label>
         <select name="category" id="category">
         <option value=""</option>
         <option value="agizvedis">Agız ve Diş</option>
         <option value="annevebebek">Anne ve Bebek Bakımı</option>
		 <option value="ciltbakimi">Cilt Bakımı</option>
         <option value="cinselsaglik">Cinsel Sağlık</option>
		 <option value="diyettakviye">Diyet Takviyeleri</option>
         <option value="elayaktirnak">El Ayak ve Tırnak Bakımı</option>
		 <option value="erkekbakim">Erkek Bakım Ürünleri</option>
         <option value="fitoterapi">Fito Terapi Ürünleri</option>
		 <option value="gunesurun">Güneş Ürünleri</option>
         <option value="kadinsaglik">Kadın Sağlığı Ürünleri</option>
		 <option value="makyajurun">Makyaj Ürünleri</option>
         <option value="medikalurun">Medikal Ürünler</option>
		 <option value="ortopediurun">Ortopedi Ürünleri</option>
         <option value="sacbakimi">Saç Bakımı</option>
		 <option value="vitamin">Vitamin ve Bitkisel Takviyeler</option>
         <option value="vucutbakimi">Vücut Bakımı</option>
         </select>
         
         </label></td>
       </tr>
	   
	         <tr>
         <td>Marka</td>
         <td><label>
         <select name="brand" id="brand" width="50px">
         <option value=""</option>
        
	<option value="abcderm">Abcderm</option>
	<option value="avene">Avene</option>
	<option value="babe">Babe</option>
	<option value="bioderma">Bioderma</option>
	<option value="biorichi">Biorichi</option>
	<option value="bioxcin">Bioxcin</option>
	<option value="boswel">Boswel</option>
	<option value="caudalie">Caudalie</option>
	<option value="clinerience">Clinerience</option>
	<option value="coppertone">Coppertone</option>
	<option value="cumlaude">Cumlaude</option>
	<option value="ddf">DDF</option>
	<option value="dermalogica">Dermalogica</option>
	<option value="dermalute">Dermalute</option>
	<option value="ducray">Ducray</option>
	<option value="elancyl">Elancyl</option>
	<option value="filorga">Filorga</option>
	<option value="fuzzy">Fuzzy</option>
	<option value="hamilton">Hamilton</option>
	<option value="isis">Isis</option>
	<option value="jane">Jane</option>
	<option value="klorane">Klorane</option>
	<option value="lierac">Lierac</option>
	<option value="minoxil">Minoxil</option>
	<option value="mustela">Mustela</option>
	<option value="noviderm">Noviderm</option>
	<option value="neostrata">Neostrata</option>
	<option value="nuxe">Nuxe</option>
	<option value="organix">Organix</option>
	<option value="phyto">Phyto</option>
	<option value="revigen">Revigen</option>
	<option value="rocs">Rocs</option>
	<option value="seaderm">Seaderm</option>
	<option value="sebamed">Sebamed</option>
	<option value="sensodyn">Sensodyn</option>
	<option value="solgar">Solgar</option>
	<option value="synchroline">Synchroline</option>
	<option value="xls">XLS</option>
         </select>
         
         </label></td>
       </tr>
	   
	      <tr>
         <td>Ürün Kisa Detayı</td>
            <td><label><textarea name="textarea1" id="textarea1" size="64" rows="5"></textarea></label></td>
        </tr>
	   
	   
	   
	   
       <tr>
         <td>Ürün Detayı Uzun</td>
            <td><label><textarea name="textarea2" id="textarea2" size="64" rows="5"></textarea></label></td>
    </tr>
	   
	   
	   
	   
	    <tr>
         <td>Birim Fiyat</td>
         <td></label>$ <input name="unitPrice" type="text" id="unitPrice" size="12"/></label></td>
       </tr>
	   
	   <tr>
         <td>Stok Adedi</td>
         <td></label><input name="unitStock" type="text" id="unitStock" size="12"/></label></td>
       </tr>
	   
	   
	   <tr>
         <td width="174">Indirim miktari</td>
         <td width="1293"><label><input name="discount" type="text" id="discount" size="50"/> </label></td>
       </tr>
	   
	    <tr>
         <td>İndirimli Ürün</td>
         <td><label>
		  <input type="hidden" name="campaign" value="no"/> 
         <input type="checkbox" name="campaign" value="yes" /> 
          </label></td>
       </tr>
	   
	    <tr>
         <td>Ucretsiz Kargo</td>
         <td><label>
		  <input type="hidden" name="shipping" value="no"/> 
         <input type="checkbox" name="shipping" value="yes" /> 
          </label></td>
       </tr>
	   
	   
	   
	   
       <tr>
         <td>Ürün Resmi</td>
         <td><label><input type="file" name="fileField" id="fileField" /></label></td>
       </tr>
	   
	   
	   </tr>
	  <!-- 
           <tr>
         <td>Product Campaign</td>
         <td><label>
           <select name="campaign" id="campaign">
          <option value="no">No</option>
		 <option value="yes">Yes</option>
	
         </select>
          </label></td>
       </tr>
	   -->
	   
	   
	   
	   
<!--
       <tr>
         <td>&nbsp;</td>
         <td><label><input type="submit" name="button" id="button" value="Add This Item"/></label></td>
       </tr>
-->
  </table>
  </form>
  </div>
      <p>

</div>







</div>
			
			
			
		
			
			
<?php 

if($this->session->flashdata('login_error'))
{
echo 'You entered an incorrect username or password';

}else{}
echo validation_errors();?>

<?php echo form_close();?>
			
			
			
			
        
            <div class="dr"><span></span></div>
                     
        </div>
    </div>
    
   
    
    
    
</body>
</html>