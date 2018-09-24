create database todo;

use todo;

create table task(
    id integer primary key auto_increment,
    task varchar(255)
);

insert into task(`task`) values ('Hello World!');
