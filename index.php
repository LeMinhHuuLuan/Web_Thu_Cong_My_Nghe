<?PHP
     include("header.php")
?>

<div class="carousel-container">
    <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
        data-bs-interval="2000"
    >
        <ol class="carousel-indicators">
            <li
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
            ></li>
            <li
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
            ></li>
            <li
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
            ></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    src="./img/banner-slide 1.jpg"
                    class="d-block w-100"
                    alt="Slide 1"
                />
                <div class="carousel-caption">
                    <h4>Khám phá đỉnh cao khéo léo của thủ công.</h4>
                    <p>
                        Một sự thanh thản tuyệt vời đã chiếm lấy toàn bộ
                        tâm hồn tôi, giống như những buổi sáng mùa xuân
                        ngọt ngào này chiếm lấy toàn bộ tâm hồn tôi mà
                        tôi tận hưởng bằng cả trái tim mình.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img
                    src="./img/banner-slide 2.jpg"
                    class="d-block w-100"
                    alt="Slide 2"
                />
                <div class="carousel-caption">
                    <h4>
                        Bộ sưu tập phong phú các loại đồ thủ công và đồ
                        trang trí.
                    </h4>
                    <p>
                        Một sự thanh thản tuyệt vời đã chiếm lấy toàn bộ
                        tâm hồn tôi, giống như những buổi sáng mùa xuân
                        ngọt ngào này chiếm lấy toàn bộ tâm hồn tôi mà
                        tôi tận hưởng bằng cả trái tim mình.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img
                    src="./img/banner-slide 3.jpg"
                    class="d-block w-100"
                    alt="Slide 3"
                />
                <div class="carousel-caption">
                    <h4>
                        Đưa nghệ thuật thủ công vào từng góc nhỏ của
                        cuộc sống.
                    </h4>
                    <p>
                        Một sự thanh thản tuyệt vời đã chiếm lấy toàn bộ
                        tâm hồn tôi, giống như những buổi sáng mùa xuân
                        ngọt ngào này chiếm lấy toàn bộ tâm hồn tôi mà
                        tôi tận hưởng bằng cả trái tim mình.
                    </p>
                </div>
            </div>
        </div>
        <!-- control -->
        <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators"
            role="button"
            data-bs-slide="prev"
        >
            <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
            ></span>
            <span class="sr-only"></span>
        </a>
        <a
            class="carousel-control-next"
            href="#carouselExampleIndicators"
            role="button"
            data-bs-slide="next"
        >
            <span
                class="carousel-control-next-icon"
                aria-hidden="true"
            ></span>
            <span class="sr-only"></span>
        </a>
    </div>
</div>

<!-- Sản phảm mới -->

<!-- Middle content -->
 <div class="middle-content-1">
    <div class="content-container">
        <div class="custom-content-1">
            <picture>
                <source srcset="./img/index/middle-content-pic_1.webp" type="image/webp">
                <img src="./img/index/middle-content-pic_1.jpg" alt="Mô tả hình ảnh">
            </picture>
        </div>

        <div class="custom-content-2">
            <video src="./video/middle-content-video_1.mp4"
            playsinline loop muted autoplay 
            poster="./img/index/middle-content-video_1-poster.webp"></video>
        </div>
    </div>
 </div>

 <div class="middle-content-2">
    <div class="content-container">
        <div class="custom-content-1">
            <video src="./video/middle-content-video_2.mp4"
            playsinline loop muted autoplay 
            poster="./img/index/middle-content-video_1-poster.webp"></video>
        </div>

        <div class="custom-content-2">
            <picture>
                <!-- <source srcset="./img/index/middle-content-pic_2.webp" type="image/webp"> -->
                <img src="./img/index/middle-content-pic_2.jpg" alt="Mô tả hình ảnh">
            </picture>
        </div>
    </div>
 </div>
<?PHP
     include("footer.php")
?>