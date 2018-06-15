@extends('welcome')
@section('content')
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		<form action="{{url('/store')}}" method="post">
			@csrf
			<div class="input-group mb-3">
				<input type="text" name="key" class="form-control" placeholder="API key" value="{{old('key')}}" aria-label="Recipient's username" aria-describedby="basic-addon2">
			</div>
			<div class="input-group mb-3">
				<input type="text" name="name" class="form-control" placeholder="City" aria-label="Recipient's username" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button  class="btn btn-success btn-submit" style="color:white;" type="button">&#10003;</button>
				</div>
			</div>
			<p hidden class="errorContent text-center alert alert-danger"></p>
		</form>
	</div>
</div>
@endsection