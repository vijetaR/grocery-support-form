<?php

//Error Messages

 $nameEmptyErr = $nameErr = $emailEmptyErr = $emailErr =
 $phoneEmptyErr = $phoneErr = $subjectEmptyErr = $DeptEmptyErr =
 $messageEmptyErr = "";


if (isset($_POST['submit'])) {

    $name = checkInput($_POST["name"]);
    $email = checkInput($_POST["email"]);
    $phone_no = checkInput($_POST["phone"]);
    $subject = checkInput($_POST["subject"]);
    $message = checkInput($_POST['message']);
    if (isset($_POST['dept'])) {
            $dept_name = checkInput($_POST['dept']);
    }

    $validate = true;

    // Name validation
    if (empty($name)) {
        $nameEmptyErr = '<div class="error"> Name can not be left blank. </div>';
        $validate = false;
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameErr = '<div class="error"> Only letters and white space allowed in a Name. </div>';
        $validate = false;
    }

    //Email Validtion

    if (empty($email)) {
        $emailEmptyErr = '<div class="error"> Email can not be left blank. </div>';
        $validate = false;
    } elseif (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        $emailErr = '<div class="error"> Email format is not valid. </div>';
        $validate = false;
    }

    //Phone Number Validation

    if (empty($phone_no)) {
        $phoneEmptyErr = '<div class="error"> Phone number can not be left blank. </div>';
        $validate = false;
    } elseif (!preg_match('/^[0-9]{10}+$/', $phone_no)) {
        $phoneErr = '<div class="error"> Phone number format is not valid. </div>';
        $validate = false;
    }
    //Subject Validation

    if (empty($subject)) {
         $subjectEmptyErr = '<div class="error"> Subject is required. </div>';
         $validate = false;
    }

    //Department Validation

    if (empty($dept_name)) {
         $DeptEmptyErr = '<div class="error"> Choose the Department. </div>';
         $validate = false;
    }

    //Message Validation
    if (empty($message)) {
         $messageEmptyErr = '<div class="error"> Message is required. </div>';
         $validate = false;
    }


    if ($validate == true) {
        $customerObj = new Customer();
        $customerObj->add_customer_details();
    }
}
function checkInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}