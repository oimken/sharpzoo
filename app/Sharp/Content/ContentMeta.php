<?php namespace App\Sharp\Content;

use Illuminate\Database\Eloquent\Model;

class ContentMeta extends Model {

    public function belongsToContent(){
        return $this->belongsTo('Content', 'content_id', 'id');
    }
}
