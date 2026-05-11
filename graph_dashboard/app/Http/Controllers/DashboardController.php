<?php
namespace App\Http\Controllers;
use App\Models\Sale;
class DashboardController extends Controller
{
    public function index()
    {
        $salesData = Sale::selectRaw(
                'SUM(amount) as total, MONTHNAME(sale_date) as month, MONTH(sale_date) as month_num'
            )
            ->groupBy('month', 'month_num')
            ->orderBy('month_num')
            ->get();

        $labels = $salesData->pluck('month');
        $data   = $salesData->pluck('total');

        $categoryData = Sale::selectRaw(
                'category, SUM(amount) as total'
            )
            ->groupBy('category')
            ->orderByDesc('total')
            ->get();

        $categoryLabels = $categoryData->pluck('category');
        $categoryTotals = $categoryData->pluck('total');

        return view('dashboard', compact(
            'labels',
            'data',
            'categoryLabels',
            'categoryTotals'
        ));
    }
}