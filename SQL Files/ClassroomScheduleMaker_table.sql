drop table Schedule;
drop table Students;
drop table Lecturers;
drop table Classroom;
drop table maintenance;

create table Students(
stud_id number primary key not null, 
stud_fname varchar2(15) not null, 
stud_lname varchar2(15) not null,
stud_phone number, 
stud_email varchar2(30), 
dept varchar2(10) not null
);

create table Lecturers(
lec_id number primary key not null, 
lec_fname varchar2(15) not null, 
lec_lname varchar2(15) not null,
lec_designation varchar2(30) , 
lec_email varchar2(30), 
dept varchar2(10) not null
);
                       
create table Classroom(
class_id number primary key not null, 
class_capacity number, 
class_location varchar2(15),
class_condition VARCHAR2(30) not null, 
class_deviceNO number
);

create table maintenance(
staff_id number primary key not null, 
staff_fname varchar2(15) not null, 
staff_lname varchar2(15) not null,
staff_email varchar2(30), 
staff_phone number
);

create table Schedule(
stud_id number,
lec_id number,
class_id number not null,
staff_id number, 
class_condition VARCHAR2(30) not null, 
start_time TIMESTAMP, 
end_time TIMESTAMP,
FOREIGN key(stud_id) REFERENCES Students(stud_id), 
FOREIGN key(lec_id) REFERENCES Lecturers(lec_id),
FOREIGN key(class_id) REFERENCES Classroom(class_id),
FOREIGN key(staff_id) REFERENCES maintenance(staff_id)
);

--view description of  table
--desc schedule
--desc Students
--desc Lecturers
-- Classroom
--desc maintenance