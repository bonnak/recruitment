<?php
use Symfony\Component\Security\Core\User\User;
class MainController extends BaseController {
	protected $industries;
	protected $functions;
	protected $locations;
	protected $salaries;
	public function __construct() {
		$this->industries = Industry::get ();
		$this->functions = Func::get ();
		$this->locations = Location::get ();
		$this->salaries = Salary::get ();	
		
	}
	public function index() {
		return View::make ( 'main' )->with ( [ 
				'industries' => $this->industries,
				'functions' => $this->functions,
				'locations' => $this->locations,
				'salaries' => $this->salaries
		] );
	}
	
}
