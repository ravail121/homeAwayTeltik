<?php

/**
 *
 * Set active css class if the specific URI is current URI
 *
 * @param string $path       A specific URI
 * @param string $class_name Css class name, optional
 * @return string            Css class name if it's current URI,
 *                           otherwise - empty string
 */
function setActive(string $path, string $class_name = "is-active", string $fall_back_classes = '')
{
    return preg_match('/^'. $path. '/', Request::path()) ? $class_name : ($fall_back_classes ?? '');
}

function setActiveNav(string $path, string $class_name = "is-active", string $fall_back_classes = '')
{
    $requestFirstSegment = request()->segment(1);
    return ($requestFirstSegment === $path || !$requestFirstSegment) ? $class_name : ($fall_back_classes ?? '');
}


function dateFormat($date)
{
    return date('m/d/Y', strtotime($date));
}

/**
 * Return total coupon amount
 * @param $coupons
 *
 * @return int|mixed
 */
function getCouponTotal($coupons)
{
    $totalCouponAmount = 0;
    foreach($coupons as $coupon) {
        if(isset($coupon['total'])) {
            $totalCouponAmount += $coupon[ 'total' ];
        }
    }
    return $totalCouponAmount;
}
