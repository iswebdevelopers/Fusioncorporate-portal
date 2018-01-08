<div id="qz-connection" class="panel panel-success">
    <div class="panel-heading">
        <button class="close tip" data-toggle="tooltip" title="" id="launch" href="#" onclick="launchQZ();" style="display: none;" data-original-title="Launch QZ">
            <i class="fa fa-external-link"></i>
        </button>
        <h4 class="panel-title">
            Connection: <span id="qz-status" class="text-muted" style="font-weight: bold;">Unknown</span>
        </h4>
    </div>

    <div class="panel-body">
        <div class="btn-toolbar">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-success" onclick="startConnection();">Connect</button>
                <button type="button" class="btn btn-warning" onclick="endConnection();">Disconnect</button>
            </div>
            <!-- <button type="button" class="btn btn-info" onclick="listNetworkInfo();">List Network Info</button> -->
        </div>
    </div>
</div>
<hr>