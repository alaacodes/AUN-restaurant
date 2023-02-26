<?php
include 'db_connect.php';

if (isset($_POST)) {
    $pid = filter_var($_POST['pid'], FILTER_VALIDATE_INT);
    $qty = filter_var($_POST['qty'], FILTER_VALIDATE_INT);

    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        $client_ip = $_SERVER['HTTP_CLIENT_IP'];
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        $client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else
        $client_ip = $_SERVER['REMOTE_ADDR'];







    if (!$pid or $pid == '') {
        echo "error occured";
        exit;
    }

    if (!$qty or $qty == '') {
        echo "error occured";
        exit;
    }

    $sql = "INSERT INTO `cart`(`client_ip`, `product_id`, `qty`) VALUES ('$client_ip','$pid','$qty')";
    $conn->query($sql);
    if ($conn)
        echo "1";
    else
        echo "error occured";
}
