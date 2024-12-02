<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin_controller extends Controller {

    public function categories() {
        $data['category'] = $this->admin_category_model->get_all();
        $this->call->view('admin/categories', $data);
    }

    public function dashboard() {
        $this->call->view('admin/dashboard');
    }

    public function budgets() {
        $data['budgets'] = $this->admin_budgets_model->get_all();
        $this->call->view('admin/budgets', $data);
    }
    public function transactions() {
        $data['transactions'] = $this->admin_transactions_model->get_all();
        $this->call->view('admin/transactions', $data);
    }
    public function users() {
        $data['users'] = $this->admin_users_model->get_all();
        $this->call->view('admin/users', $data);
    }
    public function user_feedback() {
        $data['user_feedback'] = $this->admin_user_feedback_model->get_all();
        $this->call->view('admin/user_feedback', $data);
    }
}    
?>
