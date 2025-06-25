<?php
    function getDepartements(){
        include('base.php');
        $sql="SELECT * FROM departments";
        $query=mysqli_query($bdd,$sql);
        return $query;
    }
    function getManagerLoading(){
        include('base.php');
        $sql= "SELECT * FROM dept_manager as d join employees as e on d.emp_no = e.emp_no  where d.to_date >= '2025-01-01'";
        $query=mysqli_query($bdd,$sql);
        return $query;
    }
    function getEmployees($idDep){
        include('base.php');
        $sql = "SELECT * FROM employees as e JOIN current_dept_emp c ON e.emp_no = c.emp_no WHERE c.dept_no = '$idDep' ";
        $query = mysqli_query($bdd,$sql);
        $val=[];
        while($donne = mysqli_fetch_assoc($query)){
            $val[] = $donne;
        }
        return $val;
    }
    function ficheEmployee($emp_no){
        include('base.php');
        $sql = "SELECT * FROM employees WHERE emp_no = '$emp_no'";
        $query = mysqli_query($bdd, $sql);
        $val = mysqli_fetch_assoc($query);
        return $val;
    }
    
?>