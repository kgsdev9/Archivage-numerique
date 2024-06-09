// Exemple de confirmation de suppression

function chargeInfoDossier(params)
{
    let param = params
    console.log(param)
    let tabs = param.split('|')
    console.log(tabs)
    document.getElementById("code_dossier").innerHTML = tabs[0];
    $("#iddossier").val(tabs[1]);

    //alert(tabs[1]);


    //alert(idDossier);
    // var codedossier = document.getElementById('code_dossier');

    // alert(codedossier.sp)

    // //alert(codedossier);
    // codedossier.innerHTML = code;


    //alert(code);
    //$("#code_dossier").val(code);
    // var IdDossier = id;
    // var url="/create/folder";
    // var vtype='GET';
    // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    // var data = {
    //     "iddossier": IdDossier,
    //     '_token': CSRF_TOKEN,
    // };

    // $.ajax({
    //     "url":url,
    //     "data":data,
    //     "type":vtype,
    //     "dataType": "JSON",
    //     "success":function(response)
    //     {

    //     }
    // });

}


$(document).ready(function() {
    $('#example').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/French.json" // Utiliser le fichier de localisation français
        }
    });
});





$(document).ready(function() {
    $('#uploadForm').submit(function(e) {
        e.preventDefault(); // Empêche la soumission normale du formulaire

        var formData = new FormData($(this)[0]); // Récupère les données du formulaire
        $.ajax({
            url:'/document/create', // URL où envoyer les données
            type:'POST',
            data: formData,
            processData: false, // N'effectue pas de traitement sur les données
            contentType: false, // Ne pas définir le type de contenu
            success: function(response) {
                // Gérer la réponse du serveur si nécessaire
                // console.log(response);
                Swal.fire(
                    'Document Enregistrer avec sucess!',
                    'Dossier créé avec sucesss.',
                    'success'
                );

            },
            error: function(xhr, status, error) {
                // Gérer les erreurs si nécessaire
                console.error(error);
            }
        });
    });
});




function SauvegarderDocument()
{
   var codedossier =  $("#codedossier").val(tabs[1]);
   var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var data = {
        '_token': CSRF_TOKEN,
        'codedossier':codedossier,
    };
    $.ajax({
        url: '/document/create',
        type: 'POST',
        data:data,
        success:function(response) {
            Swal.fire(
                'Document Enregistrer avec sucess!',
                'Dossier créé avec sucesss.',
                'success'
            );
             window.location.reload();
        },
        error: function(xhr) {
            // Gérez les erreurs si nécessaire
            Swal.fire(
                'Erreur!',
                'Une erreur est survenue .',
                'error'
            );
        }
    });

}

function supprimerUtilisateur() {

    Swal.fire({
        title: 'Êtes-vous sûr?',
        text: "Voulez vous vraiement créer un dossier !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui, Créer le dossier!',
        cancelButtonText: 'Annuler'
    }).then((result) => {
        if (result.isConfirmed) {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var nomDocument =  $('#nom_du_dossier').val();
            var departementId =  $('#DepartementId').val();
            var AnneeId = $('#AnneeId').val();
            var TypeDocumentId =  $('#TypeDocumentId').val();

            var data = {
                '_token': CSRF_TOKEN,
                'nomdossier':nomDocument,
                'departementId':departementId,
                'anneId':AnneeId,
                'typedossier':TypeDocumentId,
            };
            $.ajax({
                url: '/create/folder',
                type: 'POST',
                data:data,
                success:function(response) {
                    Swal.fire(
                        'Enregistrer avec sucess!',
                        'Dossier créé avec sucesss.',
                        'success'
                    );
                     window.location.reload();
                },
                error: function(xhr) {
                    // Gérez les erreurs si nécessaire
                    Swal.fire(
                        'Erreur!',
                        'Une erreur est survenue .',
                        'error'
                    );
                }
            });
        }
    });
}
