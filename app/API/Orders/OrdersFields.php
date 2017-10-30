<?php

namespace App\API\Orders;

use App\API\Helpers\Fields\FieldsInterface;

/**
 * Orders Fields
 *
 * Class to get array of fields specific to this class, used mainly by the add and edit traits of a controller.
 *
 * @package App\API\Orders
 */
class OrdersFields implements FieldsInterface
{
    /**
     * @var array
     */
    protected static $fields = [
        [
            'name' => 'client_id',
            'label' => 'Client',
            'required' => true,
            'editable' => false,
            'type' => 'integer',
            'size' => 11,
        ],
        [
            'name' => 'mid_id',
            'label' => 'MID ID',
            'required' => true,
            'editable' => true,
            'type' => 'integer',
            'size' => 11,
        ],
        [
            'name' => 'order_id',
            'label' => 'Order ID',
            'required' => true,
            'editable' => true,
            'type' => 'string',
            'size' => 255,
        ],
        [
            'name' => 'card_association_id',
            'label' => 'Card Type',
            'required' => true,
            'editable' => true,
            'type' => 'integer',
            'size' => 11,
        ],
        [
            'name' => 'card_number',
            'label' => 'Card Number',
            'required' => true,
            'editable' => true,
            'type' => 'string',
            'size' => 16,
        ],
        [
            'name' => 'bin',
            'label' => 'BIN',
            'required' => false,
            'editable' => true,
            'type' => 'string',
            'size' => 6,
        ],
        [
            'name' => 'last_four',
            'label' => 'Last Four',
            'required' => false,
            'editable' => true,
            'type' => 'string',
            'size' => 4,
        ],
        [
            'name' => 'arn',
            'label' => 'ARN',
            'required' => false,
            'editable' => true,
            'type' => 'string',
            'size' => 255,
        ],
        [
            'name' => 'amount',
            'label' => 'Amount',
            'required' => true,
            'editable' => true,
            'type' => 'string',
            'size' => 11,
        ],
        [
            'name' => 'currency_id',
            'label' => 'Currency',
            'required' => true,
            'editable' => true,
            'type' => 'integer',
            'size' => 11,
        ],
        [
            'name' => 'tracking_number',
            'label' => 'Tracking Number',
            'required' => false,
            'editable' => true,
            'type' => 'string',
            'size' => 255,
        ],
        [
            'name' => 'product_id',
            'label' => 'Product',
            'required' => true,
            'editable' => true,
            'type' => 'integer',
            'size' => 11,
        ],
        [
            'name' => 'transaction_date',
            'label' => 'Transaction Date',
            'required' => true,
            'editable' => true,
            'type' => 'date',
            'size' => 19,
        ],
    ];

    /**
     * Get Fields
     *
     * Return array of all record fields, no exceptions.
     *
     * @return array
     */
    public static function getFields() :array
    {
        return self::$fields;
    }

    /**
     * Get Editable Fields
     *
     * Return array of only the fields that are marked editable
     *
     * @return array
     */
    public static function getEditableFields() :array
    {
        $fields = [];

        foreach(self::$fields as $field) {
            if($field['editable']) {
                $fields[] = $field;
            }
        }

        return $fields;
    }
}