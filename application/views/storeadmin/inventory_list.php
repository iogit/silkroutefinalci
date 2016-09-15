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
    var hi= confirm("Please confirm the deletion");
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
if(isset($_GET['blog_id_to_remove'])){

$message='<SCRIPT language="JavaScript">

{
    var hi= confirm("Please confirm the deletion");
    if (hi== true){
       window.location.href ="'.$url.'inventory?ioBlog_id='.$_GET['blog_id_to_remove'].'";
    }else{
        window.location.href ="'.$url.'inventory";
    }
}
 </SCRIPT>';
/*$message=''.$_GET['deleteid'].' Numarali Urunu Gercekten Silmek Istiyormusun ? <a href="'.$url.'inventory?yesdelete='.$_GET['deleteid'].'">Yes</a>|<a href="'.$url.'inventory">No</a>';*/

echo $message;

exit();

}
if(isset($_GET['ioBlog_id'])){
//remove item form system and delete its picture
//delete from database first
$blogid_to_delete=$_GET['ioBlog_id'];
$sql=$this->db->query("DELETE FROM io_blog where ioBlog_id='$blogid_to_delete' LIMIT 1") or die(mysql_error);

//unlink the picture
$pictodelete=("images/blog_images/$blogid_to_delete.jpg");
if(file_exists($pictodelete)){
	
	unlink($pictodelete);
	}

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
    var hi= confirm("Please confirm the deletion");
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
                                   Rezervation number
                                </th>
                                <th width="25%">
                                   Rezerv. date
                                </th>
								<th width="25%">
                                  Rezerv. hour
                                </th>
								<th width="25%">
                                   Description
                                </th>
								<th width="25%">
                                   Date
                                </th>
								<th width="25%">
                                  Rezerv. status
                                </th><th width="25%">
                                   Edit
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
	<a href='".$url."orderNo?pid=$ioOrder_id'><div style='background-color:#eee;'><button class='btn btn-primary btn-block'>Suspend</button></div></a>
	</a>&nbsp; <div id='admin_delete'><a href='".$url."inventory?deleteid=$ioOrder_id'><div style='background-color:#eee;'><button class='btn btn-primary btn-block'>Delete</button></div></a></div></td>";
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
                                   Edit
                                </th>
                            </tr>
                        </thead>
                        <tbody>';

	foreach($sql->result_array() as $row)
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
	<a href="'.$url.'commentOk?pid='.$ioComment_id.'"><button class="btn btn-primary btn-block">Publish</button></a> 
	<a href="'.$url.'commentNo?pid='.$ioComment_id.'"><button class="btn btn-primary btn-block">Withdraw</button></a>
	<a href="'.$url.'commentAnswer?pid='.$ioComment_id.'"><button class="btn btn-primary btn-block">Answer</button></a>
	</a>&nbsp; <div id="admin_delete"><a href="'.$url.'inventory?commentDeleteid='.$ioComment_id.'"><button class="btn btn-primary btn-block">Delete</button></a></div></td>';
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
                                   Views
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
	foreach($sql->result_array() as $row)
	{
	
	$ioBlog_id=$row["ioBlog_id"];
	$ioBlog_title=$row["ioBlog_title"];
	$ioBlog_content=$row["ioBlog_content"];
	$ioBlog_view=$row["ioBlog_view"];
	$ioBlog_date=$row["ioBlog_date"];
	$ioBlog_live=$row["ioBlog_live"];
	
	
	$ioBlog_date=$row["ioBlog_date"];

	$ioBlog_contentsub = substr($ioBlog_content, 0, 125);
	$ioBlog_contentsub.='...';
	
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
                                      <img width="200px" height="auto" src="'.base_url().'images/blog_images/'.$ioBlog_id.'.jpg" class="img-polaroid"/>
                             </td><td style="color:'.$color.'">
                                    '.$ioBlog_title.'
                               </td>
							   <td style="color:'.$color.'">
                                    '.$ioBlog_contentsub.'
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
	<a href='".$url."blogOk?bid=$ioBlog_id'><button class='btn btn-primary btn-block'>Publish</button></a>
	<a href='".$url."blogNo?bid=$ioBlog_id'><button class='btn btn-primary btn-block'>Withdraw</button></a>
	
	</a>&nbsp; <div id='admin_delete'><a href='".$url."inventory?blog_id_to_remove=$ioBlog_id'><button class='btn btn-primary btn-block'>Delete</button></a></div></td>";
$blog_list.='<tr>';
	}
	
	$blog_list.='</tbody>
                    </table>';
	
	
		
	}else
	
	{
	$blog_list="Listelenecek Makale Bulunmamaktadır";	
		
		}

}
?>







<?php
//this block grabs the whole list for viewing
$news_list="";
if($news_list==""){
$sql=$this->db->query("SELECT * FROM io_news ORDER BY ioNews_date DESC");  //or ASC
$productCount=$sql->num_rows(); //count output amount
$url=base_url();
if($productCount>0)
{
$news_list.='<table cellpadding="0" cellspacing="0" width="100%" class="table-hover">
                        <thead>
                            <tr>
                                <th width="25%">
                                   Image
                                </th><th width="25%">
                                   Title
                                </th>
                                <th width="25%">
                                   Content
                                </th>
                                <th width="25%">
                                   Youtube link
                                </th>
                                <th width="25%">
                                   Date
                                </th>
								
								<th width="25%">
                                   Settings
                                </th>
                            </tr>
                        </thead>
                        <tbody>';

	foreach($sql->result_array() as $row)
	{
	
	
	$ioNews_id=$row["ioNews_id"];
	$ioNews_title=$row["ioNews_title"];
	$ioNews_content=$row["ioNews_content"];
	$ioNews_link=$row["ioNews_link"];
	$ioNews_date=$row["ioNews_date"];
	
	$ioNews_content="Içerik Bu Alanda Gösterilemez, İçeriğe Ait Başlığı Bulup İşlem Yapınız";
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	
    $color="#333333";
	$news_list.='     <tr>      <td style="color:'.$color.'">
                                      <img width="200px" height="auto" src="'.base_url().'images/news_images/'.$ioNews_id.'.jpg" class="img-polaroid"/>
                             </td>
                                <td style="color:'.$color.'">
                                    '.$ioNews_title.'
                             </td><td style="color:'.$color.'">
                                    '.$ioNews_content.'
                               </td><td style="color:'.$color.'">
                                    '.$ioNews_link.'
                               </td><td style="color:'.$color.'">
                                    '.$ioNews_date.'
                                </td>
								 
								
                              
                            ';
	
	
	
	$news_list.="<td> <div id='admin_edit'>
	
	</a>&nbsp; <div id='admin_delete'><a href='".$url."inventory?deleteNewsId=$ioNews_id'><div style='background-color:#eee;'><button class='btn btn-primary btn-block'>Delete</button></div></a></div></td>";
$news_list.='<tr>';
	}
	
	$news_list.=' </tbody>
                    </table>';
	
	
		
	}else
	
	{
	$news_list="Listelenecek Haber Bulunmamaktadır";	
		
		}

}
?>


<?php
//this block grabs the whole list for viewing
$slider_list="";
if($slider_list==""){
$sql=$this->db->query("SELECT * FROM io_slider ORDER BY ioSlider_date DESC");  //or ASC
$productCount=$sql->num_rows(); //count output amount
$url=base_url();
if($productCount>0)
{
$slider_list.='<table cellpadding="0" cellspacing="0" width="100%" class="table-hover">
                        <thead>
                            <tr>
                                <th width="25%">
                                   Image
                                </th><th width="25%">
                                   Title
                                </th>
                                <th width="25%" style="overflow-x:scroll;">
                                   Content
                                </th>
                               
                                <th width="25%">
                                   Date
                                </th>
								
								<th width="25%">
                                   Settings
                                </th>
                            </tr>
                        </thead>
                        <tbody>';

	foreach($sql->result_array() as $row)
	{
	
	
	$ioSlider_id=$row["ioSlider_id"];
	$ioSlider_title=$row["ioSlider_title"];
	$ioSlider_text=$row["ioSlider_text"];
	
	$ioSlider_date=$row["ioSlider_date"];
	
	$ioSlider_text="Içerik Bu Alanda Gösterilemez, İçeriğe Ait Başlığı Bulup İşlem Yapınız";
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	
    $color="#333333";
	$slider_list.='     <tr>      <td style="color:'.$color.'">
                                      <img width="200px" height="auto" src="'.base_url().'placeholders/slider/'.$ioSlider_id.'.jpg" class="img-polaroid"/>
                             </td>
                                <td style="color:'.$color.'">
                                    '.$ioSlider_title.'
                             </td><td style="color:'.$color.'; width:100px;">
                                    '.$ioSlider_text.'
                               </td><td style="color:'.$color.'">
                                    '.$ioSlider_date.'
                                </td>
								 
								
                              
                            ';
	
	
	
	$slider_list.="<td> <div id='admin_edit'>
	
	</a>&nbsp; <div id='admin_delete'><a href='".$url."inventory?deleteSliderId=$ioSlider_id'><div style='background-color:#eee;'><button class='btn btn-primary btn-block'>Delete</button></div></a></div></td>";
$slider_list.='<tr>';
	}
	
	$slider_list.=' </tbody>
                    </table>';
	
	
		
	}else
	
	{
	$slider_list="Listelenecek Slider Bulunmamaktadır";	
		
		}

}
?>







<?php 
//delete item question to admin 
$url=base_url();
if(isset($_GET['deleteNewsId'])){

$message='<SCRIPT language="JavaScript">

{
    var hi= confirm("Please confirm the deletion");
    if (hi== true){
       window.location.href ="'.$url.'inventory?yesdeleteNews='.$_GET['deleteNewsId'].'";
    }else{
        window.location.href ="'.$url.'inventory";
    }
}
 </SCRIPT>';
/*$message=''.$_GET['deleteid'].' Numarali Urunu Gercekten Silmek Istiyormusun ? <a href="'.$url.'inventory?yesdelete='.$_GET['deleteid'].'">Yes</a>|<a href="'.$url.'inventory">No</a>';*/

echo $message;

exit();

}
if(isset($_GET['yesdeleteNews'])){
//remove item form system and delete its picture
//delete from database first
$id_to_delete=$_GET['yesdeleteNews'];
$sql=$this->db->query("DELETE FROM io_news where ioNews_id='$id_to_delete' LIMIT 1") or die(mysql_error);

//unlink the picture
$pictodelete=("images/news_images/$id_to_delete.jpg");
if(file_exists($pictodelete)){
	
	unlink($pictodelete);
	}

  redirect("inventory");
exit();

}



?>


<?php 
//delete item question to admin inventory?deleteSliderId=$ioSlider_id
$url=base_url();
if(isset($_GET['deleteSliderId'])){

$message='<SCRIPT language="JavaScript">

{
    var hi= confirm("Please confirm the deletion of this slider");
    if (hi== true){
       window.location.href ="'.$url.'inventory?yesdeleteSlider='.$_GET['deleteSliderId'].'";
    }else{
        window.location.href ="'.$url.'inventory";
    }
}
 </SCRIPT>';
/*$message=''.$_GET['deleteid'].' Numarali Urunu Gercekten Silmek Istiyormusun ? <a href="'.$url.'inventory?yesdelete='.$_GET['deleteid'].'">Yes</a>|<a href="'.$url.'inventory">No</a>';*/

echo $message;

exit();

}
if(isset($_GET['yesdeleteSlider'])){
//remove item form system and delete its picture
//delete from database first
$id_to_delete=$_GET['yesdeleteSlider'];
$sql=$this->db->query("DELETE FROM io_slider where ioSlider_id='$id_to_delete' LIMIT 1") or die(mysql_error);

//unlink the picture
$pictodelete=("placeholders/slider/$id_to_delete.jpg");
if(file_exists($pictodelete)){
	
	unlink($pictodelete);
	}

  redirect("inventory");
exit();

}



?>
<?php
//this block grabs the whole list for viewing
$picture_list="";
if($picture_list==""){
$sql=$this->db->query("SELECT * FROM io_gallerypic ORDER BY iogallerypic_date DESC");  //or ASC
$productCount=$sql->num_rows(); //count output amount
$url=base_url();
if($productCount>0)
{
 $picture_list='<table cellpadding="0" cellspacing="0" width="100%" class="table-hover">
                        <thead>
                            <tr>
                                <th width="25%">
                                   Image
                                </th>
                                <th width="25%">
                                   Title
                                </th>
                              
								<th width="25%">
                                   Date
                                </th>
                                
								<th width="25%">
                                   Settings
                                </th>
							
                        </thead>
                        <tbody>';
	foreach($sql->result_array() as $row)
	{
	
	$iogallerypic_id=$row["iogallerypic_id"];
	$iogallerypic_title=$row["iogallerypic_title"];
    $iogallerypic_date=$row["iogallerypic_date"];

	
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	/*
	if($ioBlog_live==0)
	{	$color="red";
	    $ioBlog_statusx="Beklemede";
	}else
	{	$color="";
	  $ioBlog_statusx="Arandı";
	}
	*/
	
	$picture_list.='     <tr>
                                <td style="color:'.$color.'">
                                    <img width="200px" height="auto" src="'.base_url().'images/gallerypics_images/'.$iogallerypic_id.'.jpg" class="img-polaroid"/>
                             </td><td style="color:'.$color.'">
                                    '.$iogallerypic_title.'
                               </td>
							
							   <td style="color:'.$color.'">
                                    '.$iogallerypic_date.'
                                </td>
                              
                            ';


	$picture_list.="<td>
	<div style='width: 100px;' id='admin_edit'>
	
	
	</a>&nbsp; <div id='admin_delete'><a href='".$url."inventory?picture_id_to_remove=$iogallerypic_id'><button class='btn btn-primary btn-block'>Delete</button></a></div></td>";
$picture_list.='<tr>';
	}
	
	$picture_list.='</tbody>
                    </table>';
	
	
		
	}else
	
	{
	$picture_list="Listelenecek Resim Bulunmamaktadır";	
		
		}

}
?>
<?php 
//delete item question to admin 
$url=base_url();
if(isset($_GET['picture_id_to_remove'])){

$message='<SCRIPT language="JavaScript">

{
    var hi= confirm("Please confirm the deletion of this image");
    if (hi== true){
       window.location.href ="'.$url.'inventory?yesdeletepic='.$_GET['picture_id_to_remove'].'";
    }else{
        window.location.href ="'.$url.'inventory";
    }
}
 </SCRIPT>';
/*$message=''.$_GET['deleteid'].' Numarali Urunu Gercekten Silmek Istiyormusun ? <a href="'.$url.'inventory?yesdelete='.$_GET['deleteid'].'">Yes</a>|<a href="'.$url.'inventory">No</a>';*/

echo $message;

exit();

}
if(isset($_GET['yesdeletepic'])){
//remove item form system and delete its picture
//delete from database first
$id_to_delete=$_GET['yesdeletepic'];
$sql=$this->db->query("DELETE FROM io_gallerypic where iogallerypic_id='$id_to_delete' LIMIT 1") or die(mysql_error);

//unlink the picture
$pictodelete=("images/gallerypics_images/$id_to_delete.jpg");
if(file_exists($pictodelete)){
	
	unlink($pictodelete);
	}

  redirect("inventory");
exit();

}



?>
<?php
//this block grabs the whole list for viewing
$video_list="";
if($video_list==""){
$sql=$this->db->query("SELECT * FROM io_galleryvid ORDER BY iogalleryvid_date DESC");  //or ASC
$productCount=$sql->num_rows(); //count output amount
$url=base_url();
if($productCount>0)
{
 $video_list='<table cellpadding="0" cellspacing="0" width="100%" class="table-hover">
                        <thead>
                            <tr>
                                
                                <th width="25%">
                                   Title
                                </th>
                              <th width="25%">
                                   Link
                                </th>
								<th width="25%">
                                   Date
                                </th>
                                
								<th width="25%">
                                   Settings
                                </th>
							
                        </thead>
                        <tbody>';
	foreach($sql->result_array() as $row)
	{
	
	$iogalleryvid_id=$row["iogalleryvid_id"];
	$iogalleryvid_title=$row["iogalleryvid_title"];
	$iogalleryvid_link=$row["iogalleryvid_link"];
    $iogalleryvid_date=$row["iogalleryvid_date"];

	
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	/*
	if($ioBlog_live==0)
	{	$color="red";
	    $ioBlog_statusx="Beklemede";
	}else
	{	$color="";
	  $ioBlog_statusx="Arandı";
	}
	*/
	
	$video_list.='     <tr>
                                <td style="color:'.$color.'">
                                    '.$iogalleryvid_title.'
                             </td><td style="color:'.$color.'">
                                    '.$iogalleryvid_link.'
                               </td>
							
							   <td style="color:'.$color.'">
                                    '.$iogalleryvid_date.'
                                </td>
                              
                            ';


	$video_list.="<td>
	<div style='width: 100px;' id='admin_edit'>
	
	
	</a>&nbsp; <div id='admin_delete'><a href='".$url."inventory?video_id_to_remove=$iogalleryvid_id'><button class='btn btn-primary btn-block'>Delete</button></a></div></td>";
$video_list.='<tr>';
	}
	
	$video_list.='</tbody>
                    </table>';
	
	
		
	}else
	
	{
	$video_list="Listelenecek Video Bulunmamaktadır";	
		
		}

}
?>

<?php
//this block grabs the whole list for viewing
$message_list="";
if($message_list==""){
$sqlmessage=$this->db->query("SELECT * FROM io_message ORDER BY ioMessage_date DESC");  //or ASC
$messageCount=$sqlmessage->num_rows(); //count output amount
$url=base_url();
if($messageCount>0)
{
 $message_list='<table cellpadding="0" cellspacing="0" width="100%" class="table-hover">
                        <thead>
                            <tr>
                                
                                <th width="25%">
                                   Name
                                </th>
                              <th width="25%">
                                   E-mail
                                </th> <th width="25%">
                                   Message
                                </th>
								<th width="25%">
                                   Date
                                </th>
                                
								<th width="25%">
                                   Settings
                                </th>
							
                        </thead>
                        <tbody>';
	foreach($sqlmessage->result_array() as $row)
	{
	
	$ioMessage_id=$row["ioMessage_id"];
	
	$ioMessage_name=$row["ioMessage_name"];
	$ioMessage_email=$row["ioMessage_email"];
	$ioMessage_message=$row["ioMessage_message"];
    $ioMessage_date=$row["ioMessage_date"];

	$messageid=$row["ioMessage_id"];
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	/*
	if($ioBlog_live==0)
	{	$color="red";
	    $ioBlog_statusx="Beklemede";
	}else
	{	$color="";
	  $ioBlog_statusx="Arandı";
	}
	*/
	
	$message_list.='     <tr>
                                <td style="color:'.$color.'">
                                    '.$ioMessage_name.'
                             </td><td style="color:'.$color.'">
                                    '.$ioMessage_email.'
                               </td><td style="color:'.$color.'">
                                    '.$ioMessage_message.'
                               </td>
							
							   <td style="color:'.$color.'">
                                    '.$ioMessage_date.'
                                </td>
                              
                            ';


	$message_list.="<td>
	<div style='width: 100px;' id='admin_edit'>
	
	
	</a>&nbsp; <div id='admin_delete'><a href='".$url."inventory?message_id_to_remove=$messageid'><button class='btn btn-primary btn-block'>Delete</button></a></div></td>";
$message_list.='<tr>';
	}
	
	$message_list.='</tbody>
                    </table>';
	
	
		
	}else
	
	{
	$message_list="Listelenecek Mesaj Bulunmamaktadır";	
		
		}

}
?>
<?php 
//delete item question to admin 
$url=base_url();
if(isset($_GET['message_id_to_remove'])){

$message='<SCRIPT language="JavaScript">

{
    var hi= confirm("Please confirm the deletion of this message");
    if (hi== true){
       window.location.href ="'.$url.'inventory?yesdeletemes='.$_GET['message_id_to_remove'].'";
    }else{
        window.location.href ="'.$url.'inventory";
    }
}
 </SCRIPT>';
/*$message=''.$_GET['deleteid'].' Numarali Urunu Gercekten Silmek Istiyormusun ? <a href="'.$url.'inventory?yesdelete='.$_GET['deleteid'].'">Yes</a>|<a href="'.$url.'inventory">No</a>';*/

echo $message;

exit();

}
if(isset($_GET['yesdeletemes'])){
//remove item form system and delete its picture
//delete from database first
$id_to_delete=$_GET['yesdeletemes'];
$sql=$this->db->query("DELETE FROM io_message where ioMessage_id='$id_to_delete' LIMIT 1") or die(mysql_error);

//unlink the picture
/*
$vidtodelete=("images/galleryvids_images/$id_to_delete.jpg");
if(file_exists($vidtodelete)){
	
	unlink($vidtodelete);
	}
*/
  redirect("inventory");
exit();

}



?>


<?php 
//delete item question to admin 
$url=base_url();
if(isset($_GET['video_id_to_remove'])){

$message='<SCRIPT language="JavaScript">

{
    var hi= confirm("Please confirm the deletion of this video");
    if (hi== true){
       window.location.href ="'.$url.'inventory?yesdeletevid='.$_GET['video_id_to_remove'].'";
    }else{
        window.location.href ="'.$url.'inventory";
    }
}
 </SCRIPT>';
/*$message=''.$_GET['deleteid'].' Numarali Urunu Gercekten Silmek Istiyormusun ? <a href="'.$url.'inventory?yesdelete='.$_GET['deleteid'].'">Yes</a>|<a href="'.$url.'inventory">No</a>';*/

echo $message;

exit();

}
if(isset($_GET['yesdeletevid'])){
//remove item form system and delete its picture
//delete from database first
$id_to_delete=$_GET['yesdeletevid'];
$sql=$this->db->query("DELETE FROM io_galleryvid where iogalleryvid_id='$id_to_delete' LIMIT 1") or die(mysql_error);

//unlink the picture

$vidtodelete=("images/galleryvids_images/$id_to_delete.jpg");
if(file_exists($vidtodelete)){
	
	unlink($vidtodelete);
	}

  redirect("inventory");
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
    
    <title>Admin Panel - IO </title>
    
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
                        <a href="#"><span class="icon-cog icon-white"></span> Ayarlar</a>
                    </div>
                    <div class="itemLink">
                        <a href="#tabs-2"><span class="icon-comment icon-white"></span> Mesajlar (<?php echo $messageCount;?>)</a>
                    </div>                    
                    <div class="itemLink">
                        <a href="<?php echo base_url();?>killAdmin"><span class="icon-off icon-white"></span> Çıkış</a>
                    </div>                                        
                </div>                
            </div>
            
        </div>
        
    </div> 
    
    <div class="navigation">

        <ul class="main">
           <li><a href="<?php echo base_url();?>master"><span class="icom-screen"></span><span class="text">Main page</span></a></li>
            <li><a href="<?php echo base_url();?>inventory_add"><span class="icom-box-add"></span><span class="text">Add</span></a></li>	
		<!--	<li><a href="<?php echo base_url();?>inventory_edit"><span class="icom-pencil3"></span><span class="text">Düzenle</span></a></li>      -->          
        </ul>
        
        <div class="control"></div>        
        
        <div class="submain">                

            <div id="default">
                
                <div class="widget-fluid userInfo clearfix">
                    <div class="image">
                        <img src="<?php echo base_url();?>img/adm/user.png" class="img-polaroid"/>
                    </div>              
                    <div class="name">Hoşgeldin <?php echo $manager;?></div>
                                  
				   <ul class="menuList">
                        <li><a href="#"><span class="icon-cog"></span>Settings</a></li>
                        <li><a href="#tabs-2"><span class="icon-comment"></span> Messages (<?php echo $messageCount;?>)<strong> <!--(<?php echo $messagecount;?>)--></strong></a></li>
                        <li><a href="<?php echo base_url();?>killAdmin?killID=<?php echo $managerID;?>"><span class="icon-share-alt"></span>Exit</a></li>                        
                    </ul>
                    <div class="text">
                        Welcome ! Last visit: <?php echo $admn_logDate; ?>
                    </div>
                </div>
                
                <div class="widget-fluid TAC">
                    <div class="epc mini">
                        <div class="epcm-red" data-percent="80"><span>0.0</span>%</div>
                        <div class="label label-important">Percentage</div>
                    </div>                    
                    <div class="epc mini">
                        <div class="epcm-green" data-percent="80"><span>0000</span>/0000</div>
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
                         <!--  <li><a href="#tabs-1">HABERLER</a></li>-->
                            <li><a href="#tabs-3">BLOG</a></li>
                            <li><a href="#tabs-2">Comments</a></li>
                            <li><a href="#tabs-4">Images</a></li>
                            <li><a href="#tabs-5">Videos</a></li>
                            <li><a href="#tabs-6">Messages</a></li>
                            <li><a href="#tabs-7">Slider</a></li>
                        </ul>                        

                       
																		<!--######Siparis Listesi Begin######\-->
										<!--   <div id="tabs-1">
										<div id="invList">
										<div class="prodList">
										   <h1>&nbsp;</h1>
										 </div>
									
											
										 <form id="search_formInv" method="post" action="<?= site_url('site/search_inventory');?>">
											<div class="invNav">
												<label for="phrase"></label>
											  
											</div>
											   
											</form>
										
										   <div class="widget">
														<div class="head dark">
															<div class="icon"><span class="icos-paragraph-justify"></span></div>
															<h2> Kayıtlı Haberler </h2>                    
														</div>                
														<div class="block-fluid">
														
															   
																	 <?php echo $news_list; ?>   
															   
														</div></div></div></div>    -->
										  
													<!--#####Siparis listesi End###########-->
                                            

                      
													<!--##########Yorumlar Begin#######################-->
											  <div id="tabs-2">
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
																	<h2>Yorumlar</h2>                    
																</div>                
																<div class="block-fluid">
															  
																	   
																			  <?php echo $comment_list; ?>   
																		
																</div></div></div></div>


										<!--######Yorumlar End############-->


														
										<!--#############Call Begin###############-->
														  <div id="tabs-3">
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
																			<h2>Makale Bilgileri</h2>                    
																		</div>                
																		<div class="block-fluid">
																		 
																			   
																					  <?php echo $blog_list; ?>   
																				
																		</div></div></div></div>
																		
																		
																		
																		<!--Picture Galleri Start-->
																		
																		 <div id="tabs-4">
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
																			<h2>Picture</h2>                    
																		</div>                
																		<div class="block-fluid">
																		 
																			   
																					  <?php echo $picture_list; ?>   
																				
																		</div></div></div></div>
																		<!--Picture Galleri Finish-->

																		<!--Video Galleri Start-->
																		
																		 <div id="tabs-5">
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
																			<h2>Video</h2>                    
																		</div>                
																		<div class="block-fluid">
																		 
																			   
																					  <?php echo $video_list; ?>   
																				
																		</div></div></div></div>
																		
																		
																		 <div id="tabs-6">
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
																			<h2>Message</h2>                    
																		</div>                
																		<div class="block-fluid">
																		 
																			   
																					  <?php echo $message_list; ?>   
																				
																		</div></div></div></div>
																		<!--Video Galleri Finish-->
																		<!--Slider Start-->
																		
																	  <div id="tabs-7">
										<div id="invList">
										<div class="prodList">
										   <h1>&nbsp;</h1>
										 </div>
									
											
										 <form id="search_formInv" method="post" action="<?= site_url('site/search_inventory');?>">
											<div class="invNav">
												<label for="phrase"></label>
											  
											</div>
											   
											</form>
										
										   <div class="widget">
														<div class="head dark">
															<div class="icon"><span class="icos-paragraph-justify"></span></div>
															<h2> Slider </h2>                    
														</div>                
														<div class="block-fluid">
														
															   
																	 <?php echo $slider_list; ?>   
															   
														</div></div></div></div>  
																		
																		
																		<!--Slider Finish-->
																		
																		
																		
																		
																		
																		
																		
																		
																		
																		
																		
																		
																		
																		
																		
																		
																		</div></div>   
																		
																		
																		 </div></div></div>   <!--login div end-->   
														  
														<!--#############Call End#########-->
                          
                
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
