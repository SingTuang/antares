<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\FlexApi\V1;

use Twilio\Options;
use Twilio\Values;

abstract class ConfigurationOptions {
    /**
     * @param string $uiVersion Pinned UI version
     * @return FetchConfigurationOptions Options builder
     */
    public static function fetch($uiVersion = Values::NONE) {
        return new FetchConfigurationOptions($uiVersion);
    }
}

class FetchConfigurationOptions extends Options {
    /**
     * @param string $uiVersion Pinned UI version
     */
    public function __construct($uiVersion = Values::NONE) {
        $this->options['uiVersion'] = $uiVersion;
    }

    /**
     * Pinned UI version
     * 
     * @param string $uiVersion Pinned UI version
     * @return $this Fluent Builder
     */
    public function setUiVersion($uiVersion) {
        $this->options['uiVersion'] = $uiVersion;
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
        return '[Twilio.FlexApi.V1.FetchConfigurationOptions ' . implode(' ', $options) . ']';
    }
}