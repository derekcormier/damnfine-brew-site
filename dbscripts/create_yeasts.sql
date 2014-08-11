USE damnfinebrew_db;

CREATE TABLE yeasts (
	id INT NOT NULL AUTO_INCREMENT,
	beer_id INT NOT NULL,
	list_order TINYINT,
	name VARCHAR(200),
	company VARCHAR(200),
	style VARCHAR(30),
	PRIMARY KEY( id )
) ENGINE=InnoDB;