 <?php
        require('my_sql_connect.php');
        
        $username=mysqli_real_escape_string($dbc,$_POST['username']);
        $password=mysqli_real_escape_string($dbc,$_POST['password']);

  
            
    
            $q= "select username,password from users where username='$username' AND password='$password'";
            $rows=mysqli_query($dbc,$q);
            $f=mysqli_fetch_array($rows);
            
            if(!$f==null){
                echo "Log in successfuly";
                    echo $f['username']."Password is:".$f['password'];
            }
            else{
                echo "username and password is not correct";
            }
?>