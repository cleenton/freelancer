<?php
class auth extends CI_Controller{
    
    function login(){
        $this->load->model('model_user');
        if(isset($_POST['submit'])){
            $email = $this->input->post('email');
            $password =md5($this->input->post('password'));

            $hasil = $this->model_user->login($email,$password);
            if($hasil == 1)
            {
                $this->session->set_userdata(array('status_login' => 'oke'));
                redirect('content/welcoming');
            }
            else
            {
                redirect('auth/login');
            }
        }
        else{
            $this->load->view('form_login');
        }
        
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

    function form_register(){
        $this->load->view('register');
    }

    function register(){
        $data = array(
        'id'=>$this->input->post('id'),
        'username'=>$this->input->post('username'),
        'email'=>$this->input->post('email'),
        'handphone'=>$this->input->post('handphone'),
        'password'=>md5($this->input->post('password')),
        );
    
        $this->db->insert('tb_user',$data);
        redirect('auth/otp');
    }

    function otp(){
        $this->load->view('otp');

    }
    

}