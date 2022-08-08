<?php include "_variables.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="United states traveler">

    <!-- css -->
    <link rel="stylesheet" href="assets/style/style.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>United states traveler</title>
</head>

<body>
    <section id="header">
        <div class="container">
            <header>
                <a href="/">
                    <img src="assets/images/logo-usa.png" alt="">
                </a>
            </header>
            <section class="content col-lg-8 col-md-12 left">
                <h1>DISCOVER OUR USA TOURS AND TRAVEL GUIDE</h1>
                <p>Visit Los Angeles, San Francisco, Memphis, New York, Washington DC, Grand Canyon National Park and more.</p>
            </section>
        </div>
    </section>

    <main>
        <div class="container">
            <div class="content">
                <div class="title">
                    <span class="title-main">HOW TRAVEL LEADERS WORKS</span>
                    <span class="title-bg">HOW TRAVEL LEADERS WORKS</span>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="_card">
                            <ul>
                                <h3>SAN FRANCISCO</h3>
                                <p>The iconic Golden Gate Bridge welcomes you to come and sample the artisan produce, ride the streets by cable car, kick back in a vintage saloon, visit Alcatraz, and marvel at its famed fog shrouded silhouette.</p>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="_card">
                            <ul>
                                <h3>NEW ORLEANS</h3>
                                <p>Explore the French Quarter, trundle down oak lined St. Charles Avenue by streetcar, try your hand at Creole cuisine during a cooking class, and kick back in a jazz club as you’re serenaded by this rhythmic city.</p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="point">
        <div class="row">
            <div class="title">
                <span class="title-main">USA TOURS</span>
                <span class="title-bg">USA TOURS</span>
            </div>

            <p style="padding: 0 36em;">Explore the landscapes of America's National Parks, island hop Hawaii or embark on a trans-American adventure from coast to coast. Tour the USA from the cityscapes of Los Angeles and Las Vegas in the West to New York City and Washington DC in the East, and discover Southern treasures from finger clicking jazz and blues to finger licking seafood and barbecue in New Orleans and Memphis.</p>
            <div class="col">
                <img src="assets/images/usa-1.jpg" style="margin-left: 0 !important;" alt="">
            </div>
            <div class="col">
                <img src="assets/images/usa-2.jpg" alt="">
            </div>
            <div class="col">
                <img src="assets/images/usa-3.jpg" style="margin-right: 0 !important;" alt="">
            </div>
        </div>
    </div>

    <section class="traveling">
        <div class="container">
            <div class="header">
                <div class="title">
                    <span class="title-main">Arrival Process</span>
                    <span class="title-bg">Arrival Process</span>
                </div>
            </div>
            <div class="row">
                <div class="col" style="position: relative; top: 2em;">
                    <h2>Before Traveling</h2>
                    <p style="padding: 1em 1em 0 0; font-size: 1.25em;">
                    There is no doubt the United States is a vast land full of amazing destinations. Outdoor enthusiasts will love the dense forests of California and Oregon, the wetlands in Florida, the spectacular mountains in Alaska and Colorado, and the beautiful Hawaiian beaches. Then, there are also all the National Parks, monuments, forests, and of course, amazing cities like New York, San Francisco, Austin, and Portland. No doubt there is a US destination for all types of travelers!.
                    </p>
                </div>
                <div class="col">
                    <img src="assets/images/usa-4.jpg" style="width: 35em;">
                </div>
            </div>
        </div>
        <div class="submit-email">
            <div class="m_card">
                <svg style="height: 1.7em;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path d="M511.6 36.86l-64 415.1c-1.5 9.734-7.375 18.22-15.97 23.05c-4.844 2.719-10.27 4.097-15.68 4.097c-4.188 0-8.319-.8154-12.29-2.472l-122.6-51.1l-50.86 76.29C226.3 508.5 219.8 512 212.8 512C201.3 512 192 502.7 192 491.2v-96.18c0-7.115 2.372-14.03 6.742-19.64L416 96l-293.7 264.3L19.69 317.5C8.438 312.8 .8125 302.2 .0625 289.1s5.469-23.72 16.06-29.77l448-255.1c10.69-6.109 23.88-5.547 34 1.406S513.5 24.72 511.6 36.86z" />
                </svg>
                <p><a href=""><?php echo $email; ?></a></p>
            </div>
        </div>
    </section>

    <footer>
        <ul>
            <li>Copyright © 2022 All Rights Reserved.</li>
            <li><a href="privacy-policy.html"> Privacy policy</a></li>
            <li><a href="terms-and-conditions.html"> Terms & Conditions</a></li>
        </ul>
    </footer>

    <script type="text/javascript" src="//www.privacypolicies.com/public/cookie-consent/4.0.0/cookie-consent.js" charset="UTF-8"></script>
    <script type="text/javascript" charset="UTF-8">
        document.addEventListener('DOMContentLoaded', function() {
            cookieconsent.run({
                "notice_banner_type": "simple",
                "consent_type": "implied",
                "palette": "light",
                "language": "en",
                "page_load_consent_levels": ["strictly-necessary", "functionality", "tracking", "targeting"],
                "notice_banner_reject_button_hide": false,
                "preferences_center_close_button_hide": false,
                "page_refresh_confirmation_buttons": false,
                "website_name": "Tourist Travel"
            });
        });
    </script>

</body>

</html>