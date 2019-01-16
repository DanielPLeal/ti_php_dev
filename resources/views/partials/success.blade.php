@if(session()->has('success'))

	<script  type="text/javascript">
		$(document).ready(function(){
			generate("{!! session()->get('success')!!}","success",5000,false);
		});
	</script>

@endif