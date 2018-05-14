@section('script')
    
    <script>
        $(function() {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }               

            })
            $('[data-toggle="tooltip"]').tooltip()
            $('#compte').click(function(e) {
                let that = $(this)
                e.preventDefault()
                swal({
                    title: '@lang('Voulez-vous Vraiment supprimer votre compte ?')',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#f00',
                    cancelButtonColor: '#257525',
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
    {{-- Suppression d'un article --}}
    
@endsection