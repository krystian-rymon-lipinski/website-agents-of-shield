var quote1 = {
	content: "\"Join S.H.I.E.L.D. - travel to exotic distant lands, meet exciting unusual people... and kill them.\"",
	owner: "~Lance Hunter",
	picture: "<img src=\"../images/shield1.jpg\" />"
};

var quote2 = {
	content: "\"We are not agents of nothing! We... are agents of S.H.I.E.L.D.!\"",
	owner: "~Phil Coulson",
	picture: "<img src=\"../images/shield2.jpg\" />"
}

var quote3 = {
	content: "\"You're just different now - and there's nothing wrong with that.\"",
	owner: "~Leopold Fitz",
	picture: ""
}

var quote4 = {
	content: "\"Shotgun-axe.\"",
	owner: "~Alphonzo Mackenzie",
	picture: ""
}

var quote5 = {
	content: "\"This is you trying to tell me I might be an alien! [...] Guess what? EPIC fail!\"",
	owner: "~Daisy Johnson",
	picture: ""
}

var quotes = [quote1, quote2, quote3, quote4, quote5];

var sliderNumber = 0;
var slider = setInterval(slide, 5000);

function slide() {
	sliderNumber++;
	sliderNumber%=5;

	document.getElementById("quote-content").innerHTML = quotes[sliderNumber].content;
	document.getElementById("quote-owner").innerHTML = quotes[sliderNumber].owner;
	document.getElementById("picture").innerHTML = quotes[sliderNumber].picture;
}

