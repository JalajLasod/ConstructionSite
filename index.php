<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Construction</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"> -->
  </head>
  <style media="screen">
  nav{
    width: 100%;
  }
  .navbar-nav{
    width: 100%;
  }
  nav li{
    width: 20%;
  }
    li{
      padding: 20px;
      text-align: center;
    }
    a{
      padding: 20px;
    }
    li:hover{
      background-color: #e6a61e;
    }
    .dropdown {
      position: relative;
      display: inline-block;
    }
    .dropdown-content0{
      display: none;
      padding: 20px;
      width: 20%;
      position: absolute;
      z-index: 1;
      /* overflow: hidden; */
    }
    .dropdown-content1{
      display: none;
      width: 20%;
      position: fixed;
      z-index: 1;
    }
    .dropdown-content0 a{
      display: list-item;
    }
    .dropdown-content1 a{
      display: block;
    }
    .dropdown-content1{
      display: none;
    }
    #ourSer:hover .dropdown-content0{
      padding: inherit;
      left: 40%;
      position: absolute;
      border: 0;
      background-color: inherit;
      display: block;
    }
    #ourTeam:hover .dropdown-content1{
      display: block;
      left: 60%;
      background-color: inherit;
    }
    a{
      color:white;
      font-weight: bold;
    }
    a:hover{
      text-decoration: none;
      color: inherit;
    }
    button{
      background-color: #f0ad4e;
      transition: 2s;
    }
    button:hover{
      background-color:white;
      transform: rotate(360deg);
      text-decoration: none;
    }
  </style>
  <body>
    <div class="nav">
      <header>
        <div class="" style="position:sticky;">
          <nav class="navbar navbar-expand-sm bg-warning navbar-justified " style="padding:0;">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a href="#">BLOG</a>
              </li>
              <li class="nav-item" id="ourSer">
                <a href="#">OUR SERVICES <i class="fa fa-angle-double-down"></i></a>
                <div class="dropdown-content0">
                  <a href="#">SENSOR TECH</a>
                  <a href="#">WEIGHT LOOSE</a>
                  <a href="#">YOGA CLASSES</a>
                  <a href="#">SCHEDULE PLANNING</a>
                </div>
              </li>
              <li class="nav-item" id="ourTeam">
                <a href="#">OUR TEAM <i class="fa fa-angle-double-down"></i></a>
                <div class="dropdown-content1">
                  <a href="#">BEN FRANCESE</a>
                  <a href="#">YESSINIA CARLINOS</a>
                </div>
              </li>
              <li class="nav-item">
                <a href="#">CONTACT US</a>
              </li>
            </ul>
          </nav>
          <img src="assets/001.png" alt="" style="width:100%;">
          <h1 style="font-size:10vw;text-align:center; color:white;position:absolute;top:40%;">We Build Better Tomorrow
            <p><button class="knmr"style="font-size:30px;border:0;padding:20px;">KNOW MORE</button></p>
          </h1>
        </div>
      </header>
    </div>
  </body>
</html>
