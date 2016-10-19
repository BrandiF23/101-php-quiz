## Part Two: Writing Prompt

---

**In detail, describe what steps you have to take in order to add a new question to your quiz.**

**Be specific and realisitic. Actually add another question to part one of this assignment and write down each step that you take.**

Edit this file directly to add your response below:

---

<!-- Your response goes here. -->
I created a new file within the project folder. I named it question3.php. I then copied the code from the previous page and pasted it into the new file. Next, I needed to connect this page with the previous. I did this by going to question2.php and within the <form action> field adding the question3.php file name. After this I needed to carry the answers from the previous page to current page. I achieved this by editing the PHP code, specificly the $_GET["answer"] field. I added the previous page's number. To echo the 3rd question from the array I edited the question-promt field to reflect question 3. Finally, to transfer all answers to the final results page I changed the <form action> from question3.php to results.php.