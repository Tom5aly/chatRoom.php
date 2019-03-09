<?php
     include("db.php");
     $query = " SELECT * FROM chat ORDER BY id DESC ";
     $run = $coaction->query($query);

     while ($row = $run->fetch_array()) :
     ?>
     <div id="chat_data">
       <span style="color:green; text-transform: capitalize;"><?php echo $row["name"]; ?></span> : 
       <span style="color:red;" ><?php echo $row["message"]; ?> </span>
       <span style="float: right;" ><?php echo formatDate($row["date"]); ?></span>
     </div>
     <?php
     endwhile;
     ?>
