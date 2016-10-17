CREATE TABLE IF NOT EXISTS `feedbacka` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `G_v1_q1` int(11) NOT NULL,
  `G_v1_q2` int(11) NOT NULL,
  `G_v1_q3` int(11) NOT NULL,
  `G_v1_q4` int(11) NOT NULL,
  `G_v1_q5` int(11) NOT NULL,
  `G_v1_q6` int(11) NOT NULL,
  `G_v1_q7` int(11) NOT NULL,
  `G_v1_q8` int(11) NOT NULL,
  `G_v1_q9` int(11) NOT NULL,
  `G_v1_q10` int(11) NOT NULL,
  `G_v1_q11` int(11) NOT NULL,
  `G_v1_q12` int(11) NOT NULL,
  `G_v1_q13` int(11) NOT NULL,
  `G_v1_q14` int(11) NOT NULL,
  `G_v1_q15` int(11) NOT NULL,
  `G_v1_q16` int(11) NOT NULL,
  `G_v1_q17` int(11) NOT NULL,
  `G_v1_q18` int(11) NOT NULL,
  `G_v1_q19` int(11) NOT NULL,
  `G_v1_q20` int(11) NOT NULL,
  `G_v1_q21` int(11) NOT NULL,
  `G_v1_q22` int(11) NOT NULL,
  `time_management_360` double NOT NULL,
  `adaptability_360` double NOT NULL,
  `communication_360` double NOT NULL,
  `problem_solving_360` double NOT NULL,
  `teamwork_360` double NOT NULL,
  `ledership_360` double NOT NULL,
  `tech_savvy_360` double NOT NULL,
  `persuasive_360` double NOT NULL,
  `active_listening` double NOT NULL,
  `oral_communication` double NOT NULL,
  `written_communication` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=25 ;


INSERT INTO  `vision_mentr`.`assessments` (
`id` ,
`name` ,
`description`
)
VALUES (
NULL ,  'FeedbackA',  '360 Feedback Assessment'
);
