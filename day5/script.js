// ================================
// PRAVAH 2026 Countdown Timer
// ================================

const eventDate = new Date("July 10, 2026 08:00:00").getTime();

const timer = setInterval(function () {

    const now = new Date().getTime();

    const distance = eventDate - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));

    const hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) /
        (1000 * 60 * 60)
    );

    const minutes = Math.floor(
        (distance % (1000 * 60 * 60)) /
        (1000 * 60)
    );

    const seconds = Math.floor(
        (distance % (1000 * 60)) /
        1000
    );

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    if (distance < 0) {

        clearInterval(timer);

        document.querySelector(".countdown").innerHTML = `
            <div class="text-center">
                <h2>🎉 PRAVAH 2026 HAS STARTED 🎉</h2>
                <p>Welcome to SKIT's Biggest Tech & Cultural Fest!</p>
            </div>
        `;
    }

}, 1000);


// ================================
// Navbar Background on Scroll
// ================================

window.addEventListener("scroll", function () {

    const navbar = document.querySelector(".custom-nav");

    if (window.scrollY > 50) {

        navbar.style.background = "#ff5ca8";
        navbar.style.boxShadow = "0 5px 15px rgba(0,0,0,0.2)";

    } else {

        navbar.style.background = "rgba(255,255,255,0.15)";
        navbar.style.boxShadow = "none";

    }

});


// ================================
// Smooth Scroll
// ================================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener("click", function (e) {

        e.preventDefault();

        document.querySelector(this.getAttribute("href"))
            .scrollIntoView({
                behavior: "smooth"
            });

    });

});


// ================================
// Feature Card Animation
// ================================

const cards = document.querySelectorAll(".feature-card");

cards.forEach(card => {

    card.addEventListener("mouseenter", () => {

        card.style.transform = "translateY(-10px) scale(1.03)";

    });

    card.addEventListener("mouseleave", () => {

        card.style.transform = "translateY(0px) scale(1)";

    });

});