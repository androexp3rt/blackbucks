export const varToString = varObj => Object.keys(varObj)[0];
export function removeChildren(a) {
	for (let i = a.children.length - 1; i > 0; i--) {
		a.removeChild(a.children[i]);
	}
}
export function removeAllChildren(a) {
	for (let i = a.children.length - 1; i >= 0; i--) {
		a.removeChild(a.children[i]);
	}
}
export function dom(parent, child) {
	parent.insertAdjacentHTML('beforeend', child);
}
export function domStart(parent, child) {
	parent.insertAdjacentHTML('afterbegin', child);
}
export function style(p, css) {
	if ('container' in css) {
		container(p, css['container']);
		delete css['container'];
	};
	if ('grid' in css) {
		grid(p, css['grid'][0], css['grid'][1], css['grid'][2]);
		delete css['grid'];
	};
	if ('hide' in css) {
		hide(p);
		delete css['hide'];
	};
	if ('width' in css) {
		width(p, css['width']);
		delete css['width'];
	};
	if ('max-width' in css) {
		maxWidth(p, css['max-width']);
		delete css['max-width'];
	};
	if ('height' in css) {
		height(p, css['height']);
		delete css['height'];
	};
	if ('max-height' in css) {
		maxHeight(p, css['max-height']);
		delete css['max-height'];
	};
	if ('padding' in css) {
		padding(p, css['padding']);
		delete css['padding'];
	};
	if ('paddingt' in css) {
		paddingt(p, css['paddingt']);
		delete css['paddingt'];
	};
	if ('paddingb' in css) {
		paddingb(p, css['paddingb']);
		delete css['paddingb'];
	};
	if ('paddingl' in css) {
		paddingl(p, css['paddingl']);
		delete css['paddingl'];
	};
	if ('paddingr' in css) {
		paddingr(p, css['paddingr']);
		delete css['paddingr'];
	};
	if ('paddingh' in css) {
		paddingh(p, css['paddingh']);
		delete css['paddingh'];
	};
	if ('paddingv' in css) {
		paddingv(p, css['paddingv']);
		delete css['paddingv'];
	};
	if ('plwidth' in css) {
		plwidth(p, css['plwidth'][0], css['plwidth'][1]);
		delete css['plwidth'];
	};
	if ('prwidth' in css) {
		prwidth(p, css['prwidth'][0], css['prwidth'][1]);
		delete css['prwidth'];
	};
	if ('phwidth' in css) {
		phwidth(p, css['phwidth'][0], css['phwidth'][1]);
		delete css['phwidth'];
	};
	if ('pvheight' in css) {
		pvheight(p, css['pvheight'][0], css['pvheight'][1]);
		delete css['pvheight'];
	};
	if ('ptheight' in css) {
		ptheight(p, css['ptheight'][0], css['ptheight'][1]);
		delete css['ptheight'];
	};
	if ('pbheight' in css) {
		ptheight(p, css['pbheight'][0], css['pbheight'][1]);
		delete css['pbheight'];
	};
	if ('pwh' in css) {
		pwh(p, css['pwh'][0], css['pwh'][1], css['pwh'][2]);
		delete css['pwh'];
	};
	if ('ppwh' in css) {
		ppwh(p, css['ppwh'][0], css['ppwh'][1], css['ppwh'][2]);
		delete css['ppwh'];
	};
	if ('margin' in css) {
		margin(p, css['margin']);
		delete css['margin'];
	};
	if ('margint' in css) {
		margint(p, css['margint']);
		delete css['margint'];
	};
	if ('marginb' in css) {
		marginb(p, css['margint']);
		delete css['margint'];
	};
	if ('marginb' in css) {
		marginb(p, css['margint']);
		delete css['margint'];
	};
	if ('marginl' in css) {
		marginl(p, css['marginl']);
		delete css['marginl'];
	};
	if ('marginr' in css) {
		marginr(p, css['marginr']);
		delete css['marginr'];
	};
	if ('marginh' in css) {
		marginh(p, css['marginh']);
		delete css['marginh'];
	};
	if ('marginv' in css) {
		marginv(p, css['marginv']);
		delete css['marginv'];
	};
	if ('border' in css) {
		border(p, css['border'][0], css['border'][1]);
		delete css['border'];
	};
	if ('bordert' in css) {
		bordert(p, css['bordert'][0], css['bordert'][1]);
		delete css['bordert'];
	};
	if ('borderl' in css) {
		borderl(p, css['borderl'][0], css['borderl'][1]);
		delete css['borderl'];
	};
	if ('borderb' in css) {
		borderb(p, css['borderb'][0], css['borderb'][1]);
		delete css['borderb'];
	};
	if ('borderr' in css) {
		borderr(p, css['borderr'][0], css['borderr'][1]);
		delete css['borderr'];
	};
	if ('border-radius' in css) {
		if (css['border-radius'].length == 1) {
			borderRadius(p, css['border-radius'][0]);
		}
		else if (css['border-radius'].length == 2) {
			borderRadius(p, css['border-radius'][0], css['border-radius'][1]);
		}
		else if (css['border-radius'].length == 3) {
			borderRadius(p, css['border-radius'][0], css['border-radius'][1], css['border-radius'][2]);
		}
		else {
			borderRadius(p, css['border-radius'][0], css['border-radius'][1], css['border-radius'][2], css['border-radius'][3]);
		}
		delete css['border-radius'];
	};
	if ('font-size' in css) {
		if (css['font-size'].length == 2) {
			fontSize(p, css['font-size'][0], css['font-size'][1]);
		}
		else {
			fontSize(p, css['font-size'][0], css['font-size'][1], css['font-size'][2]);
		}
		delete css['font-size'];
	};
	var pr = Object.keys(css);
	for (let i = 0; i < pr.length; i++) { p.style.setProperty(pr[i], css[pr[i]]) };
}
export function width(p, w) {
	p.style.width = (w * 100 / 1440).toString() + 'vw';
	p.style.minWidth = (w * 100 / 1440).toString() + 'vw';
}
export function maxWidth(p, w) { p.style.maxWidth = (w * 100 / 1440).toString() + 'vw' }
export function height(p, h) {
	p.style.height = (h * 100 / 1440).toString() + 'vw';
	p.style.minHeight = (h * 100 / 1440).toString() + 'vw';
}
export function maxHeight(p, h) { p.style.maxHeight = (h * 100 / 1440).toString() + 'vw' }
export function padding(p, pa) { p.style.padding = (pa * 100 / 1440).toString() + 'vw' }
export function paddingt(p, pt) { p.style.paddingTop = (pt * 100 / 1440).toString() + 'vw' }
export function paddingb(p, pb) { p.style.paddingBottom = (pb * 100 / 1440).toString() + 'vw' }
export function paddingl(p, pl) { p.style.paddingLeft = (pl * 100 / 1440).toString() + 'vw' }
export function paddingr(p, pr) { p.style.paddingRight = (pr * 100 / 1440).toString() + 'vw' }
export function paddingh(p, ph) {
	p.style.paddingLeft = (ph * 100 / 1440).toString() + 'vw';
	p.style.paddingRight = (ph * 100 / 1440).toString() + 'vw';
}
export function paddingv(p, pv) {
	p.style.paddingTop = (pv * 100 / 1440).toString() + 'vw';
	p.style.paddingBottom = (pv * 100 / 1440).toString() + 'vw';
}
export function plwidth(p, pl, w) { w = w - pl; width(p, w); paddingl(p, pl) };
export function prwidth(p, pr, w) { w = w - pr; width(p, w); paddingl(p, pr) }
export function phwidth(p, pd, w) { w = w - (pd * 2); width(p, w); paddingh(p, pd) }
export function pvheight(p, pd, h) { h = h - (pd * 2); height(p, h); paddingv(p, pd) }
export function ptheight(p, pt, h) { h = h - pt; height(p, h); paddingt(p, pt) };
export function pbheight(p, pb, h) { h = h - pb; height(p, h); paddingb(p, pb) };
export function pwh(p, pd, w, h) { w = w - (pd * 2); h = h - (pd * 2); width(p, w); height(p, h); padding(p, pd) }
export function ppwh(p, ph, pv, w, h) { w = w - (ph * 2); h = h - (pv * 2); width(p, w); height(p, h); paddingh(p, ph); paddingv(p, pv) }
export function margin(p, m) { p.style.margin = (m * 100 / 1440).toString() + 'vw' }
export function margint(p, mt) { p.style.marginTop = (mt * 100 / 1440).toString() + 'vw' }
export function marginb(p, mb) { p.style.marginBottom = (mb * 100 / 1440).toString() + 'vw' }
export function marginl(p, ml) { p.style.marginLeft = (ml * 100 / 1440).toString() + 'vw' }
export function marginr(p, mr) { p.style.marginRight = (mr * 100 / 1440).toString() + 'vw' }
export function marginh(p, mh) { marginl(p, mh); marginr(p, mh) }
export function marginv(p, mv) { margint(p, mv); marginb(p, mv) }
export function border(p, b, t) { p.style.border = (b * 100 / 1440).toString() + 'vw ' + t.toString() }
export function bordert(p, bt, t) { p.style.borderTop = (bt * 100 / 1440).toString() + 'vw ' + t.toString() }
export function borderl(p, bl, t) { p.style.borderLeft = (bl * 100 / 1440).toString() + 'vw ' + t.toString() }
export function borderr(p, br, t) { p.style.borderRight = (br * 100 / 1440).toString() + 'vw ' + t.toString() }
export function borderb(p, bb, t) { p.style.borderBottom = (bb * 100 / 1440).toString() + 'vw ' + t.toString() }

export function borderRadius(p, tl, bl, br, tr) {
	if (tr === undefined && bl === undefined && br === undefined) { tr = bl = br = tl };
	if (br === undefined && tr === undefined) { br = bl; tr = tl };
	p.style.borderTopLeftRadius = (tl * 100 / 1440).toString() + 'vw';
	p.style.borderTopRightRadius = (tr * 100 / 1440).toString() + 'vw';
	p.style.borderBottomLeftRadius = (bl * 100 / 1440).toString() + 'vw';
	p.style.borderBottomRightRadius = (br * 100 / 1440).toString() + 'vw';
}

export function allCSS() {
	var head = document.getElementsByTagName('Head')[0];
	dom(head, '<style>* { margin: 0; padding: 0; font-family: "Montserrat"; } body { width: 100vw; margin: 0; padding: 0; }</style>');
}
export function hide(p) { p.style.display = 'none' };
export function show(p) { p.style.display = 'flex' };
export function fontSize(p, f, w, l) {
	if (l === undefined) { l = f + 5 }
	p.style.fontStyle = 'normal';
	p.style.fontWeight = w;
	p.style.fontSize = (f * 100 / 1440).toString() + 'vw';
	p.style.lineHeight = (l * 100 / 1440).toString() + 'vw';
	p.style.letterSpacing = '-0.015em';
}
export function container(p, r) {
	p.style.display = 'flex';
	p.style.flexDirection = r;
	p.style.alignItems = 'center';
	p.style.justifyContent = 'center';
}
export function grid(p, g, cg, cw) {
	p.style.display = 'grid';
	p.style.gridGap =(g*100/1440).toString()+'vw '+(cg*100/1440).toString()+'vw';
	var ncw = '';
	for (let i = 0; i < cw.length; i++) {
		ncw += (cw[i]*100/1440).toString()+'vw ';
	}
	p.style.gridTemplateColumns = ncw;
}
export function hover(p, bc, c, bb, bl) {
	var ogColor = [p.style.backgroundColor, p.style.color, getComputedStyle(p, null).getPropertyValue('border')];
	p.onmouseover = function () {
		p.style.backgroundColor = bc;
		p.style.color = c;
		if (bb === undefined) {
			var b = 0;
			var t = '';
		}
		else {
			var b = bb[0];
			var t = bb[1];
		};
		borderb(p, b, t);
		if (bl === undefined) {
			var b = 0;
			var t = '';
		}
		else {
			var b = bl[0];
			var t = bl[1];
		};
		borderl(p, b, t);
	}
	function createHandler(p, param) {
		return function () {
			p.style.backgroundColor = param[0];
			p.style.color = param[1];
			p.style.border = param[2];
		}
	}
	p.onmouseout = createHandler(p, ogColor);
	p.onclick = createHandler(p, ogColor);
}
export function myModal(p) {
	style(p, {
		'hide': '', /* Hidden by default */
		'container': 'row',
		'position': 'fixed', /* Stay in place */
		'z-index': '1', /* Sit on top */
		'left': '0',
		'top': '0',
		'width': 1440, /* Full width */
		'height': 720, /* Full height */
		'overflow': 'auto', /* Enable scroll if needed */
		'background-color': 'rgb(0,0,255)', /* Fallback color */
		'background-color': 'rgba(0,0,255,0.4)', /* Black w/ opacity */
	});
}
export function modalBody(p) {
	style(p, {
		'container': 'column',
		'width': 500,
		'height': 569,
		'border-radius': [45],
		'overflow': 'hidden'
	});
	style(p.children[0], {
		'container': 'column',
		'width': 500,
		'height': 470,
		'border-radius': [45, 0],
		'position': 'relative',
		'color': '#FFFFFF',
		'background-color': 'orange',
	});
	style(p.children[0].getElementsByTagName('img')[1], {
		'container': 'row',
		'width': 500,
		'height': 321,
		'border-radius': [45],
		'position': 'absolute',
		'top': '0',
		'left': '0',
		'box-shadow': '0vw ' + (2 * 100 / 1440).toString() + 'vw ' + (2 * 100 / 1440).toString() + 'vw ' + (2 * 100 / 1440).toString() + 'vw ' + 'rgba(0, 0, 0, 0.2)',
		'background-color': '#FFFFFF',
	});
	style(p.children[0].getElementsByTagName('h2')[0], {
		'font-size': [24, 700, 36],
		'width': 500,
		'position': 'absolute',
		'top': (328 * 100 / 1440).toString() + 'vw',
		'text-align': 'center',
		'color': '#1E5C54',
	});
	style(p.children[0].getElementsByTagName('p')[0], {
		'font-size': [18, 400, 30],
		'width': 330,
		'marginb': 50,
		'position': 'absolute',
		'top': (366 * 100 / 1440).toString() + 'vw',
		'text-align': 'center',
		'color': '#FFFFFF',
	});

	close(p.children[0].children[0]);

	style(p.children[1], {
		'container': 'row',
		'phwidth': [31.5, 500],
		'height': 99,
		'border-radius': [0, 45],
		'font-size': [20, 700],
		'color': '#FFFFFF',
		'justify-content': 'space-between',
		'background-color': '#1E5C54',
	});
	style(p.children[1].children[0], {
		'container': 'row',
		'font-size': [22, 600],
		'color': '#FFFFFF',
	});
	container(p.children[1].children[1], 'row');
	divBtn(p.children[1].children[1]);
}
export function modal2Body(p) {
	style(p, {
		'container': 'column',
		'width': 500,
		'height': 543,
		'border': [3, 'solid #D9D9D9'],
		'border-radius': [45],
	});
	style(p.children[0], {
		'container': 'column',
		'phwidth': [42, 500],
		'height': 444,
		'border-radius': [45, 0],
		'position': 'relative',
		'color': '#000000',
		'justify-content': 'flex-start',
		'background-color': '#FFFFFF',
	});
	style(p.children[0].getElementsByTagName('h3')[0], {
		'width': 416,
		'font-size': [25, 700, 25],
		'position': 'absolute',
		'top': (36 * 100 / 1440).toString() + 'vw',
		'color': '#1E5C54',
	});
	style(p.children[0].getElementsByTagName('p')[0], {
		'phwidth': [18, 416],
		'font-size': [22, 600],
		'position': 'absolute',
		'top': (79 * 100 / 1440).toString() + 'vw',
		'color': '#1E5C54',
		'text-align': 'center',
	});
	style(p.children[0].children[3], {
		'container': 'row',
		'phwidth': [18, 416],
		'position': 'absolute',
		'top': (126 * 100 / 1440).toString() + 'vw',
		'justify-content': 'space-between',
	});
	// paragraph
	fontSize(p.children[0].children[3].getElementsByTagName('p')[0], 18, 600, 22);
	//div ISSContainer
	style(p.children[0].children[3].children[1], {
		'container': 'row',
		'width': 170,
		'justify-content': 'space-between',
	});
	//smallLarge container
	var slC = p.children[0].children[3].children[1].children;
	for (let i = 0; i < slC.length; i++) {
		container(slC[i], 'column');
		width(slC[i], 80);
		style(slC[i].getElementsByTagName('img')[0], {
			'border': [1, 'solid #000000'],
			'width': 80,
			'border-radius': [60],
			'marginb': 15,
			'text-align': 'center',
		});
		style(slC[i].getElementsByTagName('p')[0], {
			'font-size': [28, 600, 22],
			'text-align': 'center',
		});
	}
	//footer
	style(p.children[1], {
		'container': 'row',
		'phwidth': [31.5, 500],
		'border-radius': [0, 45],
		'font-size': [20, 700],
		'justify-content':'space-between',
	});
	style(p.children[1].children[0], {
		'container': 'row',
		'color': '#FFFFFF',
		'font-size': [22, 600],
	});
	container(p.children[1].children[1], 'row');
	divBtn(p.children[1].children[1]);
}
export function selected(p) {
	style(p, {
		'border': [1, 'solid orange !important'],
		'color': 'orange',
	});
}
export function alertBody(p) {
	style(p, {
		'container': 'column',
		'phwidth': [42, 500],
		'height': 150,
		'border': [3, 'solid #D9D9D9'],
		'border-radius': [45],
		'position': 'relative',
		'color': '#000000',
		'justify-content': 'flex-start',
		'background-color': '#FFFFFF'
	});
	style(p.getElementsByTagName('h2')[0], {
		'font-size': [24, 700, 36],
		'position': 'absolute',
		'top': (10 * 100 / 1440).toString() + 'vw',
		'text-align': 'flex-start',
		'color': '#1E5C54'
	});
	style(p.getElementsByTagName('p')[0], {
		'width': 330,
		'font-size': [220, 400, 30],
		'position': 'absolute',
		'top': (60 * 100 / 1440).toString() + 'vw',
		'text-align': 'center',
		/*'margin-bottom': (50 * 100)/1440).toString()+'vw',*/
	});
}
export function dropPopupBody(p) {
	style(p, {
		'container': 'column',
		'width': 130,
		'height': 124,
		'position': 'absolute',
		'top': (94 * 100 / 1440).toString() + 'vw',
		'left': (655 * 100 / 1440).toString() + 'vw',
	});
	for (let i = 0; i < p.children.length; i++) {
		style(p.children[i], {
			'container': 'column',
			'width': 130,
			'height': 124,
			'borderb': [1, 'solid #D9D9D9'],
			'font-size': [20, 400],
			'color': '#FFFFFF',
			'cursor': 'pointer',
			'background-color': '#1E5C54',
		});
	}
}
export function close(p) {
	style(p, {
		'container': 'row',
		'width': 30,
		'height': 30,
		'position': 'absolute',
		'top': (16 * 100 / 1440).toString() + 'vw',
		'right': (24 * 100 / 1440).toString() + 'vw',
		'z-index': '1',
		'border-radius': [60],
		'background-color': 'rgba(125,125,125,0.1)',
		'cursor': 'pointer',
	});
	style(p.getElementsByTagName('img')[0], {
		'width': 16,
		'height': 16,
	});
	hover(p, 'rgba(255,255,255,0.5)', '#1E5C54')
}
export function divBtn(p) {
	style(p, {
		'container': 'row',
		'font-size': [18, 600],
		'border-radius': [10],
		'cursor': 'pointer',
	});
	for (let i = 0; i < p.getElementsByTagName('img').length; i++) {
		width(p.getElementsByTagName('img')[i], 21);
		marginl(p.getElementsByTagName('img')[i], 5);
	};
	hover(p, 'rgba(0,0,0,0.2)', '#1E5C54');
}
export function btn1(p) {
	style(p, {
		'container': 'row',
		'font-size': [12, 400, 15],
		'border': [0, ''],
		'border-radius': [10],
		'cursor': 'pointer',
		'color': '#FFFFFF',
		'background-color': '#1E5C54',
	});
}
export function btn2(p) {
	style(p, {
		'container': 'row',
		'font-size': [12, 400, 15],
		'border': [1, 'solid #1E5C54'],
		'border-radius': [10],
		'cursor': 'pointer',
		'color': '#1E5C54',
		'background-color': '#FFFFFF',
	});
}
export function error_container() {
	style(p, {
		'container': 'row',
		'phwidth': [5, 524],
		'height': 21,
		'marginb': 50,
		'font-size': [16, 400, 24],
		'color': 'red',
	});
}
export function cartPreviewItem(p) {
	container(p, 'column');
	width(p, 335);
	height(p, 70);
	marginb(p, 50);
	p.style.alignItems = 'flex-start';

	var para = p.children[0];
	container(para, 'row');
	width(para, 335);
	height(para, 13);
	marginb(para, 23);
	fontSize(para, 14, 600, 17);
	style(para, {
		'align-items': 'flex-start',
		'justify-content': 'flex-start',
	});
	var pUC = p.children[1];
	container(pUC, 'row');
	width(pUC, 335);
	height(pUC, 34);
	style(pUC, { 'justify-content': 'space-between' });
	var pC = pUC.children[0];
	fontSize(pC, 18, 600, 22);
	// var price = pC.children[0];
	// fontSize(price, 18, 600, 22);

	var uC = pUC.children[1];
	container(uC, 'row');
	phwidth(uC, 14.5, 112);
	height(uC, 34);
	border(uC, 1, 'solid #D9D9D9');
	borderRadius(uC, 6);
	style(uC, {
		'filter': 'drop-shadow(0vw ' + (4 * 100 / 1440).toString() + 'vw ' + (4 * 100 / 1440).toString() + 'vw #00000040)',
		'background-color': '#FFFFFF',
		'justify-content': 'space-between',
	});
	var minusPlus = uC.getElementsByTagName('div');
	for (let i = 0; i < minusPlus.length; i++) {
		style(minusPlus[i], {
			'container': 'row',
			'width': 14,
			'height': 14,
			'cursor': 'pointer'
		});
		style(minusPlus[i].children[0], { 'width': 14 });
	}
	var u = uC.getElementsByTagName('p')[0];
	style(u, {
		'container': 'row',
		'width': 17,
		'height': 15,
		'font-size': [24, 500],
		'cursor': 'pointer',
		'color': '#1E5C54',
	});
}
export function cartPreviewItemEmpty(p) {
	style(p, {
		'container': 'column',
		'width': 335,
		'height': 70,
		'marginb': 50,
		'align-items': 'flex-start',
		'justify-content': 'flex-start',
	});
	style(p.getElementsByTagName('p'), {
		'container': 'column',
		'width': 335,
		'height': 51,
		'marginv': 11,
		'font-size': [18, 600, 18],
	});
}
export function pageContainer(p) {
	style(p, {
		'container': 'column',
		'align-items': 'flex-start',
		'justify-content': 'flex-start',
	});
}
//-------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
//--------------------------------------------------Navbar--------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
export function navbar(p) {
	///////////////////////////---------navbar-----------/////////////////////////
	domStart(p, '<div id="navbar"></div>');
	var navbar = document.getElementById('navbar');
	var navMenuList = { 'Home': 'home.php', 'Menu': 'menu.php', 'Merchandise': '', 'Travel': 'travel.php', 'About Us': 'aboutus.php' };
	dom(navbar, '<img><div></div><div></div>');
	navbar.children[0].src = 'assets/logoText.png';
	dom(navbar.children[1], '<a></a><a></a><a></a><a></a><a></a>');
	for (let i = 0; i < navbar.children[1].children.length; i++) {
		if (i == 2) {
			navbar.children[1].children[i].id = 'merchandiseBtn';
		}
		else {
			navbar.children[1].children[i].href = navMenuList[Object.keys(navMenuList)[i]];
		}
		navbar.children[1].children[i].innerHTML = Object.keys(navMenuList)[i];
	}
	var merchandiseBtn = document.getElementById('merchandiseBtn');
	dom(navbar.children[2], '<div></div><div></div>');
	dom(navbar.children[2].children[0], '<button></button><button></button>');
	var findStoreBtn = navbar.children[2].children[0].children[0];
	findStoreBtn.innerHTML = 'FIND A STORE';
	findStoreBtn.id = 'findStoreBtn';
	var orderNowBtn = navbar.children[2].children[0].children[1];
	orderNowBtn.innerHTML = 'ORDER NOW';
	orderNowBtn.id = 'orderNowBtn';
	dom(navbar.children[2].children[1], '<button></button>');
	var loginBtn = navbar.children[2].children[1].children[0];
	loginBtn.innerHTML = 'Login/SignUp';
	loginBtn.id = 'loginBtn';
	///////////////////////////---------Popup-----------/////////////////////////
	dom(p, '<div id="merchandisePopup"></div>');
	var dropDown = document.getElementById('merchandisePopup');
	dom(dropDown, '<div><span></span><span></span></div');
	dropDown.children[0].children[0].innerHTML = 'Men';
	dropDown.children[0].children[0].id = 'men';
	dropDown.children[0].children[1].innerHTML = 'Women';
	dropDown.children[0].children[1].id = 'women';
	///////////////////////////---------CSS-----------/////////////////////////
	container(navbar, 'row');
	phwidth(navbar, 79, 1440);
	height(navbar, 116);
	borderb(navbar, 1, 'solid #000000');

	var logo = navbar.children[0];
	width(logo, 304);
	height(logo, 110);

	var navMenuContainer = navbar.children[1]
	container(navMenuContainer, 'row');
	width(navMenuContainer, 500);
	height(navMenuContainer, 110);
	paddingh(navMenuContainer, 107);
	style(navMenuContainer, { 'justify-content': 'space-between' });
	var widths = [48, 47, 105, 48, 75];
	var a = navMenuContainer.getElementsByTagName('a');
	for (let i = 0; i < a.length; i++) {
		container(a[i], 'row');
		width(a[i], widths[i]);
		height(a[i], 20);
		fontSize(a[i], 16, 400, 20);
		style(a[i], {
			'color': '#1E5C54',
			'text-decoration': 'none',
			'text-align': 'center',
		});
		hover(a[i], '#FFFFFF', '#EAA923', [2, 'solid #EAA923']);
	}
	var navButtonContainer = navbar.children[2];
	style(navButtonContainer, {
		'container': 'column',
		'width': 270,
		'height': 89,
	});
	style(navButtonContainer.children[0], {
		'container': 'row',
		'width': 270,
		'height': 44.5,
		'align-items': 'flex-start',
		'justify-content': 'space-between'
	});
	container(navbar.children[2].children[1], 'row');
	width(navbar.children[2].children[1], 271);
	height(navbar.children[2].children[1], 44.5);
	style(navbar.children[2].children[1], {
		'align-items': 'flex-end',
		'justify-content': 'flex-end'
	});
	for (let i = 0; i < navbar.children[2].children.length; i++) {
		var x = navbar.children[2].children[i];
		for (let j = 0; j < x.getElementsByTagName('button').length; j++) {
			width(x.getElementsByTagName('button')[j], 109);
			height(x.getElementsByTagName('button')[j], 33);
			btn1(x.getElementsByTagName('button')[j]);
		}
	}
	myModal(dropDown);
	style(dropDown, { 'background-color': 'rgba(0,0,0,0)' });
	dropPopupBody(dropDown.children[0]);
	///////////////////////////---------JS-----------/////////////////////////
	loginBtn.onclick = function () {
		window.location.href = 'login.php';
	}
	findStoreBtn.onclick = function () {
		window.location.href = 'findStore.php';
	}
	orderNowBtn.onclick = function () {
		window.location.href = 'menu.php';
	}
	merchandiseBtn.onclick = function () {
		dropDown.style.display = 'flex';
	}
	window.onclick = function (event) {
		if (event.target == dropDown) {
			dropDown.style.display = "none";
		}
	}
	men = document.getElementById('men');
	women = document.getElementById('women');
	men.onclick = function () {
		dropDown.style.display = "none";
		sessionStorage.setItem("indicator", 'men');
		window.location.href = 'merchandise.php';
		return false;
	}
	women.onclick = function () {
		dropDown.style.display = "none";
		sessionStorage.setItem("indicator", 'women');
		window.location.href = 'merchandise.php';
		return false;
	}
}
//-------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
//--------------------------------------------------Menu--------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------//
export function menuHeader(p) {
	container(p, 'row');
	width(p, 1440);
	height(p, 366);
	borderb(p, 50, 'solid #1E5C54');
	style(p, {
		'background-image': 'url(assets/menuBanner.png)',
		'background-size': 'contain',
	});

	container(p.children[0], 'column');
	width(p.children[0], 1440);
	height(p.children[0], 366);
	style(p.children[0], {
		'background-color': 'rgba(0,0,0,0.7)',
		'color': '#FFFFFF',
		'justify-content': 'flex-start',
	});

	width(p.children[0].children[0], 524);
	fontSize(p.children[0].children[0], 32, 700, 39);
	style(p.children[0].children[0], {
		'position': 'relative',
		'top': (110 * 100 / 1440).toString() + 'vw',
		'text-align': 'center'
	});

	container(p.children[0].children[1], 'row');
	width(p.children[0].children[1], 524);
	height(p.children[0].children[1], 36);
	borderRadius(p.children[0].children[1], 10);
	style(p.children[0].children[1], {
		'position': 'relative',
		'top': (180 * 100 / 1440).toString() + 'vw',
	});

	phwidth(p.children[0].children[1].children[0], 60, 524);
	height(p.children[0].children[1].children[0], 36);
	fontSize(p.children[0].children[1].children[0], 18, 400);
	borderRadius(p.children[0].children[1].children[0], 10);
	style(p.children[0].children[1].children[0], {
		'background-color': 'rgba(255,255,255,0.3)',
		'color': '#FFFFFF',
		'border': 'none',
	});
	container(p.children[0].children[1].children[1], 'row');
	width(p.children[0].children[1].children[1], 56);
	height(p.children[0].children[1].children[1], 36);
	borderRadius(p.children[0].children[1].children[1], 10, 10, 0, 0);
	style(p.children[0].children[1].children[1], {
		'position': 'absolute',
		'top': 0,
		'left': 0,
		'background-color': '#1E5C54',
		'color': '#FFFFFF',
	});
	width(p.children[0].children[1].children[1].children[0], 30);
	height(p.children[0].children[1].children[1].children[0], 30);
}
export function menuBody(p) {
	// menuBody
	style(p, {
		'container':'row',
		'phwidth':[66, 1440],
		'margint': 37,
		'height': 900,
		'overflow': 'hidden',
		'background-color': '#FFFFF',
		'align-items': 'flex-start',
		'justify-content': 'space-between',
	});
	var listC = p.children[0];
	var itemC = p.children[1];
	var prevC = p.children[2];
	menuListC(listC);
	menuItemC(itemC);
	menuPrevC(prevC);
}
export function menuListC(p) {
	style(p, {
		'container':'column',
		'width':222,
		'paddingt':36,
		'height':900,
		'justify-content': 'flex-start',
		'align-items': 'flex-start',
	});
	var listItems = p.children;
	for(let i = 0; i < listItems.length; i++) {
		style(listItems[i], {
			'container':'column',
			'width':222,
			'justify-content': 'flex-start',
			'align-items': 'flex-start',
		});
		var listHeaders = listItems[i].children[0];
		style(listHeaders, {
			'container':'column',
			'width':222,
			'justify-content': 'flex-start',
			'align-items': 'flex-start',
			'font-size':[20,900],
			'color': '#1E5C54',
		});
		var listContent = listItems[i].children[1];
		style(listContent, {
			'container':'column',
			'width':222,
			'justify-content': 'flex-start',
			'align-items': 'flex-start',
			'font-size':[20,900],
			'color': '#1E5C54',
		});
		var listContentRow = listContent.children;
		for (let i = 0; i < listContentRow.length; i++) {
			var a = listContentRow[i];
			style(a, {
				'container':'row',
				'width':222,
				'paddingv':5,
				'text-decoration': 'none',
				'justify-content': 'flex-start',
			});
			hover(a, '#FFFFFF', '#EAA923', [0,''],[3, 'solid #EAA923']);

			style(a.children[0], {
				'container':'row',
				'plwidth':[10,219],
				'font-size':[16, 700, 23],
				'color': '1E5C54',
				'justify-content': 'flex-start',
				'align-items': 'flex-start',
			});
		}
	}
}
export function menuItemC(p) {
	style(p, {
		'container':'column',
		'width':560,
		'height': 900,
		'font-size':[20, 900],
		'justify-content': 'flex-start',
		'align-items': 'flex-start',
		'overflow-y': 'scroll',
	});
	//listItemContainer
	var listItemContainers = p.children;
	for(let i = 0; i < listItemContainers.length; i++) {
		var listItemContainer = listItemContainers[i];
		style(listItemContainer, {
			'container':'column',
			'width':'545',
			'justify-content': 'flex-start',
			'align-items': 'flex-start',
		});
		//h3
		var listItemName = listItemContainer.children[0];
		width(listItemName, 545);
		height(listItemName, 72);
		fontSize(listItemName, 32, 600, 72);
		//grid
		var listItemGrid = listItemContainer.children[1];
		width(listItemGrid, 545);
		marginb(listItemGrid, 32);
		grid(listItemGrid, 60, 45, [250, 250]);
		//subMenuItem
		for (let i = 0; i < listItemGrid.children.length; i++) {
			var sMI = listItemGrid.children[i];
			//subMenuItem image
			container(sMI, 'column');
			width(sMI, 250);
			width(sMI.getElementsByTagName('img')[0], 250);
			height(sMI.getElementsByTagName('img')[0], 191);
			//subMenuItem name
			width(sMI.getElementsByTagName('h3')[0], 250);
			height(sMI.getElementsByTagName('h3')[0], 28);
			margint(sMI.getElementsByTagName('h3')[0], 4);
			fontSize(sMI.getElementsByTagName('h3')[0], 16, 700, 28);
			sMI.getElementsByTagName('h3')[0].style.textAlign = 'center';
			//subMenuItem desc
			container(sMI.getElementsByTagName('p')[0], 'row');
			width(sMI.getElementsByTagName('p')[0], 250);
			height(sMI.getElementsByTagName('p')[0], 83);
			fontSize(sMI.getElementsByTagName('p')[0], 12, 400, 30);
			sMI.getElementsByTagName('h3')[0].style.color = 'rgba(0, 0, 0, 0.8)';
			//subMenuItem btn and price container
			var sMIFooter = sMI.getElementsByTagName('div')[0];
			container(sMIFooter, 'row');
			width(sMIFooter, 250);
			height(sMIFooter, 33);
			margint(sMIFooter, 12);
			sMIFooter.style.justifyContent = 'space-between';
			//subMenuItem btn
			container(sMIFooter.children[0], 'row');
			width(sMIFooter.children[0], 130);
			height(sMIFooter.children[0], 33);
			fontSize(sMIFooter.children[0], 12, 500, 15);
			style(sMIFooter.children[0], {
				'color': '#FFFFFF',
				'background-color':'#1E5C54',
				'text-align': 'center',
			});
			divBtn(sMIFooter.children[0]);
			//subMenuItem price
			fontSize(sMIFooter.children[1], 22, 600);
			sMIFooter.children[1].style.textAlign = 'center';
		}
	}
}
export function menuPrevC(p) {
	style(p, {
		'container':'column',
		'width': 418,
		'margint': 36,
		'border-radius': [40],
		'border': [3, 'solid #D9D9D9'],
		'justify-content': 'flex-start',
		'align-items': 'flex-start',
	});
	var cartPreviewHeader = p.children[0];
	style(cartPreviewHeader, {
		'container':'row',
		'phwidth':[39,418],
		'paddingt':37,
		'font-size':[16,700,20],
		'color': '#1E5C54',
		'justify-content': 'flex-start',
		'align-items': 'flex-start',
	});
	var cartPreviewBody = p.children[1];
	style(cartPreviewBody, {
		'container':'column',
		'width': 353,
		'marginl': 44,
		'marginr': 21,
		'margint': 24,
		'maxHeight': 380,
		'overflow-y': 'scroll',
		'justify-content': 'flex-start',
		'align-items': 'flex-start',
	});
	var cPICs = cartPreviewBody.children;
	for (let i = 0; i < cPICs.length; i++) {
		var cPIC = cPICs[i];
		container(cPIC, 'column');
		width(cPIC, 335);
		height(cPIC, 70);
		marginb(cPIC, 50);
		cPIC.style.alignItems = 'flex-start';

		var para = cPIC.children[0];
		container(para, 'row');
		width(para, 335);
		height(para, 13);
		marginb(para, 23);
		fontSize(para, 14, 600, 17);
		style(para, {
			'align-items': 'flex-start',
			'justify-content': 'flex-start',
		});
		var pUC = cPIC.children[1];
		container(pUC, 'row');
		width(pUC, 335);
		height(pUC, 34);
		style(pUC, { 'justify-content': 'space-between' });
		var pC = pUC.children[0];
		fontSize(pC, 18, 600, 22);
		// var price = pC.children[0];
		// fontSize(price, 18, 600, 22);

		var uC = pUC.children[1];
		container(uC, 'row');
		phwidth(uC, 14.5, 112);
		height(uC, 34);
		border(uC, 1, 'solid #D9D9D9');
		borderRadius(uC, 6);
		style(uC, {
			'filter': 'drop-shadow(0vw ' + (4 * 100 / 1440).toString() + 'vw ' + (4 * 100 / 1440).toString() + 'vw #00000040)',
			'background-color': '#FFFFFF',
			'justify-content': 'space-between',
		});
		var minusPlus = uC.getElementsByTagName('div');
		for (let i = 0; i < minusPlus.length; i++) {
			style(minusPlus[i], {
				'container': 'row',
				'width': 14,
				'height': 14,
				'cursor': 'pointer'
			});
			style(minusPlus[i].children[0], { 'width': 14 });
		}
		var u = uC.getElementsByTagName('p')[0];
		style(u, {
			'container': 'row',
			'width': 17,
			'height': 15,
			'font-size': [24, 500],
			'cursor': 'pointer',
			'color': '#1E5C54',
		});
	}
	var cartPreviewFooter = p.children[2];
	style(cartPreviewFooter, {
		'container': 'row',
		'phwidth': [33, 418],
		'height': 84,
		'color': '#FFFFFF',
		'background-color': '#1E5C54',
		'font-size': [20,700],
		'border-radius': [0,40],
		'justify-content': 'space-between',
	});
	var countImagePriceC = cartPreviewFooter.children[0];
	style(countImagePriceC, {
		'container': 'row',
		'width': 222,
		'height': 57,
		'justify-content': 'flex-start',
	});
	var countImageC = countImagePriceC.children[0];
	style(countImageC, {
		'container': 'row',
		'width': 42,
		'height': 57,
		'position':'relative',
	});
	var count = countImageC.children[0];
	style(count, {
		'container':'row',
		'width': 30,
		'height': 30,
		'position': 'absolute',
		'top': 0,
		'left': (10 * 100 / 1440).toString+'vw',
		'font-size': [18,600,22],
		'color': '#FFFFFF',
		'z-index': 1,
		'text-align': 'center',
		'background-image': 'url(assets/circle.png)',
		'background-size': 'contain',
	});
	var image = countImageC.children[1];
	style(image, {
		'container':'row',
		'width': 42,
		'height': 41,
		'position': 'absolute',
		'bottom': 0,
		'left': 0,
	});
	var price = countImagePriceC.children[1];
	style(price, {
		'marginl': 10,
		'font-size': [22,600],
	});
	var viewcartBtn = cartPreviewFooter.children[1];
	style(viewcartBtn, {
		'phwidth': [10, 130],
		'height': 30,
		'background-color': '#1E5C54',
	});
	divBtn(viewcartBtn);
	hover(viewcartBtn, 'rgba(255,255,255,0.5)','#1E5C54');
}
