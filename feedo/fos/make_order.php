<?php
include('admin/db_connect.php');
if (isset($_POST)) {
    $name = filter_var($_POST['full_name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = filter_var($_POST['mobile'], FILTER_SANITIZE_STRING);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $items = filter_var($_POST['num_of_items'], FILTER_VALIDATE_INT);


    if ($name == '' or !$name) {
        echo "<script>alert('Enter valid Name');window.history.back();</script>";
        exit();
    }

    if ($email == '' or !$email) {
        echo "<script>alert('Enter valid Email');window.history.back();</script>";
        exit();
    }

    if ($phone == '' or !$phone or strlen($phone) < 11) {
        echo "<script>alert('Enter valid phone');window.history.back();</script>";
        exit();
    }

    if ($address == '' or !$address) {
        echo "<script>alert('Enter valid Address');window.history.back();</script>";
        exit();
    }

    if ($items == '' or !$items) {
        echo "<script>alert('Enter valid Items');window.history.back();</script>";
        exit();
    }

    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        $client_ip = $_SERVER['HTTP_CLIENT_IP'];
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        $client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else
        $client_ip = $_SERVER['REMOTE_ADDR'];

    $sql = "UPDATE cart SET status = '-1' WHERE client_ip = '$client_ip'";
    $run = $conn->query($sql);
    if ($run) {
        $sql = "INSERT INTO `orders`( `name`, `address`, `mobile`, `email`, `status`) VALUES ('$name','$address','$phone','$email','0')";
        $run = $conn->query($sql);
        if ($run) {
            $order_id = $conn->insert_id;

            for ($i = 1; $i <= $items; $i++) {
                $product = filter_var($_POST['product_' . $i], FILTER_VALIDATE_INT);
                $qty = filter_var($_POST['qty_' . $i], FILTER_VALIDATE_INT);

                $sql = "SELECT id FROM order_list WHERE order_id = '$order_id' AND product_id = '$product'";
                $run = $conn->query($sql);
                if ($run->num_rows == 0)
                    $sql = "INSERT INTO `order_list`( `order_id`, `product_id`, `qty`) VALUES ('$order_id','$product','$qty')";
                else
                    $sql = "UPDATE order_list SET qty = '$qty' WHERE order_id = '$order_id' AND product_id = '$product'";

                $run = $conn->query($sql);
                if (!$run) {
                    echo "<script>alert('Error occured 1');window.history.back();</script>";
                    exit();
                }
            }
            echo "<script>alert('Successfully ordered');window.location.href='index.php';</script>";
            exit;
        } else {
            echo "<script>alert('error occured 2');window.history.back();</script>";
            exit();
        }
    } else {
        // echo "<script>alert('error occured 3');window.history.back();</script>";
        echo $conn->error;
        exit();
    }
}
