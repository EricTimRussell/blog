<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{
  public static function all()
  {
    $files = File::files(resource_path("posts/"));

    return array_map(function ($file) {
      return $file->getContents();
    }, $files);
  }

  public static function find($slug)
  {
    // Check if page exists
    if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
      throw new ModelNotFoundException();
    }
    // return to route and cache page
    return cache()->remember('post.{$slug}', 1200, fn () => file_get_contents($path));
  }
}
