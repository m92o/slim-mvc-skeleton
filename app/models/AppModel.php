<?php
namespace Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Application model class
 */
abstract class AppModel extends Model {
    // Optional: soft deleting to use the deleted_at column
    //use SoftDeletes;

    public function getAttribute($key) {
        return parent::getAttribute(\snake_case($key));
    }

    public function setAttribute($key, $value){
        return parent::setAttribute(\snake_case($key), $value);
    }
}