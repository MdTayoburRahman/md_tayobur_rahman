<section class="">
    <div class="container-fluid px-4 px-md-5 my-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-12 col-md-11 col-lg-10 col-xl-9 col-xxl-8">
                <div class="text-center mb-4">
                    <h2 class="text-secondary fw-bolder">Certifications</h2>
                </div>

                <div id="certifications-list" class="row g-4">
                    {{-- Here will be certifications list --}}
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        getCertificationsList();

        async function getCertificationsList() {
            try {
                let URL = "/certifications";
                let response = await axios.get(URL);
                response.data.forEach((item) => {
                    document.getElementById('certifications-list').innerHTML += `
                    <div class="col d-flex align-items-stretch">
                        <div class="card shadow-sm border-0">
                            <img src="${item['media_url']}" alt="Media Thumbnail" class="card-img-top p-1" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">${item['title']}</h5>
                                <p class="card-text text-muted">Institute: ${item['organization']}</p>
                                <p class="card-text text-muted">Credential ID: ${item['credential_id']}</p>
                                <p class="text-primary">Issue Date: ${item['issue_date']}</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-outline-primary" href="${item['credential_url']}" target="_blank">View Certificate</a>
                                    <a href="${item['media_url']}" target="_blank" class="btn btn-link">See Thumbnail</a>
                                </div>
                            </div>
                        </div>
                    </div>`;
                });
            } catch (e) {
                alert(e);
            }
        }
    });
</script>

<style>
    /* Custom styles to enhance full-page responsiveness */
    .container-fluid {
        padding-left: 5%;
        padding-right: 5%;
    }

    .my-5 {
        margin-top: 2rem !important;
        margin-bottom: 2rem !important;
    }

    .card {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
</style>
