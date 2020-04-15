<?php

namespace App\Http\Controllers;
use App\Adapters\ICarbonAdapter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Repositories\Todo\EloquentToday;
use App\Repositories\Todo\TodoRepository;

class CompanyController extends Controller
{
    protected $todo;

    protected $adapter;

    public function __construct(TodoRepository $todo,ICarbonAdapter $adapter)
    {
        $this->todo = $todo;
        $this->adapter=$adapter;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = $this->todo->paginate(10);
        return view("Company.view",compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
        'name' => 'required',
        ]);

        $newCompany = new Company();
        $newCompany->name = $request->input('name');
        $newCompany->email = $request->input('email');
        $newCompany->website = $request->input('website');
        
        $newCompany->created_at=$this->adapter->now();
        
        $newCompany->save();
        return redirect("displayCompanies");
    }

   