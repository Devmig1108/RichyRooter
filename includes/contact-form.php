<div class="reusable-contact-form">
    <style>
        .reusable-contact-form {
            background: var(--bg-card);
            padding: 50px 40px;
            border-radius: var(--radius-large);
            box-shadow: var(--shadow-card);
            border: 1px solid var(--border-soft);
            border-top: 4px solid var(--rr-red);
            position: relative;
            z-index: 5;
        }

        .reusable-contact-form h3 {
            font-family: 'Nunito', sans-serif;
            font-size: 1.8rem;
            margin-bottom: 10px;
            font-weight: 900;
            color: var(--text-main);
        }

        .reusable-contact-form p {
            color: var(--text-muted);
            margin-bottom: 30px;
            font-size: 1rem;
        }

        .reusable-contact-form .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .reusable-contact-form .form-group {
            width: 100%;
            margin-bottom: 20px;
        }

        .reusable-contact-form .form-control {
            width: 100%;
            padding: 16px 20px;
            border: 1px solid #e2e8f0;
            border-radius: var(--radius-small);
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            background: var(--bg-section);
            transition: var(--transition);
            color: var(--text-main);
        }

        .reusable-contact-form .form-control:focus {
            outline: none;
            border-color: var(--rr-red);
            box-shadow: 0 0 0 3px rgba(166, 25, 46, 0.15);
            background: var(--bg-main);
        }

        /* Custom dropdown arrow */
        .reusable-contact-form select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2364748b' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 1.2rem center;
            background-size: 1.2em;
        }

        .reusable-contact-form textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        /* Turnstile container */
        .reusable-contact-form .turnstile-container {
            width: 100%;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .reusable-contact-form .btn-submit-form {
            width: 100%;
            background: var(--rr-red);
            color: #ffffff;
            border: none;
            padding: 18px;
            font-family: 'Nunito', sans-serif;
            font-size: 1rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
        }

        .reusable-contact-form .btn-submit-form:hover {
            background: var(--rr-red-hover);
            box-shadow: var(--shadow-accent);
            transform: translateY(-3px);
        }

        .reusable-contact-form .btn-submit-form:focus-visible {
            outline: 3px solid rgba(166, 25, 46, 0.3);
            outline-offset: 3px;
        }

        @media (max-width: 768px) {
            .reusable-contact-form {
                padding: 40px 24px;
            }

            .reusable-contact-form .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .reusable-contact-form .form-row .form-group {
                margin-bottom: 20px !important;
            }
        }
    </style>

    <h3>Request Service</h3>

    <p>
        Fill out the form below and our dispatch team will reach out
        immediately.
    </p>

    <form action="/process-quote.php" method="POST">

        <!-- Honeypot: human visitors should leave this empty -->
        <div
            aria-hidden="true"
            style="position:absolute; left:-9999px; top:-9999px;">
            <label for="company_website">
                Leave this field blank
            </label>

            <input
                type="text"
                name="company_website"
                id="company_website"
                tabindex="-1"
                autocomplete="off">
        </div>

        <div class="form-row">
            <div class="form-group" style="margin-bottom:0;">
                <input
                    type="text"
                    class="form-control"
                    name="fullName"
                    placeholder="Full Name"
                    autocomplete="name"
                    required>
            </div>

            <div class="form-group" style="margin-bottom:0;">
                <input
                    type="tel"
                    class="form-control"
                    name="phone"
                    placeholder="Phone Number"
                    autocomplete="tel"
                    required>
            </div>
        </div>

        <div class="form-group">
            <input
                type="email"
                class="form-control"
                name="email"
                placeholder="Email Address"
                autocomplete="email"
                required>
        </div>

        <div class="form-group">
            <select
                class="form-control"
                name="serviceNeeded"
                required>
                <option value="" disabled selected>
                    What do you need help with?
                </option>

                <option value="emergency">
                    Emergency Plumbing
                </option>

                <option value="water-heater">
                    Water Heater Repair/Install
                </option>

                <option value="drain">
                    Drain Cleaning &amp; Stoppage
                </option>

                <option value="slab-leak">
                    Slab Leak Repair
                </option>

                <option value="commercial">
                    Commercial Services
                </option>

                <option value="other">
                    Other Plumbing Issue
                </option>
            </select>
        </div>

        <div class="form-group">
            <textarea
                class="form-control"
                name="message"
                placeholder="Please describe your plumbing issue in detail..."
                required></textarea>
        </div>

        <!-- Cloudflare Turnstile -->
        <div class="turnstile-container">
            <div
                class="cf-turnstile"
                data-sitekey="YOUR_TURNSTILE_SITE_KEY"
                data-action="plumbing_quote"
                data-theme="auto"
                data-size="flexible"
                data-appearance="interaction-only">
            </div>
        </div>

        <button type="submit" class="btn-submit-form">
            Send Request

            <i
                class="fas fa-paper-plane"
                style="margin-left:8px;"
                aria-hidden="true">
            </i>
        </button>
    </form>
</div>