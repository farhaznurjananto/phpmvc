<?php

class Staff extends Controller
{
    public function index()
    {
        $data['staff'] = $this->model('Staff_model')->getStaff();
        $this->view('templates/header');
        $this->view('staff/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['staff'] = $this->model('Staff_model')->getStaffById($id);
        $this->view('templates/header');
        $this->view('staff/detail', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        if ($this->model('Staff_model')->createDataStaff($_POST) > 0) {
            Flasher::setFlash('succeed', 'Inserted', 'success');
            header('Location: ' . BASEURL . 'staff');
            exit;
        } else {
            Flasher::setFlash('succeed', 'Inserted', 'success');
            header('Location: ' . BASEURL . 'staff');
            exit;
        }
    }
}
