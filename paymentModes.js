import './main.js';
import { dom, style, container } from './main.js';
var toPay = JSON.parse(sessionStorage.getItem("total"));
var body = document.getElementsByTagName('Body')[0];
dom(body, '<div id="paymentModePageContainer"></div>');
var pageContainer = document.getElementById('paymentModePageContainer');
container(pageContainer, 'column');
style(pageContainer, {
	'width': (1440 * 100 / 1440).toString() + 'vw',
});
dom(pageContainer, '<div id="pMContainer"></div>');
var pMContainer = document.getElementById('pMContainer');
container(pMContainer, 'column');
style(pMContainer, {
	'width': (640 * 100 / 1440).toString() + 'vw',
	'height': (430 * 100 / 1440).toString() + 'vw',
	'border': (3 * 100 / 1440).toString() + 'vw solid #D9D9D9',
	'border-radius': (40 * 100 / 1440).toString() + 'vw',
	'position': 'relative',
	'top': (44 * 100 / 1440).toString() + 'vw',
	'padding': (30 * 100 / 1440).toString() + 'vw',
	'padding-top': (70 * 100 / 1440).toString() + 'vw',
	'align-items': 'flex-start',
	'justify-content': 'flex-start',
});
dom(pMContainer, '<div><img></div><h3></h3><div><span></span><div></div><div></div>');
pMContainer.children[0].id = "close";
pMContainer.children[0].classList.add('close');
var closeBtn = document.getElementById('close');
closeBtn.children[0].src = "assets/close.png";
style(closeBtn, {
	'top': (40 * 100 / 1440).toString() + 'vw',
	'right': (30 * 100 / 1440).toString() + 'vw',
	'background-color': '#000000',
});
pMContainer.children[1].innerHTML = "To Pay " + toPay.toString();
style(pMContainer.children[1], {'height':(30 * 100 / 1440).toString() + 'vw'});
container(pMContainer.children[2], 'column');
style(pMContainer.children[2], {
	'width': (640 * 100 / 1440).toString() + 'vw',
	'height': (350 * 100 / 1440).toString() + 'vw',
	'margin-top': (50 * 100 / 1440).toString() + 'vw',
	'align-items': 'flex-start',
	'justify-content': 'space-between',
});
pMContainer.children[2].children[0].innerHTML = 'Pay using';
style(pMContainer.children[2].children[0], {
	'height':(20 * 100 / 1440).toString() + 'vw',
	'margin-bottom': (10 * 100 / 1440).toString() + 'vw',
});
container(pMContainer.children[2].children[1], 'row');
style(pMContainer.children[2].children[1], {
	'width': (610 * 100 / 1440).toString() + 'vw',
	'margin-top': (20 * 100 / 1440).toString() + 'vw',
	'margin-bottom': (10 * 100 / 1440).toString() + 'vw',
	'align-items': 'flex-start',
	'justify-content': 'space-between',
});
var arr =   {'card':['Credit & Debit Card','assets/card.png','#EA672B'],
			 'amazon':['AmazonPay','assets/amazon.png','#353E47'],
			 'lazy':['LazyPay','assets/lazypay.png','#DA4763'],
			 'paytm':['Paytm','assets/paytm.png','#122F6B'],
			 'simpl':['Simpl','assets/simpl.png','#60D2C1']
			};
for(let i = 0; i < Object.keys(arr).length; i++) {
	dom(pMContainer.children[2].children[1],'<div class="paymentModeCard"><img><p></p></div>');
	pMContainer.children[2].children[1].children[i].id = Object.keys(arr)[i];
	pMContainer.children[2].children[1].children[i].style.backgroundColor = arr[Object.keys(arr)[i]][2];
	pMContainer.children[2].children[1].children[i].children[0].src = arr[Object.keys(arr)[i]][1];
	pMContainer.children[2].children[1].children[i].children[1].innerHTML = arr[Object.keys(arr)[i]][0];
}
container(pMContainer.children[2].children[2], 'row');
style(pMContainer.children[2].children[2], {
	'width': (610 * 100 / 1440).toString() + 'vw',
	'margin-top': (10 * 100 / 1440).toString() + 'vw',
	'margin-bottom': (20 * 100 / 1440).toString() + 'vw',
	'align-items': 'flex-start',
	'justify-content': 'space-between',
});
var arr2 =  { 'mobikwik':['MobiKwik','assets/mobikwik.png','#2346BE'],
			  'phonepe':['PhonePe','assets/phonepe.png','#6738B8'],
			  'gpay':['Google Pay','assets/gpay.png','#3880F1'],
			  'airtel':['Airtel','assets/airtel.png','#D12D1E']
			};
for(let i = 0; i < Object.keys(arr2).length; i++) {
	dom(pMContainer.children[2].children[2],'<div class="paymentModeCard"><img><p></p></div>');
	pMContainer.children[2].children[2].children[i].id = Object.keys(arr2)[i];
	pMContainer.children[2].children[2].children[i].style.backgroundColor = arr2[Object.keys(arr2)[i]][2];
	pMContainer.children[2].children[2].children[i].children[0].src = arr2[Object.keys(arr2)[i]][1];
	pMContainer.children[2].children[2].children[i].children[1].innerHTML = arr2[Object.keys(arr2)[i]][0];
}
var paymentModeCards = document.getElementsByClassName('paymentModeCard');
for(let i = 0; i < paymentModeCards.length; i++) {
	container(paymentModeCards[i], 'column');
	style(paymentModeCards[i], {
		'width': (84 * 100 / 1440).toString() + 'vw',
		'height': (106 * 100 / 1440).toString() + 'vw',
		'padding': (12 * 100 / 1440).toString() + 'vw',
		'border-radius': (15 * 100 / 1440).toString() + 'vw',
		'align-items':'flex-start',
		'justify-content':'space-between',
		'filter': 'drop-shadow(0vw ' + (20 * 100 / 1440).toString()+'vw ' + (20 * 100 / 1440).toString()+'vw #00000040)',
		'cursor':'pointer',
	});
	style(paymentModeCards[i].children[0], {
		'width': (56 * 100 / 1440).toString() + 'vw',
		'height': (56 * 100 / 1440).toString() + 'vw',
		'border-radius': (10 * 100 / 1440).toString() + 'vw',
		'background-color':'#ffffff',
	});
	style(paymentModeCards[i].children[1], {
		'width': (84 * 100 / 1440).toString() + 'vw',
		'font-size':(14 * 100 / 1440).toString() + 'vw',
		'color':'#ffffff',
	});
}
var card = document.getElementById('card');
var amazon = document.getElementById('amazon');
var lazy = document.getElementById('lazy');
var paytm = document.getElementById('paytm');
var simpl = document.getElementById('simpl');
var mobikwik = document.getElementById('mobikwik');
var phonepe = document.getElementById('phonepe');
var gpay = document.getElementById('gpay');
var airtel = document.getElementById('airtel');
card.onclick = function () {};
amazon.onclick = function () {window.location.href = 'paymentDone.php'};
lazy.onclick = function () {window.location.href = 'paymentDone.php'};
paytm.onclick = function () {window.location.href = 'paymentDone.php'};
simpl.onclick = function () {window.location.href = 'paymentDone.php'};
mobikwik.onclick = function () {window.location.href = 'paymentDone.php'};
phonepe.onclick = function () {window.location.href = 'paymentDone.php'};
gpay.onclick = function () {window.location.href = 'paymentDone.php'};
airtel.onclick = function () {window.location.href = 'paymentDone.php'};