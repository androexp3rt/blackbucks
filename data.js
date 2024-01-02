var menuListData = {
	'BEVERAGES': {
		'SMOOTHIES': {
			'Coco Banana': ['assets/subMenuItem.png', 'Coco Banana', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '500'],
			'Green Smoothie': ['assets/subMenuItem.png', 'Green Smoothie', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '400'],
			'Mixed Berry': ['assets/subMenuItem.png', 'Mixed Berry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '300'],
			'Chiku Papaya': ['assets/subMenuItem.png', 'Chiku Papaya', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
		},
		'ICED COFFEE': {
			'Iced Cappuccino': ['assets/subMenuItem.png', 'Iced Cappuccino', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '300'],
			'Iced Latte': ['assets/subMenuItem.png', 'Iced Latte', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Iced Mocha': ['assets/subMenuItem.png', 'Iced Mocha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Iced Americano': ['assets/subMenuItem.png', 'Iced Americano', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
		},
		'FRUIT COOLERS': {
			'Peach': ['assets/subMenuItem.png', 'Peach', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Mango & Passion': ['assets/subMenuItem.png', 'Mango & Passion', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
		},
		'CREAMY COOLERS': {
			'Double Chocolate': ['assets/subMenuItem.png', 'Double Chocolate', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Strawberry/Vanilla': ['assets/subMenuItem.png', 'Strawberry/Vanilla', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Oreo/Kitkat Shake': ['assets/subMenuItem.png', 'Oreo/Kitkat Shake', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Lemon Iced Tea': ['assets/subMenuItem.png', 'Lemon Iced Tea', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Virgin Mojito': ['assets/subMenuItem.png', 'Virgin Mojito', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Exotic Mojitos Passion': ['assets/subMenuItem.png', 'Exotic Mojitos Passion', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Fresh Lime soda': ['assets/subMenuItem.png', 'Fresh Lime soda', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
		},
		'COFFEE COOLERS': {
			'Coffee': ['assets/subMenuItem.png', 'Coffee', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Mocha': ['assets/subMenuItem.png', 'Mocha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Caramel/Hazelnut': ['assets/subMenuItem.png', 'Caramel/Hazelnut', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
		},
		'HOT COFFEE': {
			'Cappuccino': ['assets/subMenuItem.png', 'Cappuccino', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Café Latte': ['assets/subMenuItem.png', 'Café Latte', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Café Mocha': ['assets/subMenuItem.png', 'Café Mocha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Americano': ['assets/subMenuItem.png', 'Americano', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Caffe Caramel': ['assets/subMenuItem.png', 'Caffe Caramel', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Affogato': ['assets/subMenuItem.png', 'Affogato', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
		},
		'CLASSIC': {
			'Espresso': ['assets/subMenuItem.png', 'Espresso', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Ristretto': ['assets/subMenuItem.png', 'Ristretto', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
			'Macchiato': ['assets/subMenuItem.png', 'Macchiato', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
		},
		'HOT CHOCOLATE & TEA': {
			'Hot Chocolate': ['assets/subMenuItem.png', 'Hot Chocolate', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
		}
	},
	'FOOD': {
		'SIGNATURE RECIPIES': {
			'PITA ANCHO CHICKEN & BLACK BEAN': ['assets/AnchoChickenBlackBean.png', 'PITA ANCHO CHICKEN & BLACK BEAN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '400'],
			'RICE BOWL SPICY CHICKEN CAESAR': ['assets/spicy-buffalo-rice-bowl.png', 'RICE BOWL SPICY CHICKEN CAESAR', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '300'],
			'PIT ANCHO CHICKEN & BLACK BEAN': ['assets/jalapeno-club.png', 'PIT ANCHO CHICKEN & BLACK BEAN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '200'],
			'RICE BOWL SPICY CHICKEN': ['assets/zesty-chicken-and-bacon.png', 'RICE BOWL SPICY CHICKEN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '100']
		}
	}
};

export function width(p, w) {
	p.style.width = (w * 100 / 1440).toString() + 'vw';
	p.style.minWidth = (w * 100 / 1440).toString() + 'vw';
}
export function maxWidth(p, w) {
	p.style.maxWidth = (w * 100 / 1440).toString() + 'vw'
}
export function height(p, h) {
	p.style.height = (h * 100 / 1440).toString() + 'vw';
	p.style.minHeight = (h * 100 / 1440).toString() + 'vw';
}
export function maxHeight(p, h) {
	p.style.maxHeight = (h * 100 / 1440).toString() + 'vw'
}
export function padding(p, pa) {
	p.style.padding = (pa * 100 / 1440).toString() + 'vw'
}
export function paddingt(p, pt) {
	p.style.paddingTop = (pt * 100 / 1440).toString() + 'vw'
}
export function paddingb(p, pb) {
	p.style.paddingBottom = (pb * 100 / 1440).toString() + 'vw'
}
export function paddingl(p, pl) {
	p.style.paddingLeft = (pl * 100 / 1440).toString() + 'vw'
}
export function paddingr(p, pr) {
	p.style.paddingRight = (pr * 100 / 1440).toString() + 'vw'
}
export function paddingh(p, ph) {
	p.style.paddingLeft = (ph * 100 / 1440).toString() + 'vw';
	p.style.paddingRight = (ph * 100 / 1440).toString() + 'vw';
}
export function paddingv(p, pv) {
	p.style.paddingTop = (pv * 100 / 1440).toString() + 'vw';
	p.style.paddingBottom = (pv * 100 / 1440).toString() + 'vw';
}
export function plwidth(p, pl, w) {
	w = w - pl;
	width(p, w);
	paddingl(p, pl)
};
export function prwidth(p, pr, w) {
	w = w - pr;
	width(p, w);
	paddingl(p, pr)
}
export function phwidth(p, pd, w) {
	w = w - (pd * 2);
	width(p, w);
	paddingh(p, pd)
}
export function pvheight(p, pd, h) {
	h = h - (pd * 2);
	height(p, h);
	paddingv(p, pd)
}
export function ptheight(p, pt, h) {
	h = h - pt;
	height(p, h);
	paddingt(p, pt)
};
export function pbheight(p, pb, h) {
	h = h - pb;
	height(p, h);
	paddingb(p, pb)
};
export function pwh(p, pd, w, h) {
	w = w - (pd * 2);
	h = h - (pd * 2);
	width(p, w);
	height(p, h);
	padding(p, pd)
}
export function ppwh(p, ph, pv, w, h) {
	w = w - (ph * 2);
	h = h - (pv * 2);
	width(p, w);
	height(p, h);
	paddingh(p, ph);
	paddingv(p, pv)
}
export function margin(p, m) {
	p.style.margin = (m * 100 / 1440).toString() + 'vw'
}
export function margint(p, mt) {
	p.style.marginTop = (mt * 100 / 1440).toString() + 'vw'
}
export function marginb(p, mb) {
	p.style.marginBottom = (mb * 100 / 1440).toString() + 'vw'
}
export function marginl(p, ml) {
	p.style.marginLeft = (ml * 100 / 1440).toString() + 'vw'
}
export function marginr(p, mr) {
	p.style.marginRight = (mr * 100 / 1440).toString() + 'vw'
}
export function marginh(p, mh) {
	marginl(p, mh);
	marginr(p, mh)
}
export function marginv(p, mv) {
	margint(p, mv);
	marginb(p, mv)
}
export function border(p, b, t) {
	p.style.border = (b * 100 / 1440).toString() + 'vw ' + t.toString()
}
export function bordert(p, bt, t) {
	p.style.borderTop = (bt * 100 / 1440).toString() + 'vw ' + t.toString()
}
export function borderl(p, bl, t) {
	p.style.borderLeft = (bl * 100 / 1440).toString() + 'vw ' + t.toString()
}
export function borderr(p, br, t) {
	p.style.borderRight = (br * 100 / 1440).toString() + 'vw ' + t.toString()
}
export function borderb(p, bb, t) {
	p.style.borderBottom = (bb * 100 / 1440).toString() + 'vw ' + t.toString()
}
export function borderRadius(p, tl, bl, br, tr) {
	if (tr === undefined && bl === undefined && br === undefined) {
		tr = bl = br = tl
	};
	if (br === undefined && tr === undefined) {
		br = bl;
		tr = tl
	};
	p.style.borderTopLeftRadius = (tl * 100 / 1440).toString() + 'vw';
	p.style.borderTopRightRadius = (tr * 100 / 1440).toString() + 'vw';
	p.style.borderBottomLeftRadius = (bl * 100 / 1440).toString() + 'vw';
	p.style.borderBottomRightRadius = (br * 100 / 1440).toString() + 'vw';
}
export function fontSize(p, f, w, l) {
	if (l === undefined) {
		l = f + 5
	}
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
	p.style.gridGap = (g * 100 / 1440).toString() + 'vw ' + (cg * 100 / 1440).toString() + 'vw';
	var ncw = '';
	for (let i = 0; i < cw.length; i++) {
		ncw += (cw[i] * 100 / 1440).toString() + 'vw ';
	}
	p.style.gridTemplateColumns = ncw;
}


.homeContainer>div:nth-child(2)>div:nth-child(2)>div:nth-child(1)>div:nth-child(2),
#home2Body>div>img:nth-child(2) {
  @include marginl(87);
}
