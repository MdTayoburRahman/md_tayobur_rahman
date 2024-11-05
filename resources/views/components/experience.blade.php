<!-- Experience Section -->
<section class="py-5">
    <div class="container-fluid px-4 px-md-5 my-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-12 col-md-11 col-lg-10 col-xl-9 col-xxl-8">
                <div class="text-center mb-4">
                    <h2 class="text-secondary fw-bolder">Working Experience</h2>
                </div>

                <div id="experience-list" class="row g-4">
                    <!-- Experience items will be injected here -->
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .experience-item {
        height: auto;
        /* Set a fixed height for uniformity */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* Distribute space evenly */
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .experience-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .experience-item h5 {
        color: #007bff;
        /* Primary color */
    }

    .experience-item img {
        width: 100px;
        /* Medium size for images */
        height: auto;
        /* Maintain aspect ratio */
        border-radius: 10px;
        /* Rounded corners for images */
    }

    .experience-duration {
        font-weight: bold;
        color: #6c757d;
        /* Secondary text color */
    }

    .experience-details {
        font-style: italic;
        color: #343a40;
        /* Dark text color */
    }

    .card-body {
        display: flex;
        flex-direction: column;
        /* Ensure content stacks vertically */
        justify-content: space-between;
        /* Distribute space */
    }
</style>

<script>
    getExpList();

    async function getExpList() {
        try {
            const URL = "/experiencesData";
            const response = await axios.get(URL);

            response.data.forEach(item => {
                const experienceItem = createExperienceItem(item);
                document.getElementById('experience-list').appendChild(experienceItem);
            });
        } catch (error) {
            console.error("Error fetching experience data:", error);
            alert("Failed to load experience data. Please try again later.");
        }
    }

    function createExperienceItem(item) {
        const container = document.createElement('div');
        container.className = 'experience-item col-12 col-md-6 col-lg-4'; // Responsive layout

        container.innerHTML = `
            <div class="card bg-light shadow-sm rounded h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3">
                            <a href="${item.company_website}" target="_blank">
                                <img src="${item.company_image}" alt="${item.company_name} logo" class="img-thumbnail">
                            </a>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">${item.title}</h5>
                            <p class="text-muted mb-0">${item.designation}</p>
                        </div>
                    </div>
                    <p class="experience-duration mb-2">${item.duration}</p>
                    <p class="experience-details mb-0">${item.details}</p>
                </div>
            </div>
        `;

        return container;
    }
</script>
