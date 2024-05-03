<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';
    protected $dates = ['deleted_at'];
    protected $fillable = ['id', 'name', 'description', 'value', 'unit_of_measure'];

    public function getAll()
    {
        return self::whereNull('deleted_at')->paginate(5);
    }

    public function getById($id)
    {
        return $this->find($id);
    }

    public function updateProduct($data)
    {
        return $this->update($data);
    }

    public function addProduct($data)
    {
        $this->create($data);
    }
}
