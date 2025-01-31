<style>
    .main-footer {
        background-color: var(--surface-dark);
        padding: 4rem 0 2rem;
        margin-top: auto;
        border-top: 1px solid rgba(187, 134, 252, 0.1);
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 3rem;
    }

    .footer-section h4 {
        color: var(--primary-accent);
        margin-bottom: 1.5rem;
        font-size: 1.2rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
    }

    .footer-links li {
        margin-bottom: 0.8rem;
    }

    .footer-links a {
        color: var(--text-primary);
        text-decoration: none;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .footer-links a:hover {
        color: var(--primary-accent);
        transform: translateX(5px);
    }

    .social-links {
        display: flex;
        gap: 1rem;
        margin-top: 1.5rem;
    }

    .social-links a {
        color: var(--text-primary);
        font-size: 1.5rem;
        transition: all 0.3s ease;
    }

    .social-links a:hover {
        color: var(--primary-accent);
        transform: translateY(-3px);
    }

    .footer-bottom {
        text-align: center;
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .footer-bottom p {
        color: #a0a0a0;
        font-size: 0.9rem;
        margin: 0;
    }

    .contact-info {
        color: #a0a0a0;
        line-height: 1.6;
    }

    .partner-logo {
        max-width: 150px;
        height: auto;
        margin-top: 1rem;
        transition: transform 0.3s ease;
    }

    .partner-logo:hover {
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .footer-container {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .footer-links a {
            justify-content: center;
        }

        .social-links {
            justify-content: center;
        }

        .partner-logo {
            margin: 1rem auto;
        }
    }
</style>

<footer class="main-footer">
    <div class="footer-container">
        <div class="footer-section">
            <h4>Cheater.tr</h4>
            <p class="contact-info">
                Türkiye'nin en güvenilir oyun çözümleri platformu. 2024'ten beri hizmetinizdeyiz.
            </p>
            <div class="social-links">
                <a href="#" target="_blank"><i class="fab fa-discord"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-github"></i></a>
            </div>
        </div>

        <div class="footer-section">
            <h4>Hızlı Bağlantılar</h4>
            <ul class="footer-links">
                <li><a href="#"><i class="fas fa-chevron-right"></i>Hakkımızda</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i>SSS</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i>Kullanım Koşulları</a></li>
                <li><a href="#"><i class="fas fa-chevron-right"></i>Gizlilik Politikası</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>İletişim</h4>
            <div class="contact-info">
                <p><i class="fas fa-envelope"></i> info@cheater.tr</p>
                <p><i class="fas fa-headset"></i> 7/24 Destek Hattı</p>
                <p><i class="fas fa-map-marker-alt"></i> Mardin, Türkiye</p>
            </div>
        </div>
        <div class="footer-section">
            <h4>Partner</h4>
            <a href="https://cheatglobal.com" target="_blank">
                <img src="https://cheatglobal.com/styles/xenfocus/cheatglobal-logo.png" alt="CheatGlobal Logo" class="partner-logo">
            </a>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2025 Cheater.tr. Tüm hakları saklıdır. | Version 1.1.0</p>
    </div>
</footer>