create database if not exists user_registration;
use user_registration;
create table if not exists users(id int auto_increment primary key, name varchar(100) not null, email varchar(100) not null unique, password varchar(100) not null, role enum('volenteer','intern') not null);
create table if not exists admin(id int auto_increment primary key, username varchar(100) not null unique, password varchar(100) not null);
insert into admin(username, password) values ('admin', sha1('admin123'));


/* localhost:8080/backend/register_form.html  */