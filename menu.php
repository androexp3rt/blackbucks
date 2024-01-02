<!DOCTYPE html>
<html lang="en">

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
                    'PITA ANCHO CHICKEN & BLACK BEAN': ['assets/menu/Ancho.png', 'PITA ANCHO CHICKEN & BLACK BEAN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '400'],
                    'RICE BOWL SPICY CHICKEN CAESAR': ['assets/menu/spicy.png', 'RICE BOWL SPICY CHICKEN CAESAR', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '300'],
                    'PIT ANCHO CHICKEN & BLACK BEAN': ['assets/menu/jalapeno.png', 'PIT ANCHO CHICKEN & BLACK BEAN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '200'],
                    'RICE BOWL SPICY CHICKEN': ['assets/menu/zesty.png', 'RICE BOWL SPICY CHICKEN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '100']
                }
            }
        };
        var body = document.getElementsByTagName('Body')[0];
        const menuListItemContainers = [];
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
        classesCss();
        //-------------------------------------------------------------------------------------------------------------//
        //-------------------------------------------------------------------------------------------------------------//
        //--------------------------------------------------Menu CSS---------------------------------------------------//
        //-------------------------------------------------------------------------------------------------------------//
        //-------------------------------------------------------------------------------------------------------------//

        //-----------------------------------------------CSS Functions-------------------------------------------------//
        function classesCss() {
            var style = document.getElementsByTagName('style')[0]
            dom(style, '.pseudoImageBeverages::before {background-image: url(assets/menu/subMenuItem1.png);background-size:contain;width:' + getVW(40) + ';height:' + getVW(40) + ';position:absolute; top:-' + getVW(50) + ';content:"";border-radius:' + getVW(60) + ';border:' + getVW(1) + ' solid #1E5C54}')
            dom(style, '.pseudoImageFood::before {background-image: url(assets/menu/Ancho.png);background-size:contain;width:' + getVW(40) + ';height:' + getVW(40) + ';position:absolute; top:-' + getVW(50) + ';content:"";border-radius:' + getVW(60) + ';border:' + getVW(1) + ' solid #1E5C54}')
        }
        //----------------------------------Menu CSS-------------------------------------------------------------------//
        function menuHeaderCss(p) {
            if (vw <= 900) {
                //menu header
                style(p, {
                    'container': 'row',
                    'width': 900,
                    'height': 228,
                    'borderb': [30, 'solid #1E5C54'],
                    'position': 'relative',
                    'background-image': 'url(assets/menu/menuBanner.png)',
                    'background-size': 'contain',
                });
                style(p.children[0], {
                    'container': 'column',
                    'width': 900,
                    'height': 228,
                    'background-color': 'rgba(0,0,0,0.7)',
                    'color': '#FFFFFF',
                    'justify-content': 'flex-start',
                });
                style(p.children[0].children[0], {
                    'width': 524,
                    'position': 'absolute',
                    'top': getVW(50),
                    'font-size': [32, 700, 39],
                    'text-align': 'center'
                });
                style(p.children[0].children[1], {
                    'container': 'column',
                    'width': 524,
                    'height': 36,
                    'border-radius': [10],
                    'position': 'absolute',
                    'top': getVW(120),
                });
                style(p.children[0].children[1].children[0], {
                    'phwidth': [60, 524],
                    'height': 36,
                    'border-radius': [10],
                    'font-size': [18, 400],
                    'background-color': 'rgba(255,255,255,0.3)',
                    'color': '#FFFFFF',
                    'border': [0, 'none'],
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
            } else {
                //menu header
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
                    'phwidth': [60, 524],
                    'height': 36,
                    'border-radius': [10],
                    'font-size': [18, 400],
                    'background-color': 'rgba(255,255,255,0.3)',
                    'color': '#FFFFFF',
                    'border': [0, 'none'],
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
        }

        function menuBodyCss(p) {
            if (vw <= 900) {
                // menuBody
                style(p, {
                    'display':'block',
                    'phwidth': [50, 900],
                    'margint': 30,
                    'height': 900,
                    'overflow': 'hidden',
                    'background-color': '#FFFFF',
                });
                var listC = p.children[0];
                var itemC = p.children[1];
                var prevC = p.children[2];
                menuListC(listC);
                menuItemC(itemC);
                menuPrevC(prevC);
            } else {
                // menuBody
                style(p, {
                    'container': 'row',
                    'phwidth': [66, 1440],
                    'margint': 30,
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
        }

        function menuListC(p) {
            if (vw <= 900) {
                style(p, {
                    'container': 'column',
                    'width': 800,
                    'paddingt': 0,
                    'height': 280,
                    'justify-content': 'flex-start',
                    'align-items': 'flex-start',
                });
                var listItems = p.children;
                for (let i = 0; i < listItems.length; i++) {
                    style(listItems[i], {
                        'container': 'column',
                        'width': 800,
                        'height': 140,
                        'marginb': 15,
                        'justify-content': 'flex-start',
                        'align-items': 'flex-start',
                    });
                    var listHeaders = listItems[i].children[0];
                    style(listHeaders, {
                        'container': 'row',
                        'width': 800,
                        'height': 30,
                        'marginb': 10,
                        'justify-content': 'flex-start',
                        'align-items': 'flex-start',
                        'font-size': [20, 900],
                        'color': '#1E5C54',
                    });
                    var listContent = listItems[i].children[1];
                    style(listContent, {
                        'container': 'row',
                        'width': 800,
                        'height': 100,
                        'justify-content': 'flex-start',
                        'align-items': 'flex-start',
                    });
                    var listContentRow = listContent.children;
                    for (let j = 0; j < listContentRow.length; j++) {
                        var a = listContentRow[j];
                        style(a, {
                            'container': 'row',
                            'width': 100,
                            'height': 100,
                            'text-decoration': 'none',
                            'align-items': 'flex-end',
                            'justify-content': 'flex-end',
                        });
                        hover(a, '#FFFFFF', '#EAA923', [2, 'solid #EAA923']);
                        style(a.children[0], {
                            'container': 'row',
                            'width': 100,
                            'height': 45,
                            'font-size': [12, 600, 15],
                            'color': '1E5C54',
                            'position': 'relative',
                            'text-align': 'center',
                            'align-items': 'flex-start',
                            'justify-content': 'center',
                        });
                        if( i != listItems.length - 1) {
                            a.children[0].classList.add('pseudoImageBeverages')
                        }else {
                            a.children[0].classList.add('pseudoImageFood')
                        }
                        
                    }
                }
            } else {
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
        }

        function menuItemC(p) {
            if (vw <= 900) {
                style(p, {
                    'container': 'column',
                    'display':'inline-flex',
                    'width': 490,
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
                        'width': 490,
                        'marginb': 20,
                        'justify-content': 'flex-start',
                        'align-items': 'flex-start',
                    });
                    //h3
                    var listContainerName = listItemContainer.children[0];
                    style(listContainerName, {
                        'width': 490,
                        'height': 72,
                        'font-size': [32, 600, 72],
                    });
                    //grid
                    var listItemGrid = listItemContainer.children[1];
                    style(listItemGrid, {
                        'width': 490,
                        'marginb': 32,
                        'grid': [60, 30, [225, 225]],
                    });
                    //subMenuItem
                    for (let i = 0; i < listItemGrid.children.length; i++) {
                        var sMI = listItemGrid.children[i];
                        style(sMI, {
                            'container': 'column',
                            'width': 225,
                        });
                        //subMenuItem image
                        var sMIImage = sMI.getElementsByTagName('img')[0];
                        style(sMIImage, {
                            'width': 225,
                            'height': 176,
                        });
                        //subMenuItem name
                        var sMIName = sMI.getElementsByTagName('h3')[0];
                        style(sMIName, {
                            'width': 225,
                            'height': 28,
                            'margint': 12,
                            'font-size': [16, 700, 28],
                            'text-align': 'center',
                        });
                        //subMenuItem desc
                        var sMIDesc = sMI.getElementsByTagName('p')[0];
                        style(sMIDesc, {
                            'container': 'row',
                            'width': 225,
                            'height': 83,
                            'font-size': [12, 400, 30],
                            'color': 'rgba(0, 0, 0, 0.8)'
                        });
                        //subMenuItem btn and price container
                        var sMIFooter = sMI.getElementsByTagName('div')[0];
                        style(sMIFooter, {
                            'container': 'row',
                            'width': 225,
                            'height': 33,
                            'margint': 12,
                            'justify-content': 'space-between'
                        });
                        //subMenuItem btn
                        style(sMIFooter.children[0], {
                            'container': 'row',
                            'width': 110,
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
            } else {
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
        }

        function menuPrevC(p) {
            if (vw <= 900) {
                style(p, {
                    'container': 'column',
                    'display':'inline-flex',
                    'width': 280,
                    'marginl': 20,
                    'margint': 36,
                    'border-radius': [40],
                    'border': [3, 'solid #D9D9D9'],
                    'vertical-align':'top',
                    'justify-content': 'flex-start',
                    'align-items': 'flex-start',
                });
                var cartPreviewHeader = p.children[0];
                style(cartPreviewHeader, {
                    'container': 'row',
                    'phwidth': [20, 280],
                    'paddingt': 30,
                    'font-size': [15, 700, 20],
                    'color': '#1E5C54',
                    'justify-content': 'flex-start',
                    'align-items': 'flex-start',
                });
                var cartPreviewBody = p.children[1];
                style(cartPreviewBody, {
                    'container': 'column',
                    'width': 236,
                    'marginl': 30,
                    'marginr': 14,
                    'margint': 24,
                    // 'maxHeight': 380,
                    'overflow-y': 'scroll',
                    'justify-content': 'flex-start',
                    'align-items': 'flex-start',
                });
                var cPICs = cartPreviewBody.children;
                for (let i = 0; i < cPICs.length; i++) {
                    var cPIC = cPICs[i];
                    style(cPIC, {
                        'container': 'column',
                        'width': 236,
                        'height': 50,
                        'marginb': 40,
                        'align-Items': 'flex-start',
                    });
                    var para = cPIC.children[0];
                    style(para, {
                        'container': 'row',
                        'width': 236,
                        'height': 8,
                        'marginb': 18,
                        'font-size': [12, 600, 17],
                        'align-Items': 'flex-start',
                        'justify-content': 'flex-start',
                    });
                    var pUC = cPIC.children[1];
                    style(pUC, {
                        'container': 'row',
                        'width': 236,
                        'height': 28,
                        'justify-content': 'space-between'
                    });
                    var pC = pUC.children[0];
                    style(pC, {
                        'font-size': [16, 600, 22]
                    });
                    var uC = pUC.children[1];
                    style(uC, {
                        'container': 'row',
                        'phwidth': [15, 105],
                        'height': 28,
                        'border': [1, 'solid #D9D9D9'],
                        'border-radius': [10],
                        'filter': 'drop-shadow(0vw '+getVW(4)+' '+getVW(4)+' #00000040)',
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
                        'width': 16,
                        'height': 14,
                        'font-size': [20, 500],
                        'cursor': 'pointer',
                        'color': '#1E5C54',
                    });
                }
                var cartPreviewFooter = p.children[2];
                style(cartPreviewFooter, {
                    'container': 'row',
                    'phwidth': [10, 280],
                    'height': 60,
                    'color': '#FFFFFF',
                    'background-color': '#1E5C54',
                    'font-size': [20, 700],
                    'border-radius': [0, 40],
                    'justify-content': 'space-between',
                });
                var countImagePriceC = cartPreviewFooter.children[0];
                style(countImagePriceC, {
                    'container': 'row',
                    'width': 120,
                    'height': 57,
                    'justify-content': 'flex-start',
                });
                var countImageC = countImagePriceC.children[0];
                style(countImageC, {
                    'container': 'row',
                    'width': 32,
                    'height': 57,
                    'position': 'relative',
                });
                var count = countImageC.children[0];
                style(count, {
                    'container': 'row',
                    'width': 20,
                    'height': 20,
                    'position': 'absolute',
                    'top': getVW(5),
                    'left': getVW(8),
                    'font-size': [15, 600, 22],
                    'color': '#FFFFFF',
                    'z-index': 1,
                    'text-align': 'center',
                    'background-image': 'url(assets/dashicons/circle.png)',
                    'background-size': 'contain',
                });
                var image = countImageC.children[1];
                style(image, {
                    'container': 'row',
                    'width': 32,
                    'height': 32,
                    'position': 'absolute',
                    'bottom': getVW(12),
                    'left': 0,
                });
                var price = countImagePriceC.children[1];
                style(price, {
                    'marginl': 10,
                    'font-size': [16, 600],
                });
                var viewcartBtn = cartPreviewFooter.children[1];
                style(viewcartBtn, {
                    'phwidth': [10, 110],
                    'height': 30,
                    'background-color': '#1E5C54',
                    'font-size': [14, 600],
                });
                divBtnCss(viewcartBtn);
                hover(viewcartBtn, '#FFFFFF','#1E5C54')
            } else {
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
        }
    </script>
    <?php include 'footer.php' ?>
</body>

</html>