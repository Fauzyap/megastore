<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/stylepembayaranrox.css">
<link rel="stylesheet" type="text/css" href="../css/ujang.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Pembayaran</title>
</head>

<body>
<div class="container product-container">
        <!-- <div class="navbar">
    <div class="mega">
       <b> Mega Games</b>
    </div>

    <div class="store">
        <b>Store</b>
    </div>

    <div class="icon">
        <img src="images/side.png">
    </div>

    <div class="iconsearch">
        <img src="images/search.png">
    </div>

    <div class="searchbar">
    </div>

    <div class="searchh">
        Search
    </div>  -->

        <section class="product-details-container">
            <div class="product-top-banner__container"><img src="images/roxround.png" alt="" class="product__top-banner"></div>    
            <div class="product__name">Ragnarok X : New Generation</div>
            <hr size="5px">
            <div class="content_product_name">
            Tentang Ragnarok x: New Generation :
            Top up Diamonds Ragnarok X: Next Generation hanya dalam hitungan detik! Cukup masukan User ID Ragnarok X: Next Generation Anda, pilih jumlah Diamonds yang Anda inginkan, selesaikan pembayaran, dan Diamonds akan secara langsung ditambahkan ke akun Ragnarok X: Next Generation Anda.
            </div>
        </section>
                <main id="contents" class="main-content">
                    
        <!-- contents.s -->
    
        <input type="hidden" id="pricePointId" name="pricePointId" value="">
    <div class="section select-server" style="font-family:Myriad Pro;margin-top:460px;margin-left:45px;width:740px;">
        <h2 class="circle">
            <span class="bulet"style="background-color: #006FFF">1</span>
            Masukkan User Game ID
        </h2>
        <div class="form-group-container form-user-identities">
    
             <div class="form-field-wrapper form__field-user-id">
                <input name="moonton.userId" type="tel" class="userid form-input" placeholder="Masukkan User ID" maxlength="10">
             </div>
    
             <div class="form-field-wrapper form__field-zone-id ">
                <input name="moonton.zoneId" type="tel" class="zoneid form-input enable" placeholder="Server" maxlength="5">
            </div>
    
             <div class="form__image-helper-container" >
                <span class="ico-question desktop-trigger"style="background-color: #006FFF">?</span>
                <span class="ico-question mobile-trigger"style="background-color: #006FFF">?</span>
             </div>
    
            <div class="img-helper">
                <div id="img-helper-element"></div>
                <span class="img-helper__close-btn"> ✕ </span>
            </div>
    
             <div class="img-helper__background"></div>
             <p class="form__field-instruction-text">Untuk mengetahui User ID Anda, silakan klik menu profile dibagian kiri atas pada menu utama game. User ID akan terlihat dibagian bawah Nama Karakter Game Anda. Silakan masukkan User ID Anda untuk menyelesaikan transaksi. Contoh : 12345678(1234).</p>
             
        </div>
    </div>
    <script type="text/javascript" src="https://cdn1.codashop.com/S/content/common/js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="/content/mobile/js/moonton.js"></script>
    <script type="text/javascript" src="/content/common/js/third_party_common.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $( "#confirm-user-dialog" ).dialog({
                resizable: false,
                height: "auto",
                dialogClass: "no-titlebar",
                autoOpen: false,
                modal: true,
                dialogClass: "confirm-user-dialog__container",
                buttons: [
                    {
                        text: 'Batalkan',
                        class: "confirm-user-dialog__btn btn-cancel",
                        click: function() {
                            CODA.Shop.txnId = null;
                            $('.confirm-user-dialog__container').hide();
                            $("#overlay").hide();
                        }
                    },
                    {
                        text: 'Konfirm',
                        class: "confirm-user-dialog__btn btn-blue",
                        click: function() {
                            $('.confirm-user-dialog__container').hide();
                            $("#overlay").hide();
                            openTxnWindow();
                        }
                    }
                ],
                create: function (event, ui) {
                    $(".ui-widget-header").hide();
                    $(this).closest(".ui-dialog").css("padding-top", "15px");
                }
            });
        });
    
        function showConfirmation(data, extraMsg) {
            var ul = $("#confirm-user-dialog > ul");
    
            ul = $(ul);
    
            $("#confirm-user-dialog > ul > li").not('li:first, li:nth-child(2)').remove();
    
            var li = $();
            var nickname = "";
            try {
                nickname = JSON.parse(decodeURIComponent(data.result)).username;
            } catch(e) {
                nickname = decodeURIComponent(data.result);
            }
            filterXSS(nickname);
            li = li.add("<li class='confirm-user-dialog__extra-msg'>" + extraMsg + "</li>");
            li = li.add("<li><div>" + 'Nama panggilan: ' + "</div><div>" + nickname + "</div></li>");
            li = li.add("<li><div>" + 'ID: ' + "</div><div style='direction:ltr'>" + data.user.userId + "(" + data.user.zoneId + ")" +"</div></li>");
            li = li.add("<li><div>" + 'Harga: ' + "</div><div>" + data.channelPrice + "</div></li>");
            li = li.add("<li><div>" + 'Bayar dengan: ' + "</div><div>" + data.paymentChannel + "</div></li>");
    
            li.appendTo(ul);
            ul.appendTo("#confirm-user-dialog");
    
            $("#overlay").fadeIn( function(){
                $(".confirm-user-dialog__container").show();
            });
        }
    </script>

       <div class="section voucher"style="font-family:Myriad Pro;margin-left:45px;width:740px;">
        <h2 class="circle">
                <span class="bulet"style="background-color: #006FFF" >2</span>
            
                Pilih Nominal Top Up
            
        </h2>
        <ul class="vocherSelectionList ul-denoms voucher-denom-container">         
                            <li id="denomination_1543" class="voucher-list-element">
                                <button onclick="cost(id)" type="button" id="1" style="border-color: #A3CBFF; background:#FFFF;border-radius: 5px;margin-left:43px;margin-bottom:12px;width:183px;height:39px;">
                                    
                                        <span class="element-check-label"> L </span>
                                    
                                    <b>2453 Diamonds</b>
                                </button>
                            </li>
                            <li id="denomination_250" class="voucher-list-element">
                                <button onclick="cost(id)" type="button" id="2" style="border-color: #A3CBFF; background:#FFFF;border-radius: 5px;margin-left:43px;margin-right:36;margin-bottom:12px;width:183px;height:39px;">
                                    
                                    <span class="element-check-label"> L </span>
                                
                                <b>5190 Diamonds</b>
                            </button>
                            </li>
                            
                            <li id="denomination_251" class="voucher-list-element">
                               <button onclick="cost(id)" type="button" id="3" style="border-color: #A3CBFF; background:#FFFF;border-radius: 5px;margin-left:43px;margin-right:36;margin-bottom:12px;width:183px;height:39px">
                                    
                                        <span class="element-check-label"> L </span>
                                    
                                        <b>7911 Diamonds</b>
                                </button>
                            </li>
                            <li id="denomination_252" class="voucher-list-element">
                                <button onclick="cost(id)" type="button" id="4" style="border-color: #A3CBFF; background:#FFFF;border-radius: 5px;margin-left:43px;margin-right:36;margin-bottom:12px;width:183px;height:39px">
                                    
                                    <span class="element-check-label"> L </span>
                                
                                    <b>8413 Diamonds</b>
                            </button>
                            </li>
                            <li id="denomination_191" class="voucher-list-element">
                                <button onclick="cost(id)" type="button" id="5" style="border-color: #A3CBFF; background:#FFFF;border-radius: 5px;margin-left:43px;margin-right:36;margin-bottom:12px;width:183px;height:39px">
                                    
                                    <span class="element-check-label"> L </span>
                                
                                    <b>10245 Diamonds</b>
                            </button>
                            </li>
                            <li id="denomination_208" class="voucher-list-element">
                                <button onclick="cost(id)" type="button" id="6" style="border-color: #A3CBFF; background:#FFFF;border-radius: 5px;margin-left:43px;margin-right:36;margin-bottom:12px;width:183px;height:39px">
                                    
                                    <span class="element-check-label"> L </span>
                                
                                    <b>12440 Diamonds</b>
                            </button>
                            </li>
                            <li id="denomination_208" class="voucher-list-element">
                                <button onclick="cost(id)" type="button" id="7" style="border-color: #A3CBFF; background:#FFFF;border-radius: 5px;margin-left:43px;margin-right:36;margin-bottom:12px;width:183px;height:39px">
                                    
                                    <span class="element-check-label"> L </span>
                                
                                    <b>15553 Diamonds</b>
                            </button>
                            </li>
                            <li id="denomination_208" class="voucher-list-element">
                                <button onclick="cost(id)" type="button" id="8" style="border-color: #A3CBFF; background:#FFFF;border-radius: 5px;margin-left:43px;margin-right:36;margin-bottom:12px;width:183px;height:39px">
                                    
                                    <span class="element-check-label"> L </span>
                                
                                    <b>18737 Diamonds</b>
                            </button>
                            </li>
                            <li id="denomination_208" class="voucher-list-element">
                                <button onclick="cost(id)" type="button" id="9" style="border-color: #A3CBFF; background:#FFFF;border-radius: 5px;margin-left:43px;margin-right:36;margin-bottom:12px;width:183px;height:39px">
                                    
                                    <span class="element-check-label"> L </span>
                                
                                    <b>20330 Diamonds</b>
                            </button>
                            </li>
                            <li id="denomination_208" class="voucher-list-element">
                                <button onclick="cost(id)" type="button" id="10" style="border-color: #A3CBFF; background:#FFFF;border-radius: 5px;margin-left:43px;margin-right:36;margin-bottom:12px;width:183px;height:39px">
                                    
                                    <span class="element-check-label"> L </span>
                                
                                    <b>22125 Diamonds</b>
                            </button>
                            </li>
                            <li id="denomination_208" class="voucher-list-element">
                                <button onclick="cost(id)" type="button" id="11" style="border-color: #A3CBFF; background:#FFFF;border-radius: 5px;margin-left:43px;margin-right:36;margin-bottom:12px;width:183px;height:39px">
                                    
                                    <span class="element-check-label"> L </span>
                                
                                    <b>25157 Diamonds</b>
                            </button>
                            </li>
                            <li id="denomination_208" class="voucher-list-element">
                                <button onclick="cost(id)" type="button" id="12" style="border-color: #A3CBFF; background:#FFFF;border-radius: 5px;margin-left:43px;margin-right:36;margin-bottom:12px;width:183px;height:39px">
                                    
                                    <span class="element-check-label"> L </span>
                                
                                    <b>30215 Diamonds</b>
                            </button>
                            </li>
                            <li id="denomination_208" class="voucher-list-element">
                                <button onclick="cost(id)" type="button" id="13" style="border-color: #A3CBFF; background:#FFFF;border-radius: 5px;margin-left:43px;margin-right:36;margin-bottom:12px;width:183px;height:39px">
                                    
                                    <span class="element-check-label"> L </span>
                                
                                    <b>50250 Diamonds</b>
                            </button>
                            </li>
        </ul>
         <div class="mdc-layout-grid_cell mdc-layout-grid_cell--span-12" >
            <div id="name-div" class="mdc-text-field text-field mdc-text-field--outlined margin-width email-focused" data-mdc-auto-init="MDCTextField">
                
                <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        $('.disable-voucher').mouseover(function() {
            tempText = $(this).html();
            $(this).html('Tidak tersedia');
        });
    
        $('.disable-voucher').mouseout(function() {
            $(this).html(tempText);
        });
    </script>
                    

    <div class="section payment"style="font-family:Myriad Pro;margin-left:45px;width:740px;">
        <h2 class="circle">
            
                <span class="bulet"style="background-color: #006FFF">3</span>
            
            Pilih pembayaran
        </h2>
        <ul class="ul-paymentChannels">
            
                
    
                    <li id="paymentChannel_227" class="payment-channel-element">
                        <a class="payment-channel-link" onclick="selectPaymentChannel(227, 'GoPay', false, false, false);">
                            <span class="element-check-label"> L </span>
                            <figure class="payment-logo-container">
                                    <p><img class="logo" id="payment-logo_227" src="images/outline_account_balance_wallet_black_24dp.png"style="float:left;">E-Wallet</p>
                                    <hr width="655px">
                                    <div class="row">
                                        <div class="col col-lg-3">
                                            <img class="logoEWALLET" id="payment-logo_227" src="images/logo-gopay.png" alt="GO_PAY logo">
                                         </div>
                                         <div class="col col-lg-4">
                                            <img class="logoEWALLET" id="payment-logo_227" src="images/logo-dana.png" alt="GO_PAY logo">
                                        </div>
                                        <div class="col col-lg-2">
                                            <img class="logoEWALLET" id="payment-logo_227" src="images/logo-ovo.png" alt="GO_PAY logo">
                                         </div>
                                         <div class="col col-lg-3">
                                            <img class="logoEWALLET" id="payment-logo_227" src="images/logo-shopee.png" alt="GO_PAY logo"> 
                                         </div>
                                    </div>
                            </figure>
    
                            
                            <div class="payment-price-container">
                                <div class="price_label" id="priceLabel_227"></div>
                                <div class="price pr" id="priceInfo_227"></div>
                            </div>
                            <div class="payment-tagline-container">
                                <p class="payment-tagline" id="payment-channel__tagline_227">Bayar dengan GoPay</p>
                            </div>
                            <div class="best-deal-label"></div>
    
                        </a>
                        <input type="hidden" id="price_227" name="price_" value="0">
                        <input type="hidden" id="price_point_id_227" name="price_point_id_" value="0">
                    </li>
                
            
                
    
                    <li id="paymentChannel_230" class="payment-channel-element">
                        <a class="payment-channel-link" onclick="selectPaymentChannel(230, 'OVO', false, false, false);">
                            <span class="element-check-label"> L </span>
                            <figure class="payment-logo-container">
                            <p><img class="logo" id="payment-logo_227" src="images/outline_smartphone_black_24dp.png"style="float:left;">SMS & Seluler</p>
                                    <hr width="655px">
                                    <div class="row">
                                        <div class="col col-lg-4">
                                            <img class="logoEWALLET" id="payment-logo_227" src="images/logo-telkomsel.png" alt="GO_PAY logo">
                                         </div>
                                         <div class="col col-lg-2">
                                            <img class="logoEWALLET" id="payment-logo_227" src="images/logo-xl.png" alt="GO_PAY logo">
                                        </div>
                                        <div class="col col-lg-3">
                                            <img class="logoEWALLET" id="payment-logo_227" src="images/logo-im3.png" alt="GO_PAY logo">
                                         </div>
                                    </div>
                            </figure>
    
                            
                            <div class="payment-price-container">
                                <div class="price_label" id="priceLabel_230"></div>
                                <div class="price pr" id="priceInfo_230"></div>
                            </div>
                            <div class="payment-tagline-container">
                                <p class="payment-tagline" id="payment-channel__tagline_230">Bayar dengan OVO</p>
                            </div>
                            <div class="best-deal-label"></div>
    
                        </a>
                        <input type="hidden" id="price_230" name="price_" value="0">
                        <input type="hidden" id="price_point_id_230" name="price_point_id_" value="0">
                    </li>
                
            
                
    
                    <li id="paymentChannel_220" class="payment-channel-element">
                        <a class="payment-channel-link" onclick="selectPaymentChannel(220, 'Bank Transfer', false, false, false);">
                            <span class="element-check-label"> L </span>
                            <figure class="payment-logo-container">
                            <p><img class="logo" id="payment-logo_227" src="images/outline_store_black_24dp.png"style="float:left;">OTC Non-Bank</p>
                                    <hr width="655px">
                                    <div class="row">
                                        <div class="col col-lg-3">
                                            <img class="logoEWALLET" id="payment-logo_227" src="images/logo-indomaret.png" alt="GO_PAY logo">
                                         </div>
                                         <div class="col col-lg-2">
                                            <img class="logoEWALLET" id="payment-logo_227" src="images/logo-alfamart.png" alt="GO_PAY logo">
                                        </div>
                                    </div>
                            </figure>
    
                            
                            <div class="payment-price-container">
                                <div class="price_label" id="priceLabel_220"></div>
                                <div class="price pr" id="priceInfo_220"></div>
                            </div>
                            <div class="payment-tagline-container">
                                <p class="payment-tagline" id="payment-channel__tagline_220">Bayar melalui ATM atau transfer Mobile Banking</p>
                            </div>
                            <div class="best-deal-label"></div>
    
                        </a>
                        <input type="hidden" id="price_220" name="price_" value="0">
                        <input type="hidden" id="price_point_id_220" name="price_point_id_" value="0">
                    </li>
    
                    <li id="paymentChannel_240" class="payment-channel-element">
                        <a class="payment-channel-link" onclick="selectPaymentChannel(240, 'Dana', false, false, false);">
                            <span class="element-check-label"> L </span>
                            <figure class="payment-logo-container">
                            <p><img class="logo" id="payment-logo_227" src="images/outline_account_balance_black_24dp.png"style="float:left;">Bank</p>
                                    <hr width="655px">
                                    <div class="row">
                                        <div class="col col-lg-3">
                                            <img class="logoEWALLET" id="payment-logo_227" src="images/logo-mandiri.png" alt="GO_PAY logo">
                                         </div>
                                         <div class="col col-lg-2">
                                            <img class="logoEWALLET" id="payment-logo_227" src="images/logo-bca.png" alt="GO_PAY logo">
                                        </div>
                                        <div class="col col-lg-3">
                                            <img class="logoEWALLET" id="payment-logo_227" src="images/logo-bni.png" alt="GO_PAY logo">
                                         </div>
                                         <div class="col col-lg-2">
                                            <img class="logoEWALLET" id="payment-logo_227" src="images/logo-bri.png" alt="GO_PAY logo"> 
                                         </div>
                                    </div>
                            </figure>
    
                            
                            <div class="payment-price-container">
                                <div class="price_label" id="priceLabel_240"></div>
                                <div class="price pr" id="priceInfo_240"></div>
                            </div>
                            <div class="payment-tagline-container">
                                <p class="payment-tagline" id="payment-channel__tagline_240">Bayar dengan Dana</p>
                            </div>
                            <div class="best-deal-label"></div>
    
                        </a>
                        <input type="hidden" id="price_240" name="price_" value="0">
                        <input type="hidden" id="price_point_id_240" name="price_point_id_" value="0">
                    </li>
                    <li id="paymentChannel_240" class="payment-channel-element">
                        <a class="payment-channel-link" onclick="selectPaymentChannel(240, 'Dana', false, false, false);">
                            <span class="element-check-label"> L </span>
                            <figure class="payment-logo-container">
                            <p><img class="logo" id="payment-logo_227" src="images/outline_credit_card_black_24dp.png"style="float:left;">Credit</p>
                                    <hr width="655px">
                            </figure>
    
                            
                            <div class="payment-price-container">
                                <div class="price_label" id="priceLabel_240"></div>
                                <div class="price pr" id="priceInfo_240"></div>
                            </div>
                            <div class="payment-tagline-container">
                                <p class="payment-tagline" id="payment-channel__tagline_240">Bayar dengan Dana</p>
                            </div>
                            <div class="best-deal-label"></div>
    
                        </a>
                        <input type="hidden" id="price_240" name="price_" value="0">
                        <input type="hidden" id="price_point_id_240" name="price_point_id_" value="0">
                    </li>
                    
        </ul>
    </div>

    <div class="section buy"style="font-family:Myriad Pro;margin-left:45px;width:740px;">
        <h2 class="circle">
            
            <span class="bulet"style="background-color: #006FFF">4</span>
            
            <div class="section-title">Beli</div>
        </h2>
        <div class="form" id="formSection">
            
                <p class="emailOptional">Optional: Jika anda ingin mendapatkan bukti pembayaran atas pembelian anda, harap mengisi alamat email</p>
            
                <!-- email -->

    <form>
        <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat E-mail">
         <button onclick="myFunction()" type="submit" class="btn btn-primary"style="background:#006FFF;border-radius:30px;width: 243px;height: 35px;margin-top:10px;float:right;">Beli Sekarang</button>
    </form>
    </div>
    </div>
    </div>
    <script>
        function myFunction()
             {
                alert("Pembelian Berhasil !");
             }
     </script>
     <p>
        <a href="{{ url('home') }}">---Kembali ke Halaman Awal---</a>
     </p>  
</body>

<!-- <div class="footer">
    <div class="term">
        Website Terms and Conditions
        User Terms & Conditions 
        Privacy Policy
    </div>
    <div class="content">
        Tempat pembayaran terpercaya di dunia dengan rating tertinggi No.1 dengan sistem pembelian yang tidak merepotkan, platform top-up terbesar untuk game. Kami menerima semua jenis pembayaran dan menawarkan 10.000+ judul game.
    </div>
    <div class="banteng">
        Mega Games
    </div>
    <div class="wati">
        Store
    </div>
</div>

<div class="bb">
Butuh Bantuan?
</div>

<div class="email">
    Email: xxx
</div>
<div class="logoe">
<img src="images/email.png">
</div>
<div class="logo1">
    <img src="images/telf.png">
</div>
<div class="logo2">
    <img src="images/telf.png">
</div>
<div class="hot1">
    Hotline 1 : xxxxx
</div>
<div class="hot2">
    Hotline 2 : xxxxx
</div>
<div class="cr">
    @ 2021 hak cipta team
</div> -->

</html>