<!-- MODAL UPLOAD -->
<div class="modal fade" id="Modal_Upload" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload Data Excel</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="alert alert-secondary" role="alert">
               <h4 class="alert-heading">Yang Harus Diperhatikan!</h4>
               <hr>
               <ul>
                  <li>Sebelum upload pastikan file anda berformat excel file <kbd>.xls</kbd> atau <kbd>.xlsx</kbd></li>
                  <li>Template upload dapat di download di <a class="badge badge-primary" href="<?php echo $template_link; ?>">link berikut</a></li>
                  <li>Dan pastikan file yang ingin diupload tidak sedang dibuka.</li>
               </ul>
            </div>
            <form class="form-horizontal was-validated" id="upload">
               <div class="row">
                  <div class="col-12">
                     <div class="custom-file mb-3">
                        <input type="file" id="file_upload" name="file_upload" class="custom-file-input" required>
                        <label class="custom-file-label" for="file_upload">Klik Untuk Pilih file...</label>
                        <div class="invalid-feedback">Pilih file yang akan di upload</div>
                      </div>
                  </div>
               </div>
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
         <button type="submit" id="btn_upload" class="btn btn-primary">Upload</button>
         </div>
         </form>
      </div>
   </div>
</div>
<!--END MODAL UPLOAD-->