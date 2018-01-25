<div class="alert alert-info">
    In order to detect and set the local printers to print the generated labels, it is necessary to install print client - <a class="btn btn-default btn-xs" href="https://qz.io/download/" target='_blank'>Download Print Client</a>
</div>
<form id="formPrinterSetting" class="modal-body" style="overflow:hidden">
    <input type="hidden" name="id" value="<?php echo e($user['id']); ?>"/>
    <div class="col-xs-6">
        <div class="form-group">
            <?php echo e(csrf_field()); ?>

            <label for="sticky" class="col-xs-3">Sticky:</label>
            <select name="sticky[printer]" class="form-control" id="sticky-select" required></select>
        </div>
        <div class="form-group">
            <div class="checkbox">
                    <label><input name="sticky[passthroughmode]" type="checkbox" <?php if (isset($user_setting->settings['sticky']['passthroughmode'])) echo ($user_setting->settings['sticky']['passthroughmode']=='on' ? 'checked' : '');?>> Enable pass through mode</label>
                    <span id="helpBlock" class="help-block"><i class="fa fa-info-circle"> </i> Enable only if passthrough mode on printer preferences is also enabled</span>
            </div>
        </div>    
        <div class="form-group">
            <label for="density" class="col-xs-3">Density:</label>
            <select name="sticky[density]" class="form-control" required>
                <?php $__currentLoopData = $printer_settings['density']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if((isset( $user_setting->settings['sticky']['density'])) and ($key == $user_setting->settings['sticky']['density'])): ?>
                        <option value="<?php echo e($key); ?>" selected><?php echo e($value); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="sticky">Width:(mm)</label>
            <input name="sticky[width]" class="form-control" value="<?php echo e(isset($user_setting->settings['sticky']['width']) ? $user_setting->settings['sticky']['width'] : 148); ?>" required/>
        </div>
        <div class="form-group">
            <label for="sticky">Height:(mm)</label>
            <input name="sticky[height]" class="form-control" value="<?php echo e(isset($user_setting->settings['sticky']['height']) ? $user_setting->settings['sticky']['height'] : 48); ?>" required/>
        </div>
        <div class="form-group">
            <label for="sticky">Label Per Row:</label>
            <input name="sticky[count]" class="form-control" value="<?php echo e(isset($user_setting->settings['sticky']['count']) ? $user_setting->settings['sticky']['count'] : 1); ?>" required/>
        </div>
    </div>
    <div class="col-xs-6">    
        <div class="form-group" >
            <label for="carton" class="col-xs-3">Carton:</label>
            <select name="carton[printer]" class="form-control" id="carton-select" class="col-xs-5" required></select>
        </div>
        <div class="form-group">
            <div class="checkbox">
                    <label><input name="carton[passthroughmode]" type="checkbox" <?php if (isset($user_setting->settings['carton']['passthroughmode'])) echo ($user_setting->settings['carton']['passthroughmode']=='on' ? 'checked' : '');?>>Enable pass through mode</label>
                    <span id="helpBlock" class="help-block"><i class="fa fa-info-circle"> </i> Enable only if passthrough mode on printer preferences is also enabled</span>
            </div>
        </div>  
        <div class="form-group">
            <label for="density" class="col-xs-3">Density:</label>
            <select name="carton[density]" class="form-control" required>
                <?php $__currentLoopData = $printer_settings['density']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if((isset( $user_setting->settings['carton']['density'])) and ($key == $user_setting->settings['carton']['density'])): ?>
                        <option value="<?php echo e($key); ?>" selected><?php echo e($value); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="carton">Width:(mm)</label>
            <input name="carton[width]" class="form-control" value="<?php echo e(isset($user_setting->settings['carton']['width']) ? $user_setting->settings['carton']['width'] : 105); ?>" required/>
        </div>
        <div class="form-group">
            <label for="carton">Height:(mm)</label>
            <input name="carton[height]" class="form-control" value="<?php echo e(isset($user_setting->settings['carton']['height']) ? $user_setting->settings['carton']['height'] : 150); ?>" required/>
        </div>
        <div class="form-group">
            <label for="carton">Label Per Row:</label>
            <input name="carton[count]" class="form-control" value="<?php echo e(isset($user_setting->settings['carton']['count']) ? $user_setting->settings['carton']['count'] : 1); ?>" required/>
        </div>
    </div>        

    <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Set</button>

</form>