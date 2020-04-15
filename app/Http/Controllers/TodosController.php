<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;


 class TodosController extends Controller
 {
     public function index()
     {
         // mengambil data dari table pegawai
         $todos = DB::table('todo')->get();

         // mengirim data pegawai ke view index
         return response()->json($todos);

     }
 }
