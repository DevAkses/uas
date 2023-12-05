<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin_Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins&family=Quicksand:wght@400;500;700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
      body {
        font-family: 'Poppins';
      }
      .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 25%; /* Adjust the width as needed */
      background-color: #333;
      padding: 1rem;
      overflow-y: auto; /* Enable scrolling if needed */
    }

    </style>
</head>
<body>

  <!-- Header -->
  <header class="p-3 border-bottom navbar navbar-expand-lg float-end  navbar-dark bg-dark" style="width: 75%;">
    <div class="float-end">
      <div class="d-flex flex-wrap align-items-center justify-content-lg-start">
        <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <div class="dropdown " style="margin-left: 800px;">
          <a class="btn btn-outline-success text-white  dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="text-white my-2 bi bi-person-square"></i>
            Profil
          </a>

          <ul class="dropdown-menu bg-success-subtle ">
            <li>
                <a class="dropdown-item text-dark m-1" href="<?= BASEURL; ?>/admin_dashboard">
                <i class="text-dark bi bi-person-square"></i>
                    Profil Saya
              </a>
          </li>
              <li>
                  <a class="dropdown-item text-dark m-1" href="<?= BASEURL; ?>/admin_dashboard">
                  <i class="text-dark bi bi-bag"></i>
                      Langganan
              </a>
          </li>
          <li>
                  <a class="dropdown-item text-danger m-1" href="<?= BASEURL; ?>/admin_dashboard">
                  <i class="text-danger bi bi-box-arrow-left"></i>
                      Keluar
                  </a>
              </li>
          </ul>
        </div>
        
          <!-- <ul class="dropdown-menu bg-success-subtle ">
            <li>
                <a class="dropdown-item text-success" href=\'' . BASEURL . '/profil\'">
                    <img src="/image/tdesign_copyright.png" alt="" width="24px">
                    Profil Saya
              </a>
          </li>
              <li>
                  <a class="dropdown-item text-success" href=\'' . BASEURL . '/langganan\'">
                      <img src="/image/tdesign_copyright.png" alt="" width="24px">
                      Langganan
              </a>
          </li>
          <li>
                  <a class="dropdown-item text-success" href=\'' . BASEURL . '/login/logOut\'">
                      <img src="/image/tdesign_copyright.png" alt="" width="24px">
                      Keluar
                  </a>
              </li>
          </ul> -->
        </div>
      </div>
    </div>
  </header>
  <!-- Sidebar -->
  <div class="float-start w-25 top-0 start-0 ">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="min-height: 100vh">
      <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <img src="<?= BASEURL; ?>/img/Logo ITCourse.png" width="130" height="50" alt="" class="me-1">
      </a>
      <hr class="">
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="<?= BASEURL; ?>/admin_dashboard" class="nav-link text-white link-body-emphasis" aria-current="page">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
            Home
          </a>
        </li>
        <li>
          <a href="<?= BASEURL; ?>/admin_video" class="nav-link active  text-white link-body-emphasis" >
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Figma Project
          </a>
        </li>
        <li>
          <a href="<?= BASEURL; ?>/admin_video" class="nav-link   text-white link-body-emphasis" >
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Adobe Photoshop
          </a>
        </li>
        <li>
          <a href="<?= BASEURL; ?>/admin_video" class="nav-link   text-white link-body-emphasis" >
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Web Graphics
          </a>
        </li>
        <li>
          <a href="<?= BASEURL; ?>/admin_video" class="nav-link   text-white link-body-emphasis" >
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Product Design
          </a>
        </li>
      </ul>
      <hr>
    </div>
  </div>
  <div class="z-1 " style="margin-left: 400px;">
            <div class="px-5" style="padding-top: 90px; padding-bottom: 150px;" >
                <div class="px-5 py-2 d-flex ">
                    <h2 class="text-dark z-1 fw-bold ">Figma Project</h2>
                </div>
                <div class="px-5">
                <form class="" role="search">
                    <input class="form-control w-50 mx-auto my-4 " type="search" placeholder="Search" aria-label="Search">
                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                    
                </form>
                    <ul class="list-group">
                    <?php foreach( $data['video_figma'] as $video) : ?>
                        <li class="list-group-item my-1 w-75"> <?= $video['video_title']  ?><a class="btn btn-primary float-end " href="<?= BASEURL; ?>/kategori_figma/detail/<?= $video['video_id']; ?>" role="button">Edit</a> </li>
                        <?php endforeach; ?>
                    </ul>
                    
                </div>
            </div>
            
        </div>

</body>
</html>