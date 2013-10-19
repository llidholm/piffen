<?php
/**
 * Standard controller layout.
 * 
 * @package PiffenCore
 */
class CCIndex implements IController {

	/**
 	 * Implementing interface IController. All controllers must have an index action.
	 */
	public function Index() {	
		global $pf;
		$pf->data['title'] = "The Index Controller";
		$pf->data['main'] = "<h1>The Index Controller</h1>";
	}

} 