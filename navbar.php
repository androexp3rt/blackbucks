<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BlackBucks</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="css/nav.css">
</head>

<body>
	<script>
		const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
		const vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0)
		var body = document.getElementsByTagName('body')[0]
		var session = 0
		session = "<?php echo session_status(); ?>"
		console.log('session = ',session)
		var loggedin = 0
		loggedin = "<?php 
						if(!isset($_SESSION['loggedin'])) { 
							echo '0';
						}
						if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
							echo $_SESSION['loggedin'];
						}
					?>"
		console.log('loggedin = ',loggedin)
		//------------------------------------------------------------------------------------------------//
		//------------------------------------------DOM---------------------------------------------------//
		//------------------------------------------------------------------------------------------------//

		//------------------------------------------NAVBAR------------------------------------------------//
		dom(body, '<div id="navbar"></div>')
		var navbar = document.getElementById('navbar');
		dom(navbar, ('<div></div>').repeat(3));
		dom(navbar, '<img>');
		var navLogoContainer = navbar.children[0]
		if(loggedin == true){
			dom(navLogoContainer, '<img src="assets/dashicons/logosmall.png" alt="logo">')
		} else {
			dom(navLogoContainer, '<img src="assets/dashicons/logoBig.png" alt="logo">')
		}
		var navMenuContainer = navbar.children[1]
		dom(navMenuContainer, '<div><img></div>')
		navMenuContainer.children[0].children[0].src = 'assets/dashicons/close.png'
		navMenuContainer.children[0].classList.add('hide')
		dom(navMenuContainer, ('<a><p></p></a>').repeat(5))
		var navMenuList = {
			'Home': 'Home.php',
			'Menu': 'Menu.php',
			'Merchandise': 'Merchandise.php',
			'Travel': 'Travel.php',
			'About': 'About.php',
		}
		for (let i = 1; i < navMenuContainer.children.length; i++) {
			navMenuContainer.children[i].children[0].innerHTML = Object.keys(navMenuList)[i - 1]
			if (i != 3) {
				navMenuContainer.children[i].href = navMenuList[Object.keys(navMenuList)[i - 1]]
			}
		}
		dom(navMenuContainer.children[3], '<div>' + ('<div></div>').repeat(2) + '</div>')
		navMenuContainer.children[3].classList.add('drop')
		var merchandiseModal = navMenuContainer.children[3].children[1]
		merchandiseModal.children[0].innerHTML = 'Men'
		merchandiseModal.children[1].innerHTML = 'Women'
		merchandiseModal.classList.add('hide')
		if (vw <= 600) {
			navMenuContainer.classList.add('hide')
			navMenuContainer.children[0].classList.remove('hide')
			var hamburger = navbar.children[3]
			hamburger.src = 'assets/dashicons/hamburger.png'
		}
		var navBtnContainer = navbar.children[2]
		if (loggedin != true) {
			dom(navBtnContainer, ('<div></div>').repeat(2))
			dom(navBtnContainer.children[0], ('<div></div>').repeat(2))
			dom(navBtnContainer.children[1], ('<div></div>'))
			navBtnContainer.children[0].children[0].innerHTML = 'FIND A STORE'
			navBtnContainer.children[0].children[0].classList.add('btn1', 'divBtn')
			navBtnContainer.children[0].children[1].innerHTML = 'ORDER NOW'
			navBtnContainer.children[0].children[1].classList.add('btn1', 'divBtn')
			navBtnContainer.children[1].children[0].innerHTML = 'Login/Signup'
			navBtnContainer.children[1].children[0].classList.add('btn1', 'divBtn')
		} else {
			dom(navBtnContainer, ('<div></div>').repeat(2))
			var searchbarContainer = navBtnContainer.children[0]
			var findStoreC = navBtnContainer.children[1]
			dom(searchbarContainer, '<div><img></div><input/>')
			var sbarIcon = searchbarContainer.children[0].children[0]
			sbarIcon.src = 'assets/dashicons/search.png'
			var sbar = searchbarContainer.children[1]
			sbar.classList.add('hide')
			// var findStoreC = navBtnContainer.childdren[1]
			dom(findStoreC, '<img><p></p>')
			findStoreC.children[0].src = 'assets/dashicons/location.png'
			findStoreC.children[1].innerHTML = 'FIND A STORE'
			dom(navBtnContainer, ('<img>').repeat(4))
			var cart = navBtnContainer.children[2]
			cart.src = 'assets/dashicons/cartColor.png'
			var wallet = navBtnContainer.children[3]
			wallet.src = 'assets/dashicons/wallet.png'
			var favourites = navBtnContainer.children[4]
			favourites.src = 'assets/dashicons/bookmark.png'
			var profile = navBtnContainer.children[5]
			profile.src = 'assets/dashicons/profile.png'
		}
		//-----------------------------------------Navbar CSS---------------------------------------------//
		if (vw <= 600) {
			if (loggedin == true) {
				navbar.classList.add('navSmallPhone')
			} else {
				navbar.classList.add('navBigPhone')
			}

		} else {
			if (loggedin == true) {
				navbar.classList.add('navSmall')
			} else {
				navbar.classList.add('navBig')
			}
		}

		//-----------------------------------Functional JS---------------------------------------------//
		if (loggedin != 1) {
			var loginBtn = navBtnContainer.children[1].children[0]
			var findStoreBtn = navBtnContainer.children[0].children[0]
			var orderNowBtn = navBtnContainer.children[0].children[1]
			loginBtn.onclick = function() {
				window.location.href = 'login.php';
			}
			findStoreBtn.onclick = function() {
				window.location.href = 'findStore.php';
			}
			orderNowBtn.onclick = function() {
				window.location.href = 'menu.php';
			}
		} else {
			sbarIcon.onclick = function () {
				sbar.classList.toggle('show')
			}
			findStoreC.onclick = function() {
				window.location.href = 'findStore.php';
			}
			cart.onclick = function() {
				window.location.href = 'cart.php';
			}
			wallet.onclick = function() {
				window.location.href = 'wallet.php';
			}
			favourites.onclick = function() {
				window.location.href = 'favourites.php';
			}
			profile.onclick = function() {
				window.location.href = 'profile.php';
			}
		}
		if (vw <= 600) {
			hamburger.onclick = function() {
				hamburger.classList.add('hide')
				navMenuContainer.classList.add('show')
			}
			navMenuContainer.children[0].onclick = function() {
				hamburger.classList.toggle('hide')
				navMenuContainer.classList.toggle('show')
			}
			window.onclick = function(event) {
				if (event.target == navMenuContainer) {
					if (navMenuContainer.classList.contains('show')) {
						hamburger.classList.toggle('hide')
						navMenuContainer.classList.toggle('show')
						if (merchandiseModal.classList.contains('show')) {
							merchandiseModal.classList.remove('show')
							navMenuContainer.children[4].style.top = '0vw'
							navMenuContainer.children[5].style.top = '0vw'
						}
					}
				}
			}
			navMenuContainer.children[3].onclick = function() {
				if (merchandiseModal.classList.contains('show')) {
					merchandiseModal.classList.remove('show')
					navMenuContainer.children[4].style.top = '0vw'
					navMenuContainer.children[5].style.top = '0vw'
				} else {
					merchandiseModal.classList.add('show')
					navMenuContainer.children[4].style.top = 'calc(1vw * (120 * 100 / 600))'
					navMenuContainer.children[5].style.top = 'calc(1vw * (120 * 100 / 600))'
				}
			}
		} else { // 1440---laptop
			var merchandiseBtn = navMenuContainer.children[3]
			merchandiseBtn.onclick = function() {
				merchandiseModal.classList.toggle('show')
			}
			// window.onclick = function(event) {
			// 	if(!event.target.matches(merchandiseBtn)) {
			// 		merchandiseModal.classList.remove('show')
			// 	}
			// }
		}
		var men = merchandiseModal.children[0]
		var women = merchandiseModal.children[1]
		men.onclick = function() {
			merchandiseModal.style.display = "none";
			console.log('men');
			sessionStorage.setItem("indicator", 'men');
			window.location.href = 'merchandise.php';
			return false;
		}
		women.onclick = function() {
			merchandiseModal.style.display = "none";
			console.log('women');
			sessionStorage.setItem("indicator", 'women');
			window.location.href = 'merchandise.php';
			return false;
		}

		//----------------------------------------DOM Functions-----------------------------------------//
		const varToString = varObj => Object.keys(varObj)[0];

		function removeChildren(a) {
			for (let i = a.children.length - 1; i > 0; i--) {
				a.removeChild(a.children[i]);
			}
		}

		function removeAllChildren(a) {
			for (let i = a.children.length - 1; i >= 0; i--) {
				a.removeChild(a.children[i]);
			}
		}

		function dom(p, q) {
			p.insertAdjacentHTML('beforeend', q);
			return
		}

		function domStart(p, q) {
			p.insertAdjacentHTML('Afterbegin', q);
			return
		}
		//-----------------------------------------CSS Functions------------------------------------------//
		function getVW(px) {
			const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
			const vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0)
			if (vw <= 600) {
				return (px * 100 / 600).toString() + 'vw'
			} else {
				return (px * 100 / 1440).toString() + 'vw'
			}
		}
	</script>
</body>

</html>