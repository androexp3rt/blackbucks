import * as main from './mainCssDOM1.js';
var body = document.getElementsByTagName('Body')[0];
var menuContainer, menuHeader, menuBody;
var searchbarContainer, serachbar;
var menuListContainer, menuExpandContainer, cartPreviewContainer;
var menuListItems;
var menuListData = {
	'BEVERAGES': {
		'SMOOTHIES': {
			'Coco Banana': ['assets/subMenuItem.png', 'Coco Banana', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '500'],
			'Green Smoothie': ['assets/subMenuItem.png', 'Green Smoothie', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '400'],
			'Mixed Berry': ['assets/subMenuItem.png', 'Mixed Berry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '300'],
			'Chiku Papaya': ['assets/subMenuItem.png', 'Chiku Papaya', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600']
		},
		'ICED COFFEE': {
			'Iced Cappuccino': ['assets/subMenuItem.png', 'Iced Cappuccino', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '300'],
			'Iced Latte': ['assets/subMenuItem.png', 'Iced Latte', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Iced Mocha': ['assets/subMenuItem.png', 'Iced Mocha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Iced Americano': ['assets/subMenuItem.png', 'Iced Americano', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600']
		},
		'FRUIT COOLERS': {
			'Peach': ['assets/subMenuItem.png', 'Peach', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Mango & Passion': ['assets/subMenuItem.png', 'Mango & Passion', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600']
		},
		'CREAMY COOLERS': {
			'Double Chocolate': ['assets/subMenuItem.png', 'Double Chocolate', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Strawberry/Vanilla': ['assets/subMenuItem.png', 'Strawberry/Vanilla', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Oreo/Kitkat Shake': ['assets/subMenuItem.png', 'Oreo/Kitkat Shake', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Lemon Iced Tea': ['assets/subMenuItem.png', 'Lemon Iced Tea', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Virgin Mojito': ['assets/subMenuItem.png', 'Virgin Mojito', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Exotic Mojitos Passion': ['assets/subMenuItem.png', 'Exotic Mojitos Passion', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Fresh Lime soda': ['assets/subMenuItem.png', 'Fresh Lime soda', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600']
		},
		'COFFEE COOLERS': {
			'Coffee': ['assets/subMenuItem.png', 'Coffee', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Mocha': ['assets/subMenuItem.png', 'Mocha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Caramel/Hazelnut': ['assets/subMenuItem.png', 'Caramel/Hazelnut', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600']
		},
		'HOT COFFEE': {
			'Cappuccino': ['assets/subMenuItem.png', 'Cappuccino', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Café Latte': ['assets/subMenuItem.png', 'Café Latte', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Café Mocha': ['assets/subMenuItem.png', 'Café Mocha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Americano': ['assets/subMenuItem.png', 'Americano', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Caffe Caramel': ['assets/subMenuItem.png', 'Caffe Caramel', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Affogato': ['assets/subMenuItem.png', 'Affogato', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600']
		},
		'CLASSIC': {
			'Espresso': ['assets/subMenuItem.png', 'Espresso', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Ristretto': ['assets/subMenuItem.png', 'Ristretto', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'],
			'Macchiato': ['assets/subMenuItem.png', 'Macchiato', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600']
		},
		'HOT CHOCOLATE & TEA': { 'Hot Chocolate': ['assets/subMenuItem.png', 'Hot Chocolate', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '600'] }
	},
	'FOOD': {
		'SIGNATURE RECIPIES': {
			'PITA ANCHO CHICKEN & BLACK BEAN': ['assets/AnchoChickenBlackBean.png', 'PITA ANCHO CHICKEN & BLACK BEAN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '400'],
			'RICE BOWL SPICY CHICKEN CAESAR': ['assets/spicy-buffalo-rice-bowl.png', 'RICE BOWL SPICY CHICKEN CAESAR', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '300'],
			'PIT ANCHO CHICKEN & BLACK BEAN': ['assets/jalapeno-club.png', 'PIT ANCHO CHICKEN & BLACK BEAN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '200'],
			'RICE BOWL SPICY CHICKEN': ['assets/zesty-chicken-and-bacon.png', 'RICE BOWL SPICY CHICKEN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry', '100']
		}
	}
};
var cartPreviewBody, cartPreviewItemName,cartPreviewItemPrice;
var cartPreviewFooter;
main.navbar(body);
menu();
//-------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------Menu script-------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
//Gather all elements class menuListItemContainer and subMenuItem
// a dict containing all menuListItemContainers
// and a dict containing all subMenuItems
var menuListItems = {};
var subMenuItems = {};
var subMenuItemsInfo = {};
var cartPreviewItems = {};
var cartPreviewItemsInfo = {}
const menuListItemContainers = document.getElementsByClassName("menuListItemContainer");
menuListItems = getMenuListItems();
subMenuItems = getSubMenuItems();
subMenuItemsInfo = getSubMenuItemsInfo();
//GET THE cartPreviewContainer 
//(AN ARRAY OF all the CHILDREN OF CartPreview)
// var cartPreview = document.getElementById("cartPreview");
// var cartPreviewBody = cartPreview.children[1]
//GET EACH cartPreviewITEM PRESENT IN cartPreviewBody 
cartPreviewItems = getCartPreviewItems()
//Get Info EACH cartPreviewITEM FROM subMenuItems
cartPreviewItemsInfo = getCartPreviewItemsInfo()
// and MAKE THEIR PRICE = 0 
makeCartPreviewPrice0();
// var cartPreviewFooter = cartPreview.children[2]
var orderCount = cartPreviewFooter.children[0].children[0].children[0];
var orderTotal = cartPreviewFooter.children[0].children[1].children[0];
var viewCartBtn = cartPreviewFooter.children[1]

//LAUNCH THE - , + FUNCTIONALITY OF THE cartPreviewContainer
subAddCal();
//GET THE MODAL AND ITS ELEMENTS WHICH WILL BE UPDATED
var modal = document.getElementById("myModal");
var popupBody = modal.children[0];
var popupBodyHeader = popupBody.children[0];
var popupBodyFooter = popupBody.children[1];
var popupCloseBtn = popupBodyHeader.children[0];
var popupImage = popupBodyHeader.children[1];
var popupName = popupBodyHeader.children[2];
var popupDesc = popupBodyHeader.children[3];
var popupPrice = popupBodyFooter.children[0].children[0].children[0];
var popupAddToCartBtn = popupBodyFooter.children[1]
var popupItemType = '';
// getModalElements();
//GET ITEM DETAILS AND PUT THEM IN THE MODAL BODY, WHEN subMenuItem ADDTOCART BUTTON IS CLICKED. DISPLAY THE MODAL
populateModal();
// WHEN THE USER CLICKS THE COLSE <span> (x), CLOSE THE MODAL
popupCloseBtn.onclick = function () { close() };
// WHEN THE USER CLICKS THE ADD TO CART <div> (ADD TO CART ->), CHANGE THE MODAL
popupAddToCartBtn.onclick = function () { modifyModal() };
// WHEN THE USER CLICKS THE VIEW CART <div> (VIEW CART ->), go to cart page
viewCartBtn.onclick = function () { viewCart() };

//-------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
//--------------------------------------------------Functions--------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//

function getModalElements() {
	var modal = document.getElementById("myModal");
	var popupBody = modal.children[0];
	var popupBodyHeader = popupBody.children[0];
	var popupBodyFooter = popupBody.children[1];
	popupCloseBtn = popupBodyHeader.children[0];
	popupImage = popupBodyHeader.children[1];
	popupName = popupBodyHeader.children[2];
	popupDesc = popupBodyHeader.children[3];
	popupPrice = popupBodyFooter.children[0].children[0].children[0];
	popupAddToCartBtn = popupBodyFooter.children[1]
	popupItemType = '';
}

function populateModal() {
	for (let i = 0; i < Object.keys(subMenuItems).length; i++) {
		var addToCartBtn = subMenuItems[Object.keys(subMenuItems)[i]].children[3].children[0];
		addToCartBtn.setAttribute('data-index', i);
		addToCartBtn.onclick = function (e) {
			var j = this.getAttribute('data-index');
			popupImage.src = subMenuItemsInfo['subMenuItem' + j]['itemImage'];
			popupName.innerHTML = subMenuItemsInfo['subMenuItem' + j]['itemName'];
			popupDesc.innerHTML = subMenuItemsInfo['subMenuItem' + j]['itemDesc'];
			popupPrice.innerHTML = parseFloat(subMenuItemsInfo['subMenuItem' + j]['itemPPUlarge']).toFixed(2);
			popupItemType = subMenuItemsInfo['subMenuItem' + j]['itemType'];
			modal.style.display = "flex";
		};
	}
}

function getMenuListItems() {
	for (let i = 0; i < menuListItemContainers.length; i++) {
		var Key = menuListItemContainers[i].children[0].children[0].textContent;
		var menuListItem = menuListItemContainers[i].children[1];
		menuListItems[Key] = menuListItem;
	}
	return menuListItems;
}

function getSubMenuItems() {
	var x = 0;
	for (let i = 0; i < Object.keys(menuListItems).length; i++) {
		var key = Object.keys(menuListItems)[i];
		for (let j = 0; j < menuListItems[key].children.length; j++) {
			var subMenuItem = menuListItems[key].children[j];
			subMenuItem.id = key + x;
			x += 1;
			subMenuItems[subMenuItem.id] = subMenuItem;
		}
	}
	return subMenuItems
}

function getSubMenuItemsInfo() {
	for (let i = 0; i < Object.keys(subMenuItems).length; i++) {
		var subMenuItem = subMenuItems[Object.keys(subMenuItems)[i]];
		var subMenuItemInfo = {};
		subMenuItemInfo['itemImage'] = subMenuItem.children[0].src;
		subMenuItemInfo['itemName'] = subMenuItem.children[1].textContent;
		subMenuItemInfo['itemDesc'] = subMenuItem.children[2].textContent;
		subMenuItemInfo['itemPPUlarge'] = parseFloat(subMenuItem.children[3].children[1].children[0].textContent).toFixed(2);
		subMenuItemInfo['itemPPUsmall'] = parseFloat((parseFloat(subMenuItem.children[3].children[1].children[0].textContent) / 2) + 10).toFixed(2);
		subMenuItemInfo['itemUnits'] = '0';
		if (subMenuItem.id.includes('CREATION')) { subMenuItemInfo['itemType'] = 'food' }
		else { subMenuItemInfo['itemType'] = 'beverage' };
		subMenuItemsInfo['subMenuItem' + i] = subMenuItemInfo
	}
	return subMenuItemsInfo
}

function getCartPreviewItems() {
	cartPreviewItems = {};
	for (let i = 0; i < cartPreviewBody.children.length; i++) {
		var cartPreviewItem = cartPreviewBody.children[i];
		var cartPreviewItemName = cartPreviewItem.children[0].textContent;
		cartPreviewItems[cartPreviewItemName] = cartPreviewItem;
	}
	return cartPreviewItems
}
function getCartPreviewItemsInfo() {
	// subMenuItemsInfo = getSubMenuItemsInfo();
	if (Object.keys(cartPreviewItems).length == 0) {
		dom(cartPreviewBody, '<div id="default" class="cartPreviewItemContainerDefault"><p>Your Cart is Empty!</p></div>');
	}
	else {
		var existingUnits = {}
		for (let i = 0; i < Object.keys(cartPreviewItems).length; i++) {
			var cartPreviewItemName = cartPreviewItems[Object.keys(cartPreviewItems)[i]].children[0].textContent;
			existingUnits[cartPreviewItemName] = cartPreviewItems[cartPreviewItemName].children[1].children[1].children[1].textContent;
		}
		for (let i = 0; i < Object.keys(subMenuItemsInfo).length; i++) {
			for (let j = 0; j < Object.keys(cartPreviewItems).length; j++) {
				cartPreviewItemName = cartPreviewItems[Object.keys(cartPreviewItems)[j]].children[0].textContent;
				// if name of submenuItem == name of cartPrviewItem
				if (cartPreviewItemName == subMenuItemsInfo['subMenuItem' + i]['itemName'] + ' (Large)') {
					cartPreviewItemsInfo[cartPreviewItemName] = subMenuItemsInfo['subMenuItem' + i];
					cartPreviewItemsInfo[cartPreviewItemName]['itemName'] = cartPreviewItemName;
					cartPreviewItemsInfo[cartPreviewItemName]['itemUnits'] = existingUnits[cartPreviewItemName];
				}
				else if (cartPreviewItemName == subMenuItemsInfo['subMenuItem' + i]['itemName'] + ' (Small)') {
					cartPreviewItemsInfo[cartPreviewItemName] = subMenuItemsInfo['subMenuItem' + i];
					cartPreviewItemsInfo[cartPreviewItemName]['itemName'] = cartPreviewItemName;
					cartPreviewItemsInfo[cartPreviewItemName]['itemUnits'] = existingUnits[cartPreviewItemName];
				}
			}
		}
	}
	return cartPreviewItemsInfo
}
function makeCartPreviewPrice0() {
	for (let i = 0; i < Object.keys(cartPreviewItems).length; i++) {
		var cartPreviewItemPrice = cartPreviewItems[Object.keys(cartPreviewItems)[i]].children[1].children[0].children[0];
		cartPreviewItemPrice.innerHTML = parseFloat(0).toFixed(2);
	}
}
function subAddCal() {
	//GET EACH cartPreviewITEM PRESENT IN cartPreviewBody 
	cartPreviewItems = getCartPreviewItems();
	//Get Info EACH cartPreviewITEM FROM subMenuItems
	cartPreviewItemsInfo = getCartPreviewItemsInfo();
	//get order count
	var c = parseInt(orderCount.textContent);
	// loop in app cart Items
	for (let i = 0; i < Object.keys(cartPreviewItems).length; i++) {
		// get cartItem Actionable Variables
		var minus = cartPreviewItems[Object.keys(cartPreviewItems)[i]].children[1].children[1].children[0];
		var plus = cartPreviewItems[Object.keys(cartPreviewItems)[i]].children[1].children[1].children[2];
		//minus.onclick
		minus.setAttribute('data-index', i);
		minus.onclick = function () {
			var j = this.getAttribute('data-index');
			var itemName = cartPreviewItems[Object.keys(cartPreviewItems)[j]].children[0].textContent;
			if (itemName.includes('(Small)')) {
				var ppu = parseFloat(cartPreviewItemsInfo[Object.keys(cartPreviewItems)[j]]['itemPPUsmall'])
			}
			else {
				var ppu = parseFloat(cartPreviewItemsInfo[Object.keys(cartPreviewItems)[j]]['itemPPUlarge'])
			}
			// get cartItem Variables to be changed
			var unit = cartPreviewItems[Object.keys(cartPreviewItems)[j]].children[1].children[1].children[1];
			var price = cartPreviewItems[Object.keys(cartPreviewItems)[j]].children[1].children[0].children[0];
			var u = parseInt(unit.textContent);
			if (u == 0) {
				keyName = cartPreviewBody.children[j].children[0].textContent;
				cartPreviewBody.removeChild(cartPreviewBody.children[j]);
				delete cartPreviewItems[keyName];
				delete cartPreviewItemsInfo[keyName];
				subAddCal();
			}
			else {
				//change CartPreviewItem count only if unit becomes 1:
				if (u == 1) {
					c -= 1;
					orderCount.innerHTML = c;
					var keyName = cartPreviewBody.children[j].children[0].textContent;
					cartPreviewBody.removeChild(cartPreviewBody.children[j]);
					delete cartPreviewItems[keyName];
					delete cartPreviewItemsInfo[keyName];
					subAddCal();
					// send();
				}
				else {
					u -= 1;
					unit.innerHTML = u
					cartPreviewItemsInfo[Object.keys(cartPreviewItems)[j]]['itemUnits'] = u.toString();
					price.innerHTML = parseFloat(ppu * u).toFixed(2);
				}
			}
		}
		plus.setAttribute('data-index', i);
		plus.onclick = function () {
			var j = this.getAttribute('data-index');
			var itemName = cartPreviewItems[Object.keys(cartPreviewItems)[j]].children[0].textContent;
			if (itemName.includes('(Small)')) {
				var ppu = parseFloat(cartPreviewItemsInfo[Object.keys(cartPreviewItems)[j]]['itemPPUsmall'])
			}
			else {
				var ppu = parseFloat(cartPreviewItemsInfo[Object.keys(cartPreviewItems)[j]]['itemPPUlarge'])
			}
			// get cartItem Variables to be changed
			var unit = cartPreviewItems[Object.keys(cartPreviewItems)[j]].children[1].children[1].children[1];
			var price = cartPreviewItems[Object.keys(cartPreviewItems)[j]].children[1].children[0].children[0];

			var u = parseInt(unit.textContent);
			if (u == 0) {
				u += 1;
				unit.innerHTML = u
				// cartPreviewItemsInfo[Object.keys(cartPreviewItems)[j]]['itemUnits'] = u;
				price.innerHTML = parseFloat(ppu * u).toFixed(2);
				c += 1;
				orderCount.innerHTML = c;
			}
			else {
				u += 1;
				unit.innerHTML = u
				// cartPreviewItemsInfo[Object.keys(cartPreviewItems)[j]]['itemUnits'] = u;
				price.innerHTML = parseFloat(ppu * u).toFixed(2);
			}
			cartPreviewItemsInfo[Object.keys(cartPreviewItems)[j]]['itemUnits'] = unit.textContent;
		}
	}
	previewTotalCal();
}

function previewTotalCal() {
	var total = 0;
	for (let i = 0; i < Object.keys(cartPreviewItems).length; i++) {
		total += parseFloat(cartPreviewItems[Object.keys(cartPreviewItems)[i]].children[1].children[0].children[0].textContent);
	}
	orderTotal.innerHTML = parseFloat(total).toFixed(2);
}
function restoreModal() {
	removeChildren(popupBodyHeader);
	dom(popupBodyHeader, '<img src="" alt="Product Image"><h2>Item Name</h2><p id="ModalDetails"></p>');
	popupBodyHeader.classList.remove("modal2BodyHeader");
	popupBodyHeader.classList.add("modalBodyHeader");
	removeChildren(popupBodyFooter);
	dom(popupBodyFooter, '<div class="container , divBtn">ADD TO CART &#8594</div>');
	// popupBody.classList.remove("modal2Body");
	main.modalBody(popupBody);
	subMenuItems = getSubMenuItems();
	subMenuItemsInfo = getSubMenuItemsInfo();
	getModalElements();
	populateModal();
}
function close() {
	modal.style.display = "none";
	restoreModal();
	popupAddToCartBtn.onclick = function () { modifyModal() };
}
function newModal() {
	popupBody.classList.remove("modalBody");
	removeChildren(popupBodyHeader);
	popupBodyHeader.classList.remove("modalBodyHeader");
	popupBodyHeader.classList.add("modal2BodyHeader");
	dom(popupBodyHeader, '<h3>Customise your drink</h3><p id="itemNameContainer" class="itemNameContainer"></p>');
	dom(popupBodyHeader, '<div id="itemSizeSelectorContainer" class="itemSizeSelectorContainer"></div>');
	var iSSContainer = document.getElementById("itemSizeSelectorContainer");
	dom(iSSContainer, '<p>Pick a cup size</p><div id="smallLargeContainer" class="smallLargeContainer"></div>');
	dom(iSSContainer.children[1], '<div id="smallContainer" class="smallContainer"></div>');
	dom(iSSContainer.children[1], '<div id="largeContainer" class="largeContainer"></div></div>');
	dom(iSSContainer.children[1].children[0], '<img src="assets/small.png" alt="Small"><p>Small</p>');
	dom(iSSContainer.children[1].children[1], '<img src="assets/large.png" alt="Large" class="selected"><p>Large</p>');
	main.modal2Body(popupBody);
}

function modifyModal() {
	newModal();
	var headingContainer = document.getElementById('modalBody').getElementsByTagName('h3')[0];
	var iSSContainer = document.getElementById("itemSizeSelectorContainer");
	var nameContainer = document.getElementById('itemNameContainer');
	var largeContainer = document.getElementById("largeContainer");
	var smallContainer = document.getElementById("smallContainer");

	if (popupItemType == 'food') {
		headingContainer.innerHTML = 'Customise your meal';
		iSSContainer.children[0].innerHTML = 'Pick a plate size';
		smallContainer.children[0].src = 'assets/smallPlate.png';
		largeContainer.children[0].src = 'assets/largePlate.png';
	}
	else {
		headingContainer.innerHTML = 'Customise your drink';
		iSSContainer.children[0].innerHTML = 'Pick a cup size';
		smallContainer.children[0].src = 'assets/small.png';
		largeContainer.children[0].src = 'assets/large.png';
	}
	nameContainer.innerHTML = popupName.textContent + ' (Large)';
	smallContainer.onclick = function () {
		if (smallContainer.children[0].classList.contains('selected') == false) {
			smallContainer.children[0].classList.add("selected");
			largeContainer.children[0].classList.remove("selected");

			nameContainer.innerHTML = popupName.textContent + ' (Small)';
			popupPrice.innerHTML = parseFloat((parseFloat(popupPrice.textContent) / 2) + 10).toFixed(2);
		}
	}
	largeContainer.onclick = function () {
		if (largeContainer.children[0].classList.contains('selected') == false) {
			smallContainer.children[0].classList.remove("selected");
			largeContainer.children[0].classList.add("selected");
			nameContainer.innerHTML = popupName.textContent + ' (Large)';
			popupPrice.innerHTML = parseFloat((parseFloat(popupPrice.textContent) - 10) * 2).toFixed(2);
		}
	}
	// popup Footer
	removeChildren(popupBodyFooter);
	dom(popupBodyFooter, '<div id="continue" class="container , divBtn">CONTINUE SHOPING &#8594</div>');
	document.getElementById("continue").onclick = function () {
		addToCartPreview(nameContainer.textContent);
		close();
	}
}

function addToCartPreview(name) {
	var empty = document.getElementById('default');
	if (empty) {
		cartPreviewBody.removeChild(cartPreviewBody.children[0]);
	}
	// if the item to be added is already present in CartPreview
	for (let i = 0; i < Object.keys(cartPreviewItems).length; i++) {
		if (cartPreviewItems[Object.keys(cartPreviewItems)[i]].children[0].textContent == name) {
			var unit = cartPreviewItems[Object.keys(cartPreviewItems)[i]].children[1].children[1].children[1];
			var price = cartPreviewItems[Object.keys(cartPreviewItems)[i]].children[1].children[0].children[0];
			if (name.includes('(Small)')) {
				var ppu = parseFloat(cartPreviewItemsInfo[Object.keys(cartPreviewItems)[i]]['itemPPUsmall'])
			}
			else {
				var ppu = parseFloat(cartPreviewItemsInfo[Object.keys(cartPreviewItems)[i]]['itemPPUlarge'])
			}
			unit.innerHTML = parseInt(unit.textContent) + 1;
			cartPreviewItemsInfo[Object.keys(cartPreviewItems)[i]]['itemUnits'] = (parseInt(unit.textContent) + 1).toString();
			price.innerHTML = parseFloat(ppu * (parseInt(unit.textContent))).toFixed(2);
			return;
		}
	}
	domStart(cartPreviewBody, `<div><p>${name}</p><div><p>&#X20B9; <p>0.00</p></p><div><div><img src="assets/minus.png"></div><p>1</p><div><img src="assets/plus.png"></div></div></div></div>`);
	cartPreviewItems = getCartPreviewItems();
	cartPreviewItemsInfo = getCartPreviewItemsInfo();
	var price = cartPreviewItems[name].children[1].children[0].children[0];
	cartPreviewItemsInfo[name]['itemUnits'] = '1';
	if (name.includes('(Small)')) {
		price.innerHTML = cartPreviewItemsInfo[name]['itemPPUsmall'];
	}
	else {
		price.innerHTML = cartPreviewItemsInfo[name]['itemPPUlarge'];
	}
	var c = parseInt(orderCount.textContent);
	c += 1;
	orderCount.innerHTML = c;
	subAddCal();
}
function viewCart() {
	if (parseInt(orderCount.textContent) != 0) {
		send();
	}
	else {
		var alertModal = document.getElementById('alert');
		dom(alertModal, '<div id="alertBody" class="alertBody"></div>');
		dom(alertModal.children[0], '<div id="close" class="close"><img src="assets/close.png"></div>')
		dom(alertModal.children[0], '<h2>Alert!</h2>');
		dom(alertModal.children[0], '<p>Your Cart is Empty!<br>Please Add a few Items First.</p>');
		alertModal.style.display = 'flex';
		alertModal.children[0].children[0].onclick = function () {
			alertModal.style.display = "none";
			removeAllChildren(alertModal);
		}
		window.onclick = function (event) {
			if (event.target == alertModal) {
				alertModal.style.display = "none";
				removeAllChildren(alertModal);
			}
		}
	}
}

function send() {
	var cartItems = getCartPreviewItemsInfo();
	for (let i = 0; i < Object.keys(cartItems).length; i++) {
		if (cartItems[Object.keys(cartItems)[i]]['itemUnits'] == '0') {
			delete cartItems[Object.keys(cartItems)[i]]
			i--;
		}
	}
	for (let i = 0; i < Object.keys(cartItems).length; i++) {
		if (cartItems[Object.keys(cartItems)[i]]['itemName'].includes('(Large)')) {
			cartItems[Object.keys(cartItems)[i]]['itemPPU'] = cartItems[Object.keys(cartItems)[i]]['itemPPUlarge']
			delete cartItems[Object.keys(cartItems)[i]]['itemPPUsmall']
			delete cartItems[Object.keys(cartItems)[i]]['itemPPUlarge']
		}
		if (cartItems[Object.keys(cartItems)[i]]['itemName'].includes('(Small)')) {
			cartItems[Object.keys(cartItems)[i]]['itemPPU'] = cartItems[Object.keys(cartItems)[i]]['itemPPUsmall']
			delete cartItems[Object.keys(cartItems)[i]]['itemPPUsmall']
			delete cartItems[Object.keys(cartItems)[i]]['itemPPUlarge']
		}
	}
	console.log(cartItems);
	sessionStorage.setItem("send", JSON.stringify(cartItems));
	window.location.href = 'cart.php';
}

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
function dom(parent, child) {
	parent.insertAdjacentHTML('beforeend', child);
}
function domStart(parent, child) {
	parent.insertAdjacentHTML('afterbegin', child);
}
function style(parent, p, v) {
	parent.style.setProperty(p, v);
}

//-------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
//---------------------------------------------------Menu DOM--------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
function menu() {
	createMenuContainer();
	createMenuHeader();
	createMenuBody();
	createMenuFooter();
}
function createMenuContainer() {
	dom(body, '<div id="menuContainer"></div>');
	menuContainer = document.getElementById('menuContainer');
	main.pageContainer(menuContainer);
}
function createMenuHeader() {
	dom(menuContainer, '<div id="menuHeader"></div>');
	menuHeader = document.getElementById('menuHeader');
	dom(menuHeader, '<div></div>');
	dom(menuHeader.children[0], '<span></span>');
	dom(menuHeader.children[0], '<div id="searchbarContainer"></div>');
	menuHeader.children[0].children[0].innerHTML = 'BlackBuck’s Food & Bevrages';
	searchbarContainer = document.getElementById('searchbarContainer')
	dom(searchbarContainer, '<input type="text" placeholder=" which meal is your favourite?" />');
	dom(searchbarContainer, '<div><img src="assets/dashicons_search.png" alt="Search"></div>');
	serachbar = searchbarContainer.children[0];
	main.menuHeader(menuHeader);
}
function createMenuBody() {
	dom(menuContainer, '<div id="menuBody"></div>');
	menuBody = document.getElementById('menuBody');
	dom(menuBody, '<div id="listC"></div><div id="itemC"></div><div id="prevC"></div>');
	// list container :
	menuListContainer = document.getElementById('listC');
	dom(menuListContainer, '<div></div><div></div>');
	menuListItems = menuListContainer.children;
	for (let i = 0; i < menuListItems.length; i++) {
		dom(menuListItems[i], '<div></div><div></div>');
	}
	var len = 0;
	for (let i = 0; i < Object.keys(menuListData).length; i++) {
		dom(menuListItems[i].children[0], `<span>${Object.keys(menuListData)[i]}</span>`);
		for (let j = 0; j < Object.keys(menuListData[Object.keys(menuListData)[i]]).length; j++) {
			len += 1;
			dom(menuListItems[i].children[1], `<a><span>${Object.keys(menuListData[Object.keys(menuListData)[i]])[j]}</span></a>`);
		}
	}
	// Expand container :
	menuExpandContainer = document.getElementById('itemC');
	for (let i = 0; i < len; i++) {
		dom(menuExpandContainer, '<div><h3></h3><div></div></div>');
		menuExpandContainer.children[i].id = 'menuListItemContainer' + (i + 1).toString();
		var listHeading = menuExpandContainer.children[i].children[0];
		var listGrid = menuExpandContainer.children[i].children[1];
		if (i <= 7) {
			listHeading.innerHTML = Object.keys(menuListData[Object.keys(menuListData)[0]])[i];
			var obj1 = menuListData[Object.keys(menuListData)[0]][Object.keys(menuListData[Object.keys(menuListData)[0]])[i]];
			for (let j = 0; j < Object.keys(obj1).length; j++) {
				dom(listGrid, '<div></div>');
				var listItem = listGrid.children[j];
				dom(listItem, '<img><h3></h3><p></p>');
				dom(listItem, '<div><div></div><span>&#X20B9; <span></span></span></div>');
				listItem.children[0].src = obj1[Object.keys(obj1)[j]][0];
				listItem.children[1].innerHTML = obj1[Object.keys(obj1)[j]][1];
				listItem.children[1].id = 'subMenuItem' + (i + 1).toString() + 'Name';
				listItem.children[2].innerHTML = obj1[Object.keys(obj1)[j]][2];
				listItem.children[3].children[0].innerHTML = 'Add to Cart';
				listItem.children[3].children[1].children[0].innerHTML = obj1[Object.keys(obj1)[j]][3];
			}
		}
		else {
			listHeading.innerHTML = Object.keys(menuListData[Object.keys(menuListData)[1]])[i-8];
			var obj2 = menuListData[Object.keys(menuListData)[1]][Object.keys(menuListData[Object.keys(menuListData)[1]])[i-8]];
			for (let j = 0; j < Object.keys(obj2).length; j++) {
				dom(listGrid, '<div></div>');
				var listItem = listGrid.children[j];
				dom(listItem, '<img><h3></h3><p></p>');
				dom(listItem, '<div><div></div><span>&#X20B9; <span></span></span></div>');
				listItem.children[0].src = obj2[Object.keys(obj2)[j]][0];
				listItem.children[1].innerHTML = obj2[Object.keys(obj2)[j]][1];
				listItem.children[1].id = 'subMenuItem' + (i + 1).toString() + 'Name';
				listItem.children[2].innerHTML = obj2[Object.keys(obj2)[j]][2];
				listItem.children[3].children[0].innerHTML = 'Add to Cart';
				listItem.children[3].children[1].children[0].innerHTML = obj2[Object.keys(obj2)[j]][3];
			}
		}
	}
	cartPreviewContainer = document.getElementById('prevC');
	dom(cartPreviewContainer, '<div><h4></h4></div><div></div><div></div>');
	cartPreviewContainer.children[0].children[0].innerHTML = 'Items in cart';
	cartPreviewBody = cartPreviewContainer.children[1];
	for(let i = 0; i < 2; i ++) {
		dom(cartPreviewBody, '<div><p></p><div></div></div>');
		//var cpI = cartPreviewBody.children[i];
		cartPreviewItemName = cartPreviewBody.children[i].children[0];
		var cPIPUC = cartPreviewBody.children[i].children[1];
		dom(cPIPUC, '<p>&#X20B9; <span>100</span></p><div></div>');
		cartPreviewItemPrice = cPIPUC.children[0].children[0];
		var cPIUC = cPIPUC.children[1];
		dom(cPIUC, '<div><img></div><p>0</p><div><img></div>');
		var cPIminus = cPIUC.children[0].children[0];
		var cPIunits = cPIUC.children[1];
		var cPIplus = cPIUC.children[2].children[0];
		cPIminus.src = 'assets/minus.png';
		cPIplus.src = 'assets/plus.png';
	}
	cartPreviewFooter = cartPreviewContainer.children[2];
	dom(cartPreviewFooter,'<div></div><div>VIEW CART</div>');
	var cIPC = cartPreviewFooter.children[0];
	var viewCartBtn = cartPreviewFooter.children[1];
	dom(cIPC,'<div></div><p>&#X20B9; <span>400.00</span></p>');
	var cPC = cIPC.children[0];
	dom(cPC,'<div>0</div><img>');
	cPC.children[1].src = 'assets/dashicons_cart.png';
	
	main.menuBody(menuBody);
};
function createMenuFooter() {
	dom(menuContainer, '<div id="menuFooter"></div>');
	menuFooter = document.getElementById('menuFooter');
	// menuFooter.setAttribute('data-id',`<?php include 'footer.php';	?>`);
	// menuFooter.innerHTML =menuFooter.getAttribute('data-id');
}