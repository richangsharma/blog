@extends('layout.default')

@section('content')
<div class="container">
<div class="row col-md-6">
<h3>Add a blog post</h3>	
<form action="createpost" method="post" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="col-md-10">
<div class="form-group">
	<input name="title" class="form-control" type="text" placeholder="title">
</div>
<div class="form-group">
	<textarea name="content" class="form-control" placeholder="Write here"></textarea>
</div>
	
<input type="submit" class="btn btn-danger" />

</form>

</div>
</div>
@endsection