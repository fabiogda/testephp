CREATE TABLE `testephp`.`users` ( `user_id` INT(11) NOT NULL AUTO_INCREMENT , `user_login` VARCHAR(30) NOT NULL , `user_full_name` VARCHAR(100) NOT NULL , `user_email` VARCHAR(100) NOT NULL , `password_hash` VARCHAR(255) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;


INSERT INTO users (user_id, user_login, user_full_name, user_email, password_hash) VALUES (1,"admin","administrador","admin@teste.com","$2y$10$f6ejBu5e2jJq37F/lENYn.1G8KN1ax36rLnhSlXX0o8RywlJQEVa2")
