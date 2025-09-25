<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ - Hệ Thống Thi Trắc Nghiệm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .custom-gradient {
            background: linear-gradient(135deg, #072f68 0%, #4f9cab 100%);
        }
    </style>
</head>
<body class="custom-gradient flex items-center justify-center min-h-screen p-5">
    <!-- Nút Đăng Xuất ở góc trên bên trái -->
    <div class="absolute top-4 left-4">
        <a href="{{ route('logout') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">Đăng Xuất</a>
    </div>
    <!-- Nội dung chính -->
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md text-center">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Thi Trắc Nghiệm An Toàn Giao Thông</h1>
            <div class="space-y-4">
                <a href="{{ route('r_quiz') }}" class="block w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">Bắt Đầu Thi</a>
                <a href="/thi-thu" class="block w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition">Thi Thử</a>
                <a href="/lich-su" class="block w-full bg-yellow-600 text-white py-3 rounded-lg hover:bg-yellow-700 transition">Lịch Sử</a>
                <!-- link 600 câu-->
                <a href="https://www.csgt.vn/upload/services/273963059_B%E1%BB%99%20600%20c%C3%A2u%20h%E1%BB%8Fi%20d%C3%B9ng%20cho%20s%C3%A1t%20h%E1%BA%A1ch%20l%C3%A1i%20xe%20c%C6%A1%20gi%E1%BB%9Bi%20%C4%91%C6%B0%E1%BB%9Dng%20b%E1%BB%99.pdf"
                 target="_blank" 
                class="block w-full text-blue-600 underline hover:text-blue-800 transition">Xem 600 Câu Trắc Nghiệm</a>
            </div>
        </div>
    </div>
</body>
</html>