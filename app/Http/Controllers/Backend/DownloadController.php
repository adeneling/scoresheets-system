<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Scoresheet;
use Excel;

class DownloadController extends Controller
{
    public function downloadUsers(Request $request, $type)
	{
		$data = User::where('category_id', '!=', null)->get()->toArray();
		return Excel::create('Users List - Scoresheets System - '.date('Y-m-d'), function($excel) use ($data) {
			$excel->sheet('List-Participant', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	public function downloadScoresheets(Request $request, $type)
	{
		$data = Scoresheet::orderBy('total_coeficient_score', 'desc')->get()->toArray();
		return Excel::create('Scoresheet - Scoresheets System - '.date('Y-m-d'), function($excel) use ($data) {
			$excel->sheet('List-Scoresheets', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
}
