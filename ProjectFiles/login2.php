<?php
session_start();


?>

<!DOCTYPE html>
<html id="top">
<head>
  <title>Butterfly: Fun, Share, Learn</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script type="text/javascript"></script>
  <style type="text/css">
  </style>
</head>

<body background="photos/background.jpg">
<div class="whole-page">
  <div class="topbar">
    <div class="name">
      <img src="photos/name.gif" alt="name" wclassth="120" height="60">
    </div>
    <div class="topmenu">
      <ul>
        <a href="index.php">Home</a>
         <a href="tranding.php">Trending</a>
      </ul>
    </div>
	
    <div class="search">
      <form class="search_form" action="search-result.php" method = "post">
        <input type="text" name="search-value" placeholder="Search here...">
        <button type="submit" class="button" name='submit' value="Search">Q</button>
      </form>
    </div>
    <div class="loginfo" style="position: relative; right: 80px;">
      <button type="button" class="button2"><a href="signup.php">SignUp</a></button>
    </div>
    <div class="clear"></div>
  </div>

<div class="content content-group">
    <div class="catagories" ><br>
      <label style="text-align: center; font-size: 22px; color: blue; font-weight: bold;">Topics</label>
      <ul class="content-list">
        <li>
			<form action="search-result.php" method="post">
				<input type="hidden" name="search-value" value="Animation">
				<input type="submit" style="background-color: transparent; border: none; font-size: 16px; color: red; font-weight: bold;" name="submit" value="Animation">
			</form>
		</li>
        <li>
			<form action="search-result.php" method="post">
				<input type="hidden" name="search-value" value="Study">
				<input type="submit" style="background-color: transparent; border: none; font-size: 16px; color: red; font-weight: bold;" name="submit" value="Study">
			</form>
		</li>
        <li>
			<form action="search-result.php" method="post">
				<input type="hidden" name="search-value" value="Game">
				<input type="submit" style="background-color: transparent; border: none; font-size: 16px; color: red; font-weight: bold;" name="submit" value="Game">
			</form>
		</li>
        <li>
			<form action="search-result.php" method="post">
				<input type="hidden" name="search-value" value="TV Series">
				<input type="submit" style="background-color: transparent; border: none; font-size: 16px; color: red; font-weight: bold;" name="submit" value="TV Series">
			</form>
		</li>
        <li>
			<form action="search-result.php" method="post">
				<input type="hidden" name="search-value" value="Natok">
				<input type="submit" style="background-color: transparent; border: none; font-size: 16px; color: red; font-weight: bold;" name="submit" value="Natok">
			</form>
		</li>
		</li>
      </ul>
    </div><br>
    <div class="videos" style="height:450px; font-size:20px; background:#AAAAAA"><br>
  

	
		<form class="login" action="login.php" method="POST" accept-charset="UTF-8">
        <fieldset style="width:40%; position:relative; left: 27%; background:#DDDDDD">
          <!--<input type='hidden' name='submitted' id='submitted' value='1'/>-->
   
          <label for="username" ><h2>Login</h2></label>
          <label for="email" >Email</label><br>
          <input type="email" placeholder="Enter your email" id="username"  maxlength="50" name="email" required  /><br>
         
          <label for="password" >Password</label><br>
          <input type="password"  placeholder="********" id="password" maxlength="50" name="password" required/><br><br>
         
            <input type="submit" name="submit"  value="submit"  /><br><br>
			
			<?php
				@$name=$_SESSION['id3'];
				if(@$name)
				{
					echo "<label style=\"color:red;\">Invalid email id </label>";
					$_SESSION['id3']=0;
				}
			?>
			
         
           </fieldset>
          </form>

    </div>
    <div class="ad">AD</div>
  </div>

  <div class="footer">
    <div class="footer-links footer-links-group">
      <ul class="footer-links-primary footer-links-primary-group">  
        <li><a href="">About</a></li>
        <li><a href="">Press</a></li>
        <li><a href="">Copyright</a></li>
        <li><a href="">Creators</a></li>
        <li><a href="">Developers</a></li>
      </ul>
      <ul class="footer-links-secondary footer-links-secondary-group">  
        <li><a href="">Terms</a></li>
        <li><a href="">Privacy</a></li>
        <li><a href="">Policy &amp; Safety</a></li>
        <li><a href="">Send feedback</a></li>
      </ul>
      <a href="#top" class="back-to-top"></a>
    </div>
  </div>
</div>
</body>
</html>

