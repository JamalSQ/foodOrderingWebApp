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
              <h4 class="mb-4 animate__animated animate__rubberBand">Menu</h4>
            </div>
            
          </div>
        </div>
        <!-- Blog Posts Table -->
        <table class="table text-center">
          <thead>
            <tr>
              <th>Sr.No</th>
              <th><i class="fa-solid fa-image"></i> Image</th>
              <th><i class="fa-solid fa-list-ol"></i> Name</th>
              <th><i class="fa-solid fa-layer-group me-2"></i>Discription</th>
              <th><i class="fa-solid fa-arrows-to-circle me-2"></i>Ingredients</th>
              <th style="display:flex;"><i class="fa-solid fa-euro-sign me-2"></i>price</th>
              
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
          
          
            $query="SELECT * from `mainmanu`";
            $res=mysqli_query($conn,$query);

            if(mysqli_num_rows($res)>0){
              while($arr=mysqli_fetch_assoc($res)){
          ?>
            <tr>
              <td><?php echo $arr['id'];?></td>
              <td><?php 
                    // Output the image data with appropriate headers
                    echo '<img src="'.$arr['imgUrl'].'" alt="Post Image" class="img-thumbnail" style="max-width: 100px;">';
                    ?></td>

                  <td><?php echo $arr['name'];?></td>
                  <td><?php echo $arr['discription'];?></td>              
              <td><?php echo $arr['ingredients'];?></td>
              <td><?php echo $arr['price'];?></td>
               
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