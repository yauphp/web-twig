<?php
namespace Yauphp\Web\Twig\Filters;

use Yauphp\Common\Util\DateTimeUtils;

/**
 * Twig格式化过滤器
 * @author Tomix
 *
 */
class TimestampFormat
{
    /**
     * 根据时区格式化时间戳
     * @param number $timestamp
     * @param unknown $timeZoneId
     * @param string $format
     * @return unknown
     */
    public static function format($timestamp=0, $timeZoneId=null, $format="Y-m-d H:i:s"){

        return DateTimeUtils::formatTimestamp($format,$timestamp,$timeZoneId);
    }
}

