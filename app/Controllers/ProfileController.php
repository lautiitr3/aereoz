<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;

  
class ProfileController extends Controller
{
    public function index()
    {
       return view ('inicio');
    }
    public function admin()
    {
        return view ('admin');
    }
}
