<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
 
class TestController extends Controller
{
  public function func() {
    return view('sample');
  }

public function api(){
    return response()->json([
"hellokiyoraa"
    ]);
}
}