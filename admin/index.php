<?php
session_start();
include './confog_session.php';
include './header.php'; ?>
<!-- Right sidebar Ends-->
<?php

$attendance_data = "SELECT * FROM `daily_attendance_data` WHERE staff_id='$_SESSION[active_user_id]'";
$attendance_data_run = $conn->query($attendance_data);
if ($attendance_data_run) {

    $data_active_user = mysqli_fetch_assoc($attendance_data_run);
}
$currunt_time = date('h:i:s A');
$currunt_date =  date('Y-m-d');
?>
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3> Mark Your Attendance
                            <small>Hey.. <?php echo $data_log_in_user['admin_name'] ?></small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="row">
                <strong> <?php print_r($date_data); ?></strong>


            </div>
            <div style="justify-content: space-between;" class="col-12 d-flex">

                <div>
                    <form action="./" method="POST">
                        <?php
                        if ($data_active_user['punch_in'] != "" and $data_active_user['puch_date'] == $currunt_date) { ?>
                            <button onclick="alert('Attendance Already punched'); " class="btn btn-success  mb-4 "><?php echo $data_active_user['punch_in'] ?></button>

                        <?php } else { ?>

                            <button onclick="this.form.submit()" type="submit" name="check_in" class="btn btn-success  mb-4 ">ChekcIn</button>


                        <?php }

                        ?>
                    </form>
                    <?php

                    if ($_SERVER['REQUEST_METHOD'] == "POST") {


                        if (isset($_POST['check_in'])) {


                            $insert_data_checkin = "INSERT INTO `daily_attendance_data`(`staff_id`, `puch_date`,`status`, `punch_in`, `punch_out`, `front_date`) VALUES ('$_SESSION[active_user_id]','$currunt_date','PRESENT','$currunt_time','','$date_data')";

                            $insert_data_checkin_run = $conn->query($insert_data_checkin);
                            if ($insert_data_checkin_run) {

                                echo "<script>window.location.href='./'</script>";
                            }
                        }
                    }





                    ?>
                </div>

                <div>
                    <form action="./" method="post">

                        <?php

                        if ($data_active_user['punch_out'] != "" and $data_active_user['puch_date'] == $currunt_date) { ?>
                            <button onclick="alert('You Punched Out today'); " class="btn btn-primary mb-4"><?php echo $data_active_user['punch_out'] ?></button>


                        <?php } else { ?>
                            <button onclick="this.form.submit()" type="submit" name="check_out" class="btn btn-primary  mb-4">Checkout</button>

                        <?php }
                        ?>




                    </form>
                </div>
                <?php

                if ($_SERVER['REQUEST_METHOD'] == "POST") {


                    if (isset($_POST['check_out'])) {

                        $check_out_staff = "UPDATE `daily_attendance_data` SET `punch_out`='$currunt_time' WHERE `staff_id`='$_SESSION[active_user_id]' AND `puch_date`='$currunt_date'";
                        $check_out_staff_run = $conn->query($check_out_staff);
                        if ($check_out_staff_run) {

                            echo "<script>alert('punched Out');
                            window.location.href='./';
                            </script>";
                        }
                    } else {
                    }
                }

                if ($data_active_user['punch_out'] == "" and $currunt_time >= '11:49:00 PM') {

                    $check_out_staff = "UPDATE `daily_attendance_data` SET `punch_out`='$currunt_time' WHERE `staff_id`='$_SESSION[active_user_id]' AND `puch_date`='$currunt_date'";
                    $check_out_staff_run = $conn->query($check_out_staff);
                    if ($check_out_staff_run) {

                        echo "<script>alert('punched Out');
                        window.location.href='./';
                        </script>";
                    }
                }


                ?>
            </div>

        </div>
        <div class="row">

            <div class="col-xl-12 xl-100">
                <div class="card">
                    <div class="card-header">
                        <h5>Your Attendance</h5>

                    </div>
                    <div class="card-body">
                        <div class="user-status table-responsive latest-order-table">
                            <table class="table table-bordernone">
                                <thead>
                                    <tr>
                                        <th scope="col">#Sno</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">CheckIn</th>
                                        <th scope="col">CheckOut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php


                                    $show_old_data = "SELECT * FROM `daily_attendance_data` WHERE staff_id= '$_SESSION[active_user_id]'";
                                    $show_old_data_run = $conn->query($show_old_data);
                                    if ($show_old_data_run) {
                                        if (mysqli_num_rows($show_old_data_run) > 0) {

                                            while ($data_old_active_staff = mysqli_fetch_assoc($show_old_data_run)) { ?>

                                                <tr>
                                                    <td>1</td>
                                                    <td class="digits"><?php echo $data_old_active_staff['puch_date'] ?></td>
                                                    <td class="font-danger">
                                                        <button class="btn btn-<?php echo ($data_old_active_staff['status'] == 'PRESENT') ? 'success' : ''   ?>"><?php echo $data_old_active_staff['status'];  ?></button>

                                                    </td>
                                                    <td class="digits"><?php echo $data_old_active_staff['punch_in'] ?></td>
                                                    <td class="digits"><?php
                                                                        if ($data_old_active_staff['punch_out'] != "") {
                                                                            echo $data_old_active_staff['punch_out'];
                                                                        } else {

                                                                            echo "Curruntly Working";
                                                                        }
                                                                        ?></td>
                                                </tr>

                                    <?php        }
                                        }
                                    }

                                    ?>



                                </tbody>
                            </table>
                            <a href="" class="btn btn-primary mt-4">View Oldest Data</a>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



</div>
</div>
<!-- Container-fluid Ends-->
</div>

<!-- footer start-->
<?php
include './footer.php';
?>