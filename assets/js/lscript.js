const registerButton = document.getElementById('signUp');
const loginButton = document.getElementById('signIn');
const container = document.getElementById('container');

// Desktop buttons
registerButton.addEventListener('click', () => {
    container.classList.add('active');
});

loginButton.addEventListener('click', () => {
    container.classList.remove('active');
});

// Mobile text links
const mobileSignUp = document.getElementById('mobileSignUp');
const mobileSignIn = document.getElementById('mobileSignIn');

if (mobileSignUp) {
    mobileSignUp.addEventListener('click', (e) => {
        e.preventDefault();
        container.classList.add('active');
    });
}

if (mobileSignIn) {
    mobileSignIn.addEventListener('click', (e) => {
        e.preventDefault();
        container.classList.remove('active');
    });
}