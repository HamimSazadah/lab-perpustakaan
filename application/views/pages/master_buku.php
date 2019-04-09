
    <link href="http://localhost/hzh/perpustakaan/assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<div class="row">
    <div class="col-md-12">
        <div class="x_panel"> 
        <h2>Master Buku</h2>
<form class='form-horizontal' action='' method="POST">
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul Buku
            </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="first-name" name='judul' required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pengarang
            </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="first-name" name='pengarang' required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Terbit
            </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="date" id="first-name" name='tahun' required="required" class="form-control col-md-7 col-xs-12">
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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>234</td>
                    <td>234</td>
                    <td>234</td>
                </tr>
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
$('#tblMasterBuku').DataTable();
</script>