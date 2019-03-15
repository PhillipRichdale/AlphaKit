<?php
/**
 * AlphaKit PHP Utilities - General PHP Quick-Fix Utility Classes and WordPress Tools and WP Plugin Template(s)
 * Author: Phillip Richdale
 * Author URL: http://www.richdale.de/
 * License: MIT
 * PHP version 7
 *
 * @category PHP_Utilities
 * @package  AlphaKit
 * @author   Phillip Richdale <office@richdale.de>
 * @license  MIT https://github.com/PhillipRichdale/AlphaKit/blob/master/LICENSE
 * @link     https://github.com/PhillipRichdale/AlphaKit
 */

namespace AlphaKit;

/**
 * Contains all universal utlity functions that are part of AlphaKit
 *
 * @category PHP_Utilities
 * @package  AlphaKit
 * @author   Phillip Richdale <office@richdale.de>
 * @license  MIT https://github.com/PhillipRichdale/AlphaKit/blob/master/LICENSE
 * @link     https://github.com/PhillipRichdale/AlphaKit
 */
class AlphaKit
{
    private $_wpTablePrefix = false;
    private $_db;

    /**
     * Singleton - preventing mutiple instances.
     *
     * @return AlphaKit
     */
    public static function getInstance()
    {
        if ( ! isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Constructor requires reference to $wpdb to be passed
     *
     * @param wpdb $db wpdb reference
     */
    public function __construct(&$db)
    {
        $this->_db = $db;
    }
    /**
     * Checks if this WP installation is a multisite installation
     *
     * @return boolean
     */
    public function isMultisite()
    {
        //check if prefixes in DB have digits attached
    }

    /**
     * Returns the URL that was called
     *
     * @return string
     */
    public function getCalledUrl()
    {
        return (
            isset(
                $_SERVER['HTTPS']
            ) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
        ."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }

    /**
     * Returns the web root URL
     *
     * @return string
     */
    public function getRootUrl()
    {
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
        ."://$_SERVER[HTTP_HOST]";
    }

    /**
     * Takes a string and returns a string that is suitable for a slug (URL or DB)
     *
     * @param string $str The string to slugify
     *
     * @return string
     */
    public function slugify($str)
    {
        //Is there a more elegant way to do this? ... I wonder.
        return strtolower(
            str_replace(
                " ",
                "_",
                str_replace(
                    '/',
                    "-",
                    str_replace(
                        ".",
                        "-",
                        trim($str)
                    )
                )
            )
        );
    }

    /**
     * Checks if a substring is inside another string
     *
     * @param string $needle   The substring to check for
     * @param string $haystack The string to check for the substring
     *
     * @return boolean
     */
    public function isInString($needle, $haystack)
    {
        if (strpos($haystack, $needle) !== false) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Checks if current environment is a live environment or not based on the URL passed
     *
     * @param string $liveTld The TLD with a preceeding dot.
     *
     * @return boolean
     */
    public function isLive($liveTld = ".de")
    {
        $homeUrl = $this->getRootUrl();
        $rM = false;
        if ((!$this->isInString(".local", $homeUrl))
            && (!$this->isInString(".intra", $homeUrl))
            && (!$this->isInString("stage", $homeUrl))
            && (!$this->isInString("staging", $homeUrl))
            && ($this->isInString($liveTld, $homeUrl))
        ) {
            $rM = true;
        }
        return $rM;
    }

    /**
     * Validator function. Checks if a string is a valid and registered email address
     *
     * @param string $emailAddress The email address to validate
     *
     * @return boolean
     */
    public function isValidEmailAddress($emailAddress)
    {
        $isValid = true;
        $atIndex = strrpos($emailAddress, "@");

        if (is_bool($atIndex) && !$atIndex) {
            $isValid = false;
        } else {
            $domain = substr($emailAddress, $atIndex+1);
            $local = substr($emailAddress, 0, $atIndex);
            $localLen = strlen($local);
            $domainLen = strlen($domain);
            if ($localLen < 1 || $localLen > 64) {
                // local part length exceeded
                $isValid = false;
            } elseif ($domainLen < 1 || $domainLen > 255) {
                // domain part length exceeded
                $isValid = false;
            } elseif ($local[0] == '.' || $local[$localLen-1] == '.') {
                // local part starts or ends with '.'
                $isValid = false;
            } elseif (preg_match('/\\.\\./', $local)) {
                // local part has two consecutive dots
                $isValid = false;
            } elseif (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
                // character not valid in domain part
                $isValid = false;
            } elseif (preg_match('/\\.\\./', $domain)) {
                // domain part has two consecutive dots
                $isValid = false;
            } elseif (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\", "", $local))
            ) {
                // character not valid in local part unless
                // local part is quoted
                if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\", "", $local))
                ) {
                    $isValid = false;
                }
            }
            if ($isValid && !(checkdnsrr($domain, "MX") || checkdnsrr($domain, "A"))) {
                // domain not found in DNS
                $isValid = false;
            }
        }
        return $isValid;
    }

    /**
     * Converts a UTF 8 String to lowercase ascii characters.
     * This converts diacritic latin-based characters and is required
     * for filenames and slugs and such.
     *
     * @param string $string The string to convert
     *
     * @return string The converted string
     */
    public function convertDiacriticsToAscii($string)
    {
        $transliterator = Transliterator::createFromRules(
            ':: Any-Latin; :: Latin-ASCII; :: NFD; :: [:Nonspacing Mark:] Remove; :: Lower(); :: NFC;',
            Transliterator::FORWARD
        );
        return $transliterator->transliterate($string);
    }

    /**
     * @return wpdb
     */
    public function getPict()
    {
        return $this->_db;
    }

    /**
     * Sets all HTTP Header Options (apart from mime/doctype to allow cross-origin resource sharing
     *
     * @return void
     */
    public function setCorsHeader()
    {
        // Allow from any origin
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
            // you want to allow, and if so:
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');    // cache for 1 day
        }

        // Access-Control headers are received during OPTIONS requests
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                // may also be using PUT, PATCH, HEAD etc
                header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

            exit(0);
        }
    }
}
