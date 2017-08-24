@include('header')
@yield('content')
<script src="{{asset('js/jquery-3.2.1.js')}}"></script>
<script src="{{asset('tether/tether.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script>
    $('.box-item a:first-child').click(function(){
        $(this).parent().parent().find('ul').toggle()
    });

    $( "li" ).has( "ul" ).css( "background-color", "red" );



    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);// Button that triggered the modal
        var id = button.data('id');
        var hoten = button.data('hoten');
        var modal = $(this);
        modal.find('.modal-body #ho-so-bo-me').val(id);
        modal.find('.modal-body #ho-ten').val(hoten);
        var str = '{{ route('cap-nhat-ho-so','')}}';
        modal.find('#form-modal').attr('action',str.concat('/', $('#ho-so-bo-me').val()));
    })
</script>
</body>
</html>