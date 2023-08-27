<div >
  <h2>All Feedback</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Full Name </th>
    
        <th class="text-center">Email</th>
        <th class="text-center">Feedback</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from feedback ";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      
      <td><?=$row["id"]?></td>
      <td><?=$row["name"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["feedback"]?></td>
      
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>