<?php

namespace ubitcorp\City\Entities;

use Illuminate\Database\Eloquent\Model;
use \ubitcorp\City\Traits\HasTranslations;
use ubitcorp\Filter\Traits\Filter;

class Country extends Model
{
    use HasTranslations, Filter;

    protected $guarded = ["id"];

    protected $casts = [
        'translations' => 'json',
    ];    

    public function continent(){
        return $this->belongsTo(\ubitcorp\City\Entities\Continent::class);
    }    
    
    public function div1s(){
        return $this->hasMany(\ubitcorp\City\Entities\Div1::class)->select("div1_code","div1_name")->groupBy("div1_code","div1_name")->whereNotNull("div1_name")->orderBy("div1_name");
    }         

    public function div2s(){
        return $this->hasMany(\ubitcorp\City\Entities\City::class)->select("div2_code","div2_name")->groupBy("div2_code","div2_name")->whereNotNull("div2_name")->orderBy("div2_name");
    }          

    public function cities(){
        return $this->hasMany(\ubitcorp\City\Entities\City::class)->whereNotNull("name")->orderBy("name");
    }    
}
