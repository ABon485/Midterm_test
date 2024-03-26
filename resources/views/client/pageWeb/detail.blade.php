@extends('client.layouts.master')
@section('content')
    <section id="breadcrumb-wrapper" class="breadcrumb-w-img">
        <div class="breadcrumb-overlay"></div>
        <div class="breadcrumb-content">
            <div class="wrapper">
                <div class="inner text-center">
                    <div class="breadcrumb-big"><br><br><br>
                        <h2>{{ $product->Name }}</h2>
                    </div>
                    <div class="breadcrumb-small">
                        <p id="breadcrumbs"><span><span><a href="http://at10.chonweb.vn/">Trang chủ</a> » <span><a
                                            href="http://at10.chonweb.vn/san-pham/">Sản phẩm</a> » <span
                                            class="breadcrumb_last" aria-current="page">{{ $product->Name }}</span></span></span></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="PageContainer" class="is-moved-by-drawer">
        <section id="product-wrapper">
            <div class="wrapper">
                <div class="inner">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">
                            <nav class="woocommerce-breadcrumb"><a href="https://at10.mediawz.com">Trang
                                    chủ</a>&nbsp;&#47;&nbsp;<a href="https://at10.mediawz.com/san-pham/">Sản
                                    phẩm</a>&nbsp;&#47;&nbsp;<a
                                    href="https://at10.mediawz.com/danh-muc-san-pham/rau-huu-co/">Rau hữu
                                    cơ</a>&nbsp;&#47;&nbsp;</nav>
                            <div class="woocommerce-notices-wrapper"></div>
                            <div itemscope="" itemtype="http://schema.org/Product">
                                <div id="product-79"
                                    class="product type-product post-79 status-publish first instock product_cat-hoa-qua product_cat-rau-huu-co product_cat-thuc-pham-kho has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                                    <div class="grid product-single">
                                        <div class="grid__item large--five-twelfths medium--one-whole small--one-whole">

                                            <span class="onsale">Giảm giá!</span>

                                            <div class="wpgs wpgs--with-images images">

                                                <div class="wpgs-for">
                                                    <div
                                                        class="woocommerce-product-gallery__image single-product-main-image">
                                                        <a class="venobox" title="bidodai_large" data-gall="wpgs-lightbox"
                                                            href="https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large.jpg"><img
                                                                width="480" height="480"
                                                                src="{{asset('images/'.$product->image)}}"
                                                                class="attachment-shop_single size-shop_single wp-post-image"
                                                                alt=""
                                                                {{-- srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large.jpg 480w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-260x260.jpg 260w" --}}
                                                                sizes="100vw" />
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="grid__item large--seven-twelfths medium--one-whole small--one-whole">
                                            <div class="product-content">
                                                <div class="pro-content-head clearfix">
                                                    <h1 class="product_title-entry-title">{{ $product->Name }}</h1>
                                                </div>
                                                <div class="pro-price clearfix">
                                                    <span class="current-price"><span
                                                            class="woocommerce-Price-amount amount">${{ $product->Price }}<span
                                                                class="woocommerce-Price-currencySymbol"></span></span></span>
                                                    <span class="original-price"><s><span
                                                                class="woocommerce-Price-amount amount">$5,000<span
                                                                    class="woocommerce-Price-currencySymbol"></span></span></s></span>
                                                </div>
                                                <div class="woocommerce-product-details__short-description">
                                                    <p>{{ $product->description }}</p>
                                                </div>

                                                <div id="fb-root"></div>
                                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3">
                                                </script>

                                                <div class="product-size-hotline" style="margin-bottom:10px;">
                                                    <div class="product-hotline" style="display:inline-block;">
                                                        <svg class="svg-inline--fa fa-phone fa-w-16" aria-hidden="true"
                                                            data-prefix="fa" data-icon="phone" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M493.397 24.615l-104-23.997c-11.314-2.611-22.879 3.252-27.456 13.931l-48 111.997a24 24 0 0 0 6.862 28.029l60.617 49.596c-35.973 76.675-98.938 140.508-177.249 177.248l-49.596-60.616a24 24 0 0 0-28.029-6.862l-111.997 48C3.873 366.516-1.994 378.08.618 389.397l23.997 104C27.109 504.204 36.748 512 48 512c256.087 0 464-207.532 464-464 0-11.176-7.714-20.873-18.603-23.385z">
                                                            </path>
                                                        </svg><!-- <i class="fa fa-phone" aria-hidden="true"></i> -->
                                                        Hotline hỗ trợ 24/7: <a href="tel:0123.456.789">
                                                            0123.456.789</a>
                                                    </div><span> | </span>
                                                    <div class="social-network-actions text-left">
                                                        <div class="fb-like"
                                                            data-href="https://at10.mediawz.com/san-pham/bi-ngo/"
                                                            data-width="" data-layout="button_count" data-action="like"
                                                            data-size="small" data-show-faces="true" data-share="true">
                                                        </div>
                                                    </div>
                                                </div>


                                                <form class="cart" action="https://at10.mediawz.com/san-pham/bi-ngo/"
                                                    method="post" enctype='multipart/form-data'>

                                                    <div class="quantity">
                                                        <label class="screen-reader-text" for="quantity_660199cf4e4d1">BÍ
                                                            NGÔ số lượng</label>
                                                        <input type="number" id="quantity_660199cf4e4d1"
                                                            class="input-text qty text" step="1" min="1"
                                                            max="" name="quantity" value="1" title="SL"
                                                            size="4" placeholder="" inputmode="numeric" />
                                                    </div>

                                                    <button type="submit" name="add-to-cart" value="79"
                                                        class="single_add_to_cart_button button alt">Mua hàng</button>

                                                </form>


                                                <div class="product_meta">



                                                    <span class="sku_wrapper">Mã: <span
                                                            class="sku">MSP-01</span></span>


                                                    <span class="posted_in">Danh mục: <a
                                                            href="https://at10.mediawz.com/danh-muc-san-pham/hoa-qua/"
                                                            rel="tag">Hoa quả</a>, <a
                                                            href="https://at10.mediawz.com/danh-muc-san-pham/rau-huu-co/"
                                                            rel="tag">Rau hữu cơ</a>, <a
                                                            href="https://at10.mediawz.com/danh-muc-san-pham/thuc-pham-kho/"
                                                            rel="tag">Thực phẩm khô</a></span>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-description-wrapper">
                                        <div class="woocommerce-tabs wc-tabs-wrapper">
                                            <div class="tab clearfix">
                                                <button class="pro-tablinks active"
                                                    onclick="openProTabs(event, 'protab-description')"
                                                    id="defaultOpenProTabs"><span>Mô tả</span></button>
                                                <button class="pro-tablinks "
                                                    onclick="openProTabs(event, 'protab-xuat_xu_tab')"><span>Xuất
                                                        xứ</span></button>
                                                <button class="pro-tablinks "
                                                    onclick="openProTabs(event, 'protab-tieu_chuan_tab')"><span>Tiêu
                                                        chuẩn</span></button>
                                                <button class="pro-tablinks "
                                                    onclick="openProTabs(event, 'protab-reviews')"><span>Đánh giá
                                                        (0)</span></button>
                                            </div>

                                            <div id="protab-description" class="pro-tabcontent">

                                                <h2>Mô tả</h2>

                                                <p>NHỮNG CÔNG DỤNG CỰC KỲ QUÝ CỦA CAM CAO PHONG</p>
                                                <p>Vào mùa đông, loại trái cây được các gia đình hay sử dụng nhất, có lẽ là cam Cao Phong. Cam Cao Phong không những là một loại trái cây bổ dưỡng mà còn là vị thuốc quý được sử dụng nhiều trong dân gian.</p>
                                                <p>Công dụng chữa bệnh của cam Cao Phong:</p>
                                                <p>+Cam Cao Phong là loại thuốc trị cảm lạnh tốt: Dùng nước cam để tăng cường hệ miễn dịch và làm giảm các triệu chứng của cảm lạnh, đồng thời giúp detox cơ thể.</p>
                                                <p>+Cam Cao Phong còn là loại thuốc dịu đau trong bệnh thấp khớp, thống phong, đau dây thần kinh hông nhờ vào hàm lượng vitamin C cao và các chất chống viêm tự nhiên.</p>
                                                <p>+Cam Cao Phong cũng giúp làm sạch đường hô hấp bằng cách uống nước ép cam hàng ngày (ho, viêm sưng phổi).</p>
                                                <p>+Cam Cao Phong là nguồn cung cấp vitamin C và các chất chống oxy hóa quan trọng, giúp tăng cường hệ miễn dịch và chống lại các tác nhân gây bệnh.</p>
                                                <p>Cuối cùng, cam Cao Phong là loại trái cây tuyệt vời để giúp giảm căng thẳng, chống mất ngủ. Những người hay lo âu, các thí sinh đi thi, các người bị suy nhược thần kinh, những người mệt mỏi liên miên nên dùng cam Cao Phong thường xuyên.</p>
                                                
                                            </div>
                                            <div id="protab-xuat_xu_tab" class="pro-tabcontent" style="display: none;">
                                                <h2>Xuất xứ</h2>
                                                <p>NHỮNG CÔNG DỤNG CỰC KỲ QUÝ CỦA RAU BẮP CẢI</p>
                                                <p>Vào mùa đông, loại rau xanh được các gia đình hay sử dụng nhất, có lẽ
                                                    là bắp cải. Bắp cải không những là một loại rau bổ dưỡng mà còn là
                                                    vị thuốc quý được sử dụng nhiều trong dân gian.</p>
                                                <p>Công dụng chữa bệnh của rau cải bắp hữu cơ:</p>
                                                <p>+Bắp cải là loại thuốc trị giun tốt: Dùng đắp ngoài để tẩy uế và làm
                                                    liền sẹo các vết thương, mụn nhọt, các vết thương độc, đồng thời là
                                                    loại thuốc trừ sâu bọ đốt (ong, ong vò vẽ, nhện&#8230;).</p>
                                                <p>+Bắp cải còn là loại thuốc dịu đau trong bệnh thấp khớp, thống phong,
                                                    đau dây thần kinh hông (lấy các lá bắp cải rồi dùng bàn là ủi cho
                                                    mềm, sau đó đắp lên các phần bị đau). Bắp cải làm sạch đường hô hấp
                                                    bằng cách hoặc dùng đắp (trị viêm họng khản tiếng) hoặc uống trong
                                                    (ho, viêm sưng phổi).</p>
                                                <p>+Bắp cải cũng là thuốc chống hoại huyết, trị lỵ và cung cấp cho cơ
                                                    thể một yếu tố quan trọng là lưu huỳnh (S). Nước bắp cải dùng lọc
                                                    máu.</p>
                                                <p>Cuối cùng, bắp cải là loại thuốc mạnh để chống kích thích thần kinh
                                                    và chứng mất ngủ. Những người hay lo âu, các thí sinh đi thi, các
                                                    người bị suy nhược thần kinh, những người mệt mỏi liên miên nên dùng
                                                    bắp cải thường xuyên.</p>
                                                <p>NHỮNG CÔNG DỤNG CỰC KỲ QUÝ CỦA RAU BẮP CẢI</p>
                                                <p>Vào mùa đông, loại rau xanh được các gia đình hay sử dụng nhất, có lẽ
                                                    là bắp cải. Bắp cải không những là một loại rau bổ dưỡng mà còn là
                                                    vị thuốc quý được sử dụng nhiều trong dân gian.</p>
                                                <p>Công dụng chữa bệnh của rau cải bắp hữu cơ:</p>
                                                <p>+Bắp cải là loại thuốc trị giun tốt: Dùng đắp ngoài để tẩy uế và làm
                                                    liền sẹo các vết thương, mụn nhọt, các vết thương độc, đồng thời là
                                                    loại thuốc trừ sâu bọ đốt (ong, ong vò vẽ, nhện&#8230;).</p>
                                                <p>+Bắp cải còn là loại thuốc dịu đau trong bệnh thấp khớp, thống phong,
                                                    đau dây thần kinh hông (lấy các lá bắp cải rồi dùng bàn là ủi cho
                                                    mềm, sau đó đắp lên các phần bị đau). Bắp cải làm sạch đường hô hấp
                                                    bằng cách hoặc dùng đắp (trị viêm họng khản tiếng) hoặc uống trong
                                                    (ho, viêm sưng phổi).</p>
                                                <p>+Bắp cải cũng là thuốc chống hoại huyết, trị lỵ và cung cấp cho cơ
                                                    thể một yếu tố quan trọng là lưu huỳnh (S). Nước bắp cải dùng lọc
                                                    máu.</p>
                                                <p>Cuối cùng, bắp cải là loại thuốc mạnh để chống kích thích thần kinh
                                                    và chứng mất ngủ. Những người hay lo âu, các thí sinh đi thi, các
                                                    người bị suy nhược thần kinh, những người mệt mỏi liên miên nên dùng
                                                    bắp cải thường xuyên.</p>
                                            </div>
                                            <div id="protab-tieu_chuan_tab" class="pro-tabcontent"
                                                style="display: none;">
                                                <h2>Tiêu chuẩn</h2>
                                                <p>NHỮNG CÔNG DỤNG CỰC KỲ QUÝ CỦA RAU BẮP CẢI</p>
                                                <p>Vào mùa đông, loại rau xanh được các gia đình hay sử dụng nhất, có lẽ
                                                    là bắp cải. Bắp cải không những là một loại rau bổ dưỡng mà còn là
                                                    vị thuốc quý được sử dụng nhiều trong dân gian.</p>
                                                <p>Công dụng chữa bệnh của rau cải bắp hữu cơ:</p>
                                                <p>+Bắp cải là loại thuốc trị giun tốt: Dùng đắp ngoài để tẩy uế và làm
                                                    liền sẹo các vết thương, mụn nhọt, các vết thương độc, đồng thời là
                                                    loại thuốc trừ sâu bọ đốt (ong, ong vò vẽ, nhện&#8230;).</p>
                                                <p>+Bắp cải còn là loại thuốc dịu đau trong bệnh thấp khớp, thống phong,
                                                    đau dây thần kinh hông (lấy các lá bắp cải rồi dùng bàn là ủi cho
                                                    mềm, sau đó đắp lên các phần bị đau). Bắp cải làm sạch đường hô hấp
                                                    bằng cách hoặc dùng đắp (trị viêm họng khản tiếng) hoặc uống trong
                                                    (ho, viêm sưng phổi).</p>
                                                <p>+Bắp cải cũng là thuốc chống hoại huyết, trị lỵ và cung cấp cho cơ
                                                    thể một yếu tố quan trọng là lưu huỳnh (S). Nước bắp cải dùng lọc
                                                    máu.</p>
                                                <p>Cuối cùng, bắp cải là loại thuốc mạnh để chống kích thích thần kinh
                                                    và chứng mất ngủ. Những người hay lo âu, các thí sinh đi thi, các
                                                    người bị suy nhược thần kinh, những người mệt mỏi liên miên nên dùng
                                                    bắp cải thường xuyên.</p>
                                                <p>NHỮNG CÔNG DỤNG CỰC KỲ QUÝ CỦA RAU BẮP CẢI</p>
                                                <p>Vào mùa đông, loại rau xanh được các gia đình hay sử dụng nhất, có lẽ
                                                    là bắp cải. Bắp cải không những là một loại rau bổ dưỡng mà còn là
                                                    vị thuốc quý được sử dụng nhiều trong dân gian.</p>
                                                <p>Công dụng chữa bệnh của rau cải bắp hữu cơ:</p>
                                                <p>+Bắp cải là loại thuốc trị giun tốt: Dùng đắp ngoài để tẩy uế và làm
                                                    liền sẹo các vết thương, mụn nhọt, các vết thương độc, đồng thời là
                                                    loại thuốc trừ sâu bọ đốt (ong, ong vò vẽ, nhện&#8230;).</p>
                                                <p>+Bắp cải còn là loại thuốc dịu đau trong bệnh thấp khớp, thống phong,
                                                    đau dây thần kinh hông (lấy các lá bắp cải rồi dùng bàn là ủi cho
                                                    mềm, sau đó đắp lên các phần bị đau). Bắp cải làm sạch đường hô hấp
                                                    bằng cách hoặc dùng đắp (trị viêm họng khản tiếng) hoặc uống trong
                                                    (ho, viêm sưng phổi).</p>
                                                <p>+Bắp cải cũng là thuốc chống hoại huyết, trị lỵ và cung cấp cho cơ
                                                    thể một yếu tố quan trọng là lưu huỳnh (S). Nước bắp cải dùng lọc
                                                    máu.</p>
                                                <p>Cuối cùng, bắp cải là loại thuốc mạnh để chống kích thích thần kinh
                                                    và chứng mất ngủ. Những người hay lo âu, các thí sinh đi thi, các
                                                    người bị suy nhược thần kinh, những người mệt mỏi liên miên nên dùng
                                                    bắp cải thường xuyên.</p>
                                            </div>
                                            <div id="protab-reviews" class="pro-tabcontent" style="display: none;">
                                                <div id="reviews" class="woocommerce-Reviews">
                                                    <div id="comments">
                                                        <h2 class="woocommerce-Reviews-title">
                                                            Đánh giá </h2>

                                                        <p class="woocommerce-noreviews">Chưa có đánh giá nào.</p>
                                                    </div>

                                                    <div id="review_form_wrapper">
                                                        <div id="review_form">
                                                            <div id="respond" class="comment-respond">
                                                                <span id="reply-title" class="comment-reply-title">Hãy
                                                                    là người đầu tiên nhận xét &ldquo;BÍ NGÔ&rdquo;
                                                                    <small><a rel="nofollow"
                                                                            id="cancel-comment-reply-link"
                                                                            href="/san-pham/bi-ngo/#respond"
                                                                            style="display:none;">Hủy</a></small></span>
                                                                <form
                                                                    action="https://at10.mediawz.com/wp-comments-post.php"
                                                                    method="post" id="commentform" class="comment-form"
                                                                    novalidate>
                                                                    <p class="comment-notes"><span id="email-notes">Email
                                                                            của bạn sẽ không
                                                                            được hiển thị công khai.</span> Các trường
                                                                        bắt buộc được đánh dấu <span
                                                                            class="required">*</span></p>
                                                                    <div class="comment-form-rating"><label
                                                                            for="rating">Đánh giá của
                                                                            bạn</label><select name="rating"
                                                                            id="rating" required>
                                                                            <option value="">Xếp hạng&hellip;
                                                                            </option>
                                                                            <option value="5">Rất tốt</option>
                                                                            <option value="4">Tốt</option>
                                                                            <option value="3">Trung bình</option>
                                                                            <option value="2">Không tệ</option>
                                                                            <option value="1">Rất tệ</option>
                                                                        </select></div>
                                                                    <p class="comment-form-comment"><label
                                                                            for="comment">Nhận xét của bạn&nbsp;<span
                                                                                class="required">*</span></label>
                                                                        <textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
                                                                    </p>
                                                                    <p class="comment-form-author"><label
                                                                            for="author">Tên&nbsp;<span
                                                                                class="required">*</span></label><input
                                                                            id="author" name="author" type="text"
                                                                            value="" size="30" required /></p>
                                                                    <p class="comment-form-email"><label
                                                                            for="email">Email&nbsp;<span
                                                                                class="required">*</span></label><input
                                                                            id="email" name="email" type="email"
                                                                            value="" size="30" required /></p>
                                                                    <p class="form-submit"><input name="submit"
                                                                            type="submit" id="submit" class="submit"
                                                                            value="Gửi đi" /> <input type='hidden'
                                                                            name='comment_post_ID' value='79'
                                                                            id='comment_post_ID' />
                                                                        <input type='hidden' name='comment_parent'
                                                                            id='comment_parent' value='0' />
                                                                    </p>
                                                                </form>
                                                            </div><!-- #respond -->
                                                        </div>
                                                    </div>

                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function openProTabs(evt, cityName) {
                                            var i, pro_tabcontent, pro_tablinks;
                                            pro_tabcontent = document.getElementsByClassName("pro-tabcontent");
                                            for (i = 0; i < pro_tabcontent.length; i++) {
                                                pro_tabcontent[i].style.display = "none";
                                            }
                                            pro_tablinks = document.getElementsByClassName("pro-tablinks");
                                            for (i = 0; i < pro_tablinks.length; i++) {
                                                pro_tablinks[i].className = pro_tablinks[i].className.replace(" active", "");
                                            }
                                            document.getElementById(cityName).style.display = "block";
                                            evt.currentTarget.className += " active";
                                        }
                                        document.getElementById("defaultOpenProTabs").click();
                                    </script>

                                    <section id="related-products" class="related products">
                                        <div class="home-section-head clearfix">
                                            <h2>Sản phẩm tương tự</h2>
                                        </div>
                                        <div class="home-section-body">
                                            <div class="grid-uniform md-mg-left-10 products columns-4">
                                                <div
                                                    class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                                                    <div class="product-item">
                                                        <div class="product-img">
                                                            <a href="https://at10.mediawz.com/san-pham/cu-den/">
                                                                <img width="260" height="260"
                                                                    src="https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-260x260.jpg"
                                                                    class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                                                    alt="CỦ DỀN"
                                                                    srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large.jpg 480w"
                                                                    sizes="100vw" /> </a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="product-title">
                                                                <a href="https://at10.mediawz.com/san-pham/cu-den/">CỦ
                                                                    DỀN</a>
                                                            </div>
                                                            <div class="product-price clearfix">
                                                                <span class="current-price"><span
                                                                        class="woocommerce-Price-amount amount">12,000<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                                                <span class="original-price"><s><span
                                                                            class="woocommerce-Price-amount amount">15,000<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                                            </div>
                                                            <div class="product-actions text-center clearfix">
                                                                <a href="https://at10.mediawz.com/san-pham/cu-den/">
                                                                    <button type="button"
                                                                        class="btn-buyNow buy-now medium--hide small--hide"
                                                                        data-id="1026777806">Chi tiết</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                                                    <div class="product-item">
                                                        <div class="product-img">
                                                            <a href="https://at10.mediawz.com/san-pham/dua/">
                                                                <img width="260" height="260"
                                                                    src="https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-260x260.jpg"
                                                                    class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                                                    alt="DỨA"
                                                                    srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/pineapple-fruit-image_large.jpg 480w"
                                                                    sizes="100vw" /> </a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="product-title">
                                                                <a href="https://at10.mediawz.com/san-pham/dua/">DỨA</a>
                                                            </div>
                                                            <div class="product-price clearfix">
                                                                <span class="current-price"><span
                                                                        class="woocommerce-Price-amount amount">12,000<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                                                <span class="original-price"><s><span
                                                                            class="woocommerce-Price-amount amount">15,000<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                                            </div>
                                                            <div class="product-actions text-center clearfix">
                                                                <a href="https://at10.mediawz.com/san-pham/dua/">
                                                                    <button type="button"
                                                                        class="btn-buyNow buy-now medium--hide small--hide"
                                                                        data-id="1026777806">Chi tiết</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                                                    <div class="product-item">
                                                        <div class="product-img">
                                                            <a href="https://at10.mediawz.com/san-pham/mung-toi/">
                                                                <img width="260" height="260"
                                                                    src="https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-260x260.jpg"
                                                                    class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                                                    alt="MÙNG TƠI"
                                                                    srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/mungtoi_large.jpg 480w"
                                                                    sizes="100vw" /> </a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="product-title">
                                                                <a href="https://at10.mediawz.com/san-pham/mung-toi/">MÙNG
                                                                    TƠI</a>
                                                            </div>
                                                            <div class="product-price clearfix">
                                                                <span class="current-price"><span
                                                                        class="woocommerce-Price-amount amount">12,000<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                                                <span class="original-price"><s><span
                                                                            class="woocommerce-Price-amount amount">15,000<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                                            </div>
                                                            <div class="product-actions text-center clearfix">
                                                                <a href="https://at10.mediawz.com/san-pham/mung-toi/">
                                                                    <button type="button"
                                                                        class="btn-buyNow buy-now medium--hide small--hide"
                                                                        data-id="1026777806">Chi tiết</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                                                    <div class="product-item">
                                                        <div class="product-img">
                                                            <a href="https://at10.mediawz.com/san-pham/nho-xanh/">
                                                                <img width="260" height="260"
                                                                    src="https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-260x260.jpg"
                                                                    class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                                                    alt="NHO XANH"
                                                                    srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/17_f6c9824688c548a0a2a1c953912bb97a_large.jpg 480w"
                                                                    sizes="100vw" /> </a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="product-title">
                                                                <a href="https://at10.mediawz.com/san-pham/nho-xanh/">NHO
                                                                    XANH</a>
                                                            </div>
                                                            <div class="product-price clearfix">
                                                                <span class="current-price"><span
                                                                        class="woocommerce-Price-amount amount">12,000<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                                                <span class="original-price"><s><span
                                                                            class="woocommerce-Price-amount amount">15,000<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                                            </div>
                                                            <div class="product-actions text-center clearfix">
                                                                <a href="https://at10.mediawz.com/san-pham/nho-xanh/">
                                                                    <button type="button"
                                                                        class="btn-buyNow buy-now medium--hide small--hide"
                                                                        data-id="1026777806">Chi tiết</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                            </div>

                        </main>
                    </div>
                </div>
            </div>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
            </script>

            </html>
        @endsection
