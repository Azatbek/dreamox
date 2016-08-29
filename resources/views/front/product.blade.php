@extends('app')
@section('content')
<div class="container-fluid">
    <div class="content-wrapper">
		<div class="item-container">
			<div class="container">
				<div class="col-md-12">
					<div class="product col-md-5 service-image-left">
						<center>
							<img id="item-display" src="../images/{{$product->img}}" alt=""></img>
						</center>
					</div>
          <div class="col-md-7">
  					<div class="product-title">{{$product->title}}</div>
  					<div class="product-desc">{!!$product->anons!!}</div>
  					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
  					<hr>
  					<div class="product-price">{{$product->price}} KZT</div>
  					<div class="product-stock">@if($product->available==1)В наличии@else <span style="color:red">Нет в наличии</span>@endif</div>
  					<hr>
  					<div class="btn-group cart">
              <form method="post" action="https://wl.walletone.com/checkout/checkout/Index">
                <div class="form-group">
                  <label for="email">Введите свой e-mail адрес для получения уведомления</label>
                  <input type="text" class="form-control" placeholder="email" name="email" />
                </div>
                <input name="WMI_MERCHANT_ID"    value="197239847398" type="hidden"/>
                <input name="WMI_PAYMENT_AMOUNT" value="{{$product->price}}" type="hidden"/>
                <input name="WMI_CURRENCY_ID"    value="398" type="hidden"/>
                <input name="WMI_DESCRIPTION"    value="Оплата за {{$product->title}}" type="hidden"/>
                <input name="WMI_SUCCESS_URL"    value="http://localhost/dreambox/public?success" type="hidden"/>
                <input name="WMI_FAIL_URL"       value="http://localhost/dreambox/public?fail" type="hidden"/>
                <input name="_token"       value="{{csrf_token()}}" type="hidden"/>
                <input name="pr_id"       value="{{$product->id}}" type="hidden"/>
                <button class="btn btn-success" id ="sendPost" type="button">
                  Купить
                </button>
              </form>
  					</div>
  					</div>
  				</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">

						<li class="active"><a href="#service-one" data-toggle="tab">Описание</a></li>
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">

							<section class="container product-info">
								{!!$product->description!!}
							</section>

						</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>
@endsection
