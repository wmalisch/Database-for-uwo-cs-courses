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


/* Query 8 */
/* Query 9 */
/* Query 10 */
/* Query 11 */
/* Query 12 */
/* Query 13 */
/* Query 14 */