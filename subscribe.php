<!DOCTYPE html>
<html>
    <head>
        <title>
            SANAM | Subrcribe 
        </title>
        <link rel="stylesheet" href="sum.css">

    </head>
    <body class="sub-body">
        <header class="main-header">
            <nav class="nav main-nav">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="tour.php">Tour</a></li>
                    <li><a href="store.php">Store</a></li>
                    <li><a href="subscribe.php">Subscribe</a></li>
                    <li><a href="home.php">Logout</a></li>
                    
                </ul>
            </nav>
            
            
            <h1 class="band-name band-name-header">The Sanam</h1>
            
        </header>
        <section class="content subscribe-content">
            <h2 class="section-header">JOIN THE MAILING LIST</h2>
            <div class="mail-para">
                <p> WELCOME TO SANAM PURI'S MAILING LIST!</p>
                <p>TO GET LATEST TOURS TICKETS,LATEST ALBUMS AND TO GET DISCOUNT IN ONLINE STORE JOIN SANAM PURI MAILING LIST.</p>
            </div>
           <div class="form-div">
            <form id="joining-mail" class="form" method="post" action="subphp.php">
                <input type="text" placeholder="NAME" class="input-mail" name="name" required><br>
                <input type="email" placeholder="EMAIL" class="input-mail" name="email" required><br>
                <input type="password" placeholder="PASSWORD" class="input-mail" name="password" size="20" required><br>
                <input type="text" placeholder="COUNTRY" class="input-mail" name="country" required><br>
                <input type="text" onfocus="(this.type='date')" placeholder="DATE OF BIRTH" class="input-mail" name="dob" required><br>
                <input type="submit" value="JOIN" class="join">
               

            </form>
            <details class="terms">
                <summary>terms</summary>
                <p class="term-para">By submitting my information, I agree to receive personalized updates and marketing messages about SANAM based on my information, interests, activities, website visits and device data and in accordance with the Privacy Policy. I understand that I can opt-out at any time by emailing privacypolicy@wmg.com.</p>
            </details>
           
           </div>
           

          
        </section>
    
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