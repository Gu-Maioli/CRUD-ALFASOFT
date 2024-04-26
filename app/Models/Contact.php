<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'contact';
    protected $dates = ['deleted_at'];
    protected $fillable = ['id', 'name', 'contact', 'email'];

    public function getAll()
    {
        //return $this->all();

        return self::whereNull('deleted_at')->paginate(5);
    }

    public function getById($id)
    {
        return $this->find($id);
    }

    public function updateContact($data)
    {
        return $this->update($data);
    }

    public function addContact($data)
    {
        $this->create($data);
    }

    private function checkUniqueFieldsById($data, $id): bool
    {
        $contacts = DB::table('contact')
            ->where('id', '>', $id)
            ->orWhere('email', 'like', $data['email'])
            ->orWhere('contact', '=', $data['contact'])
            ->first();

        if (isset($contacts)) {
            return false;
        }

        return true;
    }

    private function checkUniqueFields($data): bool
    {
        $contacts = DB::table('contact')
            ->where('email', 'like', $data['email'])
            ->orWhere('contact', '=', $data['contact'])
            ->first();

        if (isset($contacts)) {
            return false;
        }

        return true;
    }
}
