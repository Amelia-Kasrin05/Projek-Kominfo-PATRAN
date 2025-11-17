<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aplikasi</title>
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#login-button').click(function() {
                $(this).fadeOut("slow", function() {
                    $("#container").fadeIn();
                    gsap.from("#container", { scale: 0, duration: 0.4, ease: "power1.inOut" });
                    gsap.to("#container", { scale: 1, duration: 0.4, ease: "power1.inOut" });
                });
            });

            $(".close-btn").click(function() {
                gsap.from("#container", { scale: 1, duration: 0.4, ease: "power1.inOut" });
                gsap.to("#container", { left: "0px", scale: 0, duration: 0.4, ease: "power1.inOut" });
                $("#container, #forgotten-container").fadeOut(800, function() {
                    $("#login-button").fadeIn(800);
                });
            });

            /* Forgotten Password */
            $('#forgotten').click(function() {
                $("#container").fadeOut(function() {
                    $("#forgotten-container").fadeIn();
                });
            });

            // Video play functionality
            var promises = [];
            function makePromise(i, video) {
                promises[i] = new $.Deferred();
                video.oncanplaythrough = function() {
                    promises[i].resolve();
                }
            }
            $('video').each(function(index) {
                this.pause();
                makePromise(index, this);
            });

            $.when.apply(null, promises).done(function() {
                $('video').each(function() {
                    this.play();
                });
            });
        });

        <?php
        @$pesan = $_GET['pesan'];
        if ($pesan == "sama") {
            echo "<script type='text/javascript'>alert('Username atau password sudah digunakan user lain');</script>";
        }
        ?>
    </script>
</head>
<body>
    <div class="vid-container">
        <video id="Video1" class="bgvid back" muted autoplay loop>
            <source src="video/traffic.mp4" type="video/mp4">
        </video>
        <div class="inner-container">
            <video id="Video2" class="bgvid inner" muted autoplay loop>
                <source src="video/traffic.mp4" type="video/mp4">
            </video>
            <div class="box">
                <h1><b>Silahkan Daftar</b></h1>
                <form action="cekdaftar.php" method="post">
                    <input type="text" placeholder="Nama" name="nama" required />
                    <input type="text" placeholder="Username" name="username" required />
                    <input type="password" placeholder="Password" name="password" required />
                    <button type="submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
