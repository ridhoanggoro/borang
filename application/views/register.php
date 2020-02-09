<div class="card shadow">
  <div class="card-header">   
    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><i class="fas fa-user-plus"></i> Tambah User</a></div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <table class="table table-striped table-bordered" id="mydata" width="100%" cellspacing="0">
    <thead>
      <tr>
          <th>UserID</th>
          <th>Nama Lengkap</th>
          <th>Role</th>
          <th>Login Terakhir</th>
          <th style="text-align: center;">Menu</th>
      </tr>
    </thead>
    <tbody id="tampil_data">
    </tbody>
    </table>
    </div>
  </div>
</div>

<!-- MODAL ADD -->
<form class="was-validated">
  <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="userid">UserID</label>
            <input type="text" class="form-control" id="userid" name="userid" required><div id="id_check_result"></div>
          </div> 
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
          <label for="nama">Nama </label>
          <input type="text" class="form-control" id="nama" name="nama" required>
          <div class="invalid-feedback">Harap Masukan Nama</div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
          <label for="role">Role</label>
           <select id="role" name="role" class="custom-select" data-placeholder="Please select..." required>
                <option value="ADMIN">ADMIN</option>
                <option value="PIMPINAN">PIMPINAN</option>
                <option value="SUPER ADMIN">SUPER ADMIN</option>       
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
          <label for="pwd">Password </label>
          <input type="password" class="form-control" id="pwd" name="pwd" required>
          </div>
        </div>             
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      <button type="button" type="submit" id="btn_save" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    </div>
  </div>
</form>
<!--END MODAL ADD-->

<!-- MODAL EDIT -->
<form>
    <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="text" hidden="" class="form-control" id="seq_id" name="seq_id">
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="userid_edit">UserID</label>
                    <input type="text" class="form-control" id="userid_edit" name="userid_edit" readonly="">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-8">
                  <label for="nama_edit">Nama </label>
                  <input type="text" class="form-control" id="nama_edit" name="nama_edit" required>
                  <div class="invalid-feedback">Harap Masukan Nama</div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                  <label for="role_edit">Role</label>
                   <select id="role_edit" name="role_edit" class="custom-select" data-placeholder="Please select..." required>
                        <option value="ADMIN">ADMIN</option>
                        <option value="PIMPINAN">PIMPINAN</option>
                        <option value="SUPER ADMIN">SUPER ADMIN</option>       
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-8">
                  <label for="pwd_edit">Password </label>
                  <input type="password" class="form-control" id="pwd_edit" name="pwd_edit" required>
                  </div>
                </div>               
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
</form>
<!--END MODAL EDIT-->

<!--MODAL DELETE-->
<form>
    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
               Anda yakin ingin menghapus data ini? Data yang sudah dihapus tidak dapat dikembalikan!
          </div>
          <div class="modal-footer">
            <input type="hidden" name="seq_id_delete" id="seq_id_delete" class="form-control">
            <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
            <button type="button" type="submit" id="btn_delete" class="btn btn-danger">Hapus</button>
          </div>
        </div>
      </div>
    </div>
</form>
<!--END MODAL DELETE-->

<script type="text/javascript">
    $(document).ready(function(){
        show_data(); //call function show all data   
        $('#mydata').dataTable();
          
        //function show all data
        function show_data(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('account/user_list')?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].userid+'</td>'+
                                '<td>'+data[i].nama_lengkap+'</td>'+
                                '<td>'+data[i].role+'</td>'+
                                '<td>'+data[i].login_terakhir+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-circle btn-sm item_edit" data-toggle="tooltip" data-placement="top" title="Edit" data-seq_id="'+data[i].seq_id+'" data-userid="'+data[i].userid+'" data-nama_lengkap="'+data[i].nama_lengkap+'"data-role="'+data[i].role+'"data-login_terakhir="'+data[i].login_terakhir+'"><i class="fas fa-search"></i></a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm item_delete" data-toggle="tooltip" data-placement="top" title="Delete" data-seq_id="'+data[i].seq_id+'"><i class="fas fa-trash"></i></a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#tampil_data').html(html);
                }
 
            });
        }

        $('#userid').change(function(){  
           var id = $('#userid').val();  
           if(id != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>account/check_exists",  
                     method:"POST",  
                     data:{id:id},  
                     success:function(data){  
                          $('#id_check_result').html(data);  
                     }  
                });  
           }  
      	});
 
        //Save Data
        $('#btn_save').on('click',function(){
            var userid   = $('#userid').val();
            var pwd      = $('#pwd').val();
            var nama     = $('#nama').val();
            var role     = $('#role').val();            

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('account/add_account')?>",
                dataType : "JSON",
                data : {userid:userid, pwd:pwd, nama:nama, role:role},
                success: function(data){
                    $('[name="userid"]').val("");
                    $('[name="pwd"]').val("");
                    $('[name="nama"]').val("");                  
                    $('#Modal_Add').modal('hide');
                 
                   $.alert({            
                      title: 'Sukses!',
                      content: 'Account Berhasil Di Tambah!',
                    }); 
          
                    show_data();
                }

            });
            return false;
        });
 
        //get data for update record
        $('#tampil_data').on('click','.item_edit',function(){
            var seq_id          = $(this).data('seq_id');
            var userid          = $(this).data('userid');
            var nama_lengkap    = $(this).data('nama_lengkap');
            var role            = $(this).data('role');        
             
            $('#Modal_Edit').modal('show');
            $('[name="seq_id"]').val(seq_id);
            $('[name="userid_edit"]').val(userid);
            $('[name="nama_edit"]').val(nama_lengkap);
            $('[name="role_edit"]').val(role);         
        });
 
        //update record to database
         $('#btn_update').on('click',function(){
            var seq_id          = $('#seq_id').val();    
            var userid          = $('#userid_edit').val();
            var nama_lengkap    = $('#nama_lengkap_edit').val();
            var role            = $('#role_edit').val(); 
            var pass            = $('#pwd_edit').val();        

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('account/upd_pwd')?>",
                dataType : "JSON",
                data : {seq_id:seq_id, userid:userid, nama_lengkap:nama_lengkap, role:role, pwd:pass},
                success: function(data){
                    $('[name="userid_edit"]').val(kd_matkul);
                    $('[name="nama_lengkap_edit"]').val(nama_matkul);
                    $('[name="role_edit"]').val(sks);
                    $('[name="pwd_edit"]').val(prodi);
                    $('#Modal_Edit').modal('hide');
                    show_data();
                }
            });
            return false;
        });
 
        //get data for delete record
        $('#tampil_data').on('click','.item_delete',function(){
            var seq_id = $(this).data('seq_id');             
            $('#Modal_Delete').modal('show');
            $('[name="seq_id_delete"]').val(seq_id);
        });
 
        //delete record to database
         $('#btn_delete').on('click',function(){
            var seq_id = $('#seq_id_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('admin/master/delete_matakuliah')?>",
                dataType : "JSON",
                data : {seq_id:seq_id},
                success: function(data){
                    $('[name="seq_id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_data();
                }
            });
            return false;
        });
    });
 
</script>