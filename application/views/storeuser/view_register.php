<html><head><title>REgistration Form </title>

<style type="text/css">
form li{

list-style:none;
}
</style>




<p>Please Fill in the details Below<p>

<?php
echo form_open(base_url(). 'site/register');
$username=array(

'name'=> 'username',
'id'=> 'username',
'value'=> set_value('username')
);
$name=array(

'name'=> 'name',
'id'=> 'name',
'value'=> set_value('name')
);

$lastName=array(

'name'=> 'lastName',
'id'=> 'lastName',
'value'=> set_value('lastName')
);
$email=array(

'name'=> 'email',
'id'=> 'email',
'value'=> set_value('email')
);
$password=array(

'name'=> 'password',
'id'=> 'password',
'value'=> ''
);
$password_conf=array(

'name'=> 'password_conf',
'id'=> 'password_conf',
'value'=> ''
);

$captcha=array(

'name'=> 'captcha',
'id'=> 'captcha',
'value'=> ''
);


?>

	<ul>
		<li>
			<label>Username</label>
			<div>
			<?php echo form_input($username);?>
			</div>
		</li>	
		<li>
			<label>Name</label>
			<div>
			<?php echo form_input($name);?>
			</div>
		</li>
		
		<li>
			<label>Last Name</label>
			<div>
			<?php echo form_input($lastName);?>
			</div>
		</li>
		<li>
			<label>Email Adress</label>
			<div>
			<?php echo form_input($email);?>
			</div>
		</li>

		<li>
			<label>Password</label>
			<div>
			<?php echo form_password($password);?>
			</div>
		</li>
		<li>
			<label>Confirm Password</label>
			<div>
			<?php echo form_password($password_conf);?>
			</div>
		</li>
		
		<li>
		<div>
		<span><?php echo $image; ?></span>
		
			
		<?php echo form_input($captcha);?>
		</div>
		</li>
		
		
		<li>
		<?php echo validation_errors();?>
		</li>
		
		
		<li>
			
			<div>
			<?php echo form_submit(array('name'=>'register'),'REGISTER');?>
			</div>
		</li>

	</ul>




<?php
echo form_close();

 ?>