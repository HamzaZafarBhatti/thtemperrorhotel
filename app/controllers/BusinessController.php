<?php

	class BusinessController extends BaseController {

		public function adminPaperBags() {
			 $page = Page::where('type','=','paperbags')->where('published','=',1)->get();

			  return View::make('admin.paperbags', array('page' => $page[0]));

		}

		public function adminCorrugated() {
			 $page = Page::where('type','=','cartoonbox')->where('published','=',1)->get();
                         $pgCount = Slidingbanner::where('type','=','technology')->count();
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
                         $slidingbanners = Slidingbanner::where('type', '=', 'technology')->paginate($noperpage);
                         if ($pgCount > 0) {
                                $cntarray1 = $cntArr;
                            } else {
                                $cntarray1 = 0;
                            }
			return View::make('admin.corrugated', array('page' => $page[0], 'slidingbanners' => $slidingbanners, 'cntarray1' => $cntarray1,));
		}
	}



