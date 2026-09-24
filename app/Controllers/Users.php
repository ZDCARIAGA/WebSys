<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin01',
                'full_name' => 'John Smith',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Anna Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Mark Reyes',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Sofia Garcia',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Daniel Ramos',
                'role' => 'Staff'
            ]
        ];

        return view('users', $data);
    }
}