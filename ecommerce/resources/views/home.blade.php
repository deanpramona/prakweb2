<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      body{
        padding: 20px;
        font-family: 'Courier New', Courier, monospace;
      }
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: auto;
}
th,td{
    padding: 0 10px;
}
</style>
  </head>
  <body>
        <h3 style="text-align: center;">Praktikum 8</h3>
        <hr>
    <form>
      <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-card"></i>
              </div>
            </div> 
            <input id="nama" name="nama" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="tgl_periksa" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
        <div class="col-8">
          <input id="tgl_periksa" name="tgl_periksa" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="usia" class="col-4 col-form-label">Tanggal Lahir/Usia</label> 
        <div class="col-8">
          <input id="usia" name="usia" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Jenis Kelamin</label> 
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-laki"> 
            <label for="jk_0" class="custom-control-label">Laki-laki</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
            <label for="jk_1" class="custom-control-label">Perempuan</label>
          </div>
        </div>
      </div> 
    </form>
    <br><br>
                <table style="margin-left:auto;margin-right:auto; overflow: auto;" >
                    <thead style="text-align:center;">
                        <tr>
                            <th>Jenis Tes</th>
                            <th>Hasil Pemeriksaan</th>
                            <th>Normal</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Tekanan Darah</td>
                        <td></td>
                        <td>120/180 mmhg</td>
                    </tr>
                    <tr>
                        <td>Asam Urat</td>
                        <td></td>
                        <td>Pria : < 7 mg/dl | Wanita : < 6 mg/dl</td>
                    </tr>
                    <tr>
                        <td>Kolesterol Total</td>
                        <td></td>
                        <td>< 200 mg/dl</td>
                    </tr>
                    <tr>
                        <td rowspan="3"  style="padding: 60px 60px 60px 10px;">Gula Darah</td>
                        <td rowspan="3"></td>
                        <td>Puasa : 70-110 mg/dl</td>
                    </tr>
                    <tr>
                        <td>2 Jam setelah makan : 100-150 mg/dl</td>
                    </tr>
                    <tr>
                        <td>Sewaktu/acak : 70-125 mg/dl</td>
                    </tr>
                    </tbody>
                </table>
  </body>
</html>