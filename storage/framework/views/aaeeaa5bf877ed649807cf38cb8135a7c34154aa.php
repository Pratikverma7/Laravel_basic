<h1>
	<?php $strlen=20; ?>
	<?php echo e(strlen($a)); ?>

	<br/>
	<?php if(strnlen($data) > 5): ?>

	string has length >0

	<?php elseif(strlen($a)>5 && strlen($a) < 10): ?>

	strlen length within 5 to 10

	<?php elseif(strnlen($a) >10): ?>

	strnlen has length >10

	<?php else: ?> 

	strnlen has length

	<?php endif; ?>

</h1><?php /**PATH C:\Users\pratik verma\Desktop\laravel fresh\laravel_basic\resources\views/condition/elseif.blade.php ENDPATH**/ ?>