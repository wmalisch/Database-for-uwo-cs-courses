/* Use the database for this assign, and set up */
use wmalischassign2db;
show tables;


/* Bulk load into university table */
select * from university;
load data local infile './udata.csv'
into table university
fields terminated by ','
lines terminated by '\n';
insert into university values(99,"University of the great one","Edmonton","AB","Gretzky");
select * from university;

/* Insert into westernCourses */
select * from westernCourses;
insert into westernCourses values("cs1026", "Computer Science Fundamentals I", 0.5, "A/B");
insert into westernCourses values("cs1027", "Computer Science Fundamentals II", 0.5, "A/B");
insert into westernCourses values("cs2210", "Algorithms and Data Structures", 1.0, "A/B");
insert into westernCourses values("cs3319", "Databases I", 0.5, "A/B");
insert into westernCourses values("cs2120", "Modern Survival Skills I: Coding Essentials", 0.5, "A/B");
insert into westernCourses values("cs4490", "Thesis", 0.5, "Z");
insert into westernCourses values("cs0020", "Intro to Coding using Pascal and Fortran", 1.0, "");
insert into westernCourses values("cs1028","Intro to CS, Networks, DB, Hardware & more",1.0,"");
select * from westernCourses;

/* Insert into outsideCourses */
select * from outsideCourses;
insert into outsideCourses values("CompSci022", "Introduction to Programming", 1, 0.5, 2);
insert into outsideCourses values("CompSci033", "Intro to Programming for Med students", 3, 0.5, 2);
insert into outsideCourses values("CompSci021", "Packages", 1, 0.5,2);
insert into outsideCourses values("CompSci222", "Introduction to Databases", 2, 1.0,2);
insert into outsideCourses values("CompSci023", "Advanced Programming", 1, 0.5,2);
insert into outsideCourses values("CompSci011", "Intro to Computer Science", 2, 0.5,4);
insert into outsideCourses values("CompSci123", "Using UNIX", 2, 0.5,4);
insert into outsideCourses values("CompSci021", "Intro Programming", 1, 1.0,66);
insert into outsideCourses values("CompSci022", "Advanced Programming", 1, 0.5,66);
insert into outsideCourses values("CompSci319", "Using Databases", 3, 0.5,66);
insert into outsideCourses values("CompSci333", "Graphics", 3, 0.5,55);
insert into outsideCourses values("CompSci444", "Networks", 4, 0.5,55);
insert into outsideCourses values("CompSci022", "Using Packages", 1, 0.5,77);
insert into outsideCourses values("CompSci101", "Introduction to Using Data Structures", 2, 0.5,77);
insert into outsideCourses values("CompSci100","Basics on Networks, OS, Databases",1,1.0,99);
insert into outsideCourses values("CompSci442","Parallel Processing",4,0.5,99);
select * from outsideCourses;

/* Insert and update into equivalence */
select * from equivalence;
insert into equivalence values("cs1026","CompSci022",2,"May 12, 2015");
insert into equivalence values("cs1026","CompSci033",2,"Jan 2, 2013");
insert into equivalence values("cs1026","CompSci011",77,"Feb  9, 1997");
insert into equivalence values("cs1026","CompSci021",66,"Jan 12, 2010");
insert into equivalence values("cs1027","CompSci023",2,"Jun 22, 2017");
insert into equivalence values("cs1027","CompSci022",66,"Sep 1, 2019");
insert into equivalence values("cs2210","CompSci101",77,"Jul 12, 1998");
insert into equivalence values("cs3319","CompSci222",2,"Sep 13, 1990");
insert into equivalence values("cs3319","CompSci319",66,"Sep 21, 1987");
insert into equivalence values("cs2120","CompSci022",2,"Dec 10, 2018");
insert into equivalence values("cs0020","CompSci022",2,"Sep 17, 1999");
select * from equivalence;
update equivalence set dateDecided = 'September 19, 2018' where courseNumber = 'cs0020' and courseCode = 'CompSci022';
select * from equivalence;

/* Update years for intro courses */
select * from outsideCourses;
update outsideCourses set year='1' where (select left(courseName, 5)) = 'Intro';
select * from outsideCourses;