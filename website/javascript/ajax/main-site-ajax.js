function ajax(subsites) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if(this.readyState==4 && this.status==200) {
			document.getElementById("cont-container").innerHTML = this.responseText;
		}
	};
	switch(subsites) {
	
		case 0:
			xhttp.open("GET", "html/series-description.html", true);
			xhttp.send();
			break;
		case 1:
			xhttp.open("GET", "html/first-list-characters.html", true);
			xhttp.send();
			break;
		case 2:
			xhttp.open("GET", "html/second-list-characters.html", true);
			xhttp.send();
			break;
		case 3:
			xhttp.open("GET", "html/third-list-characters.html", true);
			xhttp.send();
			break;
		case 4:
			xhttp.open("GET", "html/guest-characters.html", true);
			xhttp.send();
			break;
		case 5:
			xhttp.open("GET", "html/mcu-links.html", true);
			xhttp.send();
			break;
		default: break;
	}
}