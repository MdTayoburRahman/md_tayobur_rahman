<div class="container px-5 my-5">

    <div class="row gx-5 justify-content-center">

        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>

                <p>Hi, I'm an experienced software developer proficient in Java, Android Studio,
                    Laravel,
                    PHP, JavaScript, HTML, CSS, Bootstrap, and MySQL. Throughout my career, I have leveraged these
                    skills to
                    design, develop, and deploy various robust and user-friendly applications. My strong problem-solving
                    skills,
                    coupled with a passion for continuous learning, enable me to adapt to new trends and technologies
                    effectively. Whether working independently or as part of a team, I bring strong communication
                    skills,
                    attention to detail, and a focus on delivering high-quality products that enhance user experience.
                </p>
            </div>

            <!-- Experience Section-->
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-secondary fw-bolder mb-0">Working Experience</h2>

                </div>

                <div id="experience-list">
                    {{-- here will be  experience-list --}}
                </div>



            </section>
        </div>
    </div>
</div>


<script>
    getExpList();
    async function getExpList() {

        try {
            let URL = "/experiencesData"
            let response = await axios.get(URL);
            response.data.forEach((item) => {
                document.getElementById('experience-list').innerHTML += (` <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                     <div class="ms-3">
                                    <a href="${item['company_website']}" target="_blank">
                                        <img src="${item['company_image']}" alt="Media Thumbnail" class="img-thumbnail" style="width: 150px;">
                                    </a>
                                </div>
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">${item['duration']}</div>
                                        <div class="small fw-bolder">
                                            <a href="${item['company_website']}" target="_blank">${item['company_website']}</a></div>
                                        <div class="small fw-bolder">${item['title']}</div>
                                        <div class="small text-muted">${item['designation']}</div>
                                    </div>
                                </div>
                                <div class="col-lg-8"><div>${item['details']}</div></div>
                            </div>`)


            })




        } catch (e) {
            alert(e)
        }


    }
</script>
