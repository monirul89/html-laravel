@extends('front-end.master')

@section('title')
    Portfolio
@endsection

@section('body')


<section id="banner">
    <div class="container-fulid ">
        <div id="jssor_1"
             style="position:relative;margin:0 auto;top:0px;left:-1px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
            <div data-u="loading" class="jssorl-oval"
                 style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{asset('/')}}front/img/oval.svg"/>
            </div>
            <div data-u="slides"
                 style="cursor:default;position:relative;top:0px;left:-1px;width:980px;height:380px;overflow:hidden;">

                <div data-b="0">
                    <img data-u="image" src="{{asset('/')}}front/img/03.jpg"/>
                    <div style="position:absolute;top:107px;left:460px;width:460px;height:210px;z-index:0;">
                        <img data-u="caption" data-t="0"
                             style="position:absolute;top:-300px;left:89px;width:210px;height:178px;z-index:0;"
                             src="{{asset('/')}}front/img/web2.png"/>
                        <img data-u="caption" data-t="1"
                             style="position:absolute;top:55px;left:-200px;width:114px;height:144px;z-index:0;"
                             src="{{asset('/')}}front/img/web1.png"/>
                        <img data-u="caption" data-t="2"
                             style="position:absolute;top:88px;left:420px;width:219px;height:120px;z-index:0;"
                             src="{{asset('/')}}front/img/gb1.png"/>
                    </div>
                    <div data-u="caption" data-t="3" data-to="0% 100%"
                         style="position:absolute;top:385px;left:-100px;width:257px;height:127px;z-index:0;">
                        <div style="position:absolute;top:4px;left:34px;width:198px;height:112px;z-index:0; overflow:hidden;">
                            <img data-u="caption" data-t="4"
                                 style="position:absolute;top:-2px;left:-2px;width:408px;height:116px;z-index:0;"
                                 src="{{asset('/')}}front/img/web-banner.png"/>
                        </div>
                        <img style="position:absolute;top:0px;left:0px;width:257px;height:127px;z-index:0;"
                             src="{{asset('/')}}front/img/mock-phone.png"/>
                        <img data-u="caption" data-t="5"
                             style="position:absolute;top:22px;left:139px;width:108px;height:108px;z-index:0;"
                             src="{{asset('/')}}front/img/circle-hollow.png"/>
                        <img data-u="caption" data-t="6"
                             style="position:absolute;top:31px;left:148px;width:90px;height:90px;z-index:0;"
                             src="{{asset('/')}}front/img/circle-solid.png"/>
                        <img data-u="caption" data-t="7"
                             style="position:absolute;top:100px;left:300px;width:63px;height:77px;z-index:0;"
                             src="{{asset('/')}}front/img/hand.png"/>
                    </div>
                </div>
                <div data-b="1" data-p="170.00">
                    <img data-u="image" src="{{asset('/')}}front/img/02.jpg"/>
                    <div data-u="caption" data-t="9" data-3d="1"
                         style="position:absolute;top:150px;left:-36px;width:1053px;height:150px;z-index:0;">
                        <div data-u="caption" data-t="10" data-to="100% 50%"
                             style="position:absolute;top:0px;left:1005px;width:220px;height:72px;z-index:0;background-color:#02918c;">
                            <div data-u="caption" data-t="11"
                                 style="position:absolute;top:0px;left:20px;width:72px;height:72px;z-index:0;font-size:46px;color:#ffffff;line-height:72px;text-align:center;">
                                Welcome
                            </div>
                        </div>
                        <div data-u="caption" data-t="12" data-to="0% 50%"
                             style="position:absolute;top:0px;left:480px;width:80px;height:72px;z-index:0;background-color:#eb9434;font-size:45px;color:#ffffff;line-height:72px;text-align:center;">
                            To
                        </div>
                        <div data-u="caption" data-t="13" data-to="0% 50%"
                             style="position:absolute;top:0px;left:560px;width:270px;height:72px;z-index:0;background-color:#02918c;font-size:45px;color:#ffffff;line-height:72px;text-align:center;">
                            Monirul Islam
                        </div>
                        <div data-u="caption" data-t="14"
                             style="position:absolute;top:360px;left:238px;width:577px;height:30px;z-index:0;font-size:30px;color:#02918c;line-height:30px;text-align:center;">
                            About Our Genius Team Memters
                        </div>
                    </div>
                    <div data-u="caption" data-t="15" data-3d="1"
                         style="position:absolute;top:70px;left:182px;width:616px;height:150px;z-index:0;">
                        <img data-u="caption" data-t="16"
                             style="position:absolute;top:22px;left:266px;width:84px;height:84px;z-index:0;"
                             src="{{asset('/')}}front/img/monir1.png"/>
                        <img data-u="caption" data-t="17"
                             style="position:absolute;top:16px;left:260px;width:96px;height:96px;z-index:0;"
                             src="{{asset('/')}}front/img/circle.png"/>
                        <div data-u="caption" data-t="18"
                             style="position:absolute;top:195px;left:260px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:20px;text-align:center;">
                            Web Developer
                        </div>
                        <img data-u="caption" data-t="19"
                             style="position:absolute;top:22px;left:22px;width:84px;height:84px;z-index:0;"
                             src="{{asset('/')}}front/img/monir.png"/>
                        <img data-u="caption" data-t="20"
                             style="position:absolute;top:16px;left:16px;width:96px;height:96px;z-index:0;"
                             src="{{asset('/')}}front/img/circle.png"/>
                        <div data-u="caption" data-t="21"
                             style="position:absolute;top:125px;left:166px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:20px;text-align:center;">
                            Web Designer
                        </div>
                        <img data-u="caption" data-t="22"
                             style="position:absolute;top:22px;left:510px;width:84px;height:84px;z-index:0;"
                             src="{{asset('/')}}front/img/fafiz.png"/>
                        <img data-u="caption" data-t="23"
                             style="position:absolute;top:16px;left:504px;width:96px;height:96px;z-index:0;"
                             src="{{asset('/')}}front/img/circle.png"/>
                        <div data-u="caption" data-t="24"
                             style="position:absolute;top:125px;left:354px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:20px;text-align:center;">
                            Graphic Designer
                        </div>
                    </div>
                    <div style="position:absolute;top:20px;left:327px;width:336px;height:312px;z-index:0;">
                        <div data-u="caption" data-t="25"
                             style="position:absolute;top:82px;left:104px;width:128px;height:147px;z-index:0;">
                            <img data-u="caption" data-t="26"
                                 style="position:absolute;top:0px;left:0px;width:128px;height:147px;z-index:0;"
                                 src="{{asset('/')}}front/img/hexagon-hollow-big.png"/>
                            <img data-u="caption" data-t="27"
                                 style="position:absolute;top:9px;left:8px;width:112px;height:129px;z-index:0;"
                                 src="{{asset('/')}}front/img/hexagon-solid-yellow.png"/>
                            <div data-u="caption" data-t="28"
                                 style="position:absolute;top:20px;left:0px;width:128px;height:90px;z-index:0;font-size:20px;line-height:30px;text-align:center;">
                                My
                                <br/>All<br/>Services
                            </div>
                        </div>
                        <div style="position:absolute;top:0px;left:187px;width:90px;height:104px;z-index:0;">
                            <img data-u="caption" data-t="29"
                                 style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;"
                                 src="{{asset('/')}}front/img/hexagon-hollow.png"/>
                            <img data-u="caption" data-t="30"
                                 style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;"
                                 src="{{asset('/')}}front/img/hexagon-solid.png"/>
                            <img data-u="caption" data-t="31"
                                 style="position:absolute;top:18px;left:11px;width:70px;height:70px;z-index:0;"
                                 src="{{asset('/')}}front/img/web-development.png"/>
                        </div>
                        <div style="position:absolute;top:104px;left:246px;width:90px;height:104px;z-index:0;">
                            <img data-u="caption" data-t="32"
                                 style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;"
                                 src="{{asset('/')}}front/img/hexagon-hollow.png"/>
                            <img data-u="caption" data-t="33"
                                 style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;"
                                 src="{{asset('/')}}front/img/hexagon-solid.png"/>
                            <img data-u="caption" data-t="34"
                                 style="position:absolute;top:18px;left:11px;width:70px;height:70px;z-index:0;"
                                 src="{{asset('/')}}front/img/webdesign.png"/>
                        </div>
                        <div style="position:absolute;top:208px;left:187px;width:90px;height:104px;z-index:0;">
                            <img data-u="caption" data-t="35"
                                 style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;"
                                 src="{{asset('/')}}front/img/hexagon-hollow.png"/>
                            <img data-u="caption" data-t="36"
                                 style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;"
                                 src="{{asset('/')}}front/img/hexagon-solid.png"/>
                            <img data-u="caption" data-t="37"
                                 style="position:absolute;top:18px;left:11px;width:70px;height:70px;z-index:0;"
                                 src="{{asset('/')}}front/img/Outsourcing.png"/>
                        </div>
                        <div style="position:absolute;top:208px;left:59px;width:90px;height:104px;z-index:0;">
                            <img data-u="caption" data-t="38"
                                 style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;"
                                 src="{{asset('/')}}front/img/hexagon-hollow.png"/>
                            <img data-u="caption" data-t="39"
                                 style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;"
                                 src="{{asset('/')}}front/img/hexagon-solid.png"/>
                            <img data-u="caption" data-t="40"
                                 style="position:absolute;top:18px;left:11px;width:70px;height:70px;z-index:0;"
                                 src="{{asset('/')}}front/img/seo.png"/>
                        </div>
                        <div style="position:absolute;top:104px;left:0px;width:90px;height:104px;z-index:0;">
                            <img data-u="caption" data-t="41"
                                 style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;"
                                 src="{{asset('/')}}front/img/hexagon-hollow.png"/>
                            <img data-u="caption" data-t="42"
                                 style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;"
                                 src="{{asset('/')}}front/img/hexagon-solid.png"/>
                            <img data-u="caption" data-t="43"
                                 style="position:absolute;top:18px;left:11px;width:70px;height:70px;z-index:0;"
                                 src="{{asset('/')}}front/img/office.png"/>
                        </div>
                        <div style="position:absolute;top:0px;left:59px;width:90px;height:104px;z-index:0;">
                            <img data-u="caption" data-t="44"
                                 style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;"
                                 src="{{asset('/')}}front/img/hexagon-hollow.png"/>
                            <img data-u="caption" data-t="45"
                                 style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;"
                                 src="{{asset('/')}}front/img/hexagon-solid.png"/>
                            <img data-u="caption" data-t="46"
                                 style="position:absolute;top:25px;left:6px;width:70px;height:60px;z-index:0;"
                                 src="{{asset('/')}}front/img/graphic-design.png"/>
                        </div>
                    </div>
                </div>
                <div data-b="2" data-p="816.0">
                    <img data-u="image" src="{{asset('/')}}front/img/01.jpg"/>
                    <div data-u="caption" data-t="47" data-3d="1"
                         style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">
                        <img style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"
                             src="{{asset('/')}}front/img/main.jpg"/>
                        <div data-u="caption" data-t="48"
                             style="position:absolute;top:30px;left:30px;width:200px;height:40px;z-index:0;background-color:#02918c;font-size:20px;color:#ffffff;line-height:40px;text-align:center;">
                            Welcome To Monirul Islam
                        </div>
                    </div>
                    <div data-u="caption" data-t="52" data-3d="1"
                         style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">
                        <img data-u="caption" data-t="53"
                             style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"
                             src="{{asset('/')}}front/img/layer-blurred-white.png"/>
                        <div data-u="caption" data-t="54"
                             style="position:absolute;top:100px;left:30px;width:280px;height:50px;z-index:0;font-size:22px;font-width:700;line-height:50px;text-align:center; color:#02918c;">
                            WELCOME To Monirul Islam
                        </div>
                        <div data-u="caption" data-t="55"
                             style="position:absolute;top:30px;left:30px;width:230px;height:40px;z-index:0;background-color:#02918c;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">
                            Welcome Messages
                        </div>
                    </div>
                    <div data-u="caption" data-t="56" data-3d="1"
                         style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">
                        <img data-u="caption" data-t="57"
                             style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"
                             src="{{asset('/')}}front/img/layer-blurred-white.png"/>
                        <div data-u="caption" data-t="58"
                             style="position:absolute;top:25px;left:340px;width:300px;height:175px;z-index:0;background-color:#ffff8c;"></div>
                        <div data-u="caption" data-t="59"
                             style="position:absolute;top:30px;left:30px;width:180px;height:40px;z-index:0;background-color:#02918c;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">
                            My All Services
                        </div>
                    </div>
                    <div data-u="caption" data-t="60" data-3d="1"
                         style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">
                        <img data-u="caption" data-t="61"
                             style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"
                             src="{{asset('/')}}front/img/layer-blurred-white.png"/>
                        <div data-u="caption" data-t="62"
                             style="position:absolute;top:30px;left:30px;width:250px;height:40px;z-index:0;background-color:#02918c;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">
                            Welcome to my web site
                        </div>
                        <div style="position:absolute;top:40px;left:400px;width:200px;height:50px;z-index:0;font-size:26px;line-height:50px;text-align:center;color:#02918c">
                            Monirul Islam
                        </div>
                    </div>
                    <div data-u="caption" data-t="63" data-3d="1"
                         style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">
                        <img data-u="caption" data-t="64"
                             style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"
                             src="{{asset('/')}}front/img/layer-blurred-white.png"/>
                        <div data-u="caption" data-t="65"
                             style="position:absolute;top:30px;left:30px;width:250px;height:40px;z-index:0;background-color:#02918c;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">
                            Web Development
                        </div>
                        <img style="position:absolute;top:90px;left:349px;width:87px;height:92px;z-index:0;"
                             src="{{asset('/')}}front/img/web-layout.png"/>
                    </div>
                    <div data-u="caption" data-t="66" data-3d="1"
                         style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">
                        <img data-u="caption" data-t="67"
                             style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"
                             src="{{asset('/')}}front/img/layer-blurred-white.png"/>
                        <div data-u="caption" data-t="68"
                             style="position:absolute;top:30px;left:30px;width:250px;height:40px;z-index:0;background-color:#02918c;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">
                            Web Design
                        </div>
                        <img style="position:absolute;top:126px;left:464px;width:66px;height:66px;z-index:0;"
                             src="{{asset('/')}}front/img/web-d-layout.png"/>
                    </div>
                    <div data-u="caption" data-t="69" data-3d="1"
                         style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">
                        <img data-u="caption" data-t="70"
                             style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"
                             src="{{asset('/')}}front/img/layer-blurred-white.png"/>
                        <div data-u="caption" data-t="71"
                             style="position:absolute;top:30px;left:30px;width:250px;height:40px;z-index:0;background-color:#02918c;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">
                            Graghic Design
                        </div>
                        <img style="position:absolute;top:120px;left:550px;width:48px;height:49px;z-index:0;"
                             src="{{asset('/')}}front/img/graphic-design-layout.png"/>
                    </div>
                    <div data-u="caption" data-t="72" data-3d="1"
                         style="position:absolute;top:-210px;left:150px;width:580px;height:225px;z-index:0;">
                        <img data-u="caption" data-t="73"
                             style="position:absolute;top:0px;left:0px;width:700px;height:225px;z-index:0;"
                             src="{{asset('/')}}front/img/layer-blurred-white.png"/>
                        <div data-u="caption" data-t="74"
                             style="position:absolute;top:30px;left:30px;width:200px;height:40px;z-index:0;background-color:#02918c;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">
                            Thanks! Thanks!!
                        </div>
                        <img data-u="caption" data-t="77"
                             style="position:absolute;top:0px;left:309px;width:8px;height:8px;z-index:0;"
                             src="{{asset('/')}}front/img/dot.png"/>
                        <img data-u="caption" data-t="78"
                             style="position:absolute;top:0px;left:327px;width:8px;height:8px;z-index:0;"
                             src="{{asset('/')}}front/img/dot.png"/>
                        <img data-u="caption" data-t="79"
                             style="position:absolute;top:0px;left:346px;width:8px;height:8px;z-index:0;"
                             src="{{asset('/')}}front/img/dot.png"/>
                        <img data-u="caption" data-t="80"
                             style="position:absolute;top:0px;left:363px;width:8px;height:8px;z-index:0;"
                             src="{{asset('/')}}front/img/dot.png"/>
                    </div>
                </div>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;"
                 data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;"
                 data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;"
                 data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- #endregion Jssor Slider End -->
</section>
<!-- banner part end -->





<section id="skills">
    <div class="container all_paragraph">
        <table width="100%">
            <tr align="center" valign="top">
                <td>
                    <h1>MD. MONIRUL ISLAM</h1>
                    <p><strong>Address</strong>: 90/B, Khilgaon(4th floor), Malibagh <br />
                        Chowdhury Para. D.I.T-Road.Dhaka-1219 <br />
                        <strong>Mobile No 1</strong>: 01915047779 <br />
                        <strong>Mobile No 2 </strong>:01912191584. <br />
                        <strong>E-mail </strong>: monirul89@gmail.com, <br />mo7rul@gmail.com</p>
                </td>
                <td width="150"><img src="{{asset('/')}}front/images/img/monir.jpg" alt="My Pic" width="150" height="150"/></td>
            </tr>
            <tr bgcolor="#b5b5b5" >
                <td colspan="2"><h3>Career Objective:</h3></td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>To work willingly in an environment where success comes through creativity, hard work, sincerity, teamwork and commitment to duty.
                        Capable of working on a team with people at all levels as well as working independently.</p>
                </td>
            </tr>
            <tr bgcolor="#b5b5b5" >
                <td colspan="2"><h3>Career Summary:</h3></td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>To build up career in a well known organization through the best effort. To obtain a responsible, challenging and growth-oriented position. Ability to learn new thing very quickly,
                        ability to find solution of problems quickly, capability of working under pressure and meeting deadlines.</p>
                </td>
            </tr>
            <tr bgcolor="#b5b5b5" >
                <td colspan="2"><h3>Special Qualification:</h3></td>
            </tr>
            <tr>
                <td colspan="2">
                    <p>HTML5, CSS3, Row PHP, Laravel, JavaScript, jQuery, Adobe Illustrator CS, Adobe Photoshop CS.</p>
                </td>
            </tr>
            <tr align="center" >
                <td colspan="2"><img src="{{asset('/')}}front/images/img/train.png" alt="Training course" height="150"></td>
            </tr>
            <tr id="pro" bgcolor="#b5b5b5">
                <td colspan="2"><h3>Professional Qualification:</h3></td>
            </tr>
            <tr>
                <td colspan="2" >
                    <table align="center" border="1">
                        <tr>
                            <th><h4>Certification</h4></th>
                            <th><h4>Institute</h4></th>
                            <th><h4>Location</h4></th>
                            <th><h4>Duration</h4></th>
                        </tr>
                        <tr>
                            <td>HTML5, CSS3, PHP, Wordpress.</td>
                            <td>E-Futurebd.com</td>
                            <td>Panthpat, Farmgate, Dhaka.</td>
                            <td>6 month</td>
                        </tr>
                    </table>
                </td>
            </tr>


            <tr id="specialization" bgcolor="#b5b5b5" >
                <td colspan="2"><h3>Specialization:</h3></td>
            </tr>
            <tr >
                <td colspan="2">
                    <ul>
                        <li><h5>HTML5/DHTML</h5></li>
                        <li><h5>CSS3</h5></li>
                        <li><h5>PHP 7</h5></li>
                        <li><h5>JavaScript</h5></li>
                        <li><h5>Adobe Photoshop</h5></li>
                        <li><h5>Illustrator</h5></li>
                        <li><h5>JQuery</h5></li>
                        <li><h5>Row PHP</h5></li>
                        <li><h5>Laravel</h5></li>
                    </ul>
                </td>
            </tr>
        </table>
        <hr/>
        <div class="row">
            <div class="col-sm-12">
                <h2 id="project">Projects : </h2>
                <div class="row project-portfolio">
                    <div class="col-sm-12">
                        <div class="row">
                            <h3><a target="_blank" href="http://www.fusion-radiology.com/">Project Name: Website
                                    for fusion-radiology</a></h3>
                            <div class="col-sm-6">
                                <div class="row">
                                    <p>Fusion is UK based Tele-radiology Company that provides general and subspecialty
                                        reporting services to
                                        support existing radiology departments within NHS and private healthcare
                                        organizations.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a target="_blank" href="http://www.fusion-radiology.com/">
                                    <img width="100%" height="100%" src="{{asset('/')}}front/images/img/fusion-radiology.jpg" alt="Fusion">
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-12">
                        <div class="row">
                            <h3><a target="_blank" href="http://themomsembroidery.com/">Project Name: The Mom's
                                    Embroidery</a></h3>
                            <div class="col-sm-6">
                                <div class="row">
                                    <p>Learning common Hardanger Embroidery Stitches! Some of the Hardanger Embroidery
                                        Stitches include Running Stitch,
                                        Four Sided Stitch, Hem Stitch, Buttonhole Stitch, Squared Edging Stitch, Eyelet
                                        Hole Stitch, Star Stitch.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a target="_blank" href="http://themomsembroidery.com/">
                                    <img width="100%" height="100%" src="{{asset('/')}}front/images/img/themomsembroidery.jpg" alt="Embroidery">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="row">
                            <h3><a target="_blank" href="http://shafidi.com">Project Name: Shafidi BD Import &
                                    Export</a></h3>
                            <div class="col-sm-6">
                                <div class="row">
                                    <p>We are the leading exporter of Jute Sackings (Hessian or Burlap Bags, Hessian
                                        Twill or Burlap Flour Bags, Food grade Coffee Sacks,
                                        Burlap Feed/Grain Sacks, Heavy duty & plus size sacks, Jute/Burlap Sandbags,
                                        Jute Woolpacks, etc</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a target="_blank" href="http://shafidi.com">
                                    <img width="100%" height="100%" src="{{asset('/')}}front/images/img/shafidi.jpg" alt="Shafidi">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <h3><a target="_blank" href="http://funnymoney24.com">Project Name: Funny Money</a></h3>
                            <div class="col-sm-6">
                                <div class="row">
                                    <p>We are the leading exporter of Jute Sackings (Hessian or Burlap Bags, Hessian
                                        Twill or Burlap Flour Bags, Food grade Coffee Sacks,
                                        Burlap Feed/Grain Sacks, Heavy duty & plus size sacks, Jute/Burlap Sandbags,
                                        Jute Woolpacks, etc</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a target="_blank" href="http://funnymoney24.com">
                                    <img width="100%" height="100%" src="{{asset('/')}}front/images/thumbs/funnymoney.jpg" alt="Funnymoney">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <table width="100%">
                        <tr bgcolor="#b5b5b5" >
                            <td colspan="2"><h3>Extra Curricular Activities:</h3></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>Basic: Java, C, C++, C#.</p>
                            </td>
                        </tr>
                        <tr id="personal" bgcolor="#b5b5b5" >
                            <td colspan="2"><h3>Personal Details :</h3></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>Father's Name 	:	Jendar Ali Sarkar.<br />
                                    Mother's Name 	:	Rakha Begum.<br />
                                    Date of Birth	:	February 12, 1989<br />
                                    Gender	:	Male<br />
                                    Marital Status 	:	Unmarried<br />
                                    Nationality	:	Bangladeshi<br />
                                    National Id No.	:	8819451923222<br />
                                    Religion	:	Islam.<br />
                                    Permanent Address	:	Village-Char domdoma, Post- Bannakandi, Police station-Ullapara, District, Sirajgonj.<br />
                                    Current Location	:	Dhaka</p>

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<hr/>
<section id="skills">
    <div class="container all_paragraph">
        <div class="col-md-12 col-sm-12 text-center all_header all_p">
            <h2>My awesome skills</h2>
            <h5>Web Development / Programming, Web Systems Administration (Apache, MySQL, PHP, Git), Database<br> Design
                and Query Optimization, Online Business Development</h5>
            <p class="all_bdr"></p>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 skills_box text-center wow fadeInLeft animated"
                             data-wow-delay=".2s" data-wow-offset="50"
                             style="visibility: visible; animation-delay: .2s; animation-name: fadeInLeft;">
                            <div class="col-md-5 col-sm-12 text-center">
                                <div id="demo-pie-1" class="pie-title-center" data-percent="98"><span
                                            class="pie-value"></span></div>
                            </div>
                            <div class="col-md-7 col-sm-12 text-justify all_header">
                                <h3>PSD to HTML </h3>
                                <p> I'm just the right choice for you. Well I'm Md. Monirul Islam a skilled Web
                                    Designer, having long time experience in Web Design platform, specially from PSD to
                                    HTML. <br/>&nbsp; </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 skills_box wow fadeInRight animated" data-wow-delay=".4s"
                             data-wow-offset="50"
                             style="visibility: visible; animation-delay: .5s; animation-name: fadeInRight;">
                            <div class="col-md-5 col-sm-12 text-center">
                                <div id="demo-pie-2" class="pie-title-center" data-percent="95"><span
                                            class="pie-value"></span></div>
                            </div>
                            <div class="col-md-7 col-sm-12 text-justify all_header">
                                <h3>Responsive Design</h3>
                                <p>I'm just a click away from you. Any type of responsive or basic design I can complete
                                    it with your demanding time. Just try my work, I'm ready to share my experiences
                                    with you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-md-12  col-sm-6 skills_box text-center wow fadeInLeft animated"
                             data-wow-delay=".5s" data-wow-offset="50"
                             style="visibility: visible; animation-delay: .7s; animation-name: fadeInLeft;">
                            <div class="col-md-5 col-sm-12">
                                <div id="demo-pie-3" class="pie-title-center" data-percent="85"><span
                                            class="pie-value"></span></div>
                            </div>
                            <div class="col-md-7 col-sm-12 text-justify all_header">
                                <h3>PHP / mySQL</h3>
                                <p>I'm just the right choice for you. Well I'm Md. Monirul Islam a skilled Web
                                    Developer, having long time experience in Web Development platform, specially
                                    Dynamic and E-commerce website etc.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 skills_box wow fadeInRight animated" data-wow-delay=".7s"
                             data-wow-offset="50"
                             style="visibility: visible; animation-delay: 1.5s; animation-name: fadeInRight;">
                            <div class="col-md-5 col-sm-12 text-center">
                                <div id="demo-pie-4" class="pie-title-center" data-percent="65"><span
                                            class="pie-value"></span></div>
                            </div>
                            <div class="col-md-7 col-sm-12 text-justify all_header">
                                <h3>javaScript / jQuery </h3>
                                <p> One years of working on projects of different complexity including startups both in
                                    frontend and backend. I have good skills in PHP 5(OOP), MySQL, JavaScript (jquery),
                                    ajax, json. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 skills_box text-center wow fadeInLeft animated"
                             data-wow-delay="0.5s" data-wow-offset="50"
                             style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                            <div class="col-md-5 col-sm-12">
                                <div id="demo-pie-5" class="pie-title-center" data-percent="80"><span
                                            class="pie-value"></span></div>
                            </div>
                            <div class="col-md-7 col-sm-12 text-justify all_header">
                                <h3>MVC Frameworks</h3>
                                <p>Responsible and very ambitious, highly dedicated to his work and on a constant quest
                                    for new, innovative solutions and ideas. Iinterested in programming and a logical
                                    approach to problem solving.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 skills_box wow fadeInRight animated" data-wow-delay=".2s"
                             style="visibility: visible; animation-delay: .2s; animation-name: fadeInRight;">
                            <div class="col-md-5 col-sm-12 text-center">
                                <div id="demo-pie-6" class="pie-title-center" data-percent="75"><span
                                            class="pie-value"></span></div>
                            </div>
                            <div class="col-md-7 col-sm-12 text-justify all_header">
                                <h3>Wordpress</h3>
                                <p>I am Wordpress speed optimization expert who can make your website as fast as
                                    possible, I am resistant in my work until I achieve best possible results and get
                                    everybody satisfied with project.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- skills Part code ends -->
@endsection