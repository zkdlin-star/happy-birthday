var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3, // Tiga slide terlihat: satu di tengah, dua di samping
    spaceBetween: 30, // Jarak antar slide
    loop: true, // Looping tanpa henti
    centeredSlides: true, // Slide di tengah
    grabCursor: true, // Cursor berubah jadi "tangan"
    autoplay: {
      delay: 3000, // Auto-slide tiap 3 detik
      disableOnInteraction: false, // Autoplay tidak berhenti walau ada interaksi
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true, // Pagination bisa diklik
    },
    breakpoints: {
      640: {
        slidesPerView: 1, // Pada layar kecil, hanya 1 slide yang terlihat
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3, // Pada layar lebih besar, 3 slide terlihat
        spaceBetween: 30,
      }
    }
  });


  