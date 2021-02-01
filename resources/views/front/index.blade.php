@extends('front.layouts.defaults',['title' => 'ACCUEIL'])

@section('content')
	<section class="section-index">
		<div class="container">
			<div class="row">
				@foreach($posts as $post)
				<div class="col-md-6 col-xs-12" style="padding-bottom: 3em;">
					<h3 class="title_three">{{ $post->title }}</h3>
					<div class="card">
						<img src="{{asset('admin/media/'.$post->picture)}}" style="width: 100%;">
					</div>
					<p class="justifyText">{{substr($post->description,0,90)}}{{ (strlen($post->description) >= 90) ? '...' : '' }}</p>
					<a href="/detail_annonce/{{ $post->id }}" class="btn btn-blog" style="color: white;">LIRE LA SUITE</a>
				</div>
				@endforeach
			</div>
			<p>{{ $posts->links() }}</p>
		</div>
	</section>
@endsection