@extends('app')

@section('content')
<div class="intro">
		<div class="vertical-align">
			<div class="transparent-text">
				<h1>Выбирай лучшее с Your Dream Box!</h1>
				<div class="flex-list">
				  <ul>
					<li>Лучшие коробки</li>
					<li>Дешево</li>
					<li>Бесплатная доставка</li>
				  </ul>
				</div>
				<a href="#shop" class="btn btn-primary btn-lg sharp">Что дальше?</a>
			</div>
		</div>
	</div>
    <!-- Page Content -->
    <div class="container" id="shop">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                  @include('front.part.home')
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
@endsection
