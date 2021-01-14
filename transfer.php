<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Transfer</title>
<style>
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

.styled-table {
    
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 1.3em;
    font-family: sans-serif;
    min-width: 1450px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: black;
}

* {
box-sizing: border-box;
}

input[type=text], select, textarea {
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
resize: vertical;
}

input[type=number], select, textarea {
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
resize: vertical;
}

label {
padding: 12px 12px 12px 0;
display: inline-block;
}

input[type=submit] {
background-color: #4CAF50;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
float: right;
}

input[type=submit]:hover {
background-color: #45a049;
}

.container {
border-radius: 5px;
background-color: #f2f2f2;
padding: 20px;
}

.col-25 {
float: left;
width: 25%;
margin-top: 6px;
}

.col-75 {
float: left;
width: 75%;
margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
content: "";
display: table;
clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
.col-25, .col-75, input[type=submit] {
width: 100%;
margin-top: 0;
}
}

.navbar {
width: 100%;
background-color:  #009879;
overflow: auto;
}

.navbar a {
float: left;
padding: 12px;
color: white;
text-decoration: none;
font-size: 17px;
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
.center, .center-align {
text-align: center;
}

@media screen and (max-width: 500px) {
.navbar a {
float: none;
display: block;
}
}
body {background-color: #92a8d1;}



</style>
<body >
<?php


/* Database connection settings */
$host = 'localhost';
$user = 'id15916237_ashish';
$pass = '!>Vo77hWVV8zO8!i';
$db = 'id15916237_intern';

$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$conn = new mysqli($host, $user, $pass, $db);
/* Your query */
$result = $mysqli->query("SELECT userid FROM customer ") or die($mysqli->error);
$result2 = $mysqli->query("SELECT userid FROM customer ") or die($mysqli->error);
$result1 = $mysqli->query("SELECT balance FROM customer ") or die($mysqli->error);


?>


<div class="navbar">
<a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
<a href="alluser.php"><i class="fa fa-fw fa-user"></i> Customers</a> 
<a class="active" href="transfer.php"><i class="fa fa-fw fa-money"></i> Transfer</a> 
<a href="history.php"><i class="fa fa-fw fa-history"></i> Transaction history</a> 
</div>

<div class="container">
<form action="transfer.php" method="post">

<div class="row">
  <div class="col-25">
    <label style="font-family:verdana" name="userid" for="userid">Sender User Id</label>
  </div>
  <div class="col-75">
  
  <select id="userid" name="userid" required>
<option  name="userid" value="" selected disabled hidden>Select sender user id</option>
<?php
while ($row = mysqli_fetch_array($result)) {
    echo "<option   value='" . $row['userid'] . "'>" . $row['userid'] . "</option>";
}



?>        
</select>


    
  </div>
  
</div>


<div class="row">
  <div class="col-25">
    <label style="font-family:verdana" name="ruserid" for="ruserid">Receiver User Id</label>
  </div>
  <div class="col-75">
  
  <select id="ruserid" name="ruserid" required>
<option  name="ruserid" value="" selected disabled hidden>Select Receiver user id</option>
<?php
while ($row = mysqli_fetch_array($result2)) {
    echo "<option   value='" . $row['userid'] . "'>" . $row['userid'] . "</option>";
}



?>        
</select>


    
  </div>
  
</div>





<div class="row">
  <div class="col-25">
    <label style="font-family:verdana" name="amount" id="amount" for="amount">Enter the amount</label>
  </div>
  <div class="col-75">
    <input onkeyup='check();' name="amount" type="number" id="fname" name="firstname" placeholder="Enter the transaction amount.." required>
  </div>
</div>
<div class="row">
  <div class="col-25">
    <label style="font-family:verdana" name="comment" for="comment">Comment</label>
  </div>
  <div class="col-75">
    <textarea  name="comment" id="comment" name="comment" placeholder="Write something here.." style="height:100px"></textarea>
  </div>
</div><br>
<div class="row">
  <input  name="submit" id="submit" onclick="myFunction()" name="" type="submit" value="Proceed">
  
</div> 
</form>
</div>
<p  name="demo" id="demo"></p>

<?php include 'connection.php' ?>
<?php


if(isset($_POST['submit']))  
{   $comment = $_POST['comment']; 
    $number1 = $_POST['amount']; 
    
    $userid = $_POST['userid'];  
    $ruserid = $_POST['ruserid'];  

    
$sql5="SELECT balance FROM customer WHERE userid='$userid '";
$result5=mysqli_query($conn, $sql5); 
$row=mysqli_fetch_assoc($result5) ;
$money= $row['balance'];

$sql8="SELECT balance FROM customer WHERE userid='$ruserid '";
$result8=mysqli_query($conn, $sql8); 
$row2=mysqli_fetch_assoc($result8) ;
$money1= $row2['balance'];

$sql6="SELECT user FROM customer WHERE userid='$userid '";
$result6=mysqli_query($conn, $sql6); 
$row1=mysqli_fetch_assoc($result6) ;
$name= $row1['user'];

$sql7="SELECT user FROM customer WHERE userid='$ruserid '";
$result7=mysqli_query($conn, $sql7); 
$row3=mysqli_fetch_assoc($result7) ;
$name1= $row3['user'];


    $sum =  $money-$number1;  


$sum1 =  $money1+$number1;  


$conn=mysqli_connect("localhost", "id15916237_ashish", "!>Vo77hWVV8zO8!i", "id15916237_intern");
$query = "UPDATE `customer` SET `balance`='".$sum."' WHERE `userid` = '".$userid."'";
$result = mysqli_query($conn, $query);
$query1 = "UPDATE `customer` SET `balance`='".$sum1."' WHERE `userid` = '".$ruserid."'";
$result9 = mysqli_query($conn, $query1);

$sql7 = "INSERT INTO history( `userid`, `user`, `ruserid`, `ruser`, `amount`, `comment`, `updated`, `rupdate`) VALUES ('$userid','$name','$ruserid','$name1','$number1','$comment','$sum','$sum1')";
$query = mysqli_query($conn, $sql7);



if($result)
{   echo ' <div class="container">';
echo '<h2><i class="fa fa-fw fa-bank"></i>Last Transaction</h2>';

echo '<table class=styled-table>';
echo '<thead>';
echo ' <tr>';
echo '<th>Sender User Id</th>';
echo '<th>Sender Name</th>';

echo ' <th>Transfer Amount</th>';
echo '  <th>Sender Balance</th>';
echo ' </tr>';

echo '</thead>';
  
echo ' <tr class=active-row>';
echo " <td> $userid ";
echo " <td> $name ";


echo " <td> $number1";
echo " <td> $sum";

echo ' </tr>';
echo '<thead>';
echo ' <tr>';

echo '<th>Receiver User Id</th>';
echo '<th>Receiver Name</th>';
echo '  <th>Comment</th>';
echo '  <th>Receiver Balance</th>';

echo ' </tr>';
echo '</thead>';
echo ' <tr class=active-row>';

echo " <td> $ruserid ";
echo " <td> $name1 ";
echo " <td> $comment";

echo " <td> $sum1";

echo ' </tr>';
            
echo ' </table>';
echo ' </form>';
echo '	<hr />';
echo '</div>';

  echo "<script> alert('Congratulations, Your Transaction is Successful !!');
                            
                  </script>";
}else{
echo ' <div class="container">';
echo 'Data Not Updated';
echo '</div>';
}
mysqli_close($conn);
}

?>

<footer class="center footer">
    <h2 class="info"><b>Made by Ashish Jha</b></h2>
    <h5>Intern @ The Sparks Foundation</h5>
</footer>
</body>
</html>
