<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\DashboardService;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(private readonly DashboardService $dashboardService)
    {
    }

    /**
     * Admin dashboard with statistics, recent activity and quick insights.
     */
    public function index(): View
    {
        return view('admin.dashboard.index', $this->dashboardService->getData());
    }
}
