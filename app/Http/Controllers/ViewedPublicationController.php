<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class ViewedPublicationController extends Controller
{
    public function index()
    {
        $viewedPublications = Publication::whereNotNull('viewed_at')->get();
        return view('publications_viewed', compact('viewedPublications'));
    }
}
