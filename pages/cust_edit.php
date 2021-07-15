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
  $query = 'SELECT * FROM customer WHERE CUST_ID ='.$_GET['id'];
  $result = mysqli_query($db, $query) or die(mysqli_error($db));
    while($row = mysqli_fetch_array($result))
    {   
      $zz= $row['CUST_ID'];
      $i= $row['FIRST_NAME'];
      $a=$row['LAST_NAME'];
      $b=$row['PHONE_NUMBER'];
    }  
      $id = $_GET['id'];
?>
            <center><div class="card shadow mb-4 col-xs-12 col-md-12 border-bottom-info">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-info">Edit Table</h4>
            </div>
            <div class="card-body">
                     <form role="form" method="post" action="cust_edit1.php">
              <input type="hidden" name="id" value="<?php echo $zz; ?>" />
              <div class="form-group row text-left">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Table Name :
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Table Name" name="firstname" value="<?php echo $i; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Location:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Location" name="lastname" value="<?php echo $a; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Capcity:
                </div>
                <div class="col-sm-9">
                   <input class="form-control" placeholder="Seat Capacity" name="phone" value="<?php echo $b; ?>" required>
                </div>
              </div>
              <hr>

                <button type="submit" class="btn btn-info">Update</button> 
                <a  type="button" class="btn btn-dark" href="customer.php?"> Back </a>
</form>  
          </div>
  </div>
<?php
include'../includes/footer.php';
?>