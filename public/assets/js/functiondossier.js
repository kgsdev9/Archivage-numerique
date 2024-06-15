// Exemple de confirmation de suppression

function chargeInfoDossier(params)
{
    let param = params
    console.log(param)
    let tabs = param.split('|')
    console.log(tabs)
    document.getElementById("code_dossier").innerHTML = tabs[0];
    $("#iddossier").val(tabs[1]);

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
