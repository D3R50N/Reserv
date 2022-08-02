<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $categorie_id
 * @property string $nom
 * @property string $description
 * @property integer $num_serie
 * @property integer $qte
 * @property string $created_at
 * @property string $updated_at
 * @property Image[] $images
 * @property Category $category
 * @property Reservation[] $reservations
 */
class Materiel extends Model
{
    use HasFactory;
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['categorie_id', 'nom', 'description', 'num_serie', 'qte', 'created_at', 'updated_at'];

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie', 'categorie_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation');
    }
}
