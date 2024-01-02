import './mainCssDOM.js';
import { dom, domStart, style, removeChildren, removeAllChildren, width, height, container, paddingv, paddingh, marginh } from './mainCssDOM.js';
var cartItemsContainer = document.getElementsByClassName("cartItemsFooterItemsContainer")[0];
removeAllChildren(cartItemsContainer);
//Get Info EACH cartITEM FROM menuPage
var cartItemsInfoFromMenuPage = JSON.parse(sessionStorage.getItem("send"));
var cartItemsInfo = cartItemsInfoFromMenuPage;
createCartItems();
var cartItems = getCartItems();
subAddCal();
var E = getElementsFromDom();
E['openStoreOfferBtn'].onclick = function () { showOfferPopup(); activateStoreOffer() };
E['openBankWalletOfferBtn'].onclick = function () { showOfferPopup(); activateBankWalletOffer() };
E['storeOfferBtn'].onclick = function () { activateStoreOffer() };
E['bankWalletOfferBtn'].onclick = function () { activateBankWalletOffer() };
E['storeAppyBtn'].onclick = function () {/* offerPopup.style.display = 'none' */ };
E['bankWalletAppyBtn'].onclick = function () {/* offerPopup.style.display = 'none' */ };
E['addAddressBtn'].onclick = function () { showAddressPopup() };
E['closePopupBtn'].onclick = function () { var E = getElementsFromDom(); E['offerPopup'].style.display = 'none' };
E['proceedBtn'].onclick = function () { 
	var radio = document.getElementsByName('addressRadio');
	var flag = 0
	for(i = 0; i < radio.length - 1; i++) {
		if(radio[i].checked) {
			var toPay = billTotalCal();
			sessionStorage.setItem("total", JSON.stringify(toPay));
			window.location.href = 'paymentMode.php';
		}
		else { flag = 1}
	}
	if( flag == 1) {
		if(radio[radio.length - 1].checked) {
			showAddAddressPopup();
		}
	}
	else {
		window.alert('Please Select an Address');
	}
};
//-------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
//--------------------------------------------------Functions--------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//

function getElementsFromDom() {
	var E = {};
	E['offerPopup'] = document.getElementById('offerModal');
	E['offerPopupHeader'] = document.getElementById('modalBodyHeader');
	E['offerPopupBody'] = document.getElementById('modalBodyContent');
	E['offerPopupFooter'] = document.getElementById('modalBodyFooter');
	E['openStoreOfferBtn'] = document.getElementById('storeOfferContainer');
	E['openBankWalletOfferBtn'] = document.getElementById('BankWalletOfferContainer');
	E['closePopupBtn'] = document.getElementById('close');
	E['storeAppyBtn'] = document.getElementById('StoreOfferApplyBtn');
	E['bankWalletAppyBtn'] = document.getElementById('bankwalletApplyBtn');
	E['addAddressBtn'] = document.getElementById('addAddressAndPayBtn');
	E['offerHeader'] = document.getElementById('modalBodyContent').children[0];
	E['offerBody'] = document.getElementById('modalBodyContent').children[1];
	E['storeOfferBtn'] = document.getElementById('modalBodyContent').children[0].children[0];
	E['bankWalletOfferBtn'] = document.getElementById('modalBodyContent').children[0].children[1];
	E['radioBtn'] = document.getElementsByClassName('addressRadioContainer');
	E['proceedBtn'] = E['offerPopupFooter'].children[0];
	return E
}

function createCartItems() {
	var E = getElementsFromDom();
	for (let i = 0; i < Object.keys(cartItemsInfoFromMenuPage).length; i++) {
		dom(cartItemsContainer, '<div class="cartItemsFooterItemContainer"><div class="cartItemsFooterItemNameContainer"><span>Lorem</span></div><div class="cartItemsFooterItemPriceUnitContainer"><img src="assets/subMenuItem.png" alt="II"><span>&#X20B9; <span class="itemPrice">100</span></span><div class="cartItemsFooterItemUnitContainer"><div><img src="assets/minus.png"></div><span>0</span><div><img src="assets/plus.png"></div></div></div><div class="cartItemsFooterItemPrepDescContainer"><input id="prepDesc" name="prepDesc" class="prepDesc" placeholder="Preparation instructions"><img src="assets/comment.png" alt="desc"></div></div>');
		var item = document.getElementsByClassName('cartItemsFooterItemContainer')[i];
		item.children[0].children[0].innerHTML = cartItemsInfoFromMenuPage[Object.keys(cartItemsInfoFromMenuPage)[i]]['itemName'];
		item.children[1].children[0].src = cartItemsInfoFromMenuPage[Object.keys(cartItemsInfoFromMenuPage)[i]]['itemImage'];
		var ppu = parseFloat(cartItemsInfoFromMenuPage[Object.keys(cartItemsInfoFromMenuPage)[i]]['itemPPU']).toFixed(2)
		var units = parseInt(cartItemsInfoFromMenuPage[Object.keys(cartItemsInfoFromMenuPage)[i]]['itemUnits']);
		var price = (ppu * units).toFixed(2);
		item.children[1].children[1].children[0].innerHTML = price;
		item.children[1].children[2].children[1].innerHTML = units;
	}
}

function getCartItems() {
	var E = getElementsFromDom();
	var cartItems = {};
	for (let i = 0; i < cartItemsContainer.children.length; i++) {
		var cartItem = cartItemsContainer.children[i];
		cartItem['cartItemName'] = cartItem.children[0].children[0].textContent;
		cartItem['cartItemImage'] = cartItem.children[1].children[0].src;
		cartItem['cartItemPrice'] = cartItem.children[1].children[1].children[0].textContent;
		cartItem['cartItemUnits'] = cartItem.children[1].children[2].children[1].textContent;
		cartItems[cartItem['cartItemName']] = cartItem;
	}
	return cartItems
}

function getCartItemsInfo() {
	var E = getElementsFromDom();
	if (Object.keys(cartItems).length == 0) {
		dom(cartItemsContainer, '<div id="default" class="cartItemContainerDefault"><p>Your Cart is Empty!</p></div>');
	}
	else {
		// get submenu items and operate the loop on it instead of cartItemsInfoFromMenuPage
		for (let i = 0; i < Object.keys(cartItemsInfoFromMenuPage).length; i++) {
			for (let j = 0; j < Object.keys(cartItems).length; j++) {
				var cartItemName = cartItems[Object.keys(cartItems)[j]].children[0].children[0].textContent;
				// if name of submenuItem == name of cartItem
				// if (cartItemName == subMenuItemsInfo['subMenuItem'+i]['itemName'] + ' (Large)') {
				// 	cartItemsInfo[Object.keys(cartItems)[j]] = subMenuItemsInfo['subMenuItem'+i];
				// 	cartItemsInfo[Object.keys(cartItems)[j]]['itemName'] = cartItemName;
				// }
				// else if (cartItemName == subMenuItemsInfo['subMenuItem'+i]['itemName'] + ' (Small)') {
				// 	cartItemsInfo[Object.keys(cartItems)[j]] = subMenuItemsInfo['subMenuItem'+i];
				// 	cartItemsInfo[Object.keys(cartItems)[j]]['itemName'] = cartItemName;
				// }

				// if name of submenuItem == name of cartItem
				if (cartItemName == cartItemsInfoFromMenuPage[Object.keys(cartItemsInfoFromMenuPage)[i]]['itemName']) {
					cartItemsInfo[cartItemName] = cartItemsInfoFromMenuPage[Object.keys(cartItemsInfoFromMenuPage)[i]];
				}
			}
		}
	}
	return cartItemsInfo
}

function billTotalCal() {
	var E = getElementsFromDom();
	var itemTotal = document.getElementById('price');
	var cgst = document.getElementById('cgst');
	var sgst = document.getElementById('sgst');
	var billTotal = document.getElementById('totalPrice');
	var total = 0;
	for (let i = 0; i < Object.keys(cartItems).length; i++) {
		total += parseFloat(cartItems[Object.keys(cartItems)[i]].children[1].children[1].children[0].textContent);
	}
	itemTotal.innerHTML = parseFloat(total).toFixed(2);
	cgst.innerHTML = parseFloat(total * 0.18).toFixed(2);
	sgst.innerHTML = parseFloat(total * 0.18).toFixed(2);
	billTotal.innerHTML = parseFloat(total + (total * 2 * 0.18)).toFixed(2);
	return billTotal.textContent
}

function subAddCal() {
	var E = getElementsFromDom();
	//GET EACH cartITEM PRESENT IN cartBody 
	var cartItems = getCartItems();
	//Get Info EACH cartITEM FROM cartItems
	var cartItemsInfo = getCartItemsInfo();
	//get order count
	var count = Object.keys(cartItems).length;
	// loop in app cart Items
	for (let i = 0; i < Object.keys(cartItems).length; i++) {
		// get cartItem Actionable Variables
		var minus = cartItems[Object.keys(cartItems)[i]].children[1].children[2].children[0];
		var plus = cartItems[Object.keys(cartItems)[i]].children[1].children[2].children[2];
		//minus.onclick
		minus.setAttribute('data-index', i);
		minus.onclick = function () {
			var j = this.getAttribute('data-index');
			var itemName = cartItems[Object.keys(cartItems)[j]].children[0].children[0].textContent;
			var ppu = parseFloat(cartItemsInfo[Object.keys(cartItems)[j]]['itemPPU']).toFixed(2)
			// get cartItem Variables to be changed
			var unit = cartItems[Object.keys(cartItems)[j]].children[1].children[2].children[1];
			var price = cartItems[Object.keys(cartItems)[j]].children[1].children[1].children[0];
			var u = parseInt(unit.textContent);
			if (u == 0) {
				var keyName = cartItemsContainer.children[j].children[0].children[0].textContent;
				cartItemsContainer.removeChild(cartItemsContainer.children[j]);
				delete cartItems[keyName];
				delete cartItemsInfo[keyName];
				subAddCal();
			}
			else {
				//change CartItem count only if unit becomes 1:
				if (u == 1) {
					count -= 1;
					// orderCount.innerHTML = c;
					var keyName = cartItemsContainer.children[j].children[0].children[0].textContent;
					cartItemsContainer.removeChild(cartItemsContainer.children[j]);
					delete cartItems[keyName];
					delete cartItemsInfo[keyName];
					subAddCal();
					// send();
				}
				else {
					u -= 1;
					unit.innerHTML = u
					cartItemsInfo[Object.keys(cartItemsInfo)[j]]['itemUnits'] = u;
					price.innerHTML = parseFloat(ppu * u).toFixed(2);
				}
			}
			billTotalCal();
		}
		plus.setAttribute('data-index', i);
		plus.onclick = function () {
			var j = this.getAttribute('data-index');
			var itemName = cartItems[Object.keys(cartItems)[j]].children[0].children[0].textContent;
			var ppu = parseFloat(cartItemsInfo[Object.keys(cartItems)[j]]['itemPPU']).toFixed(2)
			// get cartItem Variables to be changed
			var unit = cartItems[Object.keys(cartItems)[j]].children[1].children[2].children[1];
			var price = cartItems[Object.keys(cartItems)[j]].children[1].children[1].children[0];
			var u = parseInt(unit.textContent);
			if (u == 0) {
				u += 1;
				unit.innerHTML = u
				cartItemsInfo[Object.keys(cartItemsInfo)[j]]['itemUnits'] = u;
				price.innerHTML = parseFloat(ppu * u).toFixed(2);
				count += 1;
				// orderCount.innerHTML = c;
			}
			else {
				u += 1;
				unit.innerHTML = u
				cartItemsInfo[Object.keys(cartItemsInfo)[j]]['itemUnits'] = u;
				price.innerHTML = parseFloat(ppu * u).toFixed(2);
			}
			billTotalCal();
		}
	}
	billTotalCal();
}

function setOfferPopupHeaderDimentions() {
	var E = getElementsFromDom();
	style(E['offerPopupHeader'], {
		'height': (133 * 100 / 1440).toString() + 'vw',
		'justify-content': 'flex-start',
		'align-items': 'flex-start'
	});
	style(E['offerPopupHeader'].children[1], {
		'top': '3.5vw',
		'left': '2vw',
		'fontSize': (26 * 100 / 1440).toString() + 'vw',
		'font-weight': '700',
		'text-align': 'left',
	});
}

function setOfferPopupHeader() {
	var E = getElementsFromDom();
	setOfferPopupHeaderDimentions();
	E['offerPopupHeader'].children[1].innerHTML = 'Offers';
}

function setOfferPopupBodyDimentions() {
	var E = getElementsFromDom();
	container(E['offerPopupBody'], 'column');
	style(E['offerPopupBody'], {
		'width': (500 * 100 / 1440).toString() + 'vw',
		'height': (330 * 100 / 1440).toString() + 'vw',
		'justify-content': 'flex-start',
		'align-items': 'flex-start',
		'background-color': '#FFFFFF',
		'overflow-x':'hidden',
		'overflow-y': 'scroll',
	});
}

function setOfferPopupBody() {
	var E = getElementsFromDom();
	setOfferPopupBodyDimentions();
	removeAllChildren(E['offerPopupBody']);
	dom(E['offerPopupBody'], '<div id="modalBodyContentHead"><div id="storeOfferHead" class="divBtn">Store Offers</div><div id="bankWalletOfferHead" class="divBtn">Bank/Wallet Offers</div></div>');
	dom(E['offerPopupBody'], '<div id="modalBodyContentBody" class="modalBodyContentBody"></div>');
	dom(E['offerPopupBody'].children[1], '<div id="storeBody" ><input id=StoreOfferInput placeholder="Please enter the Promo Code"></input><div id="StoreOfferApplyBtn" class="divBtn">APPLY</div></div>');
	dom(E['offerPopupBody'].children[1], '<div id="bankWalletBody"><input id=bankwalletInput placeholder="Please enter the Promo Code"></input><div id="bankwalletApplyBtn" class="divBtn">APPLY</div></div>');
	E = getElementsFromDom();
	E['storeOfferBtn'].onclick = function () { activateStoreOffer() };
	E['bankWalletOfferBtn'].onclick = function () { activateBankWalletOffer() };
	style(E['offerPopupBody'].children[0], {
		'width': (500 * 100 / 1440).toString() + 'vw',
		'height': (66 * 100 / 1440).toString() + 'vw',
		'display': 'flex',
		'flex-direction': 'row',
		'border-bottom': (1 * 100 / 1440).toString() + 'vw solid black',
	});
	for (let i = 0; i < E['offerPopupBody'].children[0].children.length; i++) {
		E['offerPopupBody'].children[0].children[i].style.width = (250 * 100 / 1440).toString() + 'vw';
		E['offerPopupBody'].children[0].children[i].style.minWidth = (250 * 100 / 1440).toString() + 'vw';
		E['offerPopupBody'].children[0].children[i].style.padding = '0vw';
		E['offerPopupBody'].children[0].children[i].style.color = '#000000';
	}
	style(E['offerBody'], {
		'width': (436 * 100 / 1440).toString() + 'vw',
		'padding': (32 * 100 / 1440).toString() + 'vw',
	});
	for (let i = 0; i < E['offerBody'].children.length; i++) {
		style(E['offerBody'].children[i], {
			'width': (426 * 100 / 1440).toString() + 'vw',
			'border': (5 * 100 / 1440).toString() + 'vw solid #D9D9D9',
			'border-radius': (10 * 100 / 1440).toString() + 'vw',
			'display': 'none',
			'flex-direction': 'row',
			'justify-content': 'flex-start',
			'align-items': 'center',
		});
		style(E['offerBody'].children[i].children[0], {
			'border': 'none',
			'width': (418 * 100 / 1440).toString() + 'vw',
			'height': (48 * 100 / 1440).toString() + 'vw',
			'border-radius': (10 * 100 / 1440).toString() + 'vw',
			'padding-left': (8 * 100 / 1440).toString() + 'vw',
			'font-size': (15 * 100 / 1440).toString() + 'vw',
		});
		style(E['offerBody'].children[i].children[1], {
			'width': (132 * 100 / 1440).toString() + 'vw',
			'color': '#EAA923',
			'position': 'relative',
			'left': (-155 * 100 / 1440).toString() + 'vw',
		});
	}
}

function setOfferPopupFooter() {
	var E = getElementsFromDom();
	E['offerPopupFooter'].children[0].innerHTML = '';
}

function showOfferPopup() {
	var E = getElementsFromDom();
	setOfferPopupHeader();
	setOfferPopupBody();
	setOfferPopupFooter();
	E['offerPopup'].style.display = 'flex';
}

function activateStoreOffer() {
	var E = getElementsFromDom();
	E['bankWalletOfferBtn'].style.borderBottom = 'none';
	E['offerBody'].children[1].style.display = 'none';
	E['storeOfferBtn'].style.borderBottom = (7 * 100 / 1440).toString() + 'vw solid orange';
	E['offerBody'].children[0].style.display = 'flex';
}

function activateBankWalletOffer() {
	var E = getElementsFromDom();
	E['storeOfferBtn'].style.borderBottom = 'none';
	E['offerBody'].children[0].style.display = 'none';
	E['bankWalletOfferBtn'].style.borderBottom = (7 * 100 / 1440).toString() + 'vw solid orange';
	E['offerBody'].children[1].style.display = 'flex';
}

function setAddressPopupHeader() {
	var E = getElementsFromDom();
	setOfferPopupHeaderDimentions();
	E['offerPopupHeader'].children[1].innerHTML = 'Address';
}

function setAddressPopupBody() {
	var E = getElementsFromDom();
	setOfferPopupBodyDimentions();
	removeAllChildren(E['offerPopupBody']);
	displayExistingAddres();
	dom(E['offerPopupBody'], '<div class="addressRadioContainer"><input type="radio" name="addressRadio" value="null"/><div><div><img src="/blackbucks/assets/dashicons_none.png" alt=""><h3>Add a new address</h3></div><div><span></span><span></span><span></span><span></span><span></span></div></div>');
	for (let i = 0; i < E['radioBtn'].length; i++) {
		container(E['radioBtn'][i], 'row');
		paddingv(E['radioBtn'][i], 10);
		style(E['radioBtn'][i], {
			'width': (470 * 100 / 1440).toString() + 'vw',
			'padding-left': (10 * 100 / 1440).toString() + 'vw',
			'justify-content': 'flex-start',
		});
		style(E['radioBtn'][i].children[0], {
			'width': (34 * 100 / 1440).toString() + 'vw',
			'height': (34 * 100 / 1440).toString() + 'vw',
		});
		container(E['radioBtn'][i].children[1], 'column');
		style(E['radioBtn'][i].children[1], {
			'width': (436 * 100 / 1440).toString() + 'vw',
			'align-items': 'flex-start',
			'justify-content': 'flex-start',
		});
		container(E['radioBtn'][i].children[1].children[0], 'row');
		style(E['radioBtn'][i].children[1].children[0], {
			'width': (436 * 100 / 1440).toString() + 'vw',
			'justify-content': 'flex-start',
		});
		marginh(E['radioBtn'][i].children[1].children[0].children[0], 4);
		style(E['radioBtn'][i].children[1].children[0].children[0], {
			'width': (26 * 100 / 1440).toString() + 'vw',
			'height': (26 * 100 / 1440).toString() + 'vw',
		});
		style(E['radioBtn'][i].children[1].children[0].children[1], {
			'width': (402 * 100 / 1440).toString() + 'vw',
		});
		container(E['radioBtn'][i].children[1].children[1], 'column');
		style(E['radioBtn'][i].children[1].children[1], {
			'width': (402 * 100 / 1440).toString() + 'vw',
			'padding-left': (34 * 100 / 1440).toString() + 'vw',
			'align-items': 'flex-start',
			'justify-content': 'flex-start',
		});
	}
	var addNewAddressRadioBtn = E['radioBtn'][E['radioBtn'].length - 1];
	style(addNewAddressRadioBtn, { 'height': (35 * 100 / 1440).toString() + 'vw', });
}

function setAddressPopupFooter() {
	var E = getElementsFromDom();
	style(E['offerPopupFooter'], { 'justify-content': 'center' });
	E['proceedBtn'].innerHTML = 'Proceed';
}

function showAddressPopup() {
	var E = getElementsFromDom();
	setAddressPopupHeader();
	setAddressPopupBody();
	setAddressPopupFooter();
	E['offerPopup'].style.display = 'flex';
}

function displayExistingAddres() {
	domStart(E['offerPopupBody'], '<div class="addressRadioContainer"><input type="radio" name="addressRadio" value="Officeaddress"/><div><div><img src="/blackbucks/assets/dashicons_job2.png" alt=""><h3>Name</h3></div><div><span>HouseNo.</span><span>Land Mark</span><span>City , State</span><span>Pin Code</span><span>Phone Number</span></div></div>');
	domStart(E['offerPopupBody'], '<div class="addressRadioContainer"><input type="radio" name="addressRadio" value="Homeaddress"/><div><div><img src="/blackbucks/assets/dashicons_home.png" alt=""><h3>Name</h3></div><div><span>HouseNo.</span><span>Land Mark</span><span>City , State</span><span>Pin Code</span><span>Phone Number</span></div></div>');
}

