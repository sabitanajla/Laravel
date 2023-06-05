@extends('template/admin/index')

@section('content')
    <h1>Customers</h1>
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
         </tr>

         @php $number++  @endphp
         @endforeach

       </tbody>

    </table>
@endsection