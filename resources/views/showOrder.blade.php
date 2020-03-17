{{-- <table>
	<thead>
		<tr>
			<th>nombre producto</th>
			<th>cantidad</th>
			<th>precio</th>

		</tr>
	</thead>
	<tbody>
		@foreach($orders->items as $item)
		<tr>
			<td scope="row"> {{ $item->name }}</td>
			<td>{{ $item->pivot->quantity }}</td>
			<td>{{ $item->pivot->price }}</td>
		</tr>
		@endforeach
	</tbody>
</table>

Total: {{ $orders->grand_total }}

 --}}

@extends('dashboard')
@section('content')
<div class="table-table">
   <div>
      <div class="header"><i class="fas fa-file-invoice" style="margin-right: 10px;"></i>
         Detalle de Facturas
      </div>
   </div>
   <table class="tab" cellspacing="0">
      <tbody>
         <tr class="tri">
            <th class="thi">Numero del Producto</th>
            <th class="thi">Cantidad</th>
            <th class="thi">Precio unitario</th>
         </tr>
         @foreach($orders->items as $item)
		<tr>
			<td class="tdi"> {{ $item->name }}</td>
			<td class="tdi">{{ $item->pivot->quantity }}</td>
			<td class="tdi">$ {{ $item->pivot->price }}</td>
		</tr>
		@endforeach
      </tbody>

   </table>
   <div class="float-right" style="font-size: 1.5rem;">
    Total: ${{ $orders->grand_total }}
	</div>
</div>

@endsection