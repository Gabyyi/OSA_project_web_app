SET @num := 0;
UPDATE website_database.dealer SET id = @num := (@num+1);
ALTER TABLE website_database.dealer AUTO_INCREMENT = 1;

