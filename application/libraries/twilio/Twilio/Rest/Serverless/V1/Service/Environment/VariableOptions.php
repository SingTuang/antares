<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Serverless\V1\Service\Environment;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class VariableOptions {
    /**
     * @param string $key The key
     * @param string $value The value
     * @return UpdateVariableOptions Options builder
     */
    public static function update($key = Values::NONE, $value = Values::NONE) {
        return new UpdateVariableOptions($key, $value);
    }
}

class UpdateVariableOptions extends Options {
    /**
     * @param string $key The key
     * @param string $value The value
     */
    public function __construct($key = Values::NONE, $value = Values::NONE) {
        $this->options['key'] = $key;
        $this->options['value'] = $value;
    }

    /**
     * The key
     * 
     * @param string $key The key
     * @return $this Fluent Builder
     */
    public function setKey($key) {
        $this->options['key'] = $key;
        return $this;
    }

    /**
     * The value
     * 
     * @param string $value The value
     * @return $this Fluent Builder
     */
    public function setValue($value) {
        $this->options['value'] = $value;
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
        return '[Twilio.Serverless.V1.UpdateVariableOptions ' . implode(' ', $options) . ']';
    }
}