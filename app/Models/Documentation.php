<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Sushi\Sushi;

class Documentation extends Model
{
    use Sushi;

    private $filesystem;

    protected $rows = [
        [
            'title' => 'Introduction',
            'slug' => 'introduction',
            'section' => 'getting-started'
        ],
        [
            'title' => null,
            'slug' => 'installation',
            'section' => 'getting-started'
        ],
    ];

    protected static function boot()
    {
        parent::boot();

        static::retrieved(function ($model) {
            $model->filesystem = new Filesystem;
        });
    }

    public function markdownExists(): bool
    {
        return $this->filesystem->exists($this->path("{$this->slug}.md"));
    }

    public function getMarkdownAttribute(): string
    {
        return $this->filesystem->get($this->path("{$this->slug}.md"));
    }

    public function getTitleAttribute($title): string
    {
        return $title ?? Str::after(collect(explode(PHP_EOL, $this->markdown))->first(), '# ');
    }

    private function path(string $file): string
    {
        return resource_path("markdown/docs/{$file}");
    }
}
