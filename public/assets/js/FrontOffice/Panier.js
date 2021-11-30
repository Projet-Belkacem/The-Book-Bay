"use strict";

$(document).ready(function () {
    if (parseInt($("#span_total").text()) == 0)
        $("#form_paiement").remove();

    $('#_modal_ConfirmationSupression').on('show.bs.modal', function (event) {
        ligne_selection = $(event.relatedTarget).parents("tr");
        $(this).find('#btn_confirm_suppression').attr("data-url", $(event.relatedTarget).data('url'));
    });
    $("#btn_confirm_suppression").click(function () {
        var url = $(this).data('url')
        $.post(url, function (response) {
            console.log(response)
        }).done(function (response) {
            $(ligne_selection).remove();
            $.notify(response, {
                className: "success"
            });
        });
        $(this).parents("#_modal_ConfirmationSupression").modal('hide');
    });
});
