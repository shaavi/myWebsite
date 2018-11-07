<?php
require_once('application/debug/ChromePhp.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}


	public function sendMail() 
    {  
        $user=array(
            'username'=>$this->input->post('first_name'),
            'email'=>$this->input->post('email'),         
            );
                                 
            $this->load->library('email'); 
            

            $config = array(
                    'protocol' => 'smtp', 
                    'smtp_host' => 'mail.smtp2go.com', 
                    'smtp_port' => 2525, 
                    'smtp_user' => 'shavindipathirana@gmail.com', 
                    'smtp_pass' => '4tcNwwFBWaL1', 
                    'mailtype' => 'html', 
                    'charset' => 'iso-8859-1'
                );
            $this->email->initialize($config);

            $from_email = $this->input->post('email');
            $to_email = 'shavindip@gmail.com';             

            $this->email->set_mailtype('html');
            $this->email->from($from_email, 'Website Visitor'); 
            $this->email->to('shavindip@gmail.com');
            $this->email->subject('Message from Website'); 
            $message = '<p> Hello, </p>';
            $this->email->message('hello');   

            ChromePhp::log("message : " . json_encode($from_email));      

            if ($this->email->send()) {
				echo "success";
            }
            else {
				echo "error";
            }  
    } 
}
