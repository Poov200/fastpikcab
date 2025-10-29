<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fastpikcab Outstation Cab Service | Book Taxi Across Tamil Nadu</title>
    <meta name="description"
        content="Fastpikcab offers reliable outstation cab services across Tamil Nadu. Book one-way taxis from Chennai, Coimbatore, Madurai, Trichy, Vellore, Salem, Bangalore and more to any destination in the state.">
    <meta name="keywords"
        content="Outstation Cab Service, One Way Drop Taxi, Drop Taxi Tervice, Outstation Taxi Booking, South India Taxi service, Cheap Taxi Service, 24/7 Cab Booking, Local Taxi, outstation cab service, taxi booking, one way taxi, Chennai to Bangalore, Coimbatore to Madurai, Tamil Nadu taxi service, Fastpikcab">

    <!-- Schema.org markup for local business -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LocalBusiness",
          "name": "Fastpikcab Outstation Cab Service",
          "image": "https://example.com/logo.png",
          "url": "https://fastpikcab.com",
          "telephone": "+91-1234567890",
          "priceRange": "$$",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Main Street",
            "addressLocality": "Chennai",
            "addressRegion": "Tamil Nadu",
            "postalCode": "600001",
            "addressCountry": "India"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 13.0827,
            "longitude": 80.2707
          },
          "hasMap": "https://goo.gl/maps/example",
          "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday",
              "Saturday",
              "Sunday"
            ],
            "opens": "00:00",
            "closes": "23:59"
          },
          "makesOffer": {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Outstation Cab Service",
              "serviceType": ["One Way Taxi", "Round Trip Taxi"]
            }
          }
        }
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            color: #FFA500;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .header p {
            color: #666;
            font-size: 18px;
        }

        .route-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
            overflow: hidden;
        }

        .route-header {
            background-color: #FFF8DC;
            padding: 15px 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s;
        }

        .route-header:hover {
            background-color: #FFEFD5;
        }

        .route-title {
            font-weight: bold;
            color: #FFA500;
            margin: 0;
            font-size: 18px;
        }

        .route-arrow {
            color: #FFA500;
            transition: transform 0.3s;
        }

        .route-content {
            padding: 20px;
            display: none;
        }

        .route-content.active {
            display: block;
        }

        .route-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .route-item:last-child {
            border-bottom: none;
        }

        .route-icon {
            background-color: #FFA500;
            color: white;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .route-text {
            font-size: 16px;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Fastpikcab OUTSTATION CAB SERVICE</h1>
            <p>Reliable and Affordable Taxi Services Across Tamil Nadu</p>
        </div>

        <!-- Chennai Routes -->
        <div class="route-card">
            <div class="route-header" onclick="toggleRoute('chennai-routes')">
                <h3 class="route-title">CAB SERVICE FROM CHENNAI</h3>
                <i class="fas fa-chevron-down route-arrow"></i>
            </div>
            <div class="route-content active" id="chennai-routes">
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-coimbatore') }}">Chennai to Coimbatore one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-madurai') }}">Chennai to Madurai one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-trichy') }}">Chennai to Trichy one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-salem') }}">Chennai to Salem one way taxi</a>
                    </div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-tirunelveli') }}">Chennai to Tirunelveli one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-erode') }}">Chennai to Erode one way taxi</a>
                    </div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-vellore') }}">Chennai to Vellore one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-thoothukudi') }}">Chennai to Tuticorin one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-thanjavur') }}">Chennai to Thanjavur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-dindigul') }}">Chennai to Dindigul one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-cuddalore') }}">Chennai to Cuddalore one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-kanchipuram') }}">Chennai to Kanchipuram one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-nagercoil') }}">Chennai to Nagercoil one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-karur') }}">Chennai to Karur one way taxi</a>
                    </div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-tiruppur') }}">Chennai to Tiruppur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-sivakasi') }}">Chennai to Sivakasi one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-hosur') }}">Chennai to Hosur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-krishnagiri') }}">Chennai to Krishnagiri
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-namakkal') }}">Chennai to Namakkal one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-villupuram') }}">Chennai to Villupuram one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-pudukkottai') }}">Chennai to Pudukkottai
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-nagapattinam') }}">Chennai to Nagapattinam
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-arakkonam') }}">Chennai to Arakkonam one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-chengalpattu') }}">Chennai to Chengalpattu
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-mayiladuthurai') }}">Chennai to
                            Mayiladuthurai one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-thiruvarur') }}">Chennai to Thiruvarur one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-arani') }}">Chennai to Arani one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-ranipet') }}">Chennai to Ranipet one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-perambalur') }}">Chennai to Perambalur one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-tenkasi') }}">Chennai to Tenkasi one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-virudhunagar') }}">Chennai to Virudhunagar
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-ramanathapuram') }}">Chennai to
                            Ramanathapuram one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('chennai-to-dharmapuri') }}">Chennai to Dharmapuri one
                            way taxi</a></div>
                </div>
            </div>
        </div>

        <!-- Coimbatore Routes -->
        <div class="route-card">
            <div class="route-header" onclick="toggleRoute('coimbatore-routes')">
                <h3 class="route-title">CAB SERVICE FROM COIMBATORE</h3>
                <i class="fas fa-chevron-down route-arrow"></i>
            </div>
            <div class="route-content" id="coimbatore-routes">
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-chennai') }}">Coimbatore to Chennai one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-madurai') }}">Coimbatore to Madurai one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-trichy') }}">Coimbatore to Trichy one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-salem') }}">Coimbatore to Salem one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-tirunelveli') }}">Coimbatore to
                            Tirunelveli one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-erode') }}">Coimbatore to Erode one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-vellore') }}">Coimbatore to Vellore one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-thoothukudi') }}">Coimbatore to
                            Tuticorin
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-thanjavur') }}">Coimbatore to Thanjavur
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-dindigul') }}">Coimbatore to Dindigul
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-cuddalore') }}">Coimbatore to Cuddalore
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-kanchipuram') }}">Coimbatore to
                            Kanchipuram one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-nagercoil') }}">Coimbatore to Nagercoil
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-karur') }}">Coimbatore to Karur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-tiruppur') }}">Coimbatore to Tiruppur
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-sivakasi') }}">Coimbatore to Sivakasi
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-hosur') }}">Coimbatore to Hosur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-krishnagiri') }}">Coimbatore to
                            Krishnagiri one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-namakkal') }}">Coimbatore to Namakkal
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-villupuram') }}">Coimbatore to
                            Villupuram one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-pudukkottai') }}">Coimbatore to
                            Pudukkottai one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-nagapattinam') }}">Coimbatore to
                            Nagapattinam one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-arakkonam') }}">Coimbatore to Arakkonam
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-chengalpattu') }}">Coimbatore to
                            Chengalpattu one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-mayiladuthurai') }}">Coimbatore to
                            Mayiladuthurai one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-thiruvarur') }}">Coimbatore to
                            Thiruvarur one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-arani') }}">Coimbatore to Arani one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-ranipet') }}">Coimbatore to Ranipet one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-perambalur') }}">Coimbatore to
                            Perambalur one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-tenkasi') }}">Coimbatore to Tenkasi one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-virudhunagar') }}">Coimbatore to
                            Virudhunagar one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-ramanathapuram') }}">Coimbatore to
                            Ramanathapuram one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('coimbatore-to-dharmapuri') }}">Coimbatore to
                            Dharmapuri one way taxi</a></div>
                </div>
            </div>
        </div>

        <div class="route-card">
            <div class="route-header" onclick="toggleRoute('madurai-routes')">
                <h3 class="route-title">CAB SERVICE FROM MADURAI</h3>
                <i class="fas fa-chevron-down route-arrow"></i>
            </div>
            <div class="route-content" id="madurai-routes">
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-chennai') }}">Madurai to Chennai one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-coimbatore') }}">Madurai to Coimbatore one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-trichy') }}">Madurai to Trichy one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-salem') }}">Madurai to Salem one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-tirunelveli') }}">Madurai to Tirunelveli
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-erode') }}">Madurai to Erode one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-vellore') }}">Madurai to Vellore one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-thoothukudi') }}">Madurai to Tuticorin one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-thanjavur') }}">Madurai to Thanjavur one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-dindigul') }}">Madurai to Dindigul one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-cuddalore') }}">Madurai to Cuddalore one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-kanchipuram') }}">Madurai to Kanchipuram
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-nagercoil') }}">Madurai to Nagercoil one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-karur') }}">Madurai to Karur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-tiruppur') }}">Madurai to Tiruppur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-sivakasi') }}">Madurai to Sivakasi one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-hosur') }}">Madurai to Hosur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-krishnagiri') }}">Madurai to Krishnagiri
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-namakkal') }}">Madurai to Namakkal one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-villupuram') }}">Madurai to Villupuram one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-pudukkottai') }}">Madurai to Pudukkottai
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-nagapattinam') }}">Madurai to Nagapattinam
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-arakkonam') }}">Madurai to Arakkonam one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-chengalpattu') }}">Madurai to Chengalpattu
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-mayiladuthurai') }}">Madurai to
                            Mayiladuthurai one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-thiruvarur') }}">Madurai to Thiruvarur one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-arani') }}">Madurai to Arani one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-ranipet') }}">Madurai to Ranipet one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-perambalur') }}">Madurai to Perambalur one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-tenkasi') }}">Madurai to Tenkasi one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-virudhunagar') }}">Madurai to Virudhunagar
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-ramanathapuram') }}">Madurai to
                            Ramanathapuram one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('madurai-to-dharmapuri') }}">Madurai to Dharmapuri one
                            way taxi</a></div>
                </div>
            </div>
        </div>

        <div class="route-card">
            <div class="route-header" onclick="toggleRoute('trichy-routes')">
                <h3 class="route-title">CAB SERVICE FROM TRICHY</h3>
                <i class="fas fa-chevron-down route-arrow"></i>
            </div>
            <div class="route-content" id="trichy-routes">
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-chennai') }}">Trichy to Chennai one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-coimbatore') }}">Trichy to Coimbatore one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-madurai') }}">Trichy to Madurai one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-salem') }}">Trichy to Salem one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-tirunelveli') }}">Trichy to Tirunelveli one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-erode') }}">Trichy to Erode one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-vellore') }}">Trichy to Vellore one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-thoothukudi') }}">Trichy to Thoothukudi one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-thanjavur') }}">Trichy to Thanjavur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-dindigul') }}">Trichy to Dindigul one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-cuddalore') }}">Trichy to Cuddalore one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-kanchipuram') }}">Trichy to Kanchipuram one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-nagercoil') }}">Trichy to Nagercoil one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-karur') }}">Trichy to Karur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-tiruppur') }}">Trichy to Tiruppur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-sivakasi') }}">Trichy to Sivakasi one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-hosur') }}">Trichy to Hosur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-krishnagiri') }}">Trichy to Krishnagiri one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-namakkal') }}">Trichy to Namakkal one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-villupuram') }}">Trichy to Villupuram one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-pudukkottai') }}">Trichy to Pudukkottai one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-nagapattinam') }}">Trichy to Nagapattinam
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-arakkonam') }}">Trichy to Arakkonam one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-chengalpattu') }}">Trichy to Chengalpattu
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-mayiladuthurai') }}">Trichy to
                            Mayiladuthurai one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-thiruvarur') }}">Trichy to Thiruvarur one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-arani') }}">Trichy to Arani one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-ranipet') }}">Trichy to Ranipet one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-perambalur') }}">Trichy to Perambalur one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-tenkasi') }}">Trichy to Tenkasi one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-virudhunagar') }}">Trichy to Virudhunagar
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-ramanathapuram') }}">Trichy to
                            Ramanathapuram one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('trichy-to-dharmapuri') }}">Trichy to Dharmapuri one
                            way taxi</a></div>
                </div>
            </div>
        </div>

        <div class="route-card">
            <div class="route-header" onclick="toggleRoute('vellore-routes')">
                <h3 class="route-title">CAB SERVICE FROM VELLORE</h3>
                <i class="fas fa-chevron-down route-arrow"></i>
            </div>
            <div class="route-content" id="vellore-routes">
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-chennai') }}">Vellore to Chennai one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-coimbatore') }}">Vellore to Coimbatore one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-madurai') }}">Vellore to Madurai one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-trichy') }}">Vellore to Trichy one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-salem') }}">Vellore to Salem one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-tirunelveli') }}">Vellore to Tirunelveli
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-erode') }}">Vellore to Erode one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-thoothukudi') }}">Vellore to Thoothukudi
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-thanjavur') }}">Vellore to Thanjavur one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-dindigul') }}">Vellore to Dindigul one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-cuddalore') }}">Vellore to Cuddalore one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-kanchipuram') }}">Vellore to Kanchipuram
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-nagercoil') }}">Vellore to Nagercoil one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-karur') }}">Vellore to Karur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-tiruppur') }}">Vellore to Tiruppur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-sivakasi') }}">Vellore to Sivakasi one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-hosur') }}">Vellore to Hosur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-krishnagiri') }}">Vellore to Krishnagiri
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-namakkal') }}">Vellore to Namakkal one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-villupuram') }}">Vellore to Villupuram one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-pudukkottai') }}">Vellore to Pudukkottai
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-nagapattinam') }}">Vellore to Nagapattinam
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-arakkonam') }}">Vellore to Arakkonam one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-chengalpattu') }}">Vellore to Chengalpattu
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-mayiladuthurai') }}">Vellore to
                            Mayiladuthurai one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-thiruvarur') }}">Vellore to Thiruvarur one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-arani') }}">Vellore to Arani one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-ranipet') }}">Vellore to Ranipet one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-perambalur') }}">Vellore to Perambalur one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-tenkasi') }}">Vellore to Tenkasi one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-virudhunagar') }}">Vellore to Virudhunagar
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-ramanathapuram') }}">Vellore to
                            Ramanathapuram one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('vellore-to-dharmapuri') }}">Vellore to Dharmapuri one
                            way taxi</a></div>
                </div>
            </div>
        </div>

        <div class="route-card">
            <div class="route-header" onclick="toggleRoute('salem-routes')">
                <h3 class="route-title">CAB SERVICE FROM SALEM</h3>
                <i class="fas fa-chevron-down route-arrow"></i>
            </div>
            <div class="route-content" id="salem-routes">
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-chennai') }}">Salem to Chennai one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-coimbatore') }}">Salem to Coimbatore one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-madurai') }}">Salem to Madurai one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-trichy') }}">Salem to Trichy one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-tirunelveli') }}">Salem to Tirunelveli one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-erode') }}">Salem to Erode one way taxi</a>
                    </div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-vellore') }}">Salem to Vellore one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-thoothukudi') }}">Salem to Thoothukudi one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-thanjavur') }}">Salem to Thanjavur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-dindigul') }}">Salem to Dindigul one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-cuddalore') }}">Salem to Cuddalore one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-kanchipuram') }}">Salem to Kanchipuram one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-nagercoil') }}">Salem to Nagercoil one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-karur') }}">Salem to Karur one way taxi</a>
                    </div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-tiruppur') }}">Salem to Tiruppur one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-sivakasi') }}">Salem to Sivakasi one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-hosur') }}">Salem to Hosur one way taxi</a>
                    </div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-krishnagiri') }}">Salem to Krishnagiri one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-namakkal') }}">Salem to Namakkal one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-villupuram') }}">Salem to Villupuram one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-pudukkottai') }}">Salem to Pudukkottai one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-nagapattinam') }}">Salem to Nagapattinam one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-arakkonam') }}">Salem to Arakkonam one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-chengalpattu') }}">Salem to Chengalpattu one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-mayiladuthurai') }}">Salem to
                            Mayiladuthurai one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-thiruvarur') }}">Salem to Thiruvarur one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-arani') }}">Salem to Arani one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-ranipet') }}">Salem to Ranipet one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-perambalur') }}">Salem to Perambalur one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-tenkasi') }}">Salem to Tenkasi one way
                            taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-virudhunagar') }}">Salem to Virudhunagar
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-ramanathapuram') }}">Salem to
                            Ramanathapuram one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('salem-to-dharmapuri') }}">Salem to Dharmapuri one
                            way taxi</a></div>
                </div>
            </div>
        </div>

        <div class="route-card">
            <div class="route-header" onclick="toggleRoute('villupuram-routes')">
                <h3 class="route-title">CAB SERVICE FROM VILLUPURAM</h3>
                <i class="fas fa-chevron-down route-arrow"></i>
            </div>
            <div class="route-content" id="villupuram-routes">
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-chennai') }}">Villupuram to Chennai
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-coimbatore') }}">Villupuram to
                            Coimbatore one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-madurai') }}">Villupuram to Madurai
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-trichy') }}">Villupuram to Trichy one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-salem') }}">Villupuram to Salem one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-tirunelveli') }}">Villupuram to
                            Tirunelveli one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-erode') }}">Villupuram to Erode one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-vellore') }}">Villupuram to Vellore
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-thoothukudi') }}">Villupuram to
                            Thoothukudi one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-thanjavur') }}">Villupuram to
                            Thanjavur one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-dindigul') }}">Villupuram to Dindigul
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-cuddalore') }}">Villupuram to
                            Cuddalore one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-kanchipuram') }}">Villupuram to
                            Kanchipuram one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-nagercoil') }}">Villupuram to
                            Nagercoil one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-karur') }}">Villupuram to Karur one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-tiruppur') }}">Villupuram to Tiruppur
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-sivakasi') }}">Villupuram to Sivakasi
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-hosur') }}">Villupuram to Hosur one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-krishnagiri') }}">Villupuram to
                            Krishnagiri one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-namakkal') }}">Villupuram to Namakkal
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-pudukkottai') }}">Villupuram to
                            Pudukkottai one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-nagapattinam') }}">Villupuram to
                            Nagapattinam one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-arakkonam') }}">Villupuram to
                            Arakkonam one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-chengalpattu') }}">Villupuram to
                            Chengalpattu one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-mayiladuthurai') }}">Villupuram to
                            Mayiladuthurai one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-thiruvarur') }}">Villupuram to
                            Thiruvarur one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-arani') }}">Villupuram to Arani one
                            way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-ranipet') }}">Villupuram to Ranipet
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-perambalur') }}">Villupuram to
                            Perambalur one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-tenkasi') }}">Villupuram to Tenkasi
                            one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-virudhunagar') }}">Villupuram to
                            Virudhunagar one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-ramanathapuram') }}">Villupuram to
                            Ramanathapuram one way taxi</a></div>
                </div>
                <div class="route-item">
                    <div class="route-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="route-text"><a href="{{ route('villupuram-to-dharmapuri') }}">Villupuram to
                            Dharmapuri one way taxi</a></div>
                </div>
            </div>
        </div>
        <div class="route-card">
    <div class="route-header" onclick="toggleRoute('tirunelveli-routes')">
        <h3 class="route-title">CAB SERVICE FROM TIRUNELVELI</h3>
        <i class="fas fa-chevron-down route-arrow"></i>
    </div>
    <div class="route-content" id="tirunelveli-routes">
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-chennai') }}">Tirunelveli to Chennai one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-coimbatore') }}">Tirunelveli to Coimbatore one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-madurai') }}">Tirunelveli to Madurai one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-trichy') }}">Tirunelveli to Trichy one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-salem') }}">Tirunelveli to Salem one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-erode') }}">Tirunelveli to Erode one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-vellore') }}">Tirunelveli to Vellore one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-thoothukudi') }}">Tirunelveli to Thoothukudi one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-thanjavur') }}">Tirunelveli to Thanjavur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-dindigul') }}">Tirunelveli to Dindigul one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-cuddalore') }}">Tirunelveli to Cuddalore one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-kanchipuram') }}">Tirunelveli to Kanchipuram one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-nagercoil') }}">Tirunelveli to Nagercoil one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-karur') }}">Tirunelveli to Karur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-tiruppur') }}">Tirunelveli to Tiruppur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-sivakasi') }}">Tirunelveli to Sivakasi one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-hosur') }}">Tirunelveli to Hosur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-krishnagiri') }}">Tirunelveli to Krishnagiri one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-namakkal') }}">Tirunelveli to Namakkal one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-villupuram') }}">Tirunelveli to Villupuram one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-pudukkottai') }}">Tirunelveli to Pudukkottai one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-nagapattinam') }}">Tirunelveli to Nagapattinam one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-arakkonam') }}">Tirunelveli to Arakkonam one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-chengalpattu') }}">Tirunelveli to Chengalpattu one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-mayiladuthurai') }}">Tirunelveli to Mayiladuthurai one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-thiruvarur') }}">Tirunelveli to Thiruvarur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-arani') }}">Tirunelveli to Arani one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-ranipet') }}">Tirunelveli to Ranipet one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-perambalur') }}">Tirunelveli to Perambalur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-tenkasi') }}">Tirunelveli to Tenkasi one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-virudhunagar') }}">Tirunelveli to Virudhunagar one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-ramanathapuram') }}">Tirunelveli to Ramanathapuram one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('tirunelveli-to-dharmapuri') }}">Tirunelveli to Dharmapuri one way taxi</a></div>
        </div>
    </div>
</div>
<div class="route-card">
    <div class="route-header" onclick="toggleRoute('erode-routes')">
        <h3 class="route-title">CAB SERVICE FROM ERODE</h3>
        <i class="fas fa-chevron-down route-arrow"></i>
    </div>
    <div class="route-content" id="erode-routes">
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-chennai') }}">Erode to Chennai one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-coimbatore') }}">Erode to Coimbatore one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-madurai') }}">Erode to Madurai one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-trichy') }}">Erode to Trichy one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-salem') }}">Erode to Salem one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-tirunelveli') }}">Erode to Tirunelveli one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-vellore') }}">Erode to Vellore one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-thoothukudi') }}">Erode to Thoothukudi one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-thanjavur') }}">Erode to Thanjavur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-dindigul') }}">Erode to Dindigul one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-cuddalore') }}">Erode to Cuddalore one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-kanchipuram') }}">Erode to Kanchipuram one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-nagercoil') }}">Erode to Nagercoil one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-karur') }}">Erode to Karur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-tiruppur') }}">Erode to Tiruppur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-sivakasi') }}">Erode to Sivakasi one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-hosur') }}">Erode to Hosur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-krishnagiri') }}">Erode to Krishnagiri one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-namakkal') }}">Erode to Namakkal one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-villupuram') }}">Erode to Villupuram one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-pudukkottai') }}">Erode to Pudukkottai one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-nagapattinam') }}">Erode to Nagapattinam one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-arakkonam') }}">Erode to Arakkonam one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-chengalpattu') }}">Erode to Chengalpattu one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-mayiladuthurai') }}">Erode to Mayiladuthurai one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-thiruvarur') }}">Erode to Thiruvarur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-arani') }}">Erode to Arani one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-ranipet') }}">Erode to Ranipet one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-perambalur') }}">Erode to Perambalur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-tenkasi') }}">Erode to Tenkasi one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-virudhunagar') }}">Erode to Virudhunagar one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-ramanathapuram') }}">Erode to Ramanathapuram one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('erode-to-dharmapuri') }}">Erode to Dharmapuri one way taxi</a></div>
        </div>
    </div>
</div>
<div class="route-card">
    <div class="route-header" onclick="toggleRoute('cuddalore-routes')">
        <h3 class="route-title">CAB SERVICE FROM CUDDALORE</h3>
        <i class="fas fa-chevron-down route-arrow"></i>
    </div>
    <div class="route-content" id="cuddalore-routes">
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-chennai') }}">Cuddalore to Chennai one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-coimbatore') }}">Cuddalore to Coimbatore one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-madurai') }}">Cuddalore to Madurai one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-trichy') }}">Cuddalore to Trichy one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-salem') }}">Cuddalore to Salem one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-tirunelveli') }}">Cuddalore to Tirunelveli one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-erode') }}">Cuddalore to Erode one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-vellore') }}">Cuddalore to Vellore one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-thoothukudi') }}">Cuddalore to Thoothukudi one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-thanjavur') }}">Cuddalore to Thanjavur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-dindigul') }}">Cuddalore to Dindigul one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-kanchipuram') }}">Cuddalore to Kanchipuram one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-nagercoil') }}">Cuddalore to Nagercoil one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-karur') }}">Cuddalore to Karur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-tiruppur') }}">Cuddalore to Tiruppur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-sivakasi') }}">Cuddalore to Sivakasi one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-hosur') }}">Cuddalore to Hosur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-krishnagiri') }}">Cuddalore to Krishnagiri one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-namakkal') }}">Cuddalore to Namakkal one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-villupuram') }}">Cuddalore to Villupuram one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-pudukkottai') }}">Cuddalore to Pudukkottai one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-nagapattinam') }}">Cuddalore to Nagapattinam one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-arakkonam') }}">Cuddalore to Arakkonam one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-chengalpattu') }}">Cuddalore to Chengalpattu one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-mayiladuthurai') }}">Cuddalore to Mayiladuthurai one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-thiruvarur') }}">Cuddalore to Thiruvarur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-arani') }}">Cuddalore to Arani one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-ranipet') }}">Cuddalore to Ranipet one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-perambalur') }}">Cuddalore to Perambalur one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-tenkasi') }}">Cuddalore to Tenkasi one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-virudhunagar') }}">Cuddalore to Virudhunagar one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-ramanathapuram') }}">Cuddalore to Ramanathapuram one way taxi</a></div>
        </div>
        <div class="route-item">
            <div class="route-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="route-text"><a href="{{ route('cuddalore-to-dharmapuri') }}">Cuddalore to Dharmapuri one way taxi</a></div>
        </div>
    </div>
</div>

    </div>

    <script>
        function toggleRoute(routeId) {
            const content = document.getElementById(routeId);
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                // Hide all other route contents first
                const allContents = document.querySelectorAll('.route-content');
                allContents.forEach(content => {
                    content.style.display = "none";
                });
                // Show the selected route
                content.style.display = "block";
            }
        }
    </script>
</body>

</html>
