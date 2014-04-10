-- Name: William Villeneuve
-- Course Code: INTN2201
-- Date: April 2, 2014

-- DROP tables to clear out any existing data
DROP TABLE IF EXISTS users;

-- Create The Table
CREATE TABLE users(
	id				CHAR(20)	PRIMARY KEY,
	password		CHAR(15)	NOT NULL,
	first_name		CHAR(20)	NOT NULL,
	last_name		CHAR(30)	NOT NULL,
	email_address	CHAR(255)	NOT NULL,
	enrol_date		DATE		NOT NULL,
	last_access		DATE		NOT NULL
);

-- Insert Records into Table
INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'jdoe',
	'testpass',
	'John',
	'Doe',
	'jdoe@durhamcollege.ca',
	'1/1/2014',
	'1/2/2014'
);

INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'william',
	'passwords!',
	'William',
	'Villeneuve',
	'william.villeneuve@dcmail.ca',
	'4/2/2014',
	'4/2/2014'
);

INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'arnottj',
	'purple',
	'Jillian',
	'Arnott',
	'jillian.arnott@dcmail.ca',
	'4/2/2014',
	'4/2/2014'
);

INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'harwoodt',
	'longtoes',
	'Tom',
	'Harwood',
	'thomas.harwood@dcmail.ca',
	'4/2/2014',
	'4/2/2014'
);

INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'deanj',
	'princess',
	'Jessica',
	'Dean',
	'jessica.dean@dcmail.ca',
	'4/2/2014',
	'4/2/2014'
);

-- List of Default Users
SELECT * FROM users;