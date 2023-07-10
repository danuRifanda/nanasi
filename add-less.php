<?php 
session_start();

$id_menu = $_GET['id_menu'];


if (isset($_GET['add']) == 'add') {
	// Retrieve the value and convert it to a double
	$_SESSION['pesanan'][$id_menu]++;
}

if (isset($_GET['less']) == 'less') {
 
        if ($_SESSION['pesanan'][$id_menu] !== 0) {
            $_SESSION['pesanan'][$id_menu]--;
          }
        
}


echo "<script>location= 'order.php'</script>";
?>