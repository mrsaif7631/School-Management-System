
<?php 
include("includes/header.php");
include("includes/navMenu.php");
?>
 <br><br><br><br><br><br><br>
<?php
if (isset ($_POST['submit'])) 
    {
		$roll = $_POST['roll'];
		$class = $_POST['class'];
          $q = "SELECT * FROM result where (roll=$roll) AND (class = $class)";
          $result = executeQuery($q);
    }
    


function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "management");
    $result = mysqli_query($connect, $query);
    return $result;
}

?>

<html>
  <center>
<form method="post" action="result.php">
      
		<table border="1" height="150" bgcolor="#e8edf4">
            
            <tr><td>Class:<input type="text" placeholder="Class" required="" size="30" name="class"></td></tr>
            <tr><td>Roll:<input type="text" placeholder="Roll" required="" size="30" name="roll"></td></tr>            
             <tr><td ><input type="submit"class="btn"  name="submit" size="30" value="SUBMIT"></td></tr>
        </table>
        
    </form>
  </center>
  <br><br><br><br><br><br><br>
 
<table width="100%" bgcolor="#e8edf4" border = "1">
                <tr>
                    <th>Id</th>
					<th>Name</th>
                    <th>Class</th>
                    <th>Roll</th>
					<th>Bangla</th>
                    <th>English</th>
                    <th>Math</th>
                    
                </tr>
                <!-- populate table from mysql database -->
                <?php while ($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
					<td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>
					<td><?php echo $row[5];?></td>
					<td><?php echo $row[6];?></td>
                   
                    
                </tr>
                <?php endwhile;?>
            </table>

</html>


<?php include("includes/footer.php");
?>