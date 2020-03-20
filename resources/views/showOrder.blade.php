@extends('dashboard')
@section('content')
<div class="table-table table-striped">
   <div>
      <div class="header"><i class="fas fa-file-invoice" style="margin-right: 10px;"></i>
         Detalle de Factura
      </div>
   </div>
   <table class="tab" cellspacing="0">
      <tbody style="font-size: 1.2rem;" >
         <tr class="tri" >
            <th class="thi">Numero del Producto</th>
            <th class="thi" style="text-align: right;">Cantidad</th>
            <th class="thi" style="text-align: right;">Precio unitario</th>
         </tr>
         @foreach($orders->items as $item)
		<tr>
			<td class="tdi"> {{ $item->name }}</td>
			<td class="tdi" style="text-align: right;">{{ $item->pivot->quantity }}</td>
			<td class="tdi" style="text-align: right;">$ {{ $item->pivot->price }}</td>
		</tr>
		@endforeach
      </tbody>

   </table>
   <div class="float-right" style="font-size: 1.5rem;">
    Total: ${{ $orders->grand_total }}
	</div>
</div>

@endsection