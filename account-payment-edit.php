<!doctype html>
<html lang="en">
  
<!-- Mirrored from yevgenysim.github.io/shopper/account-payment-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jan 2021 07:30:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons -->
    <link rel="icon" href="assets/img/favicons/favicon.ico">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/libs/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/libs/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="assets/libs/highlightjs/styles/vs2015.css">
    <link rel="stylesheet" href="assets/libs/simplebar/dist/simplebar.min.css">
    <link rel="stylesheet" href="assets/libs/flickity-fade/flickity-fade.css">
    <link rel="stylesheet" href="assets/fonts/feather/feather.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154926440-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-154926440-1');

    </script>

    <title>Shopper</title>

  </head>
  <body>

    <!-- MODALS -->
    <!-- Newsletter: Horizontal -->
    <div class="modal fade" id="modalNewsletterHorizontal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

          <!-- Close -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fe fe-x" aria-hidden="true"></i>
          </button>

          <!-- Content -->
          <div class="row no-gutters">
            <div class="col-12 col-lg-5">

              <!-- Image -->
              <img class="img-fluid" src="assets/img/covers/cover-25.jpg" alt="...">

            </div>
            <div class="col-12 col-lg-7 d-flex flex-column px-md-8">

              <!-- Body -->
              <div class="modal-body my-auto py-10">

                <!-- Heading -->
                <h4>Subscribe to Newsletter and get 15% Discount</h4>

                <!-- Text -->
                <p class="mb-7 font-size-lg">
                  On your next purchase
                </p>

                <!-- Form -->
                <form>
                  <div class="form-row">
                    <div class="col">

                      <!-- Input -->
                      <label class="sr-only" for="modalNewsletterHorizontalEmail">Enter Email *</label>
                      <input class="form-control form-control-sm" id="modalNewsletterHorizontalEmail" type="email" placeholder="Enter Email *">

                    </div>
                    <div class="col-auto">

                      <!-- Button -->
                      <button class="btn btn-sm btn-dark" type="submit">
                        <i class="fe fe-send"></i>
                      </button>

                    </div>
                  </div>
                </form>

              </div>

              <!-- Footer -->
              <div class="modal-footer pt-0">

                <!-- Checkbox -->
                <div class="custom-control custom-checkbox">

                  <!-- Input -->
                  <input class="custom-control-input" id="modalNewsletterHorizontalCheckbox" type="checkbox">

                  <!-- Label -->
                  <label class="custom-control-label font-size-xs" for="modalNewsletterHorizontalCheckbox">
                    Prevent this Pop-up
                  </label>

                </div>

              </div>

            </div>
          </div>

        </div>

      </div>
    </div>


    <!-- Newsletter: Vertical -->
    <div class="modal fade" id="modalNewsletterVertical" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

          <!-- Close -->
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <i class="fe fe-x" aria-hidden="true"></i>
          </button>

          <!-- Body -->
          <div class="modal-body mt-2 mr-2 ml-2 py-10 bg-cover text-center text-white" style="background-image: url(assets/img/covers/cover-26.jpg);">

            <!-- Heading -->
            <h4>Subscribe to Newsletter and get 15% Discount</h4>

            <!-- Text -->
            <p class="mb-0 font-size-lg">
              On your next purchase
            </p>

          </div>

          <!-- Body -->
          <div class="modal-body py-9">

            <!-- Form -->
            <form>
              <div class="form-row">
                <div class="col">

                  <!-- Input -->
                  <label class="sr-only" for="modalNewsletterVerticalEmail">Enter Email *</label>
                  <input class="form-control form-control-sm" id="modalNewsletterVerticalEmail" type="email" placeholder="Enter Email *">

                </div>
                <div class="col-auto">

                  <!-- Button -->
                  <button class="btn btn-sm btn-dark" type="submit">
                    Subscribe
                  </button>

                </div>
              </div>
            </form>

          </div>

          <!-- Footer -->
          <div class="modal-footer justify-content-center pt-0">

            <!-- Checkbox -->
            <div class="custom-control custom-checkbox">

              <!-- Input -->
              <input class="custom-control-input" id="modalNewsletterVerticalCheckbox" type="checkbox">

              <!-- Label -->
              <label class="custom-control-label font-size-xs" for="modalNewsletterVerticalCheckbox">
                Prevent this Pop-up
              </label>

            </div>

          </div>

        </div>

      </div>
    </div>


    <!-- Password Reset -->
    <div class="modal fade" id="modalPasswordReset" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

          <!-- Close -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fe fe-x" aria-hidden="true"></i>
          </button>

          <!-- Header-->
          <div class="modal-header line-height-fixed font-size-lg">
            <strong class="mx-auto">Forgot Password?</strong>
          </div>

          <!-- Body -->
          <div class="modal-body text-center">

            <!-- Text -->
            <p class="mb-7 font-size-sm text-gray-500">
              Please enter your Email Address. You will receive a link
              to create a new password via Email.
            </p>

            <!-- Form -->
            <form>

              <!-- Email -->
              <div class="form-group">
                <label class="sr-only" for="modalPasswordResetEmail">
                  Email Address *
                </label>
                <input class="form-control form-control-sm" id="modalPasswordResetEmail" type="email" placeholder="Email Address *" required>
              </div>

              <!-- Button -->
              <button class="btn btn-sm btn-dark">
                Reset Password
              </button>

            </form>

          </div>

        </div>

      </div>
    </div>


    <!-- Product -->
    <div class="modal fade" id="modalProduct" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">

          <!-- Close -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fe fe-x" aria-hidden="true"></i>
          </button>

          <!-- Content -->
          <div class="container-fluid px-xl-0">
            <div class="row align-items-center mx-xl-0">
              <div class="col-12 col-lg-6 col-xl-5 py-4 py-xl-0 px-xl-0">

                <!-- Image -->
                <img class="img-fluid" src="assets/img/products/product-7.jpg" alt="...">

                <!-- Button -->
                <a class="btn btn-sm btn-block btn-primary" href="product.html">
                  More Product Info <i class="fe fe-info ml-2"></i>
                </a>

              </div>
              <div class="col-12 col-lg-6 col-xl-7 py-9 px-md-9">

                <!-- Heading -->
                <h4 class="mb-3">Leather Sneakers</h4>

                <!-- Price -->
                <div class="mb-7">
                  <span class="h5">$85.00</span>
                  <span class="font-size-sm">(In Stock)</span>
                </div>

                <!-- Form -->
                <form>
                  <div class="form-group">

                    <!-- Label -->
                    <p>
                      Color: <strong id="modalProductColorCaption">White</strong>
                    </p>

                    <!-- Radio -->
                    <div class="mb-8 ml-n1">
                      <div class="custom-control custom-control-inline custom-control-img">
                        <input type="radio" class="custom-control-input" id="modalProductColorOne" name="modalProductColor" data-toggle="form-caption" data-target="#modalProductColorCaption" value="White" checked>
                        <label class="custom-control-label" for="modalProductColorOne">
                          <span class="embed-responsive embed-responsive-1by1 bg-cover" style="background-image: url(assets/img/products/product-7.jpg);"></span>
                        </label>
                      </div>
                      <div class="custom-control custom-control-inline custom-control-img">
                        <input type="radio" class="custom-control-input" id="modalProductColorTwo" name="modalProductColor" data-toggle="form-caption" data-target="#modalProductColorCaption" value="Black">
                        <label class="custom-control-label" for="modalProductColorTwo">
                          <span class="embed-responsive embed-responsive-1by1 bg-cover" style="background-image: url(assets/img/products/product-49.jpg);"></span>
                        </label>
                      </div>
                    </div>

                  </div>
                  <div class="form-group">

                    <!-- Label -->
                    <p>
                      Size: <strong><span id="modalProductSizeCaption">7.5</span> US</strong>
                    </p>

                    <!-- Radio -->
                    <div class="mb-2">
                      <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input type="radio" class="custom-control-input" name="modalProductSize" id="modalProductSizeOne" value="6" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="custom-control-label" for="modalProductSizeOne">6</label>
                      </div>
                      <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input type="radio" class="custom-control-input" name="modalProductSize" id="modalProductSizeTwo" value="6.5" data-toggle="form-caption" data-target="#modalProductSizeCaption" disabled>
                        <label class="custom-control-label" for="modalProductSizeTwo">6.5</label>
                      </div>
                      <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input type="radio" class="custom-control-input" name="modalProductSize" id="modalProductSizeThree" value="7" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="custom-control-label" for="modalProductSizeThree">7</label>
                      </div>
                      <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input type="radio" class="custom-control-input" name="modalProductSize" id="modalProductSizeFour" value="7.5" data-toggle="form-caption" data-target="#modalProductSizeCaption" checked>
                        <label class="custom-control-label" for="modalProductSizeFour">7.5</label>
                      </div>
                      <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input type="radio" class="custom-control-input" name="modalProductSize" id="modalProductSizeFive" value="8" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="custom-control-label" for="modalProductSizeFive">8</label>
                      </div>
                      <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input type="radio" class="custom-control-input" name="modalProductSize" id="modalProductSizeSix" value="8.5" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="custom-control-label" for="modalProductSizeSix">8.5</label>
                      </div>
                      <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input type="radio" class="custom-control-input" name="modalProductSize" id="modalProductSizeSeven" value="9" data-toggle="form-caption" data-target="#modalProductSizeCaption" disabled>
                        <label class="custom-control-label" for="modalProductSizeSeven">9</label>
                      </div>
                      <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input type="radio" class="custom-control-input" name="modalProductSize" id="modalProductSizeEight" value="9.5" data-toggle="form-caption" data-target="#modalProductSizeCaption" disabled>
                        <label class="custom-control-label" for="modalProductSizeEight">9.5</label>
                      </div>
                      <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input type="radio" class="custom-control-input" name="modalProductSize" id="modalProductSizeNine" value="10" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="custom-control-label" for="modalProductSizeNine">10</label>
                      </div>
                      <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input type="radio" class="custom-control-input" name="modalProductSize" id="modalProductSizeTen" value="10.5" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="custom-control-label" for="modalProductSizeTen">10.5</label>
                      </div>
                      <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input type="radio" class="custom-control-input" name="modalProductSize" id="modalProductSizeEleven" value="11" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="custom-control-label" for="modalProductSizeEleven">11</label>
                      </div>
                      <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input type="radio" class="custom-control-input" name="modalProductSize" id="modalProductSizeTwelve" value="12" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="custom-control-label" for="modalProductSizeTwelve">12</label>
                      </div>
                      <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input type="radio" class="custom-control-input" name="modalProductSize" id="modalProductSizeThirteen" value="13" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="custom-control-label" for="modalProductSizeThirteen">13</label>
                      </div>
                      <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input type="radio" class="custom-control-input" name="modalProductSize" id="modalProductSizeFourteen" value="14" data-toggle="form-caption" data-target="#modalProductSizeCaption">
                        <label class="custom-control-label" for="modalProductSizeFourteen">14</label>
                      </div>
                    </div>

                  </div>
                  <div class="form-group mb-0">
                    <div class="form-row">
                      <div class="col-12 col-lg-auto">

                        <!-- Quantity -->
                        <select class="custom-select mb-2">
                          <option value="1" selected>1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>

                      </div>
                      <div class="col-12 col-lg">

                        <!-- Submit -->
                        <button type="submit" class="btn btn-block btn-dark mb-2">
                          Add to Cart <i class="fe fe-shopping-cart ml-2"></i>
                        </button>

                      </div>
                      <div class="col-12 col-lg-auto">

                        <!-- Wishlist -->
                        <button class="btn btn-outline-dark btn-block mb-2" data-toggle="button">
                          Wishlist <i class="fe fe-heart ml-2"></i>
                        </button>

                      </div>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <!-- Search -->
    <div class="modal fixed-right fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">

          <!-- Close -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fe fe-x" aria-hidden="true"></i>
          </button>

          <!-- Header-->
          <div class="modal-header line-height-fixed font-size-lg">
            <strong class="mx-auto">Search Products</strong>
          </div>

          <!-- Body: Form -->
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label class="sr-only" for="modalSearchCategories">Categories:</label>
                <select class="custom-select" id="modalSearchCategories">
                  <option selected>All Categories</option>
                  <option>Women</option>
                  <option>Men</option>
                  <option>Kids</option>
                </select>
              </div>
              <div class="input-group input-group-merge">
                <input class="form-control" type="search" placeholder="Search">
                <div class="input-group-append">
                  <button class="btn btn-outline-border" type="submit">
                    <i class="fe fe-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>

          <!-- Body: Results (add `.d-none` to disable it) -->
          <div class="modal-body border-top font-size-sm">

            <!-- Heading -->
            <p>Search Results:</p>

            <!-- Items -->
            <div class="row align-items-center position-relative mb-5">
              <div class="col-4 col-md-3">

                <!-- Image -->
                <img class="img-fluid" src="assets/img/products/product-5.jpg" alt="...">

              </div>
              <div class="col position-static">

                <!-- Text -->
                <p class="mb-0 font-weight-bold">
                  <a class="stretched-link text-body" href="product.html">Leather mid-heel Sandals</a> <br>
                  <span class="text-muted">$129.00</span>
                </p>

              </div>
            </div>
            <div class="row align-items-center position-relative mb-5">
              <div class="col-4 col-md-3">

                <!-- Image -->
                <img class="img-fluid" src="assets/img/products/product-6.jpg" alt="...">

              </div>
              <div class="col position-static">

                <!-- Text -->
                <p class="mb-0 font-weight-bold">
                  <a class="stretched-link text-body" href="product.html">Cotton floral print Dress</a> <br>
                  <span class="text-muted">$40.00</span>
                </p>

              </div>
            </div>
            <div class="row align-items-center position-relative mb-5">
              <div class="col-4 col-md-3">

                <!-- Image -->
                <img class="img-fluid" src="assets/img/products/product-7.jpg" alt="...">

              </div>
              <div class="col position-static">

                <!-- Text -->
                <p class="mb-0 font-weight-bold">
                  <a class="stretched-link text-body" href="product.html">Leather Sneakers</a> <br>
                  <span class="text-primary">$85.00</span>
                </p>

              </div>
            </div>
            <div class="row align-items-center position-relative mb-5">
              <div class="col-4 col-md-3">

                <!-- Image -->
                <img class="img-fluid" src="assets/img/products/product-8.jpg" alt="...">

              </div>
              <div class="col position-static">

                <!-- Text -->
                <p class="mb-0 font-weight-bold">
                  <a class="stretched-link text-body" href="product.html">Cropped cotton Top</a> <br>
                  <span class="text-muted">$29.00</span>
                </p>

              </div>
            </div>
            <div class="row align-items-center position-relative mb-5">
              <div class="col-4 col-md-3">

                <!-- Image -->
                <img class="img-fluid" src="assets/img/products/product-9.jpg" alt="...">

              </div>
              <div class="col position-static">

                <!-- Text -->
                <p class="mb-0 font-weight-bold">
                  <a class="stretched-link text-body" href="product.html">Floral print midi Dress</a> <br>
                  <span class="text-muted">$50.00</span>
                </p>

              </div>
            </div>

            <!-- Button -->
            <a class="btn btn-link px-0 text-reset" href="shop.html">
              View All <i class="fe fe-arrow-right ml-2"></i>
            </a>

          </div>

          <!-- Body: Empty (remove `.d-none` to disable it) -->
          <div class="d-none modal-body">

            <!-- Text -->
            <p class="mb-3 font-size-sm text-center">
              Nothing matches your search
            </p>
            <p class="mb-0 font-size-sm text-center">
              😞
            </p>

          </div>

        </div>
      </div>
    </div>


    <!-- Shopping Cart -->
    <div class="modal fixed-right fade" id="modalShoppingCart" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">

        <!-- Full cart (add `.d-none` to disable it) -->
        <div class="modal-content">

          <!-- Close -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fe fe-x" aria-hidden="true"></i>
          </button>

          <!-- Header-->
          <div class="modal-header line-height-fixed font-size-lg">
            <strong class="mx-auto">Your Cart (2)</strong>
          </div>

          <!-- List group -->
          <ul class="list-group list-group-lg list-group-flush">
            <li class="list-group-item">
              <div class="row align-items-center">
                <div class="col-4">

                  <!-- Image -->
                  <a href="product.html">
                    <img class="img-fluid" src="assets/img/products/product-6.jpg" alt="...">
                  </a>

                </div>
                <div class="col-8">

                  <!-- Title -->
                  <p class="font-size-sm font-weight-bold mb-6">
                    <a class="text-body" href="product.html">Cotton floral print Dress</a> <br>
                    <span class="text-muted">$40.00</span>
                  </p>

                  <!--Footer -->
                  <div class="d-flex align-items-center">

                    <!-- Select -->
                    <select class="custom-select custom-select-xxs w-auto">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                    </select>

                    <!-- Remove -->
                    <a class="font-size-xs text-gray-400 ml-auto" href="#!">
                      <i class="fe fe-x"></i> Remove
                    </a>

                  </div>

                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row align-items-center">
                <div class="col-4">

                  <!-- Image -->
                  <a href="product.html">
                    <img class="img-fluid" src="assets/img/products/product-10.jpg" alt="...">
                  </a>

                </div>
                <div class="col-8">

                  <!-- Title -->
                  <p class="font-size-sm font-weight-bold mb-6">
                    <a class="text-body" href="product.html">Suede cross body Bag</a> <br>
                    <span class="text-muted">$49.00</span>
                  </p>

                  <!--Footer -->
                  <div class="d-flex align-items-center">

                    <!-- Select -->
                    <select class="custom-select custom-select-xxs w-auto">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                    </select>

                    <!-- Remove -->
                    <a class="font-size-xs text-gray-400 ml-auto" href="#!">
                      <i class="fe fe-x"></i> Remove
                    </a>

                  </div>

                </div>
              </div>
            </li>
          </ul>

          <!-- Footer -->
          <div class="modal-footer line-height-fixed font-size-sm bg-light mt-auto">
            <strong>Subtotal</strong> <strong class="ml-auto">$89.00</strong>
          </div>

          <!-- Buttons -->
          <div class="modal-body">
            <a class="btn btn-block btn-dark" href="checkout.html">Continue to Checkout</a>
            <a class="btn btn-block btn-outline-dark" href="shopping-cart.html">View Cart</a>
          </div>

        </div>

        <!-- Empty cart (remove `.d-none` to enable it) -->
        <div class="modal-content d-none">

          <!-- Close -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fe fe-x" aria-hidden="true"></i>
          </button>

          <!-- Header-->
          <div class="modal-header line-height-fixed font-size-lg">
            <strong class="mx-auto">Your Cart (0)</strong>
          </div>

          <!-- Body -->
          <div class="modal-body flex-grow-0 my-auto">

            <!-- Heading -->
            <h6 class="mb-7 text-center">Your cart is empty 😞</h6>

            <!-- Button -->
            <a class="btn btn-block btn-outline-dark" href="#!">
              Continue Shopping
            </a>

          </div>

        </div>

      </div>
    </div>


    <!-- Sidebar -->
    <div class="modal fixed-right fade" id="modalSidebar" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">

          <!-- Close -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fe fe-x" aria-hidden="true"></i>
          </button>

          <!-- Body -->
          <div class="modal-body px-10 my-auto">

            <!-- Nav -->
            <ul class="nav nav-vertical nav-unstyled font-size-h2" id="sidebarNav">
              <li class="nav-item">

                <!-- Toggle -->
                <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#sidebarHome">
                  Home
                </a>

                <!-- Collapse -->
                <div class="collapse" id="sidebarHome" data-parent="#sidebarNav">
                  <ul class="list-styled font-size-lg py-3 mb-0">
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="index-2.html">Default</a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="index-classic.html">Classic</a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="index-fashion.html">Fashion</a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="index-boxed.html">Boxed</a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="index-simple.html">Simple</a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="index-asymmetric.html">Asymmetric</a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="index-sidenav.html">Sidenav</a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="index-landing.html">Landing</a>
                    </li>
                  </ul>
                </div>

              </li>
              <li class="nav-item">

                <!-- Toggle -->
                <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#sidebarCatalog">
                  Catalog
                </a>

                <!-- Collapse -->
                <div class="collapse" id="sidebarCatalog" data-parent="#sidebarNav">
                  <div class="row">
                    <div class="col-12 py-3">

                      <!-- Heading -->
                      <h6 class="mb-5 font-weight-bold">Clothing</h6>

                      <!-- Links -->
                      <ul class="list-styled font-size-lg py-3">
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">All Clothing</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Blouses & Shirts</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Coats & Jackets</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Dresses</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Hoodies & Sweats</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Denim</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Jeans</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Jumpers & Cardigans</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Leggings</a>
                        </li>
                      </ul>

                    </div>
                    <div class="col-12 py-3">

                      <!-- Heading -->
                      <h6 class="mb-5 font-weight-bold">Shoes & Boots</h6>

                      <!-- Links -->
                      <ul class="list-styled font-size-lg">
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">All Shoes & Boots</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Branded Shoes</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Boots</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Heels</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Trainers</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Sandals</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Shoes</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Wide Fit Shoes</a>
                        </li>
                      </ul>

                    </div>
                    <div class="col-12 py-3">

                      <!-- Heading -->
                      <h6 class="mb-5 font-weight-bold">Bags & Accessories</h6>

                      <!-- Links -->
                      <ul class="list-styled font-size-lg">
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">All Bags & Accessories</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Accessories</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Bags & Purses</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Luggage</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Belts</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Hats</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Hair Accessories</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Jewellery</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Travel Accessories</a>
                        </li>
                      </ul>

                    </div>
                  </div>
                </div>

              </li>
              <li class="nav-item">

                <!-- Toggle -->
                <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#sidebarShop">
                  Shop
                </a>

                <!-- Collapse -->
                <div class="collapse" id="sidebarShop" data-parent="#sidebarNav">
                  <div class="row">
                    <div class="col-12 py-3">

                      <!-- Heading -->
                      <h6 class="mb-5">Shop</h6>

                      <!-- Links -->
                      <ul class="list-styled font-size-lg">
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop.html">Default</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop-topbar.html">Topbar</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop-collapse.html">Collapse</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop-simple.html">Simple</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shop-masonry.html">Masonry</a>
                        </li>
                      </ul>

                    </div>
                    <div class="col-12 py-3">

                      <!-- Heading -->
                      <h6 class="mb-5">Product</h6>

                      <!-- Links -->
                      <ul class="list-styled font-size-lg">
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="product.html">Default</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="product-images-left.html">Images Left</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="product-image-grid.html">Image Grid</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="product-image-slider.html">Image Slider</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="product-images-stacked.html">Images Stacked</a>
                        </li>
                      </ul>

                    </div>
                    <div class="col-12 py-3">

                      <!-- Heading -->
                      <h6 class="mb-5">Support</h6>

                      <!-- Links -->
                      <ul class="list-styled font-size-lg">
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shopping-cart.html">Shopping Cart</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="checkout.html">Checkout</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="order-completed.html">Order Completed</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="shipping-and-returns.html">Shipping & Returns</a>
                        </li>
                      </ul>

                    </div>
                    <div class="col-12 py-3">

                      <!-- Heading -->
                      <h6 class="mb-5">Account</h6>

                      <!-- Links -->
                      <ul class="list-styled font-size-lg">
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="account-order.html">Order</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="account-orders.html">Orders</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="account-wishlist.html">Wishlist</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="account-personal-info.html">Personal Info</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="account-address.html">Addresses</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="account-address-edit.html">Addresses: New</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="account-payment.html">Payment</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="account-payment-edit.html">Payment: New</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="account-payment-choose.html">Payment: Choose</a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" href="auth.html">Auth</a>
                        </li>
                      </ul>

                    </div>
                    <div class="col-12 py-3">

                      <!-- Heading -->
                      <h6 class="mb-5">Modals</h6>

                      <!-- Links -->
                      <ul class="list-styled font-size-lg">
                        <li class="list-styled-item">
                          <a class="list-styled-link" data-toggle="modal" href="#modalNewsletterHorizontal">
                            Newsletter: Horizontal
                          </a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" data-toggle="modal" href="#modalNewsletterVertical">
                            Newsletter: Vertical
                          </a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" data-toggle="modal" href="#modalProduct">
                            Product
                          </a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" data-toggle="modal" href="#modalSearch">
                            Search
                          </a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" data-toggle="modal" href="#modalShoppingCart">
                            Shopping Cart
                          </a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" data-toggle="modal" href="#modalSizeChart">
                            Size Chart
                          </a>
                        </li>
                        <li class="list-styled-item">
                          <a class="list-styled-link" data-toggle="modal" href="#modalWaitList">
                            Wait List
                          </a>
                        </li>
                      </ul>

                    </div>
                  </div>
                </div>

              </li>
              <li class="nav-item">

                <!-- Toggle -->
                <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#sidebarPages">
                  Pages
                </a>

                <!-- Collapse -->
                <div class="collapse" id="sidebarPages" data-parent="#sidebarNav">
                  <ul class="list-styled font-size-lg py-3 mb-0">
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="about.html">About</a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="contact-us.html">Contact Us</a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="store-locator.html">Store Locator</a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="faq.html">FAQ</a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="coming-soon.html">Coming Soon</a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="404.html">404</a>
                    </li>
                  </ul>
                </div>

              </li>
              <li class="nav-item">

                <!-- Toggle -->
                <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#sidebarBlog">
                  Blog
                </a>

                <!-- Collapse -->
                <div class="collapse" id="sidebarBlog" data-parent="#sidebarNav">
                  <ul class="list-styled font-size-lg py-3 mb-0">
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="blog.html">Blog</a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="blog-post.html">Blog Post</a>
                    </li>
                  </ul>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="docs/getting-started.html">Docs</a>
              </li>
            </ul>

          </div>

          <!-- Body -->
          <div class="moda-body px-10 py-9">

            <!-- Social links -->
            <ul class="list-inline">
              <li class="list-inline-item">
                <a class="text-gray-350" href="#!">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="text-gray-350" href="#!">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="text-gray-350" href="#!">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="text-gray-350" href="#!">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="text-gray-350" href="#!">
                  <i class="fab fa-medium-m"></i>
                </a>
              </li>
            </ul>

            <!-- Footer -->
            <div class="font-size-xxs text-gray-350">
              © 2019 All rights reserved. Designed by Unvab.
            </div>

          </div>

        </div>
      </div>
    </div>


    <!-- Size Chart -->
    <div class="modal fade" id="modalSizeChart" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

          <!-- Close -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fe fe-x" aria-hidden="true"></i>
          </button>

          <!-- Header-->
          <div class="modal-header line-height-fixed font-size-lg">
            <strong class="mx-auto">Size Chart</strong>
          </div>

          <!-- Body -->
          <div class="modal-body border-bottom">

            <!-- Header -->
            <div class="d-flex mb-7">

              <!-- Heading -->
              <h5 class="mb-0">Clothing</h5>

              <!-- Toggles -->
              <div class="btn-group btn-group-toggle ml-auto" data-toggle="buttons">
                <label class="btn btn-xxs btn-circle btn-outline-dark font-size-xxxs rounded-0 active">
                  <input type="radio" name="modalSizeChartUnitOne" checked> IN
                </label>
                <label class="btn btn-xxs btn-circle btn-outline-dark font-size-xxxs rounded-0 ml-2">
                  <input type="radio" name="modalSizeChartUnitOne"> CM
                </label>
              </div>

            </div>

            <!-- Table -->
            <div class="table-responsive">
              <table class="table table-bordered table-sm table-hover mb-0">
                <thead>
                  <tr>
                    <th>Size</th>
                    <th>US</th>
                    <th>Bust</th>
                    <th>Waist</th>
                    <th>Hips</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>XS</td>
                    <td>2</td>
                    <td>32</td>
                    <td>24 - 25</td>
                    <td>33 - 34</td>
                  </tr>
                  <tr>
                    <td>S</td>
                    <td>4</td>
                    <td>34 - 35</td>
                    <td>26 - 27</td>
                    <td>35 - 26</td>
                  </tr>
                  <tr>
                    <td>M</td>
                    <td>6</td>
                    <td>36 - 37</td>
                    <td>28 - 29</td>
                    <td>38 - 40</td>
                  </tr>
                  <tr>
                    <td>L</td>
                    <td>8</td>
                    <td>38 - 29</td>
                    <td>30 - 31</td>
                    <td>42 - 44</td>
                  </tr>
                  <tr>
                    <td>XL</td>
                    <td>10</td>
                    <td>40 - 41</td>
                    <td>32 - 33</td>
                    <td>45 - 47</td>
                  </tr>
                  <tr>
                    <td>XXL</td>
                    <td>12</td>
                    <td>42 - 43</td>
                    <td>34 - 35</td>
                    <td>48 - 50</td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>

          <!-- Body -->
          <div class="modal-body">

            <!-- Header -->
            <div class="d-flex mb-7">

              <!-- Heading -->
              <h5 class="mb-0">Shoes</h5>

              <!-- Toggles -->
              <div class="btn-group btn-group-toggle ml-auto" data-toggle="buttons">
                <label class="btn btn-xxs btn-circle btn-outline-dark font-size-xxxs rounded-0 active">
                  <input type="radio" name="modalSizeCharUnitTwo" checked> IN
                </label>
                <label class="btn btn-xxs btn-circle btn-outline-dark font-size-xxxs rounded-0 ml-2">
                  <input type="radio" name="modalSizeCharUnitTwo"> CM
                </label>
              </div>

            </div>

            <!-- Tables -->
            <div class="row">
              <div class="col-12 col-lg-6">

                <!-- Table -->
                <div class="table-responsive">
                  <table class="table table-bordered table-sm table-hover mb-lg-0">
                    <thead>
                      <tr>
                        <th>Size</th>
                        <th>US</th>
                        <th>Foot Length</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>36</td>
                        <td>5</td>
                        <td>22.8</td>
                      </tr>
                      <tr>
                        <td>26.5</td>
                        <td>5.5</td>
                        <td>23.1</td>
                      </tr>
                      <tr>
                        <td>37</td>
                        <td>6</td>
                        <td>23.5</td>
                      </tr>
                      <tr>
                        <td>37.5</td>
                        <td>6.</td>
                        <td>23.5</td>
                      </tr>
                      <tr>
                        <td>38</td>
                        <td>7</td>
                        <td>24.1</td>
                      </tr>
                      <tr>
                        <td>38.5</td>
                        <td>7.5</td>
                        <td>24.5</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
              <div class="col-12 col-lg-6">

                <!-- Table -->
                <div class="table-responsive">
                  <table class="table table-bordered table-sm table-hover mb-0">
                    <thead>
                      <tr>
                        <th>Size</th>
                        <th>US</th>
                        <th>Foot Length</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>36</td>
                        <td>5</td>
                        <td>22.8</td>
                      </tr>
                      <tr>
                        <td>39</td>
                        <td>8</td>
                        <td>24.1</td>
                      </tr>
                      <tr>
                        <td>40</td>
                        <td>9</td>
                        <td>25.4</td>
                      </tr>
                      <tr>
                        <td>40.5</td>
                        <td>9.5</td>
                        <td>25.7</td>
                      </tr>
                      <tr>
                        <td>41</td>
                        <td>10</td>
                        <td>26.0</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>

          </div>

        </div>

      </div>
    </div>


    <!-- Wait List -->
    <div class="modal fade" id="modalWaitList" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

          <!-- Close -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fe fe-x" aria-hidden="true"></i>
          </button>

          <!-- Header-->
          <div class="modal-header line-height-fixed font-size-lg">
            <strong class="mx-auto">Wait List</strong>
          </div>

          <!-- Body -->
          <div class="modal-body">
            <div class="row mb-6">
              <div class="col-12 col-md-3">

                <!-- Image -->
                <a href="product.html">
                  <img class="img-fluid mb-7 mb-md-0" src="assets/img/products/product-6.jpg" alt="...">
                </a>

              </div>
              <div class="col-12 col-md-9">

                <!-- Label -->
                <p>
                  <a class="font-weight-bold text-body" href="product.html">Cotton floral print Dress</a>
                </p>

                <!-- Radio -->
                <div class="custom-control custom-control-inline custom-control-size mb-2">
                  <input type="radio" class="custom-control-input" name="modalWaitListSize" id="modalWaitListSizeOne" value="6" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
                  <label class="custom-control-label" for="modalWaitListSizeOne">3XS</label>
                </div>
                <div class="custom-control custom-control-inline custom-control-size mb-2">
                  <input type="radio" class="custom-control-input" name="modalWaitListSize" id="modalWaitListSizeTwo" value="6.5" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
                  <label class="custom-control-label" for="modalWaitListSizeTwo">2XS</label>
                </div>
                <div class="custom-control custom-control-inline custom-control-size mb-2">
                  <input type="radio" class="custom-control-input" name="modalWaitListSize" id="modalWaitListSizeThree" value="7" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
                  <label class="custom-control-label" for="modalWaitListSizeThree">XS</label>
                </div>
                <div class="custom-control custom-control-inline custom-control-size mb-2">
                  <input type="radio" class="custom-control-input" name="modalWaitListSize" id="modalWaitListSizeFour" value="7.5" data-toggle="form-caption" data-target="#modalWaitListSizeCaption" checked>
                  <label class="custom-control-label" for="modalWaitListSizeFour">S</label>
                </div>
                <div class="custom-control custom-control-inline custom-control-size mb-2">
                  <input type="radio" class="custom-control-input" name="modalWaitListSize" id="modalWaitListSizeFive" value="8" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
                  <label class="custom-control-label" for="modalWaitListSizeFive">M</label>
                </div>
                <div class="custom-control custom-control-inline custom-control-size mb-2">
                  <input type="radio" class="custom-control-input" name="modalWaitListSize" id="modalWaitListSizeSix" value="8.5" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
                  <label class="custom-control-label" for="modalWaitListSizeSix">LG</label>
                </div>
                <div class="custom-control custom-control-inline custom-control-size mb-2">
                  <input type="radio" class="custom-control-input" name="modalWaitListSize" id="modalWaitListSizeSeven" value="9" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
                  <label class="custom-control-label" for="modalWaitListSizeSeven">XL</label>
                </div>
                <div class="custom-control custom-control-inline custom-control-size mb-2">
                  <input type="radio" class="custom-control-input" name="modalWaitListSize" id="modalWaitListSizeEight" value="9.5" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
                  <label class="custom-control-label" for="modalWaitListSizeEight">2XL</label>
                </div>
                <div class="custom-control custom-control-inline custom-control-size mb-2">
                  <input type="radio" class="custom-control-input" name="modalWaitListSize" id="modalWaitListSizeNine" value="10" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
                  <label class="custom-control-label" for="modalWaitListSizeNine">3XL</label>
                </div>
                <div class="custom-control custom-control-inline custom-control-size mb-2">
                  <input type="radio" class="custom-control-input" name="modalWaitListSize" id="modalWaitListSizeTen" value="10.5" data-toggle="form-caption" data-target="#modalWaitListSizeCaption">
                  <label class="custom-control-label" for="modalWaitListSizeTen">4XL</label>
                </div>

              </div>

            </div>
            <div class="row">
              <div class="col-12">

                <!-- Text -->
                <p class="font-size-sm text-center text-gray-500">
                  Justo ut diam erat hendrerit morbi porttitor,
                  per eu curabitur diam sociis.
                </p>

              </div>
            </div>
            <div class="form-row mb-2">
              <div class="col-12 col-md-6">

                <!-- Form group -->
                <div class="form-group">
                  <label class="sr-only" for="listName">Your Name</label>
                  <input class="form-control" id="listName" type="text" placeholder="Your Name *" required>
                </div>

              </div>
              <div class="col-12 col-md-6">

                <!-- Form group -->
                <div class="form-group">
                  <label class="sr-only" for="listEmail">Your Name</label>
                  <input class="form-control" id="listEmail" type="email" placeholder="Your Email *" required>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-12 text-center">

                <!-- Button -->
                <button class="btn btn-dark" type="submit">Subscribe</button>

              </div>
            </div>
          </div>

        </div>

      </div>
    </div>



    <!-- NAVBAR -->
    <div class="navbar navbar-topbar navbar-expand-xl navbar-light bg-light">
      <div class="container">

        <!-- Promo -->
        <div class="mr-xl-8">
          <i class="fe fe-truck mr-2"></i> <span class="heading-xxxs">Free shipping worldwide</span>
        </div>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topbarCollapse" aria-controls="topbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="topbarCollapse">

          <!-- Nav -->
          <ul class="nav nav-divided navbar-nav mr-auto">
            <li class="nav-item dropdown">

              <!-- Toggle -->
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                <img class="mb-1 mr-1" src="assets/img/flags/usa.svg" alt="..." /> United States
              </a>

              <!-- Menu -->
              <div class="dropdown-menu minw-0">
                <a class="dropdown-item" href="#!">
                  <img class="mb-1 mr-2" src="assets/img/flags/usa.svg" alt="USA">United States
                </a>
                <a class="dropdown-item" href="#!">
                  <img class="mb-1 mr-2" src="assets/img/flags/canada.svg" alt="Canada">Canada
                </a>
                <a class="dropdown-item" href="#!">
                  <img class="mb-1 mr-2" src="assets/img/flags/germany.svg" alt="Germany">Germany
                </a>
              </div>

            </li>
            <li class="nav-item dropdown">

              <!-- Toggle -->
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">USD</a>

              <!-- Menu -->
              <div class="dropdown-menu minw-0">
                <a class="dropdown-item" href="#!">USD</a>
                <a class="dropdown-item" href="#!">EUR</a>
              </div>

            </li>
            <li class="nav-item dropdown">

              <!-- Toggle -->
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">English</a>

              <!-- Menu -->
              <div class="dropdown-menu minw-0">
                <a class="dropdown-item" href="#">English</a>
                <a class="dropdown-item" href="#">French</a>
                <a class="dropdown-item" href="#">German</a>
              </div>

            </li>
          </ul>

          <!-- Nav -->
          <ul class="nav navbar-nav mr-8">
            <li class="nav-item">
              <a class="nav-link" href="shipping-and-returns.html">Shipping</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.html">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-us.html">Contact</a>
            </li>
          </ul>

          <!-- Nav -->
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item">
              <a class="nav-link text-gray-350" href="#!">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item ml-xl-n4">
              <a class="nav-link text-gray-350" href="#!">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item ml-xl-n4">
              <a class="nav-link text-gray-350" href="#!">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="nav-item ml-xl-n4">
              <a class="nav-link text-gray-350" href="#!">
                <i class="fab fa-medium"></i>
              </a>
            </li>
          </ul>

        </div>
      </div>
    </div>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="overview.html">
          Shopper.
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Nav -->
          <ul class="navbar-nav mx-auto">
            <li class="nav-item dropdown">

              <!-- Toggle -->
              <a class="nav-link" data-toggle="dropdown" href="#">Home</a>

              <!-- Menu -->
              <div class="dropdown-menu">
                <div class="card card-lg">
                  <div class="card-body">
                    <ul class="list-styled font-size-sm">
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="index-2.html">Default</a>
                      </li>
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="index-classic.html">Classic</a>
                      </li>
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="index-fashion.html">Fashion</a>
                      </li>
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="index-boxed.html">Boxed</a>
                      </li>
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="index-simple.html">Simple</a>
                      </li>
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="index-asymmetric.html">Asymmetric</a>
                      </li>
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="index-sidenav.html">Sidenav</a>
                      </li>
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="index-landing.html">Landing</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>


            </li>
            <li class="nav-item dropdown position-static">

              <!-- Toggle -->
              <a class="nav-link" data-toggle="dropdown" href="#">Catalog</a>

              <!-- Menu -->
              <div class="dropdown-menu w-100">

                <!-- Tabs -->
                <form class="mb-2 mb-lg-0 border-bottom-lg">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">

                        <!-- Nav -->
                        <nav class="nav nav-tabs nav-overflow font-size-xs border-bottom border-bottom-lg-0">
                          <a class="nav-link text-uppercase active" data-toggle="tab" href="#navTab">
                            Women
                          </a>
                          <a class="nav-link text-uppercase" data-toggle="tab" href="#navTab">
                            Men
                          </a>
                          <a class="nav-link text-uppercase" data-toggle="tab" href="#navTab">
                            Kids
                          </a>
                        </nav>

                      </div>
                    </div>
                  </div>
                </form>

                <!-- Tab content -->
                <div class="card card-lg">
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="navTab">
                        <div class="container">
                          <div class="row">
                            <div class="col-6 col-md">

                              <!-- Heading -->
                              <div class="mb-5 font-weight-bold">Clothing</div>

                              <!-- Links -->
                              <ul class="list-styled mb-6 mb-md-0 font-size-sm">
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">All Clothing</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Blouses & Shirts</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Coats & Jackets</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Dresses</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Hoodies & Sweats</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Denim</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Jeans</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Jumpers & Cardigans</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Leggings</a>
                                </li>
                              </ul>

                            </div>
                            <div class="col-6 col-md">

                              <!-- Heading -->
                              <div class="mb-5 font-weight-bold">Shoes & Boots</div>

                              <!-- Links -->
                              <ul class="list-styled mb-6 mb-md-0 font-size-sm">
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">All Shoes & Boots</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Branded Shoes</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Boots</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Heels</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Trainers</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Sandals</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Shoes</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Wide Fit Shoes</a>
                                </li>
                              </ul>

                            </div>
                            <div class="col-6 col-md">

                              <!-- Heading -->
                              <div class="mb-5 font-weight-bold">Bags & Accessories</div>

                              <!-- Links -->
                              <ul class="list-styled mb-0 font-size-sm">
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">All Bags & Accessories</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Accessories</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Bags & Purses</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Luggage</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Belts</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Hats</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Hair Accessories</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Jewellery</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Travel Accessories</a>
                                </li>
                              </ul>

                            </div>
                            <div class="col-6 col-md">

                              <!-- Heading -->
                              <div class="mb-5 font-weight-bold">Collections</div>

                              <!-- Links -->
                              <ul class="list-styled mb-0 font-size-sm">
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">All Collections</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Occasionwear</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Going Out</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Workwear</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Holiday Shop</a>
                                </li>
                                <li class="list-styled-item">
                                  <a class="list-styled-link" href="shop.html">Jean Fit Guide</a>
                                </li>
                              </ul>

                            </div>
                            <div class="col-4 d-none d-lg-block">

                              <!-- Card -->
                              <div class="card">

                                <!-- Image -->
                                <img class="card-img" src="assets/img/products/product-110.jpg" alt="...">

                                <!-- Overlay -->
                                <div class="card-img-overlay bg-dark-0 bg-hover align-items-center">
                                  <div class="text-center">
                                    <a class="btn btn-white stretched-link" href="shop.html">
                                      Shop Sweaters <i class="fe fe-arrow-right ml-2"></i>
                                    </a>
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

              </div>


            </li>
            <li class="nav-item dropdown">

              <!-- Toggle -->
              <a class="nav-link" data-toggle="dropdown" href="#">Shop</a>

              <!-- Menu -->
              <div class="dropdown-menu" style="min-width: 650px;">
                <div class="card card-lg">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">

                        <!-- Heading -->
                        <div class="mb-5 font-weight-bold">Shop</div>

                        <!-- Links -->
                        <ul class="list-styled mb-7 font-size-sm">
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="shop.html">Default</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="shop-topbar.html">Topbar</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="shop-collapse.html">Collapse</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="shop-simple.html">Simple</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="shop-masonry.html">Masonry</a>
                          </li>
                        </ul>

                        <!-- Heading -->
                        <div class="mb-5 font-weight-bold">Product</div>

                        <!-- Links -->
                        <ul class="list-styled font-size-sm">
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="product.html">Default</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="product-images-left.html">Images Left</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="product-image-grid.html">Image Grid</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="product-image-slider.html">Image Slider</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="product-images-stacked.html">Images Stacked</a>
                          </li>
                        </ul>

                      </div>
                      <div class="col">

                        <!-- Heading -->
                        <div class="mb-5 font-weight-bold">Support</div>

                        <!-- Links -->
                        <ul class="list-styled mb-7 font-size-sm">
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="shopping-cart.html">Shopping Cart</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="checkout.html">Checkout</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="order-completed.html">Order Completed</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="shipping-and-returns.html">Shipping & Returns</a>
                          </li>
                        </ul>

                        <!-- Heading -->
                        <div class="mb-5 font-weight-bold">Account</div>

                        <!-- Links -->
                        <ul class="list-styled font-size-sm">
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="account-order.html">Order</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="account-orders.html">Orders</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="account-wishlist.html">Wishlist</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="account-personal-info.html">Personal Info</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="account-address.html">Addresses</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="account-address-edit.html">Addresses: New</a>
                          </li>
                        </ul>

                      </div>
                      <div class="col">

                        <!-- Links -->
                        <ul class="list-styled mb-7 font-size-sm">
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="account-payment.html">Payment</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="account-payment-edit.html">Payment: New</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="account-payment-choose.html">Payment: Choose</a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" href="auth.html">Auth</a>
                          </li>
                        </ul>

                        <!-- Heading -->
                        <div class="mb-5 font-weight-bold">Modals</div>

                        <!-- Links -->
                        <ul class="list-styled font-size-sm">
                          <li class="list-styled-item">
                            <a class="list-styled-link" data-toggle="modal" href="#modalNewsletterHorizontal">
                              Newsletter: Horizontal
                            </a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" data-toggle="modal" href="#modalNewsletterVertical">
                              Newsletter: Vertical
                            </a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" data-toggle="modal" href="#modalProduct">
                              Product
                            </a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" data-toggle="modal" href="#modalSearch">
                              Search
                            </a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" data-toggle="modal" href="#modalShoppingCart">
                              Shopping Cart
                            </a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" data-toggle="modal" href="#modalSizeChart">
                              Size Chart
                            </a>
                          </li>
                          <li class="list-styled-item">
                            <a class="list-styled-link" data-toggle="modal" href="#modalWaitList">
                              Wait List
                            </a>
                          </li>
                        </ul>

                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </li>
            <li class="nav-item dropdown">

              <!-- Toggle -->
              <a class="nav-link" data-toggle="dropdown" href="#">Pages</a>

              <!-- Menu -->
              <div class="dropdown-menu">
                <div class="card card-lg">
                  <div class="card-body">
                    <ul class="list-styled font-size-sm">
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="about.html">About</a>
                      </li>
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="contact-us.html">Contact Us</a>
                      </li>
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="store-locator.html">Store Locator</a>
                      </li>
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="faq.html">FAQ</a>
                      </li>
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="coming-soon.html">Coming Soon</a>
                      </li>
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="404.html">404</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>


            </li>
            <li class="nav-item dropdown">

              <!-- Toggle -->
              <a class="nav-link" data-toggle="dropdown" href="#">Blog</a>

              <!-- Menu -->
              <div class="dropdown-menu">
                <div class="card card-lg">
                  <div class="card-body">
                    <ul class="list-styled font-size-sm">
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="blog.html">Blog</a>
                      </li>
                      <li class="list-styled-item">
                        <a class="list-styled-link" href="blog-post.html">Blog Post</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>


            </li>
            <li class="nav-item">
              <a class="nav-link" href="docs/getting-started.html">Docs</a>
            </li>
          </ul>

          <!-- Nav -->
          <ul class="navbar-nav flex-row">
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" href="#modalSearch">
                <i class="fe fe-search"></i>
              </a>
            </li>
            <li class="nav-item ml-lg-n4">
              <a class="nav-link" href="account-orders.html">
                <i class="fe fe-user"></i>
              </a>
            </li>
            <li class="nav-item ml-lg-n4">
              <a class="nav-link" href="account-wishlist.html">
                <i class="fe fe-heart"></i>
              </a>
            </li>
            <li class="nav-item ml-lg-n4">
              <a class="nav-link" data-toggle="modal" href="#modalShoppingCart">
                <span data-cart-items="2">
                  <i class="fe fe-shopping-cart"></i>
                </span>
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>


    <!-- BREADCRUMB -->
    <nav class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-12">

            <!-- Breadcrumb -->
            <ol class="breadcrumb mb-0 font-size-xs text-gray-400">
              <li class="breadcrumb-item">
                <a class="text-gray-400" href="index-2.html">Home</a>
              </li>
              <li class="breadcrumb-item active">
                My Account
              </li>
            </ol>

          </div>
        </div>
      </div>
    </nav>

    <!-- CONTENT -->
    <section class="pt-7 pb-12">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">

            <!-- Heading -->
            <h3 class="mb-10">My Account</h3>

          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-3">

            <!-- Nav -->
            <nav class="mb-10 mb-md-0">
              <div class="list-group list-group-sm list-group-strong list-group-flush-x">
                <a class="list-group-item list-group-item-action dropright-toggle " href="account-orders.html">
                  Orders
                </a>
                <a class="list-group-item list-group-item-action dropright-toggle " href="account-wishlist.html">
                  Widhlist
                </a>
                <a class="list-group-item list-group-item-action dropright-toggle " href="account-personal-info.html">
                  Personal Info
                </a>
                <a class="list-group-item list-group-item-action dropright-toggle " href="account-address.html">
                  Addresses
                </a>
                <a class="list-group-item list-group-item-action dropright-toggle active" href="account-payment.html">
                  Payment Methods
                </a>
                <a class="list-group-item list-group-item-action dropright-toggle" href="#!">
                  Logout
                </a>
              </div>
            </nav>


          </div>
          <div class="col-12 col-md-9 col-lg-8 offset-lg-1">

            <!-- Heading -->
            <h6 class="mb-7">
              Add Debit / Credit Card
            </h6>

            <!-- Form -->
            <form>
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="cardNumber">Card Number *</label>
                    <input class="form-control" id="cardNumber" type="text" placeholder="Card Number" required>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="nameOnCard">Name on Card *</label>
                    <input class="form-control" id="nameOnCard" type="text" placeholder="Name on Card" required>
                  </div>
                </div>
                <div class="col-12">

                  <!-- Label -->
                  <label>
                    Expiry Date *
                  </label>

                </div>
                <div class="col-12 col-md-4">
                  <div class="form-group">
                    <label class="sr-only" for="paymentMonth">Month</label>
                    <select class="custom-select" id="paymentMonth" required>
                      <option selected disabled value="">Month *</option>
                      <option>January</option>
                      <option>February</option>
                      <option>March</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="form-group">
                    <label class="sr-only" for="paymentCardYear">Year</label>
                    <select class="custom-select" id="paymentCardYear" required>
                      <option selected disabled value="">Year *</option>
                      <option>2017</option>
                      <option>2018</option>
                      <option>2019</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="form-group">
                    <div class="input-group input-group-merge">
                      <input class="form-control" id="paymentCardCVV" type="text" placeholder="CVV *" required>
                      <div class="input-group-append">
                        <span class="input-group-text" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="The CVV Number on your credit card or debit card is a 3 digit number on VISA, MasterCard and Discover branded credit and debit cards." data-original-title="" title="">
                          <i class="fe fe-help-circle"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="defaultPaymentMethod">
                      <label class="custom-control-label" for="defaultPaymentMethod">Default payment method</label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Button -->
              <button class="btn btn-dark" type="submit">
                Add Card
              </button>

            </form>

          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark bg-cover @@classList" style="background-image: url(assets/img/patterns/pattern-2.svg)">
      <div class="py-12 border-bottom border-gray-700">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6">

              <!-- Heading -->
              <h5 class="mb-7 text-center text-white">Want style Ideas and Treats?</h5>

              <!-- Form -->
              <form class="mb-11">
                <div class="form-row align-items-start">
                  <div class="col">
                    <input type="email" class="form-control form-control-gray-700 form-control-lg" placeholder="Enter Email *">
                  </div>
                  <div class="col-auto">
                    <button type="submit" class="btn btn-gray-500 btn-lg">Subscribe</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-3">

              <!-- Heading -->
              <h4 class="mb-6 text-white">Shopper.</h4>

              <!-- Social -->
              <ul class="list-unstyled list-inline mb-7 mb-md-0">
                <li class="list-inline-item">
                  <a href="#!" class="text-gray-350">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#!" class="text-gray-350">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#!" class="text-gray-350">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#!" class="text-gray-350">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#!" class="text-gray-350">
                    <i class="fab fa-medium"></i>
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-sm">

              <!-- Heading -->
              <h6 class="heading-xxs mb-4 text-white">
                Support
              </h6>

              <!-- Links -->
              <ul class="list-unstyled mb-7 mb-sm-0">
                <li>
                  <a class="text-gray-300" href="contact-us.html">Contact Us</a>
                </li>
                <li>
                  <a class="text-gray-300" href="faq.html">FAQs</a>
                </li>
                <li>
                  <a class="text-gray-300" data-toggle="modal" href="#modalSizeChart">Size Guide</a>
                </li>
                <li>
                  <a class="text-gray-300" href="shipping-and-returns.html">Shipping & Returns</a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-sm">

              <!-- Heading -->
              <h6 class="heading-xxs mb-4 text-white">
                Shop
              </h6>

              <!-- Links -->
              <ul class="list-unstyled mb-7 mb-sm-0">
                <li>
                  <a class="text-gray-300" href="shop.html">Men's Shopping</a>
                </li>
                <li>
                  <a class="text-gray-300" href="shop.html">Women's Shopping</a>
                </li>
                <li>
                  <a class="text-gray-300" href="shop.html">Kids' Shopping</a>
                </li>
                <li>
                  <a class="text-gray-300" href="shop.html">Discounts</a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-sm">

              <!-- Heading -->
              <h6 class="heading-xxs mb-4 text-white">
                Company
              </h6>

              <!-- Links -->
              <ul class="list-unstyled mb-0">
                <li>
                  <a class="text-gray-300" href="about.html">Our Story</a>
                </li>
                <li>
                  <a class="text-gray-300" href="#!">Careers</a>
                </li>
                <li>
                  <a class="text-gray-300" href="#!">Terms & Conditions</a>
                </li>
                <li>
                  <a class="text-gray-300" href="#!">Privacy & Cookie policy</a>
                </li>
              </ul>

            </div>
            <div class="col-6 col-sm">

              <!-- Heading -->
              <h6 class="heading-xxs mb-4 text-white">
                Contact
              </h6>

              <!-- Links -->
              <ul class="list-unstyled mb-0">
                <li>
                  <a class="text-gray-300" href="#!">1-202-555-0105</a>
                </li>
                <li>
                  <a class="text-gray-300" href="#!">1-202-555-0106</a>
                </li>
                <li>
                  <a class="text-gray-300" href="#!">help@shopper.com</a>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="py-6">
        <div class="container">
          <div class="row">
            <div class="col">

              <!-- Copyright -->
              <p class="mb-3 mb-md-0 font-size-xxs text-muted">
                © 2019 All rights reserved. Designed by Unvab.
              </p>

            </div>
            <div class="col-auto">

              <!-- Payment methods -->
              <img class="footer-payment" src="assets/img/payment/mastercard.svg" alt="...">
              <img class="footer-payment" src="assets/img/payment/visa.svg" alt="...">
              <img class="footer-payment" src="assets/img/payment/amex.svg" alt="...">
              <img class="footer-payment" src="assets/img/payment/paypal.svg" alt="...">
              <img class="footer-payment" src="assets/img/payment/maestro.svg" alt="...">
              <img class="footer-payment" src="assets/img/payment/klarna.svg" alt="...">

            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- JAVASCRIPT -->
    <!-- Libs JS -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/libs/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/libs/list.js/dist/list.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
    <script src="assets/libs/flickity-fade/flickity-fade.js"></script>

    <!-- Map (replace the API key to enable) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnKt8_N4-FKOnhI_pSaDL7g_g-XI1-R9E"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>


  </body>

<!-- Mirrored from yevgenysim.github.io/shopper/account-payment-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jan 2021 07:30:05 GMT -->
</html>
