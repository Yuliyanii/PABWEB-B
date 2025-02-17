<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Controller {

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
    
    public function lihat_data() {
        return $this->db->join('prodi', 'prodi.id_prodi = mahasiswa2.id_prodi', 'left')->get('mahasiswa2')->result();    
    }

    public function get_prodi() {
        return $this->db->get('prodi')->result();
    }

    public function insert_data($data) {
        return $this->db->insert('mahasiswa2', $data);
    }
}
