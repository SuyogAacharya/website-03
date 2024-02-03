<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set-01</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            background-color: #f8f9fa;
            padding-top: 50px; /* Add space at the top for fixed navbar */
        }

        #quiz-container {
            max-width: 600px;
            margin: 20px auto;
            border: 1px solid #d6d6d6;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        #timer {
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px;
            background-color: #343a40;
            color: #ffffff;
            border-radius: 0 0 0 10px;
        }
    </style>
</head>
<body>
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand mx-auto" href="#">Set-01</a>
    </nav>

    <div class="container">
        <div id="quiz-container">
            <!-- Questions and options will be added dynamically using JavaScript -->
        </div>
        <button id="submit-btn" class="btn btn-primary mt-3">Submit</button>
        <div id="timer"></div>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        const quizContainer = document.getElementById('quiz-container');
        const submitButton = document.getElementById('submit-btn');
        const timerElement = document.getElementById('timer');
        const totalTimeInSeconds = 10800; // 3 hours

        // Define your quiz questions and options
        const questions = [
            
            {
                question: 'A football player is moving southward and suddenly turns eastward with the same speed to avoid an opponent. The force that acts on the player while turning is',
                options: ['Along north-ward', 'Along north-east', 'Along south-west', 'Along east-ward'],
                correctAnswer: 'Along north-east'
            },
            // Add more questions here...
        ];

        // Function to display questions and options
        function buildQuiz() {
            questions.forEach((question, index) => {
                const questionDiv = document.createElement('div');
                questionDiv.classList.add('question', 'mb-3');

                // Display the question
                questionDiv.innerHTML = `<p>${index + 1}. ${question.question}</p>`;

                // Display options in a list format
                const optionsList = document.createElement('ul');
                optionsList.classList.add('list-group');
                question.options.forEach((option, optionIndex) => {
                    const optionItem = document.createElement('li');
                    optionItem.classList.add('list-group-item');
                    optionItem.innerHTML = `
                        <label class="btn btn-outline-primary">
                            <input type="radio" name="question${index}" value="${option}">
                            ${option}
                        </label>
                    `;
                    optionsList.appendChild(optionItem);
                });

                questionDiv.appendChild(optionsList);
                quizContainer.appendChild(questionDiv);
            });
        }

        // Function to calculate and display the results
        function showResults() {
            const answerContainers = quizContainer.querySelectorAll('.question');
            let score = 0;

            questions.forEach((question, index) => {
                const answerContainer = answerContainers[index];
                const selectedOption = answerContainer.querySelector(`input[name="question${index}"]:checked`);

                if (selectedOption) {
                    const userAnswer = selectedOption.value;
                    if (userAnswer === question.correctAnswer) {
                        score++;
                    }
                }
            });

            alert(`Your score: ${score} out of ${questions.length}`);
        }

      

        // Build the quiz when the page loads
        buildQuiz();

        // Event listener for the submit button
        submitButton.addEventListener('click', showResults);

        // Start the timer
        updateTimer();
    </script>
</body>
</html>
