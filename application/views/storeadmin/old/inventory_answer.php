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
	$messagecount=$existCount;
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
if(isset($_GET['pid'])){



 
 $answerThis=$_GET['pid'];
 
// echo $answerThis;
/*$message=''.$_GET['deleteid'].' Numarali Urunu Gercekten Silmek Istiyormusun ? <a href="'.$url.'ioc/inventory?yesdelete='.$_GET['deleteid'].'">Yes</a>|<a href="'.$url.'ioc/inventory">No</a>';*/





}




?>



<?php
//this block grabs the whole list for viewing
$comment_list="";
if($comment_list==""){
$sql=mysql_query("SELECT * FROM io_comment WHERE ioComment_id='$answerThis'");  //or ASC
$productCount=mysql_num_rows($sql); //count output amount
$messagecount=$productCount;
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
	
	
	
	$comment_list.='	
	<td style="color:'.$color.'">
	<div style="width:100px;" id="admin_edit">
	<a href="'.$url.'ioc/commentOk?pid='.$ioComment_id.'"><button class="btn btn-primary btn-block">Yayınla</button></a> 
	<a href="'.$url.'ioc/commentNo?pid='.$ioComment_id.'"><button class="btn btn-primary btn-block">Yayından Kaldır</button></a>
	<a href="'.$url.'ioc/commentAnswer?pid='.$ioComment_id.'"><button class="btn btn-primary btn-block">Yorumu Cevapla</button></a>
	</a>&nbsp; <div id="admin_delete"><a href="'.$url.'ioc/inventory?commentDeleteid='.$ioComment_id.'"><button class="btn btn-primary btn-block">Sil</button></a></div></td>';
$comment_list.='<tr>';
	}
	$comment_list.='</tbody>   </table>';
	
	
		
	}else
	
	{
	$comment_list="Listelenecek Yorum Bulunmamaktadır";	
		
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
    
    <title>Yönetici Paneli</title>
    
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
                        <a href="#tabs-2"><span class="icon-comment icon-white"></span> Mesajlar</a>
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
            <li><a href="<?php echo base_url();?>ioc/master"><span class="icom-screen"></span><span class="text">Ana Sayfa</span></a></li>
                  
        </ul>
        
        <div class="control"></div>        
        
        <div class="submain">                

            <div id="default">
                
                <div class="widget-fluid userInfo clearfix">
                    <div class="image">
                        <img src="<?php echo base_url();?>img/adm/examples/users/dmitry.jpg" class="img-polaroid"/>
                    </div>              
                    <div class="name">Hoşgeldin <?php echo $manager;?></div>
                    <ul class="menuList">
                        <li><a href="#"><span class="icon-cog"></span>Ayarlar</a></li>
                        <li><a href="#tabs-2"><span class="icon-comment"></span> Mesajlar<strong> (<?php echo $messagecount;?>)</strong></a></li>
                        <li><a href="<?php echo base_url();?>ioc/killAdmin"><span class="icon-share-alt"></span> Çıkış</a></li>                        
                    </ul>
                    <div class="text">
                        Welcom back! Your last visit: 24.10.2012 in 19:55
                    </div>
                </div>
                
                <div class="widget-fluid TAC">
                    <div class="epc mini">
                        <div class="epcm-red" data-percent="80"><span>0.0</span>%</div>
                        <div class="label label-important">Yüzdelik</div>
                    </div>                    
                    <div class="epc mini">
                        <div class="epcm-green" data-percent="80"><span>0000</span>/0000</div>
                        <div class="label label-success">Sayaç</div>
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
                            <li><a href="#tabs-1">Yorum Düzenle</a></li>
                          
                        </ul>                        

                       
																		<!--######Siparis Listesi Begin######\-->
										   <div id="tabs-1">
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
															<h2> Yorum Düzenleme</h2>                    
														</div>                
														<div class="block-fluid">
														
															

         <?php echo $comment_list; ?>
  

   
   <form action="<?php $url; ?>updateComment?comId=<?php echo $answerThis;?>" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
<table width="800" border="0">

<div id="empty"></div>
		
		
	
 <!--Urun Arama Bitis-->

 
  </div>

</div>
		

       <tr>
         <td><h1>Cevap Yaz :</h1></td>
            <td><label><textarea name="answerArea" id="answerArea" size="94" rows="25"></textarea></label></td>
    </tr>
	    <tr>
         <td>&nbsp;</td>
         <td><label><input class="btn btn-warning btn-block" type="submit" name="button" id="button" value="Yorumu Cevapla"/></label></td>
       </tr>


  </table>
  </form>
															   
														</div></div></div></div>    
										  
													<!--#####Siparis listesi End###########-->
                                            

                      
													<!--##########Yorumlar Begin#######################-->
											 


										<!--######Yorumlar End############-->


														
										<!--#############Call Begin###############-->
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
                <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="icon-cog"></span> Navigasyon</button>
                <ul class="dropdown-menu">
                    <li><a href="#" id="fixedNav">Göster</a></li>
                    <li><a href="#" id="collapsedNav">Gizle</a></li>                    
                </ul>
            </div>
                    
        </div>
        <div class="right">            
            &copy; 2013 Designed By IO
        </div>
    </div>    
	
	

    
    
    
</body>
</html>