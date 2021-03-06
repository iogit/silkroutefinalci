
<!-- Middle Content Start -->
  <div class="vc_banner-title background-14 block">
    <div class="wrapper">
      <div class="container">
        <h1> </h1>
       
      </div>
    </div>
    <!-- wrapper --> 
  </div>
  <!-- vc_banner -->
 
  <!-- .vc_map -->
  
  <div class="vc_contact-us">
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h2>Post your<span class="vc_main-color"> resume!</span></h2>
            <p> </p>
			
            <?php 
			
					if($this->session->flashdata("success") !== FALSE)
					{
					echo $this->session->flashdata("success");
					}
					

			?>
			
			 
            <form id="contact" name="contact" action="updateResume" method="post" enctype="multipart/form-data">
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label" for="contact-form-name">First Name<span class="vc_red">*</span></label>
                    <div class="controls">
                      <input type="text" placeholder="" id="contact-form-name" value="<?php echo $name;?>" name="contact-form-name" required />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label" for="contact-form-lastname">Last Name<span class="vc_red">*</span></label>
                    <div class="controls">
                      <input type="text" placeholder="" id="contact-form-lastname" value="<?php echo $lastname;?>" name="contact-form-lastname" required >
                    </div>
                  </div>
                </div>
                
              </div> <!-- row -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  	  <label class="control-label" for="contact-form-email">Email<span class="vc_red">*</span></label>
                    <div class="controls">
                      <input type="email" placeholder="" value="<?php echo $email;?>" id="contact-form-email" name="contact-form-email" required disabled>
                    </div>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group">
                  	  <label class="control-label" for="contact-form-phone">Phone<span class="vc_red">*</span></label>
                    <div class="controls">
                    <!--  <input type="email" placeholder="" id="contact-form-email" name="contact-form-email" required > -->
					  <input id="contact-form-phone" type="tel" value="<?php echo $phone;?>" name="contact-form-phone" placeholder="(###) ###-####" pattern="\d{10}" class="masked" title="Phone number" required>
					  
                    </div>
                  </div>
                </div>
              </div> 

			  <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                  	<label  for="contact-form-city">City<span class="vc_red">*</span></label>                    
                    <div class="controls">
                      <input type="text" value="<?php echo $city;?>" placeholder="" id="contact-form-city" name="contact-form-city" required />
                    </div>
                  </div>
                </div> 
				<div class="col-md-4">
                  <div class="form-group">
                  	<label  for="contact-form-zipcode">Zip code<span class="vc_red">*</span></label>                    
                    <div class="controls">
                      <input id="contact-form-zipcode" value="<?php echo $zipcode;?>" type="tel" name="contact-form-zipcode" placeholder="#####" pattern="\d{5}" class="masked" title="Zip Code" required>
                    </div>
                  </div>
                </div>
              </div>
			  
			    <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                  	<label  for="contact-form-country">Country<span class="vc_red">*</span></label>                    
                    <div class="controls">
                     
					      <select id="contact-form-country" name="contact-form-country" class="input-medium bfh-countries" <?php echo ($country=='')?'data-country="US"':'data-country="'.$country.'"' ?>></select>
					 
                    </div>
                  </div>
                </div>
              </div> 

			  <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                  	<label for="contact-form-eligibility">Employment Eligibility<span class="vc_red">*</span></label>                    
                    <div class="controls">
                          <input type="hidden" value="true" name="contact-form-eligibility">
					      <input type="radio" name="contact-form-eligibility" <?php echo ($eligibility=='Require citizenship to work in US')?'checked':'' ?> name="gender" value="Require citizenship to work in US" required> Require citizenship to work in US<br>
						  <input type="radio" name="contact-form-eligibility" <?php echo ($eligibility=='Authorized to work in US for any employer')?'checked':'' ?> name="gender" value="Authorized to work in US for any employer"> Authorized to work in US for any employer<br>
						  <input type="radio" name="contact-form-eligibility" <?php echo ($eligibility=='Authorized to work in US solely for current employer')?'checked':'' ?> name="gender" value="Authorized to work in US solely for current employer"> Authorized to work in US solely for current employer<br>
						  <input type="radio"  name="contact-form-eligibility" <?php echo ($eligibility=='Other')?'checked':'' ?> name="gender" value="Other"> Other
											 
                    </div>
                  </div>
                </div>
              </div> 
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                  	<label for="contact-form-resume"> Copy and paste your resume <span class="vc_red">*</span></label>                   
                    <div class="controls">
                       <textarea style="resize:vertical; max-height:600px; min-height:400px;" id="editor" name="editor" name="contact-form-resume" ><?php echo $resume;?></textarea>
                    </div>
                  </div>
                </div>
              </div>
			    <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                  	<label for="contact-form-message">Upload Resume or Documents<span class="vc_red"></span></label>                   
                    <div class="controls">
				
                      <input class="btn btn-large" type="file" name="fileUploadDocuments" id="fileUploadDocuments" />
					  <?php echo $allUserUploadedFiles; ?>
					  
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <button class="vc_btn" type="submit" id="contact-form-submit" name="contact-form-submit" value="submit" disabled> Send </button>
                </div>
              </div>
			
		
            </form>
          </div>
          <!-- .col-md-8 -->
          <div class="col-md-4 sidebar">
            <div id="vc_contact-widget" class="sidebar-widget block">
              <div class="content">
                <div class="contact-info">
                  <h4  class="vc_bg-blue"><i class="icon-map-marker"></i> Our Headquarters</h4>
                  <div class="content">
                    <ul class="vc_li">
                      <li>5605 N MacArthur Blvd Ste 1093<br>
                        Irving
                        TX 75038<br>
                        United States</li>
                    </ul>
                  </div>
                </div>
                <div class="contact-info">
                  <h4 class="vc_bg-orange"><i class="icon-phone"></i> Call us</h4>
                  <div class="content">
                    <ul class="vc_li">
                      <li>1 (972) 819-3767</li>
                      <li>1 (972) 819-3797</li>
                      
					</ul>
                  </div>
                </div>
                <div class="contact-info">
                  <h4  class="vc_bg-green"><i class="fa fa-envelope-alt"></i> Email Addresses</h4>
                  <div class="content">
                    <ul class="vc_li">
                      <li>info@itsilkroutellc.com</li>
                      <li>support@itsilkroutellc.com</li>
                    </ul>
                  </div>
                </div>
                <div class="contact-info">
                  <h4 class="vc_bg-red"><i class="icon-time"></i> Business Hour</h4>
                  <div class="content">
                      <ul class="vc_li">
                      <li>Monday - Friday 8am to 6pm </li>
                      <li>Saturday - Closed</li>
                      <li>Sunday - Closed</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- .col-md-4 -->           
        </div>
        <!-- .row -->         
      </div>
      <!-- .container -->        
    </div>
    <!-- .wrapper -->    
  </div>
  <!-- .vc_contact-us -->   
<!-- Middle Content End -->
  
  
<!-- Footer Start -->
  <footer class="footer-1 mode-1" id="footer">
   
    <!-- vc_footer-links -->  
      
    <div class="vc_bottom">
      <div class="wrapper">
        <div class="container">
          <div class="vc_footer-line"> </div>
          <div class="bg">
            <div class="row">
              <div class=" col-sm-12 col-md-6">
                <div class="copyright pull-left">
                  <h5> Copyright &copy;2016  ITSILKROUTELLC. All Rights Reserved  </h5>
                </div>
              </div>
              <div class=" col-sm-12 col-md-6">
                <div class="menu pull-right"> 
                	<a href="contact.html"> Contact </a>                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
<!-- Footer END -->
</div>
<!-- .vc_body END  -->


<a class="back-top" href="#" id="back-top"> <i class="fa fa-chevron-up icon-white"> </i> </a> 

<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/tinyscrollbar.js"></script> 
<script type="text/javascript" src="js/caroufredsel.js"></script> 
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="plugins/isotope-plugin/js/jquery.isotope.min.js"></script> 
<script type="text/javascript" src="functions/twitter/jquery.tweet.js"></script>
<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript" src="custom/custom.js"></script>


<script type="text/javascript" src="js/bootstrap-formhelpers-countries.js"></script>
<script type="text/javascript" src="js/bootstrap-formhelpers-countries.en_US.js"></script>
<link href="css/bootstrap-form-helpers.min.css" rel="stylesheet">


<link rel="stylesheet" href="scripts/cleditor/jquery.cleditor.css" />
  
    <script src="scripts/cleditor/jquery.cleditor.min.js"></script>
    <script>
        $(document).ready(function () { $("#editor").cleditor(); });
    </script>

<!-- Specific Page Scripts Put Here -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript" src="js/jquery.gmap.min.js"></script> 
<script type="text/javascript"  src="js/specific/map-large.js"></script> 
<script type="text/javascript" src="js/specific/contact.js"></script> 
<!-- Specific Page Scripts End -->





<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
<script type="text/javascript">
var _onload = window.onload || function()
{
  document.getElementById('contact-form-submit').disabled = false;
}

_onload();
</script>

<script>

document.getElementById('fileUploadDocuments').addEventListener('change', checkFile, false);
fileUploadDocuments.addEventListener('change', checkFile, false);

function checkFile(e) {

    var file_list = e.target.files;

    for (var i = 0, file; file = file_list[i]; i++) {
        var sFileName = file.name;
        var sFileExtension = sFileName.split('.')[sFileName.split('.').length - 1].toLowerCase();
        var iFileSize = file.size;
        var iConvert = (file.size / 10485760).toFixed(2);

        if (!(sFileExtension === "pdf" || sFileExtension === "doc"|| sFileExtension === "docx"|| sFileExtension === "jpeg"|| sFileExtension === "png"|| sFileExtension === "jpg"|| sFileExtension === "zip"|| sFileExtension === "rar") || iFileSize > 10485760) {
           // txt = "File type : " + sFileExtension + "\n\n";
           // txt += "Size: " + iConvert + " MB \n\n";
            txt = "Please make sure your file is in jpeg, png, jpg, doc, docx, pdf, zip, rar format and less than 10 MB.\n\n";
            alert(txt);
			document.getElementById("fileUploadDocuments").value = "";
        }
    }
}

</script>


<script>
    function deleletconfig(){

    var del=confirm("Are you sure you want to delete this file?");
    if (del==true){
      
    }else{
     
    }
    return del;
    }
</script>

</body>
</html>