<!DOCTYPE html>
<html>
    <head>
        <title>
            SANAM | Store 
        </title>
        <link rel="stylesheet" href="sum.css">
        <script src="store.js" async></script>
    </head>
    <body class="sub-body">
        <header class="main-header">
            <nav class="nav main-nav">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="tour.php">Tour</a></li>
                    <li><a href="store.php">Store</a></li>
                    <li><a href="subscribe.php">Subscribe</a></li>
                    <li><a href="home.php">LogOut</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-header" >The Sanam</h1>
        </header>
        <h3 class="section-header">MUSIC</h3>
        <section class="content store-content">
         <div class="section-store">
            <div class="shop-item">
                <div class="shop-item-title">
                    <strong>Album1</strong>
                </div>
                <img src="Images/album1.png" class="shop-item-image">
                <div class="shop-item-details">
                 <span class="shop-item-price"> &#8377;199</span>
                 <span><button class="btn shop-item-button" type="button">Add to Cart</button></span>
                </div>
            </div>
            <div class="shop-item">
               <div class="shop-item-title">
                   <strong>Album2</strong>
               </div>
               <img src="Images/album6.png" class="shop-item-image">
               <div class="shop-item-details">
                <span class="shop-item-price"> &#8377;99</span>
                <span><button class="btn shop-item-button" type="button">Add to Cart</button></span>
               </div>
           </div>
           <div class="shop-item">
               <div class="shop-item-title">
                   <strong>Album3</strong>
               </div>
               <img src="Images/album3.png" class="shop-item-image"> 
               <div class="shop-item-details">
                <span class="shop-item-price"> &#8377;99</span>
                <span><button class="btn shop-item-button" type="button">Add to Cart</button></span>
               </div>
           </div>
           <div class="shop-item">
               <div class="shop-item-title">
                   <strong>Album4</strong>
               </div>
               <img src="Images/album4.png" class="shop-item-image">
               <div class="shop-item-details">
                <span class="shop-item-price" > &#8377;199</span>
                <span><button class="btn shop-item-button" type="button">Add to Cart</button></span>
               </div>
           </div>
        </section>
        <section>
        <h2 class="section-header merch">MERCH</h2>
        <div class="section-merch">
           <div class="shop-item">
               <div class="shop-item-title">
                   <strong>T-shirt</strong>
               </div>
               <img src="Images/mer-tshirt.jpg" class="shop-item-image">
               <div class="shop-item-details">
                <span class="shop-item-price"> &#8377;299</span>
                <span><button class="btn shop-item-button" type="button">Add to Cart</button></span>
               </div>
           </div>
           <div class="shop-item">
               <div class="shop-item-title">
                   <strong>Coffee Cup</strong>
               </div>
               <img src="Images/cup.png" class="shop-item-image">
               <div class="shop-item-details">
                <span class="shop-item-price"> &#8377;199</span>
                <span><button class="btn shop-item-button" type="button">Add to Cart</button></span>
               </div>
           </div>
           
        </div>

        </section>

        <h3 class="section-header cart">CART</h3>
        <form action="storephp.php" method="POST">
        <section class="section-cart">
            <div class="cart-rows">
                <span class="cart-item cart-header cart-column" name="item">ITEM</span>
                <span class="cart-price cart-header cart-column" name="price">PRICE</span>
                <span class="cart-quantity cart-header cart-column" name="quantity">QUANTITY</span>
            </div>
            <div class="cart-items">
               
            </div>
            <div class="total">
                <strong>TOTAL</strong>
                <span class="cart-total-price" name="total">₹0</span>
            </div>
            <div>
                <button class="btn btn-purchase"  type="button">PURCHASE</button>
            </div>

        </section>
        
        </form>
       
       
        <footer class="main-footer">
            <h3 class="band-name footer-band-name">The Sanam</h3>
            <ul>
                <li>
                    <a href="https://spotify.com">
                    <img src="Images/spotify2.jpg" width="70px" height="50px">
                    </a>
                </li>

                <li>
                    <a href="https://www.youtube.com/c/sanam">
                    <img src="Images/youtube2.png" width="50px" >
                    </a>
                </li>
                <li>
                    <a href="https://facebook.com">
                    <img src="Images/facebook.png" width="30px" >
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com">
                    <img src="Images/instagram2.png" width="70px" >
                    </a>
                </li>
            </ul>
        </footer>

    </body>
</html>