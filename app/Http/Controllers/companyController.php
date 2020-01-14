<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Foundation\Validation\ValidatesRequests;
    use App\CompanyUsers;

    class companyController extends Controller
    {
        use ValidatesRequests;

        public function index()
        {
            $users = CompanyUsers::all()->sortBy('id');
            return view('company.index', ['users' => $users]);
        }

        public function create()
        {
            return view('company.create');
        }

        public function edit($id)
        {
            $user = CompanyUsers::find($id);
            return view('company.edit', ['user' => $user]);
        }

        public function destroy($id)
        {
            CompanyUsers::find($id)->delete();
            return redirect()->route('company.index');
        }

        public function save(Request $a)
        {
            $this->validate($a, ['name' => 'required', 'position' => 'required', 'birthday' => 'required']);
            CompanyUsers::create($a->all());
            return redirect()->route('company.index');
        }

        public function update(Request $a, $id)
        {
            $this->validate($a, ['name' => 'required', 'position' => 'required', 'birthday' => 'required']);
            $user = CompanyUsers::find($id);
            $user->fill($a->all());
            $user->save();
            return redirect()->route('company.index');
        }
    }
