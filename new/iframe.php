<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<title>Contact Form CSS3/jQuery Demo</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" title="no title" charset="utf-8" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript"></script>

		<script>
		$(document).ready(function() {
			
			
			
			// SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() }, 
			$("#formibo").validationEngine({
				ajaxSubmit: true,
					ajaxSubmitFile: "ajaxSubmit.php",
					ajaxSubmitMessage: "Thank you, We will contact you soon !",
				success :  false,
				failure : function() {}
			})
			

		
		});
		</script>
        
        
</head>
<body>
<div id="wrapper">
  <div id="form-div">
    <form class="form" id="formibo" action="a.php" method="POST">
      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] text-input" id="name" value="My Name" />
        <label for="name">Name</label>
      </p>
      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] text-input" id="email" value="email@email.com" />
        <label for="email">E-mail</label>
      </p>
      <p class="web">
        <input type="text" name="web" id="web" />
        <label for="web">Website</label>
      </p>
      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] text-input" id="comment">Hello world</textarea>
      </p>
      <p class="submit">
	  <input name="mySubmit" type="submit" value="submit" />
        <input type="submit" value="Send" />
      </p>
    </form>

  </div>
<a href="#">Go Back to Tutorial  >> </a></div>
</body>
</html>