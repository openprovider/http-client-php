<?php
/**
 * CustomerExtensionData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Person
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Reseller/Customer
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Person\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * CustomerExtensionData Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Person
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerExtensionData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'customerExtensionData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'admin_type' => 'string',
        'applicant_purpose' => 'string',
        'birth_date' => 'string',
        'company_name_cyrillic' => 'string',
        'company_name_latin' => 'string',
        'company_registration_number' => 'string',
        'contact_title' => 'string',
        'ens_auth_id' => 'string',
        'ens_key' => 'string',
        'first_name_cyrillic' => 'string',
        'first_name_latin' => 'string',
        'hr_member' => 'string',
        'industry_class' => 'string',
        'is_private_enterpreneur' => 'string',
        'last_name_cyrillic' => 'string',
        'last_name_latin' => 'string',
        'legal_address_cyrillic' => 'string',
        'middle_name_cyrillic' => 'string',
        'middle_name_latin' => 'string',
        'mobile_phone_number' => 'string',
        'nexus_category' => 'string',
        'org_type' => 'string',
        'passport_issue_date' => 'string',
        'passport_issuer' => 'string',
        'passport_number' => 'string',
        'passport_series' => 'string',
        'postal_address_cyrillic' => 'string',
        'social_security_number' => 'string',
        'tax_payer_number' => 'string',
        'uin' => 'string',
        'user_type' => 'string',
        'vat' => 'string',
        'website' => 'string',
        'whois_email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'admin_type' => null,
        'applicant_purpose' => null,
        'birth_date' => null,
        'company_name_cyrillic' => null,
        'company_name_latin' => null,
        'company_registration_number' => null,
        'contact_title' => null,
        'ens_auth_id' => null,
        'ens_key' => null,
        'first_name_cyrillic' => null,
        'first_name_latin' => null,
        'hr_member' => null,
        'industry_class' => null,
        'is_private_enterpreneur' => null,
        'last_name_cyrillic' => null,
        'last_name_latin' => null,
        'legal_address_cyrillic' => null,
        'middle_name_cyrillic' => null,
        'middle_name_latin' => null,
        'mobile_phone_number' => null,
        'nexus_category' => null,
        'org_type' => null,
        'passport_issue_date' => null,
        'passport_issuer' => null,
        'passport_number' => null,
        'passport_series' => null,
        'postal_address_cyrillic' => null,
        'social_security_number' => null,
        'tax_payer_number' => null,
        'uin' => null,
        'user_type' => null,
        'vat' => null,
        'website' => null,
        'whois_email' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'admin_type' => 'admin_type',
        'applicant_purpose' => 'applicant_purpose',
        'birth_date' => 'birth_date',
        'company_name_cyrillic' => 'company_name_cyrillic',
        'company_name_latin' => 'company_name_latin',
        'company_registration_number' => 'company_registration_number',
        'contact_title' => 'contact_title',
        'ens_auth_id' => 'ens_auth_id',
        'ens_key' => 'ens_key',
        'first_name_cyrillic' => 'first_name_cyrillic',
        'first_name_latin' => 'first_name_latin',
        'hr_member' => 'hr_member',
        'industry_class' => 'industry_class',
        'is_private_enterpreneur' => 'is_private_enterpreneur',
        'last_name_cyrillic' => 'last_name_cyrillic',
        'last_name_latin' => 'last_name_latin',
        'legal_address_cyrillic' => 'legal_address_cyrillic',
        'middle_name_cyrillic' => 'middle_name_cyrillic',
        'middle_name_latin' => 'middle_name_latin',
        'mobile_phone_number' => 'mobile_phone_number',
        'nexus_category' => 'nexus_category',
        'org_type' => 'org_type',
        'passport_issue_date' => 'passport_issue_date',
        'passport_issuer' => 'passport_issuer',
        'passport_number' => 'passport_number',
        'passport_series' => 'passport_series',
        'postal_address_cyrillic' => 'postal_address_cyrillic',
        'social_security_number' => 'social_security_number',
        'tax_payer_number' => 'tax_payer_number',
        'uin' => 'uin',
        'user_type' => 'user_type',
        'vat' => 'vat',
        'website' => 'website',
        'whois_email' => 'whois_email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin_type' => 'setAdminType',
        'applicant_purpose' => 'setApplicantPurpose',
        'birth_date' => 'setBirthDate',
        'company_name_cyrillic' => 'setCompanyNameCyrillic',
        'company_name_latin' => 'setCompanyNameLatin',
        'company_registration_number' => 'setCompanyRegistrationNumber',
        'contact_title' => 'setContactTitle',
        'ens_auth_id' => 'setEnsAuthId',
        'ens_key' => 'setEnsKey',
        'first_name_cyrillic' => 'setFirstNameCyrillic',
        'first_name_latin' => 'setFirstNameLatin',
        'hr_member' => 'setHrMember',
        'industry_class' => 'setIndustryClass',
        'is_private_enterpreneur' => 'setIsPrivateEnterpreneur',
        'last_name_cyrillic' => 'setLastNameCyrillic',
        'last_name_latin' => 'setLastNameLatin',
        'legal_address_cyrillic' => 'setLegalAddressCyrillic',
        'middle_name_cyrillic' => 'setMiddleNameCyrillic',
        'middle_name_latin' => 'setMiddleNameLatin',
        'mobile_phone_number' => 'setMobilePhoneNumber',
        'nexus_category' => 'setNexusCategory',
        'org_type' => 'setOrgType',
        'passport_issue_date' => 'setPassportIssueDate',
        'passport_issuer' => 'setPassportIssuer',
        'passport_number' => 'setPassportNumber',
        'passport_series' => 'setPassportSeries',
        'postal_address_cyrillic' => 'setPostalAddressCyrillic',
        'social_security_number' => 'setSocialSecurityNumber',
        'tax_payer_number' => 'setTaxPayerNumber',
        'uin' => 'setUin',
        'user_type' => 'setUserType',
        'vat' => 'setVat',
        'website' => 'setWebsite',
        'whois_email' => 'setWhoisEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin_type' => 'getAdminType',
        'applicant_purpose' => 'getApplicantPurpose',
        'birth_date' => 'getBirthDate',
        'company_name_cyrillic' => 'getCompanyNameCyrillic',
        'company_name_latin' => 'getCompanyNameLatin',
        'company_registration_number' => 'getCompanyRegistrationNumber',
        'contact_title' => 'getContactTitle',
        'ens_auth_id' => 'getEnsAuthId',
        'ens_key' => 'getEnsKey',
        'first_name_cyrillic' => 'getFirstNameCyrillic',
        'first_name_latin' => 'getFirstNameLatin',
        'hr_member' => 'getHrMember',
        'industry_class' => 'getIndustryClass',
        'is_private_enterpreneur' => 'getIsPrivateEnterpreneur',
        'last_name_cyrillic' => 'getLastNameCyrillic',
        'last_name_latin' => 'getLastNameLatin',
        'legal_address_cyrillic' => 'getLegalAddressCyrillic',
        'middle_name_cyrillic' => 'getMiddleNameCyrillic',
        'middle_name_latin' => 'getMiddleNameLatin',
        'mobile_phone_number' => 'getMobilePhoneNumber',
        'nexus_category' => 'getNexusCategory',
        'org_type' => 'getOrgType',
        'passport_issue_date' => 'getPassportIssueDate',
        'passport_issuer' => 'getPassportIssuer',
        'passport_number' => 'getPassportNumber',
        'passport_series' => 'getPassportSeries',
        'postal_address_cyrillic' => 'getPostalAddressCyrillic',
        'social_security_number' => 'getSocialSecurityNumber',
        'tax_payer_number' => 'getTaxPayerNumber',
        'uin' => 'getUin',
        'user_type' => 'getUserType',
        'vat' => 'getVat',
        'website' => 'getWebsite',
        'whois_email' => 'getWhoisEmail'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['admin_type'] = isset($data['admin_type']) ? $data['admin_type'] : null;
        $this->container['applicant_purpose'] = isset($data['applicant_purpose']) ? $data['applicant_purpose'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['company_name_cyrillic'] = isset($data['company_name_cyrillic']) ? $data['company_name_cyrillic'] : null;
        $this->container['company_name_latin'] = isset($data['company_name_latin']) ? $data['company_name_latin'] : null;
        $this->container['company_registration_number'] = isset($data['company_registration_number']) ? $data['company_registration_number'] : null;
        $this->container['contact_title'] = isset($data['contact_title']) ? $data['contact_title'] : null;
        $this->container['ens_auth_id'] = isset($data['ens_auth_id']) ? $data['ens_auth_id'] : null;
        $this->container['ens_key'] = isset($data['ens_key']) ? $data['ens_key'] : null;
        $this->container['first_name_cyrillic'] = isset($data['first_name_cyrillic']) ? $data['first_name_cyrillic'] : null;
        $this->container['first_name_latin'] = isset($data['first_name_latin']) ? $data['first_name_latin'] : null;
        $this->container['hr_member'] = isset($data['hr_member']) ? $data['hr_member'] : null;
        $this->container['industry_class'] = isset($data['industry_class']) ? $data['industry_class'] : null;
        $this->container['is_private_enterpreneur'] = isset($data['is_private_enterpreneur']) ? $data['is_private_enterpreneur'] : null;
        $this->container['last_name_cyrillic'] = isset($data['last_name_cyrillic']) ? $data['last_name_cyrillic'] : null;
        $this->container['last_name_latin'] = isset($data['last_name_latin']) ? $data['last_name_latin'] : null;
        $this->container['legal_address_cyrillic'] = isset($data['legal_address_cyrillic']) ? $data['legal_address_cyrillic'] : null;
        $this->container['middle_name_cyrillic'] = isset($data['middle_name_cyrillic']) ? $data['middle_name_cyrillic'] : null;
        $this->container['middle_name_latin'] = isset($data['middle_name_latin']) ? $data['middle_name_latin'] : null;
        $this->container['mobile_phone_number'] = isset($data['mobile_phone_number']) ? $data['mobile_phone_number'] : null;
        $this->container['nexus_category'] = isset($data['nexus_category']) ? $data['nexus_category'] : null;
        $this->container['org_type'] = isset($data['org_type']) ? $data['org_type'] : null;
        $this->container['passport_issue_date'] = isset($data['passport_issue_date']) ? $data['passport_issue_date'] : null;
        $this->container['passport_issuer'] = isset($data['passport_issuer']) ? $data['passport_issuer'] : null;
        $this->container['passport_number'] = isset($data['passport_number']) ? $data['passport_number'] : null;
        $this->container['passport_series'] = isset($data['passport_series']) ? $data['passport_series'] : null;
        $this->container['postal_address_cyrillic'] = isset($data['postal_address_cyrillic']) ? $data['postal_address_cyrillic'] : null;
        $this->container['social_security_number'] = isset($data['social_security_number']) ? $data['social_security_number'] : null;
        $this->container['tax_payer_number'] = isset($data['tax_payer_number']) ? $data['tax_payer_number'] : null;
        $this->container['uin'] = isset($data['uin']) ? $data['uin'] : null;
        $this->container['user_type'] = isset($data['user_type']) ? $data['user_type'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['whois_email'] = isset($data['whois_email']) ? $data['whois_email'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets admin_type
     *
     * @return string|null
     */
    public function getAdminType()
    {
        return $this->container['admin_type'];
    }

    /**
     * Sets admin_type
     *
     * @param string|null $admin_type admin_type
     *
     * @return $this
     */
    public function setAdminType($admin_type)
    {
        $this->container['admin_type'] = $admin_type;

        return $this;
    }

    /**
     * Gets applicant_purpose
     *
     * @return string|null
     */
    public function getApplicantPurpose()
    {
        return $this->container['applicant_purpose'];
    }

    /**
     * Sets applicant_purpose
     *
     * @param string|null $applicant_purpose applicant_purpose
     *
     * @return $this
     */
    public function setApplicantPurpose($applicant_purpose)
    {
        $this->container['applicant_purpose'] = $applicant_purpose;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return string|null
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param string|null $birth_date birth_date
     *
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets company_name_cyrillic
     *
     * @return string|null
     */
    public function getCompanyNameCyrillic()
    {
        return $this->container['company_name_cyrillic'];
    }

    /**
     * Sets company_name_cyrillic
     *
     * @param string|null $company_name_cyrillic company_name_cyrillic
     *
     * @return $this
     */
    public function setCompanyNameCyrillic($company_name_cyrillic)
    {
        $this->container['company_name_cyrillic'] = $company_name_cyrillic;

        return $this;
    }

    /**
     * Gets company_name_latin
     *
     * @return string|null
     */
    public function getCompanyNameLatin()
    {
        return $this->container['company_name_latin'];
    }

    /**
     * Sets company_name_latin
     *
     * @param string|null $company_name_latin company_name_latin
     *
     * @return $this
     */
    public function setCompanyNameLatin($company_name_latin)
    {
        $this->container['company_name_latin'] = $company_name_latin;

        return $this;
    }

    /**
     * Gets company_registration_number
     *
     * @return string|null
     */
    public function getCompanyRegistrationNumber()
    {
        return $this->container['company_registration_number'];
    }

    /**
     * Sets company_registration_number
     *
     * @param string|null $company_registration_number company_registration_number
     *
     * @return $this
     */
    public function setCompanyRegistrationNumber($company_registration_number)
    {
        $this->container['company_registration_number'] = $company_registration_number;

        return $this;
    }

    /**
     * Gets contact_title
     *
     * @return string|null
     */
    public function getContactTitle()
    {
        return $this->container['contact_title'];
    }

    /**
     * Sets contact_title
     *
     * @param string|null $contact_title contact_title
     *
     * @return $this
     */
    public function setContactTitle($contact_title)
    {
        $this->container['contact_title'] = $contact_title;

        return $this;
    }

    /**
     * Gets ens_auth_id
     *
     * @return string|null
     */
    public function getEnsAuthId()
    {
        return $this->container['ens_auth_id'];
    }

    /**
     * Sets ens_auth_id
     *
     * @param string|null $ens_auth_id ens_auth_id
     *
     * @return $this
     */
    public function setEnsAuthId($ens_auth_id)
    {
        $this->container['ens_auth_id'] = $ens_auth_id;

        return $this;
    }

    /**
     * Gets ens_key
     *
     * @return string|null
     */
    public function getEnsKey()
    {
        return $this->container['ens_key'];
    }

    /**
     * Sets ens_key
     *
     * @param string|null $ens_key ens_key
     *
     * @return $this
     */
    public function setEnsKey($ens_key)
    {
        $this->container['ens_key'] = $ens_key;

        return $this;
    }

    /**
     * Gets first_name_cyrillic
     *
     * @return string|null
     */
    public function getFirstNameCyrillic()
    {
        return $this->container['first_name_cyrillic'];
    }

    /**
     * Sets first_name_cyrillic
     *
     * @param string|null $first_name_cyrillic first_name_cyrillic
     *
     * @return $this
     */
    public function setFirstNameCyrillic($first_name_cyrillic)
    {
        $this->container['first_name_cyrillic'] = $first_name_cyrillic;

        return $this;
    }

    /**
     * Gets first_name_latin
     *
     * @return string|null
     */
    public function getFirstNameLatin()
    {
        return $this->container['first_name_latin'];
    }

    /**
     * Sets first_name_latin
     *
     * @param string|null $first_name_latin first_name_latin
     *
     * @return $this
     */
    public function setFirstNameLatin($first_name_latin)
    {
        $this->container['first_name_latin'] = $first_name_latin;

        return $this;
    }

    /**
     * Gets hr_member
     *
     * @return string|null
     */
    public function getHrMember()
    {
        return $this->container['hr_member'];
    }

    /**
     * Sets hr_member
     *
     * @param string|null $hr_member hr_member
     *
     * @return $this
     */
    public function setHrMember($hr_member)
    {
        $this->container['hr_member'] = $hr_member;

        return $this;
    }

    /**
     * Gets industry_class
     *
     * @return string|null
     */
    public function getIndustryClass()
    {
        return $this->container['industry_class'];
    }

    /**
     * Sets industry_class
     *
     * @param string|null $industry_class industry_class
     *
     * @return $this
     */
    public function setIndustryClass($industry_class)
    {
        $this->container['industry_class'] = $industry_class;

        return $this;
    }

    /**
     * Gets is_private_enterpreneur
     *
     * @return string|null
     */
    public function getIsPrivateEnterpreneur()
    {
        return $this->container['is_private_enterpreneur'];
    }

    /**
     * Sets is_private_enterpreneur
     *
     * @param string|null $is_private_enterpreneur is_private_enterpreneur
     *
     * @return $this
     */
    public function setIsPrivateEnterpreneur($is_private_enterpreneur)
    {
        $this->container['is_private_enterpreneur'] = $is_private_enterpreneur;

        return $this;
    }

    /**
     * Gets last_name_cyrillic
     *
     * @return string|null
     */
    public function getLastNameCyrillic()
    {
        return $this->container['last_name_cyrillic'];
    }

    /**
     * Sets last_name_cyrillic
     *
     * @param string|null $last_name_cyrillic last_name_cyrillic
     *
     * @return $this
     */
    public function setLastNameCyrillic($last_name_cyrillic)
    {
        $this->container['last_name_cyrillic'] = $last_name_cyrillic;

        return $this;
    }

    /**
     * Gets last_name_latin
     *
     * @return string|null
     */
    public function getLastNameLatin()
    {
        return $this->container['last_name_latin'];
    }

    /**
     * Sets last_name_latin
     *
     * @param string|null $last_name_latin last_name_latin
     *
     * @return $this
     */
    public function setLastNameLatin($last_name_latin)
    {
        $this->container['last_name_latin'] = $last_name_latin;

        return $this;
    }

    /**
     * Gets legal_address_cyrillic
     *
     * @return string|null
     */
    public function getLegalAddressCyrillic()
    {
        return $this->container['legal_address_cyrillic'];
    }

    /**
     * Sets legal_address_cyrillic
     *
     * @param string|null $legal_address_cyrillic legal_address_cyrillic
     *
     * @return $this
     */
    public function setLegalAddressCyrillic($legal_address_cyrillic)
    {
        $this->container['legal_address_cyrillic'] = $legal_address_cyrillic;

        return $this;
    }

    /**
     * Gets middle_name_cyrillic
     *
     * @return string|null
     */
    public function getMiddleNameCyrillic()
    {
        return $this->container['middle_name_cyrillic'];
    }

    /**
     * Sets middle_name_cyrillic
     *
     * @param string|null $middle_name_cyrillic middle_name_cyrillic
     *
     * @return $this
     */
    public function setMiddleNameCyrillic($middle_name_cyrillic)
    {
        $this->container['middle_name_cyrillic'] = $middle_name_cyrillic;

        return $this;
    }

    /**
     * Gets middle_name_latin
     *
     * @return string|null
     */
    public function getMiddleNameLatin()
    {
        return $this->container['middle_name_latin'];
    }

    /**
     * Sets middle_name_latin
     *
     * @param string|null $middle_name_latin middle_name_latin
     *
     * @return $this
     */
    public function setMiddleNameLatin($middle_name_latin)
    {
        $this->container['middle_name_latin'] = $middle_name_latin;

        return $this;
    }

    /**
     * Gets mobile_phone_number
     *
     * @return string|null
     */
    public function getMobilePhoneNumber()
    {
        return $this->container['mobile_phone_number'];
    }

    /**
     * Sets mobile_phone_number
     *
     * @param string|null $mobile_phone_number mobile_phone_number
     *
     * @return $this
     */
    public function setMobilePhoneNumber($mobile_phone_number)
    {
        $this->container['mobile_phone_number'] = $mobile_phone_number;

        return $this;
    }

    /**
     * Gets nexus_category
     *
     * @return string|null
     */
    public function getNexusCategory()
    {
        return $this->container['nexus_category'];
    }

    /**
     * Sets nexus_category
     *
     * @param string|null $nexus_category nexus_category
     *
     * @return $this
     */
    public function setNexusCategory($nexus_category)
    {
        $this->container['nexus_category'] = $nexus_category;

        return $this;
    }

    /**
     * Gets org_type
     *
     * @return string|null
     */
    public function getOrgType()
    {
        return $this->container['org_type'];
    }

    /**
     * Sets org_type
     *
     * @param string|null $org_type org_type
     *
     * @return $this
     */
    public function setOrgType($org_type)
    {
        $this->container['org_type'] = $org_type;

        return $this;
    }

    /**
     * Gets passport_issue_date
     *
     * @return string|null
     */
    public function getPassportIssueDate()
    {
        return $this->container['passport_issue_date'];
    }

    /**
     * Sets passport_issue_date
     *
     * @param string|null $passport_issue_date passport_issue_date
     *
     * @return $this
     */
    public function setPassportIssueDate($passport_issue_date)
    {
        $this->container['passport_issue_date'] = $passport_issue_date;

        return $this;
    }

    /**
     * Gets passport_issuer
     *
     * @return string|null
     */
    public function getPassportIssuer()
    {
        return $this->container['passport_issuer'];
    }

    /**
     * Sets passport_issuer
     *
     * @param string|null $passport_issuer passport_issuer
     *
     * @return $this
     */
    public function setPassportIssuer($passport_issuer)
    {
        $this->container['passport_issuer'] = $passport_issuer;

        return $this;
    }

    /**
     * Gets passport_number
     *
     * @return string|null
     */
    public function getPassportNumber()
    {
        return $this->container['passport_number'];
    }

    /**
     * Sets passport_number
     *
     * @param string|null $passport_number passport_number
     *
     * @return $this
     */
    public function setPassportNumber($passport_number)
    {
        $this->container['passport_number'] = $passport_number;

        return $this;
    }

    /**
     * Gets passport_series
     *
     * @return string|null
     */
    public function getPassportSeries()
    {
        return $this->container['passport_series'];
    }

    /**
     * Sets passport_series
     *
     * @param string|null $passport_series passport_series
     *
     * @return $this
     */
    public function setPassportSeries($passport_series)
    {
        $this->container['passport_series'] = $passport_series;

        return $this;
    }

    /**
     * Gets postal_address_cyrillic
     *
     * @return string|null
     */
    public function getPostalAddressCyrillic()
    {
        return $this->container['postal_address_cyrillic'];
    }

    /**
     * Sets postal_address_cyrillic
     *
     * @param string|null $postal_address_cyrillic postal_address_cyrillic
     *
     * @return $this
     */
    public function setPostalAddressCyrillic($postal_address_cyrillic)
    {
        $this->container['postal_address_cyrillic'] = $postal_address_cyrillic;

        return $this;
    }

    /**
     * Gets social_security_number
     *
     * @return string|null
     */
    public function getSocialSecurityNumber()
    {
        return $this->container['social_security_number'];
    }

    /**
     * Sets social_security_number
     *
     * @param string|null $social_security_number social_security_number
     *
     * @return $this
     */
    public function setSocialSecurityNumber($social_security_number)
    {
        $this->container['social_security_number'] = $social_security_number;

        return $this;
    }

    /**
     * Gets tax_payer_number
     *
     * @return string|null
     */
    public function getTaxPayerNumber()
    {
        return $this->container['tax_payer_number'];
    }

    /**
     * Sets tax_payer_number
     *
     * @param string|null $tax_payer_number tax_payer_number
     *
     * @return $this
     */
    public function setTaxPayerNumber($tax_payer_number)
    {
        $this->container['tax_payer_number'] = $tax_payer_number;

        return $this;
    }

    /**
     * Gets uin
     *
     * @return string|null
     */
    public function getUin()
    {
        return $this->container['uin'];
    }

    /**
     * Sets uin
     *
     * @param string|null $uin uin
     *
     * @return $this
     */
    public function setUin($uin)
    {
        $this->container['uin'] = $uin;

        return $this;
    }

    /**
     * Gets user_type
     *
     * @return string|null
     */
    public function getUserType()
    {
        return $this->container['user_type'];
    }

    /**
     * Sets user_type
     *
     * @param string|null $user_type user_type
     *
     * @return $this
     */
    public function setUserType($user_type)
    {
        $this->container['user_type'] = $user_type;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return string|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param string|null $vat vat
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets whois_email
     *
     * @return string|null
     */
    public function getWhoisEmail()
    {
        return $this->container['whois_email'];
    }

    /**
     * Sets whois_email
     *
     * @param string|null $whois_email whois_email
     *
     * @return $this
     */
    public function setWhoisEmail($whois_email)
    {
        $this->container['whois_email'] = $whois_email;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


