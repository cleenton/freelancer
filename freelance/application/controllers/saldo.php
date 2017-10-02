<?php
class Saldo extends CI_Controller{
    
    
function isisaldo(){
    $this->load->view('header');
    $this->load->model('model_user');
    $get['data']=$this->model_user->get_saldo()->result();
    $this->load->view('isisaldo',$get);
}

function transfersaldo(){
    $this->load->view('header');
    $this->load->model('model_user');
    $get['data']=$this->model_user->get_transfer()->result();
    $this->load->view('transfer-saldo',$get);
}

}