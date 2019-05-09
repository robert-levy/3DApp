// JavaScript Document
function getXMLHttp() {
	var xmlHttp
	try {
		xmlHttp = new XMLHttpRequest ();
	} catch (e) {
		try {
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				return false;
			}
		}
	}
	return xmlHttp;
}

//Make AJAX request to the server
var xmlHttp = getXMLHttp();
//stores newly generated gallery HTML code
var htmlCode = "";
var pathsArray = new Array();
//temporarily stores server response while code is generated
var response;

$(document).ready(function() {
	// Set up the path to the PHP function that reads the image directory to find the thumbnail file names
	var send = "hook.php";
	// Open the connection to the web server
	xmlHttp.open("GET", send, true);
	// Tell the server that the client has no outgoing message, i.e. we are sending nothing to the server
	xmlHttp.send(null);
	// Check we get a valid server response
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4) {
            // Response handler code
            response = xmlHttp.responseText.split("~");
            // Loop round the response array
			for (var i=0;i<response.length;i++) {
                pathsArray.push(response[i]);
            }
            //alert(pathsArray.join('\n'));

			// Return images paths to the img src attrs in html file
			document.getElementById('gpic1').src = pathsArray[0];
			document.getElementById('gpic2').src = pathsArray[1];
            document.getElementById('gpic3').src = pathsArray[2];
		}
	}
});
