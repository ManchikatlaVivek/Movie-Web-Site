create database movie;
	use movie;
create table actor(
actor_id varchar(30) not null primary key,
fname varchar(30),
lname varchar(30),
dob date,
no_of_awards int
);

create table director(
director_id varchar(30) not null primary key,
fname varchar(30),
lname varchar(30),
dob date,
gender char(1)
);	

create table awards(
awardname varchar(30),
movie_id varchar(30),
year varchar(4),
category varchar(30)
);

create table movie(
movie_id varchar(30) not null primary key,
actor_id varchar(30),
director_id varchar(30),
title varchar(30),
genre varchar(30),
year varchar(4),
rating int,
runtime int,
collections int
);
