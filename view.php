<?php
class SalaryView {
    public function displaySalary($netSalary) {
        echo "Net Salary: $" . number_format($netSalary, 2) . "\n";
    }
}
?>
