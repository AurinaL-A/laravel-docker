<?php

namespace App\Http\Controllers;
use App\Models\Report;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        $statuses = Status::all();
        $userId = Auth::id();

        return view('admin.index', compact('reports', 'userId' , 'statuses')); //передача данных в представление
    }
}
