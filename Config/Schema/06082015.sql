ALTER TABLE `users` ADD `mod1` INT(11)  NULL  DEFAULT '0'  AFTER `premium`;
ALTER TABLE `users` ADD `mod2` INT(11)  NULL  DEFAULT '0'  AFTER `mod1`;
ALTER TABLE `users` ADD `mod3` INT(11)  NULL  DEFAULT '0'  AFTER `mod2`;
