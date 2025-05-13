@extends('backend.layouts.master')
@section('title', 'Chi tiết Phim')

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Chỉnh sửa phim: {{ $phim->TenPhim }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('phim.index') }}" class="btn btn-default">
                                <i class="fas fa-arrow-left"></i> Quay lại
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('phim.update', $phim->ID_Phim) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="TenPhim">Tên phim <span class="text-danger">*</span></label>
                                        <input type="text" name="TenPhim" id="TenPhim" class="form-control"
                                            value="{{ old('TenPhim', $phim->TenPhim) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="DaoDien">Đạo diễn <span class="text-danger">*</span></label>
                                        <input type="text" name="DaoDien" id="DaoDien" class="form-control"
                                            value="{{ old('DaoDien', $phim->DaoDien) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="DienVien">Diễn viên <span class="text-danger">*</span></label>
                                        <input type="text" name="DienVien" id="DienVien" class="form-control"
                                            value="{{ old('DienVien', $phim->DienVien) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="ThoiLuong">Thời lượng (phút) <span class="text-danger">*</span></label>
                                        <input type="number" name="ThoiLuong" id="ThoiLuong" class="form-control"
                                            value="{{ old('ThoiLuong', $phim->ThoiLuong) }}" required min="1">
                                    </div>

                                    <div class="form-group">
                                        <label for="ID_TheLoaiPhim">Thể loại phim <span class="text-danger">*</span></label>
                                        <select name="ID_TheLoaiPhim" id="ID_TheLoaiPhim" class="form-control" required>
                                            <option value="">-- Chọn thể loại --</option>
                                            @foreach ($theLoais as $theLoai)
                                                <option value="{{ $theLoai->ID_TheLoaiPhim }}"
                                                    {{ old('ID_TheLoaiPhim', $phim->ID_TheLoaiPhim) == $theLoai->ID_TheLoaiPhim ? 'selected' : '' }}>
                                                    {{ $theLoai->TenTheLoai }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="NgayKhoiChieu">Ngày khởi chiếu <span
                                                class="text-danger">*</span></label>
                                        <input type="date" name="NgayKhoiChieu" id="NgayKhoiChieu" class="form-control"
                                            value="{{ old('NgayKhoiChieu', $phim->NgayKhoiChieu) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="NgayKetThuc">Ngày kết thúc <span class="text-danger">*</span></label>
                                        <input type="date" name="NgayKetThuc" id="NgayKetThuc" class="form-control"
                                            value="{{ old('NgayKetThuc', $phim->NgayKetThuc) }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="DoTuoi">Độ tuổi <span class="text-danger">*</span></label>
                                        <input type="number" name="DoTuoi" id="DoTuoi" class="form-control"
                                            value="{{ old('DoTuoi', $phim->DoTuoi) }}" required min="0">
                                    </div>

                                    <div class="form-group">
                                        <label for="DoHoa">Đồ họa <span class="text-danger">*</span></label>
                                        <select name="DoHoa" id="DoHoa" class="form-control" required>
                                            <option value="">-- Chọn đồ họa --</option>
                                            <option value="2D" {{ old('DoHoa') == '2D' ? 'selected' : '' }}>2D</option>
                                            <option value="3D" {{ old('DoHoa') == '3D' ? 'selected' : '' }}>3D</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="NgonNgu">Ngôn ngữ <span class="text-danger">*</span></label>
                                        <select name="NgonNgu" id="NgonNgu" class="form-control" required>
                                            <option value="">-- Chọn ngôn ngữ --</option>
                                            <option value="vi" {{ old('NgonNgu') == 'vi' ? 'selected' : '' }}>Tiếng
                                                Việt</option>
                                            <option value="en" {{ old('NgonNgu') == 'en' ? 'selected' : '' }}>Tiếng
                                                Anh</option>
                                            <option value="es" {{ old('NgonNgu') == 'es' ? 'selected' : '' }}>Tiếng
                                                Tây Ban Nha</option>
                                            <option value="fr" {{ old('NgonNgu') == 'fr' ? 'selected' : '' }}>Tiếng
                                                Pháp</option>
                                            <option value="de" {{ old('NgonNgu') == 'de' ? 'selected' : '' }}>Tiếng
                                                Đức</option>
                                            <option value="it" {{ old('NgonNgu') == 'it' ? 'selected' : '' }}>Tiếng Ý
                                            </option>
                                            <option value="ja" {{ old('NgonNgu') == 'ja' ? 'selected' : '' }}>Tiếng
                                                Nhật</option>
                                            <option value="ko" {{ old('NgonNgu') == 'ko' ? 'selected' : '' }}>Tiếng
                                                Hàn</option>
                                            <option value="zh" {{ old('NgonNgu') == 'zh' ? 'selected' : '' }}>Tiếng
                                                Trung</option>
                                            <option value="ru" {{ old('NgonNgu') == 'ru' ? 'selected' : '' }}>Tiếng
                                                Nga</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="Trailer">Trailer URL</label>
                                        <input type="url" name="Trailer" id="Trailer" class="form-control"
                                            value="{{ old('Trailer', $phim->Trailer) }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="HinhAnh">Hình ảnh</label>
                                        @if ($phim->HinhAnh)
                                            <div class="mb-2">
                                                <img src="{{ asset('storage/' . $phim->HinhAnh) }}"
                                                    alt="{{ $phim->TenPhim }}"
                                                    style="max-height: 150px; max-width: 100%;">
                                            </div>
                                        @endif
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="HinhAnh"
                                                name="HinhAnh" accept="image/*">
                                            <label class="custom-file-label" for="HinhAnh">Chọn file mới (để trống nếu
                                                không thay đổi)</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="TrangThai">Trạng thái <span class="text-danger">*</span></label>
                                        <select name="TrangThai" id="TrangThai" class="form-control" required>
                                            <option value="1"
                                                {{ old('TrangThai', $phim->TrangThai) == 1 ? 'selected' : '' }}>Công Chiếu 
                                            </option>
                                            <option value="0"
                                                {{ old('TrangThai', $phim->TrangThai) == 0 ? 'selected' : '' }}>Chưa công chiếu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="MoTaPhim">Mô tả phim <span class="text-danger">*</span></label>
                                        <textarea name="MoTaPhim" id="MoTaPhim" class="form-control" rows="5" required>{{ old('MoTaPhim', $phim->MoTaPhim) }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Cập nhật phim
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            // Hiển thị tên file khi chọn ảnh
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });

            // Thêm CKEDITOR cho phần mô tả phim
            if (typeof CKEDITOR !== 'undefined') {
                CKEDITOR.replace('MoTaPhim');
            }
        });
    </script>
@endsection
