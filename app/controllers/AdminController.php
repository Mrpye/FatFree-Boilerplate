<?php
class AdminController extends BaseAdminController {
    
    function beforeroute()
    {
        if($this->f3->get('SESSION.user') === null ) {
            $this->f3->reroute('/login');
            exit;
        }
    }
    
    //*********
    //Main Site
    //*********
    public function index()
    {
        $this->f3->set('page_head','Admin Page');
        $this->f3->set('content','admin/home.htm');
        
    }

 
}