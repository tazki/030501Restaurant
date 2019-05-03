<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Handmade pasta - done today, gone today">
        <meta name="author" content="">
        <meta name="robots" content="index, follow">
        <title>Q&A kitchen + bar</title>
        <link href="<?php echo base_url('js/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('js/vendor/lightGallery/css/lightgallery.min.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url('css/style.css') . '?version=' . date('Ymds'); ?>1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link href="<?php echo base_url('css/datetimepicker/css/bootstrap-datepicker.min.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('css/jquery.timepicker/jquery.timepicker.min.css'); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css">
        <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.js"></script>
    </head>
    <body>
        <img id="slider-logo" src="<?php echo base_url('images/banner-logo.svg'); ?>" alt="">
        <div id="slider-arrow-down">
            <a href="#first-section" class="arrow-on-slider">
                <span class="arrow-down">
                    <i class="fa fa-angle-down"></i>
                </span>
            </a>
        </div>
        <div id="slider-inasal" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php $carousel_indicators = '';
if (isset($imageslider_rows) && is_array($imageslider_rows)) {
    foreach ($imageslider_rows as $key => $val) {
        ?>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $val['haku_image']; ?>" />
                    </div>
                    <?php $carousel_indicators .= '<li data-target="#slider-inasal" data-slide-to="' . $key . '" ' . (($key == 0) ? 'class="active"' : '') . '></li>';
    }}?>
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators"><?php echo $carousel_indicators; ?></ol>
        </div>
        <!-- FIRST-->
        <div class="container first-section" id="first-section">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div data-simplebar data-simplebar-auto-hide="false" class="house-of-inasal-wrapper">
                        <h1><?php echo $about_rows['haku_name']; ?></h1>
                        <?php echo $about_rows['haku_description']; ?>

                            <a  data-toggle="modal" data-target="#callModal" class="btn btn-inasal-call-menu" href="<?php echo $about_rows['haku_content']; ?>" role="button" target="_blank">Call Us</a>


                            <a  data-toggle="modal" data-target="#reservationmodal" class="btn btn-inasal-reservation-menu" href="<?php echo $about_rows['haku_content']; ?>" role="button" target="_blank">Make a Reservation</a>


                            <a class="btn btn-inasal-view-menu" href="<?php echo $about_rows['haku_content']; ?>" role="button" target="_blank">View Menu</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <img class="leduc-img leduc-img-left-top" src="<?php echo $about_rows['haku_image']; ?>" />
                    <iframe width="100%" height="335" src="https://www.youtube.com/embed/TcTIhPY0Kd8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="col-sm-12 col-md-4">
                    <img class="leduc-img" src="<?php echo $about_rows['haku_json']; ?>" />
                    <div id="social-media-holder">
                        <p>
                            <a href="<?php echo $imagegallery_rows['haku_json']; ?>" target="_blank">
                                <img class="social-icons" src="<?php echo base_url('images/fb.svg'); ?>" alt="">
                            </a>
                        </p>
                        <p>
                            <a href="<?php echo $imagegallery_rows['haku_image']; ?>" target="_blank">
                                <img class="social-icons" src="<?php echo base_url('images/insta.svg'); ?>" alt="">
                            </a>
                        </p>
                        <?php if (!empty($imagegallery_rows['haku_content'])) {?>
                        <p>
                            <a href="<?php echo $imagegallery_rows['haku_content']; ?>" target="_blank">
                                <img class="social-icons" src="<?php echo base_url('images/twitter.svg'); ?>" alt="">
                            </a>
                        </p>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECOND-->
        <div class="container-fluid" id="second-section">
            <div class="row second-contents">
                <div class="col-sm-12">
                    <h1>
                        <strong><?php echo $imagegallery_rows['haku_name']; ?></strong>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <div id="on-the-table-description"><?php echo $imagegallery_rows['haku_description']; ?></div>
                </div>
                <div class="col-sm-6">
                    <p class="float-md-right">
                        <span class="follow-text">FOLLOW US</span>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span class="ig_username">
                            <a href="<?php echo $imagegallery_rows['haku_image']; ?>" target="_blank">@QandAkitchen</a>
                        </span>
                    </p>
                </div>
                <div class="col-sm-12" id="IG-images-holder">
                    <?php /*<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/36467ec127d0547984e57a5b82535018.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>*/?>
                    <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/d428ddd1830a5dcb856455372844132d.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

                </div>
            </div>
        </div>

        <!-- Events -->
        <div class="container-fluid" id="promo-section">
            <div class="row second-contents">
                <div class="col-sm-12 mb-3">
                    <h1>
                        <strong>EVENTS</strong>
                    </h1>
                </div>
                <div class="col-sm-12">
                    <div class="row mb-2">
                        <div class="col-md-12">
                          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                              <h3 class="mb-2">
                                <a class="text-dark" href="#">Valentine Promo</a>
                              </h3>
                              <div class="mb-1 text-muted">Feb 14</div>
                              <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae blanditiis, nesciunt adipisci consectetur facilis sint explicabo excepturi. Error qui ratione perferendis, quaerat incidunt? Delectus doloribus reiciendis, sequi deserunt. Veritatis, eveniet.</p>

                              <a data-toggle="modal" data-target="#reservationmodal" class="btn btn-block btn-promo" href="#" role="button" target="_blank">Reserve a seat</a>
                            </div>
                            <img src="https://images.unsplash.com/photo-1517800140676-e7e8312bc02d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="" style="height: 380px;">
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MAPS -->
        <div class="container-fluid maps-hold">
            <section class="section2">
                <div class="contact-con">
                    <div class="contactform">
                        <div>
                            <img id="contact-logo" src="<?php echo base_url('images/logo.svg'); ?>" alt="">
                        </div>
                        <div class="contact-detail"><?php echo $map_rows['haku_description']; ?></div>
                        <div class="demo-gallery">
                        <ul id="lightgallery" class="list-unstyled row">
                            <li class="col-sm-4 col-md-4 col" data-src="images/paseorouteig.jpg">
                                <a href="">
                                    <img class="img-responsive" src="images/paseorouteig.jpg">
                                </a>
                            </li>
                            <li class="col-sm-4 col-md-4 col"  data-src="images/ayala-ave-routeig.jpg">
                                <a href="">
                                    <img class="img-responsive" src="images/ayala-ave-routeig.jpg">
                                </a>
                            </li>
                            <li class="col-sm-4 col-md-4 col" data-src="images/locationgIG.jpg" >
                                <a href="">
                                    <img class="img-responsive" src="images/locationgIG.jpg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="contmap">
                    <div id='gmap_canvas'></div>
                    <!-- <img id="web-map" style="display: none;max-width:100%; margin-top:-40px;" src="<?php echo base_url('images/qanda-map.jpg'); ?>">
                    <img id="mobile-map"  src="<?php echo base_url('images/qanda-map-mobile.jpg'); ?>" style="max-width:100%; margin-top:-40px;"> -->
                </div>
            </section>
        </div>
        <!-- FOOTER -->
        <section id="map">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-sm-12">
                        <p class="no-margin footer-text">© 2018 ● ALL RIGHTS RESERVED</p>
                    </div>
                    <div class="col-md-7 col-sm-12" style="position:relative;">
                        <div class="input-group newsleter-holder">
                            <p class="no-margin newsletter-label">NEWSLETTER:</p>
                            <input type="text" id="email-input" class="form-control" placeholder="Your email" aria-label="Your email" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary btn-subscribe" type="button">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="reservationmodal" tabindex="-1" role="dialog" aria-labelledby="reservationmodal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Reservation Form</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form id="reservationForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer-name">Customer Name <span class="asterisk">*</span></label>
                                        <input type="text" class="form-control" id="customer-name" name="reserveName" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer-number-of-guest">Number of Guests <span class="asterisk">*</span></label>
                                        <input type="number" class="form-control" id="customer-number-of-guest" min="1" name="reserveNumberOfGuests" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer-email">Customer Email <span class="asterisk">*</span></label>
                                        <input type="email" class="form-control" id="customer-email" name="reserveEmail" />
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer-contact-number">Customer Contact Number <span class="asterisk">*</span></label>
                                        <input type="text" class="form-control" id="customer-contact-number" name="reserveContactNumber" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer-date-of-visit">Date of Visit <span class="asterisk">*</span></label>
                                        <input type="text" class="form-control" id="customer-date-of-visit" name="reserveDateOfVisit" />
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer-time-of-visit">Time of Visit <span class="asterisk">*</span></label>
                                        <input type="text" class="form-control" id="customer-time-of-visit" name="reserveTimeOfVisit" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="customer-special-request">Special Request</label>
                                        <textarea id="customer-special-request" cols="30" rows="10" class="form-control" name="reserveSpecialRequest" /></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary btn-reserved">Reserve</button>
                      </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="callModal" tabindex="-1" role="dialog" aria-labelledby="callModall" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Call Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                <div class="col-md-6">
                    <p class="mobile-in-modal"><a href="tel:+639178595678">+63 917 859 5678</a></p>
                </div>
                 <div class="col-md-6">
                    <p class="mobile-in-modal"><a href="tel:+6326244388">+632 624 4388</a></p>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="<?php echo base_url('js/vendor/jquery/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/vendor/jquery.timepicker/timepicker.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/vendor/datetimepicker/js/bootstrap-datepicker.min.js'); ?>"></script>
         <script src="<?php echo base_url('js/vendor/lightGallery/js/lightgallery-all.min.js'); ?>"></script>
         <script src="<?php echo base_url('js/vendor/sweetalert2.all.js'); ?>"></script>
         <script src="<?php echo base_url('js/vendor/sweetalert2.min.css'); ?>"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key="></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->
        <!-- CUSTOM JS -->
        <script src="<?php echo base_url('js/script.js'); ?>"></script>
        <script type="text/javascript">
        $(document).ready(function()
        {
            $('.btn-reserved').click(function()
            {
                var btnReservedLabel = $(this).html();
                $(this).html('Loading...');
                $(this).attr('disabled', 'disabled');
                $.ajax({
                    url: '<?php echo site_url('home/reservation'); ?>',
                    type: "POST",
                    data: $("#reservationForm").serialize()
                }).done(function(data)
                {
                    $('.btn-reserved').html(btnReservedLabel);
                    $('.btn-reserved').removeAttr('disabled');
                    console.log(data);
                    var data = JSON.parse(data);
                    if (data.status == 'danger' && $.type(data.alert) == 'object') {
                      var allFieldMsg = '';
                      $("span.error").remove();
                      $.each(data.alert, function(fieldName, fieldMsg) {
                        allFieldMsg += fieldMsg + '<br />';
                        $("input[name='" + fieldName + "']").attr('style', 'border-bottom:2px solid #ff0000;');
                        $("input[name='" + fieldName + "']").parent().append(fieldMsg);
                      });
                    }

                    if (data.status == 'success') {
                      // alert("Reservation successfully sent. \n We will get back to you soonest. Thank you.");
                      swal(
                          'Reservation successfully sent!',
                          'We will get back to you soonest. Thank you.',
                          'success'
                        )
                      $('#reservationmodal').modal('hide');
                    }
                });
            });

            $('#lightgallery').lightGallery();
            $('.btn-subscribe').click(function()
            {
                $('.err-msg').remove();
                var emailValue = $('#email-input').val();
                if(emailValue != '')
                {
                    if(validateEmail(emailValue) == true)
                    {
                        $.ajax({
                           url: '<?php echo site_url('home/subscribe'); ?>',
                           type: "POST",
                           data: { email: $('#email-input').val() }
                        }).fail(function(data)
                        {
                            $('.newsleter-holder').after('<p class="err-msg">Failed to subscribe this time.</p>');
                        }).done(function(data)
                        {
                            var data = JSON.parse(data);
                            if(data.result == 'success')
                            {
                                $('.newsleter-holder').after('<p class="suc-msg">Subscribed Successfully!</p>');
                            }
                            else
                            {
                                $('.newsleter-holder').after('<p class="err-msg">Failed to subscribe this time.</p>');
                            }
                        });
                    }
                    else
                    {
                        $('.newsleter-holder').after('<p class="err-msg">Email is not valid.</p>');
                    }
                }
                else
                {
                    $('.newsleter-holder').after('<p class="err-msg">Email is required.</p>');
                }
            });
        });

        function validateEmail(email)
        {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

        $('#reservationmodal').on('shown.bs.modal', function (e) {
            $(".modal-body").scrollTop(0);
            var date = new Date();
            date.setDate(date.getDate());

            var customercontactnumber = document.getElementById('customer-contact-number');
            customercontactnumber.onkeydown = function(e) {
                if(!((e.keyCode > 95 && e.keyCode < 106)
                  || (e.keyCode > 47 && e.keyCode < 58)
                  || e.keyCode == 8)) {
                    return false;
                }
            }
            $('#customer-date-of-visit').datepicker({
                todayHighlight: true,
                autoclose: true,
                format: "MM dd, yyyy",
                orientation: "top left",
                daysOfWeekDisabled: "0",
                startDate: date
            });

            $('#customer-time-of-visit').timepicker({
                'showDuration': false,
                'timeFormat': 'h:i a',
                'minTime': '11:30am',
                'maxTime': '9:00pm',
            });

        })

        $('#reservationmodal').on('hidden.bs.modal', function (e) {
            $(".modal-body").scrollTop(0);
            $('#customer-name').val("");
            $('#customer-number-of-guest').val("");
            $('#customer-email').val("");
            $('#customer-contact-number').val("");
            $('#customer-date-of-visit').val("");
            $('#customer-time-of-visit').val("");
            $('#customer-special-request').val("");
            $(this).find('span.error').remove();
            $(this).find('.form-control').attr('style', 'border-bottom:1px solid #ced4da');

        })
        </script>
    </body>
</html>
