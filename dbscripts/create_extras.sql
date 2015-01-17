USE damnfinebrew_db;

CREATE TABLE extras (
	id INT NOT NULL AUTO_INCREMENT,
	beer_id INT NOT NULL,
	list_order TINYINT,
	name VARCHAR(200),
	amount VARCHAR(200),
	used VARCHAR(200),
	PRIMARY KEY( id )
) ENGINE=InnoDB;