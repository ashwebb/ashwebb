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

  // Publish Types
  const NOT_PUBLISHED = 0;
  const PUBLISHED = 1;

  public static $PULISHED_TYPES = array(
      array('id' => 0, 'name' => 'Not Published'),
      array('id' => 1, 'name' => 'Published')
  );

  public function getPulishedTypeAttribute($value)
  {
      return self::findTypeById(self::$PUBLISHED_TYPES, $value);
  }

  public function getCreatedAtAttribute($value)
  {
    return date("d F Y", strtotime($value));
  }

  public function user()
  {
    return $this->belongsTo('user');
  }

}
