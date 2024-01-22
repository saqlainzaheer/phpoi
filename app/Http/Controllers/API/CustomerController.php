<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\OrderHistory;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function createDepositRequest(Request $req)
    {
        $image = $req->file('screenshot');
        $avatarDisk = Storage::disk('local'); // Use the default 'local' disk
        $screenshot = $avatarDisk->put('uploads', $image);
        $deposit = Deposit::create([
            'user_id' => $req->user()->id,
            'amount' => $req->amount,
            'payment_type' => $req->payment_type,
            'screenshot' => $screenshot,
            'transaction_date' => $req->transaction_date
        ]);
        return response()->json([
            'message' => 'Deposit request created successfully.',
            'data' => $deposit,
        ], 201);
    }

    public function listDepositRequest(Request $req)
    {
        $deposits = Deposit::where('user_id', $req->user()->id)->get();
        return response()->json([
            'message' => 'Data retrieved successfully',
            'data' => $deposits,
        ], 200);
    }

    public function listSalaries(Request $req)
    {
        $salaries = Salary::where('user_id', $req->user()->id)->get();
        return response()->json([
            'message' => 'Data retrieved successfully',
            'data' => $salaries,
        ], 200);
    }

    public function returns(Request $req)
    {
        if ($req->type == 'yearly') {
            $returns = Salary::where('user_id', $req->user()->id)
                ->selectRaw('YEAR(date) as year, SUM(initial_investment) as total_investment, SUM(other_investment) as total_other_investment, SUM(profit_amount) as total_profit')
                ->groupBy('year')
                ->orderBy('year', 'asc')
                ->get();
        } elseif ($req->type == 'quarterly') {
            $returns = Salary::where('user_id', $req->user()->id)
                ->selectRaw('YEAR(date) as year, QUARTER(date) as quarter, SUM(initial_investment) as total_investment, SUM(other_investment) as total_other_investment, SUM(profit_amount) as total_profit')
                ->groupBy('year', 'quarter')
                ->orderBy('year', 'asc')
                ->orderBy('quarter', 'asc')
                ->get();
        } elseif ($req->type == 'monthly') {
            $currentYear = date('Y'); // Get the current year
            $returns = Salary::where('user_id', $req->user()->id)
                ->whereYear('date', $currentYear) // Filter by the current year
                ->selectRaw('YEAR(date) as year, MONTH(date) as month, SUM(initial_investment) as total_investment, SUM(other_investment) as total_other_investment, SUM(profit_amount) as total_profit')
                ->groupBy('year', 'month')
                ->orderBy('year', 'asc')
                ->orderBy('month', 'asc')
                ->get();
        } else {
            $returns = Salary::where('user_id', $req->user()->id)->select('initial_investment', 'other_investment', 'profit_percentage', 'profit_amount', 'date')->get();
        }
        return response()->json([
            'message' => 'Data retrieved successfully',
            'data' => $returns,
        ], 200);
    }

    public function listHistoryOrders()
    {
        $orderHistory = [
            [
                'orderType' => 'Credit',
                'pricePerShare' => 150.25,
                'date' => '2023-09-10',
                'orderId' => '12345'
            ],
            [
                'orderType' => 'Credit',
                'pricePerShare' => 160.50,
                'date' => '2023-09-12',
                'orderId' => '54321'
            ],
            [
                'orderType' => 'Debit',
                'pricePerShare' => 2700.75,
                'date' => '2023-09-08',
                'orderId' => '98765'
            ],
            [
                'pricePerShare' => 2700.75,
                'orderType' => 'Credit',
                'date' => '2023-09-05',
                'orderId' => '24680'
            ],
            [
                'pricePerShare' => 2700.75,
                'orderType' => 'Debit',
                'date' => '2023-09-15',
                'orderId' => '13579'
            ],
        ];

        return response()->json([
            'message' => 'Data retrieved successfully',
            'data' => $orderHistory,
        ], 200);
    }

    public function portfolio()
    {
        $portfolio = [
            [
                'stock_symbol' => 'AAPL',
                'quantity' => 100,
            ],
            [
                'stock_symbol' => 'GOOG',
                'quantity' => 50,
            ],
            [
                'stock_symbol' => 'MSFT',
                'quantity' => 75,
            ],
            [
                'stock_symbol' => 'AMZN',
                'quantity' => 30,
            ],
            [
                'stock_symbol' => 'TSLA',
                'quantity' => 60,
            ],
        ];

        return $portfolio;
    }
}
