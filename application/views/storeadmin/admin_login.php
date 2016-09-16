
<?php 

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION["manager"])){
	
redirect("intro");

exit();	
	}
?>
        
<?php
			
		if(isset($_POST["password"])&& isset($_POST["username"]))
		{ 
		

		
	    $manager = preg_replace('#[^A-Za-z0-9]#i','',$_POST["username"]);
	$password = preg_replace('#[^A-Za-z0-9]#i','',$_POST["password"]);
	
	
	//include "../storescripts/connect_to_mysql.php";

	$sql=$this->db->query("SELECT admn_id FROM io_admin WHERE admn_usrName='$manager' AND admn_psswrd='$password' LIMIT 1");
	
	
	$existCount=$sql->num_rows();
	
	if($existCount==1){
	
	foreach($sql->result_array() as $row){
	$id=$row["admn_id"];
	}
	$_SESSION["id"]=$id;
	$_SESSION["manager"]=$manager;
	$_SESSION["password"]=$password;
	redirect("intro");
	exit();
	}else
	{
		
	$url=base_url();
		echo '&nbsp;&nbsp;&nbsp;Wrong credentials, Please try again <a href="'.$url.'ioc/intro"> Refresh </a>';
		//exit();
		//echo '<p style="color:red;">&nbsp; Girdiğiniz Bilgiler Hatalı Lütfen Tekrar Deneyin </p>  ';
		}}
	
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
    
    <link href="<?php echo base_url();?>style/adm/login/stylesheets.css" rel="stylesheet" type="text/css" />      
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
    
</head>
<body>

    <div class="header">
        <a href="index.html" class="logo centralize"></a>
    </div>    
    
    <div class="login" id="login">
        <div class="wrap">
            <!--*****************************************************************************************************-->
	



			
			
			
	    <!--*****************************************************************************************************-->		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
			
			<h1>Admin Login</h1>
			
			
			
			
			
          <?php $attributes = array('id' => 'validate'); echo form_open(base_url().'master', $attributes);  ?>
            <div class="row-fluid">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <?php echo form_input(array('name'=> 'username','id'=> 'username', 'value'=>'', 'placeholder'=>'Username', 'class'=>'validate[required]', 'name'=>'username'));?>
                </div>                                                 
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-exclamation-sign"></i></span>
              <?php echo form_input(array('name'=> 'password','id'=> 'password', 'value'=>'', 'placeholder'=>'Password', 'class'=>'validate[required]', 'name'=>'password'));?>
                </div>          
                <div class="dr"><span></span></div>                                
            </div>                
            <div class="row-fluid">
                <div class="span8 remember">                    
                                 
                </div>
                <div class="span4    TAR">
                      <?php echo form_submit(array('name'=> 'submit', 'class'=>'btn btn-block btn-primary'), 'Enter');?> 
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
            <div class="row-fluid">
                <div class="span8">                    
                    <button class="btn btn-block" onClick="loginBlock('#login');" disabled>Forgot my password</button>
                </div>
                <div class="span4">
                    <button class="btn btn-warning btn-block" onClick="loginBlock('#login');" disabled>Kayıt</button>
                </div>
            </div>            
        </div>
    </div>
    
    <div class="login" id="sign">
        <div class="wrap">
            <h1>Kayıt</h1>
            
            <div class="row-fluid">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input type="text" name="login" placeholder="Kullanıcı ID"/>
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input type="text" name="login" placeholder="E-mail"/>
                </div>                
                <div class="dr"><span></span></div>                
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-exclamation-sign"></i></span>
                    <input type="text" name="password" placeholder="Şifre"/>
                </div>                          
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-question-sign"></i></span>
                    <input type="text" name="re-password" placeholder="Şifre Tekrar"/>
                </div>                                
                <div class="dr"><span></span></div>                                
            </div>
            <div class="row-fluid">
                <div class="span8 remember">
                    <input type="checkbox"/> Şözleyi Kabul Ediyorum
                </div>
                <div class="span4 TAR">
                    <button class="btn btn-block btn-primary">Kayıt</button>
                </div>
            </div>
            <div class="dr"><span></span></div>
            <div class="row-fluid">
                <div class="span4">                    
                    <button class="btn btn-block" onClick="loginBlock('#login');">Geri</button>
                </div>                
            </div>             
        </div>
    </div>    
    
    <div class="login" id="forgot">
        <div class="wrap">
            <h1>Şifremi Unuttum</h1>
            <div class="row-fluid">
                <p>Şifreyi geri almak için e-mail adresinizi giriniz</p>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input type="text" name="email" placeholder="E-mail"/>
                </div>                                                           
                <div class="dr"><span></span></div>                               
            </div>                   
            <div class="row-fluid">
                <div class="span4">                    
                    <button class="btn btn-block" onClick="loginBlock('#login');">Geri</button>
                </div>                                
                <div class="span4"></div>
                <div class="span4 TAR">
                    <button class="btn btn-block btn-primary">Kurtar</button>
                </div>
            </div>                                  
        </div>
    </div>    
    
</body>
</html>
