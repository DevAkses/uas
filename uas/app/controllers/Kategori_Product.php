<?php 

    class Kategori_Product extends Controller {
        public function index() {
            session_start();
            if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] = true) 
            {
                $this->view('kategori_product');
            } else {
                echo "<script>
                        alert('Login terlebih dahulu!');
                    </script>";   
                $this->view('login');
            }
            $data['video'] = $this-> model('Kategori_Product_model')->getAllVideosProduct();
            $this->view('kategori_product', $data);
        }

        public function detail($id)
        {
            session_start();
            $data['video'] = $this->model('Kategori_Product_model')->getVideoById($id);
            $this->view ('detail_video', $data);

        }

    }

?>
