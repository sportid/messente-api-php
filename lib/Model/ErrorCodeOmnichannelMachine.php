<?php
/**
 * ErrorCodeOmnichannelMachine
 *
 * PHP version 5
 *
 * @category Class
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Messente API
 *
 * [Messente](https://messente.com) is a global provider of messaging and user verification services.  * Send and receive SMS, Viber, WhatsApp and Telegram messages. * Manage contacts and groups. * Fetch detailed info about phone numbers. * Blacklist phone numbers to make sure you're not sending any unwanted messages.  Messente builds [tools](https://messente.com/documentation) to help organizations connect their services to people anywhere in the world.
 *
 * The version of the OpenAPI document: 1.2.0
 * Contact: messente@messente.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Api\Model;
use \Messente\Api\ObjectSerializer;

/**
 * ErrorCodeOmnichannelMachine Class Doc Comment
 *
 * @category Class
 * @description Machine-readable error code, &#39;null&#39; when the message has not been processed yet  Matches the following meanings    * 0 - No error   * 1 - Delivery failure   * 2 - Sending message expired   * 3 - Invalid number   * 4 - Error crediting account   * 5 - Invalid number format   * 6 - Too many identical messages   * 7 - Sender name not allowed   * 8 - Operator blacklisted   * 9 - Unroutable   * 10 - Seen   * 999 - General temporary error
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ErrorCodeOmnichannelMachine
{
    /**
     * Possible values of this enum
     */
    const 0 = 0;
    const 1 = 1;
    const 2 = 2;
    const 3 = 3;
    const 4 = 4;
    const 5 = 5;
    const 6 = 6;
    const 7 = 7;
    const 8 = 8;
    const 9 = 9;
    const 10 = 10;
    const 999 = 999;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::0,
            self::1,
            self::2,
            self::3,
            self::4,
            self::5,
            self::6,
            self::7,
            self::8,
            self::9,
            self::10,
            self::999,
        ];
    }
}


