<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1a8fbcc2;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Container of the images */
.float-container {
    
    padding: 20px;
}

.float-child {
    width: 20%;
    float: left;
    padding: 20px;
    
} 

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>



<body>

<div class="header">
  <h1>A Movie Site</h1>
  <p>Created by Syed Tasrif Ahmed</p>
</div>



<div class="navbar">
  <a href="#">Home</a>
  <a href="#">About</a>
  <a href="#" class="right">Login</a>
  <a href="<?php  echo 'registration.php'; ?>" class="right">Registration</a>
</div>


<div class="main">
    <h2>Recent Hit Movies</h2>


  <div class="float-container">

  <div class="float-child">
    <div class="green">

      <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/kids-movies-2020-doolittke-1576597612.jpg?crop=0.8293075684380031xw:1xh;center,top&resize=980:*" style="width:100%">
            <div class="w3-container">
              <h4>Doolittle</h4>
            </div>


    </div>
  </div>
  
  <div class="float-child">
    <div class="blue">

      <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/kids-movies-2020-sonic-the-hedgehog-1559163290.jpg?crop=1.00xw:0.788xh;0,0.145xh&resize=980:*" style="width:100%">
            <div class="w3-container">
              <h4>Sonic the Hedgehog</h4></div>

    </div>
  </div>

  <div class="float-child">
    <div class="red">

      <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/kids-movies-2020-call-of-the-wild-1576597842.jpg?crop=0.9866666666666666xw:1xh;center,top&resize=980:*" style="width:100%">
            <div class="w3-container">
              <h4>The Call of the Wild</h4></div>
      


    </div>
  </div>

  <div class="float-child">
    <div class="yellow">

      <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/kids-movies-2020-onward-1569851441.jpg?crop=1.00xw:0.788xh;0,0.0956xh&resize=980:*" style="width:100%">

      <div class="w3-container">
              <h4>Onward</h4></div>
            
      


    </div>
  </div>

  <div class="float-child">
    <div class="Sky">

      <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/kids-movies-2020-artemis-fowl-1576601149.jpg?crop=0.9877750611246944xw:1xh;center,top&resize=980:*" style="width:100%" >

              <div class="w3-container">
              <h4>Artemis Fowl</h4></div>
      


    </div>
  </div>

  </div>
</div>




<div class="footer">
  


</div>

</body>
</html>
