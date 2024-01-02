<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/cart6.css">
</head>

<body>
	<?php
		include 'navbar.php';
	?>
    <div id="cartContainer" class="cartContainer">
        <div id="cartItemsContainer" class="cartItemsContainer">
            <div id="cartItemsHeader" class="cartItemsHeader">
                <div id="addressContainer" class="addressContainer">
                    <img src="assets/dashicons/location.png" alt="LI">
                    <span>Diliver to <span id="location">....</span></span>
                    <div id="changeBtn">CHANGE</div>
                </div>
                <div id="numberContainer" class="numberContainer">
                    <img src="assets/dashicons/whatsapp.png" alt="NI">
                    <span id="number">9999900000<span>&nbsp;(Order Updates will be sent to this number.)</span></span>
                    <div id="changeBtn">CHANGE</div>
                </div>
            </div>
            <div class="cartItemsFooter">
                <h2>Items in cart</h2>
				<div class="cartItemsFooterItemsContainer">
					<div class="cartItemsFooterItemContainer">
						<div id="default" class="cartItemContainerDefault">
							<p>Your Cart is Empty!</p>
						</div>
					</div>
				</div>
            </div>
        </div>
        <div class="cartBillOuterContainer">
            <div class="cartBillContainer">
                <div class="cartBillHeader">
                    <h4>Bill Details</h4>
                    <div>
                        <div><span>Item Total</span><span id="price">365.00</span></div>
                        <div><span>CGST</span><span id="cgst">100.25</span></div>
                        <div><span>SGST</span><span id="sgst">100.75</span></div>
                    </div>
                    <div>
                        <div><span>To Pay</span><span id="totalPrice">566.00</span></div>
                    </div>
                </div>
                <div class="cartBillOffer">
                    <div id='storeOfferOuterContainer' class="cartBillOfferItemContainer">
						<div id='storeOfferContainer' class='divBtn'>
							<img src="assets/dashicons/offer.png" alt="Of">
							<p>Apply Store offer</p>
							<img src="assets/dashicons/arrow2.png" alt="OA">
						</div>
                    </div>
                    <div id='BankWalletOfferOuterContainer' class="cartBillOfferItemContainer">
						<div id='BankWalletOfferContainer' class='divBtn'>
							<img src="assets/dashicons/offer.png" alt="Of">
                        	<p>Apply Bank/Wallet offer</p>
                        	<img src="assets/dashicons/arrow2.png" alt="OA">
						</div>
                    </div>
                </div>
                <div id="cartBillFooter" class="cartBillFooter">
					<div id="addAddressAndPayBtn" class='divBtn'>
						<span>ADD ADDRESS & PAY</span>
						<img src="assets/dashicons/arrow2White.png" alt="CI">
					</div>
				</div>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div id="offerModal" class="myModal">
        <!-- Modal content -->
        <div id="modalBody" class="modalBody">
            <div id="modalBodyHeader" class="modalBodyHeader">
                <div id="close" class="close">
                    <img src="assets/dashicons/close2.png">
                </div>
				<p>Offers</p>
			</div>
			<div id="modalBodyContent" class='modalBodyContent'>
                <div id="modalBodyContentHead">
					<div id="storeOfferHead" class="divBtn">Store Offers</div>
					<div id="bankWalletOfferHead" class="divBtn">Bank/Wallet Offers</div>
				</div>
				<div id="modalBodyContentBody" class='modalBodyContentBody'>
					<div id="storeBody" >
						<input id=StoreOfferInput placeholder="Please enter the Promo Code"></input>
						<div id="StoreOfferApplyBtn" class="divBtn">APPLY</div>
					</div>
					<div id="bankWalletBody">
						<input id=bankwalletInput placeholder="Please enter the Promo Code"></input>
						<div id="bankwalletApplyBtn" class="divBtn">APPLY</div>
					</div>
				</div>
            </div>
            <div id="modalBodyFooter" class="modalBodyFooter">
				<div id="proceedBtn" class='divBtn'>Proceed</div>
			</div>
        </div>
    </div>
    <?php
		include 'footer.php';
	?>
    <script type="module" src="cart6.js"></script>
</body>
</html>