<?php
    include("database.php");
    $sql = "SELECT * FROM topicdekd";
    $res = mysqli_query($dbcon, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="flex flex-col items-center justify-center w-full">
        <h2 class="text-2xl my-2">Home Page</h2>
        <?php 
            if ($res) {
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                            <div id="box" class="topic-box mt-5 bg-blue-300 h-1/5 w-5/6 shadow-md rounded-md p-3">
                                <h2 id="topic" class="text-2xl"><?php echo $row["topic"]; ?></h2>
                                <p id="content" class="text-lg"><?php echo $row["content"]; ?></p>
                            </div>
                        <?php
                    }
                }
            } else {
                ?>
                    <h2 id="topic" class="text-3xl text-red-600">Not Have Any Topic</h2>
                <?php
            }
        ?>
        <a href="index.php" class="text-xl text-red-600 underline underline-offset-4 my-3">Add New Topic</a>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>