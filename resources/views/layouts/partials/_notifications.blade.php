@if (session('login-status'))
    <div class="container xs-add-top-100 error-container">
        <div class="row">
            <div class="alert alert-danger alert-dismissible text-center fonts-phones" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {!! session('login-status') !!}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <br><br>
@endif

@if($errors->any())
    <div class="container xs-add-top-100 error-container">
        <div class="row">
            <div class="alert alert-danger alert-dismissible text-center fonts-phones" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {!! $errors->first() !!}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endif

@if(Session::has('notification'))
    <div class="container xs-add-top-100 error-container">
        <div class="row">
            <div class="d-flex alert alert-{{ Session::get('notification')['status'] == 'success' ? 'success' : 'danger'}}
                alert-dismissible text-center fonts-phones"
                 role="alert">
                <div style="min-width: 92%">
                    {!! Session::get('notification')['message'] !!}
                </div>
                <div>
                    <button type="button" class="cross-icon" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endif

@if(Session::has('error'))
    <div class="container">
        <div class="row">
            <div class="alert alert-danger alert-dismissible text-center fonts-phones" role="alert">
                {{Session::get('error')}}</div>
        </div>
    </div>
@endif


<style>
    .cross-icon {
        background: none;
        border: none;
    }

    .error-container {
        margin-top: 3rem;
    }
</style>
