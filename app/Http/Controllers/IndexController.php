<?php

namespace App\Http\Controllers;
use App\Services\ShowProfileService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $service;
    public function __construct(ShowProfileService $showProfileService)
    {
        $this->service = $showProfileService;
    }
    public function showProfile(){
        return $this->service->showProfile();
    }
}
