<?php 

    class Langganan extends Controller {
        public function index() {
            session_start();
            // if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] = true) 
            // {
                // echo "<script>
                //         alert('Login terlebih dahulu!');
                //         window.location.href = '" . BASEURL . "/langganan';
                //     </script>";
                // $this->view('langganan');
            // } else {
            //     $this->view('login');
            // }

            // if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] = true) 
            // {
            //     $this->view('login');
            // } else {
            //     $this->view('langganan');
            // }

            $this->view('langganan');
        }

        public function membayar()
        {
            session_start();
            if ($this-> model('Langganan_model')->insertValue() > 0){
                echo "<script>
                        alert('Pembayaran berhasil!');
                        window.location.href = '" . BASEURL . "/langganan';
                    </script>";
                exit;
            } else {
                echo "<script>
                        alert('Pembayaran gagal!');
                        window.location.href = '" . BASEURL . "/langganan';
                    </script>";
                exit;
            }
            
            
        }
    }



?>
