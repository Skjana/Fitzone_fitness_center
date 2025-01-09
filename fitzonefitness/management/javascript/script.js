// login register panel 
function showLogin() {
    document.getElementById('loginForm').style.display = 'block';
    document.getElementById('registerForm').style.display = 'none';
    document.getElementById('forgotPasswordForm').style.display = 'none';
    document.getElementById('otpForm').style.display = 'none';
    document.getElementById('changePasswordForm').style.display = 'none';
}

function showRegister() {
    document.getElementById('loginForm').style.display = 'none';
    document.getElementById('registerForm').style.display = 'block';
    document.getElementById('forgotPasswordForm').style.display = 'none';
}

function showForgotPassword() {
    document.getElementById('loginForm').style.display = 'none';
    document.getElementById('registerForm').style.display = 'none';
    document.getElementById('forgotPasswordForm').style.display = 'block';
}

// error message popup
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

// dashboard dropdown action
document.getElementById('profileDropdownTrigger').addEventListener('click', function() {
    const dropdown = document.getElementById('profileDropdown');
    dropdown.classList.toggle('show');
});

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('profileDropdown');
    const trigger = document.getElementById('profileDropdownTrigger');
    
    if (!trigger.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.remove('show');
    }
});


document.querySelector('.close-modal').onclick = function() {
    document.getElementById('viewModal').style.display = 'none';
}

window.onclick = function(event) {
    if (event.target == document.getElementById('viewModal')) {
        document.getElementById('viewModal').style.display = 'none';
    }
}