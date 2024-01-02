<?php ?>
<!DOCTYPE html>
<html>

<body>
    <script>
        //------------------------------------------------------------------------------------------------//
        //------------------------------------------DOM and JS---------------------------------------------------//
        //------------------------------------------------------------------------------------------------//
        var body = document.getElementsByTagName('body')[0];
        //------------------------------------------FOOTER------------------------------------------------//
        dom(body, '<div id="footerContainer"></div>');
        var footerCotainer = document.getElementById('footerContainer');
        dom(footerCotainer, ('<div></div>').repeat(2));
        var footerHead = footerCotainer.children[0];
        dom(footerHead, ('<div></div>').repeat(3));
        var footerMenuContainer = footerHead.children[0];
        var footerLogoContainer = footerHead.children[1];
        var footerNewsletterContainer = footerHead.children[2];
        var footerMenu = {
            'About us': 'about.php',
            'Careers': 'careers.php',
            'Contact': 'contact.php',
            'Services': 'services.php'
        };
        for (let i = 0; i < Object.keys(footerMenu).length; i++) {
            dom(footerMenuContainer, '<a>' + Object.keys(footerMenu)[i] + ('&nbsp;'.repeat(8)) + ' </a>')
            footerMenuContainer.children[i].href = footerMenu[Object.keys(footerMenu)[i]];
        }
        dom(footerLogoContainer, '<img><p></p><div><img><img><img></div>');
        footerLogoContainer.children[0].src = 'assets/dashicons/logo.png';
        footerLogoContainer.children[1].innerHTML = 'Follow Us :';
        footerLogoContainer.children[2].children[0].src = 'assets/dashicons/insta.png';
        footerLogoContainer.children[2].children[1].src = 'assets/dashicons/fb.png';
        footerLogoContainer.children[2].children[2].src = 'assets/dashicons/linked.png';
        dom(footerNewsletterContainer, '<p></p><div><input/><div></div></div>')
        footerNewsletterContainer.children[0].innerHTML = 'Get the freshest news from us';
        var newsEmailBtnC = footerNewsletterContainer.children[1];
        newsEmailBtnC.children[0].type = 'email';
        newsEmailBtnC.children[0].placeholder = 'Your email Address';
        newsEmailBtnC.children[0].name = 'newsletterEmail';
        newsEmailBtnC.children[1].innerHTML = 'Subscribe';
        var footerFoot = footerCotainer.children[1];
        var footerFootMenu = {
            'Terms & Conditions': 'tnc.php',
            'Privacy Policy': 'privacy.php',
            'Accessibility': 'accessibility.php',
            'Legal': 'legal.php'
        }
        for (let i = 0; i < Object.keys(footerFootMenu).length; i++) {
            if(i != Object.keys(footerFootMenu).length -1) {
                dom(footerFoot, '<a>' + Object.keys(footerFootMenu)[i] + ' &nbsp;| &nbsp;' + ' </a>')
            } else {
                dom(footerFoot, '<a>' + Object.keys(footerFootMenu)[i]+'</a>')
            }
            footerFoot.children[i].href = footerFootMenu[Object.keys(footerFootMenu)[i]];
        }
        footerCotainer.classList.add('footerCotainer')
        //----------------------------------------Functional JS-----------------------------------------//
        footerLogoContainer.children[2].children[0].onclick = function() {
            //Redirect to insta
        }
        footerLogoContainer.children[2].children[1].onclick = function() {
            //Redirect to fb
        }
        footerLogoContainer.children[2].children[2].onclick = function() {
            //Redirect to linkedin
        }
        newsEmailBtnC.children[1].onclick = function() {
            //save email from input to db
            //show alert
        }
    </script>
</body>

</html>