<?php
namespace App\API\MIDs;

use App\API\Helpers\Fields\FieldsInterface;

/**
 * MIDs Fields
 *
 * Class to get array of fields specific to this class, used mainly by the add and edit traits of a controller.
 *
 * @package App\API\MIDs
 */
class MIDsFields implements FieldsInterface
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
            'name' => 'mid',
            'label' => 'MID Number',
            'required' => true,
            'editable' => true,
            'type' => 'string',
            'size' => 255,
        ],
        [
            'name' => 'alias',
            'label' => 'MID Alias',
            'required' => false,
            'editable' => true,
            'type' => 'string',
            'size' => 255,
        ],
        [
            'name' => 'descriptor',
            'label' => 'Descriptor',
            'required' => false,
            'editable' => true,
            'type' => 'string',
            'size' => 255,
        ],
        [
            'name' => 'customer_service_phone',
            'label' => 'Customer Service Phone',
            'required' => false,
            'editable' => true,
            'type' => 'string',
            'size' => 25,
        ],
        [
            'name' => 'customer_service_email',
            'label' => 'Customer Service Email',
            'required' => false,
            'editable' => true,
            'type' => 'string',
            'size' => 255,
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