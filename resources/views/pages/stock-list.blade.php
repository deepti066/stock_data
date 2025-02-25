<!doctype html>
<html lang="en">
<head>
    <title>Stock List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container py-4">
        <h1 class="mb-4">Stock List</h1>
        
        <!-- Date Filter Form -->
        <form method="GET" action="{{ route('stock.store') }}" class="mb-7">
            <div class="form-group row">
                <label for="date" class="col-sm-2 col-form-label">Filter by Date</label>
                <div class="col-sm-4">
                    <input 
                        type="date" 
                        class="form-control" 
                        id="date" 
                        name="date" 
                        value="{{ request('date') }}" 
                        placeholder="Select Date"
                    />
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        <!-- Stock List Table -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Date</th>
                        <th>Category</th>
                        <th>Item Description</th>
                        <th>Item Serial No</th>
                        <th>Quantity</th>
                        <th>Invoice No</th>
                        <th>Vendor Challan No</th>
                        <th>Supplier Name</th>
                        <th>Project Name</th>
                        <th>Receiver Name</th>
                        <th>Requester Name</th>
                        <th>Approved By</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($stocks as $stock)
                        <tr>
                            <td>{{ $stock->date }}</td>
                            <td>{{ $stock->category }}</td>
                            <td>{{ $stock->item_description }}</td>
                            <td>{{ $stock->item_serial_no }}</td>
                            <td>{{ $stock->quantity }}</td>
                            <td>{{ $stock->invoice_no }}</td>
                            <td>{{ $stock->vendor_challan_no }}</td>
                            <td>{{ $stock->supplier_name }}</td>
                            <td>{{ $stock->project_name }}</td>
                            <td>{{ $stock->receiver_name }}</td>
                            <td>{{ $stock->requester_name }}</td>
                            <td>{{ $stock->approved_by }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="12" class="text-center">No data available for the selected date.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
