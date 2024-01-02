//-----------------------------------------CSS Functions------------------------------------------//
function getVW(px) {
    const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
    const vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0)
    if (vw <= 900) {
        return (px * 100 / 900).toString() + 'vw'
    } else {
        return (px * 100 / 1440).toString() + 'vw'
    }
}

function style(p, css) {
    if ('container' in css) {
        p.style.display = 'flex';
        p.style.flexDirection = css['container'];
        p.style.alignItems = 'center';
        p.style.justifyContent = 'center';
        delete css['container'];
    };
    if ('grid' in css) {
        p.style.display = 'grid';
        p.style.gridGap = getVW(css['grid'][0]) + ' ' + getVW(css['grid'][1])
        p.style.gridTemplateColumns = getVW(css['grid'][2][0]) + ' ' + getVW(css['grid'][2][1])
        var ncw = '';
        for (let i = 0; i < css['grid'][2].length; i++) {
            ncw += getVW(css['grid'][2][i])
        }
        p.style.gridTemplateColumns = ncw;
        delete css['grid'];
    }
    if ('hide' in css) {
        p.style.display = 'none';
        delete css['hide'];
    };
    if ('width' in css) {
        if (typeof css['width'] == "string") {
            p.style.width = css['width']
            p.style.minWidth = css['width']
        } else {
            p.style.width = getVW(css['width'])
            p.style.minWidth = getVW(css['width'])
        }
        delete css['width'];
    };
    if ('max-width' in css) {
        if (typeof css['max-width'] == "string") {
            p.style.maxWidth = css['max-width']
        } else {
            p.style.maxWidth = getVW(css['max-width'])
        }
        delete css['max-width'];
    };
    if ('height' in css) {
        if (typeof css['height'] == "string") {
            p.style.height = css['height']
            p.style.minHeight = css['height']
        } else {
            p.style.height = getVW(css['height'])
            p.style.minHeight = getVW(css['height'])
        }
        delete css['height'];
    };
    if ('max-height' in css) {
        if (typeof css['max-height'] == "string") {
            p.style.maxHeight = css['max-height']
        } else {
            p.style.maxHeight = getVW(css['max-height'])
        }
        delete css['max-height'];
    };
    if ('padding' in css) {
        if (typeof css['padding'] == "string") {
            p.style.padding = css['padding']
        } else {
            p.style.padding = getVW(css['padding'])
        }
        delete css['padding'];
    };
    if ('paddingt' in css) {
        if (typeof css['paddingt'] == "string") {
            p.style.paddingTop = css['paddingt']
        } else {
            p.style.paddingTop = getVW(css['paddingt'])
        }
        delete css['paddingt'];
    };
    if ('paddingb' in css) {
        if (typeof css['paddingb'] == "string") {
            p.style.paddingBottom = css['paddingb']
        } else {
            p.style.paddingBottom = getVW(css['paddingb'])
        }
        delete css['paddingb'];
    };
    if ('paddingl' in css) {
        if (typeof css['paddingl'] == "string") {
            p.style.paddingLeft = css['paddingl']
        } else {
            p.style.paddingLeft = getVW(css['paddingl'])
        }
        delete css['paddingl'];
    };
    if ('paddingr' in css) {
        if (typeof css['paddingr'] == "string") {
            p.style.paddingRight = css['paddingr']
        } else {
            p.style.paddingRight = getVW(css['paddingr'])
        }
        delete css['paddingr'];
    };
    if ('paddingh' in css) {
        if (typeof css['paddingh'] == "string") {
            p.style.paddingLeft = css['paddingh']
            p.style.paddingRight = css['paddingh']
        } else {
            p.style.paddingLeft = getVW(css['paddingh'])
            p.style.paddingRight = getVW(css['paddingh'])
        }
        delete css['paddingh'];
    };
    if ('paddingv' in css) {
        if (typeof css['paddingv'] == "string") {
            p.style.paddingTop = css['paddingv']
            p.style.paddingBottom = css['paddingv']
        } else {
            p.style.paddingTop = getVW(css['paddingv'])
            p.style.paddingBottom = getVW(css['paddingv'])
        }
        delete css['paddingv'];
    };
    if ('plwidth' in css) {
        var w = css['plwidth'][1] - css['plwidth'][0];
        p.style.width = getVW(w)
        p.style.minWidth = getVW(w)
        p.style.paddingLeft = getVW(css['plwidth'][0])
        delete css['plwidth'];
    };
    if ('prwidth' in css) {
        var w = css['prwidth'][1] - css['prwidth'][0];
        p.style.width = getVW(w)
        p.style.minWidth = getVW(w)
        p.style.paddingRight = getVW(css['prwidth'][0])
        delete css['prwidth'];
    };
    if ('phwidth' in css) {
        var w = css['phwidth'][1] - (css['phwidth'][0] * 2);
        p.style.width = getVW(w)
        p.style.minWidth = getVW(w)
        p.style.paddingLeft = getVW(css['phwidth'][0])
        p.style.paddingRight = getVW(css['phwidth'][0])
        delete css['phwidth'];
    };
    if ('pvheight' in css) {
        var h = css['pvheight'][1] - (css['pvheight'][0] * 2);
        p.style.height = getVW(h)
        p.style.minHeight = getVW(h)
        p.style.paddingTop = getVW(css['pvheight'][0])
        p.style.paddingBottom = getVW(css['pvheight'][0])
        delete css['pvheight'];
    };
    if ('ptheight' in css) {
        var h = css['ptheight'][1] - (css['ptheight'][0]);
        p.style.height = getVW(h)
        p.style.minHeight = getVW(h)
        p.style.paddingTop = getVW(css['ptheight'][0])
        delete css['ptheight'];
    };
    if ('pbheight' in css) {
        var h = css['pbheight'][1] - (css['pbheight'][0]);
        p.style.height = getVW(h)
        p.style.minHeight = getVW(h)
        p.style.paddingBottom = getVW(css['pbheight'][0])
        delete css['pbheight'];
    };
    if ('pwh' in css) {
        var w = css['pwh'][1] - (css['pwh'][0] * 2);
        var h = css['pwh'][2] - (css['pwh'][0] * 2);
        p.style.width = getVW(w)
        p.style.minWidth = getVW(w)
        p.style.height = getVW(h)
        p.style.minHeight = getVW(h)
        p.style.paddingLeft = getVW(css['pwh'][0])
        p.style.paddingRight = getVW(css['pwh'][0])
        p.style.paddingTop = getVW(css['pwh'][0])
        p.style.paddingBottom = getVW(css['pwh'][0])
        delete css['pwh'];
    };
    if ('ppwh' in css) {
        var w = css['pwh'][2] - (css['pwh'][0] * 2);
        var h = css['pwh'][3] - (css['pwh'][1] * 2);
        p.style.width = getVW(w)
        p.style.minWidth = getVW(w)
        p.style.height = getVW(h)
        p.style.minHeight = getVW(h)
        p.style.paddingLeft = getVW(css['pwh'][0])
        p.style.paddingRight = getVW(css['pwh'][0])
        p.style.paddingTop = getVW(css['pwh'][1])
        p.style.paddingBottom = getVW(css['pwh'][1])
        delete css['ppwh'];
    };
    if ('margin' in css) {
        if (typeof css['margin'] == "string") {
            p.style.margin = css['margin']
        } else {
            p.style.margin = getVW(css['margin'])
        }
        delete css['margin'];
    };
    if ('margint' in css) {
        if (typeof css['margint'] == "string") {
            p.style.marginTop = css['margint']
        } else {
            p.style.marginTop = getVW(css['margint'])
        }
        delete css['margint'];
    };
    if ('marginb' in css) {
        if (typeof css['marginb'] == "string") {
            p.style.marginBottom = css['marginb']
        } else {
            p.style.marginBottom = getVW(css['marginb'])
        }
        delete css['marginb'];
    };
    if ('marginl' in css) {
        if (typeof css['marginl'] == "string") {
            p.style.marginLeft = css['marginl']
        } else {
            p.style.marginLeft = getVW(css['marginl'])
        }
        delete css['marginl'];
    };
    if ('marginr' in css) {
        if (typeof css['marginr'] == "string") {
            p.style.marginRight = css['marginr']
        } else {
            p.style.marginRight = getVW(css['marginr'])
        }
        delete css['marginr'];
    };
    if ('marginh' in css) {
        if (typeof css['marginh'] == "string") {
            p.style.marginLeft = css['marginh']
            p.style.marginRight = css['marginh']
        } else {
            p.style.marginLeft = getVW(css['marginh'])
            p.style.marginRight = getVW(css['marginh'])
        }
        delete css['marginh'];
    };
    if ('marginv' in css) {
        if (typeof css['marginv'] == "string") {
            p.style.marginTop = css['marginv']
            p.style.marginBottom = css['marginv']
        } else {
            p.style.marginTop = getVW(css['marginv'])
            p.style.marginBottom = getVW(css['marginv'])
        }
        delete css['marginv'];
    };
    if ('border' in css) {
        p.style.border = getVW(css['border'][0]) + ' ' + css['border'][1]
        delete css['border'];
    };
    if ('bordert' in css) {
        p.style.borderTop = getVW(css['bordert'][0]) + ' ' + css['bordert'][1]
        delete css['bordert'];
    };
    if ('borderl' in css) {
        p.style.borderLeft = getVW(css['borderl'][0]) + ' ' + css['borderl'][1]
        delete css['borderl'];
    };
    if ('borderr' in css) {
        p.style.borderRight = getVW(css['borderr'][0]) + ' ' + css['borderr'][1]
        delete css['borderr'];
    };
    if ('borderb' in css) {
        p.style.borderBottom = getVW(css['borderb'][0]) + ' ' + css['borderb'][1]
        delete css['borderb'];
    };
    if ('border-radius' in css) {
        if (css['border-radius'].length == 1) {
            var tl = css['border-radius'][0];
            var bl = css['border-radius'][0];
            var br = css['border-radius'][0];
            var tr = css['border-radius'][0];
        } else if (css['border-radius'].length == 2) {
            var tl = css['border-radius'][0];
            var bl = css['border-radius'][1];
            var br = css['border-radius'][1];
            var tr = css['border-radius'][0];
        } else {
            var tl = css['border-radius'][0];
            var bl = css['border-radius'][1];
            var br = css['border-radius'][2];
            var tr = css['border-radius'][3];
        }
        p.style.borderTopLeftRadius = getVW(tl);
        p.style.borderTopRightRadius = getVW(tr);
        p.style.borderBottomLeftRadius = getVW(bl);
        p.style.borderBottomRightRadius = getVW(br);
        delete css['border-radius'];
    };
    if ('font-size' in css) {
        if (css['font-size'].length == 1) {
            p.style.fontStyle = 'normal';
            p.style.fontSize = getVW(css['font-size'][0])
            p.style.lineHeight = getVW((css['font-size'][0] + 5))
            p.style.letterSpacing = '-0.015em';
        } else if (css['font-size'].length == 2) {
            p.style.fontStyle = 'normal';
            p.style.fontWeight = css['font-size'][1];
            p.style.fontSize = getVW(css['font-size'][0])
            p.style.lineHeight = getVW((css['font-size'][0] + 5))
            p.style.letterSpacing = '-0.015em';
        } else {
            p.style.fontStyle = 'normal';
            p.style.fontWeight = css['font-size'][1];
            p.style.fontSize = getVW(css['font-size'][0])
            p.style.lineHeight = getVW(css['font-size'][2])
            p.style.letterSpacing = '-0.015em';
        }
        delete css['font-size'];
    };
    for (let i = 0; i < Object.keys(css).length; i++) {
        p.style.setProperty(Object.keys(css)[i], css[Object.keys(css)[i]])
    };
    return
}

function divBtnCss(p) {
    style(p, {
        'container': 'row',
        'border-radius': [10],
        'cursor': 'pointer',
    });
    for (let i = 0; i < p.getElementsByTagName('img').length; i++) {
        style(p.getElementsByTagName('img')[i], {
            'width': '21',
            'margin-left': 5,
        });
    }
    hover(p, '');
}

function btn1Css(p) {
    p.style.color = '#FFFFFF'
    p.style.backgroundColor = '#1E5C54'
    p.style.border = 'none'
    p.style.borderRadius = getVW(10)
}

function btn2Css(p) {
    p.style.color = '#1E5C54'
    p.style.backgroundColor = '#FFFFFF'
    p.style.border = 'none'
    p.style.borderRadius = getVW(10)
}

function hover(p, type) {
    p.onmouseover = function() {
        if (type == '') {
            p.classList.add('hover')
        } else if (type == 'bb') {
            p.classList.add('hoverbb')
        } else if (type == 'bl') {
            p.classList.add('hoverbl')
        }
    }
    p.onmouseout = function() {
        if (type == '') {
            p.classList.remove('hover')
        } else if (type == 'bb') {
            p.classList.remove('hoverbb')
        } else if (type == 'bl') {
            p.classList.remove('hoverbl')
        }
    }
    p.onclick = function() {
        if (type == '') {
            p.classList.remove('hover')
        } else if (type == 'bb') {
            p.classList.remove('hoverbb')
        } else if (type == 'bl') {
            p.classList.remove('hoverbl')
        }
    }
}

function myModalCss(p) {
    style(p, {
        'display': 'none',
        /* Hidden by default */
        'container': 'row',
        'position': 'fixed',
        /* Stay in place */
        'z-index': 1,
        /* Sit on top */
        'left': 0,
        'top': 0,
        'right': 0,
        'bottom': 0,
        'width': '100vw',
        /* Full width */
        'height': '100vh',
        /* Full height */
        'overflow': 'auto',
        /* Enable scroll if needed */
        'background-color': 'rgb(0,0,255)',
        /* Fallback color */
        'background-color': 'rgba(0,0,255,0.4)',
        /* Black w/ opacity */
    });
}

function closeCss(p) {
    style(p, {
        'container': 'row',
        'width': 30,
        'height': 30,
        'position': 'absolute',
        'top': getVW(16),
        'right': getVW(24),
        'z-index': '1',
        'border-radius': [60],
        'background-color': 'rgba(125,125,125,0.1)',
        'cursor': 'pointer',
    });
    style(p.getElementsByTagName('img')[0], {
        'width': 16,
        'height': 16,
    });
    hover(p, '')
}

function merchandiseModalBodyCss(p) {
    style(p, {
        'container': 'column',
        'width': 130,
        'height': 124,
        'background-color': '#1E5C54',
        'position': 'absolute',
        'top': getVW(94),
        'left': getVW(675),
    });
    for (let i = 0; i < p.children.length; i++) {
        style(p.children[i], {
            'container': 'column',
            'width': 130,
            'height': 61,
            'borderb': [1, 'solid #D9D9D9'],
            'font-size': [20, 400],
            'color': '#FFFFFF',
            'cursor': 'pointer',
        });
    }
}

function alertModalBodyCss(p) {
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
    closeCss(p.children[0].children[0]);
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
    });
}

function MenuSelectItemSizeModalBodyCss(p) {
    //modal body
    style(p, {
        'container': 'column',
        'width': 500,
        'height': 543,
        'border': [3, 'solid #D9D9D9'],
        'border-radius': [45],
    });
    //modal body header
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
    //colse btn
    closeCss(p.children[0].children[0]);
    //customize your drink/meal
    style(p.children[0].getElementsByTagName('h3')[0], {
        'width': 416,
        'font-size': [25, 700, 25],
        'position': 'absolute',
        'top': (36 * 100 / 1440).toString() + 'vw',
        'color': '#1E5C54',
    });
    //item name
    style(p.children[0].getElementsByTagName('p')[0], {
        'phwidth': [18, 416],
        'font-size': [22, 600],
        'position': 'absolute',
        'marginb': 10,
        'top': (79 * 100 / 1440).toString() + 'vw',
        'color': '#1E5C54',
        'text-align': 'center',
    });
    // select cup size + small large container
    style(p.children[0].children[3], {
        'container': 'row',
        'phwidth': [18, 416],
        'position': 'absolute',
        'top': (126 * 100 / 1440).toString() + 'vw',
        'justify-content': 'space-between',
    });
    // select a cup size
    style(p.children[0].children[3].getElementsByTagName('p')[0], {
        'font-size': [18, 600, 22],
    });
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
            'marginb': 25,
            'text-align': 'center',
        });
        style(slC[i].getElementsByTagName('p')[0], {
            'font-size': [20, 600, 22],
            'text-align': 'center',
        });
    }
    //footer
    style(p.children[1], {
        'container': 'row',
        'phwidth': [31.5, 500],
        'border-radius': [0, 45],
        'font-size': [20, 700],
        'justify-content': 'space-between',
    });
    style(p.children[1].children[0], {
        'container': 'row',
        'color': '#FFFFFF',
        'font-size': [22, 600],
    });
    container(p.children[1].children[1], 'row');
    divBtnCss(p.children[1].children[1]);
}

function selected(p) {
    style(p, {
        'border': [1, 'solid orange !important'],
        'color': 'orange',
    });
}

function MenuItemModalBodyCss(p) {
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
    closeCss(p.children[0].children[0]);
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
    style(p.children[1].children[1], {
        'container': 'row'
    });
    divBtnCss(p.children[1].children[1]);
}

function hide(p) {
    p.style.display = 'none'
}

function show(p) {
    p.style.display = 'flex'
}

function errorContainerCss(p) {
    if (vw <= 900) {
        style(p, {
            'container': 'row',
            'phwidth': [5, 524],
            'height': 35,
            'marginb': 5,
            'font-size': [17, 400, 17],
            'color': 'red',
        });
    } else {
        style(p, {
            'container': 'row',
            'phwidth': [5, 524],
            'height': 36,
            'marginb': 10,
            'font-size': [17, 400, 16],
            'color': 'red',
        });
    }
}

function cartPreviewItemCss(p) {
    style(p, {
        'container': 'column',
        'width': 335,
        'height': 70,
        'marginb': 50,
        'align-items': 'flex-start',
    });
    // paragraph (name)
    style(p.children[0], {
        'container': 'row',
        'width': 335,
        'height': 13,
        'marginb': 23,
        'font-size': [14, 600, 17],
        'align-items': 'flex-start',
        'justify-content': 'flex-start'
    });
    // priceUnit Container
    style(p.children[1], {
        'container': 'row',
        'width': 335,
        'height': 34,
        'justify-content': 'space-between'
    });
    // price Container
    style(p.children[1].children[0], {
        'font-size': [18, 600, 22]
    });
    // unit Container
    style(p.children[1].children[1], {
        'container': 'row',
        'phwidth': [14.5, 112],
        'height': 34,
        'border': [1, 'solid #D9D9D9'],
        'border-radius': [6],
        'filter': 'drop-shadow(0vw ' + getVW(4) + ' ' + getVW(4) + ' vw #00000040)',
        'background-color': '#FFFFFF',
        'justify-content': 'space-between'
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

function cartPreviewItemEmptyCss(p) {
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

function pageContainerCss(p) {
    style(p, {
        'container': 'column',
        'align-items': 'flex-start',
        'justify-content': 'flex-start',
    });
}