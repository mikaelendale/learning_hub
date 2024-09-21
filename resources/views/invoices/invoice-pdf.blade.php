<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff; /* Clear white background */
            font-family: 'Poppins', sans-serif;
            color: #333333; /* Dark text color */
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff; /* Clear white container */
            border-radius: 8px;
            border: 1px solid #dbe1e8;
            padding: 20px;
        }

        .header {
            text-align: center;
            padding: 20px;
            border-bottom: 1px solid #dbe1e8;
        }

        .header img {
            width: 100px;
            margin-bottom: 10px;
        }

        .header h1 {
            font-size: 28px;
            margin: 0;
            font-weight: 600;
        }

        .header p {
            font-size: 14px;
            margin: 5px 0;
        }

        .content {
            padding: 20px;
        }

        .content .section {
            margin-bottom: 20px;
        }

        .content .section h2 {
            font-size: 20px;
            margin: 0 0 10px 0;
            border-bottom: 2px solid #dbe1e8;
            padding-bottom: 5px;
        }

        .content .section p {
            margin: 5px 0;
        }

        .content table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .content table th,
        .content table td {
            padding: 12px;
            border: 1px solid #dbe1e8;
            text-align: left;
        }

        .content table th {
            background-color: #f5f5f5;
            font-weight: 600;
        }

        .content table td {
            font-weight: 400;
        }

        .content table tfoot td {
            border-top: 2px solid #dbe1e8;
            font-weight: 600;
            text-align: right;
        }

        .footer {
            text-align: center;
            padding: 15px;
            font-size: 12px;
            color: #003366; /* Dark blue color for footer text */
            border-top: 1px solid #dbe1e8;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header with Company Logo -->
        <div class="header">
            <img src="data:image/svg+xml;base64,{{ base64_encode(file_get_contents(public_path('images/logo.svg'))) }}" alt="Company Logo">
            <h1>Invoice</h1>
            <p>CEO: Mikael Endale</p>
        </div>

        <!-- Content -->
        <div class="content">
            <!-- Invoice Details -->
            <div class="section">
                <h2>Invoice Details</h2>
                <p><strong>Invoice Number:</strong> 001</p>
                <p><strong>Invoice Date:</strong> 01/01/2024</p>
                <p><strong>Due Date:</strong> 15/01/2024</p>
            </div>

            <!-- Customer Details -->
            <div class="section">
                <h2>Bill To:</h2>
                <p><strong>Customer Name:</strong> {{Auth::user()->name}}</p>
                <p><strong>Customer Address:</strong> {{Auth::user()->adress}}</p>
                <p><strong>Customer Phone:</strong> {{Auth::user()->phone_no}}</p>
                <p><strong>Customer Email:</strong> {{Auth::user()->email}}</p>
            </div>

            <!-- Course Details -->
            <div class="section">
                <h2>Course Details:</h2>
                <p><strong>Course Name:</strong> {{Auth::user()->class_attended}}</p>
                <p><strong>Course Fee:</strong> 1,999 ETB</p>
            </div>

            <!-- Invoice Table -->
            <div class="section">
                <table>
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{Auth::user()->class_attended}}</td>
                            <td>1</td>
                            <td>1,999 ETB</td>
                            <td>1,999 ETB</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">Subtotal:</td>
                            <td>1,999 ETB</td>
                        </tr>
                        <tr>
                            <td colspan="3">Total Amount Due:</td>
                            <td>1,999 ETB</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <!-- Payment Instructions and Notes -->
            <div class="section">
                <h2>Payment Instructions:</h2>
                <p>Bank: Tele birr mobile banking</p>
                <p>Account Number: +251955133507</p>
                <p>Notes: Thank you for enrolling in our course!</p>
            </div>
        </div>

        <!-- Footer with Company Information -->
        <div class="footer">
            <p>Lalo Dev</p>
            <p>Phone: +251 955133507 | Email: info@lalodev.com</p>
            <p>Date: {{ $paymentDetails['payment_date'] }}</p>
        </div>
    </div>
</body>

</html>
