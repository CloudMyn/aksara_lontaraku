<div class="container">
    <style>
        .login-draw {
            width: 400px;
        }

        .login-wrap {
            width: 100%;
        }

        @media (min-width: 1080px) {
            .login-draw {
                width: 400px;
            }
        }
    </style>

    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <div class="wrap d-md-flex">
                <div class="login-draw text-wrap text-center d-flex align-items-center order-md-last"
                    style="position: relative">
                    <div class="wave-container">
                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="wave"></div>
                    </div>
                </div>
                <div class="login-wrap p-4 p-lg-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">Halaman Login</h3>
                        </div>
                        <div class="w-100">
                            <!-- <p class="social-media d-flex justify-content-end">
                                    <a href="#"
                                        class="social-icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a>
                                    <a href="#"
                                        class="social-icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a>
                                </p> -->
                        </div>
                    </div>
                    <form action="#" class="signin-form">
                        <div class="form-group mb-3">
                            <label class="label" for="name">Username</label>
                            <input type="text" wire:model="username" class="form-control" placeholder="Username"
                                required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="label" for="password">Kata Sandi</label>
                            <input type="password" wire:model="password" class="form-control" placeholder="Password"
                                required>
                        </div>
                        <div class="form-group">
                            <button type="button" class="form-control btn btn-primary submit px-3" wire:click="login"
                                wire:loading.remove>Masuk</button>

                            <button type="button" class="form-control btn btn-primary submit px-3" wire:loading
                                wire:target="login">Loading...</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50 text-left">
                                <label class="checkbox-wrap checkbox-primary mb-0" style="color: #c4c11e;">Ingat Saya
                                    <input type="checkbox" checked wire:model="remember">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- <div class="w-50 text-md-right">
                                    <a href="#">Forgot Password</a>
                                </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@script
    <script>
        $wire.on('toast', (event) => {

            let type = event[1];
            let message = event[0];

            if (type === 'success') {
                iziToast.success({
                    title: 'Sukses',
                    message: message
                });
            } else if (type === 'error') {
                iziToast.error({
                    title: 'Error',
                    message: message
                });
            } else if (type === 'info') {
                iziToast.info({
                    title: 'Info',
                    message: message
                });
            } else if (type === 'warning') {
                iziToast.warning({
                    title: 'Peringatan',
                    message: message
                });
            }
        });
    </script>
@endscript
