<?php 

    function is_logged()
    {
        $ci = get_instance();
        if (!$ci->session->userdata('email')) {
            redirect('auth');
        } else {
            $role_id = $ci->session->userdata('role_id');
            $userAccess = $ci->db->get_where('user_access_menu', [
                'role_id' => $role_id,
            ]);
            if ($userAccess->num_rows() < 1) {
                redirect('auth/blocked');
            }
        }
    }

    function check_access($role_id)
    {
        $ci = get_instance();
        $ci->db->where('role_id', $role_id);
        $result = $ci->db->get('user_access_menu');
        if ($result->num_rows() > 0) {
            return "checked='checked'";
        }
    }
