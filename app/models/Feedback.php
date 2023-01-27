<?php

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Feedback extends Eloquent implements StaplerableInterface {

    use EloquentTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'feedbacks';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $fillable = ['name', 'company_name', 'company_address', 'city', 'state', 'post_code', 'country', 'cat_id', 'subcat_id', 'subject', 'email', 'contact_number', 'subject', 'questions_comments'];

    public function category() {
        return $this->belongsTo('Enquirycategory', 'cat_id');
    }

    public function subcategory() {
        return $this->belongsTo('Enquirycategory', 'subcat_id');
    }

}
