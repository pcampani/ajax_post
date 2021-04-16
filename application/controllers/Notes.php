<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper("security");
		$this->load->library("form_validation");
		$this->load->model("note");
	}

	/* API Endpoint for getting notes, returns HTML partial. Owner: Philip*/
	public function note() {
		$data["notes"] = $this->note->get_notes();
		$this->load->view("partials/note", $data);
	}

	/* API Endpoint for getting notes, returns HTML partial. Owner: Philip*/
	public function create() {
		$this->form_validation->set_rules("note", "Note", "required");
		if ($this->form_validation->run() == FALSE) {
			redirect("notes");
        }
		else {}
			$newNote = $this->security->xss_clean($this->input->post("note"));
			$this->note->save_note($newNote);
			$data["notes"] = $this->note->get_notes();
			$this->load->view("partials/note", $data);
	}

	public function index() {
		$data["notes"] = $this->note->get_notes();
		$this->load->view('notes', $data);
	}
}
