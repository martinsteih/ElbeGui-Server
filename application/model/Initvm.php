<?php

class Initvm {
	private $buildType;//like amd64, armel, ppc ...
	private $mirror;//used debian mirror
	private $noauth;//allow installation of unsigned debian packages
	private $preference;
	private $suite;// like jessie or stretch
	private $packageList;//list of packages to be installed
	private $preseed;//custom preceeding value for apt
	private $size;//size of the virtual hard disk
	private $img;//hd image format like .img, .vmdk ...
	private $portForwarding;//ports of the vm that are forwarded to the host

	public
	function __construct() {
		$this->noauth = true;
	}

	public
	function __construct($buildType, $mirror, $noauth,  $packageList = array() ) {
		$this->buildType = $buildType;
		$this->noauth = true;
	}
	
	public function export($exporterFactory){
		$exporterFactory->get()->export($this);
	}

	
}

?>