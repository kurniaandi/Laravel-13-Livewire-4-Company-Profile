// resources/js/landing.js

function initScrollAnimations() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, index * 80);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    // Elemen dengan class animate-on-scroll yang belum visible
    document.querySelectorAll('.animate-on-scroll:not(.visible)').forEach(el => {
        observer.observe(el);
    });

    // Staggered children yang belum diproses
    document.querySelectorAll('.stagger-children').forEach(parent => {
        if (parent.dataset.staggered) return; // skip kalau sudah diproses
        parent.dataset.staggered = true;

        Array.from(parent.children).forEach((child, i) => {
            child.style.transitionDelay = `${i * 100}ms`;
            child.classList.add('animate-on-scroll');
            observer.observe(child);
        });
    });
}

// Inisialisasi pertama saat DOM siap
document.addEventListener('DOMContentLoaded', initScrollAnimations);

// Re-inisialisasi setiap kali Livewire update DOM
document.addEventListener('livewire:navigated', initScrollAnimations);
document.addEventListener('livewire:update', initScrollAnimations);