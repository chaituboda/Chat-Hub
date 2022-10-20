
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="chat hub.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
    <style>
        @import url("https://fonts.googleapis.com/css?? family=Muli&display=swap");

* {
box-sizing: border-box;
}

body {
font-family: "Muli", sans-serif;
background: linear-gradient(120deg,#08568a,#1da7f1,#32323070);
color: #fff;
display: flex;
flex-direction: column; 
align-items: center;
Justify-content: center;
height: 100vh;
overflow: hidden;
margin: 0;
font-family: 'Times New Roman', Times, serif;

}
.containery {

    background-color:#39364670;
     padding: 20px 40px;
     border-radius: 25px;
     overflow: auto;
 }
    
.containery h1 {
    text-align: center;
    margin-bottom: 50px;
    
    }
label{
    color: #ffffff;
}
    
.containery a {
    
    text-decoration: none;
    color: lightblue;

    
    }
    

    .btn {
    
    cursor: pointer; 
    display: inline-block;
     width: 100%;
     background: lightblue;
     font-family: inherit;
     font-size: 16px; 
    border-radius: 5px;
    }
    
    .btn:focus {
    
    outline: 0;
    
    }
    
    .btn:active {
    transform: scale (0.98);
    }
    .text {
    
    margin-top: 30px;
    }
    .form-controlb {
        position: relative;
        margin: 20px 0 40px; 
        width: 300px;
        }
        
        .form-controlb input {
        background-color: transparent; 
        border: 0;
        border-bottom: 2px #FFF solid;
        display: block;
        width: 100%;
        padding: 15px 0;
        font-size: 18px;
        color: #fff;
        width: 30vw;
        }
        
        .form-controlb input:focus,
        .form-controlb input:valid {
        outline: 0;
        border-bottom-color: lightblue;
        }
        .form-controlb label { 
        position: absolute; 
        top: 15px;
        left: 0;
        pointer-events: none;
        }
        
        .form-controlb label span {
        display: inline-block;
        font-size: 18px;
        min-width: 5px;
        transition: 0.3s cubic-bezler (0.68, -0.55, 0.265,
        1.55) ;
        }
        
        .form-controlb input:focus + label span,
        .form-controlb input:valid+ label span { 
        color: lightblue;
        transform: translateY(-30px);
        }
 .DOB{
            transform: translate(20vw);
            margin-top: 5px;
        }
.chat-content{
    margin-left: 5vw;
    
}
.flex{
    display: flex;
    flex-direction: row;
}
.img{
    border-radius: 10%;
    margin-top: 7vh;
    height: 75vh;
    margin-left: -10vh;

}
form{
    height: 55vh;
    width: 30vw; 
    border-radius: 50%;
}
.heading{
    text-align: center;
}
.form-control{
    background-color: transparent;
    border-width: 0;
}
.sub{
    border-radius: 15cm;
    border-top: 5cm;
}
.useless{
    height: 10vh;
}
.link{
    border-style: solid;
    border-width: 0;
    background-color: transparent;
    color: skyblue;
    text-decoration: underline;

}
/* #08568a,#1da7f1,#fcff5170 */ 

    </style>
</head>
<body>
    <h1>CHAT-HUB</h1>
    <div class="containery">
        <h1>Sign In</h1>
                <form class="pb-5" action="" method="POST">
            <div class="form-control form-controlb">
            <input type="text" name="name" value="" required />
            <label>NAME</label>
            </div>
            <div class="form-control form-controlb">
            <input type="email" name="mail" value="" required />
            <label>EMAIL</label>
            </div>
            <div class="form-control form-controlb">
                <input type="text" name="roll_number" value="" required />
                <label>Roll Number</label>
            </div>
            <div class="form-control form-controlb">
                <label class="DOB">Date of Birth</label>
                <input type="date" name="dob" placeholder="Date of Birth" value="" required />
                
                </div>
            <div class="form-control form-controlb">
                <input type="password" name="password" value="" required />
                <label>Enter Password</label>
            </div>
            <div class="text-right form-control form-controlb">
                <input type="password" name="confirm" value="" required />
                <label class="d-none d-md-block">Confirm Password</label>
            </div>
            <div><input class="sub btn " type="submit" name="submit"></div>
            <p class="text" >ALready have an account?
            <form>
            <a href="login.php">Login</a></p>
            </form>
            <div class="useless">
            <br/>
           </div>
            </form>

            </div> 
            <!-- <script src="chat hub.js"> -->
            
            
            
            <script>
            const labels = document.querySelectorAll(".form-control label");

            labels.forEach((label) => {
            label.innerHTML = label.innerText
            .split("")
            .map(
            (letter, idx) =>
                `<span style="transition-delay:${idx * 50}ms">${letter}</span>`
            )
            .join("");
            });
    </script>
</body>
</html>



<?php

$servername ="localhost" ;
$username = "root" ;
$password = "" ;
$dbname= "chat-hub" ;

$conn = mysqli_connect($servername,$username,$password,$dbname);

error_reporting(0);

if (!empty($_POST)){
$name = $_POST['name'];
}
$mail = $_POST['mail'];
$roll_number = $_POST['roll_number'];
$dob = $_POST['dob'];
$pass1=$_POST['password'];
$pass2=$_POST['confirm']; 

if(isset($_POST['submit'])){
    if($pass1==$pass2){

        // $query="insert into users values (".$mail.",".$name.",".$roll_number.",".$dob.",".$pass1.",'user' )" ;
        $query="insert into users values ('$mail','$name' , '$roll_number' , '$dob' , '$pass1' , 'user' )" ;
        mysqli_query($conn, $query) ;
        
        // header('Location:login.php');
        echo "<script>window.location.href='login.php'</script>" ;
        
    }
}    



?>