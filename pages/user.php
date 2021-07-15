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
    alert("Restricted Page! You will be redirected to POS");
    window.location = "pos.php";
  </script>
<?php
  }           
}
?>
         <div class="card shadow mb-4">
            <div class="card-header py-3 text-center">
              <h4 class="m-2 font-weight-bold text-info">Admin Account</h4>
            </div>
            <div class="card-body">
            <div class="table">
           <table class="table" id="dataTable" width="100%" cellspacing="0">
               <thead>
                   <tr class="bg-info text-white">
                       <th>Name</th>
                       <th>Username</th>
                       <th>Role</th>
                       <th>Action</th>
                   </tr>
               </thead>
          <tbody>
<?php                  
    $query = 'SELECT ID, FIRST_NAME,LAST_NAME,USERNAME, t.TYPE
              FROM users u
              JOIN employee e ON e.EMPLOYEE_ID=u.EMPLOYEE_ID
              JOIN type t ON t.TYPE_ID=u.TYPE_ID
              WHERE u.TYPE_ID=1';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['FIRST_NAME'].' '. $row['LAST_NAME'].'</td>';
                echo '<td>'. $row['USERNAME'].'</td>';
                echo '<td>'. $row['TYPE'].'</td>';
                      echo '<td>
                                  <a type="button" class="btn btn-info" style="border-radius: 0px;" href="us_edit.php?action=edit & id='.$row['ID']. '">
                                   Edit
                               </td>';
                echo '</tr> ';
                        }
?>         
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>





         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-info text-center">User Accounts&nbsp;<br/>
              <!--
              <a  href="#" data-toggle="modal" data-target="#supplierModal" type="button" class="btn btn-info rounded-circle" style="border-radius: 0px;"><i class="fas fa-fw fa-plus"></i></a></h4>
                      -->
            </div>
            <div class="card-body">
            <div class="table">
           <table class="table" id="dataTable" width="100%" cellspacing="0">
               <thead>
               <tr class="bg-info text-white">
                       <th>Name</th>
                       <th>Username</th>
                       <th>Role</th>
                       <th>Action</th>
                   </tr>
               </thead>
          <tbody>
<?php                  
    $query = 'SELECT ID, FIRST_NAME,LAST_NAME,USERNAME, t.TYPE
              FROM users u
              JOIN employee e ON e.EMPLOYEE_ID=u.EMPLOYEE_ID
              JOIN type t ON t.TYPE_ID=u.TYPE_ID
              WHERE u.TYPE_ID=2';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['FIRST_NAME'].' '. $row['LAST_NAME'].'</td>';
                echo '<td>'. $row['USERNAME'].'</td>';
                echo '<td>'. $row['TYPE'].'</td>';
                      echo '<td align="right">
                                  <a type="button" class="btn btn-info" style="border-radius: 0px;" href="us_edit.php?action=edit & id='.$row['ID']. '">
                                    Edit
                                  </a>
                                </li>
                            </ul>
                            </div>
                          </div></td>';
                echo '</tr> ';
                        }
?>         
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>

<?php
include'../includes/footer.php';

$sql = "SELECT EMPLOYEE_ID, FIRST_NAME, LAST_NAME, j.JOB_TITLE
        FROM employee e
        JOIN job j ON j.JOB_ID=e.JOB_ID
        order by e.LAST_NAME asc";
$res = mysqli_query($db, $sql) or die ("Bad SQL: $sql");

$opt = "<select class='form-control' name='empid' required>
        <option value='' disabled selected hidden>Select Employee</option>";
  while ($row = mysqli_fetch_assoc($res)) {
    $opt .= "<option value='".$row['EMPLOYEE_ID']."'>".$row['LAST_NAME'].', '.$row['FIRST_NAME'].' - '.$row['JOB_TITLE']."</option>";
  }
$opt .= "</select>";
?>
  <div class="modal fade" id="supplierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User Account</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="us_transac.php?action=add">
              
              <div class="form-group">
                <?php
                  echo $opt;
                ?>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Username" name="username" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
              </div>
            <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-dark" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
  </div>