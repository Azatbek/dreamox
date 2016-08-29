<?php namespace App\Http\Controllers;
use Input;
use App\Http\Requests;
use App\Products;
use App\Http\Controllers\Controller;
use Guzzle;
use Illuminate\Http\Request;

class ProductsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$product = Products::where('id','=',$id)->first();

		return view('front.product',array('product'=>$product));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}
	public function payment()
	{
		$data = Input::all();
		$id = Input::get('id');
		$product = Products::where('id','=',$id)->first();

		$response = Guzzle::post(
    'https://wl.walletone.com/checkout/checkout/Index',
    [
        'form_params' => [
            'WMI_MERCHANT_ID' => 197239847398,
						'WMI_PAYMENT_AMOUNT' => $product->price,
						'WMI_CURRENCY_ID' => 398,
						'WMI_DESCRIPTION' => 'Оплата за'.$product->title,
						'WMI_SUCCESS_URL' => 'http://google.com',
						'WMI_FAIL_URL' => 'http://kaz-news.kz'
        ]
    ]
);
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
