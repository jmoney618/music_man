<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 4/25/2017
 * Time: 11:27 AM
 */
session_start(); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuaria Media Group</title>
    <link href="styles/main.css" rel="stylesheet" type="text/css">
    <link id="favicon" rel="shortcut icon" href="images/ared.png" type="image/x-icon">
    <script src="scripts/jquery-3.2.1.slim.min.js"></script>
</head>

<body>
<?php include 'heading.php'; ?>
<div class="clear"></div>
<!-- Form section -->
<div id="form_container">
    <div class="container">
        <h2>Request a quote</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="fname">First Name: </label><br>
            <input type="text" id="fname" name="first_name">
            <br><br>
            <label for="lname">Last Name: </label><br>
            <input type="text" id="lname" name="last_name">
            <br><br>
            <label for="email">Email: </label><br>
            <input type="text" id="email" name="email">
            <br><br>
            <label for="phone">Phone: </label><br>
            <input type="text" id="phone" name="phone">
            <br><br>
            <label for="service">Service: </label><br>
            <select id="service" name="service">
                <option value=""></option>
                <option value="live recording">Live recording</option>
                <option value="mix and master">Mix &amp; Master</option>
                <option value="other">Other</option>
            </select>
            <br><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</div>
<!-- Process form inputs -->
<?php
require 'connection.php';

// Initialize and assign form values to variables
$fname = isset($_POST['first_name']) ? $_POST['first_name'] : '';
$lname = isset($_POST['last_name']) ? $_POST['last_name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$service = isset($_POST['service']) ? $_POST['service'] : '';

// Protect from SQL injections
$fname = stripslashes($fname);
$fname = mysqli_real_escape_string($con, $fname);

$lname = stripslashes($lname);
$lname = mysqli_real_escape_string($con, $lname);

$email = stripslashes($email);
$email = mysqli_real_escape_string($con, $email);

$phone = stripslashes($phone);
$phone = mysqli_real_escape_string($con, $phone);

$service = stripslashes($service);
$service = mysqli_real_escape_string($con, $service);

// Send form data to database
if (isset($_POST['submit'])) {
    // MySQL query to test if user has an account in the database
    $query = "SELECT first_name, last_name, email FROM nuaria.customer WHERE first_name = '$fname' AND last_name = '$lname' AND email = '$email'";
    $result = mysqli_query($con, $query);
    $check = mysqli_num_rows($result);

    // If there is a entry in the data base, return an error message
    if ($check > 0) {
        echo "<p class='red-backdrop'>It looks like you have already requested a quote.</p>";
    } else {
        // Insert new customer into Customer table in database
        $insert_customer = "INSERT INTO nuaria.customer (first_name, last_name, email, phone) VALUES ('$fname', '$lname', '$email', '$phone')";
        $result = mysqli_query($con, $insert_customer);

        // Insert new entry into CustomerService table in database
        // Query to select customerID
        $query_customerID = "SELECT customerID FROM nuaria.customer WHERE first_name = '$fname' AND last_name = '$lname' AND email = '$email'";
        $result_customerID = mysqli_query($con, $query_customerID);
        $row_customer = mysqli_fetch_array($result_customerID);
        $row_customer = $row_customer['customerID'];
        // Query to select serviceID
        $query_serviceID = "SELECT serviceID FROM nuaria.services WHERE service = '$service'";
        $result_serviceID = mysqli_query($con, $query_serviceID);
        $row_service = mysqli_fetch_array($result_serviceID);
        $row_service = $row_service['serviceID'];
        // Query to insert new record into CustomerService table in database
        $insert_customer_service = "INSERT INTO nuaria.customerservice (customerID, serviceID) VALUES ('$row_customer', '$row_service')";
        $result = mysqli_query($con, $insert_customer_service);

        // Output a thank you message
        echo "<p class='red-backdrop'>Thank you for your interest.  We will contact you shortly.</p>";
    }
}

mysqli_close($con);
?>
<?php include 'footer.php' ?>
<script>
    $(document).ready(function() {
        $("p").insertBefore("h2");
    })
</script>
</body>
</html>