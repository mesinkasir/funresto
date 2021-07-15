<?php
include'../includes/connection.php';
?>
            <?php
              $fname = $_POST['firstname'];
              $lname = $_POST['lastname'];
              $email = $_POST['email'];
              $phone = $_POST['phonenumber'];
              $jobb = $_POST['jobs'];
              
              mysqli_query($db,"INSERT INTO location
                              (LOCATION_ID, PROVINCE, CITY)
                              VALUES (Null,'$prov','$cit')");
              mysqli_query($db,"INSERT INTO employee
                              (EMPLOYEE_ID, FIRST_NAME, LAST_NAME, EMAIL, PHONE_NUMBER, JOB_ID)            
             VALUES (Null,'{$fname}','{$lname}','{$email}','{$phone}','{$jobb}')");
              header('location:employee.php');
            ?>