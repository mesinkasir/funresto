					                    <div class="tab-content text-center">
                                <div class="tab-pane fade in mt-2" id="food">
								
                                  <div class="row">
                                      <?php  $query = 'SELECT * FROM product WHERE CATEGORY_ID=0 GROUP BY PRODUCT_CODE ORDER by PRODUCT_CODE ASC';
                                        $result = mysqli_query($db, $query);

                                        if ($result):
                                            if(mysqli_num_rows($result)>0):
                                                while($product = mysqli_fetch_assoc($result)):
                                               
                                      ?>
                                    <div class="col-sm-4 col-md-2" >
                                      <form method="post" action="pos.php?action=add&id=<?php echo $product['PRODUCT_ID']; ?>">
                                          <div class="products bg-info text-white">
										  <img src="../img/merk1.png">
                                              <h6 class="text-white"><?php echo $product['NAME']; ?></h6>
                                              <h6>$. <?php echo $product['PRICE']; ?></h6>
                                              <input type="text" name="quantity" class="form-control" value="1" />
                                              <input type="hidden" name="name" value="<?php echo $product['NAME']; ?>" />
                                              <input type="hidden" name="price" value="<?php echo $product['PRICE']; ?>" />
                                              <input type="submit" name="addpos" style="margin-top:5px;" class="btn btn-block btn-warning btn-block"
                                                     value="Add Menu" />
                                          </div>
                                      </form>
                                  </div>
                                      <?php endwhile; ?>
                                    </div>
                                </div>
                                            <?php
                                        endif;
                                    endif;   
                                    ?>
                                <div class="tab-pane fade in mt-2" id="ice">
                                  <div class="row">
                                      <?php  $query = 'SELECT * FROM product WHERE CATEGORY_ID=1 GROUP BY PRODUCT_CODE ORDER by PRODUCT_CODE ASC';
                                        $result = mysqli_query($db, $query);

                                        if ($result):
                                            if(mysqli_num_rows($result)>0):
                                                while($product = mysqli_fetch_assoc($result)):
                                               
                                      ?>
                                    <div class="col-sm-4 col-md-2" >
                                      <form method="post" action="pos.php?action=add&id=<?php echo $product['PRODUCT_ID']; ?>">
                                      <div class="products bg-info text-white">
                                          <img src="../img/ice.png">
                                              <h6><?php echo $product['NAME']; ?></h6>
                                              <h6>$. <?php echo $product['PRICE']; ?></h6>
                                              <input type="text" name="quantity" class="form-control" value="1" />
                                              <input type="hidden" name="name" value="<?php echo $product['NAME']; ?>" />
                                              <input type="hidden" name="price" value="<?php echo $product['PRICE']; ?>" />
                                              <input type="submit" name="addpos" style="margin-top:5px;" class="btn btn-block btn-warning"
                                                     value="Add Menu" />
                                          </div>
                                      </form>
                                  </div>
                                      <?php endwhile;
                                        endif;
                                    endif;   
                                    ?>
                                    </div>
                                </div>
                            <div class="tab-pane fade in mt-2" id="hot">
                                  <div class="row">
                                      <?php  $query = 'SELECT * FROM product WHERE CATEGORY_ID=6 GROUP BY PRODUCT_CODE ORDER by PRODUCT_CODE ASC';
                                        $result = mysqli_query($db, $query);

                                        if ($result):
                                            if(mysqli_num_rows($result)>0):
                                                while($product = mysqli_fetch_assoc($result)):
                                               
                                      ?>
                                    <div class="col-sm-4 col-md-2" >
                                      <form method="post" action="pos.php?action=add&id=<?php echo $product['PRODUCT_ID']; ?>">
                                      <div class="products bg-info text-white">
                                          <img src="../img/hot.png">
                                              <h6><?php echo $product['NAME']; ?></h6>
                                              <h6>$. <?php echo $product['PRICE']; ?></h6>
                                              <input type="text" name="quantity" class="form-control" value="1" />
                                              <input type="hidden" name="name" value="<?php echo $product['NAME']; ?>" />
                                              <input type="hidden" name="price" value="<?php echo $product['PRICE']; ?>" />
                                              <input type="submit" name="addpos" style="margin-top:5px;" class="btn btn-block btn-warning"
                                                     value="Add Menu" />
                                          </div>
                                      </form>
                                  </div>
                                      <?php endwhile;
                                        endif;
                                    endif;   
                                    ?>
                                    </div>
                                </div>
                            <div class="tab-pane fade in mt-2" id="snack">
                                  <div class="row">
                                      <?php  $query = 'SELECT * FROM product WHERE CATEGORY_ID=7 GROUP BY PRODUCT_CODE ORDER by PRODUCT_CODE ASC';
                                        $result = mysqli_query($db, $query);

                                        if ($result):
                                            if(mysqli_num_rows($result)>0):
                                                while($product = mysqli_fetch_assoc($result)):
                                                
                                      ?>
                                    <div class="col-sm-4 col-md-2" >
                                      <form method="post" action="pos.php?action=add&id=<?php echo $product['PRODUCT_ID']; ?>">
                                      <div class="products bg-info text-white">

                                          <img src="../img/snack.png">
                                              <h6><?php echo $product['NAME']; ?></h6>
                                              <h6>$. <?php echo $product['PRICE']; ?></h6>
                                              <input type="text" name="quantity" class="form-control" value="1" />
                                              <input type="hidden" name="name" value="<?php echo $product['NAME']; ?>" />
                                              <input type="hidden" name="price" value="<?php echo $product['PRICE']; ?>" />
                                              <input type="submit" name="addpos" style="margin-top:5px;" class="btn btn-block btn-warning"
                                                     value="Add Menu" />
                                          </div>
                                      </form>
                                  </div>
                                      <?php endwhile;
                                        endif;
                                    endif;   
                                    ?>
                                    </div>
                                </div>
                            <div class="tab-pane fade in mt-2" id="combo">
                                  <div class="row">
                                      <?php  $query = 'SELECT * FROM product WHERE CATEGORY_ID=2 GROUP BY PRODUCT_CODE ORDER by PRODUCT_CODE ASC';
                                        $result = mysqli_query($db, $query);

                                        if ($result):
                                            if(mysqli_num_rows($result)>0):
                                                while($product = mysqli_fetch_assoc($result)):
                                               
                                      ?>
                                    <div class="col-sm-4 col-md-2" >
                                   
                                      <form method="post" action="pos.php?action=add&id=<?php echo $product['PRODUCT_ID']; ?>">
                                      <div class="products bg-info text-white">

                                          <img src="../img/combo.png">
                                              <h6><?php echo $product['NAME']; ?></h6>
                                              <h6>$. <?php echo $product['PRICE']; ?></h6>
                                              <input type="text" name="quantity" class="form-control" value="1" />
                                              <input type="hidden" name="name" value="<?php echo $product['NAME']; ?>" />
                                              <input type="hidden" name="price" value="<?php echo $product['PRICE']; ?>" />
                                              <input type="submit" name="addpos" style="margin-top:5px;" class="btn btn-block btn-warning"
                                                     value="Add Menu" />
                                          </div>
                                      </form>
                                  </div>
                                      <?php endwhile;
                                        endif;
                                    endif;   
                                    ?>
                                    </div>
                                </div>
                            <div class="tab-pane fade in mt-2" id="other">
                                  <div class="row">
                                      <?php  $query = 'SELECT * FROM product WHERE CATEGORY_ID=3 GROUP BY PRODUCT_CODE ORDER by PRODUCT_CODE ASC';
                                        $result = mysqli_query($db, $query);

                                        if ($result):
                                            if(mysqli_num_rows($result)>0):
                                                while($product = mysqli_fetch_assoc($result)):
                                               
                                      ?>
                                    <div class="col-sm-4 col-md-2" >
                                      <form method="post" action="pos.php?action=add&id=<?php echo $product['PRODUCT_ID']; ?>">
                                      <div class="products bg-info text-white">
                                          <img src="../img/other.png">
                                              <h6><?php echo $product['NAME']; ?></h6>
                                              <h6>$. <?php echo $product['PRICE']; ?></h6>
                                              <input type="text" name="quantity" class="form-control" value="1" />
                                              <input type="hidden" name="name" value="<?php echo $product['NAME']; ?>" />
                                              <input type="hidden" name="price" value="<?php echo $product['PRICE']; ?>" />
                                              <input type="submit" name="addpos" style="margin-top:5px;" class="btn btn-block btn-warning"
                                                     value="Add Menu" />
                                          </div>
                                      </form>
                                  </div>
                                      <?php endwhile;
                                        endif;
                                    endif;   
                                    ?>
                                    </div>
                                </div>
                            



                            </div>
                        </div>
                      </div>
                    </div>
                  </div>