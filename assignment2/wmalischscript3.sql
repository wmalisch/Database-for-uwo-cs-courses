/* Query 1 */
select courseName from westernCourses;

/* Query 2 */
select distinct courseCode from outsideCourses;

/* Query 3 */
select * from westernCourses order by courseName asc;

/* Query 4 */
select courseNumber, courseName from westernCourses where weight = '0.5';

/* Query 5 */
select courseCode, courseName from outsideCourses, university where outsideCourses.uniId = university.uniId and university.officialName = 'University Of Toronto';

/* Query 6 */
select courseName, nickname from outsideCourses, university where outsideCourses.uniId = university.uniId and outsideCourses.courseName like '%Introduction%';

/* Query 7 */
-- COME BACK TO THIS ONE, FOR SOME REASON DISPLAYING 4 COURSES WHEN IT SHOULD DISPLAY 5
select outsideCourses.courseName, officialName, westernCourses.courseName, dateDecided 
    from outsideCourses, westernCourses, university, equivalence 
    where westernCourses.courseNumber = equivalence.courseNumber 
    and outsideCourses.courseCode = equivalence.courseCode
    and outsideCourses.uniId = equivalence.uniId and university.uniId = equivalence.uniId 
    and dateDecided <= date_sub(curdate(), interval 5 year); 

/* Query 8 */
/* Query 9 */
/* Query 10 */
/* Query 11 */
/* Query 12 */
/* Query 13 */
/* Query 14 */