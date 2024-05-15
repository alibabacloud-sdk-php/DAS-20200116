<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The cold storage duration.
     *
     * @example true
     *
     * @var bool
     */
    public $coldEnable;

    /**
     * @description The cold storage duration.
     *
     * @example 23
     *
     * @var int
     */
    public $coldRetention;

    /**
     * @description The time when cold storage was enabled.
     *
     * @example 1683712800000
     *
     * @var int
     */
    public $coldStartTime;

    /**
     * @description The version of the collector.
     *
     * @example MYSQL_V3
     *
     * @var string
     */
    public $collectorVersion;

    /**
     * @description Indicates whether hot storage was enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $hotEnable;

    /**
     * @description The hot storage duration.
     *
     * @example 7
     *
     * @var int
     */
    public $hotRetention;

    /**
     * @description The time when hot storage was enabled.
     *
     * @example 1683712800000
     *
     * @var int
     */
    public $hotStartTime;

    /**
     * @description A reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $logFilter;

    /**
     * @description Indicates whether SQL Explorer and Audit was enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $requestEnable;

    /**
     * @description The time when SQL Explorer and Audit was enabled.
     *
     * @example 1683712800000
     *
     * @var int
     */
    public $requestStartTime;

    /**
     * @description The time when SQL Explorer and Audit was disabled.
     *
     * >  If DAS Enterprise Edition V1 was enabled, this parameter indicates the time when DAS Enterprise Edition expired.
     * @example 1715335200000
     *
     * @var int
     */
    public $requestStopTime;

    /**
     * @description The storage duration of the SQL Explorer and Audit data.
     *
     * @example 30
     *
     * @var int
     */
    public $retention;

    /**
     * @description Indicates whether DAS Enterprise Edition was enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $sqlLogEnable;

    /**
     * @description The status of data migration.
     *
     * @example FINISH
     *
     * @var string
     */
    public $sqlLogState;

    /**
     * @description The time when SQL Explorer and Audit was enabled.
     *
     * @example 1683712800000
     *
     * @var int
     */
    public $sqlLogVisibleTime;

    /**
     * @description The supported versions of Database Autonomy Service (DAS) Enterprise Edition.
     *
     * @example SQL_LOG_V3
     *
     * @var string
     */
    public $supportVersion;

    /**
     * @description The version of SQL Explorer and Audit.
     *
     * @example SQL_LOG_V3
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'coldEnable'        => 'ColdEnable',
        'coldRetention'     => 'ColdRetention',
        'coldStartTime'     => 'ColdStartTime',
        'collectorVersion'  => 'CollectorVersion',
        'hotEnable'         => 'HotEnable',
        'hotRetention'      => 'HotRetention',
        'hotStartTime'      => 'HotStartTime',
        'logFilter'         => 'LogFilter',
        'requestEnable'     => 'RequestEnable',
        'requestStartTime'  => 'RequestStartTime',
        'requestStopTime'   => 'RequestStopTime',
        'retention'         => 'Retention',
        'sqlLogEnable'      => 'SqlLogEnable',
        'sqlLogState'       => 'SqlLogState',
        'sqlLogVisibleTime' => 'SqlLogVisibleTime',
        'supportVersion'    => 'SupportVersion',
        'version'           => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coldEnable) {
            $res['ColdEnable'] = $this->coldEnable;
        }
        if (null !== $this->coldRetention) {
            $res['ColdRetention'] = $this->coldRetention;
        }
        if (null !== $this->coldStartTime) {
            $res['ColdStartTime'] = $this->coldStartTime;
        }
        if (null !== $this->collectorVersion) {
            $res['CollectorVersion'] = $this->collectorVersion;
        }
        if (null !== $this->hotEnable) {
            $res['HotEnable'] = $this->hotEnable;
        }
        if (null !== $this->hotRetention) {
            $res['HotRetention'] = $this->hotRetention;
        }
        if (null !== $this->hotStartTime) {
            $res['HotStartTime'] = $this->hotStartTime;
        }
        if (null !== $this->logFilter) {
            $res['LogFilter'] = $this->logFilter;
        }
        if (null !== $this->requestEnable) {
            $res['RequestEnable'] = $this->requestEnable;
        }
        if (null !== $this->requestStartTime) {
            $res['RequestStartTime'] = $this->requestStartTime;
        }
        if (null !== $this->requestStopTime) {
            $res['RequestStopTime'] = $this->requestStopTime;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->sqlLogEnable) {
            $res['SqlLogEnable'] = $this->sqlLogEnable;
        }
        if (null !== $this->sqlLogState) {
            $res['SqlLogState'] = $this->sqlLogState;
        }
        if (null !== $this->sqlLogVisibleTime) {
            $res['SqlLogVisibleTime'] = $this->sqlLogVisibleTime;
        }
        if (null !== $this->supportVersion) {
            $res['SupportVersion'] = $this->supportVersion;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColdEnable'])) {
            $model->coldEnable = $map['ColdEnable'];
        }
        if (isset($map['ColdRetention'])) {
            $model->coldRetention = $map['ColdRetention'];
        }
        if (isset($map['ColdStartTime'])) {
            $model->coldStartTime = $map['ColdStartTime'];
        }
        if (isset($map['CollectorVersion'])) {
            $model->collectorVersion = $map['CollectorVersion'];
        }
        if (isset($map['HotEnable'])) {
            $model->hotEnable = $map['HotEnable'];
        }
        if (isset($map['HotRetention'])) {
            $model->hotRetention = $map['HotRetention'];
        }
        if (isset($map['HotStartTime'])) {
            $model->hotStartTime = $map['HotStartTime'];
        }
        if (isset($map['LogFilter'])) {
            $model->logFilter = $map['LogFilter'];
        }
        if (isset($map['RequestEnable'])) {
            $model->requestEnable = $map['RequestEnable'];
        }
        if (isset($map['RequestStartTime'])) {
            $model->requestStartTime = $map['RequestStartTime'];
        }
        if (isset($map['RequestStopTime'])) {
            $model->requestStopTime = $map['RequestStopTime'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['SqlLogEnable'])) {
            $model->sqlLogEnable = $map['SqlLogEnable'];
        }
        if (isset($map['SqlLogState'])) {
            $model->sqlLogState = $map['SqlLogState'];
        }
        if (isset($map['SqlLogVisibleTime'])) {
            $model->sqlLogVisibleTime = $map['SqlLogVisibleTime'];
        }
        if (isset($map['SupportVersion'])) {
            $model->supportVersion = $map['SupportVersion'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
