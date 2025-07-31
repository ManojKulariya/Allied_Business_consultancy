<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Bill #{{ $bill->id }}</title>
  <style>
    body { font-family: sans-serif; font-size: 14px; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #000; padding: 8px; text-align: left; }
    h1, h2, h3, h4 { margin: 0; padding: 0; }
    .text-end { text-align: right; }
  </style>
</head>
<body>
  <h2>Bill #{{ $bill->id }}</h2>
  <p><strong>Date:</strong> {{ $bill->created_at->format('d M Y, h:i A') }}</p>

  <h4>Customer Details</h4>
  <p><strong>Name:</strong> {{ $bill->customer->first_name ?? 'Walk-in' }}</p>
  <p><strong>Email:</strong> {{ $bill->customer->email ?? 'N/A' }}</p>
  <p><strong>Phone:</strong> {{ $bill->customer->phone ?? 'N/A' }}</p>

  <table>
    <thead>
      <tr>
        <th>Product</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Subtotal</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($bill->billItems as $item)
        <tr>
          <td>{{ $item->product->name }}</td>
          <td>{{ $item->quantity }}</td>
          <td>₹{{ number_format($item->price_per_unit, 2) }}</td>
          <td>₹{{ number_format($item->subtotal, 2) }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <h3 class="text-end">Total: ₹{{ number_format($bill->total_price, 2) }}</h3>
</body>
</html>
