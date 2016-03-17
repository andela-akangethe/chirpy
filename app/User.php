<?php

namespace app;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'location',
        'first_name',
        'last_name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Get Users First Name and or Last Name
     *
     * @return users first name and or last name
     */
    public function getName()
    {
        /**
         * If both first and last name exists show
         * them else only show first or last name
         */
        if ($this->first_name && $this->last_name) {

            $firstName = ucfirst($this->first_name);
            $lastName = ucfirst($this->last_name);

            return "$firstName $lastName";
        } elseif ($this->first_name) {
            return ucfirst($this->first_name);
        } elseif ($this->last_name) {
            return ucfirst($this->last_name);
        }

        return null;
    }

    public function getAvatar()
    {
        return "https://www.gravatar.com/avatar/{{ md5($this->email) }}";
    }
}
