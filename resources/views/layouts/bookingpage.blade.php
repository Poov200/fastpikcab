@include('layouts.navbar')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=DM+Sans:wght@300;400;500&display=swap');

    :root {
        --ink: #0f0f14;
        --ink-light: #4a4a5a;
        --surface: #ffffff;
        --surface-2: #f7f7fb;
        --surface-3: #eeeef6;
        --accent: #3d5afe;
        --accent-light: #e8ecff;
        --accent-glow: rgba(61, 90, 254, 0.15);
        --success: #00b894;
        --success-light: #e0faf5;
        --warning: #f59e0b;
        --warning-light: #fef9ec;
        --danger: #ef4444;
        --danger-light: #fef2f2;
        --border: #e2e2ee;
        --radius: 14px;
        --radius-sm: 8px;
        --shadow-sm: 0 2px 8px rgba(0,0,0,0.06);
        --shadow: 0 8px 32px rgba(0,0,0,0.10);
        --shadow-lg: 0 24px 64px rgba(0,0,0,0.14);
    }

    #booking * { box-sizing: border-box; }

    #booking {
        font-family: 'DM Sans', sans-serif;
        background: var(--surface-2);
        min-height: 100vh;
        padding: 48px 16px;
    }

    .bk-wrap {
        max-width: 680px;
        margin: 0 auto;
    }

    /* Header */
    .bk-header {
        text-align: center;
        margin-bottom: 36px;
    }

    .bk-header .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: var(--accent-light);
        color: var(--accent);
        font-family: 'Sora', sans-serif;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        padding: 6px 14px;
        border-radius: 999px;
        margin-bottom: 16px;
    }

    .bk-header h2 {
        font-family: 'Sora', sans-serif;
        font-size: clamp(28px, 5vw, 40px);
        font-weight: 700;
        color: var(--ink);
        margin: 0 0 10px;
        line-height: 1.2;
    }

    .bk-header p {
        color: var(--ink-light);
        font-size: 15px;
        margin: 0;
    }

    /* Progress Bar */
    .bk-progress {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 32px;
        gap: 0;
    }

    .bk-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
        position: relative;
        z-index: 1;
    }

    .bk-step-dot {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: var(--surface);
        border: 2px solid var(--border);
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Sora', sans-serif;
        font-size: 13px;
        font-weight: 700;
        color: var(--ink-light);
        transition: all 0.3s;
    }

    .bk-step.active .bk-step-dot {
        background: var(--accent);
        border-color: var(--accent);
        color: #fff;
        box-shadow: 0 0 0 5px var(--accent-glow);
    }

    .bk-step-label {
        font-size: 11px;
        font-weight: 500;
        color: var(--ink-light);
        letter-spacing: 0.03em;
    }

    .bk-step.active .bk-step-label {
        color: var(--accent);
        font-weight: 600;
    }

    .bk-step-line {
        flex: 1;
        height: 2px;
        background: var(--border);
        margin: 0 6px;
        margin-bottom: 22px;
        max-width: 80px;
    }

    /* Card */
    .bk-card {
        background: var(--surface);
        border-radius: 20px;
        box-shadow: var(--shadow);
        overflow: hidden;
        border: 1px solid var(--border);
    }

    .bk-form-body {
        padding: 32px 28px;
    }

    @media (max-width: 480px) {
        .bk-form-body { padding: 24px 18px; }
    }

    /* Section */
    .bk-section {
        margin-bottom: 28px;
    }

    .bk-section-title {
        display: flex;
        align-items: center;
        gap: 10px;
        font-family: 'Sora', sans-serif;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.07em;
        text-transform: uppercase;
        color: var(--ink-light);
        margin-bottom: 16px;
    }

    .bk-section-title .title-icon {
        width: 28px;
        height: 28px;
        border-radius: 7px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .bk-divider {
        height: 1px;
        background: var(--border);
        margin: 28px 0;
    }

    /* Trip Type Buttons */
    .bk-trip-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }

    .bk-trip-option {
        position: relative;
        cursor: pointer;
    }

    .bk-trip-option input[type="radio"] {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

    .bk-trip-label {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 18px 12px;
        border: 2px solid var(--border);
        border-radius: var(--radius);
        background: var(--surface-2);
        text-align: center;
        transition: all 0.2s;
        cursor: pointer;
        gap: 8px;
    }

    .bk-trip-option input:checked + .bk-trip-label {
        border-color: var(--accent);
        background: var(--accent-light);
        color: var(--accent);
    }

    .bk-trip-label:hover {
        border-color: var(--accent);
        background: var(--accent-light);
    }

    .bk-trip-icon {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: var(--surface-3);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s;
    }

    .bk-trip-option input:checked + .bk-trip-label .bk-trip-icon {
        background: var(--accent);
    }

    .bk-trip-option input:checked + .bk-trip-label .bk-trip-icon svg {
        color: #fff;
    }

    .bk-trip-name {
        font-family: 'Sora', sans-serif;
        font-size: 14px;
        font-weight: 600;
        color: var(--ink);
        transition: color 0.2s;
    }

    .bk-trip-option input:checked + .bk-trip-label .bk-trip-name {
        color: var(--accent);
    }

    .bk-trip-desc {
        font-size: 11px;
        color: var(--ink-light);
        line-height: 1.4;
    }

    /* Form Fields */
    .bk-field {
        margin-bottom: 16px;
    }

    .bk-field:last-child { margin-bottom: 0; }

    .bk-label {
        display: block;
        font-size: 13px;
        font-weight: 600;
        color: var(--ink);
        margin-bottom: 6px;
        font-family: 'Sora', sans-serif;
    }

    .bk-label .optional {
        font-weight: 400;
        color: var(--ink-light);
        font-family: 'DM Sans', sans-serif;
        font-size: 12px;
    }

    .bk-input-wrap {
        position: relative;
    }

    .bk-input-icon {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--ink-light);
        pointer-events: none;
        display: flex;
        align-items: center;
    }

    .bk-input,
    .bk-select {
        width: 100%;
        padding: 13px 16px 13px 42px;
        border: 1.5px solid var(--border);
        border-radius: var(--radius-sm);
        font-family: 'DM Sans', sans-serif;
        font-size: 14px;
        color: var(--ink);
        background: var(--surface);
        transition: border-color 0.2s, box-shadow 0.2s;
        outline: none;
        appearance: none;
        -webkit-appearance: none;
    }

    .bk-input::placeholder { color: #b0b0c0; }

    .bk-input:focus,
    .bk-select:focus {
        border-color: var(--accent);
        box-shadow: 0 0 0 3px var(--accent-glow);
    }

    .bk-select {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%234a4a5a' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 14px center;
        padding-right: 40px;
        cursor: pointer;
    }

    .bk-error {
        display: block;
        margin-top: 5px;
        font-size: 12px;
        color: var(--danger);
        font-weight: 500;
    }

    /* Two-column grid */
    .bk-grid-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
    }

    @media (max-width: 480px) {
        .bk-grid-2 { grid-template-columns: 1fr; }
        .bk-trip-grid { grid-template-columns: 1fr 1fr; }
    }

    /* Map */
    #map {
        width: 100%;
        height: 220px;
        border-radius: var(--radius-sm);
        border: 1.5px solid var(--border);
        margin-top: 16px;
        overflow: hidden;
    }

    /* Summary */
    .bk-summary {
        background: var(--ink);
        border-radius: var(--radius);
        padding: 20px;
        margin-bottom: 24px;
    }

    .bk-summary-title {
        font-family: 'Sora', sans-serif;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.5);
        margin-bottom: 14px;
    }

    .bk-summary-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 14px;
        background: rgba(255,255,255,0.06);
        border-radius: 8px;
        margin-bottom: 8px;
    }

    .bk-summary-row:last-child { margin-bottom: 0; }

    .bk-summary-label {
        font-size: 13px;
        color: rgba(255,255,255,0.55);
        font-weight: 400;
    }

    .bk-summary-value {
        font-family: 'Sora', sans-serif;
        font-size: 14px;
        font-weight: 600;
        color: #fff;
    }

    .bk-summary-price {
        font-size: 22px;
        font-weight: 700;
        color: var(--warning);
    }

    /* Submit */
    .bk-submit-btn {
        width: 100%;
        background: var(--accent);
        color: #fff;
        border: none;
        border-radius: 12px;
        padding: 16px 24px;
        font-family: 'Sora', sans-serif;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        letter-spacing: 0.01em;
        position: relative;
        overflow: hidden;
    }

    .bk-submit-btn::before {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(255,255,255,0);
        transition: background 0.2s;
    }

    .bk-submit-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 8px 24px rgba(61,90,254,0.35);
    }

    .bk-submit-btn:active {
        transform: translateY(0);
    }

    /* Alert messages */
    .bk-alert {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 14px 16px;
        border-radius: var(--radius-sm);
        font-size: 14px;
        font-weight: 500;
        margin-top: 16px;
    }

    .bk-alert-error {
        background: var(--danger-light);
        color: var(--danger);
        border: 1px solid rgba(239,68,68,0.2);
    }

    .bk-alert-success {
        background: var(--success-light);
        color: var(--success);
        border: 1px solid rgba(0,184,148,0.2);
    }

    /* Days select */
    .bk-days-wrap {
        margin-top: 16px;
        padding: 16px;
        background: var(--accent-light);
        border-radius: var(--radius-sm);
        border: 1.5px solid rgba(61,90,254,0.15);
    }
</style>

<section id="booking" ng-app="bookingApp" ng-controller="BookingController">
    <div class="bk-wrap">

        <!-- Header -->
        <div class="bk-header">
            <div class="eyebrow">
                <svg width="12" height="12" viewBox="0 0 20 20" fill="currentColor"><path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/><path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1v-1h4.05a2.5 2.5 0 014.9 0H20a1 1 0 001-1v-6a1 1 0 00-.293-.707l-4-4A1 1 0 0016 3H3a1 1 0 00-1 1zm11.464 6L14 6.586V10h.464z"/></svg>
                Cab Booking
            </div>
            <h2>Book Your Ride</h2>
            <p>Fast, easy, and reliable — schedule your trip in minutes</p>
        </div>

        <!-- Progress -->
        <div class="bk-progress">
            <div class="bk-step active">
                <div class="bk-step-dot">1</div>
                <span class="bk-step-label">Trip</span>
            </div>
            <div class="bk-step-line"></div>
            <div class="bk-step">
                <div class="bk-step-dot">2</div>
                <span class="bk-step-label">Info</span>
            </div>
            <div class="bk-step-line"></div>
            <div class="bk-step">
                <div class="bk-step-dot">3</div>
                <span class="bk-step-label">Location</span>
            </div>
            <div class="bk-step-line"></div>
            <div class="bk-step">
                <div class="bk-step-dot">4</div>
                <span class="bk-step-label">Done</span>
            </div>
        </div>

        <!-- Card -->
        <div class="bk-card">
            <form name="bookingForm" class="bk-form-body" ng-submit="submitBooking(bookingForm.$valid)" novalidate>

                <!-- TRIP TYPE -->
                <div class="bk-section">
                    <div class="bk-section-title">
                        <div class="title-icon" style="background:#e8ecff">
                            <svg width="14" height="14" viewBox="0 0 20 20" fill="#3d5afe"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/></svg>
                        </div>
                        Trip Type
                    </div>

                    <div class="bk-trip-grid">
                        <label class="bk-trip-option">
                            <input type="radio" ng-model="booking.tripType" value="oneway" ng-change="calculateassigned_amount()">
                            <div class="bk-trip-label">
                                <div class="bk-trip-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:#3d5afe"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                </div>
                                <span class="bk-trip-name">One Way</span>
                                <span class="bk-trip-desc">Single trip to destination</span>
                            </div>
                        </label>

                        <label class="bk-trip-option">
                            <input type="radio" ng-model="booking.tripType" value="round" ng-change="calculateassigned_amount()">
                            <div class="bk-trip-label">
                                <div class="bk-trip-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:#3d5afe"><polyline points="17 1 21 5 17 9"/><path d="M3 11V9a4 4 0 014-4h14"/><polyline points="7 23 3 19 7 15"/><path d="M21 13v2a4 4 0 01-4 4H3"/></svg>
                                </div>
                                <span class="bk-trip-name">Round Trip</span>
                                <span class="bk-trip-desc">Return trip included</span>
                            </div>
                        </label>
                    </div>

                    <div ng-show="booking.tripType === 'round'" class="bk-days-wrap">
                        <div class="bk-field" style="margin-bottom:0">
                            <label class="bk-label">Number of Days</label>
                            <div class="bk-input-wrap">
                                <span class="bk-input-icon">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zM4 8h12v8H4V8z" clip-rule="evenodd"/></svg>
                                </span>
                                <select name="no_of_days" ng-model="booking.no_of_days" ng-change="calculateassigned_amount()" class="bk-select" required>
                                    <option value="">Select Days</option>
                                    <option value="1">1 Day</option>
                                    <option value="2">2 Days</option>
                                    <option value="3">3 Days</option>
                                    <option value="4">4 Days</option>
                                    <option value="5">5 Days</option>
                                </select>
                            </div>
                            <span ng-show="bookingForm.no_of_days.$invalid && bookingForm.no_of_days.$touched" class="bk-error">Number of days is required.</span>
                        </div>
                    </div>
                </div>

                <div class="bk-divider"></div>

                <!-- PERSONAL INFO -->
                <div class="bk-section">
                    <div class="bk-section-title">
                        <div class="title-icon" style="background:#e0faf5">
                            <svg width="14" height="14" viewBox="0 0 20 20" fill="#00b894"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/></svg>
                        </div>
                        Personal Information
                    </div>

                    <div class="bk-field">
                        <label class="bk-label">Full Name</label>
                        <div class="bk-input-wrap">
                            <span class="bk-input-icon"><svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/></svg></span>
                            <input type="text" name="name" ng-model="booking.name" placeholder="Enter your full name" class="bk-input" required autofill-fix>
                        </div>
                        <span ng-show="bookingForm.name.$invalid && bookingForm.name.$touched" class="bk-error">Name is required.</span>
                    </div>

                    <div class="bk-field">
                        <label class="bk-label">Email <span class="optional">(Optional)</span></label>
                        <div class="bk-input-wrap">
                            <span class="bk-input-icon"><svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg></span>
                            <input type="email" name="email" ng-model="booking.email" placeholder="Enter your email" class="bk-input" autofill-fix>
                        </div>
                        <span ng-show="bookingForm.email.$invalid && bookingForm.email.$touched" class="bk-error">Invalid email format.</span>
                    </div>

                    <div class="bk-field">
                        <label class="bk-label">Contact Number</label>
                        <div class="bk-input-wrap">
                            <span class="bk-input-icon"><svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg></span>
                            <input type="tel" name="contact" ng-model="booking.contact" placeholder="Enter contact number" class="bk-input" required autofill-fix>
                        </div>
                        <span ng-show="bookingForm.contact.$invalid && bookingForm.contact.$touched" class="bk-error">Contact number is required.</span>
                    </div>
                </div>

                <div class="bk-divider"></div>

                <!-- LOCATION -->
                <div class="bk-section">
                    <div class="bk-section-title">
                        <div class="title-icon" style="background:#f3e8ff">
                            <svg width="14" height="14" viewBox="0 0 20 20" fill="#7c3aed"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                        </div>
                        Location Details
                    </div>

                    <div class="bk-field">
                        <label class="bk-label">Pickup Location</label>
                        <div class="bk-input-wrap">
                            <span class="bk-input-icon"><svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor" style="color:#00b894"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg></span>
                            <input id="pickup" type="text" name="pickup" ng-model="booking.pickup" placeholder="Enter pickup address" class="bk-input" required autofill-fix>
                        </div>
                        <span ng-show="bookingForm.pickup.$invalid && bookingForm.pickup.$touched" class="bk-error">Pickup location is required.</span>
                        <span ng-show="pickupRequired && !booking.pickup" class="bk-error">Please select a valid pickup location from the map.</span>
                    </div>

                    <div class="bk-field">
                        <label class="bk-label">Drop Location</label>
                        <div class="bk-input-wrap">
                            <span class="bk-input-icon"><svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor" style="color:#ef4444"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg></span>
                            <input id="destination" type="text" name="destination" ng-model="booking.destination" placeholder="Enter destination address" class="bk-input" required autofill-fix>
                        </div>
                        <span ng-show="bookingForm.destination.$invalid && bookingForm.destination.$touched" class="bk-error">Drop location is required.</span>
                        <span ng-show="dropRequired && !booking.destination" class="bk-error">Please select a valid drop location from the map.</span>
                    </div>

                    <div id="map"></div>
                </div>

                <div class="bk-divider"></div>

                <!-- SCHEDULE & VEHICLE -->
                <div class="bk-section">
                    <div class="bk-grid-2">
                        <!-- Schedule -->
                        <div>
                            <div class="bk-section-title">
                                <div class="title-icon" style="background:#fef9ec">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="#f59e0b"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/></svg>
                                </div>
                                Schedule
                            </div>

                            <div class="bk-field">
                                <label class="bk-label">Date</label>
                                <div class="bk-input-wrap">
                                    <span class="bk-input-icon"><svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zM4 8h12v8H4V8z" clip-rule="evenodd"/></svg></span>
                                    <input type="date" name="date" ng-model="booking.date" class="bk-input" required>
                                </div>
                                <span ng-show="bookingForm.date.$invalid && bookingForm.date.$touched" class="bk-error">Date is required.</span>
                            </div>

                            <div class="bk-field">
                                <label class="bk-label">Time</label>
                                <div class="bk-input-wrap">
                                    <span class="bk-input-icon"><svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/></svg></span>
                                    <input type="time" name="time" ng-model="booking.time" class="bk-input" required>
                                </div>
                                <span ng-show="bookingForm.time.$invalid && bookingForm.time.$touched" class="bk-error">Time is required.</span>
                            </div>
                        </div>

                        <!-- Vehicle -->
                        <div>
                            <div class="bk-section-title">
                                <div class="title-icon" style="background:#fef2f2">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="#ef4444"><path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/><path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1v-1h4.05a2.5 2.5 0 014.9 0H20a1 1 0 001-1v-6a1 1 0 00-.293-.707l-4-4A1 1 0 0016 3H3a1 1 0 00-1 1zm11.464 6L14 6.586V10h.464z"/></svg>
                                </div>
                                Vehicle
                            </div>

                            <div class="bk-field">
                                <label class="bk-label">Vehicle Type</label>
                                <div class="bk-input-wrap">
                                    <span class="bk-input-icon"><svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor"><path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/><path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1v-1h4.05a2.5 2.5 0 014.9 0H20a1 1 0 001-1v-6a1 1 0 00-.293-.707l-4-4A1 1 0 0016 3H3a1 1 0 00-1 1zm11.464 6L14 6.586V10h.464z"/></svg></span>
                                    <select name="vehicle" ng-model="booking.vehicle" class="bk-select" required>
                                        <option value="">Select Vehicle</option>
                                        <option value="Sedan">Sedan</option>
                                        <option value="suv">SUV</option>
                                    </select>
                                </div>
                                <span ng-show="bookingForm.vehicle.$invalid && bookingForm.vehicle.$touched" class="bk-error">Vehicle type is required.</span>
                            </div>

                            <div class="bk-field">
                                <label class="bk-label">Passengers</label>
                                <div class="bk-input-wrap">
                                    <span class="bk-input-icon"><svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/></svg></span>
                                    <select name="passengers" ng-model="booking.passengers" class="bk-select" required>
                                        <option value="">Select</option>
                                        <option value="1">1 Passenger</option>
                                        <option value="2">2 Passengers</option>
                                        <option value="3">3 Passengers</option>
                                        <option value="4">4 Passengers</option>
                                        <option value="5+">5+ Passengers</option>
                                    </select>
                                </div>
                                <span ng-show="bookingForm.passengers.$invalid && bookingForm.passengers.$touched" class="bk-error">Passengers is required.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bk-divider"></div>

                <!-- SUMMARY -->
                <div class="bk-summary">
                    <div class="bk-summary-title">Trip Summary</div>
                    <div class="bk-summary-row">
                        <span class="bk-summary-label">Distance</span>
                        <span class="bk-summary-value">@{{ booking.distance || '—' }}</span>
                    </div>
                    <div class="bk-summary-row">
                        <span class="bk-summary-label">Estimated Price</span>
                        <span class="bk-summary-value bk-summary-price">@{{ assigned_amount | currency: '₹' }}</span>
                    </div>
                </div>

                <!-- SUBMIT -->
                <span ng-show="showMissingFieldsMessage" class="bk-alert bk-alert-error" style="display:flex; margin-bottom:16px">
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor" flex-shrink="0"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                    Please fill in all required fields and select valid locations.
                </span>

                <button type="submit" class="bk-submit-btn">
                    <span ng-if="!isSubmitting">
                        <svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor"><path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/><path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1v-1h4.05a2.5 2.5 0 014.9 0H20a1 1 0 001-1v-6a1 1 0 00-.293-.707l-4-4A1 1 0 0016 3H3a1 1 0 00-1 1zm11.464 6L14 6.586V10h.464z"/></svg>
                        Confirm Booking
                    </span>
                    <span ng-if="isSubmitting" style="display:flex;align-items:center;gap:8px">
                        <svg class="animate-spin" width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"/></svg>
                        Processing…
                    </span>
                </button>

                <div ng-show="bookingSuccess" class="bk-alert bk-alert-success" style="display:flex; margin-top:16px">
                    <svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    Booking confirmed! We'll be in touch shortly.
                </div>

                <div ng-show="bookingError" class="bk-alert bk-alert-error" style="display:flex; margin-top:16px">
                    <svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
                    Booking failed. Please try again.
                </div>

            </form>
        </div>
    </div>
</section>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17877026034"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'AW-17877026034');
</script>
