@extends('template/admin/index')

@section('content')
    <h1>Products</h1>
    <table class="table">

    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Deskrpsi</th>
        </tr>
    </thead>
       <tbody>
        @php $number =1; @endphp
        @foreach($products as $product)
         <tr>
            <td>{{ $number }}</td>
            <td>{{ $product->name }}       </td>
            <td>{{ $product->price }}      </td>
            <td>{{ $product->description }}</td>
         </tr>

         @php $number++  @endphp
         @endforeach

       </tbody>

    </table>
@endsection