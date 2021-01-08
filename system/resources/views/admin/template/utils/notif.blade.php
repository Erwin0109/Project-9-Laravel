@foreach(['success', 'warning', 'danger'] as $status)
	@if (session($status))
	<div class="text-white alert alert-{{$status}} alert-dimissable custom-{{$status}}-box">
		<a href="#" class="close" data-dismiss="alert" aria-labe="close">&times;</a>
		<strong>{{ session($status) }}</strong>
	</div>
	@endif
@endforeach