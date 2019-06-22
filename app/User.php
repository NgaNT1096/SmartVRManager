<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Notifications\InvoicePaid;
use Hash;
use Cache;
/**
 * Class User
 *
 * @package App
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
*/
class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $fillable = ['name', 'email', 'password', 'remember_token'];
    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }
    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }
    public function contents()
    {
        return $this->hasMany('App\Model\Package\Content');
    }
    public function order(){
        return $this->hasMany('App\Model\Order');
    }
    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }
    public function notify(){
        $user->notify(new Invoicepaid($invoice));
    }
}
