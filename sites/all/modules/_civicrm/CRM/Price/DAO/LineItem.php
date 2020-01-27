<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from xml/schema/CRM/Price/LineItem.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:90fb6a08063f00282825bb1c567eea1a)
 */

/**
 * Database access object for the LineItem entity.
 */
class CRM_Price_DAO_LineItem extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_line_item';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Line Item
   *
   * @var int
   */
  public $id;

  /**
   * table which has the transaction
   *
   * @var string
   */
  public $entity_table;

  /**
   * entry in table
   *
   * @var int
   */
  public $entity_id;

  /**
   * FK to civicrm_contribution
   *
   * @var int
   */
  public $contribution_id;

  /**
   * FK to civicrm_price_field
   *
   * @var int
   */
  public $price_field_id;

  /**
   * descriptive label for item - from price_field_value.label
   *
   * @var string
   */
  public $label;

  /**
   * How many items ordered
   *
   * @var float
   */
  public $qty;

  /**
   * price of each item
   *
   * @var float
   */
  public $unit_price;

  /**
   * qty * unit_price
   *
   * @var float
   */
  public $line_total;

  /**
   * Participant count for field
   *
   * @var int
   */
  public $participant_count;

  /**
   * FK to civicrm_price_field_value
   *
   * @var int
   */
  public $price_field_value_id;

  /**
   * FK to Financial Type.
   *
   * @var int
   */
  public $financial_type_id;

  /**
   * Portion of total amount which is NOT tax deductible.
   *
   * @var float
   */
  public $non_deductible_amount;

  /**
   * tax of each item
   *
   * @var float
   */
  public $tax_amount;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_line_item';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contribution_id', 'civicrm_contribution', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'price_field_id', 'civicrm_price_field', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'price_field_value_id', 'civicrm_price_field_value', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'financial_type_id', 'civicrm_financial_type', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Dynamic(self::getTableName(), 'entity_id', NULL, 'id', 'entity_table');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Line Item ID'),
          'description' => ts('Line Item'),
          'required' => TRUE,
          'where' => 'civicrm_line_item.id',
          'table_name' => 'civicrm_line_item',
          'entity' => 'LineItem',
          'bao' => 'CRM_Price_BAO_LineItem',
          'localizable' => 0,
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Line Item Entity Type'),
          'description' => ts('table which has the transaction'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_line_item.entity_table',
          'table_name' => 'civicrm_line_item',
          'entity' => 'LineItem',
          'bao' => 'CRM_Price_BAO_LineItem',
          'localizable' => 0,
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Line Item Entity'),
          'description' => ts('entry in table'),
          'required' => TRUE,
          'where' => 'civicrm_line_item.entity_id',
          'table_name' => 'civicrm_line_item',
          'entity' => 'LineItem',
          'bao' => 'CRM_Price_BAO_LineItem',
          'localizable' => 0,
        ],
        'contribution_id' => [
          'name' => 'contribution_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Line Item Contribution'),
          'description' => ts('FK to civicrm_contribution'),
          'where' => 'civicrm_line_item.contribution_id',
          'table_name' => 'civicrm_line_item',
          'entity' => 'LineItem',
          'bao' => 'CRM_Price_BAO_LineItem',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contribute_DAO_Contribution',
        ],
        'price_field_id' => [
          'name' => 'price_field_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Line Item Price Field'),
          'description' => ts('FK to civicrm_price_field'),
          'where' => 'civicrm_line_item.price_field_id',
          'table_name' => 'civicrm_line_item',
          'entity' => 'LineItem',
          'bao' => 'CRM_Price_BAO_LineItem',
          'localizable' => 0,
          'FKClassName' => 'CRM_Price_DAO_PriceField',
        ],
        'label' => [
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Line Item Label'),
          'description' => ts('descriptive label for item - from price_field_value.label'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_line_item.label',
          'default' => 'NULL',
          'table_name' => 'civicrm_line_item',
          'entity' => 'LineItem',
          'bao' => 'CRM_Price_BAO_LineItem',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'qty' => [
          'name' => 'qty',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Line Item Quantity'),
          'description' => ts('How many items ordered'),
          'required' => TRUE,
          'precision' => [
            20,
            2,
          ],
          'where' => 'civicrm_line_item.qty',
          'table_name' => 'civicrm_line_item',
          'entity' => 'LineItem',
          'bao' => 'CRM_Price_BAO_LineItem',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'unit_price' => [
          'name' => 'unit_price',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Unit Price'),
          'description' => ts('price of each item'),
          'required' => TRUE,
          'precision' => [
            20,
            2,
          ],
          'where' => 'civicrm_line_item.unit_price',
          'table_name' => 'civicrm_line_item',
          'entity' => 'LineItem',
          'bao' => 'CRM_Price_BAO_LineItem',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'line_total' => [
          'name' => 'line_total',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Line Item Total'),
          'description' => ts('qty * unit_price'),
          'required' => TRUE,
          'precision' => [
            20,
            2,
          ],
          'where' => 'civicrm_line_item.line_total',
          'table_name' => 'civicrm_line_item',
          'entity' => 'LineItem',
          'bao' => 'CRM_Price_BAO_LineItem',
          'localizable' => 0,
        ],
        'participant_count' => [
          'name' => 'participant_count',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Line Item Participant Count'),
          'description' => ts('Participant count for field'),
          'where' => 'civicrm_line_item.participant_count',
          'default' => 'NULL',
          'table_name' => 'civicrm_line_item',
          'entity' => 'LineItem',
          'bao' => 'CRM_Price_BAO_LineItem',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'price_field_value_id' => [
          'name' => 'price_field_value_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Line Item Option'),
          'description' => ts('FK to civicrm_price_field_value'),
          'where' => 'civicrm_line_item.price_field_value_id',
          'default' => 'NULL',
          'table_name' => 'civicrm_line_item',
          'entity' => 'LineItem',
          'bao' => 'CRM_Price_BAO_LineItem',
          'localizable' => 0,
          'FKClassName' => 'CRM_Price_DAO_PriceFieldValue',
        ],
        'financial_type_id' => [
          'name' => 'financial_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Type'),
          'description' => ts('FK to Financial Type.'),
          'where' => 'civicrm_line_item.financial_type_id',
          'default' => 'NULL',
          'table_name' => 'civicrm_line_item',
          'entity' => 'LineItem',
          'bao' => 'CRM_Price_BAO_LineItem',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_FinancialType',
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_financial_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
        ],
        'non_deductible_amount' => [
          'name' => 'non_deductible_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Non-deductible Amount'),
          'description' => ts('Portion of total amount which is NOT tax deductible.'),
          'required' => TRUE,
          'precision' => [
            20,
            2,
          ],
          'where' => 'civicrm_line_item.non_deductible_amount',
          'headerPattern' => '/non?.?deduct/i',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'default' => '0.0',
          'table_name' => 'civicrm_line_item',
          'entity' => 'LineItem',
          'bao' => 'CRM_Price_BAO_LineItem',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'tax_amount' => [
          'name' => 'tax_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Tax Amount'),
          'description' => ts('tax of each item'),
          'precision' => [
            20,
            2,
          ],
          'import' => TRUE,
          'where' => 'civicrm_line_item.tax_amount',
          'headerPattern' => '/tax(.?am(ou)?nt)?/i',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_line_item',
          'entity' => 'LineItem',
          'bao' => 'CRM_Price_BAO_LineItem',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'line_item', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'line_item', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'index_entity' => [
        'name' => 'index_entity',
        'field' => [
          0 => 'entity_table',
          1 => 'entity_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_line_item::0::entity_table::entity_id',
      ],
      'UI_line_item_value' => [
        'name' => 'UI_line_item_value',
        'field' => [
          0 => 'entity_table',
          1 => 'entity_id',
          2 => 'contribution_id',
          3 => 'price_field_value_id',
          4 => 'price_field_id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_line_item::1::entity_table::entity_id::contribution_id::price_field_value_id::price_field_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
