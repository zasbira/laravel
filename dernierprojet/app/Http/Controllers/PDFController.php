<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generate($username)
    {
        $user = User::where('username', $username)->with(['projects', 'skills'])->firstOrFail();
        $pdf = Pdf::loadView('pdf.cv', compact('user'));
        return $pdf->download($user->username . '_profile.pdf');
    }
}
