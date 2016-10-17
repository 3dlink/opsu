<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'vision_mentr',
		'encoding' => 'utf8'
	);

	public $campaign_monitor = array(
        'datasource' => 'CampaignMonitor.CampaignmonitorSource',
        'apiKey' => '6551c9548723eb4575c82c40568be06d'
    );
}
