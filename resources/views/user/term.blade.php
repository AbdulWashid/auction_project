<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sbidu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="window.history.back()">Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Terms & Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="text-center mb-4">Terms and Conditions</h1>
                
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">1. Introduction</h5>
                        <p class="card-text">
                            Welcome to our website. By accessing and using this website, you accept and agree to be bound by the terms and conditions set forth below. If you do not agree to these terms, please do not use this website.
                        </p>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">2. Intellectual Property Rights</h5>
                        <p class="card-text">
                            Unless otherwise stated, we or our licensors own the intellectual property rights in the website and material on the website. Subject to the license below, all these intellectual property rights are reserved.
                        </p>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">3. Restrictions</h5>
                        <p class="card-text">
                            You are specifically restricted from all of the following:
                            <ul>
                                <li>Publishing any website material in any other media.</li>
                                <li>Selling, sublicensing, and/or otherwise commercializing any website material.</li>
                                <li>Using this website in any way that is or may be damaging to this website.</li>
                            </ul>
                        </p>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">4. Limitation of Liability</h5>
                        <p class="card-text">
                            In no event shall we be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on our website.
                        </p>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">5. Changes to Terms</h5>
                        <p class="card-text">
                            We reserve the right to revise these terms and conditions at any time without notice. By using this website, you are agreeing to be bound by the then-current version of these terms and conditions.
                        </p>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">6. Governing Law</h5>
                        <p class="card-text">
                            These terms and conditions are governed by and construed in accordance with the laws of your country, and you irrevocably submit to the exclusive jurisdiction of the courts in that location.
                        </p>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <p>If you have any questions about these Terms and Conditions, please contact us.</p>
                    <a href="mailto:info@yourbrand.com" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2023 Your Brand. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>