<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Ramolete's Website</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('CSS/styles.css') ?>">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-image: url("Images/ashgrey.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            overflow: auto;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
            color: #008CBA;            
            z-index: 1;
            position: relative;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            color: #008CBA;
            margin: 5px 0;
        }

        p {
            font-family: "Arial", sans-serif;
            font-size: 18px;
            color: #333;
            text-align: center;
            margin: 10px 0;
        }

        img.profile-picture {
            border-radius: 50%;
            width: 50px;
            height: auto;
            object-fit: auto;
            border: 5px solid #008CBA;
            margin-bottom: 10px;
        }

        video {
            width: 70%;
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            margin: 20px 0;
        }

        .social-buttons {
            display: flex;
            gap: 10px;
            margin-top: 20px;
            align-items: center;
            justify-content: center;
        }

        .social-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        .social-button img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .social-button:hover {
            background-color: #45a049;
        }

        .comment-section {
            width: 60%;
            margin-top: 30px;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .comment h2 {
            color: #008CBA;
            margin-bottom: 10px;
        }

        .comment {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .comment input {
            margin-right: 10px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .comment button {
            background-color: #008CBA;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .comment button:hover {
            background-color: #005580;
        }

        .action-button {
            background-color: #008CBA;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .action-button:hover {
            background-color: #005580;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }

        form {
            width: 60%;
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form input[type="text"],
        form input[type="password"],
        form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        form input[type="submit"] {
            background-color: #008CBA;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #005580;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Daniel Ramolete's Website!</h1>
        <h2>Asia Pacific College 2023</h2>
        <h3>I play VALORANT most of the time</h3>
    </header>
	<main>
        <p>I'm definitely not a Killjoy Main</p>
        <p>I am a big fan of Lee Ji-Eun (IU)</p>
        <p>I am also a big fan of AESPA</p>

        <video controls>
            <source src="drama.mp4" type="video/mp4" />
			<source src="<?= base_url('Videos/drama.mp4') ?>" type="video/mp4">
        </video>

        <div class="social-buttons">
            <a href="https://www.facebook.com/dadanramolete" class="social-button" target="_blank">
				<img src="<?= base_url('Images/facebook.png') ?>" alt="facebook">
                <img src="facebook.png" alt="Facebook Icon">
                Facebook
            </a>
            <a href="https://twitter.com/DdnRmlteeee" class="social-button" target="_blank">
				<img src="<?= base_url('Images/twitter.png') ?>" alt="twitter">
                <img src="twitter.png" alt="Twitter Icon">
                Twitter
            </a>
            <a href="https://www.instagram.com/ddnrmlteeee" class="social-button" target="_blank">
				<img src="<?= base_url('Images/instagram.png') ?>" alt="instagram">
                <img src="instagram.png" alt="Instagram Icon">
                Instagram
            </a>
        </div>
    </main>

    <!-- Action buttons with enhanced styling -->
    <button class="action-button" onclick="toggleBackground()">Toggle Background Image</button>
    <button class="action-button" onclick="changeRandomColor()">Change Background Color</button>

    <label for="nameInput">Enter Your Name:</label>
    <input type="text" id="nameInput" />
    <button class="action-button" onclick="displayGreeting()">Display Greeting</button>
    <p id="greetingMessage"></p>

    <button class="action-button" onclick="startCountdown()">Start Countdown</button>
    <p id="countdown"></p>

    <button class="action-button" onclick="toggleParagraphs()">Toggle Paragraphs</button>

    <div class="comment-section">
        <h2>Leave a Comment:</h2>
        <div class="comment">
            <input type="text" id="commentInput" placeholder="Your comment...">
            <button class="action-button" onclick="addComment()">Submit</button>
        </div>
        <div id="comments"></div>
    </div>
	
	<script src="<?= base_url('JS/script.js') ?>"></script>
    <script>
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
    </script>