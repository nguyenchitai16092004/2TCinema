document.addEventListener("DOMContentLoaded", function () {
    // Get all necessary elements
    const theaterBtn = document.getElementById("theater-btn");
    const theaterContent = document.getElementById("theater-content");
    const movieBtn = document.getElementById("movie-btn");
    const movieContent = document.getElementById("movie-content");
    const dateBtn = document.getElementById("date-btn");
    const dateContent = document.getElementById("date-content");
    const timeBtn = document.getElementById("time-btn");
    const timeContent = document.getElementById("time-content");
    const bookBtn = document.getElementById("book-btn");
    const theaterInfo = document.getElementById("theater-info");
    const bookingSummary = document.getElementById("booking-summary");

    // Step indicators
    const step1 = document.getElementById("step-1");
    const step2 = document.getElementById("step-2");
    const step3 = document.getElementById("step-3");
    const step4 = document.getElementById("step-4");
    const separator1 = document.getElementById("separator-1");
    const separator2 = document.getElementById("separator-2");
    const separator3 = document.getElementById("separator-3");

    // Summary elements
    const summaryMovieTitle = document.getElementById("summary-movie-title");
    const summaryMovieDetails = document.getElementById(
        "summary-movie-details"
    );
    const summaryTheater = document.getElementById("summary-theater");
    const summaryDate = document.getElementById("summary-date");
    const summaryTime = document.getElementById("summary-time");

    // Selections
    let selectedTheater = "";
    let selectedMovie = "";
    let selectedDate = "";
    let selectedTime = "";

    // Fake movie data
    const movieData = {
        "BUỒN THÂN BẠN THÂN": {
            duration: "120 phút",
            genre: "Hài, Tình cảm",
            rating: "P - PHIM DÀNH CHO MỌI ĐỐI TƯỢNG",
        },
        "GODZILLA X KONG: ĐẾ QUỐC MỚI": {
            duration: "115 phút",
            genre: "Hành động, Viễn tưởng",
            rating: "C13 - PHIM CẤM KHÁN GIẢ DƯỚI 13 TUỔI",
        },
        "KUNG FU PANDA 4": {
            duration: "94 phút",
            genre: "Hoạt hình, Hài",
            rating: "P - PHIM DÀNH CHO MỌI ĐỐI TƯỢNG",
        },
        "THANH GƯƠM DIỆT QUỶ: LÀNG RÈN KIẾM": {
            duration: "108 phút",
            genre: "Hoạt hình, Hành động",
            rating: "C13 - PHIM CẤM KHÁN GIẢ DƯỚI 13 TUỔI",
        },
        "GIA ĐÌNH CROODS": {
            duration: "95 phút",
            genre: "Hoạt hình, Phiêu lưu",
            rating: "P - PHIM DÀNH CHO MỌI ĐỐI TƯỢNG",
        },
    };

    // Close all dropdowns
    function closeAllDropdowns() {
        const dropdowns = document.querySelectorAll(".dropdown-content");
        dropdowns.forEach((dropdown) => {
            dropdown.classList.remove("show");
        });
    }

    // Close dropdowns when clicking outside
    window.addEventListener("click", function (event) {
        if (
            !event.target.matches(".dropdown-btn") &&
            !event.target.parentElement.matches(".dropdown-btn") &&
            !event.target.matches(".fa-chevron-down")
        ) {
            closeAllDropdowns();
        }
    });

    // Theater dropdown functionality
    theaterBtn.addEventListener("click", function () {
        closeAllDropdowns();
        theaterContent.classList.toggle("show");
    });

    // Theater selection
    theaterContent.querySelectorAll(".dropdown-item").forEach((item) => {
        item.addEventListener("click", function () {
            selectedTheater = this.textContent;
            theaterBtn.innerHTML = `<span>${selectedTheater}</span><span><i class="fas fa-chevron-down"></i></span>`;
            theaterBtn.classList.add("active");
            theaterContent.classList.remove("show");

            // Update step indicators
            step2.classList.add("active");
            separator1.classList.add("active");

            // Enable movie selection
            movieBtn.classList.remove("disabled");

            // Update summary
            updateSummary();

            // Reset subsequent selections
            resetSelection("movie");
        });
    });

    // Movie dropdown functionality
    movieBtn.addEventListener("click", function () {
        if (!this.classList.contains("disabled")) {
            closeAllDropdowns();
            movieContent.classList.toggle("show");
        }
    });

    // Movie selection
    movieContent.querySelectorAll(".dropdown-item").forEach((item) => {
        item.addEventListener("click", function () {
            selectedMovie = this.textContent;
            movieBtn.innerHTML = `<span>${selectedMovie}</span><span><i class="fas fa-chevron-down"></i></span>`;
            movieBtn.classList.add("active");
            movieContent.classList.remove("show");

            // Update step indicators
            step3.classList.add("active");
            separator2.classList.add("active");

            // Enable date selection
            dateBtn.classList.remove("disabled");

            // Update summary
            updateSummary();

            // Reset subsequent selections
            resetSelection("date");
        });
    });

    // Date dropdown functionality
    dateBtn.addEventListener("click", function () {
        if (!this.classList.contains("disabled")) {
            closeAllDropdowns();
            dateContent.classList.toggle("show");
        }
    });

    // Date selection
    dateContent.querySelectorAll(".dropdown-item").forEach((item) => {
        item.addEventListener("click", function () {
            selectedDate = this.textContent;
            dateBtn.innerHTML = `<span>${selectedDate}</span><span><i class="fas fa-chevron-down"></i></span>`;
            dateBtn.classList.add("active");
            dateContent.classList.remove("show");

            // Update step indicators
            step4.classList.add("active");
            separator3.classList.add("active");

            // Enable time selection
            timeBtn.classList.remove("disabled");

            // Update summary
            updateSummary();

            // Reset subsequent selections
            resetSelection("time");
        });
    });

    // Time dropdown functionality
    timeBtn.addEventListener("click", function () {
        if (!this.classList.contains("disabled")) {
            closeAllDropdowns();
            timeContent.classList.toggle("show");
        }
    });

    // Time selection
    timeContent.querySelectorAll(".dropdown-item").forEach((item) => {
        item.addEventListener("click", function () {
            selectedTime = this.textContent;
            timeBtn.innerHTML = `<span>${selectedTime}</span><span><i class="fas fa-chevron-down"></i></span>`;
            timeBtn.classList.add("active");
            timeContent.classList.remove("show");

            // Enable booking button
            bookBtn.classList.remove("disabled");

            // Make booking button glow
            bookBtn.style.animation = "pulse 1.5s infinite";

            // Update summary
            updateSummary();
        });
    });

    // Booking button functionality
    bookBtn.addEventListener("click", function () {
        if (!this.classList.contains("disabled")) {
            alert(
                `Đặt vé thành công!\n\nRạp: ${selectedTheater}\nPhim: ${selectedMovie}\nNgày: ${selectedDate}\nSuất: ${selectedTime}`
            );
        }
    });

    // Update booking summary
    function updateSummary() {
        if (selectedTheater) {
            summaryTheater.textContent = selectedTheater;
        }

        if (selectedMovie) {
            summaryMovieTitle.textContent = selectedMovie;
            const movieInfo = movieData[selectedMovie];
            if (movieInfo) {
                summaryMovieDetails.textContent = `${movieInfo.duration} | ${movieInfo.genre} | ${movieInfo.rating}`;
            }
        }

        if (selectedDate) {
            summaryDate.textContent = selectedDate;
        }

        if (selectedTime) {
            summaryTime.textContent = selectedTime;
        }

        // Show booking summary if at least theater and movie are selected
        if (selectedTheater && selectedMovie) {
            bookingSummary.classList.add("show");
        }
    }

    // Reset subsequent selections
    function resetSelection(startFrom) {
        if (startFrom === "movie" || startFrom === "all") {
            selectedMovie = "";
            movieBtn.innerHTML =
                '<span>2. Chọn Phim</span><span><i class="fas fa-chevron-down"></i></span>';
            movieBtn.classList.remove("active");
            step3.classList.remove("active");
            separator2.classList.remove("active");

            selectedDate = "";
            dateBtn.innerHTML =
                '<span>3. Chọn Ngày</span><span><i class="fas fa-chevron-down"></i></span>';
            dateBtn.classList.remove("active");
            dateBtn.classList.add("disabled");
            step4.classList.remove("active");
            separator3.classList.remove("active");

            selectedTime = "";
            timeBtn.innerHTML =
                '<span>4. Chọn Suất</span><span><i class="fas fa-chevron-down"></i></span>';
            timeBtn.classList.remove("active");
            timeBtn.classList.add("disabled");

            bookBtn.classList.add("disabled");
            bookBtn.style.animation = "";

            // Hide booking summary
            bookingSummary.classList.remove("show");
        } else if (startFrom === "date") {
            selectedDate = "";
            dateBtn.innerHTML =
                '<span>3. Chọn Ngày</span><span><i class="fas fa-chevron-down"></i></span>';
            dateBtn.classList.remove("active");
            step4.classList.remove("active");
            separator3.classList.remove("active");

            selectedTime = "";
            timeBtn.innerHTML =
                '<span>4. Chọn Suất</span><span><i class="fas fa-chevron-down"></i></span>';
            timeBtn.classList.remove("active");
            timeBtn.classList.add("disabled");

            bookBtn.classList.add("disabled");
            bookBtn.style.animation = "";
        } else if (startFrom === "time") {
            selectedTime = "";
            timeBtn.innerHTML =
                '<span>4. Chọn Suất</span><span><i class="fas fa-chevron-down"></i></span>';
            timeBtn.classList.remove("active");

            bookBtn.classList.add("disabled");
            bookBtn.style.animation = "";
        }

        // Update summary
        updateSummary();
    }
});
$(document).ready(function () {
    $(".popup-youtube").magnificPopup({
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 300,
        preloader: false,
        fixedContentPos: false,
    });
});
