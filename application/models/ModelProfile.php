<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class ModelProfile extends CI_Model{
    function __construct (){
        parent::__construct();
    }

    public function get_profile($email){
	    $this->db->where('email', $email);
	    $query = $this->db->get('user');
	    if($query->num_rows() > 0) {
	      return $query->row();
	    }else{
	      return false;
	    }
	}

	public function get_all(){
		return $this->db->get('appointment')->result_array();
	}

	public function deleteAppointment($id) {
		$this->db->where('id_ap', $id)->delete('appointment');
	}

	public function updateAppointment($id_ap,$notelp,$keluhan) {
		$data = $this->db->query("UPDATE appointment SET notelp = '$notelp', keluhan = '$keluhan' WHERE id_ap = '$id_ap'");
        return $data;
	}

	public function add_appointment($email,$notelp,$date,$nama_pet,$jenis,$keluhan)
	{
        $data = $this->db->query("INSERT INTO appointment(email, notelp, tanggal, nama_pet, jenis_pet, keluhan, status) VALUES ('$email','$notelp',STR_TO_DATE('$date', '%d/%m/%Y'),'$nama_pet','$jenis','$keluhan','belum')");
        return $data;
    }
    
    public function cek_email($email)
    {
        $this->db->where('email',$email);
        $query = $this->db->get('user');
        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function edit_pro($id,$nama,$email,$password) {
    	unset($_SESSION['email']);
		$data = $this->db->query("UPDATE user SET nama = '$nama', email = '$email', password = '$password' WHERE id_user = '$id'");
		$this->session->set_userdata('email', $email);
        return $data;
	}

	public function editFoto($data,$id) {
		$this->db->where('id_user', $id)->update('user', $data);
	}

}