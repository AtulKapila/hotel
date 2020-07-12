<html lang="en">
    <head>
        <title>Regervation</title>
        
        <?php
        
        $firstName = $lastName = $email = $arrival = $arrival = $arrival = $departure = $Rooms = $adults = $children = $yes = $no = "";
        $lnamepatternErr = $fnamepatternErr = $lnameErr = $fnameErr = $arrivalDateErr = $departureDateErr = $invalidArrivalDateErr = $pastArrivalDateErr = $adultsErr = $roomErr = $negativeValueErr = $childNegativeValueErr = $secondNegativeValueErr = $childrenErr ="";
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $firstName=$_POST['fName'];
                    $lastName=$_POST['lName'];
                    $email=$_POST['eMail'];
                    $arrival=$_POST['arrival'];
                    $departure= $_POST['departure'];
                    $Rooms= $_POST['noRooms'];
                    $adults= $_POST['adults'];
                    $children= $_POST['children'];
                    $yes= $_POST['check'];
                    $no= $_POST['check'];
                
                $returnValues=testValue($firstName,$lastName,$Rooms,$adults,$children);
                
                if(empty($returnValues[0]) && empty($returnValues[1])){
                    $fnameErr="Name field is empty";
                    $lnameErr="Name field is empty";
                }
                else if(empty($returnValues[0]) || empty($returnValues[1])){
                        if(empty($returnValues[0])){
                            $fnameErr="Name field is empty";
                                        if(empty($returnValues[1])){
                                            $lnameErr="Name field is empty";
                                        }
                                        else{
                                                if(!preg_match("/^[a-zA-Z]*$/",$returnValues[1])){
                                                    
                                                    if(!preg_match("/^[a-zA-Z]*$/",$returnValues[1])==true){
                                                        $lnamepatternErr= "Name should include character and white spaces";

                                                    }               
                                                }
                                            }
                        }
                
                        else if(empty($returnValues[1])){
                            $lnameErr="Name field is empty";
                                        if(empty($returnValues[0])){
                                            $fnameErr="Name field is empty";
                                        }
                                        else{
                                                if(!preg_match("/^[a-zA-Z]*$/",$returnValues[0])){
                                                    
                                                    if(!preg_match("/^[a-zA-Z]*$/",$returnValues[0])==true){
                                                        $fnamepatternErr= "Name should include character and white spaces";

                                                    }               
                                                }
                                            }
                        }
                }
                       
//                        else{
//                            $lnameErr="Name field is empty";
//                        }
                if(empty($arrival) || empty($departure)){
                        if(empty($arrival)==true)
                        {
                            $arrivalDateErr="This field is empty";        
                        }
                       if(empty($departure)==true)
                        {
                            $departureDateErr="This field is empty";  
                        }
                    
                }
                else if($arrival<date('Y-m-d') || $arrival>date('Y-m-d') ){
                    if($arrival>date('Y-m-d')==true){
                        if($arrival<$departure){
                            $invalidArrivalDateErr="Should be gretter than Departure date";        
                        }
                    
                    }
                    else{
                        $pastArrivalDateErr = "Can not enter value in past";
                    }
                
                }
                if(empty($returnValues[2]) && empty($returnValues[3]) && empty($returnValues[4])){
                    $emptyfieldsErr="This field is empty";
                }
                if(empty($returnValues[2]) || empty($returnValues[3])){
                        
                    if(empty($returnValues[2])){
                        $roomErr="This field is empty";
                                if(empty($returnValues[3]))
                                {
                                    $adultsErr="This field is empty";
                                }
                    }
                }
                else if(empty($returnValues[3])){
                        $adultsErr="This field is empty";
                                if(empty($returnValues[2])){
                                    $roomErr="This field is empty";
                                }
                }
                if(empty($returnValues[4])){
                    $childrenErr="This field is empty";
                }
                            
                            
                    
                    
                
                if($returnValues[2]||$returnValues[3]<0){
                    if($returnValues[2]<0){
                        $negativeValueErr="Can not enter Negative value";        
                            if($returnValues[3]<0){
                                $secondNegativeValueErr="Can not enter Negative value";
                            }
                        
                    }
                    else if($returnValues[3]<0){
                        $secondNegativeValueErr="Can not enter Negative value";        
                            if($returnValues[2]<0){
                                $negativeValueErr="Can not enter Negative value";
                            }
                        
                    }
                    
                }
                if($returnValues[4]<0){
                        $childNegativeValueErr="Can not enter Negative value";        
                            
                        
                    }
                
                
            }
                
            
            function testValue($value1,$value2,$Room,$adults,$children){                         //testing the data
               
                $validateFirstName=trim($value1);
                $validateLastName=trim($value2);
                $validateRoom =trim($Room);
                $validateadults = trim($adults);
                $validatechildren = trim($children);
                $validateFirstName = htmlentities($validateFirstName);
                $validateLastName = htmlentities($validateLastName);
                $validateRoom =htmlentities($Room);
                $validateadults = htmlentities($adults);
                $validatechildren = htmlentities($children);
                $validateFirstName=htmlspecialchars($validateFirstName);
                $validateLastName=htmlspecialchars($validateLastName);
                $validateRoom =htmlspecialchars($Room);
                $validateadults = htmlspecialchars($adults);
                $validatechildren = htmlspecialchars($children);
                    return array($validateFirstName,$validateLastName,$validateRoom,$validateadults,$validatechildren);
            }
           
            
        ?>
    </head>
    
    <body>
        <form action="reservation.php" method="post">
            <lable for="fName">First Name</lable>
            <input type="text" name="fName"><span><?php 
            echo "$fnameErr"."$fnamepatternErr";
            ?></span>
            <lable for="lName" >Last Name</lable>
            <input type="text" name="lName"><span><?php echo "$lnameErr"."$lnamepatternErr";?></span>
            <lable for="email">E-Mail</lable>
            <input type="email" name="eMail">
            <label for="arrival">Arrival</label>
            <input type="date" name="arrival"><span><?php echo "$arrivalDateErr"."$invalidArrivalDateErr"."$pastArrivalDateErr"; ?></span>
            <lable for="departure">Departure</lable>
            <input type="date" name="departure"><span><?php echo "$departureDateErr"?></span>
            <lable for="noRooms">Number Of Room</lable>
            <input type="number" name="noRooms"><span><?php echo "$roomErr"."$negativeValueErr"?></span>
            <lable for="typeOfPerson">Person</lable>
            <lable for="adults">Adults</lable>
            <input type="number" name="adults"><span><?php echo "$adultsErr"."$secondNegativeValueErr"?></span>
            <lable for="children">Childern</lable>
            <input type="number" name="children"><span><?php echo "$childrenErr"."$childNegativeValueErr"?></span>
            <label for="roomService">Room Service</label>
            <input type="radio" name="check">
            <label for="yes">Yes</label>
            <input type="radio" name="check">
            <label for="no">No</label>
            <input type="submit" name="submit">
                
        </form>
    </body>
</html>