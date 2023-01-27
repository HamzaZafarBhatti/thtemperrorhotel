<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
        
        public function showIndex()
        {
            $page = Page::where('type','=','index')->where('published','=',1)->get();
			$banners = Banner::where('active', '=', 1)->get();
            $corebusinesses = Corebusiness::where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date, '%d %M,%Y')"),'desc')->take(3)->get();
            //dd($corebusinesses);
            return View::make('front.frontindex',array('page' => $page[0],'banners' => $banners,'front' => '1','corebusinesses'=>$corebusinesses));
        }

        public function showProfile()
        {
//dd('1');
                $companyProfile = CompanyProfile::first();
                $sliderImages = Slidingbanner::where('type', 'company-profile')->where('active','=','1')->orderBy('display_order', 'ASC')->get();
//echo '<pre>'; print_r($companyProfile); die;
        	return View::make('front.profile', array('companyProfile' => $companyProfile, 'sliderImages'=>$sliderImages));
        }

        public function showInfo()
        {
                $data = CompanyExperience::first();
//echo '<pre>'; print_r($data); die;
        	return View::make('front.info', array('data'=> $data));
        }

        public function showVision()
        {
                $data = QualityAssurance::first();
        	return View::make('front.vision', array('data'=> $data));
        }

        public function showBoard()
        {
        	return View::make('front.board');
        }

        public function showStructure()
        {
        	return View::make('front.structure');
        }

        public function showPaperBags()
        {
            $page = Page::where('type','=','paperbags')->where('published','=',1)->get();
        	return View::make('front.paper', array('page' => $page[0]));
        }

        public function showCartoon()
        {
            $page = Page::where('type','=','cartoonbox')->where('published','=',1)->get();
            $sliderImages = Slidingbanner::where('type', 'technology')->where('active','=','1')->orderBy('display_order', 'ASC')->get();
        	return View::make('front.cartoon', array('page' => $page[0], 'sliderImages'=>$sliderImages));
        }

        public function showBoardCharter()
        {
            $page = Page::where('type','=','boardcharter')->where('published','=',1)->get();
        	return View::make('front.boardcharter', array('page' => $page[0]));
        }

        public function showAudit()
        {
            $page = Page::where('type','=','auditcommitte')->where('published','=',1)->get();
        	return View::make('front.audit', array('page' => $page[0]));
        }

        public function showNomination()
        {
            $page = Page::where('type','=','nomination')->where('published','=',1)->get();
        	return View::make('front.nomination', array('page' => $page[0]));
        }

        public function showFinance()
        {
        	return View::make('front.finance');
        }

        public function showAnnouncement()
        {
            $page = Page::where('type','=','announcements')->where('published','=',1)->get();
        	return View::make('front.announcement', array('page' => $page[0]));
        }







       
}
