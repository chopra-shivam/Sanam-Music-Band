<!DOCTYPE html>
<html>
    <head>
        <title>
            SANAM | Tour Booking
        </title>
        <meta name="description" content="This is the descrition">
        <link rel="stylesheet" href="sum.css">
        

    </head>

        <body class="sub-body">
            <header class="main-header">
                <nav class="nav main-nav">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="tour.php">Tour</a></li>
                        
                        <li><a href="login.php">Login</a></li>
                        
                    </ul>
                </nav>
                
                
                <h1 class="band-name band-name-header">BOOK TOUR TICKETS</h1>
                
            </header>
            
               <div class="centerr">
                <form action="book_tiketphp.php" method="POST">

                    <label class="tour_date">Tour Date:</label>
                    <select id="tour_date" class="tdd" name="tdd" required>
                      <option value="jan10" name="tdd1" >JAN 10</option>
                      <option value="jan18" name="tdd2">JAN 18</option>
                      <option value="jan24" name="tdd3">JAN 24</option>
                      <option value="jan31" name="tdd4">JAN 31</option>
                      <option value="feb04" name="tdd5">FEB 04</option>
                    </select><br><br>
                    <input type="text" class="name" name="name" placeholder="FULL NAME" required><br><br>
                    <input type="email" class="email"  name ="email"placeholder="EMAIL ID" required><br><br>
                    <input type="number" class="no" id="not" name="no" placeholder="TOTAL TICKETS" required><br><br>
                    <div class="total">
                        <strong>TOTAL</strong>
                        <span id="ll">0</span>
                    </div>
                    <button class="btn btntt" id="kk"> BUY</button>
               </div>


               

                </form>

        <script src="book.js"></script>
            
        </body>

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
    
    

</html>