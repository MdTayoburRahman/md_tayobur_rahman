<!-- Hero Section -->
<!-- Hero Section -->
<header class="hero-section py-5 position-relative">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-6 order-1 order-xxl-1 mb-5 mb-xxl-0">
                <div class="d-flex justify-content-center">
                    <img class="profile-img" id="profileImg" src="{{ asset('assets/profile.png') }}" alt="Profile Image" />
                </div>
            </div>
            <div class="col-xxl-6 order-2 order-xxl-2">
                <div class="text-center text-xxl-start">
                    <div class="badge bg-primary text-white mb-4 shadow-sm">
                        <div class="text-uppercase fw-semibold" id="keyLine">Design &middot; Development &middot;
                            Marketing</div>
                    </div>
                    <h1 class="display-3 fw-bold mb-4">
                        <span class="text-gradient d-inline" id="title">Get online and grow fast</span>
                    </h1>
                    <p class="fs-4 fw-light text-muted mb-5" id="short_title">I can help your business to succeed in the
                        digital world</p>
                    <div
                        class="d-flex flex-column flex-sm-row justify-content-center justify-content-xxl-start gap-3 mb-5">
                        <a class="btn btn-primary btn-lg shadow-sm" href="/resume" role="button"><i
                                class="bi bi-file-earmark-break-fill"></i> Resume</a>
                        <a class="btn btn-outline-secondary btn-lg shadow-sm" href="/projects" role="button"><i
                                class="bi bi-card-checklist"></i> Projects</a>
                    </div>
                    <div class="certifications mt-5">
                        <h5 class="text-center text-xxl-start mb-3">Certified By</h5>
                        <div class="d-flex justify-content-center justify-content-xxl-start gap-4 mt-2">
                            <a href="https://www.udemy.com" target="_blank">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZCtPP-yWBXjy_E4YituEoMt1GCNYgx_rkkg&s"
                                    class="certification-img" alt="Udemy Logo">
                            </a>
                            <a href="https://ostad.app/" target="_blank">
                                <img src="https://cdn.ostad.app/public/upload/2024-03-20T04-26-32.799Z-ostad_logo_light@512x%20(2).png"
                                    class="certification-img" alt="Ostad logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<style>
    .hero-section {
        background: linear-gradient(135deg, #e0eafc, #cfdef3);
        overflow: hidden;
    }

    .text-gradient {
        background: linear-gradient(90deg, #007bff, #6610f2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .profile-img {
        width: auto;
        height: 460px;

    }

    .certification-img {
        width: 100px;
        height: auto;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: transparent;
        mix-blend-mode: multiply;
    }


    .certification-img:hover {
        transform: scale(1.2);
    }

    .badge {
        font-size: 0.875rem;
        padding: 0.75rem 1.5rem;
        border-radius: 30px;
    }

    @media (max-width: 768px) {
        .profile-img {
            width: auto;
            height: 250px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', getHero);

    async function getHero() {
        try {
            let URL = "/heroData";
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
