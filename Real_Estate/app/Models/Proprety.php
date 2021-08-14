<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Proprety extends Model
{
    use HasFactory,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $fillable = [
       'title',
       'slug',
       'purpose',
       'bedrooms',
       'bathrooms',
       'area',
       'sale_price',
       'rent_price',
       'description',
       'adress',
       'proprety_image',
       'status',
       'user_id',
       'proprety_type_id',
   ];

     /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */

   public function User()
   {
       return $this->belongsTo(User::class);
   }

   public function PropretyType()
   {
       return $this->belongsTo(PropretyType::class);
   }

   public function Enquiries()
   {
       return $this->hasMany(Enquiries::class);
   }

}
