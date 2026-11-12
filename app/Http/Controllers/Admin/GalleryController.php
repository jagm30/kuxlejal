<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $items = GalleryItem::orderBy('sort_order')->orderBy('id')->get();

        return view('admin.gallery.index', compact('items'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'label'      => ['required', 'string', 'max:255'],
            'image'      => ['required', 'image', 'max:5120'],
            'sort_order' => ['nullable', 'integer'],
            'is_active'  => ['nullable', 'boolean'],
        ]);

        $imagePath = $this->uploadImage($request, 'image', 'galeria');

        GalleryItem::create([
            'label'      => $validated['label'],
            'image_path' => $imagePath,
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active'  => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Imagen de galería creada correctamente.');
    }

    public function edit(GalleryItem $gallery)
    {
        return view('admin.gallery.edit', ['item' => $gallery]);
    }

    public function update(Request $request, GalleryItem $gallery)
    {
        $validated = $request->validate([
            'label'      => ['required', 'string', 'max:255'],
            'image'      => ['nullable', 'image', 'max:5120'],
            'sort_order' => ['nullable', 'integer'],
            'is_active'  => ['nullable', 'boolean'],
        ]);

        $imagePath = $gallery->image_path;
        if ($request->hasFile('image')) {
            $this->deleteImage($imagePath);
            $imagePath = $this->uploadImage($request, 'image', 'galeria');
        }

        $gallery->update([
            'label'      => $validated['label'],
            'image_path' => $imagePath,
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active'  => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Imagen de galería actualizada correctamente.');
    }

    public function destroy(GalleryItem $gallery)
    {
        $this->deleteImage($gallery->image_path);
        $gallery->delete();

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Imagen de galería eliminada correctamente.');
    }

    public function reorder(Request $request)
    {
        $request->validate([
            'ids'   => ['required', 'array'],
            'ids.*' => ['integer'],
        ]);

        foreach ($request->ids as $order => $id) {
            GalleryItem::where('id', $id)->update(['sort_order' => $order]);
        }

        return response()->json(['success' => true]);
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
