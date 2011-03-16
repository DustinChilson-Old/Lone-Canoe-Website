<?php
error_reporting ( 1 );
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//             Lone Canoe Website
//	        by Dustin Chilson
//                  10-2006
//
//  Layout include for easy editing of layout
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//this function creates the head section of the HTML doc
function dtd ($title, $path){
	include ($path."config.php");//this includes all of the editable variables
	$indent = "     ";
	$dtd = "";
	$dtd .= "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">\n";
	$dtd .= "<html>\n";
	$dtd .= "<head>\n";
	$dtd .= "<link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\" />\n";
	//this line allows you to set a "favicon" - this must be favicon.ico 
	//it references an icon file in the root directory of the page
	$dtd .= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\"/>\n"; //character set for browser to use
	$dtd .= "<meta http-equiv=\"Content-Language\" content=\"en-us\"/>\n"; //viewing language
	$dtd .= "<meta name=\"Keywords\" content=\"Web Design, Video Editing, Photography, Lone, Canoe, Lone Canoe, Productions\"/>\n";
	//this line sets the meta keywords that the search engines use for indexing
	$dtd .= "<title>Lone Canoe Productions :: ".$title."</title>\n";
	//this will set the title of the doc based on the variable passed from the calling doc
	$dtd .= "<style type=\"text/css\" title=\"currentStyle\" media=\"all\">\n";
	$dtd .= "   @import \"".$path."includes/layout.css\";\n";
	$dtd .= "</style>\n";
	$dtd .= "<script TYPE=\"text/Javascript\">\n";
	$dtd .= "<!--\n";
	$dtd .= "function display(category) {\n";
	$dtd .= $indent."var getcat = document.getElementById(category);\n";
	$dtd .= $indent."if (getcat.className=\"show\") {\n";
	$dtd .= $indent."	getcat.className=\"hide\";\n";
	$dtd .= $indent."};\n";
	$dtd .= $indent."if (getcat.className=\"hide\") {\n";
	$dtd .= $indent."	getcat.className=\"show\";\n";
	$dtd .= $indent."}\n";
	$dtd .= "}\n";
	$dtd .= "-->\n";
	$dtd .= "</script>\n";
	
	// these lines include the css file for formatting of the page
	$dtd .= "</head>\n\n";
	echo $dtd;
	//this statement "prints" the code to the browser to interpret
};

// the nav_bar function creates the links and the table
function nav_bar ($path){
	$indent = "         "; // used to format the html when you view the source
	$nav = "";
	$nav.= "<div CLASS=\"nav\">";
	$nav.= $indent."<a HREF=\"index.php\" CLASS=\"Group\">Home</a>\n";
	$nav.= $indent."<a CLASS=\"Group\">Services</a>\n";	
	$nav.= $indent."<a CLASS=\"option\">Photography</a>\n";
	$nav.= $indent.$indent."<a HREF=\"photography.php\" CLASS=\"Option2\">Overview</a>\n";
	$nav.= $indent.$indent."<a HREF=\"photography_portf.php\" CLASS=\"Option2\">Portfolio</a>";
	$nav.= $indent.$indent."<a HREF=\"photography_port.php\" CLASS=\"Option2\">Portraits</a>";
	$nav.= $indent.$indent."<a HREF=\"photography_special.php\" CLASS=\"Option2\">Special Occa.</a>\n";
	$nav.= $indent.$indent."<a HREF=\"photography_scouts.php\" CLASS=\"Option2\">Scouts</a>\n";
	$nav.= $indent.$indent."<a HREF=\"photography_real.php\" CLASS=\"Option2\">Real Estate</a>\n";
	$nav.= $indent.$indent."<a HREF=\"photography_misc.php\" CLASS=\"Option2\">Misc.</a>\n";
	$nav.= $indent."<a class=\"option\">Web Design</a>";
	$nav.= $indent.$indent."<a HREF=\"web.php\" CLASS=\"Option2\">Overview</a>\n";
	$nav.= $indent.$indent."<a HREF=\"web_port.php\" CLASS=\"Option2\">Portfolio</a>\n";
	$nav.= $indent.$indent."<a HREF=\"web_basic.php\" CLASS=\"Option2\">Basic</a>\n";
	$nav.= $indent.$indent."<a HREF=\"web_dynamic.php\" CLASS=\"Option2\">PHP</a>\n";
	$nav.= $indent.$indent."<a HREF=\"web_updates.php\" CLASS=\"Option2\">Updates</a>\n";
	$nav.= $indent."<a CLASS=\"option\">Video</a>\n";
	$nav.= $indent.$indent."<a HREF=\"video.php\" CLASS=\"Option2\">Overview</a>\n";
	$nav.= $indent.$indent."<a HREF=\"video_port.php\" CLASS=\"Option2\">Portfolio</a>\n";
	$nav.= $indent."<a CLASS=\"Group\">About Us</a>\n";
	$nav.= $indent.$indent."<a HREF=\"mission.php\" CLASS=\"Option\">Mission</a>\n";
	$nav.= $indent.$indent."<a HREF=\"team.php\" CLASS=\"Option\">The Team</a>\n";
	$nav.= $indent."<a HREF=\"contactus.php\" CLASS=\"Group\">Contact us</a>\n";
	$nav.= "</div>\n";
	return $nav; 
	// return instead of echo becasue it allows "$nav" to be placed into 
	// the variable when the function is called
};

//this function creates the main body table and
//places all the images in place then calls the nav_bar function
//to put the nav_bar in its place
function layout ($path){
	include ($path."config.php");//this includes all of the editable variables
	$layout = "";
	// below is the main table of the page layout
	$layout .= "<Table align=\"center\" border=\"0\" width=\"792\"><tr><td>";
	$layout .= "<table align=\"center\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n"; 
	$layout .= "   <tr>\n"; 
	$layout .= "      <td colspan=\"2\">\n";
	$layout .= "         <img alt=\"Lone Canoe Productions\" src=\"".$path."images/header.jpg\">";
	// this is where the header image is linked to; $path is set in the calling doc
	$layout .= "</td>\n"; 
	$layout .= "   </tr>\n";
	$layout .= "   <tr>\n";
	$layout .= "      <td bgcolor=\"#734323\"  width=\"174\" valign=\"top\">\n"; 
	$layout .=           nav_bar($path); 
	// runs the nav_bar function to make the nav_bar go here
	$layout .= "      </td>\n";
	$layout .= "      <td id=\"main\" width=\"608\" valign=\"top\">\n"; 
	echo $layout;
	//this statement "prints" the code to the browser to interpret
};

// this is the footer function that prints the copy right info and webmaster contact information
function footer ($path){
	include ($path."config.php");//this includes all of the editable variables
	$indent = "         ";// used to format the html when you view the source
	$footer = "";
	$footer .= "      </td>\n";
	$footer .= "<tr>\n";
        $footer .= "      <td valign=\"top\"><img alt=\"\" width=\"174\" src=\"".$path."images/bottom.png\"/></td>\n";
        $footer .= "      <td >&nbsp</td>\n";
        $footer .= "</tr>\n";
	$footer .= "   </tr>\n";
	$footer .= "<tr><td rowspan='2'>&nbsp</td></tr>";
	$footer .= "   <tr>\n";
	$footer .= "      <td colspan=\"2\" align=\"center\">\n"; 
	$footer .=           $indent."For more information please <a href=\"".$path."contactus.php\">Contact Us</a> \n";
	$footer .=           $indent."<br/>\n";
	$footer .=           $indent."<a target=\"_blank\" href=\"http://www.LoneCanoe.com\">Lone Canoe Productions</a> &copy; '06-'07\n";
	$footer .= "      </td>\n";
	$footer .= "   </tr>\n";
	$footer .= "</table>\n";
	$footer .= "</td></tr></table>\n\n";
	$footer .= "<script src=\"http://www.google-analytics.com/urchin.js\" type=\"text/javascript\">\n";
	$footer .= "</script>\n";
	$footer .= "<script type=\"text/javascript\">\n";
	$footer .= $indent."_uacct = \"UA-347831-3\";\n";
	$footer .= $indent."urchinTracker();\n";
	$footer .= "</script>\n";	
	$footer .= "</body>\n";
	$footer .= "</html>\n";
	echo $footer;
	//this statement "prints" the code to the browser to interpret
};

function db_conn ($path){
	include ($path."config.php");//this includes all of the editable variables
	$mysql_access = mysql_connect($server, $user, $pw);
	mysql_select_db($db, $mysql_access);
};

?>