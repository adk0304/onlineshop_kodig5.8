<!DOCTYPE html>
<html>
<head>
    <title>Promo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                    This is a success alert—check it out!
            </div>
            @endif
        <div class="row">
            <div class="col-6">
            <h1>PROMO</h1>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah Promo
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="/promo/create" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Promo </label>
                                    <input name="nama_promo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Promo">
                                    </div>
                                    <div class="form-group">
                                            <label for="exampleFormControlSelect1">Jenis Produk</label>
                                            <select name="jenis_promo"class="form-control" id="exampleFormControlSelect1">
                                            <option>Potongan harga Langsung</option>
                                            <option>Diskon %</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label for="exampleInputEmail1">Nominal </label>
                                            <input name="nominal_promo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nominal">
                                            </div>
                                    <div class="form-group">
                                            <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                            <div class="col-10">
                                            <input name="expired_date" class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                    </div></div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </div></form>
                        </div>
                        </div>
                    </div>
            </div>
            <table class="table table-hover" >
                        <tr>
                            <th>id promo</th>
                            <th>Nama Promo</th>
                            <th>Jenis Promo</th>
                            <th>Nominal </th>
                            <th>expired Date </th>
                            <th>AKSI</th>
                        </tr>
                        @foreach ($data_promo as $promo)
                            <tr>
                            <td>{{$promo->id_promo}}</td>
                            <td>{{$promo->nama_promo}}</td>
                            <td>{{$promo->jenis_promo}}</td>
                            <td>{{$promo->nominal_promo}}</td>
                            <td>{{$promo->expired_date}}</td>
                            <td><a href="/promo/{{$promo->id_promo}}/edit" class="btn btn-warning btn-sm">Edit</td>
                            </tr>
                        @endforeach
                    </table>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

{{-- {{dd($data_promo)}} --}}

