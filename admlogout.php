<?php 
session_start();
session_destroy();

?>
<style>
body {
    overflow: hidden;
    padding: 0;
    margin: 0;
}

img {
    width: 210vh;
    height: 100vh;
}

button {
    width: 200px;
    margin-top: -900px;
    margin-left: 20px;
    padding: 10px;
    font-size: 20px;
    background-color: #194569;
    border-radius: 10px;

}

.button {
    margin-top: -200px;
    margin-left: 20px;
}

a {
    text-decoration: none;
    color: white;

}
</style>

<body>
    <div>
        <div>
            <img src="./uniimagge/wepik-export-20230610190846O0vI.jpeg">
        </div>
        <div class="button">
            <button><a href="./Home.php">Student View</a> </button>
            <button><a href="./loginadmin.php">Admin Login</a> </button>
        </div>

    </div>
</body>