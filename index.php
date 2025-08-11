<?php include('components/header.php'); ?>
<?php include('components/navigation.php'); ?>

<!-- Hero Section with Background Image -->
<section class="hero-section with-background" style="background-image: linear-gradient(135deg, rgba(15, 20, 25, 0.8) 0%, rgba(26, 35, 50, 0.7) 100%), url('/images/hero-accounting-office-professionals.jpg');">
    <div class="hero-content">
        <h1 class="hero-title">Trusted Accounting Excellence Since 1961</h1>
        <p class="hero-subtitle">Professional accounting, audit, tax, and business consulting services delivered by experienced chartered professionals committed to your success.</p>
        <div class="hero-cta">
            <a href="/contact.php" class="btn btn-primary">Get Started Today</a>
            <a href="/our-team/" class="btn btn-secondary">Meet Our Team</a>
        </div>
    </div>
</section>

<div class="content-container">
    <div class="content-wrapper">
        <div class="main-content">
            <!-- Trust Indicators -->
            <div style="display: flex; gap: 2rem; margin: 2rem 0; flex-wrap: wrap; justify-content: center; align-items: center; opacity: 0.8;">
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: var(--color-primary);">60+</div>
                    <div style="font-size: 0.875rem; color: var(--color-gray-600);">Years of Experience</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: var(--color-primary);">25+</div>
                    <div style="font-size: 0.875rem; color: var(--color-gray-600);">Professional Team</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: var(--color-primary);">CPA</div>
                    <div style="font-size: 0.875rem; color: var(--color-gray-600);">Chartered Professionals</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: var(--color-primary);">BC</div>
                    <div style="font-size: 0.875rem; color: var(--color-gray-600);">Based & Trusted</div>
                </div>
            </div>

            <!-- Services Overview -->
            <h2 style="text-align: center; color: var(--color-primary); font-size: var(--font-size-3xl); margin: 4rem 0 2rem;">Our Services</h2>
            <div class="service-grid">
                <div class="service-card">
                    <h3>Audit & Assurance</h3>
                    <p>Comprehensive audit services to ensure your financial statements meet the highest standards of accuracy and compliance.</p>
                </div>
                <div class="service-card">
                    <h3>Tax Services</h3>
                    <p>Strategic tax planning and preparation services for individuals, corporations, and partnerships to optimize your tax position.</p>
                </div>
                <div class="service-card">
                    <h3>Accounting & Bookkeeping</h3>
                    <p>Full-service accounting solutions from basic bookkeeping to complex financial reporting and analysis.</p>
                </div>
                <div class="service-card">
                    <h3>Business Consulting</h3>
                    <p>Strategic business advice and consulting services to help you make informed decisions and grow your business.</p>
                </div>
                <div class="service-card">
                    <h3>Financial Planning</h3>
                    <p>Personal and corporate financial planning services to help secure your financial future and achieve your goals.</p>
                </div>
                <div class="service-card">
                    <h3>Corporate Services</h3>
                    <p>Complete corporate services including incorporation, minute books, and ongoing corporate maintenance.</p>
                </div>
            </div>

            <!-- Why Choose Us -->
            <div style="background: linear-gradient(135deg, var(--color-light) 0%, var(--color-white) 100%); border-radius: var(--radius-xl); padding: 3rem; margin: 4rem 0; text-align: center;">
                <h2 style="color: var(--color-primary); margin-bottom: 2rem;">Why Choose Hedden Chong LLP?</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 2rem;">
                    <div>
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-accent), var(--color-accent-hover)); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">✓</div>
                        <h4 style="color: var(--color-primary); margin-bottom: 0.5rem;">Proven Excellence</h4>
                        <p style="color: var(--color-gray-600); font-size: var(--font-size-base);">Over 60 years of trusted service to the BC business community.</p>
                    </div>
                    <div>
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-accent), var(--color-accent-hover)); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">★</div>
                        <h4 style="color: var(--color-primary); margin-bottom: 0.5rem;">Expert Team</h4>
                        <p style="color: var(--color-gray-600); font-size: var(--font-size-base);">Chartered professionals with specialized expertise across all service areas.</p>
                    </div>
                    <div>
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-accent), var(--color-accent-hover)); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">♦</div>
                        <h4 style="color: var(--color-primary); margin-bottom: 0.5rem;">Client-Focused</h4>
                        <p style="color: var(--color-gray-600); font-size: var(--font-size-base);">Personalized service tailored to your unique business needs and goals.</p>
                    </div>
                </div>
            </div>

            <!-- About Section with Image -->
            <div style="background: var(--color-white); border-radius: var(--radius-xl); padding: 3rem; margin: 4rem 0; box-shadow: var(--shadow-base); border: 1px solid var(--color-gray-100);">
                <h2 style="color: var(--color-primary); margin-bottom: 2rem; text-align: center;">About Hedden Chong LLP</h2>
                
                <!-- Content Image -->
                <!-- <img src="/images/modern-accounting-team-collaboration.jpg" 
                     alt="Professional accounting team collaborating in modern office environment" 
                     class="content-image content-image-small"
                     style="float: left; margin: 0 2rem 1rem 0; max-width: 350px;"> -->
                
                <p><strong>Hedden Chong LLP</strong> is a Chartered Professional Accounting firm dedicated to providing dependable, high-quality service.</p>
                <p>For over 60 years, we've supported clients with expert accounting, audit, tax, and business consulting—always focused on results and relationships.</p>
                <p>Our team of over 25 professionals brings specialized expertise and a client-first approach. What sets us apart is our deep understanding of business from a management perspective, allowing us to deliver practical solutions in today's complex global environment.</p>
                
                <div style="clear: both;"></div>
            </div>

            <!-- Location & Contact Info -->
            <div style="text-align: center; margin: 4rem 0 2rem;">
                <h2 style="color: var(--color-primary); margin-bottom: 1rem;">Located in Burnaby, Serving BC</h2>
                <p style="color: var(--color-gray-600); max-width: 600px; margin: 0 auto 2rem;">Conveniently located in Burnaby with easy access to Vancouver and the Lower Mainland. We serve clients throughout British Columbia.</p>
                <a href="/contact.php" class="btn btn-primary">Contact Us Today</a>
            </div>
        </div>
    </div>
</div>

<?php include('components/footer.php'); ?>