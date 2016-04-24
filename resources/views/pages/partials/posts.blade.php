<div class="container">
<article>
	<header>
      <h1>{{$post->title}} </h1>
	</header>
	<div class="content">
		{{$post->content}}
	</div>
	<footer class="blog_footer">
		<p>Posted {{$post->created_at->diffForHumans()}}</p>
	</footer>

</article>
</article>