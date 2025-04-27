<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruitable.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Overpass" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .foot{
            font-family: 'Overpass', sans-serif;
            color: white;
            font-size: 18px;
            display: flex;
            justify-content: center;
            font-weight: 500;
            height: 15px;
            
        }
    </style>
  <style>
/*     .button{
        height: 56px;
    width:194px;
    background-color:white;
    border: 2px solid white;
    border-radius:100px;
    font-family: 'Overpass', sans-serif;
    font-size:15px;
    display:flex;
    justify-content:center;
    align-items:center;
    font-weight:600;
    text-decoration:none;
    color:black
    }
.button:hover{
  color:white;
  border:2px solid rgba(5,202,182,1);
  background-color:rgba(5,202,182,0.8);
  transform: scale(1.1);
} */
.button {
    position: relative;
    display: inline-block;
    margin: 15px;
    padding: 15px 30px;
    text-align: center;
    font-size: 18px;
    letter-spacing: 1px;
    text-decoration: none;
    color: rgba(5,202,182,0.8);
    background: transparent;
    cursor: pointer;
    transition: ease-out 0.5s;
    border: 2px solid rgba(5,202,182,0.8);
    border-radius: 30px;
    box-shadow: inset 0 0 0 0 rgba(5,202,182,0.8);
    font-family: 'Overpass', sans-serif;
    font-weight:600;
  }
  
.button:hover {
    color: white;
    box-shadow: inset 0 -100px 0 0 rgba(5,202,182,0.8);
  }
  
.button:active {
    transform: scale(0.9);
  }
  </style>
</head>
<body>
    <header>
    <div class="icons">
        <div id="icon1"><img src="apple.png" alt="apple icon"></div>
        <div id="icon2"><img src="carrot.png" alt="carrot icon"></div>
        <div id="icon3"><img src="drumstick.png" alt="drumstick icon"></div>
        <div id="icon4"><img src="fish.png" alt="fish icon"></div>
    </div><br>
        <div style="height:120px">
            <h1 style=" font-family: 'Kaushan Script',handwriting;color: white;font-size: 90px;display:flex;justify-content:center">FRUITABLE.</h1>
        </div>
        <div>
            <p style=" font-family: 'Overpass', sans-serif;font-size:24px;display:flex;justify-content:center;color:white;font-weight:600">GRADE-A FRESH FRUITS & VEGETABLES DELIVERY ALL OVER PAKISTAN</p>
        </div>
        <div style="display:flex;justify-content:center">
        <a class="button" href="login.php">Explore Now</a></div>
    </header><br><br><br><br>
    <footer>
       <div>
        <h3 class="foot">Copyright <?php echo date("Y") ?> | Fruitable.pk | All Rights Reserved</h3>
        <h2 class="foot" >(A project of Muhammad Ali)</h2>
    </div> 
    </footer>
</body>
</html>