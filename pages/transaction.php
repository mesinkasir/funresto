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
    alert("Redirected to POS");
    window.location = "pos.php";
  </script>
<?php
  }           
}
            ?>
            
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-info text-center">REPORT LIST</h4>
            </div>
            <div class="card-body">
              <div class="table">
                <table class="table" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr class="bg-info text-white">
				     <th>Date</th>
                     <th width="19%">Receipt</th>
                     <th>Table</th>
                     <th width="13%">Income</th>
                     <th width="11%">Action</th>
                   </tr>
               </thead>
          <tbody>

<?php                  
    $query = 'SELECT *, FIRST_NAME, LAST_NAME
              FROM transaction T
              JOIN customer C ON T.`CUST_ID`=C.`CUST_ID`
              ORDER BY TRANS_D_ID ASC';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['DATE'].'</td>';
                echo '<td>'. $row['TRANS_D_ID'].'</td>';
                echo '<td>'. $row['FIRST_NAME'].' '. $row['LAST_NAME'].'</td>';
                echo '<td>'. $row['GRANDTOTAL'].'</td>';
                      echo '<td align="right">
                              <a type="button" class="btn btn-info" href="trans_view.php?action=edit & id='.$row['TRANS_ID'] . '">View</a>
                          </div> </td>';
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
?>
