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
                        <div class="mb-3 col-12">
                            <label class="form-label" for="addressForAddress">Description du ou des documents </label>
                          <textarea name="adresse" class="form-control" id="" cols="30" rows="3" placeholder="Decrivez le document pour une meilleure suivie "></textarea>
                        </div>
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

  {{-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel"></h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="accordionExample" enctype="multipart/form-data">
            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Uplaoder les fichiers
                  </button>
                </h2>
                <form id="uploadForm" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" id="file">
                    <input type="text" name="iddossier" id="iddossier">
                    <br><br>
                    <button type="button" id="btnformdoc" onclick="saveDocumet()">Envoyer</button>
                </form>
              </div>
          </div>
    </div>
  </div> --}}
