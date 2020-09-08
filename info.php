<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php>
 $servername = ***;
 $username = ***;
 $password = ***;
 
 // Create connection
 $conn = new mysqli($servername, $username, $password);
 
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 } else {
  echo "<p>Connected successfully</p>";
 }

 $sql = "SELECT * FROM `tshirts`";
 $result = $conn->query($sql);
 echo "<p>$result->num_rows</p>";

 if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
     echo "<p>name: " . $row["name"] . "</p>";
   }
 } else {
   echo "<p>Nothing, but whyyy?</p>";
 }

 mysqli_close($conn);
 echo "<p>Connection closed</p>";
 ?>
 </body>
</html>
