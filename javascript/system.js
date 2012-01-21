function platform() {
	var os = navigator.platform;
	return os;
}

function detect()
{
	var os = platform();
	document.write("<h3>System</h3>");
	if (os.indexOf("Win32") != (-1))
	{
	   document.write("<b><em>Operating System: </em></b>" + os + "<br />");
	}
	
	var browser = navigator.userAgent;
	document.write("<b><em>Browser: </b></em>" + browser + "<br />");
	
	if (os.indexOf("Win32") != (-1))
		document.write("<b></em>Supported: </b></em> true <hr />");
    else document.write("<b></em>Supported: </b></em> false <hr />");
}

