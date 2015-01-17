USE damnfinebrew_db;

CREATE TABLE recipe_steps (
	id INT NOT NULL AUTO_INCREMENT,
	beer_id INT NOT NULL,
	list_order TINYINT,
	step VARCHAR(10000),
	PRIMARY KEY(id)
) ENGINE=InnoDB;