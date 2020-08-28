<?php 

class User_model extends CI_Model{
    private $table = "users";

    private function UpdateLastLogin($user_id)
    {
        $sql = "UPDATE users SET last_login=now() WHERE user_id={$user_id}";
        $this->db->query($sql);
        
    }

    public function DoLogin()
    {
        $post = $this->input->post();

        $this->db->where('email', $post["email"]);
        $user = $this->db->get(users)->row();

        if($user)
        {   

            $isPasswordTrue = password_verify($post["password"], $user->password);
            $isAdmin = $user->role == "user";

            if($isPasswordTrue && $isAdmin)
            {
                $this->session->set_userdata(['userr_logged' => $user]);
                $this->UpdateLastLogin($user->user_id);
                return true;

            }

        }return false;
    }

    public function IsNotLogin()
    {
        return $this->session->userdata('userlogged') == null;
    }


}