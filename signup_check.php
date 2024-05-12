<?php
session_start();
include "db_connect.php";

if (
    isset($_POST['uname']) && isset($_POST['password']) &&
    isset($_POST['name']) && isset($_POST['re_password'])
) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    $name = validate($_POST['name']);
    $re_pass = validate($_POST['re_password']);

    $user_data = 'uname=' . $uname . "&name=" . $name;

    if (empty($uname)) {
        header("Location: signup.php?error=User Name is Required&$user_data");
        exit();
    } else if (empty($pass)) {
        header("Location: signup.php?error=Password is Required&$user_data");
        exit();
    } else if (empty($re_pass)) {
        header("Location: signup.php?error=Re Password is Required&$user_data");
        exit();
    } else if (empty($name)) {
        header("Location: signup.php?error=Name is Required&$user_data");
        exit();
    } else if ($pass !== $re_pass) {
        header("Location: signup.php?error=The confirmation password does not matc&$user_data");
        exit();
    } else {

        // hashing the password
        $pass = md5($pass);

        $sql = "SELECT * FROM users WHERE user_name='$uname'";

        // connection
        $result = mysqli_query($conn, $sql);

        // if in DB get same username return error
        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=The username is taken try another&$user_data");
            exit();
        } else {
            $sql2 = "INSERT INTO users(user_name, password, name) VALUES
            ('$uname', '$pass', '$name')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: signup.php?success=Your account has been created successfully");
                exit();
            } else {
                header("Location: signup.php?error=unknown error occurred&$user_data");
                exit();
            }
        }
        // $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
        // $result =  mysqli_query($conn, $sql);
        // if (mysqli_num_rows($result) === 1) {
        //     $row = mysqli_fetch_assoc($result);
        //     if ($row['user_name'] === $uname && $row['password'] === $pass) {
        //         $_SESSION['user_name'] = $row['user_name'];
        //         $_SESSION['name'] = $row['name'];
        //         $_SESSION['id'] = $row['id'];
        //         header("Location: home.php");
        //         exit();
        //     } else {
        //         header("Location: signup.php?error=Incorect User name or password");
        //         exit();
        //     }
        // } else {
        //     header("Location: signup.php?error=Incorect User name or password");
        //     exit();
        // }
    }
} else {
    header("Location: signup.php");
    exit();
}
