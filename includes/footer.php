</main>

<footer class="footer">
    <div class="shell footerGrid">
        <div>
            <div class="brand inverse">
                <span class="brandMark">G</span>
                <span>GCCTOUR</span>
            </div>
            <p>Independent travel intelligence and status tracking for travel across Bahrain, Kuwait, Oman, Qatar, Saudi Arabia and the UAE.</p>
        </div>

        <div>
            <strong>Explore</strong>
            <a href="<?= e(page_url('gcc-unified-visa')) ?>">Visa status tracker</a>
            <a href="<?= e(page_url('requirements')) ?>">Requirements guide</a>
            <a href="<?= e(page_url('application')) ?>">Application steps</a>
            <a href="<?= e(page_url('eligibility')) ?>">Eligibility rules</a>
            <a href="<?= e(page_url('gcc-residents')) ?>">GCC Residents</a>
            <a href="<?= e(page_url('news')) ?>">Visa newsroom</a>
        </div>

        <div>
            <strong>GCC Countries</strong>
            <a href="<?= e(page_url('countries/uae')) ?>">United Arab Emirates</a>
            <a href="<?= e(page_url('countries/saudi-arabia')) ?>">Saudi Arabia</a>
            <a href="<?= e(page_url('countries/qatar')) ?>">Qatar</a>
            <a href="<?= e(page_url('countries/oman')) ?>">Oman</a>
            <a href="<?= e(page_url('countries/bahrain')) ?>">Bahrain</a>
            <a href="<?= e(page_url('countries/kuwait')) ?>">Kuwait</a>
        </div>

        <div>
            <strong>Legal & Safety</strong>
            <a href="<?= e(page_url('about')) ?>">About GCCTOUR</a>
            <a href="<?= e(page_url('disclaimer')) ?>">Editorial Disclaimer</a>
            <a href="<?= e(page_url('privacy')) ?>">Privacy Policy</a>
            <a href="<?= e(page_url('terms')) ?>">Terms of Use</a>
        </div>
    </div>

    <div class="shell copyright">
        <span>© <?= date('Y') ?> GCC Tour. Independent information resource. Not an official GCC government authority or visa portal.</span>
        <span>Verified Editorial Policy</span>
    </div>
</footer>

<script src="<?= e(page_url('assets/app.js')) ?>" defer></script>
</body>
</html>
