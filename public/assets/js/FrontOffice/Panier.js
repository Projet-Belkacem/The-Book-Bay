"use strict";
var ligne_selection;

$(document).ready(function () {
    if (parseInt($("#span_total").text()) == 0)
        $("#form_paiement").remove();

    $('#_modal_ConfirmationSupression').on('show.bs.modal', function (event) {
        ligne_selection = $(event.relatedTarget).parents("tr");
        $(this).find('#btn_confirm_suppression')
            .attr("data-url", $(event.relatedTarget).data('url'))
            .attr("data-ligne", $(event.relatedTarget).data('ligne'));
    });
    $("#btn_confirm_suppression").click(function () {
        var url = $(this).data('url'),
            ligne = $(this).data('ligne');
        $.post(url, {
            "ligne": ligne
        }, function (response) {
            console.log(response)
        }).done(function (response) {
            $(ligne_selection).remove();
            $.notify(response, {
                className: "success"
            });
        });
        $(this).parents("#_modal_ConfirmationSupression").modal('hide');
    });
    $(".input_qtt_panier").change(function () {
        if (this.reportValidity()) {
            var
                prix = parseFloat($(this).parents('tr').find('.span_prix_element').text()),
                quantite = this.value;
            var total_montant_element = (prix * quantite).toFixed(2);
            $(this).parents('tr').find('.span_total_montant_element').text(total_montant_element);
            $(this).next(".input-group-append").show();
        }
    });
    $(".btn_maj_qtt_ouvrage").click(function () {
        var quantite = $(this).parents('td').find('.input_qtt_panier').val();
        var url = $(this).data('url').replace('QTT', quantite);
        $.post(url, function (responce) {
            console.log(responce);
        }).done(function () {
            window.location.reload();
        });
    });
});
