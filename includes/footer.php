</div></div><footer class="sticky-footer bg-white"><div class="container my-auto"><div class="copyright text-center my-auto"><span>Fun Resto Apps By <a class="text-info" href="https://mesinkasironline.web.app">mesinkasironline.web.app</a></span></div></div></footer></div></div><a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a><div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Where You Go Dude ??</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body">
<?php echo  $_SESSION['FIRST_NAME']; ?> Logout ?? </div><div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button><a class="btn btn-primary" href="logout.php">Logout</a></div></div></div></div><div id="overlay" onclick="off()"><div id="text"> <?php echo  $_SESSION['FIRST_NAME']. ' '.$_SESSION['LAST_NAME'] ;?></div></div><div class="col-12 text-center fixed-bottom"><script src="../vendor/jquery/jquery.min.js"></script> <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script> <script src="../vendor/jquery-easing/jquery.easing.min.js"></script> <script src="../js/sb-admin-2.min.js"></script> <script src="../vendor/datatables/jquery.dataTables.min.js"></script> <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script><script src="../js/demo/datatables-demo.js"></script><script src='https://cdn.jsdelivr.net/npm/vue/dist/vue.js'></script><script src='https://mesinkasir.github.io/larapos/pos/gallerya.js'></script></div>
<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
function isNumberKey(evt)
      {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31 
        && (charCode < 48 || charCode > 57))
        return false;
        return true;
      }  
</script>
<?php
  include 'modal.php';
$sql = "SELECT DISTINCT TYPE, TYPE_ID FROM type";
$result = mysqli_query($db, $sql) or die ("Bad SQL: $sql");
$opt = "<select class='form-control' name='type'>";
  while ($row = mysqli_fetch_assoc($result)) {
    $opt .= "<option value='".$row['TYPE_ID']."'>".$row['TYPE']."</option>";
  }
$opt .= "</select>";
        $query = "SELECT ID, e.FIRST_NAME, e.LAST_NAME, e.GENDER, USERNAME, PASSWORD, e.EMAIL, PHONE_NUMBER, j.JOB_TITLE, t.TYPE
                      FROM users u
                      join employee e on u.EMPLOYEE_ID = e.EMPLOYEE_ID
                      join job j on e.JOB_ID=j.JOB_ID
                      join type t on u.TYPE_ID=t.TYPE_ID
                      WHERE ID =".$_SESSION['MEMBER_ID'];
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
          while($row = mysqli_fetch_array($result))
          {  
                $zz= $row['ID'];
                $a= $row['FIRST_NAME'];
                $b=$row['LAST_NAME'];
                $c=$row['GENDER'];
                $d=$row['USERNAME'];
                $e=$row['PASSWORD'];
                $f=$row['EMAIL'];
                $g=$row['PHONE_NUMBER'];
                $h=$row['JOB_TITLE'];
                $l=$row['TYPE'];
          }
      ?>
  <div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit User Info</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="settings_edit.php">
              <input type="hidden" name="id" value="<?php echo $zz; ?>" />

              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 First Name:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="First Name" name="firstname" value="<?php echo $a; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Last Name:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Last Name" name="lastname" value="<?php echo $b; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Gender:
                </div>
                <div class="col-sm-9">
                  <select class='form-control' name='gender' required>
                    <option value="" disabled selected hidden>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>
              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Username:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Username" name="username" value="<?php echo $d; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Password:
                </div>
                <div class="col-sm-9">
                  <input type="password" class="form-control" placeholder="Password" name="password" value="" required>
                </div>
              </div>
              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Email:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Email" name="email" value="<?php echo $f; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Contact #:
                </div>
                <div class="col-sm-9">
                   <input class="form-control" placeholder="Contact #" name="phone" value="<?php echo $g; ?>" required>
                </div>
              </div>
              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Role:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Role" name="role" value="<?php echo $h; ?>" readonly>
                </div>
              </div>
          
              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                  Account Type:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Account Type" name="type" value="<?php echo $l; ?>" readonly>
                </div>
              </div>
              <hr>
            <button type="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>      
          </form>  
        </div>
      </div>
    </div>
  </div>
</body>
</html>
