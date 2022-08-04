<?php

include_once('includes/db_connect.php');

class Customer extends db_connection
{
    public function add_customer_details()
    {

        $name = $this->connection->real_escape_string($_POST['name']);
        $email = $this->connection->real_escape_string($_POST['email']);
        $phone_no = $this->connection->real_escape_string($_POST['phone']);
        $subject = $this->connection->real_escape_string($_POST['subject']);
        $dept_name = $this->connection->real_escape_string($_POST['dept']);
        $message = $this->connection->real_escape_string($_POST['message']);

        $insert_query = "INSERT INTO customer (name, email, phone_no, department, subject, message) 
					 VALUES('$name', '$email', '$phone_no',  '$dept_name', '$subject', '$message')";

        $insert_result = $this->connection->query($insert_query);

        if ($insert_result == true) {
            header("Location: index.php");
            echo "Register Successfully.";
        } else {
            header("Location: index.php");
            echo "Registartion failed.";
        }
    }
}
