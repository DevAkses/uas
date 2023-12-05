

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course Page</title>
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
    <div class="bg-black">
        <!-- Header -->
        <?php include 'include/header.php';?>
        <img src="<?= BASEURL ?>/img/lingkaran.png" alt="" class="z-0 position-absolute mt-5 translate-middle ">
        <div class="z-1">
          <div class="px-5 text-center text-white " style="padding-top: 100px; padding-bottom: 30px;">
              <div class="">
                  <h2 class="fw-bold ">Selamat Datang di ITCourse</h2>
                  <h5 class="text-white-50">Dengan hanya membayar sekali dan nikmati kursus desain tanpa batas, selamanya. </h5>
              </div>
              
                <div class=" mx-auto  rounded-5 " style="width: fit-content;">
                    <div class="card text-white " style="width: 50rem; margin-top: 20px; background-color: rgba(255,255,255,0.15)">
                        <h3 class="mt-3 fw-semibold ">Biaya Berlangganan</h3>
                        <img src="<?= BASEURL ?>/img/Rectangle.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">RP 1.500.000</h5>
                          <p class="card-text"></p>
                          <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Berlangganan
                          </button>
                        </div>
                      </div>
                </div>
                <!-- Modal -->
                <form action="<?= BASEURL; ?>/langganan/membayar" method="">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5 text-dark " id="exampleModalLabel">Apakah anda yakin ingin membayar?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-dark">
                          <h5 class="text-dark">Harga : 1.500.000</h5>
                          <h5 class="text-dark">Metode Pembayaran : BRImo</h5>
                          <h5></h5>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Berlanggnanan</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
          </div>
          <div class="mx-auto " style="width: fit-content;">
              <div class="card text-white" style="width: 50rem; margin-top: 20px; margin-bottom: 70px; background-color: rgba(255,255,255,0.15)">
                  <div class="card-body ">
                      <h3 class="card-title text-center fw-bold mb-4">Benefit Berlangganan</h3>
                      <div class="px-5 ">
                          <h6 class="card-subtitle mb-2 text-white fw-bold my-1 ">Akses Seumur Hidup!</h6>
                          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                          <h6 class="card-subtitle mb-2 text-white fw-bold my-1 ">Tidak ada biaya tambahan</h6>
                          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                          <h6 class="card-subtitle mb-2 text-white fw-bold my-1 ">Dibimbing oleh profesional</h6>
                          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                          <h6 class="card-subtitle mb-2 text-white fw-bold my-1 ">Menigkatkan Skill</h6>
                          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                          <h6 class="card-subtitle mb-2 text-white fw-bold my-1 ">Mendapatkan Sertifikat</h6>
                          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                      </div>
                      <div class="mt-4 mx-auto " style="width: fit-content;">
                          <button type="button" class="btn btn-outline-success text-white  px-5">Belajar Sekarang</button>
                      </div>
                  </div>
                </div>
          </div>
        </div>
        
        <!-- Footer -->
      <?php include 'include/lower.php';?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

