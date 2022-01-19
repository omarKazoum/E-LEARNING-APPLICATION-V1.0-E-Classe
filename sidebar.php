<?php $active_class='bg-primary'; ?>
<div class="toggle col-3 sidebar p-1 p-md-3">
    <h1 class="text-left border-start border-3 border-md-4 border-primary ps-md-2 fw-bold fs-4 mb-3 mb-md-0">E-classe</h1>
    <div class="w-100 px-md-5 mx-md-auto d-flex flex-column align-items-center mt-md-5 mb-md-2">
        <img src="images/dashboard-round-img.png" alt="" class="img-round w-100 h-100 shadow">
        <h5 class="text-center w-100 mt-3 d-none d-md-block fw-bold">Admin name</h5>
        <h6 class="text-primary text-bold mt-3 d-none d-md-block">Admin</h6>
    </div>
    <div class="menu-options-con row w-100 px-lg-5 mx-auto py-md-5 py-2 mt-3 mt-md-0 ">
        <a href="Dashboard.php" class="btn gap-2 <?php if(basename($_SERVER['SCRIPT_NAME'])=='Dashboard.php')echo $active_class ?> mb-4 d-flex justify-content-md-between justify-content-center w-100 align-items-center">
            <span class="ic ic-home"></span>
            <p class="w-75 text-start m-0 d-none d-md-block">
                Home
            </p>
        </a>
        <a href="#" class="btn gap-2  mb-4 d-flex justify-content-md-between justify-content-center w-100 align-items-center">
            <span class="ic ic-course"></span>
            <p class="w-75 text-start m-0 d-none d-md-block">
                Course
            </p>
        </a>
        <a href="students.php" class="btn gap-2 <?php if(basename($_SERVER['SCRIPT_NAME'])=='students.php')echo $active_class ?> mb-4 d-flex justify-content-md-between justify-content-center w-100 align-items-center">
            <span class="ic ic-students"></span>
            <p class="w-75 text-start m-0 d-none d-md-block">
                Students
            </p>
        </a>
        <a href="payments.php" class="btn gap-2 <?php if(basename($_SERVER['SCRIPT_NAME'])=='payments.php')echo $active_class ?> mb-4 d-flex justify-content-md-between justify-content-center w-100 align-items-center">
            <span class="ic ic-payment my-md-0 my-1"></span>
            <p class="w-75 text-start m-0 d-none d-md-block">
                Payment
            </p>
        </a>
        <a href="#" class="btn gap-2  mb-4 d-flex justify-content-md-between justify-content-center w-100 align-items-center">
            <span class="ic ic-report "></span>
            <p class="w-75 text-start m-0 d-none d-md-block">
                Report
            </p>
        </a>
        <a href="#" class="btn gap-2  mb-4 d-flex justify-content-md-between justify-content-center w-100 align-items-center">
            <span class="ic ic-settings my-md-0 my-1"></span>
            <p class="w-75 text-start m-0 d-none d-md-block">
                Settings
            </p>
        </a>
        <a href="index.php" class="mt-md-5 mt-2 btn gap-0 d-flex justify-content-center align-items-center" >
            <p class=" text-start m-0 d-none d-md-block ">
                Logout
            </p>
            <span class="ic ic-log-out my-1"></span>
        </a>

    </div>
</div>