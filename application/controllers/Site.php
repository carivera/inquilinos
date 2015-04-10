<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Site
 *
 * @author crivera
 */
class Site extends CI_Controller {
    //put your code here
    function index(){
        $data['varName'] = 'Carlos';
        $data['varLname'] = 'Rivera';
        
        $this->load->view("home", $data);
    }
    
    public function inquilinos()
    {
        

    }
}
