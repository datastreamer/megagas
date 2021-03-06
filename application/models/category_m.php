<?php
class Category_m extends MY_Model
{
	
	protected $_table_name = 'category';
	protected $_order_by = 'product_name';
    public $rules_admin = array(
        'prod_code' => array(
            'field' => 'prod_code', 
            'label' => 'Product Code', 
            'rules' => 'trim|required|xss_clean'
        ), 
        'prod_name' => array(
            'field' => 'prod_name', 
            'label' => 'Product Name', 
            'rules' => 'trim|required|xss_clean'
        ), 
        'prod_desc' => array(
            'field' => 'prod_desc', 
            'label' => 'Product Description', 
            'rules' => 'trim|required|xss_clean'
        ) 
    );
}