@extends('template/admin/index')

@section('content')
    <h1>Customers</h1>
    <a href="{{ route('pelanggan.input') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>
    <table class="table">

    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No HP</th>
        </tr>
    </thead>
       <tbody>
        @php $number =1; @endphp
        @foreach($customers as $customer)
         <tr>
            <td>{{ $number }}             </td>
            <td>{{ $customer->name }}     </td>
            <td>{{ $customer->address }}  </td>
            <td>{{ $customer->no_hp }}    </td>
            <td>
            <a href="{{ route('pelanggan.ubah', $customer) }}" class="btn btn-primary">Edit</a>
              <form action="{{ route('pelanggan.hapus', $customer) }}" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</button>
              </form>
            </td>
         </tr>
         

         @php $number++  @endphp
         @endforeach

       </tbody>

    </table>
@endsection