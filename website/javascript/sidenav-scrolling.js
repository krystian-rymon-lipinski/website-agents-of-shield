var NUMBER_OF_SEASONS = 5;
var seasonLinks = [];
var seasonLists = [];
var episodesRevealed = [false, false, false, false, false];

for(i=0; i<NUMBER_OF_SEASONS; i++) {
	seasonLinks[i] = document.getElementById("link-season"+(i+1));
	seasonLists[i] = document.getElementById("list-season"+(i+1));
	attachListener(i);
}

function attachListener(index) {
	seasonLinks[index].addEventListener("click", function() { displayEpisodes(index) });
}

function displayEpisodes(seasonNumber) {
	if(!episodesRevealed[seasonNumber]) {
		seasonLists[seasonNumber].style.display = "block";
		$(".side-nav").scrollTo(seasonLinks[seasonNumber], 400);
		episodesRevealed[seasonNumber] = true;
	}
	else {
		seasonLists[seasonNumber].style.display = "none";
		episodesRevealed[seasonNumber] = false;
	}
}