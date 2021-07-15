<!-- SIDE PART NA SUMMARY -->
        <div class="card-body col-md-5 bg-dark text-white p-3 p-md-5 border border-light">
<h3 class="p-3 p-md-5 text-center"><strong>TRANSACTION</strong></h3>
<hr class="bg-white">
        <?php   
        if(!empty($_SESSION['pointofsale'])):  
            
             $total = 0;  
        
             foreach($_SESSION['pointofsale'] as $key => $product): 
        ?>  
        <?php  
                  $total = $total + ($product['quantity'] * $product['price']);
                  $lessvat = ($total / 1) * 1;
                  $netvat = ($total / 1);
                  $addvat = ($total / 1) * 1;

             endforeach;

$sql = "SELECT CUST_ID, FIRST_NAME, LAST_NAME
        FROM customer
        order by FIRST_NAME asc";
$res = mysqli_query($db, $sql) or die ("Error SQL: $sql");

$opt = "<select class='form-control'  style='border-radius: 0px;' name='customer' required>
        <option value='' disabled selected hidden>Select Table</option>";
  while ($row = mysqli_fetch_assoc($res)) {
    $opt .= "<option value='".$row['CUST_ID']."'>".$row['FIRST_NAME'].' '.$row['LAST_NAME']."</option>";
  }
$opt .= "</select>";
        ?>  

          <input type="hidden" name="date" value="<?php echo $today; ?>">
<div class="form-group row text-left mb-3">
            <div class="col-sm-12 text-primary btn-group">
            <?php echo $opt; ?>
        
            </div>

          </div>

          <div class="form-group row text-left mb-2">

            <div class="col-sm-5 text-white">
              <h6 class="font-weight-bold py-2">
                Total
              </h6>
            </div>

            <div class="col-sm-12">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">$.</span>
                </div>
                <input type="text" class="form-control text-right " value="<?php echo $total; ?>" readonly name="total">
              </div>
            </div>

          </div>
<?php endif; ?>       
          <button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#posMODAL">PAYMENT</button>

     
        <div class="modal fade" id="posMODAL" tabindex="-1" role="dialog" aria-labelledby="POS" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title text-text-white" id="exampleModalCenterTitle">PAYMENT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-dark">
                  <div class="form-group row text-left mb-2">

                    <div class="col-sm-12 p-3 bg-danger text-white text-center">
                      <h3 class="py-0">
                        GRAND TOTAL
                      </h3>
                      <h3 class="font-weight-bold py-3">
                        $. <?php echo $total; ?>
                      </h3>
                    </div>

                  </div>

                    <div class="col-sm-12 mb-2">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text">$.</span>
                        </div>
                          <input class="form-control text-right" id="txtNumber" onkeypress="return isNumberKey(event)" type="text" name="cash" placeholder="Cash here" name="cash" required>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-block">SAVE PAYMENT</button>
              </div>
            </div>
          </div>
        </div>
     

        </form>
      </div> 

     </div>

