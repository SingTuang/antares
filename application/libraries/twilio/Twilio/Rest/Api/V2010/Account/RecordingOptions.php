<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Options;
use Twilio\Values;

abstract class RecordingOptions {
    /**
     * @param string $dateCreatedBefore The `YYYY-MM-DD` value of the resources to
     *                                  read
     * @param string $dateCreated The `YYYY-MM-DD` value of the resources to read
     * @param string $dateCreatedAfter The `YYYY-MM-DD` value of the resources to
     *                                 read
     * @param string $callSid The Call SID of the resources to read
     * @param string $conferenceSid Read by unique Conference SID for the recording
     * @return ReadRecordingOptions Options builder
     */
    public static function read($dateCreatedBefore = Values::NONE, $dateCreated = Values::NONE, $dateCreatedAfter = Values::NONE, $callSid = Values::NONE, $conferenceSid = Values::NONE) {
        return new ReadRecordingOptions($dateCreatedBefore, $dateCreated, $dateCreatedAfter, $callSid, $conferenceSid);
    }
}

class ReadRecordingOptions extends Options {
    /**
     * @param string $dateCreatedBefore The `YYYY-MM-DD` value of the resources to
     *                                  read
     * @param string $dateCreated The `YYYY-MM-DD` value of the resources to read
     * @param string $dateCreatedAfter The `YYYY-MM-DD` value of the resources to
     *                                 read
     * @param string $callSid The Call SID of the resources to read
     * @param string $conferenceSid Read by unique Conference SID for the recording
     */
    public function __construct($dateCreatedBefore = Values::NONE, $dateCreated = Values::NONE, $dateCreatedAfter = Values::NONE, $callSid = Values::NONE, $conferenceSid = Values::NONE) {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        $this->options['callSid'] = $callSid;
        $this->options['conferenceSid'] = $conferenceSid;
    }

    /**
     * The `date_created` value, specified as `YYYY-MM-DD`, of the resources to read. You can also specify inequality: `DateCreated<=YYYY-MM-DD` will return recordings generated at or before midnight on a given date, and `DateCreated>=YYYY-MM-DD` returns recordings generated at or after midnight on a date.
     * 
     * @param string $dateCreatedBefore The `YYYY-MM-DD` value of the resources to
     *                                  read
     * @return $this Fluent Builder
     */
    public function setDateCreatedBefore($dateCreatedBefore) {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        return $this;
    }

    /**
     * The `date_created` value, specified as `YYYY-MM-DD`, of the resources to read. You can also specify inequality: `DateCreated<=YYYY-MM-DD` will return recordings generated at or before midnight on a given date, and `DateCreated>=YYYY-MM-DD` returns recordings generated at or after midnight on a date.
     * 
     * @param string $dateCreated The `YYYY-MM-DD` value of the resources to read
     * @return $this Fluent Builder
     */
    public function setDateCreated($dateCreated) {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * The `date_created` value, specified as `YYYY-MM-DD`, of the resources to read. You can also specify inequality: `DateCreated<=YYYY-MM-DD` will return recordings generated at or before midnight on a given date, and `DateCreated>=YYYY-MM-DD` returns recordings generated at or after midnight on a date.
     * 
     * @param string $dateCreatedAfter The `YYYY-MM-DD` value of the resources to
     *                                 read
     * @return $this Fluent Builder
     */
    public function setDateCreatedAfter($dateCreatedAfter) {
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        return $this;
    }

    /**
     * The [Call](https://www.twilio.com/docs/api/voice/call) SID of the resources to read.
     * 
     * @param string $callSid The Call SID of the resources to read
     * @return $this Fluent Builder
     */
    public function setCallSid($callSid) {
        $this->options['callSid'] = $callSid;
        return $this;
    }

    /**
     * The Conference SID that identifies the conference associated with the recording to read.
     * 
     * @param string $conferenceSid Read by unique Conference SID for the recording
     * @return $this Fluent Builder
     */
    public function setConferenceSid($conferenceSid) {
        $this->options['conferenceSid'] = $conferenceSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Api.V2010.ReadRecordingOptions ' . implode(' ', $options) . ']';
    }
}