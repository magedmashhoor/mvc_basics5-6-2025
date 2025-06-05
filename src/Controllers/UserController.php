<?php
namespace App\Controllers;

use App\Models\Users;
use Core\Model;
use Core\View\View;
use Core\Requests;

class UserController extends Model
{
    public function __construct()
    {
    }

    public function index(Requests $request)
    {
        print_r($request->all());
    }

    public function list()
    {
        $user = new Users();
        $userData = $user->GetDoctorInfo();
        View::render("home", ['users' => $userData]);
    }

    public function showAddForm()
    {
        View::render("insert", ['formData' => []]);
    }

    public function insert(Requests $request)
    {
        $data = $request->all();
        $user = new Users();
        
        try {
            if ($user->insert($data)) {
                View::render("insert", [
                    'success' => 'Doctor added successfully!',
                    'formData' => $data
                ]);
            } else {
                View::render("insert", [
                    'error' => 'Failed to add doctor',
                    'formData' => $data
                ]);
            }
        } catch (\Exception $e) {
            View::render("insert", [
                'error' => 'An error occurred: ' . $e->getMessage(),
                'formData' => $data
            ]);
        }
    }
}