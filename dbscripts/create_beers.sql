USE damnfinebrew_db;

CREATE TABLE beers (
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(128) NOT NULL,
	label_image VARCHAR(50) NOT NULL,
	abv DECIMAL(2,1),
	ibu SMALLINT,
	srm TINYINT,
	highlight_color VARCHAR(7) NOT NULL,
	description VARCHAR(10000) NOT NULL,
	PRIMARY KEY( id )
) ENGINE=InnoDB;

# MacGreggor's Brew Pale Ale:
INSERT INTO beers (name, label_image, abv, ibu, srm, highlight_color, description) VALUES ('MacGreggor\'s Brew Pale Ale', 'mcgbrew.svg', 5.5, 34, 9, '#6b754a', '<p>MacGreggors Brew was a long time coming. The idea came about after a long night of partaking in beverages, jamming, and reminiscing with good friends in the usual haunt: MacGreggors.</p><p>MacGreggors is not a fancy place, not a quaint pub on the edge of town, not a friend\'s basement-turned-man-cave, not even a place with heat for the sub-zero Maine winter nights. MacGreggors was a garage, a dilapidated one at that, filled with old junk, empty cans, and 3rd generation hand-me-down furniture. Because the side door didn\'t work, we used the garage door. When the garage door would open no longer, came in through the window. Our only luxury was power, for light at night. It wasn\t much, but then again, we weren\'t fussy. MacGreggors was a place that we loved. Though the MacGreggors crew have all gone down their own paths, we can still find common ground in MacGreggors.</p><p>On this particular night, among other crazy ideas, we dreamed up MacGreggors Brew. We would set up a kegerator, and brew our own beer, which we could draw from the tap on long nights like that one. The recipe would live on and immortalize our meeting place.</p></br><p>For a longer time than I care to remember, I wanted to begin brewing my own beer. The idea of crafting my own delicious potions like a modern-day alchemist was exciting and new. However, I spent years standing on the brink, convincing myself to take the plunge.</p><p>On December 5th, a date that a friend would later point out was coincidentally the day prohibition ended in the United States, I had mustered the nerve and the funds to buy a starter kit. I had ventured to the nearest homebrew supply shop in my area, <a href="http://www.borderbrewsupply.com/">Border Brew Supply in Salem, NH</a> (which is an excellent place that I would recommend to anyone in the area). The stock amazed me, and the owner was eager to help me get going.</p><p>He recommended that I start out with a beer kit, and I decided on a <a href="http://www.brewersbestkits.com/pdf/1013%202013%20American%20Pale%20Ale.pdf">Brewer\'s Best American Pale Ale kit</a>. "Follow the instructions, and don\'t freak out", were my instructions. He gave me his business card and told me to call him if I had any questions.</p><p>I was so excited to begin that I brewed it the second I got home. I followed the directions to a T, besides the freaking out part, but everything turned out just fine. This would be our MacGreggors brew.</p></br><p>Almost a month later, I affixed some cheeky little labels I had made to the bottles, and packaged up my beer for a long trip. I was heading to the old stomping grounds, MacGreggors, to bestow upon my friends the realization of a crazy dream that we all shared.</p><p>Needless to say, the reception was a great one. My friends had no idea that this was the way and were shocked. "This is the best gift I ever got", one of my friends said to me, and that meant the world to me. My friends meant the world to me. MacGreggors meant the world to me. This was how I showed it.</p>');

# Lights Out Black IPA
INSERT INTO beers (name, label_image, abv, ibu, srm, highlight_color, description) VALUES ('Lights Out Black IPA', 'lights.svg', 6, 83, 30, '#80B3FF', 'This is just a test description. This will be replaced with a real one soon.');

# Single C Chocolate Porter
INSERT INTO beers (name, label_image, abv, ibu, srm, highlight_color, description) VALUES ('Single C Chocolate Porter', 'singlec.svg', 6.8, 26, 25, '#784421', 'This is just a test description. This will be replaced with a real one soon.');

# Double C Chocolate Cherry Porter
INSERT INTO beers (name, label_image, abv, ibu, srm, highlight_color, description) VALUES ('Double C Chocolate Porter', 'doublec.svg', 6.8, 26, 25, '#953532', 'This is just a test description. This will be replaced with a real one soon.');

# Triple C Chocolate Cherry Chili Porter
INSERT INTO beers (name, label_image, abv, ibu, srm, highlight_color, description) VALUES ('Triple C Chocolate Cherry Chili Porter', 'triplec.svg', 6.8, 26, 25, '#9d0b0b', 'This is just a test description. This will be replaced with a real one soon.');

# Rye Raven Rye Pale Ale
INSERT INTO beers (name, label_image, abv, ibu, srm, highlight_color, description) VALUES ('Rye Raven Rye Pale Ale', 'raven.svg', 5.2, 35, 6, '#ff7f2a', 'This is just a test description. This will be replaced with a real one soon.');

# Transfusion Bloody Beer
INSERT INTO beers (name, label_image, abv, ibu, srm, highlight_color, description) VALUES ('Transfusion Bloody Beer', 'bloody.svg', null, null, null, '#587b45', 'A foul beer with not-so-subtle notes of black peppercorn and horseradish. Tomato flavor peeks through so faintly that it actually... doesn\'nt. At all. Best paired with antacid and a breath mint.');

# Cold! Refreshing! Grapefruit IPA
INSERT INTO beers (name, label_image, abv, ibu, srm, highlight_color, description) VALUES ('Cold! Refreshing! Grapefruit IPA', 'cold.svg', 6.8, 52, 8, '#db593f', 'A classic IPA style with a hint of grapefruit flavor, ');




UPDATE beers SET description='MacGreggor\'s Brew was a long time coming. The idea came about after a long night of partaking in beverages, jamming, and reminiscing with good friends in the usual haunt: MacGreggor\'s.

MacGreggor\'s is not a fancy place, not a quaint pub on the edge of town, not a friend\'s basement-turned-man-cave, not even a place with heat for the sub-zero Maine winter nights. MacGreggor\'s was a garage, a dilapidated one at that, filled with old junk, empty cans, and 3rd generation hand-me-down furniture. Because the side door didn\'t work, we used the garage door. When the garage door would open no longer, came in through the window. Our only luxury was power, for light at night. It wasn\'t much, but then again, we weren\'t fussy. MacGreggor\'s was a place that we loved. Though the MacGreggor\'s crew have all gone down their own paths, we can still find common ground in MacGreggor\'s.

On this particular night, among other crazy ideas, we dreamed up MacGreggor\'s Brew. We would set up a kegerator, and brew our own beer, which we could draw from the tap on long nights like that one. The recipe would live on and immortalize our meeting place.

![The first glass of MacGreggor\'s Brew Pale Ale.](./images/stories/macstory-pour.jpg)<div class="caption">The first glass of MacGreggor\'s Brew Pale Ale.</div>

For a longer time than I care to remember, I wanted to begin brewing my own beer. The idea of crafting my own delicious potions like a modern-day alchemist was exciting and new. However, I spent years standing on the brink, convincing myself to take the plunge.

On December 5th, a date that a friend would later point out was coincidentally the day prohibition ended in the United States, I had mustered the nerve and the funds to buy a starter kit. I had ventured to the nearest homebrew supply shop in my area, [Border Brew Supply in Salem, NH](http://www.borderbrewsupply.com/) (which is an excellent place that I would recommend to anyone in the area). The stock amazed me, and the owner was eager to help me get going.

He recommended that I start out with a beer kit, and I decided on a [Brewer\'s Best American Pale Ale kit](http://www.brewersbestkits.com/pdf/1013%202013%20American%20Pale%20Ale.pdf). "Follow the instructions, and don\'t freak out", were my instructions. He gave me his business card and told me to call him if I had any questions.

I was so excited to begin that I brewed it the second I got home. I followed the directions to a T, besides the freaking out part, but everything turned out just fine. This would be our MacGreggor\'s brew

![All of the beer, bottled.](./images/stories/macstory-bottles.jpg)<div class="caption">All of the beer, bottled.</div>

Almost a month later, I affixed some cheeky little labels I had made to the bottles, and packaged up my beer for a long trip. I was heading to the old stomping grounds, MacGreggor\'s, to bestow upon my friends the realization of a crazy dream that we all shared.

Needless to say, the reception was a great one. My friends had no idea that this was the way and were shocked. "This is the best gift I ever got", one of my friends said to me, and that meant the world to me. My friends meant the world to me. MacGreggor\'s meant the world to me. This was how I showed it.

![The MacGreggor\'s Crew enjoying their ale](./images/stories/macstory-friends.jpg)<div class="caption">The MacGreggor\'s Crew enjoying their ale.</div>' WHERE beer_id=1;