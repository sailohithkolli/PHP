<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CSC561 | Lab1c</title>
  </head>
<body>

<h3>Status of all of our inventory items - (Inventory -> { belongsTo } -> Status)</h3>

<table border="1">
				<thead>
                    <th>Inventory Item</th>
					<th>Description</th>
				</thead>

				<tbody>
					@foreach ($inventories as $inventory)
                    <tr>
                            <td>{{ $inventory->description }}</td>
							<td>{{ $inventory->status->description }}</td>
                    </tr>
                     @endforeach

                </tbody>
</table> 

<h3>Inventory Items that have a status of Checked Out - (Status -> { hasMany } -> Inventory)</h3>

<table border="1">
				<thead>
                    <th>Inventory Item</th>
					<th>Description</th>
				</thead>

				<tbody>
					@foreach ($statuses->where('description', 'Checked out')->first()->inventory as $checked_out_inventory)
                    <tr>
                            <td>{{ $checked_out_inventory->description }}</td>
							<td>{{ $checked_out_inventory->status->description }}</td>
                    </tr>
                     @endforeach

                </tbody>
                
</table> 

<h3>All items that user1 has checked out with the corresponding checkout_time</h3>

<table border="1">
				<thead>
                    <th>Inventory Item</th>
					<th>Description</th>
          <th>Checkout Time</th>
				</thead>

				<tbody>
					@foreach ($statuses->where('description', 'Checked out')->first()->inventory as $checked_out_inventory)
                    <tr>
                            <td>{{ $checked_out_inventory->description }}</td>
							<td>{{ $checked_out_inventory->status->description }}</td>
              <td>{{ $checked_out_inventory->id}}</td>
                    </tr>
                     @endforeach

                </tbody>
                
</table>

</body>
</html>