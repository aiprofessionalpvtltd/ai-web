<script src="{{asset('assets/frontend/js/jquery.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

<script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/frontend/js/appear.js')}}"></script>
<script src="{{asset('assets/frontend/js/parallax.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/tilt.jquery.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.paroller.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/owl.js')}}"></script>
<script src="{{asset('assets/frontend/js/wow.js')}}"></script>
<script src="{{asset('assets/frontend/js/nav-tool.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/frontend/js/script.js')}}"></script>
<script src="{{asset('assets/frontend/js/color-settings.js')}}"></script>

<script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/mixitup.min.js"></script>

<script>
    $(document).ready(function() {

        mixitup('#mix-wrapper', {
            load: {
                sort: 'order:asc'
            },
            animation: {
                effects: 'fade scale(1)',
                duration: 700
            },
            classNames: {
                block: 'programs',
                elementFilter: 'filter-btn',
                elementSort: 'sort-btn'
            },
            selectors: {
                target: '.mix-target'
            }
        });


    });
</script>
