USE damnfinebrew_db;

CREATE TABLE blog_post (
	id INT NOT NULL AUTO_INCREMENT,
	title VARCHAR(500) NOT NULL,
	posted_date DATETIME NOT NULL,
	description VARCHAR(5000) NOT NULL,
	thumb_image VARCHAR(100) NOT NULL,
	content VARCHAR(40000) NOT NULL,
	visits INT NOT NULL,
	PRIMARY KEY( id )
) ENGINE=InnoDB;