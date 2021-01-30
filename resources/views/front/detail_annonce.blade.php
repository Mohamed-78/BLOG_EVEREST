@extends('front.layouts.defaults',['title' => 'DETAILS'])


@section('content')
	<div class="container single">
		<div class="title">
			<h3 class="singleTite">{{ $single->title }}</h3>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<img src="front/images/p3.jpg">
				</div>
				<p class="singleParagraphe">{{ $single->description }}</p>

				<a href="/" class="btn btn-blog" style="color: white;">RETOUR</a>
			</div>
		</div>
			<form action="/publier_commentaire/{{ $single->id}}" method="POST" class="form" >		
				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-6 {{ $errors->has('name') ? 'has->error' : '' }}" style="padding-bottom: 2em;padding-top: 3em;">
						{!! $errors->first('name','<span class="help-block">:message</span>') !!}
						<div class="form-group">
							<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Votre nom ici" value="{{ old('name') }}">
						</div>
					</div>
					<div class="col-md-6 {{ $errors->has('first_name') ? 'has->error' : '' }}" style="padding-bottom: 2em;padding-top: 3em;">
						{!! $errors->first('first_name','<span class="help-block">:message</span>') !!}
						<div class="form-group">
							<input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="Votre prénom ici" value="{{ old('first_name') }}">
						</div>
					</div>
					<div class="col-md-12 {{ $errors->has('content') ? 'has->error' : '' }}">
						{!! $errors->first('content','<span class="help-block">:message</span>') !!}
						<div class="form-group">
							<textarea cols="10" name="content" rows="5" class="form-control @error('content') is-invalid @enderror" placeholder="Commentaire">{{ old('content') }}</textarea><br>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-blog bouton" style="color: white;">Commenter</button>
			</form>
			@if(isset($commentaires))
			@foreach($commentaires as $commentaire)
			<div class="commentaire">
				<h3>{{ $commentaire->name}}&nbsp;{{ $commentaire->first_name}}</h3>
				<span><u>Commenté {{ $commentaire->created_at->diffForHumans() }}</u></span>
				<p style="text-align: justify;">{{ $commentaire->content }}</p>
			</div>
			@endforeach
			@else
			<h3 style="color: red;">Aucun commentaire pour cet post</h3>
			@endif
			<p>{{ $commentaires->links() }}</p>
	</div>
@endsection