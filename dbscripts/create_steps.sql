USE damnfinebrew_db;

CREATE TABLE recipe_steps (
	id INT NOT NULL AUTO_INCREMENT,
	beer_id INT NOT NULL,
	list_order TINYINT,
	step VARCHAR(10000),
	PRIMARY KEY(id)
) ENGINE=InnoDB;



# MacGreggors Brew Pale Ale

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (1, 1, 'Add at least 2.5 gallons of water to your brew kettle. Adding as close to 6 gallons of water is recommended, but not necessary. The amount of water to add is limited by kettle size. Make sure to leave about 2 gallons of head space to avoid boiling over.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (1, 2, 'Bring the water in your kettle to a temperature between 150&deg; and 165&deg;. Be sure not to bring the water temperature above 170&deg;, as you may introduce off-flavors from tannins. Steep the pound of Caramel 20L in the grain bag for about 20 minutes. Be sure that the grains are not compacted in the bag so that the water can soak the grains evenly. When you remove the bag, let the liquid drain from the bag without squeezing.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (1, 3, 'Follow the Boil Schedule:<table><tr><th  class="boil-ingredient-table">Ingredient</th><th >Amount</th><th >Time</th></tr><tr><td>Light LME</td><td>3.3 lb.</td><td>60 mins.</td></tr><tr><td>Cascade Hops</td><td>2 oz.</td><td>60 mins.</td></tr><tr><td>Light LME</td><td>3.3 lb.</td><td>20 mins.</td></tr><tr><td>Citra Hops</td><td>1 oz.</td><td>5 mins.</td></tr></table>');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (1, 4, 'Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. If necessary, add room temperature water to the fermenter until you have 5 gallons. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock. Ferment for at least a week or until the final gravity is about 1.012. Bottle with priming sugar or keg.');


# Lights Out Black IPA

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (2, 1, 'Add at least 2.5 gallons of water to your brew kettle. Adding as close to 6 gallons of water is recommended, but not necessary. The amount of water to add is limited by kettle size. Make sure to leave about 2 gallons of head space to avoid boiling over.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (2, 2, 'Bring the water in your kettle to a temperature between 150&deg; and 165&deg;. Be sure not to bring the water temperature above 170&deg;, as you may introduce off-flavors from tannins. Steep the crushed grains in the grain bag for about 20 minutes. Be sure that the grains are not compacted in the bag so that the water can soak the grains evenly. When you remove the bag, let the liquid drain from the bag without squeezing.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (2, 3, 'Follow the Boil Schedule:<table><tr><th  class="boil-ingredient-table">Ingredient</th><th >Amount</th><th >Time</th></tr><tr><td>Special Dark LME</td><td>3.3 lb.</td><td>60 mins.</td></tr><tr><td>Amber LME</td><td>3.3 lb.</td><td>60 mins.</td></tr><tr><td>Amber DME</td><td>1 lb.</td><td>60 mins.</td></tr><tr><td>Magnum Hops</td><td>1 oz.</td><td>60 mins.</td></tr><tr><td>Simcoe Hops</td><td>1 oz.</td><td>20 mins.</td></tr><tr><td>Simcoe Hops</td><td>1 oz.</td><td>5 mins.</td></tr></table>');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (2, 4, 'Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. If necessary, add room temperature water to the fermenter until you have 5 gallons. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock. Ferment for at least a week or until the final gravity is about 1.012.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (2, 5, 'Add the 2 oz. of Cascade hops to the fermented beer. Optionally, rerack the beer to a secondary fementer before adding hops.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (2, 6, 'After about a week, bottle with priming sugar or keg.');


# Single C Chocolate Porter

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (3, 1, 'Using the BIAB (Brew-In-A-Bag) method, heat 3 gallons of water to 152&deg;, plus the amount of heat you will lose by adding grain. Place BIAB bag in the water and add grains slowly, mixing to avoid dough balls. Maintain the temperature at 152&deg;. Stir grains occasionally.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (3, 2, 'While mashing, heat 3 gallons of water to 170&deg; for sparging.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (3, 3, 'Once the grain has been mashing for 60 minutes, remove the grain bag and place in a large strainer, or similar object, and hold grains over the kettle. Slowly pour sparge water over the top of the grains and allow the water to drip out into the kettle. Continue to do this until you have about 4 gallons of wort.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (3, 4, 'Follow the Boil Schedule:<table><tr><th  class="boil-ingredient-table">Ingredient</th><th >Amount</th><th >Time</th></tr><tr><td>Fuggles Hops</td><td>0.5 oz.</td><td>60 mins.</td></tr><tr><td>Fuggles Hops</td><td>0.5 oz.</td><td>30 mins.</td></tr><tr><td>Cascade Hops</td><td>0.5 oz.</td><td>5 mins.</td></tr><tr><td>Unsweetened Cocoa Powder</td><td>1 tablespoon</td><td>5 mins.</td></tr></table>');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (3, 5, 'Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock. Ferment for 5 days in the primary fermenter');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (3, 6, 'Three days after your brew day, get two shot glasses or similar containers with little witdth. In one glass add 5 oz. of cocoa nibs. In the other glass, add 3 oz. of Dried Crushed Chipotle Chilis. Cover each of the ingredients with just enough well vodka to cover them. Cover the glasses with plastic wrap and let sit until reracking.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (3, 7, 'Just before reracking, blend two cans (32 fl. oz.) of sour cherries until fairly smooth. Bring the blend to a boil for 10 minutes.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (3, 8, 'After the beer has been fermenting for 5 days, rerack the beer into three separate secondary fermenters. Split the fermented beer evenly among the fermenters.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (3, 9, 'Split the cocoa nibs into three equal parts. Split the cherries into two equal parts. Add one part of the cocoa nibs (including the vokda) to each of the fermenters. Add oine part of the cherries to two of the fermenters. Add the chili pepper (including the vodka) to one of the fermenters with cocoa nibs and cherries.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (3, 10, 'After a week, bottle each of the beers with priming sugar.');


# Double C Chocolate Cherry Porter

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (4, 1, 'Using the BIAB (Brew-In-A-Bag) method, heat 3 gallons of water to 152&deg;, plus the amount of heat you will lose by adding grain. Place BIAB bag in the water and add grains slowly, mixing to avoid dough balls. Maintain the temperature at 152&deg;. Stir grains occasionally.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (4, 2, 'While mashing, heat 3 gallons of water to 170&deg; for sparging.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (4, 3, 'Once the grain has been mashing for 60 minutes, remove the grain bag and place in a large strainer, or similar object, and hold grains over the kettle. Slowly pour sparge water over the top of the grains and allow the water to drip out into the kettle. Continue to do this until you have about 4 gallons of wort.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (4, 4, 'Follow the Boil Schedule:<table><tr><th  class="boil-ingredient-table">Ingredient</th><th >Amount</th><th >Time</th></tr><tr><td>Fuggles Hops</td><td>0.5 oz.</td><td>60 mins.</td></tr><tr><td>Fuggles Hops</td><td>0.5 oz.</td><td>30 mins.</td></tr><tr><td>Cascade Hops</td><td>0.5 oz.</td><td>5 mins.</td></tr><tr><td>Unsweetened Cocoa Powder</td><td>1 tablespoon</td><td>5 mins.</td></tr></table>');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (4, 5, 'Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock. Ferment for 5 days in the primary fermenter');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (4, 6, 'Three days after your brew day, get two shot glasses or similar containers with little witdth. In one glass add 5 oz. of cocoa nibs. In the other glass, add 3 oz. of Dried Crushed Chipotle Chilis. Cover each of the ingredients with just enough well vodka to cover them. Cover the glasses with plastic wrap and let sit until reracking.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (4, 7, 'Just before reracking, blend two cans (32 fl. oz.) of sour cherries until fairly smooth. Bring the blend to a boil for 10 minutes.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (4, 8, 'After the beer has been fermenting for 5 days, rerack the beer into three separate secondary fermenters. Split the fermented beer evenly among the fermenters.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (4, 9, 'Split the cocoa nibs into three equal parts. Split the cherries into two equal parts. Add one part of the cocoa nibs (including the vokda) to each of the fermenters. Add oine part of the cherries to two of the fermenters. Add the chili pepper (including the vodka) to one of the fermenters with cocoa nibs and cherries.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (4, 10, 'After a week, bottle each of the beers with priming sugar.');


# Single C Chocolate Porter

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (5, 1, 'Using the BIAB (Brew-In-A-Bag) method, heat 3 gallons of water to 152&deg;, plus the amount of heat you will lose by adding grain. Place BIAB bag in the water and add grains slowly, mixing to avoid dough balls. Maintain the temperature at 152&deg;. Stir grains occasionally.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (5, 2, 'While mashing, heat 3 gallons of water to 170&deg; for sparging.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (5, 3, 'Once the grain has been mashing for 60 minutes, remove the grain bag and place in a large strainer, or similar object, and hold grains over the kettle. Slowly pour sparge water over the top of the grains and allow the water to drip out into the kettle. Continue to do this until you have about 4 gallons of wort.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (5, 4, 'Follow the Boil Schedule:<table><tr><th  class="boil-ingredient-table">Ingredient</th><th >Amount</th><th >Time</th></tr><tr><td>Fuggles Hops</td><td>0.5 oz.</td><td>60 mins.</td></tr><tr><td>Fuggles Hops</td><td>0.5 oz.</td><td>30 mins.</td></tr><tr><td>Cascade Hops</td><td>0.5 oz.</td><td>5 mins.</td></tr><tr><td>Unsweetened Cocoa Powder</td><td>1 tablespoon</td><td>5 mins.</td></tr></table>');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (5, 5, 'Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock. Ferment for 5 days in the primary fermenter');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (5, 6, 'Three days after your brew day, get two shot glasses or similar containers with little witdth. In one glass add 5 oz. of cocoa nibs. In the other glass, add 3 oz. of Dried Crushed Chipotle Chilis. Cover each of the ingredients with just enough well vodka to cover them. Cover the glasses with plastic wrap and let sit until reracking.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (5, 7, 'Just before reracking, blend two cans (32 fl. oz.) of sour cherries until fairly smooth. Bring the blend to a boil for 10 minutes.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (5, 8, 'After the beer has been fermenting for 5 days, rerack the beer into three separate secondary fermenters. Split the fermented beer evenly among the fermenters.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (5, 9, 'Split the cocoa nibs into three equal parts. Split the cherries into two equal parts. Add one part of the cocoa nibs (including the vokda) to each of the fermenters. Add oine part of the cherries to two of the fermenters. Add the chili pepper (including the vodka) to one of the fermenters with cocoa nibs and cherries.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (5, 10, 'After a week, bottle each of the beers with priming sugar.');


# Rye Raven Rye Pale Ale

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (6, 1, 'Using the BIAB (Brew-In-A-Bag) method, heat 3 gallons of water to 152&deg;, plus the amount of heat you will lose by adding grain. Place BIAB bag in the water and add grains slowly, mixing to avoid dough balls. Maintain the temperature at 152&deg;. Stir grains occasionally.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (6, 2, 'While mashing, heat 3 gallons of water to 170&deg; for sparging.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (6, 3, 'Once the grain has been mashing for 60 minutes, remove the grain bag and place in a large strainer, or similar object, and hold grains over the kettle. Slowly pour sparge water over the top of the grains and allow the water to drip out into the kettle. Continue to do this until you have about 4 gallons of wort.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (6, 4, 'Follow the Boil Schedule:<table><tr><th  class="boil-ingredient-table">Ingredient</th><th >Amount</th><th >Time</th></tr><tr><td>Columbus Hops</td><td>0.25 oz.</td><td>60 mins.</td></tr><tr><td>Columbus Hops</td><td>0.25 oz.</td><td>30 mins.</td></tr></table>');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (6, 5, 'Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (6, 6, 'After fermenting for 3 days, add the 0.5 oz. of Amarillo hops to the fermenter.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (6, 7, 'After fermenting for a week total, bottle beer with priming sugar.');


# Transfusion Bloody Beer

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (7, 1, 'Buy all ingredients.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (7, 2, 'Place directly in toilet.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (7, 3, 'Flush.');


# Cold! Refreshing! Grapefruit IPA

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (8, 1, 'Using a mash tun, mash all grains with 4.5 gallons of water for 60 minutes at 154&deg;.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (8, 2, 'While Mashing, heat 4.5 gallons of sparge water to 170&deg;.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (8, 3, 'Vorlauf until wort runs fairly clear of debris. Empty runnings into kettle.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (8, 4, 'Add all sparge water to the mash tun and mix the grain. Vorlauf immediately until wort runs fairly clear of debris. Empty runnings into kettle.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (8, 5, 'Follow the Boil Schedule:<table><tr><th  class="boil-ingredient-table">Ingredient</th><th >Amount</th><th >Time</th></tr><tr><td>Simcoe Hops</td><td>1 oz.</td><td>60 mins.</td></tr><tr><td>Cascade Hops</td><td>0.5 oz.</td><td>30 mins.</td></tr><tr><td>Amarillo Hops</td><td>0.4 oz.</td><td>5 mins.</td></tr><tr><td>Cascade Hops</td><td>0.4 oz.</td><td>5 mins.</td></tr><tr><td>Simcoe Hops</td><td>0.4 oz.</td><td>5 mins.</td></tr><tr><td>Grapefruit Zest</td><td>1 fruit</td><td>5 mins.</td></tr></table>');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (8, 6, 'Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (8, 7, 'After fermenting for 7 days, add 0.4 oz. of Amarillo hops, 0.4 oz. of Cascade hops, and 0.4 oz. of Simcoe hops to the fermenter.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (8, 8, 'After fermenting for two weeks total, keg beer or bottle beer with priming sugar.');


# Penny Weize Lb. Foolish

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (9, 1, 'Using a mash tun, do a protein rest with 130&deg; water for 30 minutes.'); 

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (9, 2, 'Raise the temperature of the mash to 152&deg; and mash for 60 more minutes.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (9, 3, 'While Mashing, heat sparge water to 170&deg;.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (9, 4, 'Vorlauf until wort runs fairly clear of debris. Empty runnings into kettle.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (9, 5, 'Add all sparge water to the mash tun and mix the grain. Vorlauf immediately until wort runs fairly clear of debris. Empty runnings into kettle.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (9, 6, 'Follow the Boil Schedule:<table><tr><th  class="boil-ingredient-table">Ingredient</th><th >Amount</th><th >Time</th></tr><tr><td>Perle Hops</td><td>0.8 oz.</td><td>60 mins.</td></tr><tr><td>Hallertau Hops</td><td>0.4 oz.</td><td>5 mins.</td></tr></table>');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (9, 7, 'Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (9, 8, 'After fermenting for a week total, bottle beer with priming sugar.');


# MacGreggors Brew: Fall Classic

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (10, 1, 'Cut the butternut squash in half and roast at 400&deg; for about 45 minutes or until soft.'); 

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (10, 2, 'Remove the skin from the squash and chop squash into very small pieces.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (10, 3, 'Using a mash tun, mash all grains with water at 154&deg;. Mix the squash into the mash and mash for 60 minutes.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (10, 4, 'While Mashing, heat sparge water to 170&deg;.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (10, 5, 'Vorlauf until wort runs fairly clear of debris. Empty runnings into kettle.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (10, 6, 'Add all sparge water to the mash tun and mix the grain. Vorlauf immediately until wort runs fairly clear of debris. Empty runnings into kettle.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (10, 7, 'Follow the Boil Schedule:<table><tr><th  class="boil-ingredient-table">Ingredient</th><th >Amount</th><th >Time</th></tr><tr><td>Willamette Hops</td><td>1 oz.</td><td>60 mins.</td></tr><tr><td>Allspice</td><td>1/8 Teaspoon</td><td>10 mins.</td></tr><tr><td>Ground Nutmeg</td><td>1/8 Teaspoon</td><td>10 mins.</td></tr><tr><td>Ground Ginger</td><td>1/4 Teaspoon</td><td>10 mins.</td></tr><tr><td>Ground Cinnamon</td><td>1/2 Teaspoon</td><td>10 mins.</td></tr></table>');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (10, 8, 'Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (10, 9, 'After fermenting for two weeks total, keg beer or bottle beer with priming sugar.');


# Sasquatch Piss

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (11, 1, 'Using a mash tun, mash all grains with 4.5 gallons of water for 60 minutes at 155&deg;.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (11, 2, 'While Mashing, heat 4.5 gallons of sparge water to 170&deg;.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (11, 3, 'Vorlauf until wort runs fairly clear of debris. Empty runnings into kettle.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (11, 4, 'Add all sparge water to the mash tun and mix the grain. Vorlauf immediately until wort runs fairly clear of debris. Empty runnings into kettle.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (11, 5, 'Follow the Boil Schedule:<table><tr><th  class="boil-ingredient-table">Ingredient</th><th >Amount</th><th >Time</th></tr><tr><td>Amarillo Hops</td><td>.5 oz.</td><td>15 mins.</td></tr><tr><td>Chinook Hops</td><td>.5 oz.</td><td>15 mins.</td></tr><tr><td>Columbus Hops</td><td>.5 oz.</td><td>15 mins.</td></tr><tr><td>Galaxy Hops</td><td>.5 oz.</td><td>15 mins.</td></tr><tr><td>Amarillo Hops</td><td>.5 oz.</td><td>10 mins.</td></tr><tr><td>Chinook Hops</td><td>.5 oz.</td><td>10 mins.</td></tr><tr><td>Columbus Hops</td><td>.5 oz.</td><td>10 mins.</td></tr><tr><td>Galaxy Hops</td><td>.5 oz.</td><td>10 mins.</td></tr><tr><td>Amarillo Hops</td><td>.5 oz.</td><td>5 mins.</td></tr><tr><td>Chinook Hops</td><td>.5 oz.</td><td>5 mins.</td></tr><tr><td>Columbus Hops</td><td>.5 oz.</td><td>5 mins.</td></tr><tr><td>Galaxy Hops</td><td>.5 oz.</td><td>5 mins.</td></tr></table>');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (11, 6, 'Remove wort from heat and cool to about 70&deg;. Transfer wort into fermenter. Pitch the yeast and stir thoroughly. Close the fermenter and use airlock.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (11, 7, 'After fermenting for 7 days, add 0.5 oz. of Amarillo hops, 0.5 oz. of Chinook hops, 0.5 oz. of Columbus hops, and 0.5 oz. of Galaxy hops to the fermenter.');

INSERT INTO recipe_steps (beer_id, list_order, step)
VALUES (11, 8, 'After fermenting for two weeks total, keg beer or bottle beer with priming sugar.');