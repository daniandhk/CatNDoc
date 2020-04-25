<?php 
class ModelAppointment extends CI_Model{
    
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
}
?>