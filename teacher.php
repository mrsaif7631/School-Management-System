<?php
				include("includes/header.php");
                include("includes/navMenu.php");
				?>
				<?php
				if (isset ($_GET['teach'])) 
    {
		
          $query = "SELECT * FROM teachers";
          $result = executeQuery($query);
    }
	
function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "management");
    $result = mysqli_query($connect, $query);
    return $result;
}

?>
<br><br><br><br><br><br>
<table width="100%" bgcolor="#e8edf4" border = "1">
                <tr>
                    
					<th>Name</th>
                    <th>Subject</th>
					<th>Degree</th>
					
					
                    
                </tr>
                <!-- populate table from mysql database -->
                <?php while ($row = mysqli_fetch_array($result)):?>
                <tr>
                   
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
					<td><?php echo $row[3];?></td>
                    
                   
                    
                </tr>
                <?php endwhile;?>
            </table>

</html>















				
				
				<?php
				include("includes/footer.php");
				?>