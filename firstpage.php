<?php 
    session_start();
    include('server.php'); 
    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }

    if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
    if (isset($_GET['back_buy'])){
        unset($_SESSION['buy']);
    }



?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Amulet thailand official</title>
        <link rel="stylesheet" href="main.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="icon" href="image/logo.png">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="header1">
                    <a href="firstpage.php"><img src="image/logo.png" alt="" ></a>
                    <ul class="topright">
                        <li class="l2"><a href="cart.php">ตะกร้าสินค้า</a></li>
                        <li>|</li>
                        <li class="l3"><a href="firstpage.php?logout=<?php echo $_SESSION['username']; ?>">Logout</a></li>
                        <li>|</li>
                        <li class="l4">Logged in : <span><?php echo $_SESSION['username']; ?></span></li>
                    </ul>
                </div>
                <div class="header2">
                    <img src="image/n-banner.png" alt="">
                </div>
                <ul class="menu">
                    <li class="m1"><a href="#howtobuy">วิธีสั่งซื้อ</a></li>
                    <li>|</li>
                    <li class="m2"><a href="#shop">เลือกซื้อ</a></li>
                    <li>|</li>
                    <li class="m3"><a href="">About</a></li> <!--about.php#about -->
                    <li>|</li>
                    <li class="m3"><a href="#contact">Contact</a></li>
                </ul>
            </div>
        <div class="body">
            <div class="introduce">
                <div class="wallpaper">
                    
                    <div class="text">
                    <h3>สวัสดีครับ <span id="type"></span></h3>
                    <p>ยินดีต้อนรับสู่ CSS SHOP เว็บไซต์แฟชั่นที่ตอบโจทย์ทุกความต้องการของคุณ ไม่ว่าคุณจะกำลังมองหาสไตล์เท่ๆ สำหรับวันสบายๆ หรือเสื้อผ้าที่เต็มไปด้วยความหรูหราสำหรับโอกาสพิเศษ ที่นี่เรามีเสื้อผ้าให้เลือกมากมาย พร้อมดีไซน์ที่ทันสมัยและคุณภาพเกรดพรีเมียม</p>

                    </div>
                </div>
            </div>
            <div class="popular">
                <div class="title">
                    ยอดนิยม!(Popular)
                </div>
                <div class="animation">💰😍</div>
                <div class="animation2">🙏🤩</div>
                <div class="content">
                    <div class="picture">
                        <img src="image/list/Folk-1.jpg" alt="" id="c_pic">
                        <p>เสื้อยืด<br>สี:แดง รุ่น Nike<br><button class="c1"
                                onclick="window.location.href='#'">View!</button></p>
                    </div>
                    <div class="picture">
                        <img src="image/list/Folk-2.jpg" alt="" id="c_pic2">
                        <p>เสื้อยืด<br>สี:แดง รุ่น Nike<br><button class="c2"
                                onclick="window.location.href='#'">View!</button></p>
                    </div>
                    <div class="picture">
                        <img src="image/list/Folk-3.jpg" alt="" id="c_pic3">
                        <p>เสื้อยืด<br>สี:แดง รุ่น Nike<br><button class="c3"
                                onclick="window.location.href='#'">View!</button></p>
                    </div>
                    <div class="picture">
                        <img src="image/list/Folk-4.jpg" alt="" id="c_pic4">
                        <p>เสื้อยืด<br>สี:แดง รุ่น Nike<br><button class="c4"
                                onclick="window.location.href='#'">View!</button></p>
                    </div>
                </div>
            </div>
            <div id="howtobuy"></div>
            <div class="howtobuy">
                <div class="content">
                    <div class="howtitle">วิธีการสั่งซื้อ(How to buy)</div>
                </div>
                <!-- <div class="animation">🤔❓</div> 
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/yDzCh_ZsAjE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/8kgjncmmTbc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>-->
            </div>
        </div>
        <div id="shop"></div>
        <div class="shop">
            <div class="topic">
                เลือกซื้อ(Shop)
            </div>
                    
                <form action="search.php" method="get">
                <input type="text" placeholder="Search"  name="search_name" required>
                <input type="submit" name="search_btn" value="Enter">
                </form>

            <div class="content">
                <div class="picture">
                    <img src="image/list/Folk-5.jpg" alt="" id="c_pic5">
                    <p>เสื้อโปโล<br>สี ขาว รุ่น nike<br>
                    <button class="c1"onclick="window.location.href='#'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/Folk-6.jpg" alt="" id="c_pic6">
                    <p>เสื้อเอวลอย<br>สี ดำ รุ่น nike<br>
                    <button class="c1"onclick="window.location.href='#'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/Folk-7.jpg" alt="" id="c_pic7">
                    <p>เสื้อเสเวตเตอร์<br>สี ดำ รุ่น nike<br>
                    <button class="c1"onclick="window.location.href='#'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/Folk-8.jpg" alt="" id="c_pic8">
                    <p>เสื้อเชิร์ต<br>สี ดำ รุ่น nike<br>
                    <button class="c1"onclick="window.location.href='#'">View!</button></p>
                </div>
            </div>
            <div class="content">
                <div class="picture">
                    <img src="image/list/Folk-9.jpg" alt="" id="c_pic9">
                    <p>เสื้อสเวตเตอร์<br>สี ขาว รุ่น nike<br>
                    <button class="c1"onclick="window.location.href='#'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/Folk-10.jpg" alt="" id="c_pic10">
                    <p>เสื้อสเวตเตอร์<br>สี ดำ รุ่น nike<br>
                    <button class="c1"onclick="window.location.href='#'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/Folk-11.jpg" alt="" id="c_pic11">
                    <p>เสื้อสเวตเตอร์<br>สี ขาว รุ่น nike<br>
                    <button class="c1"onclick="window.location.href='#'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/Folk-12.jpg" alt="" id="c_pic12">
                    <p>เสื้อโปโล<br>สี ขาว รุ่น nike<br>
                    <button class="c1"onclick="window.location.href='#'">View!</button></p>
                </div>
            </div>
            <div class="content">
                <div class="picture">
                    <img src="image/list/Folk-13.jpg" alt="" id="c_pic13">
                    <p>เสื้อโปโล<br>สี ขาว รุ่น nike<br>
                    <button class="c1"onclick="window.location.href='#'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/Folk-14.jpg" alt="" id="c_pic14">
                    <p>เสื้อโปโล<br>สี ขาว รุ่น nike<br>
                    <button class="c1"onclick="window.location.href='#'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/Folk-15.jpg" alt="" id="c_pic15">
                    <p>เสื้อโปโล<br>สี ขาว รุ่น nike<br>
                    <button class="c1"onclick="window.location.href='#'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/Folk-16.jpg" alt="" id="c_pic16">
                    <p>เสื้อโปโล<br>สี ขาว รุ่น nike<br>
                    <button class="c1"onclick="window.location.href='#'">View!</button></p>
                </div>
            </div>
        </div>
        <div class="change">
            <ul style="width: 15rem;">
                <li class="l1"><button>1</button></li>
                <li class="l2"><button onclick="window.location.href='#'">2</button></li>
                <li class="l3"><button onclick="window.location.href='#'">3</button></li>
                <li class="l3"><button onclick="window.location.href='#'">4</button></li>
                <li class="l4"><button onclick="window.location.href='#'">></button></li>
            </ul>
        </div>
        <div class="footer">
            <audio class="audio1" src="music/music.mp3" controls loop></audio>
            <div class="headerfooter">ติดต่อสอบถาม</div>
            <div class="contentfooter">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Gmail_Icon_%282013-2020%29.svg/2048px-Gmail_Icon_%282013-2020%29.svg.png" alt="">
                <p>: worawutavc@gmail.com</p>
                <img class="line" src="https://www.rinnotech.co.th/images/editor/LINE_logo.svg_1.png" alt="">
                <p>: worawutavc</p>
                <img src="https://i.pinimg.com/originals/7a/09/e3/7a09e3d2a15875ceb52e6eac215bd73b.png" alt="">
                <p>: 0927255199</p>
            </div>
            <p id="contact">&copy; Amulet thailand official 2021 All Rights Reserved.</p>
            <div class="maybeyouwant">
            The other website...<a href="wat_ayutthaya/index.html" target='_blank'>ClickMe</a>
            สิ่งที่คุณอาจจะสนใจ...<a href="visit/maybe.html" target='_blank'>ClickMe</a>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
            document.getElementById('c_pic').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic2').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic3').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic4').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic5').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic6').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic7').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic8').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic9').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic10').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic11').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic12').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic13').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic14').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic15').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic16').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            var typed = new Typed('#type', {
            // Waits 1000ms after typing "First"
            strings: ['เว็บไซต์ Amulet thailand official ยินดีต้อนรับ','Worawut Yachaiya ยินดีต้อนรับ', 'Aphinya Charoenphon ยินดีต้อนรับ'],smartBackspace: true,loop: true,typeSpeed: 20,backSpeed:20,
});
        </script>
</body>
</html>