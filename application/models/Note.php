<?php 
	class Note extends CI_Model {

		/*DOCU: Get all notes from the database. Owner: Philip */
		public function get_notes() {
			$sql = "SELECT * FROM notes";
			$query = $this->db->query($sql);
			return $query->result();
		}

		/*DOCU: Save a note to the database. Owner: Philip */
		public function save_note($newNote) {
			$sql = 	"INSERT INTO notes (note) VALUES (?)";
			return $this->db->query($sql, array($newNote));
		}
	}
?>