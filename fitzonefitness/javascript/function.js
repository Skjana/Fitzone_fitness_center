
const mainContent = document.querySelector('body > *:not(#login-overlay)'); // Changed selector to target all body content
const joinNowBtn = document.getElementById('join-now-btn');
const loginOverlay = document.getElementById('login-overlay');
const loginClose = document.getElementById('login-close');
const switchToSignup = document.getElementById('switch-to-signup');
const switchToLogin = document.getElementById('switch-to-login');
const loginContainer = document.querySelector('.login-container');

joinNowBtn.addEventListener('click', () => {
    document.querySelectorAll('body > *:not(#login-overlay)').forEach(element => {
        element.classList.add('blurred-background');
    });
    
    loginOverlay.style.display = 'flex';
    setTimeout(() => {
        loginOverlay.classList.add('show');
        loginContainer.classList.add('show-signup');
    }, 10);
});

loginClose.addEventListener('click', () => {
    loginOverlay.classList.remove('show');
    document.querySelectorAll('body > *:not(#login-overlay)').forEach(element => {
        element.classList.remove('blurred-background');
    });
    
    setTimeout(() => {
        loginOverlay.style.display = 'none';
        loginContainer.classList.remove('show-login');
        loginContainer.classList.remove('show-signup');
    }, 400);
});

switchToSignup.addEventListener('click', (e) => {
    e.preventDefault();
    loginContainer.classList.remove('show-login');
    loginContainer.classList.add('show-signup');
});

switchToLogin.addEventListener('click', (e) => {
    e.preventDefault();
    loginContainer.classList.remove('show-signup');
    loginContainer.classList.add('show-login');
});

loginOverlay.addEventListener('click', (e) => {
    if (e.target === loginOverlay) {
        loginClose.click();
    }
});

// error message
document.addEventListener('DOMContentLoaded', function() {
    const message = document.querySelector('.message');
    if (message) {
        setTimeout(() => {
            message.style.opacity = '0';
            message.style.transform = 'translate(-50%, -20px)';
            setTimeout(() => {
                message.remove();
            }, 300);
        }, 5000);
    }
});


// TYPING TEXT EFFECT
const texts = ["YOUR LIFE", "YOUR FITNESS"];
let count = 0;
let index = 0;
let currentText = "";
let letter = "";

(function type() {
if (count === texts.length) {
    count = 0;
}
currentText = texts[count];
letter = currentText.slice(0, ++index);

document.getElementById("dynamic-text").textContent = letter;
if (letter.length === currentText.length) {
    count++;
    index = 0;
    setTimeout(type, 1500); 
} else {
    setTimeout(type, 100);
}
})();