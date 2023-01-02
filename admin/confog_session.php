<?php

if (!isset($_SESSION['active_user_id'])) {

    echo "<script>window.location.href='../';</script>";
}
