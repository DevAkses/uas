<?php 

    class Kategori_Adobe extends Controller {
        public function index() {
            session_start();
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] = true) 
            {
                
                $this->view('kategori_adobe');
            } else {
                echo "<script>
                        alert('Login terlebih dahulu!');
                    </script>";   
                $this->view('login');
            }
            $data['video'] = $this-> model('Kategori_Adobe_model')->getAllVideosAdobe();
            $this->view('kategori_adobe', $data);
        }

        public function detail($id)
        {
            session_start();
            $data['video'] = $this->model('Kategori_Adobe_model')->getVideoById($id);
            $this->view ('detail_video', $data);

        }

    }

?>
