<?php
session_start();
include "header.php";
include "conn.php";
?>
<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
            <h1 class="mb-5">Our Menu</h1>
        </div>
        <div class="row g-4">
            <!-- start -->
            <?php
            $query = "SELECT * FROM mainmanu";
            $res = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                    <!-- Card Template Start -->               
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="img/about-4.jpg" class="card-img-top" alt="Food Image">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $row['name']; ?>
                                </h5>
                                <p class="card-text"><strong>Description:</strong>
                                    <?php echo $row['discription']; ?>
                                </p>
                                <p class="card-text"><strong>Ingredients:</strong>
                                    <?php echo $row['ingredients']; ?>
                                </p>
                                <p class="card-text"><strong>Price:</strong><i class="fa-solid fa-euro-sign"></i>
                                    <?php echo $row['price']; ?>
                                </p>
                                <a href="#" class="btn btn-warning add-to-basket1" data-id="<?php echo $row['id']; ?>">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Template End -->
            <?php } ?>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addToBasketButtons = document.querySelectorAll('.add-to-basket1');

        addToBasketButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default anchor action

                const itemId = this.getAttribute('data-id');

                fetch('add_to_cart.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            id: itemId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Item added to basket!');
                        } else {
                            alert('Failed to add item to basket.');
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    });
</script>
<!-- Service End -->
<?php include "footer.php"; ?>
