<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class admin_transactions_model extends Model {
    public function get_all() {
        return $this->db->table('transactions')->get_all();
    }

}
?>