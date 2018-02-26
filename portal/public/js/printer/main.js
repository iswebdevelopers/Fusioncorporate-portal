/// Authentication setup ///
   /// Page load ///
    $(document).ready(function() {
        window.readingWeight = false;
        
        //show printer setting form if it has not been set
        var showPrinterForm = $("#user-printer-list").data('dialog');
        var printerForm = $("#askPrinterSettingModal");

        if (showPrinterForm) {
            showPrinterSetting(printerForm);
        }
        
        //start connecting to printing client
        startConnection();
 
        //search printer based on Input
        $("#printerSearch").on('keyup', function(e) {
            if (e.which == 13 || e.keyCode == 13) {
                findPrinter($('#printerSearch').val(), true);
                return false;
            }
        });

        //set printer based on printer clicked from the list
        $("#printer-list,#user-printer-list").on("click","a",function(e) {
            e.preventDefault();
            var printer = $(this).text();
            setPrinter(printer);
        });

        //set printer based on printer clicked from the list
        $("button.cancel").on("click",function() {
           //printerForm.removeClass("in").hide();
           $("#askPrinterSettingModal").modal('show');
        });        

        //change printer based on tabs clicked
        $("#print-tab").on("click","a",function(e) {
            e.preventDefault();
            var type = $(this).data('type');
            var selected_printer = $("#user-printer-list a." + type).html();
            setPrinter(selected_printer);    
        });

        //print all
        $("#print-sticky,#print-carton").on("click","a#print-all",function(e) {
            e.preventDefault();
            var type = $(this).data('type');
            var selector = $("table#"+ type + "files tbody tr");
            selector.each(function(index){
                var id = $(this).data('id');
                setTimeout(function(){ printZPL(id); }, index * 10000);
            });    
        });

        $("#formPrinterSetting").on("submit",function(e){
            e.preventDefault();
            setPrinterSetting();
        });
    });

    qz.security.setCertificatePromise(function(resolve, reject) {
        //Preferred method - from server
        $.ajax("/portal/promise/certificate").then(resolve, reject);

        //Alternate method 1 - anonymous
//        resolve();

        //Alternate method 2 - direct
        });

    qz.security.setSignaturePromise(function(toSign) {
        return function(resolve, reject) {
            //Preferred method - from server
            $.ajax("/portal/promise/signature?sign=" + toSign).then(resolve, reject);

            //Alternate method - unsigned
            // resolve();
        };
    });


    /// Connection ///
    function launchQZ() {
        if (!qz.websocket.isActive()) {
            window.location.assign("qz:launch");
            //Retry 5 times, pausing 1 second between each attempt
            startConnection({ retries: 5, delay: 1 });
        }
    }

    function startConnection(config) {
        if (!qz.websocket.isActive()) {
            updateState('Waiting', 'default');
            qz.websocket.connect(config).then(function() {
                updateState('Active', 'success');
                findVersion();
                findPrinters();
                
                if ($("#configPrinter em").html() !== undefined){
                    setPrinter($("#configPrinter em").html());
                } else {
                    findDefaultPrinter(true);
                }

            }).catch(handleConnectionError);
        } else {
            displayMessage('An active connection with QZ already exists.', 'alert-warning');
        }
    }

    function endConnection() {
        if (qz.websocket.isActive()) {
            qz.websocket.disconnect().then(function() {
                updateState('Inactive', 'default');
            }).catch(handleConnectionError);
        } else {
            displayMessage('No active connection with QZ exists.', 'alert-warning');
        }
    }

    function ConnectionStatus() {
        if ($("#launch").is(":visible")) {
            return false;
        } else {
            return true;
        }
    }
    /// Detection ///

    function findPrinter(query, set) {
        $("#printerSearch").val(query);
        qz.printers.find(query).then(function(data) {
            displayMessage("<strong>Found:</strong> " + data);
            if (set) { setPrinter(data); }
        }).catch(displayError);
    }

    function findDefaultPrinter(set) {
        qz.printers.getDefault().then(function(data) {
            if (set) { setPrinter(data); } else { displayMessage("<strong>Found:</strong> " + data); }
        }).catch(displayError);
    }

    function findPrinters() {
        qz.printers.find().then(function(data) {        	
            var list = '';
            var options=[];
            var carton_printer = $("#user-printer-list a.carton").html();
            var sticky_printer = $("#user-printer-list a.sticky").html();
            for(var i = 0; i < data.length; i++) {
                list += "<a href='#' class='list-group-item list-group-item-action'>" + data[i] + "</a>";
                if (carton_printer == data[i]) {
                    options['carton'] += "<option value='" + data[i] + "' selected>" + data[i] + "</option>";
                } else{
                    options['carton'] += "<option value='" + data[i] + "'>" + data[i] + "</option>";
                }
                if (sticky_printer == data[i]) {
                    options['sticky'] += "<option value='" + data[i] + "' selected>" + data[i] + "</option>";
                } else{
                    options['sticky'] += "<option value='" + data[i] + "'>" + data[i] + "</option>";
                }                
            }
            setPrinterOptions(options);  
            $("#carton-select-button span.ui-selectmenu-text").append(carton_printer);
            $("#sticky-select-button span.ui-selectmenu-text").append(sticky_printer);  
            $("#printer-list").append(list);
            $("#printer-list").show();
            // displayMessage("<strong>Available printers:</strong><br/>" + list);
        }).catch(displayError);
    }

    function setPrinterOptions(options) {
        $("#sticky-select").append(options['sticky']);
        $("#carton-select").append(options['carton']);

        return true;
    }    

    function showPrinterSetting(printerForm) {
        printerForm.addClass("in").show();
    }

    function showInfoWindow() {
        infoWindow.show();
    }

    function hideInfoWindow() {
        infoWindow.show();
    }

    function setPrinterSetting() {
        if (ConnectionStatus()){
            var carton = $("#carton-select").val();
            var sticky = $("#sticky-select").val();
            var _token = $("input[name='_token']").val();
            var formData = $("#formPrinterSetting").serialize();
            
            var data = { carton: carton, sticky: sticky };
            
            $.ajax({
                url: '/portal/printer/setting',
                method: 'POST',
                headers: { 'X-CSRF-TOKEN': _token },
                data: formData,
                statusCode: {
                    401: function() {
                      window.location.replace("/portal/login");
                    }
                },
                success: function(data) {
                    createSampleLabels();
                    $("#askPrinterSettingModal").modal('hide');
                    $("#askPrinterSettingModal").removeClass("in").hide();
                    displayMessage("Printers settings saved");
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    displayMessage("Status: " + textStatus + "Error: " + errorThrown); 
                }   
            });
        } else{
            pinMessage("Please launch the print client");
        }  
    }

    function createSampleLabels() {
        $.ajax({
            url: '/portal/printer/samplelabels',
            method: 'GET',
            statusCode: {
                401: function() {
                  window.location.replace("/portal/login");
                }
            },
            success: function(data) {
                createSampleLabels();
                $("#askPrinterSettingModal").modal('hide');
                $("#askPrinterSettingModal").removeClass("in").hide();
                displayMessage("Printers settings saved");
                location.reload();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                displayMessage("Status: " + textStatus + "Error: " + errorThrown); 
            }   
        });
    }

    /// Raw Printers ///
    function printZPL(id) {
        if (ConnectionStatus()){
            /// Raw Printers ///
            var config = getUpdatedConfig();
            $.ajax({
                url: '/portal/label/rawdata/' + id,
                statusCode: {
                    401: function() {
                      window.location.replace("/portal/login");
                    }
                },
                success: function(result) {
                    data = $.parseJSON(result);
                    var printData = [data.data]; 
                    var printed = qz.print(config, printData).catch(displayError);   
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    displayMessage("Status: " + textStatus + " Error: " + errorThrown); 
                },
                complete: function(result) {
                    printArchive(id);
                    displayMessage("File has been sent to Printer");
                }
            });
        } else {
            pinMessage("Please launch the print client");
        }    
    }

    //Archive Print label
    function printArchive(id) {
        if (ConnectionStatus()){
            var row = $("table tbody tr[data-id='" + id +"']");
            $.ajax({
                url: '/portal/label/archive/' + id,
                statusCode: {
                    401: function() {
                      window.location.replace("/portal/login");
                    }
                },
                success: function(result) {
                    row.remove();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    displayMessage("Status: " + textStatus + " Error: " + errorThrown); 
                },
                complete: function(result) {
                    displayMessage("File has been removed");
                }
            });
        } else {
            pinMessage("Please launch the print client");
        }    

    }

    qz.websocket.setClosedCallbacks(function(evt) {
        updateState('Inactive', 'default');
        console.log(evt);

        if (evt.reason) {
            displayMessage("<strong>Connection closed:</strong> " + evt.reason, 'alert-warning');
        }
    });

    qz.websocket.setErrorCallbacks(handleConnectionError);

    var qzVersion = 0;
    function findVersion() {
        qz.api.getVersion().then(function(data) {
            $("#qz-version").html(data);
            qzVersion = data;
        }).catch(displayError);
    }

    $("#askFileModal").on("shown.bs.modal", function() {
        $("#askFile").focus().select();
    });
    $("#askHostModal").on("shown.bs.modal", function() {
        $("#askHost").focus().select();
    });


    /// Helpers ///
    function handleConnectionError(err) {
        updateState('Error', 'danger');

        if (err.target != undefined) {
            if (err.target.readyState >= 2) { //if CLOSING or CLOSED
                displayError("Connection to QZ Tray was closed");
            } else {
                displayError("A connection error occurred, check log for details");
                console.error(err);
            }
        } else {
            displayError(err);
        }
    }

    function displayError(err) {
        console.error(err);
        displayMessage(err, 'alert-danger');
    }

    function displayMessage(msg, css) {
        if (css == undefined) { css = 'alert-info'; }

        var timeout = setTimeout(function() { $('#' + timeout).alert('close'); }, 5000);

        var alert = $("<div/>").addClass('alert alert-dismissible fade in ' + css)
                .css('max-height', '20em').css('overflow', 'auto')
                .attr('id', timeout).attr('role', 'alert');
        alert.html("<button type='button' class='close' data-dismiss='alert'>&times;</button>" + msg);

        $("#qz-alert").append(alert);
    }

    function pinMessage(msg, id, css) {
        if (css == undefined) { css = 'alert-info'; }

        var alert = $("<div/>").addClass('alert alert-dismissible fade in ' + css)
                .css('max-height', '20em').css('overflow', 'auto').attr('role', 'alert')
                .html("<button type='button' class='close' data-dismiss='alert'>&times;</button>");

        var text = $("<div/>").html(msg);
        if (id != undefined) { text.attr('id', id); }

        alert.append(text);

        $("#qz-pin").append(alert);
    }

    function updateState(text, css) {
        $("#qz-status").html(text);
        $("#qz-connection").removeClass().addClass('panel panel-' + css);

        if (text === "Inactive" || text === "Error") {
            $("#launch").show();
        } else {
            $("#launch").hide();
        }
    }

    function getPath() {
        var path = window.location.href;
        return path.substring(0, path.lastIndexOf("/"));
    }

    /// QZ Config ///
    var cfg = null;
    function getUpdatedConfig() {
        if (cfg == null) {
            cfg = qz.configs.create(null);
        }

        updateConfig();
        return cfg
    }

    function updateConfig() {
        var pxlSize = null;
        if ($("#pxlSizeActive").prop('checked')) {
            pxlSize = {
                width: $("#pxlSizeWidth").val(),
                height: $("#pxlSizeHeight").val()
            };
        }

        var pxlMargins = $("#pxlMargins").val();
        if ($("#pxlMarginsActive").prop('checked')) {
            pxlMargins = {
                top: $("#pxlMarginsTop").val(),
                right: $("#pxlMarginsRight").val(),
                bottom: $("#pxlMarginsBottom").val(),
                left: $("#pxlMarginsLeft").val()
            };
        }

        var copies = 1;
        var jobName = null;
        if ($("#rawTab").hasClass("active")) {
            copies = $("#rawCopies").val();
            jobName = $("#rawJobName").val();
        } else {
            copies = $("#pxlCopies").val();
            jobName = $("#pxlJobName").val();
        }

        cfg.reconfigure({
                            altPrinting: $("#rawAltPrinting").prop('checked'),
                            encoding: $("#rawEncoding").val(),
                            endOfDoc: $("#rawEndOfDoc").val(),
                            perSpool: $("#rawPerSpool").val(),

                            colorType: $("#pxlColorType").val(),
                            copies: copies,
                            density: $("#pxlDensity").val(),
                            duplex: $("#pxlDuplex").prop('checked'),
                            interpolation: $("#pxlInterpolation").val(),
                            jobName: jobName,
                            margins: pxlMargins,
                            orientation: $("#pxlOrientation").val(),
                            paperThickness: $("#pxlPaperThickness").val(),
                            printerTray: $("#pxlPrinterTray").val(),
                            rasterize: $("#pxlRasterize").prop('checked'),
                            rotation: $("#pxlRotation").val(),
                            scaleContent: $("#pxlScale").prop('checked'),
                            size: pxlSize,
                            units: $("input[name='pxlUnits']:checked").val()
                        });
    }

    function setPrintHost(userId) {
    	var host = $("#askHost").val();
    	var port = $("#askPort").val();
    	var _token = $("input[name='_token']").val();
    	var data = { host: $("#askHost").val(), port: $("#askPort").val() };

        setPrinter(data);
        
        $.ajax({
        	url: '/portal/printer/setting/host/' + userId,
        	method: 'POST',
        	headers: { 'X-CSRF-TOKEN': _token },
        	data: data,
            statusCode: {
                401: function() {
                  window.location.replace("/portal/login");
                }
            },
        	success: function(result) {
        		displayMessage("Host set to: " + host + ": " + port);
        	},
        	error: function(XMLHttpRequest, textStatus, errorThrown) { 
        		displayMessage("Status: " + textStatus + "Error: " + errorThrown); 
    		}	
    	});
        $("#askHostModal").modal('hide');
    }

    function setPrinter(printer) {
        var cf = getUpdatedConfig();
        cf.setPrinter(printer);

        if (typeof printer === 'object' && printer.name == undefined) {
            var shown;
            if (printer.file != undefined) {
                shown = "<em>FILE:</em> " + printer.file;
            }
            if (printer.host != undefined) {
                shown = "<em>HOST:</em> " + printer.host + ":" + printer.port;
            }

            $("#configPrinter").html(shown);
        } else {
            if (printer.name != undefined) {
                printer = printer.name;
            }

            if (printer == undefined) {
                printer = 'NONE';
            }
            $("#configPrinter").html(printer);
        }
    }    
