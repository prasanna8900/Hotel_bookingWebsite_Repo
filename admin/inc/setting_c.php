<?php
include 'db_configue.php';

header('Content-Type: application/json');
$input = json_decode(file_get_contents("php://input"), true);

$query = "SELECT * FROM `site_description` WHERE `id`=?";
$value = [1];
$res = select($query, $value, "i");
$data = $res->fetch_assoc();
if($data){
    echo json_encode($data);
}

else {
    echo json_encode([
        'error'=>'error',
        'message'=>'data not selected'
    ]);
}
    if(isset($input['action']) && $input['action'] === 'update'){
    $title = $input['title'];
    $about =  $input['about'];
    $filterTitle = filteration($title);
    $filterAbout = filteration($about);
    $updateToggle = ($input['toggle']==1) ? 0 : 1;
    $query1 = "UPDATE `site_description` SET `title`=?,`description`=? ,`shutdown`=? WHERE `id`=?";
    $value2 = [$filterTitle, $filterAbout, $updateToggle,1];
    $bindQuery = update($query1, $value2,"ssii");
    if($bindQuery){
        ob_clean();
        echo json_encode(['success'=>true,'message' => 'Data updated successfully']);
    }

    else{ob_clean();
        echo json_encode([
        'success' => false,
        'message'=>'data not selected'
    ]);
    }

}
if(isset($input['tg']) && $input['tg'] =="toggle_shutdown"){
    $toggle = ($input['toggle']==0) ? 1 : 0 ;
    $shutdownQuery = "UPDATE `site_description` SET `shutdown`=? WHERE `id`=?";
    $shutdownValue = [$toggle,1];
    $bindQueryShutdown = update($shutdownQuery, $shutdownValue,"ii");
    if($bindQueryShutdown){
        ob_clean();
        echo json_encode(['success'=>true,'message' => 'Data updated successfully']);
    }

    else{
        ob_clean();
        echo json_encode([
        'success' => false,
        'message'=>'data not selected'
    ]);
    }
}