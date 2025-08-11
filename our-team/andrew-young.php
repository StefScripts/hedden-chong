<?php include('../components/header.php'); ?>
<?php include('../components/navigation.php'); ?>

<div class="content-container">
    <div class="content-wrapper">
        <div class="main-content">
            <!-- Modern Bio Layout -->
            <div class="bio-layout">
                <div class="bio-photo-container">
                    <img src="../images/andrew-young-cpa-200x300.jpg" alt="Andrew Young, CPA, CA" class="bio-photo">
                </div>
                <div class="bio-content">
                    <h1>Andrew Young</h1>
                    <div class="bio-title">CPA, CA | Partner</div>
                    <div class="bio-contact" style="display: flex; gap: 1rem; margin-bottom: 2rem; flex-wrap: wrap;">
                        <a href="mailto:ayoung@heddenchong.com" class="btn btn-primary" style="font-size: var(--font-size-sm); padding: var(--spacing-3) var(--spacing-4);">📧 Email</a>
                        <a href="tel:6043205852" class="btn btn-secondary" style="font-size: var(--font-size-sm); padding: var(--spacing-3) var(--spacing-4);">📞 (604) 320-5852</a>
                    </div>
                </div>
            </div>

            <!-- Professional Background -->
            <div style="background: var(--color-white); border-radius: var(--radius-xl); padding: 2rem; margin: 2rem 0; box-shadow: var(--shadow-base); border: 1px solid var(--color-gray-100);">
                <h2 style="color: var(--color-primary); margin-bottom: 1.5rem; font-size: var(--font-size-2xl);">Professional Background</h2>
                <p>Andrew obtained his CA designation in 1990 and has been a Partner at Hedden Chong since 1993, bringing over 30 years of professional accounting experience to our team.</p>
            </div>

            <!-- Expertise & Services -->
            <div style="background: var(--color-white); border-radius: var(--radius-xl); padding: 2rem; margin: 2rem 0; box-shadow: var(--shadow-base); border: 1px solid var(--color-gray-100);">
                <h2 style="color: var(--color-primary); margin-bottom: 1.5rem; font-size: var(--font-size-2xl);">Areas of Expertise</h2>
                <p>Andrew's client base consists of small to medium sized owner-managed businesses in a variety of industries with a concentration in the hospitality, medical and dental sectors. His client base also includes a number of Canadian subsidiaries of multinational companies.</p>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-top: 1.5rem;">
                    <div style="background: var(--color-light); padding: 1rem; border-radius: var(--radius-base); text-align: center;">
                        <div style="font-weight: 600; color: var(--color-primary); margin-bottom: 0.5rem;">Hospitality Sector</div>
                        <div style="font-size: var(--font-size-sm); color: var(--color-gray-600);">Specialized expertise</div>
                    </div>
                    <div style="background: var(--color-light); padding: 1rem; border-radius: var(--radius-base); text-align: center;">
                        <div style="font-weight: 600; color: var(--color-primary); margin-bottom: 0.5rem;">Medical & Dental</div>
                        <div style="font-size: var(--font-size-sm); color: var(--color-gray-600);">Professional practices</div>
                    </div>
                    <div style="background: var(--color-light); padding: 1rem; border-radius: var(--radius-base); text-align: center;">
                        <div style="font-weight: 600; color: var(--color-primary); margin-bottom: 0.5rem;">Multinational</div>
                        <div style="font-size: var(--font-size-sm); color: var(--color-gray-600);">Canadian subsidiaries</div>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div style="background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-hover) 100%); color: white; border-radius: var(--radius-xl); padding: 2rem; margin: 2rem 0; text-align: center;">
                <h2 style="color: white; margin-bottom: 1rem; font-size: var(--font-size-2xl);">Ready to Work Together?</h2>
                <p style="margin-bottom: 1.5rem; opacity: 0.9;">Contact Andrew to discuss your accounting and business consulting needs.</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="mailto:ayoung@heddenchong.com" class="btn btn-secondary" style="background: white; color: var(--color-primary);">Send Email</a>
                    <a href="tel:6043205852" class="btn" style="background: rgba(255,255,255,0.2); color: white; border: 2px solid white;">Call (604) 320-5852</a>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <?php include('../components/right-sidebar-1.php'); ?>
            <?php include('../components/right-sidebar-2.php'); ?>
            <?php include('../components/right-sidebar-3.php'); ?>
            <?php include('../components/right-sidebar-4.php'); ?>
        </div>
    </div>
</div>

<?php include('../components/footer.php'); ?>