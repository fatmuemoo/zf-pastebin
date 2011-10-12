<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Grid960
 *
 * @author brandon
 */
class Zend_View_Helper_Grid960 extends Zend_View_Helper_Abstract
{
    
    protected $_baseUrl = 'http://grids.heroku.com/grid.css';
    
    protected $_columnAmount = 12;
    
    protected $_columnWidth = 60;

    protected $_gutterWidth = 20;
    
    public function grid960()
    {
        return $this;
    }
    
    public function apply()
    {
        return $this->view->headLink()->appendStylesheet($this->getUrl());
    }
    public function getUrl()
    {
        return $this->getBaseUrl() . '?' . http_build_query($this->getParams());
    }
    
    public function getParams()
    {
        $params = array(
            'column_amount' => $this->getColumnAmount(),
            'column_width' => $this->getColumnWidth(),
            'gutter_width'  => $this->getGutterWidth(),
        );
        return $params;
    }
    
    public function getBaseUrl() {
        return $this->_baseUrl;
    }

    public function setBaseUrl($_baseUrl) {
        $this->_baseUrl = $_baseUrl;
        return $this;
    }

    public function getColumnAmount() {
        return $this->_columnAmount;
    }

    public function setColumnAmount($_columnAmount) {
        $this->_columnAmount = $_columnAmount;
        return $this;
    }

    public function getColumnWidth() {
        return $this->_columnWidth;
    }

    public function setColumnWidth($_columnWidth) {
        $this->_columnWidth = $_columnWidth;
        return $this;
    }

    public function getGutterWidth() {
        return $this->_gutterWidth;
    }

    public function setGutterWidth($_gutterWidth) {
        $this->_gutterWidth = $_gutterWidth;
        return $this;
    }

}