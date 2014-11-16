<html>
<head>
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid banner-padding">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">KIN KHUM</a>
            </div>

            <ul class="nav navbar-nav">
                <li><a href="/showAll">Restaurant Recommend</a></li>

                <li><a href="/bestRes">Best of Restaurant</a></li>


            </ul>


            <form action="/search" class="navbar-form navbar-left" role="search" method="post">
                <div class="form-group">
                    <input type="text" name="restaurant" class="form-control" placeholder="Search">
                </div>
                <button type="submit"  class="btn btn-default" >
                    <span class="glyphicon glyphicon-cutlery"></span></button>
                </form>
                <nav class="navbar-right">
                    @if (!Auth::check())
                    <a href="register" class="btn btn-info navbar-btn btn-sm" type="button">
                        <span class="glyphicon glyphicon-pencil"></span>Sign Up</a>

                        <a href="/login"> <button class="btn btn-info navbar-btn btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="glyphicon glyphicon-user"></span>Sign in</button></a>
                        @else
                        <a href="/logout">
                            <button class="btn btn-info navbar-btn btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="glyphicon glyphicon-user"></span>Sign out</button>
                        </a>   
                        @endif
                    </nav>
                </div>
            </div>
        </div>
    </nav>

    <div class="container ">
        <div class="col-md-9 carouse-center">
            <div class="row carousel-holder">
                <div class="col-md-12" style="margin-top: 10;
                margin-left: 150;
                margin-bottom: 40;">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="slide-image" src="86.png" alt="">
                        </div>
                        <div class="item ">
                            <img class="slide-image" src="/image/bg3.png" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="/image/(2).png" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="row picture">
    <div class="col-xs-6 col-sm-4"><img src="/image/ck1.jpg" class="img-thumbnail" data-toggle="modal" data-target="#myModal1">
        <!-- Modal -->
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Bake a wish</h4>
                    </div>
                    <div class="modal-body">

                        Dessert Cafe สไตล์ญี่ปุ่น ร้านขนมยอดนิยมของคนฝั่งธน
                        แม้จะเห็น Bake A Wish ไปเปิดสาขาตามห้างและ Community Mall ต่างๆ แต่ก็ไม่มีที่ไหนประสบความสำเร็จมากมายเท่าสาขานี้ 4 เหตุผลที่ผมคิดว่า Bake A Wish แจ้งเกิดได้ที่นี่คือ 
                        1) ร้านอาหาร ร้านกาแฟ และร้านขนมหวาน ย่านนี้ไม่ค่อยโดดเด่นเท่าไหร่ เลยทำให้คนทำงาน วัยรุ่นแถวนี้รู้สึกเก็บกด พอมีร้าน Hip Hip มาเปิดในชุมชน เลยอุดหนุนกันใหญ่เลย 
                        2) ขนมหวานคือจุดขาย อาหารคือแรงดึงดูด สังเกตได้ว่าราคาอาหารที่นี่จะถูกมากเมื่อเทียบกับอาหารประเภทเดียวกันที่อยู่ในห้าง พอไม่ต้องจ่ายค่าเช่าที่แพงๆ ก็เลยสามารถลดต้นทุนไปได้มากโข 
                        3) Location แม้จะไม่เอื้อเท่าไรนัก เพราะตั้งอยู่ในซอยสุขสวัสดิ์ 19 (ราษฏร์บูรณะ 14) คนที่ขับอยู่บนถนนใหญ่จะไม่มีวันผ่านมาถึง คือต้องตั้งใจมาเท่านั้น ทำให้นึกถึงร้าน Coffee Bean by Dao สาขาแรกที่อยู่ใต้อพาร์ทเมนต์ในซอยเจริญใจ พอมีชื่อเสียงขึ้นมา ไกลแค่ไหนก็คือใกล้สำหรับนักชิม 
                        4) จำนวนรีวิวและภาพที่ถูกแชร์บน Social Media ทำให้หลายคนตามรอยมาจนถึงที่หมาย 

                        ต้องออกตัวก่อนว่าไช้ชวนชิมมาทานที่นี่เป็นหนที่สอง หนแรกร้านยังไม่โด่งดังเท่านี้ และเมนูอาหารก็ยังมีไม่มากเท่านี้เช่นกัน วันนี้มาในฐานะ Mystery Shopper ลองสังเกตการณ์เข้ามาดูว่า ตอนที่ร้านมีคนหนาแน่นขนาดนี้ Bake A Wish เขาปรับตัวยังไง 

                        เพื่อความสะดวกในการสั่งอาหารในครั้งต่อไป ขอสรุปรายการอาหารของร้านนี้ให้คร่าวๆ ดังนี้ครับ 
                        1) ข้าวราดแกงกะหรี่ (85 บาท) เพิ่มชีส (120 บาท) โปะหมูทอด Tonkatsu (130 บาท) 
                        2) Kurobuta Tonkatsu (85 บาท) เพิ่มชีส (120 บาท) 
                        3) Pork Bulgogi ข้าวหมูบูโกกิ (85 บาท) 
                        4) Oyakodon ข้าวหน้าหมูทอดราดไข่ (95 บาท) 
                        5) Kara-age Rice ข้าวไก่ทอดคาราอาเกะ (85 บาท) 
                        6) Gyuudon (85 บาท) 
                        7) Yakitori with Rice ไก่หมักซอสเทอริยากิ (85 บาท) 
                        8) Tuna Salad หรือ Bake a Wish Salad (85 บาท) 
                        9) Okonomiyaki (120 บาท) 
                        10) Spaghetti Carbonara (85 บาท) 
                        11) Spaghetti Spicy Tuna (75 บาท) 
                        12) Spaghetti White Sauce (70 บาท) 
                        13) Spaghetti Paprika (70 บาท) 
                        14) Spaghetti Red Clam Sauce (75 บาท) 
                        15) Spaghetti Tomato Sauce (70 บาท) 
                        16) Squid Ink Seafood Spaghetti (95 บาท) 
                        17) Squid Ink Spaghetti Stir Fried Squid and Salted Egg สปาเก็ตตี้เส้นดำวอสปลาหมึกไข่เค็ม (120 บาท) 
                        18) Spaghetti Spicy Seafood (90 บาท) 
                        19) Baked Spinach with Cheese ผักโขมอบชีส (120 บาท) 
                        20) Caesar Salad (120 บาท) 
                        21) Soft Omelet with Ham (65 บาท) 
                        22) Tom yum Kung Noodle มาม่าต้มยำกุ้ง (85 บาท) 
                        23) Bake a Wish Noodle (85 บาท) 
                        24) Bake a Wish Fried Rice (85 บาท) 
                        25) Tuna Salad Spicy (85 บาท) 
                        26) American Breakfast (80 บาท) 
                        27) Chicken Nuggets, Karaage, Fried Potato, Cheese Spring Roll (65-75 บาท) 

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-sm-4"><img src="/image/1-25501.jpg" class="img-thumbnail" data-toggle="modal" data-target="#myModal2">
        <!-- Modal -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">ฉ่อยเป็ดย่าง</h4>
                    </div>
                    <div class="modal-body">
                        มาที่"ฉ่อย"ที่เดียวมีทั้งข้าวมีทั้งก๋วยเตี๋ยว เมนูหลากหลายแบบ ที่อร่อยๆ ทั้งนั้น ยังมีเมนูขายดีอื่นๆ ที่สั่งกันมากมายอย่าง ก๋วยเตี๋ยวเนื้อปลาพริกสด(แห้ง),เกี๊ยวกุ้งต้มยำน้ำข้นเป็ดย่าง ยังสั่งลูกชิ้นกุ้ง ลูกชิ้นปลา มาทานเล่นอีกก็ยังได้ ไม่ต้องสงสัยเลยว่าทำไมถึงคนแน่นร้านทุกวัน เพราะอร่อย หลากหลาย ราคาไม่แพง แบบนี้นี่เอง 
                        นอกจากนี้"ฉ่อย Noodle'express"ยังมีอีกสาขาหนึ่ง ในแบบexpress อยู่ที่ปากทางเข้าวัดระฆัง ใกล้กับศิริราข บรรยากาศร้านปรับปรุงใหม่ในสไตล์โมเดิล ดูทันสมัย รสชาติคงคุณภาพแบบเดียวกัน หากใครสะดวกที่ไหน ก็อร่อยที่นั่นได้เหมือนกันอีกด้วย 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-sm-4"><img src="/image/som.jpg" class="img-thumbnail" data-toggle="modal" data-target="#myModal3">
        <!-- Modal -->
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">ตำมั่ว</h4>
                    </div>
                    <div class="modal-body">
                       หนึ่งในสาขา “ตำมั่ว” ซึ่งเป็นสาขาน้องใหม่ที่ตั้งอยู่พระราม9 ซอย51 เข้าซอยเพียง40เมตร ร้านตั้งอยู่ด้านขวามือ สังเกตุง่ายมีป้ายร้าน “ตำมั่ว” อย่างชัดเจน ความพิเศษของที่ “ตำมั่ว” สาขานี้อยู่ที่บรรยากาศร้านอันอบอุ่น ดัดแปลงจากบ้านเก่าที่ทรุดโทรมมาเป็นร้านที่มีสไตล์ ด้านในตกแต่งในสไตล์ Farmer House ดูเรียบง่ายและอบอุ่น หน้าประตูตกแต่งอย่างโดนเด่นด้วยเคาน์เตอร์ส้มตำ นำเสนอแบบชัดๆ ไม่ต้องเดาให้เสียเวลาเลยว่า ร้านนี้ขายอะไร มีโซนที่นั่งด้านในที่เย็นสบายและด้านนอกให้เลือกนั่งได้อย่างตามใจชอบ อาหารที่ “ตำมั่ว” เน้นคือความอร่อยในแบบอีสานพื้นบ้าน แตกต่างอย่าชัดเจนจากร้านส้มตำอื่น ส่งตรงวัตถุดิบจากภาคอีสานสดๆทุกวัน คุณภาพและรสชาติมาตรฐานที่“ตำมั่ว”ควบคุมได้อย่างดี ไม่แปลกเมื่อไปเปิดที่ไหน คนก็จะแน่นร้าน เมนูของ“ตำมั่ว”มีทั้งอาหารทั้งรสจัดและรสไม่จัดสามารถทานได้ทุกวัย จะอิ่มอร่อยพร้อมเพื่อนร่วมงานในยามเที่ยง ทานข้าวเย็นแบบครอบครัว หรือสังสรรค์กับเพื่อนซี้ยามเย็น ก็อร่อยได้อย่างสบายกระเป๋าที่“ตำมั่ว”
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <h2 class="page-header">Best Restaurant</h2>
</div>
<div style ="background-color:#FFFFFF">
    <div class="row margin-middle">

        <div class="col-lg-4 col-sm-6 " style="padding-left: 100;">
            <img class="img-circle " src="Sa-Mun-Pai-4_0.png" alt="">
             <center><h3 style="margin-left: -60;">บ้านเรือนไทย
            </h3 ></center>
            <p>สุขุมวิท 39 (ซอบพบมิตร) ถนนสุขุมวิท คลองตันเหนือ , วัฒนา , กรุงเทพมหานคร 10110</p>
        </div>
        <div class="col-lg-4 col-sm-6 " style="padding-left: 100;">
            <img class="img-circle " src="Sinka (2).png" alt="">
             <center><h3 style="margin-left: -60;">Chocolate Ville
            </h3 ></center>

            <p>ซอยนวมินทร์ 74 แยก 3-8 ถนนเกษตร-นวมินทร์ รามอินทรา , คันนายาว , กรุงเทพมหานคร 10230
                </p>
        </div>
        <div class="col-lg-4 col-sm-6" style="padding-left: 100;">
            <img class="img-circle " src="Tohkai.png" alt="">
            <center><h3 style="margin-left: -60;">Sushi Masa
            </h3 ></center>
            <p>34/68 ซ. ม.ธุรกิจบัณฑิตย์ ถ.ประชาชื่น ทุ่งสองห้อง , หลักสี่ , กรุงเทพมหานคร 10210</p>
        </div>
    </div>
    <div class="row margin-middle">
        <div class="col-lg-12">
        </div>
        <div class="col-lg-4 col-sm-6" style="padding-left: 100;">
            <img class="img-circle " src="http://placehold.it/200x200" alt="">
             <center><h3 style="margin-left: -60;">Retro Steak 
            </h3 ></center>
            <p>What does this team member to? !</p>
        </div>
        <div class="col-lg-4 col-sm-6" style="padding-left: 100;">
            <img class="img-circle " src="http://placehold.it/200x200" alt="">
            <h3>John Smith2
                <small>Job Title</small>
            </h3>
            <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6" style="padding-left: 100;">
            <img class="img-circle " src="http://placehold.it/200x200" alt="">
            <h3>John Smith3
                <small>Job Title</small>
            </h3>
            <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
    </div>
</div>
</body>
</html>