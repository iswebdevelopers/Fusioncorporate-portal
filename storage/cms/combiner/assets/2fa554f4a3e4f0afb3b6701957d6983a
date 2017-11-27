        $(document).ready(function () {
            $("#button1").click(function () {
				//alert("aaaa");
                $.post("/fusionservice/FusionService.aspx", { TxtCardNumber: $("#ctl00_txtCardNumber").val(),
                    TxtPassword: $("#ctl00_txtPassword").val()
                },
                function (response) { $("#DivResult").html(response).show(); });
                return false;
            })
        });
    