SET SERVEROUTPUT ON
SET VERIFY OFF

CREATE OR REPLACE PROCEDURE bookingdetails(lecid schedule.lec_id%TYPE)
IS
    CURSOR class_curr IS
    SELECT class_ID,class_condition FROM schedule
    WHERE lec_id = lecid
    order by class_ID;
    fname lecturers.lec_fname%TYPE;
    lname lecturers.lec_lname%TYPE;
BEGIN
    SELECT lec_fname,lec_lname INTO fname,lname FROM lecturers WHERE lec_id = lecid;
    DBMS_OUTPUT.PUT_LINE(fname||' '||lname||'('||lecid||') has booked-');
    FOR clsID IN class_curr LOOP
        DBMS_OUTPUT.PUT_LINE(class_curr%ROWCOUNT||'. '||clsID.class_ID||' ('||clsID.class_condition||')');
    END LOOP;
END;
/

ACCEPT lecid PROMPT 'Enter Lecturer ID: '
BEGIN
    bookingdetails(&lecid);
END;
/
