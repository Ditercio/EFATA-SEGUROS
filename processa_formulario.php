document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        event.preventDefault();
        
        const formData = new FormData(this);
        
        fetch("https://formspree.io/f/ditercio@gmail.com", {
            method: "POST",
            body: formData,
            headers: {
                'Accept': 'application/json'
            }
        })
        .then(response => {
            if (response.ok) {
                window.location.href = "thankyou.html";
            } else {
                alert("Erro ao enviar o formulário. Tente novamente.");
            }
        })
        .catch(error => {
            alert("Ocorreu um erro. Verifique sua conexão e tente novamente.");
        });
    });
});