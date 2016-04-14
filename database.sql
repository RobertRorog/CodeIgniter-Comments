CREATE DATABASE ci;
CREATE TABLE comments(
id int(10) NOT NULL AUTO_INCREMENT,
title varchar(90) NOT NULL,
comment varchar(255) NOT NULL,
PRIMARY KEY (id)
)