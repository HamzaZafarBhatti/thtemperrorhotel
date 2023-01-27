<?php

class BoardcharterController extends \BaseController
{

    /**
     * Show index page of admin Boardcharter.
     *
     * @return mixed
     */
    public function adminBoardcharter()
    {
        $page = Page::where('type', '=', 'boardcharter')->where('published', '=', 1)->get();
        $pgCount = Boardcharter::count();
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
        $boardcharter = Boardcharter::paginate($noperpage);
        if ($pgCount > 0) {
            $cntarray1 = $cntArr;
        } else {
            $cntarray1 = 0;
        }

        return View::make('admin.charter', array('page' => $page, 'boardcharters' => $boardcharter, 'cntarray1' => $cntarray1));
    }

    /**
     * Add board charter.
     *
     * @return mixed
     */
    public function adminAddCharters()
    {
        if (Input::all() &&
            Input::file('image') &&
            Input::file('pdf') &&
            Input::file('image')->getClientSize() < 2097152 &&
            Input::file('pdf')->getClientSize() < 2097152 &&
            Boardcharter::create(Input::all())
        ) {
            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Board Charter Added Successfully.</p>
              </div>');
        } else {
            return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Error</strong>
                <p>Something happened try again. PDF/Image size must be less then 2 MB</p>
              </div>');
        }
    }

    /**
     * Edit board charter.
     *
     * @return mixed
     */
    public function adminEditCharters()
    {
        $sementrasbannerId = Input::get('sementrasbannerid');
        $banner = Boardcharter::find($sementrasbannerId);
        $banner->image = Input::file('image');
        $banner->pdf = Input::file('pdf');
        $banner->title = Input::get('title');
        $banner->date = Input::get('date');
        $banner->short_description = Input::get('short_description');
        $banner->active = Input::get('active');
        if ($banner->save()) {
            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Board Charter edited Successfully.</p>
              </div>');
        } else {
            return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Error</strong>
                <p>Something happened try again.</p>
              </div>');
        }
    }

    /**
     * Delete board charter.
     *
     * @return mixed
     */
    public function adminDeleteCharters()
    {
        $id = Input::get('sementrasbannerid');
        $banner = Boardcharter::findOrFail($id);
        $banner->delete();
        if ($banner) {
            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
        } else {
            return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Error</strong>
                <p>Something happened try again.</p>
              </div>');
        }

    }

    /**
     * Delete all board charters.
     *
     * @return mixed
     */
    public function adminDeleteAllCharters()
    {

        $slidingbanners = Boardcharter::truncate();
        if ($slidingbanners) {
            return Redirect::back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Records Deleted Successfully.</p>
              </div>');
        } else {
            return Redirect::back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Error</strong>
                <p>Something happened try again.</p>
              </div>');
        }

    }

    /**
     * Show Boardcharter page.
     *
     * @return mixed
     */
    public function frontBoardcharter()
    {
        $page = Page::where('type', '=', 'boardcharter')->where('published', '=', 1)->get();

        $boardcharter = Boardcharter::where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date, '%d/%m/%Y')"), 'desc')->get();

        $pageTitle = $page[0]->left_block1_title;
        $masthead = url() . '/images/banner_subpage/banner7.jpg';
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
                "title" => "Corporate Governance",
                "url" => ""
            )

        );

        $mainMenuTitle = $page[0]->page_title;
        return View::make('frontboardcharter', array(
            'page' => $page[0],
            'mainMenuTitle' => $mainMenuTitle,
            'pageTitle' => $pageTitle,
            'breadcrumbs' => $breadcrumbs,
            'masthead' => $masthead,
            'boardcharters' => $boardcharter

        ));

    }

}
