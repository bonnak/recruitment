<?php
use Symfony\Component\Security\Core\User\User;
class MainController extends BaseController {
	protected $industries;
	protected $functions;
	protected $locations;
	
	public function __construct() {
		$this->industries = Industry::get ();
		$this->functions = Func::get ();
		$this->locations = Location::get ();
	}
	
	public function index() 
	{
		$jobs = Job::where('status', '=', 1)->orderBy('created_at', 'desc')->paginate(10);

		return View::make ( 'main' )->with ( [ 
				'industries' => $this->industries,
				'functions' => $this->functions,
				'locations' => $this->locations,
				'jobs'		=> $jobs,
		] );
	}
	public function showdetail($id){
		return View::make('job_show_detail')
					->with('job_detail', Job::find($id));
	}

}
