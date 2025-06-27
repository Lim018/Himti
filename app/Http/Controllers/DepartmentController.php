<?php

namespace App\Http\Controllers;

use App\Models\Department; // Import the Department model
use Illuminate\Http\Request; // Import Request for handling input
use Illuminate\Support\Facades\Validator; // Import Validator for manual validation

class DepartmentController extends Controller
{
    /**
     * Display a listing of all departments.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Fetch all departments from the database
        $departments = Department::all();

        // Return the data in JSON format
        return response()->json($departments);
    }

    /**
     * Store a newly created department in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:department,name', // Name should be unique
            'long_name' => 'nullable|string|max:500',
        ]);

        // If validation fails, return a JSON error response
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validasi gagal.',
                'errors' => $validator->errors()
            ], 422); // 422 Unprocessable Entity status code
        }

        // Create a new department record in the database
        $department = Department::create($request->all());

        // Return the newly created department in JSON format with 201 Created status
        return response()->json([
            'message' => 'Departemen berhasil ditambahkan.',
            'data' => $department
        ], 201);
    }

    /**
     * Display the specified department.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        // Find the department by ID
        $department = Department::find($id);

        // If department not found, return 404 Not Found response
        if (!$department) {
            return response()->json(['message' => 'Departemen tidak ditemukan.'], 404);
        }

        // Return the department details in JSON format
        return response()->json($department);
    }

    /**
     * Update the specified department in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // Find the department to be updated
        $department = Department::find($id);

        // If department not found, return 404 Not Found response
        if (!$department) {
            return response()->json(['message' => 'Departemen tidak ditemukan.'], 404);
        }

        // Validate incoming data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:department,name,' . $id, // Unique check, ignoring current ID
            'long_name' => 'nullable|string|max:500',
        ]);

        // If validation fails, return a JSON error response
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validasi gagal.',
                'errors' => $validator->errors()
            ], 422);
        }

        // Update the department record
        $department->update($request->all());

        // Return the updated department in JSON format
        return response()->json([
            'message' => 'Departemen berhasil diperbarui.',
            'data' => $department
        ]);
    }

    /**
     * Remove the specified department from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        // Find the department to be deleted
        $department = Department::find($id);

        // If department not found, return 404 Not Found response
        if (!$department) {
            return response()->json(['message' => 'Departemen tidak ditemukan.'], 404);
        }

        // Delete the department record
        $department->delete();

        // Return a success response (200 OK)
        return response()->json(['message' => 'Departemen berhasil dihapus.'], 200);
    }
}