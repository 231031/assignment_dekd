<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="output.css" rel="stylesheet"> -->
    <!-- <link href="input.css" rel="stylesheet"> -->
    <title>Document</title>
</head>
<body>
    <h1 class="text-3xl font-bold m-5">
        New Content
    </h1>
    <a href="home.php" class="text-xl text-red-600 underline underline-offset-4 my-3 mx-5">
        All Topic
    </a>
    <form name="topic_form" action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" class="m-8">
        <div class="form-content flex flex-col">
            <h3 id="warningTopic" class="text-md text-rose-700 text-opacity-85"></h3>
            <h3 class="text-xl text-gray-500">Topic</h3>
            <textarea id="topic_dek" type="text" class="mb-5 rounded-lg border border-blue-500"></textarea>

            <h3 id="warningContent" class="text-md text-rose-700 text-opacity-85"></h3>
            <h3 class="text-xl text-gray-500">Content</h3>
            <textarea id="content_dek" rows="20"  class="rounded-lg border border-blue-500 mb-5"></textarea>

            <div class="flex justify-center">
                <button id="btn-submit" type="submit" value="submit" class="text-xl rounded-lg bg-blue-200 w-1/6 h-1/4">submit</button>
            </div>
        </div>
        
    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="validate.js"></script>
</body>
</html>

