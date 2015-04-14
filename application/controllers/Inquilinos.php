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
class Inquilinos extends CI_Controller{
    //put your code here
    
    public function index()
    {
        $this->load->helper('url');
        $this->load->model('Inquilinos/InquilinosModel');

        $arr['data'] = $this->InquilinosModel->getInquilinos();

        $this->load->view('Inquilinos/view', $arr);
                
    }
    
    public function edit($id=null)
    {
        
        if(!isset($id))
        {
            echo '<h1>Inquilino incorrecto</h1>';
        }
        else
        {
            $this->load->model('Inquilinos/InquilinosModel');
            $arr['data'] = $this->InquilinosModel->getInquilinoById($id);
            
            $this->load->view('Inquilinos/edit', $arr);
        }
      
    }
}
