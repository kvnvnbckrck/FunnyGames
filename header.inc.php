<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunnyGames</title>
    <link rel="icon" href="illustrations/favicon.svg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<style>
    body {
        background-color: #26376D;
    }

    .header_inline {
        display: inline;
    }

    .logo_img {
        background-image: url(illustrations/funnylogo.svg);
        background-repeat: no-repeat;
        width: 38vw;
        height: 6vw;
        margin: 20px 0 0 10px;
    }

    .searchbar {
        margin-top: 40px;
        padding: 3vw 40vw 3vw 5vw;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 12vw;
        opacity: 50%;
        border: none;
        border-radius: 5px;
    }

    ::placeholder {
        color: black;
        font-weight: bolder;
        opacity: 100;
    }

    .add_btn {
        background-image: url(illustrations/add_btn.svg);
        background-repeat: no-repeat;
        width: 6vw;
        height: 6vw;
        float: right;
        position: relative;
        top: -38vw;
        margin-right: 8px;
    }

    .profile_btn {
        background-image: url(illustrations/profile_btn.svg);
        background-repeat: no-repeat;
        width: 6vw;
        height: 6vw;
        float: right;
        position: relative;
        top: -38vw;
        margin-right: 8px;
    }

    @media screen and (min-width: 1000px) {
        .logo_img {
            width: 15vw;
            height: 3vw;
            margin: 40px 0 0 2vw;
        }

        .searchbar {
            margin-top: 40px;
            padding: 1vw 23vw 1vw 2vw;
            position: absolute;
            left: 35vw;
            top: 0vw;
        }

        .add_btn {
            width: 3vw;
            height: 3vw;
            top: -2.8vw;
            margin-right: 2vw;
        }

        .profile_btn {
            width: 3vw;
            height: 3vw;
            top: -2.8vw;
            margin-right: 2vw;
        }
    }
</style>
<header>
    <div class="header">
        <a href="index.php">
            <div class="logo_img"></div>
        </a>
        <input type="text" placeholder="Search..." class="searchbar">
        <a href="profile.php">
            <div class="profile_btn"></div>
        </a>
        <a href="add.php">
            <div class="add_btn"></div>
        </a>
    </div>
</header>