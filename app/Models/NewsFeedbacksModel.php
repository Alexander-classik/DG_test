<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsFeedbacksModel extends Model
{
    use HasFactory;

    protected $table = 'feed_back';

    // Форматирование номера при получении
    public function getFormattedPhoneAttribute()
    {
        $phone = $this->phone ?? '';
        if (strlen($phone) === 11) {
            return preg_replace(
                '/^(\d)(\d{3})(\d{3})(\d{2})(\d{2})$/',
                '+$1 ($2) $3-$4-$5',
                $phone
            );
        }
        return $phone;
    }

    // Очистка номера перед сохранением
    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = preg_replace('/\D/', '', $value);
    }

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'description',

    ];
}
