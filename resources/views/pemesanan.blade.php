<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        section {
            min-height: 240px;
        }

        kotak {
            background-size: cover;
            background-color: rgb(175, 175, 239);
        }
    </style>

    <title>Pembayaran</title>
</head>

<body>
    <section class="container" id="daftar">
        <div class="row mb-5 pt-4">
            <div class="col text-center">
                <h4>Pembayaran Membership</h4>
            </div>
        </div>
        <form action="{{ route('pemesanan.action') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form group row">
                <label for="Nama" class="col-sm-2 col-form-label">Nama Lengkap :</label>
                <div class="col-sm-5">
                    <input type="text" name="nama" class="form-control" id="Nama">
                </div>
            </div>
            <br>
            <div class="form group row">
                <label for="NIK" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-5">
                    <input type="number" name="nik" class="form-control" id="NIK">
                </div>
            </div>
            <br>
            <div class="form group row">
                <label for="NomorHp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-5">
                    <input type="number" name="no_hp" class=" form-control" id="NomorHp">
                </div>
            </div>
            <br>
            <div class="form group row">
                <label for="Tanggal_pemesanan" class="col-sm-2 col-form-label">Tanggal Pemesanan</label>
                <div class="col-sm-5">
                    <input type="date" name="tanggal_pemesanan" class=" form-control" id="Tanggal">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="paketan" class="col-sm-2 col-form-label">Pilih Paket</label>
                <select name="paket" class="custom-select my-1 mr-sm-2 col-sm-5" id="inlineFormCustomSelectPref">
                    <option selected value="{{ $type }}">Membership {{ $type }}</option>
                    <option value="gold">Membership gold</option>
                    <option value="platinum">Membership platinum</option>
                </select>
            </div>
            <br>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Pilih Pembayaran</label>
                <select name="pembayaran" class="custom-select my-1 mr-sm-2 col-sm-5" id="inlineFormCustomSelectPref">
                    <option selected>Pilih...</option>
                    <option value="Transfer Bank">Transfer Bank</option>
                    <option value="E-Money">E-Money</option>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                </select>
            </div>
            <br>
            <div class="btn-buy">
                <button class="btn btn-primary btn-lg" type="submit">Bayar</button>
                <button class="btn btn-primary btn-lg" type="reset">Batal</button>
            </div>
        </form>

    </section>
</body>

</html>
