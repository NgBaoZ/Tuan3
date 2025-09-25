<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Bài Kiểm Tra</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans p-8">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-6">
        <!-- Hàng trên: Kết quả tóm tắt -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-center mb-4">Kết Quả</h1>
            <div class="grid grid-cols-3 gap-4 text-center">
                <div class="bg-blue-100 p-4 rounded-lg">
                    <span class="block text-lg font-semibold">Số câu đúng / Tổng câu</span>
                    <span class="text-3xl font-bold">28 / 30</span>
                </div>
                <div class="bg-green-100 p-4 rounded-lg">
                    <span class="block text-lg font-semibold">Trạng thái</span>
                    <span class="text-3xl font-bold text-green-600">Đạt</span>
                </div>
                <div class="bg-yellow-100 p-4 rounded-lg">
                    <span class="block text-lg font-semibold">Câu điểm liệt</span>
                    <span class="text-3xl font-bold">0</span>
                </div>
            </div>
        </div>

        <!-- Hàng dưới: Chi tiết các câu sai -->
        <div>
            <h2 class="text-xl font-bold mb-6">Chi Tiết Các Câu Sai</h2>
            <!-- Câu sai 1 -->
            <div class="question mb-8 relative" data-index="3">
                <div class="question-content">
                    <p class="font-semibold text-base mb-2">3. Khi điều khiển xe mô tô trên đường, bạn phải đội mũ bảo hiểm ở trường hợp nào?</p>
                    <div class="options flex flex-col gap-2">
                        <label class="p-2 bg-gray-100 rounded cursor-not-allowed flex items-center">
                            <input type="radio" name="q3" value="1" class="mr-2" disabled>
                            <span class="text-red-600">1. Chỉ khi đi trên đường cao tốc</span>
                        </label>
                        <label class="p-2 bg-gray-100 rounded cursor-not-allowed flex items-center">
                            <input type="radio" name="q3" value="2" class="mr-2" disabled>
                            <span class="text-green-600">3. Mọi trường hợp khi tham gia giao thông</span>
                        </label>
                        <label class="p-2 bg-gray-100 rounded cursor-not-allowed flex items-center">
                            <input type="radio" name="q3" value="3" class="mr-2" disabled checked>
                            <span class="text-gray-700">2. Chỉ khi đi trong thành phố</span>
                        </label>
                        <label class="p-2 bg-gray-100 rounded cursor-not-allowed flex items-center">
                            <input type="radio" name="q3" value="4" class="mr-2" disabled>
                            <span class="text-gray-700">4. Chỉ khi trời mưa</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Câu sai 2 -->
            <div class="question mb-8 relative" data-index="7">
                <div class="question-content">
                    <p class="font-semibold text-base mb-2">7. Tốc độ tối đa cho phép khi đi trong khu đông dân cư là bao nhiêu?</p>
                    <div class="options flex flex-col gap-2">
                        <label class="p-2 bg-gray-100 rounded cursor-not-allowed flex items-center">
                            <input type="radio" name="q7" value="1" class="mr-2" disabled>
                            <span class="text-gray-700">1. 50 km/h</span>
                        </label>
                        <label class="p-2 bg-gray-100 rounded cursor-not-allowed flex items-center">
                            <input type="radio" name="q7" value="2" class="mr-2" disabled checked>
                            <span class="text-red-600">2. 70 km/h</span>
                        </label>
                        <label class="p-2 bg-gray-100 rounded cursor-not-allowed flex items-center">
                            <input type="radio" name="q7" value="3" class="mr-2" disabled>
                            <span class="text-green-600">3. 40 km/h</span>
                        </label>
                        <label class="p-2 bg-gray-100 rounded cursor-not-allowed flex items-center">
                            <input type="radio" name="q7" value="4" class="mr-2" disabled>
                            <span class="text-gray-700">4. 60 km/h</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nút quay lại trang chủ -->
        <div class="text-right mt-6">
            <a href="/" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Quay lại trang chủ</a>
        </div>
    </div>
</body>
</html>