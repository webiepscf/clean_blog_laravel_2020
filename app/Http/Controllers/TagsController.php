<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagsController extends Controller
{
    public function show (Tag $tag) {
      return view('tags.show', compact('tag'));
    }
}
