/* Use the database for this assign */
use wmalischassign2db;

/* Select the table before insert */
select * from university;

/* Bulk load into university table */
load date infile './udata.csv'
into table university
fields terminated by ','
lines terminated by '\n';


