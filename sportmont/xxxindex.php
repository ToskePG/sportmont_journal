<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">



<?php
	include "db.php";

	if (isset($_GET['sekcija'])) {
		$section = $_GET['sekcija'];
	}
	else{
		$section = "home";
	}
	
	if (isset($_GET['lang'])) {
		$jezik = $_GET['lang'];
	}
	else{
		$jezik = "mn";
	}

	if (isset($_GET['p'])) {
		$page_id = $_GET['p'];
	}
	else{
		$page_id = "NULL";
	}

	if (isset($_GET['artid'])) {
		$article_id = $_GET['artid'];
	}
	else{
		$article_id = "NULL";
	}

	if (isset($_GET['alc'])) { // Article list condition
		$alc = $_GET['alc'];
	}
	else{
		$alc = "NULL";
	}

	if (isset($_GET['alv'])) { // Article list value
		$alv = $_GET['alv'];
	}
	else{
		$alv = "NULL";
	}

?>

<?php
$title="Sport Mont";

		switch($section){
			case 'home':
//				$ifajl = "home.php";


				$ifajl = "page.php";
				$page_id = 1;
	$qstr = mysql_query('select * from `strane` where `id` = "'.$page_id.'" limit 1') or die(mysql_error());
	$rowqstr = mysql_fetch_assoc($qstr);
				$title .= " - ".$rowqstr["headline"];

				
				break;
			case 'past_issues':
				$ifajl = "home.php";




				
				break;
			case 'page':
				$ifajl = "page.php";
	$qstr = mysql_query('select * from `strane` where `id` = "'.$page_id.'" limit 1') or die(mysql_error());
	$rowqstr = mysql_fetch_assoc($qstr);
				$title .= " - ".$rowqstr["headline"];
				break;
			case 'articles':
				$ifajl = "articles.php";
				$title .= " - Articles";
				break;
			case 'article':
				$ifajl = "article.php";
				$title .= " - Article";
				break;
			case 'abstract':
				$ifajl = "abstract.php";
				$title .= " - Abstract";
				break;
			case 'success':
				$ifajl = "success.php";
				$title .= " - Login Success";
				break;
			case 'register':
				$ifajl = "register.php";
				$title .= " - New User";
				break;
			case 'dl-authors':
				$ifajl = "dl-authors.php";
				$title .= " - For Authors";
				break;
			case 'dl-reviewers':
				$ifajl = "dl-reviewers.php";
				$title .= " - For Reviewers";
				break;
			case 'under-construction':
				$ifajl = "under-construction.php";
				$title .= " - Under construction";
				break;
			
			default:
				$ifajl = "home.php";
				break;
		} // end switch
?>




    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" media="all" href="wrstyles/style.css" />
        <style type="text/css">
            #wsbnavbar1 {position: absolute; left: 0px; top: 163px; width: 1013px; height: 53px; z-index: 4;}
            #twsbtxt1 {position: absolute; left: 0px; top: 0px; width: 973px; height: 230px; z-index: 1;}
            #twsbtxt2 {position: absolute; left: 0px; top: 223px; width: 769px; height: 297px; z-index: 2;}
            #twsbtxt5 {position: absolute; left: 781px; top: 236px; width: 180px; height: 385px; z-index: 5;}
            #twsbimg1 {position: absolute; left: 692px; top: 0px; width: 158px; height: 153px; z-index: 6;}
            #twsbimg2 {position: absolute; left: 102px; top: 25px; width: 280px; height: 86px; z-index: 7;}
            #twsbtxt3 {position: absolute; left: 107px; top: 98px; width: 265px; height: 42px; z-index: 8;}
            #wsbtxt1 {position: absolute; left: 16px; top: 243px; width: 745px; height: 32px; z-index: 9;}
            #wsbtxt3 {position: absolute; left: 17px; top: 190px; width: 745px; height: auto; z-index: 10;}
            #twsbtxt8 {position: relative; left: 96px; top: 0px; width: 754px; height: 34px; z-index: 10;}
            #container {position:relative; margin: 0 auto; width: 1013px; height: 734px; text-align:left;}
            #inner-container {position: relative; width: 1013px; height: 734px;}
            body {text-align: center;}

            #wsbtxt3 p{margin-bottom: 10px;text-align: justify;}
			h4{font: bold 16px arial,sans-serif; margin-bottom: 10px;}
			
.artlink a{
font: bold 14px arial,sans-serif;
color: #AA0000;

}

.artlink-manji a{
font: bold 12px arial,sans-serif;
color: #AA0000;

}

.sizeclanka{
background: #EAF5FB;
margin-right: 10px;
margin-bottom: 3px;
padding-top: 10px;
padding-bottom: 10px;

padding-left: 10px;
padding-right: 10px;

}

.sizeclanka a:hover{
color: #AA0000;
text-decoration: underline;
}

.sizeclanka a{
color: #AA0000;
}

.podcrveno a{
color: #AA0000;
}
.podcrveno a:hover{
color: #AA0000;
text-decoration: underline;
}

.sizeclanka:hover{
background: #BFE2F6;
}

.sizeclanka .tip{
color: #ffffff;
background: #AA0000;
margin-bottom: 10px;
}

		</style>
    </head>
    <body id="ifldasb2" class="text pozadina-strane">
        <div id="container">
            <div id="inner-container">
                <div id="twsbtxt1" class="photo-background">
                </div>
                <img id="twsbimg1" src="images/csa-logo.png" alt="" width="158" height="153" />
                <img id="twsbimg2" src="images/sportmont-logo.png" alt="" width="280" height="86" />
                <div id="twsbtxt3">
                    <h2 align="center"><em>Journal for sport,</em></h2>
                    <h2 align="center"><em>physical education and health</em></h2>
                </div>
                <div id="wsbnavbar1">
                    <ul class="nbstyle2 sf-shadow">
                        <li><a class="firstitem" href=""><span class="mainitem"></span></a></li>
                        <li><a class="listitem" href="?sekcija=page&p=1"><span class="mainitem">About the Journal</span></a></li>
<!--                        <li><a class="listitem" href="?sekcija=articles&alc=current&alv=17"><span class="mainitem">Current Issue</span></a></li>
                        <li><a class="listitem" href="?sekcija=past_issues"><span class="mainitem">Past Issues</span></a></li> -->
                        <li><a class="listitem" href="?sekcija=past_issues"><span class="mainitem">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Issues&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
						<li><a class="listitem" href="?sekcija=page&p=5"><span class="mainitem">&nbsp;&nbsp;Editorial Board&nbsp;&nbsp;</span></a></li>
                        <li><a class="listitem" href="?sekcija=page&p=9"><span class="mainitem">Instructions for Authors</span></a></li>
                        <li><a class="listitem" href="/conference2015/" target="_blank"><span class="mainitem">&nbsp;&nbsp;MSA Conference 2015&nbsp;&nbsp;</span></a></li>
                        <li><a class="listitem" href="?sekcija=page&p=19"><span class="mainitem">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
                        <li><a class="lastitem" href=""><span class="mainitem"></span></a></li>
                    </ul>
                </div>
                <div id="twsbtxt2" class="content-background">
                </div>
                <div id="twsbtxt5">
                    <p align="center"><em><span style="font-family: 'Verdana';">Our Partners:</span></em></p>
                    <p align="center">&nbsp;</p>
                    <p align="center"><span style="font-family: 'Verdana';"><span style="font-family: 'Verdana';"><a href="http://www.fsnk.ucg.ac.me" target="_blank"><img src="images/banners/fsnk.png" alt="" width="180" height="70" /></a></span></span></p>
                    <p align="center">&nbsp;</p>
                    <p align="center"><span style="font-family: 'Verdana';"><a href="http://www.ucg.ac.me/" target="_blank"><img src="images/banners/ucg.jpg" alt="" width="180" height="74" /></a></span></p>
                    <p align="center">&nbsp;</p>
                    <p align="center"><span style="font-family: 'Verdana';"><a href="http://www.mna.gov.me/ministarstvo" target="_blank"><img src="images/banners/ministarstvo-nauke.jpg" alt="" width="180" height="63" /></a></span></p>
                    <p align="center">&nbsp;</p>
                    <p align="center"><span style="font-family: 'Verdana';"><a href="http://mjssm.me" target="_blank"><img src="images/banners/mjssm.png" alt="" width="180" height="99" /></a></p>
                    </span>
                </div>

<!--                <div id="wsbtxt1" class="header">
                    Welcome
                </div> -->
                <div id="wsbtxt3" class="readmore-link readmore-hoverlink slika-lijevo">
<?php include $ifajl; ?>


                <div id="twsbtxt8" class="footer-link footer-hoverlink">
                    <p align="center"><span style="color: #9e291f;"><br /><br />Copyright © 2013 </span><span style="color: #9e291f;">Montenegrin Sports Academy / Sport Mont</span><span style="color: #9e291f;">. All rights reserved.</span></p>
                    <p align="center"><span style="color: #9e291f;">Developed by <a href="http://ideamn.com" target="_blank">Boris Šundić</a>.</span><br />&nbsp;</p>
                </div>
				
				
                </div>
				
				
				

            </div>
        </div>
        <div id="nbstyle2preload1"></div>
        <div id="nbstyle2preload2"></div>
        <div id="nbstyle2preload3"></div>
        <!--[if (gte IE 5.5)&(lt IE 7)]>
            <script type="text/javascript" charset="UTF-8" src="wrscripts/jquery.min.js"></script>
            <script type="text/javascript" charset="UTF-8" src="wrscripts/jquery.wsb.iepngfix.min.js"></script>
            <script type="text/javascript">
            $(function(){
                        $.wsbfixNavBarPng({navbarClassNames: ".nbstyle2", blankGif: "blank.gif"});
                                                                $("#twsbtxt5 img,#twsbimg1,#twsbimg2").not("li").wsbfixpng({blankGif: "blank.gif"});
                    });
            </script>
            <![endif]-->
    </body>
</html>
