<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Ashish Bank</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
body, html {
height: 100%;
margin: 0;
}

.bgimg {
background-image: url('bg.jpg');
height: 100%;
background-position: center;
background-size: cover;
position: relative;
color: black;
font-family: "Courier New", Courier, monospace;
font-size: 25px;
text-decoration: solid;
}

.topleft {
position: absolute;
top: 0;
left: 16px;
}

.bottomleft {
position: absolute;
bottom: 0;
left: 16px;
}

.middle {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
text-align: center;
}

.right {
position: absolute;
top: 50%;
left: 75%;
transform: translate(-50%, -50%);
text-align: center;
}
.footer{
color:white;
  background: black;
  margin-bottom: 0;
  bottom: 0;
  padding: 2px;
  font-size: 20px;
  position: relative;
  width: 100%;
  
}
.info{
  font-weight: 800;
}
hr {
margin: auto;
width: 40%;
}
.navbar {
width: 100%;
background-color: #009879;
overflow: auto;
position: sticky;
top: 0;
}

.navbar a {
float: left;
padding: 12px;
color: white;
text-decoration: none;
font-size: 17px;
}
.center, .center-align {
  text-align: center;
}
.navbar a:hover {
background-color: #000;
}
.head {
  color:black;
  text-decoration:solid;
  text-align:center;
}
.active {
background-color: blue;
color:black;
}

@media screen and (max-width: 500px) {
.navbar a {
  float: none;
  display: block;
}
}
</style>
<body >

<div class="bgimg">

<div class="navbar">
<a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
<a href="alluser.php"><i class="fa fa-fw fa-user"></i> Customers</a> 
<a href="transfer.php"><i class="fa fa-fw fa-money"></i> Transfer</a> 
<a href="history.php"><i class="fa fa-fw fa-history"></i> Transaction history</a> 
</div>
<marquee style="color:black" width="99%" direction="left" height="30px"><b><i class="fa fa-fw fa-trophy"></i>
We are happy to announce that our bank has been awarded - Best private bank of 2020 in India.<i class="fa fa-fw fa-trophy"></i>
</b></marquee>
<h1 style="color:purple" class="head">Ashish Bank</h1><b>
<p style="color:black" class="head">Making transactions smoother.</p>

<div class="right">
  
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><b><p style="color:blue">100% Success rate.</p> <hr>
  <p style="color:blue">10,00,000+ Transactions completed till date.</p>
</div>
<div class="bottomleft">
  
</div>

</div>

<footer class="center footer">

      <h2 class="info"><b>Made by Ashish Jha</b></h2>
      <h5>Intern @ The Sparks Foundation</h5>
  </footer>
</body>
</html> 
