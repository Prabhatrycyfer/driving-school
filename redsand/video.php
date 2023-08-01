<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>


<style>
    /* Optional styles */
    html {
        box-sizing: border-box;
        font-family: "YouTube Noto", Roboto, Arial, Helvetica, sans-serif;
        height: 100%;
    }

    *,
    *::before,
    *::after {
        box-sizing: inherit;
        margin: 0;
        padding: 0;
    }

    .acdmy {
        height: 100%;
        background-color: #fff;
    }

    .acdmy .info {
        margin-bottom: 50px;
    }

    .acdmy h1 {
        color: #00053b;
        text-align: center;
        margin-top: 40px;
    }

    .acdmy .info p {
        font-weight: 500;
        font-size: 21px;
        margin: 7px 0px;
        color: #8B8B8B;
    }

    /* END Optional styles */
    .acdmy .video-container {
        border-radius: 4px;
        margin: 0 auto;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.4);
    }

    .acdmy .video-container .video-wrapper {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .acdmy .video-container video {
        width: 100%;
        height: 100%;
        border-radius: 4px;
    }

    .acdmy .play-button-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: auto;
        pointer-events: none;
    }

    .acdmy .play-button-wrapper #circle-play-b {
        cursor: pointer;
        pointer-events: auto;
        width: 75px;
        height: 75px;
        fill: #fff;
        stroke: #fff;
        cursor: pointer;
        background-color: rgba(0, 0, 0, 0.2);
        border-radius: 50%;
        opacity: 0.9;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }   

    .acdmy .play-button-wrapper #circle-play-b svg {
        width: 40px;
        height: 40px;
        fill: #fff;
        cursor: pointer;
   }
</style>

<body>
    <section class="acdmy padding-70">
        <div class="container">
            <div class="info">
                <p>watch video</p>
                <h3 class="txt-h3">Explore the Red Sand Truck Driving Academy. </h3>
            </div>
            <div class="row">
                <div class="video-wrapper">
                    <div class="video-container" id="video-container">
                        <video controls id="video" preload="metadata" poster="images/c-imgs/bg.jpg">
                            <source src="video/jtZUeP9CS8Sh4PQxXqBW_Blue+Horse_FB+Cover-v.mp4" type="video/mp4">
                        </video>

                        <div class="play-button-wrapper">
                            <div title="Play video" class="play-gif" id="circle-play-b" onclick="myfunction()">
                                <!-- SVG Play Button -->
                                 <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 210 210"
                                    style="enable-background:new 0 0 210 210;" xml:space="preserve">
                                    <path d="M179.07,105L30.93,210V0L179.07,105z" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

















    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    
    <script>
        const video = document.getElementById("video");
        const circlePlayButton = document.getElementById("circle-play-b");
        function togglePlay() {
            if (video.paused || video.ended) {
                video.play();
            } else {
                video.pause();
            }
        }

        circlePlayButton.addEventListener("click", togglePlay);
        video.addEventListener("playing", function() {
            circlePlayButton.style.opacity = 0;
            video.setAttribute("controls","true");
        });
        video.addEventListener("pause", function() {
            circlePlayButton.style.opacity = 1;
            video.removeAttribute("controls");
        });
    </script>
    
    <!--<script>-->
    <!--    $(document).ready(function() {-->
    <!--        var video1 = document.getElementById("video");-->
    <!--          if (video1.hasAttribute("controls")) {-->
    <!--             video1.removeAttribute("controls");   -->
    <!--          } -->
    <!--          elseif {-->
    <!--              function myfunction() {-->
    <!--                video1.setAttribute("controls","true"); -->
    <!--            }-->
    <!--          } else {-->
    <!--              video1.setAttribute("controls","true"); -->
    <!--          }-->
    <!--    });-->
    <!--</script>-->


</body>

</html>