<?php

namespace App\Http\Controllers;
use App\Models\UserList;
use App\Models\EmployeeList;
use App\Models\User;


use Carbon\Carbon;

class DashboardController extends Controller
{
    public $userId;
    public $search = '';
    public $action = '';  //flash
    public $message = '';  //flash

    public function index()
    {

        $time = Carbon::now()->format('H');
        $operations = 0;
         
        $users = UserList::count();
        $userlist = EmployeeList::all();
        $employeeCount = EmployeeList::count();
        
   

        return view('dashboard', [
            'time' => $time,
            'operations' => $operations,
            'users' => $users,
            'employeeCounts' => $employeeCount,
            'userlist' => $userlist
        ]);
    }

    
     
}
