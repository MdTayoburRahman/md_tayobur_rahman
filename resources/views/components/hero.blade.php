<style>
    .custom-img {
        width: 130px;
        height: auto !important;
        margin: 5px;
    }
</style>

<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-7">
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile">
                        <img class="profile-img" id="profileImg" src="assets/profile.png" alt="..." />
                    </div>
                </div>
            </div>
            <div class="col-xxl-5">
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                        <div class="text-uppercase" id="keyLine">Design &middot; Development &middot; Marketing</div>
                    </div>
                    <div class="fs-3 fw-light text-muted" id="short_title">I can help your business to</div>
                    <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline" id="title">Get online
                            and grow fast</span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">

                        <a aria-label="Chat on WhatsApp"
                            href="https://wa.me/01717932348?text=I%20am%20interested%20to%20talk%20about%20an%20app%20development">
                            <img alt="Chat on WhatsApp" src="{{ asset('assets/WhatsAppButtonGreenLarge.svg') }}" />
                        </a>


                    </div>

                    {{-- Certified By --}}
                    <div class="container mt-5">
                        <h4 class="text-center">Certified By</h4>
                        <hr>
                        <div class="row justify-content-center">
                            <div class="col-5">
                                <a href="https://www.udemy.com" target="_blank"><img
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZCtPP-yWBXjy_E4YituEoMt1GCNYgx_rkkg&s"
                                        class="custom-img" alt="Udemy Logo"></a>

                            </div>
                            <div class="col-5">
                                <a href="https://ostad.app/" target="_blank"><img
                                        src="https://cdn.ostad.app/public/upload/2024-03-20T04-26-32.799Z-ostad_logo_light@512x%20(2).png"
                                        class="custom-img" alt="Ostad logo"></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</header>

<script>
    getHero();
    async function getHero() {

        try {
            let URL = "/heroData"

            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');

            debugger;

            let response = await axios.get(URL);
            document.getElementById('keyLine').innerHTML = response.data['keyLine'];
            document.getElementById('short_title').innerHTML = response.data['short_title'];
            document.getElementById('title').innerHTML = response.data['title'];
            document.getElementById('profileImg').src = response.data['img'];
        } catch (e) {
            alert(e);
        }

    }
</script>
