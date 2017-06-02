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
    public function social(){
      $this->load->view('admin/social');
    }
    public function addcat(){
      $this->load->view('admin/addcat');
    }
    public function catlist(){
      $this->load->view('admin/catlist');
    }
  }
?>
