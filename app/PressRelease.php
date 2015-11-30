<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PressRelease extends Model
{
    protected $table = 'press_releases';

    protected $fillable = [
        'title',
        'body',
        'user_id' //just for test
    ];

  /**
   * Relationship.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user() {
    return $this->belongsTo(User::class);
  }
}
