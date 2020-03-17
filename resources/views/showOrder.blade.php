<table>
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