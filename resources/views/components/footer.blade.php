<footer class="py-4 shadow-sm text-white bg-dark mt-5">
    {{-- <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="small m-0">Copyright &copy; Md Tayobur Rahman - 2024</div>
            </div>
        </div>
    </div> --}}

    <div class="footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="footer_menu">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/resume') }}">Resume</a></li>
                            <li><a href="{{ url('/projects') }}">Projects</a></li>
                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer_copyright">
                        <p>© 2024. All Rights Reserved.</p>
                    </div>
                    <div class="footer_profile">
                        <ul>
                            <li><a target="_blank" id="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" id="github"><i class="fa fa-github"></i></a></li>
                            <li><a target="_blank" id="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" id="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a target="_blank" id="youtube"><i class="fa fa-youtube"></i></a></li>
                            <li><a target="_blank" id="google_play"><i class="fa fa-google-play"></i></a></li>

                        </ul>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </div>
</footer>

<script>
    async function getSocialLink() {
        try {
            let URL = "/socialData"
            let response = await axios.get(URL);

            debugger;
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
    getSocialLink();
</script>
