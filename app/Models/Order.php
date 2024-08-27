<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Order extends Model
// {
//     use HasFactory;

//     // تحديد اسم الجدول في قاعدة البيانات إذا لم يكن مطابقًا لاسم الـ Model بصيغة الجمع
//     protected $table = 'orders';

//     // تحديد المفتاح الأساسي إذا كان مختلفًا عن `id`
//     protected $primaryKey = 'order_id';

//     // تحديد الحقول القابلة للتعبئة
//     protected $fillable = [
//         'customer_id',
//         'order_date',
//         'pickup_address',
//         'dropoff_address',
//         'pickup_date',
//         'pickup_time',
//         'furniture_details',
//         'status',
//         'person_firstname',
//         'person_lastname',
//         'person_phone_number',
//         'person_email',
//     ];

//     // تحديد الحقول التي لا يمكن تعبئتها
//     protected $guarded = [];

//     // تعريف العلاقة مع نموذج User
//     public function customer()
//     {
//         return $this->belongsTo(User::class, 'customer_id', 'id');
//     }
// }



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // تحديد اسم الجدول في قاعدة البيانات
    protected $table = 'orders';

    // تحديد الحقول القابلة للتعبئة
    protected $fillable = [
        'user_id',
        'order_date',
        'pickup_address',
        'dropoff_address',
        'pickup_date',
        'pickup_time',
        'furniture_details',
        'status',
        'person_firstname',
        'person_lastname',
        'person_phone_number',
        'person_email',
    ];

    // تحديد الحقول التي لا يمكن تعبئتها
    protected $guarded = [];

    // تعريف العلاقة مع نموذج User
    public function user()
    {
        // يحدد العلاقة بين الطلب والمستخدم
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
