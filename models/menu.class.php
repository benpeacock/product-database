<?php

class Menu extends DatabaseObject {
	
	public $parent;
	public $children = array();
	public $menu_title;
	public $menu_link;
	
	function __construct($parent, $menuTitle, $menuLink) {
		$this->parent = $parent;
		$this->menu_title = $menu_title;
		$this->menu_link = $menu_link;
	}
	
	function hasParent(){
        if ($this->parent) {
            return true;
        }
        return false;
    }

    function addChild($child){
        $this->children[] = $child;
    }

    function hasChildren(){
        return count($children);
    }
    
    function render() {
    	$navClass = '';
    	$ulClass = '';
    	$liClass = '';
    
    	if ($this->parent == false) {
    		//For main ul (First Ul) i have .nav class
    		$navClass = 'nav';
    	}
    
    	if (count($this->children)){
    		//For any li where has first level sub menus i have .dropdown class for li
    		$liClass = 'dropdown';
    	}
    
    
    	if($this->parent) {
    		//Additionally for 2nd step i have .dropdown-menu class for
    		//ul elemnts which it has a parent element as a li
    		$ulClass = 'dropdown-menu';
    	}
    
    	$output = "<ul class='$navClass'>";
    	$output .= "<li class='$liClass'>";
    	$output .= "<a href='".$this->menuLink."'>".$this->menuTitle."</a>";
    
    	foreach ($this->children as $child) {
    		$output .= $child->render();
    	}
    
    	$output .= "</li>";
    	$output .= '</ul>';
    
    	return $output;
    }
    }
	
	
}