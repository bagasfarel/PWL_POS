<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;


class UserModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'm_user'; // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id'; // Mendefinisikan primary key dari tabel yang digunakan
    protected $fillable = ['username', 'password', 'nama', 'level_id', 'created_at', 'updated_at'];

    protected $hidden = ['password']; // jangan di tampilkan saat select

    protected $casts = ['password' => 'hashed']; // casting password agar otomatis di hash

    // relasi ke tabel level
    public function level():BelongsTo{
        return $this->belongsTo(LevelModel::class, 'level_id','level_id');
    }
    public function barang():HasMany
    {
        return $this->hasMany(StockModel::class, 'stock_id', 'stock_id');
    }
    // mendapatkan nama role
    public function getRoleName(): string
    {
        return $this->level->level_nama;
    }
    // cek apakah user memiliki role tertentu
    public function hasRole($role): bool
    {
        return $this->level->leve_kode == $role;
    }
    // mendapatkan kode role
    public function getRole()
    {
        return $this->level->leve_kode;
    }
}