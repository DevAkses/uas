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
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form> 
        <div class="dropdown">
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
          <a href="<?= BASEURL; ?>/admin_dashboard" class="nav-link text-white active  link-body-emphasis" aria-current="page">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
            Home
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            Course
          </a>
        </li>
        <li>
          <a href="<?= BASEURL; ?>/admin_video" class="nav-link text-white link-body-emphasis" >
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Video
          </a>
        </li>
      </ul>
      <hr>
    </div>
  </div>

</body>
</html>