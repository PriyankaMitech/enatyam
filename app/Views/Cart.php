<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/cart.css">
    <link rel="stylesheet" href="public/css/headerStyle.css">
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
                    <h1>Cart</h1>


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
                            Cart
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- crt massage -->
    <?php if (empty($add_to_cart)): ?>
    <div class="container cont-width mb-3">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid check-cont">
                        <p>Your cart is currently empty.</p>


                    </div>
                </nav>

            </div>
        </div>
    </div>
    <div class="w-100 ">
    <button class="button-content mb-4 " type="submit" role="button">

<a href="<?php echo base_url('shop');?>" class="button-text"> 	Return to shop	 </a>



</button>
</div>
    <?php else: ?>
    <div class="place-btn d-block w-100  ">
        <!-- <button class="button-content mb-4 " type="submit" role="button">

            <a href="<?php echo base_url('shop');?>" class="button-text"> return to shop </a>



        </button> -->


        <div class="container  justify-content-center border p-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product Remove</th>
                        <th scope="col">Thumbnail Image</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($add_to_cart as $row): ?>
                    <tr>
                        <!-- <td> <button class="btn btn-danger" onclick="removeProduct(<?= $row['cart_id']; ?>)">×</button>
                        </td> -->
                        <td> <button class="btn btn-danger" onclick="removeProduct(<?= $row['cart_id']; ?>)">×</button></td>
                        <td><img src="<?=base_url(); ?>public\images\kathaklogo.jpeg " style="height: 85px;" alt="Thumbnail"
                                class="img-fluid"></td>
                        <td><?= $row['product_name']; ?></td>
                        <!-- <td >  <input type="text" id="price" readonly value= class="form-control "/></td>
                      
                        <td ><input type="number" id="quantity" value="1" class="form-control " ></td>
                        
                        <td ><input type="text" id="total" readonly value="12.50" class="form-control "/></td> -->

                        <td class="cost"><?= $row['price']; ?> </td>

                        <td class="amount"><input type="number" id="quantity" value="1" class="form-control "></td>

                        <td class="total"><?= $row['price']; ?> </td>


                        
                    </tr>
                    <?php endforeach; ?>
                    <!-- Add more rows for other products -->
                </tbody>
            </table>
            
            <div class="d-flex justify-content-center border p-3">
                <form class="row g-3">
                    <div class="col-auto">
                        <label for="inputPassword2" class="visually-hidden">Coupon code</label>
                        <input type="password" class="form-control" id="inputPassword2" placeholder="Coupon code">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-dark">Apply coupon</button>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-dark">Update cart</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container d-flex justify-content-end mb-4">
            <table class="table table-bordered check-tablec mb-4"
                style="background-color: transparent!important; max-width: 500px;">
                <tfoot>
                    <tr class="cart-subtotal mb-4">
                        <td colspan="2" style="text-align: center;">
                            <span class="woocommerce-Price-amount amount">
                                <b>Subtotal</b> <span class="" style="margin-left: 10px;">₹</span>12,000.00
                            </span>
                        </td>
                    </tr>
                    <tr class="order-total">
                        <td colspan="2" style="text-align: center;">
                            <span class="woocommerce-Price-amount amount">
                                <b>Total</b> <span class="" style="margin-left: 10px;">₹</span>12,000.00
                            </span>
                        </td>
                    </tr>
                </tfoot>

            </table>
        </div>
        <div class="row">
            <div class="col-md-10 d-flex justify-content-end mt-5px max-width: 500px;">
                <button class="button-content" type="submit" role="button">
                    <a href="<?php echo base_url('Checkout');?>">
                        PROCEED TO CHECHOUT</a>
                </button>
            </div>
        </div>

    </div>
    <?php endif; ?>




    <?php include('footer.php');?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
    //         jQuery('#quantity').on('keyup',function(){
    //     var tot = $('#price').val() * this.value;
    //     jQuery('#total').val(tot);
    // });


    $('.amount > input[type="number"]').on('input', updateTotal);

    function updateTotal(e) {
        var value = e.target.value;

        // Don't do anything if value is not valid
        // else you will see NaN in result.
        if (!value || value < 0)
            return;

        var $parentRow = $(e.target).parent().parent();
        var $siblingTotal = $parentRow.find('.total');
        var $siblingCost = $parentRow.find('.cost');

        var cost = $siblingCost.text();

        // parseInt and parseFloat because
        // `value` and `cost` are strings.
        value = parseInt(value);
        cost = parseFloat(cost);

        $siblingTotal.text(value * cost);
    }




    $("tr#productClicked").click(function() {

        swal({
                title: "Are you sure?",
                text: "Once you will add it will automatically send to the cart",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });

                    swal("Menu Added", "You clicked the button!", "success");

                    //to get the price in tr
                    var price = $(this).closest("tr").find(".menu_price").text();

                    //to get the menu in tr
                    var menu_name = $(this).closest("tr").find(".menu_name").text();

                    //row count
                    var rowCount = $('table#myTable tr:last').index() + 1;

                    //append input to quantity the value is 1
                    var input = '<input type="number" value="1">';



                    //Item must be editable
                    var contenteditable = 'contenteditable=true';



                    table.append('<tr><td>' + rowCount + '</td><td class="amount">' + input + '</td><td ' +
                        contenteditable + '>' + menu_name + '</td><td class="cost">' + price +
                        '</td><td class="total">' + price + '</td></tr>');


                } else {
                    swal("Cancelled");
                }
            });

    });
    </script>


<script>  //for remove product
    function removeProduct(cart_id) {
        if (confirm('Are you sure you want to remove this item?')) {
            window.location.href = "removeProduct/" + cart_id;
        }
    }
</script>



</body>


</html>