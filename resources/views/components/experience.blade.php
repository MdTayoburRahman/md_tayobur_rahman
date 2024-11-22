<!-- Experience Section -->
<section class="experience-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-primary fw-bold">Professional Journey</h2>
            <p class="text-muted">Discover my experiences and the milestones I've achieved along the way</p>
        </div>
        <div id="experience-list" class="row">
            <!-- Experience items will be injected here -->
        </div>
    </div>
</section>


<style>
    .experience-section {
        padding: 60px 0;
    }

    .experience-card {
        transition: transform 0.3s, box-shadow 0.3s;
        border: none;
        border-radius: 10px;
        overflow: hidden;
        background-color: #ffffff;
    }

    .experience-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .experience-card img {
        width: 100%;
        height: 80px;
        margin: 5%;
        object-fit: contain;
    }

    .experience-card-body {
        padding: 20px;
    }

    .experience-card-title {
        font-size: 1.25rem;
        font-weight: bold;
        color: #1e73be;
    }

    .experience-card-subtitle {
        font-size: 1rem;
        color: #495057;
        margin-bottom: 10px;
    }

    .experience-duration {
        font-weight: bold;
        color: #6c757d;
        margin-bottom: 10px;
    }

    .experience-details {
        color: #5a5a5a;
        line-height: 1.6;
    }

    @media (max-width: 576px) {
        .experience-card img {
            height: 150px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        getExpList();
    });

    async function getExpList() {
        try {
            const URL = "/experiencesData"; // Update this URL to your actual data endpoint
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
        const col = document.createElement('div');
        col.className = 'col-md-6 col-lg-4 mb-4';

        col.innerHTML = `
            <div class="card experience-card h-100">
                <a href="${item.company_website}" target="_blank">
                    <img src="${item.company_image}" alt="${item.company_name} logo">
                </a>
                <div class="card-body experience-card-body">
                    <h5 class="experience-card-title">${item.title}</h5>
                    <h6 class="experience-card-subtitle">${item.designation} at ${item.company_name}</h6>
                    <p class="experience-duration">${item.duration}</p>
                    <p class="experience-details">${item.details}</p>
                </div>
            </div>
        `;

        return col;
    }
</script>
