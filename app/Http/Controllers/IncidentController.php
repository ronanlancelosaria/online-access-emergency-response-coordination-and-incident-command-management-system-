<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;

class IncidentController extends Controller
{
    // Display a listing of incidents
    public function index()
    {
        $incidents = Incident::all();
        return response()->json($incidents);
    }

    // Store a newly created incident
    public function store(Request $request)
    {
        $validated = $request->validate([
            'incident_location' => 'required|json',
            'incident_type' => 'required|string',
            'incident_date' => 'required|date',
            'incident_status' => 'required|string',
            'incident_desc' => 'required|string',
            'incident_cause' => 'required|string',
            'severity_level' => 'required|in:Low,Medium,High,Critical',
            'victim_name' => 'required|string',
            'victim_address' => 'required|string',
            'victim_age' => 'required|integer',
            'victim_image' => 'nullable|json',
            'user_id' => 'nullable|exists:users,id',
            'remarks' => 'nullable|string',
            'res_first_name' => 'required|string',
            'res_last_name' => 'required|string',
            'res_contact_num' => 'required|string',
            'res_address' => 'required|string'
        ]);

        $incident = Incident::create($validated);
        return response()->json(['message' => 'Incident reported successfully', 'incident' => $incident], 201);
    }

    // Display the specified incident
    public function show(Incident $incident)
    {
        return response()->json($incident);
    }

    // Update an existing incident
    public function update(Request $request, Incident $incident)
    {
        $validated = $request->validate([
            'incident_status' => 'nullable|string',
            'remarks' => 'nullable|string'
        ]);

        $incident->update($validated);
        return response()->json(['message' => 'Incident updated successfully', 'incident' => $incident]);
    }

    // Remove an incident
    public function destroy(Incident $incident)
    {
        $incident->delete();
        return response()->json(['message' => 'Incident deleted successfully']);
    }
}
