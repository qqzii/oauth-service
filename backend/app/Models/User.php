<?php

namespace app\Models;

use App\Models\Passport\AuthCode;
use App\Models\Passport\Client;
use App\Models\Passport\Token;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function tokens(): HasMany
    {
        return $this->hasMany(Token::class);
    }

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }

    public function authCodes(): HasMany
    {
        return $this->hasMany(AuthCode::class);
    }
}
