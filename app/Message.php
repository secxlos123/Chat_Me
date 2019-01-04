<?php

namespace App;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    protected $fillable = [
        'content', 'user_id', 'to_id', 'updated_at', 'created_at'
    ];

    public $timestamps = false;
    protected $dates = ['created_at', 'updated_at'];

    /**
     * Récupérer le message qui appartient à Utilisateur.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Timezone dans la date.
     *
     * @param DateTimeInterface $date
     *
     * @return string
     */
    public function serializeDate(DateTimeInterface $date)
    {
        return $date->format('c');
    }
}
