SET SERVEROUTPUT ON
SET VERIFY OFF

CREATE OR REPLACE FUNCTION insertschedule(persontype students.stud_email%TYPE,personID schedule.class_id%TYPE,
classid schedule.class_id%TYPE,
classCondition schedule.class_condition%TYPE,
starttime schedule.start_time%TYPE,
endtime schedule.end_time%TYPE)
RETURN VARCHAR2
IS
txt VARCHAR2(30) := 'New Schedule Inserted.';

BEGIN
    
    If lower(persontype) = 'student' THEN
        INSERT INTO schedule VALUES (personID,null,classid,null,classCondition,starttime,endtime);
    ELSIF lower(persontype) = 'lecturer' THEN
        INSERT INTO schedule VALUES (null,personID,classid,null,classCondition,starttime,endtime);
    ELSIF lower(persontype) = 'Maintenance' THEN
        INSERT INTO schedule VALUES (null,null,classid,personID,classCondition,null,null);
    END IF;
    RETURN txt;
END;
/

ACCEPT occupation PROMPT 'Enter Occupation Type: '
ACCEPT id PROMPT 'Enter ID: '
ACCEPT classid PROMPT 'Enter Class Id you want to book: '
ACCEPT condition PROMPT 'Enter purpose of booking: '
ACCEPT start PROMPT 'Enter start time: '
ACCEPT end PROMPT 'Enter end time: '
Declare
    txt varchar2(30);
    persontype varchar2(30) := '&occupation';
    personID number := &id;
    class_id number := &classid;
    classcondition schedule.class_condition%TYPE := '&condition';
    start_time timestamp := timestamp'&start';
    end_time timestamp := timestamp'&end';
BEGIN
    txt := insertschedule(persontype,personID,class_id,classcondition,start_time,end_time);
    DBMS_OUTPUT.PUT_LINE(txt);
    DBMS_OUTPUT.PUT_LINE('Booking Details: ');
    DBMS_OUTPUT.PUT_LINE('Occupation: '||persontype);
    DBMS_OUTPUT.PUT_LINE('ID: '||personid);
    DBMS_OUTPUT.PUT_LINE('Class ID: '||class_id);
    DBMS_OUTPUT.PUT_LINE('Purpose: '||classcondition);
    DBMS_OUTPUT.PUT_LINE('Booking Start time: '||TO_CHAR(start_time,'DD-MON-YYYY HH24:MI:SS AM'));
    DBMS_OUTPUT.PUT_LINE('Booking End Time: '||TO_CHAR(end_time,'DD-MON-YYYY HH24:MI:SS AM'));
END;
/

rollback;
