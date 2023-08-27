
<div class="container p-5">

<h4>Edit Course Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$course_id=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM course WHERE course_id='$course_id'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $pandel=$row1["pandel_id"];
?>
<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data' action="./controller/updatecourseController.php" method="POST">
	<div class="form-group">
      <input type="text" class="form-control" name="course_id" value="<?=$row1['course_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Product Name:</label>
      <input type="text" class="form-control" name="course_name" value="<?=$row1['course_name']?>">
    </div>
    <div class="form-group">
      <label for="desc">Product Description:</label>
      <input type="text" class="form-control" name="course_desc" value="<?=$row1['course_desc']?>">
    </div>
    <div class="form-group">
      <label for="price">Unit Price:</label>
      <input type="number" class="form-control" name="price" value="<?=$row1['price']?>">
    </div>
    <div class="form-group">
      <label>Category:</label>
      <select id="pandel" name='pandel_id'>
        <?php
          $sql="SELECT * from pandel WHERE pandel_id='$pandel'";
          $result = $conn-> query($sql);
          if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
              echo"<option value='". $row['pandel_id'] ."'>" .$row['pandel_name'] ."</option>";
            }
          }
        ?>
        <?php
          $sql="SELECT * from pandel WHERE pandel_id!='$pandel'";
          $result = $conn-> query($sql);
          if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){ ?>
              <option value='<?php echo($row['pandel_id']); ?>'><?php echo($row['pandel_name']) ?></option>
            <?php }
          }
        ?>
      </select>
    </div>
      
    <div class="form-group">
      <button type="submit" name="record" style="height:40px" class="btn btn-primary">Update Course</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>