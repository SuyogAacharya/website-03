<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
		<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #fff; /* Set the desired background color for the body */
    }

    .welcome-box {
        text-align: center;
        position: relative;
        background-color: #fff; /* Set the same background color as the body */
    }

    .d-flex {
        flex-direction: column;
        align-items: flex-start; /* Align items to the left */
        background-color: #fff; /* Set the same background color as the body */
        border: none; /* Remove any borders */
    }

    .student-photo {
        margin-top: 20px; /* Add margin for spacing */
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
    }

    .circular-photo {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
    }

    .student-name {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-top: 10px; /* Add margin to separate name and photo */
        margin-left: 20px; /* Adjust margin to the left */
        border: none; /* Remove any borders */
        background: #fff; /* Remove any background color */
        padding: 0; /* Remove any padding */
    }
		.hamburger {
            font-size: 24px;
            cursor: pointer;
            position: absolute;  
            top: 20px;
            left: 20px;
            z-index: 1;
            transition: left 0.3s ease;
            color: #111111;
        }

        .sidebar {
            width: 250px;
            height: 100%;
            background: #F2F3F5;
            padding: 20px;
            box-sizing: border-box;
            color: #fff;
            overflow: hidden;
            border-top-left-radius: 1rem;
            border-bottom-left-radius: 1rem;
            position: fixed;
            top: 0;
            left: -250px;
            transition: left 0.3s ease;
        }

        .sidebar a {
            text-decoration: none;
            color: #0d0e0d;
            display: block;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #0abe0a;
        }
</style>

</head>
<body>
    <!-- Header -->
    <header>
        <h1>Welcome to Entrance Master!</h1>
    </header>

    <!-- Welcome Message -->
    <div class="welcome-box">
        <img src="image/Welcome_image.jpg" alt="Welcome Image" class="welcome-image">
        <div class="d-flex">
            <div class="student-photo">
                <img src="upload/<?=$_SESSION['pp']?>" class="circular-photo">
            </div>
            <h3 class="display-4 student-name"><?=$_SESSION['fname']?></h3>
        </div>
    </div>
        <!--  Courses -->
				<div class="courses">
    <h2>Courses</h2>
    <hr class="invis"> 

    <div class="row"> 
        <div class="col-lg-6 col-md-6 col-12">
            <div class="course-item">
                <div class="image-blog">
                    <img src="image/course/mbbs entrancephoyo.jpg" alt="" class="img-fluid">
                </div>
                <div class="course-br">
                    <div class="course-title">
                        <h2><a href="medical-place-order.html" title="">Complete CEE Entrance Course.</a></h2>
                    </div>
                    <div class="course-desc">
                        <p>
                            🌟 Ace Medical Entrance Exams with Ease! Our Comprehensive CEE Entrance
                             Course provides live classes and extra practice materials for all subjects 
                             over 8 months. Join us and secure your success! 📚👩‍⚕️ <br>
                            <span>Course content</span><br>
                        1.MBBS Entrance<br>
                        2.BDS Entrance<br>
                        3.Nursing Entrance<br>
                        4.B-pharma Entrance<br>
                        🎯 With our specialized resources, conquer each course and elevate your readiness for the entrance examinations! 💡👩‍🔬</p>
                    </div>
                    <div class="course-rating">
                        4.8
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star-half"></i>								
                    </div>
                </div>
                <div class="course-meta-bot">
                    <ul>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i> 8 Month</li>
                        <li><i class="fa fa-users" aria-hidden="true"></i> 1200 Seats</li>
                        <li><i class="fa fa-user" aria-hidden="true"></i> 10+ Team member</li>
                        <li><i class="fa fa-money" aria-hidden="true"></i> Rs6,999/-/-</li>
                    </ul>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-6 col-md-6 col-12">
            <div class="course-item">
                <div class="image-blog">
                    <img src="image/course/chapterwisecourse.jpg" alt="" class="img-fluid">
                </div>
                <div class="course-br">
                    <div class="course-title">
                        <h2><a href="medical-place-order.html" title="">Chapter Wise Course.</a></h2>
                    </div>
                    <div class="blog-desc">
                        <p>
                            🔍 Dive into our course's subject-specific pre-recorded lectures! Overcome doubts and supercharge your entrance preparation effortlessly. 🚀

📚 Explore our comprehensive course content, meticulously designed to cover:<br>
1. Complete Physics<br>
2. Complete Chemistry<br>
3. Complete Zoology<br>
4. Complete Botany<br>
5. Complete MAT (Mental  Ability Test) (Rs 499/-)<br>

🎯 With our specialized resources, conquer each subject and elevate your readiness for the entrance examinations! 💡👩‍🔬
                    </p></div>
                    <div class="course-rating">
                        5.0
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star"></i>								
                    </div>
                </div>
                <div class="course-meta-bot">
                    <ul>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i> 8 Month</li>
                        <li><i class="fa fa-users" aria-hidden="true"></i>5000+ Seats</li>
                        <li><i class="fa fa-user" aria-hidden="true"></i> 10+ Team member</li>
                        <li><i class="fa fa-money" aria-hidden="true"></i> Rs1,999/- per course</li>
                    </ul>
                </div>
            </div>
        </div><!-- end col -->	
        <hr class="invis"> 

        <div class="row"> 
            <div class="col-lg-6 col-md-6 col-12">
                <div class="course-item">
                    <div class="image-blog">
                        <img src="image/course/fasttrackRevision.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="course-br">
                        <div class="course-title">
                            <h2><a href="medical-place-order.html" title="">Fast Track Course</a></h2>
                        </div>
                        <div class="course-desc">
                            <p>
                                💨 Accelerate Your Preparation with Rapid Revision Classes! Dive into our fast-paced, subject-specific sessions tailored for quick yet comprehensive review. 📚

🔍 Experience our meticulously curated Rapid Revision Course, covering:<br>
1. Rapid Physics Review<br>
2. Rapid Chemistry Recap<br>
3. Rapid Zoology Overview<br>
4. Rapid Botany Recap<br>
5. Rapid MAT (Mental Ability Test) Refresher<br>

🚀 Fast-track your understanding and solidify key concepts, ensuring a swift and effective preparation for your entrance examinations! 💡👨‍🏫</p>
                        </div>
                            <div class="course-rating">
                                5.0
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>	
                                <i class="fa fa-star"></i>								
                            </div>
                        </div>
                    <div class="course-meta-bot">
                        <ul>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i> 3 Month</li>
                            <li><i class="fa fa-users" aria-hidden="true"></i> 1200 Seats</li>
                            <li><i class="fa fa-money" aria-hidden="true"></i> Rs4,999/-</li>
                            
                        </ul>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-6 col-md-6 col-12">
                <div class="course-item">
                    <div class="image-blog">
                        <img src="image/course/oneshotcourse.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="course-br">
                        <div class="course-title">
                            <h2><a href="oneshotlect.html" title="">Free One Shot Lecture.</a></h2>
                        </div>
                        <div class="blog-desc">
                            <p>
                                🔍 Dive into our course's subject-specific pre-recorded lectures! Overcome doubts and supercharge your entrance 
                                preparation effortlessly. 🚀
                                🌟 Enhance Your Preparation with an Intensive Free-One Shot Lecture! Delve into a focused, condensed session 
                                designed to provide a comprehensive overview in one go. 📚🔍 Immerse yourself in our exclusive Free-One
                                 Shot Lecture covering:<br>

                                1. In-depth Physics Insights<br>
                                2. Comprehensive Chemistry Overview<br>
                                3. Extensive Zoology Breakdown<br>
                                4. Thorough Botany Summary<br>
                                5. Concise MAT (Mental Ability Test) Masterclass<br>
                                
                                
                            </p></div>
                        <div class="course-rating">
                            5.0
                            <i class="fa fa-star"></i>	
                            <i class="fa fa-star"></i>	
                            <i class="fa fa-star"></i>	
                            <i class="fa fa-star"></i>	
                            <i class="fa fa-star"></i>								
                        </div>
                    </div>
                    <div class="course-meta-bot">
                        <ul>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i> 8 Month</li>
                            <li><i class="fa fa-users" aria-hidden="true"></i>5000+ Seats</li>
                            <li><i class="fa fa-user" aria-hidden="true"></i> 10+ Team member</li>
                            <li><i class="fa fa-money" aria-hidden="true"></i> Rs 0.00/-</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div><!-- end row -->
    
    <div class="row"> 
        <div class="col-lg-6 col-md-6 col-12">
            <div class="course-item">
                <div class="image-blog">
                    <img src="image/course/CAP-I.jpg" alt="" class="img-fluid">
                </div>
                <div class="course-br">
                    <div class="course-title">
                        <h2><a href="CA-place-order.html" title="">Complete CAP-I</a></h2>
                    </div>
                    <div class="course-desc">
                        <p>🌟 Master Your Path to Charter Accountancy (CAP-I)! Our Comprehensive CAP-I Entrance Course offers recorded
                            videos (Live orientation) and supplementary study materials meticulously crafted over 8 months. Enroll now and pave your way
                             to success! 📚📈 <br>
                            <span>Course Syllabus</span><br>
                            1. Fundamental of Accounting<br>
                            2. Mercantile Law<br>
                            3. Fundamental of Economics<br>
                            4. Fundamental of Management<br>
                            5. Commercial Mathematics and Statistics<br>
                            🎯 Utilize our tailored resources to conquer each subject, enhancing your preparedness for the
                             challenging Charter Accountancy entrance examinations! 💡👨‍💼</p>
                            
                    </div>
                    <div class="course-rating">
                        4.8
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star-half"></i>								
                    </div>
                </div>
                <div class="course-meta-bot">
                    <ul>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i> 8 Month</li>
                        <li><i class="fa fa-users" aria-hidden="true"></i> 1200 Seats</li>
                        <li><i class="fa fa-user" aria-hidden="true"></i> 10+ Team member</li>
                        <li><i class="fa fa-money" aria-hidden="true"></i> Rs24,999/-</li>
                    </ul>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-6 col-md-6 col-12">
            <div class="course-item">
                <div class="image-blog">
                    <img src="image/course/CAP-II.jpg" alt="" class="img-fluid">
                </div>
                <div class="course-br">
                    <div class="course-title">
                        <h2><a href="CA-place-order.html" title="">CAP-II</a></h2>
                    </div>
                    <div class="blog-desc">
                        <p>
                            🌟 Step Up Your CAP-II Journey in Charter Accountancy! Dive into our Comprehensive CAP-II Entrance Course offering engaging recorded videos (Live orientation) and meticulously curated study materials spanning 8 months. Join now to chart your path to success! 📚📊 <br>
<span>Course Outline</span><br>
1. Advance Accounting<br>
2. Audit and Assurance<br>
3. Corporate & other Law<br>
4. Financial Management<br>
5. Cost & Management Accounting<br>
6. Business Communications & Marketing<br>
7. Income Tax<br>
🎯 Leverage our tailored resources for each subject, fortifying your readiness for the challenging CAP-II Charter Accountancy entrance examinations! 💡👨‍💼
                    </p></div>
                    <div class="course-rating">
                        5.0
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star"></i>	
                        <i class="fa fa-star"></i>								
                    </div>
                </div>
                <div class="course-meta-bot">
                    <ul>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i> 8 Month</li>
                        <li><i class="fa fa-users" aria-hidden="true"></i>5000+ Seats</li>
                        <li><i class="fa fa-user" aria-hidden="true"></i> 10+ Team member</li>
                        <li><i class="fa fa-money" aria-hidden="true"></i> Rs29,999/-</li>
                    </ul>
                </div>
            </div>
        </div><!-- end col -->	
        <hr class="invis"> 

        <div class="row"> 
            <div class="col-lg-6 col-md-6 col-12">
                <div class="course-item">
                    <div class="image-blog">
                        <img src="image/course/CAP-iii.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="course-br">
                        <div class="course-title">
                            <h2><a href="CA-place-order.html" title="">CAP-III</a></h2>
                        </div>
                        <div class="course-desc">
                            <p>🌟 Embark on the CAP-III Odyssey in Charter Accountancy! Delve into our Comprehensive CAP-III 
                                Entrance Course offering engaging recorded videos (Live orientation) and meticulously 
                                curated study materials spanning 8 months. Enroll today to steer towards triumph! 📚📊 <br>
                                <span>Course Outline</span><br>
                                1. Advance Financial Reporting<br>
                                2. Advance Financial Management<br>
                                3. Advance Auditing<br>
                                4. Corporate Law<br>
                                5. Management Information & Control System<br>
                                6. Advance Taxation<br>
                                7. Advance Cost & Management Accounting<br>
                                8. Strategic Management & Decision Making Analysis<br>
                                🎯 Harness our tailored resources for each subject, fortifying your readiness for the challenging CAP-III Charter Accountancy entrance examinations! 💡👨‍💼
                                </p>
                        </div>
                        <div class="course-rating">
                            4.8
                            <i class="fa fa-star"></i>	
                            <i class="fa fa-star"></i>	
                            <i class="fa fa-star"></i>	
                            <i class="fa fa-star"></i>	
                            <i class="fa fa-star-half"></i>								
                        </div>
                    </div>
                    <div class="course-meta-bot">
                        <ul>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i> 3 Month</li>
                            <li><i class="fa fa-users" aria-hidden="true"></i> 1200 Seats</li>
                            <li><i class="fa fa-money" aria-hidden="true"></i> Rs34,999/-</li>
                        </ul>
                    </div>
                </div>
            </div><!-- end col -->
    </div><!-- end row -->
    </div>
    </div>
    </div>
    </div>
    

</div><!-- end section -->

     
    <script>
        // JavaScript to show/hide sidebar when clicking the hamburger symbol
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
                    // Update the source of the circular photo
                    const circularPhoto = document.querySelector('.circular-photo');
                    circularPhoto.src = e.target.result;

                    // You can also send the uploaded photo to the server for further processing if needed
                };

                // Read the uploaded file as a data URL
                reader.readAsDataURL(files[0]);
            }
        });
    </script>

    <!-- Footer -->
    <div class="footer">
        &copy; Having problem with the enrollment watch this video👀.
      <!-- Video Container -->
<div class="video-container">
    <iframe id="youtube-video" width="250" height="200" 
    src="https://www.youtube.com/embed/2lGAaY59Mt4?rel=0" frameborder="0" allowfullscreen></iframe>
</div>

    </div>
    
<script>
    // Load YouTube Player API asynchronously
    let tag = document.createElement('script');
    tag.src = 'https://www.youtube.com/iframe_api';
    let firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // Create the YouTube Player
    let player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '360',
            width: '640',
            videoId: 'YOUR_VIDEO_ID_HERE', // Replace with your YouTube video ID
            playerVars: {
                'autoplay': 0, // Set to 1 if you want the video to autoplay
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

    // Function to handle when the player is ready
    function onPlayerReady(event) {
        // You can do additional actions when the player is ready, if needed
    }

    // Function to handle when the player's state changes
    function onPlayerStateChange(event) {
        // You can perform actions based on the player's state change, if needed
    }
</script>
</body>
</html>

<?php 
} else {
    header("Location: login.php");
    exit;
} 
?>
