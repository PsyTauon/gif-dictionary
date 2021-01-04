<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Term as TermResource;
use App\Models\Term;

class TermController extends Controller
{
    public function index() {
        return TermResource::collection(Term::all());
    }
}
