<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return view('report.index', compact('reports'));
    }
    
    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->back();
    }

    public function store(Request $request, Report $report)
    {
        $data = $request->validate([
            'description' => 'required|string|max:255',
        ]);
        $data['number']
            = uniqid();
        $report->create($data);
        return redirect()->back();
    }

    public function show(Report $report)
    {
        return view('report.show', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        $data = $request->validate([
            'description' => 'required|string|max:255',
        ]);

        $report->update($data);
        return redirect()->back();
    }
}
