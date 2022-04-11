<?php
    
    require_once 'db/conn.php';
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location: viewattandance.php");
    }else{
       
        $id = $_GET['id'];

        
        $result = $crud->deleteAttendance($id);
       
        if($result)
        {
            header("Location: viewattandance.php");
        }
        else{
            include 'include/errormessage.php';
        }
    }

?>