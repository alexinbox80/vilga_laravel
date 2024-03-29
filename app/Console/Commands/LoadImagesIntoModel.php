<?php

namespace App\Console\Commands;

use App\Models\Image;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class LoadImagesIntoModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:load-images-into-model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Write file to Images table';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $filePaths = Storage::disk('public')->allFiles('/images');

        foreach ($filePaths as $filePath) {
            [$image, $file] = explode('/', $filePath);
            [$name, $extension] = explode('.', $file);

            Image::create([
                'name' => $name,
                'mime' => 'image/jpeg',
                'hash' => hash_file('sha256', Storage::disk('public')->url($filePath)),
                'extension' => $extension,
                'original_name' => $name . '.' . $extension,
                'size' => Storage::disk('public')->size($filePath),
                'path' => $image . '/',
                'disk' => 'public',
                'group' => null,
            ]);
        }

        return count($filePaths);
    }
}
