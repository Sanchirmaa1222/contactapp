<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{


   protected function getContacts()
   {
       return [
           1 => ['id' => 1, 'name' => 'Name 1', 'phone' => '1234567890'],
           2 => ['id' => 2, 'name' => 'Name 2', 'phone' => '2345678901'],
           3 => ['id' => 3, 'name' => 'Name 3', 'phone' => '3456789012'],
       ];
   }
}
