<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;

  
class ProfileController extends Controller
{
    public function index()
    {
       echo view ('header_view');
       echo view ('inicio');
       echo view ('footer_view');
    }
    
    public function admin()
    {
        echo view ('header_admin');
        echo view ('admin');
        echo view ('footer_view');
    }
}
