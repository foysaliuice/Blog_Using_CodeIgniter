<?php
  /**
   * Admin Controller
   */
  class AdminController extends CI_Controller{
    public function index(){
      $this->load->view('admin/index');
    }
    public function titleslogan(){
      $this->load->view('admin/titleslogan');
    }
    public function copyright(){
      $this->load->view('admin/copyright');
    }
  }
?>
