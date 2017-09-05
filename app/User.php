<?php

namespace App;

use App\ActivationToken;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,DatesTranslator;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', "avatar", 'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];



    public function activate($token)
    {
        $this->update(['active' => true]);

        Auth::login($this);

        $token->delete();
    }

    public function token()
    {
        return $this->hasOne(ActivationToken::class);
    }

    public function generateToken()
    {
        $this->token()->create([
      'token' => str_random(60)
  ]);

        return $this;
    }


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }


    public function area()
    {
        return $this->belongsTo(Area::class);
        // 1 a muchos
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'assigned_roles');
    }

    public function hasRoles(array $roles)
    {
        foreach ($roles as $role) {
            foreach ($this->roles as $userRole) {
                if ($userRole->name === $role) {
                    return true;
                }
            }
        }
        return false;
    }

    public function isAdmin()
    {
        return $this->hasRoles(['admin']);
    }





    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
