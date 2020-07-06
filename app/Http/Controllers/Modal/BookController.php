<?php

namespace App\Http\Controllers\Modal;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class BookController extends Controller {
	public function index(Request $request) {
		$bookList = DB::table('book')
			->leftJoin('author', 'author.nickname', '=', 'book.nickname')
			->select('book.*', 'author.fullname')
			->orderBy('author.created_at', 'asc')
			->paginate(20);

		return view('modal.book.index')->with([
				'index'    => 1,
				'bookList' => $bookList
			]);
	}

	public function viewAdd(Request $request) {
		$authorList = DB::table('author')
			->select('nickname', 'fullname')
			->orderBy('created_at', 'asc')
			->get();

		return view('modal.book.add')->with([
				'authorList' => $authorList
			]);
	}

	public function postAddBook(Request $request) {
		DB::table('book')->insert([
				'title'      => $request->title,
				'nickname'   => $request->nickname,
				'price'      => $request->price,
				'nxb'        => $request->nxb,
				'content'    => $request->content,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			]);
		return redirect()->route('view_book_list');
	}
}
