<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }

    .border_ini {
        border-style: solid;
        border-color: #17a2b8;
    }
    </style>
    <title>Aplikasi Pembayaran Vandy Ahmad BPPTIK</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-info">
        <span class="navbar-brand mb-0 h1"> Aplikasi Pembayaran Warung Vandy Ahmad | BPPTIK</span>
        <span class="navbar-brand mb-0 h1 navbar-right mr-3"><?php echo date("d-m-Y"); ?></span>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-7">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="row">
                        <div class="col-md-3 text-center border_ini mr-3 mb-3">
                            <img src="/img/mie_ayam.jpeg" class="img-fluid rounded mt-2">
                            <input type="number" class="form-control mt-1" value="0" name="mie_ayam">
                            <p>Mie Ayam <br> Rp.15000 </p>
                        </div>
                        <div class="col-md-3 text-center border_ini  mr-3 mb-3">
                            <img src="/img/mie_bakso.jpg" class="img-fluid rounded mt-2">
                            <input type="number" class="form-control mt-1" value="0" name="mie_bakso">
                            <p>Mie Bakso <br> Rp.10000 </p>
                        </div>
                        <div class="col-md-3 text-center border_ini  mr-3 mb-3">
                            <img src="/img/mie_ayam_bakso.jpg" class="img-fluid rounded mt-2">
                            <input type="number" class="form-control mt-1" value="0" name="mie_ayam_bakso">
                            <p>Mie Ayam Bakso <br> Rp.13000 </p>
                        </div>
                        <div class="col-md-3 text-center border_ini  mr-3 mb-3">
                            <img src="/img/bakso_kuah.jpeg" class="img-fluid rounded mt-2">
                            <input type="number" class="form-control mt-1" value="0" name="bakso_kuah">
                            <p>Bakso Kuah <br> Rp.8000 </p>
                        </div>
                        <div class="col-md-3 text-center border_ini  mr-3 mb-3">
                            <img src="/img/teh_manis.jpeg" class="img-fluid rounded mt-2">
                            <input type="number" class="form-control mt-1" value="0" name="teh_manis">
                            <p>Teh Manis <br> Rp.3000 </p>
                        </div>
                        <div class="col-md-3 text-center border_ini  mr-3 mb-3">
                            <img src="/img/teh_tawar.jpg" class="img-fluid rounded mt-2">
                            <input type="number" class="form-control mt-1" value="0" name="teh_tawar">
                            <p>Teh Tawar <br> Rp.1000 </p>
                        </div>

                        <div class="col-md-9 text-center">
                            <input type="text" class="form-control" placeholder="Masukan Nama Pelanggan"
                                name="pelanggan" required>
                        </div>
                        <div class="col-md-9 text-center mt-2">
                            <button type="submit" name="submit" class="btn btn-info btn-block">Add</button>
                        </div>


                </form>
            </div>
        </div>
        <div class="col-md-5">
            <?php 
            $total = 0;
            $harga_mie_ayam = 15000;
            $harga_mie_bakso = 10000;
            $harga_mie_ayam_bakso = 13000;
            $harga_bakso_kuah = 8000;
            $harga_teh_manis = 3000;
            $harga_teh_tawar = 1000;
            if (isset($_POST['submit'])){
                $mie_ayam = $_POST['mie_ayam'];
                $mie_bakso = $_POST['mie_bakso'];
                $mie_ayam_bakso = $_POST['mie_ayam_bakso'];
                $bakso_kuah = $_POST['bakso_kuah'];
                $teh_manis = $_POST['teh_manis'];
                $teh_tawar = $_POST['teh_tawar'];

                echo "<h2>Pesanan Anda  :</h2>";
                if($mie_ayam>0){
                    echo "Mie Ayam (".$mie_ayam.") x Rp 15000 = Rp.".$mie_ayam*$harga_mie_ayam;
                    echo "<br>";
                }
                if($mie_bakso>0){
                    echo "Mie Bakso (".$mie_bakso.") x Rp 10000 = Rp.".$mie_bakso*$harga_mie_bakso;
                    echo "<br>";
                }
                if($mie_ayam_bakso>0){
                    echo "Mie Ayma Bakso (".$mie_ayam_bakso.") x Rp 13000 = Rp.".$mie_ayam_bakso*$harga_mie_ayam_bakso;
                    echo "<br>";
                }
                if($bakso_kuah>0){
                    echo "Bakso Kuah (".$bakso_kuah.") x Rp 8000 = Rp.".$bakso_kuah*$harga_bakso_kuah;
                    echo "<br>";
                }
                if($teh_manis>0){
                    echo "Teh Manis (".$teh_manis.") x Rp 3000 = Rp.".$teh_manis*$harga_teh_manis;
                    echo "<br>";
                }
                
                if($teh_tawar>0){
                    echo "Teh Tawar (".$teh_tawar.") x Rp 1000 = Rp.".$teh_tawar*$harga_teh_tawar;
                    echo "<br>";
                }

                $total = ($mie_ayam*$harga_mie_ayam)+($mie_bakso*$harga_mie_bakso)+($mie_ayam_bakso*$harga_mie_ayam_bakso)+($bakso_kuah*$harga_bakso_kuah)+($teh_manis*$harga_teh_manis)+($teh_tawar*$harga_teh_tawar);

                echo "Total Pesanan Sdr <b>".$_POST['pelanggan']."</b> Rp.".$total;
            }
            ?>
        </div>

    </div>
    </div>



    <footer class="bg-info mt-3 text-white">
        <div class="footer-copyright text-center py-2">© 2020 Copyright:
            <a href="#" class="text-white"> Vandy Ahmad</a>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>