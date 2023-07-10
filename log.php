<?php
if(isset($_POST['bayar'])) {
?>

        // 1. Bikin tabel log
        // 2. Kolomnya samain kaya tabel pemesanan produk
        // 3. COPY yang ada di chatgpt, sesauikan nama kolomnya
     $id = $_POST['id_pemesanan'];
          $user = $_POST['username'];
          $password = $_POST['password'];

          // Query untuk memilih tabel
          $cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password = '$password'");
          $hasil = mysqli_fetch_array($cek_data);
          $status = $hasil['status'];
          $login_user = $hasil['username'];
          $row = mysqli_num_rows($cek_data);

          // Pengecekan Kondisi Login Berhasil/Tidak
            if ($row > 0) {
                session_start();   
                $_SESSION['login_user'] = $login_user;

                if ($status == 'admin') {
                  header('location: admin.php');
                }
                else{
                  header("location: menu_pembeli.php");
              }
            }
        <?php
        };
       ?>
