
-- Name: William Villeneuve
-- Course Code: INTN2201
-- Date: April 24, 2014

-- DROP tables to clear out any existing data
DROP TABLE IF EXISTS courses;

-- Create The Table
CREATE TABLE courses(
	course_code		CHAR(8)		 PRIMARY KEY,
	title			CHAR(64)	 NOT NULL,
	weighting		NUMERIC(3,2)
);

-- Insert Records into Table
INSERT INTO courses(course_code, title, weighting) VALUES(
	'COMM3201',
	'Communications I for IT',
	3.00
);

INSERT INTO courses(course_code, title, weighting) VALUES(
	'DBAS1201',
	'Introduction To Databases',
	4.00
);

INSERT INTO courses(course_code, title, weighting) VALUES(
	'DCOM1100',
	'Data Communications & Networking I',
	4.00
);

INSERT INTO courses(course_code, title, weighting) VALUES(
	'GNED1109',
	'General Education Elective',
	3.00
);

INSERT INTO courses(course_code, title, weighting) VALUES(
	'MATH1110',
	'Mathematics For IT',
	3.00
);

INSERT INTO courses(course_code, title, weighting) VALUES(
	'PROG1205',
	'Introduction To Programming',
	4.00
);



-- List of Courses
SELECT * FROM courses;