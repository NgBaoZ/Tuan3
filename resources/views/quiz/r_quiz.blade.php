<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm Tra An Toàn Giao Thông</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>
<body class="bg-[#f0f4f8] min-h-screen flex flex-col justify-start items-center p-5">
    <div class="quiz-container flex flex-col md:flex-row gap-5 w-full max-w-6xl">
        <!-- Khu vực câu hỏi -->
        <form id="quiz-form" method="POST" action="/submit-quiz" class="w-full md:w-4/5 bg-white p-5 border-2 border-black rounded-lg min-h-[600px] overflow-y-auto md:ml-[140px]">
            <input type="hidden" name="_token" value="csrf-token-placeholder">
            <div class="question-area">
                <h2 class="text-2xl font-bold mb-5 text-gray-800">Kiểm Tra An Toàn Giao Thông</h2>
                <!-- Câu hỏi mẫu -->
                <div class="question mb-8 relative pr-20" data-index="1">
                    <button type="button" class="flag-btn absolute top-[-10px] right-0 bg-black text-white px-2 py-1 rounded text-sm hover:bg-gray-700 transition z-10">Đánh dấu</button>
                    <div class="question-content">
                        <p class="font-semibold text-base mb-2">1. Khi điều khiển xe mô tô trên đường, bạn phải đội mũ bảo hiểm ở trường hợp nào?</p>
                        <div class="options flex flex-col gap-2">
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q1" value="1" class="mr-2">
                                1. Chỉ khi đi trên đường cao tốc
                            </label>
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q1" value="2" class="mr-2">
                                2. Chỉ khi đi trong thành phố
                            </label>
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q1" value="3" class="mr-2">
                                3. Mọi trường hợp khi tham gia giao thông
                            </label>
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q1" value="4" class="mr-2">
                                4. Chỉ khi trời mưa
                            </label>
                        </div>
                    </div>
                </div>
                <div class="question mb-8 relative pr-20" data-index="2">
                    <button type="button" class="flag-btn absolute top-[-10px] right-0 bg-black text-white px-2 py-1 rounded text-sm hover:bg-gray-700 transition z-10">Đánh dấu</button>
                    <div class="question-content">
                        <p class="font-semibold text-base mb-2">2. Biển báo hình tròn viền đỏ có ý nghĩa gì?</p>
                        <div class="options flex flex-col gap-2">
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q2" value="1" class="mr-2">
                                1. Biển báo cấm
                            </label>
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q2" value="2" class="mr-2">
                                2. Biển báo nguy hiểm
                            </label>
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q2" value="3" class="mr-2">
                                3. Biển báo hiệu lệnh
                            </label>
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q2" value="4" class="mr-2">
                                4. Biển báo chỉ dẫn
                            </label>
                        </div>
                    </div>
                </div>
                <div class="question mb-8 relative pr-20" data-index="3">
                    <button type="button" class="flag-btn absolute top-[-10px] right-0 bg-black text-white px-2 py-1 rounded text-sm hover:bg-gray-700 transition z-10">Đánh dấu</button>
                    <div class="question-content">
                        <p class="font-semibold text-base mb-2">3. Khi gặp đèn vàng tại ngã tư, bạn nên làm gì?</p>
                        <div class="options flex flex-col gap-2">
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q3" value="1" class="mr-2">
                                1. Tăng tốc để vượt qua nhanh
                            </label>
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q3" value="2" class="mr-2">
                                2. Dừng lại nếu an toàn
                            </label>
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q3" value="3" class="mr-2">
                                3. Tiếp tục chạy với tốc độ chậm
                            </label>
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q3" value="4" class="mr-2">
                                4. Bật đèn xi nhan và dừng lại
                            </label>
                        </div>
                    </div>
                </div>
                <div class="question mb-8 relative pr-20" data-index="4">
                    <button type="button" class="flag-btn absolute top-[-10px] right-0 bg-black text-white px-2 py-1 rounded text-sm hover:bg-gray-700 transition z-10">Đánh dấu</button>
                    <div class="question-content">
                        <p class="font-semibold text-base mb-2">4. Độ tuổi tối thiểu để lái xe mô tô dưới 50cc là bao nhiêu?</p>
                        <div class="options flex flex-col gap-2">
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q4" value="1" class="mr-2">
                                1. 16 tuổi
                            </label>
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q4" value="2" class="mr-2">
                                2. 18 tuổi
                            </label>
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q4" value="3" class="mr-2">
                                3. 20 tuổi
                            </label>
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q4" value="4" class="mr-2">
                                4. 14 tuổi
                            </label>
                        </div>
                    </div>
                </div>
                <div class="question mb-8 relative pr-20" data-index="5">
                    <button type="button" class="flag-btn absolute top-[-10px] right-0 bg-black text-white px-2 py-1 rounded text-sm hover:bg-gray-700 transition z-10">Đánh dấu</button>
                    <div class="question-content">
                        <p class="font-semibold text-base mb-2">5. Khi lái xe, khoảng cách an toàn tối thiểu giữa hai xe là bao nhiêu?</p>
                        <div class="options flex flex-col gap-2">
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q5" value="1" class="mr-2">
                                1. 2 mét
                            </label>
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q5" value="2" class="mr-2">
                                2. 5 mét
                            </label>
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q5" value="3" class="mr-2">
                                3. Phụ thuộc vào tốc độ và điều kiện đường
                            </label>
                            <label class="p-2 bg-gray-100 rounded cursor-pointer flex items-center">
                                <input type="radio" name="q5" value="4" class="mr-2">
                                4. 10 mét
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Sidebar -->
        <div class="sidebar fixed right-5 top-5 w-[300px] flex flex-col gap-5 md:static md:w-1/5">
            <div class="sticky top-0 z-50 flex flex-col gap-4">
            <div class="timer bg-gray-400 p-4 border-2 border-black rounded-lg text-white text-center ">
                <span id="timer-text" class="block text-lg font-bold">Thời gian: 20:00</span>
                <div class="progress-bar w-full h-2.5 bg-gray-300 rounded mt-2 overflow-hidden">
                    <div class="progress bg-green-500 h-full rounded transition-all duration-1000" id="progress-bar" style="width: 100%;"></div>
                </div>
            </div>
           <div class="question-list bg-blue-600 p-2 border-2 border-black rounded-lg overflow-x-auto grid gap-1.5 "
            style="grid-template-columns: repeat(5, minmax(0, 32px));">
                <button type="button" onclick="scrollToQuestion(1)" data-index="1" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">1</button>
                <button type="button" onclick="scrollToQuestion(2)" data-index="2" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">2</button>
                <button type="button" onclick="scrollToQuestion(3)" data-index="3" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">3</button>
                <button type="button" onclick="scrollToQuestion(4)" data-index="4" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">4</button>
                <button type="button" onclick="scrollToQuestion(5)" data-index="5" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">5</button>
                <button type="button" onclick="scrollToQuestion(6)" data-index="6" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">6</button>
                <button type="button" onclick="scrollToQuestion(7)" data-index="7" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">7</button>
                <button type="button" onclick="scrollToQuestion(8)" data-index="8" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">8</button>
                <button type="button" onclick="scrollToQuestion(9)" data-index="9" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">9</button>
                <button type="button" onclick="scrollToQuestion(10)" data-index="10" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">10</button>
                <button type="button" onclick="scrollToQuestion(1)" data-index="11" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">11</button>
                <button type="button" onclick="scrollToQuestion(2)" data-index="12" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">12</button>
                <button type="button" onclick="scrollToQuestion(3)" data-index="13" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">13</button>
                <button type="button" onclick="scrollToQuestion(4)" data-index="14" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">14</button>
                <button type="button" onclick="scrollToQuestion(5)" data-index="15" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">15</button>
                <button type="button" onclick="scrollToQuestion(1)" data-index="16" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">16</button>
                <button type="button" onclick="scrollToQuestion(2)" data-index="17" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">17</button>
                <button type="button" onclick="scrollToQuestion(3)" data-index="18" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">18</button>
                <button type="button" onclick="scrollToQuestion(4)" data-index="19" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">19</button>
                <button type="button" onclick="scrollToQuestion(5)" data-index="20" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">20</button>
                <button type="button" onclick="scrollToQuestion(1)" data-index="21" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">21</button>
                <button type="button" onclick="scrollToQuestion(2)" data-index="22" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">22</button>
                <button type="button" onclick="scrollToQuestion(3)" data-index="23" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">23</button>
                <button type="button" onclick="scrollToQuestion(4)" data-index="24" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">24</button>
                <button type="button" onclick="scrollToQuestion(5)" data-index="25" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">25</button>
                <button type="button" onclick="scrollToQuestion(1)" data-index="26" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">26</button>
                <button type="button" onclick="scrollToQuestion(2)" data-index="27" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">27</button>
                <button type="button" onclick="scrollToQuestion(3)" data-index="28" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">28</button>
                <button type="button" onclick="scrollToQuestion(4)" data-index="29" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">29</button>
                <button type="button" onclick="scrollToQuestion(5)" data-index="30" class="bg-white hover:scale-110 rounded w-8 h-8 flex items-center justify-center text-base transition-transform">30</button>
            </div>
            </div>
        </div>
    </div>
    <form id="quizForm" action="{{ route('result') }}" method="POST">
    <button type="submit" class="submit-btn fixed bottom-5 left-[80%] bg-red-600 text-white px-4 py-3 rounded-lg font-bold text-lg hover:bg-red-800 transition z-[1000] w-[200px] md:left-[80%]" onclick="return confirm('Bạn có chắc muốn nộp bài?');">
        Nộp bài
    </button>
</form>

    <script>
        let timeLeft = 1200; // 20 phút
        const timerText = document.getElementById('timer-text');
        const progressBar = document.getElementById('progress-bar');
        const quizForm = document.getElementById('quiz-form');

        function updateTimer() {
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            timerText.textContent = `Thời gian: ${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            const progressWidth = (timeLeft / 1200) * 100;
            progressBar.style.width = `${progressWidth}%`;
            if (timeLeft > 0) timeLeft--;
            else {
                clearInterval(timerInterval);
                alert('Hết thời gian!');
                submitQuiz();
            }
        }
        const timerInterval = setInterval(updateTimer, 1000);
        updateTimer();

        function scrollToQuestion(index) {
            const question = document.querySelector(`.question[data-index="${index}"]`);
            if (question) question.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        document.querySelectorAll('.flag-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const question = btn.closest('.question');
                const index = question.dataset.index;
                const listBtn = document.querySelector(`.question-list button[data-index="${index}"]`);
                btn.classList.toggle('bg-red-600');
                listBtn.classList.toggle('bg-red-600');
                listBtn.classList.toggle('text-white');
                if (btn.classList.contains('bg-red-600')) {
                    listBtn.classList.remove('bg-white', 'bg-green-600'); // Xóa nền trắng/xanh khi đánh dấu đỏ
                } else {
                    listBtn.classList.add('bg-white'); // Quay lại trắng khi bỏ đánh dấu
                }
            });
        });

        // Thêm sự kiện khi chọn đáp án
        document.querySelectorAll('input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const question = this.closest('.question');
                const index = question.dataset.index;
                const listBtn = document.querySelector(`.question-list button[data-index="${index}"]`);
                if (this.checked) {
                    listBtn.classList.remove('bg-white', 'bg-red-600', 'text-white'); // Xóa nền trắng/đỏ
                    listBtn.classList.add('bg-green-600', 'text-white'); // Thêm nền xanh
                }
            });
        });

        function submitQuiz() {
            quizForm.submit();
        }
    </script>
</body>
</html>