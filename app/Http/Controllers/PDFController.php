<?php

namespace App\Http\Controllers;
use App\Models\Salary;
use App\Models\Sale;
use App\Models\User;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generateSlip($userId, $month)
    {
        $userSalary = Salary::where('userid', $userId)
                            ->where('month', $month)
                            ->first();
    
        $user = User::find($userId);
    
        if (!$userSalary || !$user) {
            return redirect()->back()->with('error', 'Salary information not found.');
        }
    
        $pdf = Pdf::loadView('pdf.slip', compact('userSalary', 'user'));
        return $pdf->download('salary_slip.pdf');
    }

    public function generateMonthlyPDF()
{
    // Fetch and process the monthly sales data
    $monthlySales = Sale::selectRaw('YEAR(date) as year, MONTH(date) as month, SUM(sales_amount) as total_sales')
        ->groupBy('year', 'month')
        ->get();

    // Generate the PDF view
    $pdf = Pdf::loadView('director.monthly_pdf', compact('monthlySales'));

    // Return the PDF as a download
    return $pdf->download('monthly_sales_report.pdf');
}
    
}
