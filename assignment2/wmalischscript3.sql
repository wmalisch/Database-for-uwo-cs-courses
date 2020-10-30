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
select outsideCourses.courseName, officialName, westernCourses.courseName, dateDecided 
    from outsideCourses, westernCourses, university, equivalence 
    where westernCourses.courseNumber = equivalence.courseNumber 
    and outsideCourses.courseCode = equivalence.courseCode
    and outsideCourses.uniId = equivalence.uniId and university.uniId = equivalence.uniId 
    and dateDecided <= date_sub(curdate(), interval 5 year); 

/* Query 8 */
select courseName, nickname, from equivalence, university, outsideCourses
    where courseNumber = 'cs1026'
    and equivalence.courseCode = outsideCourses.courseCode
    and equivalence.uniId = outsideCourses.uniId
    and equivalence.uniId = university.uniId;

/* Query 9 */
select count(courseNumber) from equivalence where courseNumber = 'cs1026';

/* Query 10 */
select westernCourses.courseName, outsideCourses.courseName, nickname 
    from westernCourses, outsideCourses, university, equivalence
    where equivalence.courseNumber = 'cs1026'
    and westernCourses.courseNumber = equivalence.courseNumber
    and outsideCourses.courseCode = equivalence.courseCode
    and outsideCourses.uniId = equivalence.uniId
    and university.uniId = equivalence.uniId
    and university.city = 'Waterloo';

/* Query 11 */
select officialName from University
    where uniId not in 
    (select uniId from equivalence);

/* Query 12 */
select westernCourses.courseName, westernCourses.courseNumber
    from westernCourses, equivalence, outsideCourses
    where westernCourses.courseNumber = equivalence.courseNumber
    and outsideCourses.courseCode = equivalence.courseCode
    and outsideCourses.uniId = equivalence.uniId
    and (year = '3' or year = '4');

/* Query 13 */
select courseName from westernCourses where courseNumber in
    (select courseNumber from equivalence group by courseNumber having count(*) > 1);

/* Query 14 */
select equivalence.courseNumber as "Western Course Number", 
    westernCourses.weight as "Course Weight", 
    outsideCourses.courseName as "Other University Course Name", 
    university.officialName as "University Name", 
    outsideCourses.weight as "Other Course Weight" 
    from equivalence, westernCourses, outsideCourses, university 
    where westernCourses.courseNumber = equivalence.courseNumber 
    and outsideCourses.courseCode = equivalence.courseCode 
    and outsideCourses.uniId = equivalence.uniId 
    and university.uniId = equivalence.uniId 
    and westernCourses.weight <> outsideCourses.weight;
