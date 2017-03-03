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
  $depart = $_GET['depart'];
  
 // require_once "getDepartFaculty.php";    
 ?>


<div class="container">
  <div class="content">
    <div class="wrap">
      <div class="side-navbar">
        
        <!--=========RETRIEVE DEPARTMENTS FROM DATABASE=======-->

        <ul>
            <?php

            $departmentQuery = "SELECT DISTINCT `department` FROM `faculty`";
            $departmentResult = $conn->query($departmentQuery);
            if(!$departmentResult) {
              die("Sorry! We are facing some technical issue.Please come back again". $conn->error);
            }
            else  {
                
              $departmentRows = mysqli_num_rows($departmentResult);
              if(!$departmentRows)  {
                die("error".$conn->error);
              }
              
            }   

            ?>

          <li class="side-navbar-heading">Departments
           <?php
            while($departmentRows)  {

              $faculty = mysqli_fetch_array($departmentResult);  
              $department = $faculty['department'];

          ?>
          <?php
            if($department == "DEPARTMENT OF FARM MACHINERY AND POWER ENGINEERING" || $department == "DEPARTMENT OF IRRIGATION AND DRAINAGE ENGINEERING" || $department == "DEPARTMENT OF POST HARVEST PROCESS AND FOOD ENGINEERING" || $department == "DEPARTMENT OF SOIL AND WATER CONSERVATION ENGINEERING")  {
                  $mainDepartment = "Department of Agricultural Engineering" ;
                  $subDepartment =  "DEPARTMENT OF FARM MACHINERY AND POWER ENGINEERING <br>DEPARTMENT OF IRRIGATION AND DRAINAGE ENGINEERING<br>DEPARTMENT OF POST HARVEST PROCESS AND FOOD ENGINEERING<br>DEPARTMENT OF SOIL AND WATER CONSERVATION ENGINEERING";

          ?>    
          <li class="side-navbar-agri"><a href="#"><?= $mainDepartment ?></a>
              <ul class="side-navbar-agri-submeu">
                  
                   <li><a href="#"><?= $subDepartment ?></a></li> 

             
             </ul>
          </li>
          <?php
          }


          else  {

            ?>
            <li><a href="<?= $_SERVER['PHP_SELF'] ?>?depart=<?= $faculty['department']?>" ><?= $faculty['department'] ?></a></li>
            <?php
              }
            //$subDepartRows = mysqli_num_rows($subDepartResult);
            ?>

        <?php  
          $departmentRows--;
        } 

        ?>
        </li>  
        </ul>

        <!--=========RETRIEVE DEPARTMENTS FROM DATABASE=======-->
      </div>

      
      <div class="faculty-table">
      <?php
        $facultyQuery = "SELECT * FROM `faculty` WHERE `department`='$depart'";
        $facultyResult = $conn->query($facultyQuery);
        $facultyRow = mysqli_num_rows($facultyResult);
        


      ?>
        <table>
        <tr>
          <th>Name</th>
          <th>Designation</th>
          <th>Qualification</th>
          <th>Specialization</th>
          <th>Contact</th>
        </tr>
        <?php
          while($facultyRow)  {
              $facultyDisp = mysqli_fetch_array($facultyResult);
            ?>
            
            <tr>
              <td><?= $facultyDisp['name'] ?></td>
              <td><?= $facultyDisp['designation'] ?></td>
              <td><?= $facultyDisp['qualification'] ?></td>
              <td><?= $facultyDisp['specialization'] ?></td>
              <td><?= $facultyDisp['email'] ?></td>
            </tr>
            <?php
        $facultyRow--;
          }
        ?>
     
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
