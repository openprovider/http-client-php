<?php
/**
 * DomainAdditionalData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Domain
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

namespace Openprovider\Api\Rest\Client\Domain\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * DomainAdditionalData Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DomainAdditionalData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'domainAdditionalData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'abogado_acceptance' => 'string',
        'admin_sing_pass_id' => 'string',
        'allocation_token' => 'string',
        'bank_acceptance' => 'string',
        'company_registration_number' => 'string',
        'domain_name_variants' => 'string',
        'eligibility_type' => 'string',
        'eligibility_type_relationship' => 'string',
        'ftld_token' => 'string',
        'id_number' => 'string',
        'id_type' => 'string',
        'idn_script' => 'string',
        'insurance_acceptance' => 'string',
        'intended_use' => 'string',
        'law_acceptance' => 'string',
        'legal_type' => 'string',
        'maintainer' => 'string',
        'membership_id' => 'string',
        'mobile_phone_number_verification' => 'string',
        'ngo_ong_eligibility_acceptance' => 'string',
        'ngo_ong_policy_acceptance' => 'string',
        'passport_number' => 'string',
        'rurf_blocked_domains' => 'string',
        'send_verification_email' => 'string',
        'trademark_id' => 'string',
        'travel_acceptance' => 'string',
        'vat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'abogado_acceptance' => null,
        'admin_sing_pass_id' => null,
        'allocation_token' => null,
        'bank_acceptance' => null,
        'company_registration_number' => null,
        'domain_name_variants' => null,
        'eligibility_type' => null,
        'eligibility_type_relationship' => null,
        'ftld_token' => null,
        'id_number' => null,
        'id_type' => null,
        'idn_script' => null,
        'insurance_acceptance' => null,
        'intended_use' => null,
        'law_acceptance' => null,
        'legal_type' => null,
        'maintainer' => null,
        'membership_id' => null,
        'mobile_phone_number_verification' => null,
        'ngo_ong_eligibility_acceptance' => null,
        'ngo_ong_policy_acceptance' => null,
        'passport_number' => null,
        'rurf_blocked_domains' => null,
        'send_verification_email' => null,
        'trademark_id' => null,
        'travel_acceptance' => null,
        'vat' => null
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
        'abogado_acceptance' => 'abogado_acceptance',
        'admin_sing_pass_id' => 'admin_sing_pass_id',
        'allocation_token' => 'allocation_token',
        'bank_acceptance' => 'bank_acceptance',
        'company_registration_number' => 'company_registration_number',
        'domain_name_variants' => 'domain_name_variants',
        'eligibility_type' => 'eligibility_type',
        'eligibility_type_relationship' => 'eligibility_type_relationship',
        'ftld_token' => 'ftld_token',
        'id_number' => 'id_number',
        'id_type' => 'id_type',
        'idn_script' => 'idn_script',
        'insurance_acceptance' => 'insurance_acceptance',
        'intended_use' => 'intended_use',
        'law_acceptance' => 'law_acceptance',
        'legal_type' => 'legal_type',
        'maintainer' => 'maintainer',
        'membership_id' => 'membership_id',
        'mobile_phone_number_verification' => 'mobile_phone_number_verification',
        'ngo_ong_eligibility_acceptance' => 'ngo_ong_eligibility_acceptance',
        'ngo_ong_policy_acceptance' => 'ngo_ong_policy_acceptance',
        'passport_number' => 'passport_number',
        'rurf_blocked_domains' => 'rurf_blocked_domains',
        'send_verification_email' => 'send_verification_email',
        'trademark_id' => 'trademark_id',
        'travel_acceptance' => 'travel_acceptance',
        'vat' => 'vat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'abogado_acceptance' => 'setAbogadoAcceptance',
        'admin_sing_pass_id' => 'setAdminSingPassId',
        'allocation_token' => 'setAllocationToken',
        'bank_acceptance' => 'setBankAcceptance',
        'company_registration_number' => 'setCompanyRegistrationNumber',
        'domain_name_variants' => 'setDomainNameVariants',
        'eligibility_type' => 'setEligibilityType',
        'eligibility_type_relationship' => 'setEligibilityTypeRelationship',
        'ftld_token' => 'setFtldToken',
        'id_number' => 'setIdNumber',
        'id_type' => 'setIdType',
        'idn_script' => 'setIdnScript',
        'insurance_acceptance' => 'setInsuranceAcceptance',
        'intended_use' => 'setIntendedUse',
        'law_acceptance' => 'setLawAcceptance',
        'legal_type' => 'setLegalType',
        'maintainer' => 'setMaintainer',
        'membership_id' => 'setMembershipId',
        'mobile_phone_number_verification' => 'setMobilePhoneNumberVerification',
        'ngo_ong_eligibility_acceptance' => 'setNgoOngEligibilityAcceptance',
        'ngo_ong_policy_acceptance' => 'setNgoOngPolicyAcceptance',
        'passport_number' => 'setPassportNumber',
        'rurf_blocked_domains' => 'setRurfBlockedDomains',
        'send_verification_email' => 'setSendVerificationEmail',
        'trademark_id' => 'setTrademarkId',
        'travel_acceptance' => 'setTravelAcceptance',
        'vat' => 'setVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'abogado_acceptance' => 'getAbogadoAcceptance',
        'admin_sing_pass_id' => 'getAdminSingPassId',
        'allocation_token' => 'getAllocationToken',
        'bank_acceptance' => 'getBankAcceptance',
        'company_registration_number' => 'getCompanyRegistrationNumber',
        'domain_name_variants' => 'getDomainNameVariants',
        'eligibility_type' => 'getEligibilityType',
        'eligibility_type_relationship' => 'getEligibilityTypeRelationship',
        'ftld_token' => 'getFtldToken',
        'id_number' => 'getIdNumber',
        'id_type' => 'getIdType',
        'idn_script' => 'getIdnScript',
        'insurance_acceptance' => 'getInsuranceAcceptance',
        'intended_use' => 'getIntendedUse',
        'law_acceptance' => 'getLawAcceptance',
        'legal_type' => 'getLegalType',
        'maintainer' => 'getMaintainer',
        'membership_id' => 'getMembershipId',
        'mobile_phone_number_verification' => 'getMobilePhoneNumberVerification',
        'ngo_ong_eligibility_acceptance' => 'getNgoOngEligibilityAcceptance',
        'ngo_ong_policy_acceptance' => 'getNgoOngPolicyAcceptance',
        'passport_number' => 'getPassportNumber',
        'rurf_blocked_domains' => 'getRurfBlockedDomains',
        'send_verification_email' => 'getSendVerificationEmail',
        'trademark_id' => 'getTrademarkId',
        'travel_acceptance' => 'getTravelAcceptance',
        'vat' => 'getVat'
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
        $this->container['abogado_acceptance'] = isset($data['abogado_acceptance']) ? $data['abogado_acceptance'] : null;
        $this->container['admin_sing_pass_id'] = isset($data['admin_sing_pass_id']) ? $data['admin_sing_pass_id'] : null;
        $this->container['allocation_token'] = isset($data['allocation_token']) ? $data['allocation_token'] : null;
        $this->container['bank_acceptance'] = isset($data['bank_acceptance']) ? $data['bank_acceptance'] : null;
        $this->container['company_registration_number'] = isset($data['company_registration_number']) ? $data['company_registration_number'] : null;
        $this->container['domain_name_variants'] = isset($data['domain_name_variants']) ? $data['domain_name_variants'] : null;
        $this->container['eligibility_type'] = isset($data['eligibility_type']) ? $data['eligibility_type'] : null;
        $this->container['eligibility_type_relationship'] = isset($data['eligibility_type_relationship']) ? $data['eligibility_type_relationship'] : null;
        $this->container['ftld_token'] = isset($data['ftld_token']) ? $data['ftld_token'] : null;
        $this->container['id_number'] = isset($data['id_number']) ? $data['id_number'] : null;
        $this->container['id_type'] = isset($data['id_type']) ? $data['id_type'] : null;
        $this->container['idn_script'] = isset($data['idn_script']) ? $data['idn_script'] : null;
        $this->container['insurance_acceptance'] = isset($data['insurance_acceptance']) ? $data['insurance_acceptance'] : null;
        $this->container['intended_use'] = isset($data['intended_use']) ? $data['intended_use'] : null;
        $this->container['law_acceptance'] = isset($data['law_acceptance']) ? $data['law_acceptance'] : null;
        $this->container['legal_type'] = isset($data['legal_type']) ? $data['legal_type'] : null;
        $this->container['maintainer'] = isset($data['maintainer']) ? $data['maintainer'] : null;
        $this->container['membership_id'] = isset($data['membership_id']) ? $data['membership_id'] : null;
        $this->container['mobile_phone_number_verification'] = isset($data['mobile_phone_number_verification']) ? $data['mobile_phone_number_verification'] : null;
        $this->container['ngo_ong_eligibility_acceptance'] = isset($data['ngo_ong_eligibility_acceptance']) ? $data['ngo_ong_eligibility_acceptance'] : null;
        $this->container['ngo_ong_policy_acceptance'] = isset($data['ngo_ong_policy_acceptance']) ? $data['ngo_ong_policy_acceptance'] : null;
        $this->container['passport_number'] = isset($data['passport_number']) ? $data['passport_number'] : null;
        $this->container['rurf_blocked_domains'] = isset($data['rurf_blocked_domains']) ? $data['rurf_blocked_domains'] : null;
        $this->container['send_verification_email'] = isset($data['send_verification_email']) ? $data['send_verification_email'] : null;
        $this->container['trademark_id'] = isset($data['trademark_id']) ? $data['trademark_id'] : null;
        $this->container['travel_acceptance'] = isset($data['travel_acceptance']) ? $data['travel_acceptance'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
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
     * Gets abogado_acceptance
     *
     * @return string|null
     */
    public function getAbogadoAcceptance()
    {
        return $this->container['abogado_acceptance'];
    }

    /**
     * Sets abogado_acceptance
     *
     * @param string|null $abogado_acceptance abogado_acceptance
     *
     * @return $this
     */
    public function setAbogadoAcceptance($abogado_acceptance)
    {
        $this->container['abogado_acceptance'] = $abogado_acceptance;

        return $this;
    }

    /**
     * Gets admin_sing_pass_id
     *
     * @return string|null
     */
    public function getAdminSingPassId()
    {
        return $this->container['admin_sing_pass_id'];
    }

    /**
     * Sets admin_sing_pass_id
     *
     * @param string|null $admin_sing_pass_id admin_sing_pass_id
     *
     * @return $this
     */
    public function setAdminSingPassId($admin_sing_pass_id)
    {
        $this->container['admin_sing_pass_id'] = $admin_sing_pass_id;

        return $this;
    }

    /**
     * Gets allocation_token
     *
     * @return string|null
     */
    public function getAllocationToken()
    {
        return $this->container['allocation_token'];
    }

    /**
     * Sets allocation_token
     *
     * @param string|null $allocation_token allocation_token
     *
     * @return $this
     */
    public function setAllocationToken($allocation_token)
    {
        $this->container['allocation_token'] = $allocation_token;

        return $this;
    }

    /**
     * Gets bank_acceptance
     *
     * @return string|null
     */
    public function getBankAcceptance()
    {
        return $this->container['bank_acceptance'];
    }

    /**
     * Sets bank_acceptance
     *
     * @param string|null $bank_acceptance bank_acceptance
     *
     * @return $this
     */
    public function setBankAcceptance($bank_acceptance)
    {
        $this->container['bank_acceptance'] = $bank_acceptance;

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
     * Gets domain_name_variants
     *
     * @return string|null
     */
    public function getDomainNameVariants()
    {
        return $this->container['domain_name_variants'];
    }

    /**
     * Sets domain_name_variants
     *
     * @param string|null $domain_name_variants domain_name_variants
     *
     * @return $this
     */
    public function setDomainNameVariants($domain_name_variants)
    {
        $this->container['domain_name_variants'] = $domain_name_variants;

        return $this;
    }

    /**
     * Gets eligibility_type
     *
     * @return string|null
     */
    public function getEligibilityType()
    {
        return $this->container['eligibility_type'];
    }

    /**
     * Sets eligibility_type
     *
     * @param string|null $eligibility_type eligibility_type
     *
     * @return $this
     */
    public function setEligibilityType($eligibility_type)
    {
        $this->container['eligibility_type'] = $eligibility_type;

        return $this;
    }

    /**
     * Gets eligibility_type_relationship
     *
     * @return string|null
     */
    public function getEligibilityTypeRelationship()
    {
        return $this->container['eligibility_type_relationship'];
    }

    /**
     * Sets eligibility_type_relationship
     *
     * @param string|null $eligibility_type_relationship eligibility_type_relationship
     *
     * @return $this
     */
    public function setEligibilityTypeRelationship($eligibility_type_relationship)
    {
        $this->container['eligibility_type_relationship'] = $eligibility_type_relationship;

        return $this;
    }

    /**
     * Gets ftld_token
     *
     * @return string|null
     */
    public function getFtldToken()
    {
        return $this->container['ftld_token'];
    }

    /**
     * Sets ftld_token
     *
     * @param string|null $ftld_token ftld_token
     *
     * @return $this
     */
    public function setFtldToken($ftld_token)
    {
        $this->container['ftld_token'] = $ftld_token;

        return $this;
    }

    /**
     * Gets id_number
     *
     * @return string|null
     */
    public function getIdNumber()
    {
        return $this->container['id_number'];
    }

    /**
     * Sets id_number
     *
     * @param string|null $id_number id_number
     *
     * @return $this
     */
    public function setIdNumber($id_number)
    {
        $this->container['id_number'] = $id_number;

        return $this;
    }

    /**
     * Gets id_type
     *
     * @return string|null
     */
    public function getIdType()
    {
        return $this->container['id_type'];
    }

    /**
     * Sets id_type
     *
     * @param string|null $id_type id_type
     *
     * @return $this
     */
    public function setIdType($id_type)
    {
        $this->container['id_type'] = $id_type;

        return $this;
    }

    /**
     * Gets idn_script
     *
     * @return string|null
     */
    public function getIdnScript()
    {
        return $this->container['idn_script'];
    }

    /**
     * Sets idn_script
     *
     * @param string|null $idn_script idn_script
     *
     * @return $this
     */
    public function setIdnScript($idn_script)
    {
        $this->container['idn_script'] = $idn_script;

        return $this;
    }

    /**
     * Gets insurance_acceptance
     *
     * @return string|null
     */
    public function getInsuranceAcceptance()
    {
        return $this->container['insurance_acceptance'];
    }

    /**
     * Sets insurance_acceptance
     *
     * @param string|null $insurance_acceptance insurance_acceptance
     *
     * @return $this
     */
    public function setInsuranceAcceptance($insurance_acceptance)
    {
        $this->container['insurance_acceptance'] = $insurance_acceptance;

        return $this;
    }

    /**
     * Gets intended_use
     *
     * @return string|null
     */
    public function getIntendedUse()
    {
        return $this->container['intended_use'];
    }

    /**
     * Sets intended_use
     *
     * @param string|null $intended_use intended_use
     *
     * @return $this
     */
    public function setIntendedUse($intended_use)
    {
        $this->container['intended_use'] = $intended_use;

        return $this;
    }

    /**
     * Gets law_acceptance
     *
     * @return string|null
     */
    public function getLawAcceptance()
    {
        return $this->container['law_acceptance'];
    }

    /**
     * Sets law_acceptance
     *
     * @param string|null $law_acceptance law_acceptance
     *
     * @return $this
     */
    public function setLawAcceptance($law_acceptance)
    {
        $this->container['law_acceptance'] = $law_acceptance;

        return $this;
    }

    /**
     * Gets legal_type
     *
     * @return string|null
     */
    public function getLegalType()
    {
        return $this->container['legal_type'];
    }

    /**
     * Sets legal_type
     *
     * @param string|null $legal_type legal_type
     *
     * @return $this
     */
    public function setLegalType($legal_type)
    {
        $this->container['legal_type'] = $legal_type;

        return $this;
    }

    /**
     * Gets maintainer
     *
     * @return string|null
     */
    public function getMaintainer()
    {
        return $this->container['maintainer'];
    }

    /**
     * Sets maintainer
     *
     * @param string|null $maintainer maintainer
     *
     * @return $this
     */
    public function setMaintainer($maintainer)
    {
        $this->container['maintainer'] = $maintainer;

        return $this;
    }

    /**
     * Gets membership_id
     *
     * @return string|null
     */
    public function getMembershipId()
    {
        return $this->container['membership_id'];
    }

    /**
     * Sets membership_id
     *
     * @param string|null $membership_id membership_id
     *
     * @return $this
     */
    public function setMembershipId($membership_id)
    {
        $this->container['membership_id'] = $membership_id;

        return $this;
    }

    /**
     * Gets mobile_phone_number_verification
     *
     * @return string|null
     */
    public function getMobilePhoneNumberVerification()
    {
        return $this->container['mobile_phone_number_verification'];
    }

    /**
     * Sets mobile_phone_number_verification
     *
     * @param string|null $mobile_phone_number_verification mobile_phone_number_verification
     *
     * @return $this
     */
    public function setMobilePhoneNumberVerification($mobile_phone_number_verification)
    {
        $this->container['mobile_phone_number_verification'] = $mobile_phone_number_verification;

        return $this;
    }

    /**
     * Gets ngo_ong_eligibility_acceptance
     *
     * @return string|null
     */
    public function getNgoOngEligibilityAcceptance()
    {
        return $this->container['ngo_ong_eligibility_acceptance'];
    }

    /**
     * Sets ngo_ong_eligibility_acceptance
     *
     * @param string|null $ngo_ong_eligibility_acceptance ngo_ong_eligibility_acceptance
     *
     * @return $this
     */
    public function setNgoOngEligibilityAcceptance($ngo_ong_eligibility_acceptance)
    {
        $this->container['ngo_ong_eligibility_acceptance'] = $ngo_ong_eligibility_acceptance;

        return $this;
    }

    /**
     * Gets ngo_ong_policy_acceptance
     *
     * @return string|null
     */
    public function getNgoOngPolicyAcceptance()
    {
        return $this->container['ngo_ong_policy_acceptance'];
    }

    /**
     * Sets ngo_ong_policy_acceptance
     *
     * @param string|null $ngo_ong_policy_acceptance ngo_ong_policy_acceptance
     *
     * @return $this
     */
    public function setNgoOngPolicyAcceptance($ngo_ong_policy_acceptance)
    {
        $this->container['ngo_ong_policy_acceptance'] = $ngo_ong_policy_acceptance;

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
     * Gets rurf_blocked_domains
     *
     * @return string|null
     */
    public function getRurfBlockedDomains()
    {
        return $this->container['rurf_blocked_domains'];
    }

    /**
     * Sets rurf_blocked_domains
     *
     * @param string|null $rurf_blocked_domains rurf_blocked_domains
     *
     * @return $this
     */
    public function setRurfBlockedDomains($rurf_blocked_domains)
    {
        $this->container['rurf_blocked_domains'] = $rurf_blocked_domains;

        return $this;
    }

    /**
     * Gets send_verification_email
     *
     * @return string|null
     */
    public function getSendVerificationEmail()
    {
        return $this->container['send_verification_email'];
    }

    /**
     * Sets send_verification_email
     *
     * @param string|null $send_verification_email send_verification_email
     *
     * @return $this
     */
    public function setSendVerificationEmail($send_verification_email)
    {
        $this->container['send_verification_email'] = $send_verification_email;

        return $this;
    }

    /**
     * Gets trademark_id
     *
     * @return string|null
     */
    public function getTrademarkId()
    {
        return $this->container['trademark_id'];
    }

    /**
     * Sets trademark_id
     *
     * @param string|null $trademark_id trademark_id
     *
     * @return $this
     */
    public function setTrademarkId($trademark_id)
    {
        $this->container['trademark_id'] = $trademark_id;

        return $this;
    }

    /**
     * Gets travel_acceptance
     *
     * @return string|null
     */
    public function getTravelAcceptance()
    {
        return $this->container['travel_acceptance'];
    }

    /**
     * Sets travel_acceptance
     *
     * @param string|null $travel_acceptance travel_acceptance
     *
     * @return $this
     */
    public function setTravelAcceptance($travel_acceptance)
    {
        $this->container['travel_acceptance'] = $travel_acceptance;

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


