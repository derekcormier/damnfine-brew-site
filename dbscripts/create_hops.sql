USE damnfinebrew_db;

CREATE TABLE hops (
	id INT NOT NULL AUTO_INCREMENT,
	beer_id INT NOT NULL,
	list_order TINYINT,
	hop VARCHAR(200),
	amount VARCHAR(30),
	style VARCHAR(30),
	timing VARCHAR(30),
	used VARCHAR(30),
	PRIMARY KEY( id )
) ENGINE=InnoDB;