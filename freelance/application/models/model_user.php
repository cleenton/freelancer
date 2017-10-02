<?php
class model_user extends CI_Model{

    function login($email, $password){

        $check = $this->db->get_where('tb_user',array('email' => $email, 'password'=> $password));
        if($check->num_rows()>0){
            return $check;
        }
        else{
            return 0;
        }

    }

    function get_freelancer($user_id){
        $this->db->where('user_id', $user_id);
        $user = $this->db->get('tb_freelancer');
        return $user;
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
    function get_saldo(){
        $saldo = $this->db->get('tb_top_up');
        return $saldo;
    }
    function get_transfer(){
        $transfer = $this->db->get('tb_kios');
        return $transfer;
    }
    
}