<?php

include("admin/head.php");
include("admin/Menu.php")
?>
<html>
  <a href="logout.php" style="color:white">Logout</a>
  </html>


<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("management", $con);
if(isset($_POST['name'])&&isset($_POST['class'])&&isset($_POST['roll'])&&isset($_POST['ban'])&&isset($_POST['eng'])&&isset($_POST['math'])){
 
$sql="INSERT INTO result(name,class,roll,bangla,english,math)
VALUES
('$_POST[name]','$_POST[class]','$_POST[roll]','$_POST[ban]','$_POST[eng]','$_POST[math]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}
mysql_close($con)
?>
<html>
<body style="background-color:#404B61; ">
   <center>
   
    <form method="POST" action="studentcla.php">
        <table border="1" height="150" bgcolor="#19A5D3">
           
            <tr><td>Name:<input type="text" placeholder="" required="" size="30" name="name"></td></tr>
            <tr><td>Class:<input type="text" placeholder="" required="" size="30" name="class"></td></tr> 
        <tr><td>Roll:<input type="text" placeholder="" required="" size="30" name="roll"></td></tr> 			
		<tr><td>Bangla:<input type="text" placeholder="" required="" size="30" name="ban"></td></tr> 			
		<tr><td>English:<input type="text" placeholder="" required="" size="30" name="eng"></td></tr> 			
		<tr><td>Math:<input type="text" placeholder="" required="" size="30" name="math"></td></tr> 			
             <tr><td ><input type="submit" name="submit" size="30" value="OK!"></td></tr>
        </table>
        
    </form>
  
   </center>
</body>
</html>