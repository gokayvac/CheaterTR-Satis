<style>
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 1000;
        backdrop-filter: blur(5px);
    }

    .popup-content {
        background: var(--surface-dark);
        padding: 2rem;
        border-radius: 15px;
        max-width: 500px;
        width: 90%;
        position: relative;
        transform: translateY(-50px);
        opacity: 0;
        animation: popupEnter 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
        border: 1px solid rgba(187, 134, 252, 0.3);
        box-shadow: 0 0 30px rgba(187, 134, 252, 0.2);
    }

    @keyframes popupEnter {
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .popup-close {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: none;
        border: none;
        color: var(--text-primary);
        font-size: 1.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .popup-close:hover {
        color: var(--primary-accent);
        transform: rotate(90deg);
    }

    .popup-title {
        color: var(--primary-accent);
        font-size: 1.5rem;
        margin-bottom: 1rem;
        text-align: center;
    }

    .popup-text {
        color: #a0a0a0;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .popup-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
    }

    .popup-button {
        padding: 0.8rem 1.5rem;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 500;
    }

    .popup-primary {
        background: linear-gradient(135deg, var(--primary-accent), #9b6bfc);
        color: white;
    }

    .popup-secondary {
        background: rgba(255, 255, 255, 0.1);
        color: var(--text-primary);
    }
</style>

<div class="popup-overlay" id="announcementPopup">
    <div class="popup-content">
        <button class="popup-close" id="closePopup">&times;</button>
        <h3 class="popup-title">🚀 Önemli Duyuru!</h3>
        <p class="popup-text">
            Yeni güncellemelerle daha iyi bir deneyim sunuyoruz!<br>
            • Yeni Valorant hileleri eklendi<br>
            • Sistem optimizasyonları yapıldı<br>
            %30 açılış indirimi kod: CHEATER30
        </p>
        <div class="popup-buttons">
            <button class="popup-button popup-primary">Kampanyaları Gör</button>
            <button class="popup-button popup-secondary">Daha Sonra</button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const popup = document.getElementById('announcementPopup');
        const closeBtn = document.getElementById('closePopup');

        setTimeout(() => {
            popup.style.display = 'flex';
        }, 1000);

        closeBtn.addEventListener('click', closePopup);
        popup.addEventListener('click', function(e) {
            if(e.target === this) closePopup();
        });

        function closePopup() {
            popup.style.animation = 'popupExit 0.3s ease forwards';
            setTimeout(() => {
                popup.style.display = 'none';
            }, 300);
        }
    });

    const style = document.createElement('style');
    style.textContent = `
        @keyframes popupExit {
            from { opacity: 1; }
            to { opacity: 0; transform: translateY(50px); }
        }
    `;
    document.head.appendChild(style);
</script>