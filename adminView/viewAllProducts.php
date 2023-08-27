
<div >
  <h2>Course</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Course ID</th>
        <th class="text-center">Course Name</th>
        <th class="text-center">Course Description</th>
        <th class="text-center">Pandel Name</th>
        <th class="text-center">Course Price</th>
          <th class="text-center" colspan="2">Action</th>
      
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from course";
      $result=$conn-> query($sql);
      $count=1;






      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {

          $ppand = $row['pandel_id'];
          $pand="SELECT pandel_name from pandel Where pandel_id = $ppand ";
          $rpand=$conn-> query($pand);
          $lpand = mysqli_fetch_assoc($rpand);


    ?>
    <tr>
      <td><?=$row["course_id"]?></td>
      <td><?=$row["course_name"]?></td>
      <td><?=$row["course_desc"]?></td>      
      <td><?=$lpand["pandel_name"]?></td> 
      <td><?=$row["price"]?></td>    
       
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['course_id']?>')">Edit</button></td>
        
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['course_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Course
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Course</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addcourseController.php" onsubmit="addItems()" method="POST">
            <div class="form-group">
              <label for="name">Course Name:</label>
              <input type="text" class="form-control" name="course_name" required>
            </div>
            <div class="form-group">
              <label for="price">Price:</label>
              <input type="number" class="form-control" name="price" required>
            </div>
            <div class="form-group">
              <label for="qty">Description:</label>
              <input type="text" class="form-control" name="course_desc" required>
            </div>
            <div class="form-group">
              <label>Pandel:</label>
              <select id="pandel_id" name='pandel' required >
                <?php

                  $sql="SELECT * from pandel";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){ ?>
                      <option value="<?php echo($row['pandel_id']); ?>"><?php echo($row['pandel_name']); ?> </option>;
                   <?php }
                  }
                ?>
              </select>
            </div>
           
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Course</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   