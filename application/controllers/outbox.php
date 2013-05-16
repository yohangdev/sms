<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Outbox extends CI_Controller {

	public function index()
	{
        $data['messages'] = $this->message->listMessage('queue');
        $data['type'] = 'queue';
        
		$this->load->view('common/header');
		$this->load->view('outbox/index', $data);
		$this->load->view('common/footer');
	}
}
