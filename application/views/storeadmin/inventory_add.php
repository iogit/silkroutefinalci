<?php  //just be sure this session is for admin

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
	
	//include "../storescripts/connect_to_mysql.php";
	
	$sql=$this->db->query("SELECT * FROM io_admin WHERE admn_id='$managerID' AND admn_usrName='$manager' AND admn_psswrd='$password' LIMIT 1");
	


		$row = $sql->row();

		if (isset($row))
		{
		 $admn_logDate=$row->admn_logDate;
		}else{
		echo 'Sorry an error occurred Error: X090x106ILP, <a href="'.$url.'inventory">  Geri Don </a>';
		exit();
			}
	
	
	$existCount=$sql->num_rows();
	
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
       window.location.href ="'.$url.'inventory?yesdelete='.$_GET['deleteid'].'";
    }else{
        window.location.href ="'.$url.'inventory";
    }
}
 </SCRIPT>';
/*$message=''.$_GET['deleteid'].' Numarali Urunu Gercekten Silmek Istiyormusun ? <a href="'.$url.'inventory?yesdelete='.$_GET['deleteid'].'">Yes</a>|<a href="'.$url.'inventory">No</a>';*/

echo $message;

exit();

}
if(isset($_GET['yesdelete'])){
//remove item form system and delete its picture
//delete from database first
$id_to_delete=$_GET['yesdelete'];
$sql=$this->db->query("DELETE FROM io_order where ioOrder_id='$id_to_delete' LIMIT 1") or die(mysql_error);
/*
//unlink the picture
$pictodelete=("images/product_images/$id_to_delete.jpg");
if(file_exists($pictodelete)){
	
	unlink($pictodelete);
	}
*/
  redirect("inventory");
exit();

}



?>


<?php 
//delete item question to admin 
$url=base_url();
if(isset($_GET['callId'])){

$message='<SCRIPT language="JavaScript">

{
    var hi= confirm("Bu Siparisi Gercekten Silmek Istiyormusun  ?");
    if (hi== true){
       window.location.href ="'.$url.'inventory?calldelete='.$_GET['callId'].'";
    }else{
        window.location.href ="'.$url.'inventory";
    }
}
 </SCRIPT>';
/*$message=''.$_GET['deleteid'].' Numarali Urunu Gercekten Silmek Istiyormusun ? <a href="'.$url.'inventory?yesdelete='.$_GET['deleteid'].'">Yes</a>|<a href="'.$url.'inventory">No</a>';*/

echo $message;

exit();

}
if(isset($_GET['calldelete'])){
//remove item form system and delete its picture
//delete from database first
$callid_to_delete=$_GET['calldelete'];
$sql=$this->db->query("DELETE FROM io_call where ioBlog_id='$callid_to_delete' LIMIT 1") or die(mysql_error);
/*
//unlink the picture
$pictodelete=("images/product_images/$id_to_delete.jpg");
if(file_exists($pictodelete)){
	
	unlink($pictodelete);
	}
*/
  redirect("inventory");
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
       window.location.href ="'.$url.'inventory?commentYesDelete='.$_GET['commentDeleteid'].'";
    }else{
        window.location.href ="'.$url.'inventory";
    }
}
 </SCRIPT>';
/*$message=''.$_GET['deleteid'].' Numarali Urunu Gercekten Silmek Istiyormusun ? <a href="'.$url.'inventory?yesdelete='.$_GET['deleteid'].'">Yes</a>|<a href="'.$url.'inventory">No</a>';*/

echo $message;

exit();

}
if(isset($_GET['commentYesDelete'])){
//remove item form system and delete its picture
//delete from database first
$id_to_delete2=$_GET['commentYesDelete'];
$sql=$this->db->query("DELETE FROM io_comment where ioComment_id='$id_to_delete2' LIMIT 1") or die(mysql_error);
/*
//unlink the picture
$pictodelete=("images/product_images/$id_to_delete.jpg");
if(file_exists($pictodelete)){
	
	unlink($pictodelete);
	}
*/
  redirect("inventory");
exit();

}



?>



<?php 
//parse the from data and add inventory item to the system



if(isset($_POST['product_name'])){
	$product_name=$this->db->escape($_POST['product_name']);
	$shortDesc=$this->db->escape($_POST['textarea1']);
	$longDesc=$this->db->escape($_POST['textarea2']);
	$unitPrice=$this->db->escape($_POST['unitPrice']);
	$discount=$this->db->escape($_POST['discount']);
	$discount_available=$this->db->escape($_POST['campaign']);
	$shipping=$this->db->escape($_POST['shipping']);
	$units_inStock=$this->db->escape($_POST['unitStock']);
	
	$category=$this->db->escape($_POST['category']);
	$brand=$this->db->escape($_POST['brand']);
	

	$brndsql=$this->db->query("SELECT brnd_id FROM brnd_tbl WHERE brnd_name='$brand' LIMIT 1");
	
		$row=$brndsql->row();
		if(isset($row)){






			$brnd_id=$row->brnd_id;


		}else{
		echo 'Sorry an error occurred Error: X090x106ILP, <a href="'.$url.'inventory">   Click here </a>';
		exit();
			}
			
	$ctgrysql=$this->db->query("SELECT ctgry_id FROM ctgrs_tbl WHERE ctgry_name='$category' LIMIT 1");
    $row=$ctgrysql->row();
	
	if(isset($row)){
	 


	  $ctgry_id=$row->ctgry_id;
	}else{
	
	echo 'Sorry an error occurred Error: X108x118ILP, <a href="'.$url.'inventory">   Click here </a>';
		exit();
	}
	
	//see if that product name is an identical match to another product in the system
	
	
	$sql=$this->db->query("SELECT prdct_id FROM prdct_tbl WHERE prdct_name='$product_name' LIMIT 1");
	
	$productMatch=$sql->num_rows(); //count the output amount
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

	$sql=$this->db->query("INSERT INTO prdcts_tbl (prdct_name, ctgry_id, brnd_id, prdct_shortDesc, prdct_longDesc , prdct_unitPrice, prdct_discount, prdct_available, units_inStock, dscnt_available, prdct_shipping, prdct_addDate) VALUES('$product_name','$ctgry_id','$brnd_id','$shortDesc','$longDesc','$unitPrice','$discount','$prdct_available','$units_inStock','$discount_available', '$shipping', now())") or die(mysql_error());
	
	$pid=$this->db->insert_id();
	$url=base_url();
	//place image in the folder
	$newname="$pid.jpg";
	move_uploaded_file($_FILES['fileField']['tmp_name'],"images/product_images/$newname");
    redirect("site/inventory"); //to prevent to sending same data to database when the page refreshed.
	
	exit();
}

?>


<?php 
//parse the from data and add inventory item to the system



if(isset($_POST['ioNews_title'])){
	$ioNews_title=$this->db->escape($_POST['ioNews_title']);
	$ioNews_content=$this->db->escape($_POST['ioNews_content']);

	$ioNews_link=$this->db->escape($_POST['ioNews_link']);

	
	//see if that product name is an identical match to another product in the system
		
	
	//add this product into the database

	$sql=$this->db->query("INSERT INTO io_news (ioNews_title, ioNews_content, ioNews_link, ioNews_date) VALUES($ioNews_title, $ioNews_content, $ioNews_link,now())") or die(mysql_error());
	
	$newsid=$this->db->insert_id();
	$url=base_url();
	//place image in the folder
	$newname="$newsid.jpg";
	move_uploaded_file($_FILES['fileFieldNews']['tmp_name'],"images/news_images/$newname");
    redirect("inventory"); //to prevent to sending same data to database when the page refreshed.
	
	exit();
}

?>


<?php 
//parse the from data and add inventory item to the system



if(isset($_POST['ioslider_title'])){
	$ioSlider_title=$this->db->escape($_POST['ioslider_title']);
	$ioSlider_text=$this->db->escape($_POST['ioslider_content']);
    
	
	//$ioSlider_link=$this->db->escape($_POST['ioslider_link']);

	
	//see if that product name is an identical match to another product in the system
		
	
	//add this product into the database

	$sql=$this->db->query("INSERT INTO io_slider (ioSlider_title, ioSlider_text, ioSlider_date) VALUES($ioSlider_title, $ioSlider_text, now())") or die(mysql_error());
	
	$sliderid=$this->db->insert_id();
	$url=base_url();
	//place image in the folder
	$newname="$sliderid.jpg";
	move_uploaded_file($_FILES['fileFieldSlider']['tmp_name'],"placeholders/slider/$newname");
    redirect("inventory"); //to prevent to sending same data to database when the page refreshed.
	
	exit();
}

?>




















<?php
//this block grabs the whole list for viewing
if($product_list==""){
$sql=$this->db->query("SELECT * FROM io_order ORDER BY ioOrder_date DESC");  //or ASC
$productCount=$sql->num_rows(); //count output amount
$url=base_url();
if($productCount>0)
{
$product_list.='<table cellpadding="0" cellspacing="0" width="100%" class="table-hover">
                        <thead>
                            <tr>
                                <th width="25%">
                                   Name/Lastname
                                </th>
                                <th width="25%">
                                   Phone
                                </th>
                                <th width="25%">
                                   Rezerv. Number
                                </th>
                                <th width="25%">
                                   Rezerv. Date
                                </th>
								<th width="25%">
                                  Rezerv. Hour
                                </th>
								<th width="25%">
                                   Description
                                </th>
								<th width="25%">
                                   Date
                                </th>
								<th width="25%">
                                  Rezerv. Status
                                </th><th width="25%">
                                   Settings
                                </th>
                            </tr>
                        </thead>
                        <tbody>';

	foreach($sql->result_array() as $row)

	{
	
	$ioOrder_id=$row["ioOrder_id"];
	$ioOrder_name=$row["ioOrder_name"];
	$ioOrder_phone=$row["ioOrder_phone"];
	$ioOrder_participant=$row["ioOrder_participant"];
	$ioOrder_datex=$row["ioOrder_datex"];
	$ioOrder_hour=$row["ioOrder_hour"];
	$ioOrder_description=$row["ioOrder_description"];
	
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

	$product_list.='     <tr>
                                <td style="color:'.$color.'">
                                    '.$ioOrder_name.'
                             </td><td style="color:'.$color.'">
                                    '.$ioOrder_phone.'
                               </td><td style="color:'.$color.'">
                                    '.$ioOrder_participant.'
                               </td><td style="color:'.$color.'">
                                    '.$ioOrder_datex.'
                                </td><td style="color:'.$color.'">
                                    '.$ioOrder_hour.'
                                 </td><td style="color:'.$color.'">
                                   '.$ioOrder_description.'
                                 </td><td style="color:'.$color.'">
                                    '.$ioOrder_date.'
                                </td>
								 
								 
								 <td style="color:'.$color.'">
                                   '.$ioOrder_statusx.'
                                </td>
                              
                            ';
	
	
	
	$product_list.="<td> <div id='admin_edit'><a href='".$url."orderOk?pid=$ioOrder_id'><div style='background-color:#eee;'><button class='btn btn-primary btn-block'>Rezerv. Yap</button></div></a> 
	<a href='".$url."orderNo?pid=$ioOrder_id'><div style='background-color:#eee;'><button class='btn btn-primary btn-block'>Beklemeye Al</button></div></a>
	</a>&nbsp; <div id='admin_delete'><a href='".$url."inventory?deleteid=$ioOrder_id'><div style='background-color:#eee;'><button class='btn btn-primary btn-block'>Sil</button></div></a></div></td>";
$product_list.='<tr>';
	}
	
	$product_list.=' </tbody>
                    </table>';
	
	
		
	}else
	
	{
	$product_list="Listelenecek Rezervsayon Bulunmamaktadır";	
		
		}

}

?>




<?php
//this block grabs the whole list for viewing
$comment_list="";
if($comment_list==""){
$sql=$this->db->query("SELECT * FROM io_comment ORDER BY ioComment_date DESC");  //or ASC
$productCount=$sql->num_rows(); //count output amount
$messagecount=$productCount;
$url=base_url();
if($productCount>0)
{   $comment_list='<table cellpadding="0" cellspacing="0" width="100%" class="table-hover">
                        <thead>
                            <tr>
                                <th width="25%">
                                   Name/Lastname
                                </th>
                                <th width="25%">
                                   E-mail
                                </th>
                                <th width="25%">
                                   Title
                                </th>
                                <th width="25%">
                                   Comment/Question
                                </th>
								<th width="25%">
                                   Answer
                                </th>
								<th width="25%">
                                   Date
                                </th>
								<th width="25%">
                                   Status
                                </th>
								<th width="25%">
                                   Settings
                                </th>
                            </tr>
                        </thead>
                        <tbody>';

	foreach($sql->result_array as $row)
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
    
	
	$comment_list.='     <tr>
                                <td style="color:'.$color.'">
                                    '.$ioComment_name.'
                             </td><td style="color:'.$color.'">
                                    '.$ioComment_email.'
                               </td><td style="color:'.$color.'">
                                    '.$ioComment_title.'
                               </td><td style="color:'.$color.'">
                                    '.$ioComment_comment.'
                                </td><td style="color:'.$color.'">
                                    '.$ioComment_answer.'
                                 </td><td style="color:'.$color.'">
                                   '.$ioComment_date.'
                                 </td><td style="color:'.$color.'">
                                    '.$ioComment_statusx.'
                                 </td>
                              
                            ';
	
	
	
	$comment_list.='	
	<td style="color:'.$color.'">
	<div style="width:100px;" id="admin_edit">
	<a href="'.$url.'commentOk?pid='.$ioComment_id.'"><button class="btn btn-primary btn-block">Yayınla</button></a> 
	<a href="'.$url.'commentNo?pid='.$ioComment_id.'"><button class="btn btn-primary btn-block">Yayından Kaldır</button></a>
	<a href="'.$url.'commentAnswer?pid='.$ioComment_id.'"><button class="btn btn-primary btn-block">Yorumu Cevapla</button></a>
	</a>&nbsp; <div id="admin_delete"><a href="'.$url.'inventory?commentDeleteid='.$ioComment_id.'"><button class="btn btn-primary btn-block">Sil</button></a></div></td>';
$comment_list.='<tr>';
	}
	$comment_list.='</tbody>   </table>';
	
	
		
	}else
	
	{
	$comment_list="Listelenecek Yorum Bulunmamaktadır";	
		
		}

}
?>

<?php
//this block grabs the whole list for viewing
$blog_list="";
if($blog_list==""){
$sql=$this->db->query("SELECT * FROM io_blog ORDER BY ioBlog_date DESC");  //or ASC
$productCount=$sql->num_rows(); //count output amount
$url=base_url();
if($productCount>0)
{
 $blog_list='<table cellpadding="0" cellspacing="0" width="100%" class="table-hover">
                        <thead>
                            <tr>
                                <th width="25%">
                                   Image
                                </th>
                                <th width="25%">
                                   Title
                                </th>
                                <th width="25%">
                                   Content
                                </th>
								<th width="5%">
                                   View
                                </th> 
								<th width="25%">
                                   Date
                                </th>
                                <th width="25%">
                                   Status
                                </th>
								<th width="25%">
                                   Settings
                                </th>
							
                        </thead>
                        <tbody>';
	foreach($sql->result_array as $row)
	{
	
	$ioBlog_id=$row["ioBlog_id"];
	$ioBlog_title=$row["ioBlog_title"];
	$ioBlog_content=$row["ioBlog_content"];
	$ioBlog_view=$row["ioBlog_view"];
	$ioBlog_date=$row["ioBlog_date"];
	$ioBlog_live=$row["ioBlog_live"];
	
	
	$ioBlog_date=$row["ioBlog_date"];

	
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	
	if($ioBlog_live==0)
	{	$color="red";
	    $ioBlog_statusx="Beklemede";
	}else
	{	$color="";
	  $ioBlog_statusx="Arandı";
	}
	
	
	$blog_list.='     <tr>
                                <td style="color:'.$color.'">
                                    '.$ioBlog_title.'
                             </td><td style="color:'.$color.'">
                                    '.$ioBlog_title.'
                               </td>
							   <td style="color:'.$color.'">
                                    '.$ioBlog_content.'
                               </td>
							   <td style="color:'.$color.'">
                                    '.$ioBlog_view.'
                               </td>
							   <td style="color:'.$color.'">
                                    '.$ioBlog_date.'
                                </td><td style="color:'.$color.'">
                                    '.$ioBlog_statusx.'
                                 </td>
                              
                            ';


	$blog_list.="<td>
	<div style='width: 100px;' id='admin_edit'>
	<a href='".$url."callOk?cid=$ioBlog_id'><button class='btn btn-primary btn-block'>Gönderildi</button></a>
	<a href='".$url."callNo?cid=$ioBlog_id'><button class='btn btn-primary btn-block'>Beklemede</button></a>
	
	</a>&nbsp; <div id='admin_delete'><a href='".$url."inventory?callId=$ioBlog_id'><button class='btn btn-primary btn-block'>Sil</button></a></div></td>";
$blog_list.='<tr>';
	}
	
	$blog_list.='</tbody>
                    </table>';
	
	
		
	}else
	
	{
	$blog_list="Listelenecek Sipariş Bulunmamaktadır";	
		
		}

}
?>

<?php 
//parse the from data and add inventory item to the system



if(isset($_POST['ioBlog_title'])){
	$ioBlog_title=$this->db->escape($_POST['ioBlog_title']);
	$ioBlog_content=$this->db->escape($_POST['ioBlog_content']);
	$ioBlog_link=$this->db->escape($_POST['ioBlog_link']);

	
	//see if that product name is an identical match to another product in the system
		
	
	//add this product into the database

	$sql=$this->db->query("INSERT INTO io_blog (ioBlog_title, ioBlog_content, ioBlog_link, ioBlog_date) VALUES('$ioBlog_title', '$ioBlog_content', '$ioBlog_link',now())") or die(mysql_error());
	
	$blogid=$this->db->insert_id();
	$url=base_url();
	//place image in the folder
	$newname="$blogid.jpg";
	move_uploaded_file($_FILES['fileFieldBlog']['tmp_name'],"images/blog_images/$newname");
    redirect("inventory"); //to prevent to sending same data to database when the page refreshed.
	
	exit();
}

?>

<?php 
//parse the from data and add inventory item to the system



if(isset($_POST['iogallerypic_title'])){
	$iogallerypic_title=$this->db->escape($_POST['iogallerypic_title']);

	

	
	//see if that product name is an identical match to another product in the system
		
	
	//add this product into the database

	$sql=$this->db->query("INSERT INTO io_gallerypic (iogallerypic_title, iogallerypic_date) VALUES('$iogallerypic_title',now())") or die(mysql_error());
	
	$gallerypicid=$this->db->insert_id();
	$url=base_url();
	//place image in the folder
	$newname="$gallerypicid.jpg";
	move_uploaded_file($_FILES['fileFieldGalleryPic']['tmp_name'],"images/gallerypics_images/$newname");
    redirect("inventory"); //to prevent to sending same data to database when the page refreshed.
	
	exit();
}

?>

<?php 
//parse the from data and add inventory item to the system



if(isset($_POST['iogalleryvid_title'])){
	$iogalleryvid_title=$this->db->escape($_POST['iogalleryvid_title']);
	$iogalleryvid_link=$this->db->escape($_POST['iogalleryvid_link']);

	

	
	//see if that product name is an identical match to another product in the system
		
	
	//add this product into the database

	$sql=$this->db->query("INSERT INTO io_galleryvid (iogalleryvid_title,iogalleryvid_link, iogalleryvid_date) VALUES('$iogalleryvid_title','$iogalleryvid_link',now())") or die(mysql_error());
	$galleryvidid=$this->db->insert_id();
	$url=base_url();
	//place image in the folder
	$newname="$galleryvidid.jpg";
	move_uploaded_file($_FILES['fileFieldGalleryVid']['tmp_name'],"images/galleryvids_images/$newname");
    redirect("inventory");
	/*$gallerypicid=$this->db->insert_id();
	$url=base_url();
	//place image in the folder
	$newname="$gallerypicid.jpg";
	move_uploaded_file($_FILES['fileFieldGalleryPic']['tmp_name'],"images/gallerypics_images/$newname");*/
    redirect("inventory"); //to prevent to sending same data to database when the page refreshed.
	
	exit();
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
    
    <title>Admin Panel - IO</title>
    
    <link href="<?php echo base_url();?>style/adm/login/stylesheetsx.css" rel="stylesheet" type="text/css" />      
    <!--[if lt IE 10]>
        <link href="css/ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->        
    <link rel="icon" type="image/ico" href="favicon.ico"/>
      
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/jquery/jquery-1.8.3.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/jquery/jquery-ui-1.9.1.custom.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/other/excanvas.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/other/jquery.mousewheel.min.js'></script>
        
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/bootstrap/bootstrap.min.js'></script>            
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/cookies/jquery.cookies.2.2.0.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/highcharts/highcharts.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/highcharts/modules/exporting.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/epiechart/jquery.easy-pie-chart.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/sparklines/jquery.sparkline.min.js'></script>    
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/pnotify/jquery.pnotify.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/fullcalendar/fullcalendar.min.js'></script>        
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/datatables/jquery.dataTables.min.js'></script>    
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/wookmark/jquery.wookmark.js'></script>        
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/jbreadcrumb/jquery.jBreadCrumb.1.1.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    
    <script type='text/javascript' src="<?php echo base_url();?>scripts/virgojs/plugins/uniform/jquery.uniform.min.js"></script>
    <script type='text/javascript' src="<?php echo base_url();?>scripts/virgojs/plugins/select/select2.min.js"></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/tagsinput/jquery.tagsinput.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/multiselect/jquery.multi-select.min.js'></script>    
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/validationEngine/languages/jquery.validationEngine-en.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/validationEngine/jquery.validationEngine.js'></script>        
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/stepywizard/jquery.stepy.js'></script>
        
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/animatedprogressbar/animated_progressbar.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/hoverintent/jquery.hoverIntent.minified.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/media/mediaelement-and-player.min.js'></script>    
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/cleditor/jquery.cleditor.js'></script>

    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/shbrush/shBrushCss.js'></script>    
    
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins/filetree/jqueryFileTree.js'></script>        
        
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/plugins.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/charts.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>scripts/virgojs/actions.js'></script>
    <style>
	#admin_edit{
	
	width:70px;
	}
	#admin_editx{
	
	width:100%;
	text-align:right;
	margin-left:-50px;
	position:relative;
	margin-top:20px;
	height:10px;
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
        <a href="index.html" class="logo"></a>
        
        <div class="buttons">
                                
            <div class="dropdown">
                <div class="label"><span class="icos-cog"></span></div>
                <div class="body" style="width: 160px;">
                    <div class="itemLink">
                        <a href="#"><span class="icon-cog icon-white"></span> Settings</a>
                    </div>
                    <div class="itemLink">
                        <a href="#tabs-2"><span class="icon-comment icon-white"></span> Messages</a>
                    </div>                    
                    <div class="itemLink">
                        <a href="<?php echo base_url();?>killAdmin"><span class="icon-off icon-white"></span> Exit</a>
                    </div>                                        
                </div>                
            </div>
            
        </div>
        
    </div> 
    
    <div class="navigation">

        <ul class="main">
           <li><a href="<?php echo base_url();?>master"><span class="icom-screen"></span><span class="text">Ana Sayfa</span></a></li>
            <li><a href="<?php echo base_url();?>inventory_add"><span class="icom-box-add"></span><span class="text">Ekle</span></a></li>	
		<!--	<li><a href="<?php echo base_url();?>inventory_edit"><span class="icom-pencil3"></span><span class="text">Düzenle</span></a></li>      -->          
        </ul>
        
        <div class="control"></div>        
        
        <div class="submain">                

            <div id="default">
                
                <div class="widget-fluid userInfo clearfix">
                    <div class="image">
                        <img src="<?php echo base_url();?>img/adm/user.png" class="img-polaroid"/>
                    </div>              
                    <div class="name">Welcome <?php echo $manager;?></div>
                    <ul class="menuList">
                        <li><a href="#"><span class="icon-cog"></span>Settings</a></li>
                        <li><a href="#tabs-2"><span class="icon-comment"></span> Messages<strong><!-- (<?php echo $messagecount;?>)--></strong></a></li>
                        <li><a href="<?php echo base_url();?>killAdmin"><span class="icon-share-alt"></span> Exit</a></li>                        
                    </ul>
                    <div class="text">
                        Welcom back! Your last visit: 24.10.2012 in 19:55
                    </div>
                </div>
                
                <div class="widget-fluid TAC">
                    <div class="epc mini">
                        <div class="epcm-red" data-percent="35"><span>0.35</span>%</div>
                        <div class="label label-important">Percentage</div>
                    </div>                    
                    <div class="epc mini">
                        <div class="epcm-green" data-percent="80"><span>80</span>/100</div>
                        <div class="label label-success">Counter</div>
                    </div>                             
                </div>                
                <div class="dr"><span></span></div>
              
                <div class="dr"><span></span></div>
            
            </div>          
            
                   
            
                 
            
              
                                    
        </div>

    </div>
    
    <div class="content">
                
        <div class="row-fluid typography">
    
            <div class="widget">
                
       
                    
               
                    <div class="row-fluid">
                        <div class="span12">
						
						
						
						
						<!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& TABS INVENTORY START &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
					
						<div class="login" id="login">
        <div class="wrap">
		<h1></h1>
		<div align="center" id="mainWrapper">
		<div class="widget">
		<div class="head">
		<h2> </h2>
        </div>
		<div class="tabs">                    
                        <ul>
                          
						     <li><a href="#tabs-1">Add article</a></li>
						     <li><a href="#tabs-2">Add news</a></li>
						     
						  
                            <li><a href="#tabs-3">Add image</a></li>
                            <li><a href="#tabs-4">Add video</a></li>
                            <li><a href="#tabs-5">Add slider</a></li>
                        </ul>                        

                       
<!--#######################################Blog Add Start################################################################################-->  
  <div id="tabs-1">
										<div id="invList">
										<div class="prodList">
										   <h1>&nbsp;</h1>
										 </div>
									
										
										
										 <div class="widget">
													<div id="invAddForm">
									<form action="<?php echo base_url(); ?>inventory_add" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
										<table width="800" border="0">
												<div class="newProductTitle"></div>
												  <tr>
												
													   <tr>
													 <td width="174">Blog title</td>
													 <td width="1293"><label><input name="ioBlog_title" type="text" id="ioBlog_title" size="50"/> </label></td>
												   </tr>
												   
												   		<tr><td>Content </td>
											<td><label>
											      <div class="widget">
                    <div class="head dark">
                        <div class="icon"><i class="icos-pencil"></i></div>
                        <h2>Content</h2>
                    </div>
                    <div class="block-fluid editor">
                        
                        <textarea id="wysiwyg" name="ioBlog_content" style="height: 300px;">
                           
                        </textarea>
                        
                    </div>
                   
                </div>  
									</label></td>		
											</tr>
												   
												   
																				         
											<tr>
													 <td>Image</td>
													 <td><label class="btn btn-large btn-block  disabled"><input class="btn btn-large " type="file" name="fileFieldBlog" id="fileFieldBlog" /></label></td>
												   </tr>

											   <tr>
													 <td width="174">Youtube Link</td>
													 <td width="1293"><label><input name="ioBlog_link" type="text" id="ioBlog_link" size="50"/> </label></td>
												   </tr>
											</tr>
												
												
												
											   </tr>
										  <tr>
												 <td>&nbsp;</td>
												 <td><label><input class="btn btn-warning btn-block" type="submit" name="button" id="button" value="Add article"/></label></td>
											   </tr>

										  </table>
										  </form>
										  </div>	</div></div></div>  


<!--#######################################Blog Add Stop################################################################################-->  
<!--#######################################Article Add Start################################################################################-->  

										   <div id="tabs-2">
										<div id="invList">
										<div class="prodList">
										   <h1>&nbsp;</h1>
										 </div>
									
										
										
										 <div class="widget">
													<div id="invAddForm">
									<form action="<?php echo base_url(); ?>inventory_add" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
										<table width="800" border="0">
												<div class="newProductTitle"></div>
												  <tr>
												
													   <tr>
													 <td width="174">Title</td>
													 <td width="1293"><label><input name="ioNews_title" type="text" id="ioNews_title" size="50"/> </label></td>
												   </tr>
											
										
											
											
											
											
											
											
											<!--	<tr>
																<td>Haber İçerik  </td>
													<td><label><textarea name="ioNews_content" id="ioNews_content" size="64" rows="5"></textarea>
													</label></td></tr>			-->							         
											<tr>
													 <td>News image</td>
													 <td><label class="btn btn-large btn-block  disabled"><input class="btn btn-large " type="file" name="fileFieldNews" id="fileFieldNews" /></label></td>
												   </tr>

											   <tr>
													 <td width="174">Youtube Link</td>
													 <td width="1293"><label><input name="ioNews_link" type="text" id="ioNews_link" size="50"/> </label></td>
												   </tr>
										
													<tr><td>News content  </td>
											<td><label>
											      <div class="widget">
                    <div class="head dark">
                        <div class="icon"><i class="icos-pencil"></i></div>
                        <h2>News content</h2>
                    </div>
                    <div class="block-fluid editor">
                        
                        <textarea id="wysiwyg" name="ioNews_content" style="height: 300px;">
                           
                        </textarea>
                        
                    </div>
                   
                </div>  
									</label></td>		
											</tr>
												
												
											   </tr>
										  <tr>
												 <td>&nbsp;</td>
												 <td><label><input class="btn btn-warning btn-block" type="submit" name="button" id="button" value="Add news"/></label></td>
											   </tr>

										  </table>
										  </form>
										  </div>	</div></div></div>   

<!--#######################################Article Add Finish################################################################################-->  
															   
													
										  
													<!--#####Siparis listesi End###########-->
                                            

                      
													<!--##########Yorumlar Begin#######################-->
											  


										<!--######Yorumlar End############-->
                                                
												
												 <div id="tabs-3">
										<div id="invList">
										<div class="prodList">
										   <h1>&nbsp;</h1>
										 </div>
									
										
										
										 <div class="widget">
													<div id="invAddForm">
									<form action="<?php echo base_url(); ?>inventory_add" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
										<table width="800" border="0">
												<div class="newProductTitle"></div>
												  <tr>
												
													  <tr>
													 <td width="174">Image title</td>
													 <td width="1293"><label><input name="iogallerypic_title" type="text" id="iogallerypic_title" size="50"/> </label></td>
												   </tr> 
																				         
											<tr>
													 <td>Add image</td>
													 <td><label class="btn btn-large btn-block  disabled"><input class="btn btn-large " type="file" name="fileFieldGalleryPic" id="fileFieldGalleryPic" /></label></td>
												   </tr>

											  
											</tr>
												
												
												
											   </tr>
										  <tr>
												 <td>&nbsp;</td>
												 <td><label><input class="btn btn-warning btn-block" type="submit" name="button" id="button" value="Add image"/></label></td>
											   </tr>

										  </table>
										  </form>
										  </div>	</div></div></div>   

														
										<!--#############Call Begin###############-->
															 <div id="tabs-4">
										<div id="invList">
										<div class="prodList">
										   <h1>&nbsp;</h1>
										 </div>
									
										
										
										 <div class="widget">
													<div id="invAddForm">
									<form action="<?php echo base_url(); ?>inventory_add" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
										<table width="800" border="0">
												<div class="newProductTitle"></div>
												  <tr>
												
													  <tr>
													 <td width="174">Video title</td>
													 <td width="1293"><label><input name="iogalleryvid_title" type="text" id="iogalleryvid_title" size="50"/> </label></td>
												   </tr>

												   <tr>
													 <td width="174">Youtube Link </td>
													 <td width="1293"><label><input name="iogalleryvid_link" type="text" id="iogalleryvid_link" size="50"/> </label></td>
												   </tr> 
																				         
										<tr>
													 <td>Thumbnail image</td>
													 <td>
													  <div style="color:#110000;">* Upload 268 x 162 dimensions images<div>
													 <label class="btn btn-large btn-block  disabled"><input class="btn btn-large " type="file" name="fileFieldGalleryVid" id="fileFieldGalleryVid" /></label></td>
												   </tr>

											  
											</tr>
												
												
												
											   </tr>
										  <tr>
												 <td>&nbsp;</td>
												 <td><label><input class="btn btn-warning btn-block" type="submit" name="button" id="button" value="Add video"/></label></td>
											   </tr>

										  </table>
										  </form>
										  </div>	</div></div></div>  <!--login div end-->   
														  
														<!--#############Call End#########-->
                         
															<!--#######################################Slider Add Start###############################################################-->	

						 <div id="tabs-5">
										<div id="invList">
										<div class="prodList">
										   <h1>&nbsp;</h1>
										 </div>
									
										
										
										 <div class="widget">
													<div id="invAddForm">
									<form action="<?php echo base_url(); ?>inventory_add" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
										<table width="800" border="0">
												<div class="newProductTitle"></div>
												  <tr>
												
													  <tr>
													 <td width="174">Slider title</td>
													 <td width="1293"><label><input name="ioslider_title" type="text" id="ioslider_title" size="50"/> </label></td>
												   </tr>

												   <tr>
													 <td width="174">Slider content </td>
													 <td width="1293"><label><textarea name="ioslider_content" type="text" id="ioslider_content" style="height:200px" size="50"/> </textarea></label></td>
												   </tr> 
																				         
										<tr>
													 <td>Slider image</td>
													 <td>
													  <div style="color:#110000;">* Image should be 795 x 413 <div>
													  <div style="color:#110000;">* Last 4 image will be displayed in the slider<div>
													 <label class="btn btn-large btn-block  disabled"><input class="btn btn-large " type="file" name="fileFieldSlider" id="fileFieldSlider" /></label></td>
												   </tr>

											  
											</tr>
												
												
												
											   </tr>
										  <tr>
												 <td>&nbsp;</td>
												 <td><label><input class="btn btn-warning btn-block" type="submit" name="button" id="button" value="Add slider"/></label></td>
											   </tr>

										  </table>
										  </form>
										  </div>	</div></div></div>  <!--login div end-->   
														  
														<!--#############Call End#########-->
                          </div></div>   

															
															<!--#######################################Slider Add Stop###############################################################-->			
																		
																		 </div></div></div>  
                
  <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
                        
                        </div>
                    </div>
                   
                    
               
                                
                    
               
              
                
            </div>            
                 
        </div>
        
    </div>  
       
    <div class="footer">
        <div class="left">
            <div class="btn-group dropup">                
                <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="icon-cog"></span> Navigation</button>
                <ul class="dropdown-menu">
                    <li><a href="#" id="fixedNav">Show</a></li>
                    <li><a href="#" id="collapsedNav">Hide</a></li>                    
                </ul>
            </div>
                    
        </div>
        <div class="right">            
            &copy; 2013 Designed By IO
        </div>
    </div>    
    
</body>
</html>
