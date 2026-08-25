<?php
require_once("admin/functions.php");
require_once("includes/header.php");
// razorpay payment gateway integration
require('vendor/autoload.php');
use Razorpay\Api\Api;

$customer_id = $_SESSION["customer_id"];

$shwcart = managecart(
    'tbl_cart',
    'tbl_addproducts',
    'photo',
    'pname',
    'offerprice',
    'pid',
    'customer_id',
    $customer_id
);
$total = 0;

foreach($shwcart as $row)
{
    $total= $row["subtotal"];
}

// set a session for placeorder
if(isset($_POST["place_order"]))
{
    $_SESSION['checkout_name']     = $_POST['name'];
    $_SESSION['checkout_mobile']   = $_POST['mobile'];
    $_SESSION['checkout_email']    = $_POST['email'];
    $_SESSION['checkout_address']  = $_POST['address'];
    $_SESSION['checkout_city']     = $_POST['city'];
    $_SESSION['checkout_pincode']  = $_POST['pincode'];
    $_SESSION['grand_total']       = 1; // Rs. 1 for testing

    $api = new Api($keyId,$keySecret);

    $orderData = [
        'receipt'         => 'ORDER_'.time(),
        'amount'          => $total * 100,
        'currency'        => 'INR',
        'payment_capture' => 1
    ];

    $razorpayOrder = $api->order->create($orderData);

    $_SESSION['razorpay_order_id'] = $razorpayOrder['id'];

    $openPayment = true;

}


?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<!-- Razorpay Checkout Script -->

<h2>Online Payment Only</h2>
<div class="container my-5">
    <div class="row">

        <!-- Customer Details -->
        <div class="col-lg-6">
            <div class="card shadow p-4">
                <h3 class="mb-4">Customer Details</h3>

                <form method="post" id="checkoutForm">

                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required    >
                    </div>

                    <div class="mb-3">
                        <label>Mobile No</label>
                        <input type="text" name="mobile" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Address</label>
                        <textarea name="address" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label>City</label>
                        <input type="text" name="city" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Pincode</label>
                        <input type="text" name="pincode" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Payment Method</label>
                        <select name="payment_method" class="form-control">
                            <option value="COD">Cash On Delivery</option>
                            <option value="Online">Online Payment</option>
                        </select>
                    </div>

            </div>
        </div>

        <!-- Cart Summary -->
        <div class="col-lg-6">
            <div class="card shadow p-4">
                <h3 class="mb-4">Order Summary</h3>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach($shwcart as $row)
                        {
                            $total = 1; // Rs. 1 for testing;
                        ?>

                        <tr>
                            <td>
                                <img src="admin/<?php echo $row['photo']; ?>"
                                     width="60">
                            </td>

                            <td><?php echo $row["pname"]; ?></td>

                            <td>₹<?php echo 1; ?></td>

                            <td><?php echo $row["quantity"]; ?></td>

                            <td>₹<?php echo 1; ?></td>
                        </tr>

                        <?php } ?>

                    </tbody>
                </table>

                <div class="text-end">
                    <h4>Total : ₹<?php echo 1; ?></h4>
                </div>

                <input type="hidden" name="grand_total"
                       value="<?php echo 1; ?>">

                <button type="submit"  id="rzp-button1"
                        name="place_order"
                        class="btn btn-success w-100 mt-3">
                    Place Order
                </button>

                </form>

            </div>
        </div>

    </div>
</div>

<?php if(isset($openPayment)){ ?>

<script>

window.onload = function(){

    var options = {

        key: "<?php echo $keyId;?>",

        amount: "<?php echo 1 * 100;?>",

        currency: "INR",

        name: "My Store",

        description: "Order Payment",

        order_id: "<?php echo $_SESSION['razorpay_order_id'];?>",

        prefill: {

            name: "<?php echo $_SESSION['checkout_name'];?>",

            email: "<?php echo $_SESSION['checkout_email'];?>",

            contact: "<?php echo $_SESSION['checkout_mobile'];?>"
        },

        notes: {

            address: "<?php echo $_SESSION['checkout_address'];?>",

            city: "<?php echo $_SESSION['checkout_city'];?>",

            pincode: "<?php echo $_SESSION['checkout_pincode'];?>"
        },

        theme: {
            color: "#28a745"
        },

        handler: function(response){

            window.location.href =
            "verify.php?payment_id="+response.razorpay_payment_id+
            "&order_id="+response.razorpay_order_id+
            "&signature="+response.razorpay_signature;

        },

        modal: {

            ondismiss: function(){

                window.location.href='checkout.php';

            }
        }

    };

    var rzp = new Razorpay(options);

    rzp.open();

};
</script>

<?php } ?>

<?php require_once("includes/footer.php"); ?>