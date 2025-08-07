<?php


function adminLogin() {
    session_start();
    if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        header("Location: index.php");
         echo"<script>
        window.location.href = 'index.php';
        </script>";
          }
          session_regenerate_id(true);
    }





function redirect($url) {
    echo"<script>
        window.location.href = '$url';
    </script>";
}

    

function alert($type, $msg) {
    $bs_class = ($type == 'success') ? 'alert-success' : "alert-danger";
    echo <<<ALERT
     <div class="alert $bs_class alert-dismissible fade show" custom-alert role="alert">
            <strong class="me-3">{$msg}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
ALERT;
}

 function filtration($data) {
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = stripslashes($data[$key]); 
        $data[$key] = htmlspecialchars($data[$key]);
        $data[$key] = strip_tags($data[$key]);
    }
    return $data;

}

?>
