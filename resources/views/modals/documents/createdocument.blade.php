<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h5>Ajouter des document au dossier <strong id="code_dossier"></strong></h5>
                <form  id="documentform" enctype="multipart/form-data" action="#">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Document</label>
                            <input type="file"  name="document[]" id="file" class="form-control" required multiple>
                        </div>
                        <input type="hidden" name="iddossier" id="iddossier">

                        <div class="modal-footer">
                            <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="button" id="btndocument" class="btn btn-primary" id="btnformdoc" onclick="saveDocumet()">Enregistrer</button>
                            <div id="loaderdocument" style="display:none">
                                <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

