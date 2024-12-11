setTimeout(function() {
    const alertElement = document.getElementById('alerte-message');
    if (alertElement) {
        alertElement.style.display="none"
        setTimeout(() => alertElement.remove(), 300);
    }
}, 6000);