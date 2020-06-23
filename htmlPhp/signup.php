
<?php        
    require("createuser.php");

?>
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
  <li style="float:right"><a href="login.php">Sign in</a></li>
    <li style="float:right"><a href="about.html">About</a></li>
</ul>
<hr>
        <h1>Sign up</h1>
        <Form action="createuser.php" name="signInForm"  method="post">
            <label for="email" class="labels">E-Mail:</label>
            <input type="email" name="email" id="email">
            <p id="emailerror"><?php echo $emailErr?></p><br>
            <label for="password" class="labels" id="password">Password:</label>
            <input type="password" name="password">
            <p id="pwrderror"><?php echo $passwordErr?></p><br>
            <label for="fName" class="labels">First Name:</label>
            <input type="text" name="fName" id="fName">
            <p id="fNameerror"><?php echo $fNameErr?></p><br>
            <label for="fName" class="labels" id="lName">Last Name:</label>
            <input type="text" name="lName">
            <p id="lNameerror"><?php echo $lNameErr?></p><br>
            
            
            <p>Please select your gender:</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>
            <p id="genderErr"><?php echo $genderErr?></p><br>

            
            
            <label for="country" class="labels">Country/Region:</label>
            <select name="country">
                    <option value=""></option>
                    <option value="Canada">Canada</option>
                    <option value="America">America</option>
                    <option value="England">England</option>
                    <option value="India">India</option>
            </select><p id="countryError"><?php echo $countryErr?></p><br>
            
<!--
            <label for="province" class="labels">Province:</label>
            <select name="province">
                    <option value="-">-</option>
                    <option value="Ontario">Ontario</option>
                    <option value="Alberta">Alberta</option>
                    <option value="Manitoba">Manitoba</option>
                    <option value="British Columbia">British Columbia</option>
            </select><br>
-->
            <input type="submit" name="submit" value="Submit">
            
            
        </Form>
        
<!--
        <script>
                        function javascriptvalidate()
                        {
                            var email= document.forms["signInForm"]["email"];
                            var password= document.forms["signInForm"]["password"];
                            var firstName= document.forms["signInForm"]["fName"];
                            var lastName= document.forms["signInForm"]["lName"];
                            var country= document.forms["signInForm"]["country"];
                            var province= document.forms["signInForm"]["province"];
                            
                            if(email.value== ""){
                                var msg = document.getElementById("error");
                                msg.innerHTML="This field is empty";
                                return false;
                            }
                            else if(password.value==""){
                                    if(isNaN(password.value)){
                                        var msg = document.getElementById("perror");
                                        msg.innerHTML="This field is empty";
                                        return false;
                                    }
                                        
                            }
                           
                        }
        </script>
-->
    <div class="footer">
  <p><small>&copy; Copyright 2020, Hotel.com</small></p>
</div>
    </body>
</html>