<div class="form-group">
	<label>User Settings:</label>
	<div class="list-group" id="user-printer-list" data-dialog="<?php if(empty($user_setting)): ?><?php echo e('true'); ?><?php else: ?><?php echo e('false'); ?><?php endif; ?>">
		<em>Carton Printer: </em>
		<a href="#" class="list-group-item list-group-item-action carton"><?php if(isset($user_setting->settings['carton']['printer'])): ?><?php echo e($user_setting->settings['carton']['printer']); ?><?php else: ?> NONE <?php endif; ?></a>
		<br/>
		<em>Sticky Printer: </em>
		<a href="#" class="list-group-item list-group-item-action sticky"><?php if(isset($user_setting->settings['sticky']['printer'])): ?><?php echo e($user_setting->settings['sticky']['printer']); ?><?php else: ?> NONE <?php endif; ?></a>    
	</div>
</div>