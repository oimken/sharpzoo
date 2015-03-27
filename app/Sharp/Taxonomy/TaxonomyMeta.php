<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxonomyMeta extends Model {

    protected $table = 'taxonomy_metas';

    public function belongsToTaxonomy(){
        return $this->belongsTo('Taxonomy', 'taxonomy_id', 'id');
    }


}
