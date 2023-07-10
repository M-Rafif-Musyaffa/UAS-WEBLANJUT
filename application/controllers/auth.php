<?php

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class Auth extends CI_Controller
{

    public function login()
    {

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $auth = $this->m_login->cek_login();

            if ($auth == false) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 username atau password anda salah!
                </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                redirect('perpus');
                // $this->session->set_userdata('role_id', $auth->role_id);
                // switch ($auth->role_id) {
                //     case 1:
                //         redirect('admin/dashboard_perpus');
                //         break;
                //     case 2:
                //         redirect('perpus');
                //         break;
                //     default:
                //         break;
                // }
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->load->view('login');
    }
}
