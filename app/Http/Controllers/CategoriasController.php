<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Categoria;

class CategoriasController extends Controller{

   private $cat;

   public function __construct(Categoria $cat){
       $this->middleware('auth');
       $this->cat = $cat;
   }

   public function index(){
       return view('categoria.create');
   }

   public function create(){
       return view('categoria.create');
   }

   public function store(Request $req){


   }

}
