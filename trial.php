<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile - Entrance Master</title>
    <style>
        /* Add your custom styles here */

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            overflow-x: hidden;
            margin: 0;
        }

        header {
            background-color: #0abe0a;
            color: #ecf0f1;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: left;
            padding: 20px;
            position: relative;
        }

        .welcome-box {
            width: 100%;
            display: flex;
            flex-direction: column;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
            margin-bottom: 20px;
        }

        .welcome-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
        }

        .student-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
        }

        .circular-photo {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .camera-button-container {
            text-align: center;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .camera-button {
            cursor: pointer;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .camera-icon {
            width: 40px;
            height: 40px;
        }

        .student-photo:hover .camera-button {
            opacity: 1;
        }

        .student-name {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }

        .courses {
            text-align: center;
            padding: 20px;
        }

        .courses h2 {
            font-size: 30px;
            font-weight: bold;
            color: #0d12ed;
            margin-top: 20px;
            text-align: left;
        }

        .course-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .gallery-item {
            width: 100%;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s ease-in-out;
            cursor: pointer;
        }

        .gallery-item img {
            width: 250px;
            height: 200px;
            border-radius: 8px 8px 0 0;
        }

        .course-info {
            padding: 30px;
        }

        .topic-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .topic-description {
            color: #666;
            margin-bottom: 10px;
        }

        .enroll-btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #4285f4;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .enroll-btn:hover {
            background-color: #2d74da;
            text-size-adjust: 20px;
        }

        .footer {
            background-color: #0d0abe;
            color: #fff;
            padding: 10px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to Entrance Master!</h1>
    </header>

    <div class="profile-container">
        <div class="welcome-box">
            <img src="Welcome_image.jpg" alt="Welcome Image" class="welcome-image">
        </div>

        <div class="student-photo">
            <img src="defult_photo.jpg" alt="Student Photo" class="circular-photo">
            <div class="camera-button-container">
                <label for="photo-input" class="camera-button" id="photo-upload">
                    <img src="camera_icon.png" alt="Upload Photo" class="camera-icon">
                </label>
                <input type="file" id="photo-input" accept="image/*" style="display: none;">
            </div>
        </div>

        <div class="student-name">Student Name</div>

        <div class="courses">
            <h2>Enrolled Courses</h2>
            <div class="empty-courses">No courses currently enrolled.</div>
        </div>
    </div>

    <script>
        const hamburger = document.querySelector('.hamburger');
        const sidebar = document.querySelector('.sidebar');
        let isSidebarVisible = false;

        hamburger.addEventListener('click', () => {
            if (!isSidebarVisible) {
                sidebar.style.left = '0';
                isSidebarVisible = true;
            } else {
                sidebar.style.left = '-250px';
                isSidebarVisible = false;
            }
        });

        document.getElementById('photo-input').addEventListener('change', function (event) {
            const fileInput = event.target;
            const files = fileInput.files;

            if (files.length > 0) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    const circularPhoto = document.querySelector('.circular-photo');
                    circularPhoto.src = e.target.result;
                };

                reader.readAsDataURL(files[0]);
            }
        });
    </script>

    <div class="footer">
        &copy; Having a problem with enrollment? Watch this video👀.
        <!-- Video Container -->
        <div class="video-container">
            <iframe id="youtube-video" width="250" height="200" src="https://www.youtube.com/embed/2lGAaY59Mt4?rel=0"
                frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <script>
        let tag = document.createElement('script');
        tag.src = 'https://www.youtube.com/iframe_api';
        let firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        let player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '360',
                width: '640',
                videoId: 'YOUR_VIDEO_ID_HERE', // Replace with your YouTube video ID
                playerVars: {
                    'autoplay': 0,
                    'controls': 1,
                    'rel': 0,
                    'showinfo': 0
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerReady(event) {}

        function onPlayerStateChange(event) {}
    </script>
</body>

</html>
