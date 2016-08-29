@foreach($products as $items)
<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <a href="products/{{$items->id}}"><img src="images/{{$items->img}}" alt=""></a>
        <div class="caption">
            <h4 class="pull-right">{{$items->price}} KZT</h4>
            <h4><a href="products/{{$items->id}}">{{$items->title}}</a>
            </h4>
            <p>{!!$items->anons!!}</p>
        </div>
        <div class="ratings">
            <p class="pull-right"><span class="disqus-comment-count" data-disqus-url="http://localhost/dreambox/public/products/{{$items->id}}"></span></p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
            </p>
        </div>
    </div>
</div>
@endforeach
