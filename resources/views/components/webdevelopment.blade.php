@section('style')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        caption {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        /* more */

        .table thead th {
            background-color: #f2f2f2;
            text-align: center;
        }

        .table tbody td {
            vertical-align: middle;
        }

        .alert-info {
            background-color: #e9f7fd;
            color: #31708f;
        }

        .mainimg {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: transparent;
            mix-blend-mode: multiply;
        }
    </style>
@endsection

<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="display-5 fw-bold mb-4">Professional Web Development</h2>
                <p class="text-muted fw-medium display-7">
                    Developing professional websites with HTML, CSS, Laravel, PHP, and WordPress. From enterprise
                    solutions to e-commerce platforms, we bring your ideas to life with finesse.
                </p>

            </div>

            <!-- Image Content -->
            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/img/site_content/webdev.jpg') }}" alt="Illustration of web development"
                    class="img-fluid rounded mainimg" loading="lazy" width="500" height="300">
            </div>
        </div>
    </div>
</section>

<section class="container mt-5">
    <div class="section-header text-center mb-5">
        <h2 class="display-10 fw-bold">Web Development Services Price</h2>
    </div>
    <table>
        <thead>
            <tr>
                <th>Details</th>
                <th>Price (USD)</th>
                <th>Price (QAR)</th>
                <th>Time Duration</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Basic Website (HTML/CSS)</td>
                <td>$250+</td>
                <td>910+ QAR</td>
                <td>1-2 Weeks</td>
            </tr>
            <tr>
                <td>Dynamic Website (Laravel/PHP)</td>
                <td>$400+</td>
                <td>1,460+ QAR</td>
                <td>2-4 Weeks</td>
            </tr>
            <tr>
                <td>E-commerce Platform</td>
                <td>$500+</td>
                <td>1,825+ QAR</td>
                <td>3-5 Weeks</td>
            </tr>
            <tr>
                <td>WordPress Website Setup</td>
                <td>$412+</td>
                <td>1500+ QAR</td>
                <td>1-2 Weeks</td>
            </tr>
            <tr>
                <td>WordPress SEO Plugins Setup</td>
                <td>$200+</td>
                <td>730+ QAR</td>
                <td>1 Weeks</td>
            </tr>
            <!-- Additional Service Items -->
            <tr>
                <td>Custom Web Application Development</td>
                <td>$800+</td>
                <td>2,920+ QAR</td>
                <td>4-6 Weeks</td>
            </tr>
            <tr>
                <td>Website Maintenance and Support</td>
                <td>$266/month</td>
                <td>1000 QAR/month</td>
                <td>Ongoing</td>
            </tr>
            <tr>
                <td>Website Redesign</td>
                <td>$300+</td>
                <td>1,095+ QAR</td>
                <td>2-3 Weeks</td>
            </tr>
            <tr>
                <td>Mobile Responsivenes Integration</td>
                <td>$200+</td>
                <td>730+ QAR</td>
                <td>1-2 Weeks</td>
            </tr>
            <tr>
                <td>API Integration Services</td>
                <td>$350+</td>
                <td>1,277+ QAR</td>
                <td>2-3 Weeks</td>
            </tr>

        </tbody>
    </table>

    <section class="m-2">
        <div class="section-header text-center mb-5">
            <h2 class="display-10 fw-bold">Technical SEO Services</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Details</th>
                    <th>Price (USD)</th>
                    <th>Price (QAR)</th>
                    <th>Time Duration</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Site Speed Optimization</td>
                    <td>$150+</td>
                    <td>550+ QAR</td>
                    <td>3-5 Days</td>
                </tr>
                <tr>
                    <td>Mobile-Friendliness Improvements</td>
                    <td>$150+</td>
                    <td>550+ QAR</td>
                    <td>3-5 Days</td>
                </tr>
                <tr>
                    <td>Core Web Vitals Optimization</td>
                    <td>$200+</td>
                    <td>730+ QAR</td>
                    <td>1 Week</td>
                </tr>
                <tr>
                    <td>URL Structure & Sitemap Setup</td>
                    <td>$100+</td>
                    <td>365+ QAR</td>
                    <td>2-4 Days</td>
                </tr>
                <tr>
                    <td>Indexing and Crawlability Fixes</td>
                    <td>$150+</td>
                    <td>550+ QAR</td>
                    <td>3-5 Days</td>
                </tr>
                <tr>
                    <td>Technical SEO Audit (with Report)</td>
                    <td>$200+</td>
                    <td>730+ QAR</td>
                    <td>1 Week</td>
                </tr>
            </tbody>
        </table>
    </section>
    <!-- Note Section -->
    <div class="alert alert-info mt-4" role="alert">
        <strong>Note:</strong>
        💡 Final pricing depends on project scope. Contact for a custom quote!
    </div>
    <div class="alert alert-info mt-4" role="alert">
        <strong>Note:</strong> All materials such as <strong>domain and hosting</strong> are not included in the prices
        listed above.
        Clients will need to provide these at an additional cost. Prices are approximate and may vary based on
        promotions and currency exchange rates. Please check the company's official website for the most up-to-date
        pricing.
    </div>

</section>



