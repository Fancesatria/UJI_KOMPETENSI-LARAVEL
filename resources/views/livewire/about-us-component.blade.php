<div>
    <style>
        .btn-contact {
            background-color: rgb(223, 223, 223);
            color: grey;
            transition: 0.3s;
            font-weight: bold;
        }

        .btn-contact:hover {
            background-color: #557153;
            color: white;
            font-weight: bold;
        }

        .panel-body {
            margin-bottom: 20px;
        }
    </style>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="" class="link">home</a></li>
                    <li class="item-link"><span>About Us</span></li>
                </ul>
            </div>
            <div class="panel panel-default">

                <div class="panel-body" >
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/logo2.png')}}" width="100%" alt="No image available">
                    </div>

                    <div class="col-md-8" style="margin-top: 50px; padding-left: 80px; padding-right: 80px" >
                        <h1 class="display-2" style="font-weight: bold; color: #557153">THE ADVENTURE STORE</h1><br>
                        <p style="padding-right:80px; font-size: 17px; text-align: justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque, explicabo quo ipsa doloribus tenetur suscipit mollitia consequatur adipisci nemo animi molestias repudiandae incidunt beatae iste, quod pariatur deserunt laborum eos?</p>
                        <a href="{{ route('contact') }}" class="btn btn-contact">Contact us</a>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="aboutus-info style-center">
                            <b class="box-title">Interesting Facts</b>
                            <p class="txt-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                        </div>
        
                        <div class="row equal-container">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="aboutus-box-score equal-elem ">
                                    <b class="box-score-title">10000</b>
                                    <span class="sub-title">Items in Store</span>
                                    <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s...</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="aboutus-box-score equal-elem ">
                                    <b class="box-score-title">90%</b>
                                    <span class="sub-title">Our Customers comeback</span>
                                    <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s...</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="aboutus-box-score equal-elem ">
                                    <b class="box-score-title">2 million</b>
                                    <span class="sub-title">User of the site</span>
                                    <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s...</p>
                                </div>
                            </div>
                        </div>
        
                        <div class="row">
        
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="aboutus-info style-small-left">
                                    <b class="box-title">What we really do?</b>
                                    <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
                                </div>
                                <div class="aboutus-info style-small-left">
                                    <b class="box-title">History of the Company</b>
                                    <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="aboutus-info style-small-left">
                                    <b class="box-title">Our Vision</b>
                                    <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
                                </div>
                                <div class="aboutus-info style-small-left">
                                    <b class="box-title">Cooperate with Us!</b>
                                    <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="aboutus-info style-small-left">
                                    <b class="box-title">Cooperate with Us!</b>
                                    <div class="list-showups">
                                        <label>
                                            <input type="radio" class="hidden" name="showup" id="shoup1" value="shoup1" checked="checked">
                                            <span class="check-box"></span>
                                            <span class='function-name'>Support 24/7</span>
                                            <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                                        </label>
                                        <label>
                                            <input type="radio" class="hidden" name="showup" id="shoup2" value="shoup2">
                                            <span class="check-box"></span>
                                            <span class='function-name'>Best Quanlity</span>
                                            <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                                        </label>
                                        <label>
                                            <input type="radio" class="hidden" name="showup" id="shoup3" value="shoup3">
                                            <span class="check-box"></span>
                                            <span class='function-name'>Fastest Delivery</span>
                                            <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                                        </label>
                                        <label>
                                            <input type="radio" class="hidden" name="showup" id="shoup4" value="shoup4">
                                            <span class="check-box"></span>
                                            <span class='function-name'>Customer Care</span>
                                            <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
