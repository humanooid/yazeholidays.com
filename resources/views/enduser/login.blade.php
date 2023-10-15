@extends('layouts.enduser')
@section('content')
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section id="section-hero" aria-label="section" class="jarallax">
        <img src="images/background/2.jpg" class="jarallax-img" alt="">
        <div class="v-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 offset-lg-4">
                        <div class="padding40 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                            <h4>Login</h4>
                            <div class="spacer-10"></div>
                            @if (session('warning'))
                            <div class="alert alert-warning">
                                <b>Wait!</b> {{ session('warning')}}
                            </div>
                            @elseif (session('danger'))
                            <div class="alert alert-danger">
                                <b>Oops!</b> {{ session('danger')}}
                            </div>
                            @endif
                            <form id="form_register" class="form-border" method="post" action="{{ route('actionlogin') }}">
                                @csrf
                                <div class="field-set">
                                    <input type="email" name="signInEmail" id="signInEmail" class="form-control {{ $errors->has('signInEmail') ? 'is-invalid' : '' }}" placeholder="email" />
                                    @if ($errors->has('signInEmail'))
                                    <span class="invalid-feedback">{{ $errors->first('signInEmail') }}</span>
                                    @endif
                                </div>
                                <div class="field-set">
                                    <input type="password" name="signInPassword" id="signInPassword" class="form-control {{ $errors->has('signInPassword') ? 'is-invalid' : '' }}" placeholder="password" />
                                    @if ($errors->has('signInPassword'))
                                    <span class="invalid-feedback">{{ $errors->first('signInPassword') }}</span>
                                    @endif
                                </div>
                                <div id="submit">
                                    <input type="submit" id="send_message" value="Sign In" class="btn-main btn-fullwidth rounded-3" />
                                </div>
                            </form>
                            <!-- <div class="title-line">Or&nbsp;sign&nbsp;up&nbsp;with</div>
                            <div class="row g-2">
                                <div class="col-lg-6">
                                    <a class="btn-sc btn-fullwidth mb10" href="#"><img src="images/svg/google_icon.svg" alt="">Google</a>
                                </div>
                                <div class="col-lg-6">
                                    <a class="btn-sc btn-fullwidth mb10" href="#"><img src="images/svg/facebook_icon.svg" alt="">Facebook</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- content close -->
@endsection