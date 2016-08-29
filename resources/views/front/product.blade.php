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
  						<button type="button" class="btn btn-success">
  							Купить
  						</button>
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