-- Dump of database dbsametrodetroit
-- 
-- Date: 2005-01-27 13:21:27 -0500
-- User: Chris Freitag
-- 
-- Dump by YourSQL (http://www.mludi.net/YourSQL/) 

CREATE TABLE Counties (
  County text NOT NULL
) TYPE=MyISAM;

CREATE TABLE Forum (
  Id int(50) NOT NULL auto_increment,
  Name text,
  Date text,
  Message text,
  KEY Id (Id)
) TYPE=MyISAM;

CREATE TABLE Meetings (
  Id int(3) NOT NULL auto_increment,
  County text,
  City text,
  Day text,
  Time text,
  Specialinterest text,
  Location text,
  Address text,
  Primarycontact text,
  Primaryphone text,
  Secondarycontact text,
  Secondaryphone text,
  PRIMARY KEY  (Id)
) TYPE=MyISAM;

INSERT INTO Counties (County) VALUES ('Essex');

INSERT INTO Counties (County) VALUES ('Macomb');

INSERT INTO Counties (County) VALUES ('Monroe');

INSERT INTO Counties (County) VALUES ('Oakland');

INSERT INTO Counties (County) VALUES ('Washtenaw');

INSERT INTO Counties (County) VALUES ('Wayne');

INSERT INTO Forum (Id,Name,Date,Message) VALUES (1,'Chris Freitag','12/07/04','Writing Code for the Cause!');

INSERT INTO Forum (Id,Name,Date,Message) VALUES (2,'Chris Freitag','12/21/04','Hi Sue,\r\n\r\nHope your Christams is wonderful as well. Click on the post button and you can add a message. I though this could more or less be a web log where people can share ideas and others can come to check it out, and hopefully learn something in the process. Mele Kalikimaka.');

INSERT INTO Forum (Id,Name,Date,Message) VALUES (3,'Sue','12/29/04','I think this web site is great!  Thanks to SF Design and Chris Freitag!  Great job!');

INSERT INTO Forum (Id,Name,Date,Message) VALUES (9,'Chris Freitag','12/30/04','Testing Date');

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (1,'Essex','Windsor','1st & 3rd Thursdays','7:30pm -',NULL,'Canadian Mental Health Association','1400 Windsor Ave at Ellis','Bill','(519) 254-7357',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (2,'Macomb','Mount Clemens','1st & 3rd Wednesdays','7:30pm - 9:30 pm',NULL,'St. Joseph Mercy Hospital East Room C','2150 North Ave, Bayley','Sue','(313) 884-0538',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (3,'Macomb','New Baltimore','2nd & 4th Sundays','2pm - 4pm',NULL,'Harbor Oaks/PCM Hospital','35031 23 Mile Road','Linda','(586) 749-3017',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (4,'Macomb','Warren','2nd & 4th Wednesdays','7:30pm - 9:30pm',NULL,'St. John-Macomb Hospital, Physical Rehab Bldg, Conf Room B ','12000 12 Mile Road at Hoover','Gary','(313) 532-4217',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (5,'Monroe','Monroe','2nd & 3rd Mondays','7pm - 9pm',NULL,'Sieb Conf Room in Nursing Center','700 Stuart Rd','Cyndy','(734) 289-1875',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (6,'Oakland','Novi','1st & 3rd Wednesdays','7:30pm - 9:00pm','Young Adults/Adults','Providence Medical Center','47601 Grand River Ave Conf Room B, Beck Rd. exit off I-96','Vicki','(248) 960-1288',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (9,'Wayne','Detroit','Every Monday','1:30pm - 2:30pm',NULL,'A Place of Our Own Clubhouse','Goodwill Industries, 9622 Grand River Ave','Mary Ann','(734) 284-5563','Gary','(313)532-4217');

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (10,'Washtenaw','Ypsilanti','2nd & 4th Wednesday','7:00pm - 9:00pm',NULL,'St. Joseph Hospital, Senior Health Building Room W 1335','5361 McAulry Dr.','Jenny','(734) 485-3870',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (11,'Oakland','Rochester Hills','1st & 3rd Wednesdays','7:00pm - 9:00pm',NULL,'Crittendon Hospital','2nd Floor Outpatient Conf Room','Maggie','(248) 656-0876',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (12,'Oakland','Royal Oak','1st & 3rd Thursdays','7:30pm - 9:00pm','Adolescents/YoungAdults/Adults','Beaumont Hospital','Administration Bldg 1st floor, Dining Room A/B','Bob','(248) 689-6110',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (13,'Oakland','Bloomfield Hills','2nd Monday','7:00pm - 9:30pm','Family Members Group','Common Ground Sanctuary','1410 S.Telegraph Rd','Ted/Evelyn','(248) 644-0253',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (14,'Oakland','Bloomfield Hills','4th Monday','7:00pm - 9:30pm','Family Members Group','Common Ground Sanctuary','1410 S.Telegraph Rd','Cheryl','(248) 661-5684',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (15,'Wayne','Wyandotte','2nd & 4th Tuesdays','7:30pm - 9:30pm',NULL,'First Presbyterian Church','2250 Oak St at 23rd (enter via parking lot off 23rd)','Cyndy','(734) 289-1875',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (16,'Wayne','Detroit Eastside','1st & 3rd Sundays','2pm - 4pm',NULL,'St. John Hospital, Medical Education Classroom','22101 Moross at Mack, off rear parking lot','Don','(586) 776-0695','Loretta','(586) 778-1778');

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (17,'Wayne','Livonia','1st, 3rd & 5th Thursdays','6:00pm - 8:00pm',NULL,'Lincoln Behoavioral Services','27595 Schoolcraft (Jeffries Commerce Center)',NULL,'(734) 425-3777',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (18,'Wayne','Redford','1st & 3rd Fridays','6:00pm - 7:30pm',NULL,'Redford Plaza','9315 Telegraph Rd','Steve','(734) 722-7556',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (19,'Wayne','Southwest Detroit','1st & 3rd Wednesdays','3pm - 4pm',NULL,'Fisher Clubhouse','2640 W Vernor Hwy','Mary Ann','(734) 284-5563',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (20,'Wayne','Taylor','1st, 3rd & 5th Tuesdays','7:30pm - 9:30pm',NULL,'Oakwood Hospital-Heritage Center, 1st Floor Day Treatment Room','Telegraph 2 blks South of Wick Rd','Cyndy','(734) 289-1875',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (21,'Wayne','Westland','1st, 3rd & 5th Mondays','7:30pm - 9:30pm',NULL,'Kirk of Our Savior Church (Upstairs Lobby)','3666 Cherry Hill Rd between Wayne and Newburgh Roads','Kathryn','(734) 667-2860',NULL,NULL);

INSERT INTO Meetings (Id,County,City,Day,Time,Specialinterest,Location,Address,Primarycontact,Primaryphone,Secondarycontact,Secondaryphone) VALUES (22,'Wayne','Westland','2nd & 4th Mondays','7:30pm - 9:30pm','Unipolar Depression Only','Kirk of Our Savior Church (Upstairs Lobby)','3666 Cherry Hill Rd between Wayne and Newburgh Roads','Kathryn','(734) 667-2860',NULL,NULL);

