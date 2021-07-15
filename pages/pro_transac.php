<?php
include'../includes/connection.php';
?>
          <!-- Page Content -->
          <div class="col-lg-12">
            <?php
              $pc = $_POST['prodcode'];
              $name = $_POST['name'];
              $desc = $_POST['description'];
              $pr = $_POST['price']; 
              $cat = $_POST['category'];
        
              switch($_GET['action']){
                case 'add':  {
                    $query = "INSERT INTO product
                              (PRODUCT_ID, PRODUCT_CODE, NAME, DESCRIPTION, PRICE, CATEGORY_ID)
                              VALUES (Null,'{$pc}','{$name}','{$desc}','{$pr}','{$cat}')";
                    mysqli_query($db,$query)or die ('Error in updating product in Database '.$query);
                    }
                break;
              }
            ?>
              <script type="text/javascript">window.location = "product.php";</script>
          </div>

<?php
include'../includes/footer.php';
?>