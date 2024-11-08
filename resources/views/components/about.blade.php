<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <p id="about-title" class="lead fw-light mb-1"></p>

                    <div class="d-flex justify-content-center fs-2 gap-3">
                        {{-- <a target="_blank" id="twitter" class="text-gradient" href=""><i
                                class="bi bi-twitter"></i></a> --}}
                        <a target="_blank" id="linkedin" class="text-gradient" href=""><i
                                class="bi bi-linkedin"></i></a>
                        <a target="_blank" id="github" class="text-gradient" href=""><i
                                class="bi bi-github"></i></a>
                        <a target="_blank" id="instagram" class="text-gradient" href=""><i
                                class="bi bi-instagram"></i></a>
                        <a target="_blank" id="facebook" class="text-gradient" href=""><i
                                class="bi bi-facebook"></i></a>
                        <a target="_blank" id="youtube" class="text-gradient" href=""><i
                                class="bi bi-youtube"></i></a>
                        <a target="_blank" id="google_play" class="text-gradient" href=""> <i
                                class="bi bi-google-play"></i></a>
                    </div>
                    <hr>
                    <p id="about-des" class="text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Fugit
                        dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis
                        sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                    {{-- social icon div --}}

                </div>
            </div>
        </div>
    </div>
</section>

<script>
    GetAboutDetail();
    async function GetAboutDetail() {
        try {
            let URL = "/aboutData"
            let response = await axios.get(URL);
            document.getElementById('about-title').innerHTML = response.data.title;
            document.getElementById('about-des').innerHTML = response.data.details;

        } catch (e) {
            alert(e)
        }
    }


    getSocialLink()
    async function getSocialLink() {
        try {
            let URL = "/socialData"
            let response = await axios.get(URL);
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

            // document.getElementById('twitter').href = response.data['twitterLink'];
            document.getElementById('linkedin').href = response.data['linkedinLink'];
            document.getElementById('github').href = response.data['githubLink'];
            document.getElementById('instagram').href = response.data['instagramLink'];
            document.getElementById('facebook').href = response.data['facebookLink'];
            document.getElementById('youtube').href = response.data['youtubeLink'];
            document.getElementById('google_play').href = response.data['googlePlayLink'];


        } catch (e) {
            alert(e)
        }
    }
</script>
