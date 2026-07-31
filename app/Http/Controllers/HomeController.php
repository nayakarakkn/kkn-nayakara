<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Complaint;
use App\Models\Facility;
use App\Models\Umkm;
use App\Models\Ecotourism;
use App\Models\HealthInfo;
use App\Models\Education;
use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {
        $umkms = Umkm::where('status', 'approved')->latest()->get();
        $announcements = Announcement::where('is_active', true)
            ->orderBy('is_pinned', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();
        $ecotourisms = Ecotourism::latest()->get();
        $facilities = Facility::latest()->get();
        $health_infos = HealthInfo::latest()->get();
        $educations = Education::latest()->get();
        $videos = Video::where('is_active', true)->latest()->get();

        return view('welcome', compact('umkms', 'announcements', 'ecotourisms', 'facilities', 'health_infos', 'educations', 'videos'));
    }

    public function storeUmkm(Request $request)
    {
        $validated = $request->validate([
            'business_name' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:30',
            'category' => 'nullable|string|max:100',
            'address' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('umkm-images', 'public');
            $validated['image'] = $path;
        }

        $validated['status'] = 'pending';

        Umkm::create($validated);

        return back()->with('success_submission', 'Pendaftaran UMKM Anda telah berhasil dikirim! Pengurus akan meninjau & menyetujui pendaftaran Anda secepatnya.');
    }

    public function storeComplaint(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:30',
            'rt_rw' => 'nullable|string|max:100',
            'category' => 'required|string|max:100',
            'content' => 'required|string|max:2000',
        ]);

        $validated['status'] = 'pending';

        Complaint::create($validated);

        return back()->with('success_complaint', 'Laporan/Aspirasi Anda telah berhasil diterima! Pengurus RW 05 akan menindaklanjuti pengaduan Anda secepatnya.');
    }

    public function reportPdf(Request $request)
    {
        $module = $request->query('module', 'all');

        $umkms = Umkm::all();
        $facilities = Facility::all();
        $health_infos = HealthInfo::all();
        $educations = Education::all();
        $ecotourisms = Ecotourism::all();
        $announcements = Announcement::all();

        return view('reports.official-pdf', compact('module', 'umkms', 'facilities', 'health_infos', 'educations', 'ecotourisms', 'announcements'));
    }
}
