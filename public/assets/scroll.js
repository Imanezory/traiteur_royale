
    const scrollToTopButton = document.getElementById("scrollToTop");
    scrollToTopButton.onclick = function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    };

