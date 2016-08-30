<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ioc extends CI_Controller {

   function __construct()  
    {  
        parent::__construct(); 
        	$this->view_data["base_url"]=base_url();	
			
			/*Kills the session entirely includes backwarding the page*/
			$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
			$this->output->set_header('Pragma: no-cache');
			$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }

/*
First function for controller.It will run first anyway
*/

function index()
{
$data["loginerror"]='';
$email=$this->session->userdata('email');
if($this->session->userdata('logged_in')){


$data["loginSignupHtml"]='   <li id="features"> <a href="jobseekers"> <span style="color:orange">My profile</span> <i class="fa fa-caret-down"> </i> </a>
      <div class="vc_menu-open-right vc_menu-2-v">
        <ul class="clearfix">
          <li> <a href="logout">Sign Out</a></li>
          
        </ul>
      </div>
    </li>';
$data["login"]="";
}else
{
$data["loginSignupHtml"]=$this->loginSignupHtml();	
$data["email"]="Visitor";
$data["logout"]="";
$data["login"]="Login";
}

$data["ok"]="";
$data["popup2"]="";
$data["message2"]="";
$data["message"]="";
$data["popup"]="";

$this->load->view("index",$data);
//$this->home();

}

function about()
{
	$data["loginerror"]='';
$email=$this->session->userdata('email');
if($this->session->userdata('logged_in'))
{
$data["loginSignupHtml"]='   <li id="features"> <a href="jobseekers"> <span style="color:orange">My profile</span> <i class="fa fa-caret-down"> </i> </a>
      <div class="vc_menu-open-right vc_menu-2-v">
        <ul class="clearfix">
          <li> <a href="logout">Sign Out</a></li>
          
        </ul>
      </div>
    </li>';
$data["login"]="";
}else
{
$data["loginSignupHtml"]=$this->loginSignupHtml();	
$data["email"]="Visitor";
$data["logout"]="";
$data["login"]="Login";
}
$data["ok"]="";
$data["popup2"]="";
$data["message2"]="";
$data["message"]="";
$data["popup"]="";
$data["loginerror"]='';
$this->load->view("header",$data);
$this->load->view("about",$data);
//$this->home();

}


function rp()
{
$data["ok"]="";
$data["popup2"]="";
$data["message2"]="";
$data["message"]="";
$data["popup"]="";
$this->load->view("registration",$data);
//$this->home();

}

function lp()
{
$data["ok"]="";
$data["popup2"]="";
$data["message2"]="";
$data["message"]="";
$data["popup"]="";
$this->load->view("login",$data);
//$this->home();

}

function jobseekers()
{
	$data["loginerror"]='';
$email=$this->session->userdata('email');
if($this->session->userdata('logged_in')){

$data["loginSignupHtml"]='   <li id="features"> <a href="jobseekers"> <span style="color:orange">My profile</span> <i class="fa fa-caret-down"> </i> </a>
      <div class="vc_menu-open-right vc_menu-2-v">
        <ul class="clearfix">
          <li> <a href="logout">Sign Out</a></li>
          
        </ul>
      </div>
    </li>';
$data["login"]="";
}else
{
$data["loginSignupHtml"]=$this->loginSignupHtml();	
$data["email"]="Visitor";
$data["logout"]="";
$data["login"]="Login";
}
$data["ok"]="";
$data["popup2"]="";
$data["message2"]="";
$data["message"]="";
$data["popup"]="";
$data["loginerror"]='';
$this->load->view("header",$data);
$this->load->view("job-seekers",$data);
//$this->home();

}

function jobs()
{
	$data["loginerror"]='';
$email=$this->session->userdata('email');
if($this->session->userdata('logged_in')){


$data["loginSignupHtml"]='   <li id="features"> <a href="jobseekers"> <span style="color:orange">My profile</span> <i class="fa fa-caret-down"> </i> </a>
      <div class="vc_menu-open-right vc_menu-2-v">
        <ul class="clearfix">
          <li> <a href="logout">Sign Out</a></li>
          
        </ul>
      </div>
    </li>';
$data["login"]="";
}else
{
$data["loginSignupHtml"]=$this->loginSignupHtml();	
$data["email"]="Visitor";
$data["logout"]="";
$data["login"]="Login";
}
$data["ok"]="";
$data["popup2"]="";
$data["message2"]="";
$data["message"]="";
$data["popup"]="";
$data["loginerror"]='';
$this->load->view("header",$data);
$this->load->view("jobs",$data);
//$this->home();

}



function blog()
{
	$data["loginerror"]='';
$email=$this->session->userdata('email');
if($this->session->userdata('logged_in')){


$data["loginSignupHtml"]='   <li id="features"> <a href="jobseekers"> <span style="color:orange">My profile</span> <i class="fa fa-caret-down"> </i> </a>
      <div class="vc_menu-open-right vc_menu-2-v">
        <ul class="clearfix">
          <li> <a href="logout">Sign Out</a></li>
          
        </ul>
      </div>
    </li>';
$data["login"]="";
}else
{
$data["loginSignupHtml"]=$this->loginSignupHtml();	
$data["email"]="Visitor";
$data["logout"]="";
$data["login"]="Login";
}
$data["ok"]="";
$data["popup2"]="";
$data["message2"]="";
$data["message"]="";
$data["popup"]="";
$data["loginerror"]='';
$this->load->view("header",$data);
$this->load->view("blog",$data);
//$this->home();




}



function menu()
{
$data["ok"]="";
$data["popup2"]="";
$data["message2"]="";
$data["message"]="";
$data["popup"]="";
$data["loginerror"]='';
$data["loginSignupHtml"]=$this->loginSignupHtml();	
$this->load->view("header",$data);
$this->load->view("menu",$data);



}

function reserv()
{
$data["ok"]="";
$data["popup2"]="";
$data["message2"]="";
$data["message"]="";
$data["popup"]="";
$this->load->view("reserv",$data);



}


function detailnews()
{

$detid=$this->input->get('id');


$newsspecfull="";
$detailnewssql=$this->db->query("SELECT * FROM io_news WHERE ioNews_id='$detid' LIMIT 1");

	$newscount=$detailnewssql->num_rows();
	
	
			if($newscount==1){
				$newscount=$detailnewssql->result_array();
      
	
			 $ioNews_id=$newscount["ioNews_id"];
			 $ioNews_title=$newscount["ioNews_title"];
			 $ioNews_content=$newscount["ioNews_content"];
			 $ioNews_link=$newscount["ioNews_link"];
			 $ioNews_view=$newscount["ioNews_view"];
			 $ioNews_date=$newscount["ioNews_date"];
		      
			  $ioNews_view=$ioNews_view+1;
			 $this->db->query("UPDATE io_news SET ioNews_view='$ioNews_view' where ioNews_id='$ioNews_id'");
			 $newsspecfull.='
			                                                       <div class="entry-body clearfix">
                                                        <div class="kp-thumb hover-effect">
                                                            <div class="mask">
                                                                <a class="link-detail" href="#" data-icon="&#xe0c2;"></a>
                                                            </div>
                                                            <img src="'.base_url().'images/news_images/'.$ioNews_id.'.jpg" alt="" />
                                                        </div>
                                                        <header>
                                                            <h2 class="entry-title"><a href="#">'.$ioNews_title.'</a></h2>
                                                            <span class="entry-date"><span class="icon-clock-4 entry-icon" aria-hidden="true"></span><span>'.$ioNews_date.'</span></span>
                                                            <span class="entry-comment"><span class="icon-bubbles-4 entry-icon" aria-hidden="true"></span><a href="#">'.$ioNews_view.'</a></span>
                                                        </header>
                                                           
                                                        <p>
														
														'.$ioNews_content.'
														
														</p>
                                                        
                                                    </div>
			
			
			';
			
	
		
			
	
		}else{
		echo '<script language="JavaScript"> 
{
window.alert("Beklenmeyen Bir hata Ile Karsilasildi: X090x106ILP, <br> ");
window.location.href ="'.base_url().'";}';
		
		
		
		
		exit();
			}
				 
	/*
	
	
	*/
	
$comment_newslist="";
$realCount=0;
//this block grabs the whole list for viewing
if($comment_newslist==""){
$sqlnewscomment=$this->db->query("SELECT * FROM io_comment WHERE  ioComment_idparent='$detid' AND ioComment_categid='2' ORDER BY ioComment_date DESC");  //or ASC
$commentnewscounter=$sqlnewscomment->num_rows(); //count output amount
$url=base_url();
if($commentnewscounter>0)  //if there is comment
{
$limit=0;
			//take comments
	foreach($sqlnewscomment->result_array() as $rowcomment)
	{

	$ioComment_id=$rowcomment["ioComment_id"];
	$ioComment_name=$rowcomment["ioComment_name"];
	$ioComment_email=$rowcomment["ioComment_email"];
	$ioComment_title=$rowcomment["ioComment_title"];
	$ioComment_comment=$rowcomment["ioComment_comment"];
	$ioComment_answer=$rowcomment["ioComment_answer"];
	$ioComment_date=$rowcomment["ioComment_date"];
	$ioComment_post=$rowcomment["ioComment_post"];
	$ioComment_view=$rowcomment["ioComment_view"];
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
	$randomonetoseven = rand (1,7);
	$comment_newslist.='  <li class="comment clearfix">
                                        <article class="comment-wrap clearfix"> 
                                            <div class="comment-avatar">
                                                <img src="'.base_url().'placeholders/avatar/'.$randomonetoseven.'.jpg" alt="" />                                           
                                            </div>
                                            <div class="comment-body clearfix">
                                                <div class="comment-meta">
                                                    <span class="author">'.$ioComment_name.'</span>
                                                    <span class="date">&nbsp;-&nbsp;'.$ioComment_date.'</span>
                                                </div><!-- end:comment-meta -->                        
                                                <p>'.$ioComment_comment.'</p>
                                                <footer>
													
												</footer>
                                            </div><!--comment-body -->
                                        </article>                                                                               
                                    </li>';
              if($ioComment_answer!=""){      $comment_newslist.='<ul class="children">
                                        <li class="comment clearfix">
                                            <article class="comment-wrap clearfix"> 
                                                <div class="comment-avatar">
                                                    <img src="'.base_url().'placeholders/avatar/0.jpg" alt="" />                                           
                                                </div>
                                                <div class="comment-body clearfix">
                                                    <div class="comment-meta">
                                                        <span class="author">Admin</span>
                                                        <span class="date">&nbsp;-&nbsp;</span>
                                                    </div><!-- end:comment-meta -->                        
                                                    <p>'.$ioComment_answer.'</p>
                                                    <footer>
														
													</footer>
                                                </div><!--comment-body -->
                                            </article>                                                                               
                                        </li></ul>
                                    ';}
	
		if($ioComment_answer!="")  //if answer is not empty add answer too.
	{
	 $comment_newslist.='<div class="parent child">
            <figure class="img-circle blog-fleft"><img id="newimg" src="'.$url.'img/mark.jpg" alt="" class="img-circle"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#">ioComment</a></h2>
            <span></span> <a class="reply" href="ioc/all#contact-form">Yorum Gönder</a>
            <p> '.$ioComment_answer.' </p>
          </div>';
	
	}
	}
	}
	
	}else //if there is no comment
	
	{
		
		 
		}
		
		   if($realCount==0){
		 // $comment_list="Henüz Yorum Yapılmamıştır.<a class='reply' href='".$shoot."'>Yorum Gönder</a>"; 
     	 $comment_newslist.=' <article class="timeline-item quote-post clearfix">
                                                    
                                                    <div class="timeline-icon">
                                                        <div><p data-icon="&#xe075;" /></div>
                                                        <span class="dotted-horizon"></span>
                                                        <span class="vertical-line"></span>
                                                        <span class="circle-outer"></span>
                                                        <span class="circle-inner"></span>
                                                    </div>
                                                
                                                    <div class="entry-body clearfix">                                                    
                                                        <p  style="font-size:14px;">
														
														</p>
                                                        <center><span class="quote-name">Henüz Yorum Yapılmamıştır</span></center>
                                                        <header>
                                                            <span class="entry-date"><span class="icon-clock-4 entry-icon" aria-hidden="true"></span><span></span></span>
                                                            <span class="entry-comment"><span class="icon-bubbles-4 entry-icon" aria-hidden="true"></span><a href="#"></a></span>
                                                        </header>
                                                    </div>
                                                    
                                                </article><!--timeline-item-->';
		}
		
		
		
		
   
		}
$data["pagetitle"]=$ioNews_title;	
$data["parentid"]=$detid;
$data["from"]="detailnews"; //news	
$data["details"]=$newsspecfull;
$data["comment_speclist"]=$comment_newslist;
$data["feromon"]=2; //slider category
$this->load->view("detail",$data);



}


function detailslider()
{

$detid=$this->input->get('id');
$fromid=$this->input->get('fromid');
$feromon=$this->input->get('feromon');


$sliderspecfull="";
$detailslidersql=$this->db->query("SELECT * FROM io_slider WHERE ioSlider_id='$detid' LIMIT 1");

	$newscount=$detailslidersql->num_rows();
	
	
			if($newscount==1){
				$newscount=$detailslidersql->result_array();
      
	
			 $ioSlider_id=$newscount["ioSlider_id"];
			 $ioSlider_title=$newscount["ioSlider_title"];
			 $ioSlider_text=$newscount["ioSlider_text"];
			 $ioSlider_date=$newscount["ioSlider_date"];
			 $ioSlider_view=$newscount["ioSlider_view"];
		      
			  $ioSlider_view=$ioSlider_view+1;
			 $this->db->query("UPDATE io_slider SET ioSlider_view='$ioSlider_view' where ioSlider_id='$ioSlider_id'");
			 $sliderspecfull.='
			                                                       <div class="entry-body clearfix">
                                                        <div class="kp-thumb hover-effect">
                                                            <div class="mask">
                                                                <a class="link-detail" href="#" data-icon="&#xe0c2;"></a>
                                                            </div>
                                                            <img src="'.base_url().'placeholders/slider/'.$ioSlider_id.'.jpg" alt="" />
                                                        </div>
                                                        <header>
                                                            <h2 class="entry-title"><a href="#">'.$ioSlider_title.'</a></h2>
                                                            <span class="entry-date"><span class="icon-clock-4 entry-icon" aria-hidden="true"></span><span>'.$ioSlider_date.'</span></span>
                                                            <span class="entry-comment"><span class="icon-bubbles-4 entry-icon" aria-hidden="true"></span><a href="#">'.$ioSlider_date.'</a></span>
                                                        </header>
                                                           
                                                        <p>
														
														'.$ioSlider_text.'
														
														</p>
                                                        
                                                    </div>
			
			
			';
			
	
		
			
	
		}else{
		echo '<script language="JavaScript"> 
{
window.alert("Beklenmeyen Bir hata Ile Karsilasildi: X090x106ILP, <br> ");
window.location.href ="'.base_url().'";}';
		
		
		
		
		exit();
			}
				 
	/*
	
	
	*/
	
$comment_sliderlist="";
$realCount=0;
//this block grabs the whole list for viewing
if($comment_sliderlist==""){
$sqlslidercomment=$this->db->query("SELECT * FROM io_comment WHERE  ioComment_idparent='$detid'  AND ioComment_categid='1'  ORDER BY ioComment_date DESC");  //or ASC
$commentslidercounter=$sqlslidercomment->num_rows(); //count output amount
$url=base_url();
if($commentslidercounter>0)  //if there is comment
{
$limit=0;
	foreach($sqlslidercomment->result_array() as $rowcomment) //take comments
	{

	$ioComment_id=$rowcomment["ioComment_id"];
	$ioComment_name=$rowcomment["ioComment_name"];
	$ioComment_email=$rowcomment["ioComment_email"];
	$ioComment_title=$rowcomment["ioComment_title"];
	$ioComment_comment=$rowcomment["ioComment_comment"];
	$ioComment_answer=$rowcomment["ioComment_answer"];
	$ioComment_date=$rowcomment["ioComment_date"];
	$ioComment_post=$rowcomment["ioComment_post"];
	$ioComment_view=$rowcomment["ioComment_view"];
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
	$randomonetoseven = rand (1,7);
	$comment_sliderlist.='  <li class="comment clearfix">
                                        <article class="comment-wrap clearfix"> 
                                            <div class="comment-avatar">
                                                <img src="'.base_url().'placeholders/avatar/'.$randomonetoseven.'.jpg" alt="" />                                           
                                            </div>
                                            <div class="comment-body clearfix">
                                                <div class="comment-meta">
                                                    <span class="author">'.$ioComment_name.'</span>
                                                    <span class="date">&nbsp;-&nbsp;'.$ioComment_date.'</span>
                                                </div><!-- end:comment-meta -->                        
                                                <p>'.$ioComment_comment.'</p>
                                                <footer>
													
												</footer>
                                            </div><!--comment-body -->
                                        </article>                                                                               
                                    </li>';
              if($ioComment_answer!=""){      $comment_newslist.='<ul class="children">
                                        <li class="comment clearfix">
                                            <article class="comment-wrap clearfix"> 
                                                <div class="comment-avatar">
                                                    <img src="'.base_url().'placeholders/avatar/0.jpg" alt="" />                                           
                                                </div>
                                                <div class="comment-body clearfix">
                                                    <div class="comment-meta">
                                                        <span class="author">Admin</span>
                                                        <span class="date">&nbsp;-&nbsp;</span>
                                                    </div><!-- end:comment-meta -->                        
                                                    <p>'.$ioComment_answer.'</p>
                                                    <footer>
														
													</footer>
                                                </div><!--comment-body -->
                                            </article>                                                                               
                                        </li></ul>
                                    ';}
	
		if($ioComment_answer!="")  //if answer is not empty add answer too.
	{
	 $comment_sliderlist.='<div class="parent child">
            <figure class="img-circle blog-fleft"><img id="newimg" src="'.$url.'img/mark.jpg" alt="" class="img-circle"></figure>
            <div class="parent-sub-img"></div>
            <h2><a href="#">ioComment</a></h2>
            <span></span> <a class="reply" href="ioc/all#contact-form">Yorum Gönder</a>
            <p> '.$ioComment_answer.' </p>
          </div>';
	
	}
	}
	}
	
	}else //if there is no comment
	
	{
		
		 
		}
		
		   if($realCount==0){
		 // $comment_list="Henüz Yorum Yapılmamıştır.<a class='reply' href='".$shoot."'>Yorum Gönder</a>"; 
     	 $comment_sliderlist.=' <article class="timeline-item quote-post clearfix">
                                                    
                                                    <div class="timeline-icon">
                                                        <div><p data-icon="&#xe075;" /></div>
                                                        <span class="dotted-horizon"></span>
                                                        <span class="vertical-line"></span>
                                                        <span class="circle-outer"></span>
                                                        <span class="circle-inner"></span>
                                                    </div>
                                                
                                                    <div class="entry-body clearfix">                                                    
                                                        <p  style="font-size:14px;">
														
														</p>
                                                        <center><span class="quote-name">Henüz Yorum Yapılmamıştır</span></center>
                                                        <header>
                                                            <span class="entry-date"><span class="icon-clock-4 entry-icon" aria-hidden="true"></span><span></span></span>
                                                            <span class="entry-comment"><span class="icon-bubbles-4 entry-icon" aria-hidden="true"></span><a href="#"></a></span>
                                                        </header>
                                                    </div>
                                                    
                                                </article><!--timeline-item-->';
		}
		
		
		
		
   
		}
$data["pagetitle"]=$ioSlider_title;	
$data["parentid"]=$detid;
$data["fromid"]=1;
$data["from"]="detailslider"; //news	
$data["details"]=$sliderspecfull;
$data["feromon"]=1; //slider category
$data["comment_speclist"]=$comment_sliderlist;
$this->load->view("detail",$data);



}


function detailblog()
{


$detid=$this->input->get('id');


$blogspecfull="";
$detailblogsql=$this->db->query("SELECT * FROM io_blog WHERE ioBlog_id='$detid' LIMIT 1");

	$blogcount=$detailblogsql->num_rows();
	
	
			if($blogcount==1){
				foreach($detailblogsql->result_array() as $blogcount){
		    // $blogcount=$detailblogsql->result_array(); 
//print_r($blogcount);			 
			 $ioBlog_id=$blogcount['ioBlog_id'];
			 $ioBlog_title=$blogcount["ioBlog_title"];
			 $ioBlog_content=$blogcount["ioBlog_content"];
			 $ioBlog_link=$blogcount["ioBlog_link"];
			 $ioBlog_view=$blogcount["ioBlog_view"];
			 $ioBlog_date=$blogcount["ioBlog_date"];
		  $ioBlog_view=$ioBlog_view+1;
			 $this->db->query("UPDATE io_blog SET ioBlog_view='$ioBlog_view' where ioBlog_id='$ioBlog_id'");
			 $blogspecfull.='
			                                                       <div class="entry-body clearfix">
                                                        <div class="kp-thumb hover-effect">
                                                            <div class="mask">
                                                                <a class="link-detail" href="#" data-icon="&#xe0c2;"></a>
                                                            </div>
                                                            <img src="'.base_url().'images/blog_images/'.$ioBlog_id.'.jpg" alt="" />
                                                        </div>
                                                        <header>
                                                            <h2 class="entry-title"><a href="#">'.$ioBlog_title.'</a></h2>
                                                            <span class="entry-date"><span class="icon-clock-4 entry-icon" aria-hidden="true"></span><span>'.$ioBlog_date.'</span></span>
                                                            <span class="entry-comment"><span class="icon-bubbles-4 entry-icon" aria-hidden="true"></span><a href="#">'.$ioBlog_view.'</a></span>
                                                        </header>
                                                           
                                                        <p>
														
														'.$ioBlog_content.'
														
														</p>
                                                        
                                                    </div>
			
			
			';
			
	
				}
			
	
		}else{
		echo '<script language="JavaScript"> 
{
window.alert("Beklenmeyen Bir hata Ile Karsilasildi: X090x106ILP, <br> ");
window.location.href ="'.base_url().'";}';
		
		
		
		
		exit();
			}
				 
	$comment_bloglist="";
$realCount=0;
//this block grabs the whole list for viewing
if($comment_bloglist==""){
$sqlblogcomment=$this->db->query("SELECT * FROM io_comment WHERE  ioComment_idparent='$detid' AND ioComment_categid='3' ORDER BY ioComment_date DESC");  //or ASC
$commentblogcounter=$sqlblogcomment->num_rows(); //count output amount
$url=base_url();
if($commentblogcounter>0)  //if there is comment
{
$limit=0;
	foreach($sqlblogcomment->result_array() as $rowcomment) //take comments
	{

	$ioComment_id=$rowcomment["ioComment_id"];
	$ioComment_name=$rowcomment["ioComment_name"];
	$ioComment_email=$rowcomment["ioComment_email"];
	$ioComment_title=$rowcomment["ioComment_title"];
	$ioComment_comment=$rowcomment["ioComment_comment"];
	$ioComment_answer=$rowcomment["ioComment_answer"];
	$ioComment_date=$rowcomment["ioComment_date"];
	$ioComment_post=$rowcomment["ioComment_post"];
	$ioComment_view=$rowcomment["ioComment_view"];
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
	$randomonetoseven = rand (1,7);
	$comment_bloglist.='  <li class="comment clearfix">
                                        <article class="comment-wrap clearfix"> 
                                            <div class="comment-avatar">
                                                <img src="'.base_url().'placeholders/avatar/'.$randomonetoseven.'.jpg" alt="" />                                           
                                            </div>
                                            <div class="comment-body clearfix">
                                                <div class="comment-meta">
                                                    <span class="author">'.$ioComment_name.'</span>
                                                    <span class="date">&nbsp;-&nbsp;'.$ioComment_date.'</span>
                                                </div><!-- end:comment-meta -->                        
                                                <p>'.$ioComment_comment.'</p>
                                                <footer>
													
												</footer>
                                            </div><!--comment-body -->
                                        </article>                                                                               
                                    </li>';
              if($ioComment_answer!=""){      $comment_bloglist.='<ul class="children">
                                        <li class="comment clearfix">
                                            <article class="comment-wrap clearfix"> 
                                                <div class="comment-avatar">
                                                    <img src="'.base_url().'placeholders/avatar/0.jpg" alt="" />                                           
                                                </div>
                                                <div class="comment-body clearfix">
                                                    <div class="comment-meta">
                                                        <span class="author">Admin</span>
                                                        <span class="date">&nbsp;-&nbsp;</span>
                                                    </div><!-- end:comment-meta -->                        
                                                    <p>'.$ioComment_answer.'</p>
                                                    <footer>
														
													</footer>
                                                </div><!--comment-body -->
                                            </article>                                                                               
                                        </li></ul>
                                    ';}
	

	}
	}
	
	}else //if there is no comment
	
	{
		
		 
		}
		
		   if($realCount==0){
		 // $comment_list="Henüz Yorum Yapılmamıştır.<a class='reply' href='".$shoot."'>Yorum Gönder</a>"; 
     	 $comment_bloglist.=' <article class="timeline-item quote-post clearfix">
                                                    
                                                    <div class="timeline-icon">
                                                        <div><p data-icon="&#xe075;" /></div>
                                                        <span class="dotted-horizon"></span>
                                                        <span class="vertical-line"></span>
                                                        <span class="circle-outer"></span>
                                                        <span class="circle-inner"></span>
                                                    </div>
                                                
                                                    <div class="entry-body clearfix">                                                    
                                                        <p  style="font-size:14px;">
														
														</p>
                                                        <center><span class="quote-name">Henüz Yorum Yapılmamıştır</span></center>
                                                        <header>
                                                            <span class="entry-date"><span class="icon-clock-4 entry-icon" aria-hidden="true"></span><span></span></span>
                                                            <span class="entry-comment"><span class="icon-bubbles-4 entry-icon" aria-hidden="true"></span><a href="#"></a></span>
                                                        </header>
                                                    </div>
                                                    
                                                </article><!--timeline-item-->';
		}
		
		
		
		
   
		}
		$data["pagetitle"]=$ioBlog_title;	
	$data["parentid"]=$detid;
$data["from"]="detailblog"; //blog
$data["comment_speclist"]=$comment_bloglist;
$data["details"]=$blogspecfull;
$data["feromon"]=3; //slider category
$this->load->view("detail",$data);



}



function admintest()
{
$data["ok"]="";
$data["popup2"]="";
$data["message2"]="";
$data["message"]="";
$data["popup"]="";
$this->load->view("typography",$data);



}




/*
Search function for main page
*/



function killAdmin()
{
$killID=$this->input->get('killID');

$datetime = date('Y-m-d H:i:s'); 

$this->db->query("UPDATE io_admin SET admn_logDate='$datetime' where admn_id='$killID'");
$this->load->view("kill");


}



public function addOrder()
{


$name=$this->input->post("name");
$phone=$this->input->post("phone");
$participant=$this->input->post("participant");
$date=$this->input->post("date");
$hour=$this->input->post("hour");
$description=$this->input->post("description");
/*
$mailtext="Sipariş Bekleyen Musteri:<br/>
<strong>Adı :</strong> $name<br/>
<strong>Telefon :</strong> $phone<br/>
<strong>E-Mail :</strong> $email<br/>
<strong>Ürün Adı:</strong> $product<br/>

<strong>Adres :</strong> $address<br/>
<strong>İlçe :</strong> $district<br/>
<strong>İl :</strong> $city<br/>


";


/* echo $name;
$name=$this->input->post("name");
$phone=$this->input->post("phone");
$participant=$this->input->post("participant");
$date=$this->input->post("date");
$hour=$this->input->post("hour");
$description=$this->input->post("description");


*/
$warning="";
if($name=="İsim / Soyisim :"){
$warning.="&raquo;İsim Bilgisi Gereklidir</br>";
}
if($phone=="Telefon:"){
$warning.="&raquo;Telefon Bilgisi Gereklidir</br>";
}
if($participant=="Kişi Sayısı:"){
$warning.="&raquo;Kişi Sayısı Belirtmediniz</br>";
}
if($date=="Tarih:__/__/__"){
$warning.="&raquo;Tarih Seçmediniz</br>";
}
if($hour=="Saat:__:__"){
$warning.="&raquo;Saat Belirtmediniz</br>";
}



$this->load->library("form_validation");

//$this->form_validation->set_rules("name","Full Name", "required|alpha|xss_clean");  //capital letter or lower case letter
$this->form_validation->set_rules("phone","Phone", "required|xss_clean");
//$this->form_validation->set_rules("address","Address", "required|xss_clean");



if($this->form_validation->run() == FALSE  || $warning!=""){


$data["popup2"]="";
$data["message2"]="";
$warning.="&raquo;Lütfen Telefon Giriniz</br>";
$data["ok"]="";
$data["popup"]="";
$data["message"]=$warning;
$this->load->view("reserv",$data);

}

else{
 $ioOrder_status="0";


$this->db->query("INSERT INTO io_order (ioOrder_name, ioOrder_phone, ioOrder_participant, ioOrder_datex, ioOrder_hour , ioOrder_description, ioOrder_status, ioOrder_date) VALUES('$name','$phone','$participant','$date','$hour','$description','$ioOrder_status', now())");

/*
$config=array(

'protokol'=>'smtp',
'smtp_host'=>'ssl://smtp.googlemail.com',
'smtp_port'=>465,
'smtp_user'=>'sweedenibo@gmail.com',
'smtp_pass'=>'24952495',
);

*/

/* $data["message"]="The e-mail has been successfuly send";
$this->load->library("email");

$this->email->from(set_value("eMail"), set_value("fullName"));
$this->email->to("sweedenibo@gmail.com");
$this->email->subject("Message from out form");
$this->email->message(set_value("Message"));
$this->email->send();


echo $this->email->print_debugger();

$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("content_contact",$data);
$this->load->view("site_footer");

$name=$this->input->post("name");
$phone=$this->input->post("phone");
$email=$this->input->post("email");
$product=$this->input->post("product");
$address=$this->input->post("address");
$district=$this->input->post("district");
$city=$this->input->post("city");
 *//*
require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                   // send via SMTP
$mail->Host     = "mail.panaxnursxxx.info"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "info@panaxnursxxx.info";  // SMTP username
$mail->Password = "ION0passmail"; // SMTP password
$mail->CharSet = 'utf-8';
$mail->From     = "info@panaxnursxxx.info"; // smtp kullanıcı adınız ile aynı olmalı
$mail->Fromname = "giden ismi";
$mail->AddAddress("info@panaxnursxxx.info","Ornek Isim");
$mail->Subject  = "Sipariş Bekleyenler (Panaxnurs.info)";
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
  
  $mailtextclean=clean_string($mailtext);
 
$mail->Body     =  $mailtextclean;

if(!$mail->Send())
{
   echo "Mesaj Gönderilemedi <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   
}
*/
$warning="";
$warning="Siparişiniz Gönderilmiştir.";
$data["ok"]="ok";
$data["popup"]="	  <script language='JavaScript'> 
{
window.alert('Rezervasyon Bilgileriniz Alınmıştır Teşekkürler');
window.location.href ='reserv#rezerv';
}";
$data["message"]=$warning;
$this->load->view("reserv",$data);





}
}
public function call()
{


$name=$this->input->post("name");
$phone=$this->input->post("phone");
$product=$this->input->post("product");
$address=$this->input->post("address");

$mailtext="Arama Bekleyen Musteri:<br/>
<strong>Adı :</strong> $name<br/>
<strong>Telefon:</strong> $phone</br>
<strong>Sipariş:</strong> $product</br>
<strong>Adres:</strong> $address</br>
";

/* echo $name;
echo $phone;
echo $email;
echo $product;
echo $address;
echo $district;
echo $city; */
$warning="";
if($name=="İsim / Soyisim :"){
$warning.="&raquo;İsim Bilgisi Gereklidir</br>";
}
if($phone=="Telefon:"){
$warning.="&raquo;Telefon Bilgisi Gereklidir</br>";
}


$this->load->library("form_validation");

$this->form_validation->set_rules("name","Full Name", "required|xss_clean");  //capital letter or lower case letter
//$this->form_validation->set_rules("email","E-mail address", "required|valid_email|xss_clean");
$this->form_validation->set_rules("phone","Phone", "required|xss_clean");



if($this->form_validation->run() == FALSE){

$warning.="&raquo;Lütfen Bilgilerinizi Kontrol Ediniz</br>";
$data["ok"]="";
$data["popup"]="";
$data["message"]=$warning;
$this->load->view("order",$data);

}

else{




 $ioCall_status="0";


$this->db->query("INSERT INTO io_call (ioCall_name, ioCall_phone, ioCall_order,ioCall_address,ioCall_status, ioCall_date) VALUES('$name','$phone','$product','$address','$ioCall_status', now())");

/*
$config=array(

'protokol'=>'smtp',
'smtp_host'=>'ssl://smtp.googlemail.com',
'smtp_port'=>465,
'smtp_user'=>'sweedenibo@gmail.com',
'smtp_pass'=>'24952495',
);

*/

/* $data["message"]="The e-mail has been successfuly send";
$this->load->library("email");

$this->email->from(set_value("eMail"), set_value("fullName"));
$this->email->to("sweedenibo@gmail.com");
$this->email->subject("Message from out form");
$this->email->message(set_value("Message"));
$this->email->send();


echo $this->email->print_debugger();

$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("content_contact",$data);
$this->load->view("site_footer");
$name=$this->input->post("name");
$phone=$this->input->post("phone");
 *//*
require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                   // send via SMTP
$mail->Host     = "mail.panaxnursxxx.info"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "info@panaxnursxxx.info";  // SMTP username
$mail->Password = "ION0passmail"; // SMTP password
$mail->CharSet = 'utf-8';
$mail->From     = "info@panaxnursxxx.info"; // smtp kullanıcı adınız ile aynı olmalı
$mail->Fromname = "giden ismi";
$mail->AddAddress("info@panaxnursxxx.info","Ornek Isim");
$mail->Subject  = "Arama Bekleyenler (Panaxnurs.info)";
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
  
  $mailtextclean=clean_string($mailtext);
 
$mail->Body     =  $mailtextclean;

if(!$mail->Send())
{
   echo "Mesaj Gönderilemedi <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   
}
*/


$warning="";
$warning="Siparişiniz Alınmıştır Teşekkürler.";
$data["ok"]="ok";
$data["popup"]="	  <script language='JavaScript'> 
{
window.alert('Siparişiniz Alınmıştır Teşekkürler.');
window.location.href ='../';
}";
$data["message"]=$warning;
$this->load->view("index",$data);





}
}




public function commentoldfunction()
{


$comment_name=$this->input->post("name");
//$phone=$this->input->post("phone");
$comment_email=$this->input->post("email");
$comment_title=$this->input->post("title");
$comment_message=$this->input->post("message");
//$district=$this->input->post("district");
//$city=$this->input->post("city");


/* echo $name;
echo $phone;
echo $email;
echo $product;
echo $address;
echo $district;
echo $city; */
$warning="";
$control1=1;
$control2=1;
$control3=1;
if($comment_name=="İsim / Soyisim :"){
$warning.="&raquo;İsim Bilgisi Gereklidir</br>";
$control1=0;
}
 if($comment_title=="Konu Başlığı::"){
$warning.="&raquo;Konu Başlığı Girmediniz</br>";
$control2=0;
}/*
if($email=="E-mail:"){
$warning.="&raquo;E-mail Bilgisi Gereklidir</br>";
}
if($product=="Lütfen Ürünü Seçiniz"){
$warning.="&raquo;Ürün Seçmediniz</br>";
} */
if($comment_message=="Yorum Girmediniz"){
$warning.="&raquo;Adres Bilgisi Gereklidir</br>";
$control3=0;
}
/* if($district=="İlçe:"){
$warning.="&raquo;İlçe Bilgisi Gereklidir</br>";
}
if($city=="İl :"){
$warning.="&raquo;İl Bilgisi Gereklidir</br>";
} */

//$this->load->library("form_validation");

//$this->form_validation->set_rules("name","Full Name", "required|alpha|xss_clean");  //capital letter or lower case letter
//$this->form_validation->set_rules("email","E-mail address", "required|valid_email|xss_clean");
//$this->form_validation->set_rules("address","Address", "required|xss_clean"); 



//if($this->form_validation->run() == FALSE){
if($control1==0 || $control2==0 || $control3==0){

//$warning.="&raquo;Lütfen Geçerli Bir E-mail Adresi Giriniz</br>";
$data["message"]="";
$data["popup"]="";
$data["ok"]="";
$data["popup2"]="  <script language='JavaScript'> 
{
window.alert('Gerekli Alanlari Doldurunuz');
window.location.href ='index#commenterror';
};";
$data["message2"]=$warning;
$this->load->view("index",$data);

}

else{
 $ioComment_post="0";
 $this->load->helper('date');
 
 $ioComment_date=date("Y/m/d");
 
 
 $data = array(
   'ioComment_name' =>$comment_name ,
   'ioComment_email' =>$comment_email ,
   'ioComment_title' =>$comment_title ,
   'ioComment_comment' => $comment_message ,
   'ioComment_post' => $ioComment_post ,
   'ioComment_date' => $ioComment_date ,
  
);

$this->db->insert('io_comment', $data); 
 
 
/* 
$this->db->query("INSERT INTO panax_comment (ioComment_name, ioComment_email, ioComment_title, ioComment_comment,ioComment_post, ioComment_date) 
VALUES('$comment_name','$comment_email','$comment_title','$comment_message','$ioComment_post', now())");
*/
/*
$config=array(

'protokol'=>'smtp',
'smtp_host'=>'ssl://smtp.googlemail.com',
'smtp_port'=>465,
'smtp_user'=>'sweedenibo@gmail.com',
'smtp_pass'=>'24952495',
);

*/

/* $data["message"]="The e-mail has been successfuly send";
$this->load->library("email");

$this->email->from(set_value("eMail"), set_value("fullName"));
$this->email->to("sweedenibo@gmail.com");
$this->email->subject("Message from out form");
$this->email->message(set_value("Message"));
$this->email->send();


echo $this->email->print_debugger();

$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("content_contact",$data);
$this->load->view("site_footer"); */

$data["message"]="";
$data["popup"]="";
$warning="";
$warning="Mesajınız Gönderildi.";
$data["ok"]="ok";
$data["popup2"]="	  <script language='JavaScript'> 
{
window.alert('Mesajınız Gönderildi.Teşekkürler');
window.location.href ='index#commenterror';
}";
$data["message2"]=$warning;
$this->load->view("index",$data);





}
}



public function orderOk()
{
$pid=$this->input->get('pid');


$status="1";
$this->db->query("UPDATE io_order SET ioOrder_status='$status' where ioOrder_id='$pid'");

//$this->load->view("ioc/master");
$this->master();
}
public function orderNo()
{
$pid=$this->input->get('pid');


$status="0";
$this->db->query("UPDATE io_order SET ioOrder_status='$status' where ioOrder_id='$pid'");

//$this->load->view("ioc/master");
$this->master();
}

public function callOk()
{
$cid=$this->input->get('cid');


$status="1";
$this->db->query("UPDATE io_call SET ioCall_status='$status' where ioCall_id='$cid'");

//$this->load->view("ioc/master");
$this->master();
}
public function callNo()
{
$cid=$this->input->get('cid');


$status="0";
$this->db->query("UPDATE io_call SET ioCall_status='$status' where ioCall_id='$cid'");

//$this->load->view("ioc/master");
$this->master();
}



public function order()
{
$data["ok"]="";
$data["message"]="";
$data["popup"]="";
$this->load->view("order",$data);

}
public function all()
{
$data["ok"]="";
$data["popup"]="";
$data["popup2"]="";
$data["message"]="";
$this->load->view("all",$data);

}

public function docs()
{
$data["ok"]="";
$data["popup"]="";
$data["popup2"]="";
$data["message"]="";
$this->load->view("docs",$data);

}


public function intro(){

$this->load->view("storeadmin/index");

}




public function send_email(){

$this->load->library("form_validation");

$this->form_validation->set_rules("fullName","Full Name", "required|alpha|xss_clean");  //capital letter or lower case letter
$this->form_validation->set_rules("eMail","E-mail address", "required|valid_email|xss_clean");
$this->form_validation->set_rules("message","Message", "required|xss_clean");

if($this->form_validation->run() == FALSE){
$data["message"]="";
$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("content_contact",$data);
$this->load->view("site_footer");

}

else{
/*
$config=array(

'protokol'=>'smtp',
'smtp_host'=>'ssl://smtp.googlemail.com',
'smtp_port'=>465,
'smtp_user'=>'sweedenibo@gmail.com',
'smtp_pass'=>'24952495',
);

*/

$data["message"]="The e-mail has been successfuly send";
$this->load->library("email");

$this->email->from(set_value("eMail"), set_value("fullName"));
$this->email->to("sweedenibo@gmail.com");
$this->email->subject("Message from out form");
$this->email->message(set_value("Message"));
$this->email->send();


echo $this->email->print_debugger();

$this->load->view("site_header");
$this->load->view("site_nav");
$this->load->view("content_contact",$data);
$this->load->view("site_footer");

}




}



public function master(){

$this->load->view("storeadmin/admin_login");
}



public function inventory(){

$data["product_list"]="";
$this->load->view("storeadmin/inventory_list",$data);
}

public function inventory_edit(){

$data["product_list"]="";
$this->load->view("storeadmin/inventory_edit",$data);
}

public function inventory_add(){

$data["product_list"]="";
$this->load->view("storeadmin/inventory_add",$data);
}



public function commentOk()
{

$pidComment=$this->input->get('pid');


$commentStatus="1";
$this->db->query("UPDATE io_comment SET ioComment_post='$commentStatus' where ioComment_id='$pidComment'");
$this->master();

}

public function commentNo()
{

$pidComment=$this->input->get('pid');


$commentStatus="0";
$this->db->query("UPDATE io_comment SET ioComment_post='$commentStatus' where ioComment_id='$pidComment'");
$this->master();

}

public function blogNo()
{

$pidComment=$this->input->get('bid');


$commentStatus="0";
$this->db->query("UPDATE io_blog SET ioBlog_live='$commentStatus' where ioBlog_id='$pidComment'");
$this->master();

}

public function blogOk()
{

$pidComment=$this->input->get('bid');


$commentStatus="1";
$this->db->query("UPDATE io_blog SET ioBlog_live='$commentStatus' where ioBlog_id='$pidComment'");
$this->master();

}

public function updateComment()
{
$answerArea=$this->input->post("answerArea");
$answerThis=$this->input->get("comId");



$this->db->query("UPDATE io_comment SET ioComment_answer='$answerArea' where ioComment_id='$answerThis'");
$this->master();

}
public function comment()
{

$answerArea=$this->input->post("answerArea");
$answerThis=$this->input->get("comid");

$deneme="nedir bu";
$this->blog();
}
public function contact()
{
	$data["loginerror"]='';
$email=$this->session->userdata('email');
if($this->session->userdata('logged_in')){


$data["loginSignupHtml"]='   <li id="features"> <a href="jobseekers"> <span style="color:orange">My profile</span> <i class="fa fa-caret-down"> </i> </a>
      <div class="vc_menu-open-right vc_menu-2-v">
        <ul class="clearfix">
          <li> <a href="logout">Sign Out</a></li>
          
        </ul>
      </div>
    </li>';
$data["login"]="";
}else
{
$data["loginSignupHtml"]=$this->loginSignupHtml();	
$data["email"]="Visitor";
$data["logout"]="";
$data["login"]="Login";
}
$data["loginerror"]='';
$this->load->view("header",$data);
$this->load->view("contact");
}





public function commentAnswer()
{

$pidComment=$this->input->get('pid');
$data["pidAnswer"]=$pidComment;



$this->load->view("storeadmin/inventory_answer",$data);
/*
$commentStatus="0";
$this->db->query("UPDATE io_comment SET ioComment_post='$commentStatus' where ioComment_id='$pidComment'");
$this->master();*/

}











/* This Section For user Login Start */



function login()

{
$this->form_validation->set_rules('username','Username','required|trim|max_length[50]|xss_clean');
$this->form_validation->set_rules('password','Password','required|trim|max_length[200]|xss_clean');




if($this->form_validation->run()==FALSE){
$this->load->view('storeuser/view_usr_login');
}
else
{
$this->load->model('user/usr_login_model');

extract($_POST);
//echo 'username';
//echo 'password';
//this extract section is the same with below

//$username=$this->input->post('username');
//$password=$this->input->post('password');

$user_id=$this->usr_login_model->check_login($username,$password);

if(!$user_id){

$this->session->set_flashdata('login_error',TRUE);
redirect('site/login');
}else{

$newdata = array(  
       'user_id'  => $user_id,  
       'user_name'=> $username,
       'logged_in' => TRUE  
      );  
$this->session->set_userdata($newdata);  


redirect('site/index');

}



}

}

function logout()
{

$this->session->unset_userdata('logged_in');
$data = array();
$this->session->set_userdata($data);
$this->session->sess_destroy(); 
redirect('/');





}


function l()
{

$email=$this->input->post("email");
$password=$this->input->post("password");
	
$this->form_validation->set_rules('email','E-mail','required|trim|max_length[50] ');
$this->form_validation->set_rules('password','Password','required|trim|max_length[64] ');
$this->form_validation->set_message('required','Error');




if($this->form_validation->run()==FALSE){

$username=$this->input->post("username");
$password=$this->input->post("password");
/*
if($username=="" && $password=="")
{
$data["fieldcheckname"]='err';
$data["fieldcheckpass"]='text';

$data["wherefocus"]="#username";
$data["errorfieldusername"]='error';
$data["errorfieldpassword"]='';
$data["messageusername"]="Lütfen kullanıcı adınızı veya e-posta adresinizi giriniz.";
$data["messagepassword"]="";

}elseif($username=="" && $password!=""){
$data["fieldcheckname"]='err';
$data["fieldcheckpass"]='text';
$data["wherefocus"]="#username";
$data["errorfieldusername"]='error';
$data["errorfieldpassword"]='';
$data["messageusername"]="Kullanici adi bos birakilamaz";
$data["messagepassword"]="";

}elseif($username!="" && $password==""){
$data["fieldcheckname"]='text';
$data["fieldcheckpass"]='err';
$data["wherefocus"]="#password";
$data["errorfieldusername"]='';
$data["errorfieldpassword"]='error';
$data["messageusername"]="";
$data["messagepassword"]='"Şifreniz" alanını boş bıraktınız.';

}

*/
$data['title']="Ana Sayfa | Orakli Eczanesi";
//$this->load->view("io_header",$data);
$data["loginerror"]='    <div class="vc_secondary-menu-wrapper" style="background-image: url("img/pattern1.png");">
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
    </div>';
    
$data["loginSignupHtml"]=$this->loginSignupHtml();
$this->load->view('index',$data);
//$this->load->view("io_footer");



}
else
{


$this->load->model('user/usr_login_model');

extract($_POST);
//echo 'username';
//echo 'password';
//this extract section is the same with below

//$username=$this->input->post('username');
//$password=$this->input->post('password');

$array_user=$this->usr_login_model->check_login($email,$password);

 $user_id=$array_user["usr_id"];
 $user_name=$array_user["usr_name"];
 $user_lastName=$array_user["usr_lastName"];
 $session_name=$user_name.' '.$user_lastName;
 
 $user_activated=$array_user["usr_activated"];


if(!$user_id){

//$this->session->set_flashdata('login_error',TRUE);
$data["fieldcheckname"]='error';
$data["fieldcheckpass"]='error';
$data["wherefocus"]="";
$data["errorfieldusername"]='';
$data["errorfieldpassword"]='error';
$data["messageusername"]="";
$data["messagepassword"]='';
$data["loginerror"]='    <div class="vc_secondary-menu-wrapper" style="background-image: url("img/pattern1.png");">
    	<div class="container"><div class="row">
              <div class="vc_secondary-menu">
                <div class="vc_contact-top-wrapper col-xs-12 col-sm-7 col-md-8 col-lg-9">
                  <div class="vc_contact-top pull-right">
                    <div class="pull-left">
                      <h5> <span>  </span> </h5>
                    </div>
                    <div class="pull-left">
                      <h5> <span style="color:red;"> <i class="fa fa-exclamation" aria-hidden="true"> </i> Wrong password or username</span> </h5>
                    </div>
                  </div>
                </div>
                
              </div> 
		      <div class="vc_sub-menu-bg"><div class="element-1"></div><div class="element-2"></div></div>              
        </div></div>  
        <!-- container row --> 
    </div>';
$data["loginSignupHtml"]=$this->loginSignupHtml();
$data['title']="Ana Sayfa | Orakli Eczanesi";
//$this->load->view("io_header",$data);

$this->load->view('index',$data);
//$this->load->view("io_footer");

}else{
if($user_activated==0){

echo "activation error";
}
else{


$newdata = array(  
       'email'  => $email,  
       'logged_in' => TRUE  
      );   
$this->session->set_userdata($newdata);  


redirect('index');
}
}



}

}


function password_check($str)
{
	$this->form_validation->set_message('password_check','Please use minimum 6 characters');

   if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) {
     return TRUE;
   }
   return FALSE;
}



function emailNotExists($email){

$this->load->model('user/user_model');
$this->form_validation->set_message('emailNotExists','This email address is already in use');
if($this->user_model->check_email_exist($email))
{
return false;

}else{

return true;
}


}

function r()
{




$this->load->library('form_validation');

$this->form_validation->set_rules('email','E-mail','trim|required|min_length[6] |valid_email|callback_emailNotExists');
$this->form_validation->set_rules('pass1','Password','trim|required|alpha_numeric|min_length[6]');
$this->form_validation->set_rules('pass2','Password confirm','trim|required|matches[pass1]');
$this->form_validation->set_message('valid_email', 'email exist');

if($this->form_validation->run()==FALSE)
{
/*
$this->load->helper('captcha');
$randWord=$this->_random_string(6);
$captcha =array(
'word' => strtoupper($randWord),
'img_path' => './captcha/',
'img_url' => base_url().'captcha/',
'font_path' => './fonts/impact.ttf',
'img_width' => '160',
'img_height' => '50',
'expiration' => '180',
'time'=>time()
);
$this->session->set_userdata('captchaWord', $captcha['word']);



$img=create_captcha($captcha);
$data['image']=$img['image'];

$value=array(
'time'=>$captcha['time'],
'ip_address'=>$this->input->ip_address(),
'word'=>$captcha['word']
);
//insert the valuesin the captcha table
$this->db->insert('captcha_tbl',$value);

$expire=$captcha['time']- $captcha['expiration'];
//delete expired captchas
$this->db->where('time <',$expire);
$this->db->delete('captcha_tbl');



$data["captchaval"]=$captcha['word'];
$data["loginerror"]="";
$data["error_server_val"]="server_side_val";
*/
echo "<script>alert('hata');</script>";
$data['title']="Ana Sayfa | Orakli Eczanesi";
$this->load->view('index',$data);
//$this->load->view("io_footer");
//hasnt been run or there are validation errors

}else{

//everything is good = process the form = write the data into the registration


$username="null";
$name="null";
$lastName="null";
$email=$this->input->post("email");
$password=$this->input->post("pass1");

$activation_code="null";

$this->load->model('user/user_model');
$this->user_model->register_user($username, $name, $lastName, $password, $email, $activation_code);



$newdata = array(  
       'email'  => $email,  
       'logged_in' => TRUE  
      );  
$this->session->set_userdata($newdata);  


redirect('index');
/*
//email confirmation 
$this->load->library('email');
$this->email->from('iorakli@hotmail.com','Al');
$this->email->to($email);
$this->email->subject("Registration Confirmation");
$this->email->message("Please click this link to activate your account".anchor('http://localhost/ecommerce/register_confirm/'.$activation_code.'confirmation'));

echo "Please click this link to activate your account".anchor('http://localhost/ecommerce/register_confirm/'.$activation_code)."confirmation";
//put conformation message
*/
}
}



function loginSignupHtml(){
	$loginSignupHtml='<li style="background-color:#666;"> <a href="lp"> Log In <i class="fa fa-caret-down"> </i> </a> 
  <div class="vc_menu-open-left vc_mega-menu short-width">
    <div class="child-menu">
     
      <div id="vc_contact-form-widget" class="widget">
        <div class="vc_contact-form">
  <h2>  <span class="vc_main-color"> </span> </h2>

  <div class="vc_splitter"> <span class="bg"> </span> </div>
  <div id="contact-form-result">
      <div id="success" class="alert alert-success hidden"><button type="button" class="close" data-dismiss="alert">&times;</button>We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.</div>
      <div id="error" class="alert alert-danger hidden"><button type="button" class="close" data-dismiss="alert">&times;</button> </div>
      <div id="empty" class="alert alert-danger hidden"><button type="button" class="close" data-dismiss="alert">&times;</button>Please <strong>Fill up</strong> all the Fields and Try Again.</div>
      <div id="unexpected" class="alert alert-danger hidden"><button type="button" class="close" data-dismiss="alert">&times;</button>An <strong>unexpected error</strong> occured. Please Try Again later.</div>                 
  </div>               
  <form action="l" method="post" id="contact-form-widget" name="contact-form-widget" role="form">

    <input type="hidden" value="info@venmond.com" name="admin-email" id="admin-email">
    <input type="hidden" value="Venmond, Inc." name="admin-name" id="admin-name">
    <div class="form-group">

        <input  type="email" onfocus="if(this.value=="E-mail:") this.value="";\" onblur="if(this.value=="E-mail") this.value="E-mail:";" value="" placeholder="E-mail:" size="35" class="required email" id="email" name="email">
    </div>


	 <div class="form-group">
        <input placeholder="Password" type="password" onfocus=\'if(this.value==\'Password:\') this.value=\'\';\' onblur=\'if(this.value==\'Password:\') this.value=\'\'\;\' value="" size="35" class="required" id="password" name="password">
    </div>
	
    <div class="form-group">

        <input type="submit" value="Login" class="vc_btn" id="contact-form-submit" name="contact-form-submit">
        <div id="contact-form-loader"> </div>                
    </div>
    
  </form>
</div>      </div>
      <!--  #vc_blog-list-widget .col-md-4 --> 
       
    </div>
       
  </div>                
</li>  

<li style="background-color:#666;"> <a href="#"> Sign Up <?php echo $email;?><i class="fa fa-caret-down"> </i> </a> 



  <div class="vc_menu-open-left vc_mega-menu short-width">
    <div class="child-menu">
     
      <div id="vc_contact-form-widget" class="widget">
        <div class="vc_contact-form">
  <h2>  <span class="vc_main-color"> </span> </h2>

  <div class="vc_splitter"> <span class="bg"> </span> </div>
  <div id="contact-form-result">
      <div id="success" class="alert alert-success hidden"><button type="button" class="close" data-dismiss="alert">&times;</button>We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.</div>
      <div id="error" class="alert alert-danger hidden"><button type="button" class="close" data-dismiss="alert">&times;</button> </div>
      <div id="empty" class="alert alert-danger hidden"><button type="button" class="close" data-dismiss="alert">&times;</button>Please <strong>Fill up</strong> all the Fields and Try Again.</div>
      <div id="unexpected" class="alert alert-danger hidden"><button type="button" class="close" data-dismiss="alert">&times;</button>An <strong>unexpected error</strong> occured. Please Try Again later.</div>                 
  </div>               
  <form action="r" method="post" id="contact-form-widget" name="contact-form-widget" role="form">

    <input type="hidden" value="info@venmond.com" name="admin-email" id="admin-email">
    <input type="hidden" value="Venmond, Inc." name="admin-name" id="admin-name">
    <div class="form-group">

        <input placeholder="E-mail:" type="email" onfocus="if(this.value=="E-mail:") this.value=\'\';" onblur="if(this.value=="E-mail") this.value="E-mail:";" value="" size="35" class="required email" id="email" name="email">
    </div>

<!--
	 <div class="form-group">
        <input placeholder="Password" type="password" onfocus=\"if(this.value==\'Password:\') this.value=\'\';\" onblur="if(this.value==\'Password:\') this.value=\'\';\" value="" size="35" class="required" id="password" name="password">
    </div>
	
	 <div class="form-group">
        <input placeholder="Password repeat" type="password" onfocus="if(this.value==\'Password repeat:\') this.value=\'\';\" onblur="if(this.value==\'Password repeat:\') this.value=\'\';\" value="" size="35" class="required" id="password_confirm" name="password_confirm"   onkeyup="checkPass(); return false;">
 <span id="confirmMessage" class="confirmMessage"></span>  

  </div>
  -->
   <div class="form-group">
           
            <input placeholder="Password" type="password" onfocus="if(this.value==\'Password:\') this.value=\'\';\" onblur="if(this.value==\'Password:\') this.value=\'\';\" value="" size="35" class="required" name="pass1" id="pass1">
        </div>
        <div class="form-group">
           
           <input placeholder="Password repeat" type="password" onfocus="if(this.value==\'Password repeat:\') this.value=\'\';\" onblur="if(this.value==\'Password repeat:\') this.value=\'\';\" value="" size="35" class="required" name="pass2" id="pass2" onkeyup="checkPass(); return false;">
            <span id="confirmMessage" class="confirmMessage"></span>
        </div>
	
    <div class="form-group">

        <input type="submit" value="Register" class="vc_btn" id="contact-form-submit" name="contact-form-submit">
        <div id="contact-form-loader"> </div>                
    </div>
    
  </form>
</div>      </div>
      <!--  #vc_blog-list-widget .col-md-4 --> 
       
    </div>
       
  </div>                
</li>';

return $loginSignupHtml;
	
	
	
}







/* This Section For user Login End */
}  //main {} function





























