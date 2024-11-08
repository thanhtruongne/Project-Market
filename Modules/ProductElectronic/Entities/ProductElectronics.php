<?php

namespace Modules\ProductElectronic\Entities;

use App\Models\User;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductElectronics extends Model
{
    use Cachable;   
    protected $table = 'product_electronics';

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'code',
        'images',
        'video',
        'category_id',
        'type_posting_id',
        'approved',
        'status',
        'province_code',
        'district_code',
        'ward_code',
        'condition_used',
        'cost',
        'brand_id',
        'color_id',
        'capacity_id',
        'warrancy_policy_id',
        'origin_from_id',
        'screen_size_id',
        'microprocessor_id',
        'ram_id',
        'hard_drive_id',
        'type_hard_drive',
        'card_screen_id',
    ];


    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
