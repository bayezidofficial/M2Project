<?php

// Initialize variables
$score = 0;
$totalQuestions = 3;

echo "--- Welcome to the Quiz ---\n\n";

// Question 1
echo "Q1. What is the capital of France?\n";
echo "a) Berlin\n";
echo "b) Paris\n";
echo "c) Rome\n";
echo "Your answer (a/b/c): ";
$answer1 = trim(fgets(STDIN));

if ($answer1 === "b") {
    echo "✅ Correct!\n\n";
    $score++;
} else {
    echo "❌ Incorrect. The correct answer is b) Paris\n\n";
}

// Question 2
echo "Q2. What is 5 + 3?\n";
echo "a) 8\n";
echo "b) 10\n";
echo "c) 15\n";
echo "Your answer (a/b/c): ";
$answer2 = trim(fgets(STDIN));

if ($answer2 === "a") {
    echo "✅ Correct!\n\n";
    $score++;
} else {
    echo "❌ Incorrect. The correct answer is a) 8\n\n";
}

// Question 3
echo "Q3. Which planet is known as the Red Planet?\n";
echo "a) Earth\n";
echo "b) Venus\n";
echo "c) Mars\n";
echo "Your answer (a/b/c): ";
$answer3 = trim(fgets(STDIN));

if ($answer3 === "c") {
    echo "✅ Correct!\n\n";
    $score++;
} else {
    echo "❌ Incorrect. The correct answer is c) Mars\n\n";
}

// Final Score
echo "🎉 Quiz Complete! You got $score out of $totalQuestions.\n";

