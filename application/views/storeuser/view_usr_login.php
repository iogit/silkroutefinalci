

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inventory list </title>

<script src="<?php echo base_url();?>scripts/form.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="../style/accform.css">
<style type="text/css">
#mainWrapper h3 {
	color: #666;
}
</style>
</head>

<body>
<h1>User Login Form</h1>

<div id="login_form">

<?php echo form_open(base_url().'site/login');  ?>
<ul>

<li>
<label>Username</label>
<div>
<?php echo form_input(array('id'=> 'username', 'name'=>'username'));?>
</div>
</li>

<li>
<label>Password</label>
<div>
<?php echo form_password(array('id'=> 'password', 'name'=>'password'));?>
</div>
</li>


<li>

<div>
<?php echo form_submit(array('name'=> 'submit'), 'login');?>
</div>
</li>
<li><?php 

if($this->session->flashdata('login_error'))
{
echo 'You entered an incorrect username or password';

}else{}
echo validation_errors();?></li>

</ul>


<?php echo form_close();?>


</div>







</body></html>
