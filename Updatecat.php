<?php
include "./connection.php";
$uid = $_GET['uid'];
$sql = $a->prepare("SELECT * FROM category WHERE cat_id=$uid"); #provide data which is same with id
$sql->execute();
$row = $sql->fetch(PDO::FETCH_ASSOC);
extract($row);
?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300&family=Roboto+Slab:wght@100;400&display=swap');

.body {

    background-color: #282828;
}

.container {
    border: 5px dashed grey;
    margin-left: 25%;
    margin-right: 25%;
}

label,
input {
    margin-right: 10px;
    margin-bottom: 20px;
    margin-top: 10px;
    margin-left: 15px;
    font-size: 20px;
    text-align: center;
}

label {
    margin-right: 20px;
}

.title {
    color: #282828;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
    font-family: 'Roboto Slab', serif;
    font-size: 35px;
    text-align: center;
    margin-bottom: 45px;
}

.a {
    margin-left: 30px;
}

.l {
    margin-left: 17px;
}

.p {
    margin-left: 5px;
}

.pa {
    margin-left: 5px;
    margin-bottom: 5px;
}

.nn {
    margin-left: 1px;
}

.o {
    text-align: center;
    margin-left: 40%;
    padding: 5px;
    border-radius: 6px;

}

.o:hover {
    background-color: green;

}
</style>
<form method="POST" action="./updateprocesscat.php" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $cat_id;?>">
    <div class="title">Update Category</div>
    <div class="container">

        <div>
            <label for="">Enter Name</label>
            <input type="text" name="name" placeholder="name" value="<?php echo $cat_name;?>">
        </div>
        <div>
            <label for="">Enter Intakes</label>
            <textarea
                style="height: 160px; width: 600px; resize: none;border-color:black;font-size:20px;overflow:scroll;"
                name="desc"><?php echo $cat_description; ?></textarea>

        </div>

        <div>
            <label for="" class="si">Stored Icon</label>
            <img src="./uniimagge/<?php echo $cat_iconn; ?>" class="p" width="400" ; height="200"><br>
            <input type="hidden" name="oldimg" value="<?php echo $cat_iconn;?>"><br>
            <label for="">Update Icon</label>
            <input type="file" name="newimg" class="nn"><br><br>
        </div>
        <div>
            <label for="" class="si">Stored Image1(first image in course page)</label>
            <img src="./uniimagge/<?php echo $cat_image; ?>" class="p" width="400" ; height="200"><br>
            <input type="hidden" name="oldimg1" value="<?php echo $cat_image;?>"><br>
            <label for="">Update Image1</label>
            <input type="file" name="newimg1" class="nn"><br><br>
        </div>
        <div>
            <label for="" class="si">Stored Image 2(second image in course page)</label>
            <img src="./uniimagge/<?php echo $cat_imagetwo; ?>" class="p" width="400" ; height="200"><br>
            <input type="hidden" name="oldimg2" value="<?php echo $cat_imagetwo;?>"><br>
            <label for="">Update Image 2</label>
            <input type="file" name="newimg2" class="nn"><br><br>
        </div>
        <input type="submit" name="update" value="UPDATE" class="o">
    </div>

</form>