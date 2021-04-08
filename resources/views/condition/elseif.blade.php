<h1>
	<?php $strlen=20; ?>
	{{strlen($a)}}
	<br/>
	@if(strnlen($data) > 5)

	string has length >0

	@elseif(strlen($a)>5 && strlen($a) < 10)

	strlen length within 5 to 10

	@elseif(strnlen($a) >10)

	strnlen has length >10

	@else 

	strnlen has length

	@endif

</h1>