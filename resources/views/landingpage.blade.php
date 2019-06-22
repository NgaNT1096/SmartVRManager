@extends('layouts.user')

@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('images/update/background.png');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-xl-10 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span>{{ trans('home.title') }}</span><br><span>{{ trans('home.detail_title') }}</span></h1>
                    <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ trans('home.descripition') }}</p>
                    <div id="timer" class="d-flex mb-3">
                        <div class="try_now"><a href="{{ url('/login') }}" class="try_now nav-link">{{ trans('home.try_now') }}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section feature-section  services-section bg-light">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span></span>Use Case</h2>
                </div>
            </div>
        <div class="container">
            <div class="row d-flex">
                <div class="col-xl-3 col-md-6 col-sm-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><img src="images/update/event.png"></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Event</h3>
                            <p>Dẫn dắt người xem vào thế giới ảo không giới hạn không gian.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><img src="images/update/marketing.png"></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Marketing/ sale</h3>
                            <p>Không hạn chế không gian, địa điểm giới thiệu sản phẩm dù bất kỳ nơi đâu</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><img src="images/update/intertainment.png"></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Giải trí</h3>
                            <p>Khám phá những câu truyện trong trí tưởng tượng.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><img src="images/update/learn.png"></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Học tập</h3>
                            <p>Tiếp thu kiến thức bằng những hình ảnh, video trực quan, sinh động</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- <section class="feature-pc feature-section services-section bg">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Feature</h2>
                    <p>SmartVR cung cấp tất cả các tính năng bạn cần để kiểm soát và <br> theo dõi nội dung trên thiết bị thực tế ảo</p>
                </div>
            </div>
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-12 feature_row ">
                        <div class="info_feature col-md-6">
                            <h3 class="heading-feature"><b>Đa nền tảng</b></h3>
                            <p>Hoạt động với hầu kết các kính Thực tế ảo hiện có.  <br>Cài đặt dễ dàng từ kho ứng dụng.</p>
                        </div>
                        <div class="img_feature col-md-5">
                            <img src="images/feature/flatform.png">
                        </div>
                    </div>
                    <div class="col-md-12 feature_row  ">
                        <div class="img_feature col-md-6">
                            <img src="images/feature/content.png">
                        </div>
                        <div class="info_feature col-md-5 feature-right">
                            <h3 class="heading-feature"><b>Upload nội dung 360° </b></h3>
                            <p>Dễ dàng upload và quản lý nội dung <br> Dễ dàng kích hoạt nội dung để <br> phát trực tiếp từ thiết bị.</p>
                        </div>
                    </div>
                    <div class="col-md-12 feature_row ">
                        <div class="info_feature col-md-6">
                            <h3 class="heading-feature"><b>Giám sát và quản lý</b></h3>
                            <p>Kiểm tra kết nối, trạng thái pin và tạo danh sách phát <br>với điều khiển từ xa. </p>
                        </div>
                        <div class="img_feature col-md-5">
                            <img src="images/feature/manage.png">
                        </div> 
                    </div>
                </div>
            </div>
    </section> -->
    <section class="feature-mobile feature-area section-padding-top" id="features_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-sm-offset-2">
                    <div class="page-title text-center">
                        <h5 class="title">Features</h5>
                        <div class="space-10"></div>
                        <h3>SmartVR cung cấp tất cả các tính năng bạn cần để kiểm soát <br> và theo dõi nội dung trên thiết bị thực tế ảo</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xl-6 ">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-rocket"></i>
                        </div>
                        <h4>Đa nền tảng </h4>
                        <p>Hoạt động với hầu kết các kính Thực tế ảo hiện có.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="lnr lnr-paperclip"></i>
                        </div>
                        <h4>Upload nội dung 360</h4>
                        <p>Dễ dàng upload và quản lý nội dung <br> Dễ dàng kích hoạt nội dung để <br> phát trực tiếp từ thiết bị.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="lnr lnr-cloud-download"></i>
                        </div>
                        <h4>Cloud Storage</h4>
                        <p>Dung lượng không giới hạn.</p>
                    </div>
                    <div class="space-60"></div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-6">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-clock"></i>
                        </div>
                        <h4>Easy Notifications</h4>
                        <p>Nhận thông báo realtime.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="lnr lnr-laptop-phone"></i>
                        </div>
                        <h4>Giám sát và quản lý</h4>
                        <p>Kiểm tra kết nối, trạng thái pin và tạo danh sách phát <br>với điều khiển từ xa. </p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="lnr lnr-cog"></i>
                        </div>
                        <h4>Thanh toán & support trực tuyến</h4>
                        <p>Tiết kiệm thời gian và tiền bạc.</p>
                    </div>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section feature-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Reviews</span>
                    <h2 class="mb-4"><span>Happy</span> Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/review/1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Wow! Thật tuyệt vời. Cái này mình mới thấy ở Youtube nước ngoài. Không ngờ Việt nam mình cũng có mà trải nghiệm xịn như phim luôn.</p>
                                    <p class="name">Nguyễn Trọng Tuấn</p>
                                    <span class="position">CMO Sàn bất động sản</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/review/2.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Trải nghiệm rất thật, cứ như tôi đang cùng khách hàng đứng ngay trong dự án ấy chứ.</p>
                                    <p class="name">Phạm Quỳnh Anh</p>
                                    <span class="position">Chuyên viên bán hàng</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/review/3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Được đi thăm nhà dù chưa xây xong quả là trải nghiệm đáng nhớ. Tôi đã hình dung mình sống ra sao nơi này rồi.</p>
                                    <p class="name">Lê Diệu Hương</p>
                                    <span class="position">Người mua nhà</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/review/4.jpeg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Sản phẩm có chất lượng mà khó có đơn vị trong/ngoài nước theo kịp.</p>
                                    <p class="name">Nguyễn Thị Nga</p>
                                    <span class="position">Chuyên viên bán hàng</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/review/5.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Tôi và bạn đứng ở một nơi mà như đang ở một nơi xa. Không thể mô tả được cảm giác của tôi lúc ấy. Thật tuyệt !</p>
                                    <p class="name">Ngô Quốc Hoàn</p>
                                    <span class="position">Nhân viên văn phòng</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/review/6.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Đeo kính lên là cả một thế giới khác. Tha hồ thỏa trí tưởng tượng của tôi.</p>
                                    <p class="name">Trần Minh Huyền</p>
                                    <span class="position">Sinh viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="ftco-section feature-section bg price">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Pricing Plan</h2>
                    <p>Pay per period and number of headsets.<p>
                </div>
            </div>
            <div class="row">
                @foreach($plans as $plan)
                <div class="col-md-3 ftvo-animate">
                <div class="block-7">
                    <div class="text-center">
                        <img class="icon" src="images/update/Compass.png"><br>
                        <h2 class="heading">{{$plan->description}}</h2>
                        <span class="price"><sup></sup> <span class="number">{{$plan->price}} EUR / 1 Day</span></span>
                        <ul class="pricing-text mb-5">
                            <li>maximum {{$plan->max_headsets}} headsets</li>
                            <li>remote controller</li>
                            <li>Select any content</li>
                        </ul>
                        <a href="page/order" class="btn btn-primary d-block px-2 py-3">Buy</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section> -->
            <!--Price-Area -->
    <section class="section-padding price-area" id="price_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div class="page-title text-center">
                        <h5 class="title">Pricing Plan</h5>
                        <h3 class="dark-color">Our Awesome Pricing Plan</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="price-box">
                        <div class="price-header">
                            <div class="price-icon">
                                <span class="lnr lnr-rocket"></span>
                            </div>
                            <h4 class="upper">Free</h4>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li>0 kính</li>
                                <li>2 video</li>
                                <li>Lincense 2 ngày</li>
                            </ul>
                        </div>
                        <div class="price-rate">
                            <sup>&#36;</sup> <span class="rate">0</span> <small>/Month</small>
                        </div>
                        <div class="price-footer">
                            <a href="#" class="bttn-white">Purchase</a>
                        </div>
                    </div>
                    <div class="space-30 hidden visible-xs"></div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="price-box">
                        <div class="price-header">
                            <div class="price-icon">
                                <span class="lnr lnr-diamond"></span>
                            </div>
                            <h4 class="upper">Medium</h4>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li>5 kính</li>
                                <li>2 video</li>
                                <li>Lincense 1 tháng</li>
                            </ul>
                        </div>
                        <div class="price-rate">
                            <sup>&#36;</sup> <span class="rate">49</span> <small>/Month</small>
                        </div>
                        <div class="price-footer">
                            <a href="#" class="bttn-white">Purchase</a>
                        </div>
                    </div>
                    <div class="space-30 hidden visible-xs"></div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="price-box">
                        <div class="price-header">
                            <div class="price-icon">
                                <span class="lnr lnr-pie-chart"></span>
                            </div>
                            <h4 class="upper">Business</h4>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li>10 kính</li>
                                <li>5 video</li>
                                <li>Lincense 1 tháng</li>
                            </ul>
                        </div>
                        <div class="price-rate">
                            <sup>&#36;</sup> <span class="rate">99</span> <small>/Month</small>
                        </div>
                        <div class="price-footer">
                            <a href="#" class="bttn-white">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="price-box">
                        <div class="price-header">
                            <div class="price-icon">
                                <span class="lnr lnr-pie-chart"></span>
                            </div>
                            <h4 class="upper">Enterpprice</h4>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li>Custom</li>
                                <li>Không giới hạn</li>
                                <li>Không giới hạn</li>
                            </ul>
                        </div>
                        <div class="price-rate">
                            <span class="rate">custom</span> <small></small>
                        </div>
                        <div class="price-footer">
                            <a href="#" class="bttn-white">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Price-Area-End -->
    <section class="ftco-section feature-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Our Activity</span>
                    <h2><span>Recent</span> Activity</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-xl-4 col-md-12 col-sm-12 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="" class="block-20" style="background-image: url('images/anh1.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="d-flex align-items-center pt-2 mb-4">
                                <div class="one">
                                    <span class="day">14</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">06</span>
                                </div>
                            </div>
                            <h3 class="heading mt-2"><a href="#"><b>Novaland Expo 2019</b></a></h3>
                            <p>Với 10 dự án BĐS mới cùng hàng ngàn sản phẩm BĐS nhà ở và BĐS nghỉ dưỡng, Triển lãm Novaland Expo 2019 thu hút hơn 12.000 lượt khách tham quan trong 03 ngày từ 14 -16/06/2019.</p>
                            <p>Novaland ứng dụng SmartVR đưa khách hàng đi thăm quan các dự án mà không cần phải đi xa</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-sm-12 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="" class="block-20" style="background-image: url('images/anh2.JPG');">
                        </a>
                        <div class="text p-4 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4">
                                <div class="one">
                                    <span class="day">07</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">04</span>
                                </div>
                            </div>
                            <h3 class="heading mt-2"><a href="#"><b>Vinhomes Ocean park</b></a></h3>
                            <p>Biến những nơi không thể thành có thể.Cả dự án được đưa tới người mua nhà mọi nơi. Thực tế ảo giúp kết nối mọi không gian thời gian.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-sm-12 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="" class="block-20" style="background-image: url('images/anh3.JPG');">
                        </a>
                        <div class="text p-4 float-right d-block">
                        <div class="d-flex align-items-center pt-2 mb-4">
                                <div class="one">
                                    <span class="day">Thứ2</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">Hàng tháng</span>
                                </div>
                            </div>
                            <h3 class="heading mt-2"><a href="#"><b>NemoKid - Cùng bé khám phá vũ trụ</b></a></h3>
                            <p>SmartVR mang tới trải nghiệm cho các bé. Công nghệ giúp các con chạm tới mơ ước và thật dễ dàng hòa mình vào câu chuyện cổ tích hay thế giới dưới đáy biển sâu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <h2>Đăng ký ngay để nhận những ưu đãi hấp dẫn từ SmartVR</h2>
                        <p></p>
                        <div class="row d-flex justify-content-center mt-4 mb-4">
                            <div class="col-md-8">
                                <form action="#" class="subscribe-form">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" placeholder="Enter email address">
                                        <input type="submit" value="Subscribe" class="submit px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-gallery bg-light">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-xl-3 col-md-3 col-sm-6 ftco-animate">
                    <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_1.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-6 ftco-animate">
                    <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_2.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-6 ftco-animate">
                    <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_3.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-6 ftco-animate">
                    <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_4.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection