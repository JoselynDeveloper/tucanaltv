<!-- HEADER -->
<?php include("includes/header.php"); ?>

<!--Main Navigation-->

<!--Main Layout-->
<main class="mt-5">

    <div class="contai">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <!-- <video id="my_video_1" class="video-js vjs-default-skin vjs-fluid vjs-playback-rate mt-5" controls preload="auto" data-setup='{ "controls": true, "autoplay": true, "preload": "auto", "responsive":true }'>
                        <source src="http://compuyorktv.dyndns.tv:8081/compuziptv/tucanaltv/playlist.m3u8" type="application/x-mpegURL">
                    </video> -->
                    <video-js id="my_video_1" class="vjs-default-skin vjs-fluid" controls preload="auto">
                        <source src="http://compuyorktv.dyndns.tv:8081/compuziptv/tucanaltv/playlist.m3u8" type="application/x-mpegURL">
                    </video-js>

                    <script src="https://unpkg.com/video.js/dist/video.js"></script>
                    <script src="https://unpkg.com/@videojs/http-streaming/dist/videojs-http-streaming.js"></script>

                    <script>
                        var player = videojs('my_video_1');
                    </script>
                </div>

            </div>
        </div>
    </div>

</main>
<!--Main Layout-->
<!-- Start your project here-->

<!-- HEADER -->
<?php include("includes/footer.php"); ?>