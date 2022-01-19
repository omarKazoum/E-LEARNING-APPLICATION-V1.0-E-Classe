<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payments</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/payments.css">
</head>
<body>
<main class="container-fluid bg-gray">
    <div class="row">
        <?php include 'sidebar.php';?>
        <div class="col content">
            <?php include 'nav-bar.php';?>
            <div class="main-content row p-2 d-flex align-items-center">
                <div class="col-12 main-content-toolbar d-flex pb-2 justify-content-between align-items-center border-bottom-light">
                    <h1 class="h4 fw-bold">Payment Details</h1>
                    <div class="toolbar-left-part">
                        <button class="sort ic ic-sort btn btn-sort"></button>
                    </div>
                </div>
            </div>
            <div class="table-header d-none d-lg-flex row mb-2 ps-2">
                <span class="col-1 text-start ps-2">
                    Name
                </span>
                <span class="col-2 text-start">
                    Payment Schedule
                </span>
                <span class="col-2 text-start">
                    Bill Number
                </span>
                <span class="col-2 text-start">
                   Amount Paid
                </span>
                <span class="col-2 text-start">
                    Balance amount
                </span>
                <span class="col-2 text-start">
                    Date
                </span>
            </div>
            <div class="col-12 cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body row d-flex flex-column flex-lg-row">
                            <span class="col-lg-1 text-start">
                                Karth
                            </span>
                            <span class="col-lg-2 text-start">
                               First
                            </span>
                            <span class="col-lg-2 text-start">
                                00012223
                            </span>
                            <span class="col-lg-2 text-start">
                                DHS 100,000
                            </span>
                            <span class="col-lg-2 text-start">
                                DHS 500,000
                            </span>
                            <span class="col-lg-2 text-start">
                                 05-Jan, 2022
                            </span>
                            <span class="col-lg-1 btns">
                                <button class="ic ic-eye btn btn-details">
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body row d-flex flex-column flex-lg-row">
                            <span class="col-lg-1 text-start">
                                Karth
                            </span>
                            <span class="col-lg-2 text-start">
                               First
                            </span>
                            <span class="col-lg-2 text-start">
                                00012223
                            </span>
                            <span class="col-lg-2 text-start">
                                DHS 100,000
                            </span>
                            <span class="col-lg-2 text-start">
                                DHS 500,000
                            </span>
                            <span class="col-lg-2 text-start">
                                 05-Jan, 2022
                            </span>
                            <span class="col-lg-1 btns">
                                <button class="ic ic-eye btn btn-details">
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body row d-flex flex-column flex-lg-row">
                            <span class="col-lg-1 text-start">
                                Karth
                            </span>
                            <span class="col-lg-2 text-start">
                               First
                            </span>
                            <span class="col-lg-2 text-start">
                                00012223
                            </span>
                            <span class="col-lg-2 text-start">
                                DHS 100,000
                            </span>
                            <span class="col-lg-2 text-start">
                                DHS 500,000
                            </span>
                            <span class="col-lg-2 text-start">
                                 05-Jan, 2022
                            </span>
                            <span class="col-lg-1 btns">
                                <button class="ic ic-eye btn btn-details">
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body row d-flex flex-column flex-lg-row">
                            <span class="col-lg-1 text-start">
                                Karth
                            </span>
                            <span class="col-lg-2 text-start">
                               First
                            </span>
                            <span class="col-lg-2 text-start">
                                00012223
                            </span>
                            <span class="col-lg-2 text-start">
                                DHS 100,000
                            </span>
                            <span class="col-lg-2 text-start">
                                DHS 500,000
                            </span>
                            <span class="col-lg-2 text-start">
                                 05-Jan, 2022
                            </span>
                            <span class="col-lg-1 btns">
                                <button class="ic ic-eye btn btn-details">
                                </button>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>