/* Show, delete, create and use the database for this project */
show databases;
drop database wmalischassign2db;
create database wmalischassign2db;
use wmalischassign2db;

/*Lines related to marking*/
GRANT USAGE ON *.* TO 'ta'@'localhost';
DROP USER 'ta'@'localhost';
CREATE USER 'ta'@'localhost' IDENTIFIED BY 'cs3319';
GRANT ALL PRIVILEGES ON wmalischassign2db.* TO 'ta'@'localhost';
FLUSH PRIVILEGES;

/* Should be no tables */
show tables;

/* Create tables */
create table university(uniId int not null, officialName varchar(50) not null, city varchar(20) not null, provinceCode char(2) not null, nickname varchar(20) not null, primary key(uniId));
create table westernCourses(courseNumber char(6) not null, courseName varchar(50) not null, weight float not null, suffix varchar(3), primary key(courseNumber));
show tables;
create table outsideCourses(courseCode char(10) not null, courseName varchar(50), year int, weight float, uniId int not null, primary key(courseCode, uniId), foreign key(uniId) references university(uniId) on delete cascade);
create table equivalence(courseNumber char(6) not null, courseCode char(10) not null, uniId int not null, dateDecided varchar(18) not null, primary key(courseNumber,courseCode,uniId), foreign key(courseNumber) references westernCourses(courseNumber) on delete cascade, foreign key(courseCode) references outsideCourses(courseCode) on delete cascade, foreign key(uniId) references university(uniId));

/* Show tables again */
show tables;