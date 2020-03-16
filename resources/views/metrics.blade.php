@extends('dashboard')
@section('content')
@if($messaje = Session::get('success'))
<div class="alert alert-success alert-dismissible fade in show" role="alert">
   <p>{{ $messaje }}</p>
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
   </button>
</div>
@endif
<div class="table-table">
   <div>
      <div class="header"><i class="fas fa-file-invoice-dollar" style="margin-right: 10px;"></i>
         Ventas
      </div>
   </div>
   <table class="tab" cellspacing="0">
      <tbody>
         <tr class="trv">
            <th class="thv">Numero de ordern</th>
            <th class="thv">Id usuario</th>
            <th class="thv">Productos</th>
            
            <th class="thv">Total</th>

         </tr>
         @foreach($orders as $order)
         <tr class="trv">
            <td class="tdv">{{$order->order_number}}</td>
            <td class="tdv">{{$order->user_id}}</td>
            <td class="tdv">{{$order->item_count}}</td>
            
            <td class="tdv">$ {{$order->grand_total}}</td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
{{ $orders->links() }}
@endsection