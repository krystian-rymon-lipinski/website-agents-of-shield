var quote1 = {
	content: "Join S.H.I.E.L.D. - travel to exotic distant lands, meet exciting unusual people... and kill them.",
	owner: "Lance Hunter",
	picture: "<img src=\"images/hunter.png\" />"
};

var quote2 = {
	content: "We are not agents of nothing! We... are agents of S.H.I.E.L.D.!",
	owner: "Phil Coulson",
	picture: "<img src=\"images/coulson.png\" />"
}

var quote3 = {
	content: "You're just different now - and there's nothing wrong with that.",
	owner: "Leopold Fitz",
	picture: "<img src=\"images/fitz.png\" />"
}

var quote4 = {
	content: "I need a bigger gun, I guess. Or my axe. Or maybe a shotgun-axe combination of some sort.",
	owner: "Alphonzo Mackenzie",
	picture: "<img src=\"images/mack.png\" />"
}

var quote5 = {
	content: "This is you trying to tell me I might be an alien! [...] Guess what? EPIC fail!",
	owner: "Daisy Johnson",
	picture: "<img src=\"images/daisy.png\" />"
}

var quotes = [quote1, quote2, quote3, quote4, quote5];
var sliderNumber = 0;

var leftArrow = $('.icon-left-open');
var rightArrow = $('.icon-right-open');
var rightDirection = true;

leftArrow.on({
	mouseenter: function() { $(this).css( { "color": "#874321", "cursor": "pointer"  } ); },
	mouseleave: function() {$(this).css("color", "#FFFFFF"); },
	click: function() { slide(!rightDirection); }
});	

rightArrow.on( {
	mouseenter: function() { $(this).css( { "color": "#874321", "cursor": "pointer" } ); },
	mouseleave: function() { $(this).css( "color", "#FFFFFF" ); },
	click: function() { slide(rightDirection); }
});

$('#quote-content').html(quotes[sliderNumber].content);
$('#quote-owner').html(quotes[sliderNumber].owner);
$('#picture').html(quotes[sliderNumber].picture);

var slider = setInterval(slideOut, 5000);

function slideOut() {
	leftArrow.off("click");
	rightArrow.off("click");
	
	$('#quote-content').fadeOut(500);
	$('#quote-owner').fadeOut(500);
	$('#picture').fadeOut(500);
	setTimeout(slideIn, 500);
	
	sliderNumber++;
	if(sliderNumber<0) sliderNumber += 5; //when sliding with left arrow 
	sliderNumber %= 5;
}

function slideIn() {		
	$('#quote-content').html(quotes[sliderNumber].content);
	$('#quote-owner').html(quotes[sliderNumber].owner);
	$('#picture').html(quotes[sliderNumber].picture);
	
	$('#quote-content').fadeIn(500);
	$('#quote-owner').fadeIn(500);
	$('#picture').fadeIn(500);
	setTimeout(reattachClickEvent, 500);
}

function reattachClickEvent() {
	leftArrow.on("click", function() { slide(!rightDirection); } );
	rightArrow.on("click", function() { slide(rightDirection); } );
}

function slide(directionIsRight) {
	if(!directionIsRight) sliderNumber -= 2;
	clearInterval(slider);
	setTimeout(slideOut);
	slider = setInterval(slideOut, 5000);
}
