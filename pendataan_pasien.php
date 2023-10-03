<?php
    include "connect.php";

    $sql = " SELECT * FROM data_pasien ORDER BY idPasien ASC ";
    $result = $conn->query($sql);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/style.css?refreshcss=1" type="text/css">
    <link rel="stylesheet" href="css/styletab.css?refreshcss=1" type="text/css">
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="https://kit.fontawesome.com/f4a406c557.js" crossorigin="anonymous"></script>
</head>


<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="paw" style="color: #ffffff;"></ion-icon>
                        </span>
                        <span class="title" style="font-size: 1.5rem; padding: 10px 20px 20px 20px;">H&H PetShop</span>
                    </a>
                </li>

                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                        <span class="title">Jadwal Praktik</span>
                    </a>
                </li>

                <li>
                    <a href="pendataan_pasien.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Pendataan Pasien</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="cart-outline"></ion-icon>
                        </span>
                        <span class="title">Stok Obat</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="cart-outline"></ion-icon>
                        </span>
                        <span class="title">Stok Makanan</span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Catatan Pemasukan</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari nama">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="image/customer_1.jpg" alt="">
                </div>
            </div>
        <!-- TABLE  -->
            <div class="kucing">
                <div class="recentOrders">
                    <table id="myTable">
                        <div class="kartu">
                            <input type="button" id="additem" onclick="window.location.href = 'addData_page.php';" value="Tambah Data"/>
                        </div>
                        <tr class="tbl-head">
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <!-- Ambil data dari setiap baris -->
                        <?php
                            // loop sampai semua data tercek
                            while($rows=$result->fetch_assoc())
                            {
                        ?>
                        <tr class="tbl-bod">
                            <!-- Ambil data dari setiap baris lalu tampilkan ke tabel -->
                            <td><?php echo $rows['idPasien'];?></td>
                            <td><?php echo $rows['namaPasien'];?></td>
                            <td><?php echo $rows['jenis'];?></td>
                            <td><?php echo $rows['alamat'];?></td>
                            <td>
                                <?php 
                                    if ($rows['status'] == 1){
                                        echo '<div class"merah" style="background: #50c76b; color: white; padding: 6px; border-radius: 12px;"><p>Sudah</p></div>';
                                    } else{
                                        echo '<div class"merah" style="background: #e86473; color: white; padding: 6px; border-radius: 12px;"><p>Belum</p></div>';
                                    }
                                ?> 
                            </td>
                            
                            <td>
                                <a href="edit.php?id=<?php echo $rows['idPasien'];?>" class="link-dark" onclick="toggle()" ><ion-icon name="create-outline" style="color: #3f63a7; font-size: 1.3em; z-index: 1;">"</ion-icon></a>
                            </td>
                            <td>
                                <a href="delete_page.php?id=<?php echo $rows['idPasien'];?>" class="link-dark" onclick="toggle()" ><ion-icon name="trash" style="color: #eb4343; font-size: 1.3em; z-index: 1;"></ion-icon></a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="js/main.js"></script>
    <script src="js/scrollTabel.js"></script>
    <script src="js/searchTabel.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>