<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?><?php 

                $query = 'SELECT ID, t.TYPE
                          FROM users u
                          JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
                $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
                while ($row = mysqli_fetch_assoc($result)) {
                          $Aa = $row['TYPE'];
                   
if ($Aa=='User'){
           
             ?>    <script type="text/javascript">
                      alert("Restricted Page! You will be redirected to POS");
                      window.location = "pos.php";
                  </script>
             <?php   }
                         
           
}   
            ?>
            
            <div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Add Table</h4>
            </div>

            <div class="card-body">
                        <div class="table-responsive">
                        <form role="form" method="post" action="cust_transac.php?action=add">
                          <div class="form-group">
                              <input class="form-control" placeholder="Table Name" name="firstname" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Location" name="lastname" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Capcity" name="phonenumber" required>
                            </div>
                            <hr>

                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-check fa-fw"></i>Save</button>
                            <button type="reset" class="btn btn-danger btn-block"><i class="fa fa-times fa-fw"></i>Reset</button>
                            <a href="customer.php" type="button" class="btn btn-primary bg-gradient-primary">Back</a>
                        </form>  
                      </div>
            </div>
          </div>
<?php
include'../includes/footer.php';
?>