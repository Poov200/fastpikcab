<?php

// app/Http/Controllers/TestimonialController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        return response()->json(Testimonial::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'message' => 'required|string',
        ]);

        $testimonial = Testimonial::create($validated);
        return response()->json($testimonial, 201);
    }

    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return response()->json($testimonial);
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'position' => 'nullable|string|max:255',
            'rating' => 'sometimes|integer|min:1|max:5',
            'message' => 'sometimes|string',
            'approved' => 'boolean',
            'featured' => 'boolean',
        ]);

        $testimonial->update($validated);
        return response()->json($testimonial);
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }

    public function approve($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->approved = true;
        $testimonial->save();
        return response()->json(['message' => 'Approved']);
    }

    public function toggleFeatured($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->featured = !$testimonial->featured;
        $testimonial->save();
        return response()->json(['message' => 'Featured status toggled']);
    }




    public function export()
{
    $testimonials = \App\Models\Testimonial::all();

    $headers = [
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="testimonials_export.csv"',
    ];

    $callback = function () use ($testimonials) {
        $handle = fopen('php://output', 'w');
        // CSV header
        fputcsv($handle, ['ID', 'Name', 'Position', 'Rating', 'Message', 'Approved', 'Featured', 'Created At']);

        foreach ($testimonials as $testimonial) {
            fputcsv($handle, [
                $testimonial->id,
                $testimonial->name,
                $testimonial->position,
                $testimonial->rating,
                $testimonial->message,
                $testimonial->approved ? 'Yes' : 'No',
                $testimonial->featured ? 'Yes' : 'No',
                $testimonial->created_at ? $testimonial->created_at->format('Y-m-d') : ''
            ]);
        }

        fclose($handle);
    };

    return response()->stream($callback, 200, $headers);
}


}

