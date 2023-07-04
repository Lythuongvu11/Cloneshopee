<?php
	session_start() ;
	//print_r($_SESSION);
	include("lib_db.php");
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
	if ($id<  1) return ;
	//tao sql
	$sql = "select * from btl 
	where id={$id}";
	//echo $sql;exit();
	//thuc thi cau lenh sql
	$result = select_one($sql);
	//print_r($result);exit();
	if (!$result) return ;
	//print_r($result);exit();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopee</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="delete.css">
    <link rel="stylesheet" href="php.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.1.1-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.1.1-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="shopee">
        <!-- Header -->
        <header class="header">
            <div class="grid">
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item-boder">
                            <a href="#" class="header__navbar-item-link">Kênh Người Bán</a>
                        </li>
                        <li class="header__navbar-item header__navbar-item-boder">
                            <a href="#" class="header__navbar-item-link">Trở thành Người bán Shopee</a>
                        </li>
                        <li class="header__navbar-item header__navbar-item-boder header__navbar-has--qr ">
                        Tải ứng dụng   
                            <div class="header__qr">
                                <img src="images/qr_code.png" alt="" class="header__qr-img">
                                <div class="header__qr-apps">
                                    <img src="images/appstore.png" alt="App Store" class="header__qr-doawload">
                                    <img src="images/googleplay.png" alt="Google Play" class="header__qr-doawload">
                                    <img src="images/appgallery.png" alt="App Gallery" class="header__qr-doawload header__qr-doawload-size">
                                </div>
        
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-no--pointer">Kết nối
                                <a href="#" class="header__navbar-icon-link">
                                    <i class="header__navbar-icon fab fa-facebook"></i>
                                </a>
                                <a href="#" class="header__navbar-icon-link">
                                    <i class="header__navbar-icon header__navbar-icon-instagram fab fa-instagram"></i>
                                </a>
                            </span>
                        </li>
                    </ul>    
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item-notify">
                            <a href="#" class="header__navbar-item-link">
                                <i class="header__navbar-icon far fa-bell"></i>
                            </a> Thông Báo
                            <div class="header__notify">
                                <img src="images/header-notify.png" alt="" class="header-notify-img">
                                <span>Đăng nhập để xem Thông báo</span>
                                <footer class="header__notify-footer">
                                    <a href="#" class="header__notify-footer-title">Đăng ký</a>
                                    <a href="#" class="header__notify-footer-title">Đăng nhập</a>
                                </footer>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <a href="#" class="header__navbar-item-link">
                                <i class="header__navbar-icon far fa-question-circle"></i>
                            </a>Hỗ Trợ
                        </li>
                        <li class="header__navbar-item">
                            <a href="#" class="header__navbar-item-link">Đăng Ký</a>
                        </li>
                        <div class="header__navbar-item-boder-one"></div>
                        <li class="header__navbar-item">
                            <a href="#" class="header__navbar-item-link">Đăng Nhập</a>
                        </li>
                    </ul>    
                </nav>
                
                
                <!-- Header with search -->
                <div class="header-with--search">
                    <div class="header__logo">
                        <svg fill= "#fff" viewBox="0 0 192 65" class="header__logo-img"><g fill-rule="evenodd"><path d="M35.6717403 44.953764c-.3333497 2.7510509-2.0003116 4.9543414-4.5823845 6.0575984-1.4379707.6145919-3.36871.9463856-4.896954.8421628-2.3840266-.0911143-4.6237865-.6708937-6.6883352-1.7307424-.7375522-.3788551-1.8370513-1.1352759-2.6813095-1.8437757-.213839-.1790053-.239235-.2937577-.0977428-.4944671.0764015-.1151823.2172535-.3229831.5286218-.7791994.45158-.6616533.5079208-.7446018.5587128-.8221779.14448-.2217688.3792333-.2411091.6107855-.0588804.0243289.0189105.0243289.0189105.0426824.0333083.0379873.0294402.0379873.0294402.1276204.0990653.0907002.0706996.14448.1123887.166248.1287205 2.2265285 1.7438508 4.8196989 2.7495466 7.4376251 2.8501162 3.6423042-.0496401 6.2615109-1.6873341 6.7308041-4.2020035.5160305-2.7675977-1.6565047-5.1582742-5.9070334-6.4908212-1.329344-.4166762-4.6895175-1.7616869-5.3090528-2.1250697-2.9094471-1.7071043-4.2697358-3.9430584-4.0763845-6.7048539.296216-3.8283059 3.8501677-6.6835796 8.340785-6.702705 2.0082079-.004083 4.0121475.4132378 5.937338 1.2244562.6816382.2873109 1.8987274.9496089 2.3189359 1.2633517.2420093.1777159.2898136.384872.1510957.60836-.0774686.12958-.2055158.3350171-.4754821.7632974l-.0029878.0047276c-.3553311.5640922-.3664286.5817134-.447952.7136572-.140852.2144625-.3064598.2344475-.5604202.0732783-2.0600669-1.3839063-4.3437898-2.0801572-6.8554368-2.130442-3.126914.061889-5.4706057 1.9228561-5.6246892 4.4579402-.0409751 2.2896772 1.676352 3.9613243 5.3858811 5.2358503 7.529819 2.4196871 10.4113092 5.25648 9.869029 9.7292478M26.3725216 5.42669372c4.9022893 0 8.8982174 4.65220288 9.0851664 10.47578358H17.2875686c.186949-5.8235807 4.1828771-10.47578358 9.084953-10.47578358m25.370857 11.57065968c0-.6047069-.4870064-1.0948761-1.0875481-1.0948761h-11.77736c-.28896-7.68927544-5.7774923-13.82058185-12.5059489-13.82058185-6.7282432 0-12.2167755 6.13130641-12.5057355 13.82058185l-11.79421958.0002149c-.59136492.0107446-1.06748731.4968309-1.06748731 1.0946612 0 .0285807.00106706.0569465.00320118.0848825H.99995732l1.6812605 37.0613963c.00021341.1031483.00405483.2071562.01173767.3118087.00170729.0236381.003628.0470614.00554871.0704847l.00362801.0782207.00405483.004083c.25545428 2.5789222 2.12707837 4.6560709 4.67201764 4.7519129l.00576212.0055872h37.4122078c.0177132.0002149.0354264.0004298.0531396.0004298.0177132 0 .0354264-.0002149.0531396-.0004298h.0796027l.0017073-.0015043c2.589329-.0706995 4.6867431-2.1768587 4.9082648-4.787585l.0012805-.0012893.0017073-.0350275c.0021341-.0275062.0040548-.0547975.0057621-.0823037.0040548-.065757.0068292-.1312992.0078963-.1964115l1.8344904-37.207738h-.0012805c.001067-.0186956.0014939-.0376062.0014939-.0565167M176.465457 41.1518926c.720839-2.3512494 2.900423-3.9186779 5.443734-3.9186779 2.427686 0 4.739107 1.6486899 5.537598 3.9141989l.054826.1556978h-11.082664l.046506-.1512188zm13.50267 3.4063683c.014933.0006399.014933.0006399.036906.0008531.021973-.0002132.021973-.0002132.044372-.0008531.53055-.0243144.950595-.4766911.950595-1.0271786 0-.0266606-.000853-.0496953-.00256-.0865936.000427-.0068251.000427-.020262.000427-.0635588 0-5.1926268-4.070748-9.4007319-9.09145-9.4007319-5.020488 0-9.091235 4.2081051-9.091235 9.4007319 0 .3871116.022399.7731567.067838 1.1568557l.00256.0204753.01408.1013102c.250022 1.8683731 1.047233 3.5831812 2.306302 4.9708108-.00064-.0006399.00064.0006399.007253.0078915 1.396026 1.536289 3.291455 2.5833031 5.393601 2.9748936l.02752.0053321v-.0027727l.13653.0228215c.070186.0119439.144211.0236746.243409.039031 2.766879.332724 5.221231-.0661182 7.299484-1.1127057.511777-.2578611.971928-.5423827 1.37064-.8429007.128211-.0968312.243622-.1904632.34346-.2781231.051412-.0452164.092372-.083181.114131-.1051493.468898-.4830897.498124-.6543572.215249-1.0954297-.31146-.4956734-.586228-.9179769-.821744-1.2675504-.082345-.1224254-.154023-.2267215-.214396-.3133151-.033279-.0475624-.033279-.0475624-.054399-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.00256-.0038391c-.256208-.3188605-.431565-.3480805-.715933-.0970445-.030292.0268739-.131624.1051493-.14997.1245582-1.999321 1.775381-4.729508 2.3465571-7.455854 1.7760208-.507724-.1362888-.982595-.3094759-1.419919-.5184948-1.708127-.8565509-2.918343-2.3826022-3.267563-4.1490253l-.02752-.1394881h13.754612zM154.831964 41.1518926c.720831-2.3512494 2.900389-3.9186779 5.44367-3.9186779 2.427657 0 4.739052 1.6486899 5.537747 3.9141989l.054612.1556978h-11.082534l.046505-.1512188zm13.502512 3.4063683c.015146.0006399.015146.0006399.037118.0008531.02176-.0002132.02176-.0002132.044159-.0008531.530543-.0243144.950584-.4766911.950584-1.0271786 0-.0266606-.000854-.0496953-.00256-.0865936.000426-.0068251.000426-.020262.000426-.0635588 0-5.1926268-4.070699-9.4007319-9.091342-9.4007319-5.020217 0-9.091343 4.2081051-9.091343 9.4007319 0 .3871116.022826.7731567.068051 1.1568557l.00256.0204753.01408.1013102c.250019 1.8683731 1.04722 3.5831812 2.306274 4.9708108-.00064-.0006399.00064.0006399.007254.0078915 1.396009 1.536289 3.291417 2.5833031 5.393538 2.9748936l.027519.0053321v-.0027727l.136529.0228215c.070184.0119439.144209.0236746.243619.039031 2.766847.332724 5.22117-.0661182 7.299185-1.1127057.511771-.2578611.971917-.5423827 1.370624-.8429007.128209-.0968312.243619-.1904632.343456-.2781231.051412-.0452164.09237-.083181.11413-.1051493.468892-.4830897.498118-.6543572.215246-1.0954297-.311457-.4956734-.586221-.9179769-.821734-1.2675504-.082344-.1224254-.154022-.2267215-.21418-.3133151-.033492-.0475624-.033492-.0475624-.054612-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.002346-.0038391c-.256419-.3188605-.431774-.3480805-.716138-.0970445-.030292.0268739-.131623.1051493-.149969.1245582-1.999084 1.775381-4.729452 2.3465571-7.455767 1.7760208-.507717-.1362888-.982582-.3094759-1.419902-.5184948-1.708107-.8565509-2.918095-2.3826022-3.267311-4.1490253l-.027733-.1394881h13.754451zM138.32144123 49.7357905c-3.38129629 0-6.14681004-2.6808521-6.23169343-6.04042014v-.31621743c.08401943-3.35418649 2.85039714-6.03546919 6.23169343-6.03546919 3.44242097 0 6.23320537 2.7740599 6.23320537 6.1960534 0 3.42199346-2.7907844 6.19605336-6.23320537 6.19605336m.00172791-15.67913203c-2.21776751 0-4.33682838.7553485-6.03989586 2.140764l-.19352548.1573553V34.6208558c0-.4623792-.0993546-.56419733-.56740117-.56419733h-2.17651376c-.47409424 0-.56761716.09428403-.56761716.56419733v27.6400724c0 .4539841.10583425.5641973.56761716.5641973h2.17651376c.46351081 0 .56740117-.1078454.56740117-.5641973V50.734168l.19352548.1573553c1.70328347 1.3856307 3.82234434 2.1409792 6.03989586 2.1409792 5.27140956 0 9.54473746-4.2479474 9.54473746-9.48802964 0-5.239867-4.2733279-9.48781439-9.54473746-9.48781439M115.907646 49.5240292c-3.449458 0-6.245805-2.7496948-6.245805-6.1425854 0-3.3928907 2.79656-6.1427988 6.245805-6.1427988 3.448821 0 6.24538 2.7499081 6.24538 6.1427988 0 3.3926772-2.796346 6.1425854-6.24538 6.1425854m.001914-15.5438312c-5.28187 0-9.563025 4.2112903-9.563025 9.4059406 0 5.1944369 4.281155 9.4059406 9.563025 9.4059406 5.281657 0 9.562387-4.2115037 9.562387-9.4059406 0-5.1946503-4.280517-9.4059406-9.562387-9.4059406M94.5919049 34.1890939c-1.9281307 0-3.7938902.6198995-5.3417715 1.7656047l-.188189.1393105V23.2574169c0-.4254677-.1395825-.5643476-.5649971-.5643476h-2.2782698c-.4600414 0-.5652122.1100273-.5652122.5643476v29.2834155c0 .443339.1135587.5647782.5652122.5647782h2.2782698c.4226187 0 .5649971-.1457701.5649971-.5647782v-9.5648406c.023658-3.011002 2.4931278-5.4412923 5.5299605-5.4412923 3.0445753 0 5.516841 2.4421328 5.5297454 5.4630394v9.5430935c0 .4844647.0806524.5645628.5652122.5645628h2.2726775c.481764 0 .565212-.0824666.565212-.5645628v-9.5710848c-.018066-4.8280677-4.0440197-8.7806537-8.9328471-8.7806537M62.8459442 47.7938061l-.0053397.0081519c-.3248668.4921188-.4609221.6991347-.5369593.8179812-.2560916.3812097-.224267.551113.1668119.8816949.91266.7358184 2.0858968 1.508535 2.8774525 1.8955369 2.2023021 1.076912 4.5810275 1.646045 7.1017886 1.6975309 1.6283921.0821628 3.6734936-.3050536 5.1963734-.9842376 2.7569891-1.2298679 4.5131066-3.6269626 4.8208863-6.5794607.4985136-4.7841067-2.6143125-7.7747902-10.6321784-10.1849709l-.0021359-.0006435c-3.7356476-1.2047686-5.4904836-2.8064071-5.4911243-5.0426086.1099976-2.4715346 2.4015793-4.3179454 5.4932602-4.4331449 2.4904317.0062212 4.6923065.6675996 6.8557356 2.0598624.4562232.2767364.666607.2256796.9733188-.172263.035242-.0587797.1332787-.2012238.543367-.790093l.0012815-.0019308c.3829626-.5500403.5089793-.7336731.5403767-.7879478.258441-.4863266.2214903-.6738208-.244985-1.0046173-.459427-.3290803-1.7535544-1.0024722-2.4936356-1.2978721-2.0583439-.8211991-4.1863175-1.2199998-6.3042524-1.1788111-4.8198184.1046878-8.578747 3.2393171-8.8265087 7.3515337-.1572005 2.9703036 1.350301 5.3588174 4.5000778 7.124567.8829712.4661613 4.1115618 1.6865902 5.6184225 2.1278667 4.2847814 1.2547527 6.5186944 3.5630343 6.0571315 6.2864205-.4192725 2.4743234-3.0117991 4.1199394-6.6498372 4.2325647-2.6382344-.0549182-5.2963324-1.0217793-7.6043603-2.7562084-.0115337-.0083664-.0700567-.0519149-.1779185-.1323615-.1516472-.1130543-.1516472-.1130543-.1742875-.1300017-.4705335-.3247898-.7473431-.2977598-1.0346184.1302162-.0346012.0529875-.3919333.5963776-.5681431.8632459"></path></g></svg>
                    </div>
                    <div class="header__search">
                        <div class="header__search-top">
                            <input type="text" class="header__search-input header__search-input-title" placeholder="Siêu sale công nghệ"> 
                            <button class="header__search-btn">
                                <i class="header__search-btn--icon fas fa-search" aria-hidden="true"></i>
                            </button>
                        </div>    
                        <div class="shopee-header__search-keywork">
                            <a href="#" class="keyword-recommend">Áo Khoác</a>
                            <a href="#" class="keyword-recommend">Váy</a>
                            <a href="#" class="keyword-recommend">Quần</a>
                            <a href="#" class="keyword-recommend">Tai Nghe</a>
                            <a href="#" class="keyword-recommend">Bông Tẩy Trang</a>
                            <a href="#" class="keyword-recommend">Túi Xách Nữ</a>
                            <a href="#" class="keyword-recommend">Chân Váy</a>
                        </div>   
                    
                       
                    </div>   
                    <div class="header__cart">
                        <a href="#" class="header__cart-link">
                            <i class="header__cart-icon fas fa-shopping-cart" aria-hidden="true"></i>
                            <div class="header__cart-list">
                                <img src="images/header-cart.png" alt="" class="header__cart-img">
                                <span>Chưa Có Sản Phẩm</span>
                            </div>
                        </a>
                    </div>
                            
                </div>
            </div>
        </header>
        <div class="container" >
            <!-- Banner and future -->
            
                <!-- product-today -->
                <div class="product-today">
                    <div>
                        <div class="container">
                            
                            <div class="product-today-main product-php">
                                <h1>Xóa Sản Phẩm</h1>
                                    <br/>
                                    <form class="form delete-php" action="delete_exec.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $result["id"]?>"/>
                                        <label>Category</label> <?php echo $result["cid"]?>
                                        <div class="clear-both"></div>
                                        <label>Image</label><?php echo $result["img"]?>
                                        <div class="clear-both"></div>
                                        <label>Name</label><?php echo $result["name"]?>
                                        <div class="clear-both"></div>
                                        <label>Discount</label><?php echo $result["discount"]?>
                                        <div class="clear-both"></div>
                                        <label>Price</label><?php echo $result["price"]?>
                                        <div class="clear-both"></div>
                                        <label>Sold</label><?php echo $result["sold"]?>
                                        <div class="clear-both"></div>
                                        <label>Favourite</label><?php echo $result["favourite"]?>
                                        <div class="clear-both"></div>
                                        <label>Sale</label><?php echo $result["sale"]?>
                                        <div class="clear-both"></div>
                                        <button >OK</button>
                                    </form>
                                    <br/>
                                    <br/>
                                <div class="travel-content-right">
                                    <ul>
                                        <li>
                                            <a href="add.php">Add</a>
                                        </li>
                                        <li>
                                            <a href="search.php">Search</a>
                                        </li>
                                    </ul>
                                </div>

                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        
        <!-- footer -->
        <footer class="footer">
            <!-- footer top -->
            <div class="footer-top">
                <section class="footer-top-section">
                    <h1 class="footer-top-section-heading">
                        <span class="footer-top-section-heading-title">SHOPEE - GÌ CŨNG CÓ, MUA HẾT Ở SHOPEE</span>
                    </h1>
                    <p class="footer-top-section-heading-content">
                        <span class="footer-top-section-heading-content-black">Shopee - ứng dụng mua sắm trực tuyến thú vị, tin cậy, an toàn và miễn phí! Shopee là nền tảng giao dịch trực tuyến hàng đầu ở Đông Nam Á, Việt Nam, </span>
                        <a href="#"><span class="footer-top-section-heading-content-blue">Singapore</span></a>
                        <span class="footer-top-section-heading-content-comma">,</span>
                        <a href="#"><span class="footer-top-section-heading-content-blue">Malaysia</span></a>
                        <span class="footer-top-section-heading-content-comma">,</span>
                        <a href="#"><span class="footer-top-section-heading-content-blue">Indonesia</span></a>
                        <span class="footer-top-section-heading-content-comma">,</span>
                        <a href="#"><span class="footer-top-section-heading-content-blue">Thái Lan</span></a>
                        <span class="footer-top-section-heading-content-comma">,</span>
                        <a href="#"><span class="footer-top-section-heading-content-blue">Philipin</span></a>
                        <span class="footer-top-section-heading-content-comma">,</span>
                        <a href="#"><span class="footer-top-section-heading-content-blue">Đài Loan</span></a>
                        <span class="footer-top-section-heading-content-black"> và </span>
                        <a href="#"><span class="footer-top-section-heading-content-blue">Brazil</span></a>
                        <span class="footer-top-section-heading-content-black">. Với sự đảm bảo của Shopee, bạn sẽ mua hàng trực tuyến an tâm và nhanh chóng hơn bao giờ hết!</span>
                    </p>
                    <br>
                    <h2 class="footer-top-section-heading">
                        <span class="footer-top-section-heading-title">MUA SẮM VÀ BÁN HÀNG ONLINE ĐƠN GIẢN, NHANH CHÓNG VÀ AN TOÀN</span>
                    </h2>
                    <p class="footer-top-section-heading-content">
                        <span class="footer-top-section-heading-content-black">
                            Nếu bạn đang tìm kiếm một trang web để mua và bán hàng trực tuyến thì Shopee.vn là một sự lựa chọn tuyệt vời dành cho bạn. Bản chất của Shopee là một social E-commerce platform - nền tảng trang web <b>thương mại điện tử</b>  tích hợp mạng xã hội. Điều này cho phép người mua và người bán hàng dễ dàng tương tác, trao đổi thông tin về sản phẩm và chương trình khuyến mãi của shop. Nhờ nền tảng đó, việc mua bán trên Shopee trở nên nhanh chóng và đơn giản hơn. Bạn có thể trò chuyện trực tiếp với nhà bán hàng để hỏi trực tiếp về mặt hàng cần mua. Còn nếu bạn muốn tìm mua những dòng sản phẩm chính hãng, uy tín, 
                            <a href="#"><span class="footer-top-section-heading-content-blue">Shopee Mall</span></a> 
                            chính là sự lựa chọn lí tưởng dành cho bạn. Để bạn có thể dễ dàng khi tìm hiểu và sử dụng sản phẩm, 
                            <a href="#"><span class="footer-top-section-heading-content-blue">Shopee Blog</span></a> 
                            - trang blog thông tin chính thức của Shopee - sẽ giúp bạn có thể tìm được cho mình các kiến thức về xu hướng thời trang, review công nghệ, mẹo làm đẹp, tin tức tiêu dùng và deal giá tốt bất ngờ. 
                        </span>
                    </p>
                    <p class="footer-top-section-heading-content">
                        <span class="footer-top-section-heading-content-black">
                            Đến với Shopee, cơ hội để trở thành một nhà bán hàng dễ dàng hơn bao giờ hết. Chỉ với vài thao tác trên ứng dụng, bạn đã có thể đăng bán ngay những sản phẩm của mình. Không những thế, các nhà bán hàng có thể tự
                        <a href="#"><span class="footer-top-section-heading-content-blue">tạo chương trình khuyến mãi trên Shopee</span></a>
                        để thu hút người mua với những sản phẩm có mức giá hấp dẫn. Khi đăng nhập tại Shopee Kênh người bán, bạn có thể dễ dàng phân loại sản phẩm, theo dõi đơn hàng, chăm sóc khách hàng và cập nhập ngay các hoạt động của shop.
                        </span>
                    </p>
                    <br>
                    <h2 class="footer-top-section-heading">
                        <span class="footer-top-section-heading-title">TẢI ỨNG DỤNG SHOPEE NGAY ĐỂ MUA BÁN ONLINE MỌI LÚC, MỌI NƠI</span>
                    </h2>
                    <p class="footer-top-section-heading-content">
                        <span class="footer-top-section-heading-content-black">
                            Ưu điểm của ứng dụng Shopee là cho phép bạn mua và bán hàng mọi lúc, mọi nơi. 
                            Bạn có thể tải ứng dụng Shopee cũng như đăng sản phẩm bán hàng một cách nhanh chóng và tiện lợi. 
                            Ngoài ra, ứng dụng Shopee còn có những ưu điểm sau: - Giao diện thân thiện, đơn giản, dễ sử dụng. Bạn sẽ dễ dàng thấy được ngay những sản phẩm nổi bật cũng như dễ dàng tìm đến các ô tìm kiếm, giỏ hàng hoặc tính năng chat liền tay.
                            - Ứng dụng tích hợp công nghệ quản lý đơn mua và bán hàng tiện lợi trên cùng một tài khoản. Bạn sẽ vừa là người mua hàng, vừa là người bán hàng rất linh hoạt, dễ dàng. - Cập nhập thông tin khuyến mãi, 
                            <a href="#"><span class="footer-top-section-heading-content-blue">Shopee flash sale</span></a> nhanh chóng và liên tục. Tại Shopee, bạn có thể lấy các
                            <a href="#"><span class="footer-top-section-heading-content-blue">mã giảm giá Shopee</span></a> và <a href="#"><span class="footer-top-section-heading-content-blue">mã miễn phí vận chuyển toàn quốc</span></a>. Bên cạnh đó, Shopee cũng sẽ có những chiến dịch khuyến mãi lớn hằng năm như 
                            <a href="#"><span class="footer-top-section-heading-content-blue">Shopee 10.10 sale</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">Shopee 11.11 sale</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">Shopee 12.12 sale</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">Shopee Tết Sale</span></a>
                            . Đây là thời điểm để người mua hàng có thể nhanh tay chọn ngay cho mình những mặt hàng ưa thích với mức giá giảm kỉ lục.
                        </span>
                    </p>
                    <br>
                    <h2 class="footer-top-section-heading">
                        <span class="footer-top-section-heading-title">MUA HÀNG HIỆU CAO CẤP GIÁ TỐT TẠI SHOPEE</span>
                    </h2>
                    <p class="footer-top-section-heading-content">
                        <span class="footer-top-section-heading-content-black">
                            Bên cạnh <a href="#"><span class="footer-top-section-heading-content-blue">Shopee Premium</span></a>, Shopee còn có rất nhiều khuyến mãi khủng cho
                            <a href="#"><span class="footer-top-section-heading-content-blue">hàng hiệu giảm đến 50%</span></a>. Cộng với mã giao hàng miễn phí, Shopee cũng có các mã giảm giá được phân phối mỗi tháng từ rất nhiều gian hàng chính hãng tham gia chương trình khuyến mãi này.
                            Bên cạnh đó, Shopee còn tập hợp rất nhiều thương hiệu đình đám được các nhà bán lẻ uy tín phân phối bán trên Shopee, đem đến cho bạn sự lựa chọn đa dạng, từ các hãng mỹ phẩm nổi tiếng hàng đầu như 
                            <a href="#"><span class="footer-top-section-heading-content-blue">Kiehl's</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">Fresh</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">The Ordinary</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">Foreo</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">Transino</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">SK-II</span></a>
                            ... Đến những thương hiệu công nghệ nổi tiếng như 
                            <a href="#"><span class="footer-top-section-heading-content-blue">camera hành trình Gopro</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">loa Marshall</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">bảng vẽ điện tử Huion</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">máy quay DJI Osmo Pocket</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">loa Harman Kardon</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">Razer</span></a>...
                        </span>

                    </p>
                    <br>
                    <h2 class="footer-top-section-heading">
                        <span class="footer-top-section-heading-title">MUA HÀNG CHÍNH HÃNG TỪ CÁC THƯƠNG HIỆU LỚN VỚI SHOPEE</span>
                    </h2>
                    <p class="footer-top-section-heading-content">
                        <span class="footer-top-section-heading-content-black">
                            Mua hàng trên Shopee luôn là một trải nghiệm ấn tượng. Dù bạn đang có nhu cầu mua bất kỳ mặt hàng 
                            <a href="#"><span class="footer-top-section-heading-content-blue">thời trang nam</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">thời trang nữ</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">đồng hồ</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">điện thoại</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">nước rửa tay khô</span></a> hay 
                            <a href="#"><span class="footer-top-section-heading-content-blue">khẩu trang N95</span></a>
                            thì Shopee cũng sẽ đảm bảo cung cấp cho bạn những sản phẩm ưng ý. Bên cạnh đó, Shopee cũng có sự tham gia của các thương hiệu hàng đầu thế giới ở đa dạng nhiều lĩnh vực khác nhau.
                            Trong đó có thể kể đến Samsung, OPPO, Xiaomi, Innisfree, Unilever, P&G, Biti’s,...Các thương hiệu này hiện cũng đã có cửa hàng chính thức trên Shopee Mall với hàng trăm mặt hàng chính hãng, được cập nhập liên tục. 
                            Là một kênh bán hàng uy tín, Shopee luôn cam kết mang lại cho khách hàng những trải nghiệm mua sắm online giá rẻ, an toàn và tin cậy. Mọi thông tin về người bán và người mua đều được bảo mật tuyệt đối. 
                            Các hoạt động giao dịch thanh toán tại Shopee luôn được đảm bảo diễn ra nhanh chóng, an toàn. Một vấn đề nữa khiến cho các khách hàng luôn quan tâm đó chính là mua hàng trên Shopee có đảm bảo không. 
                            Shopee luôn cam kết mọi sản phẩm trên Shopee, đặc biệt là Shopee Mall đều là những sản phẩm chính hãng, đầy đủ tem nhãn, bảo hành từ nhà bán hàng. 
                            Ngoài ra, Shopee bảo vệ người mua và người bán bằng cách giữ số tiền giao dịch đến khi người mua xác nhận đồng ý với đơn hàng và không có yêu cầu khiếu nại, trả hàng hay hoàn tiền nào. 
                            Thanh toán sau đó sẽ được chuyển đến cho người bán. 
                        </span>
                    </p>
                    <p class="footer-top-section-heading-content">
                        <span class="footer-top-section-heading-content-black">
                            Đến với Shopee ngay hôm nay để mua hàng online giá rẻ và trải nghiệm dịch vụ chăm sóc khách hàng tuyệt vời tại đây. Đặc biệt khi mua sắm trên Shopee Mall, bạn sẽ được miễn phí vận chuyển, giao hàng tận nơi và 7 ngày miễn phí trả hàng. 
                            Ngoài ra, khách hàng có thể sử dụng <a href="#"><span class="footer-top-section-heading-content-blue">Shopee Xu</span></a>
                            để đổi lấy mã giảm giá có giá trị cao và voucher dịch vụ hấp dẫn. Tiếp đến là 
                            <a href="#"><span class="footer-top-section-heading-content-blue">Shopee Mum's Club</span></a>
                            <span class="footer-top-section-heading-content-comma">,</span>
                            <a href="#"><span class="footer-top-section-heading-content-blue">Shopee Beauty Club</span></a> và
                            <a href="#"><span class="footer-top-section-heading-content-blue">Shopee Book Club</span></a>
                            với các ưu đãi độc quyền từ các thương hiệu lớn có những khách hàng đã đăng ký làm thành viên. 
                            Hãy truy cập ngay Shopee.vn hoặc tải ngay ứng dụng Shopee về điện thoại ngay hôm nay!
                        </span>
                    </p>
                </section>
            </div>
            <!-- footer mid -->
            <div class="footer-mid">
                <div class="footer-mid-category">Danh mục</div>
                <div class="footer-mid-content">
                    <div class="footer-mid-content-link">
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">THỜI TRANG NAM</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Áo khoác</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Áo Vest va Blazer</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Áo Hoodie, Áo Len & Áo Nỉ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Quần Jeans</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Quần Dài/Quần Âu</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Quần Short</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Áo</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Áo Ba Lỗ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ lót</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ ngủ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ Bộ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Vớ/Tất</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Trang Phục Truyền Thống</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ Hóa Trang</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Trang Phục Ngành Nghề</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Trang Sức Nam</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Kính Mắt Nam</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Thắt Lưng Nam</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Cà vạt & Nơ cổ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ Kiện Nam</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">NHÀ CỬA & ĐỜI SỐNG</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Chăn, Ga, Gối & Nệm</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ nội thất</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Dụng cụ cầm tay</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Trang trí nhà cửa</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Dụng cụ & Thiết bị tiện ích</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ dùng nhà bếp & Phòng ăn</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đèn</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Ngoài trời & Sân vườn</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Tủ đựng & Hộp lưu trữ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ dùng phòng tắm</a>
                                </div>
                                   
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">ĐỒNG HỒ</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồng Hồ Nam</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồng Hồ Nữ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Bộ Đông Hồ & Đồng Hồ Cặp</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồng Hồ Trẻ Em</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ Kiện Đồng Hồ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">PHỤ KIỆN & TRANG SỨC NỮ</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Nhẫn</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Bông tai</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khăn choàng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Găng tay</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ kiện tóc</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Vòng tay & Lắc tay</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Lắc chân</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Mũ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Dây chuyền</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Kính mắt</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Kim loại quý</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Thắt lưng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Cà vạt & Nơ cổ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ kiện thêm</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Bộ phụ kiện</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Vớ/Tất</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Ô/Dù</a>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">BALO & TÚI VÍ NAM</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Ba Lô Nam</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Ba Lô Laptop Nam</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Túi & Cặp ĐỰng Laptop</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Túi Tote Nam</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Cặp Sách Công Sở Nam</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Ví Cầm Tay Nam</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Túi Đeo Hông & Túi Đeo Ngực Nam</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Túi Đeo Chéo Nam</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Bóp/Ví Nam</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">DEAL GẦN BẠN</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Scan & Pay Voucher</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Deals</a>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="footer-mid-content-link">
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">THỜI TRANG NỮ</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Quần</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Quần đùi</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Chân váy</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Quần Jeans</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đầm/Váy</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Váy cưới</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ liền thân</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Áo khoác, Áo choàng & Vest</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Áo len & Cardigan</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Hoodie và Áo nỉ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Bộ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ lót</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ ngủ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Áo</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ tập</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ Bầu</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ truyền thống</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ hóa trang</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Vải</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Vớ/Tất</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">MÁY TÍNH & LAPTOP</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Máy Tính Bàn</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Màn Hình</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Linh Kiện Máy tính</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Thiết Bị Lưu Trữ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Thiết Bị Mạng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Máy In, Máy Scan & máy Chiếu</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ Kiện Máy Tính</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Laptop</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Gaming</a>
                                </div>
                                   
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">GIÀY DÉP NỮ</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Bốt</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Giày Thể Thao/ Sneaker</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Giày Đế Bằng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Giày Cao Gót</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Giày Đế Xuồng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Xăng-đan và Dép</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ Kiện Giày</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Giày Khác</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">THỂ THAO & DU LỊCH</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Vali</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Túi Du lịch</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ kiện du lịch</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Dụng cụ thể thao & Dã ngoại</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Giày Thể Thao</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Thời Trang Thể Thao & Dã Ngoại</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ Kiện Thể thao & Dã Ngoại</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                               
                                
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">THỜI TRANG TRẺ EM</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Trang phục bé trai</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Trang phục bé gái</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Giày dép bé trai</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Giày dép bé gái</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Quần áo em bé</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Giày tập đi & Tất sơ sinh</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ kiện trẻ em</a>
                                </div>
                                
                                
                                
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">VOUCHER & DỊCH VỤ</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Nhà hàng & Ăn uống</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Sự kiện & Giải trí</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Nạp tiền tài khoản</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Sức khỏe & Làm đẹp</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Gọi xe</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khóa học</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Du lịch & Khách sạn</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Mua sắm</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Mà quà tặng Shopee</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Thanh toán hóa đơn</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Dịch vụ khác</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Tiền điện tử</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Thẻ Game</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Streaming</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="footer-mid-content-link">
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">ĐIỆN THOẠI & PHỤ KIỆN</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Điện thoại</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Máy tính bảng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Pin dự phòng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Pin Gắn Trong, Cáp và Bộ Sạc</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Ốp lưng, bao da, Miếng dán điện thoại</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Bảo vệ màn hình</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đế giữ điện thoại & Gậy Chụp hình</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Thẻ nhớ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Sim</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Điện thoại bàn</a>
                                </div>
                               
                                
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">SẮC ĐẸP</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Tắm & Chăm sóc cơ thể</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Chăm soc tay, chân & móng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Chăm sóc tóc</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Chăm sóc Nam giới</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Nước hoa</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Trang điểm</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Dụng cụ làm đẹp</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Chăm sóc da mặt</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Bộ sản phẩm làm đẹp</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                
                                   
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">GIÀY DÉP NAM</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Bốt</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Giày thể thao/ Sneaker</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Giày sục </a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Giày Tây lười</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Giày Oxfords & Giày Buộc Dây</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Xăng-đan và Dép</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ kiện giày dép</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">BÁCH HÓA ONLINE</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ ăn vặt</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ chế biến sẵn</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Nhu yếu Phẩm</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Nguyên liệu nấu ăn</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ làm bánh</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Sữa-Trứng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ uống</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Ngũ cốc & Mứt</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Các loại bánh</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ uống có cồn</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Bộ quà tặng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">THực phẩm tươi sống và thực phẩm đông lạnh</a>
                                </div>
                                
                                
                                
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">ĐỒ CHƠI</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ chơi mô hình/a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ chơi giải trí</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ chơi giáo dục</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ chơi cho trẻ sơ sinh & trẻ nhỏ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ chơi vận động & ngoài trời</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Búp Bê & Đồ chơi nhồi bông</a>
                                </div>
                                
                                
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="footer-mid-content-link">
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">MẸ & BÉ</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ dùng du lịch cho bé</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ dùng ăn dặm cho bé</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ kiện cho mẹ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Chăm sóc sức khỏe mẹ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ dung phòng tắm & Chăm sóc cơ thể bé</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ dùng phòng ngủ cho bé</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">An toàn cho bé</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Thực phẩm cho bé</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Chăm sóc sức khỏe bé</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Tã & Bô em bé</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ chơi</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Bộ & Gói quà tặng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Sữa công thức trên 24 tháng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Sữa công thức 0-24 tháng tuổi</a>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">MÁY ẢNH & MÁY QUAY PHIM</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Máy ảnh - Máy quay phim</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Camera giám sát & Camera hệ thống</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Thẻ nhớ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Ống kính</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ kiện máy ảnh</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Máy bay camera & Phụ kiện</a>
                                </div>
                               
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">TÚI VÍ NỮ</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Ba Lô Nữ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Cặp Laptop</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Ví Dự Tiệc & Ví Cầm Tay</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Túi Đeo Hông & Túi Đeo Ngực</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Túi Tote</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Túi Quai Xách</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Túi Đeo Chéo & Túi Đeo Vai</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Ví/Bóp Nữ</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ kiện túi</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">Ô TÔ & XE MÁY & XE ĐẠP</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Xe đạp, xe điện</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Mô tô, xe máy</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Xe Ô tô</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Mũ Bảo Hiểm</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ kiện xe máy</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ tùng xe máy</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Chăm sóc xe máy</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ tùng, phụ kiện xe đạp, xe đạp điện</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Chăm sóc, sửa chữa xe</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Chăm sóc Ô tô</a>
                                </div>
                               
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">GIẶT GIŨ & CHĂM SÓC NHÀ CỬA</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Giặt giũ & Chăm sóc nhà cửa</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Giấy vệ sinh, khăn giấy</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Vệ sinh nhà cửa</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Vệ sinh bát đĩa</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Dụng cụ vệ sinh</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Chất khử mùi, làm thơm</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Thuốc diệt côn trùng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Túi, màng bọc thực phẩm</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Bao bì, túi đựng giác</a>
                                </div>
                                
                                
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="footer-mid-content-link">
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">THIẾT BỊ ĐIỆN TỬ</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Thiết bị đeo thông minh</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ kiện tivi</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Máy Game Console</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ Kiện Console</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Game Console</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Thiết bị điện tử</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Loa</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Tai Nghe</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Tivi</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Tivi Box</a>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">SỨC KHỎE</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Thực phẩm chức năng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Vật tư y tế</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Chăm sóc cá nhân</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Hỗ trợ tình dục</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                
                                   
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">THIẾT BỊ ĐIỆN GIA DỤNG</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ gia dụng nhà bếp</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đồ gia dụng lớn</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Máy hút bụi & Thiết bị làm sạch</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Quạt & Máy nóng lạnh</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Thiết bị chăm sóc quần áo</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">NHÀ SÁCH ONLINE</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">Đĩa Than</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Album Ảnh</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Dụng cụ may vá</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Tạp Chí & báo Giấy</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Sách</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">E-Books</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Văn Phòng Phẩm</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Quà Lưu Niệm</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Băng-Đĩa</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Nhạc Cụ & Phụ Kiện</a>
                                </div>
                                
                                
                                
                            </div>
                        </div>
                        <div class="footer-mid-content-link-category">
                            <div class="footer-mid-content-link-category-header">
                                <a href="#" class="footer-mid-title-header">CHĂM SÓC THÚ CƯNG</a>
                            </div>
                            <div class="footer-mid-content-link-category-list">
                                <div>
                                    <a href="#" class="footer-mid-title-content">THức ăn cho thú cưng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Phụ kiện cho thú cưng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Vệ sinh cho thú cưng</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Quần áo & Phụ kiện</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Chăm sóc sức khỏe</a>
                                </div>
                                <span>&nbsp;|&nbsp;</span>
                                <div>
                                    <a href="#" class="footer-mid-title-content">Khác</a>
                                </div>
                                
                                
                            </div>
                        </div>
                        
                    </div>
                   
                </div>
            </div>
            <!-- footer bot -->
            <div class="footer-bot">
                <div class="footer-bot-first">
                    <div class="footer-bot-first-header">
                        <div class="footer-bot-first-header-title">
                            <div class="footer-bot-first-header-title-top">
                                CHĂM SÓC KHÁCH HÀNG
                            </div>
                            <ul class="footer-bot-first-header-title-content">
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Trung tâm trợ giúp</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Shopee Blog</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Shopee Mall</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Hướng Dẫn Mua Hàng</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Hướng Dẫn Bán Hàng</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Thanh Toán</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Shopee Xu</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Vận CHuyển</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Trả Hàng & Hoàn Tiền</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Chăm Sóc Khách Hàng</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Chính Sách Bảo Hành</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-bot-first-header-title">
                            <div class="footer-bot-first-header-title-top">
                                VỀ SHOPEE
                            </div>
                            <ul class="footer-bot-first-header-title-content">
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Giới Thiệu Về Shopee Việt Nam</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Tuyển Dụng</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Điều Khoản Shopee</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Chính Sách Bảo Mật</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Chính Hãng</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Kênh Người Bán</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Flash Sales</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Chương Trình Tiếp Thị Liên Kết Shopee</a>
                                </li>
                                <li class="footer-bot-list">
                                    <a href="#" class="footer-bot-list-title">Liên Hệ Với Truyền Thông</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="footer-bot-first-header-title">
                            <div class="footer-bot-first-header-title-top">
                                THANH TOÁN
                            </div>
                            <ul class="footer-bot-first-header-title-img">
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/visa.png" alt="" class="footer-bot-list-img-small">
                                </li>
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/2hinhtron.png" alt="" class="footer-bot-list-img-small">
                                </li>
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/JCB.png" alt="" class="footer-bot-list-img-small">
                                </li>
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/blue.png" alt="" class="footer-bot-list-img-small">
                                </li>
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/cod.png" alt="" class="footer-bot-list-img-small">
                                </li>
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/tragop.png" alt="" class="footer-bot-list-img-small">
                                </li>
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/shopee pay.png" alt="" class="footer-bot-list-img-small">
                                </li>
                            </ul>
                            <div class="footer-bot-first-header-title-top-dovivanchuyen">
                                ĐƠN VỊ VẬN CHUYỂN
                            </div>
                            <ul class="footer-bot-first-header-title-img">
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/shopeeXpress.png" alt="" class="footer-bot-list-img-small">
                                </li>
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/giaohang.png" alt="" class="footer-bot-list-img-small">
                                </li>
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/GHN.png" alt="" class="footer-bot-list-img-small">
                                </li>
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/viettelpost.png" alt="" class="footer-bot-list-img-small">
                                </li>
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/vietnampost.png" alt="" class="footer-bot-list-img-small">
                                </li>
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/J&T.png" alt="" class="footer-bot-list-img-small">
                                </li>
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/grabexpress.png" alt="" class="footer-bot-list-img-small">
                                </li>
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/ninja.png" alt="" class="footer-bot-list-img-small">
                                </li>
                                <li class="footer-bot-list-img">
                                    <img src="images/footer/bestexpress.png" alt="" class="footer-bot-list-img-small">
                                </li>
                            </ul>
                        </div>
                        <div class="footer-bot-first-header-title">
                            <div class="footer-bot-first-header-title-top">
                                THEO DÕI CHÚNG TÔI TRÊN
                            </div>
                            <ul class="footer-bot-first-header-title-icon">
                                <li class="footer-bot-first-header-title-icon-link">
                                    <a href="#" class="footer-bot-icon">
                                        <i class="footer-bot-icon-link fab fa-facebook"></i>
                                        Facebook
                                    </a>
                                </li>
                                <li class="footer-bot-first-header-title-icon-link">
                                    <a href="#" class="footer-bot-icon">
                                        <i class="footer-bot-icon-link fab fa-instagram-square"></i>
                                        Instagram
                                    </a>
                                </li>
                                <li class="footer-bot-first-header-title-icon-link">
                                    <a href="#" class="footer-bot-icon">
                                        <i class="footer-bot-icon-link fab fa-invision"></i>
                                        Linkedln
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-bot-first-header-title">
                            <div class="footer-bot-first-header-title-top">
                                TẢI ỨNG DỤNG SHOPEE NGAY THÔI
                            </div>
                            <a href="#" class="footer-bot-first-header-title-download">
                                <img src="images/qr_code.png" alt="" class="footer-bot-download-img">
                                <div class="footer-bot-first-header-title-download-link">
                                    <img src="images/appstore.png" alt="" class="footer-bot-download-link-img">
                                    <img src="images/googleplay.png" alt="" class="footer-bot-download-link-img">
                                    <img src="images/appgallery.png" alt="" class="footer-bot-download-link-img">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="footer-bot-first-country">
                        <div class="footer-bot-first-country-title">© 2021 Shopee. Tất cả các quyền được bảo lưu.</div>
                        <div class="footer-bot-first-country-link">
                            <div class="footer-bot-first-country-link-letter">Quốc gia & Khu vực:</div>
                            <div class="footer-bot-first-country-link-list">Singapore</div>
                            <div class="footer-bot-first-country-link-list">Indonesia</div>
                            <div class="footer-bot-first-country-link-list">Đài Loan</div>
                            <div class="footer-bot-first-country-link-list">Thái Lan</div>
                            <div class="footer-bot-first-country-link-list">Malaysia</div>
                            <div class="footer-bot-first-country-link-list">Việt Nam</div>
                            <div class="footer-bot-first-country-link-list">Philippines</div>
                            <div class="footer-bot-first-country-link-list">Brazil</div>
                            <div class="footer-bot-first-country-link-list">Mexico</div>
                            <div class="footer-bot-first-country-link-list">Colombia</div>
                            <div class="footer-bot-first-country-link-list">Chile</div>
                            <div class="footer-bot-first-country-link-list">Poland</div>
                            <div class="footer-bot-first-country-link-list">Spain</div>
                        </div>
                    </div>
                </div>
                <div class="footer-bot-last">
                    <div class="footer-bot-last-content">
                        <div class="footer-bot-last-content-link">
                            <div class="footer-bot-last-content-link-title">
                                <a href="#" class="footer-bot-last-content-link-title-letter">
                                    <span>CHÍNH SÁCH BẢO MẬT</span>
                                </a>
                            </div>
                            <div class="footer-bot-last-content-link-title">
                                <a href="#" class="footer-bot-last-content-link-title-letter">
                                    <span>QUY CHẾ HOẠT ĐỘNG</span>
                                </a>
                            </div>
                            <div class="footer-bot-last-content-link-title">
                                <a href="#" class="footer-bot-last-content-link-title-letter">
                                    <span>CHÍNH SÁCH VẬN CHUYỂN</span>
                                </a>
                            </div>
                            <div class="footer-bot-last-content-link-title">
                                <a href="#" class="footer-bot-last-content-link-title-letter">
                                    <span>CHÍNH SÁCH TRẢ HÀNG VÀ HOÀN TIỀN</span>
                                </a>
                            </div>
                        </div>
                        <div class="footer-bot-last-content-icon">
                            <a href="#" class="footer-bot-last-content-icon-link">
                                <img src="images/footer/bocongthuong.png" alt="" class="footer-bot-last-img">
                            </a>
                            <a href="#" class="footer-bot-last-content-icon-link">
                                <img src="images/footer/bocongthuong.png" alt="" class="footer-bot-last-img">
                            </a>
                            <a href="#" class="footer-bot-last-content-icon-link">
                                <img src="images/footer/1hinhtron.png" alt="" class="footer-bot-last-img-circle">
                            </a>
                        </div>
                        <div class="footer-bot-last-content-company">Công ty TNHH Shopee</div>
                        <div class="footer-bot-last-content-end">Địa chỉ: Tầng 4-5-6, Tòa nhà Capital Place, số 29 đường Liễu Giai, Phường Ngọc Khánh, Quận Ba Đình, Thành phố Hà Nội, Việt Nam. 
                            Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.shopee.vn
                        </div>
                        <div class="footer-bot-last-content-end">Chịu Trách Nhiệm Quản Lý Nội Dung: Nguyễn Đức Trí -  Điện thoại liên hệ: 024 73081221 (ext 4678)</div>
                        <div class="footer-bot-last-content-end">Mã số doanh nghiệp: 0106773786 do Sở Kế hoạch & Đầu tư TP Hà Nội cấp lần đầu ngày 10/02/2015</div>
                        <div class="footer-bot-last-content-end">© 2015 - Bản quyền thuộc về Công ty TNHH Shopee</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>