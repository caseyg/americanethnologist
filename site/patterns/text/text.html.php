	<div class="text<?php if($module->lead() == "true"): ?> lead<?php if($module->page()->template() == "feature"): echo ""; endif; ?><?php endif ?> <?php if($module->page()->template() == "feature" && $module->lead() == "false"): echo " col-sm-6 push-sm-3"; endif; ?>" id="m-<?php echo $module->slug() ?>">
		<?= $module->text()->kt() ?>
	</div>
