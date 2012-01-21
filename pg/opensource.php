<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Scale IDE</title>    
    <!-- Import the JavaScript files -->
    <script type="text/javascript" src="../javascript/system.js"></script>   
    <!-- Import CSS Style Sheets -->
	<link rel="Stylesheet" type="text/css" href="../css/frame.css" />
    <link rel="Stylesheet" type="text/css" href="../css/imgframe.css" />
<center>
<img src="../img/scale.png" title="Scale IDE"/>
<br />
<div class="header"><a href="../index.php">Home</a>&nbsp&nbsp&nbsp&nbsp<a href="screenshots.php">Screenshots</a>&nbsp&nbsp&nbsp&nbspOpensource

</div>
<br />
<br />
<div class="ourdata">
<b><em>Release:</b></em> &nbsp &nbsp
<?php	// PHP Block
$version = "../version.txt";	// string... basic... is what this is
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
<h3>Obtaining the source-code</h3>
<p>
<a href="http://github.com/kryptonx/scale/">Through Github</a>
</p>
<hr />
<h2>Through Git</h3>
<ul>
<li><b>Public Access: </b><em>git clone git://github.com/kryptonx/scale.git</em></li>
<li><b>Contributor Access: </b><em>git clone git@github.com:KryptonX/scale.git</em></li>
</ul>
</div>
</center>
</body>
</html>