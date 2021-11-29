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
        url: `${base_url}tabel/${dest}`,
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
                        url: `${base_url}tabel/hapus_data/${tabel}/${id}/${returl}`,
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
/**
 *
 * End Script Save Data Dari Modal
 *
 */