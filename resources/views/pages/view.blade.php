	@extends('layout.default')

@section('content')
 @include('pages.partials.posts',['post' => $post])
<hr/>
<section id="comments">
	@foreach($post->comments as $comment)
		<div class="comment">
			<p>{{$comment->name}} says.. </p>
			<blockquote>{{$comment->content}}</blockquote>
		</div>
	@endforeach
</section>

<section>
	<h3 class="title">Add a comment</h3>
	<form action="createComment" method="post">
	 	<div class="form-group">
			<input name="name" class="form-control" type="text" placeholder="You">
	 	</div>
	 	<div class="form-group">
			<textarea class="form-control" name="content" placeholder="Write here"></textarea>
	 	</div>
	 	<input type="submit" class="btn btn-primary" />
	 	</form>

</section>
@endsection