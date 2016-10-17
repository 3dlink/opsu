ALTER TABLE `personal_values` ADD `visible` VARCHAR(50)  NULL  DEFAULT 'all'  AFTER `name`;
ALTER TABLE `personal_values` CHANGE `visible` `visible` VARCHAR(50)  CHARACTER SET latin1  NULL  DEFAULT '';
