<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class admin_budgets_model extends Model {
    public function get_all() {
        return $this->db->table('budgets')->get_all();
    }

}
?>