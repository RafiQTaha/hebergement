const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    },
})
let idHebergement = null;
let ids_hebergement = [];


$(document).ready(function () {
    var table = $("#datatables_gestion_hebergement").DataTable({
        lengthMenu: [
            [10, 15, 25, 50, 100, 20000000000000],
            [10, 15, 25, 50, 100, "All"],
        ],
        order: [[0, "desc"]],
        ajax: "/etudiant/hebergement/list",
        processing: true,
        serverSide: true,
        deferRender: true,
        responsive: true,
        scrollX: true,
        // drawCallback: function () {
        //     idHebergement.forEach((e) => {
        //         $("body tr#" + e)
        //         .find("input")
        //         .prop("checked", true);
        //     });
        //     $("body tr#" + idHebergement).addClass('active_databales')
        // },
        drawCallback: function () {
            $("body tr#" + idHebergement).addClass('active_databales')
        },
        preDrawCallback: function (settings) {
            if ($.fn.DataTable.isDataTable('#datatables_gestion_hebergement')) {
                var dt = $('#datatables_gestion_hebergement').DataTable();

                //Abort previous ajax request if it is still in process.
                var settings = dt.settings();
                if (settings[0].jqXHR) {
                    settings[0].jqXHR.abort();
                }
            }
        },
        language: datatablesFrench,
    });

    $('body').on('dblclick', '#datatables_gestion_hebergement tbody tr', function () {
        // const input = $(this).find("input");

        if ($(this).hasClass('active_databales')) {
            $(this).removeClass('active_databales');
            idHebergement = null;
        } else {
            $("#datatables_gestion_hebergement tbody tr").removeClass('active_databales');
            $(this).addClass('active_databales');
            idHebergement = $(this).attr('id');
            // getStatutInscription();
        }

    })

    $("select").select2()
    $("#etablissement").on('change', async function () {
        const id_etab = $(this).val();
        table.columns().search("");
        table.columns(0).search(id_etab).draw();
        let response = ""
        if (id_etab != "") {
            const request = await axios.get('/api/formation/' + id_etab);
            response = request.data
        } else {
            $('#annee').html("").select2();
            $('#promotion').html("").select2();
        }
        $('#formation').html(response).select2();
    })
    $("#formation").on('change', async function () {
        const id_formation = $(this).val();
        table.columns().search("");
        let responseAnnee = ""
        let responsePromotion = ""
        if (id_formation != "") {
            table.columns(1).search(id_formation).draw();
            const requestPromotion = await axios.get('/api/promotion/' + id_formation);
            responsePromotion = requestPromotion.data
            const requestAnnee = await axios.get('/api/annee/' + id_formation);
            responseAnnee = requestAnnee.data
        } else {
            table.columns(0).search($("#etablissement").val()).draw();
        }
        $('#annee').html(responseAnnee).select2();
        $('#promotion').html(responsePromotion).select2();
    })

    $("#promotion").on('change', async function () {
        table.columns().search("");
        if ($(this).val() != "") {
            if ($("#annee").val() != "") {
                table.columns(3).search($("#annee").val());
            }
            table.columns(2).search($(this).val()).draw();
        } else {
            table.columns(1).search($("#formation").val()).draw();
        }

    })
    $("#annee").on('change', async function () {
        table.columns().search("");
        if ($(this).val() != "") {
            table.columns(3).search($(this).val());
        }
        table.columns(2).search($("#promotion").val()).draw();
    })

    // $('body').on('click', '#datatables_gestion_hebergement tbody tr', function () {
    //     const input = $(this).find("input");
    //     if (input.is(":checked")) {
    //         input.prop("checked", false);
    //         const index = ids_hebergement.indexOf(input.attr("id"));
    //         ids_hebergement.splice(index, 1);
    //     } else {
    //         input.prop("checked", true);
    //         ids_hebergement.push(input.attr("id"));
    //     }
    // })

    $('body').on('click', '#supprimer', async function (e) {
        e.preventDefault();
        if (!idHebergement) {
            Toast.fire({
                icon: 'error',
                title: 'Merci de Choisir une ligne',
            })
            return;
        }
        var res = confirm('Vous voulez vraiment supprimer cette enregistrement ?');
        if (res == 1) {
            const icon = $("#supprimer i");
            icon.removeClass('fa-trash').addClass("fa-spinner fa-spin");
            var formData = new FormData();
            formData.append('idHebergement', idHebergement);
            try {
                const request = await axios.post('/etudiant/hebergement/supprimer', formData);
                const response = request.data;
                Toast.fire({
                    icon: 'success',
                    title: response,
                })
                idHebergement = null
                table.ajax.reload(null, false);
                icon.addClass('fa-trash').removeClass("fa-spinner fa-spin");
            } catch (error) {
                const message = error.response.data;
                icon.addClass('fa-trash').removeClass("fa-spinner fa-spin");
                Toast.fire({
                    icon: 'error',
                    title: message,
                })
            }
        }
    })

    $("body #departement").on("change", async function () {
        const id_departement = $(this).val();
        let response = ""
        if (id_departement != "") {
            const request = await axios.get('/api/etage/' + id_departement);
            response = request.data
        }
        $('#etage').html(response).select2();
    })
    $("body").on('change', '#etage', async function () {
        // console.log('hh');

        const id_etage = $(this).val();
        let response = ""

        if (id_etage != "") {
            const request = await axios.get('/api/chambre/' + id_etage);
            response = request.data
        }
        $('#chambre').html(response).select2();

    })
    $("body").on('change', '#chambre', async function () {
        const id_chambre = $(this).val();
        let response = ""

        if (id_chambre != "") {
            const request = await axios.get('/api/lit/' + id_chambre);
            response = request.data
        }
        $('#lit').html(response).select2();

    })



    const getHebergementInfos = async () => {
        $('#modification_modal .modal-body').html('');
        const icon = $("#modifier i");
        icon.removeClass('fa-edit').addClass("fa-spinner fa-spin");
        try {
            const request = await axios.get('/etudiant/hebergement/getHebergementInfos/' + idHebergement);
            const data = request.data;

            $('body #hebergement_infos').html(data);
            icon.addClass('fa-edit').removeClass("fa-spinner fa-spin");
            $("#modification_modal").modal('show');
            $("#modification_modal select").select2();
        } catch (error) {
            const message = error.response.data;
            icon.addClass('fa-edit').removeClass("fa-spinner fa-spin");
            Toast.fire({
                icon: 'error',
                title: message,
            })
        }
    }

    $("#modifier").on("click", () => {
        if (!idHebergement) {
            Toast.fire({
                icon: 'error',
                title: 'Veuillez selection une affecatation !',
            })
            return;
        }
        // console.log('test')
        getHebergementInfos();
    })

    $("body").on("submit", "#mdification_save", async (e) => {
        e.preventDefault();
        var formData = new FormData($("#mdification_save")[0])
        formData.append("hebergement_id", idHebergement);
        const icon = $("#mdification_save i");
        try {
            icon.remove('fa-check-circle').addClass("fa-spinner fa-spin ");
            const request = await axios.post('/etudiant/hebergement/modifier', formData);
            const response = request.data;
            icon.addClass('fa-check-circle').removeClass("fa-spinner fa-spin ");
            table.ajax.reload();
            Toast.fire({
                icon: 'success',
                title: response,
            })
            idHebergement = false;
            $("#modification_modal").modal("hide")
        } catch (error) {
            const message = error.response.data;
            Toast.fire({
                icon: 'error',
                title: message,
            })
            icon.addClass('fa-check-circle').removeClass("fa-spinner fa-spin ");
        }
    })
    $('body').on('click', '#extraction', function () {
        window.open('/etudiant/hebergement/extraction_hebergement', '_blank');
    })
})

