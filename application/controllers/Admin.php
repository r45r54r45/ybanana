<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('admin');
		$this->load->view('footer');
	}
	public function notification()
	{
		$this->load->view('header');
		$this->load->view('admin_noti');
		$this->load->view('footer');
	}
	public function noti_upload()
	{
		$this->load->model("admin_model");
		$type=$_POST['type'];
		$title=$_POST['title'];
		$content=$_POST['content'];
		$target=$_POST['target'];
		$nIdx=$this->admin_model->uploadAndGetNoticeIdx($type, $title, $content, $target);
		$nIdx=$nIdx->row(0);
		$noticeIdx=$nIdx['max(idx)'];
		//type이 2인 경우 전체 업로드
		if($type=="2"){
			$result=$this->admin_model->getgetAllUser();
			foreach ($result->result() as $row) {
				$userIdx=$row->idx;
				$this->admin_model->pushNoti($noticeIdx, $userIdx);
			}

		}elseif($type=="3"){
			$person=$_POST['person'];
			$this->admin_model->pushNoti($noticeIdx, $person);
		}


	}
}
