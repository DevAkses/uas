<?php 

    class Admin_Dashboard extends Controller {
        public function index() {
            session_start();
            // $data['video_figma'] = $this-> model('Admin_Video_model')->getAllVideosFigma();
            // $data['video_adobe'] = $this-> model('Admin_Video_model')->getAllVideosAdobe();
            // $data['video_web'] = $this-> model('Admin_Video_model')->getAllVideosWeb();
            // $data['video_product'] = $this-> model('Admin_Video_model')->getAllVideosProduct();
            $this->view('admin_dashboard');
        }


}