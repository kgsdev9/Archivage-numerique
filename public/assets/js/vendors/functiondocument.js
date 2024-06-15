





async function saveDocumet()
{
    const documentForm = document.getElementById('documentform');
    const formdata = new FormData(documentForm);
    console.log(formdata);
    const options = {
        method: 'POST',
        body: formdata
    }
    console.log(options.body);

    const loader = document.getElementById('loaderdocument');
    loader.style.display = 'block';

    // faire disparaitre le button loading
    const btnDoc = document.getElementById('btndocument');
    btnDoc.style.display = 'none';
    // const url = "/document/create";

    try {
        // Envoi de la requête au serveur via l'API Fetch
        const response = await fetch("/document/create", options);

        if (!response.ok) {
            throw new Error("Erreur lors du traitement");
        }
        const json = await response.json();
        console.log(json);

        // Affiche une alerte de succès
        Swal.fire({
            title: 'Document créé avec success!',
            text: json.message,
            icon: 'success',
            confirmButtonClass: 'btn btn-primary w-xs mt-2',
            buttonsStyling: false
        }).then(function (rslt) {
            if (rslt.value) {
                const formfile = document.getElementById('file').value = "";
                loader.style.display = 'none';
                btnDoc.style.display = 'block';
                console.log("Création du document effectué");
            }
        });
    } catch (error) {
        console.error("Une erreur est survenue lors de la requête:", error);
        Swal.fire({
            title: 'Erreur!',
            text: 'Une erreur est survenue lors du traitement.',
            icon: 'error',
            confirmButtonClass: 'btn btn-primary w-xs mt-2',
            buttonsStyling: false
        });
    }
}



