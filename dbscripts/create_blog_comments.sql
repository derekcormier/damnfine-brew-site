USE damnfinebrew_db;

CREATE TABLE blog_comment (
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	post_id INT NOT NULL,
	posted_date DATETIME NOT NULL,
	name VARCHAR(100) NOT NULL,
	email VARCHAR(200) NOT NULL,
	comment VARCHAR(5000) NOT NULL,
	parent BIGINT UNSIGNED,
	reply_level INT NOT NULL,
	approved boolean NOT NULL,
	helpful_count INT NOT NULL,
	unhelpful_count INT NOT NULL,
	PRIMARY KEY( id )
) ENGINE=InnoDB;


INSERT INTO blog_comment (post_id, posted_date, name, email, comment, reply_level, approved, helpful_count, unhelpful_count)
VALUES (12, NOW(), 'Robert Finnegan', 'robert.finnegan@mailinator.com', 'Panera is simply the best place to go for fresh baked goods and great pals! :o)', 1, true, 0, 0);