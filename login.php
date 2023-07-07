<?php include 'conn.php'; 
    $ussername = $_POST['ussername'];
    $password = $_POST['password'];

    $sql = 'SELECT * from user WHERE ussername = "'.$ussername.'" AND password = "'.$password.'"';

    $query = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($query)){
        $row = mysqli_fetch_object($query);
        $_SESSION['ussername'] = $row->ussername;
        
    }

    header('location: admin.php');

    

?>
