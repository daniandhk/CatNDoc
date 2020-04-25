<?php 
class ModelRegistrasi extends CI_Model{
    
    public function add_akun($nama,$email,$password)
	{
        $data = $this->db->query("INSERT INTO user(nama, email, password) VALUES ('$nama','$email','$password')");
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