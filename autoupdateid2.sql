SET @num := 0;
UPDATE database.dealer SET id = @num := (@num+1);
ALTER TABLE database.dealer AUTO_INCREMENT = 1;

