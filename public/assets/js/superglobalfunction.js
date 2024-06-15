



//function qui concenre le departement
const createDepartement  = async (event) => {
    event.preventDefault();
    const formdepartemeent = document.getElementById('formdepartement');
    const formdata  = new FormData(formdepartemeent);
    const options = {
        method:'POST',
        body : formdata
    };

    await fetch("/departements", options)
    .then(response => {
        if (!response.ok) {
            throw new Error("Erreur lors du traitement");
        }
        return response.json();
    }).then(json => {
        console.log(json);
        Swal.fire({
            title: 'Departement créé avec success!',
            text: json.message,
            icon: 'success',
            confirmButtonClass: 'btn btn-primary w-xs mt-2',
            buttonsStyling: false
        }).then(function (rslt) {
            window.location.reload();
        })
    })


    // affiche les informations sur du formulaire sur la vue




}


const   editDepartement = (parametre) =>  {

    const dataparametre =  parametre.split('|');
    $("#libdepartement").val(dataparametre[0]);
    $("#iddepartement").val(dataparametre[1]);

    console.log(dataparametre);
}


const updateDepartement = async (event) => {

    event.preventDefault();

    const formdepartemeent = document.getElementById("editformdepartement");
    const formdata  = new FormData(formdepartemeent);
    const options = {
        method:'PATCH',
        body : formdata
    };

    
    await fetch("departements/1", options)
    .then(response => {
        if (!response.ok) {
            throw new Error("Erreur lors du traitement");
        }
        return response.json();
    }).then(json => {
        console.log(json);
        Swal.fire({
            title: 'Departement créé avec success!',
            text: json.message,
            icon: 'success',
            confirmButtonClass: 'btn btn-primary w-xs mt-2',
            buttonsStyling: false
        }).then(function (rslt) {
            window.location.reload();
        })
    })

}
