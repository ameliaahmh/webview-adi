<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/instascan.min.js')}}"></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>Hello, world!</title>

    <style >
        #kirim{
        background-image: url("asset/kirim.png");
        height: 120px;
        background-repeat: no-repeat;
        width: auto;
        }
        #terima{
            background-image: url("asset/terima.png");
            height: 120px;
            background-repeat: no-repeat;
            width: auto;
        }
        .container-fluid{
            background-image: url("asset/group 9.png");

        }
        .table{
            background-color: #EC663E;
            font-size: 13px;
            width: 70%;

        }
        .card-header{
            background-color: #EC663E;
            color: #fff;
        }
    </style>

  </head>
  <body>
    <!-- kirim terima header -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-2"></div>
        <a href="diisi tujuan dalam laravel" id="kirim" class="col-4 mt-4"></a> 
        <a href="diisi tujuan dalam laravel" id="terima" class="col-4 mt-4"></a>
      </div>   
    </div>
    <!-- akhir kirim terima -->

    <!-- tabel bulan -->
    <div class="card text-center mt-5">
  <div class="card-header">
    Bayar SPP
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">

 
    <button class ="btn btn-outline-info btn-sm" id="decrement">-</button>
    <span><span id="nilai">0 </span> bulan</span>   
    <button  class ="btn btn-outline-info btn-sm" id="increment">+</button>

<p id="harga">0</p>
</div>
      </div>
    </div>

    <a href="#" id="bayar" class="btn btn-primary">Bayar</a>
  </div>
</div>

<script>
      let x = 0;
        const perBulan= 175000;
        let span = document.getElementById('nilai'); 
        let increment = document.getElementById('increment'); 
        let decrement = document.getElementById('decrement'); 
        let harga = document.getElementById('harga');

        decrement.addEventListener('click', function () {
          span.textContent = --x;
          harga.textContent= (x*-perBulan)*-1;
          // var hasilAkhir = -x*hasil;
          return hasil;
        });

        increment.addEventListener('click', function () {
          span.textContent = ++x;
          harga.textContent= x * perBulan;
          return x;
        });
      
    </script>
  </body>
</html>