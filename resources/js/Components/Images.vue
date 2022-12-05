<script>
import Masonry from 'masonry-layout'

export default {
  data() {
    return {
      items: [],
    }
  },
  mounted() {
    this.layout()
  },
  methods: {
    layout() {
    //   this._masonry = new Masonry(this.$refs.masonry, {
    //     itemSelector: '.grid-item',
    //     columnWidth: 110,
    //     percentPosition: true,
    //   })
        var $grid = $(this.$refs.masonry).masonry({
            itemSelector: '.grid-item',
            percentPosition: true,
            columnWidth: 110
        });
        $grid.imagesLoaded().progress( function() {
            $grid.masonry();
        });  
    },
  },
}
</script>

<template>

    <div class="site-wrap">

        <div class="main-content">

            <div class="container-fluid photos">

                <div class="grid col-md-10 mx-auto" ref="masonry">
                    

                    <div class="grid-item grid-item--width2" data-aos="fade-up">
                        <a href="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" class="d-block photo-item" data-fancybox="gallery">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item grid-item--width3" data-aos="fade-up" data-aos-delay="100">
                        <a href="single.html" class="d-block photo-item" data-fancybox="gallery">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item grid-item--width2" data-aos="fade-up" data-aos-delay="200">
                        <a href="single.html" class="d-block photo-item" data-fancybox="gallery">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item grid-item--width3" data-aos="fade-up" data-aos-delay="300">
                        <a href="single.html" class="d-block photo-item" data-fancybox="gallery">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item grid-item--width2" data-aos="fade-up" data-aos-delay="400">
                        <a href="single.html" class="d-block photo-item" data-fancybox="gallery">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="grid-item grid-item--width2" data-aos="fade-up" data-aos-delay="500">
                        <a href="single.html" class="d-block photo-item" data-fancybox="gallery">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item grid-item--width2" data-aos="fade-up" data-aos-delay="600">
                        <a href="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" class="d-block photo-item" data-fancybox="gallery">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item grid-item--width3" data-aos="fade-up" data-aos-delay="700">
                        <a href="single.html" class="d-block photo-item" data-fancybox="gallery">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item grid-item--width2" data-aos="fade-up" data-aos-delay="800">
                        <a href="single.html" class="d-block photo-item" data-fancybox="gallery">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item grid-item--width3" data-aos="fade-up" data-aos-delay="900">
                        <a href="single.html" class="d-block photo-item" data-fancybox="gallery">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item grid-item--width2" data-aos="fade-up" data-aos-delay="1000">
                        <a href="single.html" class="d-block photo-item" data-fancybox="gallery">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="grid-item grid-item--width2" data-aos="fade-up" data-aos-delay="1100">
                        <a href="single.html" class="d-block photo-item" data-fancybox="gallery">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <a href="single.html" class="d-block photo-item" data-fancybox="gallery">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <a href="single.html" class="d-block photo-item">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                        <a href="single.html" class="d-block photo-item">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                        <a href="single.html" class="d-block photo-item">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                        <a href="single.html" class="d-block photo-item">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
                        <a href="single.html" class="d-block photo-item">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                <span class="meta">42 Photos</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="800">
                        <a href="single.html" class="d-block photo-item">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                <span class="meta">42 Photos</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
                        <a href="single.html" class="d-block photo-item">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                <span class="meta">42 Photos</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <a href="single.html" class="d-block photo-item">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                <span class="meta">42 Photos</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <a href="single.html" class="d-block photo-item">
                            <img src="https://s3.reutersmedia.net/resources/r/?m=02&d=20211008&t=2&i=1577296446&w=780&fh=&fw=&ll=&pl=&sq=&r=2021-10-08T223610Z_42074_MRPRC2V1Q9II8U3_RTRMADP_0_SPAIN-VOLCANO" alt="Image" class="img-fluid">
                            <div class="photo-text-more">
                                <div class="photo-text-more">
                                <h3 class="heading">Photos Title Here</h3>
                                <span class="meta">42 Photos</span>
                                </div>
                            </div>
                        </a>
                    </div> -->
                    
                </div>

            </div>

        </div>

    </div>

</template>