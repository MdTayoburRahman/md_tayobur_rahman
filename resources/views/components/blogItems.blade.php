<div class="container">
    <div id="content_div" class="row mt-n5">
        <!-- Blog posts will go here -->
    </div>

    <div class="row mt-6 wow fadeInUp mt-3" data-wow-delay=".6s"
        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
        <div class="col-12">
            <ul id="pagination" class="pagination text-small text-uppercase text-extra-dark-gray">
                <!-- Pagination links will be dynamically inserted here -->
            </ul>
        </div>
    </div>
</div>

<script>
    async function getAllPosts(page = 1) {
        try {
            let url = `/blog/all?page=${page}`;
            let response = await axios.get(url);
            let {
                data,
                meta
            } = response.data;

            // Clear existing content
            let contentDiv = document.getElementById('content_div');
            contentDiv.innerHTML = '';

            // Populate blog posts
            data.forEach((element) => {
                contentDiv.innerHTML += `
                <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".2s" 
                     style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="blog-grid">
                        <div class="blog-grid-img position-relative">
                            <img alt="img" src="${element.thumbnail}">
                        </div>
                        <div class="blog-grid-text p-4">
                            <h3 class="h5 mb-3"><a href="#!">${element.title}</a></h3>
                            <p class="display-30">${element.sub_title}</p>
                            <div class="meta meta-style2">
                                <ul>
                                    <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
                                    <li><a href="#!"><i class="fas fa-comments"></i> 38</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>`;
            });

            // Update pagination links if pagination data exists
            // let paginationDiv = document.getElementById('pagination');
            // paginationDiv.innerHTML = '';
            // if (pagination) {
            //     for (let i = 1; i <= pagination.last_page; i++) {
            //         paginationDiv.innerHTML += `
            //         <li class="page-item ${pagination.current_page === i ? 'active' : ''}">
            //             <a class="page-link" href="javascript:void(0);" onclick="getAllPosts(${i})">${i}</a>
            //         </li>`;
            //     }
            // }

            // Update pagination links dynamically
            let paginationDiv = document.getElementById('pagination');
            paginationDiv.innerHTML = '';

            // Check if meta is defined and not empty
            if (meta && Object.keys(meta).length > 0) {
                // Previous page link
                if (meta.current_page > 1) {
                    paginationDiv.innerHTML += `
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0);" onclick="getAllPosts(${meta.current_page - 1})">Previous</a>
                </li>`;
                }

                // Numbered page links
                for (let i = 1; i <= meta.last_page; i++) {
                    paginationDiv.innerHTML += `
                <li class="page-item ${meta.current_page === i ? 'active' : ''}">
                    <a class="page-link" href="javascript:void(0);" onclick="getAllPosts(${i})">${i}</a>
                </li>`;
                }

                // Next page link
                if (meta.current_page < meta.last_page) {
                    paginationDiv.innerHTML += `
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0);" onclick="getAllPosts(${meta.current_page + 1})">Next</a>
                </li>`;
                }
            } else {
                console.error('Pagination meta data not found or invalid.');
            }

        } catch (error) {
            alert(error.message);
            console.error(error);
        }
    }

    getAllPosts(); // Initially load first page
</script>
