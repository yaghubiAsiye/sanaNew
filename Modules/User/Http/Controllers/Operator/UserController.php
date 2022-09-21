<?php

namespace Modules\User\Http\Controllers\Operator;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Contracts\Support\Renderable;
use Modules\User\Http\Requests\Operator\UserStoreRequest;

class UserController extends Controller
{
    /**
     * @var User|Builder
     */
    private $user;
    /**
     * @var Role|Builder
     */
    private $role;

    /**
     * UserController constructor.
     * @param User $user
     * @param Role $role
     */
    public function __construct(User $user, Role $role)
    {
        $this->user = $user;
        $this->role = $role;
    }


    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request, $item, $value)
    {


        // filter the query if user is searching for something :)
        // $usersQuery = $this->search($request, $usersQuery, $item, $value);
        if($value == 'تهران' || $value ==  'تهران-ارتباطات')
        {
            $usersQuery = $this->user
            ->where($item, $value)
                ->with(['roles'])
                ->where('first_name', '!=', 'super-admin');
            $usersQuery = $this->search($request, $usersQuery, $item, $value);
        }
        else {
            $usersQuery = $this->user
            ->where('workplace','!=','تهران')
            ->where('workplace', '!=','تهران-ارتباطات')
                ->with(['roles'])
                ->where('first_name', '!=', 'super-admin');
            if ($term = $request->get('term')) {
                /** @var Builder $usersQuery */
                $usersQuery = $usersQuery->where(function ($query) use ($term, $value) {
                    /** @var Builder $query */
                    $query->where('workplace','!=','تهران')
                    ->where('workplace', '!=','تهران-ارتباطات')
                        ->where('first_name', 'like', "%$term%")
                        ->orWhere('last_name', 'like', "%$term%")
                        ->orWhere('phone', 'like', "%$term%")
                        ->orWhere('personal_code', 'like', "%$term%")
                        ->orWhere('code_meli', 'like', "%$term%")
                        ->orWhere('job_title', 'like', "%$term%")
                        ->orWhere('bank_account_number', 'like', "%$term%")
                        ->orWhere('workplace', 'like', "%$term%");
                });
            }
        }

        $users = $usersQuery->paginate()
            ->appends($request->all());

        return view('user::operator.user.index', [
            'users' => $users,
            'request' => $request,
            'item' => $item,
            'value' => $value,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $roles = $this->role
        ->where('name', '!=', 'Super Admin')
        ->where('name', '!=', 'کارمند')
        ->get();

        return view('user::operator.user.create',[
            'roles' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(UserStoreRequest $request)
    {
        $data = $this->prepareData($request);
        $user = $this->user->create($data);

        if ($roles = $request->input('roles'))
        {
            $operator->assignRole($this->role->find($roles));
        }

        $role = Role::where(['name' => 'کارمند'])->first();
        $user->assignRole([$role->id]);

        $request->session()->flash('alert-success', 'کارمند با موفقیت ساخته شد');

        return redirect()->back();
        // return redirect()->route('Operator.User.index');

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(User $user)
    {
        $user = $user->load(['roles']);
        $roles = $this->role
        ->where('name', '!=', 'کارمند')
        ->where('name', '!=', 'Super Admin')
        ->get();

        return view('user::operator.user.edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, User $user)
    {
        $data = $this->prepareData($request);

        $user->update($data);

        if ($roles = $request->input('roles')) {
            $user->syncRoles($this->role->find($roles));
        }

        $request->session()->flash('alert-success', 'کارمند با موفقیت ویرایش شد');
        return redirect()->back();

        // return redirect()->route('Operator.User.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

     /**
     * prepare data for create|update an user
     *
     * @param Request $request
     * @return array
     */
    private function prepareData($request)
    {
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone' => $request->input('phone'),
            'personal_code' => $request->input('personal_code'),
            'code_meli' => $request->input('code_meli'),
            'job_title' => $request->input('job_title'),
            'workplace' => $request->input('workplace'),
            'bank_account_number' => $request->input('bank_account_number'),
            'active' => $request->input('active') ? '0' : '1',
            'is_operator' => $request->input('is_operator') ? '1' : '0',
            'password' => bcrypt('123456'),
        ];

        return $data;
    }

    /**
     * filter query by filled term for search
     *
     * @param Request $request
     * @param Builder $usersQuery
     * @return Builder $query
     */
    private function search($request, $usersQuery, $item, $value)
    {
        if ($term = $request->get('term')) {
            /** @var Builder $usersQuery */
            $usersQuery = $usersQuery->where(function ($query) use ($term, $item, $value) {
                /** @var Builder $query */
                $query->where($item,$value)
                    ->where('first_name', 'like', "%$term%")
                    ->orWhere('last_name', 'like', "%$term%")
                    ->orWhere('phone', 'like', "%$term%")
                    ->orWhere('personal_code', 'like', "%$term%")
                    ->orWhere('code_meli', 'like', "%$term%")
                    ->orWhere('job_title', 'like', "%$term%")
                    ->orWhere('bank_account_number', 'like', "%$term%")
                    ->orWhere('workplace', 'like', "%$term%");
            });
        }

        return $usersQuery;
    }

}
