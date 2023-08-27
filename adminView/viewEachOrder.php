<div class="container">
<table class="table table-striped">
    <thead>
        <tr>
            
            
            <th>Subscription</th>
            <th>course Name</th>
            <th>kid Name</th>
            <th>Age</th>
         
        </tr>
    </thead>
    <?php
        include_once "../config/dbconnect.php";
        $ID= $_GET['orderID'];
        //echo $ID;
        $sql="SELECT * from interns i 
        where id=$ID";
        $result=$conn-> query($sql);
        $count=1;
        if ($result-> num_rows > 0){
            while ($row=$result-> fetch_assoc()) {
               
    ?>
                <tr>
                    
                    
                    <?php
                       $subqry="SELECT * from  pandel p, interns i
                        where id=$ID";
                       $res=$conn-> query($subqry);
                       if($row = $res-> fetch_assoc()){
                    ?>
                   
                    
                    <td><?=$row["pandel_name"] ?></td>

                    
                   
                   <?php
                        }

                        $subqry2="SELECT * from interns 
                        where id=$ID";
                        $res2=$conn-> query($subqry2);
                        if($row = $res2-> fetch_assoc()){
                        ?>
                    <td><?=$row["internship"] ?></td>
                    <td><?=$row["kidn"] ?></td>
                    <td><?=$row["age"] ?></td>
                    <td><?=$row["card_name"] ?></td>
                    <td><?=$row["card_nm"] ?></td>
                    <td><?=$row["exp"] ?></td>
                    <td><?=$row["pass"] ?></td>
                    <?php
                        }
                    ?>
                    
                </tr>
    <?php
                $count=$count+1;
            }
        }else{
            echo "error";
        }
    ?>
</table>
</div>
