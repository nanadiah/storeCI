<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('Home_view');
    }
    
    public function contact()
    {
        $this->load->view('Contact');
    }

    public function booking()
    {
        $this->load->view('Booking');   
    }

    public function discount()
    {
        $this->load->view('discount');
    }

    public function about()
    {
        $this->load->view('about');
    }

    public function blog()
    {
        $this->load->view('blog');
    }

    public function destinasi()
    {
        $this->load->view('destinasi');
        
    }

}

/* End of file Home.php */

?>