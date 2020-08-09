select * from maintenance;
select * from classroom;
select * from lecturers;
select * from students;
select * from schedule;

--query1
select lec_fname,lec_lname from lecturers where lec_id in 
    (select lec_id from schedule where class_id = &class_id);

--query2
select lec_fname,lec_lname from lecturers where lec_id = 
(select lec_id from schedule where lec_id is not NULL AND class_id = 
(select class_id from schedule where stud_id = 
(select stud_id from students where stud_fname = 'Fayek') 
group by class_id)
);

-- updating data
update students set stud_fname = 'Fayek Alvi' where stud_id = &student_id;

--delete
delete from schedule where start_time = timestamp '&start_time' AND class_id = &class_id;


