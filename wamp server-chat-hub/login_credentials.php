<?php
        $servername ="localhost" ;
        $username = "root" ;
        $password = "" ;
        $dbname= "chat-hub" ;

        $conn = mysqli_connect($servername,$username,$password,$dbname);
       
        error_reporting(0); 
       
        $result="" ;
        $error="" ;
            $mail= $_POST["mail"];

            $pass=$_POST["password"]; 
            if(isset($_POST['submit'])){
                $result =mysqli_query($conn, "select mail,password from users where mail='$mail' and password='$pass' ");
                    if(!$result){
                        echo "can't run the query"; 
                    }
                    else  {
                        $row = mysqli_fetch_row($result);
                            if ( $row[0]==$mail and $row[1]==$pass){
                                
                                echo "<script>redirect()</script>";
                            } 
                            else{
                                $error="Sorry..! Please enter valid Mail-id and Password";
                                echo $error ;
                            }
                    }
    }   
 
?>  