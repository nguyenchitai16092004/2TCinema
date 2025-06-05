<?php

namespace App\Http\Controllers\Admin;

use App\Models\Phim;
use App\Models\TheLoaiPhim;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class AdminPhimController extends Controller
{
    /**
     * Hiển thị danh sách phim
     */
    public function index()
    {
        $now = now()->format('Y-m-d');
        $phims = Phim::with('theLoai')
            ->orderBy('updated_at', 'desc')
            ->paginate(10);

        return view('backend.pages.phim.phim', compact('phims'));
    }



    /**
     * Hiển thị form tạo phim mới
     */
    public function create()
    {
        $theLoais = TheLoaiPhim::all();
        return view('backend.pages.phim.create_phim', compact('theLoais'));
    }

    /**
     * Lưu phim mới vào database
     */
    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $validator = Validator::make($request->all(), [
            'TenPhim' => 'required|max:100|unique:phim,TenPhim',
            'DaoDien' => 'required|max:100',
            'DienVien' => 'required|max:255',
            'ThoiLuong' => 'required|integer|min:1|max:180',
            'NgayKhoiChieu' => 'required|date',
            'NgayKetThuc' => 'nullable|date|after_or_equal:NgayKhoiChieu',
            'MoTaPhim' => 'required',
            'Trailer' => 'nullable|url|max:255',
            'HinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'DoTuoi' => 'required|max:255',
            'DoHoa' => 'required|max:50',
            'NgonNgu' => 'required|max:50',
            'ID_TheLoaiPhim' => 'required|exists:the_loai_phim,ID_TheLoaiPhim',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Xử lý upload hình ảnh
        $hinhAnhPath = null;
        if ($request->hasFile('HinhAnh')) {
            $file = $request->file('HinhAnh');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('phim', $fileName, 'public');
            $hinhAnhPath = 'phim/' . $fileName;
        }

        // Tạo slug từ tên phim
        $slug = Str::slug($request->TenPhim);

        // Lưu phim vào database
        Phim::create([
            'TenPhim' => $request->TenPhim,
            'Slug' => $slug,
            'DaoDien' => $request->DaoDien,
            'DienVien' => $request->DienVien,
            'ThoiLuong' => $request->ThoiLuong,
            'NgayKhoiChieu' => $request->NgayKhoiChieu,
            'NgayKetThuc' => $request->NgayKetThuc,
            'MoTaPhim' => $request->MoTaPhim,
            'Trailer' => $request->Trailer,
            'HinhAnh' => $hinhAnhPath,
            'DoTuoi' => $request->DoTuoi,
            'DoHoa' => $request->DoHoa,
            'NgonNgu' => $request->NgonNgu,
            'TrangThai' => $request->TrangThai,
            'ID_TheLoaiPhim' => $request->ID_TheLoaiPhim,
        ]);

        return redirect()->route('phim.index')->with('success', 'Thêm phim mới thành công!');
    }

    /**
     * Hiển thị thông tin chi tiết phim
     */
    public function show($id)
    {
        $phim = Phim::findOrFail($id);
        $theLoais = TheLoaiPhim::all();
        return view('backend.pages.phim.detail_phim', compact('phim', 'theLoais'));
    }

    /**
     * Cập nhật thông tin phim
     */
    public function update(Request $request, $id)
    {
        // Validate dữ liệu đầu vào
        $validator = Validator::make($request->all(), [
            'TenPhim' => 'required|max:100',
            'DaoDien' => 'required|max:100',
            'DienVien' => 'required|max:255',
            'ThoiLuong' => 'required|integer|min:1',
            'NgayKhoiChieu' => 'required|date',
            'NgayKetThuc' => 'required|date|after_or_equal:NgayKhoiChieu',
            'MoTaPhim' => 'required',
            'Trailer' => 'nullable|url|max:255',
            'HinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'DoTuoi' => 'required|integer|min:0',
            'DoHoa' => 'required|max:50',
            'NgonNgu' => 'required|max:50',
            'TrangThai' => 'required|boolean',
            'ID_TheLoaiPhim' => 'required|exists:the_loai_phim,ID_TheLoaiPhim',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $phim = Phim::findOrFail($id);

        // Xử lý upload hình ảnh mới
        $hinhAnhPath = $phim->HinhAnh;
        if ($request->hasFile('HinhAnh')) {
            // Xóa hình ảnh cũ nếu có
            if ($phim->HinhAnh) {
                Storage::delete('public/' . $phim->HinhAnh);
            }

            // Upload hình ảnh mới
            $file = $request->file('HinhAnh');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('phim', $fileName, 'public');
            $hinhAnhPath = 'phim/' . $fileName;
        }

        // Cập nhật slug
        $slug = Str::slug($request->TenPhim);

        // Cập nhật thông tin phim
        $phim->update([
            'TenPhim' => $request->TenPhim,
            'Slug' => $slug,
            'DaoDien' => $request->DaoDien,
            'DienVien' => $request->DienVien,
            'ThoiLuong' => $request->ThoiLuong,
            'NgayKhoiChieu' => $request->NgayKhoiChieu,
            'NgayKetThuc' => $request->NgayKetThuc,
            'MoTaPhim' => $request->MoTaPhim,
            'Trailer' => $request->Trailer,
            'HinhAnh' => $hinhAnhPath,
            'DoTuoi' => $request->DoTuoi,
            'DoHoa' => $request->DoHoa,
            'NgonNgu' => $request->NgonNgu,
            'TrangThai' => $request->TrangThai,
            'ID_TheLoaiPhim' => $request->ID_TheLoaiPhim,
        ]);

        return redirect()->route('phim.index')->with('success', 'Cập nhật phim thành công!');
    }

    /**
     * Xóa phim
     */
    public function destroy($id)
    {
        $phim = Phim::findOrFail($id);

        // Xóa hình ảnh nếu có
        if ($phim->HinhAnh) {
            Storage::delete('public/' . $phim->HinhAnh);
        }

        $phim->delete();

        return redirect()->route('phim.index')->with('success', 'Xóa phim thành công!');
    }

    /**
     * Thay đổi trạng thái phim
     */
    public function changeStatus($id)
    {
        $phim = Phim::findOrFail($id);
        $phim->TrangThai = !$phim->TrangThai;
        $phim->save();

        return redirect()->back()->with('success', 'Thay đổi trạng thái phim thành công!');
    }
}
