<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class PosController extends Controller {
	public function index(Request $request) {
		$id_category = '';
		if (isset($request->id_category) && $request->id_category != '') {
			$id_category = $request->id_category;
		}

		$productList = DB::table('products');
		if ($id_category != '') {
			$productList = $productList->where('id_category', $id_category);
		}
		if (isset($request->s) && $request->s != '') {
			$productList = $productList->where('title', 'like', '%'.$request->s.'%');
		}

		$productList = $productList->paginate(12);
		$categories  = DB::table('categories')->get();

		return view('pos.index')->with([
				'productList' => $productList,
				'categories'  => $categories,
				'id_category' => $id_category
			]);
	}

	public function postOrder(Request $request) {
		$data = $request->data;
		if ($data == null || $data == '') {
			return;
		}
		$data       = json_decode($data, true);
		$idCustomer = $request->id_customer;
		$order      = \App\Order::create([
				'id_customer' => $idCustomer,
				'total'       => $request->total,
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s')
			]);
		foreach ($data as $item) {
			DB::table('order_details')->insert([
					'id_order'   => $order->id,
					'id_product' => $item['id'],
					'num'        => $item['num'],
					'price'      => $item['price'],
					'total'      => $item['price']*$item['num'],
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s')
				]);
		}
	}
}
