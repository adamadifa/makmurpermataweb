<?php

namespace App\Http\Controllers;

use App\Services\PacificV4Service;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    protected PacificV4Service $pacificService;

    public function __construct(PacificV4Service $pacificService)
    {
        $this->pacificService = $pacificService;
    }

    public function index()
    {
        $products = $this->pacificService->getProducts();

        return view('landing', compact('products'));
    }
}
