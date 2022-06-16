<?php 

require_once '../admin/includes/func.inc.php';
require_once '../admin/includes/thing_engineer.php';
require_once '../conn.php';

if(isset($_POST['qrCodeMessage'])){
    
    $qrId= $_POST['qrCodeMessage'];
    test_input($qrId);

    $db->join("department_tbl d", "d.dept_ref_id=u.dept_ref_id");
    $db->join("campus_tbl c", "c.campus_ref_id=d.campus_ref_id");
    $db->where("u.user_ref_id", $qrId);
    $res = $db->getOne ("user_tbl u");

    if (!$db->count > 0) {  
        $res = array("res" => "null");
    }

}else{
    header("Location: ../admin/includes/error.php");
    exit();
}


echo json_encode($res);
 ?>