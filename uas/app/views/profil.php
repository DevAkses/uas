<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins&family=Quicksand:wght@400;500;700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
      body {
        font-family: 'Poppins';
      }
    </style>
</head>
  <body>
    <div class="bg-black ">
        
        <!-- Header -->
        <?php include 'include/header.php';?>

        <div class="mx-5 d-flex " style="padding-top: 150px;">
            <div class="mx-5">
                <img class="rounded-circle " src="<?= BASEURL; ?>/img/Gambar Depan Beranda.png" alt="" style="width: 300px; border: 1px solid white;">
                
            </div>
            <div class="my-auto ">
                <div class="">
                    <h3 class="text-white "><?= $_SESSION['nama_user'] ?></h3>
                </div>
                <div class="d-flex my-4">
                    <img src="<?= BASEURL; ?>/img/tdesign_copyright.png" style="width: 36px;" alt="">
                    <h4 class="text-white mx-1 my-auto ">Berlangganan</h4>
                </div>
                <div class="">
                    <h5 class="text-white ">Tentang Saya</h5>
                    <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat non mollitia corporis iure, aliquid temporibus error esse illo dolorem reprehenderit.</p>
                </div>
                <button type="button" onclick="location.href='<?= BASEURL; ?>/edit_profil'" class="btn btn-outline-success w-25 m-1 text-white ">Edit Profil</button>

            </div>
            
        </div>
        <div class="m-5">
            <div class="text-white">Kursus</div>
            <h4 class="text-center text-white-50 p-5 m-5">Belum ada kursus yang diikuti.</h4>
        </div>

        <!-- Footer -->
        <?php include 'include/lower.php';?>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>