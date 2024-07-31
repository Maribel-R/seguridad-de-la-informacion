<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" data-bs-scroll="true" data-bs-backdrop="true"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <div class="d-flex align-items-center">
            <h3 class="offcanvas-title me-3" id="offcanvasExampleLabel">Configuración</h3>
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body data-scrollbar">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="mb-3">Modo</h5>
                <div class="d-grid gap-3 grid-cols-3 mb-4">
                    <div class="btn btn-border" data-setting="color-mode" data-name="color" data-value="auto">
                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M7,2V13H10V22L17,10H13L17,2H7Z" />
                        </svg>
                        <span class="ms-2 "> Auto </span>
                    </div>
                    <div class="btn btn-border" data-setting="color-mode" data-name="color" data-value="dark">
                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                                d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z" />
                        </svg>
                        <span class="ms-2 "> Obscuro </span>
                    </div>
                    <div class="btn btn-border active" data-setting="color-mode" data-name="color" data-value="light">
                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                                d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z" />
                        </svg>
                        <span class="ms-2 "> Claro</span>
                    </div>
                </div>
                <hr class="hr-horizontal">
                <h5 class="mb-3 mt-4">Dirección del esquema</h5>
                <div class="d-grid gap-3 grid-cols-2 mb-4">
                    <div class="text-center">
                        <img src="../assets/images/settings/dark/01.png" alt="ltr"
                            class="mode dark-img img-fluid btn-border p-0 flex-column active mb-2"
                            data-setting="dir-mode" data-name="dir" data-value="ltr">
                        <img src="../assets/images/settings/light/01.png" alt="ltr"
                            class="mode light-img img-fluid btn-border p-0 flex-column active mb-2"
                            data-setting="dir-mode" data-name="dir" data-value="ltr">
                        <span class=" mt-2"> Lado izquierdo </span>
                    </div>
                    <div class="text-center">
                        <img src="../assets/images/settings/dark/02.png" alt=""
                            class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="dir-mode"
                            data-name="dir" data-value="rtl">
                        <img src="../assets/images/settings/light/02.png" alt=""
                            class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="dir-mode"
                            data-name="dir" data-value="rtl">
                        <span class="mt-2 "> Lado derecho </span>
                    </div>
                </div>
                <hr class="hr-horizontal">
                <h5 class="mt-4 mb-3">Tipo de barra lateral</h5>
                <div class="d-grid gap-3 grid-cols-3 mb-4">
                    <div class="text-center">
                        <img src="../assets/images/settings/dark/03.png" alt="mini"
                            class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                            data-name="sidebar-type" data-value="sidebar-mini">
                        <img src="../assets/images/settings/light/03.png" alt="mini"
                            class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                            data-name="sidebar-type" data-value="sidebar-mini">
                        <span class="mt-2">Mini</span>
                    </div>
                    <div class="text-center">
                        <img src="../assets/images/settings/dark/04.png" alt="hover"
                            class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                            data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
                        <img src="../assets/images/settings/light/04.png" alt="hover"
                            class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                            data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
                        <span class="mt-2">Hover</span>
                    </div>
                    <div class="text-center">
                        <img src="../assets/images/settings/dark/05.png" alt="boxed"
                            class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                            data-name="sidebar-type" data-value="sidebar-boxed">
                        <img src="../assets/images/settings/light/05.png" alt="boxed"
                            class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                            data-name="sidebar-type" data-value="sidebar-boxed">
                        <span class="mt-2">Boxed</span>
                    </div>
                </div>
                <hr class="hr-horizontal">
                <h5 class="mt-4 mb-3">Estilo activo de la barra lateral</h5>
                <div class="d-grid gap-3 grid-cols-2 mb-4">
                    <div class="text-center">
                        <img src="../assets/images/settings/dark/06.png" alt="rounded-one-side"
                            class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                            data-name="sidebar-item" data-value="navs-rounded">
                        <img src="../assets/images/settings/light/06.png" alt="rounded-one-side"
                            class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                            data-name="sidebar-item" data-value="navs-rounded">
                        <span class="mt-2">Rounded One Side</span>
                    </div>
                    <div class="text-center">
                        <img src="../assets/images/settings/dark/07.png" alt="rounded-all"
                            class="mode dark-img img-fluid btn-border p-0 flex-column active mb-2"
                            data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
                        <img src="../assets/images/settings/light/07.png" alt="rounded-all"
                            class="mode light-img img-fluid btn-border p-0 flex-column active mb-2"
                            data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
                        <span class="mt-2">Rounded All</span>
                    </div>
                    <div class="text-center">
                        <img src="../assets/images/settings/dark/08.png" alt="pill-one-side"
                            class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                            data-name="sidebar-item" data-value="navs-pill">
                        <img src="../assets/images/settings/light/09.png" alt="pill-one-side"
                            class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                            data-name="sidebar-item" data-value="navs-pill">
                        <span class="mt-2">Pill One Side</span>
                    </div>
                    <div class="text-center">
                        <img src="../assets/images/settings/dark/09.png" alt="pill-all"
                            class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                            data-name="sidebar-item" data-value="navs-pill-all">
                        <img src="../assets/images/settings/light/08.png" alt="pill-all"
                            class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                            data-name="sidebar-item" data-value="navs-pill-all">
                        <span class="mt-2">Pill All</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
