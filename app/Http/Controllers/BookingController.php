<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function index()
    {
        return response()->json(Booking::all(), 200);
    }

    public function show($id)
    {
        $booking = Booking::find($id);

        if (!$booking) {
            return response()->json([
                'status' => 'error',
                'message' => 'Booking not found'
            ], 404);
        }

        return response()->json($booking, 200);
    }

    public function store(Request $request)
    {
        // Validate ข้อมูลที่รับมา
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'id_card' => 'required|string|max:13|unique:bookings,id_card',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:500',
            'email' => 'required|email|unique:bookings,email',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // ถ้ามี Validation Error
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        // สร้างข้อมูลการจองใหม่
        $booking = Booking::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Booking created successfully!',
            'data' => $booking
        ], 201);
    }
    

    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);

        if (!$booking) {
            return response()->json([
                'status' => 'error',
                'message' => 'Booking not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'id_card' => 'string|max:13|unique:bookings,id_card,' . $id,
            'phone' => 'string|max:15',
            'address' => 'string|max:500',
            'email' => 'email|unique:bookings,email,' . $id,
            'start_date' => 'date',
            'end_date' => 'date|after_or_equal:start_date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $booking->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Booking updated successfully!',
            'data' => $booking
        ], 200);
    }

    public function Patch(Request $request, $id)
{
    $booking = Booking::find($id);

    if (!$booking) {
        return response()->json([
            'status' => 'error',
            'message' => 'Booking not found'
        ], 404);
    }

    $validator = Validator::make($request->all(), [
        'first_name' => 'sometimes|string|max:255',
        'last_name' => 'sometimes|string|max:255',
        'id_card' => 'sometimes|string|max:13|unique:bookings,id_card,' . $id,
        'phone' => 'sometimes|string|max:15',
        'address' => 'sometimes|string|max:500',
        'email' => 'sometimes|email|unique:bookings,email,' . $id,
        'start_date' => 'sometimes|date',
        'end_date' => 'sometimes|date|after_or_equal:start_date',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 'error',
            'message' => $validator->errors()
        ], 400);
    }

    // ใช้ fill() เพื่ออัปเดตเฉพาะค่าที่ส่งมา ไม่ได้แทนที่ทั้ง Object
    $booking->fill($request->only([
        'first_name', 'last_name', 'id_card', 'phone', 'address', 'email', 'start_date', 'end_date'
    ]));
    
    $booking->save();

    return response()->json([
        'status' => 'success',
        'message' => 'Booking updated successfully!',
        'data' => $booking
    ], 200);
}


    public function edit($id)
    {
        $booking = Booking::find($id);

        if (!$booking) {
            return response()->json([
                'status' => 'error',
                'message' => 'Booking not found'
            ], 404);
        }
    }

    public function destroy($id)
    {
        $booking = Booking::find($id);

        if (!$booking) {
            return response()->json([
                'status' => 'error',
                'message' => 'Booking not found'
            ], 404);
        }

        $booking->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Booking deleted successfully!'
        ], 200);
    }
    
}