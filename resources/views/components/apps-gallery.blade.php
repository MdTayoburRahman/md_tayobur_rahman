{{-- <section class="py-5 bg-gradient-primary-to-secondary text-white">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="display-4 fw-bolder mb-4">The app that I created</h2>
        </div>
    </div>
</section> --}}

<div class="text-center mb-2">
    <h1 class="display-5 fw-bolder mb-5 mt-5"><span class="text-gradient d-inline">Projects</span></h1>
</div>
<div class="container" id="app_gallery_container">

    <div class="row" id="appitemdiv">
    </div>

    <div class="mt-5 mb-5 justify-items-center text-center">
        <a href="https://play.google.com/store/apps/dev?id=8885326976735726594&hl=en"><button class="bn9"><span>More
                    Apps On Google Play Store</span></button></a>
    </div>
</div>



<script>
    async function GetAppsList() {
        let URL = "/applist"

        try {
            // Loader Show Content Hide
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');

            const response = await axios.get(URL);
            console.log(response);

            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

            response.data.forEach((item) => {

                document.getElementById('appitemdiv').innerHTML += (`
        <div class="col-md-3">
            <div class="app-card">
                <img src="${item['image_link']}" alt="${item['title']}" style="height: 100px; width:100px">
                <div class="app-title">${item['title']}</div>
                <div class="app-description">${item['description']}</div>
                <a href="${item['app_link']}" target="_blank" class="download-button">Download</a>
            </div>
        </div>
    `)



            })

        } catch (error) {
            alert("An error occurred while fetching the project list.");
            console.error(error);
        }

    }
    GetAppsList();
</script>
