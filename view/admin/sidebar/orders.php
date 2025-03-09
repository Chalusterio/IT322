<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>

    <!-- Bootstrap & DataTables -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <style>
        /* Light Theme */
        body {
            background-color: #F6F0F0;
            color: #5A3D2B;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            padding: 40px 60px;
        }

        h2 {
            color: #735240;
            font-weight: bold;
            margin-bottom: 25px;
        }

        /* Order Summary */
        .order-summary {
            display: flex;
            gap: 20px;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .order-card {
            flex: 1;
            background: white;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
        }

        .order-card h3 {
            font-size: 16px;
            color: #5A3D2B;
            margin-bottom: 5px;
        }

        .order-card h1 {
            font-size: 26px;
            font-weight: bold;
        }

        /* Table */
        .table-container {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
        }

        .table {
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 0;
        }

        .table th {
        background: #735240;
        color: white;
        padding: 15px;
        text-align: center; /* Ensure text is centered */
        font-size: 14px;
        vertical-align: middle;
        }

        .table td {
            text-align: center;
            vertical-align: middle;
            padding: 15px;
            font-size: 14px;
        }

        /* Status Labels */
        .status {
            padding: 5px 10px;
            border-radius: 6px;
            font-weight: bold;
            display: inline-block;
            color: white;
        }

        .status-delivered { background: #3498db; } /* Blue */
        .status-shipping { background: #2ecc71; } /* Green */
        .status-new { background: #2980b9; } /* Dark Blue */
        .status-pending { background: #f39c12; } /* Orange */
        .status-return { background: #e74c3c; } /* Red */

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .order-summary {
                flex-direction: column;
                gap: 15px;
            }
        }
        a {
            text-decoration: none !important;
            color: inherit;
        }

        a:hover, a:focus {
            text-decoration: none !important;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Orders</h2>

    <!-- Order Summary -->
    <div class="order-summary">
        <div class="order-card">
            <h3>Total Orders</h3>
            <h1>15,101</h1>
        </div>
        <div class="order-card">
            <h3>New Orders</h3>
            <h1>3,874</h1>
        </div>
        <div class="order-card">
            <h3>Delivered Orders</h3>
            <h1>5,446</h1>
        </div>
        <div class="order-card">
            <h3>Cancelled Orders</h3>
            <h1>556</h1>
        </div>
    </div>

<!-- Orders Table -->
<div class="table-container">
    <table id="ordersTable" class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Customer</th>
                <th class="text-center">Created At</th>
                <th class="text-center">Items</th>
                <th class="text-center">Payment Method</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Cha Lusterio<br><small>cha@gmail.com</small></td>
                <td>02 Jan 2025</td>
                <td>2</td>
                <td>PayMaya</td>
                <td> ₱245.00</td>
                <td><span class="status status-delivered">Delivered</span></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Krysel Tiempo<br><small>ktiempo@gmail.com</small></td>
                <td>14 Jan 2025</td>
                <td>2</td>
                <td>Gcash</td>
                <td>₱210.00</td>
                <td><span class="status status-shipping">Shipping</span></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Ezra Marinas<br><small>ezra@gmail.com</small></td>
                <td>04 Feb 2025</td>
                <td>2</td>
                <td>Cash on Delivery</td>
                <td> ₱160.00</td>
                <td><span class="status status-new">New</span></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Marisol Datahan<br><small>marisoll@gmail.com</small></td>
                <td>05 Mar 2025</td>
                <td>2</td>
                <td>Gcash</td>
                <td>₱170.00</td>
                <td><span class="status status-pending">Pending</span></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Esther Eblacas<br><small>eblacas@gmail.com</small></td>
                <td>06 Dec 2024</td>
                <td>2</td>
                <td>Credit Card</td>
                <td>₱130.00</td>
                <td><span class="status status-return">Return</span></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Therese Solangon<br><small>therese@gmail.com</small></td>
                <td>06 Nov 2024</td>
                <td>2</td>
                <td>Credit Card</td>
                <td>₱1000.00</td>
                <td><span class="status status-return">Return</span></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
$(document).ready(function() {
    $("#ordersTable").DataTable({
        "paging": true,
        "searching": true,
        "ordering": false,
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
});
</script>

</body>
</html>
