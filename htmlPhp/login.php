<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: black;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
    background-color: white;
    color: black;
}

.active {
  color: #4CAF50;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid black;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
div.btn {background-color: silver; 
  
  color: white;
  padding: 15px 33px;
  text-align: center;
  text-decoration: none;
 
  font-size: 16px;
}
    .footer {
  position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
    div.name{
        text-align: center;
        text-decoration: none;
    }
    div.price{
         text-align: center;
        text-decoration: none;
    }
</style>
</head>
<body>

<ul>
  <li><a href="Home.html">Home</a></li>
  <li><a class="active" href="discount.html">Discount</a></li>
  <li><a href="contact.html">Contact</a></li>
    <li><a href="gallery.html">Gallery</a></li>
    <li><a href="registration.html">Registration</a></li>
    <li><a href="Accomodation.html">Accomodation</a></li>
  <li style="float:right"><a class="active" href="login.php">Sign in</a></li>
    <li style="float:right"><a href="about.html">About</a></li>
</ul>
<hr>
    <form action="loginphp.php" method="post">
        <h1>Sign In</h1>
        <p> Username: <input type="text" name="username" size="30" maxlength="50"></p>
        <p> Password: <input type="password" name="password" size="30" maxlength="16"> </p>
        <p> <input type="submit"> </p>
        <P><a href="signup.php">Sign up</a></P>
        </form>

 <div class="footer">
  <p><small>&copy; Copyright 2020, Hotel.com</small></p>
</div>
</body>
</html>