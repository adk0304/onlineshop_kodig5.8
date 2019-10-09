<h1>galery</h1>
<table>
    <tr>
        <th>id galery</th>
        <th>gambar produk</th>
    </tr>
    @foreach ($data_galery as $galery)
        <tr>
        <td>{{$galery->id_galery}}</td>
        <td>{{$galery->gambar_produk}}</td>
        </tr>
    @endforeach
</table>
