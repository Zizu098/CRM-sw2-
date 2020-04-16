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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = $this->todo->getById($id);
        return view("Company.detail",compact('company'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrfail($id);
        return view("Company.update",compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        request()->validate([
        'name' => 'required',
        ]);

        $updateCompany = Company::findOrfail($id);
        $updateCompany->name = $request->input('name');
        $updateCompany->email = $request->input('email');
        $updateCompany->website = $request->input('website');

        $updateCompany->updated_at=$this->adapter->now();
        $updateCompany->save();
        return redirect("displayCompanies");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::findOrfail($id);
        $company->delete();
        return redirect("displayCompanies");
    }
    
     public function showSearch()
    {
        return view('Company.showSearch');
    }
    public function search(Request $request)
    {
        $companys = Company::where('name',$request->name)->get();
        return view('Company.search',compact('companys'));
    }

}
