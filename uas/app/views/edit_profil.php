<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-black ">
      <!-- Header -->
    <?php include 'include/header.php';?>
      <form action="<?= BASEURL; ?>/edit_profil/edit" method="post">
        <div class="w-50 mx-auto z-0 " style="padding-top: 100px; padding-bottom: 100px;">
          <div class="rounded-4 mt-5 pb-5 " style="background-color: #181818;">
            <div class="px-5 pt-4">
                <h2 class="text-white ">Profil Pengguna</h2>
                <img src="image/Line.png" alt="">
            </div>
            <div class="px-5 ">
              <h3 class="text-white ">Foto Diri </h3>
                <div class="d-flex">
                    <div class="mx-5">
                        <img class="rounded-circle " src="<?= BASEURL; ?>/img/Gambar Depan Beranda.png" alt="" style="width: 200px; border: 1px solid white;">
                    </div>
                    <input type="file" class="btn btn-outline-light h-25 "></input>
                </div>
                <div class="my-4 ">
                    <div class="my-2 d-flex ">
                        <h4 class="text-white ">Nama Lengkap </h4>
                        <!-- <h4 class="text-danger d-inline ">*</h4> -->
                    </div>
                    <div class="input-group flex-nowrap  z-0">
                      <?php foreach($data['user_data'] as $user_data )  :  ?>
                      <input type="text" class="form-control" placeholder="Nama" aria-label="Username" aria-describedby="addon-wrapping" id="nama_user" name="nama_user" value="<?= $user_data['nama_user'] ?>">
                      <?php endforeach; ?>
                    </div>
                    <div class="my-2 d-flex ">
                        <h4 class="text-white ">Email </h4>
                        <!-- <h4 class="text-danger d-inline ">*</h4> -->
                    </div>
                    <div class="input-group flex-nowrap  z-0">
                    <?php foreach($data['user_data'] as $user_data )  :  ?>
                      <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="addon-wrapping" id="email_user" name="email_user" value="<?= $user_data['email_user'] ?>">
                      <?php endforeach; ?>
                    </div>
                    <fieldset disabled>
                      <div class="my-3">
                        <h4 class="text-white ">Username</h4>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?= $_SESSION['username'] ?>">
                      </div>
                    </fieldset>
                    <div class="my-2">
                      <h4 class="text-white ">Deskripsi</h4>
                    </div>
                    <div class="form-floating  ">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                      <label for="floatingTextarea2">Deskripsi</label>
                    </div>
                    <div class="d-flex justify-content-between ">
                    <a href="<?= BASEURL; ?>/edit_profil/hapus" class="btn btn-danger mt-3" onclick="return confirm('Apakah Anda yakin untuk menghapus Akun Anda?')" type="submit">Hapus Akun</a>
                    <!-- <a  class="btn btn-success mt-3" onclick="return confirm('Apakah Anda yakin untuk menyimpan perubahan?')" type="submit">Simpan</a> -->
                    <button type="submit" onclick="return confirm('Apakah Anda yakin untuk menyimpan perubahan?')" class="btn btn-success my-2">Simpan</button>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </form>


        <!-- Footer -->
        <?php include 'include/lower.php';?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>