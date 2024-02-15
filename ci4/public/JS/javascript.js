window.onload = function () {
            alert("Welcome to Daniel Ramolete's Website!");
            startCountdown();
        };

        var originalFontSize;

        function increaseFontSize(element) {
            originalFontSize = window.getComputedStyle(element, null).getPropertyValue('font-size');
            element.style.fontSize = "30px";
        }

        function restoreFontSize(element) {
            element.style.fontSize = originalFontSize;
        }

        function toggleBackground() {
            var body = document.body;
            var currentBackground = body.style.backgroundImage;

            if (currentBackground === 'none') {
                body.style.backgroundImage = 'url("cloud.jpg")';
            } else {
                body.style.backgroundImage = 'none';
            }
        }

        // Play/Pause video
        var video = document.getElementById("myVideo");

        function togglePlayPause() {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        video.addEventListener("click", togglePlayPause);

        // Change Background Color
        function changeRandomColor() {
            var colors = ["#FF6347", "#7FFFD4", "#FFD700", "#8A2BE2", "#00FF7F", "#FF4500"];
            var randomColor = colors[Math.floor(Math.random() * colors.length)];
            document.body.style.backgroundColor = randomColor;
        }

        // Display Greeting
        function displayGreeting() {
            var nameInput = document.getElementById("nameInput").value;
            var greetingMessage = document.getElementById("greetingMessage");

            if (nameInput.trim() !== "") {
                greetingMessage.textContent = "Hello, " + nameInput + "! Welcome to the website!";
            } else {
                greetingMessage.textContent = "Please enter your name.";
            }
        }

        // Countdown Timer
        function startCountdown() {
            var seconds = 10;
            var countdownElement = document.getElementById("countdown");

            var countdownInterval = setInterval(function () {
                countdownElement.textContent = "Countdown: " + seconds + " seconds";

                if (seconds <= 0) {
                    clearInterval(countdownInterval);
                    countdownElement.textContent = "Countdown Finished!";
                }

                seconds--;
            }, 1000);
        }

        // Toggle Paragraphs
        function toggleParagraphs() {
            var paragraphs = document.querySelectorAll('p');
            paragraphs.forEach(function (paragraph) {
                paragraph.style.display = (paragraph.style.display === 'none' || paragraph.style.display === '') ? 'block' : 'none';
            });
        }

        // Comment Section
        function addComment() {
            var commentInput = document.getElementById("commentInput");
            var commentsContainer = document.getElementById("comments");

            var commentText = commentInput.value.trim();
            if (commentText !== "") {
                var commentDiv = document.createElement("div");
                commentDiv.className = "comment";
                commentDiv.textContent = commentText;

                commentsContainer.appendChild(commentDiv);

                // Clear the input field
                commentInput.value = "";
            }
        }