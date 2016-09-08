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
	$blog_list_new.='  <article class="blog-row clearfix">
    <div class="blog-left">
      <div class="vc_anim vc_anim-slide"> <a href="portfolio-single-project.html" class="vc_preview"> <img alt="example image" src="'.$url.'images/blog_images/'.$ioBlog_id.'.jpg"  /> </a>
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
	    <a href="portfolio-single-project.html" class="vc_preview"> <img alt="example image" src="'.$url.'images/blog_images/'.$ioBlog_id.'.jpg"  /> </a>
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
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->

    <!-- Fonts CSS -->
    <link href="css/fonts.css"  rel="stylesheet" type="text/css">
               
    <!-- Plugin CSS -->
    <link href="plugins/prettyPhoto-plugin/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="plugins/isotope-plugin/css/isotope.css" rel="stylesheet" type="text/css">
    <link href="plugins/rs-plugin/css/settings.css" media="screen" rel="stylesheet" type="text/css">
	<link href="plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">  
	<link href="css/animate.min.css" rel="stylesheet" type="text/css"> 
 
    <!-- Theme CSS -->
    <link href="css/theme.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->
    <link href="css/header/header-1.css" rel="stylesheet">

	<!-- Specific Page CSS -->
	
    <!-- Design Mode CSS -->
    <link id="link-header-mode" href="css/mode/mode-1-header.css" rel="stylesheet" type="text/css"> 
    <link id="link-footer-mode" href="css/mode/mode-1-footer.css" rel="stylesheet" type="text/css">    
    <link id="link-color" href="css/color/color-blue.css" rel="stylesheet" type="text/css">

        
    <!-- Responsive CSS -->
        	<link href="css/theme-responsive.css" rel="stylesheet" type="text/css"> 
    	<link href="css/header/header-1-responsive.css" rel="stylesheet" type="text/css"> 
        <link id="link-header-mode-r" href="css/mode/mode-1-header-responsive.css" rel="stylesheet" type="text/css"> 
        <link id="link-footer-mode-r" href="css/mode/mode-1-footer-responsive.css" rel="stylesheet" type="text/css">
    	<link id="link-color" href="css/color/color-blue-responsive.css" rel="stylesheet" type="text/css">        
		              
	  
    
    
    <!-- Custom CSS -->
    <link href="custom/custom.css" rel="stylesheet" type="text/css">


    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="js/modernizr.js"></script> 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
	
	<link href="https://fonts.googleapis.com/css?family=Courgette|Damion" rel="stylesheet">
 <style>  
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

});

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
                <a href="index.html"> 
                    <img  alt="logo" src="img/logo.png"> 
                </a>
            </div>
            <div class="vc_btn-navbar">
              <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".vc_primary-menu"> <span class="icon-bar"> </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> </button>
            </div>
            <div class="vc_primary-menu">
				<ul>
    <li id="home"> <a href="index"> Home  </a>
   
    </li>
                  
    <li id="features"> <a href="jobseekers"> Job Seekers <i class="fa fa-caret-down"> </i> </a>
      <div class="vc_menu-open-right vc_menu-2-v">
        <ul class="clearfix">
          <li> <a href="jobs">Technology Jobs</a></li>
          <li> <a href="jobs"> Accounting Jobs </a> </li>
         <li> <a href="jobs"> Healthcare Jobs </a> </li>
           <li> <a href="jobs"> Law Jobs </a> </li>
        </ul>
      </div>
    </li>
    <li id="portfolios"> <a href="loginPage"> Employee Portal <i class="fa fa-caret-down"> </i> </a>    </li>
 <li id="about"> <a href="about"> About Us </a> </li>

    <li id="contact"> <a href="contact"> Contact Us </a> </li>
	
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
<div class="gcse-searchbox-only" data-resultsUrl="pages-search-result.html" data-queryParameterName="q" ></div>			</div> 
            
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




<!-- Middle Content Start -->
  <div class="vc_banner block">
    <div class="wrapper">
         <div class="homepage-hero-module">
    <div class="video-container">
     
        <div class="filter"></div>
        <video autoplay loop class="fillWidth">
            <source src="media/file.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.</video>
        <div class="poster hidden">
            <img src="http://www.videojs.com/img/poster.jpg" alt="">
        </div>
    </div>
</div>
          <!-- vc_metro-wrapper --> 
    </div>
    <!-- wrapper --> 
  </div>
  <!-- vc_banner -->
  
  <div class="vc_welcome block">
    <div class="wrapper">
      <div class="container">
	  

        <h1 style="font-family: 'Courgette', cursive; line-height:60px;"> A Fundamental Shift In How Business & Technology Bridge. </h1>
        <div class="row">
          <div class="col-md-2">
            <div class="vc_icon-round">
              <div class="bg-wrapper">
                <div class="bg"> <i class="fa fa-rocket"> </i> </div>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="description">
              
              <p class="text"> I.T. Silk Route is a leading professional staffing company, providing a broad range of services and solutions in strategy, consulting, staffing and operations.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="vc_button pull-left"> <a href="about.html" class="vc_btn "> Learn More </a> </div>
            <div class="border"> </div>
          </div>
        </div>
        <!-- row --> 
      </div>
      <!-- container --> 
    </div>
    <!-- wrapper --> 
  </div>
  <!-- vc_welcome -->
  
  <div class="vc_features block">
    <div class="wrapper">
     
      <!-- container --> 
    </div>
    <!-- wrapper --> 
  </div>
  <!-- vc_features-->
  
  <div class="vc_latest-portfolio block">
    <div class="wrapper">
      <div class="container">
        <h2 class="pull-left"  style="font-family: 'Courgette', cursive; line-height:60px;"> Our Services and Offerings </h2>
        <div class="vc_carousel-control clearfix"> <a href="#"> <i class="fa fa-chevron-left"> </i> </a> <a href="#"> <i class="fa fa-chevron-right"> </i> </a> </div>
        <div class="vc_splitter"> <span class="bg"> </span> </div>
        
		  
		   <div class="row text-center">
            <div class="col-md-4">
              <div class="vc_icon-roundx vc_centerx"  >
                <div class="bgx-wrapper">
                  <div class="bgx"> <img alt="example image" src="img/about/01.jpg"> </div>
                </div>
              </div>
              <div class="vc_splitter"></div>
              <h3 style="margin-bottom:0;">SEARCH JOBS</h3>
              <p> <em>KEYWORD, LOCATION</em> </p>
              <a class="vc_btn btn-small" href="#">Search</a> </div>
            <div class="col-md-4">
              <div class="vc_icon-roundx vc_centerx">
                <div class="bgx-wrapper">
                  <div class="bgx"> <img alt="example image" src="img/about/02.jpg"> </div>
                </div>
              </div>
              <div class="vc_splitter"></div>
              <h3 style="margin-bottom:0;">SIGN UP FOR JOB ALERTS</h3>
              <p> <em>RECEIVE SPECIFIC EMAIL ALERTS</em> </p>
              <a class="vc_btn btn-small" href="#">Subscribe</a> </div>
            <div class="col-md-4">
              <div class="vc_icon-roundx vc_centerx"  >
                <div class="bg-wrapper">
                  <div class="bgx"> <img alt="example image" src="img/about/03.jpg"> </div>
                </div>
              </div>
              <div class="vc_splitter"></div>
              <h3 style="margin-bottom:0;">POST YOUR RESUME</h3>
              <p> <em>APPLY ONLINE</em> </p>
              <a class="vc_btn btn-small" href="#">Enter Info</a> </div>
          </div><!-- row -->
          <!-- .vc_carousel --> 
        </div>
        <!-- .vc_carousel-wrap --> 
      </div>
      <!-- .container-->
      <div class="clearfix"> </div>
    </div>
    <!-- .wrapper --> 
  </div>
  <!-- .vc_latest-portfolio -->
  
  <div class="vc_blog-contact block">
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div id="vc_blog-list-widget" class="widget col-md-8">
	  	  	<div class="vc_blog-list">
  <h2> Latest <span class="vc_main-color"> Blogs </span> </h2>
  <div class="vc_splitter"> <span class="bg"> </span> </div>
    
	<?php echo $viewblog; ?>
	
  <div class="clearfix"> </div>
</div>
<!-- .vc_blog-list -->           </div>
          <!-- #vc_blog-list-widget .col-md-8 -->
          <div id="vc_contact-form-widget" class="widget col-md-4">
	  	  	<div class="vc_contact-form">
  <h2> Contact <span class="vc_main-color"> Us </span> </h2>
  <div class="vc_splitter"> <span class="bg"> </span> </div>
  <div id="contact-form-result">
      <div id="success" class="alert alert-success hidden"><button type="button" class="close" data-dismiss="alert">&times;</button>We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.</div>
      <div id="error" class="alert alert-danger hidden"><button type="button" class="close" data-dismiss="alert">&times;</button> </div>
      <div id="empty" class="alert alert-danger hidden"><button type="button" class="close" data-dismiss="alert">&times;</button>Please <strong>Fill up</strong> all the Fields and Try Again.</div>
      <div id="unexpected" class="alert alert-danger hidden"><button type="button" class="close" data-dismiss="alert">&times;</button>An <strong>unexpected error</strong> occured. Please Try Again later.</div>                 
  </div>               
            <p> </p>
			
            <?php 
					if($this->session->flashdata("success") !== FALSE)
					{
					echo $this->session->flashdata("success");
					}

			?>
            <form id="contact" name="contact" action="contact" method="post">
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label" for="contact-form-name">Name<span class="vc_red">*</span></label>
                    <div class="controls">
                      <input type="text" placeholder="" id="contact-form-name" name="contact-form-name" required />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label" for="contact-form-email">Email<span class="vc_red">*</span></label>
                    <div class="controls">
                      <input type="email" placeholder="" id="contact-form-email" name="contact-form-email" required >
                    </div>
                  </div>
                </div>
                
              </div> <!-- row -->
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                  	<label  for="contact-form-subject">Subject<span class="vc_red">*</span></label>                    
                    <div class="controls">
                      <input type="text" placeholder="" id="contact-form-subject" name="contact-form-subject" required />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                  	<label for="contact-form-message">Message<span class="vc_red">*</span></label>                   
                    <div class="controls">
                      <textarea  rows="10" cols="58" id="contact-form-message" name="contact-form-message" required ></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <button class="vc_btn" type="submit" id="contact-form-submit" name="contact-form-submit" value="submit">Send Message</button>
                </div>
              </div>
            </form>
          
</div>          </div>
          <!--  #vc_blog-list-widget .col-md-4 --> 
        </div>
        <!-- .row -->
        <div class="clearfix"> </div>
        <div class="vc_line-splitter"> <span class="bg"> </span> </div>
      </div>
      <!-- .container --> 
    </div>
    <!-- .wrapper --> 
  </div>
  <!-- .vc_blog-contact -->
  
  <!-- .vc_client --> 
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

<!-- Specific Page Scripts Put Here -->
<script src="js/specific/quick-contact.js"  type="text/javascript"></script>

<!-- Specific Page Scripts Put Here -->
<script src="js/specific/metro-slider.js" type="text/javascript"></script>
<script src="js/specific/quick-contact.js"  type="text/javascript"></script>



<!-- Specific Page Scripts END -->






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


</body>
</html>