<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . "libraries/REST_Controller.php";

class Rest extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        header('Content-Type: application/json');
        $this->load->database();
    }

    public function test_get()
    {

        $data['hai'] = 'hai';
        $data['bye'] = 'bye';

        $this->response($data, 200);
    }
}
