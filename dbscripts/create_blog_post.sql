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
VALUES ('Damnfine Blog is live!', NOW(), 'The blog is finally live, and ready to bring you some neat content.', 'bottles.png', 'Hello, and welcome to the Damnfine Blog, where you can read about my brewing exploits and hijinks. I hope to keep you, the reader both entertained and engaged as we explore the wonderful, mystical world of homebrewing.

Some of the content you can expect here is, perhaps, a different brewing process I used, or maybe a mistake I made that you can prevent. I might talk about how I make my labels, if enough interest is shown. Maybe a beer-related recipe, here or there, (I do make some pretty good beer bread, after all). Maybe something that will completely catch the reader off guard. Maybe some technical stuff. I don\'t know, it could happen.

Although the Damnfine website is not yet complete, I will be giving updates on new features as they develop. I have many features planned for the website, and a full-time job, so please be patient!

If you have any ideas, criticism, or questions, please don\'t hesistate to [contact me](http://www.damnfinebrew.com/contact). There will soon be a commenting system, but until then, this is the best way to drop me a line.

Thank you for taking the time to read this, I have put a great deal of effort into my site and I am honored you have chosen to visit!', 0);

# Test Post
INSERT INTO blog_post (title, posted_date, description, thumb_image, content, visits) 
VALUES ('THIS IS NOT A TEST!!', NOW(), 'Actually, it is just a test. I need more stuff to fill up my page.', 'bottles.png', '<p>"If only, if only", the woodpecker sighs, "the bark on the tree was as soft as the skies". the wolf waits below, hungry and lonely, and cries to the moon, "If only if only"</p>', 0);


UPDATE blog_post
SET content='Hello, and welcome to the Damnfine Blog, where you can read about my brewing exploits and hijinks. I hope to keep you, the reader both entertained and engaged as we explore the wonderful, mystical world of homebrewing.

Some of the content you can expect here is, perhaps, a different brewing process I used, or maybe a mistake I made that you can prevent. I might talk about how I make my labels, if enough interest is shown. Maybe a beer-related recipe, here or there, (I do make some pretty good beer bread, after all). Maybe something that will completely catch the reader off guard. Maybe some technical stuff. I don\'t know, it could happen.

Although the Damnfine website is not yet complete, I will be giving updates on new features as they develop. I have many features planned for the website, and a full-time job, so please be patient!

If you have any ideas, criticism, or questions, please don\'t hesistate to [contact me](http://www.damnfinebrew.com/contact). There will soon be a commenting system, but until then, this is the best way to drop me a line.

Thank you for taking the time to read this, I have put a great deal of effort into my site and I am honored you have chosen to visit!' 
WHERE id=5;


INSERT INTO blog_post (title, posted_date, description, thumb_image, content, visits)
VALUES ('Multi-Step Infusion With a Mash Tun', NOW(), 'For those limited to using a cooler for mashing, here\'s how to do multi-step infusion', 'mashtun.png', 'Recently, I decided I was going to make brew a weizenbock. The recipe I created required the use of quite a bit of wheat malt. A brewer recommended that I try a protein rest to ensure my efficiency was high enough to meet my desired O.G.

For those who are unaware, protein rest requires a fairly low mash temperature as compared to saccharification rest. If you are like me, and use a cooler for mashing, it\'s not easy to heat your mash from protein rest temperature to saccharification rest temperature, unlike using a keggle on a burner.

Some people get around this issue by pouring the entire contents of their mash tun into a kettle and heat it, returning to their mash tun when it\'s the right temperature. I am a super klutz, so the thought of getting hot sticky wort all over me made this a less-than-ideal option for me. Instead, I stumbled upon [John Palmer\'s How to Brew - Chapter 16.3 - Calculations for Boiling Water Additions](http://www.howtobrew.com/section3/chapter16-3.html). Here, Palmer explains how to calculate the amount and temperature of water to add to your mash to bring it to the proper temperature

The equations that Palmer references are fairly simple to use:

    Initial Infusion:
    Tw = (.2/r)(T2 - T1) + T2
    
    Mash Infusion:
    Wa = (T2 - T1)(.2G + Wm)/(Tw - T2)
    
    Where:
        Tw = Strike water temperature
        Wa = Amount of water to add in quarts
        Wm = Total amount of water already in the mash in quarts
        T1 = Initial temperature in degrees F of the mash
        T2 = Target temperature in degrees F of the mash
        G = Amount of grain in the mash in lbs.
        r = Ratio of water to grain in the mash (in quarts/lb.)

I applied these equations to my mash schedule:

1. Protein Rest for 30 minutes @ 130
2. Saccharification Rest for 60 minutes @ 152
3. Batch Sparge @ 170

## Strike Water Temperature Calculation

First, to calculate the strike water temperature, you need to choose what your water to grain ratio will be (everything else, you should already know). For my purposes, I chose to have a 1.5 quarts/lb ratio for protein rest.

    Tw = ?
    r = 1.5
    T2 = 130
    T1 = 70 (grain at room temperature)
    
    Initial Infusion:
    Tw = (.2/r)(T2 - T1) + T2
    Tw = (.2/1.25)(130 - 70) + 130
    Tw = (0.16)(60) + 130
    Tw = 9.6 + 130
    Tw = 139.6

Since I knew I had 12 lbs. of grain, and my water to grain ratio is 1.25, we know that I need 15 quarts or 3.75 gallons of water at 138&deg;F. 

## Second Infusion Boiling Water Volume

Now comes the more difficult part, bringing the mash temperature up to saccharification rest temperature. In order to do this, we are going to use the second equation given by Palmer:

    Wa = ?
    T2 = 152
    T1 = 130
    G = 12 lbs.
    Wm = 18 quarts
    Tw = 210 (just below boiling)
    
    Mash Infusion:
    Wa = (T2 - T1)(.2G + Wm)/(Tw - T2)
    Wa = (152 - 130)((.2 * 12) + 18)/(210 - 152)
    Wa = (22)(2.4 + 18)/58
    Wa = (22)(20.4)/58
    Wa = 448.8/58
    Wa = 7.74 quarts

So, in order to bring the mash to 152&deg;F, I need to add 7.74 quarts or 1.94 gallons of near-boiling hot water to the mash. 

## Sparge Water Volume

Now, we need to find out how much water we need to add to get our desired pre-boil volume. This is a much more common sense equation that I\'m hopefully smart enough to figure out:

	Initial Infusion:
    Ws = Vp - (Wm - (Vds + (G * Ag)))
    
    Where:
        Ws = Amount of sparge water in quarts
        Vp = Desired per-boil volume of runnings in quarts
        Wm = Total amount of water already in the mash in quarts
        Vds = Dead space in mash tun
        G = Amount of grain in the mash in lbs.
        Ag = Grain absobtion rate (quarts per lb.)
        
Using the known values for my situation:

    Ws = ?
    Vp = 20 quarts (5 gallons)
    Wm = 22.74 quarts
    Vds = 2 quarts (0.5 gallons)
    G = 12 lbs.
    Ag = 0.5 quarts/lb. (0.125 gallons/lb.)
    
    Sparge Water:
    Ws = Vp - (Wm - (Vds + (G * Ag)))
    Ws = 20 - (22.74 - (2 + (12 * 0.5))
    Ws = 20 - (22.74 - (2 + (6))
    Ws = 20 - (22.74 - 8)
    Ws = 20 - 14.74
    Ws = 5.26 quarts
    
So, for sparge, we\'ll add 5.26 quarts, or 1.32 gallons of water at 170&deg;F.

## Our hard work pays off!

So, to summarize the calculations:

1. Add 3.75 gallons of water at 138&deg;F for the first infusion
2. Add 1.94 gallons of near-boiling water for the second infusion
3. Collect first runnings
4. Add 1.32 gallons of water at 170&deg;F for sparge

That\'s it! Be sure to double-check your work! Better to spend a little more time to get it right the first time.', 0);