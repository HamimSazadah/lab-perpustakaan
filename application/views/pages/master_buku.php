
    <link href="http://localhost/hzh/perpustakaan/assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<div class="row">
    <div class="col-md-12">
        <div class="x_panel"> 
        <h2>Master Buku</h2>
<form class='form-horizontal' action='<?=isset($edit)?base_url().'index.php/main/index/master_buku?act=update':''?>' method="POST">
<?=isset($edit)?"<input type='hidden' name='id' value='$edit->id'>":''?>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul Buku
            </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="first-name" name='judul' required="required" value="<?=isset($edit->judul)?$edit->judul:''?>" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pengarang
            </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="first-name" name='pengarang' required="required" value="<?=isset($edit->pengarang)?$edit->pengarang:''?>" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Terbit
            </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="date" id="first-name" name='tahun' required="required" value="<?=isset($edit->tahun)?$edit->tahun:''?>" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    <input type="submit" value="Simpan" class='btn btn-primary'>
    <input type="reset" value="Reset" class='btn btn-secondary'>
</form>

       </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="x_panel"> 

        <table class='table' id='tblMasterBuku'>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Tahun</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
foreach($buku as $b){
    echo "<tr>
        <td>$b[id]</td>
        <td>$b[judul]</td>
        <td>$b[pengarang]</td>
        <td>$b[tahun]</td>
        <td> 
            <a alt='edit' href='".base_url()."index.php/main/index/master_buku?act=edit&id=$b[id]'><i class='fa fa-pencil'></i></a> 
            <a alt='delete' onclick=\"confirmDelete('$b[judul]',$b[id])\"><i class='fa fa-trash' ></i></a></td>
    </tr>";
}
                ?>
            </tbody>
        </table>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="http://localhost/hzh/perpustakaan/assets/plugins/jquery/dist/jquery.min.js"></script>
    

    <!-- Datatables -->
    <script src="http://localhost/hzh/perpustakaan/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="http://localhost/hzh/perpustakaan/assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>

function confirmDelete(judul,id){
    r = confirm('Hapus buku '+judul+'?');
    if (r == true) {
        window.location = '<?=base_url()?>index.php/main/index/master_buku?act=del&id='+id;
    }
}

$('#tblMasterBuku').DataTable();
</script>