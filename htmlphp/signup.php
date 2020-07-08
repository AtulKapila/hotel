 
<?php        
    require("createuser.php");

?>
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
<li><a href="discount.html">Discount</a></li>
<li><a href="contact.html">Contact</a></li>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="registration.html">Registration</a></li>
<li><a href="Accomodation.html">Accomodation</a></li>
<li><a href="about.html">About</a></li>
<li><a href="login.php">Sign in</a></li>
</ul>
</nav>
<hr><div class="container">
        <h1>Sign up</h1>
        <Form action="createuser.php" name="signInForm"  method="post">
          <table>
              <tr>  <label for="fName" class="labels"><td>First Name:</td></label>
                  <td><input type="text" name="fName" id="fName"></td>
                  <td>  <p id="fNameerror"><?php echo $fNameErr?></p></td></tr>
              <tr> <label for="fName" class="labels" id="lName"><td>Last Name:</td></label>
                  <td>    <input type="text" name="lName"></td>
                  <td> <p id="lNameerror"><?php echo $lNameErr?></p></td></tr>
            
              <tr> <label for="email" class="labels"><td>E-Mail:</td></label>
                  <td> <input type="email" name="email" id="email"></td>
                 <td> <p id="emailerror"><?php echo $emailErr?></p><br></td></tr>
              <tr>  <label for="password" class="labels" id="password"><td>Password:</td></label>
                  <td>  <input type="password" name="password"></td>
                 <td> <p id="pwrderror"><?php echo $passwordErr?></p></td></tr>
              
            
              <tr> <td> <p>Please select your gender:</p></td>
        <td> <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br></td>
             <td> <p id="genderErr"><?php echo $genderErr?></p></td></tr>

            
            
              <tr>  <label for="country" class="labels"><td>Country/Region:</td></label>
           <td> <select name="country">
                    <option value=""></option>
                    <option value="Canada">Canada</option>
                    <option value="America">America</option>
                    <option value="England">England</option>
                    <option value="India">India</option>
               </select></td><p id="countryError"><?php echo $countryErr?></p><br></tr>
            
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
              <tr><td colspan="3"> <input type="submit" name="submit" value="Submit"   class="btn btn-primary"></td></tr>
        
            
    
            </table>
    </Form>
    </div>
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
  
      <p>
        Copyright &copy; 2018-20 Hotel.com <br>
        E.MAIL-ID:Mr Singh <a href="mailto:hotel@gmail.com">(hotel@gmail.com) </a> <br>
        &#9742; : &nbsp; 287-501-3627
      </p>
      
    </div>   
    </body>
</html>