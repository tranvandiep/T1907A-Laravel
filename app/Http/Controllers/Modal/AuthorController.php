<?php

namespace App\Http\Controllers\Modal;

use App\Author;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class AuthorController extends Controller {
	public function index(Request $request) {
		// $authorList = DB::table('author')
		// 	->orderBy('created_at', 'asc')
		// 	->paginate(20);
		$authorList = Author::orderBy('created_at', 'asc')
			->paginate(20);

		return view('modal.author.index')->with([
				'index'      => 1,
				'authorList' => $authorList
			]);
	}

	public function viewAdd(Request $request) {
		return view('modal.author.add');
	}

	public function postAddAuthor(Request $request) {
		$nickname   = $request->nickname;
		$authorList = DB::table('author')
			->where('nickname', $nickname)
			->get();
		if ($authorList != null && count($authorList) > 0) {
			return 'error';
		}

		// DB::table('author')->insert([
		// 		'nickname'     => $request->nickname,
		// 		'fullname'     => $request->fullname,
		// 		'address'      => $request->address,
		// 		'email'        => $request->email,
		// 		'phone_number' => $request->phone_number,
		// 		'created_at'   => date('Y-m-d H:i:s'),
		// 		'updated_at'   => date('Y-m-d H:i:s')
		// 	]);
		Author::insert([
				'nickname'     => $request->nickname,
				'fullname'     => $request->fullname,
				'address'      => $request->address,
				'email'        => $request->email,
				'phone_number' => $request->phone_number,
				'created_at'   => date('Y-m-d H:i:s'),
				'updated_at'   => date('Y-m-d H:i:s')
			]);

		return redirect()->route('view_author_list');
	}
}
