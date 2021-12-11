/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

$('.currency').toArray().forEach(function(field){
new Cleave(field, {
  numeral: true,
  numeralThousandsGroupStyle: 'thousand'
	});
});

function add_commas(nStr)
{
	var x,x1,x2 = '';
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
      x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}

function raw_number(nStr)
{
	var x = '';
    x = nStr.replace(/,/g, '');
    return Number(x);
}

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('jam').innerHTML = "Waktu saat ini [ " + h + ":" + m + ":" + s + " ]";
  var t = setTimeout(startTime, 500);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};
  return i;
}

 /**
  *
  * Fungsi Umum
  *
  */
  function simpan(fsource, dest) {
    $.ajax({
        url: `${base_url}master/${dest}`,
        type: "post",
        data: new FormData(fsource),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function() {
            $('#Modal_Add').modal('hide');
            $.confirm({
                title: 'Sukses!',
                content: 'Data berhasil di proses!',
                buttons: {
                    somethingElse: {
                        text: 'OK',
                        btnClass: 'btn-blue',
                        action: function() {
                            location.reload(true);
                        }
                    }
                }
            });
        }
    });
    return false;
}

function unggah(form, id) {
    $.ajax({
        url: `${base_url}upload/excel_upload/${id}`,
        type: "post",
        data: new FormData(form),
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function(data) {
            if(data.msg == "ok") {
                $('#Modal_Upload').modal('hide');
                $.confirm({
                    title: 'Sukses!',
                    content: 'Sebanyak <b>' + data.jum + '</b> Data Berhasil Di Upload!',
                    buttons: {
                        somethingElse: {
                            text: 'OK',
                            btnClass: 'btn-blue',
                            action: function() {
                                location.reload(true);
                            }
                        }
                    }
                });
            } else {
                $.alert({
                    title: 'Error!',
                    type: 'red',
                    content: '<b>' + data.msg + '</b>',
                });
            }
        }
    });
    return false;
}

function hapus(tabel, id, returl) {
    $.confirm({
        title: 'Konfirmasi Hapus Data!',
        content: 'Apakah anda yakin? Data yang terhapus tidak dapat dikembalikan',
        type: 'red',
        typeAnimated: true,
        autoClose: 'batal|5000',
        buttons: {
            tryAgain: {
                text: 'Hapus',
                btnClass: 'btn-red',
                action: function() {
                    $.ajax({
                        type: "GET",
                        url: `${base_url}master/hapus_data/${tabel}/${id}/${returl}`,
                        dataType: 'json',
                        success: function(response) {
                            if(response.status == "ok") {
                                $.confirm({
                                    title: 'Sukses!',
                                    content: 'Hapus data berhasil!',
                                    buttons: {
                                        somethingElse: {
                                            text: 'OK',
                                            btnClass: 'btn-blue',
                                            action: function() {
                                                location.reload(true);
                                            }
                                        }
                                    }
                                });
                            } else {
                                console.log('gagal');
                            }
                        }
                    });
                }
            },
            batal: {
                text: 'Batal',
                close: function() {}
            }
        }
    });
    return false;
}

function e_ts(id, tbl) {
    $('#Modal_Add').modal('show');
    $.ajax({
        type: "GET",
        url: `${base_url}master/details_by_id/${id}/${tbl}`,
        dataType: 'json',
        success: function(data) {
            if(data){
                $("#seq_id").val(data.seq_id);
                $("#nama_ts").val(data.nama_ts);
                $("#tahun").val(data.tahun);    
            } else {
                $("#frmAdd").trigger("reset");
            }       
        }
        
    });
    return false;
}

function e_pa(id, tbl) {
    $('#Modal_Add').modal('show');
    $.ajax({
        type: "GET",
        url: `${base_url}master/details_by_id/${id}/${tbl}`,
        dataType: 'json',
        success: function(data) {
            if(data){
                var doc = data.doc;
                if(doc) {
                    $('#status').html('<span class="badge badge-success">Dokumen telah diunggah</span>');
                } else {
                    $('#status').html('<span class="badge badge-danger">Dokumen belum diunggah</span>');
                }
                $("#seq_id").val(data.seq_id);
                $("#nidn").val(data.nik_nidn_pembimbing);
                $("#jml").val(data.jumlah);
                $("#mhs_pa").val(data.mhs_pa);
                $("#thn_akademik").val(data.th_akademik);
                $("#doc_edit").val(doc);
            } else {
                $("#tambah").trigger("reset");
            }
           
        }
    });
    return false;
}

function e_penelitian_dtps(id, tbl) {
    $('#Modal_Add').modal('show');
    $.ajax({
        type: "GET",
        url: `${base_url}master/details_by_id/${id}/${tbl}`,
        dataType: 'json',
        success: function(data) {
            if(data){
                var doc = data.doc;
                if(doc) {
                    $('#status').html('<span class="badge badge-success">Dokumen telah diunggah</span>');
                } else {
                    $('#status').html('<span class="badge badge-danger">Dokumen belum diunggah</span>');
                }
                $("#seq_id").val(data.seq_id);
                $("#sumber_biaya").val(data.sumber_biaya);
                $("#jml_judul").val(data.jml_judul);
                $("#th_akademik").val(data.th_akademik);
                $("#doc_edit").val(doc);
                $("#exampleModalLabel").text("Edit Data");
            } else {
                $("#tambah").trigger("reset");
                $("#exampleModalLabel").text("Tambah Data");
            }
           
        }
    });
    return false;
}

function e_pkm_dtps(id, tbl) {
    $('#Modal_Add').modal('show');
    $.ajax({
        type: "GET",
        url: `${base_url}master/details_by_id/${id}/${tbl}`,
        dataType: 'json',
        success: function(data) {
            if(data){
                var doc = data.doc;
                if(doc) {
                    $('#status').html('<span class="badge badge-success">Dokumen telah diunggah</span>');
                } else {
                    $('#status').html('<span class="badge badge-danger">Dokumen belum diunggah</span>');
                }
                $("#seq_id").val(data.seq_id);
                $("#sumber_biaya").val(data.sumber_biaya);
                $("#jml_judul").val(data.jml_judul);
                $("#th_akademik").val(data.th_akademik);
                $("#doc_edit").val(doc);
                $("#exampleModalLabel").text("Edit Data");
            } else {
                $("#tambah").trigger("reset");
                $("#exampleModalLabel").text("Tambah Data");
            }
           
        }
    });
    return false;
}

function e_publikasi_ilmiah_dtps(id, tbl) {
    $('#Modal_Add').modal('show');
    $.ajax({
        type: "GET",
        url: `${base_url}master/details_by_id/${id}/${tbl}`,
        dataType: 'json',
        success: function(data) {
            if(data){
                var doc = data.doc;
                if(doc) {
                    $('#status').html('<span class="badge badge-success">Dokumen telah diunggah</span>');
                } else {
                    $('#status').html('<span class="badge badge-danger">Dokumen belum diunggah</span>');
                }
                $("#seq_id").val(data.seq_id);
                $("#jenis_publikasi").val(data.jenis_publikasi);
                $("#jml_judul").val(data.jml_judul);
                $("#th_akademik").val(data.th_akademik);
                $("#doc_edit").val(doc);
                $("#exampleModalLabel").text("Edit Data");
            } else {
                $("#tambah").trigger("reset");
                $("#exampleModalLabel").text("Tambah Data");
            }
           
        }
    });
    return false;
}


/**
 *
 * End Script Save Data Dari Modal
 *
 */