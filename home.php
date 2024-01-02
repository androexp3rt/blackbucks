<!DOCTYPE html>
<?php
    require_once "config.php";
    clearstatcache();
    session_start();
?>
<html>
<body>
    <link rel='stylesheet' href='css/home.css'>
    <?php
    include 'navbar.php';
    ?> 
    <script>
        var body = document.getElementsByTagName('body')[0]
        dom(body, '<div id="homeContainer"></div>')
        var homeContainer = document.getElementById('homeContainer')
        dom(homeContainer, ('<div></div>').repeat(3))
        var home1 = homeContainer.children[0]
        var home2 = homeContainer.children[1]
        var home3 = homeContainer.children[2]
        dom(home1, ('<div></div>').repeat(2))
        var banner1 = home1.children[0]
        var banner2 = home1.children[1]
        dom(banner1, '<p></p>')
        banner1.children[0].innerHTML = "IT'S YOUR CHOICE.<br>SAME FLAVOR,<br>ZERO COMPROMISES."
        dom(banner2, '<p></p><p></p>')
        banner2.children[0].innerHTML = "Simple Love<br>Smoothies"
        banner2.children[1].innerHTML = "we are introducing Simple Love Smoothies, without added sugar. As always, both have the flavor you love and are made with whole fruits and no artificial colors, flavors or preservatives."
        dom(home2, ('<div></div>').repeat(2))
        dom(home2.children[0], "<p>HOW WE'RE DIFFERENT</p>")
        dom(home2.children[1], ('<div></div>').repeat(2))
        var home2upper = home2.children[1].children[0]
        var home2lower = home2.children[1].children[1]
        dom(home2upper, '<img><div></div>')
        home2upper.children[0].src = 'assets/home/home2BodyImg1.png'
        dom(home2upper.children[1],('<p></p>').repeat(2))
        home2upper.children[1].children[0].innerHTML = 'OUR CLEAN BLENDS PROMISE'
        home2upper.children[1].children[1].innerHTML = "Each smoothie on our menu has a specific purpose, carefully crafted to help you reach your goals. Next time you're at Blackbucks, watch us make your smoothie. You’ll see simple things you recognize… whole fruits, organic veggies, and our purposeful powders. You won’t see spoonfuls of added sugar in many blends or any artificial colors, flavors or preservative"
        dom(home2lower, '<div></div><img>')
        dom(home2lower.children[0],('<p></p>').repeat(2))
        home2lower.children[0].children[0].innerHTML = "WE'RE PROUD OF WHAT WE DON'T PUT IN OUR SMOOTHIES"
        home2lower.children[0].children[1].innerHTML = "Your health and fitness goals matter. That's why we're proud of what we put in our cup — even prouder of what we don't."
        home2lower.children[1].src = 'assets/home/home2BodyImg2.png'
        dom(home3, ('<div></div>').repeat(2))
        dom(home3.children[0],'<p>PURPOSE BLENDED SMOOTHIES</p>')
        dom(home3.children[1],'<p></p><img>')
        home3.children[1].children[0].innerHTML = "Our Smoothies are packed with nutrient-rich fuel for experience-rich lives. Check out our unique menu categories to learn how we can help you meet your health and fitness goals."
        home3.children[1].children[1].src = "assets/home/home3Bg1.png"
        if( vw <= 600){
            homeContainer.classList.add('homeContainerPhone')    
        } else {
            homeContainer.classList.add('homeContainer')
        }
    </script>
</body>

</html>