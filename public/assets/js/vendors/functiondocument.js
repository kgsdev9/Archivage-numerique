


function saveDocumet(){

    const formdocument = document.getElementById("uploadForm");
    document.addEventListener('click',  async  (e)=> {
        e.preventDefault();

        // const typedocumentInput = document.getElementById("typedocument");
         // Vérification du champ typedocument
        //  if (typedocumentInput.value.trim() === "") {
        //     // Afficher un message d'erreur
        //     alert("Le nom du type de document est requiss.");
        //     return;
        // }

        const formdata = new FormData(formdocument);
        console.log(formdata);

        const options = {
            method: 'POST',
            body: formdata
        }

        await fetch("/document/create", options)
            .then(response => {
                if (!response.ok) {
                    throw new Error("Erreur lors du traitement");
                }
                return response.json();
            })
            .then(json => {
                console.log(json);

                alert('effectué avec success');
                // Swal.fire({
                //     title: 'Documents ajouté avec success!',
                //     text: json.message,
                //     icon: 'success',
                //     confirmButtonClass: 'btn btn-primary w-xs mt-2',
                //     buttonsStyling: false
                // }).then(function (rslt) {

                //     // alert('ssss');
                //     // if (rslt.value) {
                //     //     infosDocDossier(json.code)
                //     // }
                // })
            })
            .catch(error => {
                console.error("Une erreur est survenue lors de la requête:", error);
            })
            .finally(() => {
                // Masquer le loader
                // loader.style.display = 'none';
                // btndbc.style.display = 'block';
                formdocument.reset();
                // window.location.reload();
            });
    });
}
