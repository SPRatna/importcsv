<?php
class csv extends CI_Controller
{
    public $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('csv_model');
    }
    function index()
    {
        $this->load->view('admin/uploadcsv');
    }
    function uploadData()
    {
        $this->csv_model->uploadData();
        redirect('admin/csv/index');
    }
}
?>