<header class="fixed-header">
    <div class="header-container solid">
        <div class="container">
        <div class="header-logo-dark" onclick="location.href='/';">
            <img class="svg-image" src="{{ asset('images/logo/logo-dark.svg') }}" alt="Setrip logo">
        </div>
        <ul class="header-menu">
            <a href=""><li>@lang('trns.article')</li></a>
            <a href=""><li>@lang('trns.help')</li></a>
            <a href=""><li>@lang('trns.myplan')</li></a>
            <a class="open--login-head"><li><button class="btn transparent small">@lang('trns.login')</button></li></a>
        </ul>
        </div>
    </div>
    
    <div id="general--modal" class="general--modal">
        <div class="modal-container panel panel-default">
            <div class="close--modal">
                <em class="fa fa-close"></em>
            </div>
            <div class="close--modal close--custom">
                <img src="images/icon/ic-close.svg" alt="close">
            </div>
            <div class="modal--child modal--info">
                    <div class="modal--img">
                        <em class="fa fa-info-circle"></em>
                    </div>
                    <div class="modal--text">
                        <div class="mt--head">
                            This is info modal
                        </div>
                        <div class="mt--body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas reiciendis unde deleniti numquam molestias cum quis neque voluptates sunt voluptatem asperiores, tenetur veniam, veritatis eaque dolore tempora soluta voluptatibus inventore.
                        </div>
                    </div>
                    <div class="modal--button">
                        <button type="button" class="mb-sm btn btn--medium btn--orange modal--button-full btnInfoOk">Ok</button>
                    </div>
            </div>
            <div class="modal--child modal--error">
                    <div class="modal--img">
                        <em class="fa fa-close"></em>
                    </div>
                    <div class="modal--text">
                        <div class="mt--head">
                            This is Error modal
                        </div>
                        <div class="mt--body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas reiciendis unde deleniti numquam molestias cum quis neque voluptates sunt voluptatem asperiores, tenetur veniam, veritatis eaque dolore tempora soluta voluptatibus inventore.
                        </div>
                    </div>
                    <div class="modal--button">
                        <button type="button" class="mb-sm btn btn--medium btn--orange modal--button-full btnAlertOk">Ok</button>
                    </div>
            </div>
            <div class="modal--child modal--success">
                    <div class="modal--img">
                        <em class="fa fa-check-circle"></em>
                    </div>
                    <div class="modal--text">
                        <div class="mt--head">
                            This is Success modal
                        </div>
                        <div class="mt--body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas reiciendis unde deleniti numquam molestias cum quis neque voluptates sunt voluptatem asperiores, tenetur veniam, veritatis eaque dolore tempora soluta voluptatibus inventore.
                        </div>
                    </div>
                    <div class="modal--button">
                        <button type="button" class="mb-sm btn btn--medium btn--orange modal--button-full btnAlertOk">Ok</button>
                    </div>
            </div>
            <!-- need parsley -->
            <div class="modal--child modal--register">
                <h3 class="modal-title">Bergabung dengan Settrip.id</h3>
                <div class="row modal-sosmed">
                    <div class="col-md-6 modal-sosmed__wrapper">
                        <div class="log-sosmed log-sosmed__facebook">
                            <div class="log-sosmed__icon">
                                <span class="fa fa-facebook"></span>
                            </div>
                            <span class="log-sosmed__text">
                                Daftar dengan Facebook
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 modal-sosmed__wrapper">
                        <div class="log-sosmed log-sosmed__google">
                            <div class="log-sosmed__icon">
                                <span class="fa fa-google-plus"></span>
                            </div>
                            <span class="log-sosmed__text">
                                Daftar dengan Google+
                            </span>
                        </div>
                    </div>
                </div>
                <div class="modal-or"></div>
                <form class="modal-form" action="">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <div class="input-group">
                            <input type="text" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <div class="input-group">
                            <input type="number" placeholder="No Telp.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <div class="input-group">
                            <input type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <div class="input-group">
                            <input type="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Konfirm Password</label>
                        <div class="input-group">
                            <input type="password" placeholder="Konfirm Password">
                        </div>
                    </div>
                    <button class="btn btn--medium btn--orange modal-btn btnInfoOk">DAFTAR</button>
                </form>
                <div class="modal-smregis">
                    Sudah punya akun? <b><a class="open--login">Login</a></b>
                </div>
            </div>
            <!-- need parsley -->
            <div class="modal--child modal--login">
                    <h3 class="modal-title">Selamat datang kembali</h3>
                    <div class="row modal-sosmed">
                        <div class="col-md-6 modal-sosmed__wrapper">
                            <div class="log-sosmed log-sosmed__facebook">
                                <div class="log-sosmed__icon">
                                    <span class="fa fa-facebook"></span>
                                </div>
                                <span class="log-sosmed__text">
                                    Login dengan Facebook
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 modal-sosmed__wrapper">
                            <div class="log-sosmed log-sosmed__google">
                                <div class="log-sosmed__icon">
                                    <span class="fa fa-google-plus"></span>
                                </div>
                                <span class="log-sosmed__text">
                                    Login dengan Google+
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-or"></div>
                    <form class="modal-form" action="">
                        <div class="form-group">
                            <label for="">Email</label>
                            <div class="input-group">
                                <input type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <div class="input-group">
                                <input type="password" placeholder="Password">
                                <span class="text-right"><a class="open--forgot">Lupa Password?</a></span>
                            </div>
                        </div>
                        <button class="btn btn--medium btn--orange modal-btn btnInfoOk">Login</button>
                    </form>
                    <div class="modal-smregis">
                        Tidak punya akun? <b><a class="open--register">Daftar</a></b>
                    </div>
            </div>
            <!-- need parsley -->
            <div class="modal--child modal--forgot">
                    <h3 class="modal-title">Lupa Password</h3>
                    <div class="mt--body mt--forgot text-center">
                        Masukan alamat email kamu. Kami akan membantu melakukan reset password anda melalui email.
                    </div>
                    <form class="modal-form" action="">
                        <div class="form-group">
                            <label for="">Email</label>
                            <div class="input-group">
                                <input type="email" placeholder="Email">
                            </div>
                        </div>
                        <button class="btn btn--medium btn--orange modal-btn btnInfoOk">Kirim</button>
                    </form>
            </div>
            <div class="modal--child modal--sent">
                    <div class="modal--text">
                        <div class="mt--head">
                            This is info modal
                        </div>
                        <div class="modal--img">
                            <img src="images/icon/art-mail-1.svg" alt="sent" />
                        </div>
                        <div class="mt--body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas reiciendis unde deleniti numquam molestias cum quis neque voluptates sunt voluptatem asperiores, tenetur veniam, veritatis eaque dolore tempora soluta voluptatibus inventore.
                        </div>
                    </div>
            </div>
            <div class="modal--child modal--confirmation">
                    <div class="modal--text">
                        <div class="mt--head">
                            Are you sure you want to do this ?
                        </div>
                        <div class="mt--body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas reiciendis unde deleniti numquam molestias cum quis neque voluptates sunt voluptatem asperiores, tenetur veniam, veritatis eaque dolore tempora soluta voluptatibus inventore.
                        </div>
                    <div class="modal--button">
                        <button type="button" class="mb-sm btn btn--medium btn--orange modal--button-half btnConfirmOk">YA</button>
                        <button type="button" class="mb-sm btn btn--medium btn-default modal--button-half btnConfirmCancel">TIDAK</button>
                    </div>
            </div>
        </div>
    </div>

    <?php /*
    <div class="header__login">
    <b>Wikan</b>
    <span class="fa fa-chevron-down"></span>
        <div class="header__profile">
            <img src="images/guide.jpg" alt="profile-pict" />
        </div>
    </div>
    <div class="header__profile--menu">
        <a href="">Profile</a>
        <div class="header__logout">
            <button class="btn btn--blue">LOG OUT</button>
        </div>
    </div>
    */ ?>
</header>
