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


# Welcome Post
INSERT INTO blog_post (title, posted_date, description, thumb_image, content, visits) 
VALUES ('Damnfine Blog is live!', NOW(), 'The blog is finally live, and ready to bring you some neat content.', 'bottles.png', '<p>Hello, and welcome to the Damnfine Blog, where you can read about my brewing exploits and hijinks. I hope to keep you, the reader both entertained and engaged as we explore the wonderful, mystical world of homebrewing.</p><p>Some of the content you can expect here is, perhaps, a different brewing process I used, or maybe a mistake I made that you can prevent. I might talk about how I make my labels, if enough interest is shown. Maybe a beer-related recipe, here or there, (I do make some pretty good beer bread, after all). Maybe something that will completely catch the reader off guard. Maybe some technical stuff. I don\'t know, it could happen.</p><p>Although the Damnfine website is not yet complete, I will be giving updates on new features as they develop. I have many features planned for the website, and a full-time job, so please be patient!</p><p>If you have any ideas, criticism, or questions, please don\'t hesistate to <a href="http://www.damnfinebrew.com/contact">contact me</a>. There will soon be a commenting system, but until then, this is the best way to drop me a line.</p><p>Thank you for taking the time to read this, I have put a great deal of effort into my site and I am honored you have chosen to visit!</p>', 0);

# Test Post
INSERT INTO blog_post (title, posted_date, description, thumb_image, content, visits) 
VALUES ('THIS IS NOT A TEST!!', NOW(), 'Actually, it is just a test. I need more stuff to fill up my page.', 'bottles.png', '<p>"If only, if only", the woodpecker sighs, "the bark on the tree was as soft as the skies". the wolf waits below, hungry and lonely, and cries to the moon, "If only if only"</p>', 0);
