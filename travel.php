<!DOCTYPE html>
<html lang="en">
<body>
    <?php include 'navbar.php' ?>
    <script>
        //----------------------------------------Functions JS--------------------------------------------//
        var body = document.getElementsByTagName('body')[0];
        //------------------------------------------------------------------------------------------------//
        //------------------------------------------DOM---------------------------------------------------//
        //------------------------------------------------------------------------------------------------//

        //------------------------------------------TRAVEL------------------------------------------------//
        dom(body,'<div id="travel"></div>')
        var travel = document.getElementById('travel')
        dom(travel,('<div></div>').repeat(3));
        var travelHeader = travel.children[0]
        dom(travelHeader,'<h1></h1><p></p><div></div>')
        travelHeader.children[0].innerHTML = 'United Strangers Travel Community'
        travelHeader.children[1].innerHTML = 'Unwind with United Strangers.'
        var searchbarContainer = travelHeader.children[2]
		dom(searchbarContainer, '<input/><div><img></div>')
        searchbarContainer.children[0].type = 'text'
        searchbarContainer.children[0].placeholder = 'Where do you wanna go ?'
        searchbarContainer.children[1].children[0].src= "assets/dashicons/search.png"
		var serachbar = searchbarContainer.children[0]

        var AllItemsList = {'Upcoming Trips':{'Masuri (Uttarakhand)':['assets/travel/item2.png','sasasasasasasasasasasa sasasasasasasasasasasa sasasasasasasasa'],
                                'Dheradun (Uttarakhand)':['assets/travel/item2.png','mamamamamamamama mamamamamamamama sasasasasasasasa'],
                                'Haridwar (Uttarakhand)':['assets/travel/item2.png','gagagagagagagagagagaga gagagagagagagagagagaga sasasasasasasasa']},
                            'Backpaking Trips':{'Kalga (Himachal)':['assets/travel/item2.png','papapapapapapapapapapapa papapapapapapapapapapapa sasasasasasasasa'],
                                'Kullu (Himachal)':['assets/travel/item2.png','tatatatatatatatatatatatata tatatatatatatatatatatatata sasasasasasasasa'],
                                'Manali (Himachal)':['assets/travel/item2.png','lalalalalalalalalalalalalala lalalalalalalalalalalalalala sasasasasasasasa']},
                            'Ladhak & Spiti 2023':{'Goa':['assets/travel/item2.png','nanananananananananana nanananananananananana sasasasasasasasa'],
                                'Maldives':['assets/travel/item2.png','rarararararararararararara rarararararararararararara sasasasasasasasa'],
                                'Andaman n Nicobar':['assets/travel/item2.png','gagagagagagagagagaga gagagagagagagagagaga sasasasasasasasa']},
                            'Weekend Trips':{'Rohtang (Himachal)':['assets/travel/item2.png','bababababababababababa bababababababababababa sasasasasasasasa'],
                                'Kedarnath':['assets/travel/item2.png','dadadadadadadadadada dadadadadadadadadada sasasasasasasasa'],
                                'BadriNath':['assets/travel/item2.png','wawawawawawawawawawa wawawawawawawawawawa sasasasasasasasa']},
                            'Customised Trips':{'Bhangarh':['assets/travel/item2.png','zazazazazazazazazazazaza zazazazazazazazazazazaza sasasasasasasasa'],
                                'Mathura':['assets/travel/item2.png','kakakakakakakakakakakaka kakakakakakakakakakakaka sasasasasasasasa'],
                                'Shimla (Himachal)':['assets/travel/item2.png','fafafafafafafafafafafafafafa fafafafafafafafafafafafafafa sasasasasasasasa']}
                            }
        var travelBody = travel.children[1]
        dom(travelBody,'<h1></h1><div>'+('<img>').repeat(2)+'<div></div></div>')
        travelBody.children[0].innerHTML = Object.keys(AllItemsList)[0]
        travelBody.children[1].children[0].src = 'assets/dashicons/leftArrow.png'
        travelBody.children[1].children[1].src = 'assets/dashicons/rightArrow.png'
        var itemsObj = AllItemsList[Object.keys(AllItemsList)[0]]
        for(let i=0; i<Object.keys(itemsObj).length; i++) {
            dom(travelBody.children[1].children[2],'<div><div></div><h3></h3><p></p></div>')
            travelBody.children[1].children[2].children[i].children[0].style.backgroundImage = 'url('+ itemsObj[Object.keys(itemsObj)[i]][0] +')'
            travelBody.children[1].children[2].children[i].children[1].innerHTML = Object.keys(itemsObj)[i]
            travelBody.children[1].children[2].children[i].children[2].innerHTML = itemsObj[Object.keys(itemsObj)[i]][1]
        }
        var travelFooter = travel.children[2]
        dom(travelFooter,('<a></a>').repeat(5))
        var travelFooterList = ['UPCOMING TRIPS',
                                'BACKPAKING TRIPS',
                                'LADAKH & SPITI 2023',
                                'WEEKEND TRIPS',
                                'CUSTOMISED TRIPS'
                                ]
        for(let i = 0; i < travelFooter.children.length; i++) {
            travelFooter.children[i].innerHTML = travelFooterList[i]
        }                 
        travelCss(travel)
        //------------------------------------------------------------------------------------------------//
        //----------------------------------------------CSS-----------------------------------------------//
        //------------------------------------------------------------------------------------------------//

        //-------------------------------------------Travel CSS-------------------------------------------//
        function travelCss(p) {
            style(p, {
                'container':'column',
                'width': 1440,
                'justify-content': 'flex-start',
                'align-Items': 'flex-start',
            })
            //travelHeader
            style(p.children[0], {
                'container':'column',
                'width': 1440,
                'height': 555,
                'background-image':'url(assets/travel/headerBg.png)',
                'background-size':'contain',
                'color':'white',
                'position':'relative',
                'justify-content': 'flex-start',
            })
            style(p.children[0].children[0], {
				'width': 900,
				'position': 'relative',
				'top': getVW(76),
				'font-size': [48, 700, 39],
				'text-align': 'center'
			});
            style(p.children[0].children[1], {
				'width': 579,
				'position': 'relative',
				'top': getVW(163),
				'font-size': [32, 700, 39],
				'text-align': 'center'
			});
            // searchbar container
			style(p.children[0].children[2], {
				'container': 'column',
				'width': 900,
				'height': 67,
				'border-radius': [10],
				'position': 'relative',
				'top': getVW(300),
                'justify-content':'flex-start',
                'align-items':'flex-start'
			});
            // searchbar input
			style(p.children[0].children[2].children[0], {
				'phwidth': [80, 900],
				'height': 67,
                'border': [0,'none'],
				'border-radius': [10],
				'font-size': [18, 500],
				'background-color': 'rgba(255,255,255,0.3)',
				'color': '#FFFFFF',
			});
            // searchbar image container
			style(p.children[0].children[2].children[1], {
				'container': 'row',
				'width': 74,
				'height': 67,
				'position': 'absolute',
				'top': 0,
				'left': 0,
				'border-radius': [10, 10, 0, 0],
				'background-color': '#1E5C54',
				'color': '#FFFFFF',
			});
            // searchbar image
			style(p.children[0].children[2].children[1].children[0], {
				'width': 40,
				'height': 40
			});
            // travelbody
            style(p.children[1], {
                'container':'column',
                'phwidth': [80,1440],
                'height': 650,
                'align-item':'flex-start',
                'justify-content': 'flex-start',
            })
            // heading
            style(p.children[1].children[0], {
                'width': 1280,
                'height': 110,
                'font-size': [48, 900,110],
            })
            // travel Body container
            style(p.children[1].children[1], {
                'container':'row',
                'width': 1280,
                'height': 490,
                'align-item':'flex-start',
                'justify-content': 'space-between',
                'position':'relative',
            })
            // travel items container slide arrow left
            style(p.children[1].children[1].children[0], {
                'container':'row',
                'width': 18,
                'height': 40,
                'position':'absolute',
                'top': getVW(160),
                'left': getVW(-40),
                'background-color': '#1E5C54',
            })
            // travel items container slide arrow right
            style(p.children[1].children[1].children[1], {
                'container':'row',
                'width': 18,
                'height': 40,
                'position':'absolute',
                'top': getVW(160),
                'right': getVW(-40),
                'background-color': '#1E5C54',
            })
            // travel items container
            style(p.children[1].children[1].children[2], {
                'container':'row',
                'width': 1280,
                'height': 490,
                'align-item':'flex-start',
                'justify-content': 'flex-start',
                'overflow':'hidden',
            })
            // travel item
            for (let i = 0; i < p.children[1].children[1].children[2].children.length; i++) {
                style(p.children[1].children[1].children[2].children[i], {
                    'container':'column',
                    'width': 362,
                    'height': 470,
                    'marginr': 97,
                    'cursor':'pointer',
                    'align-item':'flex-start',
                    'justify-content': 'space-between',
                })
                //div image
                style(p.children[1].children[1].children[2].children[i].children[0], {
                    'width': 362,
                    'height': 276,
                    'border-radius': [54],
                    'background-size': getVW(700)+' '+getVW(300)
                })
                style(p.children[1].children[1].children[2].children[i].children[1], {
                    'phwidth': [100,362],
                    'height': 72,
                    'text-align': 'center',
                    'font-size': [24, 700]
                })
                style(p.children[1].children[1].children[2].children[i].children[2], {
                    'phwidth': [60,362],
                    'height': 100,
                    'text-align': 'center',
                    'font-size': [18,500]
                })
            }
            // travel Footer
            style(p.children[2], {
                'container':'row',
                'phwidth': [100,1440],
                'height': 94,
                'background-color': '#1E5C54',
                'border-radius': [50,0,0,50],
                'align-item':'flex-start',
                'justify-content': 'space-between'
            })
            // travel Footer Items
            for (let i = 0; i < p.children[2].children.length; i++) {
                style(p.children[2].children[i], {
                    'container':'row',
                    'width':200,
                    'height': 94,
                    'text-align': 'center',
                    'text-decoration': 'none',
                    'color':'#FFFFFF',
                    'cursor':'pointer',
                    'position':'relative',
                    'font-size': [16,500]
                })
            }
            p.children[2].children[0].classList.add('selector')
        }
        //------------------------------------------------------------------------------------------------//
        //----------------------------------------Functional JS-------------------------------------------//
        //------------------------------------------------------------------------------------------------//
        var travelItems = travelBody.children[1].children[2].children;
        for(i = 0; i < travelItems.length; i++) {
            travelItems[i].setAttribute('index',i)
            travelItems[i].onclick = function () {
                var j = this.getAttribute('index')
                sessionStorage.setItem('travelItem',JSON.stringify({
                    'category':travelBody.children[0].innerHTML,
                    'name':travelItems[j].children[1].textContent,
                    'image':travelItems[j].children[0].currentStyle || window.getComputedStyle(travelItems[j].children[0], false).backgroundImage.replace(/"/g, ""),
                    'desc':travelItems[j].children[2].textContent,
                }))
                window.location.href = 'travelProductDetail.php'
            }
        }
        //item slider js
            // ---- to be made---
        // items change js
        for(i = 0; i < travelFooter.children.length; i++) {
            travelFooter.children[i].setAttribute('index',i)
            travelFooter.children[i].onclick = function () {
                var j = this.getAttribute('index')
                travelFooter.children[j].classList.add('selector')
                for(i = 0; i < travelFooter.children.length; i++) {
                    if(i != j ) {
                        travelFooter.children[i].classList.remove('selector')
                    }
                }
                itemsObj = AllItemsList[Object.keys(AllItemsList)[j]]
                for(let i = 0; i < Object.keys(itemsObj).length; i++) {
                    for(let k = 0; k < Object.keys(AllItemsList).length; k++) {
                        if(k == j) {
                            travelBody.children[0].innerHTML = Object.keys(AllItemsList)[k]
                        }
                    }
                    travelBody.children[1].children[2].children[i].children[0].style.backgroundImage = 'url('+ itemsObj[Object.keys(itemsObj)[i]][0] +')'
                    travelBody.children[1].children[2].children[i].children[1].innerHTML = Object.keys(itemsObj)[i]
                    travelBody.children[1].children[2].children[i].children[2].innerHTML = itemsObj[Object.keys(itemsObj)[i]][1]
                }
            }
        }
    </script>
    <?php include 'footer.php' ?>
</body>
</html>