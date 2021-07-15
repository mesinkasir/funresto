<?php

require('../includes/connection.php');
require('session.php');
if (isset($_POST['btnlogin'])) {
  $users = trim($_POST['user']);
  $upass = trim($_POST['password']);
  $h_upass = sha1($upass);
if ($upass == ''){
     ?>    <script type="text/javascript">
                alert("Password is missing!");
                window.location = "login.php";
                </script>
        <?php
}else{
        $sql = "SELECT ID,e.FIRST_NAME,e.LAST_NAME,e.GENDER,e.EMAIL,e.PHONE_NUMBER,j.JOB_TITLE,
        t.TYPE
        FROM  `users` u
        join `employee` e on e.EMPLOYEE_ID=u.EMPLOYEE_ID
        join `job` j on e.JOB_ID=j.JOB_ID
        join `type` t ON t.TYPE_ID=u.TYPE_ID
        WHERE  `USERNAME` ='" . $users . "' AND  `PASSWORD` =  '" . $h_upass . "'";
        $result = $db->query($sql);
        if ($result){
              if ( $result->num_rows > 0) {
                $found_user  = mysqli_fetch_array($result);
                $_SESSION['MEMBER_ID']  = $found_user['ID']; 
                $_SESSION['FIRST_NAME'] = $found_user['FIRST_NAME']; 
                $_SESSION['LAST_NAME']  =  $found_user['LAST_NAME'];  
                $_SESSION['GENDER']  =  $found_user['GENDER'];
                $_SESSION['EMAIL']  =  $found_user['EMAIL'];
                $_SESSION['PHONE_NUMBER']  =  $found_user['PHONE_NUMBER'];
                $_SESSION['JOB_TITLE']  =  $found_user['JOB_TITLE'];
                $_SESSION['TYPE']  =  $found_user['TYPE'];
                $AAA = $_SESSION['MEMBER_ID'];
        if ($_SESSION['TYPE']=='Admin'){
           
             ?>    <script type="text/javascript">
                      alert("<?php echo  $_SESSION['FIRST_NAME']; ?> Welcome to the family !");
                      window.location = "index.php";
                  </script>
             <?php        
           
        }elseif ($_SESSION['TYPE']=='User'){
           
             ?>   
             <script type="text/javascript">
                      alert("<?php echo  $_SESSION['FIRST_NAME']; ?> Welcome to the family !");
                      window.location = "pos.php";
                  </script>
             <?php        
           
        }
            } else {
              ?>
                <script type="text/javascript">
                alert("WhatsApp broo... wrong password my man.. fix it.");
                window.location = "index.php";
                </script>
              <?php

            }

         } else {
        echo "Error: " . $sql . "<br>" . $db->error;
        }
        
    }       
} 
 $db->close();
?>