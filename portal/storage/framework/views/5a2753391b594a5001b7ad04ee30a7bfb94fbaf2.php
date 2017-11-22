<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Printer</h3>
    </div>

    <div class="panel-body">
        <div class="form-group">
            <label for="printerSearch">Search:</label>
            <input type="text" id="printerSearch" value="zebra" class="form-control">
        </div>
        <div class="form-group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default btn-sm" onclick="findPrinter($('#printerSearch').val(), true);">Find Printer</button>
                <button type="button" class="btn btn-default btn-sm" onclick="findDefaultPrinter(true);">Default Printer</button>
                <button type="button" class="btn btn-default btn-sm" onclick="findPrinters();">Find All Printers</button>
            </div>
        </div>
        <hr>
        <div class="form-group">
        	<div class="form-group">
            <label>All Printer:</label>
            <div class="list-group" id="printer-list" style="display: hidden">
        	</div>
        </div>
        <div class="form-group">
            <label>Current printer:</label>
            <div id="configPrinter">
            <em>HOST:</em>
            <?php if(isset($setting['host'])): ?>
            <?php echo e($setting['host'].':'.$setting['port']); ?>

            <?php else: ?>
            NONE
            <?php endif; ?>
        	</div>
        </div>
        <div class="form-group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#askHostModal">Set Host</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="askHostModal" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-group">
                    	<?php echo e(csrf_field()); ?>

                        <label for="askHost">Host:</label>
                        <input type="text" id="askHost" class="form-control" value="<?php echo e($setting['host'] ?? ''); ?>" />
                        <!-- <input type="hidden" id="askUser" value="<?php echo e($setting['user_id'] ?? $user['id']); ?>"> -->
                    </div>
                    <div class="form-group">
                        <label for="askPort">Port:</label>
                        <input type="text" id="askPort" class="form-control" value="<?php echo e($setting['port'] ?? '9100'); ?>" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="setPrintHost(<?php echo e($setting['user_id'] ?? $user['id']); ?>);">Set</button>
                </div>
            </div>
        </div>
    </div>