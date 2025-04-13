<?php
include('inc/essential.php');

admin_login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard</title>
    <?php include('inc/links.php');?>
</head>

<body>
    <?php include('inc/header.php');?>
    <div class="container-fluid" id="content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Settings</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-tittle m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                data-bs-target="#editSite"><i class="bi bi-pencil-square"></i> Edit</button>
                        </div>

                        <h6 class="card-subtitle mb-2 fw-bold">Site Title</h6>
                        <p class="card-text text-capitalize" id="site_title"></p>
                        <h6 class="card-subtitle mb-2 fw-bold">About Us</h6>
                        <p class="card-text text-capitalize" id="site_about"></p>

                    </div>
                </div>


                <div class="modal fade" id="editSite" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1">
                    <div class="modal-dialog">
                        <form method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">General Settings</h1>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Site Title</label>
                                        <input type="text" class="form-control" name="title" id="title_input" />
                                    </div>
                                    <div>
                                        <label class="form-label">About us
                                        </label>
                                        <textarea class="form-control shadow-none text-dark" name="about"
                                            id="about_input">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal"
                                        id="cancel">Cancel</button>
                                    <button type="button" class="btn custom-bg text-white shadow-none"
                                        id="save">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-4 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center fw-bold">
                            <h5 class="card-tittle m-0">Site Shutdown</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input class="form-check-input shadow-none" type="checkbox" role="switch"
                                        name="shutdown" id="shut_toggle">
                                </form>

                            </div>
                        </div>
                        <p> When site is shutdown no customer will allow to booking
                            and payments </p>


                    </div>
                </div>
            </div>
        </div>



    </div>

    <script>
        async function selectData() {
            const [site_title, site_about, title_input, about_input, cancel, shut_toggle] =
                ['site_title', 'site_about', 'title_input', 'about_input', 'cancel', 'shut_toggle'].map(id => document.getElementById(id));
            try {


                const response = await fetch('inc/setting_c.php', {
                    method: 'post',
                    headers: {
                        'Content-Type': 'application/json',
                    },

                })
                if (!response.ok) {
                    throw new Error("Network issue");
                }
                const updResponse = await response.json();
                if (updResponse.title && updResponse.description) {
                    site_title.textContent = updResponse.title;
                    site_about.textContent = updResponse.description;
                    title_input.value = updResponse.title;
                    about_input.value = updResponse.description;

                    if (updResponse.shutdown == 0) {
                        shut_toggle.checked = false;
                        shut_toggle.value = 0;
                    }
                    else if (updResponse.shutdown == 1) {
                        shut_toggle.checked = true;
                        shut_toggle.value = 1;
                    }
                }

                cancel.addEventListener('click', () => {
                    title_input.value = site_title.textContent;
                    about_input.value = site_about.textContent;
                })



            }
            catch (error) {
                console.error(error);
            }
        }
        selectData();
        const save = document.getElementById('save');
        save.addEventListener('click', async () => {
            const upTitle = title_input.value;
            const upAbout = about_input.value;
            try {
                const upResponse = await fetch('inc/setting_c.php', {
                    method: 'post',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        action: 'update',
                        title: upTitle,
                        about: upAbout,
                    })
                });
                if (!upResponse.ok) throw new Error("file not found");
                const updataData = await upResponse.json();
                if (updataData.success) {
                    alert("success", "Data updated successfully");
                    site_title.textContent = upTitle;
                    site_about.textContent = upAbout;
                    const modal = bootstrap.Modal.getInstance(document.getElementById('editSite'));
                    modal.hide();
                }

                else {
                    alert("error", "Data already updated");
                    const modal = bootstrap.Modal.getInstance(document.getElementById('editSite'));
                    modal.hide();
                }


            }
            catch (error) {
                alert("error", "there is something issue");
            }

        });


        shut_toggle.addEventListener('change', async () => {




            const updateToggle = shut_toggle.value;
            try {
                shut_toggle.value = updateToggle;
                const upshutdown = await fetch('inc/setting_c.php', {
                    method: 'post',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        tg: 'toggle_shutdown',
                        toggle: updateToggle
                    })
                });

                const shutdownUpdate = await upshutdown.json();
                if (shutdownUpdate.success) {
                    if (updateToggle == 1) {
                        alert('success', "Site Off successfully");
                        shut_toggle.value = updateToggle;
                    }
                    else {
                        alert('success', "Site shutdown successfully");
                        shut_toggle.value = updateToggle;

                    }

                }
                setTimeout(() => {
                    window.location.reload();
                }, 1500);
            }
            catch (error) {
                console.error('try m nhi ja rha');
            }
        })
    </script>
    <?php include('inc/js.php')?>

</body>

</html>