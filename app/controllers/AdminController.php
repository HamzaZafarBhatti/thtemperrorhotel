<?php

class AdminController extends BaseController {
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

    public function showLogin() {

        return View::make('auth.login');
    }

    public function handleLogin() {

        $data = Input::only(['username', 'password']);

        if (Auth::attempt(['username' => $data['username'], 'password' => $data['password'], 'active' => 1])) {
            $accesslist = unserialize(Auth::user()->accesslist);
            //dd(Auth::user());
            Session::put('accesslist', $accesslist);

            return Redirect::intended('admin/dashboard');
        }


        return Redirect::route('login')->withInput();
    }

    public function dashboard() {

        $applicants = Application::select('applications.*', 'vaccancies.job_location', 'vaccancies.job_title', 'vaccancies.post_date', 'vaccancies.company')->leftJoin('vaccancies', 'applications.vaccancyid', '=', 'vaccancies.id')->orderBy('applications.id', 'DESC')->paginate(5);
        $pressreleases = Feedback::orderBy('id', 'DESC')->paginate(5);
        $applicants_count = Application::count();
        //dd($applicants_count);
        $vaccancies_count = Career::count();
        $pressreleases_count = Feedback::count();
        return View::make('admin.dashboard', array(
                    'applicants' => $applicants,
                    'pressreleases' => $pressreleases,
                    'applicants_count' => $applicants_count,
                    'vaccancies_count' => $vaccancies_count,
                    'pressreleases_count' => $pressreleases_count
        ));
    }

    public function companyProfile() {
        $data = CompanyProfile::first();
        $heading = 'Company Profile';
//        $sliderImages = Image::where('image_for', 'company_profile')->get();
        // echo '<pre>'; print_r($sliderImages); die;

        $pgCount = Slidingbanner::where('type', '=', 'company-profile')->count();
//dd($pgCount);
        for ($i = 1; $i <= $pgCount; $i++) {
            if ($i == 1) {
                $cntArr[10] = 10;
            }

            if ($i == 11) {
                $cntArr[20] = 20;
            }

            if ($i == 21) {
                $cntArr[30] = 30;
            }

            if ($i == 31) {
                $cntArr[50] = 50;
            }

            if ($i == 51) {
                $cntArr[100] = 100;
                exit;
            }
        }

        $noperpage = 10;
        $slidingbanners = Slidingbanner::where('type', '=', 'company-profile')->paginate($noperpage);
        if ($pgCount > 0) {
            $cntarray1 = $cntArr;
        } else {
            $cntarray1 = 0;
        }

        return View::make('admin.companyProfile', array('data' => $data, 'pageTitle' => $heading, 'slidingbanners' => $slidingbanners, 'cntarray1' => $cntarray1));
    }

//    public function deleteSliderImage($id) {
//         if(Image::where('id', $id)->delete()) {
//               return Redirect::back()->with('message','<div class="alert alert-success alert-dismissable">
//                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
//                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
//                <p>Slider image deleted successfully.</p>
//              </div>');
//         }
//          return Redirect::back()->with('message','<div class="alert alert-error alert-dismissable">
//                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
//                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
//                <p>Something happened try again.</p>
//              </div>');
//    }

    public function upadteCompanyProfile() {
        $data = Input::all();
//        echo '<pre>';
//        print_r($data);
//        die;
        $oldData = CompanyProfile::first();
        $mainImage = $oldData->backgroundImages;
        $bodyImage = $oldData->bodyImages;

        $destinationPath = 'public/uploads/'; // upload path
        if (!empty($data['mainImage'])) {

            $files = Input::file('mainImage');
            $mainImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
            $ext = explode('.', $mainImage);
            $ext = strtolower($ext[count($ext) - 1]);
            $upload_success = $files->move($destinationPath, $mainImage);
        }else if(!empty($data["deleteBackgroundImage"])){
            if($data["deleteBackgroundImage"] === "on"){
                $mainImage = "";
            }
        }

        if (!empty($data['bodyImage'])) {
            $files = Input::file('bodyImage');
            $bodyImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
            $ext = explode('.', $bodyImage);
            $ext = strtolower($ext[count($ext) - 1]);
            $upload_success = $files->move($destinationPath, $bodyImage);
        }else if(!empty($data["deleteBodyImage"])){
            if($data["deleteBodyImage"] === "on"){
                $bodyImage = "";
            }
        }


        if (CompanyProfile::where('id', 1)->update(['title' => $data['title'], 'subHeading1' => $data['subHeading1'], 'text1' => $data['text1'], 'subHeading2' => $data['subHeading2'], 'text2' => $data['text2'], 'backgroundImages' => $mainImage, 'bodyImages' => $bodyImage])) {

            if (Input::get('preview')) {
                $redirecturl = '/' . Input::get('preview');
                return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Company profile updated successfully.</p>
              </div><script type="text/javascript">
                    window.open("' . url() . $redirecturl . '","_blank");                    
                </script>');
            } else {
                return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Company profile updated successfully.</p>
              </div>');
            }
        }
        return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
    }

    public function companyExperiences() {
        $data = CompanyExperience::first();
        $heading = 'Company Experiences';
        return View::make('admin.companyExperience', array('data' => $data, 'pageTitle' => $heading));
    }

    public function upadteCompanyExperiences() {
        $data = Input::all();
//echo '<pre>'; print_r($data); die;
        $oldData = CompanyExperience::first();
        $mainImage = $oldData->backgroundImages;
        $bodyImage = $oldData->bodyImages;
        $destinationPath = 'public/uploads/'; // upload path
        if (!empty($data['mainImage'])) {

            $files = Input::file('mainImage');
            $mainImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
            $ext = explode('.', $mainImage);
            $ext = strtolower($ext[count($ext) - 1]);
            $upload_success = $files->move($destinationPath, $mainImage);
        }else if(!empty($data["deleteBackgroundImage"])){
            if($data["deleteBackgroundImage"] === "on"){
                $mainImage = "";
            }
        }

        if (!empty($data['bodyImage'])) {

            $files = Input::file('bodyImage');
            $bodyImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
            $ext = explode('.', $bodyImage);
            $ext = strtolower($ext[count($ext) - 1]);
            $upload_success = $files->move($destinationPath, $bodyImage);
        }else if(!empty($data["deleteBodyImage"])){
            if($data["deleteBodyImage"] === "on"){
                $bodyImage = "";
            }
        }



        if (CompanyExperience::where('id', 1)->update(['title' => $data['title'], 'subtitle' => $data['subtitle'], 'text' => $data['text'], 'backgroundImages' => $mainImage, 'bodyImages' => $bodyImage])) {
//            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
//                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
//                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
//                <p>Company experience updated successfully.</p>
//              </div>');
            
            
            if (Input::get('preview')) {
                $redirecturl = '/' . Input::get('preview');
                return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Company experience updated successfully.</p>
              </div><script type="text/javascript">
                    window.open("' . url() . $redirecturl . '","_blank");                    
                </script>');
            } else {
                return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Company experience updated successfully.</p>
              </div>');
            }
            
        }
        return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
    }

    public function qualityAssurance() {
        $data = QualityAssurance::first();
        $heading = 'Quality Assurance';
        return View::make('admin.QualityAssurance', array('data' => $data, 'pageTitle' => $heading));
    }
    

    public function upadteQualityAssurance() {
        $data = Input::all();
//echo '<pre>'; print_r($data); die;
        $oldData = QualityAssurance::first();
        $mainImage = $oldData->backgroundImages;
        $bodyImage = $oldData->bodyImages;
        $destinationPath = 'public/uploads/'; // upload path
        if (!empty($data['mainImage'])) {

            $files = Input::file('mainImage');
            $mainImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
            $ext = explode('.', $mainImage);
            $ext = strtolower($ext[count($ext) - 1]);
            $upload_success = $files->move($destinationPath, $mainImage);
        }

        if (!empty($data['bodyImage'])) {

            $files = Input::file('bodyImage');
            $bodyImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
            $ext = explode('.', $bodyImage);
            $ext = strtolower($ext[count($ext) - 1]);
            $upload_success = $files->move($destinationPath, $bodyImage);
        }


        if (QualityAssurance::where('id', 1)->update(['title' => $data['title'], 'subtitle' => $data['subtitle'], 'text' => $data['text'], 'backgroundImages' => $mainImage, 'bodyImages' => $bodyImage])) {
//            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
//                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
//                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
//                <p>Quality assurance updated successfully.</p>
//              </div>');
            
            if (Input::get('preview')) {
                $redirecturl = '/' . Input::get('preview');
                return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Quality assurance updated successfully.</p>
              </div><script type="text/javascript">
                    window.open("' . url() . $redirecturl . '","_blank");                    
                </script>');
            } else {
                return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Quality assurance updated successfully.</p>
              </div>');
            }
        }
        return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
    }

    public function oshpolicy() {
        $data = OshPolicy::first();
        $heading = 'OSH Policy';
        return View::make('admin.Oshpolicy', array('data' => $data, 'pageTitle' => $heading));
    }
    
    public function upadteOshPolicy() {
        $data = Input::all();
// echo '<pre>'; print_r($data); die;
        // $oldData = OshPolicy::first();
        // $mainImage = $oldData->backgroundImages;
        // $bodyImage = $oldData->bodyImages;
        // $destinationPath = 'public/uploads/'; // upload path
        // if (!empty($data['mainImage'])) {

        //     $files = Input::file('mainImage');
        //     $mainImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
        //     $ext = explode('.', $mainImage);
        //     $ext = strtolower($ext[count($ext) - 1]);
        //     $upload_success = $files->move($destinationPath, $mainImage);
        // }else if(!empty($data["deleteBackgroundImage"])){
        //     if($data["deleteBackgroundImage"] === "on"){
        //         $mainImage = "";
        //     }
        // }

        // if (!empty($data['bodyImage'])) {

        //     $files = Input::file('bodyImage');
        //     $bodyImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
        //     $ext = explode('.', $bodyImage);
        //     $ext = strtolower($ext[count($ext) - 1]);
        //     $upload_success = $files->move($destinationPath, $bodyImage);
        // }else if(!empty($data["deleteBodyImage"])){
        //     if($data["deleteBodyImage"] === "on"){
        //         $bodyImage = "";
        //     }
        // }


        if (OshPolicy::where('id', 1)->update(['title' => $data['title'], 'subtitle' => $data['subtitle'], 'text' => $data['text']])) {
//            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
//                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
//                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
//                <p>Quality assurance updated successfully.</p>
//              </div>');
            
            if (Input::get('preview')) {
                $redirecturl = '/' . Input::get('preview');
                return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>OSH policy updated successfully.</p>
              </div><script type="text/javascript">
                    window.open("' . url() . $redirecturl . '","_blank");                    
                </script>');
            } else {
                return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>OSH policy updated successfully.</p>
              </div>');
            }
        }
        return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
    }

    public function editImage() {
        $data = Input::all();
        // dd(Input::all());
        $pagename = Input::get('pagename');
        $type = Input::get('type');
        $active = Input::get('active');
        $destinationPath = 'public/uploads/'; // upload path
        $title = Input::get('title');

        if($pagename === "oshpolicy"){
            $oldData = OshPolicy::first();
        } else if($pagename === "environmentalpolicy"){
            $oldData = EnvironmentalPolicy::first();
        }else if($pagename === "qualitypolicy"){
            $oldData = QualityPolicy::first();
        }else if($pagename === "commandment"){
            $oldData = Commandment::first();
        }else if($pagename === "customer-experiences"){
            $oldData = CompanyExperience::first();
        }else if($pagename === "company-profile"){
            $oldData = CompanyProfile::first();
        }
        
        
        if($type === "background"){
               
                $mainImage = $oldData->backgroundImages;
                // $bodyImage = $oldData->bodyImages;
                if (!empty($data['mainImage'])) {
                    $files = Input::file('mainImage');
                    $mainImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
                    $ext = explode('.', $mainImage);
                    $ext = strtolower($ext[count($ext) - 1]);
                    $upload_success = $files->move($destinationPath, $mainImage);
                }

                if($pagename === "oshpolicy"){
                    $success = OshPolicy::where('id', 1)->update(['backgroundImages' => $mainImage, 'backgroundImages_active' => $active, 'backgroundImages_title' => $title]);
                } else if($pagename === "environmentalpolicy"){
                    $success = EnvironmentalPolicy::where('id', 1)->update(['backgroundImages' => $mainImage, 'backgroundImages_active' => $active, 'backgroundImages_title' => $title]);
                }else if($pagename === "qualitypolicy"){
                    $success = QualityPolicy::where('id', 1)->update(['backgroundImages' => $mainImage, 'backgroundImages_active' => $active, 'backgroundImages_title' => $title]);
                }else if($pagename === "commandment"){
                    $success = Commandment::where('id', 1)->update(['backgroundImages' => $mainImage, 'backgroundImages_active' => $active, 'backgroundImages_title' => $title]);
                }else if($pagename === "customer-experiences"){
                    $success = CompanyExperience::where('id', 1)->update(['backgroundImages' => $mainImage, 'backgroundImages_active' => $active, 'backgroundImages_title' => $title]);
                }else if($pagename === "company-profile"){
                    $success = CompanyProfile::where('id', 1)->update(['backgroundImages' => $mainImage, 'backgroundImages_active' => $active, 'backgroundImages_title' => $title]);
                }


                if($success){
                    return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                    <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                    <p>Background Image edited Successfully.</p>
                  </div>');
                }else{
                    return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                    <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                    <p>Something happened try again.</p>
                  </div>');
                }
                
        }
        if($type === "body"){

            $mainImage = $oldData->bodyImages;

            if (!empty(Input::file('mainImage'))) {
                $files = Input::file('mainImage');
                $mainImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
                $ext = explode('.', $mainImage);
                $ext = strtolower($ext[count($ext) - 1]);
                $upload_success = $files->move($destinationPath, $mainImage);
            }

            if($pagename === "oshpolicy"){
                $success = OshPolicy::where('id', 1)->update(['bodyImages' => $mainImage, 'bodyImages_active' => $active, 'bodyImages_title' => $title]);
            }else if($pagename === "environmentalpolicy"){
                $success = EnvironmentalPolicy::where('id', 1)->update(['bodyImages' => $mainImage, 'bodyImages_active' => $active, 'bodyImages_title' => $title]);
            }else if($pagename === "qualitypolicy"){
                $success = QualityPolicy::where('id', 1)->update(['bodyImages' => $mainImage, 'bodyImages_active' => $active, 'bodyImages_title' => $title]);
            }else if($pagename === "commandment"){
                $success = Commandment::where('id', 1)->update(['bodyImages' => $mainImage, 'bodyImages_active' => $active, 'bodyImages_title' => $title]);
            }else if($pagename === "customer-experiences"){
                $success = CompanyExperience::where('id', 1)->update(['bodyImages' => $mainImage, 'bodyImages_active' => $active, 'bodyImages_title' => $title]);
            }else if($pagename === "company-profile"){
                $success = CompanyProfile::where('id', 1)->update(['bodyImages' => $mainImage, 'bodyImages_active' => $active, 'bodyImages_title' => $title]);
            }

            if($success){
                return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Body Image edited Successfully.</p>
              </div>');
            }else{
                return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
            }

        }
    }

    public function deleteImage(){
        $data = Input::all();
        $pagename = Input::get("pagename");
        $type = Input::get("type");

// echo '<pre>'; print_r($data); die;
        if($type === "background"){
            if($pagename === "oshpolicy"){
                $success =  OshPolicy::where('id', 1)->update(['backgroundImages' => "", 'backgroundImages_active' => 0, 'backgroundImages_title' => ""]);
            }else if($pagename === "environmentalpolicy"){
                $success = EnvironmentalPolicy::where('id', 1)->update(['backgroundImages' => "", 'backgroundImages_active' => 0, 'backgroundImages_title' => ""]);
            }else if($pagename === "qualitypolicy"){
                $success = QualityPolicy::where('id', 1)->update(['backgroundImages' => "", 'backgroundImages_active' => 0, 'backgroundImages_title' => ""]);
            }else if($pagename === "commandment"){
                $success = Commandment::where('id', 1)->update(['backgroundImages' => "", 'backgroundImages_active' => 0, 'backgroundImages_title' => ""]);
            }else if($pagename === "customer-experiences"){
                $success = CompanyExperience::where('id', 1)->update(['backgroundImages' => "", 'backgroundImages_active' => 0, 'backgroundImages_title' => ""]);
            }else if($pagename === "company-profile"){
                $success = CompanyProfile::where('id', 1)->update(['backgroundImages' => "", 'backgroundImages_active' => 0, 'backgroundImages_title' => ""]);
            }
        }else if($type = "body"){
            if($pagename === "oshpolicy"){
                $success =  OshPolicy::where('id', 1)->update(['bodyImages' => "", 'bodyImages_active' => 0, 'bodyImages_title' => ""]);
            }else if($pagename === "environmentalpolicy"){
                $success =  EnvironmentalPolicy::where('id', 1)->update(['bodyImages' => "", 'bodyImages_active' => 0, 'bodyImages_title' => ""]);
            }else if($pagename === "qualitypolicy"){
                $success =  QualityPolicy::where('id', 1)->update(['bodyImages' => "", 'bodyImages_active' => 0, 'bodyImages_title' => ""]);
            }else if($pagename === "commandment"){
                $success = Commandment::where('id', 1)->update(['bodyImages' => "", 'bodyImages_active' => 0, 'bodyImages_title' => ""]);
            }else if($pagename === "customer-experiences"){
                $success = CompanyExperience::where('id', 1)->update(['bodyImages' => "", 'bodyImages_active' => 0, 'bodyImages_title' => ""]);
            }else if($pagename === "company-profile"){
                $success = CompanyProfile::where('id', 1)->update(['bodyImages' => "", 'bodyImages_active' => 0, 'bodyImages_title' => ""]);
            }
        }
        if ($success) {
            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
        } else {
            return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
        }
        
    }


    public function qualitypolicy() {
        $data = QualityPolicy::first();
        $heading = 'Quality Policy';
        return View::make('admin.Qualitypolicy', array('data' => $data, 'pageTitle' => $heading));
    }

    public function upadteQualityPolicy() {
        $data = Input::all();
//echo '<pre>'; print_r($data); die;
        $oldData = QualityPolicy::first();
        $mainImage = $oldData->backgroundImages;
        $bodyImage = $oldData->bodyImages;
        $destinationPath = 'public/uploads/'; // upload path
        if (!empty($data['mainImage'])) {

            $files = Input::file('mainImage');
            $mainImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
            $ext = explode('.', $mainImage);
            $ext = strtolower($ext[count($ext) - 1]);
            $upload_success = $files->move($destinationPath, $mainImage);
        }else if(!empty($data["deleteBackgroundImage"])){
            if($data["deleteBackgroundImage"] === "on"){
                $mainImage = "";
            }
        }

        if (!empty($data['bodyImage'])) {

            $files = Input::file('bodyImage');
            $bodyImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
            $ext = explode('.', $bodyImage);
            $ext = strtolower($ext[count($ext) - 1]);
            $upload_success = $files->move($destinationPath, $bodyImage);
        }else if(!empty($data["deleteBodyImage"])){
            if($data["deleteBodyImage"] === "on"){
                $bodyImage = "";
            }
        }


        if (QualityPolicy::where('id', 1)->update(['title' => $data['title'], 'subtitle' => $data['subtitle'], 'text' => $data['text'], 'backgroundImages' => $mainImage, 'bodyImages' => $bodyImage])) {
//            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
//                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
//                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
//                <p>Quality assurance updated successfully.</p>
//              </div>');
            
            if (Input::get('preview')) {
                $redirecturl = '/' . Input::get('preview');
                return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Quality Policy updated successfully.</p>
              </div><script type="text/javascript">
                    window.open("' . url() . $redirecturl . '","_blank");                    
                </script>');
            } else {
                return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Quality Policy updated successfully.</p>
              </div>');
            }
        }
        return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
    }

    public function environmentalpolicy() {
        $data = EnvironmentalPolicy::first();
        $heading = 'EnvironmentalPolicy';
        return View::make('admin.Environmentalpolicy', array('data' => $data, 'pageTitle' => $heading));
    }

    public function upadteEnvironmentalpolicy() {
        $data = Input::all();
//echo '<pre>'; print_r($data); die;
        $oldData = EnvironmentalPolicy::first();
        $mainImage = $oldData->backgroundImages;
        $bodyImage = $oldData->bodyImages;
        $destinationPath = 'public/uploads/'; // upload path
        if (!empty($data['mainImage'])) {

            $files = Input::file('mainImage');
            $mainImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
            $ext = explode('.', $mainImage);
            $ext = strtolower($ext[count($ext) - 1]);
            $upload_success = $files->move($destinationPath, $mainImage);
        }else if(!empty($data["deleteBackgroundImage"])){
            if($data["deleteBackgroundImage"] === "on"){
                $mainImage = "";
            }
        }

        if (!empty($data['bodyImage'])) {

            $files = Input::file('bodyImage');
            $bodyImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
            $ext = explode('.', $bodyImage);
            $ext = strtolower($ext[count($ext) - 1]);
            $upload_success = $files->move($destinationPath, $bodyImage);
        }else if(!empty($data["deleteBodyImage"])){
            if($data["deleteBodyImage"] === "on"){
                $bodyImage = "";
            }
        }


        if (EnvironmentalPolicy::where('id', 1)->update(['title' => $data['title'], 'subtitle' => $data['subtitle'], 'text' => $data['text'], 'backgroundImages' => $mainImage, 'bodyImages' => $bodyImage])) {
//            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
//                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
//                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
//                <p>Quality assurance updated successfully.</p>
//              </div>');
            
            if (Input::get('preview')) {
                $redirecturl = '/' . Input::get('preview');
                return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Environmental Policy updated successfully.</p>
              </div><script type="text/javascript">
                    window.open("' . url() . $redirecturl . '","_blank");                    
                </script>');
            } else {
                return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Environmental Policy updated successfully.</p>
              </div>');
            }
        }
        return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
    }


    public function commandment() {
        $data = Commandment::first();
        $heading = 'Commandment';
        return View::make('admin.Commandment', array('data' => $data, 'pageTitle' => $heading));
    }

    public function upadteCommandment() {
        $data = Input::all();
//echo '<pre>'; print_r($data); die;
        $oldData = Commandment::first();
        $mainImage = $oldData->backgroundImages;
        $bodyImage = $oldData->bodyImages;
        $destinationPath = 'public/uploads/'; // upload path
        if (!empty($data['mainImage'])) {

            $files = Input::file('mainImage');
            $mainImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
            $ext = explode('.', $mainImage);
            $ext = strtolower($ext[count($ext) - 1]);
            $upload_success = $files->move($destinationPath, $mainImage);
        }else if(!empty($data["deleteBackgroundImage"])){
            if($data["deleteBackgroundImage"] === "on"){
                $mainImage = "";
            }
        }

        if (!empty($data['bodyImage'])) {

            $files = Input::file('bodyImage');
            $bodyImage = md5(uniqid()) . '.' . $files->getClientOriginalExtension();
            $ext = explode('.', $bodyImage);
            $ext = strtolower($ext[count($ext) - 1]);
            $upload_success = $files->move($destinationPath, $bodyImage);
        }else if(!empty($data["deleteBodyImage"])){
            if($data["deleteBodyImage"] === "on"){
                $bodyImage = "";
            }
        }


        if (Commandment::where('id', 1)->update(['title' => $data['title'], 'subtitle' => $data['subtitle'], 'text' => $data['text'], 'backgroundImages' => $mainImage, 'bodyImages' => $bodyImage])) {
//            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
//                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
//                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
//                <p>Quality assurance updated successfully.</p>
//              </div>');
            
            if (Input::get('preview')) {
                $redirecturl = '/' . Input::get('preview');
                return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Commandment updated successfully.</p>
              </div><script type="text/javascript">
                    window.open("' . url() . $redirecturl . '","_blank");                    
                </script>');
            } else {
                return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Commandment updated successfully.</p>
              </div>');
            }
        }
        return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
    }


    public function adminindex() {

        $page = Page::where('type', '=', 'index')->where('published', '=', 1)->get();

        /* Paginate Count Section */
        $pgCount = Banner::count();
        for ($i = 1; $i <= $pgCount; $i++) {
            if ($i == 1) {
                $cntArr[10] = 10;
            }

            if ($i == 11) {
                $cntArr[20] = 20;
            }

            if ($i == 21) {
                $cntArr[30] = 30;
            }

            if ($i == 31) {
                $cntArr[50] = 50;
            }

            if ($i == 51) {
                $cntArr[100] = 100;
                //exit;
            }
        }
        if (Input::get('noperpage1')) {
            $noperpage = Input::get('noperpage1');
        } else {

            $noperpage = 10;
        }
        /* End of Paginate Count Section */
        $banners = Banner::paginate($noperpage);
        if ($pgCount > 0) {
            $cntarray1 = $cntArr;
        } else {
            $cntarray1 = 0;
        }

        /* Paginate Count Section */
        $pgCount = Corebusiness::count();
        for ($i = 1; $i <= $pgCount; $i++) {
            if ($i == 1) {
                $cntArr[10] = 10;
            }

            if ($i == 11) {
                $cntArr[20] = 20;
            }

            if ($i == 21) {
                $cntArr[30] = 30;
            }

            if ($i == 31) {
                $cntArr[50] = 50;
            }

            if ($i == 51) {
                $cntArr[100] = 100;
                //exit;
            }
        }
        if (Input::get('noperpage2')) {
            $noperpage = Input::get('noperpage2');
        } else {

            $noperpage = 10;
        }
        /* End of Paginate Count Section */
        $corebusinesses = Corebusiness::orderBy(DB::raw("STR_TO_DATE(date, '%d %M,%Y')"), 'desc')->paginate($noperpage);
        if ($pgCount > 0) {
            $cntarray2 = $cntArr;
        } else {
            $cntarray2 = 0;
        }
        return View::make('admin.adminindex', array('page' => $page, 'banners' => $banners, 'cntarray1' => $cntarray1, 'cntarray2' => $cntarray2, 'corebusinesses' => $corebusinesses));
    }

    public function deleteBanner() {
        $id = Input::get('bannerid');
        $banner = Banner::findOrFail($id);
        $banner->delete();
        if ($banner) {
            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
        } else {
            return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
        }
        // $banners = Banner::paginate(2);
        // $corebusinesses = Corebusiness::paginate(2);
        // return View::make('adminindex', array ( 'banners' => $banners, 'corebusinesses' => $corebusinesses ));
    }

    public function addBanner() {
        //dd(Input::all());
        $banner = Banner::create(Input::all());
        if ($banner) {
            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Montage Added Successfully.</p>
              </div>');
        } else {
            return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
        }
    }

    public function editBanner() {
        //dd(Input::get('active'));
        $bannerId = Input::get('bannerid');
        $banner = Banner::find($bannerId);
        $banner->bannerimage = Input::file('bannerimage');
        $banner->title = Input::get('title');
        $banner->banner_text1 = Input::get('banner_text1');
        $banner->banner_text2 = Input::get('banner_text2');
        $banner->active = Input::get('active');
        if ($banner->save()) {
            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Montage edited Successfully.</p>
              </div>');
        } else {
            return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
        }
    }

    /* Core Businesses Functions */

    public function addCorebusiness() {
        $corebusinesses = Corebusiness::create(Input::all());
        if ($corebusinesses) {
            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>News Added Successfully.</p>
              </div>');
        } else {
            return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
        }
    }

    public function deleteCorebusiness() {
        $id = Input::get('corebusinessid');
        $corebusinesses = Corebusiness::findOrFail($id);
        $corebusinesses->delete();
        if ($corebusinesses) {
            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
        } else {
            return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
        }
        // $banners = Banner::paginate(2);
        // $corebusinesses = Corebusiness::paginate(2);
        // return View::make('adminindex', array ( 'banners' => $banners, 'corebusinesses' => $corebusinesses ));
    }

    public function editCorebusiness() {
        //dd(Input::get('active'));
        $corebusinessId = Input::get('corebusinessid');
        $corebusiness = Corebusiness::find($corebusinessId);

        $corebusiness->title = Input::get('title');
        $corebusiness->short_description = Input::get('short_description');
        $corebusiness->url = Input::get('url');
        $corebusiness->date = Input::get('date');
        $corebusiness->active = Input::get('active');
        if ($corebusiness->save()) {
            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>News and Events edited Successfully.</p>
              </div>');
        } else {
            return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
        }
    }

    public function deleteCorebusinessAll() {
        $slidingbanners = Corebusiness::truncate();
        if ($slidingbanners) {
            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Records Deleted Successfully.</p>
              </div>');
        } else {
            return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
        }
    }

    /* End of Core Businesses Functions */

    public function handleLogout() {

        Auth::logout();
        return Redirect::intended('admin/login');
    }

    public function forgotPassword() {


        return View::make('forgotpass');
    }

    public function updateOrder() {
        $data = json_decode($_POST['OrderData']);
        $model = ucwords(Input::get('model'));
        foreach (get_object_vars($data) as $k => $value) {

            $corebusiness = $model::find($k);
            $corebusiness->display_order = $value;
            $corebusiness->save();
        }
    }

    public function deletePdf() {
        echo $recId = Input::get('RecId');
        echo $model = Input::get('model');
        $pdfattachment = $model::find($recId);
        $pdfattachment->pdf = STAPLER_NULL;
        $pdfattachment->save();
    }

    public function changeOrder() {

        $data = Input::all();
//        echo '<pre>';
//        print_r($data['data']);
//        die;
        foreach ($data['data'] as $sliderImage) {
            Slidingbanner::where('id', $sliderImage['slider_id'])->update(['display_order' => $sliderImage['order']]);
        }
        //die('here');
        return Response::json(200);
    }

}
