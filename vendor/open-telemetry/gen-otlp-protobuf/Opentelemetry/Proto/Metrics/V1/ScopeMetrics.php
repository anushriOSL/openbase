<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/metrics/v1/metrics.proto

namespace Opentelemetry\Proto\Metrics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of Metrics produced by an Scope.
 *
 * Generated from protobuf message <code>opentelemetry.proto.metrics.v1.ScopeMetrics</code>
 */
class ScopeMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * The instrumentation scope information for the metrics in this message.
     * Semantically when InstrumentationScope isn't set, it is equivalent with
     * an empty instrumentation scope name (unknown).
     *
     * Generated from protobuf field <code>.opentelemetry.proto.common.v1.InstrumentationScope scope = 1;</code>
     */
    protected $scope = null;
    /**
     * A list of metrics that originate from an instrumentation library.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.metrics.v1.Metric metrics = 2;</code>
     */
    private $metrics;
    /**
     * The Schema URL, if known. This is the identifier of the Schema that the metric data
     * is recorded in. To learn more about Schema URL see
     * https://opentelemetry.io/docs/specs/otel/schemas/#schema-url
     * This schema_url applies to all metrics in the "metrics" field.
     *
     * Generated from protobuf field <code>string schema_url = 3;</code>
     */
    protected $schema_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Opentelemetry\Proto\Common\V1\InstrumentationScope $scope
     *           The instrumentation scope information for the metrics in this message.
     *           Semantically when InstrumentationScope isn't set, it is equivalent with
     *           an empty instrumentation scope name (unknown).
     *     @type \Opentelemetry\Proto\Metrics\V1\Metric[]|\Google\Protobuf\Internal\RepeatedField $metrics
     *           A list of metrics that originate from an instrumentation library.
     *     @type string $schema_url
     *           The Schema URL, if known. This is the identifier of the Schema that the metric data
     *           is recorded in. To learn more about Schema URL see
     *           https://opentelemetry.io/docs/specs/otel/schemas/#schema-url
     *           This schema_url applies to all metrics in the "metrics" field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Metrics\V1\Metrics::initOnce();
        parent::__construct($data);
    }

    /**
     * The instrumentation scope information for the metrics in this message.
     * Semantically when InstrumentationScope isn't set, it is equivalent with
     * an empty instrumentation scope name (unknown).
     *
     * Generated from protobuf field <code>.opentelemetry.proto.common.v1.InstrumentationScope scope = 1;</code>
     * @return \Opentelemetry\Proto\Common\V1\InstrumentationScope|null
     */
    public function getScope()
    {
        return $this->scope;
    }

    public function hasScope()
    {
        return isset($this->scope);
    }

    public function clearScope()
    {
        unset($this->scope);
    }

    /**
     * The instrumentation scope information for the metrics in this message.
     * Semantically when InstrumentationScope isn't set, it is equivalent with
     * an empty instrumentation scope name (unknown).
     *
     * Generated from protobuf field <code>.opentelemetry.proto.common.v1.InstrumentationScope scope = 1;</code>
     * @param \Opentelemetry\Proto\Common\V1\InstrumentationScope $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkMessage($var, \Opentelemetry\Proto\Common\V1\InstrumentationScope::class);
        $this->scope = $var;

        return $this;
    }

    /**
     * A list of metrics that originate from an instrumentation library.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.metrics.v1.Metric metrics = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * A list of metrics that originate from an instrumentation library.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.metrics.v1.Metric metrics = 2;</code>
     * @param \Opentelemetry\Proto\Metrics\V1\Metric[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opentelemetry\Proto\Metrics\V1\Metric::class);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * The Schema URL, if known. This is the identifier of the Schema that the metric data
     * is recorded in. To learn more about Schema URL see
     * https://opentelemetry.io/docs/specs/otel/schemas/#schema-url
     * This schema_url applies to all metrics in the "metrics" field.
     *
     * Generated from protobuf field <code>string schema_url = 3;</code>
     * @return string
     */
    public function getSchemaUrl()
    {
        return $this->schema_url;
    }

    /**
     * The Schema URL, if known. This is the identifier of the Schema that the metric data
     * is recorded in. To learn more about Schema URL see
     * https://opentelemetry.io/docs/specs/otel/schemas/#schema-url
     * This schema_url applies to all metrics in the "metrics" field.
     *
     * Generated from protobuf field <code>string schema_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSchemaUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->schema_url = $var;

        return $this;
    }

}

