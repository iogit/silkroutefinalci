<?php
$slider="";
$realCount=0;
//this block grabs the whole list for viewing
if($slider==""){
//$sqlslider=$this->db->query("SELECT * FROM io_slider ORDER BY ioSlider_date DESC");  //or ASC

$sqlslider = $this->db->query('SELECT * FROM io_slider ORDER BY ioSlider_date DESC');
 


$commentcounter=$sqlslider->num_rows(); //count output amount
$url=base_url();
if($commentcounter>0)  //if there is comment
{
$limit=0;
	foreach($sqlslider->result_array() as $row) //take comments
	{
	if($limit<4){
	$ioSlider_id=$row["ioSlider_id"];
	//$ioSlider_id=$row["ioSlider_id"];
	$ioSlider_title=$row["ioSlider_title"];
	$ioSlider_text=$row["ioSlider_text"];
	
	$url=base_url();
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	$shoot="#contact-form";
	
        $showpermission=1;
	if($showpermission==1){  //if it has permission to display
	$realCount++;
	$slider.='
    <li>
                                                    <img src="<?php echo base_url();?>'.base_url().'placeholders/slider/'.$ioSlider_id.'.jpg" alt="" />
                                                    <div class="ei-title">
                                                        <h2><a href="'.base_url().'detailslider?id='.$ioSlider_id.'&feromon=1">'.$ioSlider_title.'</a></h2>
                                                        <h3>'.$ioSlider_text.'</h3>
                                                    </div>
                                                </li> 
	';
	
	
	}


	}
	
	$limit=$limit+1;
	}     //Limit the comments
	}else //if there is no comment
	
	{
		
		 
		}
		
		   if($realCount==0){
		 // $slider="Henüz Yorum Yapilmamistir.<a class='reply' href='".$shoot."'>Yorum Gönder</a>"; 
     	 $slider.='<div class="parent child">
            <figure class="img-circle blog-fleft"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#"></a></h2>
			<h3 class="h3div"><p>Resim Bulunamadi</p></h3>
            <span></span> <a class="reply" href="all#contact-form"></a>
            
          </div>';
		}
		
		
		
		
   
		}
?>
















<?php
$blog_list_new="";
$realCount=0;
//this block grabs the whole list for viewing
if($blog_list_new==""){
$sql=$this->db->query("SELECT * FROM io_blog ORDER BY ioBlog_date DESC");  //or ASC
$commentcounter=$sql->num_rows(); //count output amount
$url=base_url();
if($commentcounter>0)  //if there is comment
{
$limit=0;
	foreach($sql->result_array() as $row) //take comments
	{
	if($limit<5){
	$ioBlog_id=$row["ioBlog_id"];
    $ioBlog_title=$row["ioBlog_title"];
	$ioBlog_content=$row["ioBlog_content"];
	$ioBlog_date=$row["ioBlog_date"];
	$ioBlog_live=$row["ioBlog_live"];
	$ioBlog_view=$row["ioBlog_view"];
	$url=base_url();
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	$shoot="#contact-form";
	
	if($ioBlog_live==0)
	{	$color="red";
	    $ioBlog_statusx="Beklemede";
	}else
	{	$color="";
	  $ioBlog_statusx="Gönderildi";
	}

	if($ioBlog_live==1){  //if it has permission to display
	$realCount++;
	$blog_list_new.='  <article class="blog-row clearfix">
    <div class="blog-left">
      <div class="vc_anim vc_anim-slide"> <a href="portfolio-single-project.html" class="vc_preview"> <img alt="example image" src="<?php echo base_url();?>'.$url.'images/blog_images/'.$ioBlog_id.'.jpg"  /> </a>
        <div class="vc_hover">
          <div class="hover-wrapper">
            <div class="icon-wrapper">
              <ul>
                <li class="vc_icon"> <a  href="'.base_url().'detailblog?id='.$ioBlog_id.'" > <i class="fa fa-link"> </i> </a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="blog-right clearfix">
      <h3> <a href="'.base_url().'detailblog?id='.$ioBlog_id.'"> '.$ioBlog_title.' </a> </h3>
      <span class="date"> '.$ioBlog_date.'</span>  <span class="taxonomy"> <i class="fa fa-tags"> </i> Source: USCIS  </span>
      <div class="description">
        <p> '.$ioBlog_view.' <a href="'.base_url().'detailblog?id='.$ioBlog_id.'" class="vc_read-more"> read more </a> </p>
      </div>
    </div>
  </article>

         ';
	/*
		if($ioBlog_answer!="")  //if answer is not empty add answer too.
	{
	 $blog_list_new.='<div class="parent child">
            <figure class="img-circle blog-fleft"><img id="newimg" src="<?php echo base_url();?>'.$url.'img/mark.jpg" alt="" class="img-circle"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#">ioComment</a></h2>
            <span></span> <a class="reply" href="all#contact-form">Yorum Gönder</a>
            <p> '.$ioBlog_answer.' </p>
          </div>';
	
	}*/
	
	}


	}
	
	$limit=$limit+1;
	}     //Limit the comments
	}else //if there is no comment
	
	{
		
		 
		}
		
		   if($realCount==0){
		 // $blog_list_new="Henüz Yorum Yapilmamistir.<a class='reply' href='".$shoot."'>Yorum Gönder</a>"; 
     	 $blog_list_new.='<div class="parent child">
            <figure class="img-circle blog-fleft"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#"></a></h2>
			<h3 class="h3div"><p> Henüz Yorum Yapilmamistir denem</p></h3>
            <span></span> <a class="reply" href="all#contact-form">Yorum Gönder</a>
            
          </div>';
		}
		
		
		
		
   
		}
?>

<?php
$blog_list_popular="";
$realCount=0;
//this block grabs the whole list for viewing
if($blog_list_popular==""){
$sql=$this->db->query("SELECT * FROM io_blog ORDER BY ioBlog_view DESC");  //or ASC
$commentcounter=$sql->num_rows(); //count output amount
$url=base_url();
if($commentcounter>0)  //if there is comment
{
$limit=0;
	foreach($sql->result_array() as $row) //take comments
	{
		if($limit<5){
	$ioBlog_id=$row["ioBlog_id"];
    $ioBlog_title=$row["ioBlog_title"];
	$ioBlog_content=$row["ioBlog_content"];
	$ioBlog_date=$row["ioBlog_date"];
	$ioBlog_live=$row["ioBlog_live"];
	$ioBlog_view=$row["ioBlog_view"];
	$url=base_url();
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	$shoot="#contact-form";
	
	if($ioBlog_live==0)
	{	$color="red";
	    $ioBlog_statusx="Beklemede";
	}else
	{	$color="";
	  $ioBlog_statusx="Gönderildi";
	}

	if($ioBlog_live==1){  //if it has permission to display
	$realCount++;
	$blog_list_popular.='

   <li>
                                            <article class="clearfix">
                                                <a href="#" class="entry-thumb"><img src="<?php echo base_url();?>'.$url.'images/blog_images/'.$ioBlog_id.'.jpg" alt="" /></a>
                                                <div class="entry-content">
                                                    <h4 class="entry-title"><a href="'.base_url().'detailblog?id='.$ioBlog_id.'">'.$ioBlog_title.'</a></h4>
                                                    <span class="entry-date"><span class="icon-clock-4 entry-icon" aria-hidden="true"></span><span>'.$ioBlog_date.'</span></span>
                                            		<span class="entry-comment"><span class="icon-bubbles-4 entry-icon" aria-hidden="true"></span><a href="#">'.$ioBlog_view.'</a></span>
                                                </div>
                                            </article>
                                        </li>










         ';
	/*
		if($ioComment_answer!="")  //if answer is not empty add answer too.
	{
	 $comment_list_popular.='<div class="parent child">
            <figure class="img-circle blog-fleft"><img id="newimg" src="<?php echo base_url();?>'.$url.'img/mark.jpg" alt="" class="img-circle"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#">ioComment</a></h2>
            <span></span> <a class="reply" href="all#contact-form">Yorum Gönder</a>
            <p> '.$ioComment_answer.' </p>
          </div>';
	
	}*/
	
	}


	}
	
	$limit=$limit+1;
	}     //Limit the comments
	}else //if there is no comment
	
	{
		
		 
		}
		
		   if($realCount==0){
		 // $comment_list_popular="Henüz Yorum Yapilmamistir.<a class='reply' href='".$shoot."'>Yorum Gönder</a>"; 
     	 $blog_list_popular.='<div class="parent child">
            <figure class="img-circle blog-fleft"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#"></a></h2>
			<h3 class="h3div"><p> Henüz Yorum Yapilmamistir denem</p></h3>
            <span></span> <a class="reply" href="all#contact-form">Yorum Gönder</a>
            
          </div>';
		}
		
		
		
		
   
		}
?>


<?php
$blog_list_popular_top="";
$realCount=0;
//this block grabs the whole list for viewing
if($blog_list_popular_top==""){
$sql=$this->db->query("SELECT * FROM io_blog ORDER BY ioBlog_view DESC");  //or ASC
$commentcounter=$sql->num_rows(); //count output amount
$url=base_url();
if($commentcounter>0)  //if there is comment
{
$limit=0;
	foreach($sql->result_array() as $row)  //take comments
	{
		if($limit<3){
	$ioBlog_id=$row["ioBlog_id"];
    $ioBlog_title=$row["ioBlog_title"];
	$ioBlog_content=$row["ioBlog_content"];
	$ioBlog_date=$row["ioBlog_date"];
	$ioBlog_live=$row["ioBlog_live"];
	$ioBlog_view=$row["ioBlog_view"];
	$url=base_url();
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	$shoot="#contact-form";
	
	if($ioBlog_live==0)
	{	$color="red";
	    $ioBlog_statusx="Beklemede";
	}else
	{	$color="";
	  $ioBlog_statusx="Gönderildi";
	}

	if($ioBlog_live==1){  //if it has permission to display
	$realCount++;
	$blog_list_popular_top.='

   <li>
                                            <article class="clearfix">
                                                <a href="#" class="entry-thumb"><img src="<?php echo base_url();?>'.$url.'images/blog_images/'.$ioBlog_id.'.jpg" alt="" /></a>
                                                <div class="entry-content">
                                                    <h4 class="entry-title"><a href="'.base_url().'detailblog?id='.$ioBlog_id.'">'.$ioBlog_title.'</a></h4>
                                                    <span class="entry-date"><span class="icon-clock-4 entry-icon" aria-hidden="true"></span><span>'.$ioBlog_date.'</span></span>
                                            		<span class="entry-comment"><span class="icon-bubbles-4 entry-icon" aria-hidden="true"></span><a href="#">'.$ioBlog_view.'</a></span>
                                                </div>
                                            </article>
                                        </li>










         ';
	/*
		if($ioComment_answer!="")  //if answer is not empty add answer too.
	{
	 $comment_list_popular.='<div class="parent child">
            <figure class="img-circle blog-fleft"><img id="newimg" src="<?php echo base_url();?>'.$url.'img/mark.jpg" alt="" class="img-circle"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#">ioComment</a></h2>
            <span></span> <a class="reply" href="all#contact-form">Yorum Gönder</a>
            <p> '.$ioComment_answer.' </p>
          </div>';
	
	}*/
	
	}


	}
	
	$limit=$limit+1;
	}     //Limit the comments
	}else //if there is no comment
	
	{
		
		 
		}
		
		   if($realCount==0){
		 // $comment_list_popular="Henüz Yorum Yapilmamistir.<a class='reply' href='".$shoot."'>Yorum Gönder</a>"; 
     	 $blog_list_popular_top.='<div class="parent child">
            <figure class="img-circle blog-fleft"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#"></a></h2>
			<h3 class="h3div"><p> Henüz Yorum Yapilmamistir denem</p></h3>
            <span></span> <a class="reply" href="all#contact-form">Yorum Gönder</a>
            
          </div>';
		}
		
		
		
		
   
		}
?>



<?php
$lastpostedcomment="";
$lastpostedcomments2="";
$comment_list="";
$realCount=0;
//this block grabs the whole list for viewing
if($comment_list==""){
$sql=$this->db->query("SELECT * FROM io_comment ORDER BY ioComment_date DESC");  //or ASC
$commentcounter=$sql->num_rows(); //count output amount
$url=base_url();
if($commentcounter>0)  //if there is comment
{
$limit=0;
	foreach($sql->result_array() as $row) //take comments
	{
	if($limit<5){
	$ioComment_id=$row["ioComment_id"];
	$ioComment_name=$row["ioComment_name"];
	$ioComment_categid=$row["ioComment_categid"];
	$ioComment_email=$row["ioComment_email"];
	$ioComment_title=$row["ioComment_title"];
	$ioComment_comment=$row["ioComment_comment"];
	$ioComment_answer=$row["ioComment_answer"];
	$ioComment_date=$row["ioComment_date"];
	$ioComment_post=$row["ioComment_post"];
	$ioComment_view=$row["ioComment_view"];
	$ioComment_idparent=$row["ioComment_idparent"];
	
	$url=base_url();
		$ioComment_titlesub = substr($ioComment_title, 0, 25);
		$ioComment_titlesub2 = substr($ioComment_title, 0, 30);
		$ioComment_commentsub = substr($ioComment_title, 0,60);
$randomzerotofour = rand (0,4);
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	$shoot="#contact-form";
	
	if($ioComment_post==0)
	{	$color="red";
	    $ioComment_statusx="Beklemede";
	}else
	{	$color="";
	  $ioComment_statusx="Gönderildi";
	}

	if($ioComment_post==1){  //if it has permission to display
	$realCount++;
	$comment_list.='

   <li>
                                            <article class="clearfix">
                                                <a href="#" class="entry-thumb"><img src="<?php echo base_url();?>'.$url.'images/blog_images'.$ioComment_id.'.jpg" alt="" /></a>
                                                <div class="entry-content">
                                                    <h4 class="entry-title"><a href="'.base_url().'comment?comid='.$ioComment_id.'">'.$ioComment_titlesub2.'...</a></h4>
                                                    <span class="entry-date"><span class="icon-clock-4 entry-icon" aria-hidden="true"></span><span>'.$ioComment_date.'</span></span>
                                            		<span class="entry-comment"><span class="icon-bubbles-4 entry-icon" aria-hidden="true"></span><a href="#">'.$ioComment_view.'</a></span>
                                                </div>
                                            </article>
                                        </li>










         ';
	
		if($ioComment_answer!="")  //if answer is not empty add answer too.
	{
	 $comment_list.='<div class="parent child">
            <figure class="img-circle blog-fleft"><img id="newimg" src="<?php echo base_url();?>'.$url.'img/mark.jpg" alt="" class="img-circle"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#">ioComment</a></h2>
            <span></span> <a class="reply" href="all#contact-form">Yorum Gönder</a>
            <p> '.$ioComment_answer.' </p>
          </div>';
	
	}
	
	  $lastpostedcomment.='
			  
			                              <li>
                            		<a title="" href="'.base_url().'comment?comid='.$ioComment_idparent.'">'.$ioComment_titlesub.'</a>
                                    <span class="post-date"> | '.$ioComment_date.'</span>
                                </li>

			  '; 

            if($limit<3){
			  $lastpostedcomments2.='
			  
			                        <li>
                                <article class="clearfix">
                                    <a class="entry-thumb" href="#"><img alt="" src="<?php echo base_url();?>'.base_url().'placeholders/60x60/'.$randomzerotofour.'.jpg" /></a>
                                    <div class="entry-content clearfix">
                                        <a class="comment-name" href="'.base_url().'comment?comid='.$ioComment_id.'">'.$ioComment_name.' der ki :</a>
                                        <p>'.$ioComment_commentsub.'...</p>
                                    </div>
                                </article>
                            </li>

			  ';}
	
	
	}

	$limit=$limit+1;
      }
	}
	
	}else //if there is no comment
	
	{
		
		 
		}
		
		   if($realCount==0){
		 // $comment_list="Henüz Yorum Yapilmamistir.<a class='reply' href='".$shoot."'>Yorum Gönder</a>"; 
     	 $comment_list.='<div class="parent child">
            <figure class="img-circle blog-fleft"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#"></a></h2>
			<h3 class="h3div"><p> Henüz Yorum Yapilmamistir denem</p></h3>
            <span></span> <a class="reply" href="all#contact-form">Yorum Gönder</a>
            
          </div>';
		}
		
		
		
		
   
		}
?>


<?php
//this block grabs the whole list for viewing
$news_listTop="";
if($news_listTop==""){
$sql=$this->db->query("SELECT * FROM io_news ORDER BY ioNews_date DESC");  //or ASC
$productCount=$sql->num_rows(); //count output amount
$url=base_url();
if($productCount>0)
{


	foreach($sql->result_array() as $row)
	{
	
	
	$ioNews_id=$row["ioNews_id"];
	$ioNews_title=$row["ioNews_title"];
	$ioNews_content=$row["ioNews_content"];
	$ioNews_link=$row["ioNews_link"];
	$ioNews_date=$row["ioNews_date"];
	
	$ioNews_content="Içerik Bu Alanda Gösterilemez, Içerige Ait Basligi Bulup Islem Yapiniz";
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	
    $color="#333333";
	$news_listTop.='<a class="topnews" href="'.base_url().'detailnews?id='.$ioNews_id.'">'.$ioNews_title.'...&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
	
	}
	

	
		
	}else
	
	{
	$news_listTop="Listelenecek Haber Bulunmamaktadir";	
		
		}

}
?>

<?php
//this block grabs the whole list for viewing
$bottomblogtitles="";
if($bottomblogtitles==""){
$sql=$this->db->query("SELECT * FROM io_blog ORDER BY ioBlog_date DESC");  //or ASC
$productCount=$sql->num_rows(); //count output amount
$url=base_url();
if($productCount>0)
{


	foreach($sql->result_array() as $row)
	{
	
	
	$ioBlog_id=$row["ioBlog_id"];
	$ioBlog_title=$row["ioBlog_title"];
    $color="#333333";
	
			  $bottomblogtitles.=' <a href="'.base_url().'detailblog?id='.$ioBlog_id.'">
                                <span class="kp-tag-left"></span>
                                <span class="kp-tag-rounded"></span>
                                <span class="kp-tag-text">'.$ioBlog_title.'</span>
                                <span class="kp-tag-right"></span>
                            </a>';
	
	}
	

	
		
	}else
	
	{
	$bottomblogtitles="Listelenecek Baslik Bulunmamaktadir";	
		
		}

}
?>


<?php
//this block grabs the whole list for viewing
$lastpostedblog="";
$viewblog="";
if($viewblog==""){
$sql=$this->db->query("SELECT * FROM io_blog ORDER BY ioBlog_date DESC");  //or ASC
$productCount=$sql->num_rows(); //count output amount
$url=base_url();
if($productCount>0)
{

$counterrecentposts=0;
	foreach($sql->result_array() as $row)
	{
	
	
	$ioBlog_id=$row["ioBlog_id"];
	$ioBlog_title=$row["ioBlog_title"];
	$ioBlog_content=$row["ioBlog_content"];
	$ioBlog_content=$row["ioBlog_content"];
	$ioBlog_link=$row["ioBlog_link"];
	$ioBlog_view=$row["ioBlog_view"];
	$ioBlog_date=$row["ioBlog_date"];
	$ioBlog_live=$row["ioBlog_live"];
	$ioBlog_contentsub = substr($ioBlog_content, 0, 255);
	$ioBlog_contentsub2 = substr($ioBlog_content, 0, 30);
	$ioBlog_titlesub = substr($ioBlog_title, 0, 25);
	
    $color="#333333";
	
	if($ioBlog_live==1 && $counterrecentposts<3){
			  $viewblog.=' <article class="blog-row clearfix">
    <div class="blog-left">
      <div class="vc_anim vc_anim-slide"> 
	    <a href="portfolio-single-project.html" class="vc_preview"> <img alt="example image" src="<?php echo base_url();?>'.$url.'images/blog_images/'.$ioBlog_id.'.jpg"  /> </a>
        <div class="vc_hover">
          <div class="hover-wrapper">
            <div class="icon-wrapper">
              <ul>
                <li class="vc_icon"> <a  href="'.base_url().'detailblog?id='.$ioBlog_id.'" > <i class="fa fa-link"> </i> </a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="blog-right clearfix">
      <h3> <a href="'.base_url().'detailblog?id='.$ioBlog_id.'"> '.$ioBlog_title.' </a> </h3>
      <span class="date"> '.$ioBlog_date.'</span>  <span class="taxonomy"> <i class="fa fa-tags"> </i> Source: USCIS  </span>
      <div class="description">
        <p> '.$ioBlog_contentsub.' <a href="'.base_url().'detailblog?id='.$ioBlog_id.'" class="vc_read-more"> read more </a> </p>
      </div>
    </div>
  </article>
			  
			  
			  ';
			  
			  $lastpostedblog.='
			  
			                              <li>
                            		<a title="" href="'.base_url().'detailblog?id='.$ioBlog_id.'">'.$ioBlog_titlesub.'</a>
                                    <span class="post-date"> | '.$ioBlog_date.'</span>
                                </li>

			  ';
			  
			  
			  $counterrecentposts=$counterrecentposts+1;
	}//if blog has a permission for display
	}
	

	
		
	}else
	
	{
	$viewblog="Listelenecek Baslik Bulunmamaktadir";	
		
		}

}
?>

<?php
//this block grabs the whole list for viewing
$viewgallery="";
$url=base_url();
if($viewgallery==""){
$sql=$this->db->query("SELECT * FROM io_gallerypic ORDER BY iogallerypic_date DESC");  //or ASC
$productCount=$sql->num_rows(); //count output amount
$url=base_url();
if($productCount>0)
{


	foreach($sql->result_array() as $row)
	{
	
	
	$iogallerypic_id=$row["iogallerypic_id"];
	$iogallerypic_title=$row["iogallerypic_title"];
    $color="#333333";
	
			  $viewgallery.='
			  
			    <article class="element illustration web" data-category="animation">
                                                        <div class="mask">
                                                            <a rel="prettyPhoto[kopa-gallery]" href="'.base_url().'images/gallerypics_images/'.$iogallerypic_id.'.jpg" class="kp-pf-gallery" data-icon="&#xe07e;"></a>
                                                            <a href="" class="kp-pf-detail" data-icon="&#xe0c2;"></a>
                                                            <div  class="portfolio-caption">
                                                                <h3><center>'.$iogallerypic_title.'</center></h3>
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                        <img style="width:260px; height:auto;" src="<?php echo base_url();?>'.base_url().'images/gallerypics_images/'.$iogallerypic_id.'.jpg" alt="" />
                                                    </article><!--element-->	  ';
	
	}
	

	
		
	}else
	
	{
	$viewgallery="Listelenecek Baslik Bulunmamaktadir";	
		
		}

}
?>

<?php
//this block grabs the whole list for viewing
$viewgalleryvids="";
$viewgalleryvids="";
$url=base_url();
if($viewgalleryvids==""){
$sql=$this->db->query("SELECT * FROM io_galleryvid ORDER BY iogalleryvid_date DESC");  //or ASC
$productCount=$sql->num_rows(); //count output amount
$url=base_url();
if($productCount>0)
{

$videocounter=0;
	foreach($sql->result_array() as $row)
	{
	
	if($videocounter<3){
	$iogalleryvid_id=$row["iogalleryvid_id"];
	$iogalleryvid_title=$row["iogalleryvid_title"];
	$iogalleryvid_link=$row["iogalleryvid_link"];
	$iogalleryvid_date=$row["iogalleryvid_date"];
    $color="#333333";
	
			 /* $viewgalleryvids.='
			  
			   <li class="hover-effect">
                                                                <div class="mask">
                                                                <a href="'.$iogalleryvid_link.'" rel="prettyPhoto" class="link-detail" data-icon="&#xe022;"><span></span></a>
                                                            </div>
															<div class="entry">
															<!-- display: block; max-width:300px; max-height:120px; width: auto;  height: auto;-->
															
                                                            <img style="" src="<?php echo base_url();?>'.base_url().'images/galleryvids_images/'.$iogalleryvid_id.'.jpg" alt="" />
															'.$iogalleryvid_title.'
                                                            </li>';*/
															
															
															
								$viewgalleryvids.='							 <li>
                                        <article>
                                            <div class="bwWrapper">
                                                <img src="<?php echo base_url();?>'.base_url().'images/galleryvids_images/'.$iogalleryvid_id.'.jpg" alt="" />
                                                
												<a href="'.$iogalleryvid_link.'" rel="prettyPhoto" class="kp-pf-detail" data-icon="&#xe022;"><span></span></a>
                                            </div>
                                            <div class="pf-info">
                                              
                                                <a class="pf-name" href="'.$iogalleryvid_link.'" rel="prettyPhoto" class="kp-pf-detail" ><p style="font-size:14px;">'.$iogalleryvid_title.'</p></a>
												
                                            </div>                                                
                                        </article><!--element-->
                                    </li> ';
															
															
															
															
															
															
															
															
															
															
															
															
	$videocounter=$videocounter+1;}
	}
	

	
		
	}else
	
	{
	$viewgalleryvids="Listelenecek Video Bulunmamaktadir";	
		
		}

}
?>


<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html><!--<![endif]-->

<!-- Data to be passed to templates/headers/header-x.tpl.html -->
<!-- End of Data -->

<head>
    <meta charset="utf-8" />
    <title>Multipurpose Responsive HTML5 Themes with Animated Metro Slider | Vencorp</title>
    <meta name="keywords" content="HTML5 Template, CSS3, Metro Slider, Elegant HTML5 Theme" />
    <meta name="description" content="Multipurpose Responsive HTML5 Themes with Animated Metro Slider - Vencorp">
    <meta name="author" content="Venmond">
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.ico">
    
    
    <!-- CSS -->
       
    <!-- Bootstrap & FontAwesome CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->

    <!-- Fonts CSS -->
    <link href="<?php echo base_url();?>css/fonts.css"  rel="stylesheet" type="text/css">
               
    <!-- Plugin CSS -->
    <link href="<?php echo base_url();?>plugins/prettyPhoto-plugin/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>plugins/isotope-plugin/css/isotope.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>plugins/rs-plugin/css/settings.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">  
	<link href="<?php echo base_url();?>css/animate.min.css" rel="stylesheet" type="text/css"> 
 
    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>css/theme.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="<?php echo base_url();?>css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="<?php echo base_url();?>css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->
    <link href="<?php echo base_url();?>css/header/header-1.css" rel="stylesheet">

	<!-- Specific Page CSS -->
	
    <!-- Design Mode CSS -->
    <link id="link-header-mode" href="<?php echo base_url();?>css/mode/mode-1-header.css" rel="stylesheet" type="text/css"> 
    <link id="link-footer-mode" href="<?php echo base_url();?>css/mode/mode-1-footer.css" rel="stylesheet" type="text/css">    
    <link id="link-color" href="<?php echo base_url();?>css/color/color-blue.css" rel="stylesheet" type="text/css">

        
    <!-- Responsive CSS -->
        	<link href="<?php echo base_url();?>css/theme-responsive.css" rel="stylesheet" type="text/css"> 
    	<link href="<?php echo base_url();?>css/header/header-1-responsive.css" rel="stylesheet" type="text/css"> 
        <link id="link-header-mode-r" href="<?php echo base_url();?>css/mode/mode-1-header-responsive.css" rel="stylesheet" type="text/css"> 
        <link id="link-footer-mode-r" href="<?php echo base_url();?>css/mode/mode-1-footer-responsive.css" rel="stylesheet" type="text/css">
    	<link id="link-color" href="<?php echo base_url();?>css/color/color-blue-responsive.css" rel="stylesheet" type="text/css">        
		           
    
    
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>custom/custom.css" rel="stylesheet" type="text/css">

<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="<?php echo base_url();?>js/modernizr.js"></script> 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="<?php echo base_url();?>js/html5shiv.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>js/respond.min.js"></script>
    <![endif]-->
	
	<link href="https://fonts.googleapis.com/css?family=Courgette|Damion" rel="stylesheet">
	
 <style> 

// Phone text input start

/*Phone Number Input "hack"*/
.phone-number .col-xs-3::after{
 content: "-";
 position:absolute;
    right: 5px;
    color: black;
    border: 0px solid;
    top: 5px;
}

.phone-number .col-xs-4{
	width:25%;
}

.phone-number .col-xs-3, .phone-number .col-xs-4{

	padding-left:0;
}
// Phone text input end



 
   .homepage-hero-module {
  border-right: none;
  border-left: none;
  position: relative;
}
.no-video .video-container video,
.touch .video-container video {
  display: none;
}
.no-video .video-container .poster,
.touch .video-container .poster {
  display: block !important;
}
.video-container {
  
  position: relative;
  bottom: 0%;
  left: 0%;
  height: 100%;
  width: 100%;
  overflow: hidden;
  background: #000;
}
.video-container .poster img {
  width: 100%;
  bottom: 0;
  position: absolute;
}
.video-container .filter {
  z-index: 100;
  position: absolute;
  background: rgba(0, 0, 0, 0.4);
  width: 100%;
}
.video-container .title-container {
  z-index: 1000;
  position: absolute;
  top: 35%;
  width: 100%;
  text-align: center;
  color: #fff;
}
.video-container .description .inner {
  font-size: 1em;
  width: 45%;
  margin: 0 auto;
}
.video-container .link {
  position: absolute;
  bottom: -3em;
  width: 100%;
  text-align: center;
  z-index: 1001;
  font-size: 2em;
  color: #fff;
}
.video-container .link a {
  color: #fff;
}
.video-container video {
  position: relative;
  z-index: 0;
  bottom: 0;
}
.video-container video.fillWidth {
  width: 100%;
}

   </style> 

<script>
/** Document Ready Functions **/
/********************************************************************/

$( document ).ready(function() {

    // Resive video
    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');
        
    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

})

/** Reusable Functions **/
/********************************************************************/

function scaleVideoContainer() {

    var height = $(window).height();
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){
    
    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
        windowHeight = $(window).height(),
        videoWidth,
        videoHeight;
    
    console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width'),
            windowAspectRatio = windowHeight/windowWidth;

        if (videoAspectRatio > windowAspectRatio) {
            videoWidth = windowWidth;
            videoHeight = videoWidth * videoAspectRatio;
            $(this).css({'top' : -(videoHeight - windowHeight) / 2 + 'px', 'margin-left' : 0});
        } else {
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});
        }

        $(this).width(videoWidth).height(videoHeight);

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');
        

    });
}

function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
	

    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}
</script>

</head>  



<body class="  clearfix" data-smooth-scrolling="1">     
<div class="vc_body">

<!-- Header Start -->
  <header data-active="home" class="header-1 mode-1" id="header">
  <div class="vc_primary-menu-wrapper">
    <div class="container">
      <div class="row">
          <nav class="vc_menu"> 
          	<div class="logo">
                <a href="/"> 
                    <img  alt="logo" src="<?php echo base_url();?>img/logo.png"> 
                </a>
            </div>
            <div class="vc_btn-navbar">
              <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".vc_primary-menu"> <span class="icon-bar"> </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> </button>
            </div>
            <div class="vc_primary-menu">
				<ul>
    <li id="home"> <a href="<?php echo base_url();?>"> Home  </a>
   
    </li>
                  
    <li id="features"> <a href="<?php echo base_url();?>jobseekers"> Job Seekers <i class="fa fa-caret-down"> </i> </a>
      <div class="vc_menu-open-right vc_menu-2-v">
        <ul class="clearfix">
          <li> <a href="<?php echo base_url();?>jobs/it">Technology Jobs</a></li>
          <li> <a href="<?php echo base_url();?>jobs/accounting"> Accounting Jobs </a> </li>
         <li> <a href="<?php echo base_url();?>jobs/healthcare"> Healthcare Jobs </a> </li>
           <li> <a href="<?php echo base_url();?>jobs/law"> Law Jobs </a> </li>
        </ul>
      </div>
    </li>
    <li id="portfolios"> <a href="<?php echo base_url();?>loginPage"> Employee Portal <i class="fa fa-caret-down"> </i> </a>    </li>
 <li id="about"> <a href="<?php echo base_url();?>about"> About Us </a> </li>

    <li id="contact"> <a href="<?php echo base_url();?>contact"> Contact Us </a> </li>
<?php 
echo $loginSignupHtml;
?>

</ul>
<!-- Head menu search form ends -->             </div>
            <div class="vc_google-search">
				<script>
  (function() {
    var cx = '011282751335296868116:-r-d_lb5_5y';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<!--
<gcse:searchbox-only></gcse:searchbox-only>-->
<div class="gcse-searchbox-only" data-resultsUrl="#" data-queryParameterName="q" ></div>			</div> 
            
            <div class="vc_menu-search-wrapper pull-right">
        
              <form class="vc_menu-search">
                <input type="text" name="search" class="vc_menu-search-text" required placeholder="Search">
                <div class="vc_menu-search-submit"> </div>
              </form>
            </div>
            <!-- In menu search form ends --> 
          </nav>
      </div>
    </div>
    </div>
	
    <div class="vc_secondary-menu-wrapper" style="background-image: url('img/pattern1.png');">
    	<div class="container"><div class="row">
              <div class="vc_secondary-menu">
                <div class="vc_contact-top-wrapper col-xs-12 col-sm-7 col-md-8 col-lg-9">
                  <div class="vc_contact-top pull-right">
                    <div class="pull-left">
                      <h5> <span> <i class="fa fa-envelope"> </i> info@itsilkroutellc.com </span> </h5>
                    </div>
                    <div class="pull-left">
                      <h5> <span> <i class="fa fa-phone"> </i> +1-972-819-3767 , +1-972-819-3797</span> </h5>
                    </div>
                  </div>
                </div>
                <div class="vc_social-share-wrapper hidden-xs col-sm-5 col-md-4 col-lg-3">
                  <div class="vc_social-share vc_tight pull-right"> 
                      <a title="Twitter" class="twitter" href="#"> <i class="fa fa-twitter"></i> </a> 
                      <a title="Facebook" class="facebook" href="#"> <i class="fa fa-facebook"></i> </a> 
                      <a title="Gplus" class="gplus" href="#"> <i class=" fa fa-google-plus"></i> </a> 
                      <a title="linkedin" class="linkedin" href="#"> <i class="fa fa-linkedin"></i> </a> 
                      <a title="email" class="email" href="#"> <i class="fa fa-envelope"></i> </a> 
                      <a title="Rss" class="rss" href="#"> <i class="fa fa-rss"></i> </a> 
                  </div>
                </div>
              </div> 
		      <div class="vc_sub-menu-bg"><div class="element-1"></div><div class="element-2"></div></div>              
        </div></div>  
        <!-- container row --> 
    </div>
	
    <div class="vc_menu-bg"><div class="element-1"></div><div class="element-2"></div></div>
  </header>
  <!-- Header Ends --> 

