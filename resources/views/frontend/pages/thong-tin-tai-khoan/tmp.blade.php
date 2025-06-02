<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Interface</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f5f7fa;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 20px;
        }

        .sidebar {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            height: fit-content;
        }

        .profile-info {
            text-align: center;
            margin-bottom: 24px;
        }

        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #e0e7ff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
            font-size: 24px;
            color: #6366f1;
        }

        .profile-name {
            font-size: 18px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 4px;
        }

        .profile-rating {
            color: #f59e0b;
            font-size: 14px;
        }

        .spending-info {
            margin-bottom: 24px;
        }

        .spending-title {
            font-size: 16px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 16px;
        }

        .spending-amount {
            color: #f59e0b;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 16px;
        }

        .spending-slider {
            position: relative;
            height: 8px;
            background: #e5e7eb;
            border-radius: 4px;
            margin-bottom: 12px;
        }

        .spending-progress {
            height: 100%;
            background: linear-gradient(to right, #3b82f6, #10b981);
            border-radius: 4px;
            width: 0%;
        }

        .spending-labels {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: #6b7280;
        }

        .contact-info {
            border-top: 1px solid #e5e7eb;
            padding-top: 20px;
        }

        .contact-item {
            padding: 12px 0;
            border-bottom: 1px solid #f3f4f6;
            color: #374151;
            font-size: 14px;
            cursor: pointer;
            transition: color 0.2s;
        }

        .contact-item:hover {
            color: #3b82f6;
        }

        .main-content {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .tabs {
            display: flex;
            background: #f9fafb;
            border-bottom: 1px solid #e5e7eb;
        }

        .tab {
            padding: 16px 24px;
            font-size: 14px;
            font-weight: 500;
            color: #6b7280;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            transition: all 0.2s;
        }

        .tab.active {
            color: #3b82f6;
            border-bottom-color: #3b82f6;
            background: white;
        }

        .tab-content {
            display: none;
            padding: 24px;
        }

        .tab-content.active {
            display: block;
        }

        .transaction-list {
            margin-top: 16px;
        }

        .transaction-item {
            display: flex;
            align-items: center;
            padding: 16px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            margin-bottom: 12px;
            cursor: pointer;
            transition: all 0.2s;
            background: white;
        }

        .transaction-item:hover {
            border-color: #3b82f6;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .movie-poster {
            width: 60px;
            height: 80px;
            border-radius: 8px;
            overflow: hidden;
            margin-right: 16px;
            flex-shrink: 0;
        }

        .movie-poster img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .transaction-info {
            flex: 1;
            min-width: 0;
        }

        .movie-title {
            font-size: 18px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 8px;
        }

        .movie-details {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .movie-type {
            background: #f3f4f6;
            color: #374151;
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 500;
        }

        .age-rating {
            background: #f59e0b;
            color: white;
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
        }

        .transaction-details {
            text-align: right;
            color: #6b7280;
            font-size: 14px;
            flex-shrink: 0;
        }

        .cinema-location {
            font-weight: 500;
            color: #374151;
            margin-bottom: 4px;
        }

        .showtime {
            margin-bottom: 8px;
        }

        .detail-link {
            color: #f59e0b;
            font-weight: 600;
            cursor: pointer;
        }

        .detail-link:hover {
            color: #d97706;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #374151;
        }

        .form-input {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.2s;
        }

        .form-input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .form-input.error {
            border-color: #ef4444;
        }

        .gender-options {
            display: flex;
            gap: 20px;
            margin-top: 8px;
        }

        .gender-option {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .gender-option input[type="radio"] {
            accent-color: #3b82f6;
        }

        .btn-group {
            display: flex;
            gap: 12px;
            justify-content: flex-end;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-primary {
            background: #f59e0b;
            color: white;
        }

        .btn-primary:hover {
            background: #d97706;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
        }

        .btn-secondary {
            background: #6b7280;
            color: white;
        }

        .btn-secondary:hover {
            background: #4b5563;
            transform: translateY(-1px);
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            animation: fadeIn 0.3s ease;
        }

        .modal.show {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: white;
            border-radius: 12px;
            padding: 24px;
            max-width: 400px;
            width: 90%;
            position: relative;
            animation: slideIn 0.3s ease;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-title {
            font-size: 18px;
            font-weight: 600;
            color: #1f2937;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 24px;
            color: #6b7280;
            cursor: pointer;
            padding: 0;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .transaction-detail {
            text-align: center;
        }

        .transaction-detail-icon {
            width: 80px;
            height: 80px;
            border-radius: 12px;
            background: #fee2e2;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
            font-size: 32px;
            font-weight: bold;
            color: #dc2626;
        }

        .transaction-detail-name {
            font-size: 20px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 8px;
        }

        .transaction-detail-type {
            background: #f59e0b;
            color: white;
            padding: 4px 12px;
            border-radius: 16px;
            font-size: 14px;
            font-weight: 500;
            display: inline-block;
            margin-bottom: 20px;
        }

        .transaction-detail-info {
            background: #f9fafb;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 20px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
        }

        .info-row:last-child {
            margin-bottom: 0;
        }

        .info-label {
            color: #6b7280;
            font-size: 14px;
        }

        .info-value {
            color: #1f2937;
            font-weight: 500;
            font-size: 14px;
        }

        .qr-code {
            width: 100px;
            height: 100px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><rect width="100" height="100" fill="white"/><rect x="10" y="10" width="15" height="15" fill="black"/><rect x="75" y="10" width="15" height="15" fill="black"/><rect x="10" y="75" width="15" height="15" fill="black"/><rect x="45" y="45" width="10" height="10" fill="black"/></svg>') center/contain no-repeat;
            margin: 0 auto;
            border: 1px solid #e5e7eb;
            border-radius: 4px;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .change-password-form {
            display: none;
        }

        .change-password-form.show {
            display: block;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .btn-group {
                justify-content: stretch;
            }
            
            .btn-group .btn {
                flex: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="profile-info">
                <div class="avatar">📷</div>
                <div class="profile-name">Nguyen Chi Tai</div>
                <div class="profile-rating">⭐ 0 Stars</div>
            </div>
            
            <div class="spending-info">
                <div class="spending-title">Tổng chi tiêu 2025 ℹ️</div>
                <div class="spending-amount">0 đ</div>
                <div class="spending-slider">
                    <div class="spending-progress"></div>
                </div>
                <div class="spending-labels">
                    <span>0 đ</span>
                    <span>2.000.000 đ</span>
                    <span>4.000.000 đ</span>
                </div>
            </div>
            
            <div class="contact-info">
                <div class="contact-item">HOTLINE hỗ trợ: 19002224 (9:00 - 22:00)</div>
                <div class="contact-item">Email: hotro@galaxystudio.vn</div>
                <div class="contact-item">Câu hỏi thường gặp</div>
            </div>
        </div>

        <div class="main-content">
            <div class="tabs">
                <div class="tab active" data-tab="transaction-history">Lịch Sử Giao Dịch</div>
                <div class="tab" data-tab="personal-info">Thông Tin Cá Nhân</div>
                <div class="tab" data-tab="notifications">Thông Báo</div>
                <div class="tab" data-tab="gifts">Quà Tặng</div>
                <div class="tab" data-tab="policy">Chính Sách</div>
            </div>

            <div class="tab-content active" id="transaction-history">
                <p style="color: #6b7280; margin-bottom: 16px;">Lưu ý: chỉ hiển thị 20 giao dịch gần nhất</p>
                <p style="color: #6b7280; margin-bottom: 20px;">Tháng 02/2024</p>
                
                <div class="transaction-list">
                    <div class="transaction-item" onclick="showTransactionDetail()">
                        <div class="movie-poster">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 60 80'%3E%3Crect width='60' height='80' fill='%23dc2626'/%3E%3Ctext x='30' y='45' font-family='Arial' font-size='20' font-weight='bold' fill='white' text-anchor='middle'%3EMAI%3C/text%3E%3C/svg%3E" alt="Mai Movie Poster">
                        </div>
                        <div class="transaction-info">
                            <div class="movie-title">Mai</div>
                            <div class="movie-details">
                                <span class="movie-type">Digital Phụ Đề</span>
                                <span class="age-rating">T18</span>
                            </div>
                        </div>
                        <div class="transaction-details">
                            <div class="cinema-location">Galaxy Bến Tre</div>
                            <div class="showtime">19:45 - Thứ Sáu, 16/02/2024</div>
                            <div class="detail-link">Chi tiết</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="personal-info">
                <form id="personalInfoForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Họ và tên</label>
                            <input type="text" class="form-input" value="Nguyen Chi Tai" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Ngày sinh</label>
                            <input type="date" class="form-input" value="2004-09-16" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-input" value="taizxc123s@gmail.com" required>
                            <small style="color: #f59e0b;">Thay đổi</small>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Số điện thoại</label>
                            <input type="tel" class="form-input" value="0394378614" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Mật khẩu</label>
                        <input type="password" class="form-input" value="••••••••••" readonly>
                        <small style="color: #f59e0b; cursor: pointer;" onclick="toggleChangePassword()">Thay đổi</small>
                        
                        <div class="gender-options">
                            <div class="gender-option">
                                <input type="radio" id="male" name="gender" value="male" checked>
                                <label for="male">Nam</label>
                            </div>
                            <div class="gender-option">
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female">Nữ</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="change-password-form" id="changePasswordForm">
                        <h3 style="margin-bottom: 16px; color: #1f2937;">Đổi mật khẩu</h3>
                        <div class="form-group">
                            <label class="form-label">Mật khẩu hiện tại</label>
                            <input type="password" class="form-input" placeholder="Nhập mật khẩu hiện tại" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Mật khẩu mới</label>
                            <input type="password" class="form-input" placeholder="Nhập mật khẩu mới" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Xác nhận mật khẩu mới</label>
                            <input type="password" class="form-input" placeholder="Nhập lại mật khẩu mới" required>
                        </div>
                    </div>
                    
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary" onclick="toggleChangePassword()" id="changePasswordBtn">Đổi mật khẩu</button>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
            </div>

            <div class="tab-content" id="notifications">
                <h2 style="color: #1f2937; margin-bottom: 20px;">Thông báo</h2>
                <p style="color: #6b7280;">Chưa có thông báo nào.</p>
            </div>

            <div class="tab-content" id="gifts">
                <h2 style="color: #1f2937; margin-bottom: 20px;">Quà tặng</h2>
                <p style="color: #6b7280;">Chưa có quà tặng nào.</p>
            </div>

            <div class="tab-content" id="policy">
                <h2 style="color: #1f2937; margin-bottom: 20px;">Chính sách</h2>
                <p style="color: #6b7280;">Thông tin chính sách sẽ được cập nhật tại đây.</p>
            </div>
        </div>
    </div>

    <!-- Transaction Detail Modal -->
    <div class="modal" id="transactionModal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Chi tiết giao dịch</div>
                <button class="close-btn" onclick="closeTransactionDetail()">&times;</button>
            </div>
            
            <div class="transaction-detail">
                <div class="transaction-detail-icon">MAI</div>
                <div class="transaction-detail-name">Mai</div>
                <div class="transaction-detail-type">T18</div>
                
                <div class="transaction-detail-info">
                    <div class="info-row">
                        <span class="info-label">Galaxy Bến Tre</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Suất:</span>
                        <span class="info-value">19:45 - Thứ Sáu, 16/02/2024</span>
                    </div>
                </div>
                
                <div class="qr-code"></div>
                
                <div style="margin-top: 20px;">
                    <div class="info-row">
                        <span class="info-label">Mã vé</span>
                        <span class="info-label">Stars</span>
                        <span class="info-label">Giá</span>
                    </div>
                    <div class="info-row">
                        <span class="info-value">8</span>
                        <span class="info-value">8</span>
                        <span class="info-value">300.000 đ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tab functionality
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs and contents
                tabs.forEach(t => t.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));
                
                // Add active class to clicked tab
                tab.classList.add('active');
                
                // Show corresponding content
                const targetTab = tab.getAttribute('data-tab');
                document.getElementById(targetTab).classList.add('active');
            });
        });

        // Transaction detail modal
        function showTransactionDetail() {
            document.getElementById('transactionModal').classList.add('show');
        }

        function closeTransactionDetail() {
            document.getElementById('transactionModal').classList.remove('show');
        }

        // Close modal when clicking outside
        document.getElementById('transactionModal').addEventListener('click', (e) => {
            if (e.target === e.currentTarget) {
                closeTransactionDetail();
            }
        });

        // Change password toggle
        let changePasswordVisible = false;

        function toggleChangePassword() {
            const form = document.getElementById('changePasswordForm');
            const btn = document.getElementById('changePasswordBtn');
            
            changePasswordVisible = !changePasswordVisible;
            
            if (changePasswordVisible) {
                form.classList.add('show');
                btn.textContent = 'Hủy đổi mật khẩu';
                btn.classList.remove('btn-secondary');
                btn.classList.add('btn-primary');
            } else {
                form.classList.remove('show');
                btn.textContent = 'Đổi mật khẩu';
                btn.classList.remove('btn-primary');
                btn.classList.add('btn-secondary');
                
                // Clear password fields
                const passwordInputs = form.querySelectorAll('input[type="password"]');
                passwordInputs.forEach(input => input.value = '');
            }
        }

        // Form submission
        document.getElementById('personalInfoForm').addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Simple validation
            const inputs = document.querySelectorAll('.form-input[required]');
            let isValid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    input.classList.add('error');
                    isValid = false;
                } else {
                    input.classList.remove('error');
                }
            });
            
            if (changePasswordVisible) {
                const currentPassword = document.querySelector('#changePasswordForm input:nth-of-type(1)');
                const newPassword = document.querySelector('#changePasswordForm input:nth-of-type(2)');
                const confirmPassword = document.querySelector('#changePasswordForm input:nth-of-type(3)');
                
                if (newPassword.value !== confirmPassword.value) {
                    confirmPassword.classList.add('error');
                    alert('Mật khẩu mới không khớp!');
                    return;
                }
            }
            
            if (isValid) {
                alert('Cập nhật thông tin thành công!');
                
                if (changePasswordVisible) {
                    alert('Đổi mật khẩu thành công!');
                    toggleChangePassword();
                }
            } else {
                alert('Vui lòng điền đầy đủ thông tin!');
            }
        });

        // Initialize spending progress animation
        setTimeout(() => {
            document.querySelector('.spending-progress').style.width = '0%';
        }, 500);
    </script>
</body>
</html>