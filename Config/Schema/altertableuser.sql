ALTER TABLE `users` ADD `pay_code` TEXT  NULL  DEFAULT NULL  AFTER `mod3`;
ALTER TABLE `users` ADD `plan` INT  NULL  DEFAULT NULL  AFTER `pay_code`;
