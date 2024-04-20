<?php
    function set_flashData($key = "", $value = "") {
        if (!empty($key) && !empty($value)) {
            return true;
        }
        return false;
    }

    function get_flashData($key = "") {
        if (!empty($key) && isset($_SESSION['_flashdata'][$key])) {
            $data = $_SESSION['_flashdata'][$key];
            unset($_SESSION['_flashdata']);
            return $data;
        } else {
            echo "<script> alert('Flash Message \'{$key}\' is not difined. ')</script>";
        }
    }
    function pesan($key = "", $pesan = "") {
        if ($key == "info") {
            set_flashData('info', "<div class'alert alert-primary alert-dismissible fade show' role='alert'>
                                <strong>Info! </strong> {$pesan}
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>");
        } elseif ($key == "success") {
            set_flashData('success', "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong>Berhasil! <strong> {$pesan}
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>");
        } elseif ($key == "danger") {
            set_flashData('danger', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <strong>Gagal! <strong> {$pesan}
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>");
        } elseif ($key == "warning") {
            set_flashData('warning', "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                <strong>Peringatan! <strong> {$pesan}
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>");
        }
    }
?>