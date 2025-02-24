<!DOCTYPE html>
<html>
<head>
    <title>Add Stock Data</title>
</head>
<body>
    <h1>Add Stock Data</h1>
    <form action="{{ route('stock.store') }}" method="POST">
        @csrf
        <label for="date">Date</label>
        <input type="date" id="date" name="date" required><br>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category" required><br>

        <label for="item-description">Item Description:</label>
        <input type="text" id="item-description" name="item-description" required><br>

        <label for="item-sl-number"> Item Serial Number.: </label>
        <input type="number" id="item-sl-number" name="item-sl-number" required><br>

        <label for="quantity"> Quantity: </label>
        <input type="number" id="quantity" name="quantity" required><br>
        
        <label for="invoice-number"> Invoice Number.: </label>
        <input type="number" id="invoice-number" name="invoice-number" required><br>
        
        <label for="vendor-challan-number"> Vendor Challan Number.: </label>
        <input type="number" id="vendor-challan-number" name="vendor-challan-number" required><br>
        
        <label for="supplier-name"> Supplier Name: </label>
        <input type="text" id="supplier-name" name="supplier-name" required><br>
        
        <label for="project-name"> Project Name: </label>
        <input type="text" id="project-name" name="project-name" required><br>
      
        <label for="receiver-name"> Receiver Name: </label>
        <input type="text" id="receiver-name" name="receiver-name" required><br>
        
        <label for="requester-name"> Requester Name: </label>
        <input type="text" id="requester-name" name="requester-name" required><br>
        
        <label for="approved-by"> Approved By: </label>
        <input type="text" id="approved-by" name="approved-by" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
