<?php
class Dashboard extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['user'])) {
      header('Location: ' . BASEURL . 'auth/login');
      exit;
    }

    if ($_SESSION['user']['staff_level'] == 'admin' || $_SESSION['user']['staff_level'] == 'staff') {
      $staff_name = $_SESSION['user']['staff_name'];
      $secondAndThirdOfStaffName = explode(' ', $staff_name)[0] . ' ' . explode(' ', $staff_name)[1];
      $data['greeting_name'] = $secondAndThirdOfStaffName;
      $data['name'] = $staff_name;
      $data['role'] = $_SESSION['user']['staff_level'];
    }

    $data['title'] = 'Propay - Dashboard';
    $data['breadcrumb'] = 'Dashboard';
    $data['total_class'] = count($this->model('Class_model')->getAllClasses());
    $data['total_staff'] = count($this->model('Staff_Model')->getAllStaff());
    $this->view('templates/header', $data, 'dashboard');
    $this->view('templates/sidebar', $data, 'dashboard');
    $this->view('templates/top-bar', $data, 'dashboard');
    $this->view('dashboard/index', $data, 'dashboard');
    $this->view('templates/footer', $data, 'dashboard');
  }
}
