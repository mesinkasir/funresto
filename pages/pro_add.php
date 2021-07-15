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
            
$sql = "SELECT DISTINCT CNAME, CATEGORY_ID FROM category order by CNAME asc";
$result = mysqli_query($db, $sql) or die ("Bad SQL: $sql");

$opt = "<select class='form-control' name='category'>
        <option disabled selected>Select Category</option>";
  while ($row = mysqli_fetch_assoc($result)) {
    $opt .= "<option value='".$row['CATEGORY_ID']."'>".$row['CNAME']."</option>";
  }

$opt .= "</select>";

?>
          <center><div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Add New Menu's</h4>
            </div>

            <div class="card-body">
                      <div class="table">



                        <form role="form" method="post" action="pro_transac.php?action=add">
                            <div class="form-group">
                              <input class="form-control" placeholder="Menu Code" name="prodcode" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Menu Name" name="name" required>
                            </div>
                            <div class="form-group">
                              <textarea rows="5" cols="50" texarea" class="form-control" placeholder="Description" name="description" required></textarea>
                            </div>
                            <div class="form-group">
                              <input type="number"  min="1" max="9999999999" class="form-control" placeholder="Price" name="price" required>
                            </div>
                           
                            <hr>
                            <button type="submit" class="btn btn-info">Save</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                            
                        </form>  

                      </div>
            </div>
          </div></center>
        
<?php
include '../includes/footer.php';
?>
