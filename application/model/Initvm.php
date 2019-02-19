<?php

class Initvm {
	private $name;
	private $description;
	private $buildType;
	private $packageList;

	public
	function __construct() {

	}

	public
	function __construct( $name, $description, $buildType, $packageList = array() ) {
		$this->name = $name;
		$this->description = $description;
		$this->buildType = $buildType;
		$this->packageList = $packageList;
	}

	public
	function getName() {
		return $this->name;
	}

	public
	function setName( $name ) {
		$this->name = $name;
	}
	
	public
		function getDescription(){
		return $this->description;
	}
	
	public function setDescription($description){
		$this->description = $description;
	}
	
	public function getBuildType(){
		return $this->buildType;
	}

	public function setBuildType($buildType){
		$this->buildType = $buildType;
	}
}

?>