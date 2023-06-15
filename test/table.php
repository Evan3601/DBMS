<?php
include '_dbconnect.php';

//sql to create table
$sql = "CREATE TABLE user_info  (
    userid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    uname  VARCHAR(30) NOT NULL,
    uaddress VARCHAR(20) NOT NULL,
    phoneno BIGINT(10),
    email VARCHAR(50),
    Reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table! " . $conn->error;
}
?>