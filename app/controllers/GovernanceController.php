<?php

	class GovernanceController extends BaseController {

		public function adminBoardcharter() {
				$page = Page::where('type', '=', 'boardcharter')->where('published', '=', 1)->get();
			  return View::make('admin.charter', array('page' => $page[0]));

		}

		public function adminAudit() {

$page = Page::where('type', '=', 'auditcommitte')->where('published', '=', 1)->get();
			  return View::make('admin.audit', array('page' => $page[0]));

			
		}

		public function adminNomination() {


$page = Page::where('type', '=', 'nomination')->where('published', '=', 1)->get();
			  return View::make('admin.nomination', array('page' => $page[0]));
			
		}
	}