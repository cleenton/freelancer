<?php
class otp extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url','html','form');
    }
    public function index(){
        $title = "Kirim pesan";
        $this->load->view('otp',['title'=>$title]);
    }
    public function sendmsg(){
        $this->form_validation->set_rules('handphone','handphone','required');
        $this->form_validation->set_rules('message','message','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if ($this->form_validation->run())
        {
            $handphone = $this->input->post('handphone');
            $message = $this->input->post('message');
            $data = $this->input->post();
            unset($data['submit']);
            $msgencode = urlencode($message);
            $userkey = "ne5u2j";
            $passkey = "Z8YL";
            $router = "";

            $postdata = array(
                'authkey'=>$userkey,
                'handphone'=>$handphone,
                'message'=>$message,
                'router'=>$router
            );
            $url = "https://reguler.zenziva.net/apps/smsapi.php?userkey=$userkey&passkey=$passkey&nohp=$handphone&pesan=msgencode";
            $ch = curl_init();
                curl_setopt_array($ch,array(
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER =>TRUE,
                    CURLOPT_POST => TRUE,
                    CURLOPT_POSTFIELDS => $postdata

                ));
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                $output = curl_exec($ch);
                if(curl_errno($ch)){
                    echo "error" . curl_error($ch);
                }
                curl_close($ch);
                ?>
                <br> respon ID Mobile : <?php echo $output; ?> pesan sukses </br>
                <?php
                echo "<script>alert('Pesan berhasil dikirim');</script>";
        }
        else
        {
           $this->index();
        }
        
    }
}