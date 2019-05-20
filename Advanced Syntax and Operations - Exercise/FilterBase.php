<?php

$employeesAge = [];
$employeesSalary = [];
$employeesPosition = [];

while (true) {
    $input = readline();
    if ($input == "filter base")
        break;
    list($name, $data) = explode(" -> ", $input);

    if (filter_var($data, FILTER_VALIDATE_INT))
        $employeesAge[$name] = $data;
    elseif (filter_var($data, FILTER_VALIDATE_FLOAT))
        $employeesSalary[$name] = $data;
    else
        $employeesPosition[$name] = $data;
}

$filter = readline();
switch ($filter) {
    case "Age":
        $employees = $employeesAge;
        break;
    case "Position":
        $employees = $employeesPosition;
        break;
    case "Salary":
        $employees = $employeesSalary;
        break;
    default:
        break;
}

foreach ($employees as $employee => $data) {
    if ($filter == "Salary")
        $data = number_format((float)$data, 2, '.', '');
    echo "Name: $employee\n";
    echo "$filter: $data\n";
    echo str_repeat("=", 20) . PHP_EOL;
}