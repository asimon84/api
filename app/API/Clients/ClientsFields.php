<?php

namespace App\API\Clients;

use App\API\Helpers\Fields\FieldsInterface;

/**
 * Clients Fields
 *
 * Class to get array of fields specific to this class, used mainly by the add and edit traits of a controller.
 *
 * @package App\API\Clients
 */
class ClientsFields implements FieldsInterface
{
    /**
     * @var array
     */
    protected static $fields = [
        [
            'name' => 'name',
            'label' => 'Client Name',
            'required' => true,
            'editable' => true,
            'type' => 'string',
            'size' => 255,
        ],
        [
            'name' => 'business_website',
            'label' => 'Business Website',
            'required' => false,
            'editable' => true,
            'type' => 'string',
            'size' => 255,
        ],
        [
            'name' => 'business_phone',
            'label' => 'Business Phone',
            'required' => false,
            'editable' => true,
            'type' => 'string',
            'size' => 25,
        ],
        [
            'name' => 'business_email',
            'label' => 'Business Email',
            'required' => false,
            'editable' => true,
            'type' => 'string',
            'size' => 255,
        ],
        [
            'name' => 'contact_title',
            'label' => 'Contact Title',
            'required' => false,
            'editable' => true,
            'type' => 'string',
            'size' => 25,
        ],
        [
            'name' => 'contact_name',
            'label' => 'Contact Name',
            'required' => false,
            'editable' => true,
            'type' => 'string',
            'size' => 255,
        ],
        [
            'name' => 'contact_phone',
            'label' => 'Contact Phone',
            'required' => false,
            'editable' => true,
            'type' => 'string',
            'size' => 25,
        ],
        [
            'name' => 'contact_email',
            'label' => 'Contact Email',
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