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

            <div class="card border-0 shadow-sm mb-4">
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
                    
                    <form id="general_s_form">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5">General Settings</h1>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Site Title</label>
                                    <input type="text" name="site_title" id="site_title_inp"   class="form-control shadow-none " required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">About Us</label>
                                    <textarea name="site_about" id="site_about_inp"    class="form-control shadow-none" rows="6" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="site_title_inp.value = general_data.site_title; site_about_inp.value = general_data.site_about" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit"  class="btn btn-primary">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

          
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Shutdown website</h5>
                        <div class="form-check form-switch">
                            <from>
                              <input onchange="update_shutdown(this.value)"   class="form-check-input" type="checkbox" id= "shutdown-toggle" >
                            </from>
                       
                         </div>   
                        
                    </div>
                    <p class="card-text" >
                        NO customers will be allowed to book hotel room when shutdown mode is turned on.
                    </p>
                </div>
            </div> 


        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

<script>


let general_data;

let general_s_form = document.getElementById('general_s_form');
let site_title_inp = document.getElementById('site_title_inp');
let site_about_inp = document.getElementById('site_about_inp');


function get_general() 
   {
    let site_title = document.getElementById('site_title');
    let site_about = document.getElementById('site_about');
    let shutdown_toggle = document.getElementById('shutdown-toggle');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        general_data = JSON.parse(this.responseText);

        site_title.innerText = general_data.site_title;
        site_about.innerText = general_data.site_about;

        site_title_inp.value = general_data.site_title;
        site_about_inp.value = general_data.site_about;
        
        if (general_data.shutdown == 0) {
            shutdown_toggle.checked = false;
            shutdown_toggle.value = 0;
        } else {
            shutdown_toggle.checked = true ;
            shutdown_toggle.value = 1;
        }
    }

    xhr.send('get_general');
}

general_s_form.addEventListener('submit', function (e) {
    e.preventDefault();
    upd_general(site_title_inp.value, site_about_inp.value) // Prevent the default form submission
});


function upd_general(site_title_val, site_about_val){
     let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if(this.responseText == 1){
            alert('success', 'Changes saved!');
            get_general();
            document.getElementById('general-s').querySelector('[data-bs-dismiss="modal"]').click();
        } else {
            alert('error', 'No changes made!');
        }
    }

    xhr.send('site_title='+ site_title_val + '&site_about=' + site_about_val + '&upd_general=true');
}


function update_shutdown(val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if(this.responseText == 1)  {
            alert('success', 'Shutdown mode updated!');
            get_general(); // Refresh the data
        } else {
            alert('error', 'No changes made!');
        }
    }

    xhr.send('upd_shutdown=' + val);
}

window.onload = function () {
    get_general();
}
</script>

</body>
</html>
