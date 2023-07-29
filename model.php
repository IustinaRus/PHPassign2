<?php
class SalaryModel {
    public function calculateSalary($Salary, $tax) {
        $netSalary = $Salary * (1 - $tax);
        return $netSalary;
    }
}
?>
