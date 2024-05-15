const confirmPass = (event) => {
    // event.preventDefault();
    let pass = document.getElementById('password').value;
    let confirmPass = document.getElementById('confirmPassword').value;
    if (pass !== confirmPass) {
        event.preventDefault();
        document.querySelector('.error').style.display = 'block';
        console.log("Passwords do not match")
    }
    return true;
}

document.querySelector('form').addEventListener('submit', (e) => confirmPass(e));