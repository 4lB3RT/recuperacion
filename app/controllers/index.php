<?php
	class index{
		protected $_view;
		protected $_model;


		function __construct(){
			$this->_view=new iview('ilogin');
			$this->_model=new imodel();
			
		}

		function index(){
			
		}
		function prova(){
			echo ' metode prova';
		}
	}