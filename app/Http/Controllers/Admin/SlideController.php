<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::orderBy('sort_order')->orderBy('id')->get();

        return view('admin.slides.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.slides.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'subtitle'    => ['required', 'string'],
            'badge_text'  => ['required', 'string', 'max:255'],
            'badge_color' => ['required', 'in:green,red,amber'],
            'image'       => ['required', 'image', 'max:5120'],
            'cta1_text'   => ['nullable', 'string', 'max:255'],
            'cta1_url'    => ['nullable', 'string', 'max:255'],
            'cta2_text'   => ['nullable', 'string', 'max:255'],
            'cta2_url'    => ['nullable', 'string', 'max:255'],
            'sort_order'  => ['nullable', 'integer'],
            'is_active'   => ['nullable', 'boolean'],
        ]);

        $imagePath = $this->uploadImage($request, 'image', 'slides');

        Slide::create([
            'title'       => $validated['title'],
            'subtitle'    => $validated['subtitle'],
            'badge_text'  => $validated['badge_text'],
            'badge_color' => $validated['badge_color'],
            'image_path'  => $imagePath,
            'cta1_text'   => $validated['cta1_text'] ?? null,
            'cta1_url'    => $validated['cta1_url'] ?? null,
            'cta2_text'   => $validated['cta2_text'] ?? null,
            'cta2_url'    => $validated['cta2_url'] ?? null,
            'sort_order'  => $validated['sort_order'] ?? 0,
            'is_active'   => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.slides.index')
            ->with('success', 'Slide creado correctamente.');
    }

    public function edit(Slide $slide)
    {
        return view('admin.slides.edit', compact('slide'));
    }

    public function update(Request $request, Slide $slide)
    {
        $validated = $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'subtitle'    => ['required', 'string'],
            'badge_text'  => ['required', 'string', 'max:255'],
            'badge_color' => ['required', 'in:green,red,amber'],
            'image'       => ['nullable', 'image', 'max:5120'],
            'cta1_text'   => ['nullable', 'string', 'max:255'],
            'cta1_url'    => ['nullable', 'string', 'max:255'],
            'cta2_text'   => ['nullable', 'string', 'max:255'],
            'cta2_url'    => ['nullable', 'string', 'max:255'],
            'sort_order'  => ['nullable', 'integer'],
            'is_active'   => ['nullable', 'boolean'],
        ]);

        $imagePath = $slide->image_path;
        if ($request->hasFile('image')) {
            $this->deleteImage($imagePath);
            $imagePath = $this->uploadImage($request, 'image', 'slides');
        }

        $slide->update([
            'title'       => $validated['title'],
            'subtitle'    => $validated['subtitle'],
            'badge_text'  => $validated['badge_text'],
            'badge_color' => $validated['badge_color'],
            'image_path'  => $imagePath,
            'cta1_text'   => $validated['cta1_text'] ?? null,
            'cta1_url'    => $validated['cta1_url'] ?? null,
            'cta2_text'   => $validated['cta2_text'] ?? null,
            'cta2_url'    => $validated['cta2_url'] ?? null,
            'sort_order'  => $validated['sort_order'] ?? 0,
            'is_active'   => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.slides.index')
            ->with('success', 'Slide actualizado correctamente.');
    }

    public function destroy(Slide $slide)
    {
        $this->deleteImage($slide->image_path);
        $slide->delete();

        return redirect()->route('admin.slides.index')
            ->with('success', 'Slide eliminado correctamente.');
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
