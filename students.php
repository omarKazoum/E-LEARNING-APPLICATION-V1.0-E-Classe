<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/student.css">
</head>
<body>
<main class="container-fluid bg-gray">
    <div class="row">
        <?php include 'sidebar.php';?>
        <div class="col content">
            <?php include 'nav-bar.php';?>
            <div class="main-content row p-2 d-flex align-items-center">
                <div class="col-12 main-content-toolbar d-flex pb-2 justify-content-between align-items-center border-bottom-light">
                    <h1 class="h5 fw-bold">Students List</h1>
                    <div class="toolbar-left-part">
                        <button class="sort ic ic-sort btn btn-sort"></button>
                        <button class="btn btn-primary btn-add-students">ADD NEW STUDENT</button>
                    </div>
                </div>
                <div class="table-header row mb-2 d-none d-lg-flex">
                    <span class="offset-1 col-2 text-start">
                        Name
                    </span>
                    <span class="col-2 text-start">
                        Email
                    </span>
                    <span class="col-2 text-start">
                        Phone
                    </span>
                    <span class="col-2 text-start">
                        Enroll Number
                    </span>
                    <span class="col-3 text-start">
                        Date of admission
                    </span>
                </div>
                <div class="row col-12 cards">
                    <?php
                    // let's fill the array with the students data
                    for($i=1;$i<=10;$i++)
                    $students[]=array(
                        'name'=>'name '.$i,
                        'email'=>'name'.$i.'@domain.ext',
                        'phone'=>'212677886655',
                        'enrolNbr'=>1000+$i,
                        'dateAdmission'=>$i.'-Dec, 2021s'
                    );
                    // now let's print the data
                    foreach($students as $student){
                    ?>
                    <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body row d-flex flex-column flex-md-row">
                            <img src="images/student-img.jfif" alt="" class="card-image col-lg-1">
                            <span class="col-lg-2 text-start">
                                <?php echo $student['name'];?>
                            </span>
                            <span class="col-lg-2 text-start">
                                <?php echo $student['email'];?>
                            </span>
                            <span class="col-lg-2 text-start">
                                <?php echo $student['phone'];?>
                            </span>
                            <span class="col-lg-2 text-start">
                                <?php echo $student['enrolNbr'];?>
                            </span>
                            <span class="col-lg-2 text-start">
                                <?php echo $student['dateAdmission'];?>
                            </span>
                            <span class="col-lg-1 btns">
                                <button class="ic ic-edit btn btn-edit">
                                </button>
                                <button class="ic ic-delete btn btn-delete">
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                    <?php }?>

            </div>
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