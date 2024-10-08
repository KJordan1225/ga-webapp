<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Testing\MimeType;


class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the file input
        // $request->validate([
        //     'file' => 'required|file|mimes:jpg,png,pdf,docx|max:2048',
        //     // Adjust file types and size as needed
        // ]);        
        // dd($request->file());
        // Handle the file upload
        if ($request->file()) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            // $filePath = $file->storeAs('uploads', $fileName, 'public');
            $file->move(public_path('storage'), $fileName);

            return back()
                ->with('success', 'File uploaded successfully.')
                ->with('file', $fileName);
        }

        return back()->with('error', 'File upload failed.');
    }

    public function openFile($fileName)
    {
        // Check if file exists in the local storage
        if (Storage::disk('public')->exists('uploads/policy-docs/' . $fileName)) {
            // Get the file's content
            $fileContents = Storage::disk('public')->get('uploads/policy-docs/' . $fileName);

            // Get the MIME type of the file for correct rendering
            // $mimeType = Storage::disk('public')->mimeType('uploads/' . $fileName);
            $mimeType = 'application/pdf';
            // Return the file contents as a response with the appropriate MIME type
            return response($fileContents, 200)
                ->header('Content-Type', $mimeType);
        } else {
            return response()->json(['message' => 'File not found.'], 404);
        }
    }
}
