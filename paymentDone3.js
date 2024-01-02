import * as main from './main.js';
main.allCSS();
var toPay = JSON.parse(sessionStorage.getItem("total"));
var body = document.getElementsByTagName('Body')[0];
main.dom(body, '<div id="paymentDonePageContainer"></div>');
var pageContainer = document.getElementById('paymentDonePageContainer');
main.container(pageContainer, 'column');
main.style(pageContainer, { 'width': (1440 * 100 / 1440).toString() + 'vw' });
main.dom(pageContainer, '<div id="pDContainer"></div>');
var pDContainer = document.getElementById('pDContainer');
main.container(pDContainer, 'column');
main.style(pDContainer, {
	'width': (330 * 100 / 1440).toString() + 'vw',
	'height': (444 * 100 / 1440).toString() + 'vw',
	'position': 'relative',
	'top': (44 * 100 / 1440).toString() + 'vw',
});
main.dom(pDContainer, '<div></div><div></div>');
main.container(pDContainer.children[0], 'column');
main.style(pDContainer.children[0], {
	'width': (330 * 100 / 1440).toString() + 'vw',
	'height': (330 * 100 / 1440).toString() + 'vw',
	'font-weight': '700',
	'font-size': (28 * 100 / 1440).toString() + 'vw',
});
main.dom(pDContainer.children[0], '<p>Payment Done!</p><img src="assets/OrderConfirmed.png"><p>Order Confirmed!</p>');
main.style(pDContainer.children[0].children[0], {
	'width': (330 * 100 / 1440).toString() + 'vw',
	'height': (64 * 100 / 1440).toString() + 'vw',
	'text-align':'center',
	'color': '#1E5C54',
});
main.style(pDContainer.children[0].children[1], {
	'width': (155 * 100 / 1440).toString() + 'vw',
	'height': (155 * 100 / 1440).toString() + 'vw',
});
main.style(pDContainer.children[0].children[2], {
	'width': (330 * 100 / 1440).toString() + 'vw',
	'height': (64 * 100 / 1440).toString() + 'vw',
	'text-align':'center',
	'margin-top': (41 * 100 / 1440).toString() + 'vw',
	'color': '#1E5C54',
});
pDContainer.children[1].id = 'trackOrderBtn';
var trackOrderBtn = document.getElementById('trackOrderBtn');
trackOrderBtn.classList.add('divBtn');
trackOrderBtn.innerHTML = 'Track Order';
main.style(trackOrderBtn, {
	'width': (330 * 100 / 1440).toString() + 'vw',
	'height': (50 * 100 / 1440).toString() + 'vw',
	'margin-top': (50 * 100 / 1440).toString() + 'vw',
	'background-color': '#1E5C54',
});
trackOrderBtn.onclick = function () {};