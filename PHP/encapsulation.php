<?php
class Employee {
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        
        $this->age = $age;
        $this->setSalary($salary);
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            throw new Exception("Salary cannot be negative.");
        }
    }

    public function getSalary() {
        return $this->salary;
    }
}

// Usage
try {
    $employee = new Employee("Munna Das", 30, 50000);echo "<br>";
    echo "Employee Name: " . $employee->getName() . "\n";echo "<br>";
    echo "Employee Age: " . $employee->getAge() . "\n";

    $employee->setSalary(60000);echo "<br>";
    echo "Employee Salary: $" . $employee->getSalary() . "\n";

   
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

?>