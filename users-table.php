<?php

include "config.php";

$createUsers = "create table if not exists Users (
	FullName varchar(40) not null,
	DoB date default null,
	Sex char(1),
	Phone varchar(20) not null,
	Email varchar(50) not null,
	UserName varchar(20) not null primary key,
	Password varchar(20) not null
);";
$conn->query($createUsers);

?>