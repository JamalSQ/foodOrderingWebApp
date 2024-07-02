<?php 
include "conn.php";
include "adminHeader.php";
?>
      <!-- Main start -->
      <div class="col-md-10 ml-5 animsition">
        <!-- Dashboard content -->
        <div class="postheading">
          <div class="row d-flex justify-content-between">
            <div class="col-md-4">
              <h4 class="mb-4 animate__animated animate__rubberBand">All Orders</h4>
            </div>
          
          </div>
        </div>
        <!-- Blog Posts Table -->
        <table class="table text-center">
          <thead>
            <tr>
              <th>Sr.No</th>
              <th><i class="fa-solid fa-image"></i> Image</th>
              <th><i class="fa-solid fa-user me-2"></i>Customer Name</th>
              <th><i class="fa-solid fa-calendar-days me-2"></i>	orderDate</th>
              <th><i class="fa-solid fa-chair me-2"></i>	tableNo</th>
              <th><i class="fa-solid fa-euro-sign me-2"></i>price</th>
              <th><i class="fa-solid fa-file-invoice me-2"></i>	status</th>
              <th><i class="fa-solid fa-circle-info me-2"></i>More info</th>
              
            </tr>
          </thead>
          <tbody>
      <?php

            include("conn.php");
            function limitCharacters($string, $limit) {
              // Check if the string length exceeds the limit
              if (strlen($string) > $limit) {
                  // Trim the string to the specified limit
                  $limitedString = substr($string, 0, $limit);
                  
                  // Find the position of the last space within the limit
                  $lastSpace = strrpos($limitedString, ' ');
                  
                  // If there's a space within the limit, truncate the string at that position
                  if ($lastSpace !== false) {
                      $limitedString = substr($limitedString, 0, $lastSpace);
                  }
                  
                  // Append three dots (...) to indicate continuation
                  $limitedString .= '...';
              } else {
                  // If the string length is within the limit, keep the original string
                  $limitedString = $string;
              }
              
              return $limitedString;
          }
          
          
            $query="SELECT * from `order`";
            $res=mysqli_query($conn,$query);

            if(mysqli_num_rows($res)>0){
              while($arr=mysqli_fetch_assoc($res)){
          ?>
            <tr>
              <td><?php echo $arr['id'];?></td>
              <td><?php 
                    // Output the image data with appropriate headers
                    echo '<img src="'.$arr['ImgUrl'].'" alt="Post Image" class="img-thumbnail" style="max-width: 100px;">';
                    ?></td>

                  <td><?php echo $arr['customerName'];?></td>
                  <td><?php echo $arr['orderDate'];?></td>
              
                            

              <td><?php echo $arr['tableNo'];?></td>
              <td><?php echo $arr['price'];?></td>
              
                
              <?php 
                  if($arr['status']=='pending'){
                    ?>
                    <td><a href="aEditPost.php?bid=<?php echo $arr['status'];?>" class="btn btn-warning"><?php echo $arr['status'];?></a></td>
                    <?php
                  }else{ ?>
                    <td><a href="aEditPost.php?bid=<?php echo $arr['status'];?>" class="btn btn-success"><?php echo $arr['status'];?></a></td>
                <?php }?>

                <td><a href="moreInfo.php?cname=<?php echo $arr['customerName'];?>&oid=<?php echo $arr['id'];?>" class="btn btn-info text-white"><i class="fa-solid fa-angle-right"></i></a></td>
            </tr>
          <?php   }
            }else{
              echo "No Posts Found";
            } ?>
            <!-- Add more rows for additional blog posts -->
          </tbody>

        </table>
       
      </div>
      <!-- Main End -->


      
<?php
include "adminFooter.php";
?>