SET SERVEROUTPUT ON
SET VERIFY OFF
ACCEPT fname PROMPT 'Enter Student First Name: '
CREATE OR REPLACE PROCEDURE displayData(fname students.stud_fname%TYPE)
AS
    classlocation classroom.class_location%TYPE;
    classID classroom.class_id%TYPE;
    studfname students.stud_fname%TYPE;
    studlname students.stud_lname%TYPE;
BEGIN
    select class_location into classlocation from classroom where class_id in
    (select class_id from schedule where stud_id =
    (select stud_id from students where stud_fname = fname));
    
    select stud_fname,stud_lname into studfname,studlname from students
        where stud_fname = fname;
    select class_id into classID from classroom where class_location = classlocation;
    
    DBMS_OUTPUT.PUT_LINE('Student Name: '||studfname||' '||studlname);
    DBMS_OUTPUT.PUT_LINE('Booked Class ID: '||classID);
    DBMS_OUTPUT.PUT_LINE('Location of Booked Classroom: '||classlocation);
END;
/

DECLARE
BEGIN
displayData('&fname');
END;
/
