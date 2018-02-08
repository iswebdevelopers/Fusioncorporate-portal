$( function() {
    //user creation form- role change based on role selection functionality  
    $("select#role").selectmenu({
    change: function( event, data ) {
        // hide previously shown in target div
        $("div", "div#extra-fields").hide();

        // read id from your select
        var value = data.item.value;
        // show element with selected id
        $("div#"+value).show();
        $("div#"+value+" input[name=role_id]").prop("disabled",false);
      }
    });

    //Hide all alert after 10 seconds
    var infoWindow = $("p.alert-info").parent();
    setTimeout(function() {  infoWindow.hide(1000); }, 10000);
  
    //supplier role to have id of the supplier functionality autocomplete
    var token = $("#token").val();
    $("#supplier_autocomplete").autocomplete({
    source: function( request, response ) {
      $.ajax({
        url: "/portal/supplier/search/" + request.term + "?token=" + token,
        statusCode: {
                401: function() {
                  window.location.replace("/portal/login");
                }
            },
        success: function( data ) {
          response($.map((data.data), function (item) {                                
                var AC = new Object();

                //autocomplete default values REQUIRED
                AC.label = item.name;
                AC.value = item.id;

                return AC
          }));   
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
            alert("Something has gone wrong. Please refresh."); 
        }
      });
    },
    minLength: 3,
    select: function (event, ui) {                    
        $("#extra-fields input[name=role_id]").val(ui.item.id);
    }     
    });

    //user creation form- role change based on role selection functionality
    $("div", "div#extra-fields").hide();
    $("#extra-fields input[name=role_id]").prop("disabled",true);

    $("select#role").change(function(){
        // hide previously shown in target div
        $("div", "div#extra-fields").hide();
        
        // read id from your select
        var value = $(this).val();
        // show element with selected id
        $("div#"+value).show();
        $("div#"+value+" input[name=role_id]").prop("disabled",false)
    });

    //on load check and disable/enable selection
    // $("input.pack,input.loose,input.sticky").each(function(){
    //     var elclass = $(this).data("item");
    //     var elements = $("input."+elclass);
    //     changeInputState(elements,this.checked);
    // });

    //selection of carton labels and sticky labels to generate labels
    $("#carton,#unit").on("change","input[type='checkbox']",function(){
        var elclass = $(this).data("item");
        var elements = $("input."+elclass);
        changeInputState(elements,this.checked);
    });

    //selection of carton labels and sticky labels to generate labels
    $("table").on("click","a.selectall",function(e) {
        e.preventDefault();
        var elclass = $(this).parent().data("type");
        var elements = $("input."+elclass);
        changeSelectCheckboxState(elements,true);

    });

    //selection of carton labels and sticky labels to generate labels
    $("table").on("click","a.selectnone",function(e) {
        e.preventDefault();
        var elclass = $(this).parent().data("type");
        var elements = $("input."+elclass);
        changeSelectCheckboxState(elements,false);

    });    


    //fancybox like pop up for account password recovery
    $(".venbobox").venobox({
        framewidth: "500px",        
        frameheight: "auto",       
        border: "10px",             
        titleattr: "Password Recovery",
    });

    //Datatables to have pagination
    $("#users-list, #suppliers-list").DataTable({
        "sPaginationType": "full_numbers",
        "bPaginate":true,
        "iDisplayLength": 10,
        "searching": true,
        "ordering": false
    });

    $("#cartonfiles").DataTable({
        "sPaginationType": "full_numbers",
        "bPaginate":true,
        "iDisplayLength": 10,
        "searching": false,
        "ordering": false
    });

    $("#stickyfiles").DataTable({
        "sPaginationType": "full_numbers",
        "bPaginate":true,
        "iDisplayLength": 10,
        "searching": false,
        "ordering": false
    });

});

function changeInputState(inputs, state) {
    inputs.each(function(){
        $(this).prop("disabled",!state);  
    });
}

function changeSelectCheckboxState(checkboxs, state) {
    checkboxs.each(function(){
       $(this).prop("checked",state);
       $(this).trigger("change"); 
    });
}
