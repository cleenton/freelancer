<?php
class model_user extends CI_Model{

    function login($email, $password){

        $check = $this->db->get_where('tb_user',array('email' => $email, 'password'=> $password));
        if($check->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }

    }

    function get_freelancer(){
        $free = $this->db->get('tb_freelancer');
        return $free;
    }

    function edit_freelancer($id){
        return $this->db->get_where('tb_freelancer', array('id'=>$id));
    }

    function get_kios(){
        $kcp = $this->db->get('tb_kios');
        return $kcp;
    }
    function get_transaksi(){
        $transaksi = $this->db->get('tb_transaction');
        return $transaksi;
    }
}