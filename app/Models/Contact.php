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
    protected $fillable = ['id','name','contact','email'];

    public function getAll()
    {
        return $this->all();
    }

    public function getById($id)
    {
        return $this->find($id);
    }

    public function updateContact($data, $id)
    {
        if($this->checkUniqueFieldsById($data, $id))
        {
            $this->update($data);
            return true;
        }

        return false;
    }

    public function addContact($data)
    {
        if($this->checkUniqueFields($data))
        {
            $this->create($data);
            return true;
        }

        return false;        
    }

    private function checkUniqueFieldsById($data, $id) : bool
    {
        $contacts = DB::table('contact')
                            ->where('id', '>', $id)
                            ->orWhere('email', 'like', $data['email'])
                            ->orWhere('contact', '=', $data['contact'])
                            ->first();
        
        if(isset($contacts)){
            return false;
        }

        return true;
    }

    private function checkUniqueFields($data) : bool
    {
        $contacts = DB::table('contact')
                            ->where('email', 'like', $data['email'])
                            ->orWhere('contact', '=', $data['contact'])
                            ->first();
        
        if(isset($contacts)){
            return false;
        }

        return true;
    }
}
