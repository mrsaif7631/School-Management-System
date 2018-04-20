
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
 if(isset($_POST['name'])&&isset($_POST['subject'])&&isset($_POST['degree'])){
 
$sql="INSERT INTO notice(notice_des,notice_date)
VALUES
('$_POST[description]','$_POST[date]')";
 
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
   
    <form method="POST" action="noticeedit.php">
        <table border="1" height="150" bgcolor="#19A5D3">
           
            <tr><td>Description:<input type="text-area" placeholder="" required="" size="30" name="description"></td></tr>
            <tr><td>Date:<input type="date" placeholder="" required="" size="30" name="date"></td></tr>            
             <tr><td ><input type="submit" name="submit" size="30" value="OK!"></td></tr>
        </table>
        
    </form>
  
   </center>
</body>
</html>