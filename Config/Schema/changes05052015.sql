INSERT INTO  `vision_mentr`.`assessments` (
`id` ,
`name` ,
`description`
)
VALUES (
NULL ,  'WorkValues',  'Work Values Assessments'
);


CREATE TABLE IF NOT EXISTS `workvaluesa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assessment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `M_v1_q1` int(11) NOT NULL,
  `M_v1_q2` int(11) NOT NULL,
  `M_v1_q3` int(11) NOT NULL,
  `M_v1_q4` int(11) NOT NULL,
  `M_v1_q5` int(11) NOT NULL,
  `M_v1_q6` int(11) NOT NULL,
  `M_v1_q7` int(11) NOT NULL,
  `M_v1_q8` int(11) NOT NULL,
  `M_v1_q9` int(11) NOT NULL,
  `M_v1_q10` int(11) NOT NULL,
  `M_v1_q11` int(11) NOT NULL,
  `M_v1_q12` int(11) NOT NULL,
  `M_v1_q13` int(11) NOT NULL,
  `M_v1_q14` int(11) NOT NULL,
  `M_v1_q15` int(11) NOT NULL,
  `M_v1_q16` int(11) NOT NULL,
  `M_v1_q17` int(11) NOT NULL,
  `M_v1_q18` int(11) NOT NULL,
  `M_v1_q19` int(11) NOT NULL,
  `M_v1_q20` int(11) NOT NULL,
  `M_v1_q21` int(11) NOT NULL,
  `M_v1_q22` int(11) NOT NULL,
  `M_v1_q23` int(11) NOT NULL,
  `M_v1_q24` int(11) NOT NULL,
  `M_v1_q25` int(11) NOT NULL,
  `M_v1_q26` int(11) NOT NULL,
  `M_v1_q27` int(11) NOT NULL,
  `M_v1_q28` int(11) NOT NULL,
  `M_v1_q29` int(11) NOT NULL,
  `M_v1_q30` int(11) NOT NULL,
  `M_v1_q31` int(11) NOT NULL,
  `M_v1_q32` int(11) NOT NULL,
  `M_v1_q33` int(11) NOT NULL,
  `M_v1_q34` int(11) NOT NULL,
  `M_v1_q35` int(11) NOT NULL,
  `M_v1_q36` int(11) NOT NULL,
  `wv_completeness` varchar(45) DEFAULT NULL,
  `wv_autonomy` varchar(45) DEFAULT NULL,
  `wv_status` varchar(45) DEFAULT NULL,
  `wv_relatedness` varchar(45) DEFAULT NULL,
  `wv_impact` varchar(45) DEFAULT NULL,
  `wv_pay` varchar(45) DEFAULT NULL,
  `wv_job_security` varchar(45) DEFAULT NULL,
  `wv_variety` varchar(45) DEFAULT NULL,
  `wv_balance` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;
