<?php

require('inc/essentials.php');
adminLogin(); // make sure this function is defined to check session/login

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel - Setting</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<style>
    #dashboard-menu {
        position: fixed;
        height: 100%;
    }
    @media screen and (max-width: 992px) {
        #dashboard-menu {
            height: auto;
            width: 100%;
        }
    }
    #main-content {
        margin-top: 60px;
    }
</style>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h4 class="mb-4">SETTINGS</h4>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">General Setting</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>
                    </div>

                    <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                    <p class="card-text" id="site_title"></p>
                    <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                    <p class="card-text" id="site_about"></p>
                </div>
            </div>

            <div class="modal fade" id="general-s" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form method="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5">General Settings</h1>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Site Title</label>
                                    <input type="text" name="site_title" id="site_title_inp"   class="form-control shadow-none">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">About Us</label>
                                    <textarea name="site_about" id="site_about_inp"    class="form-control shadow-none" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="site_title.value = general_data_titel, site_about.value = general_data.site_about" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit"  onclick="upd_general(site_titel.value,site_about.value_)"  class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

<script>


let general_data;

function get_general() 
   {
    let site_title = document.getElementById('site_title');
    let site_about = document.getElementById('site_about');

    let site_title_inp = document.getElementById('site_title_inp');
    let site_about_inp = document.getElementById('site_about_inp');


    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        general_data = JSON.parse(this.responseText);

        site_title.innerText = general_data.site_title;
        site_about.innerText = general_data.site_about;

        site_title_inp.value = general_data.site_title;
        site_about_inp.value = general_data.site_about;
    }

    xhr.send('get_general');
}


function upd_general(site_titel_val,site_about_val){
      let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
      //  general_data = JSON.parse(this.responseText);

    //    site_title.innerText = general_data.site_title;
  //      site_about.innerText = general_data.site_about;

       // site_title_inp.value = general_data.site_title;
      //  site_about_inp.value = general_data.site_about;
    }

    xhr.send('site_titel ='+site_titel_val+'&site_about='+site_about_val+'&upd_general');
}


window.onload = function () {
    get_general();
}
</script>

</body>
</html>
