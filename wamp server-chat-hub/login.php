<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="chat hub.css"> 
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
                    transform: translatey(20vw);
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
    </style>
</head>

<body>
    <div class="container">
        <div class="row">    
                <div class="col-lg-5 d-none d-lg-inline" > 
                    <img class="img" src="CHAT-HUB.gif" />
                </div>
                <div class="chat-content col-12 col-lg-6">
                    <h1 class="heading">CHAT-HUB</h1>
                    <div class="containery">
                        <h1>Sign In</h1>
                
                            <form method="POST" action="">
                            <div class="form-controlb form-control">
                            <input type="mail" name="mail" vlaue="" required />
                            <label>Your Email</label>
                            </div>
                            <div class="form-controlb form-control">
                            <input class="input" type="password" vlaue="" name="password" required />
                            <label>Your Password</label>
                            </div>
                            <input type="submit" class="btn" name="submit" >
                            <p class="text" >Don't have an account?
                            <a href="index.php" >Create Account</a></p>
                            <p class="text" >
                            <a href="#" >Forgot Password?</a></p>
                            
                            </form>
                            <script src="chat hub.js"> </script>
                            </div>        
                </div>
        </div>
    </div>
 

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
            

            function redirect(){
                window.location.href="home page.php" ;
            }
            

    </script>

<?php
include("login_credentials.php");
?>
</body>
</html>
