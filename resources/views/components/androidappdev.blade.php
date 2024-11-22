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
                <h2 class="display-5 fw-bold mb-4">Android App Development</h2>
                <p class="text-muted fw-medium display-7">
                    Crafting intuitive and dynamic Android apps using Java and Kotlin in Android Studio. Expertise
                    includes Firebase integration, database management, and creating seamless user experiences.
                </p>
            </div>

            <!-- Image Content -->
            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/img/site_content/androiddev.png') }}"
                    alt="Illustration of Android app development" class="img-fluid rounded mainimg" loading="lazy"
                    width="500" height="300">
            </div>
        </div>
    </div>
</section>

<section class="container mt-5">
    <div class="section-header text-center mb-5">
        <h2 class="display-10 fw-bold">Android App Development Services</h2>
    </div>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Details</th>
                <th>Price (USD)</th>
                <th>Price (QAR)</th>
                <th>Time Duration</th>
            </tr>
        </thead>
        <tbody>
            <!-- Development Packages -->
            <tr>
                <td>Basic App (Static Features)</td>
                <td>$300</td>
                <td>1,100 QAR</td>
                <td>1-2 Weeks</td>
            </tr>
            <tr>
                <td>Intermediate App (Firebase/Database Integration)</td>
                <td>$500</td>
                <td>1,800 QAR</td>
                <td>2-4 Weeks</td>
            </tr>
            <tr>
                <td>Advanced App (Custom Features, Push Notifications, Payment Integration)</td>
                <td>$800</td>
                <td>2,900 QAR</td>
                <td>4-6 Weeks</td>
            </tr>
            <tr>
                <td>UI/UX Redesign</td>
                <td>$100</td>
                <td>365 QAR</td>
                <td>1 Week</td>
            </tr>
            <!-- Additional Features -->
            <tr>
                <td>Push Notifications Integration</td>
                <td>$75</td>
                <td>275 QAR</td>
                <td>1-2 Days</td>
            </tr>
            <tr>
                <td>Payment Gateway Integration</td>
                <td>$150</td>
                <td>550 QAR</td>
                <td>3-5 Days</td>
            </tr>
            <tr>
                <td>Geo-location Services</td>
                <td>$100</td>
                <td>365 QAR</td>
                <td>2-4 Days</td>
            </tr>
            <tr>
                <td>Chat Integration</td>
                <td>$120</td>
                <td>440 QAR</td>
                <td>3-5 Days</td>
            </tr>
            <!-- Google Play Console Services -->
            <tr>
                <td>App Publishing (Google Play Console)</td>
                <td>$100</td>
                <td>365 QAR</td>
                <td>2-3 Days</td>
            </tr>
            <tr>
                <td>Version Updates</td>
                <td>$50</td>
                <td>185 QAR</td>
                <td>1-2 Days</td>
            </tr>
            <tr>
                <td>Performance Tracking & Reporting</td>
                <td>$75</td>
                <td>275 QAR</td>
                <td>3-5 Days</td>
            </tr>
            <tr>
                <td>Full Account Management (Google Play Console)</td>
                <td>$200</td>
                <td>730 QAR</td>
                <td>Monthly</td>
            </tr>
        </tbody>
    </table>
</section>

<section class="container mt-5">
    <div class="section-header text-center mb-5">
        <h2 class="display-10 fw-bold">Admob Monetization Services</h2>
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
                <td>Ad Integration</td>
                <td>$50+</td>
                <td>185+ QAR</td>
                <td>1-2 Days</td>
            </tr>
            <tr>
                <td>Revenue Optimization</td>
                <td>$100+</td>
                <td>365+ QAR</td>
                <td>3-5 Days</td>
            </tr>
            <tr>
                <td>Ad Strategy Consultation</td>
                <td>$75+</td>
                <td>275+ QAR</td>
                <td>1 Day</td>
            </tr>
        </tbody>
    </table>
</section>




<section class="container mt-5">
    <!-- Note Section -->
    <div class="alert alert-info mt-4" role="alert">
        <strong>Note:</strong>
        💡 Final pricing for Android app development depends on the complexity and scope of your project. Contact us for
        a custom quote tailored to your needs!
    </div>
    <div class="alert alert-info mt-4" role="alert">
        <strong>Note:</strong> All third-party services such as <strong>Google Play Store developer account</strong>,
        API subscriptions, and cloud services are not included in the listed prices.
        Clients will need to purchase these separately. Prices are approximate and may vary based on specific
        requirements and currency exchange rates. Please reach out or visit our official website for the most accurate
        and up-to-date pricing details.
    </div>
</section>





