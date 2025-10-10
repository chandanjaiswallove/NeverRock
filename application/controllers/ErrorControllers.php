
<?php 
    defined('BASEPATH') or exit('not direct script access allowed');

    class ErrorControllers extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->output->set_status_header('404');

        //    if(isset($_SESSION['activeStudents']))
        //     {
        //         $this->load->view('errors/customError/studentError');
        //     }
        //     else if(isset($_SESSION['activeDeveloper']))
        //     {
        //         $this->load->view('errors/customError/developerError');
        //     }
        //     else{
        //         $this->load->view('errors/customError/uiError');
        //     }
            
            // error with session based pending now 
           
        }
    }
?>