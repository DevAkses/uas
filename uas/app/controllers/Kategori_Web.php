<?php 

    class Kategori_Web extends Controller {
        public function index() {
            session_start();
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] = true) 
            {

                $this->view('kategori_web');
            } else {
                echo "<script>
                        alert('Login terlebih dahulu!');
                    </script>";   
                $this->view('login');
            }
            $data['video'] = $this-> model('Kategori_Web_model')->getAllVideosWeb();
            $this->view('kategori_web', $data);
        }

        public function detail($id)
        {
            session_start();
            $data['video'] = $this->model('Kategori_Web_model')->getVideoById($id);
            $this->view ('detail_video', $data);

        }

    }

?>
