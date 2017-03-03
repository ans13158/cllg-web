<?php include('../includes/basic_layout.inc.php'); ?>

<!DOCTYPE html>
<html>
<head>
  
  <?php head('other than index'); ?>
  <link rel="stylesheet" type="text/css" href="../css/faculty.css" />

</head>

<body>
  
<!--===================================================-->
<!--=================== NAVBAR SECTION=================  -->
<!--===================================================-->

<?php 
  navbar('pages');
  require_once "connection.php";
 // require_once "getDepartFaculty.php";    
 ?>


<div class="container">
  <div class="content">
    <div class="wrap">
      <div class="side-navbar">
        
        <!--=========RETRIEVE DEPARTMENTS FROM DATABASE=======-->

        <ul>
            <?php

            $query = "SELECT * FROM departments";
            $result = $conn->query($query);
            if(!$result) {
              die("Sorry! We are facing some technical issue.Please come back again". $conn->error);
            }
            else  {
                
              $rows = mysqli_num_rows($result);
              if(!$rows)  {
                die("error".$conn->error);
              }
              
            }   

            ?>

          <li class="side-navbar-heading">Departments</li>
           <?php
            while($rows)  {

              $department = mysqli_fetch_array($result);  

          ?>
          <!--<li class="side-navbar-agri"><a href="#">Agricultural Engineering</a>  
            <ul class="side-navbar-agri-submeu">
              <li><a href="#">Irrigation and Drainage Engineering</a></li>
              <li><a href="#">Farm Machinery Engineering</a></li>
              <li><a href="#">Irrigation and Drainage Engineering</a></li>
              <li><a href="#">Farm Machinery Engineering</a></li>
            </ul>
          </li>-->
          <li><a href="#"><?= $department['name'] ?></a></li>
          <?php
            $querySubDepart = "SELECT `sub-department` FROM `departments` WHERE `departmentId`= '$department[0]'";
            $subDepartResult = $conn->query($querySubDepart);
            if(!$subDepartResult) 
              die("error in subDepartment".$subDepartResult->error);

            $subDepartRows = mysqli_num_rows($subDepartResult);
            ?>

                  <ul class="side-navbar-agri-submeu">
                  <?php
            while($subDepartRows)  { 
                  ?>
              <li><a href="#">Irrigation and Drainage Engineering</a></li> 

              <?php 
              $subDepartRows-- ; 
            }
          ?>
          </ul>
          
         <!-- <li><a href="#">Computer Engineering</a></li>
          <li><a href="#">Electronics and Communication Engineering</a></li>
          <li><a href="#">Electrical Engineering</a></li>
          <li><a href="#">Information Technology</a></li>
          <li><a href="#">Mechanical Engineering</a></li>
          <li><a href="#">Industrial and Production Engineering</a></li>-->
        <?php  
          $rows--;
        } 

        ?>
          
        </ul>

        <!--=========RETRIEVE DEPARTMENTS FROM DATABASE=======-->
      </div>
      <div class="faculty-table">
        <table>
        <tr>
          <th>Name</th>
          <th>Designation</th>
          <th>Education</th>
          <th>Contact</th>
        </tr>
        <tr>
          <td>Mr. S.D. Samantray</td>
          <td>Professor</td>
          <td>M. Tech.</td>
          <td>1151515415454</td>
        </tr>
        <tr>
          <td>Er. C.S. Negi</td>
          <td>Ass. Professor</td>
          <td>M. Tech.</td>
          <td>1151515415454</td>
        </tr>
        <tr>
          <td>Dr. Rajiv Singh</td>
          <td>Ass. Professor</td>
          <td>Phd.</td>
          <td>1151515415454</td>
        </tr>
        <tr>
          <td>Mr. S.D. Samantray</td>
          <td>Professor</td>
          <td>M. Tech.</td>
          <td>1151515415454</td>
        </tr>
        <tr>
          <td>Mr. S.D. Samantray</td>
          <td>Professor</td>
          <td>M. Tech.</td>
          <td>1151515415454</td>
        </tr>
        <tr>
          <td>Mr. S.D. Samantray</td>
          <td>Professor</td>
          <td>M. Tech.</td>
          <td>1151515415454</td>
        </tr>
        <tr>
          <td>Mr. S.D. Samantray</td>
          <td>Professor</td>
          <td>M. Tech.</td>
          <td>1151515415454</td>
        </tr>
        <tr>
          <td>Mr. S.D. Samantray</td>
          <td>Professor</td>
          <td>M. Tech.</td>
          <td>1151515415454</td>
        </tr>
        <tr>
          <td>Mr. S.D. Samantray</td>
          <td>Professor</td>
          <td>M. Tech.</td>
          <td>1151515415454</td>
        </tr>
        <tr>
          <td>Mr. S.D. Samantray</td>
          <td>Professor</td>
          <td>M. Tech.</td>
          <td>1151515415454</td>
        </tr>
        </table>
      </div>
    </div>
</div>
  
</div>






<!--================================================-->
<!--================= FOOTER =================-->
<!--================================================-->

<?php footer(); ?>

  <script src='https://use.fontawesome.com/f920fb7102.js'></script>

  <script src="../js/index.js"></script>
</body>
</html>
