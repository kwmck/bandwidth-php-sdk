<?php
/**
 * Gather.php
 *
 * Implementation of the BXML Gather tag
 *
 *  * @copyright Bandwidth INC
 */

namespace BandwidthLib\Voice\Bxml;

require_once "Verb.php";
require_once "SpeakSentence.php";
require_once "PlayAudio.php";

class Gather extends Verb {

    /**
     * Sets the username attribute for Gather
     *
     * @param string $username The username for http authentication for the gather callback
     */
    public function username($username) {
        $this->username = $username;
    }

    /**
     * Sets the password attribute for Gather
     *
     * @param string $password The password for http authentication for the gather callback
     */
    public function password($password) {
        $this->password = $password;
    }

    /**
     * Sets the gatherUrl attribute for Gather
     *
     * @param string $gatherUrl The url to receive the gather callback 
     */
    public function gatherUrl($gatherUrl) {
        $this->gatherUrl = $gatherUrl;
    }

    /**
     * Sets the gatherMethod attribute for Gather
     *
     * @param string $gatherMethod The http method to send the gather callback 
     */
    public function gatherMethod($gatherMethod) {
        $this->gatherMethod = $gatherMethod;
    }

    /**
     * Sets the tag attribute for Gather
     *
     * @param string $tag A custom string to be included in callbacks 
     */
    public function tag($tag) {
        $this->tag = $tag;
    }

    /**
     * Sets the terminatingDigits attribute for Gather
     *
     * @param string $terminatingDigits Digits to terminate the gather
     */
    public function terminatingDigits($terminatingDigits) {
        $this->terminatingDigits = $terminatingDigits;
    }

    /**
     * Sets the maxDigits attribute for Gather
     *
     * @param int $maxDigits The maximum number of digits to collect in the gather
     */
    public function maxDigits($maxDigits) {
        $this->maxDigits = $maxDigits;
    }

    /**
     * Sets the interDigitTimeout attribute for Gather
     *
     * @param int $interDigitTimeout The time in secods between digit presses before timing out
     */
    public function interDigitTimeout($interDigitTimeout) {
        $this->interDigitTimeout = $interDigitTimeout;
    }

    /**
     * Sets the firstDigitTimeout attribute for Gather
     *
     * @param int $firstDigitTimeout The time in seconds before the first digit is pressed before timing out
     */
    public function firstDigitTimeout($firstDigitTimeout) {
        $this->firstDigitTimeout = $firstDigitTimeout;
    }

    /**
     * Sets the PlayAudio tag for Gather
     *
     * @param PlayAudio $playAudio The PlayAudio tag to include in the Gather
     */
    public function playAudio($playAudio) {
        $this->playAudio = $playAudio;
    }

    /**
     * Sets the repeatCount attribute for the Gather
     *
     * @param int $repeatCount The number of times to repeat the played audio
     */
    public function repeatCount($repeatCount) {
        $this->repeatCount = $repeatCount;
    }

    /**
     * Sets the SpeakSentence tag for Gather
     *
     * @param SpeakSentence $speakSentence The SpeakSentence tag to include in the Gather
     */
    public function speakSentence($speakSentence) {
        $this->speakSentence = $speakSentence;
    }

    public function toBxml($doc) {
        $element = $doc->createElement("Gather");

        if(isset($this->username)) {
            $element->setAttribute("username", $this->username);
        }

        if(isset($this->password)) {
            $element->setAttribute("password", $this->password);
        }

        if(isset($this->tag)) {
            $element->setAttribute("tag", $this->tag);
        }

        if(isset($this->gatherUrl)) {
            $element->setAttribute("gatherUrl", $this->gatherUrl);
        }

        if(isset($this->gatherMethod)) {
            $element->setAttribute("gatherMethod", $this->gatherMethod);
        }

        if(isset($this->terminatingDigits)) {
            $element->setAttribute("terminatingDigits", $this->terminatingDigits);
        }

        if(isset($this->maxDigits)) {
            $element->setAttribute("maxDigits", $this->maxDigits);
        }

        if(isset($this->interDigitTimeout)) {
            $element->setAttribute("interDigitTimeout", $this->interDigitTimeout);
        }

        if(isset($this->firstDigitTimeout)) {
            $element->setAttribute("firstDigitTimeout", $this->firstDigitTimeout);
        }

        if(isset($this->repeatCount)) {
            $element->setAttribute("repeatCount", $this->repeatCount);
        }
        
        if(isset($this->playAudio)) {
            $element->appendChild($this->playAudio->toBxml($doc));
        }

        if(isset($this->speakSentence)) {
            $element->appendChild($this->speakSentence->toBxml($doc));
        }

        return $element;
    }
}
