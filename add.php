<?php

include_once(__DIR__ . "/classes/Post.php");
include_once(__DIR__ . "/classes/Db.php");


if (!empty($_POST)) {
    $error_img_size = "";
    $fileSize = $_FILES['image']['size'];

    $target = "posts/" . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    if (empty($_POST['description']) || empty($_FILES['image']['name'])) {
    } else {
        header('Location: index.php');
    }

    $post = new Post();
    try {
        $post->setDescription($_POST['description']);
    } catch (\Throwable $th) {
        $error_empty_desc = $th->getMessage();
    }

    $post->setHashtag($_POST['hashtag']);

    if ($fileSize < 1000000) {
        try {
            $post->setImage($_FILES['image']['name']);
        } catch (\Throwable $th) {
            $error_empty_img = $th->getMessage();
        }
    } else {
        $error_img_size = "Image size is too big. Pick another one";
    }
    $post->save();
    $post->hashtag();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload post</title>
    <link rel="icon" href="illustrations/favicon.svg">
    <link rel="stylesheet" media="screen" href="style/add.css">
</head>
<script type="text/javascript">
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>

<body>
    <?php include 'header.inc.php'; ?>
    <img id="uploadPreview" class="img_preview" />




    <form method="post" action="" enctype="multipart/form-data">
        <?php
        echo '<div class="error error_image">' . $error_img_size . '</div>';
        ?>
        <?php if (isset($error_empty_img)) : ?>
            <div class="error error_emp_img"><?php echo $error_empty_img; ?></div>
        <?php endif; ?>
        <div>
            <input type='file' name="image" class="btn_add_pic" id="uploadImage" onchange="PreviewImage();">
        </div>
        <?php if (isset($error_empty_desc)) : ?>
            <div class="error error_emp_desc"><?php echo $error_empty_desc; ?></div>
        <?php endif; ?>
        <div>
            <textarea name="description" placeholder="Write caption..." class="caption_text textarea"></textarea>
        </div>
        <div>
            <textarea name="hashtag" placeholder="Add hashtag" class="hashtag_text textarea"></textarea>
        </div>
        <div>
            <input type="submit" name="upload" value="Post" class="btn_post">
        </div>
    </form>


</body>

</html>