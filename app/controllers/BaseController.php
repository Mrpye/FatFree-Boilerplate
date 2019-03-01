<?php

class BaseController {

	protected $f3;
	protected $db;
	protected $notemplate=false;
	protected $mc;
	
	function beforeroute() {
		$this->f3->set('message','');
	}

	function afterroute() {
		if($this->notemplate==false){echo Template::instance()->render('site_layout.htm');}
	}

	function __construct() {

        $f3=Base::instance();

        $db=new DB\SQL(
            $f3->get('db_dns') . $f3->get('db_name'),
            $f3->get('db_user'),
            $f3->get('db_pass')
        );	

		$this->f3=$f3;
		$this->db=$db;
	}
}
