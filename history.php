<?php

if(isset($_POST['search']))
{
  $valueToSearch = $_POST['myInput'];
  // search in all table columns
  // using concat mysql function
  $query = "SELECT * FROM `history` WHERE CONCAT( `srno`, `userid`, `user`, `ruserid`, `ruser`, `amount`, `comment`, `updated`, `rupdate`, `timestamp`) LIKE '%".$valueToSearch."%'";
  $search_result = filterTable($query);
  
}
else {
  $query = "SELECT * FROM `history`";
  $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
  $connect = mysqli_connect("localhost", "id15916237_ashish", "!>Vo77hWVV8zO8!i", "id15916237_intern");
  $filter_Result = mysqli_query($connect, $query);
  return $filter_Result;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Transaction History</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
box-sizing: border-box;
}

#myInput {
background-image: url('/css/searchicon.png');
background-position: 10px 12px;
background-repeat: no-repeat;
width: 100%;
font-size: 16px;
padding: 12px 20px 12px 40px;
border: 1px solid #ddd;
margin-bottom: 12px;
}

#myUL {
list-style-type: none;
padding: 0;
margin: 0;
}

#myUL li a {
border: 1px solid #ddd;
margin-top: -1px; /* Prevent double borders */
background-color: #f6f6f6;
padding: 12px;
text-decoration: none;
font-size: 18px;
color: black;
display: block
}

#myUL li a:hover:not(.header) {
background-color: #eee;
}

  .styled-table {
      
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 1.3em;
  font-family: sans-serif;
  min-width: 100%;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
}
.center, .center-align {
  text-align: center;
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
.navbar {
width: 100%;
background-color:  #009879;
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
body {background-color: #92a8d1;}

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

* {
box-sizing: border-box;
}

form.example input[type=text] {
padding: 10px;
font-size: 17px;
border: 1px solid grey;
float: left;
width: 80%;
background: #f1f1f1;
}

form.example button {
float: left;
width: 20%;
padding: 10px;
background: #2196F3;
color: white;
font-size: 17px;
border: 1px solid grey;
border-left: none;
cursor: pointer;
}

form.example button:hover {
background: #0b7dda;
}

form.example::after {
content: "";
clear: both;
display: table;
}
  </style>
</head>

<body>

<div class="navbar">
<a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
<a  href="alluser.php"><i class="fa fa-fw fa-user"></i> Customers</a> 
<a href="transfer.php"><i class="fa fa-fw fa-money"></i> Transfer</a> 
<a class="active" href="history.php"><i class="fa fa-fw fa-history"></i> Transaction history</a> 

</div>
  
  
      <br>
      <form class="example" action="history.php" method="post">
          <input type="text"  name="myInput" placeholder="Enter the Type of Transaction / User id / Date & Time / Updated Balance / Transaction Amount to search the transaction">
          <button name="search" value="Filter" type="submit"> <i class="fa fa-search"><b>  Search / Clear</b></i></button>
          
          <br><br>
          <table class=styled-table>
              <thead>
                  <tr>
                      <th >Sr. No.</th>
                      <th >User Id</th>
                      <th >Receiver Id</th>
                      <th >Transaction Amount</th>
                      <th >Sender Balance</th>
                      <th >Receiver Balance</th>
                      <th >Comment</th>
                     
                      <th >Date & Time</th>
                      
                  </tr>
              </thead>
              
                  <?php

                  include 'connection.php';

                  $sql = "SELECT * from history";

                  $query = mysqli_query($conn, $sql);

                  while ($rows = mysqli_fetch_assoc($search_result)) {
                  ?>

                      <tr>
                          <td><?php echo $rows['srno']; ?></td>
                          <td><?php echo $rows['userid']; ?></td>
                          <td><?php echo $rows['ruserid']; ?></td>
                          <td><?php echo $rows['amount']; ?></td>
                          <td><?php echo $rows['updated']; ?></td>
                          <td><?php echo $rows['rupdate']; ?> </td>
                          <td><?php echo $rows['comment']; ?> </td>
                          <td><?php echo $rows['timestamp']; ?> </td>
                          

                      <?php
                  }
                  mysqli_close($conn);
                      ?>
              
          </table>
          </form>
  <hr />
      
  
  <footer class="center footer">
      <h2 class="info"><b>Made by Ashish Jha</b></h2>
      <h5>Intern @ The Sparks Foundation</h5>
  </footer>
  </body>

</html>