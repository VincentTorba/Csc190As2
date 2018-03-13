DROP DATABASE IF EXISTS db_users;
CREATE DATABASE db_posts;
USE db_posts;
CREATE TABLE tbl_posts(
	author varchar(250)
	post varchar(1024)
	ts timestamp
	);