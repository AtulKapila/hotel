<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="css/bootstrap.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>

    .footer {
  position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
    

</style>
</head>
<body>
   <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">hotel</label>
      <ul>
<li><a href="Home.html">Home</a></li>
<li><a href="discount.html">Team</a></li>
<li><a href="contact.html">Contact</a></li>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="registration.html">Registration</a></li>
<li><a href="Accomodation.html">Accomodation</a></li>
<li><a href="about.html">About</a></li>
<li><a  class="active"href="login.php">Sign in</a></li>
</ul>
</nav>
    <div class="container">
    <form action="loginphp.php" method="post">
        <h1>Sign In</h1>
        <table>
            <tr><div class= "form-group"><td>Username:</td><td> <input type="text" name="username" size="30" maxlength="50"></td></div></tr>
            <tr><div class= "form-group"> <td>Password:</td><td> <input type="password" name="password" size="30" maxlength="16"></td> </div></tr>
            <tr><td> <input type="submit" class="btn btn-primary"></td></tr>
            <tr><td><a href="signup.php" >Sign up</a></td></tr>
        </table>
    </form>
    </div>
 <div class="footer">
  
      <p>
        Copyright &copy; 2018-20 Hotel.com <br>
        E.MAIL-ID:Mr Singh <a href="mailto:hotel@gmail.com">(hotel@gmail.com) </a> <br>
        &#9742; : &nbsp; 287-501-3627
      </p>
      
    </div>                
    </body>
     
</html>