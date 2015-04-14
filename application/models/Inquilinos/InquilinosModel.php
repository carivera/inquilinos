<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inquilinos
 *
 * @author crivera
 */
class InquilinosModel extends CI_Model {
    //put your code here
    
    function __construct() {
        //Call the model constructor
        parent::__construct();
    }
    
    public function getInquilinos()
    {        
        $query = $this->db->get('inquilinos', 10);
        return $query->result();
    }
    
    public function getInquilinoById($Id)
    {       
        $qry = "select * from inquilinos where id = '" . $Id . "'";
        $query = $this->db->query($qry);
        return $query->result();
    }    
}
