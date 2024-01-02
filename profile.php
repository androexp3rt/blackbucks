<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="profileContainer">
        <div class="alternateProfileContainer">
            <img src="assets/profile.png" alt="profile">
            <button id="editBtn" class="btn2">Edit</button>
        </div>
        <p class="profileNameContainer">Profile-abc</p>
        <div class="profileInfoContainer">
            <img src="assets/dashicons_job2.png" alt="PR">
            <p>Lorem ipsum, dolor sit amet consectetur obcaecati enim commodi illum! Doloribus inventore vel provident, facilis in optio omnis quaerat labore aut placeat dolore esse iure ipsum corrupti.</p>
        </div>
        <div class="alternateProfileContainer2">
        <div class="emailContainer">
            <img src="assets/dashicons_email.png" alt="E">
            <span>EmailAddress@emailhosting.com</span>
        </div>
        <div class="genderContainer">
            <img src="assets/gender.png" alt="G">
            <span>M/F</span>
        </div>
        <div class="phoneContainer">
            <img src="assets/dashicons_phone.png" alt="P">
            <span>+919999999999</span>
        </div>
    </div>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        var modalDetails = document.getElementById("ModalDetails");
        // Get the button that opens the modal
        var btn1 = document.getElementById("myBtn1");
        var btn2 = document.getElementById("myBtn2");
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks the button, open the modal 
        btn1.onclick = function() {
            modalDetails.innerHTML = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ratione enim, voluptates nesciunt atque eligendi accusamus debitis quibusdam adipisci illum a. Vitae facere ipsum earum consectetur aut corporis tenetur voluptatibus?"
            modal.style.display = "block";
        }
        btn2.onclick = function() {
            modalDetails.innerHTML = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ratione enim, voluptates nesciunt atque eligendi accusamus debitis quibusdam adipisci illum a. Vitae facere ipsum earum consectetur aut corporis tenetur voluptatibus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ratione enim, voluptates nesciunt atque eligendi accusamus debitis quibusdam adipisci illum a. Vitae facere ipsum earum consectetur aut corporis tenetur voluptatibus?"
            modal.style.display = "block";
        }
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>