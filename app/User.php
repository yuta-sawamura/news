<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use App\Enums\User\Gender;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sei',
        'mei',
        'sei_kana',
        'mei_kana',
        'gender',
        'email',
        'birth',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * 性・名のフルネーム
     * @return stiring
     */
    public function getFullNameAttribute()
    {
        return "{$this->sei} {$this->mei}";
    }

    /**
     * セイ・メイのフルネーム
     * @return stiring
     */
    public function getFullNameKanaAttribute()
    {
        return "{$this->sei_kana} {$this->mei_kana}";
    }

    /**
     * 性別
     * @return stiring
     */
    public function getGenderNameAttribute()
    {
        return Gender::getDescription($this->gender);
    }

    /**
     * 検索・絞り込み
     * @param \Illuminate\Database\Eloquent\Builder
     * @param array
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopesearch(Builder $query, array $params): Builder
    {
        // 性別絞り込み
        if (!empty($params['gender'])) $query->where('gender', $params['gender']);

        // キーワード検索
        if (!empty($params['keyword'])) {
            $query->where(function ($query) use ($params) {
                $query->where('sei', 'like', '%' . $params['keyword'] . '%')
                    ->orWhere('mei', 'like', '%' . $params['keyword'] . '%')
                    ->orWhere('sei_kana', 'like', '%' . $params['keyword'] . '%')
                    ->orWhere('mei_kana', 'like', '%' . $params['keyword'] . '%');
            });
        }

        return $query;
    }
}
