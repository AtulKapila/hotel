<?php
    
    
    require("my_sql_connect.php");

    $emailErr = $passwordErr = $fNameErr = $lNameErr = $genderErr = $countryErr = "";
    $fname = $lname = $email = $password = $gender = $country = "";
    $regex = '/^[a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-z0-9-]{2,8}+(\.[a-z0-9-]+)*(\.[a-z]{2,3})?$/i'; 
    $Passwordregex = '/^[a-z0-9 _]{2,20}$/i';
    $name = '/^ [a-zA-Z]*/';
    if($_SERVER['REQUEST_METHOD']=="POST"){
                
                $email=$_POST['email'];
                $password= $_POST['password'];
                $fname= $_POST['fName'];
                $lname = $_POST['lName'];
                $gender = $_POST['gender'];
        
        
        if(empty($email)){
            $emailErr="this field is empty";
        }
        else
        {
            if (!preg_match($regex, $email)) {
                echo $email . " is not a valid email.";
            }
                    
        }
        if(empty($password)){
            $passwordErr="this field is empty";
            
        }
        
        else{
            if(!preg_match($Passwordregex,$password)){
                echo $password . "is not valid password";
            }
        }
        if(empty($fname)){
            $fNameErr="this field is empty";
            
        }
        else{
            if(!preg_match($name,$fname)){
                echo $fname . "enter name correctly";
            }
        }
        if( empty($lname)){
            $lNameErr="this field is empty";      
        }
        else{
            if(!preg_match($name,$lname)){
                echo $fname . "enter name correctly";
            }
        }
        if(!isset($gender)){
            $genderErr = "Gender is not checked";    
        }
        if(!empty($_POST['country'])){
            $country=$_POST['country'];
        }
        else{
            $countryErr= "Please select country";
        }
        
        $username=mysqli_real_escape_string($dbc,$email);
        $password=mysqli_real_escape_string($dbc,$password);
        $fName=mysqli_real_escape_string($dbc,$fname);
        $lName=mysqli_real_escape_string($dbc,$lname);
        $gender=mysqli_real_escape_string($dbc,$gender);
        $q= "insert into users(username,password,firstname,lastname,gender) values('$username','$password','$fName','$lName','$gender')";
        if(mysqli_query($dbc,$q)){
            echo "Data is stored successfuly";
        }
        else{
            echo "Data is not stored".$q. "error".mysqli_error($dbc);
        }
    }
   

?>


