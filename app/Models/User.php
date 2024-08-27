<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class User extends Model
// {
//     use HasFactory;

//     // تحديد اسم الجدول في قاعدة البيانات إذا لم يكن مطابقًا لاسم الـ Model بصيغة الجمع
//     protected $table = 'users';

//     // تحديد الحقول القابلة للتعبئة
//     protected $fillable = [
//         'name',
//         'password',
//     ];

//     // تحديد الحقول التي لا يمكن تعبئتها
//     protected $guarded = [];

//     // لإضافة دعم للـ التشفير
//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

//     // تعريف العلاقة مع نموذج Order
//     public function orders()
//     {
//         return $this->hasMany(Order::class, 'customer_id', 'id');
//     }
// }


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // تحديد اسم الجدول في قاعدة البيانات
    protected $table = 'users';

    // تحديد الحقول القابلة للتعبئة
    protected $fillable = [
        'name',
        'password',
    ];

    // تحديد الحقول التي لا يمكن تعبئتها
    protected $guarded = [];

    // لإضافة دعم للـ التشفير
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // تحديد اسم العمود الأساسي
    protected $primaryKey = 'user_id';

    // تحديد نوع العمود الأساسي إذا لم يكن من نوع INT
    protected $keyType = 'int'; // إذا كان من نوع آخر، غيّره حسب الحاجة

    // إذا كان العمود الأساسي يتزايد تلقائيًا
    public $incrementing = true;

    // تعريف العلاقة مع نموذج Order
    public function orders()
    {
        // يحدد العلاقة بين المستخدم والطلبات
        return $this->hasMany(Order::class, 'user_id', 'user_id');
    }
}
