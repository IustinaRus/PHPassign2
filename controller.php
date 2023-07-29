<?php
require_once 'model.php';
require_once 'view.php';

class SalaryController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new SalaryModel();
        $this->view = new SalaryView();
    }

    public function calculateSalary() {
        $Salary = 5700; 
        $tax = 0.25; 

        $netSalary = $this->model->calculateSalary($Salary, $tax);
        $this->view->displaySalary($netSalary);
    }
}
?>
