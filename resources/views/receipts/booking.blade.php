<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Car Rental Receipt</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body { 
            font-family: 'Segoe UI', DejaVu Sans, sans-serif; 
            font-size: 12px;
            line-height: 1.6;
            color: #1a202c;
            background: #f7fafc;
            padding: 20px;
        }
        
        .receipt-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        
        .header { 
            background-color: #667eea;
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .title { 
            font-size: 28px; 
            font-weight: bold;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }
        
        .subtitle {
            font-size: 14px;
            opacity: 0.95;
        }
        
        .content {
            padding: 30px;
        }
        
        .receipt-info {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background: #f7fafc;
            border-radius: 6px;
            margin-bottom: 25px;
            border-left: 4px solid #667eea;
        }
        
        .receipt-info-item {
            flex: 1;
        }
        
        .section { 
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .section:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        
        .section-title { 
            font-weight: bold;
            font-size: 14px;
            color: #667eea;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }
        
        .info-item {
            padding: 8px 0;
        }
        
        .label { 
            font-weight: 600;
            color: #4a5568;
            display: inline-block;
            min-width: 100px;
        }
        
        .value {
            color: #1a202c;
        }
        
        table { 
            width: 100%; 
            border-collapse: collapse;
            margin-top: 15px;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        
        td, th { 
            padding: 12px 15px;
            text-align: left;
        }
        
        th { 
            background: #667eea;
            color: white;
            font-weight: 600;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
        
        td {
            background: white;
            border-bottom: 1px solid #e2e8f0;
        }
        
        tr:last-child td {
            border-bottom: none;
        }
        
        .total-row {
            background: #f7fafc !important;
            font-weight: bold;
            font-size: 14px;
        }
        
        .status-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .status-paid {
            background: #c6f6d5;
            color: #22543d;
        }
        
        .status-approved {
            background: #bee3f8;
            color: #2c5282;
        }
        
        .footer {
            background: #f7fafc;
            padding: 20px 30px;
            text-align: center;
            font-size: 11px;
            color: #718096;
            border-top: 2px solid #e2e8f0;
        }
        
        .footer p {
            margin: 5px 0;
        }
        
        .thank-you {
            font-size: 13px;
            color: #4a5568;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        @media print {
            body {
                background: white;
                padding: 0;
            }
            
            .receipt-container {
                box-shadow: none;
                border-radius: 0;
            }
        }
    </style>
</head>
<body>

<div class="receipt-container">
    <div class="header">
        <div class="title">CarRent IIUM</div>
        <div class="subtitle">Official Payment Receipt</div>
    </div>

    <div class="content">
        <div class="receipt-info">
            <div class="receipt-info-item">
                <div class="label">Receipt No:</div>
                <div class="value" style="font-weight: bold; font-size: 14px;">CR-{{ $booking->id }}</div>
            </div>
            <div class="receipt-info-item" style="text-align: right;">
                <div class="label">Issue Date:</div>
                <div class="value">{{ now()->format('d M Y') }}</div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Customer Information</div>
            <div class="info-grid">
                <div class="info-item">
                    <span class="label">Name:</span>
                    <span class="value">{{ $booking->user->name }}</span>
                </div>
                <div class="info-item">
                    <span class="label">Email:</span>
                    <span class="value">{{ $booking->user->email }}</span>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Booking Summary</div>
            
            <table>
                <thead>
                    <tr>
                        <th>Vehicle</th>
                        <th>Plate Number</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th style="text-align: right;">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $booking->car->car_name }}</td>
                        <td>{{ $booking->car->plate_number }}</td>
                        <td>{{ \Carbon\Carbon::parse($booking->start_date)->format('d M Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($booking->end_date)->format('d M Y') }}</td>
                        <td style="text-align: right;">RM {{ number_format($booking->total_price, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="total-row" style="text-align: right; padding-right: 15px;">Total Amount:</td>
                        <td class="total-row" style="text-align: right;">RM {{ number_format($booking->total_price, 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section">
            <div class="section-title">Payment & Status</div>
            <div class="info-grid">
                <div class="info-item">
                    <span class="label">Payment Method:</span>
                    <span class="value">DuitNow QR</span>
                </div>
                <div class="info-item">
                    <span class="label">Payment Status:</span>
                    <span class="status-badge status-paid">Paid</span>
                </div>
                <div class="info-item">
                    <span class="label">Booking Status:</span>
                    <span class="status-badge status-approved">Approved</span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p class="thank-you">Thank you for choosing CarRent IIUM</p>
        <p>For inquiries, please contact us through our official channels.</p>
    </div>
</div>

</body>
</html>