$(document).ready(function () {
    $(".au_panier").click(function () {
        var url = $(this).data("url")
        $.post(url, function (responce) {
            console.log(responce);
        }).done(function (responce) {
            $.notify(responce, {
                "className": "success"
            });
        });
    });

    $(".detail_au_panier").click(function () {
        var quantite = $(this).parents('.qty-outter').find('.input_qtt').val();
        var url = $(this).data('url').replace('QTT', quantite);
        $.post(url, function (responce) {
            console.log(responce);
        }).done(function (responce) {
            $.notify(responce, {
                "className": "success"
            });
        });
        $(this).parents('.modal').modal('hide');
    });

    $("#input-recherche-detail").keyup(function () {
        recherche_multi_criteres();
    });
    $(".checkbox-themes").change(function () {
        recherche_multi_criteres();
    });

    function recherche_multi_criteres() {
        $(".masonry-item")
            .toArray()
            .forEach(function (ouvrage) {
                recherche_par_theme($(ouvrage).data("theme")) &&
                    recherche_par_titre(
                        $(ouvrage).find(".titre-ouvrage").text().trim().toLocaleLowerCase(),
                        $("#input-recherche-detail").val().trim().toLocaleLowerCase()
                    ) ?
                    $(ouvrage).removeClass("d-none") :
                    $(ouvrage).addClass("d-none");
            });

    }

    function recherche_par_theme(ouvrage_theme) {
        if ($(".checkbox-themes:checked").length != 0) {
            var themes = $(".checkbox-themes:checked").map(function () {
                    return parseInt(this.value);
                })
                .get();
            return themes.includes(ouvrage_theme);
        }
        return true;
    }

    function recherche_par_titre(ouvrage_titre, critere_titre) {
        return ouvrage_titre.includes(critere_titre);
    }
});
