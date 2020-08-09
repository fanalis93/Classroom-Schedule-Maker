--insert into students table
insert into students values (1625331,'Mahanad','Chamie',0114466243,'Mahanad@hotmail.com','CS');
insert into students values (1721485,'Fayek Alvi','Rahman',0114434572,'fayek.lucse@gmail.com','CS');
insert into students values (1623433,'Saad','Abu Sayed',0114423272,'saad@gmail.com','CS');
insert into students values (1712235,'Amina','Ahmed',0123234572,'amina@hmail.com','CS');
insert into students values (1716763,'Tanvir','Hasan',0121834334,'tanvir@ymail.com','GS');
insert into students values (1721834,'Tahmid','Lodi',0174434572,'tahmid@gmail.com','IT');
insert into students values (1621485,'Junayed','Khan',0112234572,'junayed162@gmail.com','GS');
insert into students values (1725334,'Zubair','Mohammad',0117273272,'kmzubair@gmail.com','CS');
insert into students values (1723232,'Ikram','Kayes',0182734722,'ikram@ymail.com','IT');
insert into students values (1725314,'Ejmen','Ramic',0161213272,'ejmen@gmail.com','IT');

--insert into lecturers table
insert into Lecturers values (6184,'Killua','Zoldyck','Asst. Prof','killua@gmail.com','CS');
insert into Lecturers values (5123,'Gon','Freecss','Asst. Prof','gon@gmail.com','IT');
insert into Lecturers values (2323,'Luffy','Delowar','Asst. Prof','luffy@gmail.com','IT');
insert into Lecturers values (5454,'Lelouch','Lamperouge','Asst. Prof','lelouch@gmail.com','CS');
insert into Lecturers values (2356,'Light','Yagami','Assoc. Prof','light@gmail.com','IT');
insert into Lecturers values (7876,'Toshiro','Hitsugaya','Matriculation Lecturer','Toshiro@iium.edu.my','GS');
insert into Lecturers values (3184,'Shinichi ','Kudo','Professor','Kudo@iium.edu.my','CS');
insert into Lecturers values (5928,'Roy','Mustang','Assoc. Prof','jaki.fayek@live.iium.edu.my','GS');
insert into Lecturers values (2341,'Imad','Fakri','Professor','imadf@iium.edu.my','CS');
insert into Lecturers values (8544,'Zainatul Shima','Abdullah','Asst. Prof','shima@iium.edu.my','IT');

--insert into classroom table
insert into Classroom values (121,50,'E5-121','Under Maintenance',NULL);
insert into Classroom values (122,40,'E4-122','Test',40);
insert into Classroom values (125,35,'D4-125','Class',35);
insert into Classroom values (89,40,'B3-89','Class',35);
insert into Classroom values (101,40,'C4-101','Quiz',40);
insert into Classroom values (117,50,'E4-117','Under Maintenance',NULL);
insert into Classroom values (118,40,'E4-118','Discussion',0);
insert into Classroom values (107,60,'C2-107','Class',0);
insert into Classroom values (78,50,'B2-78','Test',50);
insert into Classroom values (98,35,'B5-98','Quiz',35);

--insert into maintenance
insert into maintenance values (1234,'Halim','Khan','halim@gmail.com',0138492344);
insert into maintenance values (1123,'Lichi','Ahmed','lichi@gmail.com',0132323244);
insert into maintenance values (1623,'Kacchi','Rahman','kachi@gmail.com',0146592344);
insert into maintenance values (1934,'Onigiri','Sheikh','onigiri@gmail.com',0135764344);
insert into maintenance values (1424,'Naruto','Uzumaki','Naruto@gmail.com',0169892344);
insert into maintenance values (1594,'Sasuke','Uchiha','Uchiha@gmail.com',0198672344);
insert into maintenance values (1093,'Ichigo','Kurosaki','Ichigo@gmail.com',0138569344);
insert into maintenance values (1034,'Izuke','Midoriya','Izuke@gmail.com',0100112344);
insert into maintenance values (1991,'Mikasa','Ackerman','Mikasa@gmail.com',0139823244);
insert into maintenance values (1221,'Gintoki','Sakata','Gintoki@gmail.com',01380777544);

-- insert into schedule
insert into schedule values (null,null,121,1594,'Under Maintenance',null,null);
insert into schedule values (null,6184,122,null,'Test',To_DATE('2020-Aug-01 14:00:00','YYYY-MON-DD HH24:MI:SS'),To_DATE('2020-JUNE-01 17:00:00','YYYY-MON-DD HH24:MI:SS'));
insert into schedule values (null,2356,125,null,'class',TIMESTAMP '2020-08-02 10:00:00',TIMESTAMP '2020-08-02 12:00:00');
insert into schedule values (null,2341,89,null,'class',TIMESTAMP '2020-07-26 14:00:00',TIMESTAMP '2020-07-26 16:45:00');
insert into schedule values (null,8544,101,null,'Quiz',TIMESTAMP '2020-07-27 17:00:00',TIMESTAMP '2020-07-27 19:00:00');
insert into schedule values (null,null,117,1034,'Under Maintenance',NULL,NULL);
insert into schedule values (1721485,null,118,null,'Discussion',TIMESTAMP '2020-08-01 08:00:00',TIMESTAMP '2020-08-01 11:00:00');
insert into schedule values (null,6184,107,null,'Class',TIMESTAMP '2020-08-03 20:00:00',TIMESTAMP '2020-08-03 22:25:00');
insert into schedule values (null,5454,78,null,'Test',TIMESTAMP '2020-08-09 12:00:00',TIMESTAMP '2020-08-09 15:00:00');
insert into schedule values (null,3184,98,null,'Quiz',TIMESTAMP '2020-08-08 11:00:00',TIMESTAMP '2020-08-08 12:30:00');
insert into schedule values (null,2341,98,null,'class',TIMESTAMP '2020-07-26 14:00:00',TIMESTAMP '2020-07-26 16:45:00');
insert into schedule values (null,2356,122,null,'class',TIMESTAMP '2020-08-02 10:00:00',TIMESTAMP '2020-08-02 12:00:00');
insert into schedule values (1721485,null,118,null,'Discussion',TIMESTAMP '2020-08-01 08:00:00',TIMESTAMP '2020-08-01 11:00:00');
insert into schedule values (1723232,null,118,null,'Discussion',TIMESTAMP '2020-06-06 10:00:00',TIMESTAMP '2020-06-06 14:00:00');
insert into schedule values (1712235,null,118,null,'Discussion',TIMESTAMP '2020-08-07 14:00:00',TIMESTAMP '2020-08-07 15:00:00');
insert into schedule values (null,5928,98,null,'class',TIMESTAMP '2020-08-10 15:00:00',TIMESTAMP '2020-08-10 16:45:00');
insert into schedule values (null,6184,98,null,'class',TIMESTAMP '2020-07-25 13:00:00',TIMESTAMP '2020-07-25 16:45:00');
insert into schedule values (null,6184,118,null,'class',TIMESTAMP '2020-07-15 13:00:00',TIMESTAMP '2020-07-15 16:45:00');

commit;
