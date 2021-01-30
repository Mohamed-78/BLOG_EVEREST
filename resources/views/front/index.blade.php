@extends('front.layouts.defaults',['title' => 'ACCUEIL'])

@section('content')
	<section class="section-index">
		<div class="container">
			<div class="row">
				@foreach($posts as $post)
				<div class="col-md-6 col-xs-12" style="padding-bottom: 3em;">
					<h3 class="title_three">{{ $post->title }}</h3>
					<div class="card">
						<img src="front/images/p3.jpg" style="width: 100%;">
					</div>
					<p class="justifyText">{{substr($post->description,0,90)}}{{ (strlen($post->description) >= 90) ? '...' : '' }}</p>
					<a href="/detail_annonce/{{ $post->id }}" class="btn btn-blog" style="color: white;">LIRE LA SUITE</a>
				</div>
				@endforeach
			</div>
			{{-- <div class="row">
				<div class="col-md-6">
					<div class="card" style="width: 25rem;">
					  <img src="front/p3.jpg"7>
					  <div class="card-body">
						    <h5 class="card-title">Card title</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card" style="width: 25rem;">
				  <img src="front/p3.jpg"7>
				  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
				</div>
			</div> --}}
		</div>
	</section>
@endsection