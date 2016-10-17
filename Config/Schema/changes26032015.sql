ALTER TABLE  `skillsa` ADD  `problem_solving` DOUBLE NOT NULL AFTER  `F_v1_q32` ,
ADD  `adaptability` DOUBLE NOT NULL AFTER  `problem_solving` ,
ADD  `critical_thinking` DOUBLE NOT NULL AFTER  `adaptability` ,
ADD  `communication` DOUBLE NOT NULL AFTER  `critical_thinking` ,
ADD  `creative_thinking` DOUBLE NOT NULL AFTER  `communication` ,
ADD  `time_management` DOUBLE NOT NULL AFTER  `creative_thinking` ,
ADD  `numerical_reasoning` DOUBLE NOT NULL AFTER  `time_management` ,
ADD  `commercial_awareness` DOUBLE NOT NULL AFTER  `numerical_reasoning`,
ADD  `overall` DOUBLE NOT NULL AFTER  `commercial_awareness` ;