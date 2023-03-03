<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Video\V1;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class CompositionOptions {
    /**
     * @param string $status Only show Compositions with the given status.
     * @param \DateTime $dateCreatedAfter Only show Compositions created on or
     *                                    after this ISO8601 date-time with
     *                                    timezone.
     * @param \DateTime $dateCreatedBefore Only show Compositions created before
     *                                     this ISO8601 date-time with timezone.
     * @param string $roomSid Only show Compositions with the given Room SID.
     * @return ReadCompositionOptions Options builder
     */
    public static function read($status = Values::NONE, $dateCreatedAfter = Values::NONE, $dateCreatedBefore = Values::NONE, $roomSid = Values::NONE) {
        return new ReadCompositionOptions($status, $dateCreatedAfter, $dateCreatedBefore, $roomSid);
    }

    /**
     * @param array $videoLayout The JSON video layout description.
     * @param string $audioSources A list of audio sources related to this
     *                             Composition.
     * @param string $audioSourcesExcluded A list of audio sources excluded related
     *                                     to this Composition.
     * @param string $resolution Pixel resolution of the composed video.
     * @param string $format Container format of the Composition media file. Any of
     *                       the following: `mp4`, `webm`.
     * @param string $statusCallback A URL that Twilio sends asynchronous webhook
     *                               requests to on every composition event.
     * @param string $statusCallbackMethod HTTP method Twilio should use when
     *                                     requesting the above URL.
     * @param boolean $trim Boolean flag for clipping intervals that have no media.
     * @return CreateCompositionOptions Options builder
     */
    public static function create($videoLayout = Values::NONE, $audioSources = Values::NONE, $audioSourcesExcluded = Values::NONE, $resolution = Values::NONE, $format = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $trim = Values::NONE) {
        return new CreateCompositionOptions($videoLayout, $audioSources, $audioSourcesExcluded, $resolution, $format, $statusCallback, $statusCallbackMethod, $trim);
    }
}

class ReadCompositionOptions extends Options {
    /**
     * @param string $status Only show Compositions with the given status.
     * @param \DateTime $dateCreatedAfter Only show Compositions created on or
     *                                    after this ISO8601 date-time with
     *                                    timezone.
     * @param \DateTime $dateCreatedBefore Only show Compositions created before
     *                                     this ISO8601 date-time with timezone.
     * @param string $roomSid Only show Compositions with the given Room SID.
     */
    public function __construct($status = Values::NONE, $dateCreatedAfter = Values::NONE, $dateCreatedBefore = Values::NONE, $roomSid = Values::NONE) {
        $this->options['status'] = $status;
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        $this->options['roomSid'] = $roomSid;
    }

    /**
     * Only show Compositions with the given status.
     * 
     * @param string $status Only show Compositions with the given status.
     * @return $this Fluent Builder
     */
    public function setStatus($status) {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * Only show Compositions created on or after this ISO8601 date-time with timezone, given as `YYYY-MM-DDThh:mm:ss+|-hh:mm` or `YYYY-MM-DDThh:mm:ssZ`.
     * 
     * @param \DateTime $dateCreatedAfter Only show Compositions created on or
     *                                    after this ISO8601 date-time with
     *                                    timezone.
     * @return $this Fluent Builder
     */
    public function setDateCreatedAfter($dateCreatedAfter) {
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        return $this;
    }

    /**
     * Only show Compositions created before this ISO8601 date-time with timezone, given as `YYYY-MM-DDThh:mm:ss+|-hh:mm` or `YYYY-MM-DDThh:mm:ssZ`.
     * 
     * @param \DateTime $dateCreatedBefore Only show Compositions created before
     *                                     this ISO8601 date-time with timezone.
     * @return $this Fluent Builder
     */
    public function setDateCreatedBefore($dateCreatedBefore) {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        return $this;
    }

    /**
     * Only show Compositions with the given Room SID.
     * 
     * @param string $roomSid Only show Compositions with the given Room SID.
     * @return $this Fluent Builder
     */
    public function setRoomSid($roomSid) {
        $this->options['roomSid'] = $roomSid;
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
        return '[Twilio.Video.V1.ReadCompositionOptions ' . implode(' ', $options) . ']';
    }
}

class CreateCompositionOptions extends Options {
    /**
     * @param array $videoLayout The JSON video layout description.
     * @param string $audioSources A list of audio sources related to this
     *                             Composition.
     * @param string $audioSourcesExcluded A list of audio sources excluded related
     *                                     to this Composition.
     * @param string $resolution Pixel resolution of the composed video.
     * @param string $format Container format of the Composition media file. Any of
     *                       the following: `mp4`, `webm`.
     * @param string $statusCallback A URL that Twilio sends asynchronous webhook
     *                               requests to on every composition event.
     * @param string $statusCallbackMethod HTTP method Twilio should use when
     *                                     requesting the above URL.
     * @param boolean $trim Boolean flag for clipping intervals that have no media.
     */
    public function __construct($videoLayout = Values::NONE, $audioSources = Values::NONE, $audioSourcesExcluded = Values::NONE, $resolution = Values::NONE, $format = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $trim = Values::NONE) {
        $this->options['videoLayout'] = $videoLayout;
        $this->options['audioSources'] = $audioSources;
        $this->options['audioSourcesExcluded'] = $audioSourcesExcluded;
        $this->options['resolution'] = $resolution;
        $this->options['format'] = $format;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        $this->options['trim'] = $trim;
    }

    /**
     * A JSON object defining the video layout of the Composition in terms of regions. See the section [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) below for further information.
     * 
     * @param array $videoLayout The JSON video layout description.
     * @return $this Fluent Builder
     */
    public function setVideoLayout($videoLayout) {
        $this->options['videoLayout'] = $videoLayout;
        return $this;
    }

    /**
     * An array of audio sources to merge. All the specified sources must belong to the same Group Room. It can include: 

    * Zero or more `RecordingTrackSid`
    * Zero or more `MediaTrackSid`
    * Zero or more `ParticipantSid`
    * Zero or more Track names. These can be specified using wildcards (e.g. `student*`). The use of `[*]` has semantics "all if any" meaning zero or more (i.e. all) depending on whether the target room had audio tracks.
     * 
     * @param string $audioSources A list of audio sources related to this
     *                             Composition.
     * @return $this Fluent Builder
     */
    public function setAudioSources($audioSources) {
        $this->options['audioSources'] = $audioSources;
        return $this;
    }

    /**
     * An array of audio sources to exclude from the Composition. Any new Composition shall include all audio sources specified in `AudioSources` except for the ones specified in `AudioSourcesExcluded`. This parameter may include: 

    * Zero or more `RecordingTrackSid`
    * Zero or more `MediaTrackSid`
    * Zero or more `ParticipantSid`
    * Zero or more Track names. These can be specified using wildcards (e.g. `student*`)
     * 
     * @param string $audioSourcesExcluded A list of audio sources excluded related
     *                                     to this Composition.
     * @return $this Fluent Builder
     */
    public function setAudioSourcesExcluded($audioSourcesExcluded) {
        $this->options['audioSourcesExcluded'] = $audioSourcesExcluded;
        return $this;
    }

    /**
     * A string representing the number of pixels for rows (width) and columns (height) of the generated composed video. This string must have the format `{width}x{height}`. This parameter must comply with the following constraints: 

    * `width >= 16 && width <= 1280`
    * `height >= 16 && height <= 1280`
    * `width * height <= 921,600`

    Typical values are: 

    * HD = `1280x720`
    * PAL = `1024x576`
    * VGA = `640x480`
    * CIF = `320x240`

    Note that the `Resolution` implicitly imposes an aspect ratio to the resulting composition. When the original video tracks get constrained by this aspect ratio they are scaled-down to fit. You can find detailed information in the [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) section. Defaults to `640x480`.
     * 
     * @param string $resolution Pixel resolution of the composed video.
     * @return $this Fluent Builder
     */
    public function setResolution($resolution) {
        $this->options['resolution'] = $resolution;
        return $this;
    }

    /**
     * Container format of the Composition media file. Can be any of the following: `mp4`, `webm`. The use of `mp4` or `webm` makes mandatory the specification of `AudioSources` and/or one `VideoLayout` element containing a valid `video_sources` list, otherwise an error is fired. Defaults to `webm`.
     * 
     * @param string $format Container format of the Composition media file. Any of
     *                       the following: `mp4`, `webm`.
     * @return $this Fluent Builder
     */
    public function setFormat($format) {
        $this->options['format'] = $format;
        return $this;
    }

    /**
     * A URL that Twilio sends asynchronous webhook requests to on every composition event. If not provided, status callback events will not be dispatched.
     * 
     * @param string $statusCallback A URL that Twilio sends asynchronous webhook
     *                               requests to on every composition event.
     * @return $this Fluent Builder
     */
    public function setStatusCallback($statusCallback) {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * HTTP method Twilio should use when requesting the above URL. Defaults to `POST`.
     * 
     * @param string $statusCallbackMethod HTTP method Twilio should use when
     *                                     requesting the above URL.
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod($statusCallbackMethod) {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        return $this;
    }

    /**
     * When activated, clips all the Composition intervals where there is no active media. This results in shorter compositions in cases when the Room was created but no Participant joined for some time, or if all the Participants left the room and joined at a later stage, as those gaps will be removed. You can find further information in the [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) section. Defaults to `true`.
     * 
     * @param boolean $trim Boolean flag for clipping intervals that have no media.
     * @return $this Fluent Builder
     */
    public function setTrim($trim) {
        $this->options['trim'] = $trim;
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
        return '[Twilio.Video.V1.CreateCompositionOptions ' . implode(' ', $options) . ']';
    }
}