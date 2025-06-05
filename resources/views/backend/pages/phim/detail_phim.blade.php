@extends('backend.layouts.master')
@section('title', 'Chi tiết Phim')

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

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

                        <div class="row">
                            {{-- Right column for form --}}
                            <div class="col-md-12">
                                <form action="{{ route('phim.update', $phim->ID_Phim) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-4">
                                            @if ($phim->HinhAnh)
                                                <div class="mb-2 d-flex justify-content-center" style="height: 100%;">
                                                    <img src="{{ asset('storage/' . $phim->HinhAnh) }}"
                                                        alt="{{ $phim->TenPhim }}"
                                                        style="width: auto; height: 400px; object-fit: cover;">
                                                </div>
                                            @else
                                                <div class="mb-2"
                                                    style="height: 100%; display: flex; align-items: center; justify-content: center; background: #f8f9fa;">
                                                    <span>Không có ảnh</span>
                                                </div>
                                            @endif
                                        </div>
                                        {{-- Cột trái của form --}}
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="TenPhim">Tên phim <span class="text-danger">*</span></label>
                                                <input type="text" name="TenPhim" id="TenPhim" class="form-control"
                                                    value="{{ old('TenPhim', $phim->TenPhim) }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="ID_TheLoaiPhim">Thể loại phim <span
                                                        class="text-danger">*</span></label>
                                                <select name="ID_TheLoaiPhim" id="ID_TheLoaiPhim" class="form-control"
                                                    required>
                                                    <option value="">-- Chọn thể loại --</option>
                                                    @foreach ($theLoais as $theLoai)
                                                        <option value="{{ $theLoai->ID_TheLoaiPhim }}"
                                                            {{ old('ID_TheLoaiPhim', $phim->ID_TheLoaiPhim) == $theLoai->ID_TheLoaiPhim ? 'selected' : '' }}>
                                                            {{ $theLoai->TenTheLoai }}
                                                        </option>
                                                    @endforeach
                                                    <option value="create_new">+ Thêm thể loại mới</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="ThoiLuong">Thời lượng (phút) <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" name="ThoiLuong" id="ThoiLuong" class="form-control"
                                                    value="{{ old('ThoiLuong', $phim->ThoiLuong) }}" required
                                                    min="1">
                                            </div>

                                            <div class="form-group">
                                                <label for="NgayKhoiChieu">Ngày khởi chiếu <span
                                                        class="text-danger">*</span></label>
                                                <input type="date" name="NgayKhoiChieu" id="NgayKhoiChieu"
                                                    class="form-control"
                                                    value="{{ old('NgayKhoiChieu', $phim->NgayKhoiChieu) }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="NgayKetThuc">Ngày kết thúc</label>
                                                <input type="date" name="NgayKetThuc" id="NgayKetThuc"
                                                    class="form-control"
                                                    value="{{ old('NgayKetThuc', $phim->NgayKetThuc) }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="Trailer">Trailer URL</label>
                                                <input type="url" name="Trailer" id="Trailer" class="form-control"
                                                    value="{{ old('Trailer', $phim->Trailer) }}">
                                            </div>
                                        </div>

                                        {{-- Cột phải của form --}}
                                        <div class="col-md-4">
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
                                                <label for="DoHoa">Đồ họa <span class="text-danger">*</span></label>
                                                <select name="DoHoa" id="DoHoa" class="form-control" required>
                                                    <option value="">-- Chọn đồ họa --</option>
                                                    <option value="2D"
                                                        {{ old('DoHoa', $phim->DoHoa) == '2D' ? 'selected' : '' }}>2D
                                                    </option>
                                                    <option value="3D"
                                                        {{ old('DoHoa', $phim->DoHoa) == '3D' ? 'selected' : '' }}>3D
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="NgonNgu">Ngôn ngữ <span class="text-danger">*</span></label>
                                                <select name="NgonNgu" id="NgonNgu" class="form-control" required>
                                                    <option value="">-- Chọn ngôn ngữ --</option>
                                                    @foreach (['vi' => 'Tiếng Việt', 'en' => 'Tiếng Anh', 'es' => 'Tây Ban Nha', 'fr' => 'Pháp', 'de' => 'Đức', 'it' => 'Ý', 'ja' => 'Nhật', 'ko' => 'Hàn', 'zh' => 'Trung', 'ru' => 'Nga'] as $key => $lang)
                                                        <option value="{{ $key }}"
                                                            {{ old('NgonNgu', $phim->NgonNgu) == $key ? 'selected' : '' }}>
                                                            {{ $lang }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="DoTuoi">Độ tuổi <span class="text-danger">*</span></label>
                                                <select name="DoTuoi" id="DoTuoi" class="form-control" required>
                                                    <option value="">-- Chọn độ tuổi --</option>
                                                    <option value="Loại P"
                                                        {{ old('DoTuoi', $phim->DoTuoi) == 'Loại P' ? 'selected' : '' }}>
                                                        Loại P - Cho mọi lứa tuổi</option>
                                                    <option value="Loại K"
                                                        {{ old('DoTuoi', $phim->DoTuoi) == 'Loại K' ? 'selected' : '' }}>
                                                        Loại K - Dưới 13 tuổi (cần giám hộ)</option>
                                                    <option value="Loại T13 (13+)"
                                                        {{ old('DoTuoi', $phim->DoTuoi) == 'Loại T13 (13+)' ? 'selected' : '' }}>
                                                        Loại T13 (13+)</option>
                                                    <option value="Loại T16 (16+)"
                                                        {{ old('DoTuoi', $phim->DoTuoi) == 'Loại T16 (16+)' ? 'selected' : '' }}>
                                                        Loại T16 (16+)</option>
                                                    <option value="Loại T18 (18+)"
                                                        {{ old('DoTuoi', $phim->DoTuoi) == 'Loại T18 (18+)' ? 'selected' : '' }}>
                                                        Loại T18 (18+)</option>
                                                    <option value="Loại C"
                                                        {{ old('DoTuoi', $phim->DoTuoi) == 'Loại C' ? 'selected' : '' }}>
                                                        Loại C - Không được phổ biến</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="HinhAnh">Hình ảnh</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="HinhAnh"
                                                        name="HinhAnh" accept="image/*">
                                                    <label class="custom-file-label" for="HinhAnh">Chọn file mới
                                                        (để trống nếu không thay đổi)</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Full width --}}
                                        <div class="col-md-12 mt-3">
                                            <div class="form-group">
                                                <label for="MoTaPhim">Mô tả phim <span
                                                        class="text-danger">*</span></label>
                                                <textarea name="MoTaPhim" id="MoTaPhim" class="form-control" rows="5" required>{{ old('MoTaPhim', $phim->MoTaPhim) }}</textarea>
                                            </div>

                                            <div class="form-group text-right mt-2">
                                                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                                    <i class="fas fa-arrow-left"></i> Quay lại
                                                </a>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fas fa-save"></i> Cập nhật phim
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
    <script>
        document.getElementById('ID_TheLoaiPhim').addEventListener('change', function() {
            if (this.value === 'create_new') {
                window.location.href = "{{ route('the-loai.create') }}";
            }
        });
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
