<script src="{{ asset('admin/assets/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>


<script src="{{ asset('admin/assets/vendor/apexchart/apexchart.js') }}"></script>
<script src="{{ asset('admin/assets/js/dashboard/dashboard-1.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

<script src="{{ asset('admin/assets/js/custom.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/dlabnav-init.js') }}"></script>
<script src="{{ asset('admin/assets/js/demo.js') }}"></script>
<script src="{{ asset('admin/assets/js/styleSwitcher.js') }}"></script>
<script>
    function TravlCarousel()
    {

        /*  testimonial one function by = owl.carousel.js */
        jQuery('.front-view-slider').owlCarousel({
            loop:false,
            margin:15,
            nav:true,
            autoplaySpeed: 3000,
            navSpeed: 3000,
            paginationSpeed: 3000,
            slideSpeed: 3000,
            smartSpeed: 3000,
            autoplay: false,
            animateOut: 'fadeOut',
            dots:true,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            responsive:{
                0:{
                    items:1
                },

                768:{
                    items:2
                },

                1400:{
                    items:2
                },
                1600:{
                    items:3
                },
                1750:{
                    items:3
                }
            }
        })
    }

    jQuery(window).on('load',function(){
        setTimeout(function(){
            TravlCarousel();
        }, 1000);
    });
</script>
<script>
    $(function () {
        console.log(bootstrap.Tooltip.VERSION);
        $('#datetimepicker').datetimepicker({
            inline: true,
        });
    });

    $(document).ready(function(){
        $(".booking-calender .fa.fa-clock-o").removeClass(this);
        $(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
    });
</script>
