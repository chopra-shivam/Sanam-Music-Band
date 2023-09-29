<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SANAM | LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href='tour.php'>THE SANAM</a>
            </div>
            <nav>
                <ul id='MenuItems'>
                
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                    <li><a href="home.php">Logout</a></li>
                </ul>
            </nav>
        </div>
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login' action="loginphp.php" method="POST">
                    <input type='text'class='input-field'placeholder='Email Id'name="eemail" required >
		    <input type='password'class='input-field' placeholder='Enter Password'name="ccpass" required><br><br><br>
		    <button type='submit'class='submit-btn'>Log in</button>
		 </form>
		 <form id='register' class='input-group-register' action="registerphp.php" method="POST">
		     <input type='text'class='input-field'placeholder='First Name' name="ffname"required>
		     <input type='text'class='input-field'placeholder='Last Name ' name="llname"required>
		     <input type='email'class='input-field'placeholder='Email Id'name="eemail" required>
		     <input type='password'class='input-field'placeholder='Enter Password'name="eepass" required>
		     <input type='password'class='input-field'placeholder='Confirm Password' name="ccpass" required><br><br><br>
                    <button type='submit'class='submit-btn'>Register</button>
	         </form>
            </div>
        </div>
    </div>

    

    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
