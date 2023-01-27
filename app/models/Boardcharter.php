<?php

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Boardcharter extends Eloquent implements StaplerableInterface
{
    use  EloquentTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'boardcharter';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $fillable = ['active', 'title', 'date', 'short_description', 'image', 'pdf'];

    /**
     * Pass attributes to parent constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = array())
    {
        $this->hasAttachedFile('pdf');
        $this->hasAttachedFile('image', [
            'styles' => [
                'thumb' => '200x248'
            ]
        ]);
        parent::__construct($attributes);
    }

}