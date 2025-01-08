<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        box-sizing: border-box;
    }

    .outer-container {
        display: flex;
        /* 父容器使用 flex 來排列兩個內部 container */
        flex-direction: column;
        /* 讓容器垂直排列 */
        justify-content: center;
        align-items: center;
        max-width: 1000px;
        margin: 0 auto;
        background-color: lightblue;
        max-height: 2200px;
    }

    .container {
        display: flex;
        /* 內部 container 仍然是水平排列 */
        justify-content: center;
        margin: auto;
        width: 100%;
        flex-wrap: wrap;
        /* 讓子元素可以換行 */
    }

    .box1 {
        width: 200px;
        height: 200px;
        background-color: yellow;
        text-align: center;
        margin: 10px;
        border-radius: 8px;
    }

    h1 {
        text-align: center;
        font-size: 24px;
        color: black;
    }

    a {
        text-decoration: none;
        font-size: 50px;

    }

    button {
        border-radius: 8px;
        color: blue;
    }

    a:hover {
        color: black;
    }

    @media(max-width:524px) {
        .box1 {
            width: 50%;
        }

        a {
            width: 50%;

        }
    }

    @media(max-width:768px) {
        .box1 {
            width: 75%;

        }

        a {
            width: 75%;

        }
    }
    </style>

</head>

<body>
    <h1>天氣預報</h1>
    <div class="outer-container">

        <div class="container">
            <button><a href="">北部</a></button>
            <button><a href="">中部</a></button>
            <button><a href="">南部</a></button>
            <button><a href="">東部</a></button>
            <button><a href="">離島</a></button>
        </div>
        <!-- 第一組容器 -->
        <div class="container">
            <div class="box1" id="box1"></div>
            <div class="box1" id="box2"></div>
            <div class="box1" id="box3"></div>
        </div>

        <!-- 第二組容器 -->
        <div class="container">
            <div class="box1" id="box4"></div>
            <div class="box1" id="box5"></div>
            <div class="box1" id="box6"></div>
        </div>

        <div class="container">
            <div class="box1" id="box7"></div>
            <div class="box1" id="box8"></div>
            <div class="box1" id="box9"></div>
        </div>
    </div>
</body>

</html>