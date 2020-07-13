
create database online_registration;
use online_registration;

create table citizens(
  id integer not null primary key auto_increment,
  last_name varchar(255),
  first_name varchar(255),
  middle_name varchar(255),
  address varchar(255),
  phone varchar(255),
  email varchar(255)
);

create table users(
  id integer not null primary key auto_increment,
  email varchar(255),
  password varchar(255)
);

