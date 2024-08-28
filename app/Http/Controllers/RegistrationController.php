<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Client;
use ImageKit\ImageKit;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $imageKit = new ImageKit(
            "public_yCKZd/8SxJvvh7oIA2wNPsU0Dk8=",
            "private_8gYZEfjPa9lFANqo3HBqF7o4F/g=",
            "https://ik.imagekit.io/eepisat"
        );


        // Validate the form data
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nrp' => 'required|numeric|digits:10',
            'no-hp' => 'required|numeric|digits_between:10,13',
            'jurusan' => 'required|string',
            'years' => 'required|numeric|digits:4',
            'divisi' => 'required|string',
            'team-work-engage' => 'required|string|min_words:150|max_words:250',
            'goals-and-contribute' => 'required|string|min_words:150|max_words:250',
            'achievement' => 'required|string|min_words:150|max_words:250',
            'solutions-to-difficult' => 'required|string|min_words:150|max_words:250',
            'cv' => 'required|file|mimes:pdf|max:5120', // Max 5 MB
            'portfolio' => 'nullable|file|mimes:pdf|max:5120', // Optional but mandatory for Branding
            'motivation-letter' => 'required|file|mimes:pdf|max:512', // Max 512 KB
            'mbti' => 'required|string|max:4',
            'mbti-image' => 'required|file|mimes:png,jpeg,jpg|max:1024', // Max 1 MB
            'medical-record' => 'required|string|max:1000',
            'owned-device' => 'required|string|max:250',
            'class-finish-hour' => 'required|string|max:1000',
            'parental-consent' => 'required|file|mimes:pdf|max:512', // Max 512 KB
        ]);
        

        // dd($request->all());
        // Initialize Guzzle client
        $client = new Client();

        // Function to upload a file and return the URL
        $uploadFile = function ($file, $fullname) use ($imageKit) {
            try {
                $randomInt = rand(1000, 9999);
                $fileName = $fullname . '_' . $randomInt . '_' . $file->getClientOriginalName();
                $response = $imageKit->uploadFile([
                    'file' => fopen($file->getRealPath(), 'r'), // binary file
                    'fileName' => $fileName, // original file name
                    'folder' => '/registration-local', // folder in ImageKit
                ]);

                // Check for errors
                if ($response->error) {
                    throw new \Exception($response->error->message);
                }

                return $response->result->url ?? null;
            } catch (\Exception $e) {
                return null; // Handle the error appropriately
            }
        };

        // Upload files using Guzzle
        $cvPath = $uploadFile($request->file('cv'), $validatedData['fullname']);
        $portfolioPath = $request->file('portfolio') ? $uploadFile($request->file('portfolio'), $validatedData['fullname']) : null;
        $motivationLetterPath = $uploadFile($request->file('motivation-letter'), $validatedData['fullname']);
        $mbtiImagePath = $uploadFile($request->file('mbti-image'), $validatedData['fullname']);
        $parentalConsentPath = $uploadFile($request->file('parental-consent'), $validatedData['fullname']);

        // Check if any file upload failed
        if (!$cvPath || !$motivationLetterPath || !$mbtiImagePath || !$parentalConsentPath) {
            return redirect()->back()->withErrors(['file_upload' => 'One or more files failed to upload. Please try again.']);
        }

        // Store the data in the database (assuming a 'registrations' table)
        $registration = \App\Models\Registration::create([
            'fullname' => $validatedData['fullname'],
            'email' => $validatedData['email'],
            'no_hp' => $validatedData['no-hp'],
            'nrp' => $validatedData['nrp'],
            'jurusan' => $validatedData['jurusan'],
            'years' => $validatedData['years'],
            'divisi' => $validatedData['divisi'],
            'team_work_engage' => $validatedData['team-work-engage'],
            'goals_and_contribute' => $validatedData['goals-and-contribute'],
            'achievement' => $validatedData['achievement'],
            'solutions_to_difficult' => $validatedData['solutions-to-difficult'],
            'cv' => $cvPath,
            'portfolio' => $portfolioPath,
            'motivation_letter' => $motivationLetterPath,
            'mbti' => $validatedData['mbti'],
            'mbti_image' => $mbtiImagePath,
            'medical_record' => $validatedData['medical-record'],
            'owned_device' => $validatedData['owned-device'],
            'class_finish_hour' => $validatedData['class-finish-hour'],
            'parental_consent' => $parentalConsentPath,
        ]);

        $cookie = cookie('alreadyRegistered', true, 43200);

        // Return a response or redirect
        return redirect()->route('registration')->with('message', 'Registration successful!')->cookie($cookie);
    }

    public function list()
    {
        // Define the date to filter after (19 August 2024)
        $date = Carbon::create(2024, 8, 19);

        // Fetch registrations created after the specified date with pagination
        $registrations = Registration::where('created_at', '>', $date)
            ->paginate(10);

        return view('frontend.recruitment.list', compact('registrations'));
    }

    public function list_export()
    {
        // Define the date to filter after (19 August 2024)
        $date = Carbon::create(2024, 8, 19);

        // Fetch registrations created after the specified date with pagination
        $registrations = Registration::where('created_at', '>', $date)
            ->get();

        return view('frontend.recruitment.list', compact('registrations'));
    }
}
