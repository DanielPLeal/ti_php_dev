@if(isset($errors)&&count($errors)>0)	

	<script  type="text/javascript">
		@foreach ($errors->all() as $error)
		$(document).ready(function(){
			generate("{!! $error !!}","error",5000,true);
		});
		@endforeach
	</script>
	
@endif