<?php require 'header.php'; ?>
<?php require 'db_connect.php'; ?>



<div class="main-container">


    <!-- We addede Posts HERE -->
    <div id="wall-container">

        <div id="updateboxarea">

            <h4>What's up?</h4>
            <form method="post" action="">
                <textarea cols="30" rows="3" name="update" id="update" maxlength="200"></textarea>
                <br>
                <input type="submit" value=" Update " id="update_button" class="update_button">
            </form>
        </div>

        <div class="stbody">
            <div class="stimg">
                <img src="sri.jpg" style="width:50px;height:50px">
            </div>
            <div class="sttext">
                9lessons programming blog <a href="https://www.9lessons.info">https://www.9lessons.info</a>
                <div class="sttime">2 seconds ago</div>
            </div>
        </div>

        <div class="stbody">
            <div class="stimg">
                <img src="sri.jpg" style="width:50px;height:50px">
            </div>
            <div class="sttext">
                Twitter profile <a href="https://twitter.com/9lessons">https://twitter.com/9lessons</a>
                <div class="sttime">16 seconds ago</div>
            </div>
        </div>
        

        <h1>Order List Tag</h1>
        <ol>
            <li class="stbody">
                <div class="stimg">
                    <img src="sri.jpg" style="width:50px;height:50px">
                </div>
                <div class="sttext">
                    My facebook profile <a
                        href="https://www.facebook.com/srinivas.tamada">https://www.facebook.com/srinivas.tamada</a>
                    <div class="sttime">25 seconds ago</div>
                </div>
            </li>
            <li class="stbody">
                <div class="stimg">
                    <img src="sri.jpg" style="width:50px;height:50px">
                </div>
                <div class="sttext">
                    Blog Design with CSS and HTML <a
                        href="https://www.9lessons.info/2010/11/blog-design-with-css-and-html.html">https://www.9lessons.info/2010/11/blog-design-with-css-and-html.html</a>
                    <div class="sttime">45 seconds ago</div>
                </div>
            </li>
            <li class="stbody">
                <div class="stimg">
                    <img src="sri.jpg" style="width:50px;height:50px">
                </div>
                <div class="sttext">
                    ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                    <div class="sttime">about 1 hour ago</div>
                </div>
            </li>
        </ol>
    </div>
</div>

<?php require 'footer.php'; ?>