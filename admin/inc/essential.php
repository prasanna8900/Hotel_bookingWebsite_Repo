<?php
 session_start();
    session_regenerate_id(true);
function admin_login(){

    if(!isset($_SESSION['admin']['user'])){
          echo "<script>
        window.location.href='index.php';
    </script>";
    }


}

function redirect($url){
    echo "<script>
        window.location.href='$url';
    </script>";
}

function alert($type,$msg){
    $bs_clas=($type=="success") ? "alert-success" : "alert-danger";
    echo <<<alert
        <div class="alert  $bs_clas alert-dismissible  show " role="alert" style="position:fixed; top:25px; right:25px;">
            <strong class="me-3 ">$msg</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        alert;
}
?>