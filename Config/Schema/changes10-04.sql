ALTER TABLE `education` ADD `description` VARCHAR(50)  NULL  DEFAULT NULL  AFTER `name`;
UPDATE `education` SET `description` = 'No schooling completed' WHERE `id` = '1';
UPDATE `education` SET `description` = 'Nursery, kindergarten, and elementary' WHERE `id` = '2';
UPDATE `education` SET `description` = 'High school' WHERE `id` = '3';
UPDATE `education` SET `description` = 'High school graduate' WHERE `id` = '4';
UPDATE `education` SET `description` = 'Some college' WHERE `id` = '5';
UPDATE `education` SET `description` = 'Associate’s degree' WHERE `id` = '6';
UPDATE `education` SET `description` = 'Bachelor’s degree' WHERE `id` = '7';
UPDATE `education` SET `description` = 'Master’s degree' WHERE `id` = '8';
UPDATE `education` SET `description` = 'Professional school degree' WHERE `id` = '9';
UPDATE `education` SET `description` = 'Doctorate degree' WHERE `id` = '10';

ALTER TABLE `users` ADD `image` TEXT  NULL  DEFAULT NULL  AFTER `modified`;
ALTER TABLE `users` ADD `newsletter_mentor` INT(1)  NULL  DEFAULT '1'  AFTER `image`;
ALTER TABLE `users` ADD `newsletter_courses` INT(1)  NULL  DEFAULT '1'  AFTER `newsletter_mentor`;
ALTER TABLE `users` ADD `alerts_features` INT(1)  NULL  DEFAULT '1'  AFTER `newsletter_courses`;
ALTER TABLE `users` ADD `alerts_progress` INT(1)  NULL  DEFAULT '1'  AFTER `alerts_features`;

