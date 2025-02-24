<!DOCTYPE html>
<html>
<head>
    <title>Stock List</title>
</head>
<body>
    <h1>Stock List</h1>
    <table>
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
        @foreach($stocks as $stock)
            <tr>
                <td>{{ $stock->date }}</td>
                <td>{{ $stock->category }}</td>
                <td>{{ $stock->item-description }}</td>
                <td>{{ $stock->item-sl-number }}</td>
                <td>{{ $stock->quantity }}</td>
                <td>{{ $stock->invoice-number }}</td>
                <td>{{ $stock->vendor-challan-number }}</td>
                <td>{{ $stock->supplier-name }}</td>
                <td>{{ $stock->project-name }}</td>
                <td>{{ $stock->receiver-name }}</td>
                <td>{{ $stock->requester-name }}</td>
                <td>{{ $stock->approved-by }}</td>

            </tr>
        @endforeach
    </table>
</body>
</html>
