<?php

class SiteController extends BaseController {

	public function index(){
		
		$this->f3->set('page_head','Main Site Page');
		$this->f3->set('content','site/home.htm');

	}
	
}