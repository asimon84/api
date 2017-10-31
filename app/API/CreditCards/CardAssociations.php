<?php

namespace App\API\CreditCards;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CardAssociations
 *
 * This class is the model for the Card Associations database table
 *
 * @package App\API\CreditCards
 */
class CardAssociations extends Model
{
    /**
     * @var string
     */
    protected $table = 'card_associations';
}