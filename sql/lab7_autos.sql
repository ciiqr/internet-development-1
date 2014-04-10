-- Name: William Villeneuve
-- Course Code: INTN2201
-- Date: March 24, 2014

-- DROP tables to clear out any existing data
DROP TABLE IF EXISTS auto_info;

-- Create The Table
CREATE TABLE auto_info(
	id_num INTEGER PRIMARY KEY,
	make	CHAR(15) NOT NULL,
	model	CHAR(20) NOT NULL,
	year	INTEGER	 NOT NULL,
	owner	CHAR(20),
	msrp	MONEY	 NOT NULL,
	purchase_date DATE
);

-- Insert Records into Table
INSERT INTO auto_info(id_num, make, model, year, msrp) VALUES(
		1,
		'BMW',
		'i8',
		2015,
		136000
	);
INSERT INTO auto_info(id_num, make, model, year, msrp) VALUES(
		2,
		'Aston Martin',
		'DBS',
		2012,
		275000
	);
INSERT INTO auto_info(id_num, make, model, year, msrp) VALUES(
		3,
		'Ford',
		'Mustang',
		1970,
		25000
	);
INSERT INTO auto_info(id_num, make, model, year, msrp) VALUES(
		4,
		'Nissan',
		'Z',
		2016,
		35000
	);
INSERT INTO auto_info(id_num, make, model, year, msrp) VALUES(
		5,
		'Dodge',
		'Ram 1500',
		2014,
		19995
	);

-- List of Automobilesw
SELECT make, model, year, msrp
	FROM auto_info
	ORDER BY year ASC;


-- Favourite
UPDATE auto_info SET owner='William Villeneuve'
	WHERE id_num=1;
	-- WHERE make='BMW' AND model='i8';

-- Least Favourite
DELETE FROM auto_info
	WHERE id_num=2;
	-- WHERE make='Aston Martin' AND model='DBS'