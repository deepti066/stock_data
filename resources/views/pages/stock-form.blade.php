<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Stock Data</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Add Stock Data</h1>

        <form action="{{ route('stock.store') }}" method="POST" class="space-y-4">
            @csrf

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="date" class="block font-medium text-gray-700">Date:</label>
                    <input type="date" id="date" name="date" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>
                @error('date')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <div>
                    <label for="category" class="block font-medium text-gray-700">Category:</label>
                    <input type="text" id="category" name="category" placeholder="Category" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>
                @error('category')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <div>
                    <label for="item_description" class="block font-medium text-gray-700">Item Description:</label>
                    <input type="text" id="item_description" name="item_description" placeholder="Item Description" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>

                @error('item_description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror 

                <div>
                    <label for="item_serial_number" class="block font-medium text-gray-700">Item Serial Number:</label>
                    <input type="number" id="item_serial_number" name="item_serial_number" placeholder="Item Serial Number" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>
                @error('item_serial_number')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <div>
                    <label for="quantity" class="block font-medium text-gray-700">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" placeholder="Quantity" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>
                @error('quantity')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <div>
                    <label for="invoice_number" class="block font-medium text-gray-700">Invoice Number:</label>
                    <input type="text" id="invoice_number" name="invoice_number" placeholder="Invoice Number" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>
                @error('invoice_number')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <div>
                    <label for="vendor_challan_number" class="block font-medium text-gray-700">Vendor Challan Number:</label>
                    <input type="text" id="vendor_challan_number" name="vendor_challan_number" placeholder="Vendor Challan Number" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                @error('vendor_challan_number')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <div>
                    <label for="supplier_name" class="block font-medium text-gray-700">Supplier Name:</label>
                    <input type="text" id="supplier_name" name="supplier_name" placeholder="Supplier Name" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>
                @error('supplier_name')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <div>
                    <label for="project_name" class="block font-medium text-gray-700">Project Name:</label>
                    <input type="text" id="project_name" name="project_name" placeholder="Project Name" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>
                @error('project_name')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <div>
                    <label for="receiver_name" class="block font-medium text-gray-700">Receiver Name:</label>
                    <input type="text" id="receiver_name" name="receiver_name" placeholder="Receiver Name" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>
                @error('receiver_name')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <div>
                    <label for="requester_name" class="block font-medium text-gray-700">Requester Name:</label>
                    <input type="text" id="requester_name" name="requester_name" placeholder="Requester Name" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>
                @error('requester_name')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <div>
                    <label for="approved_by" class="block font-medium text-gray-700">Approved By:</label>
                    <input type="text" id="approved_by" name="approved_by" placeholder="Approved By" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>
                @error('approved_by')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center mt-6">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md shadow hover:bg-blue-600 focus:outline-none">
                    Submit
                </button>
            </div>

        </form>
    </div>
</body>
</html>
