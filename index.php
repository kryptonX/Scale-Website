<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Scale IDE</title>    
    <!-- Import the JavaScript files -->
    <script type="text/javascript" src="javascript/system.js"></script>   
    <!-- Import CSS Style Sheets -->
	<link rel="Stylesheet" type="text/css" href="css/frame.css" />
    <link rel="Stylesheet" type="text/css" href="css/imgframe.css" />
<center>
<img src="img/scale.png" title="Scale IDE"/>
<br />
<div class="header">Home&nbsp&nbsp&nbsp&nbsp<a href="pg/screenshots.php">Screenshots</a>&nbsp&nbsp&nbsp&nbsp<a href="pg/opensource.php">Opensource</a>
</div>
<br />
<br />
<div class="ourdata">
<b><em>Release:</b></em> &nbsp &nbsp
<?php	// PHP Block
$version = "version.txt";	// string... basic... is what this is
$fhandle = fopen($version, 'r');	// open $version for reading
$data = fread($fhandle, 5);		// store data in $data
fclose($fhandle); 		// close file
echo $data + "<br />";	// echo out the text (formatted)
?>
</div>
<?php 
echo "<br />";
?>
<div class="sysdata">
<script type="text/javascript">
// Let's get into JavaScript -> Controls the system data block

function platform() {
	var os = navigator.platform;
	return os;
}
	var os = platform();
	document.write("<h3>System</h3>");
	if (os.indexOf("Win32") != (-1))
	{
	   document.write("<b><em>Operating System: </em></b>" + os + "<br />");
	}
	
	var browser = navigator.userAgent;
	document.write("<b><em>Browser: </b></em>" + browser + "<br />");
	
	if (os.indexOf("Win32") != (-1) || os.indexOf("linux") != (-1))
		document.write("<b></em>Supported: </b></em> true <br />");
    else document.write("<b></em>Supported: </b></em> false <br />");
</script>
</div>
</center>
</head>
<body>
<br />
<br />
<center>
<div class="frame">
<h3>About Scale:</h3>
<p>
Scale is a /reinvented/ <a href="http://en.wikipedia.org/wiki/C_Sharp_(programming_language)">C# (CSharp)</a> compiler
with an Integrated Development Environment (IDE). Scale makes developing Console Applications that run with the .NET Framework easy 
and efficient. A simple, customizable, Graphical Environment makes it a fun experience, and a productive one. 
</p>
</div>
<br />
<br />
<div class="frame">
<h3>What makes Scale different?</h3>
<p>
Scale has it's pros and cons; just like every program available. Scale is simple and clean. Unlike it's over compicated
adversaries. Some interfaces may seem intimidating, not Scale. Purposefully designed for writing and debugging Console Applications.
The Scale Graphical User Interface, KCSC Compiler and <em>this</em> website are opensource and licensed under the <a href="http://gnu.org/licenses/gpl.html">
GNU General Public License.</a> Contribution is also possible.
</p>
</div>
<br />
<br />
<center>
<div class="download">
<h3>Download Now</h3>
<a href="download.html"><img src="img/download.png" title="Download Now"/></a><br />
<b><em>Image by Oxygen Team: &lt<a href="http://www.iconarchive.com/artist/oxygen-icons.org.html">http://www.iconarchive.com/artist/oxygen-icons.org.html</a>&gt</b></em>
</div>
</center>
<br />
<br />
<?php 
if (file_exists('gpl.txt'))
{
	echo "<div class=\"frame\">";
	echo "<h3>License: </h3>";
	$cfile = 'gpl.txt';	
	$fhandle = fopen($cfile, 'r');
	$ftext = fread($fhandle, 10000);
	if ($ftext != "")
		echo $ftext;
    else echo "An error has occured." + "<br />";
	echo "</div>";
}
else
{
echo "<div class=\"error\">Unhandled Error.</div>";
}
?>
</center>
</body>
</html>