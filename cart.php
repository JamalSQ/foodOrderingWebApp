<?php
session_start();
// Start session
include "header.php";
include "conn.php";
?>
<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
            <h1 class="mb-5">Your Cart</h1>
        </div>
        <div class="row g-4">

            <!-- start -->
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <?php
                            // Check if cart is set and not empty
                            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                $totalprice=0;
                                foreach ($_SESSION['cart'] as $item) {
                            ?>
                                    <div class="col-md-4 mb-4">
                                        <div class="card">
                                            <img src="<?php echo $item['imgUrl']; ?>" class="card-img-top" alt="Food Image">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <?php echo $item['name']; ?>
                                                </h5>
                                                <p class="card-text"><strong>Description:</strong>
                                                    <?php echo $item['discription']; ?>
                                                </p>
                                                <p class="card-text"><strong>Ingredients:</strong>
                                                    <?php echo $item['ingredients']; ?>
                                                </p>
                                                <p class="card-text"><strong>Price:</strong> <i class="fa-solid fa-euro-sign"></i>
                                                    <?php echo $item['price']; ?>
                                                </p>
                                                <p class="card-text"><strong>Quantity:</strong>
                                                    <?php echo $item['quantity']; 
                                                    
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                        
                            $totalprice+=$item['price']*$item['quantity'];
                            
                            }
                            } else {
                                echo "<h2>Cart is Empty</h2>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>Cart Summary</h3>
                        <ul class="list-group" id="cart-items">
                            <!-- Cart items will be injected here by JavaScript -->
                        </ul>
                        <div class="mt-3">
                            <h4>Total: <i class="fa-solid fa-euro-sign"></i><span id="cart-total"><?php 
                            if(isset($totalprice)){
                                echo $totalprice;
                            }
                            ?></span></h4>
                            <form method="POST" action="placeorder.php">
                            <div class="mb-3">
                                <label for="name" class="form-label">Enter Name</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="name" required>
                               
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Enter Table No</label>
                                <input type="text" class="form-control" name="tableno" id="tableno" required>
                            </div>

                            <input type="hidden" value="<?php  echo $totalprice;?>" name="totalprice">
                            <button type="submit" class="btn btn-success col-md-12">Place Order</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
<?php include "footer.php"; ?>
