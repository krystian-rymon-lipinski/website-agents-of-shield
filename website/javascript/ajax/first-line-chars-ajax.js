function firstCharsAjax(subsites) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if(this.readyState==4 && this.status==200) {
			document.getElementById("cont-container").innerHTML = this.responseText;
		}
	};
	switch(subsites) {
		case 1: {
			xhttp.open("GET", "html/characters/phil-coulson.html", true);
			xhttp.send();
		}
	}
}