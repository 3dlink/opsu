--INSERT INTO `vision_mentr`.`user_groups` (`id`, `name`, `alias_name`, `allowRegistration`, `created`, `modified`) VALUES (NULL, 'Tester', 'Tester', '1', NULL, NULL);

ALTER TABLE `users` ADD `education_2` INT NULL AFTER `education_id`;

ALTER TABLE `users` ADD `graduation_year` VARCHAR(4) NULL AFTER `education_2`;