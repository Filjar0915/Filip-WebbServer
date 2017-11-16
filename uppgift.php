<?php

$dbc_webshop = mysqli_connect("localhost","root","","webshop");
$dbc_cities = mysqli_connect("localhost","root","","cities");

$query = "SELECT price as kr, product_name as name, Categories AS c From Products";

$result = mysqli_query($dbc_webshop,$query);

While($row =mysqli_fetch_array($result)){

     echo $row['name'];
	 echo " ";
	 echo $row['kr'];
	 echo "kr";
	 echo "<br>";
	 echo $row['c'];
	 echo "<br>";
	 echo "<br>";
 }
	 
$query = "";

$result = mysqli_query($dbc_webshop,$query);

While($row =mysqli_fetch_array($result)){

     echo $row['name'];
	 echo " ";
	 echo $row['kr'];
	 echo "kr";
	 echo "<br>";
	 echo $row['c'];
	 echo "<br>";
	 echo "<br>";
	 
	 
 }
