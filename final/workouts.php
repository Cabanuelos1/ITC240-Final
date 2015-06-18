<?php include 'includes/header.php';?>

<div id="text">

<?php

//credentials.php

 

define('DB_NAME','carlosbanuelositc240');

define('DB_USER','carban11');

define('DB_PASSWORD','Live1993');

define('DB_HOST','mysql.carlosbanuelositc240.com');

  

$sql = "select * from Workouts";

 

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_error()));

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error()));

if (mysqli_num_rows($result) > 0)//at least one record!

{//show results

while ($row = mysqli_fetch_assoc($result))

   {

  echo "<p>";

  echo "Exercise <b>" . $row['Exercise'] . "</b><br />";

  echo "Calories burned <b>" . $row['Caloriesburned'] . "</b><br />";

  echo "</p>";

   }

}else{//no records

echo '<div align="center">NO WORKOUTS</div>';

}

 

@mysqli_free_result($result); #releases web server memory

@mysqli_close($iConn); #close connection to database

?>

</div>

<?php include 'includes/footer.php';?>
