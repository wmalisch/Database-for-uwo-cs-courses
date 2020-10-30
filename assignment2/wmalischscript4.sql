show databases;
use wmalischassign2db;

-- first year equivalence view */
create view firstYearView 
    as 
    select outsideCourses.courseName as "Other Uni Course Title", 
    officialName, nickname, city, 
    westernCourses.courseName as "Western Course Name" 
    from outsideCourses, university, westernCourses, equivalence 
    where equivalence.courseNumber = westernCourses.courseNumber 
    and equivalence.courseCode = outsideCourses.courseCode 
    and equivalence.uniId = outsideCourses.uniId 
    and university.uniId = equivalence.uniId 
    and outsideCourses.year = '1';

-- Show view works */
select * from firstYearView;
select * from firstYearView where nickname = 'UofT' ;
select * from firstYearView where nickname = 'UofT' order by "Western Course Name" ASC;

-- I was having some troubles with the order by clause on aliases, so I also did this view.
create view firstYearViewLessAlias 
    as 
    select outsideCourses.courseName as "Other Uni Course Title", 
    officialName, nickname, city, 
    westernCourses.courseName 
    from outsideCourses, university, westernCourses, equivalence 
    where equivalence.courseNumber = westernCourses.courseNumber 
    and equivalence.courseCode = outsideCourses.courseCode 
    and equivalence.uniId = outsideCourses.uniId 
    and university.uniId = equivalence.uniId 
    and outsideCourses.year = '1';
select * from firstYearViewLessAlias;
select * from firstYearViewLessAlias where nickname = 'UofT' ;
select * from firstYearViewLessAlias where nickname = 'UofT' order by courseName ASC;

--Show university data, delete and show it worked
select * from university;
delete from university where nickname like '%cord%';
select * from university;

-- Delete ontario uni
delete from university where provinceCode = 'ON';
-- the reason wy the ontario universities could not be deleted was because they are a parent row, and have foreign key constraints in other tables
select * from university;

-- Show info on outside courses and university, delete waterloo, show
select * from outsideCourses as C inner join university as U on C.uniId = U.uniId;
delete from outsideCourses where uniId in (select uniId from university where city = 'Waterloo');
select * from outsideCourses as C inner join university as U on C.uniId = U.uniId;


