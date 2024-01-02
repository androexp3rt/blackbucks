menContainer = document.getElementById("merchandiseMenContainer");
womenContainer = document.getElementById("merchandiseWomenContainer");
indicator = sessionStorage.getItem("indicator");
if (indicator == 'men') {
	womenContainer.style.display = "none";
	menContainer.children[1].children[0].style.backgroundImage = 'url(assets/merchandiseMenBanner1.png)';
	menContainer.style.display = "flex";
}
else {
	womenContainer.style.display = "flex";
	womenContainer.children[1].children[0].style.backgroundImage = 'url(assets/merchandiseWomenBanner1.png)';
	menContainer.style.display = "none";
}