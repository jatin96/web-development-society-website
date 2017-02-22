<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Development Society</title>
<link rel="stylesheet" href="../styling/style_homepage.css" type="text/css" />
<script type="text/javascript" src="../javascripts/jquery.js"></script>
<script type="text/javascript" src="../javascripts/slide.js"></script>
</head>

<body id="top">
<?php
include('session.php');
?><div class="head"><?php echo "Hello,".$name;?></div>
<div class="abc column_1">
<div id="header">
<div id="logo">
<h1><a href="#">Web Development Society</a></h1>
<p>MNNIT-Allahabad</p>
</div>
<div id="top_navigation">
<ul>
<li class="active"><a href="profile.php">Home</a></li>
<li><a href="#">Useful Links</a>
<ul>
<li><a href="http://www.w3schools.com/">W3Schools</a></li>
<li><a href="http://php.net/">PHP.net</a></li>
</ul>
</li>
<li><a href="downloads.php">Downloads</a></li>
<li><a href="archive.php">Archive</a></li>
<li><a href="">Settings</a>
<ul>
<li><a href="changepassword.html">Change Password</a></li>
</ul>
</li>
<li class="last"><a  href="logout.php">Logout</a></li>

</ul>
</div>
<br class="clear" />
</div>
</div>
<div class="abc column_2">
<div id="featured_slide">
    <div id="featured_content">
      <ul>
        <li><img src="../resources/stevejobs1.jpg" alt="" />
          <div class="floater">
            <h2>Thought of the day!</h2>
            <p>“That’s been one of my mantras — focus and simplicity. Simple can be harder than complex; you have to work hard to get your thinking clean to make it simple.”-Steve Jobs</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </div>
        </li>
        <li><img src="../resources/1.jpg" alt="" />
          <div class="floater">
            <h2>New files uploaded!</h2>
            <p>The files used in class 8 on jQuery have been uploaded</p>
            <p class="readmore"><a href="../downloads/class8.zip">Click Here To Download</a></p>
          </div>
        </li>
        <li><img src="../resources/tadah.jpg" alt="" />
          <div class="floater">
            <h2>WDS In New Avatar!</h2>
            <p>Ta-Dadah!Hope you enjoyed the new,fresh and funky look of the Web Development Society website.We have tried to keep the UI simple at the same time giving it a very innovative look.So enjoy!</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </div>
        </li>
      </ul>
    </div>
    <a href="javascript:void(0);" id="featured-item-prev"><img class="left1"src="../resources/prev.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img class="right1" src="../resources/next.png" alt="" /></a> </div>
</div>
<div class="abc column_3">
<div id="container">
<div class="homepage">
<ul>
<li>
<h2><img src="../resources/web.jpg"  />Welcome to the World of web development</h2>
<p>The Web Development Society,Allahabad has been created in order to promote Web Development,designing and more.We expect more and more MNNITians to join the society in order to promote and master web development skills.<br />Regards,<br />Web Development Society</p>
</li>
<li class="fb">
          <h2><img src="../resources/mnnitworkspace.jpg" alt="" />MNNIT Workspace</h2>
          <p>Official Computer technology team of MNNIT,Allahabad.Hit the like button to stay updated on FB.</p><p><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fhttps://www.facebook.com/workspace.mnnit&amp;layout=button_count&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp" style="overflow:hidden;width:100%;height:80px;" scrolling="no" frameborder="0" allowTransparency="true"><a href="http://www.addlikebutton.net" class="fbook">www.addlikebutton.net</a></iframe></p>
          </li>
</ul>
<br class="clear" />
</div>
</div>
</div>
<div class="abc column_4">
<div id="footer">
<div class="box1">
<h2>A Little About Me!</h2>
<ul class="about">
<li class="abt"><img class="img1" src="../resources/20150222_194031.jpg" alt=""/></li>
<li class="abt1" >Hello to All!I am Jatin Narula,presently pursuing my B.Tech in Computer Science and Engineering from MNNIT,Allahabad.I love gaming,speedcubing,coding,photo-editing and playing cricket.To view my complete FB profile <a href="https://www.facebook.com/jatin.narula.965">Click Here</a></li>
</div>
<div class="contactdetails">
<h2>Contact Me</h2>
<p>
Jatin Narula</p>
<p>Email:jatin.jt.narula@gmail.com</p>
<p>Room no.326</p>
<p>SVBH,MNNIT.</p>
<p><a href="https://www.facebook.com/jatin.narula.965">FB Profile</a></p>
</div>
<br class="clear" />
</div>
</div>
<div class="abc column_5">
<div id="copyright">
<p class="left">Developed,Designed and Managed by Web Development Society,MNNIT. &copy;Copyright 2015</p>
<br class="clear" />
</div>
</div>
</body>
</html>
