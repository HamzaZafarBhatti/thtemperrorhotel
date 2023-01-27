<?php

class ContactController extends BaseController {
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

    public function feedbackFront() {
        $page = Page::where('type', '=', 'feedback')->where('published', '=', 1)->get();
        $contacthead = '<iframe id="map_load_dynamic1" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44&q=' . $page[0]->right_block1_content . '"
   width="100%" height="230" frameborder="0" style="border:0;"></iframe>';
        $pageTitle = $page[0]->left_block1_title;

        $breadcrumbs = array(
            0 => array
                (
                "title" => "Home",
                "url" => ""
            ),
            1 => array
                (
                "title" => "Contacts",
                "url" => ""
            )
        );

        $mainMenuTitle = $page[0]->page_title;
        return View::make('frontfeedback', array(
                    'page' => $page[0],
                    'mainMenuTitle' => $mainMenuTitle,
                    'contacthead' => $contacthead,
                    'pageTitle' => $pageTitle,
                    'breadcrumbs' => $breadcrumbs
        ));
    }

    public function contactusFront() {


        $page = Page::where('type', '=', 'contactus')->where('published', '=', 1)->get();
        $contacthead = '<iframe id="map_load_dynamic1" src="https://www.google.' . $page[0]->left_inner_block_title20 . '"
   width="100%" height="230" frameborder="0" style="border:0;"></iframe>';
        $pageTitle = $page[0]->left_block1_title;

        $breadcrumbs = array(
            0 => array
                (
                "title" => "Home",
                "url" => ""
            ),
            1 => array
                (
                "title" => "Contacts",
                "url" => ""
            ),
            2 => array
                (
                "title" => "Contact Us",
                "url" => ""
            )
        );

        $mainMenuTitle = $page[0]->page_title;
        $categories_arr = array('' => '--Please Select--');
        $subcategories_arr = array('' => '--Please Select--');
        $cats = Enquirycategory::where('parent_id', '=', 0)->where('active', 1)->lists('title', 'id');
        foreach ($cats as $key => $val) {
            $categories_arr[$key] = $val;
        }
        return View::make('front.contact', array(
                    'page' => $page[0],
                    'mainMenuTitle' => $mainMenuTitle,
                    'contacthead' => $contacthead,
                    'pageTitle' => $pageTitle,
                    'breadcrumbs' => $breadcrumbs,
                    'categories_arr' => $categories_arr,
                    'subcategories_arr' => $subcategories_arr
        ));
    }

    public function adminContactus() {
        $page = Page::where('type', '=', 'contactus')->where('published', '=', 1)->get();
        return View::make('admincontactus', array('page' => $page));
    }

    //admin feedback
    public function adminFeedback() {
        $page = Page::where('type', '=', 'contactus')->where('published', '=', 1)->get();
        /* Paginate Count Section */
        $pgCount = Feedback::count();
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

        if ($pgCount > 0) {
            $cntarray1 = $cntArr;
        } else {
            $cntarray1 = 0;
        }

        $feedbacks = Feedback::orderBy('id', 'DESC')->paginate($noperpage);
        return View::make('admin.adminfeedback', array('page' => $page, 'feedbacks' => $feedbacks, 'cntarray1' => $cntarray1));
    }

    public function adminDeleteFeedback() {
        $id = Input::get('feedbackid');
        $pressrelease = Feedback::findOrFail($id);
        $pressrelease->delete();
        if ($pressrelease) {
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

    public function adminDeleteAllFeedback() {
        $pressrelease = Feedback::truncate();
        if ($pressrelease) {
            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Records Deleted Successfully.</p>
              </div>');
        } else {
            return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
        }
    }

    public function submitFeedback() {
        $name = Input::get('name');
        $email = Input::get('email');
        $contact_number = Input::get('contact_number');
        $company_name = Input::get('company_name');
        $company_address = Input::get('company_address');
        $city = Input::get('city');
        $state = Input::get('state');
        $post_code = Input::get('post_code');
        $country = Input::get('country');
        $cat_id = Input::get('cat_id');
        $subcat_id = Input::get('subcat_id');
        $subject = Input::get('subject');
        $questions_comments = Input::get('questions_comments');


        $category = Enquirycategory::where('id', '=', $cat_id)->first();
        $category_name = $category->title;
        $subcategory_name = '';
        if (!empty($subcat_id)) {
            $subcategory = Enquirycategory::where('id', '=', $subcat_id)->first();
            $subcategory_name = $subcategory->title;
        } else {
            $subcat_id = 0;
        }
        $matchThese = ['cat_id' => $cat_id, 'subcat_id' => $subcat_id];
        $enquiry_email = Enquiryemail::where($matchThese)->get();
        $email_arr = array();
        foreach($enquiry_email as $em)
        {
            array_push($email_arr,$em->email);
        }    
        if (!empty($enquiry_email)) {

            $emailcontent = array(
                'name' => $name,
                'email' => $email,
                'contact_number' => $contact_number,
                'company_name' => $company_name,
                'company_address' => $company_address,
                'city' => $city,
                'state' => $state,
                'post_code' => $post_code,
                'country' => $country,
                'category_name' => $category_name,
                'subcategory_name' => $subcategory_name,
                'subject' => $subject,
                'questions_comments' => $questions_comments
            );
            Mail::send('email', $emailcontent, function($message) use ($email_arr) {
                $message->to($email_arr, 'Learning Laravel Support')
                        ->subject('1 NEW feedback for your review from KYM website');
            });
        }
        $feedbacks = Feedback::create(Input::all());
        if ($feedbacks) {
            return Redirect::back()->with('message', '<br><br><br><div class="alert alert-success nomargin"><i class="icon-flag"></i>Success! Thank you for submitting the feedback.</div>');
        } else {
            return Redirect::back()->with('message', '<div class="alert alert-error">
								<i class="icon-warning-sign"></i>
								Error! Please correct the errors in the form below.
							</div>
                            ');
        }
    }

//updateMapUrl
    public function updateMapUrl() {
        $result = "error";

        if (isset($_REQUEST["required_url"])) {

            $q = $_REQUEST["required_url"];

            $member = embedMapModel::create(array(
                        'EmbedUrl' => strip_tags($q),
            ));
            if ($member) {
                $result = "success";
            }
        }
        return $result;
    }

    public function getSubcategory($id) {
        $sub_categories = Enquirycategory::where('parent_id', $id)->lists('title', 'id');
        ?>
        <option value=''>--Please Select--</option>
        <?php
        foreach ($sub_categories as $key => $val) {
            ?>
            <option value='<?php echo $key; ?>'><?php echo $val ?></option>
            <?php
        }
    }

}
