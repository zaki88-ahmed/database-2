<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class InvoiceController extends Controller
{

//    use ApiDesignTrait;

//    private $aboutModel;

    public function __construct()
    {

    }


    public function create()
    {


        // TODO: Implement updateAbout() method.




        return view('admin.contacts.create');
    }



    public function store()
    {
        // TODO: Implement allProjects() method.


        $data = Invoice::create([
            'lineNo' => $request->lineNo,
            'UnitNo' => $request->UnitNo,
            'price' => $request->price,
            'productName' => $request->productName,
            'quantity' => $request->quantity,
            'total' => $request->total,
            'expiryDate' => $request->expiryDate,
        ]);
    }




}
