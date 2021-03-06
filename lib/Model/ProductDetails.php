<?php
/**
 * ProductDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * RevenueWire JackFruit REST API (Alpha)
 *
 * This API *does not* represent the final product. Some of the APIs listed below are *highly experimental* and *will likely change* before the final release. They may come with *crashes and bugs* and may potentially cause *data loss*.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ProductDetails Class Doc Comment
 *
 * @category    Class
 * @description Details if a product
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'merchantId' => 'int',
        'sku' => 'string',
        'name' => 'string',
        'desc' => 'string',
        'disabled' => 'bool',
        'created' => 'string',
        'publishing' => 'string',
        'isRaSupportProduct' => 'bool',
        'raSupportPhone' => 'string',
        'raSalesPhone' => 'string',
        'softDesc' => 'string',
        'customerSupportName' => 'string',
        'customerSupportEmail' => 'string',
        'customerSupportUrl' => 'string',
        'customerSupportUrlName' => 'string',
        'lmsEnabled' => 'bool',
        'receiptEnabled' => 'bool',
        'receiptType' => 'string',
        'lowKeyThreshold' => 'int',
        'lowKeyEmail' => 'string',
        'daysRemainKeyThreshold' => 'int',
        'taxExempt' => 'bool',
        'taxExemptionType' => 'string',
        'proration' => 'bool',
        'outOfStockEmailTime' => 'string',
        'serverPostBack' => 'bool',
        'isCpaShell' => 'bool',
        'allowAnnual' => 'bool',
        'extraData' => 'string',
        'shippable' => 'bool',
        'subscriptionProduct' => 'bool',
        'productType' => '\Swagger\Client\Model\ProductType',
        'productCategory' => '\Swagger\Client\Model\ProductCategory'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'merchantId' => 'merchantId',
        'sku' => 'sku',
        'name' => 'name',
        'desc' => 'desc',
        'disabled' => 'disabled',
        'created' => 'created',
        'publishing' => 'publishing',
        'isRaSupportProduct' => 'isRaSupportProduct',
        'raSupportPhone' => 'raSupportPhone',
        'raSalesPhone' => 'raSalesPhone',
        'softDesc' => 'softDesc',
        'customerSupportName' => 'customerSupportName',
        'customerSupportEmail' => 'customerSupportEmail',
        'customerSupportUrl' => 'customerSupportUrl',
        'customerSupportUrlName' => 'customerSupportUrlName',
        'lmsEnabled' => 'lmsEnabled',
        'receiptEnabled' => 'receiptEnabled',
        'receiptType' => 'receiptType',
        'lowKeyThreshold' => 'lowKeyThreshold',
        'lowKeyEmail' => 'lowKeyEmail',
        'daysRemainKeyThreshold' => 'daysRemainKeyThreshold',
        'taxExempt' => 'taxExempt',
        'taxExemptionType' => 'taxExemptionType',
        'proration' => 'proration',
        'outOfStockEmailTime' => 'outOfStockEmailTime',
        'serverPostBack' => 'serverPostBack',
        'isCpaShell' => 'isCpaShell',
        'allowAnnual' => 'allowAnnual',
        'extraData' => 'extraData',
        'shippable' => 'shippable',
        'subscriptionProduct' => 'subscriptionProduct',
        'productType' => 'productType',
        'productCategory' => 'productCategory'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'merchantId' => 'setMerchantId',
        'sku' => 'setSku',
        'name' => 'setName',
        'desc' => 'setDesc',
        'disabled' => 'setDisabled',
        'created' => 'setCreated',
        'publishing' => 'setPublishing',
        'isRaSupportProduct' => 'setIsRaSupportProduct',
        'raSupportPhone' => 'setRaSupportPhone',
        'raSalesPhone' => 'setRaSalesPhone',
        'softDesc' => 'setSoftDesc',
        'customerSupportName' => 'setCustomerSupportName',
        'customerSupportEmail' => 'setCustomerSupportEmail',
        'customerSupportUrl' => 'setCustomerSupportUrl',
        'customerSupportUrlName' => 'setCustomerSupportUrlName',
        'lmsEnabled' => 'setLmsEnabled',
        'receiptEnabled' => 'setReceiptEnabled',
        'receiptType' => 'setReceiptType',
        'lowKeyThreshold' => 'setLowKeyThreshold',
        'lowKeyEmail' => 'setLowKeyEmail',
        'daysRemainKeyThreshold' => 'setDaysRemainKeyThreshold',
        'taxExempt' => 'setTaxExempt',
        'taxExemptionType' => 'setTaxExemptionType',
        'proration' => 'setProration',
        'outOfStockEmailTime' => 'setOutOfStockEmailTime',
        'serverPostBack' => 'setServerPostBack',
        'isCpaShell' => 'setIsCpaShell',
        'allowAnnual' => 'setAllowAnnual',
        'extraData' => 'setExtraData',
        'shippable' => 'setShippable',
        'subscriptionProduct' => 'setSubscriptionProduct',
        'productType' => 'setProductType',
        'productCategory' => 'setProductCategory'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'merchantId' => 'getMerchantId',
        'sku' => 'getSku',
        'name' => 'getName',
        'desc' => 'getDesc',
        'disabled' => 'getDisabled',
        'created' => 'getCreated',
        'publishing' => 'getPublishing',
        'isRaSupportProduct' => 'getIsRaSupportProduct',
        'raSupportPhone' => 'getRaSupportPhone',
        'raSalesPhone' => 'getRaSalesPhone',
        'softDesc' => 'getSoftDesc',
        'customerSupportName' => 'getCustomerSupportName',
        'customerSupportEmail' => 'getCustomerSupportEmail',
        'customerSupportUrl' => 'getCustomerSupportUrl',
        'customerSupportUrlName' => 'getCustomerSupportUrlName',
        'lmsEnabled' => 'getLmsEnabled',
        'receiptEnabled' => 'getReceiptEnabled',
        'receiptType' => 'getReceiptType',
        'lowKeyThreshold' => 'getLowKeyThreshold',
        'lowKeyEmail' => 'getLowKeyEmail',
        'daysRemainKeyThreshold' => 'getDaysRemainKeyThreshold',
        'taxExempt' => 'getTaxExempt',
        'taxExemptionType' => 'getTaxExemptionType',
        'proration' => 'getProration',
        'outOfStockEmailTime' => 'getOutOfStockEmailTime',
        'serverPostBack' => 'getServerPostBack',
        'isCpaShell' => 'getIsCpaShell',
        'allowAnnual' => 'getAllowAnnual',
        'extraData' => 'getExtraData',
        'shippable' => 'getShippable',
        'subscriptionProduct' => 'getSubscriptionProduct',
        'productType' => 'getProductType',
        'productCategory' => 'getProductCategory'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['merchantId'] = isset($data['merchantId']) ? $data['merchantId'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['publishing'] = isset($data['publishing']) ? $data['publishing'] : null;
        $this->container['isRaSupportProduct'] = isset($data['isRaSupportProduct']) ? $data['isRaSupportProduct'] : null;
        $this->container['raSupportPhone'] = isset($data['raSupportPhone']) ? $data['raSupportPhone'] : null;
        $this->container['raSalesPhone'] = isset($data['raSalesPhone']) ? $data['raSalesPhone'] : null;
        $this->container['softDesc'] = isset($data['softDesc']) ? $data['softDesc'] : null;
        $this->container['customerSupportName'] = isset($data['customerSupportName']) ? $data['customerSupportName'] : null;
        $this->container['customerSupportEmail'] = isset($data['customerSupportEmail']) ? $data['customerSupportEmail'] : null;
        $this->container['customerSupportUrl'] = isset($data['customerSupportUrl']) ? $data['customerSupportUrl'] : null;
        $this->container['customerSupportUrlName'] = isset($data['customerSupportUrlName']) ? $data['customerSupportUrlName'] : null;
        $this->container['lmsEnabled'] = isset($data['lmsEnabled']) ? $data['lmsEnabled'] : null;
        $this->container['receiptEnabled'] = isset($data['receiptEnabled']) ? $data['receiptEnabled'] : null;
        $this->container['receiptType'] = isset($data['receiptType']) ? $data['receiptType'] : null;
        $this->container['lowKeyThreshold'] = isset($data['lowKeyThreshold']) ? $data['lowKeyThreshold'] : null;
        $this->container['lowKeyEmail'] = isset($data['lowKeyEmail']) ? $data['lowKeyEmail'] : null;
        $this->container['daysRemainKeyThreshold'] = isset($data['daysRemainKeyThreshold']) ? $data['daysRemainKeyThreshold'] : null;
        $this->container['taxExempt'] = isset($data['taxExempt']) ? $data['taxExempt'] : null;
        $this->container['taxExemptionType'] = isset($data['taxExemptionType']) ? $data['taxExemptionType'] : null;
        $this->container['proration'] = isset($data['proration']) ? $data['proration'] : null;
        $this->container['outOfStockEmailTime'] = isset($data['outOfStockEmailTime']) ? $data['outOfStockEmailTime'] : null;
        $this->container['serverPostBack'] = isset($data['serverPostBack']) ? $data['serverPostBack'] : null;
        $this->container['isCpaShell'] = isset($data['isCpaShell']) ? $data['isCpaShell'] : null;
        $this->container['allowAnnual'] = isset($data['allowAnnual']) ? $data['allowAnnual'] : null;
        $this->container['extraData'] = isset($data['extraData']) ? $data['extraData'] : null;
        $this->container['shippable'] = isset($data['shippable']) ? $data['shippable'] : null;
        $this->container['subscriptionProduct'] = isset($data['subscriptionProduct']) ? $data['subscriptionProduct'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['productCategory'] = isset($data['productCategory']) ? $data['productCategory'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Product Id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets merchantId
     * @return int
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     * @param int $merchantId Product owner merchant group account id
     * @return $this
     */
    public function setMerchantId($merchantId)
    {
        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku Product sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Product name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets desc
     * @return string
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     * @param string $desc Product description
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets disabled
     * @return bool
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     * @param bool $disabled If product is disabled
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets created
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param string $created Product create time
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets publishing
     * @return string
     */
    public function getPublishing()
    {
        return $this->container['publishing'];
    }

    /**
     * Sets publishing
     * @param string $publishing If product is hidden, pending or active
     * @return $this
     */
    public function setPublishing($publishing)
    {
        $this->container['publishing'] = $publishing;

        return $this;
    }

    /**
     * Gets isRaSupportProduct
     * @return bool
     */
    public function getIsRaSupportProduct()
    {
        return $this->container['isRaSupportProduct'];
    }

    /**
     * Sets isRaSupportProduct
     * @param bool $isRaSupportProduct If product is ra support product
     * @return $this
     */
    public function setIsRaSupportProduct($isRaSupportProduct)
    {
        $this->container['isRaSupportProduct'] = $isRaSupportProduct;

        return $this;
    }

    /**
     * Gets raSupportPhone
     * @return string
     */
    public function getRaSupportPhone()
    {
        return $this->container['raSupportPhone'];
    }

    /**
     * Sets raSupportPhone
     * @param string $raSupportPhone Ra support phone
     * @return $this
     */
    public function setRaSupportPhone($raSupportPhone)
    {
        $this->container['raSupportPhone'] = $raSupportPhone;

        return $this;
    }

    /**
     * Gets raSalesPhone
     * @return string
     */
    public function getRaSalesPhone()
    {
        return $this->container['raSalesPhone'];
    }

    /**
     * Sets raSalesPhone
     * @param string $raSalesPhone Ra sales phone
     * @return $this
     */
    public function setRaSalesPhone($raSalesPhone)
    {
        $this->container['raSalesPhone'] = $raSalesPhone;

        return $this;
    }

    /**
     * Gets softDesc
     * @return string
     */
    public function getSoftDesc()
    {
        return $this->container['softDesc'];
    }

    /**
     * Sets softDesc
     * @param string $softDesc Product soft description
     * @return $this
     */
    public function setSoftDesc($softDesc)
    {
        $this->container['softDesc'] = $softDesc;

        return $this;
    }

    /**
     * Gets customerSupportName
     * @return string
     */
    public function getCustomerSupportName()
    {
        return $this->container['customerSupportName'];
    }

    /**
     * Sets customerSupportName
     * @param string $customerSupportName Customer support name
     * @return $this
     */
    public function setCustomerSupportName($customerSupportName)
    {
        $this->container['customerSupportName'] = $customerSupportName;

        return $this;
    }

    /**
     * Gets customerSupportEmail
     * @return string
     */
    public function getCustomerSupportEmail()
    {
        return $this->container['customerSupportEmail'];
    }

    /**
     * Sets customerSupportEmail
     * @param string $customerSupportEmail Customer support email
     * @return $this
     */
    public function setCustomerSupportEmail($customerSupportEmail)
    {
        $this->container['customerSupportEmail'] = $customerSupportEmail;

        return $this;
    }

    /**
     * Gets customerSupportUrl
     * @return string
     */
    public function getCustomerSupportUrl()
    {
        return $this->container['customerSupportUrl'];
    }

    /**
     * Sets customerSupportUrl
     * @param string $customerSupportUrl Customer support url
     * @return $this
     */
    public function setCustomerSupportUrl($customerSupportUrl)
    {
        $this->container['customerSupportUrl'] = $customerSupportUrl;

        return $this;
    }

    /**
     * Gets customerSupportUrlName
     * @return string
     */
    public function getCustomerSupportUrlName()
    {
        return $this->container['customerSupportUrlName'];
    }

    /**
     * Sets customerSupportUrlName
     * @param string $customerSupportUrlName Customer support url name
     * @return $this
     */
    public function setCustomerSupportUrlName($customerSupportUrlName)
    {
        $this->container['customerSupportUrlName'] = $customerSupportUrlName;

        return $this;
    }

    /**
     * Gets lmsEnabled
     * @return bool
     */
    public function getLmsEnabled()
    {
        return $this->container['lmsEnabled'];
    }

    /**
     * Sets lmsEnabled
     * @param bool $lmsEnabled If lms enabled
     * @return $this
     */
    public function setLmsEnabled($lmsEnabled)
    {
        $this->container['lmsEnabled'] = $lmsEnabled;

        return $this;
    }

    /**
     * Gets receiptEnabled
     * @return bool
     */
    public function getReceiptEnabled()
    {
        return $this->container['receiptEnabled'];
    }

    /**
     * Sets receiptEnabled
     * @param bool $receiptEnabled If receipt is enabled
     * @return $this
     */
    public function setReceiptEnabled($receiptEnabled)
    {
        $this->container['receiptEnabled'] = $receiptEnabled;

        return $this;
    }

    /**
     * Gets receiptType
     * @return string
     */
    public function getReceiptType()
    {
        return $this->container['receiptType'];
    }

    /**
     * Sets receiptType
     * @param string $receiptType Recipt type
     * @return $this
     */
    public function setReceiptType($receiptType)
    {
        $this->container['receiptType'] = $receiptType;

        return $this;
    }

    /**
     * Gets lowKeyThreshold
     * @return int
     */
    public function getLowKeyThreshold()
    {
        return $this->container['lowKeyThreshold'];
    }

    /**
     * Sets lowKeyThreshold
     * @param int $lowKeyThreshold Low license key threshod
     * @return $this
     */
    public function setLowKeyThreshold($lowKeyThreshold)
    {
        $this->container['lowKeyThreshold'] = $lowKeyThreshold;

        return $this;
    }

    /**
     * Gets lowKeyEmail
     * @return string
     */
    public function getLowKeyEmail()
    {
        return $this->container['lowKeyEmail'];
    }

    /**
     * Sets lowKeyEmail
     * @param string $lowKeyEmail Low license key email
     * @return $this
     */
    public function setLowKeyEmail($lowKeyEmail)
    {
        $this->container['lowKeyEmail'] = $lowKeyEmail;

        return $this;
    }

    /**
     * Gets daysRemainKeyThreshold
     * @return int
     */
    public function getDaysRemainKeyThreshold()
    {
        return $this->container['daysRemainKeyThreshold'];
    }

    /**
     * Sets daysRemainKeyThreshold
     * @param int $daysRemainKeyThreshold Days remain key threshold
     * @return $this
     */
    public function setDaysRemainKeyThreshold($daysRemainKeyThreshold)
    {
        $this->container['daysRemainKeyThreshold'] = $daysRemainKeyThreshold;

        return $this;
    }

    /**
     * Gets taxExempt
     * @return bool
     */
    public function getTaxExempt()
    {
        return $this->container['taxExempt'];
    }

    /**
     * Sets taxExempt
     * @param bool $taxExempt If this propduct may exempt tax
     * @return $this
     */
    public function setTaxExempt($taxExempt)
    {
        $this->container['taxExempt'] = $taxExempt;

        return $this;
    }

    /**
     * Gets taxExemptionType
     * @return string
     */
    public function getTaxExemptionType()
    {
        return $this->container['taxExemptionType'];
    }

    /**
     * Sets taxExemptionType
     * @param string $taxExemptionType Direction of tax exempt
     * @return $this
     */
    public function setTaxExemptionType($taxExemptionType)
    {
        $this->container['taxExemptionType'] = $taxExemptionType;

        return $this;
    }

    /**
     * Gets proration
     * @return bool
     */
    public function getProration()
    {
        return $this->container['proration'];
    }

    /**
     * Sets proration
     * @param bool $proration If this product is proration product
     * @return $this
     */
    public function setProration($proration)
    {
        $this->container['proration'] = $proration;

        return $this;
    }

    /**
     * Gets outOfStockEmailTime
     * @return string
     */
    public function getOutOfStockEmailTime()
    {
        return $this->container['outOfStockEmailTime'];
    }

    /**
     * Sets outOfStockEmailTime
     * @param string $outOfStockEmailTime Out of stock email sent time
     * @return $this
     */
    public function setOutOfStockEmailTime($outOfStockEmailTime)
    {
        $this->container['outOfStockEmailTime'] = $outOfStockEmailTime;

        return $this;
    }

    /**
     * Gets serverPostBack
     * @return bool
     */
    public function getServerPostBack()
    {
        return $this->container['serverPostBack'];
    }

    /**
     * Sets serverPostBack
     * @param bool $serverPostBack If session id added to linker
     * @return $this
     */
    public function setServerPostBack($serverPostBack)
    {
        $this->container['serverPostBack'] = $serverPostBack;

        return $this;
    }

    /**
     * Gets isCpaShell
     * @return bool
     */
    public function getIsCpaShell()
    {
        return $this->container['isCpaShell'];
    }

    /**
     * Sets isCpaShell
     * @param bool $isCpaShell If it is cpa shell
     * @return $this
     */
    public function setIsCpaShell($isCpaShell)
    {
        $this->container['isCpaShell'] = $isCpaShell;

        return $this;
    }

    /**
     * Gets allowAnnual
     * @return bool
     */
    public function getAllowAnnual()
    {
        return $this->container['allowAnnual'];
    }

    /**
     * Sets allowAnnual
     * @param bool $allowAnnual If this product allow annual recurring
     * @return $this
     */
    public function setAllowAnnual($allowAnnual)
    {
        $this->container['allowAnnual'] = $allowAnnual;

        return $this;
    }

    /**
     * Gets extraData
     * @return string
     */
    public function getExtraData()
    {
        return $this->container['extraData'];
    }

    /**
     * Sets extraData
     * @param string $extraData extra data
     * @return $this
     */
    public function setExtraData($extraData)
    {
        $this->container['extraData'] = $extraData;

        return $this;
    }

    /**
     * Gets shippable
     * @return bool
     */
    public function getShippable()
    {
        return $this->container['shippable'];
    }

    /**
     * Sets shippable
     * @param bool $shippable If it is shippable
     * @return $this
     */
    public function setShippable($shippable)
    {
        $this->container['shippable'] = $shippable;

        return $this;
    }

    /**
     * Gets subscriptionProduct
     * @return bool
     */
    public function getSubscriptionProduct()
    {
        return $this->container['subscriptionProduct'];
    }

    /**
     * Sets subscriptionProduct
     * @param bool $subscriptionProduct If this product is subscription product
     * @return $this
     */
    public function setSubscriptionProduct($subscriptionProduct)
    {
        $this->container['subscriptionProduct'] = $subscriptionProduct;

        return $this;
    }

    /**
     * Gets productType
     * @return \Swagger\Client\Model\ProductType
     */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
     * Sets productType
     * @param \Swagger\Client\Model\ProductType $productType
     * @return $this
     */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;

        return $this;
    }

    /**
     * Gets productCategory
     * @return \Swagger\Client\Model\ProductCategory
     */
    public function getProductCategory()
    {
        return $this->container['productCategory'];
    }

    /**
     * Sets productCategory
     * @param \Swagger\Client\Model\ProductCategory $productCategory
     * @return $this
     */
    public function setProductCategory($productCategory)
    {
        $this->container['productCategory'] = $productCategory;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


