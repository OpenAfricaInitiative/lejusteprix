@section('script')
    <script>
        $(function() {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }               

            })
            $('[data-toggle="tooltip"]').tooltip()
            $('a.btn-danger').click(function(e) {
                let that = $(this)
                e.preventDefault()
                swal({
                    title: '@lang('Voulez-vous Vraiment supprimer votre compte ?')',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#257525',
                    confirmButtonText: '@lang('Oui')',
                    cancelButtonText: '@lang('Non')'
                }).then(function () {
                    $('[data-toggle="tooltip"]').tooltip('hide')
                    $.ajax({                        
                        url: that.attr('href'),
                        type: 'DELETE'
                    })
                        .done(function () {
                            that.parents('tr').remove()
                        })
                        .fail(function () {
                            swal({
                                title: '@lang('Votre compte a bien été supprimer, Veuillez actualiser la page...')',
                                type: 'warning'
                            })
                        }
                    )
                })
            })
        })
    </script>
    </script>
@endsection