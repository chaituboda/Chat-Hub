<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAT HUB</title>
    <link rel ="stylesheet" href="chat page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <style>
      body{
        color: red;
        width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(31, 65, 85, 0.75),rgba(31, 55, 66, 0.75),rgba(0, 0, 0, 0.75)
    ),url(chat-gif.gif);
    background-size: cover;
    background-position: center;
      }
      .button{
          background-color: rgb(41, 81, 122);
          padding: 10px 20px;
          color: white;
          border-radius: 70px 40px 70px 40px;
          position: absolute;
           /* top: 0%; */
           left: 48%;
          box-shadow: #fff;
      }
      .content{
        height: 25vh;
      }
      *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.banner{
    /* width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(31, 65, 85, 0.75),rgba(31, 55, 66, 0.75),rgba(0, 0, 0, 0.75)
    ),url(chat-gif.gif);
    background-size: cover;
    background-position: center; */

}
/* /*  */
navbar{
    display:flex;
    flex-wrap: wrap;    
    align-items: center;  
    justify-content: space-between;
    background-color: rgb(222, 27, 27);
    padding: 15px;
}     
    a{    
    text-decoration: none;
    color: inherit;    
    }
    .logo{
        width: 100px;
        margin-right: 60vw;
        margin-left: 20px;
        margin: top -10px ;
    }    
    .nava{
        background-color: transparent;
    }
    .list{  
    list-style: none;
    display: flex;  
    gap: 25px;
    }  
    #toggler,
    .navbar label{
        display: none;
    }
    @media screen and (max-width: 600px) {
    .menu{
        width: 100%;
        max-height: 0;
        overflow: hidden;
     }
      .list{
           flex-direction: column;
           align-items: center;
           padding: 20px;
      }
 
      .navbar label{
      display: inline-flex;
      align-items: center;
      cursor: pointer;
      color: azure;

 
}
 #toggler:checked ~.menu{
 
     max-height: 100;
 }
 
}
.content{
    width: 100%;
    position: absolute;
    top: 50% ;
    transform: translatey(50%);
    text-align: center;
    color: #fff;
}
.content h1{
    font-size: 70px;
    margin-top: 80px;
    text-align: ;

}

 

    </style>
</head>
<body>
    <div class="banner">
    <!-- <nav class="navbar"> -->
 <!-- <a href="logo.png" class=logo>"logo"</a>   -->
 
        <!-- <input type="checkbox" id="toggler">     -->
        
        <!-- <nav class="navbar navbar-expand-lg navbar-dark nava ">
            <a class="navbar-brand" href="#"><img class="logo" src="CHAT-HUB-unscreen.gif"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-links" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="chat-page.php">Chat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Help</a>
                </li>
                <li class="nav-item">
                <div class="dropdown show">
                  <dropdown>

                  </dropdown>
                </div>
                </li>
              </ul>
            </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
        <div class="content">
            <a class="button " href="chat-page.php">Explode</a>
        
    </div>
    </div>

    <?php
    include("login_credentials.php"); 
    echo "hello" ;
    ?>
</body>
</html>
++