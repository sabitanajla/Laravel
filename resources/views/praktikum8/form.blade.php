<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tes Darah</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card">
            <div class="card-header">Tes Darah</div>
            <div class="card-body">
                <form action="" method="get">
                    @csrf
                <div class="row-mb-6">
                    <label for="nama" class="col-md-4 col-form-label">Nama</label>
                    <div class="col-md-12"> 
                       <input type="text" class="form-control" id="nama" name="nama" value="" >
                    </div>
                </div> 
                <div class="row-mb-12">
                    <label for="tgl" class="col-md-12 col-form-label">Tanggal Pemeriksaan</label>
                    <div class="col-md-12"> 
                       <input type="date" class="form-control" id="tgl" name="tgl" value="" >
                    </div>
                </div> 
                <div class="row-mb-6">
                    <label for="lhr" class="col-md-12 col-form-label">Tanggal Lahir</label>
                    <div class="col-md-12"> 
                       <input type="date" class="form-control" id="lhr" name="lhr" value="" >
                    </div>
                </div> 
                <div class="form-check">
                <div class="row-mb-6">
                    <label for="jk" class="col-md-8 col-form-label">Jenis Kelamin</label>
                    <div class="col-md-8">            
                    <input name="jk" class="form-check-input" type="checkbox" value="Laki-laki" id="lk">
                    <label class="form-check-label" for="lk">
                        Laki-laki
                    </label>
                    </div>
                    <div class="form-check">
                    <input name="jk" class="form-check-input" type="checkbox" value="Perempuan" id="pr" >
                    <label class="form-check-label" for="pr">
                    Perempuan 
                    </label>
                    </div>
                 </div>
                <br>
                <div class="row-mb-0">
                    <div class="col-md-2 offset-md-12">
                      <button class="btn btn-primary" type="submit">kirim
                     </button>
                    </div>
                </div>
            </div>
        </form>  
         
    </div> 
</div> 
</div>
</div>  
</div> 
<br> <br>
<br>
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"  ></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"  ></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
    
</html>