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
                                                    <img src="'.base_url().'placeholders/slider/'.$ioSlider_id.'.jpg" alt="" />
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
		 // $slider="Henüz Yorum Yapılmamıştır.<a class='reply' href='".$shoot."'>Yorum Gönder</a>"; 
     	 $slider.='<div class="parent child">
            <figure class="img-circle blog-fleft"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#"></a></h2>
			<h3 class="h3div"><p>Resim Bulunamadı</p></h3>
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
	$blog_list_new.='

   <li>
                                            <article class="clearfix">
                                                <a href="#" class="entry-thumb"><img src="'.$url.'images/blog_images/'.$ioBlog_id.'.jpg" alt="" /></a>
                                                <div class="entry-content">
                                                    <h4 class="entry-title"><a href="'.base_url().'detailblog?id='.$ioBlog_id.'">'.$ioBlog_title.'</a></h4>
                                                    <span class="entry-date"><span class="icon-clock-4 entry-icon" aria-hidden="true"></span><span>'.$ioBlog_date.'</span></span>
                                            		<span class="entry-comment"><span class="icon-bubbles-4 entry-icon" aria-hidden="true"></span><a href="#">'.$ioBlog_view.'</a></span>
                                                </div>
                                            </article>
                                        </li>










         ';
	/*
		if($ioBlog_answer!="")  //if answer is not empty add answer too.
	{
	 $blog_list_new.='<div class="parent child">
            <figure class="img-circle blog-fleft"><img id="newimg" src="'.$url.'img/mark.jpg" alt="" class="img-circle"></figure>
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
		 // $blog_list_new="Henüz Yorum Yapılmamıştır.<a class='reply' href='".$shoot."'>Yorum Gönder</a>"; 
     	 $blog_list_new.='<div class="parent child">
            <figure class="img-circle blog-fleft"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#"></a></h2>
			<h3 class="h3div"><p> Henüz Yorum Yapılmamıştır denem</p></h3>
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
	foreach($sql->result_array as $row) //take comments
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
                                                <a href="#" class="entry-thumb"><img src="'.$url.'images/blog_images/'.$ioBlog_id.'.jpg" alt="" /></a>
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
            <figure class="img-circle blog-fleft"><img id="newimg" src="'.$url.'img/mark.jpg" alt="" class="img-circle"></figure>
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
		 // $comment_list_popular="Henüz Yorum Yapılmamıştır.<a class='reply' href='".$shoot."'>Yorum Gönder</a>"; 
     	 $blog_list_popular.='<div class="parent child">
            <figure class="img-circle blog-fleft"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#"></a></h2>
			<h3 class="h3div"><p> Henüz Yorum Yapılmamıştır denem</p></h3>
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
	foreach($sql->result_array as $row)  //take comments
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
                                                <a href="#" class="entry-thumb"><img src="'.$url.'images/blog_images/'.$ioBlog_id.'.jpg" alt="" /></a>
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
            <figure class="img-circle blog-fleft"><img id="newimg" src="'.$url.'img/mark.jpg" alt="" class="img-circle"></figure>
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
		 // $comment_list_popular="Henüz Yorum Yapılmamıştır.<a class='reply' href='".$shoot."'>Yorum Gönder</a>"; 
     	 $blog_list_popular_top.='<div class="parent child">
            <figure class="img-circle blog-fleft"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#"></a></h2>
			<h3 class="h3div"><p> Henüz Yorum Yapılmamıştır denem</p></h3>
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
                                                <a href="#" class="entry-thumb"><img src="'.$url.'images/blog_images'.$ioComment_id.'.jpg" alt="" /></a>
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
            <figure class="img-circle blog-fleft"><img id="newimg" src="'.$url.'img/mark.jpg" alt="" class="img-circle"></figure>
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
                                    <a class="entry-thumb" href="#"><img alt="" src="'.base_url().'placeholders/60x60/'.$randomzerotofour.'.jpg" /></a>
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
		 // $comment_list="Henüz Yorum Yapılmamıştır.<a class='reply' href='".$shoot."'>Yorum Gönder</a>"; 
     	 $comment_list.='<div class="parent child">
            <figure class="img-circle blog-fleft"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#"></a></h2>
			<h3 class="h3div"><p> Henüz Yorum Yapılmamıştır denem</p></h3>
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


	foreach($sql->result_array as $row)
	{
	
	
	$ioNews_id=$row["ioNews_id"];
	$ioNews_title=$row["ioNews_title"];
	$ioNews_content=$row["ioNews_content"];
	$ioNews_link=$row["ioNews_link"];
	$ioNews_date=$row["ioNews_date"];
	
	$ioNews_content="Içerik Bu Alanda Gösterilemez, İçeriğe Ait Başlığı Bulup İşlem Yapınız";
	
	//$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));
	
    $color="#333333";
	$news_listTop.='<a class="topnews" href="'.base_url().'detailnews?id='.$ioNews_id.'">'.$ioNews_title.'...&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
	
	}
	

	
		
	}else
	
	{
	$news_listTop="Listelenecek Haber Bulunmamaktadır";	
		
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


	foreach($sql->result_array as $row)
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
	$bottomblogtitles="Listelenecek Başlık Bulunmamaktadır";	
		
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
	foreach($sql->result_array as $row)
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
	
	if($ioBlog_live==1 && $counterrecentposts<4){
			  $viewblog.='
			  
			    <article class="timeline-item link-post clearfix">
                                                    
                                                    <div class="timeline-icon">
                                                        <div><p data-icon="&#xe034;" /></div>
                                                        <span class="dotted-horizon"></span>
                                                        <span class="vertical-line"></span>
                                                        <span class="circle-outer"></span>
                                                        <span class="circle-inner"></span>
                                                    </div>
                                                    
                                                    <div class="entry-body">
                                                        <header>
                                                            <h2 class="entry-title"><a href="'.base_url().'detailblog?id='.$ioBlog_id.'">'.$ioBlog_title.'</a></h2>
                                                            <span class="entry-date"><span class="icon-clock-4 entry-icon" aria-hidden="true"></span><span>'.$ioBlog_date.'</span></span>
                                                            <span class="entry-comment"><span class="icon-bubbles-4 entry-icon" aria-hidden="true"></span><a href="#">'.$ioBlog_view.'</a></span>
                                                        </header>
                                                        <p>'.$ioBlog_contentsub.'...</p>
                                                        <a href="'.base_url().'detailblog?id='.$ioBlog_id.'" class="more-link">Devamı</a>
                                                    </div>
                                                    
                                                </article><!--timeline-item-->
			  
			  
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
	$viewblog="Listelenecek Başlık Bulunmamaktadır";	
		
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


	foreach($sql->result_array as $row)
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
                                                        <img style="width:260px; height:auto;" src="'.base_url().'images/gallerypics_images/'.$iogallerypic_id.'.jpg" alt="" />
                                                    </article><!--element-->	  ';
	
	}
	

	
		
	}else
	
	{
	$viewgallery="Listelenecek Başlık Bulunmamaktadır";	
		
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
	foreach($sql->result_array as $row)
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
															
                                                            <img style="" src="'.base_url().'images/galleryvids_images/'.$iogalleryvid_id.'.jpg" alt="" />
															'.$iogalleryvid_title.'
                                                            </li>';*/
															
															
															
								$viewgalleryvids.='							 <li>
                                        <article>
                                            <div class="bwWrapper">
                                                <img src="'.base_url().'images/galleryvids_images/'.$iogalleryvid_id.'.jpg" alt="" />
                                                
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
	$viewgalleryvids="Listelenecek Video Bulunmamaktadır";	
		
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
															
                                                            <img style="" src="'.base_url().'images/galleryvids_images/'.$iogalleryvid_id.'.jpg" alt="" />
															'.$iogalleryvid_title.'
                                                            </li>';*/
															
															
															
								$viewgalleryvids.='	      <article class="element logos" data-category="logos">
                                    <div class="bwWrapper">
                                        <img src="'.base_url().'images/galleryvids_images/'.$iogalleryvid_id.'.jpg" alt="" />
                                        <a href="'.$iogalleryvid_link.'" rel="prettyPhoto" class="kp-pf-detail" data-icon="&#xe022;"></a>
                                    </div>
                                    <div class="pf-info">
                                    	
                                        <a class="pf-name" href="'.$iogalleryvid_link.'" rel="prettyPhoto" class="kp-pf-detail" ><p style="font-size:14px; height:30px;">'.$iogalleryvid_title.'</p></a>
                                    </div>
                                </article><!--element--> ';
															
															
															
															
															
															
															
															
															
															
															
															
	
	}
	

	
		
	}else
	
	{
	$viewgalleryvids="Listelenecek Video Bulunmamaktadır";	
		
		}

}
?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Uzm.Dr.Dinçer Erdinç > Videolar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="<?php echo base_url();?>css/reset.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url();?>css/icoMoon.css" media="all" />
        <link rel="stylesheet" href="<?php echo base_url();?>css/prettyPhoto.css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url();?>css/superfish.css" media="all" />
        <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-responsive.css" media="all" />
        <link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet" />
        
        <noscript>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/noscript.css" />
		</noscript>        
        
        <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,600italic,700,800,800italic,700italic' rel='stylesheet' type='text/css' />
        
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->

        <!--[if IE 7]>
            <link rel="stylesheet" href="<?php echo base_url();?>css/ie7.css" type="text/css" media="all" />
            <link rel="stylesheet" href="css/font-awesome-ie7.min.css" media="all" />
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
            <link rel="stylesheet" href="<?php echo base_url();?>css/ie.css" type="text/css" media="all" />
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico" />
        <link rel="apple-touch-icon" href="<?php echo base_url();?>img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>img/apple-touch-icon-114x114.png" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" type="text/javascript"></script>

		
	 <script src="<?php echo base_url();?>js/jquery-1.8.3.min.js"></script>
      <style type="text/css">

	

</style>


<script type="text/javascript">
<!--
$(document).ready(function() {

	//create scroller for each element with "horizontal_scroller" class...
	$('.horizontal_scroller').SetScroller({	velocity: 	 60,
											direction: 	 'horizontal',
											startfrom: 	 'right',
											loop:		 'infinite',
											movetype: 	 'linear',
											onmouseover: 'pause',
											onmouseout:  'play',
											onstartup: 	 'play',
											cursor: 	 'pointer'
										});
	/*
		All possible values for options...
		
		velocity: 		from 1 to 99 								[default is 50]						
		direction: 		'horizontal' or 'vertical' 					[default is 'horizontal']
		startfrom: 		'left' or 'right' for horizontal direction 	[default is 'right']
						'top' or 'bottom' for vertical direction	[default is 'bottom']
		loop:			from 1 to n+, or set 'infinite'				[default is 'infinite']
		movetype:		'linear' or 'pingpong'						[default is 'linear']
		onmouseover:	'play' or 'pause'							[default is 'pause']
		onmouseout:		'play' or 'pause'							[default is 'play']
		onstartup: 		'play' or 'pause'							[default is 'play']
		cursor: 		'pointer' or any other CSS style			[default is 'pointer']
	*/

	//how to overwrite options after setup and without deleting the other settings...
	$('#no_mouse_events').ResetScroller({	onmouseover: 'play', onmouseout: 'play'   });
	$('#scrollercontrol').ResetScroller({	velocity: 85, startfrom: 'left'   });

	//if you need to remove the scrolling animation, uncomment the following line...
	//$('#scrollercontrol').RemoveScroller();

	//how to play or stop scrolling animation outside the scroller... 
	$('#play_scrollercontrol').mouseover(function(){   $('#scrollercontrol').PlayScroller();   });
	$('#stop_scrollercontrol').mouseover(function(){   $('#scrollercontrol').PauseScroller();  });		

	//create a vertical scroller...	
	$('.vertical_scroller').SetScroller({	velocity: 80, direction: 'vertical'  });		
	
	//"$('#soccer_ball_container')" inherits scrolling options from "$('.horizontal_scroller')",
	// then I reset new options; besides, "$('#soccer_ball_container')" will wraps and scrolls the bouncing animation...
	$('#soccer_ball_container').ResetScroller({	 velocity: 85, movetype: 'pingpong', onmouseover: 'play', onmouseout: 'play'  });

	//create soccer ball bouncing animation...
	$('#soccer_ball').bind('bouncer', function(){
			$(this).animate({top:42}, 500, 'linear').animate({top:5}, 500, 'linear', function(){$('#soccer_ball').trigger('bouncer');});			
	}).trigger('bouncer');

});
//-->
</script>  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body class="sub-page kp-pf-3col">
   <header id="page-header">
    
    	<div id="header-top">
        	<div class="wrapper">
            	<div class="row-fluid">
                	<div class="span12">
                    	<nav id="top-nav">
                        	<ul id="main-menu" class="clearfix">
                            	<li class="menu-home-icon current-menu-item">
                                	<a href="<?php echo base_url();?>">Uzm.Dr.Dinçer Erdinç</a>
                                 <!--   <ul>
                                    	<li class="current-menu-item"><a href="<?php echo base_url();?>index.html">Index style 1</a></li>
                                        <li><a href="<?php echo base_url();?>index-2.html">Index style 2</a></li>
                                        <li><a href="<?php echo base_url();?>index-3.html">Index style 3</a></li>
                                    </ul>-->
                                </li>
                                <li>
                                	<a href="<?php echo base_url();?>about">DİNÇER ERDİNÇ</a>
                               <!--     <ul>
                                    	<li><a href="<?php echo base_url();?>about.html">Hakkında</a></li>
                                        <li><a href="<?php echo base_url();?>elements.html">Videolar</a></li>
                                        <li><a href="<?php echo base_url();?>404.html"></a></li>
                                    </ul>-->
                                </li>
                                <li>
                                	<a href="<?php echo base_url();?>vids">Videolar</a>
                                 <!--   <ul>
                                    	<li><a href="<?php echo base_url();?>portfolio-3col.html">Portfolio 3col</a></li>
                                        <li><a href="<?php echo base_url();?>portfolio-2col.html">Portfolio 2col</a></li>
                                        <li><a href="<?php echo base_url();?>portfolio-1col.html">Portfolio 1col</a></li>
                                        <li>
                                        	<a href="<?php echo base_url();?>portfolio-detail.html">Portfolio detail</a>
                                            <ul>
                                            	<li><a href="<?php echo base_url();?>portfolio-detail.html">Portfolio single</a></li>
                                                <li><a href="<?php echo base_url();?>portfolio-audio.html">Portfolio audio</a></li>
                                                <li><a href="<?php echo base_url();?>portfolio-gallery.html">Portfolio gallery</a></li>
                                                <li><a href="<?php echo base_url();?>portfolio-video.html">Portfolio video</a></li>
                                                <li><a href="<?php echo base_url();?>portfolio-soundcloud.html">Portfolio soundcloud</a></li>
                                            </ul>
                                        </li>
                                    </ul>-->
                                </li>
                                <li>
                                	<a href="<?php echo base_url();?>blog">Yazılar</a>
                                  <!--  <ul>
                                    	<li>
                                        	<a href="#">Blog style 1</a>
                                            <ul>
                                            	<li><a href="<?php echo base_url();?>blog-1-left-sidebar.html">With left sidebar</a></li>
                                                <li><a href="<?php echo base_url();?>blog-1-right-sidebar.html">With right sidebar</a></li>
                                                <li><a href="<?php echo base_url();?>blog-1-two-sidebar.html">With two sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url();?>blog-2.html">Blog style 2</a></li>
                                        <li>
                                        	<a href="#">Blog style 3</a>
                                            <ul>
                                            	<li><a href="<?php echo base_url();?>blog-3-one-sidebar.html">With one sidebar</a></li>
                                                <li><a href="<?php echo base_url();?>blog-3-two-sidebar.html">With two sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                        	<a href="#">Blog single</a>
                                            <ul>
                                            	<li><a href="<?php echo base_url();?>single-1.html">Single style 1</a></li>
                                                <li><a href="<?php echo base_url();?>single-2.html">Single style 2</a></li>
                                                <li><a href="<?php echo base_url();?>single-3.html">Single style 3</a></li>
												<li><a href="<?php echo base_url();?>single-4.html">Single style 4</a></li>
											</ul>
                                        </li>
                                    </ul>-->
                                </li>
                                <li><a href="<?php echo base_url();?>contact">İLETİŞİM</a></li>
                                
                            </ul><!--main-menu-->
							
						<!--	<div id="mobile-menu">
                                <span>Menu</span>
                                <ul id="toggle-view-menu">
                                    <li class="clearfix">
                                        <h3><a href="#">Home</a></h3>
                                        <span>+</span>
                                        <div class="clear"></div>                    
                                        <div class="menu-panel clearfix">
                                            <ul>
                                                <li><a href="<?php echo base_url();?>index.html">Index style 1</a></li>
                                                <li><a href="<?php echo base_url();?>index-2.html">Index style 2</a></li>
                                                <li><a href="<?php echo base_url();?>index-3.html">Index style 3</a></li>
                                            </ul>
                                        </div>
                                    </li>
									<li class="clearfix">
                                        <h3><a href="#">Pages</a></h3>
                                        <span>+</span>
                                        <div class="clear"></div>                    
                                        <div class="menu-panel clearfix">
                                            <ul>
                                                <li><a href="<?php echo base_url();?>about.html">About page</a></li>
                                                <li><a href="<?php echo base_url();?>elements.html">Elements page</a></li>
                                                <li><a href="<?php echo base_url();?>404.html">404 page</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <h3><a href="#">Portfolio</a></h3>
                                        <span>+</span>
                                        <div class="clear"></div>                    
                                        <div class="menu-panel clearfix">
                                            <ul>
                                                <li><a href="<?php echo base_url();?>portfolio-3col.html">Portfolio 3 column</a></li>
                                                <li><a href="<?php echo base_url();?>portfolio-2col.html">Portfolio 2 column</a></li>
                                                <li><a href="<?php echo base_url();?>portfolio-1col.html">Portfolio 1 column</a></li>
                                                <li>
                                                    <a href="#">Portfolio detail</a>
                                                    <ul>
                                                        <li><a href="<?php echo base_url();?>portfolio-detail.html">Portfolio single</a></li>
                                                        <li><a href="<?php echo base_url();?>portfolio-audio.html">Portfolio audio</a></li>
                                                        <li><a href="<?php echo base_url();?>portfolio-gallery.html">Portfolio gallery</a></li>
                                                        <li><a href="<?php echo base_url();?>portfolio-video.html">Portfolio video</a></li>
                                                        <li><a href="<?php echo base_url();?>portfolio-soundcloud.html">Portfolio soundcloud</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <h3><a href="#">Blog</a></h3>
                                        <span>+</span>
                                        <div class="clear"></div>                    
                                        <div class="menu-panel clearfix">
                                            <ul>
                                                <li>
                                                	<a href="#">Blog style 1</a>
                                                    <ul>
                                                        <li><a href="<?php echo base_url();?>blog-1-left-sidebar.html">Width left sidebar</a></li>
                                                        <li><a href="<?php echo base_url();?>blog-1-right-sidebar.html">Width right sidebar</a></li>
                                                        <li><a href="<?php echo base_url();?>blog-1-two-sidebar.html">Width two sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?php echo base_url();?>blog-2.html">Blog style 2</a></li>
                                                <li>
                                                	<a href="#">Blog style 3</a>
                                                    <ul>
                                                        <li><a href="<?php echo base_url();?>blog-3-one-sidebar.html">Width one sidebar</a></li>
                                                        <li><a href="<?php echo base_url();?>blog-3-two-sidebar.html">Width two sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Blog single</a>
                                                    <ul>
                                                        <li><a href="<?php echo base_url();?>single-1.html">Single style 1</a></li>
                                                        <li><a href="<?php echo base_url();?>single-2.html">Single style 2</a></li>
                                                        <li><a href="<?php echo base_url();?>single-3.html">Single style 3</a></li>
                                                        <li><a href="<?php echo base_url();?>single-4.html">Single style 4</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="clearfix"><h3><a href="<?php echo base_url();?>contact.html">Contact</a></h3></li>					
                                </ul><!--toggle-view-menu-->
								
                            </div><!--mobile-menu-->
							<ul class="contact-top clearfix" style="margin-top:-30px;">
                        	<li class="clearfix"><i class="icon-phone"></i><span>1800-562-3764</span></li>
                            <li class="clearfix"><i class="icon-envelope"></i><a href="mailto:info@dincererdinc.com">info@dincererdinc.com</a></li>
                        </ul><!--contact-top-->
                        </nav><!--top-nav-->
						
                    </div><!--span12-->
                </div><!--row-fluid-->
            </div><!--wrapper-->
        </div><!--header-top-->
        
             <div id="header-bottom">
	
        	<div class="wrapper">
            	<div class="row-fluid">
                	<div class="span12 clearfix">
                    	<div id="logo-image">
			
                        	<a href="<?php echo base_url();?>index.html"><img style="width:150px; height:auto;" src="<?php echo base_url();?>placeholders/banner-300x300.png" alt="" /></a>
	
							
			
</div>
<div class="horizontal_scroller">
<div class="scrollingtext">
<?php echo $news_listTop; ?></div>	</div>
<div class="social-box clearfix"></div>
  <div class="social-box clearfix">

                        	<ul class="socials-link clearfix">
                            	<li class="dribbble-icon"><a href="#"><span class="icon-dribbble" aria-hidden="true"></span></a></li>
                                <li class="gplus-icon"><a href="#"><span class="icon-google-plus" aria-hidden="true"></span></a></li>
                                <li class="facebook-icon"><a href="#"><span class="icon-facebook" aria-hidden="true"></span></a></li>
                                <li class="twitter-icon"><a href="#"><span class="icon-twitter" aria-hidden="true"></span></a></li>
                                <li class="feed-icon"><a href="#"><span class="icon-feed-2" aria-hidden="true"></span></a></li>
                                <li class="flickr-icon"><a href="#"><span class="icon-flickr" aria-hidden="true"></span></a></li>
                            </ul><!--socials-link-->
							
							
							
                         <!--   <div class="search-box clearfix">
                                <form action="#" class="search-form clearfix" method="get" />
                                    <input type="text" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" value="Ara..." name="s" class="search-text" />
                                    <input type="submit" value="" name="submit" class="search-submit" />
                                </form>
								
                            </div><!-- search-form --><!--search-box-->
							
                        </div><!--social-box-->



						<div class="horizontal_scrollerx">
<div class="scrollingtextx">
</div>	</div>

						
						
														

						
						<div class="emptybanner">
</div>
                    </div><!--span12-->
				

			
					
					
                        </div><!--logo-image-->
                      

                </div><!--row-fluid-->
				
            </div><!--wrapper-->
        </div><!--header-bottom-->
        
	</header><!--page-header-->
    
   
    
    <div id="main-content">
    
        <div class="wrapper">
            
            <div class="row-fluid">
            
                <div class="span12">
                    
                    <div id="main-col">
                        
                        <div id="isotop-container">
                                                             
                         
                            <div class="m-wrapper clearfix">
                                <header id="m-pf-options" class="m-isotop-header clearfix">                                    
                                    <em>Sort by:</em><span>All</span> 
                                    <a></a>                                           
                                    <ul id="m-pf-filters" class="m-pf-option-set clearfix" data-option-key="filter">
                                        <li><a href="#filter" data-option-value="*">All</a></li>
                                        <li><a href="#filter" data-option-value=".animation">Animation</a></li>
                                        <li><a href="#filter" data-option-value=".design">Design</a></li>
                                        <li><a href="#filter" data-option-value=".illustration">Illustration</a></li>
                                        <li><a href="#filter" data-option-value=".photography">Photography</a></li>
                                        <li><a href="#filter" data-option-value=".web">Web</a></li>
                                    </ul><!-- end #portfolio-items-filter -->
                                </header><!-- end .page-header -->
                            </div><!--m-wrapper-->
                            <div id="pf-items">
                             <?php echo $viewgalleryvids;?>
                            </div><!--portfolio-items-->
                          
                        </div><!--isotop-container-->
                        
                    </div><!--main-col-->
                    
                    <aside class="sidebar widget-area-1">
                        <div class="widget">
                            <h4 class="widget-title">Popüler</h4>
                            <ul class="kp-popular-post">
                             <?php echo $blog_list_popular_top;?>
                            </ul>
                        </div><!--widget-->
                        
                        <div class="widget">
                            <div class="list-container-2">
                                <ul class="tabs-2 clearfix">
                                    <li class="active"><a href="#tab-2-1">Güncel</a></li>
                                    <li><a href="#tab-2-2">Popüler</a></li>
                                    <li><a href="#tab-2-3">Yorumlar</a></li>
                                </ul><!--tabs-2-->
                            </div>
                            <div class="tab-container-2">
                                <div class="tab-content-2" id="tab-2-1">                        
                                    <ul class="kp-latest-post">
                                     
									 <?php echo $blog_list_new; ?>
                                     
                                    </ul>
                                </div><!--tab-content-2-->
                                <div class="tab-content-2" id="tab-2-2">                        
                                    <ul class="kp-popular-post">
                                    	 <?php echo $blog_list_popular; ?>
                                    </ul>
                                </div><!--tab-content-2-->
                                <div class="tab-content-2" id="tab-2-3">                        
                                    <ul class="kp-comment">
                                   <?php echo $comment_list;?>
                                    </ul>
                                </div><!--tab-content-2-->            
                            </div>
                        </div><!--widget-->
                        
                        <!--<div class="widget">
                            <h4 class="widget-title">Latest tweets</h4>
                            <div class="twitter-widget">
                                <div class='twitter_outer'>
                                    <input type='hidden' class='tweet_id' value='envato'>
                                    <input type='hidden' class='tweet_count' value='2'>
                                    <div class='twitter_inner clearfix'></div>
                                </div>
                            </div>
                        </div>-->
                        
                       <!-- <div class="widget clearfix widget_archive">
                            <h4 class="widget-title">Arşiv</h4>		
                            <ul>
                                <li><i class="icon-calendar"></i><a href="#" title="">Ocak 2013</a>&nbsp;(1)</li>
                                <li><i class="icon-calendar"></i><a href="#" title="">Aralık 2012</a>&nbsp;(12)</li>
                                <li><i class="icon-calendar"></i><a href="#" title="">Kasım 2012</a>&nbsp;(10)</li>
                                <li><i class="icon-calendar"></i><a href="#" title="">Ekim 2012</a>&nbsp;(9)</li>
                                <li><i class="icon-calendar"></i><a href="#" title="">Eylül 2012</a>&nbsp;(5)</li>
                            </ul>
                        </div><!--widget_archive-->
                        
                        <div class="widget">
                            <div class="adv-300-300">
                                <a href="#"><img src="<?php echo base_url();?>placeholders/banner-300x300.png" alt="" /></a>
                            </div>
                        </div><!--widget-->
                        
                        <div class="widget clearfix widget_recent_comments">
                        	<h4 class="widget-title">SON GÖNDERİLENLER</h4>
                            <ul id="recentcomments">
                              <?php echo $lastpostedblog; ?>
                            </ul>
                        </div>
                        
                        <div class="widget clearfix widget_recent_entries">
                        	<h4 class="widget-title">Güncel Yorumlar</h4>		
                            <ul>
                            	<?php echo $lastpostedcomment;?>
                            </ul>
                        </div>
                        
                      
                        
                       
                            
                    </aside><!--end:sidebar-->
                    
                  <div class="clear"></div>
                    
                    <div class="bottom-twitter bottom-tagline">
                    	<div class="wrapper">
                        	<div class="row-fluid">
                                <div class="span12">
                                    <!--<div class="twitter-widget">
                                        <div class='twitter_outer'>
                                            <input type='hidden' class='tweet_id' value='envato'>
                                            <input type='hidden' class='tweet_count' value='1'>
                                            <div class='twitter_inner clearfix'></div>
                                        </div>
                                    </div>-->
                                    <p>Bir Ömür Sıhhat</p>
                                </div><!--span12-->
                        	</div><!--row-fluid-->
                    	</div><!--wrapper-->
                	</div><!--bottom-twitter-->
                    
                </div><!--span12-->
                
            </div><!--row-fluid-->  
            
        </div><!--wrapper-->
    
    </div><!--main-content-->
    
<div id="bottom-sidebar">
    	
        <div class="wrapper">
        	
            <div class="row-fluid">
            	
                        <div class="span3 widget-area-6">
                	<div id="footer-logo-image">
                        <a class="white-logo" href="#"><img src="<?php echo base_url();?>placeholders/white-logo.png" alt="" /></a>
                      
                    </div>
                    <div class="widget clearfix widget_text">    
                        <h3>Kisaca Hakkımda</h3>					
                        <div class="textwidget">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus luctus est vestibulum luctus. Cras semper mollis feugiat. Suspendisse mollis, massa id aliquam vulputate, libero Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus luctus est vestibulum luctus. Cras semper mollis feugiat. Suspendisse mollis, massa id aliquam vulputate, libero...</div>                 		
                    </div><!--widget_text-->
                </div><!--span3-->
                
                <div class="span3 widget-area-7">
                	<div class="widget">
                    	
                         <div class="widget">
                            <div class="adv-300-300">
                                <a href="#"><img src="<?php echo base_url();?>placeholders/banner-300x300.png" alt="" /></a>
                            </div>
                        </div><!--widget-->
                    </div><!--widget-->
                </div><!--span3-->
                
                <div class="span3 widget-area-8">                	
                    <div class="widget">
                    	<h4 class="widget-title">Başlıklar</h4>
                        <div class="kp-tagcloud">
                        <?php echo $bottomblogtitles;?>
						</div>
                    </div><!--widget-->
                </div><!--span3-->
                
                <div class="span3 widget-area-9">
                	<div class="widget">
                    	<h4 class="widget-title">SON YORUMLAR</h4>
                        <ul class="kp-latest-comment">
                           
                         <?php echo $lastpostedcomments2;?>
                        </ul>
                    </div><!--widget-->
                </div><!--span3-->
                
            </div><!--row-fluid-->
            
        </div><!--wrapper-->
        
    </div><!--bottom-sidebar-->
    
    <footer id="page-footer">
    	<div class="wrapper">
        	<div class="row-fluid">
            	<div class="span12">
                	<div id="copyright">Copyrights. &copy; 2013 by IO </div>
                </div><!--span12-->
            </div><!--row-fluid-->
        </div><!--wrapper-->
    </footer><!--page-footer-->
    <p id="back-top">
        <a href="#top">Başa Dön</a>
    </p>
       <script src="<?php echo base_url();?>scripts/jquery-scroller-v1.min.js" type="text/javascript"></script> 

	
    <script src="<?php echo base_url();?>js/superfish.js"></script>
    <script src="<?php echo base_url();?>js/retina.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url();?>js/jquery.eislideshow.js"></script>
    <script src="<?php echo base_url();?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url();?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>js/modernizr-transitions.js"></script>
    <script src="<?php echo base_url();?>js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.form.js"></script>
    <script src="<?php echo base_url();?>js/jquery.tweet.js"></script>
    <script src="<?php echo base_url();?>js/jflickrfeed.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.flexslider.js"></script>
    <script src="<?php echo base_url();?>js/jQuery.BlackAndWhite.js"></script>
    <script src="<?php echo base_url();?>js/jquery.carouFredSel-6.0.4-packed.js"></script>
    <script src="<?php echo base_url();?>js/sequence.jquery-min.js"></script>    
    <script src="<?php echo base_url();?>js/custom.js" charset="utf-8"></script>
    
    </body>
</html>
