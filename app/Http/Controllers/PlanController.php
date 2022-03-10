<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Api\ApiResponse;
use App\Services\Cart\CartResponse;

/**
 * Class PlanController
 *
 * @package App\Http\Controllers
 */
class PlanController extends Controller
{

    /**
     *
     */
    const ACCOUNT = [
        'active'    => 0,
        'suspended' => 1
    ];

    /**
     * @var CartResponse
     */
    protected $cartItem;

    /**
     * @var ApiResponse
     */
    protected $api;


    /**
     * Model Binding
     *
     * @param CartResponse $cartResponse
     * @param ApiResponse  $apiResponse
     */
    public function __construct(CartResponse $cartResponse, ApiResponse $apiResponse)
    {
        $this->middleware('get.devices');
        $this->api      = $apiResponse;
        $this->cartItem = $cartResponse;
    }

    public function getAllPlans()
    {
        return $this->requestConnection("plans");
    }

    public function index()
    {
        $checkSession  = $this->cartItem->checkPlanExists();
        $deviceId      = session('deviceId') ?: null;
        $deviceName    = session('deviceName') ?: 'Device';

        $sessionCart = session('cart') ?: [];

        if (session('id')) {
            $customer = $this->requestConnectionForCustomer('customer', 'get');
            session('cart')['business_verification'] = $customer->toArray();
        }

        $plans         = session('planData') ?: $this->requestConnection('plans');
        $dataPlans     = $plans->filter(function($item) {

            if (($item['type'] == 2)/* && ($item['type'] == $item['carrier_id'])*/) {
                return $item;
            }
        });

        $voicePlans    = $plans->filter(function($item) {
            if (($item['type'] == 1)/* && ($item['type'] == $item['carrier_id'])*/) {
                return $item;
            }
        });

        $this->processCoupons();

        return view(
            'plans.index',
            compact('plans', 'dataPlans', 'voicePlans', 'deviceId', 'deviceName', 'checkSession', 'sessionCart')
        );
    }

    public function oneTouchPlans()
    {
        $checkSession  = $this->cartItem->checkPlanExists();
        $deviceId      = session('deviceId') ?: null;
        $deviceName    = session('deviceName') ?: 'Device';

        $sessionCart = session('cart') ?: [];

        if (session('id')) {
            $customer = $this->requestConnectionForCustomer('customer', 'get');
            session('cart')['business_verification'] = $customer->toArray();
        }

        $plans         = session('planData') ?: $this->requestConnection('plans');
        $dataPlans     = $plans->filter(function($item) {

            if (($item['type'] == 2)/* && ($item['type'] == $item['carrier_id'])*/) {
                return $item;
            }
        });

        $voicePlans    = $plans->filter(function($item) {
            if (($item['type'] == 1)/* && ($item['type'] == $item['carrier_id'])*/) {
                return $item;
            }
        });

        $this->processCoupons();

        return view(
            'plans.one-touch-plans',
            compact('plans', 'dataPlans', 'voicePlans', 'deviceId', 'deviceName', 'checkSession', 'sessionCart')
        );
    }

    public function wearable()
    {
        $checkSession  = $this->cartItem->checkPlanExists();
        $deviceId      = session('deviceId') ?: null;
        $deviceName    = session('deviceName') ?: 'Device';

        $sessionCart = session('cart') ?: [];

        if (session('id')) {
            $customer = $this->requestConnectionForCustomer('customer', 'get');
            session('cart')['business_verification'] = $customer->toArray();
        }

        $plans         = session('planData') ?: $this->requestConnection('plans');
        $dataPlans     = $plans->filter(function($item) {

            if (($item['type'] == 2)/* && ($item['type'] == $item['carrier_id'])*/) {
                return $item;
            }
        });

        $voicePlans    = $plans->filter(function($item) {
            if (($item['type'] == 1)/* && ($item['type'] == $item['carrier_id'])*/) {
                return $item;
            }
        });

        $this->processCoupons();

        return view(
            'plans.oneTouch.wearable',
            compact('plans', 'dataPlans', 'voicePlans', 'deviceId', 'deviceName', 'checkSession', 'sessionCart')
        );
    }

    public function studioMini()
    {
        $checkSession  = $this->cartItem->checkPlanExists();
        $deviceId      = session('deviceId') ?: null;
        $deviceName    = session('deviceName') ?: 'Device';

        $sessionCart = session('cart') ?: [];

        if (session('id')) {
            $customer = $this->requestConnectionForCustomer('customer', 'get');
            session('cart')['business_verification'] = $customer->toArray();
        }

        $plans         = session('planData') ?: $this->requestConnection('plans');
        $dataPlans     = $plans->filter(function($item) {

            if (($item['type'] == 2)/* && ($item['type'] == $item['carrier_id'])*/) {
                return $item;
            }
        });

        $voicePlans    = $plans->filter(function($item) {
            if (($item['type'] == 1)/* && ($item['type'] == $item['carrier_id'])*/) {
                return $item;
            }
        });

        $this->processCoupons();

        return view(
            'plans.oneTouch.studio-mini',
            compact('plans', 'dataPlans', 'voicePlans', 'deviceId', 'deviceName', 'checkSession', 'sessionCart')
        );
    }

    public function libris2()
    {
        $checkSession  = $this->cartItem->checkPlanExists();
        $deviceId      = session('deviceId') ?: null;
        $deviceName    = session('deviceName') ?: 'Device';

        $sessionCart = session('cart') ?: [];

        if (session('id')) {
            $customer = $this->requestConnectionForCustomer('customer', 'get');
            session('cart')['business_verification'] = $customer->toArray();
        }

        $plans         = session('planData') ?: $this->requestConnection('plans');
        $dataPlans     = $plans->filter(function($item) {

            if (($item['type'] == 2)/* && ($item['type'] == $item['carrier_id'])*/) {
                return $item;
            }
        });

        $voicePlans    = $plans->filter(function($item) {
            if (($item['type'] == 1)/* && ($item['type'] == $item['carrier_id'])*/) {
                return $item;
            }
        });

        $this->processCoupons();

        return view(
            'plans.oneTouch.libris-2',
            compact('plans', 'dataPlans', 'voicePlans', 'deviceId', 'deviceName', 'checkSession', 'sessionCart')
        );
    }




    /**
     * This function displays all plans irrespective of Devices
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deviceName    = 'Device';
        $deviceId      = session('deviceId') ?: null;

        $checkSession   = $this->cartItem->checkPlanExists();

        $sessionCart = session('cart') ?: [];

        $plans         = session('planData') ?: $this->requestConnection('plans');

        $dataPlans     = $plans->filter(function($item) {
            if (($item['type'] == 2) /*  && ($item['type'] == $item['carrier_id']) */) {
                return $item;
            }
        });
        $voicePlans    = $plans->filter(function($item) {
            if (($item['type'] == 1) /*  && ($item['type'] == $item['carrier_id']) */) {
                return $item;
            }
        });

        return view(
            'plans.index',
            compact('plans', 'dataPlans', 'voicePlans', 'deviceName', 'checkSession', 'sessionCart', 'deviceId')
        );
    }

    public function store(Request $request)
    {
        if ($request->bring_own_device == 'yes') {
            $request->device_id = 0;
            $response = $this->postWithDeviceId($request->device_id);

        }
        if ($request->device_id != null) {
            $response = $this->postWithDeviceId($request->device_id);

        }
        if ($request->plan_id != null) {
            $response = $this->postWithPlanId($request->plan_id);
        }




        if ($response) {
            return false;
        }

        $arrayData = $this->getData($request);
        $this->postOrder($request, $arrayData);

        if ($request->is_libre_order) {
            return [
                'cart_order_hash' => session('cart')['order_hash']
            ];
        }

        if ($request->choose_device) {
            $devices = $this->chooseDevice($request->plan_id);
            session(['deviceData' => $devices]);

            return redirect()->to('/#devices-section')->with([
                'status'     => 'success',
                'message'    => 'The <span style="color: #6004ba;">Plan</span> was added successfully. Now you can choose your respective device.'
            ]);
        }
        $this->closeOrderGroup();

        return $arrayData;
    }

    public function saveLibris(Request $request)
    {
        if ($request->bring_own_device == 'yes') {
            $request->device_id = 0;
            $response = $this->postWithDeviceId($request->device_id);

        }
        if ($request->device_id != null) {
            $response = $this->postWithDeviceId($request->device_id);

        }
        if ($request->plan_id != null) {
            $response = $this->postWithPlanId($request->plan_id);
        }


        if ($response) {
            return false;
        }

        $arrayData = $this->getData($request);
        $this->postOrder($request, $arrayData);

        if ($request->choose_device) {
            $devices = $this->chooseDevice($request->plan_id);
            session(['deviceData' => $devices]);

            return redirect()->route('devices.index')->with([
                'status'     => 'success',
                'message'    => 'The <span style="color: #6004ba;">Plan</span> was added successfully. Now you can choose your respective device.'
            ]);
        }
        $this->closeOrderGroup();

        return $arrayData;
    }




    public function show($planId)
    {
        return $this->requestConnection("plans/$planId");
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request-all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * @param $request
     *
     * @return array
     */
    protected function getData($request)
    {
        if ($request->buy_sim == 'yes') {

            $request->sim_type    = null;
            $request->sim_number  = null;
        }


        if ($request->sim_number) {
            $data = [
                'plan_id'    => $request->plan_id,
                'sim_id'     => 0,
                'order_hash' => session('hash')['order_hash'],
                'sim_type'   => $request->sim_name,
                'sim_num'    => $request->sim_number,
                'sim_required' => $request->sim_required,
                'paid_monthly_invoice' => session('paid_monthly_invoice'),
                'require_device' => $request->associate_with_device == 2 ? 1 : 0
            ];
        } else {
            $data = [
                'plan_id'    => $request->plan_id,
                'sim_id'     => $request->sim_id,
                'order_hash' => session('hash')['order_hash'],
                'paid_monthly_invoice' => session('paid_monthly_invoice'),
                'require_device' => $request->associate_with_device == 2 ? 1 : 0
            ];

        }

        if ($request->porting == 'yes') {

            $portNumber = str_replace("-", "", $request->port_number);
            $data = array_merge($data, ['porting_number' => $portNumber]);

        } elseif ($request->porting == 'no') {

            $data = array_merge($data, ['area_code' => $request->area_code]);
        }

        if (session('customer_hash')) {
            $data = array_merge($data, ['customer_hash' => session('customer_hash')]);

        }

        if ($request->bring_own_device) {
            if ($request->bring_own_device == 'yes') {
                $data = array_merge($data, [
                    'operating_system' => $request->operating_system,
                    'imei_number'      => $request->imei
                ]);

            }
        }

        return $data;
    }


    /**
     * @param $planId
     *
     * @return \App\Support\Utilities\Collection
     */
    protected function chooseDevice($planId)
    {
        $devices = $this->requestConnection('devices?plan_id='.$planId);
        $getOrder = $this->requestConnection('order?order_hash='.session('hash')['order_hash'].'&paid_monthly_invoice='.session('paid_monthly_invoice'));
        session(['cart' => $getOrder]);
        return $devices;
    }


    /**
     * @param $request
     * @param $arr
     *
     * @return bool
     */
    protected function postOrder($request, $arr)
    {
        if ($request->addon) {
            for ($i = 0; $i < count($request->addon); $i++) {
                $addon['addon_id'][$i] = $request->addon[$i];
            }
            $this->requestConnection('order', 'post', array_merge($arr, $addon));
        } else {
            $this->requestConnection('order', 'post', $arr);
        }
        return true;
    }

    /**
     * @param $deviceId
     *
     * @return false
     */
    protected function postWithDeviceId($deviceId)
    {
        if (!session('hash')) {
            $orderHash = $this->requestConnection('order', 'post', [
                'device_id' => $deviceId,
                'paid_monthly_invoice' => session('paid_monthly_invoice'),
            ]);
            session(['hash' => $orderHash]);

        } else {
            $this->requestConnection('order', 'post', [
                'device_id'  => $deviceId,
                'order_hash' => session('hash')['order_hash'],
                'paid_monthly_invoice' => session('paid_monthly_invoice'),
            ]);
        }
        return false;
    }

    /**
     * @param $planId
     *
     * @return false
     */
    protected function postWithPlanId($planId)
    {
        if (!session('hash')) {
            $orderHash = $this->requestConnection('order', 'post', [
                'plan_id' => $planId,
                'paid_monthly_invoice' => session('paid_monthly_invoice'),
            ]);
            session(['hash' => $orderHash]);

        } else {
            $this->requestConnection('order', 'post', [
                'plan_id'  => $planId,
                'order_hash' => session('hash')['order_hash'],
                'paid_monthly_invoice' => session('paid_monthly_invoice'),
            ]);
        }
        return false;
    }


    /**
     * @return bool
     */
    protected function closeOrderGroup()
    {
        $this->requestConnection('order-group', 'put', [
            'action'     => 1,
            'order_hash' => session('hash')['order_hash'],
        ]);
        $order = $this->requestConnection('order?order_hash='.session('hash')['order_hash'].'&paid_monthly_invoice='.session('paid_monthly_invoice'));

        session(['cart' => $order]);

        session()->forget(['deviceData', 'planData']);
        return true;

    }

    /**
     * Process coupon after an item is removed from cart
     */
    protected function processCoupons()
    {
        $couponCodes = session( 'couponCodes' ) ?: [];
        if($couponCodes) {
            session()->forget( [
                'couponAmount'
            ] );
            foreach ( $couponCodes as $couponCode ) {
                if ( $couponCode ) {
                    $removeCoupon = $this->requestConnection( 'coupon/remove-coupon', 'post', [
                        'order_id'    => session( 'cart' )[ 'id' ],
                        'coupon_code' => $couponCode
                    ] );

                    $couponAmount = $this->requestConnection( 'coupon/add-coupon', 'post',
                        [
                            'code'        => $couponCode,
                            'order_id'    => session( 'cart' )[ 'id' ],
                            'customer_id' => session( 'id' )
                        ]
                    );
                    if ( ! isset( $couponAmount[ 'error' ] ) ) {
                        session()->push( 'couponAmount', $couponAmount );
                    }
                }
            }
        }
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function rvs(Request $request)
    {
        $checkSession  = $this->cartItem->checkPlanExists();
        $deviceId      = session('deviceId') ?: null;
        $deviceName    = session('deviceName') ?: 'Device';

        $sessionCart = session('cart') ?: [];

        if (session('id')) {
            $customer = $this->requestConnectionForCustomer('customer', 'get');
            session('cart')['business_verification'] = $customer->toArray();
        }

        $plans         = session('planData') ?: $this->requestConnection('plans');
        $dataPlans     = $plans->filter(function($item) {
            if ($item['type'] === 2 && ($item['id'] === 55 || $item['id'] === 56)) {
                return $item;
            }
        });

        $this->processCoupons();

        return view('rvs.index', compact('plans', 'dataPlans', 'deviceId', 'deviceName', 'checkSession', 'sessionCart'));

    }

      /**
     * Add To Cart
     * http://localhost:8000/plan-add-to-cart?plan_id=5&plan_type=1&sim_name=T-MOBILE%20NANO&buy_sim=yes&sim_id=1&sim_required=1
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request)
    {
        if ($request->plan_id != null) {
            $response = $this->postWithPlanId($request->plan_id);
        }

        if (!isset($response)) {
            return redirect()->route('plans.index');
        }

        $arrayData = $this->getData($request);
        $this->postOrder($request, $arrayData);

        $this->closeOrderGroup();

        return redirect('checkout?order_hash='.session('cart')['order_hash']);
    }
}
