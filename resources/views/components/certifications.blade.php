<div class="container px-5">
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- certifications Section-->
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-secondary fw-bolder mb-0">Certifications</h2>
                </div>
                <div id="certifications-list" class="row row-cols-1 row-cols-md-3">
                    {{-- Here will be certifications list --}}
                </div>
            </section>
        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', () => {
        getCertificationsList();

        async function getCertificationsList() {
            try {
                let URL = "/certifications";
                let response = await axios.get(URL);
                response.data.forEach((item) => {
                    document.getElementById('certifications-list').innerHTML += `
                    <div class="col align-items-center gx-5 mt-1">
                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                            <div class="bg-light p-4 rounded-4 d-flex justify-content-between">
                                <div class="mb-5">
                                   <div class="ms-3">
                                    <a href="${item['media_url']}" target="_blank">
                                        <img src="${item['media_url']}" alt="Media Thumbnail" class="img-thumbnail" style="width: 250px;">
                                    </a>
                                </div>
                            
                                    <div class="small fw-bolder">${item['title']}</div>
                                    <div class="small text-muted">Institute: ${item['organization']}</div>
                                    <div class="small text-muted">Credential Id: ${item['credential_id']}</div>
                                     <div class="text-primary mb-2">Issue Date: ${item['issue_date']}</div>
                                    <div class="small text-muted">
                                        <a href="${item['credential_url']}" target="_blank">${item['credential_url']}</a>
                                    </div>
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
