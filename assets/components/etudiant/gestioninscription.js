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
let id_inscription = false;
let idInscription = [];
let frais = [];
let facture_exist = false;
$(document).ready(function () {
    var table = $("#datatables_gestion_inscription").DataTable({
        lengthMenu: [
            [10, 15, 25, 50, 100, 20000000000000],
            [10, 15, 25, 50, 100, "All"],
        ],
        order: [[0, "desc"]],
        ajax: "/etudiant/inscription/list",
        processing: true,
        serverSide: true,
        deferRender: true,
        responsive: true,
        scrollX: true,
        drawCallback: function () {
            idInscription.forEach((e) => {
                $("body tr#" + e)
                    .find("input")
                    .prop("checked", true);
            });
            $("body tr#" + id_inscription).addClass('active_databales')
        },
        preDrawCallback: function (settings) {
            if ($.fn.DataTable.isDataTable('#datatables_gestion_inscription')) {
                var dt = $('#datatables_gestion_inscription').DataTable();

                //Abort previous ajax request if it is still in process.
                var settings = dt.settings();
                if (settings[0].jqXHR) {
                    settings[0].jqXHR.abort();
                }
            }
        },
        language: datatablesFrench,
    });

    $("body select").select2()
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

    // $('body').on('click','#datatables_gestion_inscription tbody tr',function () {
    //     const input = $(this).find("input");
    //     if(input.is(":checked")){
    //         input.prop("checked",false);
    //         const index = idInscription.indexOf(input.attr("id"));
    //         idInscription.splice(index,1);
    //     }else{
    //         input.prop("checked",true);
    //         idInscription.push(input.attr("id"));
    //     }
    // })
    $('body').on('dblclick', '#datatables_gestion_inscription tbody tr', function () {
        // const input = $(this).find("input");

        if ($(this).hasClass('active_databales')) {
            $(this).removeClass('active_databales');
            id_inscription = null;
        } else {
            $("#datatables_gestion_inscription tbody tr").removeClass('active_databales');
            $(this).addClass('active_databales');
            id_inscription = $(this).attr('id');
            // getStatutInscription();
        }

    })


    // $("body #departement").on("change", async function () {
    //     const id_etab = $(this).val();
    //     let response = ""
    //     if (id_etab != "") {
    //         const request = await axios.get('/api/etage/' + id_etab);
    //         response = request.data
    //     }
    //     $('#etage').html(response).select2();
    // })
    $("body").on('change', '#etage', async function () {
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

    const getEtudiantInfos = async () => {
        $('#affectation_modal .modal-body').html('');
        const icon = $("#affectation i");
        icon.removeClass('fa-edit').addClass("fa-spinner fa-spin");
        try {
            const request = await axios.get('/etudiant/inscription/getEtudiantInfos/' + id_inscription);
            const data = request.data;

            $('body #affectation_infos').html(data);
            $('select').select2();
            icon.addClass('fa-edit').removeClass("fa-spinner fa-spin");
        } catch (error) {
            // console.log(error.response.data);
        }
    }

    $("#affectation").on("click", () => {
        if (!id_inscription) {
            Toast.fire({
                icon: 'error',
                title: 'Veuillez selection une inscription !',
            })
            return;
        }
        // console.log('test')
        getEtudiantInfos();
        $("#affectation_modal").modal('show');
    })

    $("body").on("submit", "#affectation_save", async (e) => {
        e.preventDefault();
        var formData = new FormData($("#affectation_save")[0])
        formData.append("inscription_id", id_inscription);
        const icon = $("#affectation_save i");
        try {
            icon.remove('fa-check-circle').addClass("fa-spinner fa-spin ");
            const request = await axios.post('/etudiant/inscription/affectation', formData);
            const response = request.data;
            icon.addClass('fa-check-circle').removeClass("fa-spinner fa-spin ");
            table.ajax.reload();
            Toast.fire({
                icon: 'success',
                title: response,
            })
            id_inscription = false;
            $("#affectation_modal").modal("hide")
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
        window.open('/etudiant/inscription/extraction_ins', '_blank');
    })
    $('body').on('click', '#extraction_annee', function (e) {
        e.preventDefault();
        $("#annee_extraction_inscription").modal('show');
    });
    $('body').on('click', '#export_inscription', function (e) {
        e.preventDefault();
        let annee = $('#annee_export').val();
        // alert(annee);
        window.open('/etudiant/inscription/extraction_ins_annee/' + annee, '_blank');
    });

    $('#annee_export').on('input', function () {
        var inputYear = parseInt($(this).val());
        var yearPlusOne = inputYear + 1;
        if (!isNaN(yearPlusOne)) {
            $('#year_plus_one').text(yearPlusOne);
        } else {
            $('#year_plus_one').text('');
        }
    });
})

