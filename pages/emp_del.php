<?php
include'../includes/connection.php';
include'../includes/sidebar.php';

  $query = 'SELECT ID, t.TYPE
            FROM users u
            JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
  $result = mysqli_query($db, $query) or die (mysqli_error($db));
  
  while ($row = mysqli_fetch_assoc($result)) {
            $Aa = $row['TYPE'];
                   
if ($Aa=='User'){
?>
  <script type="text/javascript">
 
    alert("redirected to POS");
    window.location = "pos.php";
  </script>
<?php
  }
}
	if (!isset($_GET['do']) || $_GET['do'] != 1) {
						
    	switch ($_GET['type']) {
    		case 'employee':
    			$query = 'DELETE FROM employee WHERE EMPLOYEE_ID = ' . $_GET['id'];
    			$result = mysqli_query($db, $query) or die(mysqli_error($db));				
            ?>
    			<script type="text/javascript">alert("Employee Successfully Deleted.");window.location = "employee.php";</script>					
            <?php
    			//break;
            }
	}
?>