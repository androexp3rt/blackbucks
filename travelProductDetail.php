<!DOCTYPE html>
<html lang="en">
<body>
    <?php include 'navbar.php' ?>
    <script>
        var itemDetails = JSON.parse(sessionStorage.getItem('travelItem'))
        dom(body,'<div id="travelProduct"></div>')
        var travel = document.getElementById('travelProduct')
        dom(travel,('<div></div>').repeat(2));
        var travelHeader = travel.children[0]
        dom(travelHeader,'<h1></h1><p></p><div></div>')
        travelHeader.children[0].innerHTML = itemDetails['name']
        travelHeader.children[1].innerHTML = itemDetails['desc']
        var detailDateContainer = travelHeader.children[2]
        dom(detailDateContainer, ('<div></div>').repeat(2))
        var tripDetailsContainer = detailDateContainer.children[0]
		dom(tripDetailsContainer, ('<div></div>').repeat(3))
        for(let i = 0; i < tripDetailsContainer.children.length; i++) {
            dom(tripDetailsContainer.children[i], '<img><p></p><p></p>')
        }
        var dateSelectContainer = detailDateContainer.children[1]
        dom(dateSelectContainer, ('<div></div>').repeat(2))
        dom(dateSelectContainer.children[0], '<div>GET ITINERARY</div>')
        dateSelectContainer.children[0].children[0].innerHTML = 'GET ITINERARY'
        dom(dateSelectContainer.children[1], ('<div></div>').repeat(2))
        dateSelectContainer.children[1].children[1].innerHTML = 'BOOK NOW'

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
        travelBody.children[0].innerHTML = itemDetails['category']
        travelBody.children[1].children[0].src = 'assets/dashicons/leftArrow.png'
        travelBody.children[1].children[1].src = 'assets/dashicons/rightArrow.png'
        var itemsObj = AllItemsList[Object.keys(AllItemsList)[0]]
        for(let i=0; i<Object.keys(itemsObj).length; i++) {
            dom(travelBody.children[1].children[2],'<div><div></div><h3></h3><p></p></div>')
            travelBody.children[1].children[2].children[i].children[0].style.backgroundImage = 'url('+ itemsObj[Object.keys(itemsObj)[i]][0] +')'
            travelBody.children[1].children[2].children[i].children[1].innerHTML = Object.keys(itemsObj)[i]
            travelBody.children[1].children[2].children[i].children[2].innerHTML = itemsObj[Object.keys(itemsObj)[i]][1]
        }
        travelCss(travel)
        //------------------------------------------------------------------------------------------------//
        //----------------------------------------------CSS-----------------------------------------------//
        //------------------------------------------------------------------------------------------------//

		//-----------------------------------------CSS Functions------------------------------------------//
        function classesCss() {
            var style = document.getElementsByTagName('style')[0]
            dom(style, '.selector{color:#EAA923 !important;} .selector::before {background-image: url(assets/travel/selector.png);background-size:contain;width:3.75vw;height:3.75vw;position:absolute; top:-3.75vw;content:"";}')
        }
        //---------------------------------------Travel CSS---------------------------------------------//
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
                'height': 635,
                'background-image':itemDetails['image'],
                'background-size':'contain',
                'color':'#1E5C54',
                'position':'relative',
                'justify-content': 'flex-start',
                'align-Items': 'flex-start',
            })
            style(p.children[0].children[0], {
				'plwidth': [80,780],
                'height': 85,
				'position': 'absolute',
				'top': getVW(62),
				'font-size': [48, 700, 39],
			});
            style(p.children[0].children[1], {
				'plwidth': [80,580],
				'position': 'absolute',
				'top': getVW(147),
				'font-size': [32, 700, 39],
			});
            // detail Date Container
            style(p.children[0].children[2], {
				'container': 'row',
				'phwidth': [80,1440],
				'height': 150,
				'position': 'absolute',
				'top': getVW(420),
                'background-color':'rgba(0,0,0,0.4)',
                'justify-content':'space-between',
                'align-items':'flex-start'
			});
            // trip Details Container
			style(p.children[0].children[2].children[0], {
				'container': 'row',
				'width': 435,
				'height': 145,
                'justify-content':'flex-start',
                'align-items':'flex-start'
			});
            //trip Details Duration Container
            style(p.children[0].children[2].children[0].children[0], {
				'container': 'column',
				'width': 145,
				'height': 145,
                'background-image': 'url(assets/travel/tripDuration.png)',
                'background-size': 'contain', 
                'justify-content':'flex-start',
                'align-items':'flex-start'
			});
            //trip Details price Container
            style(p.children[0].children[2].children[0].children[1], {
				'container': 'column',
				'width': 145,
				'height': 145,
                'background-image': 'url(assets/travel/tripPrice.png)',
                'background-size': 'contain',
                'justify-content':'flex-start',
                'align-items':'flex-start'
			});
            //trip Details location Container
            style(p.children[0].children[2].children[0].children[2], {
				'container': 'column',
				'width': 145,
				'height': 145,
                'background-image': 'url(assets/travel/tripLocation.png)',
                'background-size': 'contain',
                'justify-content':'flex-start',
                'align-items':'flex-start'
			});
            // Date select Container
            style(p.children[0].children[2].children[1], {
				'container': 'row',
				'width': 300,
				'height': 150,
                'align-items':'flex-start',
                'justify-content':'space-between'
			});
            // get itinerary btn container
            style(p.children[0].children[2].children[1].children[0], {
				'container': 'column',
				'width': 140,
				'height': 140,
                'align-items':'space-between',
                'justify-content':'flex-end'
			});
            // get itinerary btn
            style(p.children[0].children[2].children[1].children[0].children[0], {
				'container': 'row',
                'width': 140,
				'height': 30,
                'font-size':[15,600]
			});
            btn2Css(p.children[0].children[2].children[1].children[0].children[0])
            // callendar icon and book now btn conatainer
            style(p.children[0].children[2].children[1].children[1], {
				'container': 'column',
				'width': 140,
				'height': 140,
                'justify-content':'flex-end'
			});
            // callendar icon
            style(p.children[0].children[2].children[1].children[1].children[0], {
				'width': 120,
				'height': 120,
                'background-image':'url(assets/dashicons/callendar.png)',
                'background-size':'contain'
			});
            // book now btn
            style(p.children[0].children[2].children[1].children[1].children[1], {
				'container': 'row',
                'width': 140,
				'height': 30,
                'font-size':[15,600]
			});
            btn2Css(p.children[0].children[2].children[1].children[1].children[1])
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
                // travel item div image
                style(p.children[1].children[1].children[2].children[i].children[0], {
                    'width': 362,
                    'height': 276,
                    'border-radius': [54],
                    'background-size': getVW(700)+' '+getVW(300)
                })
                // travel item name
                style(p.children[1].children[1].children[2].children[i].children[1], {
                    'phwidth': [100,362],
                    'height': 72,
                    'text-align': 'center',
                    'font-size': [24, 700]
                })
                // travel item decs
                style(p.children[1].children[1].children[2].children[i].children[2], {
                    'phwidth': [60,362],
                    'height': 100,
                    'text-align': 'center',
                    'font-size': [18,500]
                })
            }
        }
        //------------------------------------------------------------------------------------------------//
        //----------------------------------------Functional JS-------------------------------------------//
        //------------------------------------------------------------------------------------------------//

    </script>
    <?php include 'footer.php' ?>
</body>
</html>