USE damnfinebrew_db;

CREATE TABLE srm_color (
	srm TINYINT NOT NULL,
	color VARCHAR(7) NOT NULL,
	PRIMARY KEY( srm )
) ENGINE=InnoDB;

INSERT INTO srm_color (color, srm) VALUES ('rgb(250, 250, 160)', 1);
INSERT INTO srm_color (color, srm) VALUES ('rgb(250, 250, 105)', 2);
INSERT INTO srm_color (color, srm) VALUES ('rgb(245, 246, 50)', 3);
INSERT INTO srm_color (color, srm) VALUES ('rgb(235, 228, 47)', 4);
INSERT INTO srm_color (color, srm) VALUES ('rgb(225, 208, 50)', 5);
INSERT INTO srm_color (color, srm) VALUES ('rgb(215, 188, 52)', 6);
INSERT INTO srm_color (color, srm) VALUES ('rgb(205, 168, 55)', 7);
INSERT INTO srm_color (color, srm) VALUES ('rgb(198, 148, 56)', 8);
INSERT INTO srm_color (color, srm) VALUES ('rgb(193, 136, 56)', 9);
INSERT INTO srm_color (color, srm) VALUES ('rgb(192, 129, 56)', 10);
INSERT INTO srm_color (color, srm) VALUES ('rgb(192, 121, 56)', 11);
INSERT INTO srm_color (color, srm) VALUES ('rgb(192, 114, 56)', 12);
INSERT INTO srm_color (color, srm) VALUES ('rgb(190, 106, 56)', 13);
INSERT INTO srm_color (color, srm) VALUES ('rgb(180, 99, 56)', 14);
INSERT INTO srm_color (color, srm) VALUES ('rgb(167, 91, 54)', 15);
INSERT INTO srm_color (color, srm) VALUES ('rgb(152, 84, 51)', 16);
INSERT INTO srm_color (color, srm) VALUES ('rgb(138, 75, 48)', 17);
INSERT INTO srm_color (color, srm) VALUES ('rgb(124, 68, 41)', 18);
INSERT INTO srm_color (color, srm) VALUES ('rgb(109, 60, 34)', 19);
INSERT INTO srm_color (color, srm) VALUES ('rgb(95, 53, 23)', 20);
INSERT INTO srm_color (color, srm) VALUES ('rgb(81, 45, 11)', 21);
INSERT INTO srm_color (color, srm) VALUES ('rgb(67, 38, 12)', 22);
INSERT INTO srm_color (color, srm) VALUES ('rgb(52, 30, 17)', 23);
INSERT INTO srm_color (color, srm) VALUES ('rgb(38, 23, 22)', 24);
INSERT INTO srm_color (color, srm) VALUES ('rgb(33, 19, 18)', 25);
INSERT INTO srm_color (color, srm) VALUES ('rgb(28, 16, 15)', 26);
INSERT INTO srm_color (color, srm) VALUES ('rgb(23, 13, 12)', 27);
INSERT INTO srm_color (color, srm) VALUES ('rgb(18, 9, 8)', 28);
INSERT INTO srm_color (color, srm) VALUES ('rgb(13, 6, 5)', 29);
INSERT INTO srm_color (color, srm) VALUES ('rgb(8, 3, 2)', 30);

INSERT INTO srm_color (color, srm) VALUES ('rgb(232, 89, 32)', 0);