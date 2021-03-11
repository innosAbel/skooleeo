<?php 
  if(!isset($_SESSION)) session_start();
  ob_start();
?>
<?php 
// connect to the MySQL server
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'counter';
$conn = new mysqli($host, $user, $pass, $dbname);

//Page URL 
$page_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 
//check for count
$query = mysqli_query($conn, "SELECT * FROM `pageview` WHERE `pageurl`='".$page_url."' "); 
$rows = mysqli_fetch_array($query); 
$counter = $rows['totalview']; 
if(empty($counter)) 
{
 $counter = 1;
 mysqli_query($conn, "INSERT INTO `pageview` SET `pageurl`='".$page_url."',`totalview`='".$counter."'"); 
} 
//increase counters by 1 on page load
 $counter = $counter+1;
 mysqli_query($conn, "UPDATE `pageview` SET `totalview`='".$counter."' WHERE `pageurl`='".$page_url."'");
 if($counter)
 {
 echo "Total page visit: ".$counter;
 } ?>