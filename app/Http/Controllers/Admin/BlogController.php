<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::orderByDesc('created_at')->get();

        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => ['required', 'string', 'max:255'],
            'excerpt'        => ['nullable', 'string'],
            'content'        => ['required', 'string'],
            'featured_image' => ['nullable', 'image', 'max:5120'],
            'is_published'   => ['nullable', 'boolean'],
            'published_at'   => ['nullable', 'date'],
        ]);

        $imagePath = null;
        if ($request->hasFile('featured_image')) {
            $imagePath = $this->uploadImage($request, 'featured_image', 'blog');
        }

        $isPublished = $request->boolean('is_published');
        $publishedAt = null;

        if ($isPublished) {
            $publishedAt = $validated['published_at'] ?? now();
        }

        BlogPost::create([
            'title'          => $validated['title'],
            'slug'           => Str::slug($validated['title']),
            'excerpt'        => $validated['excerpt'] ?? null,
            'content'        => $validated['content'],
            'featured_image' => $imagePath,
            'is_published'   => $isPublished,
            'published_at'   => $publishedAt,
        ]);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Artículo creado correctamente.');
    }

    public function edit(BlogPost $blog)
    {
        return view('admin.blog.edit', ['post' => $blog]);
    }

    public function update(Request $request, BlogPost $blog)
    {
        $validated = $request->validate([
            'title'          => ['required', 'string', 'max:255'],
            'excerpt'        => ['nullable', 'string'],
            'content'        => ['required', 'string'],
            'featured_image' => ['nullable', 'image', 'max:5120'],
            'is_published'   => ['nullable', 'boolean'],
            'published_at'   => ['nullable', 'date'],
        ]);

        $imagePath = $blog->featured_image;
        if ($request->hasFile('featured_image')) {
            $this->deleteImage($imagePath);
            $imagePath = $this->uploadImage($request, 'featured_image', 'blog');
        }

        $isPublished = $request->boolean('is_published');
        $publishedAt = $blog->published_at;

        if ($isPublished && ! $blog->is_published) {
            // Being published for the first time
            $publishedAt = $validated['published_at'] ?? now();
        } elseif ($isPublished && isset($validated['published_at'])) {
            $publishedAt = $validated['published_at'];
        } elseif (! $isPublished) {
            $publishedAt = null;
        }

        $blog->update([
            'title'          => $validated['title'],
            'slug'           => Str::slug($validated['title']),
            'excerpt'        => $validated['excerpt'] ?? null,
            'content'        => $validated['content'],
            'featured_image' => $imagePath,
            'is_published'   => $isPublished,
            'published_at'   => $publishedAt,
        ]);

        return redirect()->route('admin.blog.index')
            ->with('success', 'Artículo actualizado correctamente.');
    }

    public function destroy(BlogPost $blog)
    {
        $this->deleteImage($blog->featured_image);
        $blog->delete();

        return redirect()->route('admin.blog.index')
            ->with('success', 'Artículo eliminado correctamente.');
    }

    private function uploadImage(Request $request, string $field, string $folder): string
    {
        $file = $request->file($field);
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path("imagenes/{$folder}"), $filename);

        return "/imagenes/{$folder}/{$filename}";
    }

    private function deleteImage(?string $path): void
    {
        if ($path && file_exists(public_path($path))) {
            unlink(public_path($path));
        }
    }
}
