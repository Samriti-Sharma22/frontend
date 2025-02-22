@extends('website_layouts.main')
@section('content')
@if($error->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<section class="product_list section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product_sidebar">
                    <div class="single_sedebar">
                        <form action="#">
                            <input type="text" name="#" placeholder="Search keyword">
                            <i class="ti-search"></i>
                        </form>
                    </div>
                    <div class="single_sedebar">
                        <div class="select_option">
                            <div class="select_option_list">Category <i class="right fas fa-caret-down"></i> </div>
                            <div class="select_option_dropdown">
                                <p><a href="#">Category 1</a></p>
                                <p><a href="#">Category 2</a></p>
                                <p><a href="#">Category 3</a></p>
                                <p><a href="#">Category 4</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="single_sedebar">
                        <div class="select_option">
                            <div class="select_option_list">Type <i class="right fas fa-caret-down"></i> </div>
                            <div class="select_option_dropdown">
                                <p><a href="#">Type 1</a></p>
                                <p><a href="#">Type 2</a></p>
                                <p><a href="#">Type 3</a></p>
                                <p><a href="#">Type 4</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="product_list">
                    <div class="row">
                        @foreach ($products as $item)
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="assets/img/categori/product6.png" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">{{ $item->description }}</a> </h3>
                                <p>From {{ $item->price }}</p>
                            <form action="{{ route('addToCart')}}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item->id}}">
                                <input type="hidden" name="price" value="{{ $item->price}}">
                                <button type ="submit"  class="btn header-btn">Add to Cart</a>
                            </form>
                            </div>
                           
                        </div>
                        @endforeach
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="assets/img/categori/product6.png" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Cervical pillow for airplane
                                car office nap pillow</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="assets/img/categori/product2.png" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Geometric striped flower home classy decor</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="assets/img/categori/product5.png" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Foam filling cotton slow rebound pillows</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="assets/img/categori/product6.png" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="assets/img/categori/product1.png" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="assets/img/categori/product4.png" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Sleeping orthopedic sciatica Back Hip Joint Pain relief</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="assets/img/categori/product5.png" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="assets/img/categori/product3.png" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Sleeping orthopedic sciatica Back Hip Joint Pain relief</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="assets/img/categori/product2.png" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Geometric striped flower home classy decor</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="assets/img/categori/product1.png" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Geometric striped flower home classy decor</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                    </div>
                    <div class="load_more_btn text-center">
                        <a href="#" class="btn_3">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection