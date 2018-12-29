@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="address" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                               <select name ='country' class="form-control">
                               <option value="Malaysia">Malaysia</option>
                                <option value="Indonesia">Indonesia</option>
                               </select>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="State" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                            <div class="col-md-6">
                               <select name ='state' class="form-control">
                               <option value="sabah">Sabah</option>
                                <option value="sarawak">Sarawak</option>
                               </select>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="city" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="postcode" class="col-md-4 col-form-label text-md-right">{{ __('Postcode') }}</label>

                            <div class="col-md-6">
                                <input id="postcode" type="text" class="form-control{{ $errors->has('postcode') ? ' is-invalid' : '' }}" name="postcode" value="{{ old('postcode') }}" required autofocus>

                                @if ($errors->has('postcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('postcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact') }}" required autofocus>

                                @if ($errors->has('contact'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
        <label class="col-xs-3 control-label">MSS Member – Privacy Policy
        </label>
        <div class="col-xs-9">
            <div style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;">
                <p>Your privacy is important to you and to us so we will protect the information you share. This privacy policy explains the procedures for data collection and use of the data collected in MSS and its website. When you sign up as MSS member through our Affiliate, you agree and consent to the procedures for data collection and to the use of the data collected as described below.</p>
                <p>We will not sell or give away your personal detail, mail address, phone number, email address or any other information to anyone.</p>
                <p>MSS has taken strong measures to protect the security of your personal information and to ensure that your choices for its intended use are honoured. We take strong precautions to protect your data from loss, misuse, unauthorized access or disclosure, alteration or destruction</p>
                <p>Your personal details are collected for program identification purpose in order for you to enjoy retail privileges, rebate and redemption points at participating merchants’ outlets.</p>
                <p>MSS affiliates and merchants may contact you from time of time for program promotions and marketing purposes</p>
                <p>You will be asked to produce your MyKad at merchants’ outlets for verification purpose in order for merchant to extend retail privilege and rebate to you. However, we will not be liable for the products &/or services that you acquire from the merchant</p>
                <p>Your membership will only remain active for 6 months after the last MSS transaction you made. To ensure your account remain active, be sure to spend at least once within every 6 months at any of MSS participating merchants’ outlet. MSS account expiration will result in any amount of your unused Cash Point and Reward Point to be used as the processing fee of your inactive account.</p>
                <p>Your personal information is never shared outside the company without your permission, except under conditions explained above. Your information may be stored and processed in Malaysia or any other country where MSS, its subsidiaries, affiliate or agent are located.</p>
                <p>MSS will disclose your information, without notice, only if required to do so by law or in the good faith belief that such action is necessary to: (a) conform to the addicts of the law or comply with legal process served on MSS or the site; (b) protect and defend the right or property of MSS and its family of Websites, and, (c) act in urgent circumstances to protect the personal safety of users of MSS, its Websites, or the public</p>
                <p>If for some reason you believe MSS or any of its Affiliate has not adhered to these principles, please notify us by sending an email to member@mykadshopper.com and we will do our best to determine and correct the problem promptly. Be certain the words Privacy Policy are in the subject line.</p>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="checkbox{{ $errors->has('accept') ? ' is-invalid' : '' }}">
                <label>
                    <input type="checkbox" name="accept" value="agree" /> Agree with the terms and conditions
                </label>
            </div>
                                @if ($errors->has('accept'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('accept') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
