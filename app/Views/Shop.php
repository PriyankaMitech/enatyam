<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    <link rel="stylesheet" href="public/css/headerStyle.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css"
        integrity="sha512-CB+XYxRC7cXZqO/8cP3V+ve2+6g6ynOnvJD6p4E4y3+wwkScH9qEOla+BTHzcwB4xKgvWn816Iv0io5l3rAOBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- fontawesome icon cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"
        integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jQuery library -->

</head>

<body>
<?php include('header.php');?>
    <section class="contactus">

        <div class="container cont-width">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Shop</h1>


                </div>

            </div>

        </div>

    </section>
    <section class="cont-main-section">
        <div class="container cont-width">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb-ul">
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </li>
                        <li>
                            Shop
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>





    <section class="cont-cart-sec">
        <div class="container cont-width">
            <div class="row">
                <div class="col-lg-9">

                    <div class="cart-top">
                        <div class="row">

                            <div class="col-lg-8 my-auto">

                                <a><i class="fa fa-th"></i></a>
                                <a><i class="fa fa-list"></i></a>

                                <span>Showing the single result</span>
                            </div>
                            <div class="col-lg-4">
                                <select name="orderby" class="orderby" aria-label="Shop order">
                                    <option value="menu_order">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating" selected="selected">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div>

                        </div>


                    </div>

                    <!-- card top end -->
                    <form action="AddToCart" method="post"  enctype="multipart/form-data" >
                        <div class="cart-section">
                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="card">
                                        <img src="public\images\Dance\Lehanga\kathak-lehnga2.jpeg" type="file"   name="image_name"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <!-- <h5 class="card-title" name="product_name">Kathak Lehanga</h5> -->
                                            <input class="card-title" name="product_name" value="Kathak Lehanga">
                                            <div class="d-flex justify-content-between" value="price">
                                                <div>
                                                    <p class="amount"><del>₹15,000.00</del></p>
                                                    <p class="amount-1">₹12,000.00</p>
                                                    <!-- <input class="amount-1" type="text"  name="price" value="₹12,000.00" readonly> -->
                                                    <input class="amount-1" type="hidden" name="price" value="12000">
                                                </div>

                                                <div>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>
                                           
                                            <!-- <input class="card-text"  type="text" value="" readonly> -->

                                                <textarea name="description" class="card-text" readonly rows="3" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp...</textarea>
                                            <!-- <p id="demo">
                                            <a href="<?php echo base_url('Checkout');?>" class="btn btn-cart"
                                                type="submit" value="addtocart" id="addtocart" onclick="myFunction()"
                                                type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                Add to Cart</a>
                                        </p> -->

                                        <p id="demo">
                                            <input  class="btn btn-cart"
                                                type="submit" value=" Add to Cart" id="addtocart" 
                                                type="button">
                                               
                                        </p>
                                            <!-- <div>
                                                <input class="form-group-submit" type="submit" value="Book Demo">
                                            </div> -->

                                        </div>

                                    </div>

                                </div>

                            </div>



                        </div>
                    </form>
                </div>

                <div class="col-lg-3">
                    <div class="right-div">

                        <div class="search-div">
                            <input type="search" class="form-control" placeholder="Search Products..." />
                            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>

                        </div>

                        <div class="product-category">
                            <h5>PRODUCT CATEGORIES
                            </h5>

                            <div class="d-flex justify-content-between mb-2">
                                <span>Accessories</span>
                                <span>(1)
                                </span>

                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <span>Accessories</span>
                                <span>(0)
                                </span>

                            </div>
                        </div>
                        <div class="product">
                            <h5>PRODUCTS
                            </h5>



                            <div class="d-flex justify-content-between mb-2">
                                <img src="public\images\kathaklogo.jpeg " style="height:85px">
                                <span>
                                    <h5 class="img-titale" style="font-size:15px">Kathak Lehanga</h5>
                                    <div class="img-price cart-section d-flex justify-content-between">
                                        <span class="amount"
                                            style="font-size:14px;margin-right:10px"><del>₹15,000.00</del></span>
                                        <span class="amount-1" style="font-size:14px">₹12,000.00</span>


                                    </div>
                                    <div class="cart-section">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </span>




                            </div>


                        </div>
                        <div class="d-flex justify-content-between mb-2 mt-5">
                            <div class="sale-image">
                                <img src="public\images\sale.jpg " style="height:180px">
                            </div>



                        </div>

                    </div>


                </div>

            </div>

        </div>



        </div>
        </div>
    </section>


    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="text-align:center">
                    <a href="<?php echo base_url('Checkout');?>" class="btn cont-shop1">Login</a>
                    <a href="" class="btn cont-shop2">Sign Up</a>
                </div>
                <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
            </div>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
    function addToCart() {
        var productName = "Kathak Lehanga"; // Get the product name dynamically if needed
        var productDescription = "Lorem ipsum dolor sit amet..."; // Get the product description dynamically if needed
        var productImageSrc =
            "public\\images\\Dance\\Lehanga\\kathak-lehnga2.jpeg"; // Get the image source dynamically if needed

        // Send the collected data to a backend API for processing
        fetch('/addtocart', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    name: productName,
                    description: productDescription,
                    image: productImageSrc
                })
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response as needed (e.g., show a success message)
            })
            .catch(error => {
                // Handle errors
            });
    }
    </script>
    <script>
    function myFunction() {
        //   var txt;
        //   if (confirm("You Have To Login")) {
        //     login = "You pressed OK!";
        //   } else {
        //     txt = "You pressed Cancel!";
        //   }

        //   document.getElementById("demo").innerHTML = txt;
    }
    </script>
</body>
<?php include('footer.php'); ?>

</html>