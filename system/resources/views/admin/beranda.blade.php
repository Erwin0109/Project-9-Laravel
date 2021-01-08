@extends('admin.template.base')

@section('content')
<div class="jumbotron">	
	<h1>
		Selamat Malam :) @if(Auth::check()){{request()->user()->nama}}@endif ...<br>
		Jangan Lupa Gedabang Yaaa !!
	</h1>
</div>
@endsection