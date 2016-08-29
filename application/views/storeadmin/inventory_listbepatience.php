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
    var hi= confirm("Bu Siparisi Gercekten Silmek Istiyormusun  ?");
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
{$product_list.='<table cellpadding="0" cellspacing="0" width="100%" class="table-hover">
                        <thead>
                            <tr>
                                <th width="25%">
                                   AD/SOYAD
                                </th>
                                <th width="25%">
                                   TELEFON
                                </th>
                                <th width="25%">
                                   Rezerv. Sayi
                                </th>
                                <th width="25%">
                                   Rezerv. Tarihi
                                </th>
								<th width="25%">
                                  Rezerv. Saat
                                </th>
								<th width="25%">
                                   Açıklama
                                </th>
								<th width="25%">
                                   TARİH
                                </th>
								<th width="25%">
                                  Rezerv. DURUMU
                                </th><th width="25%">
                                   DÜZENLE
                                </th>
                            </tr>
                        </thead>
                        <tbody>';

	while($row=mysql_fetch_array($sql))
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
	
	
	
	$product_list.="<td> <div id='admin_edit'><a href='".$url."ioc/orderOk?pid=$ioOrder_id'><div style='background-color:#eee;'>Rezerv. Yap</div><br/></a> 
	<a href='".$url."ioc/orderNo?pid=$ioOrder_id'><div style='background-color:#eee;'>Beklemeye Al</div></a>
	</a>&nbsp; <div id='admin_delete'><a href='".$url."ioc/inventory?deleteid=$ioOrder_id'><div style='background-color:#eee;'>Sil</div></a></div><br/></td>";
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
$sql=mysql_query("SELECT * FROM io_comment ORDER BY ioComment_date DESC");  //or ASC
$productCount=mysql_num_rows($sql); //count output amount
$url=base_url();
if($productCount>0)
{   $comment_list='<table cellpadding="0" cellspacing="0" width="100%" class="table-hover">
                        <thead>
                            <tr>
                                <th width="25%">
                                   AD/SOYAD
                                </th>
                                <th width="25%">
                                   E-MAIL
                                </th>
                                <th width="25%">
                                   KONU BAŞLIĞI
                                </th>
                                <th width="25%">
                                   YORUM/SORU
                                </th>
								<th width="25%">
                                   CEVAP
                                </th>
								<th width="25%">
                                   TARİH
                                </th>
								<th width="25%">
                                   YAYINDA
                                </th>
								<th width="25%">
                                   DÜZENLE
                                </th>
                            </tr>
                        </thead>
                        <tbody>';

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
	
	
	
	$comment_list.='<td style="color:'.$color.'">
	<div style="width:100px;" id="admin_edit">
	<a href="'.$url.'ioc/commentOk?pid='.$ioComment_id.'">Yayınla</a> </br>
	<a href="'.$url.'ioc/commentNo?pid='.$ioComment_id.'">Yayından Kaldır</a></br>
	<a href="'.$url.'ioc/commentAnswer?pid='.$ioComment_id.'">Yorumu Cevapla</a></br>
	</a>&nbsp; <div id="admin_delete"><a href="'.$url.'ioc/inventory?commentDeleteid='.$ioComment_id.'">Sil</a></div><br/></td>';
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
$call_list="";
if($call_list==""){
$sql=mysql_query("SELECT * FROM io_call ORDER BY ioCall_date DESC");  //or ASC
$productCount=mysql_num_rows($sql); //count output amount
$url=base_url();
if($productCount>0)
{
 $call_list='<table cellpadding="0" cellspacing="0" width="100%" class="table-hover">
                        <thead>
                            <tr>
                                <th width="25%">
                                   AD/SOYAD
                                </th>
                                <th width="25%">
                                   TELEFON
                                </th>
                                <th width="25%">
                                   SİPARİŞ
                                </th>
								<th width="25%">
                                   ADRES
                                </th> 
								<th width="25%">
                                   TARİH
                                </th>
                                <th width="25%">
                                   GÖNDERİLME DURUMU
                                </th>
								<th width="25%">
                                   DÜZENLE
                                </th>
							
                        </thead>
                        <tbody>';
	while($row=mysql_fetch_array($sql))
	{
	
	$ioCall_id=$row["ioCall_id"];
	$ioCall_name=$row["ioCall_name"];
	$ioCall_phone=$row["ioCall_phone"];
	$ioCall_order=$row["ioCall_order"];
	$ioCall_address=$row["ioCall_address"];
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
	
	
	$call_list.='     <tr>
                                <td style="color:'.$color.'">
                                    '.$ioCall_name.'
                             </td><td style="color:'.$color.'">
                                    '.$ioCall_phone.'
                               </td>
							   <td style="color:'.$color.'">
                                    '.$ioCall_order.'
                               </td>
							   <td style="color:'.$color.'">
                                    '.$ioCall_address.'
                               </td>
							   <td style="color:'.$color.'">
                                    '.$ioCall_date.'
                                </td><td style="color:'.$color.'">
                                    '.$ioCall_statusx.'
                                 </td>
                              
                            ';


	$call_list.="<td>
	<div style='width: 100px;' id='admin_edit'>
	<a href='".$url."ioc/callOk?cid=$ioCall_id'>Gönderildi</a> </br>
	<a href='".$url."ioc/callNo?cid=$ioCall_id'>Beklemede</a></br>
	
	</a>&nbsp; <div id='admin_delete'><a href='".$url."ioc/inventory?callId=$ioCall_id'>Sil</a></div><br/></td>";
$call_list.='<tr>';
	}
	
	$call_list.='</tbody>
                    </table>';
	
	
		
	}else
	
	{
	$call_list="Listelenecek Sipariş Bulunmamaktadır";	
		
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
                        <a href="#"><span class="icon-cog icon-white"></span> Ayarlar</a>
                    </div>
                    <div class="itemLink">
                        <a href="#"><span class="icon-comment icon-white"></span> Mesajlar</a>
                    </div>                    
                    <div class="itemLink">
                        <a href="<?php echo base_url();?>ioc/killAdmin"><span class="icon-off icon-white"></span> Çıkış</a>
                    </div>                                        
                </div>                
            </div>
            
        </div>
        
    </div> 
     <div class="navigation">

        <ul class="main">
            <li><a href="index.html"><span class="icom-screen"></span><span class="text">Main</span></a></li>
            <li><a href="#ui"><span class="icom-bookmark"></span><span class="text">UI elements</span></a></li>
            <li><a href="#forms"><span class="icom-pencil3"></span><span class="text">Forms stuff</span></a></li>
            <li><a href="#tables"><span class="icom-newspaper"></span><span class="text">Tables</span></a></li>
            <li><a href="#media"><span class="icom-videos"></span><span class="text">Media & Files</span></a></li>            
            <li><a href="#stats"><span class="icom-stats-up"></span><span class="text">Statistic</span></a></li>
            <li><a href="typography.html" class="active"><span class="icom-clipboard1"></span><span class="text">Typography</span></a></li>
            <li><a href="#samples"><span class="icom-box-add"></span><span class="text">Samples</span></a></li>
            <li><a href="#other"><span class="icom-star1"></span><span class="text">Other</span></a></li>            
        </ul>
        
        <div class="control"></div>   </div>
		
		
	
		
		
		
		
		
		 <div class="content">      
        <div class="row-fluid typography">

            <div class="widget">
                
                <div class="block">
                    
                    <h1>h1. Heading 1</h1>
                    <h2>h2. Heading 2</h2>
                    <h3>h3. Heading 3</h3>
                    <h4>h4. Heading 4</h4>
                    <h5>h5. Heading 5</h5>
                    <h6>h6. Heading 6</h6>
                    <div class="row-fluid">
                        <div class="span12">
                               
      
   
		                  		 <div class="login" id="login">
        <div class="wrap">
          
	
			
			<h1></h1>
			<div align="center" id="mainWrapper">

      <div class="widget">
                    <div class="head">
                       
                        <h2></h2>
                    </div>                        
                    <div class="tabs">                    
                        <ul>
                            <li><a href="#tabs-3">SİPARİŞLER</a></li>
                            <li><a href="#tabs-2">YORUMLAR</a></li>
                            <li><a href="#tabs-1">REZERVASYONLAR</a></li>
                        </ul>                        

                        <div id="tabs-1">
	 <!--######################################################Siparis Listesi Begin########################################################################################33-->
										  
										<div id="invList">
										<div class="prodList">
										   <h1>&nbsp;</h1>
										 </div>
										<!-- Admin paneli Urun Listeleme Syfasi Urun Arama -->
											
										 <form id="search_formInv" method="post" action="<?= site_url('site/search_inventory');?>">
											<div class="invNav">
												<label for="phrase"></label>
											  
											</div>
											   
											</form>
										 <!--Urun Arama Bitis-->
										   <div class="widget">
														<div class="head dark">
															<div class="icon"><span class="icos-paragraph-justify"></span></div>
															<h2> REZERVASYON BİLGİLERİ</h2>                    
														</div>                
														<div class="block-fluid">
														
															   
																	  <?php echo $product_list; ?>   
															   
														</div>                
													</div>

										  </div>
										  
<!--###########################################################Siparis listesi End#####################################################################--></p>
                        </div>                        

                        <div id="tabs-2">
		<!--###########################################Yorumlar Begin#####################################################################################-->
												  <div id="invList">
												<div class="prodList">
												   <h1> &nbsp;</h1>
												 </div>
												<!-- Admin paneli Urun Listeleme Syfasi Urun Arama -->
													
												 <form id="search_formInv" method="post" action="<?= site_url('site/search_inventory');?>">
													<div class="invNav">
														<label for="phrase"></label>
													  
													</div>
													   
													</form>
												 <!--Urun Arama Bitis-->
												   <div class="widget">
																<div class="head dark">
																	<div class="icon"><span class="icos-paragraph-justify"></span></div>
																	<h2>YORUMLAR</h2>                    
																</div>                
																<div class="block-fluid">
															  
																	   
																			  <?php echo $comment_list; ?>   
																		
																</div>                
															</div>

												  </div>


<!--###################################################Yorumlar End#############################################################################--></p>
                        </div>

                        <div id="tabs-3">
			<!--###################################################Call Begin#############################################################################-->
														  <div id="invList">
														<div class="prodList">
														   <h1> &nbsp;</h1>
														 </div>
														<!-- Admin paneli Urun Listeleme Syfasi Urun Arama -->
															
														 <form id="search_formInv" method="post" action="<?= site_url('site/search_inventory');?>">
															<div class="invNav">
																<label for="phrase"></label>
															  
															</div>
															   
															</form>
														 <!--Urun Arama Bitis-->
														   <div class="widget">
																		<div class="head dark">
																			<div class="icon"><span class="icos-paragraph-justify"></span></div>
																			<h2>SİPARİŞ LİSTESİ</h2>                    
																		</div>                
																		<div class="block-fluid">
																		 
																			   
																					  <?php echo $call_list; ?>   
																				
																		</div>                
																	</div>

														  </div>
														  
  <!--#########################################################Call End#############################################################################################--></p>
                          
                        </div>    
                    </div>
                </div>   
  <!--##############################################################################################################################################33-->
  </div>
  <p>
</div>
</div>   <!--login div end-->




							   
                        </div>
                    </div>
                    <h4>Emphasis</h4>
                    <p><small>This line of text is meant to be treated as fine print.</small></p>                    
                    
                    <h4>Bold</h4>
                    <p>The following snippet of text is <strong>rendered as bold text</strong></p>
                    
                    <h4>Italic</h4>
                    <p>The following snippet of text is <em>rendered as italicized text</em></p>
                    
                    <h4>Emphasis classes</h4>
                    <p class="muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                    <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                    <p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p class="text-info">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
                    <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>                    
                    
                    <h4>Blockquotes</h4>
                    <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                    </blockquote>                    
                    
                    <blockquote class="pull-right">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                    
                    <div class="clearfix"></div>
                    
                    <h4>Lists</h4>
                    <h5>Default</h5>
                    <div class="row-fluid">
                        <div class="span6">
                            <ul>
                                <li>Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</li>
                                <li>Etiam porta sem malesuada magna mollis euismod.</li>
                                <li>Donec ullamcorper nulla non metus auctor fringilla.</li>
                                <li>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</li>
                                <li>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</li>
                            </ul>
                        </div>
                        <div class="span6">
                            <ol>
                                <li>Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</li>
                                <li>Etiam porta sem malesuada magna mollis euismod.</li>
                                <li>Donec ullamcorper nulla non metus auctor fringilla.</li>
                                <li>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</li>
                                <li>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</li>
                            </ol>
                        </div>
                    </div>
                    <h5>Styled</h5>
                    <div class="row-fluid">
                        <div class="span6">
                            <ul class="blue">
                                <li>Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</li>
                                <li>Etiam porta sem malesuada magna mollis euismod.</li>
                                <li>Donec ullamcorper nulla non metus auctor fringilla.</li>
                                <li>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</li>
                                <li>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</li>
                            </ul>
                        </div>
                        <div class="span6">
                            <ul class="red">
                                <li>Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</li>
                                <li>Etiam porta sem malesuada magna mollis euismod.</li>
                                <li>Donec ullamcorper nulla non metus auctor fringilla.</li>
                                <li>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</li>
                                <li>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</li>
                            </ul>
                        </div>
                    </div>                    
                    
                    <h4>Description</h4>
                    <h5>Vertical</h5>
                    <div class="row-fluid">
                        <div class="span6">                    
                            <dl>
                                <dt>Description lists</dt>
                                    <dd>A description list is perfect for defining terms.</dd>
                                <dt>Euismod</dt>
                                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                <dt>Malesuada porta</dt>
                                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                            </dl>                    
                        </div>
                        <div class="span6">
                            <dl class="red">
                                <dt>Description lists</dt>
                                    <dd>A description list is perfect for defining terms.</dd>
                                <dt>Euismod</dt>
                                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                <dt>Malesuada porta</dt>
                                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                            </dl>                                                
                        </div>
                    </div>
                    <h5>Horizontal</h5>
                    <div class="row-fluid">
                        <div class="span6">
                            <dl class="dl-horizontal">
                                <dt>Description lists</dt>
                                    <dd>A description list is perfect for defining terms.</dd>
                                <dt>Euismod</dt>
                                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                <dt>Malesuada porta</dt>
                                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                <dt>Felis euismod semper eget lacinia</dt>
                                    <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                            </dl>                            
                        </div>
                        <div class="span6">
                            <dl class="dl-horizontal red">
                                <dt>Description lists</dt>
                                    <dd>A description list is perfect for defining terms.</dd>
                                <dt>Euismod</dt>
                                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                <dt>Malesuada porta</dt>
                                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                <dt>Felis euismod semper eget lacinia</dt>
                                    <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                            </dl>                            
                        </div>                        
                    </div>
                </div>
                
            </div>            
                 
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
                     
   
   
    
    
    
</body>
</html>