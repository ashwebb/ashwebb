<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'posts';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['user_id', 'title', 'body', 'publish'];

  public function getCreatedAtAttribute($value)
  {
    return date("d F Y", strtotime($value));
  }

  public function user()
  {
    return $this->belongsTo('user');
  }

}
