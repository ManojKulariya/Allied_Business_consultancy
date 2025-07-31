<?php

// app/Http/Controllers/Admin/BillingController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Bill;
use App\Models\BillItem;
use App\Models\Customer;
use Barryvdh\DomPDF\Facade\Pdf;


class BillingController extends Controller
{
    public function index()
    {
        $bills = Bill::with('customer')->latest()->paginate(10);
        return view('admin.bills.index', compact('bills'));
    }

    public function create()
    {
        $products = Product::all();
        $customers = Customer::all();
        return view('admin.bills.create', compact('products', 'customers'));
    }

    public function store(Request $request)
{
    // $request->validate([
    //     'customer_name' => 'required|string|max:255',
    //     'customer_email' => 'nullable|email|max:255',
    //     'customer_phone' => 'nullable|string|max:20',
    //     'products' => 'required|array|min:1',
    //     'products.*.product_id' => 'required|exists:products,id',
    //     'products.*.quantity' => 'required|integer|min:1',
    // ]);

    // Create new customer record
    $customer = Customer::create([
        'first_name' => $request->customer_name,
        'email' => $request->customer_email,
        'phone' => $request->customer_phone,
    ]);

    // Calculate total and prepare bill items
    $total = 0;
    $items = [];

    foreach ($request->products as $productInput) {
        $product = Product::findOrFail($productInput['product_id']);
        $qty = $productInput['quantity'];
        $subtotal = $product->price * $qty;
        $total += $subtotal;

        $items[] = [
            'product_id' => $product->id,
            'quantity' => $qty,
            'price_per_unit' => $product->price,
            'subtotal' => $subtotal,
        ];
    }

    // Create the bill linked with new customer
    $bill = Bill::create([
        'customer_id' => $customer->id,
        'total_price' => $total,
        'status' => 'Pending',
    ]);

    // Save bill items
    foreach ($items as $item) {
        $item['bill_id'] = $bill->id;
        BillItem::create($item);
    }

    return redirect()->route('admin.bills.show', $bill->id);
}


    public function show($id)
    {
        $bill = Bill::with(['billItems.product', 'customer'])->findOrFail($id);
        return view('admin.bills.show', compact('bill'));
    }
    public function print($id)
{
    $bill = Bill::with(['billItems.product', 'customer'])->findOrFail($id);

    $pdf = Pdf::loadView('admin.bills.print', compact('bill'));

    return $pdf->stream('bill-' . $bill->id . '.pdf');
}


    public function destroy($id)
    {
        $bill = Bill::findOrFail($id);
        $bill->delete();
        return redirect()->route('admin.bills.index')->with('success', 'Bill deleted successfully!');
    }
}
