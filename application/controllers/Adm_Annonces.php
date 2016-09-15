<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_Annonces extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->helper('date');
        $datestring = "%d/%m/%Y";
        $time = time();


        $this->load->model('Model_disciplines');

        $data = array();
        $data['disciplines_liste'] = $this->Model_disciplines->get_disciplines();

        $this->load->view('templates/header.php');
        $this->load->view('admin/adm_annonces',$data);
        $this->load->view('templates/footer.php');
    }

}
