<?php 

    class Profil extends Controller {
        public function index() {
            session_start();
            $this->view('profil');
        }
    }



?>
