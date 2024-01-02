<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/menu1.css">
</head>

<body>
	<?php include 'navbar.php' ?>
	<script>
		var menuListData = {
			'BEVERAGES': {
				'SMOOTHIES': {
					'Coco Banana': ['assets/menu/subMenuItem.png', 'Coco Banana', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '500'],
					'Green Smoothie': ['assets/menu/subMenuItem.png', 'Green Smoothie', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '400'],
					'Mixed Berry': ['assets/menu/subMenuItem.png', 'Mixed Berry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '300'],
					'Chiku Papaya': ['assets/menu/subMenuItem.png', 'Chiku Papaya', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
				},
				'ICED COFFEE': {
					'Iced Cappuccino': ['assets/menu/subMenuItem.png', 'Iced Cappuccino', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '300'],
					'Iced Latte': ['assets/menu/subMenuItem.png', 'Iced Latte', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Iced Mocha': ['assets/menu/subMenuItem.png', 'Iced Mocha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Iced Americano': ['assets/menu/subMenuItem.png', 'Iced Americano', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
				},
				'FRUIT COOLERS': {
					'Peach': ['assets/menu/subMenuItem.png', 'Peach', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Mango & Passion': ['assets/menu/subMenuItem.png', 'Mango & Passion', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
				},
				'CREAMY COOLERS': {
					'Double Chocolate': ['assets/menu/subMenuItem.png', 'Double Chocolate', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Strawberry/Vanilla': ['assets/menu/subMenuItem.png', 'Strawberry/Vanilla', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Oreo/Kitkat Shake': ['assets/menu/subMenuItem.png', 'Oreo/Kitkat Shake', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Lemon Iced Tea': ['assets/menu/subMenuItem.png', 'Lemon Iced Tea', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Virgin Mojito': ['assets/menu/subMenuItem.png', 'Virgin Mojito', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Exotic Mojitos Passion': ['assets/menu/subMenuItem.png', 'Exotic Mojitos Passion', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Fresh Lime soda': ['assets/menu/subMenuItem.png', 'Fresh Lime soda', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
				},
				'COFFEE COOLERS': {
					'Coffee': ['assets/menu/subMenuItem.png', 'Coffee', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Mocha': ['assets/menu/subMenuItem.png', 'Mocha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Caramel/Hazelnut': ['assets/menu/subMenuItem.png', 'Caramel/Hazelnut', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
				},
				'HOT COFFEE': {
					'Cappuccino': ['assets/menu/subMenuItem.png', 'Cappuccino', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Café Latte': ['assets/menu/subMenuItem.png', 'Café Latte', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Café Mocha': ['assets/menu/subMenuItem.png', 'Café Mocha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Americano': ['assets/menu/subMenuItem.png', 'Americano', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Caffe Caramel': ['assets/menu/subMenuItem.png', 'Caffe Caramel', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Affogato': ['assets/menu/subMenuItem.png', 'Affogato', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
				},
				'CLASSIC': {
					'Espresso': ['assets/menu/subMenuItem.png', 'Espresso', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Ristretto': ['assets/menu/subMenuItem.png', 'Ristretto', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600'],
					'Macchiato': ['assets/menu/subMenuItem.png', 'Macchiato', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
				},
				'HOT CHOCOLATE & TEA': {
					'Hot Chocolate': ['assets/menu/subMenuItem.png', 'Hot Chocolate', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '600']
				}
			},
			'FOOD': {
				'SIGNATURE RECIPIES': {
					'PITA ANCHO CHICKEN & BLACK BEAN': ['assets/menu/AnchoChickenBlackBean.png', 'PITA ANCHO CHICKEN & BLACK BEAN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '400'],
					'RICE BOWL SPICY CHICKEN CAESAR': ['assets/menu/spicy-buffalo-rice-bowl.png', 'RICE BOWL SPICY CHICKEN CAESAR', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '300'],
					'PIT ANCHO CHICKEN & BLACK BEAN': ['assets/menu/jalapeno-club.png', 'PIT ANCHO CHICKEN & BLACK BEAN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '200'],
					'RICE BOWL SPICY CHICKEN': ['assets/menu/zesty-chicken-and-bacon.png', 'RICE BOWL SPICY CHICKEN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '100']
				}
			}
		};
		var body = document.getElementsByTagName('Body')[0];
		const menuListItemContainers = [];
		 cartPreviewItemPrice;
		var cartPreviewFooter;
		// var modal,popupBody;
		// var popupCloseBtn;
		// var popupItemType = '';
		//-------------------------------------------------------------------------------------------------------------//
		//-------------------------------------------------------------------------------------------------------------//
		//---------------------------------------------------Menu DOM--------------------------------------------------//
		//-------------------------------------------------------------------------------------------------------------//
		//-------------------------------------------------------------------------------------------------------------//
		//menu header
		dom(body, '<div id="menuContainer"></div>');
		var menuContainer = document.getElementById('menuContainer');
		pageContainerCss(menuContainer);
			dom(menuContainer, '<div id="menuHeader"></div>');
			var menuHeader = document.getElementById('menuHeader');
			dom(menuHeader, '<div></div>');
			dom(menuHeader.children[0], '<span></span>');
			dom(menuHeader.children[0], '<div id="searchbarContainer"></div>');
			menuHeader.children[0].children[0].innerHTML = 'BlackBuck’s Food & Beverages';
			var searchbarContainer = document.getElementById('searchbarContainer')
			dom(searchbarContainer, '<input type="text" placeholder=" which meal is your favourite?" />');
			dom(searchbarContainer, '<div><img src="assets/dashicons/search.png" alt="Search"></div>');
			var serachbar = searchbarContainer.children[0];
			menuHeaderCss(menuHeader);
		//menu body
			dom(menuContainer, '<div id="menuBody"></div>');
			var menuBody = document.getElementById('menuBody');
			dom(menuBody, '<div id="listC"></div><div id="itemC"></div><div id="prevC"></div>');
		// list container :
			var menuListContainer = document.getElementById('listC');
			dom(menuListContainer, '<div></div><div></div>');
			var menuListItems = menuListContainer.children;
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
			var menuExpandContainer = document.getElementById('itemC');
			for (let i = 0; i < len; i++) {
				dom(menuExpandContainer, '<div><h3></h3><div></div></div>');
				menuListItemContainers.push(menuExpandContainer.children[i]);
				menuListItemContainers[i].id = 'menuListItemContainer' + (i + 1).toString();
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
				} else {
					listHeading.innerHTML = Object.keys(menuListData[Object.keys(menuListData)[1]])[i - 8];
					var obj2 = menuListData[Object.keys(menuListData)[1]][Object.keys(menuListData[Object.keys(menuListData)[1]])[i - 8]];
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
			var cartPreviewContainer = document.getElementById('prevC');
			dom(cartPreviewContainer, '<div><h4></h4></div><div></div><div></div>');
			cartPreviewContainer.children[0].children[0].innerHTML = 'Items in cart';
			var cartPreviewBody = cartPreviewContainer.children[1];
			var sampleNames = ['Coco Banana (Large)', 'Green Smoothie (Small)'];
			for (let i = 0; i < sampleNames.length; i++) {
				dom(cartPreviewBody, '<div><p></p><div></div></div>');
				var cartPreviewItemName = cartPreviewBody.children[i].children[0];
				cartPreviewItemName.innerHTML = sampleNames[i];
				var cPIPUC = cartPreviewBody.children[i].children[1];
				dom(cPIPUC, '<p>&#X20B9; <span>100</span></p><div></div>');
				var cartPreviewItemPrice = cPIPUC.children[0].children[0];
				var cPIUC = cPIPUC.children[1];
				dom(cPIUC, '<div><img></div><p>0</p><div><img></div>');
				var cPIminus = cPIUC.children[0].children[0];
				var cPIunits = cPIUC.children[1];
				var cPIplus = cPIUC.children[2].children[0];
				cPIminus.src = 'assets/dashicons/minus.png';
				cPIplus.src = 'assets/dashicons/plus.png';
			}
			cartPreviewFooter = cartPreviewContainer.children[2];
			dom(cartPreviewFooter, '<div></div><div>VIEW CART</div>');
			var cIPC = cartPreviewFooter.children[0];
			var viewCartBtn = cartPreviewFooter.children[1];
			dom(cIPC, '<div></div><p>&#X20B9; <span>400.00</span></p>');
			var cPC = cIPC.children[0];
			dom(cPC, '<div>0</div><img>');
			cPC.children[1].src = 'assets/dashicons/cart.png';
			dom(body, '<div id="myModal"></div>');
			modal = document.getElementById('myModal');
			myModalCss(modal);
			dom(modal, '<div></div>');
			popupBody = modal.children[0];
			dom(popupBody, '<div></div><div></div>');
			popupBodyHeader = popupBody.children[0];
			popupBodyFooter = popupBody.children[1];
			dom(popupBodyHeader, '<div></div><img><h2></h2><p></p>');
			popupCloseBtn = popupBodyHeader.children[0];
			dom(popupCloseBtn, '<img>');
			popupCloseBtn.children[0].src = 'assets/dashicons/close.png';
			popupImage = popupBodyHeader.children[1];
			popupName = popupBodyHeader.children[2];
			popupDesc = popupBodyHeader.children[3];
			dom(popupBodyFooter, '<div></div><div>ADD TO CART &#8594</div>');
			dom(popupBodyFooter.children[0], '<p>&#X20B9; <span>..</span></p>')
			MenuItemModalBodyCss(popupBody);
			menuBodyCss(menuBody);
		//-------------------------------------------------------------------------------------------------------------//
		//-------------------------------------------------------------------------------------------------------------//
		//--------------------------------------------------Menu CSS---------------------------------------------------//
		//-------------------------------------------------------------------------------------------------------------//
		//-------------------------------------------------------------------------------------------------------------//
		function menuHeaderCss(p) {
			style(p, {
				'container': 'row',
				'width': 1440,
				'height': 366,
				'borderb': [50, 'solid #1E5C54'],
				'background-image': 'url(assets/menu/menuBanner.png)',
				'background-size': 'contain',
			});
			style(p.children[0], {
				'container': 'column',
				'width': 1440,
				'height': 366,
				'background-color': 'rgba(0,0,0,0.7)',
				'color': '#FFFFFF',
				'justify-content': 'flex-start',
			});
			style(p.children[0].children[0], {
				'width': 524,
				'position': 'relative',
				'top': (110 * 100 / 1440).toString() + 'vw',
				'font-size': [32, 700, 39],
				'text-align': 'center'
			});
			style(p.children[0].children[1], {
				'container': 'column',
				'width': 524,
				'height': 36,
				'border-radius': [10],
				'position': 'relative',
				'top': (180 * 100 / 1440).toString() + 'vw',
			});
			style(p.children[0].children[1].children[0], {
				'phWidth': [60, 524],
				'height': 36,
				'border-radius': [10],
				'font-size': [18, 400],
				'background-color': 'rgba(255,255,255,0.3)',
				'color': '#FFFFFF',
				'border': [0,'none'],
			});
			style(p.children[0].children[1].children[1], {
				'container': 'row',
				'width': 56,
				'height': 36,
				'border-radius': [10, 10, 0, 0],
				'position': 'absolute',
				'top': 0,
				'left': 0,
				'border-radius': [10, 10, 0, 0],
				'background-color': '#1E5C54',
				'color': '#FFFFFF',
			});
			style(p.children[0].children[1].children[1].children[0], {
				'width': 30,
				'height': 30
			});
		}
		function menuBodyCss(p) {
			// menuBody
			style(p, {
				'container': 'row',
				'phwidth': [66, 1440],
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
		function menuListC(p) {
			style(p, {
				'container': 'column',
				'width': 222,
				'paddingt': 36,
				'height': 900,
				'justify-content': 'flex-start',
				'align-items': 'flex-start',
			});
			var listItems = p.children;
			for (let i = 0; i < listItems.length; i++) {
				style(listItems[i], {
					'container': 'column',
					'width': 222,
					'justify-content': 'flex-start',
					'align-items': 'flex-start',
				});
				var listHeaders = listItems[i].children[0];
				style(listHeaders, {
					'container': 'column',
					'width': 222,
					'justify-content': 'flex-start',
					'align-items': 'flex-start',
					'font-size': [20, 900],
					'color': '#1E5C54',
				});
				var listContent = listItems[i].children[1];
				style(listContent, {
					'container': 'column',
					'width': 222,
					'justify-content': 'flex-start',
					'align-items': 'flex-start',
					'font-size': [20, 900],
					'color': '#1E5C54',
				});
				var listContentRow = listContent.children;
				for (let i = 0; i < listContentRow.length; i++) {
					var a = listContentRow[i];
					style(a, {
						'container': 'row',
						'width': 222,
						'paddingv': 5,
						'text-decoration': 'none',
						'justify-content': 'flex-start',
					});
					hover(a, '#FFFFFF', '#EAA923', [0, ''], [3, 'solid #EAA923']);
					style(a.children[0], {
						'container': 'row',
						'plwidth': [10, 219],
						'font-size': [16, 700, 23],
						'color': '1E5C54',
						'justify-content': 'flex-start',
						'align-items': 'flex-start',
					});
				}
			}
		}
		function menuItemC(p) {
			style(p, {
				'container': 'column',
				'width': 560,
				'height': 900,
				'font-size': [20, 900],
				'justify-content': 'flex-start',
				'align-items': 'flex-start',
				'overflow-y': 'scroll',
			});
			//listItemContainer
			var listItemContainers = p.children;
			for (let i = 0; i < listItemContainers.length; i++) {
				var listItemContainer = listItemContainers[i];
				style(listItemContainer, {
					'container': 'column',
					'width': 545,
					'marginb': 20,
					'justify-content': 'flex-start',
					'align-items': 'flex-start',
				});
				//h3
				var listContainerName = listItemContainer.children[0];
				style(listContainerName, {
					'width': 545,
					'height': 72,
					'font-size': [32, 600, 72],
				});
				//grid
				var listItemGrid = listItemContainer.children[1];
				style(listItemGrid, {
					'width': 545,
					'marginb': 32,
					'grid': [60, 45, [250, 250]],
				});
				//subMenuItem
				for (let i = 0; i < listItemGrid.children.length; i++) {
					var sMI = listItemGrid.children[i];
					style(sMI, {
						'container': 'column',
						'width': 250,
					});
					//subMenuItem image
					var sMIImage = sMI.getElementsByTagName('img')[0];
					style(sMIImage, {
						'width': 250,
						'height': 191,
					});
					//subMenuItem name
					var sMIName = sMI.getElementsByTagName('h3')[0];
					style(sMIName, {
						'width': 250,
						'height': 28,
						'margint': 12,
						'font-size': [16, 700, 28],
						'text-align': 'center',
					});
					//subMenuItem desc
					var sMIDesc = sMI.getElementsByTagName('p')[0];
					style(sMIDesc, {
						'container': 'row',
						'width': 250,
						'height': 83,
						'font-size': [12, 400, 30],
						'color': 'rgba(0, 0, 0, 0.8)'
					});
					//subMenuItem btn and price container
					var sMIFooter = sMI.getElementsByTagName('div')[0];
					style(sMIFooter, {
						'container': 'row',
						'width': 250,
						'height': 33,
						'margint': 12,
						'justify-content': 'space-between'
					});
					//subMenuItem btn
					style(sMIFooter.children[0], {
						'container': 'row',
						'width': 130,
						'height': 33,
						'color': '#FFFFFF',
						'background-color': '#1E5C54',
						'text-align': 'center',
						'font-size': [12, 500, 15],
					});
					divBtnCss(sMIFooter.children[0]);
					//subMenuItem price
					style(sMIFooter.children[1], {
						'font-size': [22, 600]
					});
					sMIFooter.children[1].style.textAlign = 'center';
				}
			}
		}
		function menuPrevC(p) {
			style(p, {
				'container': 'column',
				'width': 418,
				'margint': 36,
				'border-radius': [40],
				'border': [3, 'solid #D9D9D9'],
				'justify-content': 'flex-start',
				'align-items': 'flex-start',
			});
			var cartPreviewHeader = p.children[0];
			style(cartPreviewHeader, {
				'container': 'row',
				'phwidth': [39, 418],
				'paddingt': 37,
				'font-size': [16, 700, 20],
				'color': '#1E5C54',
				'justify-content': 'flex-start',
				'align-items': 'flex-start',
			});
			var cartPreviewBody = p.children[1];
			style(cartPreviewBody, {
				'container': 'column',
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
				style(cPIC, {
					'container': 'column',
					'width': 335,
					'height': 70,
					'marginb': 50,
					'align-Items': 'flex-start',
				});
				var para = cPIC.children[0];
				style(para, {
					'container': 'row',
					'width': 335,
					'height': 13,
					'marginb': 23,
					'font-size': [14, 600, 17],
					'align-Items': 'flex-start',
					'justify-content': 'flex-start',
				});
				var pUC = cPIC.children[1];
				style(pUC, {
					'container': 'row',
					'width': 335,
					'height': 34,
					'justify-content': 'space-between'
				});
				var pC = pUC.children[0];
				style(pC, {
					'font-size': [18, 600, 22]
				});
				var uC = pUC.children[1];
				style(uC, {
					'container': 'row',
					'phwidth': [14.5, 112],
					'height': 34,
					'border': [1, 'solid #D9D9D9'],
					'border-radius': [10],
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
					style(minusPlus[i].children[0], {
						'width': 14
					});
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
				'font-size': [20, 700],
				'border-radius': [0, 40],
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
				'position': 'relative',
			});
			var count = countImageC.children[0];
			style(count, {
				'container': 'row',
				'width': 30,
				'height': 30,
				'position': 'absolute',
				'top': 0,
				'left': (10 * 100 / 1440).toString + 'vw',
				'font-size': [18, 600, 22],
				'color': '#FFFFFF',
				'z-index': 1,
				'text-align': 'center',
				'background-image': 'url(assets/dashicons/circle.png)',
				'background-size': 'contain',
			});
			var image = countImageC.children[1];
			style(image, {
				'container': 'row',
				'width': 42,
				'height': 41,
				'position': 'absolute',
				'bottom': 0,
				'left': 0,
			});
			var price = countImagePriceC.children[1];
			style(price, {
				'marginl': 10,
				'font-size': [22, 600],
			});
			var viewcartBtn = cartPreviewFooter.children[1];
			style(viewcartBtn, {
				'phwidth': [10, 130],
				'height': 30,
				'background-color': '#1E5C54',
				'font-size': [16, 600],
			});
			divBtnCss(viewcartBtn);
		}
		
		
		
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
		popupCloseBtn.onclick = function() {
			close()
		};
		// WHEN THE USER CLICKS THE ADD TO CART <div> (ADD TO CART ->), CHANGE THE MODAL
		popupAddToCartBtn.onclick = function() {
			modifyModal()
		};
		// WHEN THE USER CLICKS THE VIEW CART <div> (VIEW CART ->), go to cart page
		viewCartBtn.onclick = function() {
			viewCart()
		};

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
				addToCartBtn.onclick = function(e) {
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
				var Key = menuListItemContainers[i].children[0].textContent;
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
				if (subMenuItem.id.includes('CREATION')) {
					subMenuItemInfo['itemType'] = 'food'
				} else {
					subMenuItemInfo['itemType'] = 'beverage'
				};
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
			} else {
				var existingUnits = {}
				for (let i = 0; i < Object.keys(cartPreviewItems).length; i++) {
					var cartPreviewItemName = cartPreviewItems[Object.keys(cartPreviewItems)[i]].children[0].textContent;
					console.log(cartPreviewItems[cartPreviewItemName]);
					console.log(cartPreviewItemName);
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
						} else if (cartPreviewItemName == subMenuItemsInfo['subMenuItem' + i]['itemName'] + ' (Small)') {
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
				minus.onclick = function() {
					var j = this.getAttribute('data-index');
					var itemName = cartPreviewItems[Object.keys(cartPreviewItems)[j]].children[0].textContent;
					if (itemName.includes('(Small)')) {
						var ppu = parseFloat(cartPreviewItemsInfo[Object.keys(cartPreviewItems)[j]]['itemPPUsmall'])
					} else {
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
					} else {
						//change CartPreviewItem count only if unit becomes 1:
						if (u == 1) {
							c -= 1;
							orderCount.innerHTML = c;
							var keyName = cartPreviewBody.children[j].children[0].textContent;
							cartPreviewBody.removeChild(cartPreviewBody.children[j]);
							delete cartPreviewItems[keyName];
							delete cartPreviewItemsInfo[keyName];
							subAddCal();
						} else {
							u -= 1;
							unit.innerHTML = u
							cartPreviewItemsInfo[Object.keys(cartPreviewItems)[j]]['itemUnits'] = u.toString();
							price.innerHTML = parseFloat(ppu * u).toFixed(2);
						}
					}
				}
				plus.setAttribute('data-index', i);
				plus.onclick = function() {
					var j = this.getAttribute('data-index');
					var itemName = cartPreviewItems[Object.keys(cartPreviewItems)[j]].children[0].textContent;
					if (itemName.includes('(Small)')) {
						var ppu = parseFloat(cartPreviewItemsInfo[Object.keys(cartPreviewItems)[j]]['itemPPUsmall'])
					} else {
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
					} else {
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
			dom(popupBodyHeader, '<img><h2>Item Name</h2><p></p>');
			// popupBodyHeader.classList.remove("modal2BodyHeader");
			// popupBodyHeader.classList.add("modalBodyHeader");
			removeChildren(popupBodyFooter);
			dom(popupBodyFooter, '<div>ADD TO CART &#8594</div>');
			// popupBody.classList.remove("modal2Body");
			MenuItemModalBodyCss(popupBody);
			subMenuItems = getSubMenuItems();
			subMenuItemsInfo = getSubMenuItemsInfo();
			getModalElements();
			populateModal();
		}

		function close() {
			modal.style.display = "none";
			restoreModal();
			popupAddToCartBtn.onclick = function() {
				modifyModal()
			};
		}

		function newModal() {
			removeChildren(popupBodyHeader);
			dom(popupBodyHeader, '<h3>Customise your drink</h3><p id="itemNameContainer" class="itemNameContainer"></p>');
			dom(popupBodyHeader, '<div id="itemSizeSelectorContainer" class="itemSizeSelectorContainer"></div>');
			var iSSContainer = document.getElementById("itemSizeSelectorContainer");
			dom(iSSContainer, '<p>Pick a cup size</p><div id="smallLargeContainer" class="smallLargeContainer"></div>');
			dom(iSSContainer.children[1], '<div id="smallContainer" class="smallContainer"></div>');
			dom(iSSContainer.children[1], '<div id="largeContainer" class="largeContainer"></div></div>');
			dom(iSSContainer.children[1].children[0], '<img src="assets/small.png" alt="Small"><p>Small</p>');
			dom(iSSContainer.children[1].children[1], '<img src="assets/large.png" alt="Large" class="selected"><p>Large</p>');
			modal2BodyCss(popupBody);
		}

		function modifyModal() {
			newModal();
			var headingContainer = popupBody.getElementsByTagName('h3')[0];
			var iSSContainer = document.getElementById("itemSizeSelectorContainer");
			var nameContainer = document.getElementById('itemNameContainer');
			var largeContainer = document.getElementById("largeContainer");
			var smallContainer = document.getElementById("smallContainer");

			if (popupItemType == 'food') {
				headingContainer.innerHTML = 'Customise your meal';
				iSSContainer.children[0].innerHTML = 'Pick a plate size';
				smallContainer.children[0].src = 'assets/smallPlate.png';
				largeContainer.children[0].src = 'assets/largePlate.png';
			} else {
				headingContainer.innerHTML = 'Customise your drink';
				iSSContainer.children[0].innerHTML = 'Pick a cup size';
				smallContainer.children[0].src = 'assets/small.png';
				largeContainer.children[0].src = 'assets/large.png';
			}
			nameContainer.innerHTML = popupName.textContent + ' (Large)';
			smallContainer.onclick = function() {
				if (smallContainer.children[0].classList.contains('selected') == false) {
					smallContainer.children[0].classList.add("selected");
					largeContainer.children[0].classList.remove("selected");
					nameContainer.innerHTML = popupName.textContent + ' (Small)';
					popupPrice.innerHTML = parseFloat((parseFloat(popupPrice.textContent) / 2) + 10).toFixed(2);
				}
			}
			largeContainer.onclick = function() {
				if (largeContainer.children[0].classList.contains('selected') == false) {
					smallContainer.children[0].classList.remove("selected");
					largeContainer.children[0].classList.add("selected");
					nameContainer.innerHTML = popupName.textContent + ' (Large)';
					popupPrice.innerHTML = parseFloat((parseFloat(popupPrice.textContent) - 10) * 2).toFixed(2);
				}
			}
			// popup Footer
			removeChildren(popupBodyFooter);
			dom(popupBodyFooter, '<div>CONTINUE SHOPING &#8594</div>');
			divBtnCss(popupBodyFooter.children[1]);
			popupBodyFooter.children[1].onclick = function() {
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
					} else {
						var ppu = parseFloat(cartPreviewItemsInfo[Object.keys(cartPreviewItems)[i]]['itemPPUlarge'])
					}
					unit.innerHTML = parseInt(unit.textContent) + 1;
					cartPreviewItemsInfo[Object.keys(cartPreviewItems)[i]]['itemUnits'] = (parseInt(unit.textContent) + 1).toString();
					price.innerHTML = parseFloat(ppu * (parseInt(unit.textContent))).toFixed(2);
					return;
				}
			}
			domStart(cartPreviewBody, `<div><p>${name}</p><div><p>&#X20B9; <span>0.00</span></p><div><div><img src="assets/dashicons/minus.png"></div><p>1</p><div><img src="assets/dashicons/plus.png"></div></div></div></div>`);
			cartPreviewItemCss(cartPreviewBody.children[0]);
			cartPreviewItems = getCartPreviewItems();
			cartPreviewItemsInfo = getCartPreviewItemsInfo();
			var price = cartPreviewItems[name].children[1].children[0].children[0];
			cartPreviewItemsInfo[name]['itemUnits'] = '1';
			if (name.includes('(Small)')) {
				price.innerHTML = cartPreviewItemsInfo[name]['itemPPUsmall'];
			} else {
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
			} else {
				var alertModal = document.getElementById('alert');
				dom(alertModal, '<div id="alertBody" class="alertBody"></div>');
				dom(alertModal.children[0], '<div id="close" class="close"><img src="assets/close.png"></div>')
				dom(alertModal.children[0], '<h2>Alert!</h2>');
				dom(alertModal.children[0], '<p>Your Cart is Empty!<br>Please Add a few Items First.</p>');
				alertModal.style.display = 'flex';
				alertModal.children[0].children[0].onclick = function() {
					alertModal.style.display = "none";
					removeAllChildren(alertModal);
				}
				window.onclick = function(event) {
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
	</script>
	<?php include 'footer.php' ?>
</body>
</html>