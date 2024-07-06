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
    let id_chambre;
   
    var table = $("#datatables_gestion_chambre").DataTable({
        lengthMenu: [
            [10, 15, 25, 50, 100, 20000000000000],
            [10, 15, 25, 50, 100, "All"],
        ],
        order: [[0, "desc"]],
        ajax: "/parametre/chambre/list",
        processing: true,
        serverSide: true,
        deferRender: true,
        language: datatablesFrench,
    });
    $("select").select2();
    $('body').on('click','#datatables_gestion_chambre tbody tr',function () {
        // const input = $(this).find("input");
        
        if($(this).hasClass('active_databales')) {
            $(this).removeClass('active_databales');
            id_chambre = null;
        } else {
            $("#datatables_gestion_chambre tbody tr").removeClass('active_databales');
            $(this).addClass('active_databales');
            id_chambre = $(this).attr('id');   
        }
        
    })
    $("#departement").on("change",async function(){
        const id_etab = $(this).val();
        let response = ""
        if(id_etab != "") {
            const request = await axios.get('/api/etage/'+id_etab);
            response = request.data
            table.columns(0).search($(this).val()).draw();
        } else {
            table.columns(0).search("").draw();
        }
        $('#etage').html(response).select2();
    })
    $("#etage").on('change', async function (){
        const id_etage = $(this).val();
        if(id_etage != "") {
            table.columns(1).search(id_etage).draw();
        } else {
            table.columns(1).search("").draw();
        }
        $("select").select2();
       
    })
    $("#ajouter").on("click", () => {
        // alert($("#etage").val())
        if(!$("#etage").val() || $("#etage").val() == ""){
            Toast.fire({
              icon: 'error',
              title: 'Veuillez choissir une etage!',
            })
            return;
        }
        $("#ajout_modal").modal("show")

    })
    $("#modifier").on("click", async function(){
        if(!id_chambre){
            Toast.fire({
              icon: 'error',
              title: 'Veuillez selectioner une ligne!',
            })
            return;
        }
        const icon = $("#modifier i");

        try {
            icon.remove('fa-edit').addClass("fa-spinner fa-spin ");
            const request = await axios.get('/parametre/chambre/details/'+id_chambre);
            const response = request.data;
            console.log(response)
            icon.addClass('fa-edit').removeClass("fa-spinner fa-spin ");
            $("#modifier_modal #udpate").html(response)
            $('select').select2();
            // $("#modifier_modal #designation").val(response.designation)
            // $("#modifier_modal #abreviation").val(response.abreviation)
            // $("#modifier_modal #ordre").val(response.ordre)
            // if(response.active == 1){
            //     $("#modifier_modal #active").prop("checked", true)
            // }else {
            //     $("#modifier_modal #active").prop("checked", false)
            // }
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
        formData.append("etage_id", $("#etage").val());
        const icon = $("#save i");

        try {
            icon.remove('fa-check-circle').addClass("fa-spinner fa-spin ");
            const request = await axios.post('/parametre/chambre/new', formData);
            const response = request.data;
            icon.addClass('fa-check-circle').removeClass("fa-spinner fa-spin ");
            $('#save')[0].reset();
            table.ajax.reload();
            id_chambre = false;
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
            const request = await axios.post('/parametre/chambre/update/'+id_chambre, formData);
            const response = request.data;
            icon.addClass('fa-check-circle').removeClass("fa-spinner fa-spin ");
            table.ajax.reload();
            id_chambre = false;
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
        if(!id_chambre){
            Toast.fire({
              icon: 'error',
              title: 'Veuillez selectioner une ligne!',
            })
            return;
        }
        const icon = $("#supprimer i");

        var res = confirm('Vous voulez vraiment supprimer cette chambre ?');
        if(res == 1){
            try {
                icon.remove('fa-check-circle').addClass("fa-spinner fa-spin ");
                const request = await axios.post('/parametre/chambre/delete/'+id_chambre);
                const response = request.data;
                table.ajax.reload();
                id_chambre = false
                icon.addClass('fa-check-circle').removeClass("fa-spinner fa-spin ");
                Toast.fire({
                    icon: 'success',
                    title: 'chambre bien Supprimer',
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


