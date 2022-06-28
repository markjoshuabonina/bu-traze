<?php 

require_once '../admin/includes/func.inc.php';
require_once '../admin/includes/thing_engineer.php';
require_once '../conn.php';

if(isset($_POST['qrCodeMessage'])){

    $date = date('Y/m/d');
    $time = date('H:i:s');

    $qrId= $_POST['qrCodeMessage'];
    test_input($qrId);

    $db->join("department_tbl d", "d.dept_ref_id=u.dept_ref_id");
    $db->join("campus_tbl c", "c.campus_ref_id=d.campus_ref_id");
    $db->where("u.user_ref_id", $qrId);
    $data = $db->getOne ("user_tbl u");
 
    if (!$db->count > 0) {  
        $res = array("res" => "none");
    }else{


        $trans = Array (
               "user_ref_id" => $data['user_ref_id'],
               "trans_date" =>  $date,
               "trans_time" =>  $time
              );
       if($db->insert ('transaction_tbl', $trans)){
        $date_time = array("date_today" => $date, "time_today" => $time);
        $res = array_merge($data, $date_time); 
       }
    
       
    }

}else{
    header("Location: ../admin/includes/error.php");
    exit();
}


echo json_encode($res);
 ?>