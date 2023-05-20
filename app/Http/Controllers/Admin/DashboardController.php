<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Sales_invoices;
use App\Models\Suppliers_with_orders;
use App\Models\Treasuries_transactions;
use App\Models\Inv_itemCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
       public function index()
    {
        $clients_number = Customer::count();
        $sales_number = Sales_invoices::count();
        $purchases_number = Suppliers_with_orders::count();
        $balance = Treasuries_transactions::sum('money');

        //////////////////////////////////////////////////////

        $best_sales = Inv_itemCard::select('inv_itemcard.name as name', 'inv_itemcard.photo as image', 'inv_itemcard.item_code as item_id')
            ->selectRaw('( SELECT COUNT(*) FROM `sales_invoices_details` WHERE sales_invoices_details.item_code = inv_itemcard.item_code ) AS `item_count`')
            ->orderBy('item_count', 'DESC')
            ->latest()->take(5)->get();

        return view('admin.dashboard', compact('clients_number', 'sales_number', 'purchases_number', 'balance', 'best_sales'));
    }


    public function sales_per_year()
    {

        $salesInvoices = DB::table('sales_invoices')
            ->select(DB::raw('MONTH(invoice_date) as month'), DB::raw('COUNT(*) as count'))
            ->groupBy(DB::raw('MONTH(invoice_date)'))
            ->orderBy(DB::raw('MONTH(invoice_date)'))
            ->get();

        // Create an array to store the month and count data
        $data = [];
        // Loop through the results and retrieve the month and count
        for ($month = 1; $month <= 12; $month++) {
            $count = 0;
            // Check if there is a result for the current month
            foreach ($salesInvoices as $salesInvoice) {
                if ($salesInvoice->month == $month) {
                    $count = $salesInvoice->count;
                    break;
                }
            }
            // Add the month and count data to the array
            $data[] = [
                'month' => $month,
                'count' => $count
            ];
        }

        // Return the data as JSON
        return response()->json($data);
    }


    public function backup()
    {
         //delete all backups
         Storage::deleteDirectory('laravel');

         //make new backup
         Artisan::call('backup:run');


         //download that backup
         $backups = Storage::allFiles('laravel');

         return Storage::download($backups[0]);
    }
}
