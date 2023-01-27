<?php

class AnnualreportController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Contact Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/       

        
       
        public function adminAnnualreport()
        {

		  $page = Page::where('type','=','annualreport')->where('published','=',1)->get();
		  $pgCount = Annualreport::count();
      $current_page = Input::get('page',0); // current page
//dd('hello');
			 for ($i = 1; $i <= $pgCount; $i++ )
             {  
                 if($i == 1)
                 {
                 $cntArr[10] = 10;
                 }
                 
                 if($i == 11)
                 {
                 $cntArr[20] = 20;
                 }
                 
                 if($i == 21)
                 {
                 $cntArr[30] = 30;
                 }
                 
                 if($i == 31)
                 {
                 $cntArr[50] = 50;
                 }
                 
                 if($i == 51)
                 {
                 $cntArr[100] = 100;
                 //exit;
                 }
             }
             if(Input::get('noperpage1'))
             {
               $noperpage = Input::get('noperpage1');  
             }
             else {
                  
                   $noperpage = 10;
               }

               //dd($noperpage);
             /* End of Paginate Count Section */
         $annualreport = Annualreport::orderBy('id', 'desc')->paginate($noperpage);
         //dd($annualreport);
					 if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }
	      
		  return View::make('admin.adminannualreport', array ( 'page' => $page, 'annualreports'=>$annualreport,'cntarray1' => $cntarray1, 'current_page'=>$current_page));
        //   return View::make('adminannualreport', array ( 'page' => $page));       
        }
        
        public function adminAddReports() {
          //dd(Input::all());
           $slidingbanners = Annualreport::create(Input::all()); 
           if($slidingbanners)
           {
                return Redirect::back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Annual Report Added Successfully.</p>
              </div>');
           }
           else 
           {
               return Redirect::back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
           }
       } 
public function adminEditReports() {
  //dd(Input::all());
           $sementrasbannerId = Input::get('sementrasbannerid'); 
           $banner = Annualreport::find($sementrasbannerId);
           $banner->image = Input::file('image');
		   $banner->pdf = Input::file('pdf');
           $banner->title = Input::get('title');
           $banner->date = Input::get('date');
		    $banner->short_description = Input::get('short_description');
           $banner->active = Input::get('active');
           $banner->category_id = Input::get('category_id');
            if($banner->save())
            {
                return Redirect::back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Annual Report edited Successfully.</p>
              </div>');
            }
            else
            {
                return Redirect::back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
            }
       } 
        public function adminDeleteReports() {
		   $id = Input::get('sementrasbannerid'); 
           $banner = Annualreport::findOrFail($id);
		   $banner->delete();
		   if($banner)
           {
                return Redirect::back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
           }
           else 
           {
               return Redirect::back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
           }
       
        }
		public function adminDeleteAllReports() {
		  
           $slidingbanners = Annualreport::truncate();
		   if($slidingbanners)
           {
                return Redirect::back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Records Deleted Successfully.</p>
              </div>');
           }
           else 
           {
               return Redirect::back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
           }
          
        }
        
        public function frontAnnualreport()
        {
	      $page = Page::where('type','=','annualreport')->where('published','=',1)->get();
	      //$annualreport = Annualreport::where('active','=',1)->orderBy(DB::raw("STR_TO_DATE(date, '%d/%m/%Y')"),'desc')->get();

        $annualreport = Annualreport::where('active','=',1)->orderBy('id','desc')->get();

	      //dd($annualreport);
              $pageTitle = $page[0]->left_block1_title;
              $masthead = url().'/images/banner_subpage/banner7.jpg';
              $breadcrumbs = array(
                                      0 => array 
                                                (
                                                   "title" => "Home",
                                                   "url" => ""
                                                ),
                                     1 => array 
                                                (
                                                   "title" => "Investor Relations",
                                                   "url" => ""
                                                ),
                                    2 => array 
                                                (
                                                   "title" => "Annual Reports",
                                                   "url" => ""
                                                )
                                   
                                    );
               
                $mainMenuTitle = $page[0]->page_title;
                return View::make('front.finance',array(
                                                       'page' => $page[0],
                                                       'mainMenuTitle' => $mainMenuTitle,
                                                       'pageTitle' => $pageTitle ,
                                                       'breadcrumbs' => $breadcrumbs,
                                                       'masthead' => $masthead,
                                                       'annualreports'=>$annualreport
                                                       
                                                     ));
        //   return View::make('adminannualreport', array ( 'page' => $page));       
        }

        //delete pdf annular reports
        public function adminDeletePdf()
        {
          $reportId = Input::get('sementrasbannerid');
          //dd($reportId);

          $pdfattachment = Annualreport::find($reportId);
          $pdfattachment->pdf = STAPLER_NULL;
          $pdfattachment->save();
          return '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Pdf has beenDeleted Successfully.</p>
              </div>';

          //Session::flash('editId', $reportId);
          //return Redirect::to('admin/annual/reports')->with('editId', $reportId);

         

        }

        //delete cover of report
        public function adminDeleteCover()
        {
          $reportId = Input::get('sementrasbannerid');
          //dd($reportId);
          $pdfattachment = Annualreport::find($reportId);
          $pdfattachment->image = STAPLER_NULL;
          $pdfattachment->save();
          return '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Cover has been Deleted Successfully.</p>
              </div>';
          //Session::flash('editId', $reportId);
          //return Redirect::to('admin/annual/reports')->with('editId', $reportId);

        }
		
		







}
