<?php
session_start();
$db = new mysqli("localhost","root","","order_app");

if(!$db)
   echo "successful";


?>