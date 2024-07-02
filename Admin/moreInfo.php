<?php
include "conn.php";
include "adminHeader.php";
?>
<!-- Service Start -->
<div class="container-xxl py-5 col-md-10">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Order</h1>
        </div>
        <div class="row g-4">
        <h5>User Details</h5>
        <hr style="margin:0px 0px 35px 0px;">
            <!-- start -->
            <?php
            if(isset($_GET['cname'])){
                $cname=$_GET['cname'];
            $query = "SELECT * FROM `order` where customerName='$cname'";
            $res = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                    <!-- Card Template Start -->               
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <!-- <img src="<?php echo $row['ImgUrl']; ?>" class="card-img-top" alt="Food Image"> -->
                            <div class="card-body">
                                <p class="card-text text-dark"><b>User Name:</b>
                                    <?php echo $row['customerName']; ?>
                                  </p>
                                <p class="card-text"><strong>Order Date:</strong>
                                    <?php echo $row['orderDate']; ?>
                                </p>
                                <p class="card-text"><strong>Status:</strong>
                                    <?php echo $row['status']; ?>
                                </p>
                                <p class="card-text"><strong>Table No:</strong>$
                                    <?php echo $row['tableNo']; ?>
                                </p>
                                <p class="card-text"><strong>Price:</strong>$
                                    <?php echo $row['price']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card Template End -->
            <?php }} ?>
        </div>

    
        <div class="row g-4">
        <h5>Order Details</h5>
        <hr style="margin:0px 0px 35px 0px;">
            <!-- start -->
            <?php
            if(isset($_GET['oid'])){

                $oid=$_GET['oid'];

                $query="SELECT 
                mm.*
            FROM 
                `order` o
            JOIN 
                `totaliteminorder` tio ON o.id = tio.order_id
            JOIN 
                `mainmanu` mm ON tio.main_menu_id = mm.id
            WHERE 
                o.id = $oid";
            $res = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                    <!-- Card Template Start -->               
                    <div class="col-md-4 mb-4">
                        
                        <div class="card">
                            <img src="<?php echo $row['imgUrl']; ?>" class="card-img-top" alt="Food Image">
                            <div class="card-body">
                                <p class="card-text text-dark"><b>Item Name:</b>
                                    <?php echo $row['name']; ?>
            </p>
                                <p class="card-text"><strong>discription:</strong>
                                    <?php echo $row['discription']; ?>
                                </p>
                                <p class="card-text"><strong>ingredients:</strong>
                                    <?php echo $row['ingredients']; ?>
                                </p>
                                <p class="card-text"><strong>Price:</strong>$
                                    <?php echo $row['price']; ?>
                                </p>
                                <p class="card-text"><strong>Price:</strong>$
                                    <?php echo $row['name']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card Template End -->
            <?php }} ?>
        </div>
    </div>
</div>
<!-- Service End -->
<?php include "adminFooter.php"; ?>
