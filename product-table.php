<?php

include "config.php";

$conn->multi_query("create table if not exists Products (
	ID bigint unsigned not null primary key auto_increment,
	Name varchar(20) not null,
	Provider varchar(20) not null,
	Price int unsigned not null,
	Type varchar(20) not null
);

insert into Products(Name, Provider, Price, Type) values ('Paracetamol', '2mg', 70, 'medicine');
insert into Products(Name, Provider, Price, Type) values ('Consultation', 'Dr. R.B. Patra', 500, 'consultation');
insert into Products(Name, Provider, Price, Type) values ('Heart Checkup', 'Artemis', 1000, 'test');");