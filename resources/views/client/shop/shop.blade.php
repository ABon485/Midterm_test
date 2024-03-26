@extends('client.layouts.master')
@section('content')
    <section id="breadcrumb-wrapper" class="breadcrumb-w-img">
        <div class="breadcrumb-overlay"></div>
        <div class="breadcrumb-content">
            <div class="wrapper">
                <div class="inner text-center">
                    <div class="breadcrumb-big"><br><br><br>
                        <h2>BÍ NGÔ</h2>
                    </div>
                    <div class="breadcrumb-small">
                        <p id="breadcrumbs"><span><span><a href="http://at10.chonweb.vn/">Trang chủ</a> » <span
                                        class="breadcrumb_last" aria-current="page">Sản phẩm</span></span></span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div id="PageContainer" class="is-moved-by-drawer">
        <section id="blog-wrapper">
            <div class="wrapper">
                <div class="inner">
                    <div class="grid">
                        <div class=" grid__item large--seven-tenths medium--one-whole small--one-whole" itemscope=""
                            itemtype="http://schema.org/Article">
                            <div id="primary" class="content-area">
                                <main id="main" class="site-main" role="main">
                                    <nav class="woocommerce-breadcrumb"><a href="https://at10.mediawz.com">Trang
                                            chủ</a>&nbsp;&#47;&nbsp;Sản phẩm</nav>
                                    <header class="woocommerce-products-header">
                                        <h1 class="woocommerce-products-header__title page-title">Sản phẩm</h1>

                                    </header>
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <p class="woocommerce-result-count">
                                        Showing all {{count($products)}} results</p>

                                    <div class="grid-uniform md-mg-left-10 products columns-4">
                                        @foreach($products as $product) 
                                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="{{route('Detailproduct',['id'=>$product->id])}}">
                                                        <img width="260" height="260"
                                                            src="{{asset('images/'.$product->image)}}"
                                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                                            alt="BÍ NGÔ"
                                                            {{-- srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/bidodai_large.jpg 480w" --}}
                                                            sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-title">
                                                        <a href="{{route('Detailproduct',['id'=>$product->id])}}">{{$product->Name}}</a>
                                                    </div>
                                                    <div class="product-price clearfix">
                                                        <span class="current-price"><span
                                                                class="woocommerce-Price-amount amount">${{$product->Price}}<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                                        <span class="original-price"><s><span
                                                                    class="woocommerce-Price-amount amount">15,000<span
                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></s></span>
                                                    </div>
                                                    <div class="product-actions text-center clearfix">
                                                        <a href="{{route('Detailproduct',['id'=>$product->id])}}">
                                                            <button type="button"
                                                                class="btn-buyNow buy-now medium--hide small--hide"
                                                                data-id="1026777806">Chi tiết</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach 
                                        {{-- <div
                                            class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="https://at10.mediawz.com/san-pham/bo-xanh/">
                                                        <img width="260" height="260"
                                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-260x260.jpg"
                                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                                            alt="Bơ xanh"
                                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/13_large.jpg 480w"
                                                            sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-title">
                                                        <a href="https://at10.mediawz.com/san-pham/bo-xanh/">Bơ xanh</a>
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
                                                        <a href="https://at10.mediawz.com/san-pham/bo-xanh/">
                                                            <button type="button"
                                                                class="btn-buyNow buy-now medium--hide small--hide"
                                                                data-id="1026777806">Chi tiết</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-pd-left10 grid__item large--one-quarter medium--one-third small--one-half">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="https://at10.mediawz.com/san-pham/ca-chua/">
                                                        <img width="260" height="260"
                                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-260x260.jpg"
                                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                                            alt="Cà chua"
                                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/cachua_large.jpg 480w"
                                                            sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-title">
                                                        <a href="https://at10.mediawz.com/san-pham/ca-chua/">Cà chua</a>
                                                    </div>
                                                    <div class="product-price clearfix">
                                                        <span class="current-price"><span
                                                                class="woocommerce-Price-amount amount">15,000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                                    </div>
                                                    <div class="product-actions text-center clearfix">
                                                        <a href="https://at10.mediawz.com/san-pham/ca-chua/">
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
                                                    <a href="https://at10.mediawz.com/san-pham/cam-cao-phong/">
                                                        <img width="260" height="260"
                                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-260x260.jpg"
                                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                                            alt="Cam Cao Phong"
                                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/10_large.jpg 480w"
                                                            sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-title">
                                                        <a href="https://at10.mediawz.com/san-pham/cam-cao-phong/">Cam Cao
                                                            Phong</a>
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
                                                        <a href="https://at10.mediawz.com/san-pham/cam-cao-phong/">
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
                                                    <a href="https://at10.mediawz.com/san-pham/cu-den/">
                                                        <img width="260" height="260"
                                                            src="https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-260x260.jpg"
                                                            class="attachment-thumb_260x260 size-thumb_260x260 wp-post-image"
                                                            alt="CỦ DỀN"
                                                            srcset="https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-260x260.jpg 260w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-300x300.jpg 300w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-100x100.jpg 100w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large-150x150.jpg 150w, https://at10.mediawz.com/wp-content/uploads/2019/06/hat_giong_cu_den_large.jpg 480w"
                                                            sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-title">
                                                        <a href="https://at10.mediawz.com/san-pham/cu-den/">CỦ DỀN</a>
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
                                                            sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
                                                    </a>
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
                                                            sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-title">
                                                        <a href="https://at10.mediawz.com/san-pham/mung-toi/">MÙNG TƠI</a>
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
                                                            sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-title">
                                                        <a href="https://at10.mediawz.com/san-pham/nho-xanh/">NHO XANH</a>
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
                                        </div> --}}
                                    </div>
                                </main>
                            </div>
                        </div>
                        <div class="grid__item large--three-tenths medium--one-whole small--one-whole">
                            
                        </div>
                    </div>
                </div>
            </div>
    </div><!-- .wrap -->

    </div><!-- #PageContainer -->
@endsection
