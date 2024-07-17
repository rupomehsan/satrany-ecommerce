<?php

namespace App\Modules\TrendingVideo\Actions;

use App\Modules\TrendingVideo\Validations\Validation;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class Store
{
    static $model = \App\Modules\TrendingVideo\Models\Model::class;

    public static function execute(Validation $request)
    {
        try {
            // Validate the request data
            $requestData = $request->validated();

            // Check if a video file is present in the request
            if ($request->hasFile('video')) {
                $video = $request->file('video');

                // Ensure the 'app/public/uploads' directory exists
                if (!Storage::disk('public')->exists('')) {
                    Storage::disk('public')->makeDirectory('');
                }

                // Store the video in the 'app/public/uploads' directory
                $path = $video->store('', 'public');

                // Check if the file was successfully stored
                if (!$path) {
                    Log::error('Failed to store video file.');
                    return messageResponse('Failed to upload video.', 500, 'server_error');
                }

                // Save the path to the request data
                $requestData['url'] = $path;
            }

            // Unset the video file from request data as it's already handled
            unset($requestData['video']);

            // Debugging: Output the request data
       

            // Create a new record in the database
            if (self::$model::query()->create($requestData)) {
                return messageResponse('Item added successfully', 201);
            }
        } catch (\Exception $e) {
            // Handle any exceptions that occur during the process
            Log::error('Error storing video: ' . $e->getMessage());
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
