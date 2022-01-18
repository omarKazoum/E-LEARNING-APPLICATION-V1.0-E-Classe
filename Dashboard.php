<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
<main class="container-fluid">
    <div class="row">
        <?php include 'sidebar.php';?>
        <div class="col content">
            <?php include 'nav-bar.php';?>
            <div class="main-content row p-2 d-flex align-items-center">
                <article class="col-12 col-md-6 col-lg-3 pb-1">
                    <div class="card">
                        <div class="card-body d-flex flex-column card-students">
                            <img src="images/ic-big-students.svg" alt="" class="card-image w-50">
                            <p class="card-text">
                                Students
                            </p>
                            <h2 class="card-title align-self-end h1">
                                243
                            </h2>

                        </div>

                    </div>
                </article>
                <article class="col-12 col-md-6 col-lg-3 pb-1">
                    <div class="card">
                        <div class="card-body d-flex flex-column card-course">
                            <img src="images/ic-big-course.svg" alt="" class="card-image w-50">
                            <p class="card-text">
                                Course
                            </p>
                            <h2 class="card-title align-self-end h1">
                                13
                            </h2>

                        </div>

                    </div>

                </article>
                <article class="col-12 col-md-6 col-lg-3 pb-1">
                    <div class="card">
                        <div class="card-body d-flex flex-column card-payments">
                            <img src="images/ic-big-payments.svg" alt="" class="card-image w-50">
                            <p class="card-text">
                                Payments
                            </p>
                            <h2 class="card-title align-self-end h1">
                                DHS 556,000
                            </h2>

                        </div>

                    </div>

                </article>
                <article class="col-12 col-md-6 col-lg-3 pb-1">
                    <div class="card">
                        <div class="card-body d-flex flex-column card-users">
                            <img src="images/ic-big-users.svg" alt="" class="card-image w-50">
                            <p class="card-text">
                                Users
                            </p>
                            <h2 class="card-title align-self-end h1">
                                3
                            </h2>

                        </div>

                    </div>

                </article>
            </div>

        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>