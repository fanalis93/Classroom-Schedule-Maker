SET SERVEROUTPUT ON
SET VERIFY OFF

CREATE OR REPLACE FUNCTION checkschedule(
classid schedule.class_id%TYPE,
starttime schedule.start_time%TYPE,
endtime schedule.end_time%TYPE)
RETURN VARCHAR2
IS
user_type VARCHAR2(10);
stud_id students.stud_id%TYPE;
lec_id lecturers.lec_id%TYPE;
staff_id maintenance.staff_id%TYPE;
BEGIN
    SELECT stud_id,lec_id,staff_id INTO stud_id,lec_id,staff_id FROM schedule WHERE start_time = starttime AND end_time = endtime AND class_id = classid;
    If stud_id IS NOT NULL THEN
        user_type := 'Student';
    ELSIF lec_id IS NOT NULL THEN
        user_type := 'Lecturer';
    ELSIF staff_id IS NOT NULL THEN
        user_type := 'Maintenance';
    END IF;
    RETURN user_type;
END;
/
ACCEPT classid PROMPT 'Enter Class ID: '
ACCEPT start PROMPT 'Enter Booking Start Time: '
ACCEPT end PROMPT 'Enter Booking End Time: '
Declare
    user_type varchar2(10);
    start_time timestamp := timestamp'&start';
    end_time timestamp := timestamp'&end';
    class_id number := &classid;
BEGIN
    user_type := checkschedule(class_id,start_time,end_time);
    DBMS_OUTPUT.PUT_LINE('The class room '||class_id||' was booked by a '||user_type||'.');
    DBMS_OUTPUT.PUT_LINE('Start Time: '||TO_CHAR(start_time,'DD-MON-YYYY HH24:MI:SS AM'));
    DBMS_OUTPUT.PUT_LINE('End Time: '||TO_CHAR(end_time,'DD-MON-YYYY HH24:MI:SS AM'));
END;
/
