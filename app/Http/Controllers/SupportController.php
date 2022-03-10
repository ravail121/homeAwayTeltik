<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Api\ApiResponse;
use Exception;

class SupportController extends Controller
{
    public function index()
    {
        $data = $this->requestConnection('support');
        return view('support.index', compact('data'));
    }

    public function oneTouchSupportIndexSecond()
    {
        $data = $this->requestConnection('support');
        $formattedData = array_map(function ($category) use ($data) {
            $supports = array_filter($data['support'], function ($support) use ($category) {
                return $support['category_id'] === $category['id'];
            });
            $category['supports'] = $supports;
            return $category;
        }, $data['categories']);

        return view('support.one-touch-index', compact('data', 'formattedData'));
    }

    public function oneTouchSupportIndex()
    {
        $data = $this->requestConnection('support');
        $formattedData = array_map(function ($category) use ($data) {
            $supports = array_filter($data['support'], function ($support) use ($category) {
                return $support['category_id'] === $category['id'];
            });
            $category['supports'] = array_values($supports);
            return $category;
        }, $data['categories']);

        $data['formatted'] = $formattedData;

        return view('support.one-touch-support-index', compact('data'));
    }

    public function sendEmail(Request $request)
    {
        $data = $request->validate(
            [
                'name'      => 'required|string',
                'email'     => 'required|email',
                'subject'   => 'required|string',
                'message'   => 'required|string'
            ]
        );
        try {
            $this->requestConnection('support/email', 'post', $data);
        } catch (Exception $e) {
            \Log::info($e->getMessage());
            return redirect()->back()->with('error', 'Server problem, please try again later.');
        }

        return redirect()->back()->with(['notification' =>
            [
                'status'  => 'success',
                'message' => 'Your message has been sent to support',
            ]
        ]);
    }
}
