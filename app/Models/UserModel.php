<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'admin'; // Set the table name
    protected $primaryKey = 'id'; // Set the primary key field
    protected $allowedFields = ['username', 'nama','email', 'password']; // List of fields that can be mass-assigned

    // Add more model-specific methods if needed
}