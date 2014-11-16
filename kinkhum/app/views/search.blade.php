@extends('layout')
@section('body')

<div class="container">
	<div class="col-md-12">
		<h2 class="page-header">Search</h2>
		
	</div>
	@if(isset($search))
	@foreach($search as $restaurant)
	<div class="col-xs-6 col-md-4" style="margin-left: 52;">
		<div class="panel panel-default" style="margin-left: -60;">
			<div class="panel-heading"><a href="show/{{$restaurant->id}}" class="pull-right">View all</a> <h4>{{$restaurant->restaurant}}</h4></div>
			<div class="panel-body">
				
				<div class="clearfix"></div>
				<img src="/image/{{$restaurant->image}} " class="img-responsive img-thumbnail pull-right">
				<p style="margin-right: 140;">{{$restaurant->type}}<br>
				{{$restaurant->address}}<br>
				{{$restaurant->telephone}}<br>
				</p>
			</div>
		</div>
	</div>
	@endforeach
	@endif
</div>
</div>
@stop