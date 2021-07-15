    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li><a class="nav-link" href="https://www.hockeycomputindo.com/2021/07/restaurant-pos-free-download-source-code.html">Documentation</a></li>
            <li><a class="nav-link" href="https://www.hockeycomputindo.com/p/webapp.html">App</a></li>
            <li>
              <?php 
                $query = 'SELECT ID, FIRST_NAME,LAST_NAME,USERNAME,PASSWORD
                          FROM users u
                          JOIN employee e ON e.EMPLOYEE_ID=u.EMPLOYEE_ID';
                $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
                while ($row = mysqli_fetch_assoc($result)) {
                          $a = $_SESSION['MEMBER_ID'];
                }
                          ?>

                <a class="dropdown-item bg-danger text-white" href="#" data-toggle="modal" data-target="#logoutModal">
                  
                  Logout
                </a>
            </li>
          </ul>
        </nav>
        <div class="container-fluid">