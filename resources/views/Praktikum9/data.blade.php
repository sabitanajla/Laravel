<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class= "container">
    <hr><h2 style="text-align: center; margin-top: 15px;">Form Data Pasien</h2><hr>
<body>
<form action="{{ route('Praktikum9/hasil')}}" method="post">
    @csrf
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl " class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar-o"></i>
          </div>
        </div> 
        <input id="tgl" name="tgl" placeholder="Tanggal Pemesriksaan" type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
        </div> 
        <input id="lahir" name="lahir" placeholder="Tanggal Lahir" type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="td" class="col-4 col-form-label">Tekanan Darah</label> 
    <div class="col-8">
      <input id="td" name="td" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="asam" class="col-4 col-form-label">Asam Urat</label> 
    <div class="col-8">
      <input id="asam" name="asam" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kl" class="col-4 col-form-label">Kolestrol</label> 
    <div class="col-8">
      <input id="kl" name="kl" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="gd" class="col-4 col-form-label">Gula Darah</label> 
    <div class="col-8">
      <input id="gd" name="gd" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="data" class="col-4 col-form-label">Kondisi </label> 
    <div class="col-8">
      <select id="data" name="data" class="custom-select">
      <?php  foreach($data as $k) { ?>
            <option value="<?= $k; ?>"><?=  $k ?></option>
        <?php }?>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<table class="table text-center">
  <thead class="table-dark">
    <tr>
        <td scope="col">No</td>
        <td scope="col">Jenis Tes</td>
        <td scope="col">Normal</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Tekanan Darah</td>
      <td>120/80 mmhg</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Asam Urat</td>
      <td>pria: 7 mg/dl | Wanita: 6 mg/dl</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Kolestrol</td>
      <td>< 200 mg/dl</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Gula Darah</td>
      <td>puasa:70-110 <br>
        2 jam setelah makan:100-160 mg/dl <br>
        sewaktu/acak 70-125 mg/ml</td>
    </tr>
  </tbody>
</table>
</body>
</html>