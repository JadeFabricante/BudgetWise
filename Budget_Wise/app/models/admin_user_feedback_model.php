<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class admin_user_feedback_model extends Model {
    public function get_all() {
        return $this->db->table('user_feedback')->get_all();
    }

}
?>