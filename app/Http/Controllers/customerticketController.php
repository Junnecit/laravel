<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customerticketModel;

class customerticketController extends Controller
{
    public function index(){
        $customerticket = new customerticketModel();
        $customerticket = $customerticket->all();

        return response()->json($customerticket, 200, [], JSON_PRETTY_PRINT);
    }
    public function store(){

        $customerticket = new customerticketModel();

        $data = [
            'customer_Name' => 'Junney',
            'Subject'=>'reset password',
            'Category' => 'Technical Help',
            'Priority' => 'High',
            'Status' => 'Pending',
            'Assigned_to' => 'Agent #23',
        ];

        $customerticket::create($data);
        return response()->json(['message' => 'Successfully created!'], 200, [], JSON_PRETTY_PRINT);
    }
}
