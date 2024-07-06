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
    
    
    $(document).ready(function  () {
    let id_etage;
   
    var table = $("#datatables_gestion_etage").DataTable({
        lengthMenu: [
            [10, 15, 25, 50, 100, 20000000000000],
            [10, 15, 25, 50, 100, "All"],
        ],
        order: [[0, "desc"]],
        ajax: "/parametre/etage/list",
        processing: true,
        serverSide: true,
        deferRender: true,
        language: datatablesFrench,
    });
    $("#departement").select2();
    $('body').on('click','#datatables_gestion_etage tbody tr',function () {
        // const input = $(this).find("input");
        
        if($(this).hasClass('active_databales')) {
            $(this).removeClass('active_databales');
            id_etage = null;
        } else {
            $("#datatables_gestion_etage tbody tr").removeClass('active_databales');
            $(this).addClass('active_databales');
            id_etage = $(this).attr('id');
        }
    })
    $("#departement").on("change", function(){
        if($(this).val() != ""){
            table.columns(0).search($(this).val()).draw();
        } else {
            table.columns(0).search("").draw();
        }
    })
    $("#ajouter").on("click", () => {
        if($("#departement").val() == ""){
            Toast.fire({
              icon: 'error',
              title: 'Veuillez choissir une departement!',
            })
            return;
        }
        $("#ajout_modal").modal("show")

    })
    $("#modifier").on("click", async function(){
        if(!id_etage){
            Toast.fire({
              icon: 'error',
              title: 'Veuillez selectioner une ligne!',
            })
            return;
        }
        const icon = $("#modifier i");

        try {
            icon.remove('fa-edit').addClass("fa-spinner fa-spin ");
            const request = await axios.get('/parametre/etage/details/'+id_etage);
            const response = request.data;
            console.log(response)
            icon.addClass('fa-edit').removeClass("fa-spinner fa-spin ");
            $("#modifier_modal #designation").val(response.designation)
            $("#modifier_modal #abreviation").val(response.abreviation)
            $("#modifier_modal #duree").val(response.nbrAnnee)
            if(response.active == 1){
                $("#modifier_modal #active").prop("checked", true)
            }else {
                $("#modifier_modal #active").prop("checked", false)
            }
            $("#modifier_modal").modal("show")
        } catch (error) {
            console.log(error, error.response);
            const message = error.response.data;
            Toast.fire({
                icon: 'error',
                title: message,
              })
            icon.addClass('fa-edit').removeClass("fa-spinner fa-spin ");
            
        }

    })
    $("#save").on("submit", async (e) => {
        e.preventDefault();
        var formData = new FormData($("#save")[0])
        formData.append("departement_id", $("#departement").val());
        const icon = $("#save i");

        try {
            icon.remove('fa-check-circle').addClass("fa-spinner fa-spin ");
            const request = await axios.post('/parametre/etage/new', formData);
            const response = request.data;
            icon.addClass('fa-check-circle').removeClass("fa-spinner fa-spin ");
            $('#save')[0].reset();
            table.ajax.reload();
            id_etage = false;
            $("#ajout_modal").modal("hide")
        } catch (error) {
            console.log(error, error.response);
            const message = error.response.data;
            Toast.fire({
                icon: 'error',
                title: message,
              })
            icon.addClass('fa-check-circle').removeClass("fa-spinner fa-spin ");
            
        }
    })
    $("#udpate").on("submit", async (e) => {
        e.preventDefault();
        var formData = new FormData($("#udpate")[0])
       
        const icon = $("#udpate i");

        try {
            icon.remove('fa-check-circle').addClass("fa-spinner fa-spin ");
            const request = await axios.post('/parametre/etage/update/'+id_etage, formData);
            const response = request.data;
            icon.addClass('fa-check-circle').removeClass("fa-spinner fa-spin ");
            table.ajax.reload();
            id_etage = false;
            $("#modifier_modal").modal("hide")
        } catch (error) {
            console.log(error, error.response);
            const message = error.response.data;
            Toast.fire({
                icon: 'error',
                title: message,
              })
            icon.addClass('fa-check-circle').removeClass("fa-spinner fa-spin ");
            
        }
    })
    $("#supprimer").on("click", async function() {
        // alert(id_academie);
        if(!id_etage){
            Toast.fire({
              icon: 'error',
              title: 'Veuillez selectioner une ligne!',
            })
            return;
        }
        const icon = $("#udpate i");

        var res = confirm('Vous voulez vraiment supprimer cet etage ?');
        if(res == 1){
            try {
                icon.remove('fa-check-circle').addClass("fa-spinner fa-spin ");
                const request = await axios.post('/parametre/etage/delete/'+id_etage);
                const response = request.data;
                table.ajax.reload();
                id_etage = false
                icon.addClass('fa-check-circle').removeClass("fa-spinner fa-spin ");
                Toast.fire({
                    icon: 'success',
                    title: 'Etage bien Supprimer',
                })
            } catch (error) {
                console.log(error, error.response);
                const message = error.response.data;
                Toast.fire({
                    icon: 'error',
                    title: message,
                })
                icon.addClass('fa-check-circle').removeClass("fa-spinner fa-spin ");
                
            }
        }
    })
   
})


