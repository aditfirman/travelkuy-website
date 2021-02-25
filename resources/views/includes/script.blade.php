<!-- jquery -->
<script src="{{url('frontend/libraries/jquery/jquery-3.4.1.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{url('frontend/libraries/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- retina -->
<script src="{{url('frontend/libraries/retina/retina.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('.navbar').css('box-shadow', '0px 4px 4px rgba(0, 0, 0, 0.10)');
            } else {
                $('.navbar').css('box-shadow', 'none');
            }
        });
    });
</script>